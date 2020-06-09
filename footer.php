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
							<img src="<?php echo get_stylesheet_directory_uri() . '/images/logo-Mason-2-color-with-shadow-259x181.png' ?>" />
						</p>

						<p class="footer-slogan-address-copyright-contact">
							<span class="site-slogan">Patriots Brave &amp; Bold</span><br />
							4400 University Drive, Fairfax, Virginia 22030<br />
							&copy; 2020 George Mason University – Call: +1 (703) 993-1000
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
