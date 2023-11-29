<?php 

// Site Option Page 
if( function_exists('acf_add_options_page') ) {	
    acf_add_options_page(array(
      'page_title' 	=> 'Site Settings',
      'menu_title'	=> 'Site Settings',
      'menu_slug' 	=> 'fluentforms-settings',
      'capability' => 'edit_posts',
      'icon_url'   => 'dashicons-welcome-widgets-menus',
      'position'   => 2,
      'redirect' => false
    ));    
}

// Register ACF Block
function ff_acf_init_block_types() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

    // Register Hero Block.
    acf_register_block_type(array(
      'name'              => 'hero',
      'title'             => __('Hero', 'kadence'),
      'description'       => __('A custom description for hero section.', 'kadence'),
      'render_callback'   => 'ff_acf_block_render_callback',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'hero', 'fluent' ),
    ));

    // Register CTA Block.
    acf_register_block_type(array(
      'name'              => 'cta',
      'title'             => __('CTA', 'kadence'),
      'description'       => __('A custom description for cta section.', 'kadence'),
      'render_callback'   => 'ff_acf_block_render_callback',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'cta', 'fluent' ),
    ));

    // Register Prices block.
    acf_register_block_type(array(
      'name'              => 'prices',
      'title'             => __('Prices', 'kadence'),
      'description'       => __('A custom description for prices section.', 'kadence'),
      'render_callback'   => 'ff_acf_block_render_callback',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'prices', 'fluent' ),
    ));

    // Register Forms Demo Blocks.
    acf_register_block_type(array(
      'name'              => 'forms-demo',
      'title'             => __('Forms Demo', 'kadence'),
      'description'       => __('A custom description for hero section.', 'kadence'),
      'render_callback'   => 'ff_acf_block_render_callback',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'forms', 'fluent' ),
    ));

    // Register Integration Block.
    acf_register_block_type(array(
      'name'              => 'integrations',
      'title'             => __('Integrations', 'kadence'),
      'description'       => __('A custom description for integration section.', 'kadence'),
      'render_callback'   => 'ff_acf_block_render_callback',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'integrations', 'fluent' ),
    ));

    // Register Posts Query Block.
    acf_register_block_type(array(
      'name'              => 'posts',
      'title'             => __('Posts Query', 'kadence'),
      'description'       => __('A custom description for posts query section.', 'kadence'),
      'render_callback'   => 'ff_acf_block_render_callback',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'posts', 'fluent' ),
    ));

    // Register Featured Post Block.
    acf_register_block_type(array(
      'name'              => 'featured-post',
      'title'             => __('Featured Post', 'kadence'),
      'description'       => __('A custom description for featured post section.', 'kadence'),
      'render_callback'   => 'ff_acf_block_render_callback',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'posts', 'fluent' ),
    ));

    // Register Featured Post Block.
    acf_register_block_type(array(
      'name'              => 'hero-home',
      'title'             => __('Hero Home', 'kadence'),
      'description'       => __('A custom description for hero home section.', 'kadence'),
      'render_callback'   => 'ff_acf_block_render_callback',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'hero', 'fluent' ),
    ));
  }
}
add_action('acf/init', 'ff_acf_init_block_types');

function ff_acf_block_render_callback( $block ) {
	$slug = str_replace( 'acf/', '', $block['name'] );
	if ( file_exists( get_theme_file_path( "/template-parts/blocks/ff-{$slug}/ff-{$slug}.php" ) ) ) {
		include( get_theme_file_path( "/template-parts/blocks/ff-{$slug}/ff-{$slug}.php" ) );
	}
}