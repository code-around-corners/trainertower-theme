	</div>
	<footer class="site-footer text-center bg-darker mt-4 text-muted mb-0 pt-2 pb-1">
		<section class="footer-widgets text-left">
			<div class="container pt-2">
				<div class="row">
					<div class="col-12 col-sm-6 text-center text-sm-left">
						<aside class="widget-area footer-1-area mb-2">
							<div class="w-100 pb-2">
								<? echo trainertower_get_social_icon("facebook"); ?>
								<? echo trainertower_get_social_icon("twitter"); ?>
								<? echo trainertower_get_social_icon("discord"); ?>
								<? echo trainertower_get_social_icon("twitch"); ?>
							</div>
							<div class="w-100">
<?php
	$menu = wp_get_menu_array("footer");
	$firstItem = true;
	
	foreach($menu as $item) {
		if ( ! $firstItem ) {
			echo " • ";
		} else {
			$firstItem = false;
		}
		
		echo '<a class="text-muted" href="' . $item["url"] . '">' . $item["title"] . '</a>';
	}
?>
							</div>
						</aside>
					</div>
					<div class="col-12 col-sm-6 text-center text-sm-left">
						<p>
							© 2020 Trainer Tower. All rights reserved of the original content. Pokémon and all related
							properties © The Pokémon Company, Creatures Inc., Game Freak and Nintendo. Trainer Tower is a
							fan-site, and in no way affiliated with TPCi.
						</p>
					</div>
				</div>
			</div>
		</section>
	</footer>
<?	wp_footer(); ?>
</body>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

</html>
