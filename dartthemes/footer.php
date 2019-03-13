<?php if (!defined('ABSPATH')) exit;  // if direct access ?>

            <?php dartthemes_site_footer_before(); ?>
            <footer class="site-footer  <?php dartthemes_site_footer_class(); ?>">
	            <?php dartthemes_site_footer(); ?>
            </footer> <!-- .footer end -->
            <?php dartthemes_site_footer_after(); ?>

            <?php dartthemes_site_wrapper_bottom(); ?>
        </div> <!-- .site-wrapper end-->
        <?php dartthemes_site_wrapper_after(); ?>

    <?php wp_footer(); ?>
    </body>
</html>