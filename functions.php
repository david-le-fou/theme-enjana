<?php
function register_my_menu(){
    register_nav_menu( 'main-menu', 'Menu principal' );
  }
add_action( 'after_setup_theme', 'register_my_menu' );
function charger_bootstrap() {
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/lib/bootstrap.js');
    wp_enqueue_script( 'javascript', get_template_directory_uri().'/javascript.js' );
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/lib/bootstrap3.css' );
}   
add_action('wp_enqueue_scripts', 'charger_bootstrap');

function modif_head(){
  // add_menu_page( string $page_title, 
  //                string $menu_title, 
  //                string $capability, 
  //                string $menu_slug, 
  //                callable $function = '', 
  //                string $icon_url = '', 
  //                int $position = null )
  add_menu_page('modification header',
  'Header', 
  'manage_options', 
  'modif-head',
  'head_modif', 
  'dashicons-book-alt');

  add_menu_page('modification footer',
  'Footer', 
  'manage_options', 
  'modif-footer',
  'head_modif', 
  'dashicons-book-alt');
}
add_action('admin_menu', 'modif_head');
function head_modif(){
  echo "test header";
}

add_action('admin_menu', 'modif_footer');
function footer_modif(){
  echo "test";
}