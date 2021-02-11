<?php 

/**
*Template Name:about us
*/
get_header();
 ?>

 <main class="container">
 <div class="row">
   <div class="col-md-8">
     
     	<?php 
     	the_title( sprintf( '<h3 class="pb-4 mb-4 font-italic border-bottom">', esc_url( get_permalink() ) ), '</h3>' );
     	
     	 ?>

     <article class="blog-post">

     	<?php

     				// Start the Loop.
     				while ( have_posts() ) :
     					the_post();

     	?>
     					<?php the_post_thumbnail( 'large', array( 'class' => 'alignleft' ) ); ?>
     	 				
     					<?php the_content(); ?>
     	<?php
     				endwhile; // End the loop.
     				?>
    
        


       
     </article><!-- /.blog-post -->




      <!--  <h2 class="blog-post-title">New feature</h2>
       <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

       <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
       <ul>
         <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
         <li>Donec id elit non mi porta gravida at eget metus.</li>
         <li>Nulla vitae elit libero, a pharetra augue.</li>
       </ul>
       <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
       <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p> -->
     </article><!-- /.blog-post -->

     <nav class="blog-pagination" aria-label="Pagination">
       <a class="btn btn-outline-primary" href="#">Older</a>
       <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
     </nav>

   </div>

   <div class="col-md-4">
     <div class="p-4 mb-3 bg-light rounded">
       <h4 class="font-italic">About</h4>
       <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
     </div>

     <div class="p-4">
      <?php dynamic_sidebar('home_right_1' ); ?>
      <?php dynamic_sidebar('home_right_2' ); ?>
     <!--   <h4 class="font-italic">Archives</h4>
       <ol class="list-unstyled mb-0">
         <li><a href="#">March 2014</a></li>
         <li><a href="#">February 2014</a></li>
         <li><a href="#">January 2014</a></li>
         <li><a href="#">December 2013</a></li>
         <li><a href="#">November 2013</a></li>
         <li><a href="#">October 2013</a></li>
         <li><a href="#">September 2013</a></li>
         <li><a href="#">August 2013</a></li>
         <li><a href="#">July 2013</a></li>
         <li><a href="#">June 2013</a></li>
         <li><a href="#">May 2013</a></li>
         <li><a href="#">April 2013</a></li>
       </ol> -->
     </div>

     <div class="p-4">
      
     </div>
   </div>

 </div><!-- /.row -->

</main>




 <?php

 get_footer();