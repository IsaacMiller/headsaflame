<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Heads Aflame Magazine
 */

get_header(); ?>

<div class="row">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="large-8 columns large-centered jumbo-text <?php
if(get_field('full_screen_background') && is_single() )
{ echo "full-background"; } ?>">
		<h1><?php the_title(); ?></h1>
		<div class="row post-author-details">
		    <div class="small-5 columns">
		    	<div class="author-details">
		          <a class="avatar" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><? echo get_avatar( get_the_author_meta('user_email'), $size = '70'); ?></a>
		          <span class="author-name"><?php the_author_posts_link() ?></span><br/>

		          <div id="twitter_follow" data-placement="nuggetTop">

		         
<a class="twitter-follow-button"
  href="<?php echo userpro_profile_data('twitter', get_the_author_meta( 'ID' ) ); ?>"
  data-show-count="false"
  data-show-screen-name="false"
  data-lang="en">
Follow
</a>
<script type="text/javascript">
window.twttr = (function (d, s, id) {
  var t, js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src= "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
}(document, "script", "twitter-wjs"));
</script>

		          </div>
		          <div id="facebook_subscribe">
		                <fb:like id="fb-curator_nugget" class="fb-like desktop fb_edge_widget_with_comment fb_iframe_widget" href="<?php echo userpro_profile_data('facebook_page', get_the_author_meta( 'ID' ) ); ?>" send="false" width="200" show_faces="false" colorscheme="light" layout="button_count" fb-xfbml-state="rendered"><span style="height: 20px; width: 84px;"><iframe id="" name="f3ee065bbc" scrolling="no" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=648296558516443&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D27%23cb%3Df2085a7e98%26domain%3Dwww.headsaflame.com%26origin%3Dhttp%253A%252F%252Fwww.headsaflame.com%252Ff2a66619cc%26relation%3Dparent.parent&amp;colorscheme=light&amp;extended_social_context=false&amp;href=<?php echo userpro_profile_data('facebook_page', get_the_author_meta( 'ID' ) ); ?>%3Fpos%3Dnugget&amp;layout=button_count&amp;locale=en_US&amp;node_type=link&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=200" style="border: none; overflow: hidden; height: 20px; width: 84px;"></iframe></span></fb:like>
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
     <a href="/magazine/"><img align="left" alt="Headsaflame Magazine on Apple Newsstand" src="<?php echo get_stylesheet_directory_uri() ?>/images/apple-newsstand-magazine-ipad.png"/></a>
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

    	<div class="post-magic">
    		<h2 class="post-title"><?php the_title(); ?></h2>
			<div class="post-time"><span><?php the_time('F jS, Y') ?></span></div>
			
			<div class="share-links row">
				<div class="large-6 columns">


					<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" class="button radius expand facebook-btn" onClick="return fbs_click(400, 300)" target="_blank" title="Share This on Facebook"><span data-icon="&#xe013;"></span> share on facebook</a>
				</div>
				<div class="large-6 columns">
					<a class="button radius expand twitter-btn" data-category="Social" data-action="Twitter Share" data-location="Bottom Post" href="http://twitter.com/intent/tweet?original_referer=<?php the_permalink(); ?>/&amp;text=<?php the_title(); ?>&amp;via=Headsaflame" title="share on twitter" target="_blank"><span class="twitter-share-icon" data-icon="&#xe60e;"></span> share on twitter</a>
				</div>
			</div>
			<?php the_content(); ?>
			<br/>
			<hr/>

			<div class="share-links row">
				<h4>Share the high vibes – help us change the world!</h4>
				<div class="large-6 columns">
								<a class="button radius expand facebook-btn" data-category="Social" data-action="Facebook Share" data-location="Bottom Post" href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>" data-permalink="<?php the_permalink(); ?>" title="share on facebook" target="_blank"><span data-icon="&#xe013;"></span> share on facebook</a>
				</div>
				<div class="large-6 columns">
					<a class="button radius expand twitter-btn" data-category="Social" data-action="Twitter Share" data-location="Bottom Post" href="http://twitter.com/intent/tweet?original_referer=<?php the_permalink(); ?>/&amp;text=<?php the_title(); ?>&amp;via=Headsaflame" title="share on twitter" target="_blank"><span class="twitter-share-icon" data-icon="&#xe60e;"></span> share on twitter</a>
				</div>
			</div>
		</div>
    </div>
    <div class="comments-section">

	<?php comments_template(); ?> 
	</div>

</div>
    <?php endwhile; // end of the loop. ?>

    <div class="large-3 columns">
    	<?php get_sidebar(); ?>
	</div>
</div>


<?php get_footer(); ?>