<?php

$prefix = 'hero-content_';

$field_title = get_field($prefix . 'title');
$field_text = get_field($prefix . 'content');
$field_button = [
    'text' => get_field($prefix . 'button_text'),
    'url'  => get_field($prefix . 'button_url')
];

?>

<section class="hero-content">
    <div class="hero-content__wrapper">

        <h1 class="hero-content__title"> <?= esc_html($field_title); ?> </h1>

        <div class="hero-content__content">

            <?= wp_kses_post($field_text) ?>

        </div>

        <?php get_template_part('template-parts/components/button', null, $field_button); ?>

    </div>
</section>