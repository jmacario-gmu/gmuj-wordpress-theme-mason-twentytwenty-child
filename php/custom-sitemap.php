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
