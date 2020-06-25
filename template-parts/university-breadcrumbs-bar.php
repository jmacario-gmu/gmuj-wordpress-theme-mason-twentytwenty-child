<!--
Child theme template part for the university breadcrumbs bar
-->
<div id="university-breadcrumbs-bar">
    <div class="left-side">
        <!--University breadcrumbs-->
        <ul id="university-breadcrumbs" class="links">
            <li id="university">
                <a href="https://www2.gmu.edu"><span class="fa fa-chevron-circle-left"></span> George Mason University</a></li>
            <li id="unit">
                <a href="<?php echo get_theme_mod('gmuj_mason_unit_url')?>"><span class="fa fa-chevron-circle-left"></span> <?php echo get_theme_mod('gmuj_mason_unit')?></a>
            </li>
            <li id="department">
                <a href="<?php echo get_theme_mod('gmuj_mason_department_url')?>"><?php echo get_theme_mod('gmuj_mason_department')?></a>
            </li>
        </ul><!--/.university-breadcrumbs-->
    </div>
    <div class="right-side">
        <!--Prominent Links-->
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
        <!--/Prominent Links-->
    </div>
</div>