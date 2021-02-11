<?php
/**
 * starlight functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package starlight
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'starlight_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function starlight_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on starlight, use a find and replace
		 * to change 'starlight' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'starlight', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'starlight' ),
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
				'starlight_custom_background_args',
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
add_action( 'after_setup_theme', 'starlight_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starlight_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starlight_content_width', 640 );
}
add_action( 'after_setup_theme', 'starlight_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starlight_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'starlight' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'starlight' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'starlight_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starlight_scripts() {
	wp_enqueue_style( 'starlight-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'startlight-bootstrap.min', get_template_directory_uri().'/assets/css/vendor/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'startlight-slider.min', get_template_directory_uri().'/assets/css/vendor/slider.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'startlight-main', get_template_directory_uri().'/assets/css/main.css', array(), _S_VERSION );
	wp_enqueue_style( 'startlight-icons.min', get_template_directory_uri().'/assets/css/vendor/icons.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'startlight-animation.min', get_template_directory_uri().'/assets/css/vendor/animation.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'startlight-gallery.min', get_template_directory_uri().'/assets/css/vendor/gallery.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'startlight-cookie-notice.min', get_template_directory_uri().'/assets/css/vendor/cookie-notice.min.css"', array(), _S_VERSION );
	wp_enqueue_style( 'startlight-default', get_template_directory_uri().'/assets/css/default.css"', array(), _S_VERSION );
	wp_enqueue_style( 'startlight-theme-pink', get_template_directory_uri().'/assets/css/theme-pink.css"', array(), _S_VERSION );
	wp_style_add_data( 'starlight-style', 'rtl', 'replace' );

	wp_enqueue_script( 'starlight-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'starlight-jquery.min', get_template_directory_uri() . '/assets/js/vendor/jquery.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-easing.min', get_template_directory_uri() . '/assets/js/vendor/jquery.easing.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-inview.min', get_template_directory_uri() . '/assets/js/vendor/jquery.inview.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-popper.min', get_template_directory_uri() . '/assets/js/vendor/popper.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-bootstrap.min', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-ponyfill.min', get_template_directory_uri() . '/assets/js/vendor/ponyfill.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-slider.min', get_template_directory_uri() . '/assets/js/vendor/slider.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-animation.min', get_template_directory_uri() . '/assets/js/vendor/animation.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-progress-radial.min', get_template_directory_uri() . '/assets/js/vendor/progress-radial.min.js', array(), _S_VERSION, true );

		wp_enqueue_script( 'starlight-bricklayer.min', get_template_directory_uri() . '/assets/js/vendor/bricklayer.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-gallery.min', get_template_directory_uri() . '/assets/js/vendor/gallery.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-shuffle.min', get_template_directory_uri() . '/assets/js/vendor/shuffle.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-notice.min', get_template_directory_uri() . '/assets/js/vendor/cookie-notice.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-particles.min', get_template_directory_uri() . '/assets/js/vendor/particles.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'starlight-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starlight_scripts' );

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

