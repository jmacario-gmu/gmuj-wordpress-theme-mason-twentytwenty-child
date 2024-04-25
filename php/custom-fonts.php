<?php


// Implement custom google fonts
add_action( 'wp_enqueue_scripts', 'gmuj_theme_custom_fonts' );
function gmuj_theme_custom_fonts() {
  wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700|Figtree:300,600,700,300italic,600italic,700italic' );
}



