<?php  
include_once get_template_directory() . '/bootstrap_walker.php';
show_admin_bar(false);
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}



if ( ! function_exists( 'zahid_setup' ) ) :

	function zahid_setup() {

		load_theme_textdomain( 'zahid', get_template_directory() . '/languages' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );





		if(function_exists('register_nav_menu'))
		{
		register_nav_menus(
		array(
		 /*Register Main Menu location header */
		'main_menu' => esc_html__('Main Menu ', 'zahid'),
		)
		);
		}


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


		

		wp_enqueue_style( 'zahid-style1', get_template_directory_uri().'/assets/dist/css/style.css');
		wp_enqueue_style( 'zahid-bootstrap.min', get_template_directory_uri().'/assets/dist/css/bootstrap.min.css');
		wp_enqueue_style( 'zahid-carousel', get_template_directory_uri().'/assets/dist/css/carousel.css');

		



	   wp_style_add_data( 'zahid-style', 'rtl', 'replace' );


	  //wp_enqueue_script( 'zahid-jquery', get_template_directory_uri() . '/js/jquery.js');

	 

	  wp_enqueue_script( 'zahid-bootstrap.min2', get_template_directory_uri() . '/assets/dist/js/bootstrap.min.js',array(), _S_VERSION, true);

	  wp_enqueue_script( 'zahid-bundle.min', get_template_directory_uri() . '/assets/dist/js/bootstrap.bundle.min.js',array(), _S_VERSION, true);


	  


	 }


	 add_action( 'wp_enqueue_scripts', 'zahid_scripts' );


	
 

	function setup_theme_admin_menus() {
	add_submenu_page('themes.php',
	'Zahid Theme Setting', 'Zahid Theme Setting', 'manage_options',
	'zahid-elements', 'theme_zahid_settings');
	}
add_action("admin_menu", "setup_theme_admin_menus");
	if (isset($_POST['update_settings'] )){
	delete_option('zahid_theme_option');
	add_option('zahid_theme_option', $_POST['setting']);
	}

	function theme_zahid_settings() {

	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_style('thickbox');
	$menus = get_terms('nav_menu');

	if(!$menus)$menus=array();
	$zahid_theme_option = get_option('zahid_theme_option');
	require_once('admin/admin.php');
	}



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



	function tn_custom_excerpt_length( $length ) {
	return 14;
	}
	add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );


	function team_init() {
	    // set up team labels
	    $labels = array(
	        'name' => 'teams',
	        'singular_name' => 'team',
	        'add_new' => 'Add New team',
	        'add_new_item' => 'Add New team',
	        'edit_item' => 'Edit team',
	        'new_item' => 'New team',
	        'all_items' => 'All teams',
	        'view_item' => 'View team',
	        'search_items' => 'Search teams',
	        'not_found' =>  'No teams Found',
	        'not_found_in_trash' => 'No teams found in Trash', 
	        'parent_item_colon' => '',
	        'menu_name' => 'teams',
	    );
	    
	    // register post type
	    $args = array(
	        'labels' => $labels,
	        'public' => true,
	        'has_archive' => true,
	        'show_ui' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'team'),
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
	    register_post_type( 'team', $args );
	    
	    // register taxonomy
	    register_taxonomy('team_category', 'team', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'team-category' )));
	}
	add_action( 'init', 'team_init' );




	add_action('admin_init', 'add_team_mata_boxs');
	add_action( 'save_post', 'team_save_postdata' );


	function add_team_mata_boxs(){
		add_meta_box('team_description', 'team Information', 'add_team_extra_fields', 'team', 'side', 'low');
	}  

	function add_team_extra_fields($post)
	{
	  wp_nonce_field('meta_box_team_noncename', 'team_noncename' );
	  $person_name = get_post_meta( $post->ID, 'person_name', true );
	  $designat_code = get_post_meta( $post->ID, 'designat_code', true );
	  $facebook_code = get_post_meta( $post->ID, 'facebook_code', true );
	  $twitter_code = get_post_meta( $post->ID, 'twitter_code', true );
	  $home_code = get_post_meta( $post->ID, 'home_code', true );
	
	  ?>
	  <p>
	 <label for="team_new_field">person Name</label>
	<input type="text" id="person_name" name="person_name" value="<?php echo esc_attr($person_name) ?>" size="30" />
	  </p>
	    <p>
	<label for="team_new_field">Designation Code</label>
	<input type="text" id="designat_code" name="designat_code" value="<?php echo esc_attr($designat_code) ?>" size="30" />
	  </p>
	      <p>
	  <label for="team_new_field">Facebook</label>
	  <input type="text" id="facebook_code" name="facebook_code" value="<?php echo esc_attr($facebook_code) ?>" size="30" />
	    </p>

	        <p>
	    <label for="team_new_field">Twitter</label>
	    <input type="text" id="twitter_code" name="twitter_code" value="<?php echo esc_attr($twitter_code) ?>" size="30" />
	      </p>
	          <p>
	      <label for="team_new_field">Home</label>
	      <input type="text" id="home_code" name="home_code" value="<?php echo esc_attr( $home_code) ?>" size="30" />
	        </p>
	 
	   <?php
	} 

	function team_save_postdata( ) {
		
	  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )return;
	  if(!isset($_POST['team_noncename']) || !wp_verify_nonce($_POST['team_noncename'],'meta_box_team_noncename')) return;  
	 
	   if ( 'team' == $_POST['post_type'] ) {

	      $post_ID = $_POST['post_ID'];

	      $person_name = sanitize_text_field( $_POST['person_name'] );
	      update_post_meta($post_ID, 'person_name', $person_name);

		   $designat_code = sanitize_text_field( $_POST['designat_code'] );
	      update_post_meta($post_ID, 'designat_code', $designat_code);

	      $facebook_code = sanitize_text_field( $_POST['facebook_code'] );
	       update_post_meta($post_ID, 'facebook_code', $facebook_code);


	      $twitter_code = sanitize_text_field( $_POST['twitter_code'] );
	      update_post_meta($post_ID, 'twitter_code', $twitter_code);

	      $home_code = sanitize_text_field( $_POST['home_code'] );
	      update_post_meta($post_ID, 'home_code', $home_code);

		 
	  }
	 
	} 

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