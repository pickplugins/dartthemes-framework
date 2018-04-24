<?php

if ( ! defined('ABSPATH')) exit;  // if direct access

    $dartthemes_fw_logo = get_theme_mod('dartthemes_fw_logo');
	?>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <?php
                if(!empty($dartthemes_fw_logo)):
                    ?>
                    <div class="main-logo">
                        <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_theme_mod('dartthemes_fw_logo'));
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

            <div class="col-md-3 ">
	            <?php echo get_search_form(); ?>
            </div>

            <div class="col-md-6">
                <div id="" class="navigation">
                    <?php wp_nav_menu( array('container' => false, 'theme_location' => 'header-menu', 'menu_class' => 'menu float-right')); ?>
                </div>

                <div class="menu-mobile"></div>
            </div>

        </div>
    </div>

