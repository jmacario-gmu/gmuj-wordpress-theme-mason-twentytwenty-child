<?php
/**
 * php file which handles customizations related to Twitter/X
 */


/**
 * Fix Twitter/X logo to replace old Twitter logo with new X logo
 *
 * based on twentytwenty_nav_menu_social_icons function from Twenty Twenty theme
 * 
 */
function gmuw_twentytwenty_nav_menu_social_icons( $item_output, $item, $depth, $args ) {
  
  // Replace old Twitter logo with new X logo

  // are we in one of the social menu locations?
  if ( ('social' === $args->theme_location) || ('footer-social' === $args->theme_location) ) {

    // does the item url contain twitter.com?
    if ( str_contains($item->url, 'twitter.com') ) {

      //set desired svg dimensions based on menu location
      if ($args->theme_location==='social') {
        $svg_width='24px';
        $svg_height='24px';
      }
      if ($args->theme_location==='footer-social') {
        $svg_width='50px';
        $svg_height='50px';
      }

      // new X logo svg
      $svg = '<svg style="" width="'.$svg_width.'" height="'.$svg_height.'" viewBox="0 0 50 50"><path d="M 5.9199219 6 L 20.582031 27.375 L 6.2304688 44 L 9.4101562 44 L 21.986328 29.421875 L 31.986328 44 L 44 44 L 28.681641 21.669922 L 42.199219 6 L 39.029297 6 L 27.275391 19.617188 L 17.933594 6 L 5.9199219 6 z M 9.7167969 8 L 16.880859 8 L 40.203125 42 L 33.039062 42 L 9.7167969 8 z"/></svg>';
      
      // remove old svg
      // for some reason, if I try to remove the old svg tag via preg_replace, it removes the entire contents of the menu item. So instead we're just hiding it using css
      $item_output = preg_replace('/<svg/', '<svg style="display:none;"', $item_output);

      // add new svg logo
      $item_output = str_replace( $args->link_after, '</span>' . $svg, $item_output );

    }

  }

  return $item_output;
}

add_filter( 'walker_nav_menu_start_el', 'gmuw_twentytwenty_nav_menu_social_icons', 11, 4 );
