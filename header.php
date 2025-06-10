<?php
/**
 * Modified header file for the Mason Twenty Twenty Child WordPress default theme.
 *
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<!-- Child theme customization: Sitewide alert ribbon -->
		<?php dynamic_sidebar('sidebar-sitewide-alert'); ?>
		<!-- /Child theme customization: Sitewide alert ribbon -->

		<!-- Child theme customization: top header -->
		<div class="top-header">

		<!-- Child theme customization: top logo -->
		<?php
		//set site header logo image and link
		//get custom logo from theme customizer, if any
		$customizer_custom_logo_image_url = wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full', false);
		//if there is no custom logo specified in the theme customizer, use the default image and link
		if (!$customizer_custom_logo_image_url) {
			$header_logo_image_url = get_stylesheet_directory_uri() . '/images/mason-logo-horizontal.png';
			$header_logo_link_url = 'https://www.gmu.edu';
		} else {
			//if there is a custom logo specified in the theme customizer, use the custom logo and the site's home url
			$header_logo_image_url = $customizer_custom_logo_image_url;
			$header_logo_link_url = get_home_url();
		}
		?>
		<p class="header-logo">
			<a href="<?php echo $header_logo_link_url; ?>">
				<img src="<?php echo $header_logo_image_url; ?>" alt="George Mason University logo" />
			</a>
		</p>
		<!-- /Child theme customization: top logo -->

		<!-- Child theme customization: top title -->
		<div class="site-name">
			<a href="<?php echo get_home_url()?>"><?php echo get_bloginfo('name')?></a>
		</div>
		<!-- /Child theme customization: top title -->
		</div>
		<!-- /Child theme customization: top header -->

		<div class="gmuj-header-links">
			<!-- Child theme customization: university breadcrumbs bar -->
			<?php get_template_part('template-parts/university-breadcrumbs-bar'); ?>
			<!-- /Child theme customization: university breadcrumbs bar -->

			<!-- Child theme customization: university links bar -->
			<?php if (get_theme_mod('gmuj_show_university_links_bar')=='1') { get_template_part('template-parts/university-links-bar'); } ?>
			<!-- /Child theme customization: university links bar -->
		</div>

		<!-- Child theme modification: site header background-image -->
		<header id="site-header" class="header-footer-group" role="banner" style="background-image:url('<?php echo gmuj_get_site_header_background_image() ?>');">
		<!-- /Child theme modification: site header background-image -->

			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<?php

					// Check whether the header search is activated in the customizer.
					$enable_header_search = get_theme_mod( 'enable_header_search', true );

					if ( true === $enable_header_search ) {

						?>

						<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false" aria-label="search">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<?php twentytwenty_the_theme_svg( 'search' ); ?>
								</span>
								<span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
							</span>
						</button><!-- .search-toggle -->

					<?php } ?>

					<!--
					<div class="header-titles">

						<?php
							// Site title or logo.
							twentytwenty_site_logo();

							// Child theme customization: site name
							echo '<div class="site-name"><a href="'.get_home_url().'">'.get_bloginfo('name').'</a></div>';

							// Site description.
							//twentytwenty_site_description();
						?>

					</div>--><!-- .header-titles -->

					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span>
							<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
						</span>
					</button><!-- .nav-toggle -->

				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper">

					<?php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>

							<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">

								<ul class="primary-menu reset-list-style">

								<?php
								if ( has_nav_menu( 'primary' ) ) {

									//Child theme customization: main nav home link
									echo '<li class="gmuw_main_nav_home"><a href="/" aria-label="home"><i class="fa fa-home" aria-hidden="true"></i></a></li>';
									//End child theme customization: main nav home link

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);

								}
								?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

						<?php
					}

					if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
						?>

						<div class="header-toggles hide-no-js">

						<?php
						if ( has_nav_menu( 'expanded' ) ) {
							?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
										<span class="toggle-icon">
											<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
										</span>
									</span>
								</button><!-- .nav-toggle -->

							</div><!-- .nav-toggle-wrapper -->

							<?php
						}

						if ( true === $enable_header_search ) {
							?>

							<div class="toggle-wrapper search-toggle-wrapper">

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false" aria-label="search">
									<span class="toggle-inner">
										<?php twentytwenty_the_theme_svg( 'search' ); ?>
										<span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
									</span>
								</button><!-- .search-toggle -->

							</div>

							<?php
						}
						?>

						</div><!-- .header-toggles -->
						<?php
					}
					?>

				</div><!-- .header-navigation-wrapper -->

			</div><!-- .header-inner -->

			<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
		?>

		<!-- Child theme customization: homepage banner widget area -->
		<?php if (is_front_page()) { get_template_part('template-parts/widget-area','homepage-banner'); } ?>
		<!-- /Child theme customization: homepage banner widget area -->

		<!-- Child theme customization: internal page banner widget area -->
		<?php if (!is_front_page()) { get_template_part('template-parts/widget-area','internal-page-banner'); } ?>
		<!-- /Child theme customization: internal page banner widget area -->

        <!-- Child theme customization: slideshow -->
        <?php if (is_front_page()) { get_template_part('template-parts/slideshow'); } ?>
        <!-- /Child theme customization: slideshow -->

		</header><!-- #site-header -->

		<!-- Child theme customization: homepage top widget area -->
		<?php if (is_front_page()) { get_template_part('template-parts/widget-area','homepage-top'); } ?>
		<!-- /Child theme customization: homepage top widget area -->
