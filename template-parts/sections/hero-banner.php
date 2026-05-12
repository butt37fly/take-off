<?php

$image = "";
$prefix = 'hero-banner_';

$field_image = get_field($prefix . 'image');
$field_text = get_field($prefix . 'text');
$field_button = [
    'text' => get_field($prefix . 'button_text'),
    'url'  => get_field($prefix . 'button_url')
];

$background = [
    get_stylesheet_directory_uri() . '/assets/img/cloud_01.webp',
    get_stylesheet_directory_uri() . '/assets/img/cloud_02.webp',
];

if ($field_image !== false) {
    $image = wp_get_attachment_image($field_image['ID'], 'full', false, ['class' => 'hero-banner__img']);
}

?>

<section class="hero-banner u-flex u-justify-center u-align-center u-w-100 u-m-auto u-p-9">
    <div class="hero-banner__background">
        <img class="hero-banner__cloud hero-banner__cloud--01" src="<?= $background[0] ?>" width="200" height="100" alt="cloud_01">
        <img class="hero-banner__cloud hero-banner__cloud--02" src="<?= $background[1] ?>" width="200" height="100" alt="cloud_02">
    </div>
    <div class="hero-banner__wrapper u-flex u-column u-justify-center u-align-center u-g-2">

        <?= $image ?>

        <div class="hero-banner__content u-flex u-column u-justify-center u-align-center u-g-6">
            <p> <?= esc_html($field_text); ?> </p>

            <?php get_template_part('template-parts/components/button', null, $field_button); ?>

        </div>
    </div>
</section>