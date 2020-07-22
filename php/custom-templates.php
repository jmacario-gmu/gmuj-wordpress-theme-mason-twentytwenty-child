<?php
/**
 * php file which handles customizations related to theme templates
 */

/**
 * Remove unwanted page and post template options
 *
 * We have to use two filters - for both pages and posts - as WordPress treats these differently. Reference: https://wordpress.org/support/topic/remove-page-templates-in-child-theme/
 */
add_filter('theme_page_templates','gmuj_remove_parent_theme_templates');
add_filter('theme_post_templates','gmuj_remove_parent_theme_templates');
function gmuj_remove_parent_theme_templates($templates) {
    
    // Remove cover template option
    unset( $templates['templates/template-cover.php'] );

    // Return value
    return $templates;
    
}
