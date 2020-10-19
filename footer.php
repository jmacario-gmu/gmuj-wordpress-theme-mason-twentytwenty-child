<?php
/**
 * Modified footer file for the Mason Twenty Twenty Child WordPress default theme.
 */

?>
			<!-- Child theme customization: homepage bottom widget area -->
			<?php if (is_front_page()) { get_template_part('template-parts/widget-area','homepage-bottom'); } ?>
			<!-- /Child theme customization: homepage bottom widget area -->

			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-logo">
							<a href="https://www.gmu.edu">
								<img src="<?php echo get_stylesheet_directory_uri() . '/images/logo-Mason-2-color-with-shadow-259x181.png' ?>" alt="George Mason University logo" />
							</a>
						</p>

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
								echo '4400 University Drive, Fairfax, Virginia 22030<br />';

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
								echo 'Call: ';
								echo get_theme_mod('gmuj_contact_phone');
								echo '<br />';
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
							&copy; <span style="font-weight:normal;"><?php echo date("Y"); ?> George Mason University</span>
						</p>

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://secure.php.net/date */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

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
