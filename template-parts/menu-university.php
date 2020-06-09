<!--
Child theme template part for the university menu.
-->
<div id="university-links-bar">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'university',
            'container' => false,
            'menu_id' => 'university-links',
            'depth' => 1,
            'fallback_cb' => 'menu_university_fallback'
        )
    );
    ?>            
</div>