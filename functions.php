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

// CPT - Fluent Form Integrations
function ff_custom_post_type() {
  $labels = array(
      'name'               => _x('Integrations', 'post type general name', 'kadence'),
      'singular_name'      => _x('Integration', 'post type singular name', 'kadence'),
      'menu_name'          => _x('Integrations', 'admin menu', 'kadence'),
      'name_admin_bar'     => _x('Integration', 'add new on admin bar', 'kadence'),
      'add_new'            => _x('Add New', 'Integration', 'kadence'),
      'add_new_item'       => __('Add New Integration', 'kadence'),
      'new_item'           => __('New Integration', 'kadence'),
      'edit_item'          => __('Edit Integration', 'kadence'),
      'view_item'          => __('View Integration', 'kadence'),
      'all_items'          => __('All Integrations', 'kadence'),
      'search_items'       => __('Search Integrations', 'kadence'),
      'parent_item_colon'  => __('Parent Integrations:', 'kadence'),
      'not_found'          => __('No integrations found.', 'kadence'),
      'not_found_in_trash' => __('No integrations found in Trash.', 'kadence')
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'fluent-form-integrations'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
  );

  register_post_type('integrations', $args);

  // Custom Post Type: Movies
  $labels_movies = array(
    'name'               => _x('Forms Demo', 'post type general name', 'kadence'),
    'singular_name'      => _x('Forms Demo', 'post type singular name', 'kadence'),
    'menu_name'          => _x('Forms Demo', 'admin menu', 'kadence'),
    'name_admin_bar'     => _x('Forms Demo', 'add new on admin bar', 'kadence'),
    'add_new'            => _x('Add New', 'Forms Demo', 'kadence'),
    'add_new_item'       => __('Add New Forms Demo', 'kadence'),
    'new_item'           => __('New Forms Demo', 'kadence'),
    'edit_item'          => __('Edit Forms Demo', 'kadence'),
    'view_item'          => __('View Forms Demo', 'kadence'),
    'all_items'          => __('All Forms Demo', 'kadence'),
    'search_items'       => __('Search Forms Demo', 'kadence'),
    'parent_item_colon'  => __('Parent Forms Demo:', 'kadence'),
    'not_found'          => __('No Forms Demo found.', 'kadence'),
    'not_found_in_trash' => __('No Forms Demo found in Trash.', 'kadence')
);

$args_movies = array(
    'labels'             => $labels_movies,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'fluent-forms-demo'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title', 'thumbnail'),
    'taxonomies'         => array('forms-demo-category')
);
register_post_type('form_demos', $args_movies);

// Custom Taxonomy: Genre for Movies
register_taxonomy('forms-demo-category', 'form_demos', array(
  'label' => 'Category',
  'rewrite' => array('slug' => 'form-demos-category'),
  'hierarchical' => true,
));
}

add_action('init', 'ff_custom_post_type');