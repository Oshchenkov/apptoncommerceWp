<?php
/**
 * apptoncommerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * 
 */

if ( ! function_exists( 'apptoncommerce_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function apptoncommerce_setup() {
		

		// Add default posts and comments RSS feed links to head.
		// add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		/**
		*  Add HTML5 theme support.
		*/
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main' => esc_html__( 'Main fixed menu', 'apptoncommerce' ),
		) );

	
	}
endif;
add_action( 'after_setup_theme', 'apptoncommerce_setup' );

// Enqueue Theme Styles
function load_stylesheets(){
	wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' , array(), null, 'all');
	wp_enqueue_style('theme-style-min', get_template_directory_uri() . '/css/style.min.css' , array(), 1, 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css' , array(), 1, 'all');
}
add_action( 'wp_enqueue_scripts', 'load_stylesheets' );

// Enqueue Theme Scripts
function load_scripts(){
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.0.min.js', array(), null, true);

	wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), null, true);
	wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), null, true);

	wp_enqueue_script( 'common-js', get_template_directory_uri() . '/js/common.js' , array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'load_scripts');


// disable auto add tag <p> in content

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );