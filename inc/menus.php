<?php

if (! function_exists('b37_register_menus')) {

    function b37_register_menus()
    {
        register_nav_menus(array(
            'header_menu' => __('Header', 'take-off'),
            'footer_menu' => __('Footer', 'take-off'),
        ));
    }

    add_action('after_setup_theme', 'b37_register_menus');
}
