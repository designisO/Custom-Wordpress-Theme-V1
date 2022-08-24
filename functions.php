<?php
function university_files(){

    wp_enqueue_script('main-university-js', get_theme_file_uri('/src/index.js'), NULL, '1.0', true);
    wp_enqueue_style('custom-google-fonts', 'fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'university_features');