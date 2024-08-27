<?php
/**
 * Summary: php file which handles sitemap configuration
 */


// disable users sitemap
add_filter('wp_sitemaps_add_provider', 'gmuj_disable_sitemap_users', 10, 2);
function gmuj_disable_sitemap_users($provider, $name) {

	return ($name == 'users') ? false : $provider;

}

// remove mailpoet pages from sitemap
add_filter( 'wp_sitemaps_post_types', 'gmuw_sitemap_remove_mailpoet' );
function gmuw_sitemap_remove_mailpoet($post_types) {

	unset($post_types['mailpoet_page']);

	return $post_types;

}
