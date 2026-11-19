<?php
/**
 * =========================================================
 * VIMA VIDYA
 * JOURNEY + EMPOWERMENT SECTIONS
 * =========================================================
 *
 * SECTION 01:
 * Your Journey Starts Here
 *
 * SECTION 02:
 * How Vima Vidya Empowers You
 *
 */

// Theme asset directory
$theme_uri = get_template_directory_uri();

?>

<!-- =========================================================
     SECTION 01
     YOUR JOURNEY STARTS HERE
========================================================= -->

<!-- Reserved for Journey Intro Section -->


<!-- =========================================================
     SECTION 02
     HOW VIMA VIDYA EMPOWERS YOU
========================================================= -->

<section class="empower-section">

    <div class="empower-section__container">

        <!-- =====================================================
             SECTION HEADER
        ====================================================== -->

        <header class="empower-section__header" data-aos="fade-up" data-aos-duration="800">

            <h2 class="empower-section__title">
                How VimaVidya Empowers You
            </h2>

            <p class="empower-section__tagline">
                Take the first step toward a stronger,
                more resilient future for yourself and
                those you love.
            </p>

        </header>


        <!-- =====================================================
             PILLARS GRID
        ====================================================== -->

        <div class="empower-section__grid">


            <!-- =================================================
                 PILLAR 01 — AWARENESS
            ================================================== -->

            <div class="empower-pillar" data-aos="fade-up" data-aos-duration="850" data-aos-delay="100"
                data-aos-easing="ease-out-cubic">

                <article class="empower-pillar__card">

                    <!-- IMAGE -->

                    <div class="empower-pillar__image empower-pillar__image--portrait"
                        style="--pillar-image: url('<?php echo esc_url($theme_uri . '/assets/images/home/awareness.png'); ?>');">

                        <img src="<?php echo esc_url($theme_uri . '/assets/images/home/awareness.png'); ?>"
                            alt="Family protected by insurance" loading="lazy">

                    </div>


                    <!-- CONTENT -->

                    <div class="empower-pillar__content">

                        <span class="empower-pillar__number">
                            01
                        </span>

                        <h3 class="empower-pillar__title">
                            Awareness
                        </h3>

                        <p class="empower-pillar__description">
                            Discover the types of insurance available
                            and how each one protects you and your family.
                            We cut through the jargon so you can grasp
                            what matters — quickly and clearly.
                        </p>

                    </div>

                </article>


                <!-- CTA -->

                <a href="<?php echo esc_url(home_url('/awareness/')); ?>" class="empower-pillar__cta"
                    aria-label="Explore Awareness">

                    <span>
                        Explore More
                    </span>

                    <span class="empower-pillar__arrow" aria-hidden="true">
                        ↗
                    </span>

                </a>

            </div>



            <!-- =================================================
                 PILLAR 02 — EDUCATION
            ================================================== -->

            <div class="empower-pillar" data-aos="fade-up" data-aos-duration="850" data-aos-delay="220"
                data-aos-easing="ease-out-cubic">

                <article class="empower-pillar__card">

                    <!-- IMAGE -->

                    <div class="empower-pillar__image empower-pillar__image--portrait"
                        style="--pillar-image: url('<?php echo esc_url($theme_uri . '/assets/images/home/education.png'); ?>');">

                        <img src="<?php echo esc_url($theme_uri . '/assets/images/home/education.png'); ?>"
                            alt="Family protected by insurance" loading="lazy">

                    </div>

                    <!-- CONTENT -->

                    <div class="empower-pillar__content">

                        <span class="empower-pillar__number">
                            02
                        </span>

                        <h3 class="empower-pillar__title">
                            Education
                        </h3>

                        <p class="empower-pillar__description">
                            Ready to go deeper? We offer personalised guidance and short courses on how insurance
                            actually works — so you understand not just what you're covered for, but how and why.
                        </p>

                    </div>

                </article>


                <!-- CTA -->

                <a href="<?php echo esc_url(home_url('/education/')); ?>" class="empower-pillar__cta"
                    aria-label="Explore Education">

                    <span>
                        Explore More
                    </span>

                    <span class="empower-pillar__arrow" aria-hidden="true">
                        ↗
                    </span>

                </a>

            </div>



            <!-- =================================================
                 PILLAR 03 — EXPERTISE
            ================================================== -->

            <div class="empower-pillar" data-aos="fade-up" data-aos-duration="850" data-aos-delay="340"
                data-aos-easing="ease-out-cubic">

                <article class="empower-pillar__card">

                    <!-- IMAGE -->

                    <div class="empower-pillar__image empower-pillar__image--portrait"
                        style="--pillar-image: url('<?php echo esc_url($theme_uri . '/assets/images/home/expertise.png'); ?>');">

                        <img src="<?php echo esc_url($theme_uri . '/assets/images/home/expertise.png'); ?>"
                            alt="Family protected by insurance" loading="lazy">

                    </div>


                    <!-- CONTENT -->

                    <div class="empower-pillar__content">

                        <span class="empower-pillar__number">
                            03
                        </span>

                        <h3 class="empower-pillar__title">
                            Expertise
                        </h3>

                        <p class="empower-pillar__description">
                            Stay ahead with trustworthy, in-depth insights drawn from leading global insurance
                            publications, research and experience— always with your best interests at the core.
                        </p>

                    </div>

                </article>


                <!-- CTA -->

                <a href="<?php echo esc_url(home_url('/expertise/')); ?>" class="empower-pillar__cta"
                    aria-label="Explore Expertise">

                    <span>
                        Explore More
                    </span>

                    <span class="empower-pillar__arrow" aria-hidden="true">
                        ↗
                    </span>

                </a>

            </div>


        </div>

    </div>

</section>


<!-- =========================================================
     AOS ANIMATION
========================================================= -->

<script>
document.addEventListener('DOMContentLoaded', function() {

    if (typeof AOS !== 'undefined') {

        AOS.init({

            duration: 850,

            easing: 'ease-out-cubic',

            offset: 80,

            once: true,

            mirror: false

        });

    }

});
</script>