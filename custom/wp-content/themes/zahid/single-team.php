<?php



get_header();
?>
<section class="teaminfo">

<div class="container">
	
	<div class="row">

     <hr class="featurette-divider">
		<div class="col-md-3">

			<?php

						// Start the Loop.
						while ( have_posts() ) :
							the_post();

			?>

							<?php the_post_thumbnail( 'large', array( 'class' => 'alignleft' ) ); ?>

		   </div>


		   <div class="col-md-9">

			 			<div>	<h3 class="teamheader"> <?php 
			 				the_title( sprintf( '<h3 class="teamheader1">', esc_url( get_permalink() ) ), '</h3>' ); 
			 				
			 				 ?> </h3> </div>
			 				 <div class="teamheader2"> <h4> <?php echo get_post_meta( $post->ID, 'designat_code', true ); ?> </h4></div>
							



                    <?php

                    	$facebook=get_post_meta( $post->ID, 'facebook_code', true );
                    	$twitter=get_post_meta( $post->ID, 'twitter_code', true ); 

                    	?>

                    	<?php if ($facebook) : ?>

                    	<div class="sicon"> 
                    		<a href="<?php echo get_post_meta( $post->ID, 'facebook_code', true ); ?>" >
                    		      <span class="fa fa-facebook-f">  </span>
                    	      </a> 

                    	 
                    	  <?php endif; ?>

                    	  <?php if ($twitter) : ?>
							
								

							      <a href="<?php echo get_post_meta( $post->ID, 'twitter_code', true ); ?>" >
							      								      <span class="fa fa-twitter">  </span>
							      </a> 
							</div>

							

						<?php endif; ?>

							<div class="teampara"><?php the_content(); ?></div>

							



			  </div>				
			           <?php
						endwhile; // End the loop.
						?>
		

       
		</div>
		<hr class="featurette-divider">
</div>
</section>

<?php
get_footer();