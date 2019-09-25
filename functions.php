<?php

function trainertower_widgets_init() {
	register_sidebar(array(
		'name'          => 'Home Page Sidebar',
		'id'            => 'home-sidebar',
		'before_widget' => '<div class="card mb-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="ttblue text-light p-2 rounded-top mb-0 text-center">',
		'after_title'   => '</h5>',
	));	

	register_sidebar(array(
		'name'          => 'Featured Event',
		'id'            => 'featured-event',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5 class="text-light mt-2">',
		'after_title'   => '</h5>',
	));	
}

add_action('widgets_init', 'trainertower_widgets_init');

function trainertower_menus_init() {
	register_nav_menus(array(
		'primary' => __( 'Page Menu', 'trainertower-theme'),
		'footer' => __( 'Page Footer', 'trainertower-theme'),
	));
}

add_action('init', 'trainertower_menus_init');

function wp_get_menu_array($current_menu) {
    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();
    
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            
            $menu[$m->ID]['ID']			= $m->ID;
            $menu[$m->ID]['title']		= $m->title;
            $menu[$m->ID]['url']		= $m->url;
            $menu[$m->ID]['children']	= array();
        }
    }
    
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']		= $m->ID;
            $submenu[$m->ID]['title']	= $m->title;
            $submenu[$m->ID]['url']		= $m->url;
            
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    
    return $menu;     
}

function trainertower_get_social_icon($network) {
	$url = "";
	$image = "";
	
	switch ( $network ) {
		case "facebook":
			$url = "https://www.facebook.com/TrainerTowerVGC";
			$image = "facebook.png";
			break;
		case "twitter":
			$url = "https://www.twitter.com/TrainerTower";
			$image = "twitter.png";
			break;
		case "discord":
			$url = "https://discord.gg/SxPXdsk";
			$image = "discord.png";
			break;
		case "twitch":
			$url = "https://www.twitch.tv/trainertowerpkmn";
			$image = "twitch.png";
			break;
	}
	
	$html = "";
	
	if ( $url != "" && $image != "" ) {
		$html = "<a href='" . $url . "'>";
		$html .= "<img class='social-icon' src='" . get_template_directory_uri() . "/resources/images/" . $image . "' />";
		$html .= "</a>";
	}
	
	return $html;
}

add_action('pre_get_posts', 'trainertower_posts_per_page');

function trainertower_posts_per_page($query) {
	if ( $query->is_main_query() ) {    
		$query->query_vars['posts_per_page'] = 5;
	}
}

?>