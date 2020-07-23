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

/**
 * Rename default template
 *
 * The parent theme's default template is quite narrow. We rename it in the WordPress admin section so that the template name is more descriptive.
 */
add_filter('default_page_template_title','gmuj_rename_default_template',10,2);
function gmuj_rename_default_template($label, $context) {

	// Rename default template to narrow template for clarity
	return 'Narrow Template';

}
