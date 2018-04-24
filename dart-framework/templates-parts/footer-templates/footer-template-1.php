<?php

if ( ! defined('ABSPATH')) exit;  // if direct access

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

			$dartthemes_fw_poweredby = get_theme_mod('dartthemes_fw_poweredby');
			$dartthemes_fw_dev_by = get_theme_mod('dartthemes_fw_dev_by');

			$dartthemes_fw_copyright_text = get_theme_mod('dartthemes_fw_copyright_text');

			?>

            <div class="col-md-12">
				<?php if(empty($dartthemes_fw_poweredby)):?>
                    <span class="poweredby"><?php echo __('Proudly powered by <b>WordPress</b>','dart-framework'); ?></span> |
					<?php
				endif;
				?>

				<?php if(empty($dartthemes_fw_dev_by)):?>
                    <span class="dev-credit"><?php echo sprintf(__('Theme <b>Dart framework</b> by <a href="%s">%s</a>','dart-framework'),'https://dartthemes.com','https://dartthemes.com'); ?>  </span> |
					<?php
				endif;
				?>


				<?php if(empty($dartthemes_fw_copyright_text)):?>
                    <span class="footer-copyright"><?php echo sprintf(__('Copyright %s %s','dart-framework'), date('Y'), esc_url( home_url() )); ?></span>
					<?php
				else:
					?>
                    <span class="footer-copyright"><?php echo esc_html($dartthemes_fw_copyright_text); ?></span>
					<?php

				endif;
				?>

            </div>

        </div>
    </div>
</div>
