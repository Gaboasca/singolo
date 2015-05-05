<?php

function singolo_script_enqueue() {
	wp_enqueue_style('normalize', get_template_directory_uri().'/css/Normalize.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/singolo.css', array(), '1.0.0', 'all');
	wp_enqueue_style('main', get_template_directory_uri().'/css/main.css', array(), '1.0.0', 'all');
	wp_enqueue_style('mediaqueries', get_template_directory_uri().'/css/mediaqueries.css', array(), '1.0.0', 'all');

	wp_enqueue_script('jqueryjs', get_template_directory_uri().'/js/jquery-2.0.0.min.js', array(), '1.0.0', true);
	wp_enqueue_script('sliderjs', get_template_directory_uri().'/js/slider.js', array('jqueryjs'), '1.0.0', true);
	wp_enqueue_script('galleryjs', get_template_directory_uri().'/js/gallery.js', array('jqueryjs'), '1.0.0', true);
	wp_enqueue_script('pubsubjs', get_template_directory_uri().'/js/pubsub.js', array('jqueryjs'), '1.0.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri().'/js/main.js', array('jqueryjs'), '1.0.0', true);
	
}

add_action('wp_enqueue_scripts', 'singolo_script_enqueue');

function singolo_theme_setup() {
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
}

add_action('init', 'singolo_theme_setup');

add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('quote','image','video'));

function service_create_post_type() {
	$labels = array(
		'name' => 'Services',
		'singular_name' => 'Service',
		'add_new' => 'Add service',
		'all_items' => 'All services',
		'add_new_item' => 'Add service',
		'edit_item' => 'Edit service',
		'new_item' => 'New service',
		'view_item' => 'View service',
		'search_items' => 'Search services',
		'not_found' => 'No services found',
		'not_found_in_trash' => 'No services found in trash',
		'parent_item_colon' => 'Parent service'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'rewrite' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			//'author',
			//'trackbacks',
			//'custom-fields',
			//'comments',
			'revisions'
			//'page-attributes', // (menu order, hierarchical must be true to show Parent option)
			//'post-formats',
		)
	);

	register_post_type( 'services', $args );
	//flush_rewrite_rules();
}
add_action( 'init', 'service_create_post_type' );

function profile_create_post_type() {
	$labels = array(
		'name' => 'About',
		'singular_name' => 'Profile',
		'add_new' => 'Add profile',
		'all_items' => 'All profiles',
		'add_new_item' => 'Add profile',
		'edit_item' => 'Edit profile',
		'new_item' => 'New profile',
		'view_item' => 'View profile',
		'search_items' => 'Search profiles',
		'not_found' => 'No profiles found',
		'not_found_in_trash' => 'No profiles found in trash',
		'parent_item_colon' => 'Parent profile'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'rewrite' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			//'author',
			//'trackbacks',
			//'custom-fields',
			//'comments',
			'revisions'
			//'page-attributes', // (menu order, hierarchical must be true to show Parent option)
			//'post-formats',
		)
	);

	register_post_type( 'profiles', $args );
	//flush_rewrite_rules();
}
add_action( 'init', 'profile_create_post_type' );


function slide_create_post_type() {
	$labels = array(
		'name' => 'Slider',
		'singular_name' => 'Slider',
		'add_new' => 'Add slide',
		'all_items' => 'All slides',
		'add_new_item' => 'Add slide',
		'edit_item' => 'Edit slide',
		'new_item' => 'New slide',
		'view_item' => 'View slide',
		'search_items' => 'Search slides',
		'not_found' => 'No slides found',
		'not_found_in_trash' => 'No slides found in trash',
		'parent_item_colon' => 'Parent slide'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'rewrite' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			//'author',
			//'trackbacks',
			//'custom-fields',
			//'comments',
			'revisions'
			//'page-attributes', // (menu order, hierarchical must be true to show Parent option)
			//'post-formats',
		)
	);

	register_post_type( 'slides', $args );
	//flush_rewrite_rules();
}
add_action( 'init', 'slide_create_post_type' );

function gallery_create_post_type() {
	$labels = array(
		'name' 					=> _x( 'Gallery', 'post type general name' ),
		'singular_name' 		=> _x( 'Gallery', 'post type singular name' ),
		'add_new' 				=> _x( 'Add New', 'Project' ),
		'add_new_item' 			=> __( 'Add New Project' ),
		'edit_item' 			=> __( 'Edit Project' ),
		'new_item' 				=> __( 'New Project' ),
		'all_items' 			=> __( 'All Projects' ),
		'view_item' 			=> __( 'View Project' ),
		'search_items' 			=> __( 'Search Projects' ),
		'not_found' 			=> __( 'No projects found' ),
		'not_found_in_trash' 	=> __( 'No projects found in Trash' ),
		'parent_item_colon' 	=> '',
		'menu_name'				=> 'Gallery' 
		);

	$supports = array (
		'title',
		'editor',
		'author',
		'custom-fields',
		'post-formats',
		'excerpt',
		'thumbnail',
		);

	$details = array(
		'labels' 		=> $labels,
		'description' 	=> 'Add new project to the gallery!',
		'public' 		=> true,
		'rewrite' 		=> true,
		'supports' 		=> $supports,
		'has_archive' 	=> true,
		);
	register_post_type( 'projects', $details );
}
add_action( 'init', 'gallery_create_post_type' );

	function taxonomies_gallery() {
		$labels = array(
			'name' 					=> _x( 'Gallery Categories', 'taxonomy general name' ),
			'singular_name' 		=> _x( 'Gallery Category', 'taxonomy singular name' ),
			'search_items' 			=> __( 'Search Gallery Categories' ),
			'all_items' 			=> __( 'All Gallery Categories' ),
			'parent_item'			=> __( 'Parent Gallery Category' ),
			'parent_item_colon' 	=> __( 'Parent Gallery Category:' ),
			'edit_item' 			=> __( 'Edit Gallery Category' ),
			'update_item'			=> __( 'Update Gallery Category' ),
			'add_new_item' 			=> __( 'Add New Gallery Category' ),
			'new_item_name' 		=> __( 'New Gallery Category' ),
			'menu_name'				=> __( 'Gallery Categories' )
			);
		$args = array(
			'labels' => $labels,
			'hierarchical' => true,
			); 

		register_taxonomy('gallery_category', array('projects'), $args);
	}
	add_action('init', 'taxonomies_gallery', 0 );

