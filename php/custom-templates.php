<?php
/**
 * php file which handles customizations related to theme templates
 */

/**
 * Remove unwanted page template options
 */
add_filter('theme_page_templates','gmuj_remove_page_templates');
function gmuj_remove_page_templates($templates) {
    
    // Remove cover template option
    unset( $templates['templates/template-cover.php'] );

    // Return value
    return $templates;
    
}
