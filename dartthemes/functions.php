<?php

if ( ! defined('ABSPATH')) exit;  // if direct access


if ( ! isset( $content_width ) ) {	$content_width = 1170; }


function dartthemes_setup(){
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on dartthemes, use a find and replace
     * to change 'dartthemes' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'dartthemes' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(

        array(
        'header-menu' => esc_html__( 'Header Menu', 'dartthemes' ),
        'header-top' => esc_html__( 'Header top', 'dartthemes' ),
        'header-secondary' => esc_html__( 'Header secondary', 'dartthemes' ),
    )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'dartthemes_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );


    add_theme_support( 'woocommerce' );

}

add_action( 'after_setup_theme', 'dartthemes_setup' );

function dartthemes_add_editor_styles() {
	add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'dartthemes_add_editor_styles' );



function dartthemes_front_scripts() {

	// CSS File
	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.6', 'all');
	wp_enqueue_style('fontawesome.min', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '4.4.0', 'all');
	wp_enqueue_style('slicknav.min', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), NULL);

	wp_enqueue_style( 'dartthemes-stylesheet', get_stylesheet_uri() );

	// Google Fonts
	//wp_enqueue_style( 'Muli', 'https://fonts.googleapis.com/css?family=Muli:400,700,800,900', array(), NULL );

	// JS Files
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.6', TRUE );
	wp_enqueue_script( 'slicknav.min', get_template_directory_uri() . '/assets/js/slicknav.min.js', array('jquery'), NULL, TRUE );
	wp_enqueue_script( 'scripts.min', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'), NULL, TRUE );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


	$article_template = get_theme_mod('article_theme');

	if ( is_singular('post') && !empty($article_template)  ) {

		wp_enqueue_style($article_template, get_template_directory_uri() . '/assets/css/article-templates/'.$article_template.'.css', array(), time(), 'all');
	}




}
add_action( 'wp_enqueue_scripts', 'dartthemes_front_scripts' );




function dartthemes_admin_enqueue_scripts() {


	wp_enqueue_script('jquery-ui-sortable');
	wp_enqueue_style( 'wp-color-picker' );

	wp_enqueue_script( 'dartthemes_scripts', get_template_directory_uri() . '/assets/admin/js/scripts.js', array( 'wp-color-picker' ), false, true );

	// CSS File
	wp_enqueue_style('admin-css', get_template_directory_uri() . '/assets/admin/css/style.css', array(), '4.4.0', 'all');
	wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.4.0', 'all');


	// JS Files
	//wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/admin/js/scripts.js', array('jquery'), '3.3.6', TRUE );

}

add_action( 'admin_enqueue_scripts', 'dartthemes_admin_enqueue_scripts' );



//////////////////////////////////////////////////////////////////
// COMMENTS LAYOUT
//////////////////////////////////////////////////////////////////

if(!function_exists('dartthemes_comment')):

	function dartthemes_comment($comment, $args, $depth){
		//$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
				// Display trackbacks differently than normal comments.
				?>
				<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<p><?php _e('Pingback:', 'dartthemes'); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'dartthemes' ), '<span class="edit-link">', '</span>' ); ?></p>
				<?php
				break;
			default :

				global $post;
				?>
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<div id="comment-<?php comment_ID(); ?>" class="comment-body media">

					<div class="comment-avartar">
						<?php
						echo get_avatar( $comment, $args['avatar_size'] );
						?>
					</div>
					<div class="comment-context media-body">
						<div class="comment-head">
							<?php
							printf( '<h3 class="comment-author">%1$s</h3>',
								get_comment_author_link());
							?>
							<span class="comment-date"><?php echo get_comment_date() ?></span>
						</div>

						<?php if ( '0' == $comment->comment_approved ) : ?>
							<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.',
									'dartthemes' ); ?></p>
						<?php endif; ?>

						<div class="comment-content">
							<?php comment_text(); ?>
						</div>

						<?php edit_comment_link( __( 'Edit', 'dartthemes' ), '<span class="edit-link comment-meta">', '</span>' ); ?>

						<span class="comment-reply comment-meta">
							<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'dartthemes'
							), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
						</span>

					</div>

				</div>
				<?php
				break;
		endswitch;
	}

endif;



	function dartthemes_social_links(){

	    $social_links['facebook'] =array(
            'name'=> __('Facebook','dartthemes'),
            'link_icon'=> '<i class="fa fa-facebook-square"></i>',
            'link_url'=> '#',
        );

		$social_links['twitter'] =array(

			'link_icon'=> '<i class="fa fa-twitter-square"></i>',
			'link_url'=> '#',
		);

		$social_links['google-plus'] =array(
			'name'=> __('Google+','dartthemes'),
			'link_icon'=> '<i class="fa fa-google-plus-square"></i>',
			'link_url'=> '#',
		);

		$social_links['pinterest'] =array(
			'name'=> __('Pinterest','dartthemes'),
			'link_icon'=> '<i class="fa fa-pinterest-square"></i>',
			'link_url'=> '#',
		);

        return apply_filters('dartthemes_social_links', $social_links);
    }




function sanitize_dartthemes_social($html){


	$html_tags = array(
		'i' => array(
			'class' => array(),
		),
	);

    //$html = wp_kses_post($html, $html_tags);
	return esc_html($html, $html_tags);


	//return esc_html($html);
}












require_once get_template_directory() . '/includes/sidebars-widgets.php';
require_once get_template_directory() . '/includes/hooks/template-action-hooks.php';
require_once get_template_directory() . '/includes/hooks/template-filter-hooks.php';
require get_template_directory() . '/includes/hooks/custom-hooks.php';




//include_once( get_template_directory() . '/kirki/kirki.php' );
// Theme Customizer
include(get_template_directory().'/includes/customizer/customizer-settings.php');
include(get_template_directory().'/includes/customizer/color-customize.php');
//include(get_template_directory().'/includes/customizer/custom-control.php');

require get_template_directory() . '/includes/custom-header.php';








