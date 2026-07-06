<?php
/**
 * GitHub Theme Updater
 *
 * @package GNN - Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class GNN_Agency_Github_Updater {

	private $theme_slug;
	private $repo;
	private $github_api_url;

	public function __construct() {
		$this->theme_slug = 'gnn-agency';
		$this->repo       = 'BigDesigner/gnn-agency';
		$this->github_api_url = 'https://api.github.com/repos/' . $this->repo . '/releases/latest';

		// Hook into transient check for theme updates.
		add_filter( 'pre_set_site_transient_update_themes', array( $this, 'check_for_updates' ) );

		// Hook to rename the folder back to gnn-agency after update installation.
		add_filter( 'upgrader_post_install', array( $this, 'post_install' ), 10, 3 );
	}

	/**
	 * Check for updates against GitHub Releases API.
	 */
	public function check_for_updates( $transient ) {
		if ( empty( $transient->checked ) ) {
			return $transient;
		}

		// Get current theme details
		$theme         = wp_get_theme( $this->theme_slug );
		$local_version = $theme->get( 'Version' );

		// Query GitHub API
		$args = array(
			'timeout' => 10,
			'headers' => array(
				'Accept'     => 'application/vnd.github.v3+json',
				'User-Agent' => 'WordPress/' . get_bloginfo( 'version' ) . '; GNN-Agency/' . $local_version,
			),
		);

		$response = wp_remote_get( $this->github_api_url, $args );

		if ( is_wp_error( $response ) || wp_remote_retrieve_response_code( $response ) !== 200 ) {
			return $transient;
		}

		$data = json_decode( wp_remote_retrieve_body( $response ) );

		if ( empty( $data ) || empty( $data->tag_name ) ) {
			return $transient;
		}

		// Strip optional 'v' prefix from GitHub release version string (e.g. "v1.0.1" -> "1.0.1")
		$remote_version = ltrim( $data->tag_name, 'v' );

		// If remote version is newer, push to response transient
		if ( version_compare( $remote_version, $local_version, '>' ) ) {
			// Find zipball or custom release zip asset
			$download_url = '';
			if ( ! empty( $data->assets ) ) {
				foreach ( $data->assets as $asset ) {
					if ( strpos( $asset->name, '.zip' ) !== false ) {
						$download_url = $asset->browser_download_url;
						break;
					}
				}
			}

			// Fallback to zipball (source code download) if no release zip asset is found
			if ( empty( $download_url ) && ! empty( $data->zipball_url ) ) {
				$download_url = $data->zipball_url;
			}

			if ( ! empty( $download_url ) ) {
				$update_info = array(
					'theme'       => $this->theme_slug,
					'new_version' => $remote_version,
					'url'         => 'https://github.com/' . $this->repo,
					'package'     => $download_url,
				);

				$transient->response[ $this->theme_slug ] = $update_info;
			}
		}

		return $transient;
	}

	/**
	 * Rename folder after installation to avoid version suffix.
	 */
	public function post_install( $response, $hook_extra, $result ) {
		// Only run for our theme
		if ( empty( $hook_extra['theme'] ) || $hook_extra['theme'] !== $this->theme_slug ) {
			return $response;
		}

		global $wp_filesystem;

		$destination = trailingslashit( $result['destination'] );
		$proper_destination = trailingslashit( $result['remote_destination'] ) . $this->theme_slug;

		// If destination directory matches theme slug name already, do nothing
		if ( rtrim( $destination, '/' ) === rtrim( $proper_destination, '/' ) ) {
			return $response;
		}

		// Move directories
		if ( $wp_filesystem->exists( $proper_destination ) ) {
			$wp_filesystem->delete( $proper_destination, true );
		}

		$wp_filesystem->move( $destination, $proper_destination );
		$result['destination'] = $proper_destination;

		return $result;
	}
}

new GNN_Agency_Github_Updater();
