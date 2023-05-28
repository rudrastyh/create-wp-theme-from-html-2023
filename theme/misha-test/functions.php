<?php


add_action( 'wp_enqueue_scripts', function() {


	wp_enqueue_style( 'main1', get_stylesheet_directory_uri() . '/assets/css/main.css' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'scrollex', get_stylesheet_directory_uri() . '/assets/js/jquery.scrollex.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'skel', get_stylesheet_directory_uri() . '/assets/js/skel.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'util', get_stylesheet_directory_uri() . '/assets/js/util.js', array( 'jquery' ) );
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery', 'scrollex', 'skel', 'util' ) );




} );


add_action( 'after_setup_theme', function() {


	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

} );


register_nav_menus(
	array(
		'head_menu' => 'Main menu fsdfds'
	)
);


add_filter( 'simple_register_option_pages', 'misha_option_page' );

function misha_option_page( $option_pages ) {

	$option_pages[] = array(
		'id'	=>	'misha_settings',
		'title' => 'My Slider Settings',
		'menu_name' => 'Slider',
		'parent_slug' => 'options-general.php',
		'capability' =>	'edit_posts',
		'fields' => array(
			array(
				'id' => 'my_slider_field',
				'label' => 'Slides',
				'type' => 'repeater',
				'subfields' => array(
					array(
						'type' => 'image',
						'id' => 'img',
						'label' => 'Image'
					),
					array(
						'type' => 'text',
						'id' => 'title',
						'label' => 'Title'
					),
					array(
						'type' => 'text',
						'id' => 'desc',
						'label' => 'Description'
					),

				)
			)

	 	),

	);

	return $option_pages;

}
