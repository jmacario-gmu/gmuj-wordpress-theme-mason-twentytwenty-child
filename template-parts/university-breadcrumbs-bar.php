<!-- Child theme template part for the university breadcrumbs bar -->
<div id="university-breadcrumbs-bar">
    <div class="left-side">
        <!--University breadcrumbs-->
        <ul id="university-breadcrumbs" class="links">
            <?php

            // If a unit has not been specified in the theme customizer, display the default university link
            if (empty(get_theme_mod('gmuj_mason_unit'))) {
                echo '<li id="university"><a href="https://www.gmu.edu"><span class="fa fa-chevron-circle-left"></span> George Mason University</a></li>';
            }
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
                    echo '<span class="divider">/</span> <a href="'.get_theme_mod('gmuj_mason_department_url').'">';
                    // Output 'back' icon
                    //echo '<span class="fa fa-chevron-circle-left"></span> ';
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
</div>