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


    <?php 
            $the_query = new WP_Query( array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'orderby' => 'menu_order', 
                'order' => 'DESC',
            ) );

            while ( $the_query->have_posts() ) :
                $the_query->the_post();
            ?>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                           <div class="news-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                              <div class="image">
                                <a href="news-detail.html"> <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?></a>
                              </div>
                              <div class="lower-content">
                                <div class="post-date"><?php the_date(); ?> </div>
                                <ul class="post-meta">
                                  <li><span class="icon flaticon-comment"></span>3 comments</li>
                                  <li><span class="icon flaticon-user"></span>Admin</li>
                                </ul>
                               <?php the_title( sprintf( '<h3 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                              
                                <?php the_excerpt(); ?>
                                <a class="read-more" href="<?php the_permalink(); ?>">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                              </div>
                            </div>
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
                   
            
            </div>
            </div>
          </div>









     <?php

     get_footer();

