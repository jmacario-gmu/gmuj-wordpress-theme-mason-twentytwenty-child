<!-- Child theme template part for the footer menu -->
<?php
wp_nav_menu(
    array(
        'theme_location' => 'footer',
        'container' => false,
        'menu_id' => 'footer-menu',
        'depth' => 1,
        'fallback_cb' => 'menu_footer_fallback'
    )
);
?>            
