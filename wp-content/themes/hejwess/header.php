<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage hejwess
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link type="text/css" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" />
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
	<div class="social">
			<a href="#" title="Facebook">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/f.png" alt="" />
			</a>
			<a href="#" title="Twitter">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/t.png" alt="" />
			</a>
			<a href="#" title="Linkedin">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/l.png" alt="" />
			</a>
			<a href="#" title="Instagram">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/i.png" alt="" />
			</a>
			<a href="#" title="Youtube">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/y.png" alt="" />
			</a>
	</div>
