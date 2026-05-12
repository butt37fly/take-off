<?php

$text = $args['text'] ?? 'Button';
$url = $args['url'] ?? '#';

?>

<a href="<?= esc_url($url); ?>" class="c-button">
    <?= esc_html($text); ?>
</a>