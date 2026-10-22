<?php
/**
 * Vima Vidya — Managing Risks
 */

get_header();
?>

<main id="primary" class="awareness-single">

   
 <?php
    get_template_part(
        'template-parts/awareness/managing-risk/riskhero'
    );
    ?>
    <?php
    get_template_part(
        'template-parts/awareness/managing-risk/managing-risk'
    );
    ?>
   
</main>

<?php get_footer(); ?>