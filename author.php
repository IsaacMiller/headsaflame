<?php get_header(); ?>
<br clear="all"/>
<div class="page-head">

<?php $author = get_userdata( get_query_var('author') );?>



<div class="row">
	<div class="large-12 columns">
		<div class="row">
			<div class="large-8 columns">
<?php 
echo do_shortcode('[userpro template=card user=isaac]'); 
?>			</div>
			<div class="large-4 columns">


		    		
				<?php
				echo do_shortcode('[wpw_follow_author_me][/wpw_follow_author_me]'); 
				?>
							</div>
		</div>
	</div>
</div>


	<h2 class="content-heading"><a href="<?php echo get_author_feed_link( $author, $feed ) ?>" class="RSS-button" data-icon="&#xe00b;"></a>
		<?php echo $author->display_name;?>'s Feed</h2>
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