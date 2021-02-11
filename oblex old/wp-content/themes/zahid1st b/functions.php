<?php  
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';




if ( ! function_exists( 'zahid_setup' ) ) :

	function zahid_setup() {

		load_theme_textdomain( 'zahid', get_template_directory() . '/languages' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'header-menu' => esc_html__( 'Header Menu', 'zahid' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'zahid' ),

			)
		);


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

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		add_theme_support( 'customize-selective-refresh-widgets' );

	}

	endif;

	add_action( 'after_setup_theme', 'zahid_setup' );


	function zahid_scripts() {


		wp_enqueue_style( 'zahid-bootstrap', get_template_directory_uri().'/css/bootstrap.css');
		

		wp_enqueue_style( 'zahid-style', get_template_directory_uri().'/css/style.css');

		wp_enqueue_style( 'zahid-responsive', get_template_directory_uri().'/css/responsive.css');

		wp_enqueue_style( 'zahid-color-switcher-design', get_template_directory_uri().'/css/color-switcher-design.css');

		wp_enqueue_style( 'zahid-default-theme', get_template_directory_uri().'/css/color-themes/default-theme.css');

		wp_enqueue_style( 'zahid-animate', get_template_directory_uri().'/css/animate.css');

		wp_enqueue_style( 'zahid-animation', get_template_directory_uri().'/css/animation.css');

		wp_enqueue_style( 'zahid-custom-animate', get_template_directory_uri().'/css/custom-animate.css');

		wp_enqueue_style( 'zahid-flaticon', get_template_directory_uri().'/css/flaticon.css');

		wp_enqueue_style( 'zahid-font-awesome', get_template_directory_uri().'/css/font-awesome.css');

		wp_enqueue_style( 'zahid-jquery.bootstrap-touchspin', get_template_directory_uri().'/css/jquery.bootstrap-touchspin.css');

		wp_enqueue_style( 'zahid-jquery.fancybox.min', get_template_directory_uri().'/css/jquery.fancybox.min.css');

		wp_enqueue_style( 'zahid-jquery.mCustomScrollbar.min', get_template_directory_uri().'/css/jquery.mCustomScrollbar.min.css');

		wp_enqueue_style( 'zahid-jquery-ui', get_template_directory_uri().'/css/jquery-ui.css');



	   wp_style_add_data( 'zahid-style', 'rtl', 'replace' );


	  wp_enqueue_script( 'zahid-jquery', get_template_directory_uri() . '/js/jquery.js');

	  wp_enqueue_script( 'zahid-popper.min', get_template_directory_uri() . '/js/popper.min.js');

	  wp_enqueue_script( 'zahid-bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');

	  wp_enqueue_script( 'zahid-jquery.mCustomScrollbar.concat.min', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js');

	  wp_enqueue_script( 'zahid-jquery.fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js');

	  wp_enqueue_script( 'zahid-appear', get_template_directory_uri() . '/js/appear.js');

	  wp_enqueue_script( 'zahid-parallax.min', get_template_directory_uri() . '/js/parallax.min.js');

	  wp_enqueue_script( 'zahid-tilt.jquery.min', get_template_directory_uri() . '/js/tilt.jquery.min.js');

	  wp_enqueue_script( 'zahid-paroller.min', get_template_directory_uri() . '/js/jquery.paroller.min.js');

	  wp_enqueue_script( 'zahid-owl', get_template_directory_uri() . '/js/owl.js');

	  wp_enqueue_script( 'zahid-wow', get_template_directory_uri() . '/js/wow.js');

	  wp_enqueue_script( 'zahid-tool', get_template_directory_uri() . '/js/nav-tool.js');

	  wp_enqueue_script( 'zahid-jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js');

	  wp_enqueue_script( 'zahid-script', get_template_directory_uri() . '/js/script.js');

	  wp_enqueue_script( 'zahid-color-settings', get_template_directory_uri() . '/js/color-settings.js');

	

	  



	 }


	add_action( 'wp_enqueue_scripts', 'zahid_scripts' );
	

	





?>



