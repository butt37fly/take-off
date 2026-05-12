<?php

require get_theme_file_path() . '/inc/enqueue.php';

require get_theme_file_path() . '/inc/menus.php';


add_filter('use_block_editor_for_post', '__return_false');
add_theme_support('custom-logo');


if (! function_exists('b37_display_custom_logo')) {
    function b37_display_custom_logo()
    {
        echo '<a href="' . get_permalink() . '" class="header__logo">';

        if (has_custom_logo()) {
            $logo_id = get_theme_mod('custom_logo');
            $logo_img = wp_get_attachment_image($logo_id, 'full', false);
            echo $logo_img;
        } else {
            echo get_bloginfo('name');
        }

        echo '</a>';
    }
}
