<?php


if ( ! function_exists( 'Propertypro_setup' ) ) :

function Propertypro_setup() {
	
	// include get_template_directory().'/widget.php';

	/*
	* Define a constant path to our single template folder
	*/
	// define(SINGLE_PATH, TEMPLATEPATH . '/single');
	 
	/**
	* Filter the single_template with our custom function
	*/
	// add_filter('single_template', 'my_single_template');
	 
	/**
	* Single template function which will choose our template
	*/
	// function my_single_template($single) {
	// global $wp_query, $post;
	 
	/**
	* Checks for single template by category
	* Check by category slug and ID
	*/
	// foreach((array)get_the_category() as $cat) :
	// 	if($cat->slug == 'gallery'){

	// 		if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
	// 		return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
			 
	// 		elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
	// 		return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
			 	
	// 	}
	// endforeach;
	// }
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'maven' ),
		'social'  => __( 'Social Links Menu', 'maven' ),
		'footer-menu'  => __( 'Footer Menu Links', 'maven' ),

	) );


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-thumbnails' ); 

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	add_image_size( 'popular-thumb', 100, 75, true ); // (cropped)

}

add_action( 'after_setup_theme', 'Propertypro_setup' );

endif; // Property Pro setup

function public_scripts(){

	// bootstrap
	wp_enqueue_script('bootstrap-min-js', get_template_directory_uri(). '/bootstrap/js/bootstrap.min.js',array(), null, 'all');
	wp_enqueue_style('bootstrap-min-css', get_template_directory_uri(). '/bootstrap/css/bootstrap.min.css',array(), null, 'all');
	wp_enqueue_style('font-awesome-min-css', get_template_directory_uri(). '/bootstrap/css/font-awesome.min.css',array(), null, 'all');
	wp_enqueue_style('animate-css', get_template_directory_uri(). '/bootstrap/css/animate.css',array(), null, 'all');




	if ( wp_is_mobile() ) {
		/* Display and echo mobile specific stuff here */
	}
	// Maven style
	// wp_enqueue_style('maven-front-css', get_template_directory_uri(). '/assets/css/style.css');
	wp_enqueue_style( 'project-iloilo-style', get_stylesheet_uri() );


}
add_action( 'wp_enqueue_scripts', 'public_scripts' );

function maven_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Area', 'maven' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'maven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'After Content', 'maven' ),
		'id'            => 'after-content',
		'description'   => __( 'Add widgets here to appears below content.', 'maven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Before Widget Area', 'maven' ),
		'id'            => 'before-widget',
		'description'   => __( 'Add widgets here to appears before widget.', 'maven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Before Footer Area', 'maven' ),
		'id'            => 'before-footer',
		'description'   => __( 'Add widgets here to appears before widget.', 'maven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'After Post Area', 'maven' ),
		'id'            => 'after-post',
		'description'   => __( 'Add widgets here to appears before widget.', 'maven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Footer Widgets
	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'maven' ),
		'id'            => 'footer-widget-1',
		'description'   => __( 'Add widgets here to appears before widget.', 'maven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'maven' ),
		'id'            => 'footer-widget-2',
		'description'   => __( 'Add widgets here to appears before widget.', 'maven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'maven' ),
		'id'            => 'footer-widget-3',
		'description'   => __( 'Add widgets here to appears before widget.', 'maven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'maven' ),
		'id'            => 'footer-widget-4',
		'description'   => __( 'Add widgets here to appears before widget.', 'maven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'maven_widgets_init' );

show_admin_bar(false);