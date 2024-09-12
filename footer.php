<?php
/**
 * Modified footer file for the Mason Twenty Twenty Child WordPress default theme.
 */

?>
			<!-- Child theme customization: homepage bottom widget area -->
			<?php if (is_front_page()) { get_template_part('template-parts/widget-area','homepage-bottom'); } ?>
			<!-- /Child theme customization: homepage bottom widget area -->

			<!-- Child theme customization: prominent links menu -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'prominent',
					'container' => false,
					'menu_id' => 'prominent-links',
					'menu_class' => 'links',
					'depth' => 1,
					'fallback_cb' => false // ensure that nothing will be displayed as a fallback if there is no menu set for this location
				)
			);
			?>
			<!-- /Child theme customization: prominent links menu -->

			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">
					

					<div class="footer-credits">

						<p class="footer-logo">
							<a href="https://www.gmu.edu">
								<?php
								// Set default footer logo
									$footer_logo_image = get_stylesheet_directory_uri() . '/images/mason-logo.png';
								// If we have an alternate footer logo specified in the theme customizer, use it instead.
									if (get_theme_mod('gmuj_site_footer_logo') !='') {
										$footer_logo_image = get_theme_mod('gmuj_site_footer_logo');
									}
								?>
								<img src="<?php echo $footer_logo_image; ?>" alt="George Mason University logo" />
							</a>
						</p>

						<div class="footer-social-slogan-contact-copyright">
							<!-- Footer Social menu -->
							<?php get_template_part('template-parts/menu','footer-social'); ?>

							<p class="footer-slogan-address-copyright-contact">

								<?php
								// Display site tagline if provided in theme customizer
								if (get_theme_mod('gmuj_site_tagline')) {
									echo '<!--site tagline-->';
									echo '<span class="site-slogan">'.get_theme_mod('gmuj_site_tagline').'</span>';
									echo '<br />';
								}
								// If a custom address was *not* provided in theme customizer, use default address
								if (!get_theme_mod('gmuj_contact_address_line_1') && !get_theme_mod('gmuj_contact_address_line_2') && !get_theme_mod('gmuj_contact_address_line_3')) {
									echo 'George Mason University<br />4400 University Drive<br />Fairfax, Virginia 22030<br />';

								}
								?>

								<!--Address line 1 from theme customizer-->
								<?php if (get_theme_mod('gmuj_contact_address_line_1')) {
									echo get_theme_mod('gmuj_contact_address_line_1');
									echo '<br />';
								}
								?>

								<!--Address line 2 from theme customizer-->
								<?php if (get_theme_mod('gmuj_contact_address_line_2')) {
									echo get_theme_mod('gmuj_contact_address_line_2');
									echo '<br />';
								}
								?>

								<!--Address line 3 from theme customizer-->
								<?php if (get_theme_mod('gmuj_contact_address_line_3')) {
									echo get_theme_mod('gmuj_contact_address_line_3');
									echo '<br />';
								}
								?>

								<!--Contact email address from theme customizer-->
								<?php if (get_theme_mod('gmuj_contact_email')) {
									echo 'Email: ';
									echo '<a href="mailto:'.get_theme_mod('gmuj_contact_email').'">'.get_theme_mod('gmuj_contact_email').'</a>';
									echo '<br />';
								}
								?>

								<!--Contact phone number from theme customizer-->
								<?php if (get_theme_mod('gmuj_contact_phone')) {
									echo 'Tel: ';
									echo get_theme_mod('gmuj_contact_phone');
									echo '<br />';
								} else {
									//default phone number content
									echo 'Tel: +1703-993-1000<br />';
								}
								?>

								<!--Contact fax number from theme customizer-->
								<?php if (get_theme_mod('gmuj_contact_fax')) {
									echo 'Fax: ';
									echo get_theme_mod('gmuj_contact_fax');
									echo '<br />';
								}
								?>

								<!--Copyright notice-->
								<span class="footer-copyright">&copy; <?php echo date("Y"); ?> George Mason University</span>
							</p>
						
						</div>

						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
							</a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

					<!-- Footer menu -->
					<?php get_template_part('template-parts/menu','footer'); ?>

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
