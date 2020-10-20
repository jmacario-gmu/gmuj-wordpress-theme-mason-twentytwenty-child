<?php

/**
 * Summary: php file which provides for the display of website 'breadcrumbs'
 */

// Function to output breadcrumbs
// Adapted from: https://www.thewebtaylor.com/articles/wordpress-creating-breadcrumbs-without-a-plugin
function gmuj_display_breadcrumbs(){

  // Get global variables
  global $post, $wp_query;

  // Set basic settings
  $separator          = '/';
  $breadcrumbs_class   = 'breadcrumbs';
  $home_title         = 'Home';

  // If this post/page is not the homepage...
  if (!is_front_page()) {

    // If this post/page is a page...
    if (is_page()) {

      // Start breadcrumbs output
      echo '<ul class="' . $breadcrumbs_class . '">';

      // Display home page link
      echo '<li class="item-home">';
      echo '<a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a>';
      echo '</li>';

      // Display first separator (after home link)
      echo '<li class="separator separator-home"> ' . $separator . ' </li>';

      // If post has a parent
      if( $post->post_parent ){

        // If child page, get ancestors 
        $anc = get_post_ancestors( $post->ID );

        // Reverse array to put ancestors in the right order
        $anc = array_reverse($anc);

        // Parent page loop
        if ( !isset( $parents ) ) $parents = null;

        // Loop through ancestors
        foreach ( $anc as $ancestor ) {

          // Generate ancestor breadcrumbs HTML
          $parents .= '<li class="item-parent item-parent-' . $ancestor . '">';
          $parents .= '<a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a>';
          $parents .= '</li>';
          $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';

        }

        // Output ancestor breadcrumbs HTML
        echo $parents;

        // Output current page
        echo '<li class="item-current item-' . $post->ID . '">';
        echo get_the_title();
        echo '</li>';

      } else {

        // If no parent, just display current page
        echo '<li class="item-current item-' . $post->ID . '">';
        echo '<span class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</span>';
        echo '</li>';

      }

    }

    // Finish breadcrumbs output
    echo '</ul>';
  }

}