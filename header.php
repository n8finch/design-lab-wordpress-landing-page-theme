<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Landing_Page_One_Pager
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>

	<div class="header-top clearfix">
		<a class="l-right toggle-menu" href="#">
			<i></i>
			<i></i>
			<i></i>
		</a>
	</div>

	<nav class="hide">
		<ul id="menu">
			<li data-menuanchor="hero-section">
				<a href="#hero-section" title="First Section">Home</a>
			</li>
			<li data-menuanchor="about-us">
				<a href="#about-us" title="Second Section">About Us</a>
			</li>
			<li data-menuanchor="services-section">
				<a href="#services-section" title="Second Section">Services</a>
			</li>
			<li data-menuanchor="what-we-do-section">
				<a href="#what-we-do-section" title="Fourth Section">What We Do</a>
			</li>
			<li data-menuanchor="gallery-section">
				<a href="#gallery-section" title="First Slide">Our Work</a>
			</li>
			<li data-menuanchor="contact-us-section">
				<a href="#contact-us-section" title="Second Slide">Contact Us</a>
			</li>
		</ul>
	</nav>
</header>
