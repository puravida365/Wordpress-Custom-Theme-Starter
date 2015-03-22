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
	<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css" media="screen">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
<div>
	<header>
		<nav class="navbar navbar-custom navbar-static-top">
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="#">Title</a>
		  </div>
		  <div class="collapse navbar-collapse">
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Home</a></li>
		      <li><a href="#">Link</a></li>
		      <li><a href="#">Link</a></li>
		    </ul>
		    <form class="navbar-form navbar-left" role="search">
		      <div class="form-group">
		        <input type="text" class="form-control" placeholder="Search">
		      </div>
		      <button type="submit" class="btn btn-default">Submit</button>
		    </form>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="#">Link</a></li>
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
		        <ul class="dropdown-menu pull-right">
		          <li><a href="#">Action</a></li>
		          <li><a href="#">Another action</a></li>
		          <li><a href="#">Something else here</a></li>
		          <li><a href="#">Separated link</a></li>
		        </ul>
		      </li>
		    </ul>
		  </div><!-- /.navbar-collapse -->
		</nav>
		<div class="container">
		  <h2>Bootstrap 3 Navbar Example</h2>
		  <ul>
		    <li>Use <code>.navbar-static-top</code> to eliminate the border radius</li>
		    <li>Use <code>.navbar-right</code> to right-align link and dropdown</li>
		    <li>Use <code>.pull-right</code> in the right-aligned <code>.dropdown-menu</code> so that the menu isn't cutoff</li>
		  </ul>
		</div>
	</header>