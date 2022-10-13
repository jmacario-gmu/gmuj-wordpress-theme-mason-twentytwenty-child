<?php
/**
 * Associate correct icons with the social links automatically for the "footer social" menu location. 
 * Necessary because the base Twentytwenty theme only supports this for the "social" menu location.
 **/ 
function mason_theme_nav_menu_social_icons( $item_output, $item, $depth, $args ) {
	// Change SVG icon inside social links menu if there is supported URL.
	if ( 'footer-social' === $args->theme_location ) {
		$svg = TwentyTwenty_SVG_Icons::get_social_link_svg( $item->url );
		if ( empty( $svg ) ) {
			$svg = twentytwenty_get_theme_svg( 'link' );
		}
		$item_output = str_replace( $args->link_after, '</span>' . $svg, $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'mason_theme_nav_menu_social_icons', 10, 4 );
?>

<?php
if ( has_nav_menu( 'footer-social' ) ) :
?>
<ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color">
    <?php
    wp_nav_menu(
        array(
            'theme_location'  => 'footer-social',
            'container'       => '',
            'container_class' => '',
            'items_wrap'      => '%3$s',
            'menu_id'         => 'social-menu',
            'menu_class'      => '',
            'depth'           => 1,
            'link_before'     => '<span class="screen-reader-text">',
            'link_after'      => '</span>',
            'fallback_cb'     => '',
        )
    );
    ?>
</ul><!-- .footer-social -->
<?php endif; ?>
