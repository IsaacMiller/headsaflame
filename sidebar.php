<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Heads Aflame Magazine
 */
?>
<div id="secondary" class="widget-area" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
	<?php endif; // end sidebar widget area ?>

	<aside>
		<div class="relatedposts">
			<?php
			$orig_post = $post;
			global $post;
			$tags = wp_get_post_tags($post->ID);
			
			if ($tags) {
			echo '<h2 class="dark-bg-heading">Related posts</h2>';
			$tag_ids = array();
			foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
			$args=array(
			'tag__in' => $tag_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page'=>3, // Number of related posts to display.
			'caller_get_posts'=>1
			);
			
			$my_query = new wp_query( $args );

			while( $my_query->have_posts() ) {
			$my_query->the_post();
			?>
			
			<?php get_template_part( 'content', get_post_format() ); ?>
			
			<? }
			}
			$post = $orig_post;
			wp_reset_query();
			?>
		</div>
	</aside>
</div><!-- #secondary -->
