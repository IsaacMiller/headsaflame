<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Heads Aflame Magazine
 */
?><!DOCTYPE html>
 <!--
  _    _                _            __ _                      
 | |  | |              | |          / _| |                     
 | |__| | ___  __ _  __| |___  __ _| |_| | __ _ _ __ ___   ___ 
 |  __  |/ _ \/ _` |/ _` / __|/ _` |  _| |/ _` | '_ ` _ \ / _ \
 | |  | |  __/ (_| | (_| \__ \ (_| | | | | (_| | | | | | |  __/
 |_|  |_|\___|\__,_|\__,_|___/\__,_|_| |_|\__,_|_| |_| |_|\___|
Open your eyes and see. You are free and this is your world to create.

-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<!-- For arrow chat on live site <link type="text/css" rel="stylesheet" id="arrowchat_css" media="all" href="/chat/external.php?type=css" charset="utf-8" />
<script type="text/javascript" src="/chat/includes/js/jquery.js"></script>
<script type="text/javascript" src="/chat/includes/js/jquery-ui.js"></script> -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=648296558516443";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<header class="site-header">
<?php do_action( 'before' ); ?>
  <a class="menu-icon toggle-menu menu-left jPushMenuBtn menu-active push-body" id="menu-icon" aria-hidden="true" data-icon="&#xf0c9;"></a>
  	<div class="header-main">
	    <div class="title-area">
	      <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><span class="hide-for-small"><?php bloginfo( 'name' ); ?></span></a>
	      <p id="description" class="hide-for-small">
	      	Conscious Media Network</p>
	    </div>

	    <ul class="menu sf-menu" id="dropdownnav">
	        <li class="explore"> 
	          <a class="hide-for-small" href="#" title="Explore"><span class="explore-icon" data-icon="&#xe008;"></span>Explore</a>
	          <a class="hide-for-medium-up" href="#" title="Explore"><span class="explore-icon" data-icon="&#xe008;"></span></a>
				<div class="sf-mega explore row">

<?php if (is_user_logged_in()) {
?> 
<?php } else { ?>
				<!-- <div class="hiddenarea">
                  <div class="partner-program-signup">
                  Become a Launch Partner for Early Access:
                  <br/>
                  <a href="/partners/" class="learn-more-partner-button">Learn More</a>
                  </div>
                </div> -->
      <?php } ?>
          

		            <div style="border-right: 1px solid #D7D7D7;" class="small-6 columns explore-menu">
		              <ul class="explore-menu"> 
		                <li><a href="<?php echo get_site_url(); ?>/start-here/"><span class="explore-menu-icon" data-icon="&#xe008;"></span> Start Here</a></li>
		                <li><a href="<?php echo get_site_url(); ?>/topics/"><span class="topics-menu-icon" data-icon="&#xe60d;"></span> Topics</a></li>
		               	<li><a href="<?php echo get_site_url(); ?>/channels/"><span class="channel-menu-icon" data-icon="&#xe608;"></span> Channels</a></li>
		              </ul>
		            </div>
		            <div class="small-6 columns explore-menu">
		              <ul class="explore-menu">
		              	<li><a href="<?php echo get_site_url(); ?>/videos/"><span class="explore-menu-icon" data-icon="&#xe003;"></span> Videos</a></li>
		               	<li><a href="<?php echo get_site_url(); ?>/members/"><span class="explore-menu-icon" data-icon="&#xe00f;"></span> Members</a></li>
		                <li><a href="<?php echo get_site_url(); ?>/about/"><span class="explore-menu-icon" data-icon="&#xf06e;"></span> About</a></li>
		              </ul>
		            </div>
		       	</div>
	        </li>
	        <li class="seek">
	          <a class="hide-for-small" href="#"><span class="seek-icon" data-icon="&#xe001;"></span>Seek</a>
	          <a class="hide-for-medium-up" href="#"><span class="seek-icon" data-icon="&#xe001;"></span></a>

	          <div class="sf-mega seek">
	            <form role="search" method="get" class="search-form" action="http://headsaflame.com/">
	              <input type="text" onfocus="if (this.value == 'And ye shall find...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'And ye shall find...';}" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" id="search-form-header" placeholder="And ye shall find...">
	            </form>
	          </div>
	        </li>
	        <li class="user">
