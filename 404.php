<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Heads Aflame Magazine
 */

get_header(); ?>

<div class="row" style="margin-top:40px">
   	<div class="large-9 columns large-centered page-content">
		<div class="article-content">
		<img style="width:100%" src="<?php bloginfo('template_directory'); ?>/images/space-explosion.gif"/>
		<h2 class="error-text">404 Error</h2>
	    	<div class="post-magic article-content">
	    		<h2 class="post-title">You have fallen in to a black hole...</h2>
				<p><?php _e( "There's literally nothing here. We've provided some escape routes for you to find your way below. You can also try searching for what you were looking for:", 'heads-aflame-magazine' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( heads_aflame_magazine_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'heads-aflame-magazine' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
					/* translators: %1$s: smiley */
					$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'heads-aflame-magazine' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>			
<br/><br/><br/><br/><br/>
				</div>
    	</div>
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