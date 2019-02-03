<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!-- Police de google font -->
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<title>Module 3 - Green Office</title>
    <?php wp_head(); ?>
</head>
<body>
	<!--HEADER-->
	<header>
		<a href="#"><img src="<?= get_template_directory_uri();?>/img/logo.png"></a>
		<nav>
			<!-- <a href="#">Location</a>
			<a href="#">About Us</a>
			<a href="#">Contact</a> -->
			<?php
          wp_nav_menu('haut' );
           ?>
		</nav>
	</header>