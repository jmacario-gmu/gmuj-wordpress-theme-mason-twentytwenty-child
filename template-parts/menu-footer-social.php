<!-- Child theme template part for the footer social menu -->
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
