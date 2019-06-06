<?php get_header(); ?>

<div class="row">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="large-8 columns large-centered jumbo-text video-page">
		<div class="flex-video widescreen">
			<?php the_field('video_embed_code'); ?>
		</div>



		<h1><?php the_title(); ?></h1>

		<div class="row post-author-details">
		    <div class="small-5 columns">
		    	<div class="author-details">
		          <a class="avatar" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><? echo get_avatar( get_the_author_meta('user_email'), $size = '70'); ?></a>
		          <span class="author-name"><?php the_author_posts_link() ?></span><br/>

		          <div id="twitter_follow" data-placement="nuggetTop">
		                <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/follow_button.1379006964.html#_=1379012950638&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=RococoCocoa&amp;show_count=false&amp;show_screen_name=false&amp;size=m" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
		          </div>
		          <div id="facebook_subscribe">
		                <fb:like id="fb-curator_nugget" class="fb-like desktop fb_edge_widget_with_comment fb_iframe_widget" href="http://www.facebook.com/Rococo.Cocoa?pos=nugget" send="false" width="200" show_faces="false" colorscheme="light" layout="button_count" fb-xfbml-state="rendered"><span style="height: 20px; width: 84px;"><iframe id="" name="f3ee065bbc" scrolling="no" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=153163221468956&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D27%23cb%3Df2085a7e98%26domain%3Dwww.upworthy.com%26origin%3Dhttp%253A%252F%252Fwww.upworthy.com%252Ff2a66619cc%26relation%3Dparent.parent&amp;colorscheme=light&amp;extended_social_context=false&amp;href=http%3A%2F%2Fwww.facebook.com%2FRococo.Cocoa%3Fpos%3Dnugget&amp;layout=button_count&amp;locale=en_US&amp;node_type=link&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=200" style="border: none; overflow: hidden; height: 20px; width: 84px;"></iframe></span></fb:like>
		          </div>
		        </div>
		      </div>
		      <div class="small-7 columns">
		        <?php the_excerpt(); ?> 
		    </div>
		</div>
	</div>
</div>

<div class="row">
	<div class="featured-area">
     <a href="#"><img align="left" alt="Headsaflame Magazine on Apple Newsstand" src="<?php echo get_stylesheet_directory_uri() ?>/images/apple-newsstand-magazine-ipad.png"/></a>
   	</div>
   	<div class="large-9 columns">
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
    						<h2 class="post-title"><?php the_title(); ?></H2>

			<?php the_content(); ?>
		</div>
    </div>
</div>
    <?php endwhile; // end of the loop. ?>

    <div class="large-3 columns">
    	<?php get_sidebar(); ?>
	</div>
</div>


<?php get_footer(); ?>