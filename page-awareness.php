<?php
/**
 * Vima Vidya — What is Insurance
 */

get_header();
?>

<main id="primary" class="awareness-single">
    <?php
    get_template_part(
        'template-parts/awareness/hero'
    );
    ?>

    <?php get_template_part('template-parts/awareness/explore'); ?>
    <?php get_template_part('template-parts/awareness/what-is-insurance'); ?>
    <?php get_template_part('template-parts/awareness/life-stages'); ?>
    <?php get_template_part('template-parts/awareness/cta'); ?>

</main>

<?php get_footer(); ?>