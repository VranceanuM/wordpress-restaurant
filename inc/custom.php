<?php 
// Register Custom Post Type
function menu_items() {

	$labels = array(
		'name'                  => _x( 'Meals', 'Post Type General Name', 'digital-entrepreneur-th' ),
		'singular_name'         => _x( 'Meal', 'Post Type Singular Name', 'digital-entrepreneur-th' ),
		'menu_name'             => __( 'Meals', 'digital-entrepreneur-th' ),
		'name_admin_bar'        => __( 'Meals', 'digital-entrepreneur-th' ),
		'archives'              => __( 'Meal Archives', 'digital-entrepreneur-th' ),
		'attributes'            => __( 'Meal Attributes', 'digital-entrepreneur-th' ),
		'parent_item_colon'     => __( 'Parent Meal', 'digital-entrepreneur-th' ),
		'all_items'             => __( 'All Meals', 'digital-entrepreneur-th' ),
		'add_new_item'          => __( 'Add New Meal', 'digital-entrepreneur-th' ),
		'add_new'               => __( 'Add New', 'digital-entrepreneur-th' ),
		'new_item'              => __( 'New Meal', 'digital-entrepreneur-th' ),
		'edit_item'             => __( 'Edit Meal', 'digital-entrepreneur-th' ),
		'update_item'           => __( 'Update Meal', 'digital-entrepreneur-th' ),
		'view_item'             => __( 'View Meal', 'digital-entrepreneur-th' ),
		'view_items'            => __( 'View Meals', 'digital-entrepreneur-th' ),
		'search_items'          => __( 'Search Meal', 'digital-entrepreneur-th' ),
		'not_found'             => __( 'Not found', 'digital-entrepreneur-th' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'digital-entrepreneur-th' ),
		'featured_image'        => __( 'Featured Image', 'digital-entrepreneur-th' ),
		'set_featured_image'    => __( 'Set featured image', 'digital-entrepreneur-th' ),
		'remove_featured_image' => __( 'Remove featured image', 'digital-entrepreneur-th' ),
		'use_featured_image'    => __( 'Use as featured image', 'digital-entrepreneur-th' ),
		'insert_into_item'      => __( 'Insert into meal', 'digital-entrepreneur-th' ),
		'uploaded_to_this_item' => __( 'Uploaded to this meal', 'digital-entrepreneur-th' ),
		'items_list'            => __( 'Meals list', 'digital-entrepreneur-th' ),
		'items_list_navigation' => __( 'Meals list navigation', 'digital-entrepreneur-th' ),
		'filter_items_list'     => __( 'Filter meals list', 'digital-entrepreneur-th' ),
	);
	$args = array(
		'label'                 => __( 'Meal', 'digital-entrepreneur-th' ),
		'description'           => __( 'This is a menu post', 'digital-entrepreneur-th' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-dashboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'meal', $args );

}
add_action( 'init', 'menu_items', 0 );