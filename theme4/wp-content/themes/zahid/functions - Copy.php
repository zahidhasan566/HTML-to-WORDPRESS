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




	// function service_add_meta_box() {
	//     $screens = array( 'site' );
	//     foreach ( $screens as $screen ) {
	//         add_meta_box(
	//         'website',
	//         'Website',
	//         'show_custom_meta_box',
	//         $screen,
	//         'normal',
	//         'high'
	//         );
	//     }
	// }
	// add_action( 'add_meta_boxes', 'service_add_meta_box' );

	// function show_custom_meta_box( $post ) {
	//     wp_nonce_field( 'website', 'website_nonce' );
	//     $value = get_post_meta( $post->ID, '_website', true );
	//     echo '<label for="website">';
	//     _e( 'Description for this field', 'service_textdomain' );
	//     echo '</label> ';
	//     echo '<input type="text" id="website" name="website" value="' . esc_attr( $value ) . '" size="25" />';
	// }


	// function service_save_meta_box_data( $post_id ) {
	//     if ( ! isset( $_POST['website_nonce'] ) ) {
	//         return;
	//     }
	//     if ( ! wp_verify_nonce( $_POST['website_nonce'], 'website' ) ) {
	//         return;
	//     }
	//     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
	//         return;
	//     }
	//     if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
	//         if ( ! current_user_can( 'edit_page', $post_id ) ) {
	//             return;
	//         }
	//     } else {
	//         if ( ! current_user_can( 'edit_post', $post_id ) ) {
	//             return;
	//         }
	//     }
	//     if ( ! isset( $_POST['website'] ) ) {
	//         return;
	//     }
	//     $my_data = sanitize_text_field( $_POST['website'] );
	//     update_post_meta( $post_id, '_website', $my_data );
	// }
	// add_action( 'save_post', 'service_save_meta_box_data' );

	// making the meta box (Note: meta box != custom meta field)







	// function wpse_add_custom_meta_box_2() {
	//    add_meta_box(
	//        'custom_meta_box-2',       // $id
	//        'Dauer2',                  // $title
	//        'show_custom_meta_box_2',  // $callback
	//        'project',                 // $page
	//        'normal',                  // $context
	//        'high'                     // $priority
	//    );
	// }
	// add_action('add_meta_boxes', 'wpse_add_custom_meta_box_2');

	// //showing custom form fields
	// function show_custom_meta_box_2() {
	//     global $post;

	//     // Use nonce for verification to secure data sending
	//     wp_nonce_field( basename( __FILE__ ), 'wpse_our_nonce' )

	//     // <!-- my custom value input -->
	//     // <input type="number" name="wpse_value" value="">
	//   }


	// function wpse_save_meta_fields( $post_id ) {

	//   // verify nonce
	//   if (!isset($_POST['wpse_our_nonce']) || !wp_verify_nonce($_POST['wpse_our_nonce'], basename(__FILE__)))
	//       return 'nonce not verified';

	//   // check autosave
	//   if ( wp_is_post_autosave( $post_id ) )
	//       return 'autosave';

	//   //check post revision
	//   if ( wp_is_post_revision( $post_id ) )
	//       return 'revision';

	//   // check permissions
	//   if ( 'project' == $_POST['post_type'] ) {
	//       if ( ! current_user_can( 'edit_page', $post_id ) )
	//           return 'cannot edit page';
	//       } elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
	//           return 'cannot edit post';
	//   }

	//   //so our basic checking is done, now we can grab what we've passed from our newly created form
	//   $wpse_value = $_POST['wpse_value'];

	//   //simply we have to save the data now
	//   global $wpdb;

	//   $table = $wpdb->base_prefix . 'project_bids_mitglied';

	//   $wpdb->insert(
	//             $table,
	//             array(
	//                 'col_post_id' => $post_id, //as we are having it by default with this function
	//                 'col_value'   => intval( $wpse_value ) //assuming we are passing numerical value
	//               ),
	//             array(
	//                 '%d', //%s - string, %d - integer, %f - float
	//                 '%d', //%s - string, %d - integer, %f - float
	//               )
	//           );

	// }
	// add_action( 'save_post', 'wpse_save_meta_fields' );
	// add_action( 'new_to_publish', 'wpse_save_meta_fields' );


/* Create one or more meta boxes to be displayed on the post editor screen. */
function smashing_add_post_meta_boxes() {

  add_meta_box(
    'smashing-post-class',      // Unique ID
    esc_html__( 'Post Class', 'example' ),    // Title
    'smashing_post_class_meta_box',   // Callback function
    'post',         // Admin page (or post type)
    'side',         // Context
    'default'         // Priority
  );
}

/* Meta box setup function. */
function smashing_post_meta_boxes_setup() {

  /* Add meta boxes on the 'add_meta_boxes' hook. */
  add_action( 'add_meta_boxes', 'smashing_add_post_meta_boxes' );
  add_action( 'save_post', 'smashing_save_post_class_meta', 10, 2 );
}

/* Create one or more meta boxes to be displayed on the post editor screen. */
/* Display the post meta box. */
function smashing_post_class_meta_box( $post ) { ?>

  <?php wp_nonce_field( basename( __FILE__ ), 'smashing_post_class_nonce' ); ?>

  <p>
    <label for="smashing-post-class"><?php _e( "Add a custom CSS class, which will be applied to WordPress' post class.", 'example' ); ?></label>
    <br />
    <input class="widefat" type="text" name="smashing-post-class" id="smashing-post-class" value="<?php echo esc_attr( get_post_meta( $post->ID, 'smashing_post_class', true ) ); ?>" size="30" />
  </p>
<?php }


 add_action( 'admin_init', 'custom_meta_boxes' );
 function custom_meta_box()
 {
 	add_meta_box("custom_metabox_01","custom metabox","","post","normal","low");

 }

 function custom_meta_box_field(){
 	echo "<input type="text" name="custom";
 }