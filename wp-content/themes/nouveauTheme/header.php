<!DOCTYPE HTML>
<html lang="<?php bloginfo('language');?>">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="description" content="<?php bloginfo('description');?>"></meta>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>"/>
	<title><?php bloginfo('name');?></title>

</head>
<body>
	<header id="banner">
	<img id="logo" src="<?php bloginfo('stylesheet_directory');?>/image/logo.png" alt="logo-martin-paulus" title="logo">
	<h1 id="maintitle">
		<a href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name');?></a>
	</h1>
	</header>
	<div id="main">
	<?php wp_nav_menu(); ?>
	
