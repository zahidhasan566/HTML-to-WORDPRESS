<?php 
show_admin_bar(false);
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


function zahid_custom_stylesheets() {
    if ( ! is_admin() ) {
    	wp_enqueue_style( 'zahid-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_enqueue_style( 'zahid-bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
        wp_enqueue_style( 'zahid-style2', get_template_directory_uri() . '/css/style.css' );
        wp_enqueue_style( 'zahid-responsive', get_template_directory_uri() . '/css/responsive.css' );
        wp_enqueue_style( 'zahid-color-switcher-design', get_template_directory_uri() . '/css/color-switcher-design.css' );
        wp_enqueue_style( 'zahid-default-theme', get_template_directory_uri() . '/css/color-themes/default-theme.css' );




        wp_enqueue_script( 'zahid-jquery', get_template_directory_uri() . '/js/jquery.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-popper', get_template_directory_uri() . '/js/popper.min.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-mCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-appear', get_template_directory_uri() . '/js/appear.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-parallax', get_template_directory_uri() . '/js/parallax.min.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-tilt-jquery', get_template_directory_uri() . '/js/tilt.jquery.min.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-paroller', get_template_directory_uri() . '/js/jquery.paroller.min.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-owl', get_template_directory_uri() . '/js/owl.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-wow', get_template_directory_uri() . '/js/wow.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-nav', get_template_directory_uri() . '/js/nav-tool.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'zahid-color-settings', get_template_directory_uri() . '/js/color-settings.js', array(), _S_VERSION, true );


    }
}
add_action( 'wp_enqueue_scripts', 'zahid_custom_stylesheets', 11 );