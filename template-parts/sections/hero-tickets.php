<?php

$prefix = 'hero-tickets_';

$field_icon = get_field($prefix . 'icon');
$field_title = get_field($prefix . 'title');

?>

<section class="hero-tickets u-flex u-column u-p-9 u-w-100">
    <div class="hero-tickets__wrapper u-flex u-column u-justify-center u-align-start u-g-4 u-m-auto">
        <div class="hero-tickets__header u-flex u-row u-justify-center u-align-center u-g-4 u-m-auto u-w-100">
            <i class="hero-tickets__icon"> <?= file_get_contents($field_icon); ?> </i>
            <h2 class="hero-tickets__title"> <?= esc_html($field_title); ?> </h2>
        </div>
        <div class="hero-tickets__content u-flex u-column u-g-4 u-w-100">

            <?php get_template_part('/template-parts/components/tickets'); ?>

        </div>
    </div>
</section>