<?php
if ( ! defined('ABSPATH')) exit;  // if direct access

get_header();
?>


<?php dartthemes_fw_site_main_before(); ?>

    <div class="site-main <?php dartthemes_fw_site_main_class(); ?>">
		<?php dartthemes_fw_site_main_top(); ?>

		<?php dartthemes_fw_content_area_before(); ?>
        <div class="content-area <?php dartthemes_fw_content_area_class(); ?>">

			<?php dartthemes_fw_content_area_top(); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php dartthemes_fw_archive_loop_post(); ?>
			<?php endwhile; ?>

			<?php dartthemes_fw_content_area_bottom(); ?>
        </div> <!-- .content-area end -->

		<?php dartthemes_fw_content_area_after(); ?>

		<?php dartthemes_fw_site_main_bottom(); ?>
    </div> <!-- .site-main end  -->


<?php dartthemes_fw_site_main_after(); ?>


<?php get_footer(); ?>