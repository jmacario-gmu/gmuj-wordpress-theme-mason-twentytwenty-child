<?php

/**
 * Summary: functions.php file for the gmuj-mason-wordpress-theme-twentytwenty-child
 */

// Include custom functions
require(get_stylesheet_directory(). '/php/custom-functions.php');

// Include custom menus
require(get_stylesheet_directory(). '/php/custom-menus.php');

// Include custom color scheme
require(get_stylesheet_directory(). '/php/custom-color.php');

//Include theme customizer customizations
require(get_stylesheet_directory(). '/php/custom-customizer.php');

//Enqueue styles
add_action( 'wp_enqueue_scripts', 'gmuj_enqueue_styles' );
function gmuj_enqueue_styles() {
 
 	// Name the parent theme stylesheet
    $parent_style = 'twentytwenty-style';
 
 	// Enqueue the parent theme stylesheet
    wp_enqueue_style(
    	$parent_style, //stylesheet name
    	get_template_directory_uri() . '/style.css' //path to parent (template) theme stylesheet
    );

    // Enqueue the general child theme stylesheet
    wp_enqueue_style(
    	'child-style', //stylesheet name
        get_stylesheet_directory_uri() . '/style.css', //path to child (this) theme stylesheet
        array( $parent_style ), //dependencies (child theme stylesheet is dependent on parent stylesheet)
        wp_get_theme()->get('Version') //add child theme version
    );

}
