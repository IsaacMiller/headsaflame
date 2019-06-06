<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Heads Aflame Magazine
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

<div class="row" style="margin-top:40px">
   	<div class="large-9 columns large-centered page-content">
		<div class="article-content">
			<?php if( get_field('full_screen_background') ) { echo "<br/>"; ?>
			<?php } else { ?>
	   			<?php if(has_post_thumbnail()): ?>
	    			<div class="article-image">
	        			<?php the_post_thumbnail() ?>
	    			</div>
					</a> 
				<?php else: ?>
				<?php endif ?>
			<?php } ?>

	    	<div class="post-magic article-content">
	    		<h2 class="page-title"><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
    	</div>
    	<?php endwhile; // end of the loop. ?>
	</div>
</div>

<div class="row">
	   	<div class="large-9 columns large-centered">
	   		 		<div class="comments-section">

	   		<?php comments_template(); ?> 
	   		</div>
		</div>
</div>


<?php get_footer(); ?>