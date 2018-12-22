<?php

if ( ! defined('ABSPATH')) exit;  // if direct access

/**
 * Implements the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * @package TextBook
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses PickPlugins_header_style()
 */
function PickPlugins_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'PickPlugins_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1980,
		'height'                 => 960,
		'flex-height'            => true,
		'wp-head-callback'       => 'PickPlugins_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'PickPlugins_custom_header_setup' );

if ( ! function_exists( 'PickPlugins_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog
	 *
	 * @see PickPlugins_custom_header_setup().
	 */
	function PickPlugins_header_style() {
		$header_text_color = get_header_textcolor();

		
		add_theme_support( 'custom-header' ) 
		
		// If we get this far, we have custom styles. Let's do this.
		?>
        <style type="text/css">
            <?php
				// Has the text been hidden?
				if ( 'blank' == $header_text_color ) :
			?>
            .site-title,
            .site-description {
                position: absolute;
                clip: rect(1px, 1px, 1px, 1px);
            }
            <?php
				// If the user has set a custom color for the text use that.
				else :
			?>
            .site-title a,
            .site-description {
                color: #<?php echo esc_attr( $header_text_color ); ?>;
            }
            <?php endif; ?>
        </style>
		<?php
	}
endif; // PickPlugins_header_style