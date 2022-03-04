<?php

/**
 * Summary: php file which implements the js scripts
 */


/**
 * Enqueue javascript
 */
add_action('wp_enqueue_scripts','gmuj_enqueue_scripts');
function gmuj_enqueue_scripts() {

  // Enqueue swiping jquery library
  wp_enqueue_script(
    'gmuj_script_swipe', //script name
    get_theme_file_uri('/js/jquery.touchSwipe.js') //path to script
  );

  // Enqueue slideshow javascript
  wp_enqueue_script(
    'gmuj_script_slideshow', //script name
    get_theme_file_uri('/js/slideshow.js') //path to script
  );

  // Enqueue the slideshow initiation javascript
  wp_enqueue_script(
    'gmuj_script_slideshow_init', //script name
    get_theme_file_uri('/js/slideshow-init.js') //path to script
  );

}
