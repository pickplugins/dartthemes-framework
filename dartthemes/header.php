<?php if ( ! defined('ABSPATH')) exit;  // if direct access ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php dartthemes_site_wrapper_before(); ?>
    <div class="site-wrapper <?php dartthemes_site_wrapper_class(); ?>">
	    <?php dartthemes_site_wrapper_top(); ?>

	    <?php dartthemes_site_header_before(); ?>
        <header class="site-header  <?php dartthemes_site_header_class(); ?>">
	        <?php dartthemes_site_header(); ?>
        </header> <!-- .site-header end -->
        <?php dartthemes_site_header_after(); ?>

