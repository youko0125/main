<?php
   
function add_files(){
    wp_enqueue_style('hamburger',  get_template_directory_uri(),'/css/style.css');
    wp_enqueue_script('my_script',get_template_directory_uri(),'/css/js/script.js');

}
      

add_action( 'wp_enqueue_scripts','add_files' );