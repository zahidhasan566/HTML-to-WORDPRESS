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
				'zahid3_custom_background_args',
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



	// function wpdocs_five_posts_on_homepage( $query ) {
	//     if ( $query->is_home() && $query->is_main_query() ) {
	//         $query->set( 'posts_per_page', 5 );
	//     }
	// }
	// add_action( 'pre_get_posts', 'wpdocs_five_posts_on_homepage' );
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






	//////////////////Custom Post For Team/////////////////////////////
	function post_type_gisteam() {
	    
	  register_post_type(
		'gisteam',
				array('label' => __('MANAGE GIS TEAM'),
				'labels'=>array(
				 'name'=>'Manage Jobs',
				 'singular_name'=>'Manage Job',
				 'menu_name'=>'Manage Jobs',
				 'all_items'=>'All Jobs',
				 'add_new'=>'Add Job',
				 'add_new_item'=>'Add Job',
				 'edit_item'=>'Edit Job',
				 'new_item'=>'New Job',
				 'view_item'=>'View Jobs'
				),
				'public' => true,
				'show_ui' => true,
				'supports' => array(
				'title',
				'editor'
				)
				)
		); 
	}

	add_action('init', 'post_type_gisteam');
	add_action('admin_init', 'add_gisteam_mata_boxs');
	add_action( 'save_post', 'gisteam_save_postdata' );


	function add_gisteam_mata_boxs(){
		add_meta_box('gisteam_description', 'Job Information', 'add_gisteam_extra_fields', 'gisteam', 'side', 'low');
	}  

	function add_gisteam_extra_fields($post)
	{
	  wp_nonce_field('meta_box_gisteam_noncename', 'gisteam_noncename' );
	  $company_name = get_post_meta( $post->ID, 'company_name', true );
	  $job_code = get_post_meta( $post->ID, 'job_code', true );
	  $control_number = get_post_meta( $post->ID, 'control_number', true );
	  $job_status = get_post_meta( $post->ID, 'job_status', true );
	  $opened_date = get_post_meta( $post->ID, 'opened_date', true );
	  $updated_date = get_post_meta( $post->ID, 'updated_date', true );
	  $job_type = get_post_meta( $post->ID, 'job_type', true );
	  $location = get_post_meta( $post->ID, 'location', true );
	  $department = get_post_meta( $post->ID, 'department', true );
	  ?>
	  <p>
	 <label for="gisteam_new_field">Company Name</label>
	<input type="text" id="company_name" name="company_name" value="<?php echo esc_attr($company_name) ?>" size="30" />
	  </p>
	    <p>
	<label for="gisteam_new_field">Job Code</label>
	<input type="text" id="job_code" name="job_code" value="<?php echo esc_attr($job_code) ?>" size="30" />
	  </p>
	      <p>
	<label for="gisteam_new_field">Control Number</label>
	<input type="text" id="control_number" name="control_number" value="<?php echo esc_attr($control_number) ?>" size="30" />
	  </p>
	      <p>
	<label for="gisteam_new_field">Job Status</label>
	<input type="text" id="job_status" name="job_status" value="<?php echo esc_attr($job_status) ?>" size="30" />
	  </p>
	      <p>
	<label for="gisteam_new_field">Opened Date</label>
	<input type="text" id="opened_date" name="opened_date" value="<?php echo esc_attr($opened_date) ?>" size="30" />
	  </p>
	      <p>
	<label for="gisteam_new_field">Updated Date</label>
	<input type="text" id="updated_date" name="updated_date" value="<?php echo esc_attr($updated_date) ?>" size="30" />
	  </p>
	        <p>
	<label for="gisteam_new_field">Job Type</label>
	<input type="text" id="job_type" name="job_type" value="<?php echo esc_attr($job_type) ?>" size="30" />
	  </p>
	      <p>
	<label for="gisteam_new_field">Location</label>
	<input type="text" id="location" name="location" value="<?php echo esc_attr($location) ?>" size="30" />
	  </p>
	      <p>
	<label for="gisteam_new_field">Department</label>
	<input type="text" id="department" name="department" value="<?php echo esc_attr($department) ?>" size="30" />
	  </p>
	   <?php
	} 

	function gisteam_save_postdata( ) {
		
	  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )return;
	  if(!isset($_POST['gisteam_noncename']) || !wp_verify_nonce($_POST['gisteam_noncename'],'meta_box_gisteam_noncename')) return;  
	 
	   if ( 'gisteam' == $_POST['post_type'] ) {
	      $post_ID = $_POST['post_ID'];
	      $company_name = sanitize_text_field( $_POST['company_name'] );
	      update_post_meta($post_ID, 'company_name', $company_name);
		   $job_code = sanitize_text_field( $_POST['job_code'] );
	      update_post_meta($post_ID, 'job_code', $job_code);
		    $job_status = sanitize_text_field( $_POST['job_status'] );
	      update_post_meta($post_ID, 'job_status', $job_status);
		  $control_number = sanitize_text_field( $_POST['control_number'] );
	      update_post_meta($post_ID, 'control_number', $control_number);
		   $opened_date = sanitize_text_field( $_POST['opened_date'] );
	      update_post_meta($post_ID, 'opened_date', $opened_date);
		   $updated_date = sanitize_text_field( $_POST['updated_date'] );
	      update_post_meta($post_ID, 'updated_date', $updated_date);
		  $job_type = sanitize_text_field( $_POST['job_type'] );
	      update_post_meta($post_ID, 'job_type', $job_type);
		  $location = sanitize_text_field( $_POST['location'] );
	      update_post_meta($post_ID, 'location', $location);
		  $department = sanitize_text_field( $_POST['department'] );
	      update_post_meta($post_ID, 'department', $department);
	  }
	 
	} 