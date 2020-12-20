<?php 

// Register styles
function css(){
    wp_enqueue_style('main', get_stylesheet_directory_uri(). '/assets/dist/main.css', array(), '1.0.0');
    
}
add_action('wp_enqueue_scripts', 'css');

//Register Scripts
function js(){
    wp_enqueue_script('main', get_stylesheet_directory_uri(). '/assets/dist/main.bundle.js', array(), '1.0.0');
    wp_enqueue_script('swiper', get_stylesheet_directory_uri(). '/assets/dist/swiper-bundle.min.js', array(), '1.0.0');
   
}
add_action('wp_enqueue_scripts', 'js');

// Registrer Bootstrap 4 navwalker
function register_navwalker(){
	require_once get_template_directory() . '/template/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//Register menu header-menu
function menu_main(){
    register_nav_menus(array(
        'header-menu' => 'Header menu',

    ));
}
add_action('init', 'menu_main');

function oncomedic_widgets(){
    register_sidebar(array(
        'name' => 'Secciones generales',
        'id' => 'seccion_general',
        'before_widget'=>'<div class="widget">',
        'after_widget' => '</div>'
        
    ));
}

add_action('widgets_init', 'oncomedic_widgets');




