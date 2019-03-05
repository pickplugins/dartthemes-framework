<?php


if ( ! defined('ABSPATH')) exit;  // if direct access

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function PickPlugins_register_theme_customizer( $wp_customize ) {

	// Add Sections


	$wp_customize->add_section( 'PickPlugins_site_layout' , array(
		'title'      => __('Site layout', 'dart-framework'),
		'priority'   => 1,
	) );


	$wp_customize->add_setting(
		'PickPlugins_site_layout_type',
		array(
			'default'     => 'full_width',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'PickPlugins_site_layout_type',
			array(
				'label'      => __('Site wrapper width style', 'dart-framework'),
				'section'    => 'PickPlugins_site_layout',
				'settings'   => 'PickPlugins_site_layout_type',
				'type'		 => 'select',
				'choices'        => array(
					'full_width' => __('Full Width', 'dart-framework'),
					'box_width' => __('Box Width', 'dart-framework'),
				),
				'priority'	 => 1
			)
		)
	);


	$wp_customize->add_setting(
		'site_wrapper_width',
		array(
			'default'     => '1280px',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'site_wrapper_width',
			array(
				'label'      => __('Box width value(px or %)', 'dart-framework'),
				'section'    => 'PickPlugins_site_layout',
				'settings'   => 'site_wrapper_width',
				'type'		 => 'text',

				'priority'	 => 1
			)
		)
	);


	$wp_customize->add_setting(
		'site_wrapper_bg_color',
		array(
			'default'     => '#FFFFFF',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'site_wrapper_bg_color',
			array(
				'label'      => __('Wrapper Background Color', 'dart-framework'),
				'section'    => 'PickPlugins_site_layout',
				'settings'   => 'site_wrapper_bg_color',
				'priority'	 => 2
			)
		)
	);


	$wp_customize->add_setting(
		'container_width',
		array(
			'default'     => '1170px',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'container_width',
			array(
				'label'      => __('Site container width(px or %)', 'dart-framework'),
				'section'    => 'PickPlugins_site_layout',
				'settings'   => 'container_width',
				'type'		 => 'text',

				'priority'	 => 3
			)
		)
	);





	/*Header Options*/

	$wp_customize->add_section( 'PickPlugins_header' , array(
		'title'      => __('Header', 'dart-framework'),
		'priority'   => 2,
	) );


	$wp_customize->add_setting(
		'site_header_bg_color',
		array(
			'default'     => '#FFFFFF',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'site_header_bg_color',
			array(
				'label'      => __('Header Background Color', 'dart-framework'),
				'section'    => 'PickPlugins_header',
				'settings'   => 'site_header_bg_color',
				'priority'	 => 2
			)
		)
	);




	$wp_customize->add_setting(
		'site_header_text_color',
		array(
			'default'     => '#FFFFFF',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'site_header_text_color',
			array(
				'label'      => __('Header Text Color', 'dart-framework'),
				'section'    => 'PickPlugins_header',
				'settings'   => 'site_header_text_color',
				'priority'	 => 3
			)
		)
	);


	$wp_customize->add_setting(
		'site_header_link_color',
		array(
			'default'     => '#FFFFFF',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'site_header_link_color',
			array(
				'label'      => __('Header Link Color', 'dart-framework'),
				'section'    => 'PickPlugins_header',
				'settings'   => 'site_header_link_color',
				'priority'	 => 3
			)
		)
	);











	/* Footer Options*/
	$wp_customize->add_section( 'PickPlugins_footer' , array(
   		'title'      => __('Footer', 'dart-framework'),
   		'priority'   => 3,
	) );


	$wp_customize->add_setting(
		'site_footer_bg_color',
		array(
			'default'     => '#FFFFFF',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'site_footer_bg_color',
			array(
				'label'      => __('Footer Background Color', 'dart-framework'),
				'section'    => 'PickPlugins_footer',
				'settings'   => 'site_footer_bg_color',
				'priority'	 => 2
			)
		)
	);




	$wp_customize->add_setting(
		'site_footer_text_color',
		array(
			'default'     => '#FFFFFF',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'site_header_text_color',
			array(
				'label'      => __('Footer Text Color', 'dart-framework'),
				'section'    => 'PickPlugins_footer',
				'settings'   => 'site_footer_text_color',
				'priority'	 => 3
			)
		)
	);


	$wp_customize->add_setting(
		'site_footer_link_color',
		array(
			'default'     => '#FFFFFF',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'site_footer_link_color',
			array(
				'label'      => __('Footer Link Color', 'dart-framework'),
				'section'    => 'PickPlugins_footer',
				'settings'   => 'site_footer_link_color',
				'priority'	 => 4
			)
		)
	);


	$wp_customize->add_setting(
			'PickPlugins_poweredby',
			array(
				'default'     => false,
				'sanitize_callback' => 'sanitize_text_field'
			)
		);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'PickPlugins_poweredby',
					array(
						'label'      => __('Disable Poweredby', 'dart-framework'),
						'section'    => 'PickPlugins_footer',
						'settings'   => 'PickPlugins_poweredby',
						'type'		 => 'checkbox',
						'priority'	 => 5
					)
				)
			);


		$wp_customize->add_setting(
			'PickPlugins_dev_by',
			array(
				'default'     => false,
				'sanitize_callback' => 'sanitize_text_field'
			)
		);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'PickPlugins_dev_by',
					array(
						'label'      => __('Disable Develop by', 'dart-framework'),
						'section'    => 'PickPlugins_footer',
						'settings'   => 'PickPlugins_dev_by',
						'type'		 => 'checkbox',
						'priority'	 => 6
					)
				)
			);


		$wp_customize->add_setting(
			'PickPlugins_copyright_text',
			array(
				'sanitize_callback' => 'wp_kses_post'
			)
		);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'PickPlugins_copyright_text',
					array(
						'label'      => __('Footer Copyright Text', 'dart-framework'),
						'section'    => 'PickPlugins_footer',
						'settings'   => 'PickPlugins_copyright_text',
						'type'		 => 'textarea',
						'priority'	 => 7
					)
				)
			);






		// Header and logo
		$wp_customize->add_setting(
	        'PickPlugins_logo',
	        array(
	        	'sanitize_callback' => 'esc_url_raw'
	        )
	    );

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'PickPlugins_logo',
				array(
					'label'      => __('Upload Logo', 'dart-framework'),
					'section'    => 'title_tagline',
					'settings'   => 'PickPlugins_logo',
					'priority'	 => 60
				)
			)
		);




	$wp_customize->add_section( 'PickPlugins_social' , array(
		'title'      => __('Social', 'dart-framework'),
		'priority'   => 5,
	) );


