<?php
/**
 * GNN - Agency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

if ( ! function_exists( 'gnn_agency_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   */
  function gnn_agency_setup() {
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Register primary navigation menu.
    register_nav_menus(
      array(
        'primary' => esc_html__( 'Primary Menu', 'gnn-agency' ),
      )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
      )
    );

    // Add support for core custom logo.
    add_theme_support(
      'custom-logo',
      array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
  }
endif;
add_action( 'after_setup_theme', 'gnn_agency_setup' );

/**
 * Register widget area.
 */
function gnn_agency_widgets_init() {
  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar', 'gnn-agency' ),
      'id'            => 'primary-sidebar',
      'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'gnn-agency' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s p-5 bg-slate-900 rounded-xl border border-slate-800 mb-6">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4 class="text-base font-bold text-teal-400 uppercase tracking-wider pb-2 border-b border-slate-800 mb-4">',
      'after_title'   => '</h4>',
    )
  );
}
add_action( 'widgets_init', 'gnn_agency_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gnn_agency_scripts() {
  // Theme stylesheet containing mandatory WP headers
  wp_enqueue_style( 'theme-main-style', get_stylesheet_uri(), array(), '1.0.0' );
  wp_enqueue_style( 'theme-style-0', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap', array(), null );
  wp_enqueue_style( 'theme-style-1', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=block', array(), null );
  wp_enqueue_style( 'theme-style-2', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null );

  // Load compiled Tailwind CSS if exists, otherwise fallback to Play CDN
  if ( file_exists( get_template_directory() . '/assets/css/tailwind.css' ) ) {
    wp_enqueue_style( 'theme-tailwind-style', get_template_directory_uri() . '/assets/css/tailwind.css', array(), '1.0.0' );
  } else {
    wp_enqueue_script( 'theme-script-tailwind-cdn', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null, true );
  }

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  // Load custom Javascript file
  wp_enqueue_script( 'theme-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'gnn_agency_scripts' );

/**
 * Load GitHub Theme Updater
 */
require get_template_directory() . '/inc/github-updater.php';
