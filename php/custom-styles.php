<?php
/**
 * php file which handles the loading of styles for this child theme
 */

/**
 * Enqueue styles for this theme
 */
add_action( 'wp_enqueue_scripts', 'gmuj_enqueue_styles' );
function gmuj_enqueue_styles() {
 
    //enqueue fontawesome
    wp_enqueue_style(
        'gmuw-style-fontawesome',
        get_stylesheet_directory_uri() . '/css/fontawesome-all.min.css',
    );

	// Enqueue the parent theme stylesheet
    wp_enqueue_style(
        'twentytwenty-style',
        get_template_directory_uri() . '/style.css'
    );

    // Enqueue the general child theme stylesheet
    wp_enqueue_style(
        'gmuw-style',
        get_stylesheet_directory_uri() . '/style.css',
        '',
        time()
    );

    //enqueue the child theme stylesheets

    //RSS Blocks
    wp_enqueue_style(
        'gmuw-style-blockrss',
        get_stylesheet_directory_uri() . '/css/block-rss.css',
        '',
        time()
    );

    // General style modifications to parent theme
    wp_enqueue_style(
        'gmuw-style-parentthememods',
        get_stylesheet_directory_uri() . '/css/parent-theme-modifications.css',
        '',
        time()
    );

    // University links bar
    wp_enqueue_style(
        'gmuw-style-universitylinksbar',
        get_stylesheet_directory_uri() . '/css/university-links-bar.css',
        '',
        time()
    );

    // University breadcrumbs bar
    wp_enqueue_style(
        'gmuw-style-universitybreadcrumbsbar',
        get_stylesheet_directory_uri() . '/css/university-breadcrumbs-bar.css',
        '',
        time()
    );

    // Main navigation bar modifications to parent theme
    wp_enqueue_style(
        'gmuw-style-mainnavbar',
        get_stylesheet_directory_uri() . '/css/main-navigation-bar.css',
        '',
        time()
    );

    // Widget areas
    wp_enqueue_style(
        'gmuw-style-widgetareas',
        get_stylesheet_directory_uri() . '/css/widget-areas.css',
        '',
        time()
    );

    // Footer modifications to parent theme
    wp_enqueue_style(
        'gmuw-style-footer',
        get_stylesheet_directory_uri() . '/css/footer.css',
        '',
        time()
    );

    // Collapse-O-Matic styles
    wp_enqueue_style(
        'gmuw-style-collapseomatic',
        get_stylesheet_directory_uri() . '/css/collapse-o-matic.css',
        '',
        time()
    );

    // Breadcrumbs styles
    wp_enqueue_style(
        'gmuw-style-breadcrumbs',
        get_stylesheet_directory_uri() . '/css/breadcrumbs.css',
        '',
        time()
    );

    // Sidebar styles
    wp_enqueue_style(
        'gmuw-style-sidebar',
        get_stylesheet_directory_uri() . '/css/sidebar.css',
        '',
        time()
    );

    // Custom post type: person styles
    wp_enqueue_style(
        'gmuw-style-people',
        get_stylesheet_directory_uri() . '/css/people.css',
        '',
        time()
    );

    // GMUJ Slider styles
    wp_enqueue_style(
        'gmuw-style-slideshow',
        get_stylesheet_directory_uri() . '/css/slideshow.css',
        '',
        time()
    );

    // The Events Calendar styles
    wp_enqueue_style(
        'gmuw-style-eventscalendar',
        get_stylesheet_directory_uri() . '/css/events-calendar.css',
        '',
        time()
    );

    // Details block
    wp_enqueue_style(
        'gmuw-style-details',
        get_stylesheet_directory_uri() . '/css/details.css',
        '',
        time()
    );

    // Prominent Links menu
    wp_enqueue_style(
        'gmuw-style-prominentlinks',
        get_stylesheet_directory_uri() . '/css/prominent-links.css',
        '',
        time()
    );


}

/**
 * Enqueue admin styles for this theme
 */
add_action( 'admin_enqueue_scripts', 'gmuj_enqueue_styles_admin' );
function gmuj_enqueue_styles_admin() {

    // customizer
    wp_enqueue_style(
        'gmuw-style-customizer',
        get_stylesheet_directory_uri() . '/css/customizer.css',
        '',
        time()
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
