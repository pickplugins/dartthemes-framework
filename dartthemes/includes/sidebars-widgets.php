<?php

if ( ! defined('ABSPATH')) exit;  // if direct access



add_action( 'widgets_init', 'dartthemes_widgets_init' );

function dartthemes_widgets_init(){

	$dartthemes_sidebars[] = array(
		'name'          => __( 'Blog Sidebar', 'dartthemes' ),
		'id'            => 'blog-widget',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget sidebar-widget %2$s">',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><div class="widget-content">',
		'after_widget'  => '</div></aside>',
	);

	$dartthemes_sidebars[] = array(
		'name'          => __( 'Footer', 'dartthemes' ),
		'id'            => 'footer-widget',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget col-md-4  footer-widget %2$s">',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><div class="widget-content">',
		'after_widget'  => '</div></aside>',

	);





	$dartthemes_sidebars = apply_filters('dartthemes_sidebars', $dartthemes_sidebars);


	foreach ($dartthemes_sidebars as $sidebar){

		register_sidebar($sidebar);

	}





}