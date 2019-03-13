<?php

if ( ! defined('ABSPATH')) exit;  // if direct access
?>


<form class="vertical-center" role="search" method="get" id="searchform" action="<?php echo esc_url(home_url( '/' )); ?>">

   <input type="text" placeholder="<?php esc_attr_e('Search &hellip;', 'dartthemes'); ?>" name="s" id="s" value="<?php echo get_search_query(); ?>" />

</form>