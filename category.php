<?php get_header(); ?>


<div class="row">

	<div style="margin-bottom:-30px;" class="large-8 columns large-centered jumbo-text">
		<div class="row category-header">
		    <div class="large-5 columns">
		    	<div style="text-align:center;"class="">
		    	<img class="cat-image" src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
		
		    	<div class="subscribe-area">
		    		<div class="breadcrumb-topic">
		    		<a href="/topics">Topics</a> > <span><?php single_cat_title('',true); ?></span>
		    		</div>
				<?php
				$thecat = get_queried_object()->term_id;
				echo do_shortcode('[wpw_follow_term_me posttype="post" taxonomy="category" termid="'.$thecat.'" followtext="Subscribe" followerscountmsg="{followers_count} Subscribers" followingtext="Subscribed" unfollowtext="Unsubscribe"][/wpw_follow_term_me]'); 
				?>
				</div>
				</div>
		    </div>
		    <div class="large-7 columns">
				<h1 style="margin-bottom:0px;"><?php single_cat_title('',true); ?></h1>
		        <?php echo category_description( $category_id ); ?> 

				<!-- AddThis Button BEGIN -->
				<div style="margin:0 auto;width:245px;margin-top:-10px;" class="addthis_toolbox addthis_default_style addthis_32x32_style">
				<a class="addthis_button_preferred_1"></a>
				<a class="addthis_button_preferred_2"></a>
				<a class="addthis_button_preferred_3"></a>
				<a class="addthis_button_preferred_4"></a>
				<a class="addthis_button_compact"></a>
				<a class="addthis_counter addthis_bubble_style"></a>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ottoisaac"></script>
				<!-- AddThis Button END -->
		    </div>
		</div>
	</div>

</div>


<br clear="all"/>
<div class="page-head">

<?php $this_cat = get_category(get_query_var('cat'),false);?>
	<h2 class="content-heading"><a href="<?php echo home_url( '/' ) . 'topic/' .$this_cat->slug; ?>/feed/" class="RSS-button" data-icon="&#xe00b;"></a>
		<?php single_cat_title('',true); ?></h2>
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