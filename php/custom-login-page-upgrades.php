<?php

/**
 * php file to handle the 'login page upgrades' feature
 */


/**
 * Enqueue custom login page stylesheet on Wordpress login page.
 */
add_action('login_enqueue_scripts', 'gmuj_login_stylesheet' );
function gmuj_login_stylesheet() {

	// Enqueue login page stylesheet
		wp_enqueue_style('gmuj-custom-login-stylesheet', get_stylesheet_directory_uri() . '/css/login-page.css');

}


// Implement content modifications to login page

/**
 * Provides an appropriate alternate Mason URL for the login header.
 * 
 * Rather than linking to wordpress.org, the login header will link to the Mason core website.
 */
add_filter('login_headerurl', 'mhtp_login_header_url');
function mhtp_login_header_url() {

	// Return appropriate URL for login header link
		return 'https://www2.gmu.edu';

}

/**
 * Provides a custom login message.
 */
add_filter( 'login_message', 'gmuj_custom_login_message' );
function gmuj_custom_login_message() {

	// Return appropriate login message
		return 'George Mason University WordPress';

}


// Implement functional modifications to login process

/**
 * Modifies the default login error messages to returns a less-detailed error message for login problems.
 */
add_filter('login_errors', 'gmuj_login_error_message' );
function gmuj_login_error_message() {

	// Return appropriate login error message
  		return 'Login information incorrect.';

}
