<?php
/**
*Template Name:home
*/
$zahid_theme_option = get_option('zahid_theme_option');
get_header();
?>


<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slide" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/image-1.jpg)"> </div>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Welcome Oblex</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>


      <div class="carousel-item">
        <div class="slide" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/image-1.jpg)"> </div>
        <div class="carousel-caption">
        <div class="container">
         

            <h1>Welcome Oblex</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>




      <div class="carousel-item">
       <div class="slide" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/image-1.jpg)"> </div>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Welcome Oblex</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->

   <div class="row featurette">
     <div class="col-md-7 order-md-2">
       <h2 class="featurette-heading"><?php echo stripslashes($zahid_theme_option['subtitle']);?> <span class="text-muted"><?php echo stripslashes($zahid_theme_option['heading']);?></span></h2>
       <p class="lead"><?php echo stripslashes($zahid_theme_option['company-description']);?></p>
     </div>
     <div class="col-md-5 order-md-1">
       <div class="about-company" style="background-image: url(<?php bloginfo('template_url'); ?>/images/news-12.jpg)"> </div>
     </div>
   </div>



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
                      'posts_per_page' => 3,
                      
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


  
</div>
</div>




<!-- team section -->



 <div class="team-row">
  <div class="row">
    <div class="teamtitle">  <h1> Our teams </h1>
                          <h5> We have Large No of Expert Team Member</h5>

    </div>

    <?php 
            $the_query = new WP_Query( array(
                'post_type' => 'team',
                'posts_per_page' => 3,
                
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
                            <p><?php echo get_post_meta( $post->ID, 'designat_code', true ); ?></p>
                           </div>

                        </div>
                  </div>


       <?php
           endwhile;
           wp_reset_postdata();
       

       ?>





  </div>





 </div>

</div><!-- /.row -->

<hr class="featurette-divider">

  <!-- blog section -->

 <div class="blog-row">
  <div class="row">
    <div class="blogtitle">  <h1> Recent Posts </h1></div>

    <?php 
            $the_query = new WP_Query( array(
                'post_type' => 'post',
                'posts_per_page' => 3,                             
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



 </div>

</div><!-- /.row -->


   <hr class="featurette-divider">


  </div><!-- /.container -->



</main>



      
<?php



get_footer();
?>