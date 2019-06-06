<?php
/*
Template Name: Channels Listing Page
*/

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="channel-content">
		<?php the_content(); ?>
		</div>

    	<?php endwhile; // end of the loop. ?>
<br/><br/>

<div class="page-head">	
	<h2 class="content-heading"><span style="font-size:18px;display: inline-block;top:-1px;position: relative;color: #747474;" data-icon="&#xe608;"></span> Explore Channels</h2>
	<hr class="content-heading">
</div>

<?php
//list terms in a given taxonomy
$taxonomy = 'channel';
$term_args=array(
  'hide_empty' => false,
  'orderby' => 'name',
  'order' => 'ASC'
);
$tax_terms = get_terms($taxonomy,$term_args);
  foreach($tax_terms as $tax_term) { ?>
<div class="large-4 columns">
	<div class="categorypanel">
		<a class="cp-image-link" href="<?php echo get_term_link($tax_term,$taxonomy); ?>">
			<div class="channel-description">
				<h3><?php echo $tax_term->name; ?></h3>
				<?php echo $tax_term->description; ?>
			</div>

		<div class="cp-css-image" style="background:url('<?php echo z_taxonomy_image_url($tax_term->term_id); ?>') center top no-repeat; background-size:auto 230px;top:0;left:0; top:0;width:100%;">			
		</div> 
		</a>
	</div>
</div>
  	<?php } ?>

  


<?php get_footer(); ?>