<?php if (!defined('ABSPATH')) exit;  // if direct access ?>

            <?php PickPlugins_site_footer_before(); ?>
            <footer class="site-footer mt-5 <?php PickPlugins_site_footer_class(); ?>">
	            <?php PickPlugins_site_footer(); ?>
            </footer> <!-- .footer end -->
            <?php PickPlugins_site_footer_after(); ?>

            <?php PickPlugins_site_wrapper_bottom(); ?>
        </div> <!-- .site-wrapper end-->
        <?php PickPlugins_site_wrapper_after(); ?>

    <?php wp_footer(); ?>
    </body>
</html>