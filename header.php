<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class('bg-slate-900 text-slate-100 font-sans antialiased'); ?>>
  <?php wp_body_open(); ?>
  
  <!-- Responsive Header / Navigation -->
  <nav class="fixed top-0 w-full z-50 border-b border-outline-variant/20 dark:border-outline/20 transition-all duration-300 bg-surface-container-lowest">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'container'      => false,
                  'menu_class'     => 'flex flex-col md:flex-row md:space-x-8 text-sm font-medium',
                  'fallback_cb'    => 'wp_page_menu',
                  'depth'          => 2,
                ) );
              ?>
            </nav>
