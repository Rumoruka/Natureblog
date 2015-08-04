<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta name="generator" content="WordPress <?php bloginfo('html_type'); ?>" />
	
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	

</head>
<body>
	<div class="container"><!--DIV CONTEINER -->
		<div class="header"><!--DIV HEADER -->
			<div class="row" id="topdiv">
				<div class="col-xs-3">
					<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
				</div>
				<div class="col-xs-3 col-xs-offset-6" id="topright">
					<p>Social buttons here</p>
				</div>
			</div>
			<div class="row ">
				<div class="col-xs-12">
					<h1><?php bloginfo('name'); ?></h1>
				</div>
			</div>
			<div class="row ">
				<div class="col-xs-12">
					<h2><?php bloginfo('description'); ?></h2>
				</div>
			</div>
		</div><!--/DIV HEADER -->
		<div class="topmenu"><!--DIV TOPMENU -->
			<div class="row">
				<div class="col-xs-12">
					<li><a href="<?php bloginfo('url'); ?>">Головна</a></li>
					<?php wp_list_pages('title_li='); ?>
				</div>
			</div>
		</div><!--/DIV TOPMENU -->
		