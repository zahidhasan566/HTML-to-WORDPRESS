<?php 

get_header();
 ?>
 
     <main class="container">
       <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
         <div class="col-md-6 px-0">
           <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
           <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
           <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
         </div>
       </div>

       <div class="row mb-2">
       	<?php
       	if ( have_posts() ) {

       		// Load posts loop.
       		while ( have_posts() ) {
       			the_post();
       	?>

      
       	<div class="col-md-6">
       	  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
       	    <div class="col p-4 d-flex flex-column position-static">
       	      <strong class="d-inline-block mb-2 text-primary">World1</strong>
       	      <?php the_title( sprintf( '<h3 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
       	      
       	      <div class="mb-1 text-muted"><?php the_date(); ?></div>
       	      <?php the_excerpt(); ?>
     
       	      <a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
       	    </div>
       	    <div class="col-auto d-none d-lg-block">
       	      <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?>

       	    </div>
       	  </div>
       	</div>

       	<?php 

       	}
       		}
       	?>

       </div>

       <div class="row">
         <div class="col-md-8">
           <h3 class="pb-4 mb-4 font-italic border-bottom">
             From the Firehose
           </h3>

           <article class="blog-post">
             <h2 class="blog-post-title">Sample blog post</h2>
             <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

             <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
             <hr>
             <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
             <blockquote>
               <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
             </blockquote>
             <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
             <h2>Heading</h2>
             <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
             <h3>Sub-heading</h3>
             <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
             <pre><code>Example code block</code></pre>
             <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
             <h3>Sub-heading</h3>
             <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
             <ul>
               <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
               <li>Donec id elit non mi porta gravida at eget metus.</li>
               <li>Nulla vitae elit libero, a pharetra augue.</li>
             </ul>
             <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
             <ol>
               <li>Vestibulum id ligula porta felis euismod semper.</li>
               <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
               <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
             </ol>
             <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
           </article><!-- /.blog-post -->

           <article class="blog-post">
             <h2 class="blog-post-title">Another blog post</h2>
             <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

             <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
             <blockquote>
               <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
             </blockquote>
             <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
             <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
           </article><!-- /.blog-post -->

           <article class="blog-post">
             <h2 class="blog-post-title">New feature</h2>
             <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

             <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
             <ul>
               <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
               <li>Donec id elit non mi porta gravida at eget metus.</li>
               <li>Nulla vitae elit libero, a pharetra augue.</li>
             </ul>
             <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
             <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
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
          <?php dynamic_sidebar('home_right_1' ); ?>
          <?php dynamic_sidebar('home_right_2' ); ?>

        <!--    <div class="p-4">
             <h4 class="font-italic">Archives</h4>
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
             </ol>
           </div> -->

           <div class="p-4">
             <h4 class="font-italic">Elsewhere</h4>
             <ol class="list-unstyled">
               <li><a href="#">GitHub</a></li>
               <li><a href="#">Twitter</a></li>
               <li><a href="#">Facebook</a></li>
             </ol>
           </div>
         </div>

       </div><!-- /.row -->

     </main>


     <!-- Optional JavaScript; choose one of the two! -->

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

     <!-- Option 2: Separate Popper and Bootstrap JS -->
     <!--
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
     -->
  

     <?php

     get_footer();

