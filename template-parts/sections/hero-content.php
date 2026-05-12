<?php

$prefix = 'hero-content_';

$field_title = get_field($prefix . 'title');
$field_text = get_field($prefix . 'content');
$field_button = [
    'text' => get_field($prefix . 'button_text'),
    'url'  => get_field($prefix . 'button_url')
];

?>

<section class="hero-content u-flex u-w-100 u-p-9">
    <div class="hero-content__wrapper u-flex u-column u-justify-center u-align-start u-g-4 u-m-auto">

        <h1 class="hero-content__title"> <?= esc_html($field_title); ?> </h1>

        <div class="hero-content__content u-flex u-column u-g-4">

            <?= wp_kses_post($field_text) ?>

        </div>

        <?php get_template_part('template-parts/components/button', null, $field_button); ?>

    </div>
</section>