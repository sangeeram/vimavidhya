<?php
/**
 * Vima Vidya — expertise
 */

get_header();
?>

<main id="primary" class="awareness-single">

   
 <?php
    get_template_part(
        'template-parts/expertise/expertise-hero'
    );
    ?>

    <?php
    get_template_part(
        'template-parts/expertise/expertise-insurance-market'
    );
    ?>

      <?php
    get_template_part(
        'template-parts/expertise/expertise-syndicated-reports'
    );
    ?>
    

    <?php
    get_template_part(
        'template-parts/expertise/expertise-custom-report'
    );
    ?>
    
</main>

<?php get_footer(); ?>