<?php 

/**
*Template Name:about us
*/
get_header();
 ?>

 <section class="page-title">
    <div class="pattern-layer-one" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-16.png)"></div>
      <div class="auto-container">
      <h2>About us</h2>
      <ul class="page-breadcrumb">
        <li><a href="index.html">home</a></li>
        <li>About us</li>
      </ul>
         </div>
     </section>


         <div class="container">
         <div class="row">
         <div class="col-md-6">
         <?php the_content(); ?>
         </div>

           <div class="col-md-6">
          <?php dynamic_sidebar('home_right_1' ); ?>
          <?php dynamic_sidebar('home_right_2' ); ?>


             <div class="row mb-2">
             <?php 
                      $the_query = new WP_Query( array(
                          'post_type' => 'product',
                          'posts_per_page' => 5,
                          
                          'orderby' => 'menu_order', 
                          'order' => 'DESC',
                      ) );

                      while ( $the_query->have_posts() ) :
                          $the_query->the_post();
                      ?>           
              <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">ABOUT PRODUCTS</strong>
                    <div class="col-auto d-none d-lg-block">
                      <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?>

                    </div>
                    <?php the_title( sprintf( '<h3 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                    <?php echo get_post_meta( $post->ID, 'product_type', true ); ?>
                    <?php echo get_post_meta( $post->ID, 'company_name', true ); ?>

                    <div>
                    <?php echo get_post_meta( $post->ID, 'product_code', true ); ?>
                    <?php echo get_post_meta( $post->ID, 'control_number', true ); ?>
                    <?php echo get_post_meta( $post->ID, 'product_status', true ); ?>
                    <?php echo get_post_meta( $post->ID, 'opened_date', true ); ?>
                  </div>

                    <div>
                    <?php echo get_post_meta( $post->ID, 'updated_date', true ); ?>
                    </div>

                    <div>
                    <?php echo get_post_meta( $post->ID, 'location', true ); ?>
                    <?php echo get_post_meta( $post->ID, 'department', true ); ?>
                  </div>
                    
                    <div class="mb-1 text-muted"><?php the_date(); ?></div>
                    <?php the_excerpt(); ?>

                    <a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
                  </div>
                
                </div>
              </div>         
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
              
              <?php the_posts_pagination( array(
                  'mid_size'  => 2,
                  'prev_text' => 'prev',
                  'next_text' => 'next',
              ) ); ?>
          </div>
           </div>

         </div>




</div>
    




  <?php
 get_footer();