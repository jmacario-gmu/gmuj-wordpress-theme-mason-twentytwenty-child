<?php

/**
 * Summary: php file which implements the display of the custom color scheme specified in the theme customizer
 */

// Enqueue appropriate color stylesheet, depending on the color theme selected in the theme customizer 
add_action( 'wp_enqueue_scripts', 'enqueue_color_scheme_styles' );

function enqueue_color_scheme_styles(){

  // Choose appropriate stylesheet based on the value selected in the theme customizer
  switch(get_theme_mod('gmuj_theme_color')) {
    case 1:
      wp_enqueue_style('gmuj_style_color_1',get_stylesheet_directory_uri().'/css/color-scheme-1.css');
      break;
    case 2:
      wp_enqueue_style('gmuj_style_color_2',get_stylesheet_directory_uri().'/css/color-scheme-2.css');
      break;
    case 3:
      wp_enqueue_style('gmuj_style_color_3',get_stylesheet_directory_uri().'/css/color-scheme-3.css');
      break;
    case 4:
      wp_enqueue_style('gmuj_style_color_4',get_stylesheet_directory_uri().'/css/color-scheme-4.css');
      break;
    default:
      // Default to color scheme 1
      wp_enqueue_style('gmuj_style_color_1',get_stylesheet_directory_uri().'/css/color-scheme-1.css');
  } 

}