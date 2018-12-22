<?php

if ( ! defined('ABSPATH')) exit;  // if direct access



add_action( 'widgets_init', 'PickPlugins_widgets_init' );

function PickPlugins_widgets_init(){

	$PickPlugins_sidebars[] = array(
		'name'          => __( 'Blog Sidebar', 'dart-framework' ),
		'id'            => 'blog-widget',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget sidebar-widget %2$s">',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><div class="widget-content">',
		'after_widget'  => '</div></aside>',
	);

	$PickPlugins_sidebars[] = array(
		'name'          => __( 'Footer', 'dart-framework' ),
		'id'            => 'footer-widget',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget col-md-4  footer-widget %2$s">',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><div class="widget-content">',
		'after_widget'  => '</div></aside>',

	);





	$PickPlugins_sidebars = apply_filters('PickPlugins_sidebars', $PickPlugins_sidebars);


	foreach ($PickPlugins_sidebars as $sidebar){

		register_sidebar($sidebar);

	}





}