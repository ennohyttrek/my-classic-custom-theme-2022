<?php

function custom_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); 
    wp_enqueue_style( 'slug-editor-ui-style', get_theme_file_uri( 'editor-ui-styles.css' ) );
    wp_enqueue_style( 'inter-font', get_template_directory_uri() . '/fonts/inter/font-style.css' );
    wp_enqueue_style( 'roboto-font', get_template_directory_uri() . '/fonts/roboto/font-style.css' );
    wp_enqueue_style( 'petrona-font', get_template_directory_uri() . '/fonts/petrona/font-style.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fonts/fontawesome/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_stylesheets' );




function register_my_menus() {
  register_nav_menus(
    array(
        'header-menu' => __( 'Top Menu' ),
        'secondary-menu' => __( 'Secondary Menu' ),
        'mobile-menu' => __( 'Mobile Menu' ),        
        'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

function register_my_widgets() {
    
            register_sidebar( array(
		'name'          => 'Header Widgets',
		'id'            => 'footer-widgets',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
    
                register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
    
    
        register_sidebar( array(
		'name'          => 'Footer Widgets 1',
		'id'            => 'footer-widgets-1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
    
            register_sidebar( array(
		'name'          => 'Footer Widgets 2',
		'id'            => 'footer-widgets-2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
}
add_action( 'widgets_init', 'register_my_widgets' );

	
//all theme support should be combined into one proper function with the 'after_setup_theme' parameter set!

add_theme_support( 'post-thumbnails' );

add_theme_support( 'editor-styles' );

add_editor_style( 'editor-styles.css' );
