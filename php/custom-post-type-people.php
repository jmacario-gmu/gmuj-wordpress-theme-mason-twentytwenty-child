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

/**
 * Register a taxonomy for people
 */
add_action('init', 'gmuj_create_people_taxonomy');
function gmuj_create_people_taxonomy() {

	// Register taxonomy
		register_taxonomy(
			'groups',
			'person',
			array(
			'hierarchical' => true,
			'labels' => array(
				'name' => 'Groups',
				'singular_name' => 'Group',
				'search_items' =>  'Search Groups',
				'all_items' => 'All Groups',
				'parent_item' => 'Parent Group',
				'parent_item_colon' => 'Parent Group:',
				'edit_item' => 'Edit Group',
				'update_item' => 'Update Group',
				'add_new_item' => 'Add New Group',
				'new_item_name' => 'New Group',
				'menu_name' => 'Groups',
				),
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'group' ),
			)
		);

}

/**
 * Register meta boxes and custom fields for the people custom post type
 */
add_action('admin_init', 'gmuj_register_meta_boxes_people');
function gmuj_register_meta_boxes_people() {

    // Set the meta box fields meta-key prefix
		$prefix = 'gmuj_';

	// Define the meta box and custom fields
	    $meta_boxes_people = array(
	        'title' => 'Person Information',
	        'pages' => array('person'), // What post types does this meta box apply to?
	        'context' => 'normal', // Where the meta box appear: normal (default), advanced, side. Optional.
	        'priority' => 'high', // Order of meta box: high (default), low. Optional.
	        'fields' => array(
	            array(
	                'name' => 'Last Name', // Field name - Will be used as label
	                'id' => $prefix . 'name_last', // Field ID, i.e. the meta key
	                'desc' => 'Used for alphabetizing people', // Field description (optional)
	                'type'  => 'text', // Field type
	            ),
	            array(
	                'name' => 'E-mail Address', // Field name - Will be used as label
	                'id' => $prefix . 'contact_email', // Field ID, i.e. the meta key
	                'type'  => 'text', // Field type
	            ),
	            array(
	                'name' => 'Title/Role', // Field name - Will be used as label
	                'id' => $prefix . 'person_title', // Field ID, i.e. the meta key
	                'type'  => 'text', // Field type
	            ),
	            array(
	                'name' => 'Phone Number', // Field name - Will be used as label
	                'id' => $prefix . 'contact_phone', // Field ID, i.e. the meta key
	                'desc' => 'Format: 555-123-1234', // Field description (optional)
	                'type'  => 'text', // Field type
	            ),
	            array(
	                'name' => 'Website', // Field name - Will be used as label
	                'id' => $prefix . 'website', // Field ID, i.e. the meta key
	                'desc' => 'Must start with http:// or https://', // Field description (optional)
	                'type'  => 'text', // Field type
	            ),
	        ),
	        'validation' => array(
	            'rules' => array(
	                // make last_name required
	                $prefix . 'last_name' => array(
	                    'required' => true,
	                ),
	            ),
	            // override of default jquery.validate messages
	            'messages' => array(
	                $prefix . 'last_name' => array(
	                    'required' => 'Last Name is Required',
	                ),
	            )
	        )
	    );

    // Register the person information meta box
        new RW_Meta_Box($meta_boxes_people);

}