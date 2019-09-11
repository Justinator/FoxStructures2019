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

function foxStructuresResponsiveChild_fonts_url() {
 $fonts_url = '';

 /**
	* Translators: If there are characters in your language that are not
	* supported by Libre Franklin and Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
 $Poppins = _x( 'on', 'Poppins font: on or off', 'foxStructuresResponsiveChild' );
 $OpenSans = _x( 'on', 'Open Sans font: on or off', 'foxStructuresResponsiveChild' );

 $font_families = array();

 if ( 'off' !== $Poppins ) {
	 $font_families[] = 'Poppins:400,700,900';
 }

 if ( 'off' !== 	$OpenSans ) {
	 $font_families[] = 'Open Sans:400,700';
 }


 if ( in_array( 'on', array($Poppins, 	$OpenSans) ) ) {

	 $query_args = array(
		 'family' => urlencode( implode( '|', $font_families ) ),
		 'subset' => urlencode( 'latin,latin-ext' ),
	 );

	 $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
 }

 return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function foxStructuresResponsiveChild_resource_hints( $urls, $relation_type ) {
 if ( wp_style_is( 'foxStructuresResponsiveChild-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
	 $urls[] = array(
		 'href' => 'https://fonts.gstatic.com',
		 'crossorigin',
	 );
 }

 return $urls;
}
add_filter( 'wp_resource_hints', 'foxStructuresResponsiveChild_resource_hints', 10, 2 );
/*********************************************************
Add custom admin login screen styles
*********************************************************/
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

// Advanced Custom Fields Customizations
// Add ACF options page for global settings
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
// Set fields to collapsed for a condensed view for new users
function my_acf_admin_head() {
    ?>
    <script type="text/javascript">
        (function($){
            $(document).ready(function(){
                $('.layout').addClass('-collapsed');
                $('.acf-postbox').addClass('closed');
            });
        })(jQuery);
    </script>
    <?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');

/**
 * Enqueue scripts and styles.
 */
function foxStructuresResponsive_scripts() {
	wp_enqueue_style( 'foxStructuresResponsive-style', get_stylesheet_uri() );

	wp_enqueue_script( 'foxStructuresResponsive-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('customJS', get_stylesheet_directory_uri() . '/js/customJS.js');

	// Enqueue Google Fonts for our site
	wp_enqueue_script('foxStructuresFonts', foxStructuresResponsiveChild_fonts_url());

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

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
