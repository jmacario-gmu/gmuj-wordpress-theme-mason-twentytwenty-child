<?php

/**
 * php file to configure the theme customizer
 *
 * We use a priority of 1000 to ensure that this function runs after the parent theme's customizer modifications
 */


add_action('customize_register','gmuj_theme_customizer_register',1000);
function gmuj_theme_customizer_register($wp_customize) {

  // Section: Site Identity 

  // Remove site tagline control
    $wp_customize->remove_control('blogdescription');

  // Remove retina logo control
    $wp_customize->remove_control('retina_logo');

  // Field: gmuj_site_tagline
      $wp_customize->add_setting('gmuj_site_tagline');
      $wp_customize->add_control('gmuj_site_tagline',
        array(
          'type'        => 'text',
          'label'       => 'Site Tagline',
          'description' => 'Appears in the website footer. Leave blank for none.',
          'section'     => 'title_tagline'
        )
      );

  // Section: organizational information

  // Add section: org_info
    $wp_customize->add_section('org_info',
       array(
          'title'       => 'Organizational Information',
          'description' => '<p>This information used to generate the links for the university breadcrumbs bar, which is the green bar in the header which helps to orient users as to where this website fits in the university\'s organizational structure.</p>',
          'priority'    => 30
       )
    );

  // Field: gmuj_mason_unit
      $wp_customize->add_setting('gmuj_mason_unit');
      $wp_customize->add_control('gmuj_mason_unit',
        array(
          'type'        => 'text',
          'label'       => 'Mason Unit',
          'description' => 'University-level organizational unit responsible for this website',
          'section'     => 'org_info',
        )
      );

  // Field: gmuj_mason_unit_url
      $wp_customize->add_setting('gmuj_mason_unit_url');
      $wp_customize->add_control('gmuj_mason_unit_url',
        array(
          'type'        => 'url',
          'label'       => 'Mason Unit URL',
          'description' => 'URL of related organizational unit website',
          'section'     => 'org_info',
        )
      );

  // Field: gmuj_mason_department
      $wp_customize->add_setting('gmuj_mason_department');
      $wp_customize->add_control('gmuj_mason_department',
        array(
          'type'        => 'text',
          'label'      => 'Mason Department',
          'section'    => 'org_info',
        )
      );

  // Field: gmuj_mason_department_url
      $wp_customize->add_setting('gmuj_mason_department_url',
        array('sanitize_callback' => 'esc_url') 
      );
      $wp_customize->add_control('gmuj_mason_department_url',
        array(
          'type'       => 'url',
          'label'      => 'Mason Department URL',
          'section'    => 'org_info',
        )
      );

  // Section: contact information

  // Add section: contact_info
    $wp_customize->add_section('contact_info',
       array(
          'title'       => 'Contact Information',
          'description' => '<p>This information is displayed publicly on the website, notably in the footer contact information section.</p>',
          'priority'    => 35
       )
    );

  // Field: gmuj_contact_address_line_1
      $wp_customize->add_setting('gmuj_contact_address_line_1');
      $wp_customize->add_control('gmuj_contact_address_line_1',
        array(
          'type'       => 'text',
          'label'      => 'Address Line 1',
          'description' => '<p>Included in the footer contact block. Leave blank to hide.</p>',
          'section'    => 'contact_info'
        )
      );

  // Field: gmuj_contact_address_line_2
      $wp_customize->add_setting('gmuj_contact_address_line_2');
      $wp_customize->add_control('gmuj_contact_address_line_2',
        array(
          'type'       => 'text',
          'label'      => 'Address Line 2',
          'description' => '<p>Included in the footer contact block. Leave blank to hide.</p>',
          'section'    => 'contact_info'
        )
      );

  // Field: gmuj_contact_address_line_3
      $wp_customize->add_setting('gmuj_contact_address_line_3');
      $wp_customize->add_control('gmuj_contact_address_line_3',
        array(
          'type'       => 'text',
          'label'      => 'Address Line 3',
          'description' => '<p>Included in the footer contact block. Leave blank to hide.</p>',
          'section'    => 'contact_info'
        )
      );

  // Field: gmuj_contact_email
      $wp_customize->add_setting('gmuj_contact_email',
        array(
          'sanitize_callback' => 'sanitize_email'
          //'validate_callback' => 'is_email'
        )
      );
      $wp_customize->add_control('gmuj_contact_email',
        array(
          'type'       => 'email',
          'label'      => 'Contact Email Address',
          'description' => '<p>Included in the footer contact block. Leave blank to hide.</p>',
          'section'    => 'contact_info'
        )
      );

  // Field: gmuj_contact_phone
      $wp_customize->add_setting('gmuj_contact_phone');
      $wp_customize->add_control('gmuj_contact_phone',
        array(
          'type'       => 'text',
          'label'      => 'Contact Phone Number',
          'description' => '<p>Included in the footer contact block. Leave blank to hide.</p>',
          'section'    => 'contact_info'
        )
      );

  // Field: gmuj_contact_fax
      $wp_customize->add_setting('gmuj_contact_fax');
      $wp_customize->add_control('gmuj_contact_fax',
        array(
          'type'       => 'text',
          'label'      => 'Contact Fax Number',
          'description' => '<p>Included in the footer contact block. Leave blank to hide.</p>',
          'section'    => 'contact_info'
        )
      );

  // Section: 'Colors'

  // Remove controls added by parent theme
    // Remove custom background color control
      $wp_customize->remove_control('background_color');

    // Remove custom header and footer background color control
      $wp_customize->remove_control('header_footer_background_color');

    // Remove custom primary color control
      $wp_customize->remove_control('accent_hue_active');

  // Field: theme color scheme (gmuj_theme_color)
      $wp_customize->add_setting('gmuj_theme_color',
        array('default'     => '1')
      );
      $wp_customize->add_control('gmuj_theme_color',
        array(
            'type'       => 'select',
            'label'      => 'Theme Color Scheme',
            'description' => '<p>Select a pre-defined color scheme consistent with the Mason brand: <a href="https://brand.gmu.edu/visual-identity-and-style/color/">brand.gmu.edu/visual-identity-and-style/color/</a></p>',
            'section'    => 'colors',
            'choices' => array(
              '1' => 'Option 1',
              '2' => 'Option 2',
              '3' => 'Option 3',
              '4' => 'Option 4'
            )
        )
      );

  // Section: 'Theme Options'

  // Remove controls added by parent theme
    // Remove 'show search in header' option
      $wp_customize->remove_control('enable_header_search');

  // Section: 'Background Image'

  // Remove 'Background Image' section
    $wp_customize->remove_section('background_image');

  // Section: 'Homepage Settings' 

  // Remove 'Homepage Settings' section
    $wp_customize->remove_section('static_front_page');


  // Section: 'Cover Template'

  // Remove 'Cover Template' section
    $wp_customize->remove_section('cover_template_options');

  // Section: header area 

  // Add section: header_area 
    $wp_customize->add_section('header_area', 
       array(
          'title'       => 'Header Area','GMU',
          'priority'    => 149
       ) 
    );

    // Field: show university links bar (gmuj_show_university_links_bar)
        $wp_customize->add_setting('gmuj_show_university_links_bar',
          array('default'     => '1')
        );
        $wp_customize->add_control('gmuj_show_university_links_bar',
          array(
            'type'       => 'radio',
            'label'      => 'Show University Links Bar?:',
            'description' => '<p>The university links bar is intended for the display of links to top-level university websites to aid in university navigation.</p>',
            'section'    => 'header_area',
            'choices' => array(
              '1' => 'Yes',
              '0' => 'No'
            )
          )
        );

  // Field: header image (default_header_image)
      $wp_customize->add_setting('default_header_image');
      $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize,'default_header_image',
          array(
            'label'      => 'Default Header Image',
            'section'    => 'header_area'
          )
        )
      );


  /* - disabled - currently handled by Mason Meta Information plugin
  // Section: analytics/meta

  // Add section: analytics/meta 
    $wp_customize->add_section('analytics_meta', 
       array(
          'title'       => 'Analytics/Meta',
          'priority'    => 151
       ) 
    );

  // Field: gmuj_website_contact_technical
      $wp_customize->add_setting('gmuj_website_contact_technical',
        array(
          'sanitize_callback' => 'sanitize_email'
          //'validate_callback' => 'is_email'
        ) 
      );
      $wp_customize->add_control('gmuj_website_contact_technical',
        array(
          'type'       => 'email',
          'label'      => 'Website Technical Contact (email)',
          'description' => '<p>Who should be contacted for technical issues/questions?</p>',
          'section'    => 'analytics_meta'
        )
      );

  // Field: gmuj_website_contact_content
      $wp_customize->add_setting('gmuj_website_contact_content',
        array(
          'sanitize_callback' => 'sanitize_email'
          //'validate_callback' => 'is_email'
        )
      );
      $wp_customize->add_control('gmuj_website_contact_content',
        array(
          'type'       => 'email',
          'label'      => 'Website Content Contact (email)',
          'description' => '<p>Who should be contacted for content-related issues/questions?</p>',
          'section'    => 'analytics_meta'
        )
      );
  */

}

// Output custom CSS based on WordPress customizer settings
add_action('wp_head','output_theme_custom_css');

function output_theme_custom_css() {
  // Outputs custom CSS to HTML head based on settings in the theme customizer
  
  // Begin section
  echo PHP_EOL.'<!-- Custom CSS settings based on WordPress customizer -->'.PHP_EOL;
  echo '<style type="text/css">'.PHP_EOL;

  // Custom CSS rules
    // Header image
    echo gmuj_generate_css_rule('#content .banner-section', 'background-image', get_theme_mod('default_header_image'), 'url(\'', '\')',false).PHP_EOL; 

  // Finish section
  echo '</style>'.PHP_EOL;
  echo '<!-- /Custom CSS settings based on WordPress customizer -->'.PHP_EOL;

}