/*
 *
 * 	$wp_customize->add_setting(
		'PickPlugins_social_links',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Social_links(
			$wp_customize,
			'PickPlugins_social_links',
			array(
				'label'      => __('Social Profile Links', 'dart-framework'),
				'section'    => 'PickPlugins_social',
				'settings'   => 'PickPlugins_social_links',
				'type'		 => 'multi_input',

				'priority'	 => 1
			)
		)
	);
 * */


















			// Color general
			$wp_customize->add_setting(
				'PickPlugins_theme_color',
				array(
					'default'     => '#00ACDF',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'PickPlugins_theme_color',
					array(
						'label'      => __('Theme Color', 'dart-framework'),
						'section'    => 'colors',
						'settings'   => 'PickPlugins_theme_color',
						'priority'	 => 1
					)
				)
			);






			$wp_customize->add_setting(
				'PickPlugins_anchor_color',
				array(
					'default'     => '#23b2dd',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'PickPlugins_anchor_color',
					array(
						'label'      => __('Anchor Color', 'dart-framework'),
						'section'    => 'colors',
						'settings'   => 'PickPlugins_anchor_color',
						'priority'	 => 2
					)
				)
			);





			$wp_customize->add_setting(
				'PickPlugins_anchor_hover_color',
				array(
					'default'     => '#00ACDF',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'PickPlugins_anchor_hover_color',
					array(
						'label'      => __('Anchor Hover Color', 'dart-framework'),
						'section'    => 'colors',
						'settings'   => 'PickPlugins_anchor_hover_color',
						'priority'	 => 3
					)
				)
			);



	
 
}
add_action( 'customize_register', 'PickPlugins_register_theme_customizer' );
?>