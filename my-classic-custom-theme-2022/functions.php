<?php

function custom_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); 
}
add_action( 'wp_enqueue_scripts', 'custom_stylesheets' );


function register_my_menus() {
  register_nav_menus(
    array(
        'header-menu' => __( 'Main Menu' ),
        'mobile-menu' => __( 'Mobile Menu' ),
        'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );