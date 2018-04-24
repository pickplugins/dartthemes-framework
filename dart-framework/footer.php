<?php if (!defined('ABSPATH')) exit;  // if direct access ?>

            <?php dartthemes_fw_site_footer_before(); ?>
            <footer class="site-footer mt-5 <?php dartthemes_fw_site_footer_class(); ?>">
	            <?php dartthemes_fw_site_footer(); ?>
            </footer> <!-- .footer end -->
            <?php dartthemes_fw_site_footer_after(); ?>

            <?php dartthemes_fw_site_wrapper_bottom(); ?>
        </div> <!-- .site-wrapper end-->
        <?php dartthemes_fw_site_wrapper_after(); ?>

    <?php wp_footer(); ?>
    </body>
</html>