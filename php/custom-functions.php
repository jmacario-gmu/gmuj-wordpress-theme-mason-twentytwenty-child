<?php


/**
 * Function to return a boolean indicating whether or not a plugin is installed
 */
function gmuj_is_plugin_active($plugin_slug) {

  // Determine whether the plugin file in question (based on the slug) is in the list (array) of active plugins. The first in_array parameter is the relative path within the plugins folder to the main theme php file.
  if (
    in_array(
      $plugin_slug,
      apply_filters(
        'active_plugins',
        get_option('active_plugins')
      )
    )
  ) {
    // The plugin is active
    $is_plugin_active=true;
  } else {
    // The plugin is inactive
    $is_plugin_active=false;
  }

  // Return value
  return $is_plugin_active;

}

/**
 * Function to return an array of default header images
 */
function gmuj_default_header_images() {

  // Declare array of header image files
  $default_header_images[0] = "header-image-default-01-1900x1200.jpg";
  $default_header_images[1] = "header-image-default-02-1900x1200.jpg";
  $default_header_images[2] = "header-image-default-03-1900x1200.jpg";
  $default_header_images[3] = "header-image-default-04-1900x1200.jpg";

  // Return value
  return $default_header_images;
}

/**
 * Function to return a random default header image
 */
function gmuj_random_default_header_image() {

  // Define path to default images
  $default_image_path='/wp-content/themes/gmuj-mason-wordpress-theme-twentytwenty-child/images/';

  // Get default header images array
  $default_images=gmuj_default_header_images();

  // Get a random image from that array
    // First, select a random index form the array
    $random_item = array_rand($default_images, 1);
    // Next get the item at that index
    $random_image = $default_images[$random_item];

  // Create full URL of image by combining the path and random image filename
  $random_image_url = $default_image_path . $random_image;

  // Return URL of random image
  return $random_image_url;

}

/**
 * Returns a file to use for the site header background image
 *
 * The file indicated in the background-image field from theme customizer is used if it exists. A default image is used if not.
 */
function gmuj_get_site_header_background_image() {

  // Get URL of site header background image
  // Do we have an image specified?
  if (get_theme_mod('default_header_image')) {
    // If so, use it
    $site_header_background_image_url=get_theme_mod('default_header_image');
  } else {
    // If not, use a random default image
    $site_header_background_image_url=gmuj_random_default_header_image();
  }

  return $site_header_background_image_url;

}

function gmuj_generate_css_rule($selector, $style_attribute, $attribute_value, $prefix='', $postfix='', $echo=true) {
  // Generates a CSS rule having an attribute value set based on the $mod_name (theme mod/theme customizer setting) provided
  $return = '';
  if (!empty($attribute_value)) {
     $return = sprintf('%s { %s:%s; }',
        $selector,
        $style_attribute,
        $prefix.$attribute_value.$postfix
     );
     if ($echo) {
        echo $return;
     }
  }
  return $return;
}

function gmuj_get_menu_items_count($menu_location_slug) {

  // Returns number of items in call-to-action menu

  // Get array of theme menu locations
    $menu_locations = get_nav_menu_locations();
  // Get ID of menu currently used in the 'call-to-actions' menu location
    $call_to_action_menu_id = $menu_locations[$menu_location_slug];
  // Get items in relevant menu
    $menuterm = wp_get_nav_menu_object($call_to_action_menu_id);
  // Get total count of items in that menu
    $total_count = ($menuterm instanceof \WP_Term) ? $menuterm->count : 0;

  return $total_count;

}

function gmuj_get_featured_image_src($post_id = null, $size = 'full') {
  
  // Returns url of the featured image for the provided post ID.

  if (has_post_thumbnail( $post_id ) ) {
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $size );
    return $image[0];
  } else {
    return '';
  }

}

function gmu_theme_get_field($field, $post_id = null) {
  if (function_exists( 'get_field' )) {
    return get_field($field, $post_id);
  }
}


function gmu_theme_content_subnav() {
    global $post;
    if (function_exists('have_rows') && have_rows('navigation') && !is_tax()) { ?>
      <div class="inline-navigation-wrapper">
        <?php while( have_rows('navigation',$post->id) ): the_row(); ?>
          <a href="<?php the_sub_field('url') ?>" <?php if (get_sub_field('new_tab')) echo 'target="_blank"' ?>><?php the_sub_field('name') ?></a>
          <span class="sep">|</span>
        <?php endwhile ?>
      </div>
    <?php
  }
}

add_filter( 'posts_where', 'gmu_theme_title_like_posts_where', 10, 2 );
function gmu_theme_title_like_posts_where( $where, $wp_query ) {
    global $wpdb;
    if ( $post_title_like = $wp_query->get( 'post_title_like' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'' . $post_title_like . '\'';
        // var_dump($where); die;
    }
    return $where;
}

add_filter('body_class', 'gmu_theme_body_classes');
function gmu_theme_body_classes($classes) {
  if (gmu_theme_get_field('navigation_side_style')) {
    $classes[] = 'side-inline-navigation';
  }
  return $classes;
}

add_action('pre_get_posts', 'gmu_theme_advanced_search_query', 1000);
function gmu_theme_advanced_search_query($query) {

  if($query->is_search()) {
    
    if (isset($_GET['taxonomy']) && isset($_GET['terms'])) {
      $terms = $_GET['terms'];
      if (!is_array($terms)) $terms = array($terms);
  
      $tax_query = array(
        array(
          'taxonomy' => $_GET['taxonomy'],
          'field' => 'id',
          'terms' => $terms
        )
      );
      $query->set('tax_query', $tax_query);
    }
  
    return $query;
  }

}

function gmu_theme_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'gmu_theme_excerpt_length', 999 );

