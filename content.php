<?php
/**
 * @package Heads Aflame Magazine
 */
?>

	<div <?php post_class('awesomepanel'); ?>>
		<div class="ap-tags">
		     <?php the_category('  '); ?>
	    </div>
	    <a class="ap-image-link" href="<?php the_permalink(); ?>">

	    <?php if ( has_post_thumbnail() ) : ?>   
		<span class="ap-css-image" style="background:url('<?php $image_id = get_post_thumbnail_id();
		$image_url = wp_get_attachment_image_src($image_id,'awesome-panel', true);
		echo $image_url[0];  ?>') center top no-repeat; background-size:auto 230px;top:0;left:0; top:0;width:100%;"></span> 
	        <?php else : ?>
		<span class="ap-css-image" style="background-size:auto 230px;top:0;left:0; top:0;width:100%;"></span> 
   		<?php endif; ?>

	    </a>
	    <div class="entrybackground">
			<header class="entry-header">
			<h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			</header>
			<div class="author-info-wrapper">
		        <div class="author-info">
		          <a class="avatar" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><? echo get_avatar( get_the_author_meta('user_email'), $size = '70'); ?></a>
		          <div class="user-name">by <?php the_author_posts_link() ?></div>
		          <div class="post-date"><?php echo bm_human_time_diff_enhanced();?></div>
		        </div>
		    </div>
	    </div>
	</div>
