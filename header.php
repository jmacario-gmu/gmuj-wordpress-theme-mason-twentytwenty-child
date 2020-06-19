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

        <!-- Child theme customization: university menu -->
        <?php if (get_theme_mod('gmuj_show_university_menu')=='1') { get_template_part('template-parts/menu','university'); } ?>
		<!-- /Child theme customization: university menu -->

        <!-- Child theme customization: university breadcrumbs bar -->
        <div class="top-header">
            <div class="left-side">
                <!-- University breadcrumbs -->
                <ul id="university-breadcrumbs" class="links">
                    <li id="university">
                        <a href="https://www2.gmu.edu"><span class="fa fa-chevron-circle-left"></span> George Mason University</a></li>
                    <li id="unit">
                        <a href="<?php echo get_theme_mod('gmuj_mason_unit_url')?>"><span class="fa fa-chevron-circle-left"></span> <?php echo get_theme_mod('gmuj_mason_unit')?></a>
                    </li>
                    <li id="department">
                        <a href="<?php echo get_theme_mod('gmuj_mason_department_url')?>"><?php echo get_theme_mod('gmuj_mason_department')?></a>
                    </li>
                </ul><!-- .university-breadcrumbs -->
            </div>
            <div class="right-side">
                <!-- Prominent Links -->
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
                <!-- /Prominent Links -->
            </div>
        </div>
        <!-- /Child theme customization: university breadcrumbs bar -->

		<!-- Child theme modification: site header background-image; background-image field from theme customizer is added inline -->
		<header id="site-header" class="header-footer-group" role="banner" style="background-image:url('<?php echo get_theme_mod('default_header_image') ?>');">

			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<?php

					// Check whether the header search is activated in the customizer.
					$enable_header_search = get_theme_mod( 'enable_header_search', true );

					if ( true === $enable_header_search ) {

						?>

						<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<?php twentytwenty_the_theme_svg( 'search' ); ?>
								</span>
								<span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
							</span>
						</button><!-- .search-toggle -->

					<?php } ?>

					<div class="header-titles">

						<?php
							// Site title or logo.
							twentytwenty_site_logo();

							// Child theme customization: site name
							echo '<div class="site-name"><a href="'.get_home_url().'">'.get_bloginfo('name').'</a></div>';

							// Site description.
							twentytwenty_site_description();
						?>

					</div><!-- .header-titles -->

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

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
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

		</header><!-- #site-header -->

		<!-- Child theme customization: homepage top widget area -->
		<?php if (is_front_page()) { get_template_part('template-parts/widget-area','homepage-top'); } ?>
