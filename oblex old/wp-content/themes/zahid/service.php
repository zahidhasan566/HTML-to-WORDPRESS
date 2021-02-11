<?php 
/**
*Template Name:Service
*/
get_header();
 ?>
   <section class="page-title">
      <div class="pattern-layer-one" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-16.png)"></div>
        <div class="auto-container">
        <h2>Services</h2>
        <ul class="page-breadcrumb">
          <li><a href="index.html">home</a></li>
          <li>Services</li>
        </ul>
           </div>
       </section>

       <section class="services-page-section">
          <div class="auto-container">
            <div class="row clearfix">
              

              <?php 
                      $the_query = new WP_Query( array(
                          'post_type' => 'service',
                          'posts_per_page' => 5,
                          'orderby' => 'menu_order', 
                          'order' => 'DESC',
                      ) );

                      while ( $the_query->have_posts() ) :
                          $the_query->the_post();
                      ?>





              <!-- News Block Three -->
              <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?></a>
                  </div>
                  <div class="lower-content">
                    <div class="content">
                      <div class="icon-box">
                        <span class="icon flaticon-coding-1"></span>
                      </div>
                      <h4><a href="services-detail.html"><?php the_title( sprintf( '<h3 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?></a></h4>
                      <div class="text"> </div>
                        <?php the_excerpt(); ?>
                      <a class="read-more" href="<?php the_permalink(); ?>">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              

                <?php
                    endwhile;
                    wp_reset_postdata();
                

                ?>

                <div class="container">
                <div class="row" id="page">
                 <div class="col-md-12"> 
                       <?php the_posts_pagination( array(
                           'mid_size'  => 2,
                           'prev_text' => 'prev',
                           'next_text' => 'next',
                       ) ); ?>
                
                </div>
                </div>
              </div>
          
            
              
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

