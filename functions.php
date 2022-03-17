<?php
function register_my_menu(){
    register_nav_menu( 'main-menu', 'Menu principal' );
  }

add_action( 'after_setup_theme', 'register_my_menu' );
function charger_bootstrap() {

    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/lib/bootstrap.js', array( 'jquery' ), null, true );
    
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/lib/bootstrap3.css' );
    
}
    
add_action('wp_enqueue_scripts', 'charger_bootstrap');