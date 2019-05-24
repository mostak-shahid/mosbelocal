<?php
add_action( 'init', 'mos_posttype_init' );
function mos_posttype_init() {
	//Cases
	$labels = array(
		'name'               => _x( 'Cases', 'post type general name', 'excavator-template' ),
		'singular_name'      => _x( 'Case', 'post type singular name', 'excavator-template' ),
		'menu_name'          => _x( 'Cases', 'admin menu', 'excavator-template' ),
		'name_admin_bar'     => _x( 'Case', 'add new on admin bar', 'excavator-template' ),
		'add_new'            => _x( 'Add New', 'case', 'excavator-template' ),
		'add_new_item'       => __( 'Add New Case', 'excavator-template' ),
		'new_item'           => __( 'New Case', 'excavator-template' ),
		'edit_item'          => __( 'Edit Case', 'excavator-template' ),
		'view_item'          => __( 'View Case', 'excavator-template' ),
		'all_items'          => __( 'All Cases', 'excavator-template' ),
		'search_items'       => __( 'Search Cases', 'excavator-template' ),
		'parent_item_colon'  => __( 'Parent Cases:', 'excavator-template' ),
		'not_found'          => __( 'No Cases found.', 'excavator-template' ),
		'not_found_in_trash' => __( 'No Cases found in Trash.', 'excavator-template' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'excavator-template' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'case' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'menu_icon' => 'dashicons-screenoptions',
		'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
	);
	register_post_type( 'case', $args );
	//Works
	$labels = array(
		'name'               => _x( 'Works', 'post type general name', 'excavator-template' ),
		'singular_name'      => _x( 'Work', 'post type singular name', 'excavator-template' ),
		'menu_name'          => _x( 'Works', 'admin menu', 'excavator-template' ),
		'name_admin_bar'     => _x( 'Work', 'add new on admin bar', 'excavator-template' ),
		'add_new'            => _x( 'Add New', 'work', 'excavator-template' ),
		'add_new_item'       => __( 'Add New Work', 'excavator-template' ),
		'new_item'           => __( 'New Work', 'excavator-template' ),
		'edit_item'          => __( 'Edit Work', 'excavator-template' ),
		'view_item'          => __( 'View Work', 'excavator-template' ),
		'all_items'          => __( 'All Works', 'excavator-template' ),
		'search_items'       => __( 'Search Works', 'excavator-template' ),
		'parent_item_colon'  => __( 'Parent Works:', 'excavator-template' ),
		'not_found'          => __( 'No Works found.', 'excavator-template' ),
		'not_found_in_trash' => __( 'No Works found in Trash.', 'excavator-template' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'excavator-template' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'work' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 7,
		'menu_icon' => 'dashicons-vault',
		'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
	);
	register_post_type( 'work', $args );
}
add_action( 'after_switch_theme', 'flush_rewrite_rules' );
