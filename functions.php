<?php

// Register Custom Menus
if ( ! function_exists( 'kadence_child_register_nav_menu' ) ) {
	function kadence_child_register_nav_menu(){
		register_nav_menus( array(
	    	'main_menu' => __( 'Main Menu', 'kadence' ),
	    	'footer_1' => __( 'Footer 1', 'kadence' ),
	    	'footer_2' => __( 'Footer 2', 'kadence' ),
	    	'footer_3' => __( 'Footer 3', 'kadence' ),
	    	'footer_4' => __( 'Footer 4', 'kadence' ),
	    	'footer_5' => __( 'Footer 5', 'kadence' ),
	    	'footer_menu' => __( 'Footer Menu', 'kadence' ),
		) );
	}
	add_action( 'after_setup_theme', 'kadence_child_register_nav_menu');
}

// Enqueue Custom CSS & JS Files
function ff_enqueue_styles() {
    wp_enqueue_style( 'ff-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'ff-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'ff-parent-style' ), wp_get_theme()->get('Version'));    
    wp_enqueue_style( 'ff-child-responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array( 'ff-parent-style' ), wp_get_theme()->get('Version'));    
    
    wp_enqueue_script('ff-child-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'ff_enqueue_styles' );

// Author Page Posts Limit
function ff_author_posts_limit( $query ) {
  if ( $query->is_author() && $query->is_main_query() ) {
    $query->set( 'posts_per_page', 6 );
  }
}
add_action( 'pre_get_posts', 'ff_author_posts_limit' );

// Load Custom Post
require get_stylesheet_directory() . '/inc/cpt.php';

// Load ACF
require get_stylesheet_directory() . '/inc/acf.php';

// Load Widgets
require get_stylesheet_directory() . '/inc/widgets.php';
