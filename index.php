<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Heads Aflame Magazine
 */

get_header(); ?>
<br clear="all"/>
<div class="page-head">


	<?php if ( is_home() ) { ?>
		<?php if ( ! dynamic_sidebar( 'homepage-1' ) ) : ?>
		<?php endif; // end sidebar widget area ?>
		
	<?php } else {  ?>

	<?php } ?>
		
	<h2 class="content-heading"><a href="<?php bloginfo('rss_url'); ?>" class="RSS-button" data-icon="&#xe00b;"></a> Recently Shared</h2>
	<hr class="content-heading">
</div>

<!-- START LOOP -->
<?php $counter = 1 ?>
<div class="row">
<?php while ( have_posts() ) : the_post(); ?>
	<div class="large-4 columns">
	    <?php get_template_part( 'content', get_post_format() ); ?>
	</div>  
	<?php if ($counter % 3 == 0){echo '</div><div class="row">';} ?>
<?php $counter++ ; 
endwhile; ?>

</div>

<?php get_footer(); ?>