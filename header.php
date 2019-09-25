<!doctype html>
<html>
	
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/pokesprite/css/pokesprite.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/resources/css/style.css" media="all" />
    
<?	wp_head(); ?>
    
    <title>Trainer Tower</title>
</head>

<body class="pb-0">
	<div class="container">
		<div class="row mb-3">
			<div id="site-logo" class="col-12 col-sm-6 text-center text-sm-left pb-sm-0">
				<img src="<?php echo get_template_directory_uri(); ?>/resources/images/logo.png" />
			</div>
			<div id="site-search" class="col-12 col-sm-6 text-center text-sm-right mt-auto ml-1 mr-1 ml-sm-0 mr-sm-0 pr-4 pr-sm-3">
				<div class="mb-3 mb-sm-2">
					<? echo trainertower_get_social_icon("facebook"); ?>
					<? echo trainertower_get_social_icon("twitter"); ?>
					<? echo trainertower_get_social_icon("discord"); ?>
					<? echo trainertower_get_social_icon("twitch"); ?>
				</div>
				<? get_search_form(); ?>
			</div>
		</div>
		<? get_template_part("templates/menu"); ?>