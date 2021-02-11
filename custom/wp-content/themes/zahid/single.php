<?php



get_header();
?>

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
			 				<?php 
			 				the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' );
			 				
			 				 ?>
							<?php the_content(); ?>


		</div>					
			<?php
						endwhile; // End the loop.
						?>
		


		</div>
		<hr class="featurette-divider">
</div>


<?php
get_footer();