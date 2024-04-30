<?php

/**
 * Summary: php file which implements the customizations related to the site icon
 */

// if a specific site icon is not specified in the theme customizer, use the default
if (empty(get_site_icon_url())) {

  add_filter('get_site_icon_url', 'gmuw_theme_site_icon');
  function gmuw_theme_site_icon($url) {
    
    //return url for favicon.ico file in the theme folder
    return get_home_url().'/wp-content/themes/gmuj-wordpress-theme-mason-twentytwenty-child/images/favicon.ico';

  }

}
