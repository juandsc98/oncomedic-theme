<?php 


function css(){
    wp_enqueue_style('main', get_stylesheet_directory_uri(). '/assets/dist/main.css', array(), '1.0.0');
    
}
add_action('wp_enqueue_scripts', 'css');

function js(){
    wp_enqueue_script('main', get_stylesheet_directory_uri(). '/assets/dist/main.bundle.js', array(), '1.0.0');
   // wp_enqueue_script('vue', get_stylesheet_directory_uri(). '/assets/src/vue.global.js', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'js');


