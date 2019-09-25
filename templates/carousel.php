		<div class="row m-1 m-sm-0">
			<div id="site-slider" class="col-12 col-md-8 bg-darker w-100 p-1 mb-2 rounded">
				<div id="site-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#site-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#site-carousel" data-slide-to="1"></li>
						<li data-target="#site-carousel" data-slide-to="2"></li>
						<li data-target="#site-carousel" data-slide-to="3"></li>
						<li data-target="#site-carousel" data-slide-to="4"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
<?php
	$args = array(
		'posts_per_page' => 5,
		'post_status' => 'publish',
	);

	$the_query = new WP_Query($args);

	if ( $the_query->have_posts() ) {
		$firstPost = true;
		
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>
						<div class="carousel-item<? echo ($firstPost ? " active" : ""); ?>">
							<img class="image-fit d-block w-100" style="filter: brightness(0.8);" src="<? echo $image[0]; ?>" />
							<div class="carousel-caption">
								<h5 class="rounded p-2 slider-banner"><a class="text-light" href="<? the_permalink(); ?>"><? the_title(); ?></a></h5>
							</div>
						</div>
<?php
			$firstPost = false;
		}
	}
?>
					</div>
					<a class="carousel-control-prev" href="#site-carousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>

					<a class="carousel-control-next" href="#site-carousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col-12 col-md-4 p-0 pl-md-2">
				<div id="site-competition" class="bg-darker w-100 p-1 mb-1 rounded">
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'featured-event' ); ?>
					</div>
				</div>
			</div>
		</div>
