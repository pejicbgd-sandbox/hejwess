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
	<link href="https://fonts.googleapis.com/css?family=Lora:400i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

  /* Parallax base styles
  --------------------------------------------- */

  .parallax {
    height: 500px; /* fallback for older browsers */
    height: 100vh;
    overflow-x: hidden;
    overflow-y: auto;
    -webkit-perspective: 300px;
    perspective: 300px;
  }

  .parallax__group {
    position: relative;
    height: 500px; /* fallback for older browsers */
    height: 100vh;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }

  .parallax__layer {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .parallax__layer--fore {
    -webkit-transform: translateZ(90px) scale(.7);
    transform: translateZ(90px) scale(.7);
    z-index: 1;
  }

  .parallax__layer--base {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    z-index: 4;
  }

  .parallax__layer--back {
    -webkit-transform: translateZ(-300px) scale(2);
    transform: translateZ(-300px) scale(2);
    z-index: 3;
  }

  .parallax__layer--deep {
    -webkit-transform: translateZ(-600px) scale(3);
    transform: translateZ(-600px) scale(3);
    z-index: 2;
  }

  .parallax__group {
    -webkit-transition: -webkit-transform 0.5s;
    transition: transform 0.5s;
  }


  /* demo styles
  --------------------------------------------- */

  .parallax {
    font-size: 200%;
  }

   /* centre the content in the parallax layers */
  .title {
    text-align: center;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }



  /* style the groups
  --------------------------------------------- */

  #group1 {
    z-index: 5; /* slide over group 2 */
  }
  #group1 .parallax__layer--base {
    background: rgb(102,204,102);
  }

  #group2 {
    z-index: 3; /* slide under groups 1 and 3 */
  }
  #group2 .parallax__layer--back {
    background: rgb(123,210,102);
  }

  #group3 {
    z-index: 4; /* slide over group 2 and 4 */
  }
  #group3 .parallax__layer--base {
    background: rgb(153,216,101);
  }

  #group4 {
    z-index: 2; /* slide under group 3 and 5 */
  }
  #group4 .parallax__layer--deep {
    background: rgb(184,223,101);
  }

  #group5 {
    z-index: 3; /* slide over group 4 and 6 */
  }
  #group5 .parallax__layer--base {
    background: rgb(214,229,100);
  }

  #group6 {
    z-index: 2; /* slide under group 5 and 7 */
  }
  #group6 .parallax__layer--back {
    background: rgb(245,235,100);
  }

  #group7 {
    z-index: 3; /* slide over group 7 */
  }
  #group7 .parallax__layer--base {
    background: rgb(255,241,100);
  }

</style>
	<?php wp_head(); ?>
</head>

<body>
	<div class="social">
			<a href="#" title="Facebook">
				<i class="fa">&#xf09a;</i>
			</a>
			<a href="#" title="Twitter">
				<i class="fa">&#xf099;</i>
			</a>
			<a href="#" title="Linkedin">
				<i class="fa">&#xf0e1;</i>
			</a>
			<a href="#" title="Instagram">
				<i class="fa">&#xf16d;</i>
			</a>
			<a href="#" title="Youtube">
				<i class="fa">&#xf16a;</i>
			</a>
	</div>
