<!-- Child theme template part for the university breadcrumbs bar -->
<div id="university-breadcrumbs-bar">
    <div class="left-side">
        <!--University breadcrumbs-->
        <ul id="university-breadcrumbs" class="links">
            <li id="university">
                <a href="https://www.gmu.edu"><span class="fa fa-chevron-circle-left"></span> George Mason University</a></li>

            <?php
            // If a unit has been specified in the theme customizer, display it
            if (get_theme_mod('gmuj_mason_unit')) {
                // Start li tag
                echo '<li id="unit">';
                // If we have a URL, display as a link
                if (get_theme_mod('gmuj_mason_unit_url')) {
                    // Start link tag
                    echo '<a href="'.get_theme_mod('gmuj_mason_unit_url').'">';
                    // Output 'back' icon
                    echo '<span class="fa fa-chevron-circle-left"></span> ';
                    // Output unit name
                    echo get_theme_mod('gmuj_mason_unit');
                    //Finish link tag
                    echo '</a>';
                } else { // No URL - just display text
                    // Start link tag
                    echo '<a>';
                    // Output unit name
                    echo get_theme_mod('gmuj_mason_unit');
                    //Finish link tag
                    echo '</a>';
                }
                // Finish li tag
                echo '</li>';
            }
            // If a department has been specified in the theme customizer, display it
            if (get_theme_mod('gmuj_mason_department')) {
                // Start li tag
                echo '<li id="department">';
                // If we have a URL, display as a link
                if (get_theme_mod('gmuj_mason_department_url')) {
                    // Start link tag
                    echo '<a href="'.get_theme_mod('gmuj_mason_department_url').'">';
                    // Output 'back' icon
                    echo '<span class="fa fa-chevron-circle-left"></span> ';
                    // Output department name
                    echo get_theme_mod('gmuj_mason_department');
                    //Finish link tag
                    echo '</a>';
                } else { // No URL - just display text
                    // Start link tag
                    echo '<a>';
                    // Output department name
                    echo get_theme_mod('gmuj_mason_department');
                    //Finish link tag
                    echo '</a>';
                }
                // Finish li tag
                echo '</li>';
            }
            ?>
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