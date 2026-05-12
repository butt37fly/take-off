<?php get_header(); ?>

<main>
    <section class="hero u-flex u-justify-center u-align-center u-g-7">

        <?php

        get_template_part('/template-parts/sections/hero-banner');
        get_template_part('/template-parts/sections/hero-content');
        get_template_part('/template-parts/sections/hero-tickets');

        ?>

    </section>
</main>

<?php get_footer(); ?>