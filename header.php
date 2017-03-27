<?php
/**
 * Header template
 *
 * Displays the <head> section and everything up-to the <main> section.
 *
 * @package adi
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php do_action( 'adi_before_header' ); ?>

	<header id="site-header" role="banner">
		<div class="container">
			<?php
			/**
			 * Functions hooked into 'adi_header' action.
			 *
			 * @hooked adi_branding - 10
			 * @hooked adi_primary_menu - 20
			 * @hooked adi_hero - 30
			 */
			do_action( 'adi_header' ); ?>
		</div>
	</header>

	<?php do_action( 'adi_before_content' ); ?>

	<div id="site-content">
		<div class="container">
			<?php do_action( 'adi_before_main' );
