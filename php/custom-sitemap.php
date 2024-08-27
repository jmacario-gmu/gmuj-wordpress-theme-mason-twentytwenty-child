<?php
/**
 * Summary: php file which handles sitemap configuration
 */


/**
 * Summary: Disables users sitemap
 */
function gmuj_disable_sitemap_users($provider, $name) {
	return ($name == 'users') ? false : $provider;
}
add_filter('wp_sitemaps_add_provider', 'gmuj_disable_sitemap_users', 10, 2);

// remove mailpoet pages from sitemap
add_filter( 'wp_sitemaps_post_types', 'gmuw_sitemap_remove_mailpoet' );
function gmuw_sitemap_remove_mailpoet($post_types) {

	unset($post_types['mailpoet_page']);

	return $post_types;

}
