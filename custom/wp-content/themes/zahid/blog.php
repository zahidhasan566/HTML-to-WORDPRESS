<?php 
/**
*Template Name:Blog
*/
get_header();
 ?>
  

  <main>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->




      <hr class="featurette-divider">



    
     <!-- blog section -->

     <div class="blog-row">

      <div class="row">


          <div class="blogtitle">  <h1>  blogs </h1>
                                      <h5> Recent Post </h5>
          </div>

    
             
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
          


     

       <div class="blog-block-two col-lg-4 col-md-4 col-sm-12">



                   <div class="inner-box">

                    <div class="blogimgbox">
                    
                    <div class="blogimg1">  <img src="<?php the_post_thumbnail( 'full', array( 'class' => 'alignleft' ) ); ?>"</div>
                     
                    </div>
                    <!--  <h5><a href="blogs-detail.html"></a><h5 class="mb-0"><a href="blogs-detail.html"></a><a href="http://localhost/oblex/blog/blog-12/" rel="bookmark">Solution Technology</a></h5></h5> -->

                    <h5><a href="blogs-detail.html"><?php the_title( sprintf( '<h5 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?></a></h5>

                     
                     <div class="text">
                       <p><?php the_excerpt(); ?></p>
                      </div>
                   </div>
      </div>


          <?php
              endwhile;
              wp_reset_postdata();
          

          ?>





     </div>

    </div><!-- /.row -->


   <hr class="featurette-divider">
   

   </div>

  </div><!-- /.row -->

 

  </main>




 

     <?php
     get_footer();

