<?php
/**
 * Summary: php file which handles the custom post type: slideshow
 */


/**
 * Register a custom post type for the homepage slider slides
 */
add_action('init', 'gmuj_register_custom_post_type_slideshow');
function gmuj_register_custom_post_type_slideshow() {

    $labels = array(
        'name'                  => 'Slideshow',
        'singular_name'         => 'Slide',
        'menu_name'             => 'Slideshow',
        'name_admin_bar'        => 'Slide',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Slide',
        'new_item'              => 'New Slide',
        'edit_item'             => 'Edit Slide',
        'view_item'             => 'View Slide',
        'all_items'             => 'All Slides',
        'search_items'          => 'Search Slides',
        'parent_item_colon'     => 'Parent Slide:',
        'not_found'             => 'No Slides found.',
        'not_found_in_trash'    => 'No Slides found in Trash.',
        'featured_image'        => 'Slide Image',
        'set_featured_image'    => 'Set slide image',
        'remove_featured_image' => 'Remove slide image',
        'use_featured_image'    => 'Use as slide image',
        'archives'              => 'Homepage slider archives',
        'insert_into_item'      => 'Insert into slide',
        'uploaded_to_this_item' => 'Uploaded to this slide',
        'filter_items_list'     => 'Filter slide list',
        'items_list_navigation' => 'Slide list navigation',
        'items_list'            => 'Slide list',
    );
 
    $args = array(
        'labels'             	=> $labels,
        'public'             	=> true,
        'exclude_from_search' 	=> true,
        'page-attributes' 		=> true,
        'publicly_queryable' 	=> true,
        'show_ui'            	=> true,
        'show_in_menu'       	=> true,
        'query_var'          	=> true,
        'rewrite'            	=> array('slug' => 'person'),
        'capability_type'    	=> 'post',
        'has_archive'        	=> true,
        'hierarchical'       	=> false,
        'menu_position'      	=> 20,
        'menu_icon'			 	=> 'dashicons-images-alt2',
        'supports'           	=> array('title', 'editor', 'thumbnail','revisions','page-attributes'),
    );
 
    register_post_type('slideshow', $args);
}

/**
 * Register meta boxes and custom fields for the slides custom post type
 */
add_action('admin_init', 'gmuj_register_meta_boxes_slideshow');
function gmuj_register_meta_boxes_slideshow() {

    // Set the meta box fields meta-key prefix
        $prefix = 'gmuj_slide_';

    // Define the meta box and custom fields
        $meta_boxes_slideshow = array(
            'title' => 'Slide Information',
            'pages' => array('slideshow'), // What post types does this meta box apply to?
            'context' => 'normal', // Where the meta box appear: normal (default), advanced, side. Optional.
            'priority' => 'high', // Order of meta box: high (default), low. Optional.
            'fields' => array(
                array(
                    'name' => 'Show?', // Field name - Will be used as label
                    'id' => $prefix . 'show', // Field ID, i.e. the meta key
                    'desc' => 'Show this slide?', // Field description (optional)
                    'type'  => 'checkbox', // Field type
                ),
                array(
                    'name' => 'Link', // Field name - Will be used as label
                    'id' => $prefix . 'target_url', // Field ID, i.e. the meta key
                    'desc' => 'Slide links to URL', // Field description (optional)
                    'type'  => 'text', // Field type
                ),
            ),
            'validation' => array()
        );

    // Register the slide information meta box
        new RW_Meta_Box($meta_boxes_slideshow);

}