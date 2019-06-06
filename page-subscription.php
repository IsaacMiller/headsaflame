<?php
/*
Template Name: Subscriptions Page
*/
get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

<div class="row" style="margin-top:40px">
   	<div class="large-12 columns page-content">
		<?php the_content(); ?>
	</div>
</div>

    	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>