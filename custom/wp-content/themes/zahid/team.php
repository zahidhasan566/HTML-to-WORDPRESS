<?php 
/**
*Template Name:Team
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



    
     <!-- team section -->

     <div class="team-row">

      <div class="row">


          <div class="teamtitle">  <h1> Our teams </h1>
                                      <h5> We Provide It team </h5>
          </div>

        
        <?php 
                $the_query = new WP_Query( array(
                    'post_type' => 'team',
                    'posts_per_page' => 5,
                    
                    'order' => 'DESC',
                ) );
               
                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                                  
                ?> 


     

       <div class="team-block-two col-lg-4 col-md-4 col-sm-12">



                   <div class="inner-box">

                    <div class="teamimgbox">
                    
                    <div class="teamimg1">  <img src="<?php the_post_thumbnail( 'full', array( 'class' => 'alignleft' ) ); ?>"</div>
                     
                    </div>
                    <!--  <h5><a href="teams-detail.html"></a><h5 class="mb-0"><a href="teams-detail.html"></a><a href="http://localhost/oblex/team/team-12/" rel="bookmark">Solution Technology</a></h5></h5> -->

                    <h5><a href="teams-detail.html"><?php the_title( sprintf( '<h5 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?></a></h5>

                     
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

