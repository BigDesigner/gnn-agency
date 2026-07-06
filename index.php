<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package GNN - Agency
 */

get_header(); ?>

<main class="pt-[80px]">
  <section class="w-full px-margin-mobile md:px-margin-desktop py-xxl bg-background">
    <div class="max-w-container-max mx-auto">
      <header class="mb-xl pb-md border-b border-outline-variant">
        <h1 class="font-headline-lg text-headline-lg text-primary uppercase">
          <?php
          if ( is_home() && ! is_front_page() ) {
            single_post_title();
          } else {
            esc_html_e( 'Latest Posts', 'gnn-agency' );
          }
          ?>
        </h1>
      </header>

      <?php if ( have_posts() ) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
          <?php
          while ( have_posts() ) :
            the_post();
            ?>
            <article class="flex flex-col bg-surface border border-outline-variant group hover:border-primary transition-colors duration-300">
              <div class="p-lg flex flex-col flex-grow">
                <div class="flex items-center gap-sm mb-sm font-label-md text-label-md text-on-surface-variant">
                  <span><?php echo get_the_date(); ?></span>
                  <span class="w-1 h-1 bg-outline rounded-full"></span>
                  <span><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago' ); ?></span>
                </div>

                <h2 class="font-headline-sm text-headline-sm text-primary mb-sm line-clamp-2 group-hover:text-secondary transition-colors">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>

                <p class="font-body-md text-body-md text-on-surface-variant mb-xl line-clamp-3 flex-grow">
                  <?php echo wp_trim_words( get_the_excerpt(), 25 ); ?>
                </p>

                <a class="font-label-md text-label-md text-primary uppercase tracking-wider hover:text-secondary transition-colors mt-auto inline-flex items-center gap-1 group-hover:translate-x-1" href="<?php the_permalink(); ?>">
                  <?php esc_html_e( 'Read More', 'gnn-agency' ); ?> &rarr;
                </a>
              </div>
            </article>
          <?php
          endwhile;
          ?>
        </div>

        <div class="mt-xl flex justify-center">
          <?php
          the_posts_pagination(
            array(
              'mid_size'  => 2,
              'prev_text' => sprintf( '&larr; %s', esc_html__( 'Previous', 'gnn-agency' ) ),
              'next_text' => sprintf( '%s &rarr;', esc_html__( 'Next', 'gnn-agency' ) ),
              'class'     => 'font-label-md text-label-md text-primary uppercase flex items-center gap-sm',
            )
          );
          ?>
        </div>

      <?php else : ?>
        <div class="text-center py-xxl">
          <h2 class="font-headline-md text-headline-md text-primary mb-md uppercase"><?php esc_html_e( 'No posts found', 'gnn-agency' ); ?></h2>
          <p class="font-body-md text-body-md text-on-surface-variant"><?php esc_html_e( 'It seems we can\'t find what you\'re looking for.', 'gnn-agency' ); ?></p>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
