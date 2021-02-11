<?php 

/**
*Template Name:contact us
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

        <?php echo do_shortcode( '[contact-form-7 id="186" title="Contact form 1"]' );  ?>  
            <!-- <div class="mb-3">

              <label for="exampleFormControlInput1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="give your name">
              
              <label for="exampleFormControlInput1" class="form-label">Subject</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="subject">

              <label for="exampleFormControlInput1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              <input type="submit">
              </div> -->

       
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
    <!-- /.blog-post -->


   </div>

   <div class="col-md-4">
     <div class="p-4 mb-3 bg-light rounded">
       <h4 class="font-italic">About</h4>
       <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
     </div>

     <div class="p-4">
      <?php dynamic_sidebar('home_right_1' ); ?>
         
     </div>

     <div class="p-4">
      <?php dynamic_sidebar('home_right_2' ); ?>
     </div>
   </div>

 </div><!-- /.row -->

</main>





 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <?php the_content(); ?>
 </div>
 </div>
 </div>
  <?php
 get_footer();