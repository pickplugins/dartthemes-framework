<?php
if ( ! defined('ABSPATH')) exit;  // if direct access

get_header();
?>


<?php PickPlugins_site_main_before(); ?>

    <div class="site-main <?php PickPlugins_site_main_class(); ?>">
        <?php PickPlugins_site_main_top(); ?>

        <?php PickPlugins_content_area_before(); ?>
        <div class="content-area <?php PickPlugins_content_area_class(); ?>">

            <?php PickPlugins_content_area_top(); ?>
            <?php PickPlugins_content_area(); ?>
            <?php PickPlugins_content_area_bottom(); ?>
        </div> <!-- .content-area end -->

        <?php PickPlugins_content_area_after(); ?>

        <?php PickPlugins_site_main_bottom(); ?>
    </div> <!-- .site-main end  -->


<?php PickPlugins_site_main_after(); ?>


<?php get_footer(); ?>