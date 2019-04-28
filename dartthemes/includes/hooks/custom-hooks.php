<?php
if ( ! defined('ABSPATH')) exit;  // if direct access



add_action('dartthemes_site_main_top','dartthemes_site_main_top_container');
function dartthemes_site_main_top_container(){

	?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
	<?php
}



add_action('dartthemes_site_main_bottom','dartthemes_site_main_bottom_container');

function dartthemes_site_main_bottom_container(){

	?>
            </div> <!-- .col-md-8 -->
            <div class="col-md-4">
                <?php dynamic_sidebar('blog-widget'); ?>
            </div> <!-- .col-md-8 -->
        </div><!-- .row -->
    </div> <!-- .container -->


	<?php
}




remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'dartthemes_site_main_top_container', 10);
add_action('woocommerce_after_main_content', 'dartthemes_site_main_bottom_container', 10);
















add_action('dartthemes_site_header_class','dartthemes_site_header_class_padding');

function dartthemes_site_header_class_padding($content){

    $content .= 'mb-5';

    return $content;

}



add_action('dartthemes_site_footer_class','dartthemes_site_footer_class_margin');

function dartthemes_site_footer_class_margin($content){

    $content .= 'mt-5';

    return $content;

}














add_action('dartthemes_content_area_top','dartthemes_arcive_title');
function dartthemes_arcive_title(){

	if(is_category() || is_tag() || is_author() || is_year() || is_month() || is_day() || is_tax() || is_post_type_archive()):
		?>
        <div class="archive-header">
            <h4 class="archive-title">
				<?php
				the_archive_title();
				?>
            </h4>
            <p class="archive-description"><?php echo the_archive_description(); ?></p>
        </div>

		<?php
    elseif (is_search()):
		?>
        <div class="archive-header">

            <h4 class="archive-title">
				<?php printf( __( 'Search Results: <strong>%s</strong>', 'dartthemes' ),'<span>' . get_search_query() . '</span>' ); ?>
            </h4>
        </div>

		<?php



	endif;


}














add_action('dartthemes_site_header','dartthemes_site_header_html');
function dartthemes_site_header_html(){

    $dartthemes_logo = get_theme_mod('dartthemes_logo');
    ?>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <?php
                if(!empty($dartthemes_logo)):
                    ?>
                    <div class="main-logo">
                        <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_theme_mod('dartthemes_logo'));
                            ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
                    </div><!-- /Logo -->
                <?php
                else:
                    ?>
                    <div class="main-logo">
                        <h1><a href="<?php echo esc_url(home_url()); ?>"><?php echo esc_attr(get_bloginfo('name')); ?></a></h1>
                    </div><!-- /Logo -->
                <?php

                endif;
                ?>
            </div>
            <div class="col-md-9">
                <div id="" class="navigation">
                    <?php wp_nav_menu( array('container' => false, 'theme_location' => 'header-menu', 'menu_class' => 'menu float-right')); ?>
                </div>
                <div class="menu-mobile"></div>
            </div>

        </div>
    </div>

    <?php

}





add_action('dartthemes_site_footer','dartthemes_site_footer_html');
function dartthemes_site_footer_html(){

    ?>


    <div class="container">
        <div class="row">

            <?php dynamic_sidebar('footer-widget'); ?>


        </div>
    </div>

    <div class="footer-bottom">

        <div class="container">
            <div class="row">

                <?php

                $dartthemes_poweredby = get_theme_mod('dartthemes_poweredby');
                $dartthemes_dev_by = get_theme_mod('dartthemes_dev_by');

                $dartthemes_copyright_text = get_theme_mod('dartthemes_copyright_text');

                ?>

                <div class="col-md-12">
                    <?php if(empty($dartthemes_poweredby)):?>
                        <span class="poweredby"><?php echo __('Proudly powered by <b>WordPress</b>','dartthemes'); ?></span> |
                    <?php
                    endif;
                    ?>

                    <?php if(empty($dartthemes_dev_by)):?>
                        <span class="dev-credit"><?php echo sprintf(__('Theme <b>Dart framework</b> by <a href="%s">%s</a>','dartthemes'),'https://dartthemes.com','https://dartthemes.com'); ?>  </span> |
                    <?php
                    endif;
                    ?>


                    <?php if(empty($dartthemes_copyright_text)):?>
                        <span class="footer-copyright"><?php echo sprintf(__('Copyright %s %s','dartthemes'), date('Y'), esc_url( home_url() )); ?></span>
                    <?php
                    else:
                        ?>
                        <span class="footer-copyright"><?php echo esc_html($dartthemes_copyright_text); ?></span>
                    <?php

                    endif;
                    ?>

                </div>

            </div>
        </div>
    </div>
    <?php


}





