<?php
/**
 * scratchtheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scratchtheme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'scratchtheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function scratchtheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on scratchtheme, use a find and replace
		 * to change 'scratchtheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'scratchtheme', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'scratchtheme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'scratchtheme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'scratchtheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function scratchtheme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'scratchtheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'scratchtheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function scratchtheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'scratchtheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'scratchtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'scratchtheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function scratchtheme_scripts() {
	wp_enqueue_style( 'scratchtheme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_register_style( 'font-awesome', get_template_directory_uri(). '/css/font-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style('font-awesome');
	wp_register_style( 'bootstrap',  get_template_directory_uri(). '/css/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style('bootstrap');
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri(). '/css/magnific-popup.css', array(), _S_VERSION );
	wp_enqueue_style( 'nice-select."', get_template_directory_uri(). '/css/nice-select.css', array(), _S_VERSION );
	wp_enqueue_style( 'animate"', get_template_directory_uri(). '/css/animate.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'owl"', get_template_directory_uri(). '/css/owl.carousel.css', array(), _S_VERSION );
	wp_enqueue_style( 'main"',  get_template_directory_uri(). '/css/main.css', array(), _S_VERSION );
	wp_style_add_data( 'scratchtheme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'scratchtheme-navigation', get_template_directory_uri() .'/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'vendor', get_template_directory_uri() .'/js/vendor/jquery-2.2.4.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/js/vendor/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/easing.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'hover', get_template_directory_uri() . '/js/hoverIntent.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'superfish', get_template_directory_uri() .'/js/superfish.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'carousel', get_template_directory_uri() . '/jjs/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mail', get_template_directory_uri() . '/js/mail-script.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'scratchtheme_scripts' );


	// <link rel="stylesheet" href="css/linearicons.css">
	// 		<link rel="stylesheet" href="css/font-awesome.min.css">
	// 		<link rel="stylesheet" href="css/bootstrap.css">
	// 		<link rel="stylesheet" href="css/magnific-popup.css">
	// 		<link rel="stylesheet" href="css/nice-select.css">					
	// 		<link rel="stylesheet" href="css/animate.min.css">
	// 		<link rel="stylesheet" href="css/owl.carousel.css">
	// 		<link rel="stylesheet" href="css/main.css">

// <script src="js/vendor/jquery-2.2.4.min.js"></script>
// 			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
// 			<script src="js/vendor/bootstrap.min.js"></script>			
// 			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
//   			<script src="js/easing.min.js"></script>			
// 			<script src="js/hoverIntent.js"></script>
// 			<script src="js/superfish.min.js"></script>	
// 			<script src="js/jquery.ajaxchimp.min.js"></script>
// 			<script src="js/jquery.magnific-popup.min.js"></script>	
// 			<script src="js/owl.carousel.min.js"></script>			
// 			<script src="js/jquery.sticky.js"></script>
// 			<script src="js/jquery.nice-select.min.js"></script>			
// 			<script src="js/parallax.min.js"></script>	
// 			<script src="js/waypoints.min.js"></script>
// 			<script src="js/jquery.counterup.min.js"></script>					
// 			<script src="js/mail-script.js"></script>	
// 			<script src="js/main.js"></script>	
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

