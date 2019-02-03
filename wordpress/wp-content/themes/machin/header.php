<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt" />

	<?php wp_head(); ?>
</head>
<header>
	<?php
	wp_nav_menu(array(
     'menu'  => 'top_menu',
     'theme_location'  => 'primary'
	 )
	);
  ?>
</header>