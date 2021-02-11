<?php 
/**
*Template Name:Service
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



    
     <!-- service section -->

     <div class="service-row">

      <div class="row">


          <div class="servicetitle">  <h1> Our Services </h1>
                                      <h5> We Provide It Service </h5>
          </div>

          <?php 
                  $the_query = new WP_Query( array(
                      'post_type' => 'service',
                      'posts_per_page' => 5,
                      
                      'order' => 'DESC',
                  ) );
                 
                


                  while ( $the_query->have_posts() ) :
                      $the_query->the_post();
                     
                  

                  ?>
          


     

       <div class="service-block-two col-lg-4 col-md-4 col-sm-12">



                   <div class="inner-box">

                    <div class="serviceimgbox">
                    
                    <div class="serviceimg1">  <img src="<?php the_post_thumbnail( 'full', array( 'class' => 'alignleft' ) ); ?>"</div>
                     
                    </div>
                    <!--  <h5><a href="services-detail.html"></a><h5 class="mb-0"><a href="services-detail.html"></a><a href="http://localhost/oblex/service/service-12/" rel="bookmark">Solution Technology</a></h5></h5> -->

                    <h5><a href="services-detail.html"><?php the_title( sprintf( '<h5 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?></a></h5>

                     
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

