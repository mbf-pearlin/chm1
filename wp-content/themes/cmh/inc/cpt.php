<?php
function banner_init() {
    $args = array(
      'label' => 'Banner',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'banner'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-page',/*icon post*/
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            )
        );
    register_post_type( 'banner', $args );
}
add_action( 'init', 'banner_init' );
register_nav_menu( 'Home', __( 'Navigation Menu', 'cmh' ) );

function help_init() {
    $args = array(
      'label' => 'Help',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'help'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-page',/*icon post*/
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            )
        );
    register_post_type( 'help', $args );
}
add_action( 'init', 'help_init' );
register_nav_menu( 'Home', __( 'Navigation Menu', 'cmh' ) );

function content_init() {
    $args = array(
      'label' => 'Content',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'content'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-page',/*icon post*/
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            )
        );
    register_post_type( 'content', $args );
}
add_action( 'init', 'content_init' );
register_nav_menu( 'Home', __( 'Navigation Menu', 'cmh' ) );






function condition_init() {
    $args = array(
      'label' => 'Condition',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'condition'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-page',/*icon post*/
        'supports' => array(
            'title',
            'editor',
            'excerpt',        
            'thumbnail',
            )
        );
    register_post_type( 'condition', $args );
}
add_action( 'init', 'condition_init' );
register_nav_menu( 'Home', __( 'Navigation Menu', 'chm' ) );

function assessment_init() {
    $args = array(
      'label' => 'Assessment',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'assessment'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-page',/*icon post*/
        'supports' => array(
            'title',
            'editor',
            'excerpt',        
            'thumbnail',
            )
        );
    register_post_type( 'assessment', $args );
}
add_action( 'init', 'assessment_init' );
register_nav_menu( 'Home', __( 'Navigation Menu', 'chm' ) );



function treatment_init() {
    $args = array(
      'label' => 'Treatment',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'treatment'),
        'query_var' => true,
        'menu_icon' => 'dashicons-format-aside',/*icon post*/
        'supports' => array(
            'title',
            'editor',
            'excerpt',        
            'thumbnail',
            )
        );
    register_post_type( 'treatment', $args );
}
add_action( 'init', 'treatment_init' );
register_nav_menu( 'Home', __( 'Navigation Menu', 'chm' ) );

function resources_init() {
    $args = array(
      'label' => 'Resources',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'resources'),
        'query_var' => true,
        'menu_icon' => 'dashicons-category',/*icon post*/
        'supports' => array(
            'title',
            'editor',
            'excerpt',        
            'thumbnail',
            )
        );
    register_post_type( 'resources', $args );
}
add_action( 'init', 'resources_init' );
register_nav_menu( 'Home', __( 'Navigation Menu', 'chm' ) );



?>

