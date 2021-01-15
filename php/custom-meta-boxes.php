<?php
/**
 * Summary: php file which handles custom meta box support
 */


// Include the meta box script

	// Re-define meta box path and URL
		define( 'RWMB_URL', trailingslashit(get_stylesheet_directory_uri() . '/php/meta-boxes'));
		define( 'RWMB_DIR', trailingslashit(get_stylesheet_directory() . '/php/meta-boxes'));

	// Include the meta box script
		require_once RWMB_DIR . 'meta-box.php';
