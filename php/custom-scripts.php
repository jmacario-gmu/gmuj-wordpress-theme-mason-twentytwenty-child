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
  // Depends on jquery; Twenty Twenty does not load jQuery on the front end, so
  // it must be declared as a dependency or every jQuery call below throws.
  wp_enqueue_script(
    'gmuj_script_swipe', //script name
    get_theme_file_uri('/js/jquery.touchSwipe.js'), //path to script
    array('jquery'), //dependencies
    false, //version
    true //load in footer
  );

  // Enqueue slideshow javascript
  wp_enqueue_script(
    'gmuj_script_slideshow', //script name
    get_theme_file_uri('/js/slideshow.js'), //path to script
    array('jquery'), //dependencies
    false, //version
    true //load in footer
  );

  // Enqueue the slideshow initiation javascript
  // Runs jQuery(document).ready and .swipe(), so it needs jquery, the swipe
  // library, and the slideshow functions all loaded first.
  wp_enqueue_script(
    'gmuj_script_slideshow_init', //script name
    get_theme_file_uri('/js/slideshow-init.js'), //path to script
    array('jquery', 'gmuj_script_swipe', 'gmuj_script_slideshow'), //dependencies
    false, //version
    true //load in footer
  );

}
