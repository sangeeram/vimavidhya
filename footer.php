<?php
/**
 * Footer
 *
 * @package VimaVidya
 */
?>

<footer class="site-footer">

    <!-- =========================================
         MAIN FOOTER
    ========================================== -->
    <div class="site-footer__main">

        <div class="site-footer__container">

            <!-- BRAND / ABOUT -->
            <div class="site-footer__brand">

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                   class="site-footer__logo">

                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() . '/assets/images/logo.png'
                        ); ?>"
                        alt="Vima Vidya"
                    >

                </a>

                <h3 class="site-footer__heading">
                    Empowering you with the knowledge of Insurance
                </h3>

                <p class="site-footer__description">
                    Know-how about insurance is important because it protects
                    you from financial difficulties by transferring risk to an
                    insurance company, providing a safety net for unexpected
                    events like accidents or illnesses, and offering peace of mind.
                    It ensures financial stability for you and your family, protects
                    assets, can offer legal protection, and helps with long-term
                    wealth growth through combined investment policies.
                </p>

                <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"
                   class="site-footer__read-more">
                    Read More..
                </a>

            </div>


            <!-- IMPORTANT LINKS -->
            <div class="site-footer__links">

                <h3 class="site-footer__title">
                    Important Link
                </h3>

                <div class="site-footer__link-grid">

                    <div class="site-footer__link-column">

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            Home
                        </a>

                        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">
                            About Us
                        </a>

                        <a href="<?php echo esc_url( home_url( '/awareness/' ) ); ?>">
                            Awareness
                        </a>

                        <a href="<?php echo esc_url( home_url( '/education/' ) ); ?>">
                            Education
                        </a>

                    </div>

                    <div class="site-footer__link-column">

                        <a href="<?php echo esc_url( home_url( '/knowledge/' ) ); ?>">
                            Knowledge
                        </a>

                        <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">
                            Contact Us
                        </a>

                    </div>

                </div>

            </div>


            <!-- SOCIAL LINKS -->
            <div class="site-footer__social">

                <h3 class="site-footer__title">
                    Social Link
                </h3>

                <div class="site-footer__social-list">

                    <a href="#"
                       class="site-footer__social-item"
                       aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="#"
                       class="site-footer__social-item"
                       aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>

                    <a href="#"
                       class="site-footer__social-item"
                       aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#"
                       class="site-footer__social-item"
                       aria-label="Email">
                        <i class="fas fa-envelope"></i>
                    </a>

                    <a href="#"
                       class="site-footer__social-item"
                       aria-label="Contact">
                        <i class="fas fa-newspaper"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================================
         LEGAL / DISCLAIMER BAR
    ========================================== -->

    <div class="site-footer__legal">

        <div class="site-footer__legal-container">

            <p class="site-footer__disclaimer">

                The information provided on the Vima Vidya website is for
                general educational and awareness purposes only. While we
                strive to ensure accuracy and relevance, some content may
                be sourced from third-party websites, including official
                government and insurance-related portals.

            </p>


            <p class="site-footer__copyright">

                © <?php echo esc_html( date( 'Y' ) ); ?>
                Vima Vidya. All Rights Reserved.

            </p>


            <a href="#feedback"
               class="site-footer__feedback">

                <span class="site-footer__feedback-icon">
                    ✦
                </span>

                Quick Feedback

            </a>

        </div>

    </div>

</footer>

<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    AOS.init({
        duration: 900,
        easing: 'ease-out-cubic',
        offset: 80,
        delay: 0,
        once: true,
        mirror: false,
        anchorPlacement: 'top-bottom'
    });

});
</script>



<?php wp_footer(); ?>


</body>
</html>

