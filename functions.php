<?php
add_action( 'wp_enqueue_scripts', function () {
  wp_enqueue_style( 'eco-style', get_stylesheet_uri(),
    array(), wp_get_theme()->get( 'Version' ) );
  wp_enqueue_script( 'eco-main',
    get_stylesheet_directory_uri() .'/assets/js/main.js',
    array(), wp_get_theme()->get( 'Version' ),
    array( 'strategy' => 'defer' ) );
} );