<?php
if ( is_user_logged_in() ) { ?>
	          <a class="hide-for-small" href="/profile/<?php global $current_user; get_currentuserinfo(); echo $current_user->user_login ?>"><span class="avatar-img"><?php global $userdata; get_currentuserinfo(); echo get_avatar( $userdata->ID, 24 ); ?></span>
		<?php global $current_user;
      get_currentuserinfo();
      echo $current_user->user_firstname ?>
	          </a>
	          <a class="hide-for-medium-up" href="/profile/<?php global $current_user; get_currentuserinfo(); echo $current_user->user_login ?>"><span class="you-icon" data-icon="&#xe002;"></span></a>
				<div class="sf-mega you">
				<ul class="you-menu">
					<li>
		            	<a href="/profile/<?php global $current_user; get_currentuserinfo(); echo $current_user->user_login ?>">My Profile</a>
		            </li>
		                 <li>
		          	<a href="/post/">Submit a Post</a>
		          </li>
		            <li>
		              <a href="/subscriptions/">My Subscriptions</a>
		          	</li>
		          	<li>
		              <a href="/bookmarks/">My Bookmarks</a>
		          	</li>
		          	<?php if( current_user_can('level_10') ) : ?>
		          <li>
		          	<a href="/wp-admin/">Admin Dashboard</a>
		          </li>
		 
		          <?php else : ?>
					<?php endif; ?>
		          	<li>
		          	<a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout">Logout</a>
		          </li>
	      		</ul>
	          </div>

<?php } else { ?>
	          <a class="hide-for-small" href="/login/"><span class="you-icon" data-icon="&#xe002;"></span>You</a>
	          <a class="hide-for-medium-up" href="/login/"><span class="you-icon" data-icon="&#xe002;"></span></a>
	          <div class="sf-mega you">
	            <div class="text-center login-text">
	              <a href="/login/">Login</a><br/><br/>
	              <?php 
echo do_shortcode('[userpro_social_connect width="120px"]'); 
?>              <a href="/profile/register">Create an account &rarr;</a><br/>


	            </div>
	          </div>
<?php } ?>

	          

	        </li>
	    </ul>
	</div>
</header>


<div id="main-content" class="main-content row">
	<?php 
/*
*  Conditional Statement for Full Screen Background Pages - Uses Advanced Custom Fields Plugin
*/
if(get_field('full_screen_background') && is_single() )
{ ?>
   <div id="full-screen-background-image" class="full-image-size" style="background:url(<?php $image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id,'large', true);
	echo $image_url[0];  ?>) no-repeat;background-size: cover;">
	<div class="gradient-overlay">
	</div>
	</div>
<?php } else { ?>
   	<div id="full-screen-background-image" style="background:url(<?php bloginfo('template_directory'); ?>/images/cosmic-background.jpg) no-repeat;background-size: cover;">
   	</div>
<?php } ?>
  <div class="large-12 columns">
  	<div class="top-menu">
        <ul class="social-icons">
          <li><a href="http://facebook.com/headsaflame" target="_blank" aria-hidden="true" data-icon="&#xe000;"></a></li>
          <li><a href="http://twitter.com/headsaflame" target="_blank" aria-hidden="true" data-icon="&#xe00a;"></a></li>
         <!-- <li><a href="#" aria-hidden="true" data-icon="&#xe00e;"></a></li> -->
          <li><a href="http://www.youtube.com/channel/UCLiRQK__b9rXlwtBlyUGEHw" target="_blank" aria-hidden="true" data-icon="&#xf167;"></a></li>
          <li><a href="<?php bloginfo('rss_url'); ?>" aria-hidden="true" data-icon="&#xe00b;"></a></li>
        </ul>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </div>


