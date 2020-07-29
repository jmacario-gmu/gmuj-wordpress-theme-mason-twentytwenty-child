<?php
/**
 * php file which handles the loading of styles for this child theme
 */

/**
 * Enqueue styles for this theme
 */
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

/**
 * Dequeue some parent theme styles
 *
 * Hooked to the admin_enqueue_scripts action, with a late priority (100),
 * so that it runs after the parent style was enqueued.
 */
function gmuj_dequeue_parent_theme_styles() {

    // Dequeue the stylesheet
    wp_dequeue_style('twentytwenty-block-editor-styles');
    // Deregister the stylesheet
    wp_deregister_style('twentytwenty-block-editor-styles');

}
add_action('admin_enqueue_scripts','gmuj_dequeue_parent_theme_styles', 100);
