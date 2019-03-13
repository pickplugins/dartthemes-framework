<?php


if ( ! defined('ABSPATH')) exit;  // if direct access

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function dartthemes_register_theme_customizer( $wp_customize ) {

	// Add Sections


	$wp_customize->add_section( 'dartthemes_site_layout' , array(
		'title'      => __('Site layout', 'dartthemes'),
		'priority'   => 1,
	) );


	$wp_customize->add_setting(
		'dartthemes_site_layout_type',
		array(
			'default'     => 'full_width',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'dartthemes_site_layout_type',
			array(
				'label'      => __('Site wrapper width style', 'dartthemes'),
				'section'    => 'dartthemes_site_layout',
				'settings'   => 'dartthemes_site_layout_type',
				'type'		 => 'select',
				'choices'        => array(
					'full_width' => __('Full Width', 'dartthemes'),
					'box_width' => __('Box Width', 'dartthemes'),
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
				'label'      => __('Box width value(px or %)', 'dartthemes'),
				'section'    => 'dartthemes_site_layout',
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
				'label'      => __('Wrapper Background Color', 'dartthemes'),
				'section'    => 'dartthemes_site_layout',
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
				'label'      => __('Site container width(px or %)', 'dartthemes'),
				'section'    => 'dartthemes_site_layout',
				'settings'   => 'container_width',
				'type'		 => 'text',

				'priority'	 => 3
			)
		)
	);





	/*Header Options*/

	$wp_customize->add_section( 'dartthemes_header' , array(
		'title'      => __('Header', 'dartthemes'),
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
				'label'      => __('Header Background Color', 'dartthemes'),
				'section'    => 'dartthemes_header',
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
				'label'      => __('Header Text Color', 'dartthemes'),
				'section'    => 'dartthemes_header',
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
				'label'      => __('Header Link Color', 'dartthemes'),
				'section'    => 'dartthemes_header',
				'settings'   => 'site_header_link_color',
				'priority'	 => 3
			)
		)
	);











	/* Footer Options*/
	$wp_customize->add_section( 'dartthemes_footer' , array(
   		'title'      => __('Footer', 'dartthemes'),
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
				'label'      => __('Footer Background Color', 'dartthemes'),
				'section'    => 'dartthemes_footer',
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
				'label'      => __('Footer Text Color', 'dartthemes'),
				'section'    => 'dartthemes_footer',
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
				'label'      => __('Footer Link Color', 'dartthemes'),
				'section'    => 'dartthemes_footer',
				'settings'   => 'site_footer_link_color',
				'priority'	 => 4
			)
		)
	);


	$wp_customize->add_setting(
			'dartthemes_poweredby',
			array(
				'default'     => false,
				'sanitize_callback' => 'sanitize_text_field'
			)
		);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'dartthemes_poweredby',
					array(
						'label'      => __('Disable Poweredby', 'dartthemes'),
						'section'    => 'dartthemes_footer',
						'settings'   => 'dartthemes_poweredby',
						'type'		 => 'checkbox',
						'priority'	 => 5
					)
				)
			);


		$wp_customize->add_setting(
			'dartthemes_dev_by',
			array(
				'default'     => false,
				'sanitize_callback' => 'sanitize_text_field'
			)
		);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'dartthemes_dev_by',
					array(
						'label'      => __('Disable Develop by', 'dartthemes'),
						'section'    => 'dartthemes_footer',
						'settings'   => 'dartthemes_dev_by',
						'type'		 => 'checkbox',
						'priority'	 => 6
					)
				)
			);


		$wp_customize->add_setting(
			'dartthemes_copyright_text',
			array(
				'sanitize_callback' => 'wp_kses_post'
			)
		);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'dartthemes_copyright_text',
					array(
						'label'      => __('Footer Copyright Text', 'dartthemes'),
						'section'    => 'dartthemes_footer',
						'settings'   => 'dartthemes_copyright_text',
						'type'		 => 'textarea',
						'priority'	 => 7
					)
				)
			);






		// Header and logo
		$wp_customize->add_setting(
	        'dartthemes_logo',
	        array(
	        	'sanitize_callback' => 'esc_url_raw'
	        )
	    );

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'dartthemes_logo',
				array(
					'label'      => __('Upload Logo', 'dartthemes'),
					'section'    => 'title_tagline',
					'settings'   => 'dartthemes_logo',
					'priority'	 => 60
				)
			)
		);




	$wp_customize->add_section( 'dartthemes_social' , array(
		'title'      => __('Social', 'dartthemes'),
		'priority'   => 5,
	) );


/*
 *
 * 	$wp_customize->add_setting(
		'dartthemes_social_links',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Social_links(
			$wp_customize,
			'dartthemes_social_links',
			array(
				'label'      => __('Social Profile Links', 'dartthemes'),
				'section'    => 'dartthemes_social',
				'settings'   => 'dartthemes_social_links',
				'type'		 => 'multi_input',

				'priority'	 => 1
			)
		)
	);
 * */


















			// Color general
			$wp_customize->add_setting(
				'dartthemes_theme_color',
				array(
					'default'     => '#00ACDF',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'dartthemes_theme_color',
					array(
						'label'      => __('Theme Color', 'dartthemes'),
						'section'    => 'colors',
						'settings'   => 'dartthemes_theme_color',
						'priority'	 => 1
					)
				)
			);






			$wp_customize->add_setting(
				'dartthemes_anchor_color',
				array(
					'default'     => '#23b2dd',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'dartthemes_anchor_color',
					array(
						'label'      => __('Anchor Color', 'dartthemes'),
						'section'    => 'colors',
						'settings'   => 'dartthemes_anchor_color',
						'priority'	 => 2
					)
				)
			);





			$wp_customize->add_setting(
				'dartthemes_anchor_hover_color',
				array(
					'default'     => '#00ACDF',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'dartthemes_anchor_hover_color',
					array(
						'label'      => __('Anchor Hover Color', 'dartthemes'),
						'section'    => 'colors',
						'settings'   => 'dartthemes_anchor_hover_color',
						'priority'	 => 3
					)
				)
			);



	
 
}
add_action( 'customize_register', 'dartthemes_register_theme_customizer' );
?>