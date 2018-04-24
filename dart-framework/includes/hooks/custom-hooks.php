<?php
if ( ! defined('ABSPATH')) exit;  // if direct access



add_action('dartthemes_fw_site_main_top','dartthemes_fw_site_main_top_container');
function dartthemes_fw_site_main_top_container(){

	?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
	<?php
}



add_action('dartthemes_fw_site_main_bottom','dartthemes_fw_site_main_bottom_container');

function dartthemes_fw_site_main_bottom_container(){

	?>
            </div> <!-- .col-md-8 -->
            <div class="col-md-4">
                <?php dynamic_sidebar('blog-widget'); ?>
            </div> <!-- .col-md-8 -->
        </div><!-- .row -->
    </div> <!-- .container -->


	<?php
}























add_action('dartthemes_fw_content_area_top','dartthemes_fw_arcive_title');
function dartthemes_fw_arcive_title(){

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














add_action('dartthemes_fw_site_header','dartthemes_fw_site_header_html');
function dartthemes_fw_site_header_html(){

	$header_template = get_theme_mod('header_theme');

	if(empty($header_template)){
		$header_template =  'header_1';
	}

	if($header_template=='header_1'){
		get_template_part('templates-parts/header-templates/header','template-1');
	}

}


add_filter('dartthemes_fw_site_header_class','dartthemes_fw_site_header_class_extra');
function dartthemes_fw_site_header_class_extra($header_class){

	$header_template = get_theme_mod('header_theme');

	if(empty($header_template)){

		$header_template =  'header_1';
	}

	return $header_template.' '.$header_class;
}












add_filter('dartthemes_fw_site_footer_class', 'dartthemes_fw_site_footer_class_extra');

function dartthemes_fw_site_footer_class_extra($footer_class){
	$footer_template = get_theme_mod('footer_theme');
	if(empty($footer_template)){
		$footer_template =  'footer_1';
	}
	return $footer_template.' '.$footer_class;
}


add_action('dartthemes_fw_site_footer','dartthemes_fw_site_footer_html');
function dartthemes_fw_site_footer_html(){

	$footer_template = get_theme_mod('footer_theme');
	if(empty($footer_template)){
		$footer_template =  'footer_1';
	}

	if($footer_template=='footer_1'){
		get_template_part('templates-parts/footer-templates/footer','template-1');
	}

}


add_filter('dartthemes_fw_article_class','dartthemes_fw_article_class_extra');

function dartthemes_fw_article_class_extra($article_class){

	$article_template = get_theme_mod('article_theme');

	if(empty($article_template)){

		$article_template = '';
	}
	return $article_template.' '. $article_class;
}



add_action('dartthemes_fw_content_area_bottom','dartthemes_fw_content_area_bottom_pagination');
function dartthemes_fw_content_area_bottom_pagination(){

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


add_action('dartthemes_fw_archive_loop_post','dartthemes_fw_singular_post_html');
function dartthemes_fw_singular_post_html(){

    if(is_singular()):

	    ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-thumbnail">
			    <?php the_post_thumbnail(); ?>
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
            <div class="entry-meta-bottom">
                <div class="entry-tags text-left"><?php the_tags(); ?></div>
            </div>



        </article>

	    <?php


    endif;

}




















add_action('dartthemes_fw_archive_loop_post','dartthemes_fw_archive_loop_post_nav_html');
function dartthemes_fw_archive_loop_post_nav_html(){

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



add_action('dartthemes_fw_archive_loop_post','dartthemes_fw_archive_loop_post_comments_html');
function dartthemes_fw_archive_loop_post_comments_html(){

	if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

}









add_action('dartthemes_fw_archive_loop_post','dartthemes_fw_archive_loop_post_html');
function dartthemes_fw_archive_loop_post_html(){

	if(is_archive() || is_home()):

		?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-thumbnail">
				<?php the_post_thumbnail(); ?>
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


	endif;

}













