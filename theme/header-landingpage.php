<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themeduro
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Antonio Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@400;600;700&display=swap" rel="stylesheet">

	<!-- Antonio - Libre+Baskerville Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@400;600;700&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
	<!-- Swiper -->
<!-- <link href="https://cdn.jsdelivr.net/npm/swiper@11.0.3/swiper-bundle.min.css" rel="stylesheet"> -->

   
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'themeduro' ); ?></a>

	<?php get_template_part( 'template-parts/layout/header', 'landingpage' ); ?>

	<div id="content">
