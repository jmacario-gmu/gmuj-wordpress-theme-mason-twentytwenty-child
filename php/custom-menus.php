<?php
/**
 * php file which handles custom menus specific to this child theme.
 */

/**
 * Registers child theme custom menus
 */
add_action('after_setup_theme', 'gmuj_register_menus');
function gmuj_register_menus(){

    // Register custom menus
    register_nav_menus(array(
        'university' => 'University Menu',
        'prominent' => 'Prominent Links Menu',
        'footer' => 'Footer Menu'
    ));

}

/**
 * Summary: Provides default HTML content for the university links bar menu
 */
function menu_university_links_bar_fallback() {

	//Include HTML content from content file
	include(get_stylesheet_directory(). '/content/menu-university-links-bar-default.html');

}

/**
 * Summary: Provides default HTML content for the footer menu
 */
function menu_footer_fallback() {

	//Include HTML content from content file
	include(get_stylesheet_directory(). '/content/menu-footer-default.html');

}
