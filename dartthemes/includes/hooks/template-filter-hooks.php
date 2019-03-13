<?php

if ( ! defined('ABSPATH')) exit;  // if direct access




function dartthemes_site_wrapper_class(){

	$site_wrapper_class = apply_filters('dartthemes_site_wrapper_class', '');

	echo esc_attr($site_wrapper_class);
}


function dartthemes_article_class(){

	$article_class = apply_filters('dartthemes_article_class', '');

	return esc_attr($article_class);
}


function dartthemes_article_inner_class(){

	$article_inner_class = apply_filters('dartthemes_article_inner_class', '');

	return esc_attr($article_inner_class);
}









function dartthemes_site_header_class(){

	$site_header_class = apply_filters('dartthemes_site_header_class', '');

	echo esc_attr($site_header_class);
}



function dartthemes_site_footer_class(){

	apply_filters('dartthemes_site_footer_class', '');

	$site_footer_class = apply_filters('dartthemes_site_footer_class', '');

	echo esc_attr($site_footer_class);

}














function dartthemes_site_main_class(){

	$main_class = apply_filters('dartthemes_site_main_class', '');

	echo esc_attr($main_class);
}
function dartthemes_content_area_class(){

	$content_area_class = apply_filters('dartthemes_content_area_class', '');

	echo esc_attr($content_area_class);
	echo esc_attr($content_area_class);
}














