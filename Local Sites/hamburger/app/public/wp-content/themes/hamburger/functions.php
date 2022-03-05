<?php
function load_import_css() {
    wp_enqueue_style("hamburger",get_template_directory_uri()."/css/style.css" , array(), null, 'all');
    wp_enqueue_script( "hamburger",get_template_directory_uri()."/js/script.js" );
    // wp_enqueue_style( 'style', get_template_directory_uri() . "/style.css", array(), '1.0.0' );
}
add_action('wp_enqueue_scripts', 'load_import_css');

add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function add_thumbnail_size() {
    add_theme_support( 'post-thumbnails',array('page') );
    register_post_type( 'takeout',
array(
      'supports' => array( 'title', 'thumbnail','editor' )
     )
);
    add_image_size('takeout', 500, 300, true );// 追加するサムネイル画像
  }



function hamburger_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { //シングルページなら
        $title = single_post_title( '', false );
    }
    return $title;
}


add_filter( 'pre_get_document_title', 'hamburger_title' );
// add_filter( 'body_class', 'add_page_slug_class_name' );
// function add_page_slug_class_name( $class ) {
//   if ( is_page() ) {
//     $page = get_post( get_the_ID() );
//     $class[] = $page->side;
//   }
//   return $class;
// }

// aタグにclassをつける
add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);
function add_class_on_link($item_output, $item){
$css_class = esc_attr( $item->classes[0] );
if ($css_class) {
return preg_replace('/(<a.*?)/', '$1' . " class='" . $css_class . "'", $item_output);
}else{
return $item_output;
}
}

//①liの「CSS class (オプション)」と余計なコードの削除するコード
add_filter( 'nav_menu_css_class', 'remove_to_currentClass', 10, 2 );
function remove_to_currentClass( $classes, $item ) {
$classes = array();
$classes[] = 'menu-item ';
if( $item -> current == true ) {
$classes[] = 'current';
}
if( !empty( $custom_class ) ){
$classes[] = $custom_class;
}
return $classes;
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
      'name' => 'サイドバー',
      'id' => 'sidebar',
      'description' => 'サイドバーウィジェット',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
    
   ));
  }


/*==============================
固定ページカテゴリ追加用コード
==============================*/
 
add_action('init','add_categories_for_pages'); 
function add_categories_for_pages(){ 
   register_taxonomy_for_object_type('category', 'page'); 
} 
add_action( 'pre_get_posts', 'nobita_merge_page_categories_at_category_archive' ); 
function nobita_merge_page_categories_at_category_archive( $query ) { 
 
if ( $query->is_category== true && $query->is_main_query() ) { 
$query->set('post_type', array( 'post', 'page', 'nav_menu_item')); 
} 
} 


 


  