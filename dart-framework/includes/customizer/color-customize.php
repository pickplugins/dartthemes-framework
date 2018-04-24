<?php

if ( ! defined('ABSPATH')) exit;  // if direct access

if ( ! function_exists( 'dartthemes_fw_color_theme' ) ) :

function dartthemes_fw_color_theme(){

	$site_header_bg_color = get_theme_mod('site_header_bg_color');
	$site_header_text_color = get_theme_mod('site_header_text_color');
	$site_header_text_color = get_theme_mod('site_header_text_color');
	$site_header_link_color = get_theme_mod('site_header_link_color');

	$site_footer_bg_color = get_theme_mod('site_footer_bg_color');
	$site_footer_text_color = get_theme_mod('site_footer_text_color');
	$site_footer_text_color = get_theme_mod('site_footer_text_color');
	$site_footer_link_color = get_theme_mod('site_footer_link_color');

	$site_wrapper_width = get_theme_mod('site_wrapper_width');
	$site_wrapper_bg_color = get_theme_mod('site_wrapper_bg_color');
	$container_width = get_theme_mod('container_width');


    ?>

	<style type="text/css">
        .site-header{
            <?php if(!empty($site_header_bg_color)):?>
            background-color: <?php echo esc_attr($site_header_bg_color); ?>;
            <?php endif; ?>

            <?php if(!empty($site_header_text_color)):?>
            color: <?php echo esc_attr($site_header_text_color); ?>;
            <?php endif; ?>
        }

        .site-header p{
            <?php if(!empty($site_header_text_color)):?>
            color: <?php echo esc_attr($site_header_text_color); ?>;
            <?php endif; ?>
        }

        .site-header a{
            <?php if(!empty($site_header_link_color)):?>
            color: <?php echo esc_attr($site_header_link_color); ?> !important;
            <?php endif; ?>
        }



        .site-footer{
            <?php if(!empty($site_footer_bg_color)):?>
            background-color: <?php echo esc_attr($site_footer_bg_color); ?>;
            <?php endif; ?>

            <?php if(!empty($site_footer_text_color)):?>
            color: <?php echo esc_attr($site_footer_text_color); ?>;
            <?php endif; ?>
        }

        .site-footer p{
            <?php if(!empty($site_footer_text_color)):?>
            color: <?php echo esc_attr($site_footer_text_color); ?>;
            <?php endif; ?>
        }


        .site-footer a{
            <?php if(!empty($site_footer_link_color)):?>
            color: <?php echo esc_attr($site_footer_link_color); ?> !important;
            <?php endif; ?>
        }


        .site-wrapper{
            <?php if(!empty($site_wrapper_width)):?>
            width: <?php echo esc_attr($site_wrapper_width); ?> !important;
            <?php endif; ?>

            <?php if(!empty($site_wrapper_bg_color)):?>
            background-color: <?php echo esc_attr($site_wrapper_bg_color); ?>;
            <?php endif; ?>
            margin: 0 auto;
        }


        .container{
            <?php if(!empty($container_width)):?>
            width: <?php echo esc_attr($container_width); ?> !important;
            <?php endif; ?>
        }





	</style>
<?php
}
add_action('wp_head', 'dartthemes_fw_color_theme');

endif;
