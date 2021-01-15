<?php
/**
 * Summary: php file which handles the custom post type: people
 */


/**
 * Register a custom post type for people
 */
add_action('init', 'gmuj_register_custom_post_type_people');
function gmuj_register_custom_post_type_people() {

    $labels = array(
        'name'                  => 'People',
        'singular_name'         => 'Person',
        'menu_name'             => 'People',
        'name_admin_bar'        => 'Person',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Person',
        'new_item'              => 'New Person',
        'edit_item'             => 'Edit Person',
        'view_item'             => 'View Person',
        'all_items'             => 'All People',
        'search_items'          => 'Search People',
        'parent_item_colon'     => 'Parent People:',
        'not_found'             => 'No People found.',
        'not_found_in_trash'    => 'No People found in Trash.',
        'featured_image'        => 'Person Image',
        'set_featured_image'    => 'Set person image',
        'remove_featured_image' => 'Remove person image',
        'use_featured_image'    => 'Use as person image',
        'archives'              => 'People archives',
        'insert_into_item'      => 'Insert into person',
        'uploaded_to_this_item' => 'Uploaded to this person',
        'filter_items_list'     => 'Filter people list',
        'items_list_navigation' => 'People list navigation',
        'items_list'            => 'People list',
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'person'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'			 => 'dashicons-groups',
        'supports'           => array('title', 'editor', 'thumbnail'),
    );
 
    register_post_type('person', $args);
}