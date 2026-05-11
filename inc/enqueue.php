<?php

function b37_theme_enqueue_scripts()
{
    wp_enqueue_style('global', get_stylesheet_uri());
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array('global'));

    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}

add_action("wp_enqueue_scripts", "b37_theme_enqueue_scripts");
