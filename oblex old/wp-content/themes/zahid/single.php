<?php



get_header();
?>

<div class="container">
	<div class="row">

		<div class="col-md-12">

			<?php

						// Start the Loop.
						while ( have_posts() ) :
							the_post();

			?>
							<?php the_post_thumbnail( 'large', array( 'class' => 'alignleft' ) ); ?>
			 				<?php 
			 				the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' );
			 				
			 				 ?>
							<?php the_content(); ?>
			<?php
						endwhile; // End the loop.
						?>
		</div>


		</div>
</div>


<?php
get_footer();