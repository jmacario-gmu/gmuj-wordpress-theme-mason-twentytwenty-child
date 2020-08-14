<?php
/**
 * php file which handles customizations related to the 'read more' links
 */


/**
 * Replace the default excerpt ending indicator on post excerpts, which is not a link by default, with a version which acts as a 'read more' link.
 */
add_filter( 'get_the_excerpt', 'gmuj_get_the_excerpt_filter' );
function gmuj_get_the_excerpt_filter($content) {

	// The default is excerpt ending indicator in the content is [&hellip;] which renders as [...]. We will use a regex replace to replace that string (only when it is the end of the content) with the version from our gmuj_read_more_link() function.
	$content = preg_replace ('/\[&hellip;\]$/', gmuj_read_more_link() , $content);
 
    // Returns the content.
    return $content;

}

/**
 * Provides content for the 'read more' link.
 */
function gmuj_read_more_link() {

	// Return HTML content for 'read more' link
	return '<a class="gmuj-read-more-link" title="Read More" href="'. esc_url( get_permalink() ) . '">[&hellip;]</a>';

}
