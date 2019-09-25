				<form action="/" method="get">
					<div class="input-group input-group-sm">
						<div class="input-group-prepend d-sm-none">
							<button class="btn btn-dark" type="button">
								<i class="fas fa-bars" data-toggle="collapse" data-target="#site-menu"></i>
							</button>
						</div>
						<input type="text" name="s" class="form-control" aria-label="Search" placeholder="Search..." value="<?php the_search_query(); ?>" id="search" />
						<div class="input-group-append">
							<button class="btn btn-dark" type="submit"><i class="fas fa-search"></i></button>
						</div>
					</div>
				</form>