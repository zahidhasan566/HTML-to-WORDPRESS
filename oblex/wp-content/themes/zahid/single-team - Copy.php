<?php



get_header();
?>
<section class="teaminfo">

<div class="container">
	
	<div class="row">


		<div class="col-md-4">

			<?php

						// Start the Loop.
						while ( have_posts() ) :
							the_post();

			?>

							<?php the_post_thumbnail( 'large', array( 'class' => 'alignleft' ) ); ?>

		   </div>


		   <div class="col-md-8">

			 			<div>	<h3> <?php 
			 				the_title( sprintf( '<h3 class="entry-title">', esc_url( get_permalink() ) ), '</h3>' ); 
			 				
			 				 ?> </h3> </div>
			 				 <div> <h4> <?php echo get_post_meta( $post->ID, 'designat_code', true ); ?> </h4></div>
							<div><?php the_content(); ?></div>

							<div class="sicon"> 
								<a href="<?php echo get_post_meta( $post->ID, 'facebook_code', true ); ?>" >
								      <span class="fa fa-facebook-f">  </span>
							      </a> 

							      <a href="<?php echo get_post_meta( $post->ID, 'twitter_code', true ); ?>" >
							      								      <span class="fa fa-twitter">  </span>
							      </a> 
							</div>

							



							
							



			  </div>				
			           <?php
						endwhile; // End the loop.
						?>
		

       
		</div>
</div>
</section>

<?php
get_footer();