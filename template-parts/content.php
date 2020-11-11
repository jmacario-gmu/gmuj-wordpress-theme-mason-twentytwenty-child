<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php

	get_template_part( 'template-parts/entry-header' );

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
					the_content( __( 'Continue reading', 'twentytwenty' ) );
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

	/**
	 *  Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 * */
	if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

		<?php
	}
	?>

</article><!-- .post -->
