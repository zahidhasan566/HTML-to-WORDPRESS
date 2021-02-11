<?php 

/**
*Template Name:about us
*/
$zahid_theme_option = get_option('zahid_theme_option');
get_header();
 ?>





  










         <div class="container">
         <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-5 order-md-2">
            <h2 class="featurette-heading"><?php echo stripslashes($zahid_theme_option['subtitle']);?> <span class="text-muted"><?php echo stripslashes($zahid_theme_option['heading']);?></span></h2>
            <p class="lead"><?php echo stripslashes($zahid_theme_option['company-description']);?></p>
          </div>
          <div class="col-md-4 order-md-1">
            <div class="about-company" style="background-image: url(<?php bloginfo('template_url'); ?>/images/news-12.jpg)"> </div>
          </div>
          <div class="col-md-3 order-md-3">
            <div class="widget">  <?php dynamic_sidebar('home_right_1' ); ?> </div>
          </div>
        </div>

        

       

        



         <hr class="featurette-divider">
         </div>



  <?php
 get_footer();