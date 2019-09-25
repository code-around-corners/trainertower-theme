<?php
	get_header();
	get_template_part("templates/carousel");
?>	
		<div class="row m-1 m-sm-0">
			<div id="site-articles" class="col-12 col-md-8 w-100 p-0 mb-2 rounded">
				<h5 class="text-center text-light ttblue p-2 rounded">What's New From Trainer Tower</h5>
<?
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>
			<div class="card mt-2" id="post-<? the_ID(); ?>">
				<img class="card-img-top" src="<? echo $image[0]; ?>" alt="">
				<div class="card-header">
					<h4 class="card-title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h4>
					<h6 class="card-subtitle text-muted">
						Posted <? echo the_time('F jS Y'); ?> by <i class="fas fa-user"></i> <? the_author_posts_link(); ?>
					</h6>
				</div>
<?php
				$body = get_the_excerpt();
				if ( $body != "" ) {
?>
				<div class="card-body">
					<? the_excerpt(); ?>
				</div>
<?				} ?>
				<div class="card-footer">
					<div class="d-flex">
						<div class="flex-grow-1">
							<i class="fas fa-tag"></i> <?php echo get_the_category_list( ' <i class="fas fa-tag"></i> ' ); ?>
						</div>
						<div class="flex-grow-1 text-right">
							<i class="fas fa-comment"></i> <? comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
						</div>
					</div>
				</div>
			</div>
<?php
		}
	} else {
		echo "<p>No posts.</p>";
	}
?>
				<? wp_pagenavi(array("wrapper_class" => "wp-pagenavi text-center mt-2 p-1 text-muted")); ?>
			</div>
			<div class="col-12 col-md-4 p-0 pl-md-2">
				<div id="site-sidebar" class="w-100 p-0 mb-2 rounded">
<?php
	get_sidebar();
?>
				</div>
			</div>
		</div>
<?php
	get_footer();
?>