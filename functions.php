<?php

require get_theme_file_path() . '/inc/enqueue.php';

require get_theme_file_path() . '/inc/menus.php';


add_filter('use_block_editor_for_post', '__return_false');
add_theme_support('custom-logo');


if (! function_exists('b37_display_custom_logo')) {
    function b37_display_custom_logo(): void
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

if (! function_exists('b37_display_table_chars')) {
    function b37_display_table_chars(array $data): void
    {

        $html = "";

        foreach ($data as $value) {
            $html .= "<div class='c-tickets__row u-flex u-row u-g-1'>";
            foreach ($value as $char) {

                $html .= "<span class='c-tickets__item u-flex u-justify-center u-align-center'>" . esc_html($char) . "</span>";
            }

            $html .= "</div>";
        }

        echo $html;
    }
}

if (! function_exists('b37_add_file_types_to_uploads')) {
    function b37_add_file_types_to_uploads(array $file_types): array
    {
        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        $file_types = array_merge($file_types, $new_filetypes);
        return $file_types;
    }

    add_filter('upload_mimes', 'b37_add_file_types_to_uploads');
}
