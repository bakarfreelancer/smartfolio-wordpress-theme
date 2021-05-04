<?php
// Register Custom Post Type Project
function create_project_cpt() {

	$labels = array(
		'name' => _x( 'Projects', 'Post Type General Name', 'sf' ),
		'singular_name' => _x( 'Project', 'Post Type Singular Name', 'sf' ),
		'menu_name' => _x( 'Projects', 'Admin Menu text', 'sf' ),
		'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', 'sf' ),
		'archives' => __( 'Project Archives', 'sf' ),
		'attributes' => __( 'Project Attributes', 'sf' ),
		'parent_item_colon' => __( 'Parent Project:', 'sf' ),
		'all_items' => __( 'All Projects', 'sf' ),
		'add_new_item' => __( 'Add New Project', 'sf' ),
		'add_new' => __( 'Add New', 'sf' ),
		'new_item' => __( 'New Project', 'sf' ),
		'edit_item' => __( 'Edit Project', 'sf' ),
		'update_item' => __( 'Update Project', 'sf' ),
		'view_item' => __( 'View Project', 'sf' ),
		'view_items' => __( 'View Projects', 'sf' ),
		'search_items' => __( 'Search Project', 'sf' ),
		'not_found' => __( 'Not found', 'sf' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'sf' ),
		'featured_image' => __( 'Featured Image', 'sf' ),
		'set_featured_image' => __( 'Set featured image', 'sf' ),
		'remove_featured_image' => __( 'Remove featured image', 'sf' ),
		'use_featured_image' => __( 'Use as featured image', 'sf' ),
		'insert_into_item' => __( 'Insert into Project', 'sf' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'sf' ),
		'items_list' => __( 'Projects list', 'sf' ),
		'items_list_navigation' => __( 'Projects list navigation', 'sf' ),
		'filter_items_list' => __( 'Filter Projects list', 'sf' ),
	);
	$args = array(
		'label' => __( 'Project', 'sf' ),
		'description' => __( 'Projects completed', 'sf' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-portfolio',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'page-attributes', 'post-formats', 'custom-fields'),
		// 'taxonomies' => array('category'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'create_project_cpt', 0 );


function create_category_tax() {

	$labels = array(
		'name'              => _x( 'Projects categories', 'taxonomy general name', 'sf' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'sf' ),
		'search_items'      => __( 'Search Categories', 'sf' ),
		'all_items'         => __( 'All Categories', 'sf' ),
		'parent_item'       => __( 'Parent Category', 'sf' ),
		'parent_item_colon' => __( 'Parent Category:', 'sf' ),
		'edit_item'         => __( 'Edit Category', 'sf' ),
		'update_item'       => __( 'Update Category', 'sf' ),
		'add_new_item'      => __( 'Add New Category', 'sf' ),
		'new_item_name'     => __( 'New Category Name', 'sf' ),
		'menu_name'         => __( 'Categories', 'sf' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'sf' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'projectcategory', array('project'), $args );

}
add_action( 'init', 'create_category_tax' );