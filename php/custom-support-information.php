<?php

/**
 * php file to handle the 'support information' feature
 */


/**
 * Adds meta boxes to WordPress admin dashboard
 * 
 * The meta box content comes from the functions listed in the add_meta_box function calls and are below.
 */
add_action('wp_dashboard_setup', 'gmuj_custom_dashboard_meta_boxes');
function gmuj_custom_dashboard_meta_boxes() {

  // Declare global variables
  global $wp_meta_boxes;

  // Adds custom WordPress dashboard content boxes

   /* Add 'theme support' meta box */
  add_meta_box("gmuj_custom_dashboard_meta_box_theme_support", "Mason WordPress Theme Support", "gmuj_custom_dashboard_meta_box_theme_support", "dashboard","normal");

  /* Add 'Mason resources' meta box */
  add_meta_box("gmuj_custom_dashboard_meta_box_mason_resources", "Mason Resources", "gmuj_custom_dashboard_meta_box_mason_resources", "dashboard","normal");

  // Add 'theme info' meta box
  add_meta_box("gmuj_custom_dashboard_meta_box_theme_info", "Mason WordPress Theme Info", "gmuj_custom_dashboard_meta_box_theme_info", "dashboard","side");

  /* Add 'recommended plugins' meta box */
  add_meta_box("gmuj_custom_dashboard_meta_box_recommended_plugins", "Recommended Plugins", "gmuj_custom_dashboard_meta_box_recommended_plugins", "dashboard","side");

}

/**
 * Provides content for the WordPress 'theme info' meta box
 */
function gmuj_custom_dashboard_meta_box_theme_info()
{

  //Include HTML content from file
  include(get_stylesheet_directory() . '/content/support-information/theme_info.html');

}

/**
 * Provides content for the WordPress 'theme support' meta box
 */
function gmuj_custom_dashboard_meta_box_theme_support() {

  //Include HTML content from file
  include(get_stylesheet_directory() . '/content/support-information/theme_support.html');

}

/**
 * Provides content for the WordPress 'Mason resources' meta box
 */
function gmuj_custom_dashboard_meta_box_mason_resources() {

  //Include HTML content from file
  include(get_stylesheet_directory() . '/content/support-information/mason_resources.html');

}

/**
 * Provides content for the WordPress 'Recommended plugins' meta box
 */
function gmuj_custom_dashboard_meta_box_recommended_plugins() {

  //Include HTML content from file
  include(get_stylesheet_directory() . '/content/support-information/recommended_plugins.html');

}

/**
 * Provides content for the admin dashboard footer message
 */
add_filter('admin_footer_text', 'gmuj_replace_footer_admin');
function gmuj_replace_footer_admin() {

  //Include HTML content from file
  include(get_stylesheet_directory() . '/content/support-information/admin_footer.html');

}