<?php
/**
 * php file which handles custom menus specific to this child theme.
 */


/**
 * Unregisters parent theme menus.
 * We use a priority of 11 to make sure this function fires after the parent theme function adding these menus has already fired. It is at a default priority of 10.
 */
add_action('init', 'gmuj_deregister_parent_theme_menus',11);
function gmuj_deregister_parent_theme_menus(){

    // Deregister parent theme custom menu locations
        // Desktop expanded menu
        unregister_nav_menu('expanded');

}


/**
 * Registers child theme custom menus
 */
add_action('after_setup_theme', 'gmuj_register_menus');
function gmuj_register_menus(){

    // Register custom menus
    register_nav_menus(array(
        'university' => 'University Menu',
        'prominent' => 'Prominent Links Menu',
        'footer' => 'Footer Menu',
        'footer-social' => 'Footer Social Menu'
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

/**
 * Associates correct icons with the social links automatically for the "footer social" menu location. This is necessary because the base Twentytwenty theme only supports this for the "social" menu location.
 */
add_filter( 'walker_nav_menu_start_el', 'mason_theme_nav_menu_social_icons', 10, 4 );
function mason_theme_nav_menu_social_icons( $item_output, $item, $depth, $args ) {
    // Change SVG icon inside social links menu if there is supported URL.
    if ( 'footer-social' === $args->theme_location ) {
        $svg = TwentyTwenty_SVG_Icons::get_social_link_svg( $item->url );
        if ( empty( $svg ) ) {
            $svg = twentytwenty_get_theme_svg( 'link' );
        }
        $item_output = str_replace( $args->link_after, '</span>' . $svg, $item_output );
    }

    return $item_output;
    
}
