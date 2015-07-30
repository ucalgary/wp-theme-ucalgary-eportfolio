<?php
/**
 * uc-eportfolio functions and definitions
 *
 * @package uc-eportfolio
 */

if ( ! function_exists( 'uc_eportfolio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function uc_eportfolio_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on uc-eportfolio, use a find and replace
	 * to change 'uc-eportfolio' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'uc-eportfolio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'uc-eportfolio' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'uc_eportfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // uc_eportfolio_setup
add_action( 'after_setup_theme', 'uc_eportfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function uc_eportfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'uc_eportfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'uc_eportfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function uc_eportfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'uc-eportfolio' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'uc_eportfolio_widgets_init' );


/**
 * Add Bootstrap
 */
function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap-3.3.5-dist/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap-3.3.5-dist/js/bootstrap.min.js', array('jquery'), '3.0.0', true );
}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

/**
 * Enqueue scripts and styles.
 */
function uc_eportfolio_scripts() {
	
	wp_enqueue_style( 'uc-eportfolio-style', get_stylesheet_uri() );

	wp_enqueue_style( 'ucalgary-eportfolio-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic|Open+Sans:400italic,600italic,700italic,400,600,700|Roboto:400,400italic,500,700,500italic,700italic|Montserrat:400,700|Raleway:400,500,600,700');
	
	wp_enqueue_style( 'ucalgary-eportfolio-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

	//wp_enqueue_script( 'ucalgary-eportfolio-parallax', get_template_directory_uri() . '/js/parallax.js', array('ucalgary-eportfolio-materialize'), '20120206', true );	


	wp_enqueue_script( 'uc-eportfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'uc-eportfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	wp_enqueue_script( 'front-page-scripts', get_stylesheet_directory_uri() . '/js/front-page.js', array('jquery'), '20150727', false);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	
	if(basename($_SERVER['PHP_SELF']) == 'wp-signup.php'){
		wp_enqueue_style('frontpage-styles', get_stylesheet_directory_uri().'/wp-signup-styles.css');
	}

	else if(is_front_page()){
		wp_enqueue_style('frontpage-styles', get_stylesheet_directory_uri().'/frontpage.css');
	}
			
	
}
add_action( 'wp_enqueue_scripts', 'uc_eportfolio_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
