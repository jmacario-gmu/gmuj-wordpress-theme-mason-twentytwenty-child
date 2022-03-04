<!-- Child theme template part for the slideshow -->
<?php
// Get number of slideshow custom post type posts
	// Set-up arguments for get_posts function
		$args=array(
			'post_type' => 'slideshow',
			'post_status' => 'publish',
			'showposts' => -1,
			'ignore_sticky_posts'=> 1,
			'meta_key' => 'gmuj_slide_show',
			'meta_value' => 1,
		);
	// Get posts
		$slides=get_posts($args);

// Proceed if we have posts to show
if (count($slides) >= 1) {
?>

<style>
	/* remove default website header image */
	header#site-header {
		background-image: none !important; 
		background-color: #006633 !important;
	}
	/* set the slideshow height */
	header#site-header, .gmuj-slide {
		height: 28em;
	}

	@media screen and (min-width: 400px) {
		/* set the slideshow height */
		header#site-header, .gmuj-slide {
			min-height: 22em;
		}
	}
</style>

<div id="gmuj-slideshow-wrapper">

	<div class="gmuj-slideshow">

		<?php
		// prepare counter variable
		$slide_counter=0;

		// query homepage_slider custom post type posts
		query_posts('post_type=slideshow&posts_per_page=7&orderby=menu_order&order=ASC&meta_key=gmuj_slide_show&meta_value=1');

		// loop through posts
		if (have_posts()) : while (have_posts()) : the_post();

			// Increment counter
			$slide_counter++;

			// Prepare to insert active style class
			$slide_counter==1 ? $active_class='gmuj-slide-active' : $active_class='';

			// Get post image
			$slider_img_src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'homepage-slide', false, '' );

			// Get post link
			$target_link = get_post_meta(get_the_ID(), 'gmuj_slide_target_url', true);

			// Get post CTA text
			$slide_cta_text = get_post_meta(get_the_ID(), 'gmuj_slide_cta_text', true);
			// If the CTA text is blank, use the default
			if (!$slide_cta_text) {
				$slide_cta_text='Read More';
			}

			// Output slide info (link and image)
			?>
			<div id="gmuj-slide-<?php the_ID(); ?>" class="gmuj-slide <?php echo $active_class ?>" style="background:linear-gradient(180deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5) 10%, rgba(0,0,0,0) 30%), url('<?php echo $slider_img_src[0] ?>') top center no-repeat;">

					<!--
					<img id="gmuj-slide-image-<?php the_ID(); ?>" class="gmuj-slide-image" src="<?php echo $slider_img_src[0] ?>" alt="<?php the_title_attribute(); ?>" />
					-->

					<div id="gmuj-slide-content-<?php the_ID(); ?>" class="gmuj-slide-content">
				
						<h2 id="gmuj-slide-title-<?php the_ID(); ?>" class="gmuj-slide-title"><a class="gmuj-slide-link" href="<?php echo $target_link; ?>"><?php the_title(); ?></a></h2>
						
						<div id="gmuj-slide-body-<?php the_ID(); ?>" class="gmuj-slide-body">

							<div class="gmuj-slide-body-wrapper">

								<div class="gmuj-slide-body-text">
									<?php the_content(); ?>
								</div>
								<div class="gmuj-slide-cta">
									<p>
										<a class="gmuj-slide-link" href="<?php echo $target_link; ?>">
											<?php echo $slide_cta_text; ?>
											<span class="gmuj-slide-link-arrow fa fa-arrow-circle-right"></span>
										</a>
									</p>
								</div>

							</div>

						</div>

					</div>	

			</div>

		<?php endwhile; else: endif; wp_reset_query(); ?>

	<div class="gmuj-slide-nav">
		<div class="gmuj-slide-nav-previous"><a href="#" onclick="gmuj_slide_back(); return false;">Previous Slide</a></div>
		<div class="gmuj-slide-nav-next"><a href="#" onclick="gmuj_slide_forward(); return false;">Next Slide</a></div>
	</div>

</div>

<?php
}
?>
