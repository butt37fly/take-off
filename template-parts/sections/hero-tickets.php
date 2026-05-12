<?php

$prefix = 'hero-tickets_';

$field_icon = get_field($prefix . 'icon');
$field_title = get_field($prefix . 'title');

?>

<section class="hero-tickets">
    <div class="hero-tickets__wrapper">
        <div class="hero-tickets__header">
            <i class="hero-tickets__icon"> <?= file_get_contents($field_icon); ?> </i>
            <h2 class="hero-tickets__title"> <?= esc_html($field_title); ?> </h2>
        </div>
        <div class="hero-tickets__content">

            <?php get_template_part('/template-parts/components/tickets'); ?>

        </div>
    </div>
</section>