<?php
/*
Template Name: Category Listings Page
*/

get_header(); ?>
<br/><br/>
<div class="page-head">	
	<h2 class="content-heading" style="min-width:100%;width:100%;text-align:center;">Browse Topics</h2>
	<hr class="content-heading">
</div>
<?php $args = array(
  'orderby' => 'rand',
  'order' => 'ASC'
  );
$categories = get_categories($args);
  foreach($categories as $category) { ?>
<div class="large-4 columns">
	<div class="categorypanel">
		<a class="cp-image-link" href="<?php echo get_category_link( $category->term_id ); ?>">
						<span><?php echo $category->name ?></span>

		<div class="cp-css-image" style="background:url('<?php echo z_taxonomy_image_url($category->term_id); ?>') center top no-repeat; background-size:auto 230px;top:0;left:0; top:0;width:100%;">			
		</div> 
		</a>
	</div>
</div>
  	<?php } ?>

  


<?php get_footer(); ?>