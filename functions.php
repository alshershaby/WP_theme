<?php 
function shershaby_files(){
wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '0.1', true );

wp_enqueue_style('custom-font','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
wp_enqueue_style('main-styles',get_theme_file_uri('/build/style-index.css'));
wp_enqueue_style('extra-styles',get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts','shershaby_files');



function shershaby_features(){
    add_theme_support('title-tag');
    // register_nav_menu('headerMenuLocation','Header Menu Location ');
    // register_nav_menu('footerExplore','Footer Menu one ');
    // register_nav_menu('footerLearn','Footer Menu two ');
}

add_action('after_setup_theme','shershaby_features');