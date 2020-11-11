<?php
/**
 * Summary: php file which handles custom widget areas (sidebars) added by this theme
 */


/**
 * Summary: Registers custom widget areas specific to this child theme
 */
add_action('widgets_init', 'gmuj_register_custom_widget_areas');
function gmuj_register_custom_widget_areas(){

    //Register sitewide alert widget area
    gmuj_widget_area_registration('Sitewide - Alert Ribbon', 'sidebar-sitewide-alert', 'Add an "Alert Ribbon" widget to this area to display an alert across the top of each page in your site.', '<div class="gmuj_alert_ribbon_wrapper %2$s" id="%1$s">', '</div>', '<h3 class="widget-title">', '</h3>');
    //Register homepage banner widget area
    gmuj_widget_area_registration('Homepage - Banner', 'sidebar-homepage-banner', 'Widgets in this area will appear on the homepage within the website banner area.', '<li id="%1$s" class="widget %2$s">', '</li>', '<h3 class="widget-title">', '</h3>');
    //Register homepage top widget area
    gmuj_widget_area_registration('Homepage - Top', 'sidebar-homepage-top', 'Widgets in this area will appear on the homepage above the regular page content.', '<li id="%1$s" class="widget %2$s">', '</li>', '<h3 class="widget-title">', '</h3>');
    //Register homepage bottom widget area
    gmuj_widget_area_registration('Homepage - Bottom', 'sidebar-homepage-bottom', 'Widgets in this area will appear on the homepage below the regular page content.', '<li id="%1$s" class="widget %2$s">', '</li>', '<h3 class="widget-title">', '</h3>');
    //Register internal page banner widget area
    gmuj_widget_area_registration('Internal Page - Banner', 'sidebar-internal-page-banner', 'Widgets in this area will appear on internal pages within the website banner area.', '<li id="%1$s" class="widget %2$s">', '</li>', '<h3 class="widget-title">', '</h3>');
    //Register internal page top widget area
    gmuj_widget_area_registration('Internal Page - Top', 'sidebar-internal-page-top', 'Widgets in this area will appear on internal pages above the regular page content.', '<li id="%1$s" class="widget %2$s">', '</li>', '<h3 class="widget-title">', '</h3>');
    //Register internal page bottom widget area
    gmuj_widget_area_registration('Internal Page - Bottom', 'sidebar-internal-page-bottom', 'Widgets in this area will appear on internal pages below the regular page content.', '<li id="%1$s" class="widget %2$s">', '</li>', '<h3 class="widget-title">', '</h3>');
    //Register sidebar widget area
    gmuj_widget_area_registration('Sidebar', 'gmuj-sidebar-widget-area', 'Widgets in this area will appear in the sidebar to the left of the regular page content.', '<li id="%1$s" class="widget %2$s">', '</li>', '<h3 class="widget-title">', '</h3>');

}

/**
 * Summary: Registers custom widget areas
 */
function gmuj_widget_area_registration($name, $id, $description,$beforeWidget, $afterWidget, $beforeTitle, $afterTitle){

    // Register widget area
    register_sidebar(array(
        'name' => $name,
        'id' => $id,
        'description' => $description,
        'before_widget' => $beforeWidget,
        'after_widget' => $afterWidget,
        'before_title' => $beforeTitle,
        'after_title' => $afterTitle,
    ));

}
