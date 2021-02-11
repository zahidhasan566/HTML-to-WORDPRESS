<?php 
/**
*Template Name:blog 
*/



get_header();
 ?>
       
 <section class="page-title">
    <div class="pattern-layer-one" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-16.png)"></div>
      <div class="auto-container">
      <h2>Latest News</h2>
      <ul class="page-breadcrumb">
        <li><a href="index.html">home</a></li>
        <li>News Update</li>
      </ul>
         </div>
     </section>


   

             <section class="blog-page-section">
                     <div class="auto-container">
                  <div class="row clearfix">
                    
                    <!-- News Block -->
                  <?php 
                          $the_query = new WP_Query( array(
                              'post_type' => 'post',
                              'posts_per_page' => -1,                             
                              'order' => 'DESC',
                          ) );
                          $count='';
                        


                          while ( $the_query->have_posts() ) :
                              $the_query->the_post();
                              $count++;
                          

                          ?>
                  

                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                      <div class="inner-box">
                        <div class="image">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?></a>
                        </div>
                        <div class="lower-content">
                          <div class="post-date"><?php echo get_the_date("M j"); ?></div>
                          <ul class="post-meta">
                            <li><span class="icon flaticon-comment"></span><?php comments_number("0"); ?></li>
                            <li><span class="icon flaticon-user"></span><?php the_author(); ?></li>
                          </ul>
                          <?php the_title( sprintf( '<h4 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
                              
                                <?php the_excerpt(); ?>
                          <a class="read-more" href="<?php the_permalink(); ?>">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                        </div>
                      </div>
                    </div>
                    <?php
                endwhile;
                
                wp_reset_postdata();
            

            ?>
                    <!-- News Block -->
               
                    
                    <!-- News Block -->
               
                    
                 
                    <!-- News Block -->
               
                    
                   
                    
                  </div>
                  
                  <!-- Post Share Options -->
               
                  
                </div>
              </section>

            

            <div class="container">
            <div class="row" id="page">
             <div class="col-md-12"> 
                   
            
            </div>
            </div>
          </div>









     <?php

     get_footer();

