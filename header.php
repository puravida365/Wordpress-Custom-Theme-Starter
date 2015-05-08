<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta name="viewport" content="width=device-width">
	<title>Mitholog</title>
	<link href="<?php bloginfo('template_url'); ?>static/css/style.css" rel="stylesheet" type="text/css" media="screen">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>static/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>static/js/main.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
<div>
	<header>
		<div id="logo">
			<p>logo here</p>
		</div>
		<nav>
			<ul id="navigation">
				<li>Shop</li>
				<li>Gallery</li>
				<li>Crew</li>
				<li>Contact</li>
			</ul>
		</nav>
	</header>


