<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<nav class="navbar navbar-default navbar-static-top">
      <div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <img src="<?php bloginfo('url');?>/wp-content/uploads/2015/08/logo.png" style="background:none; max-height:50px;" alt="Anthony Saldana's personal brand logo">
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home" style="padding:0px;"><img src="<?php bloginfo('url');?>/wp-content/uploads/2015/08/logo.png" style="background:none; max-height:50px;" alt="Anthony Saldana's personal brand logo"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
			<li class="active"> <a href="#about" class="smoothScroll"> About</a></li>
			<li class=""> <a href="#services" class="smoothScroll"> Work Experience</a></li>
			<li> <a href="#education" class="smoothScroll"> Education</a></li>
			<li class=""> <a href="#portfolio" class="smoothScroll"> Portfolio</a></li>
			<li class=""> <a href="#blog" class="smoothScroll"> Blog</a></li>
			<li class=""> <a href="#contact" class="smoothScroll"> Contact</a></li>
			<li><a class="icon icon-github" target="_blank" href="https://github.com/anthonysaldana"></a></li>
			<li><a class="icon icon-twitter" target="_blank" href="http://www.twitter.com/anthonysaldana3"></a></li>
        </ul></div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
    </nav>
<div id="page" class="hfeed site jumbotron" style="padding-top:5px;">
	

	<div id="content" class="site-content">
