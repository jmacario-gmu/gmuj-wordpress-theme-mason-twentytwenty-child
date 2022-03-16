<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Display -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.23
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
/**
 * Allows filtering the classes for the main element.
 *
 * @since 5.8.0
 *
 * @param array<string> $classes An (unindexed) array of classes to apply.
 */
$classes = apply_filters( 'tribe_default_events_template_classes', [ 'tribe-events-pg-template' ] );

/**
 * Set this to an empty string in case it is not defined.
 * Specifically for the two hooks below.
 *
 * @since 5.9.0
 */
$eventDisplay = isset( $eventDisplay ) ? $eventDisplay : '';


get_header();

/**
 * Provides an action that allows for the injection of HTML at the top of the template after the header.
 *
 * @since 5.8.0
 *
 * @param string $eventDisplay The string representation (slug) of the displayed view - "month".
 */
do_action( 'tribe_default_events_template_after_header', $eventDisplay );
?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


<header class="entry-header header-footer-group">

  <div class="entry-header-inner section-inner medium">

    <h1 class="entry-title"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1>
    <?php
    echo '<div class="breadcrumbs-wrapper">';
    ?>
    <ul class="breadcrumbs">
      <li class="item-home"><a class="bread-link bread-home" href="<?php echo get_home_url(); ?>" title="Home">Home</a></li>
      <li class="separator separator-home"> / </li>
      <li class="item-parent"><a class="bread-parent" href="<?php echo esc_url( tribe_get_events_link() ); ?>"> <?php printf( esc_html_x( 'All %s', '%s Events plural label', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?></a></li>
      <li class="separator"> / </li>
      <li class="item-current"><?php echo tribe_get_event_label_singular(); ?> Details</li>
    </ul>    
    <?php
    echo '</div>';
    ?>
  </div><!-- .entry-header-inner -->

</header>
  <?php

  //get_template_part( 'template-parts/entry-header' );

  if ( ! is_search() ) {
    get_template_part( 'template-parts/featured-image' );
  }

  ?>

  <div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

    <!-- Child theme customization: sidebar widget area -->
    <div class="gmuj-sidebar-wrapper">

      <div class="gmuj-sidebar">
        <?php 
          // Display content from sidebar widget area
          dynamic_sidebar('gmuj-sidebar-widget-area');
          
          // Is there content in the post meta custom field?
          if ($post->sidebar_content) {
            // If so, display the content from post meta custom field: sidebar_content
            echo '<div class="gmuj-sidebar-post-meta">';
            echo do_shortcode($post->sidebar_content);
            echo '</div>';            
          }
        ?>
      </div><!-- .gmuj-sidebar -->
      
      <div class="entry-content">

        <!-- Child theme customization: internal page top widget area -->
        <?php if (!is_front_page()) { get_template_part('template-parts/widget-area','internal-page-top'); } ?>
        <!-- /Child theme customization: internal page top widget area -->

        <?php
        if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
          the_excerpt();
        } else {


            tribe_get_view();

        }
        ?>

        <!-- Child theme customization: internal page bottom widget area -->
        <?php if (!is_front_page()) { get_template_part('template-parts/widget-area','internal-page-bottom'); } ?>
        <!-- /Child theme customization: internal page bottom widget area -->

      </div><!-- .entry-content -->

    </div><!-- .gmuj-sidebar-wrapper -->
    <!-- /Child theme customization: sidebar widget area -->

  </div><!-- .post-inner -->

  <div class="section-inner">
    <?php
    wp_link_pages(
      array(
        'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
        'after'       => '</nav>',
        'link_before' => '<span class="page-number">',
        'link_after'  => '</span>',
      )
    );

    edit_post_link();

    // Single bottom post meta.
    twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

    if ( is_single() ) {

      get_template_part( 'template-parts/entry-author-bio' );

    }
    ?>

  </div><!-- .section-inner -->

  <?php

  if ( is_single() ) {

    get_template_part( 'template-parts/navigation' );

  }

  ?>

</article><!-- .post -->





<?php

/**
 * Provides an action that allows for the injections of HTML at the bottom of the template before the footer.
 *
 * @since 5.8.0
 *
 * @param string $eventDisplay The string representation (slug) of the displayed view - "month".
 */
do_action( 'tribe_default_events_template_before_footer', $eventDisplay );

get_footer();


