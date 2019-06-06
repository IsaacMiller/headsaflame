<?php
/*
Template Name: Profile Pages
*/
get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<br/><br/>
<div class="profile-page">
<div class="row">
   	<div style="max-width:700px;" class="large-9 large-centered columns">
   		<h2 class="content-heading" style="min-width:100%;width:100%;text-align:center;"><?php the_title(); ?></h2>
<hr class="content-heading">
		<?php the_content(); ?>

	</div>

</div>
</div>


    	<?php endwhile; // end of the loop. ?>




<?php get_footer(); ?>