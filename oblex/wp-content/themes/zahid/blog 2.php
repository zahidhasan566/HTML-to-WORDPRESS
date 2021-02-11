<?php 

/**
*Template Name:blog 2
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
                            if ( have_posts() ) :

        // Start the Loop.
        while ( have_posts() ) :
          the_post();
                            ?>

                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                      <div class="inner-box">
                        <div class="image">
                          <a href="news-detail.html"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?></a>
                        </div>
                        <div class="lower-content">
                          <div class="post-date"><?php echo get_the_date("M j"); ?></div>
                          <ul class="post-meta">
                            <li><span class="icon flaticon-comment"></span>3 comments</li>
                            <li><span class="icon flaticon-user"></span>Admin</li>
                          </ul>
                          <?php the_title( sprintf( '<h4 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
                              
                                <?php the_excerpt(); ?>
                          <a class="read-more" href="news-detail.html">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                        </div>
                      </div>
                    </div>
                    <?php
                endwhile;
                endif;
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

