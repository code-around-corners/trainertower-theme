		<div class="row m-1 m-sm-0 pb-2">
			<nav class="navbar navbar-expand-sm bg-darker navbar-dark rounded w-100 nav-fill p-0">
				<ul class="nav w-100 flex-column flex-sm-row collapse navbar-collapse" id="site-menu">
<?php
	$menu = wp_get_menu_array("primary");
	
	foreach($menu as $item) {
		if ( count($item["children"]) ) {
			echo '<li class="nav-item dropdown">';
			echo '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="' . $item["url"] . '" role="button" aria-haspopup="true" aria-expanded="false">' . $item["title"] . "</a>";
			echo "<div class='dropdown-menu'>";
			
			foreach($item["children"] as $child) {
				echo '<a class="dropdown-item" href="' . $child["url"] . '">' . $child["title"] . '</a>';
			}
			
			echo "</div>";
		} else {
			echo '<li class="nav-item">';
			echo '<a class="nav-link" href="' . $item["url"] . '">' . $item["title"] . '</a>';
			echo '</li>';
		}
	}
?>
				</ul>
			</nav>
		</div>