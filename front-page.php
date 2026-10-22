<?php get_header(); ?>

<main>

    <?php get_template_part('template-parts/home/hero'); ?>
  
    <?php get_template_part('template-parts/home/risk-management'); ?>
    <?php get_template_part('template-parts/home/pillars'); ?>
    <?php get_template_part('template-parts/home/life-journey'); ?>
   
    <?php get_template_part('template-parts/home/glossary'); ?>
    <?php get_template_part('template-parts/home/stories'); ?>
    <?php get_template_part('template-parts/home/assessment'); ?>

</main>

<!-- Back to Top Button -->
<button id="backToTop" title="Go to top" aria-label="Back to Top" style="display: none; position: fixed; bottom: 30px; right: 30px; z-index: 999; font-size: 20px; border: none; outline: none; background-color: #0073aa; color: #ffffff; cursor: pointer; width: 48px; height: 48px; border-radius: 50%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: background-color 0.3s, transform 0.2s;">
    &#8593;
</button>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const backToTopBtn = document.getElementById('backToTop');

    // Show button when scrolled down 300px
    window.addEventListener('scroll', function () {
        if (window.scrollY > 300) {
            backToTopBtn.style.display = 'block';
        } else {
            backToTopBtn.style.display = 'none';
        }
    });

    // Smooth scroll back to top when clicked
    backToTopBtn.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
</script>

<?php get_footer(); ?>