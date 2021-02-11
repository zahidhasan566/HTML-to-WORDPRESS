<?php 
/**
*Template Name:Team
*/
get_header();
 ?>
 <section class="page-title">
    <div class="pattern-layer-one" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-16.png)"></div>
      <div class="auto-container">
      <h2>Our Team</h2>
      <ul class="page-breadcrumb">
        <li><a href="index.html">home</a></li>
        <li>Team</li>
      </ul>
         </div>
     </section>

    
        <section class="team-page-section">
                <div class="auto-container">
              <div class="row clearfix">
                
                <?php 
                        $the_query = new WP_Query( array(
                            'post_type' => 'team',
                            'posts_per_page' => -1,
                            'orderby' => 'menu_order', 
                            'order' => 'DESC',
                        ) );
                        $count='';
                      


                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();
                            $count++;
                        

                        ?>







                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                  <div class="inner-box">
                    <div class="image">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?></a>
                    </div>
                    <div class="lower-box">
                      <!-- Social Box -->
                      <ul class="social-box">
                        <li><a href="<?php echo get_post_meta( $post->ID, 'facebook_code', true ); ?>" class="fa fa-facebook-f"></a></li>
                        <li><a href="<?php echo get_post_meta( $post->ID, 'twitter_code', true ); ?>" class="fa fa-twitter"></a></li>
                        <li><a href="<?php echo get_post_meta( $post->ID, 'home_code', true ); ?>" class="fa fa-dribbble"></a></li>
                      </ul>
                      <div class="content">
                        <h5><a href="<?php the_permalink(); ?>">  <?php the_title(); ?></a></h5>
                        <div class="<?php the_permalink(); ?>">   <?php echo get_post_meta( $post->ID, 'designat_code', true ); ?></div>
                      </div>
                    </div>
                  </div>
                </div>
                
                        <?php
                    endwhile;
                    
                    wp_reset_postdata();
                

                ?>
                <!-- Team Block -->
              
                
                <!-- Team Block -->
              
                
                <!-- Team Block -->
              
                
                <!-- Team Block -->
           
                
                <!-- Team Block -->
              
                
                <!-- Team Block -->
           
                
                <!-- Team Block -->
             
                
              </div>
            </div>
          </section>
     
        
      </div>
    </div>
  </section>







         



  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <?php the_content(); ?>
  </div>
  </div>
  </div>

     <?php
     get_footer();

