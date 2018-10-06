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


add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('portfolio', array(
		'labels'             => array(
			'name'               => 'portfolio', // Основное название типа записи
			'singular_name'      => 'portfolio', // отдельное название записи типа Book
			'add_new'            => 'Добавить работу',
			'add_new_item'       => 'Добавить новую работу',
			'edit_item'          => 'Редактировать работу',
			'new_item'           => 'Новая рвабота',
			'view_item'          => 'Посмотреть работу',
			'search_items'       => 'Найти работу',
			'not_found'          =>  'работ не найдено',
			'not_found_in_trash' => 'В корзине работ не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Портфолио'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );
}

function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Меню в шапке' );
	add_theme_support( 'title-tag' );
	add_theme_support("post-thumbnails", array("post", "portfolio"));
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

