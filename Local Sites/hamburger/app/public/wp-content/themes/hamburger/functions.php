<?php
function load_import_css() {
    wp_enqueue_style("hamburger",get_template_directory_uri()."/css/sass/style.css");
    wp_enqueue_script( "hamburger",get_template_directory_uri()."/css/js/script.js" );
}
add_action('wp_enqueue_scripts', 'load_import_css');

add_theme_support( 'menus' );
add_theme_support( 'title-tag' );

function hamburger_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { //シングルページなら
        $title = single_post_title( '', false );
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'hamburger_title' );

add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $class ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $class[] = $page->side;
  }
  return $class;
}

add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
 
function my_css_attributes_filter($var) {
    return is_array($var) ? array_intersect($var,  array( 'menu-item' ) ) : '';
}
