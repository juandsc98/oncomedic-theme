<?php 

// Register styles
function css(){
    wp_enqueue_style('main', get_stylesheet_directory_uri(). '/assets/dist/main.css', array(), '1.0.0');

    
}
add_action('wp_enqueue_scripts', 'css');

//Register Scripts
function js(){
    wp_enqueue_script('main', get_stylesheet_directory_uri(). '/assets/dist/main.bundle.js', array(), '1.0.0');

   
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
        'menu_secundario' => 'Footer menu'

    ));
}
add_action('init', 'menu_main');

function oncomedic_widgets(){
    register_sidebar(array(
        'name' => 'Secciones generales',
        'id' => 'seccion_general',
        'before_widget'=>'<div id="&1$s" class="widget col-xs-12 col-sm-4 col-md-4 col-lg-4">',
        'after_widget' => '</div>',
        'before_title'=> '<h3 class="widget-title text-center">',
        'after_title' => '</h3>'
        
    ));
}

add_action('widgets_init', 'oncomedic_widgets');

add_theme_support(
    'editor-gradient-presets',
    array(
        array(
            'name'     => __( 'Dark Blue to green', 'oncomedic' ),
            'gradient' => 'linear-gradient(135deg,rgba(33,147,176,1) 0%,rgb(138,163,70,1) 100%)',
            'slug'     => 'dark-blue-to-green'
        ),
		array(
            'name'     => __( 'Orange to green', 'oncomedic' ),
            'gradient' => 'linear-gradient(135deg,rgba(255,153,0,1) 0%,rgba(138,163,70,1) 100%)',
            'slug'     =>  'orange-to-green',
        ),
       
    )
);

