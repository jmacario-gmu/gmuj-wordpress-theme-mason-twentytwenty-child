<?php


// Configure the theme customizer
add_action('customize_register','gmuj_theme_customizer_register');

function gmuj_theme_customizer_register($wp_customize) {

  // Section: Site Identity 

  // Remove site tagline control
    $wp_customize->remove_control('blogdescription');

  // Field: gmuj_mason_unit
      $wp_customize->add_setting('gmuj_mason_unit');
      $wp_customize->add_control('gmuj_mason_unit',
        array(
          'type'        => 'text',
          'label'       => 'Mason Unit',
          'description' => 'University-level organizational unit responsible for this website',
          'section'     => 'title_tagline',
        )
      );

  // Field: gmuj_mason_unit_url
      $wp_customize->add_setting('gmuj_mason_unit_url');
      $wp_customize->add_control('gmuj_mason_unit_url',
        array(
          'type'        => 'url',
          'label'       => 'Mason Unit URL',
          'description' => 'URL of related organizational unit website',
          'section'     => 'title_tagline',
        )
      );

  // Field: gmuj_mason_department
      $wp_customize->add_setting('gmuj_mason_department');
      $wp_customize->add_control('gmuj_mason_department',
        array(
          'type'        => 'text',
          'label'      => 'Mason Department',
          'section'    => 'title_tagline',
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
          'section'    => 'title_tagline',
        )
      );
      
  // Field: site logo
      $wp_customize->add_setting('site_logo');
      $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize,'site_logo',
          array(
            'label'      => 'Website Logo',
            'section'    => 'title_tagline'
          )
        )
      );

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


  // Section: 'Homepage Settings' 

  // Remove 'Homepage Settings' section
    $wp_customize->remove_section('static_front_page');


  // Section: header area 

  // Add section: header_area 
    $wp_customize->add_section('header_area', 
       array(
          'title'       => 'Header Area','GMU',
          'priority'    => 149
       ) 
    );

    // Field: show university menu (gmuj_show_university_menu)
        $wp_customize->add_setting('gmuj_show_university_menu',
          array('default'     => '1')
        );
        $wp_customize->add_control('gmuj_show_university_menu',
          array(
            'type'       => 'radio',
            'label'      => 'Show University Menu?:',
            'description' => '<p>The university menu is intended for the display of links to other top-level university websites to aid in university navigation. It corresponds to the yellow menu bar at the top of the Mason core website (www2.gmu.edu). The links in this menu should correspond to the links on the Mason core website to ensure ease of navigation.</p>',
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

    // Field: homepage mode (gmuj_homepage_mode)
        $wp_customize->add_setting('gmuj_homepage_header_mode',
          array('default'     => 'image')
        );
        $wp_customize->add_control('gmuj_homepage_header_mode',
          array(
            'type'       => 'radio',
            'label'      => 'Homepage Header Shows:',
            'section'    => 'header_area',
            'choices' => array(
              'image' => 'Banner Image',
              'rotator' => 'Rotator',
              'cta' => 'Calls-to-Action',
              'search' => 'Search'
            )
          )
        );


  // Section: search header

  // Add section: search_header_settings
    $wp_customize->add_section('search_header_settings',
       array(
          'title'       => 'Header: Search',
          'priority'    => 150
       )
    );

  // Field: search_header_title
      $wp_customize->add_setting('search_header_title');
      $wp_customize->add_control('search_header_title',
        array(
          'type'       => 'text',
          'label'      => 'Search Header Title',
          'section'    => 'search_header_settings'
        )
      );

  // Field: search_header_description
      $wp_customize->add_setting('search_header_description');
      $wp_customize->add_control('search_header_description',
        array(
          'type'       => 'textarea',
          'label'      => 'Search Header Description',
          'section'    => 'search_header_settings'
        )
      );


  // Section: CTA Header

  // Add section: cta_header_settings
    $wp_customize->add_section('cta_header_settings',
       array(
          'title'       => 'Header: Calls-to-Action',
          'priority'    => 150
       )
    );

  // Field: cta_header_title
      $wp_customize->add_setting('cta_header_title');
      $wp_customize->add_control('cta_header_title',
        array(
          'type'       => 'text',
          'label'      => 'Calls-to-Action Header Title',
          'section'    => 'cta_header_settings'
        )
      );

  // Field: cta_header_description
      $wp_customize->add_setting('cta_header_description');
      $wp_customize->add_control('cta_header_description',
        array(
          'type'       => 'textarea',
          'label'      => 'Calls-to-Action Header Description',
          'section'    => 'cta_header_settings'
        )
      );


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