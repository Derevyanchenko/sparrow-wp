<?php  

add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_enqueue_scripts', 'theme_scripts');

add_action( 'after_setup_theme', 'theme_register_nav_menu' );

add_action( 'widgets_init', 'register_my_widgets' );

function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'left-sidebar',
		'id'            => "left_sidebar",
		'description'   => 'sidebar for your page',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n",
	) );
}

function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Меню в шапке' );
	add_theme_support( 'title-tag' );
	add_theme_support("post-thumbnails", array("post"));
	add_image_size("post_thumb", 1300, 500, true);
}

function theme_styles() {
	wp_enqueue_style('styles', get_stylesheet_uri() );
	wp_enqueue_style('default',get_template_directory_uri() . '/assets/css/default.css');
	wp_enqueue_style('layout',get_template_directory_uri() . '/assets/css/layout.css');
}
function theme_scripts() {

	wp_deregister_script( 'jquery' );
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script('jquery');
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), null, true );
	wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array('jquery'), null, true );
	wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', array('jquery'), null, true );
	wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js', array('jquery'), null, true );
}

