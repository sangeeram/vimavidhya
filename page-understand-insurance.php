<?php get_header(); ?>

<main class="understand-insurance-page">

    <?php get_template_part(
        'template-parts/awareness/understand-insurance/understand-hero',
        
    ); ?>

    <?php get_template_part(
        'template-parts/awareness/understand-insurance',
        'what-is-insurance'
    ); ?>

    <?php get_template_part(
        'template-parts/awareness/understand-insurance',
        'why-insurance'
    ); ?>

</main>

<?php get_footer(); ?>