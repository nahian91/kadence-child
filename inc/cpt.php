<?php 

function ff_custom_post_type() {

    // CPT - Fluent Form Integrations
    $labels_integrations = array(
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
  
    $args_integrations = array(
        'labels'             => $labels_integrations,
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
        'menu_icon'          => 'dashicons-admin-tools',
        'supports'           => array('title', 'editor')
    );

    register_post_type('integrations', $args_integrations);
  
    // CPT - Fluent Forms Demo
    $labels_forms_demo = array(
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
  
  $args_forms_demo = array(
      'labels'             => $labels_forms_demo,
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
      'menu_icon'          => 'dashicons-forms',
      'supports'           => array('title', 'thumbnail', 'custom-fields'),
      'taxonomies'         => array('forms-demo-category')
  );
  register_post_type('form-demos', $args_forms_demo);
  
  // Custom Taxonomy: Forms Demo
  register_taxonomy('forms-demo-category', 'form-demos', array(
    'label' => 'Category',
    'hierarchical' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'custom-category'),
  ));
}
add_action('init', 'ff_custom_post_type');