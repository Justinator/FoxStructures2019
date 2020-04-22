<?php
/**
 * foxStructuresResponsive functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package foxStructuresResponsive
 */
if ( ! function_exists( 'foxStructuresResponsive_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function foxStructuresResponsive_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on foxStructuresResponsive, use a find and replace
		 * to change 'foxStructuresResponsive' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'foxStructuresResponsive', get_template_directory() . '/languages' );
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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'Primary' => esc_html__( 'Primary', 'foxStructuresResponsive' ),
			'mobileNav' => esc_html__( 'mobileNav', 'foxStructuresResponsive' ),
			'footerNav' => esc_html__( 'footerNav', 'foxStructuresResponsive' ),
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
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'foxStructuresResponsive_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'foxStructuresResponsive_setup' );
/**
* Set the content width in pixels, based on the theme's design and stylesheet.
*
* Priority 0 to make it available to lower priority callbacks.
*
* @global int $content_width
*/
function foxStructuresResponsive_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'foxStructuresResponsive_content_width', 640 );
}
add_action( 'after_setup_theme', 'foxStructuresResponsive_content_width', 0 );

/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function foxStructuresResponsive_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'foxStructuresResponsive' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'foxStructuresResponsive' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'foxStructuresResponsive_widgets_init' );
/*********************************************************
Add custom admin login screen styles
*********************************************************/
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
/*
* edits to the search query
*/
function search_filter( $query ) {
    if ( $query->is_search ) {
        $query->set( 'post_type', array('post','page') );
    }
    return $query;
}
add_filter('pre_get_posts','search_filter');
/********************************************
Require login by email address
********************************************/
require_once("inc/login-by-email.php");
/*********************************************
Limit Login Attempts
*********************************************/
require_once("inc/limit-login.php");
/*********************************************************
Advanced Custom Fields Customizations
*********************************************************/
require_once("inc/acf/acf.php");
/*
* Add in our custom post types
*/
require_once("inc/custom-post-type.php");
require_once("inc/custom-cats.php");
require_once("inc/portfolio/custom-search.php");
require_once("inc/header/get-child-pages.php");
/**
* Enqueue scripts and styles.
*/
function foxStructuresResponsive_scripts() {
	wp_enqueue_style( 'foxStructuresResponsive-style', get_stylesheet_uri() );
	wp_enqueue_style( 'poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900', false );
	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.min.js');
	wp_enqueue_script('vendor', get_stylesheet_directory_uri() . '/js/vendor.min.js');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'foxStructuresResponsive_scripts' );
/**
* Custom template tags for this theme.
*/
require get_template_directory() . '/inc/template-tags.php';
/**
* Functions which enhance the theme by hooking into WordPress.
*/
require get_template_directory() . '/inc/template-functions.php';
