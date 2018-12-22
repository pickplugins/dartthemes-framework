<?php
if ( ! defined('ABSPATH')) exit;  // if direct access



add_action('PickPlugins_site_main_top','PickPlugins_site_main_top_container');
function PickPlugins_site_main_top_container(){

	?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
	<?php
}



add_action('PickPlugins_site_main_bottom','PickPlugins_site_main_bottom_container');

function PickPlugins_site_main_bottom_container(){

	?>
            </div> <!-- .col-md-8 -->
            <div class="col-md-4">
                <?php dynamic_sidebar('blog-widget'); ?>
            </div> <!-- .col-md-8 -->
        </div><!-- .row -->
    </div> <!-- .container -->


	<?php
}























add_action('PickPlugins_content_area_top','PickPlugins_arcive_title');
function PickPlugins_arcive_title(){

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
				<?php printf( __( 'Search Results: <strong>%s</strong>', 'dart-framework' ),'<span>' . get_search_query() . '</span>' ); ?>
            </h4>
        </div>

		<?php



	endif;


}














add_action('PickPlugins_site_header','PickPlugins_site_header_html');
function PickPlugins_site_header_html(){

    $PickPlugins_logo = get_theme_mod('PickPlugins_logo');
    ?>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <?php
                if(!empty($PickPlugins_logo)):
                    ?>
                    <div class="main-logo">
                        <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_theme_mod('PickPlugins_logo'));
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





add_action('PickPlugins_site_footer','PickPlugins_site_footer_html');
function PickPlugins_site_footer_html(){

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

                $PickPlugins_poweredby = get_theme_mod('PickPlugins_poweredby');
                $PickPlugins_dev_by = get_theme_mod('PickPlugins_dev_by');

                $PickPlugins_copyright_text = get_theme_mod('PickPlugins_copyright_text');

                ?>

                <div class="col-md-12">
                    <?php if(empty($PickPlugins_poweredby)):?>
                        <span class="poweredby"><?php echo __('Proudly powered by <b>WordPress</b>','dart-framework'); ?></span> |
                    <?php
                    endif;
                    ?>

                    <?php if(empty($PickPlugins_dev_by)):?>
                        <span class="dev-credit"><?php echo sprintf(__('Theme <b>Dart framework</b> by <a href="%s">%s</a>','dart-framework'),'https://dartthemes.com','https://dartthemes.com'); ?>  </span> |
                    <?php
                    endif;
                    ?>


                    <?php if(empty($PickPlugins_copyright_text)):?>
                        <span class="footer-copyright"><?php echo sprintf(__('Copyright %s %s','dart-framework'), date('Y'), esc_url( home_url() )); ?></span>
                    <?php
                    else:
                        ?>
                        <span class="footer-copyright"><?php echo esc_html($PickPlugins_copyright_text); ?></span>
                    <?php

                    endif;
                    ?>

                </div>

            </div>
        </div>
    </div>
    <?php


}





add_action('PickPlugins_content_area_bottom','PickPlugins_content_area_bottom_pagination');
function PickPlugins_content_area_bottom_pagination(){

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
				'prev_text'          => __('Previous','dart-framework'),
				'next_text'          => __('Next','dart-framework'),
			) );

			?>

        </div>
		<?php

	endif;


}


add_action('PickPlugins_archive_loop_post','PickPlugins_singular_post_html');
function PickPlugins_singular_post_html(){

    if(is_singular()):

	    ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-thumbnail">
			    <?php //the_post_thumbnail(); ?>
            </div>
            <h1 class="title entry-title">
	            <?php the_title(); ?>

            </h1>

            <div class="entry-meta-top">
                <div class="author vcard">
                    <?php _e('By: ', 'bug-blog');
                    printf('<a class="url fn n" href="%1$s">%2$s</a>',
                        esc_url(get_author_posts_url(get_the_author_meta('ID'))),
                        esc_html(get_the_author())
                    ) ?>
                </div>
                <div class="posted-date"><?php echo sprintf(__('Published: %s','dart-framework'), get_the_time('M d, Y')); ?></div>
			    <?php if (get_the_category_list()): ?>

                <div class="categories">
                <?php echo get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'bug-blog')); ?>
                </div>
			    <?php endif; ?>

            </div>
            <div class="entry-content">
			    <?php the_content(); ?>

            </div>
            <div class="clearfix"></div>
            <div class="entry-meta-bottom">
                <div class="entry-tags text-left"><?php the_tags(); ?></div>
            </div>



        </article>

	    <?php


    endif;

}








add_action('PickPlugins_archive_loop_post','PickPlugins_archive_loop_post_nav_html');
function PickPlugins_archive_loop_post_nav_html(){

	if(is_singular()):
		?>
        <div class="next-previous-post clearfix">
            <!-- Previous Post -->
            <div class="previous-post pull-left">
				<?php previous_post_link('<div class="nav-previous">%link</div>', __('<i class="fa fa-angle-left"></i> Previous Post', 'dart-framework')); ?>
            </div>

            <!-- Next Post -->
            <div class="next-post pull-right text-right">
				<?php next_post_link('<div class="nav-next">%link</div>', __('Next Post <i class="fa fa-angle-right"></i>', 'dart-framework')); ?>
            </div>
        </div>
		<?php
    endif;


}



add_action('PickPlugins_archive_loop_post','PickPlugins_archive_loop_post_comments_html');
function PickPlugins_archive_loop_post_comments_html(){

	if ( comments_open() || get_comments_number() ) :
        comments_template();

    endif;

}









add_action('PickPlugins_archive_loop_post','PickPlugins_archive_loop_post_html');
function PickPlugins_archive_loop_post_html(){



}






add_action('PickPlugins_content_area','PickPlugins_content_area_html');
function PickPlugins_content_area_html(){

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
                <div class="author vcard">
                    <?php _e('By: ', 'bug-blog');
                    printf('<a class="url fn n" href="%1$s">%2$s</a>',
                        esc_url(get_author_posts_url(get_the_author_meta('ID'))),
                        esc_html(get_the_author())
                    ) ?>
                </div>
                <div class="posted-date"><?php echo sprintf(__('Published: %s','dart-framework'), get_the_time('M d, Y')); ?></div>
                <?php if (get_the_category_list()): ?>

                    <div class="categories">
                        <?php echo get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'bug-blog')); ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="entry-content">
                <?php the_content(); ?>

            </div>
            <div class="clearfix"></div>
            <div class="entry-meta-bottom">
                <div class="entry-tags text-left"><?php the_tags(); ?></div>
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
                <div class="author vcard">
                    <?php _e('By: ', 'bug-blog');
                    printf('<a class="url fn n" href="%1$s">%2$s</a>',
                        esc_url(get_author_posts_url(get_the_author_meta('ID'))),
                        esc_html(get_the_author())
                    ) ?>
                </div>
                <div class="posted-date"><?php echo sprintf(__('Published: %s','dart-framework'), get_the_time('M d, Y')); ?></div>
                <?php if (get_the_category_list()): ?>

                    <div class="categories">
                        <?php echo get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'bug-blog')); ?>
                    </div>
                <?php endif; ?>

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







