<?php

$text = [
    'create momentum',
    'full service',
    'global agency',
    'for b2b teams'
];

$text_length = 0;
$text_chars = [];

$text_table = [];
$date_table = [];
$gate_table = [];

foreach ($text as $value) {
    if (strlen($value) > $text_length) {
        $text_length = strlen($value);
    }
}

foreach ($text as $value) {
    $text_chars[] = array_pad(mb_str_split($value), $text_length, " ");
}

for ($i = 0; $i < count($text); $i++) {
    $text_table[] = array_pad([], $text_length, " ");
    $date_table[] = array_pad([], 5, " ");
    $gate_table[] = array_pad([], 3, " ");
}

?>

<section class="c-tickets u-flex u-row u-g-3 u-w-100">
    <div class="c-tickets__column u-flex u-column u-justify-start u-align-start u-g-2">
        <h2 class="c-tickets__title"> <?php _e('Time', 'take-off'); ?> </h2>
        <div class="c-tickets__grid u-flex u-column u-g-1">

            <?php b37_display_table_chars($date_table) ?>

        </div>
    </div>
    <div class="c-tickets__column u-flex u-column u-justify-start u-align-start u-g-2">
        <h2 class="c-tickets__title"> <?php _e('Destination', 'take-off'); ?> </h2>
        <div class="c-tickets__grid u-flex u-column u-g-1">

            <?php b37_display_table_chars($text_table) ?>

        </div>
    </div>
    <div class="c-tickets__column u-flex u-column u-justify-start u-align-start u-g-2">
        <h2 class="c-tickets__title"> <?php _e('Gate', 'take-off'); ?> </h2>
        <div class="c-tickets__grid u-flex u-column u-g-1">

            <?php b37_display_table_chars($gate_table) ?>

        </div>
    </div>
</section>