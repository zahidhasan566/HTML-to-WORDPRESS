<?php
/**
 * zahid functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zahid
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'zahid_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function zahid_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on zahid, use a find and replace
		 * to change 'zahid' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'zahid', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'zahid' ),
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
				'zahid_custom_background_args',
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
add_action( 'after_setup_theme', 'zahid_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zahid_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zahid_content_width', 640 );
}
add_action( 'after_setup_theme', 'zahid_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zahid_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'zahid' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'zahid' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'zahid_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function zahid_scripts() {
	wp_enqueue_style( 'zahid-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'zahid-bootstrap.min', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'zahid-animate.min', get_template_directory_uri().'/assets/css/animate.min.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-owl.carousel.min', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-theme.default.min', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-slick', get_template_directory_uri().'/assets/css/slick.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-slick-theme', get_template_directory_uri().'/assets/css/slick-theme.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-jquery-ui', get_template_directory_uri().'/assets/css/jquery-ui.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-jquery.timepicker.min', get_template_directory_uri().'/assets/css/jquery.timepicker.min.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-meanmenu-2.min', get_template_directory_uri().'/assets/css/meanmenu-2.min.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-magnific-popup.min', get_template_directory_uri().'/assets/css/magnific-popup.min.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-icofont.min', get_template_directory_uri().'/assets/css/icofont.min.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-flaticon.css', get_template_directory_uri().'/assets/css/flaticon.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-settings', get_template_directory_uri().'/assets/css/settings.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-layers', get_template_directory_uri().'/assets/css/layers.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-navigation', get_template_directory_uri().'/assets/css/navigation.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-style', get_template_directory_uri().'/assets/css/style.css', array(), _S_VERSION );

	wp_enqueue_style( 'zahid-responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), _S_VERSION );


	wp_style_add_data( 'zahid-style', 'rtl', 'replace' );

	wp_enqueue_script( 'zahid-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'zahid-jquery-3.5.1.min', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-popper.min', get_template_directory_uri() . '/assets/js/popper.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-bootstrap2.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-jquery-ui-2', get_template_directory_uri() . '/assets/js/jquery-ui.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-timepicker.min', get_template_directory_uri() . '/assets/js/jquery.timepicker.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-jquery.magnific-popup.min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-slick2.min', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-jquery.themepunch.revolution.min', get_template_directory_uri() . '/assets/js/jquery.themepunch.revolution.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-jquery.themepunch.tools.min', get_template_directory_uri() . '/assets/js/jquery.themepunch.tools.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-extension.actions.min', get_template_directory_uri() . '/assets/js/extensions/revolution.extension.actions.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-revolution.extension.carousel.min', get_template_directory_uri() . '/assets/js/extensions/revolution.extension.carousel.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-revolution.extension.kenburn.min', get_template_directory_uri() . '/assets/js/extensions/revolution.extension.kenburn.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-revolution.extension.layeranimation.min', get_template_directory_uri() . '/assets/js/extensions/revolution.extension.layeranimation.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-revolution.extension.migration.min', get_template_directory_uri() . '/assets/js/extensions/revolution.extension.migration.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-revolution.extension.navigation.min', get_template_directory_uri() . '/assets/js/extensions/revolution.extension.navigation.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-revolution.extension.parallax.min', get_template_directory_uri() . '/assets/js/extensions/revolution.extension.parallax.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-revolution.extension.slideanims.min', get_template_directory_uri() . '/assets/js/extensions/revolution.extension.slideanims.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-revolution.extension.video.min', get_template_directory_uri() . '/assets/js/extensions/revolution.extension.video.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-jquery.ajaxchimp.min', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-form-validator.min', get_template_directory_uri() . '/assets/js/form-validator.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-contact-form-script', get_template_directory_uri() . '/assets/js/contact-form-script.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-jquery.meanmenu-2.min', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zahid-script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zahid_scripts' );

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

