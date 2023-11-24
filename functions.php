<?php

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


add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );
function mytheme_enqueue_styles() {
    wp_enqueue_style( 'mytheme-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'mytheme-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'mytheme-parent-style' ),
        wp_get_theme()->get('Version')
    );
}

/**
 * Site Option Page 
*/

if( function_exists('acf_add_options_page') ) {	
    acf_add_options_page(array(
      'page_title' 	=> 'Site Settings',
      'menu_title'	=> 'Site Settings',
      'menu_slug' 	=> 'fluentforms-settings',
      'capability' => 'edit_posts',
      'icon_url'   => 'dashicons-welcome-widgets-menus',
      'position'   => 2,
      'redirect'		=> false
    ));    
  }