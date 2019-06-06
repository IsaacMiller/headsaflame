<?php
/*
Template Name: Launch Page
*/
get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

<br clear="all"/>
<div class="opening-box">
	<img class="flames" alt="Changeing the World" src="<?php bloginfo('template_directory'); ?>/images/flames.png"/>
	<h1>A New Media Network Fearlessly <br/>Dedicated to One Thing:<br/>
	<span>Changing the World</span></h1><br/>

	<div style="max-width:420px;margin:0 auto;">
	<iframe width="100%" height="236" src="http://www.youtube.com/embed/JRy3zNzOuxM?rel=0&amp;controls=0&amp;showinfo=0&amp;border=0&amp;showsearch=0" frameborder="0" allowfullscreen=""></iframe>
	 </div>

	<h2 style="margin-top:-15px;padding-bottom:5px;">We are helping people all over the world wake up to their inner freedom and creative potential. The question is, do you want to be a part of the revolution?</h2>
	<a href="/partners/" id="arrow_button" class="button orange launch-partner-button">
	Launch Partner Application &nbsp; <span aria-hidden="true" data-icon="&#xf04b;"></span>
	</a>
	<br/>
		<span class="or">or</span>
	<br/>
	<div class="launch-signup">
	    <p>Get your Invitation Code:</p>
		<form action="http://headsaflame.us6.list-manage.com/subscribe/post?u=0503e0e020a7eef8707080495&id=7ec0f111d9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
	      <input type="text" name="FNAME" class="name" id="mce-FNAME" value="First Name" onfocus="if (this.value == 'First Name') {this.value = '';}" onblur="if (this.value == '') {this.value = 'First Name';}">
	     <input type="text" name="EMAIL" class="required email" id="mce-EMAIL" value="Email" onfocus="if (this.value == 'Email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Email';}">
	     <button id="arrow_button" class="button orange launch-email-button" type="submit">
	      <div aria-hidden="true" data-icon="&#xf04b;"></div>
	    </button>
	  </form>
	  <div style="margin-top:-30px;clear:both;color:white">
	  <small>No spam, we promise :)</small>
	  </div>
	</div>
	<div class="row launch-info">
		<h1>What is Headsaflame?</h1>
	   	<div class="large-8 columns">

		   	<div class="row">
			   	<div class="large-2 columns">
			   	   	<span class="launch-icons" data-icon="&#xe003;"></span>
			   	</div>
			   	<div class="large-10 columns">
			   		<h2>A New-Age Media Network</h2>
			   		<p>There's CNN, Fox News, MSNBC, CBS, and then there's Headsaflame. We are the alternative news source and multimedia network for the new age. We are in the process of networking with today’s top thought leaders and revolutionaries to bring you the most inspirational, motivational, and empowering information in the world.</p>
			   	</div>

			   	<div class="large-2 columns">
			   	   	<span class="launch-icons" data-icon="&#xe617;"></span>
			   	</div>
			   	<div class="large-10 columns">
			   		<h2>A Global Freedom Movement and Community</h2>
					<p>We are in the midst of a global revolution of consciousness. People are waking up all over the planet to their creative powers. Headsaflame is a community of freedom activists and light workers from around the globe, rallied behind the common cause of liberty. By coming together we can change the world be awakening to our spirit.</p>
			   	</div>

			   	<div class="large-2 columns">
			   	   	<span class="launch-icons" data-icon="&#xe612;"></span>
			   	</div>
			   	<div class="large-10 columns">
			  		<h2>A Chance for You to Change Your Life</h2>
					<p>We are offering a powerful income opportunity to people passionate about waking others up to their infinite potential. Are you interested? Revenue from Headsaflame.com product sales, magazine subscriptions, and our network of conscious businesses will be shared with our Empowerment Tribe. You have the potential to earn money through our Tribe while helping change people's lives. The goal is for our tribe to experience both financial and time freedom while helping others experience the same.</p>
			   	</div>

		   	</div>
		</div>
		<div class="large-4 columns">
			<style>.fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] {
			width: 100% !important;
			background: #FFFFFF;
			}</style>
			<div class="fb-like-box" data-href="https://www.facebook.com/headsaflame" data-height="400" data-width:="285" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
		</div>
	</div>

	<h2 class="inspiring-authors">Expect to See Inspiring Content from these Visionary Authors and Producers:</h2>
</div>
<br/>
<br/>
<br/>
<?php echo do_shortcode('[ess_grid alias=headsaflameauthors]'); ?>
	

<div style="top:0px;" class="opening-box">
	<div class="row">
	<br/>
	<img class="aligncenter" alt="Headsaflame on Every Device" src="<?php bloginfo('template_directory'); ?>/images/headsaflameresponsive.png">
	</div>
</div>

<br/>
<br/>



    	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>