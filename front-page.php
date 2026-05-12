<?php get_header(); ?>

<main>

    <section class="hero">

        <?php

        get_template_part('/template-parts/sections/hero-banner');
        get_template_part('/template-parts/sections/hero-content');
        get_template_part('/template-parts/sections/hero-tickets');

        ?>

    </section>

</main>

<?php get_footer(); ?>