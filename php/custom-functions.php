<?php

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

