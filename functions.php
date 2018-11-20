<?php
/**
 * @license GPL 2.0+
 */

function omniana_add_styles() {
  if ( is_front_page() ) {
    $src = get_stylesheet_directory_uri() . '/omniana-cover.css';
    wp_register_style(
      'omniana_cover',
      $src,
      null,
      null,
      'screen' // CSS media type
    );
    wp_enqueue_style(
      'omniana_cover',
       $src,
       null,
       null,
       'screen'
    );
  }
}

function omniana2_theme_setup() {
	// Add theme support for special features here.
  add_action('wp_enqueue_scripts', 'omniana_add_styles');
}
add_action( 'after_setup_theme', 'omniana2_theme_setup' );
