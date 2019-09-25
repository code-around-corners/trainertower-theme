<?php
	get_header();
?>	
		<div class="row m-1 m-sm-0">
			<div id="site-articles" class="card">
<?
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			$image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail');
			$imageSize = (isset($image[0]) ? getimagesize($image[0]) : 0);
?>
			<div class="card-header text-center ttblue text-light"><h3 class="m-0 p-1"><? the_title(); ?></h3></div>
<?			if ( isset($image[0]) ) { ?>
			<div class="text-center mt-sm-2">
				<img class="featured text-center" style="max-width: <? echo $imageSize[0]; ?>px;" src="<? echo $image[0]; ?>" />
			</div>
<?			} ?>
			<div class="card-body">
				<? the_content(); ?>
			</div>
<?
		}
	}
?>
			</div>
		</div>
<?php
	get_footer();
?>