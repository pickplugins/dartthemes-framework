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
    <?php PickPlugins_site_wrapper_before(); ?>
    <div class="site-wrapper <?php PickPlugins_site_wrapper_class(); ?>">
	    <?php PickPlugins_site_wrapper_top(); ?>

	    <?php PickPlugins_site_header_before(); ?>
        <header class="site-header mb-5 <?php PickPlugins_site_header_class(); ?>">
	        <?php PickPlugins_site_header(); ?>
        </header> <!-- .site-header end -->
        <?php PickPlugins_site_header_after(); ?>

