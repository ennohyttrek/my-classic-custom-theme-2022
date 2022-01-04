<?php

function custom_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); 
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