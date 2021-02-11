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
	

	if ( ! function_exists( 'post_pagination' ) ) :
	   function post_pagination() {
	     global $wp_query;
	     $pager = 999999999; // need an unlikely integer

	        echo paginate_links( array(
	             'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
	             'format' => '?paged=%#%',
	             'current' => max( 1, get_query_var('paged') ),
	             'total' => $wp_query->max_num_pages
	
	        ) );
	   }
	endif;




	// service Custom Post Type
	function service_init() {
	    // set up service labels
	    $labels = array(
	        'name' => 'Services',
	        'singular_name' => 'service',
	        'add_new' => 'Add New service',
	        'add_new_item' => 'Add New service',
	        'edit_item' => 'Edit service',
	        'new_item' => 'New service',
	        'all_items' => 'All Services',
	        'view_item' => 'View service',
	        'search_items' => 'Search Services',
	        'not_found' =>  'No Services Found',
	        'not_found_in_trash' => 'No Services found in Trash', 
	        'parent_item_colon' => '',
	        'menu_name' => 'Services',
	    );
	    
	    // register post type
	    $args = array(
	        'labels' => $labels,
	        'public' => true,
	        'has_archive' => true,
	        'show_ui' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'service'),
	        'query_var' => true,
	        'menu_icon' => 'dashicons-randomize',
	        'supports' => array(
	            'title',
	            'editor',
	            'excerpt',
	            'trackbacks',
	            'custom-fields',
	            'comments',
	            'revisions',
	            'thumbnail',
	            'author',
	            'page-attributes',
	            'category'
	        )
	    );
	    register_post_type( 'service', $args );
	    
	    // register taxonomy
	    register_taxonomy('service_category', 'service', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'service-category' )));
	}
	add_action( 'init', 'service_init' );





	function arphabet_widgets_init() {

		register_sidebar( array(
			'name'          => esc_html__( 'side1', 'zahid' ),
			'id'            => 'home_right_1',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'side2', 'zahid2' ),
			'id'            => 'home_right_2',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		) );

	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );



	function product_init() {
	    // set up product labels
	    $labels = array(
	        'name' => 'products',
	        'singular_name' => 'product',
	        'add_new' => 'Add New product',
	        'add_new_item' => 'Add New product',
	        'edit_item' => 'Edit product',
	        'new_item' => 'New product',
	        'all_items' => 'All products',
	        'view_item' => 'View product',
	        'search_items' => 'Search products',
	        'not_found' =>  'No products Found',
	        'not_found_in_trash' => 'No products found in Trash', 
	        'parent_item_colon' => '',
	        'menu_name' => 'products',
	    );
	    
	    // register post type
	    $args = array(
	        'labels' => $labels,
	        'public' => true,
	        'has_archive' => true,
	        'show_ui' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'product'),
	        'query_var' => true,
	        'menu_icon' => 'dashicons-randomize',
	        'supports' => array(
	            'title',
	            'editor',
	            'excerpt',
	            'trackbacks',
	            'custom-fields',
	            'comments',
	            'revisions',
	            'thumbnail',
	            'author',
	            'page-attributes',
	            'category'
	        )
	    );
	    register_post_type( 'product', $args );
	    
	    // register taxonomy
	    register_taxonomy('product_category', 'product', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'product-category' )));
	}
	add_action( 'init', 'product_init' );


	add_action('admin_init', 'add_product_mata_boxs');
	add_action( 'save_post', 'product_save_postdata' );


	function add_product_mata_boxs(){
		add_meta_box('product_description', 'product Information', 'add_product_extra_fields', 'product', 'side', 'low');
	}  

	function add_product_extra_fields($post)
	{
	  wp_nonce_field('meta_box_product_noncename', 'product_noncename' );
	  $company_name = get_post_meta( $post->ID, 'company_name', true );
	  $product_code = get_post_meta( $post->ID, 'product_code', true );
	  $control_number = get_post_meta( $post->ID, 'control_number', true );
	  $product_status = get_post_meta( $post->ID, 'product_status', true );
	  $opened_date = get_post_meta( $post->ID, 'opened_date', true );
	  $updated_date = get_post_meta( $post->ID, 'updated_date', true );
	  $product_type = get_post_meta( $post->ID, 'product_type', true );
	  $location = get_post_meta( $post->ID, 'location', true );
	  $department = get_post_meta( $post->ID, 'department', true );
	  ?>
	  <p>
	 <label for="product_new_field">Company Name</label>
	<input type="text" id="company_name" name="company_name" value="<?php echo esc_attr($company_name) ?>" size="30" />
	  </p>
	    <p>
	<label for="product_new_field">product Code</label>
	<input type="text" id="product_code" name="product_code" value="<?php echo esc_attr($product_code) ?>" size="30" />
	  </p>
	      <p>
	<label for="product_new_field">Control Number</label>
	<input type="text" id="control_number" name="control_number" value="<?php echo esc_attr($control_number) ?>" size="30" />
	  </p>
	      <p>
	<label for="product_new_field">product Status</label>
	<input type="text" id="product_status" name="product_status" value="<?php echo esc_attr($product_status) ?>" size="30" />
	  </p>
	      <p>
	<label for="product_new_field">Opened Date</label>
	<input type="text" id="opened_date" name="opened_date" value="<?php echo esc_attr($opened_date) ?>" size="30" />
	  </p>
	      <p>
	<label for="product_new_field">Updated Date</label>
	<input type="text" id="updated_date" name="updated_date" value="<?php echo esc_attr($updated_date) ?>" size="30" />
	  </p>
	        <p>
	<label for="product_new_field">product Type</label>
	<input type="text" id="product_type" name="product_type" value="<?php echo esc_attr($product_type) ?>" size="30" />
	  </p>
	      <p>
	<label for="product_new_field">Location</label>
	<input type="text" id="location" name="location" value="<?php echo esc_attr($location) ?>" size="30" />
	  </p>
	      <p>
	<label for="product_new_field">Department</label>
	<input type="text" id="department" name="department" value="<?php echo esc_attr($department) ?>" size="30" />
	  </p>
	   <?php
	} 

	function product_save_postdata( ) {
		
	  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )return;
	  if(!isset($_POST['product_noncename']) || !wp_verify_nonce($_POST['product_noncename'],'meta_box_product_noncename')) return;  
	 
	   if ( 'product' == $_POST['post_type'] ) {
	      $post_ID = $_POST['post_ID'];
	      $company_name = sanitize_text_field( $_POST['company_name'] );
	      update_post_meta($post_ID, 'company_name', $company_name);
		   $product_code = sanitize_text_field( $_POST['product_code'] );
	      update_post_meta($post_ID, 'product_code', $product_code);
		    $product_status = sanitize_text_field( $_POST['product_status'] );
	      update_post_meta($post_ID, 'product_status', $product_status);
		  $control_number = sanitize_text_field( $_POST['control_number'] );
	      update_post_meta($post_ID, 'control_number', $control_number);
		   $opened_date = sanitize_text_field( $_POST['opened_date'] );
	      update_post_meta($post_ID, 'opened_date', $opened_date);
		   $updated_date = sanitize_text_field( $_POST['updated_date'] );
	      update_post_meta($post_ID, 'updated_date', $updated_date);
		  $product_type = sanitize_text_field( $_POST['product_type'] );
	      update_post_meta($post_ID, 'product_type', $product_type);
		  $location = sanitize_text_field( $_POST['location'] );
	      update_post_meta($post_ID, 'location', $location);
		  $department = sanitize_text_field( $_POST['department'] );
	      update_post_meta($post_ID, 'department', $department);
	  }
	 
	} 













?>



