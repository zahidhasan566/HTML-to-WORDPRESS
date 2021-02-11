<?php 

/**
*Template Name:contact us
*/
get_header();
 ?>

 <section class="page-title">
    <div class="pattern-layer-one" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-16.png)"></div>
      <div class="auto-container">
      <h2>Contact us</h2>
      <ul class="page-breadcrumb">
        <li><a href="index.html">home</a></li>
        <li>Contact us</li>
      </ul>
         </div>
     </section>



  



         <div class="container">
         <div class="row">
         <div class="col-md-12">
         <?php the_content(); ?>
         </div>
         </div>
         </div>


         <div class="container">
         <div class="row">
         <div class="col-md-12">
         <?php echo do_shortcode( '[contact-form-7 id="50" title="Contact form 1"]' ); ?>
         </div>
         </div>
         </div> 




  <?php
 get_footer();