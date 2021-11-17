<?php
function load_import_css() {
    wp_enqueue_style("hamburger",get_template_directory_uri()."/css/sass/style.css", false );
}
add_action('wp_enqueue_scripts', 'load_import_css');