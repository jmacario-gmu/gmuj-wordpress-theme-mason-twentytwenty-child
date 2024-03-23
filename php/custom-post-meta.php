<?php

/**
 * Summary: php file which implements the display of the custom post meta settings
 */


//if the theme customizer is not set to show the post categories section, then hide it by default
if (get_theme_mod('gmuj_show_post_categories')!=1) {

	add_filter( 'twentytwenty_show_categories_in_entry_header', '__return_false');

}

//if the theme customizer is not set to show the post meta section, then hide it by default
if (get_theme_mod('gmuj_show_post_meta')!=1) {

	 add_filter('twentytwenty_disallowed_post_types_for_meta_output','gmuwptheme_hide_author_and_date');
	 function gmuwptheme_hide_author_and_date($disallowed_post_types){
	 	$disallowed_post_types[]='post';
	 	return $disallowed_post_types;
	 }

}