add_action('dartthemes_content_area_bottom','dartthemes_content_area_bottom_pagination');
function dartthemes_content_area_bottom_pagination(){

	if(!is_singular()):


		?>
        <div class="pagination">
			<?php

			if ( get_query_var('paged') ) {

				$paged = get_query_var('paged');

			} elseif ( get_query_var('page') ) {

				$paged = get_query_var('page');

			} else {

				$paged = 1;

			}

			global $wp_query;

			$big = 999999999; // need an unlikely integer
			$max_num_pages = $wp_query->max_num_pages;


			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, $paged ),
				'total' => $max_num_pages,
				'prev_text'          => __('Previous','dartthemes'),
				'next_text'          => __('Next','dartthemes'),
			) );

			?>

        </div>
		<?php

	endif;


}





add_action('dartthemes_entry_meta_top','dartthemes_post_entry_meta_top');
function dartthemes_post_entry_meta_top(){

    if(is_singular('post') || is_archive() || is_home()):
    ?>
    <span class="author vcard">
        <?php _e('By: ', 'dartthemes');
        printf('<a class="url fn n" href="%1$s">%2$s</a>',
            esc_url(get_author_posts_url(get_the_author_meta('ID'))),
            esc_html(get_the_author())
        ) ?>
    </span>
    <span class="posted-date"><?php echo sprintf(__('Published: %s','dartthemes'), get_the_time('M d, Y')); ?></span>
    <?php if (get_the_category_list()): ?>
        <span class="categories">
            <?php echo get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'dartthemes')); ?>
        </span>
    <?php endif;
    endif;
}



add_action('dartthemes_entry_meta_bottom','dartthemes_post_entry_meta_bottom');
function dartthemes_post_entry_meta_bottom(){

    if(is_singular('post')):
        ?>
        <div class="entry-tags text-left"><?php the_tags(); ?></div>
        <?php
    endif;
}



add_action('dartthemes_content_area','dartthemes_content_area_html');
function dartthemes_content_area_html(){

    if(is_singular()):
        while ( have_posts() ) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-thumbnail">
                <?php //the_post_thumbnail(); ?>
            </div>
            <h1 class="title entry-title">
                <?php the_title(); ?>
            </h1>

            <div class="entry-meta-top">
                <?php dartthemes_entry_meta_top(); ?>
            </div>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <div class="clearfix"></div>
            <div class="entry-meta-bottom">
                <?php dartthemes_entry_meta_bottom(); ?>
            </div>
        </article>

    <?php

        endwhile;
    endif;

    if(is_archive() || is_home()):
        while ( have_posts() ) : the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-thumbnail">
                <?php //the_post_thumbnail(); ?>
            </div>
            <h2 class="title entry-title">
                <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>

            </h2>

            <div class="entry-meta-top">
                <?php dartthemes_entry_meta_top(); ?>
            </div>
            <div class="entry-content">
                <?php echo wp_trim_words(get_the_excerpt(), 30, ''); ?>

                <a class="read-more " href="">Read more</a>
            </div>
        </article>

    <?php
        endwhile;

    endif;

}







