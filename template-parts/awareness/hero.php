<?php
/**
 * Vima Vidya — Awareness Hero
 */
?>

<section class="awareness-hero">

    <div class="awareness-hero__container">

        <!-- =========================================
             LEFT CONTENT
        ========================================== -->

        <div class="awareness-hero__content">

            <div class="awareness-hero__eyebrow">
                Insurance Awareness Initiative · India
            </div>

            <h1 class="awareness-hero__title">
                Life is
                <span>Unpredictable.</span>
                <br>
                Are You
                <span>Prepared?</span>
            </h1>

            <p class="awareness-hero__description">
                Most Indian families assume financial difficulty won't
                affect them. The data suggests otherwise. A few honest
                questions can shift perspective and prompt decisions
                that genuinely matter.
            </p>

            <a href="#risk-management" class="awareness-hero__cta">
                <span>
                    Why Insurance is good risk management
                </span>

                <i>↗</i>
            </a>

        </div>


        <!-- =========================================
             RIGHT VISUAL
        ========================================== -->

        <div class="awareness-hero__visual">

            <div class="awareness-hero__visual-shape"></div>

            <div class="awareness-hero__visual-orbit"></div>


            <!-- IMAGE -->

            <div class="awareness-hero__image">

                <img
                    src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=700&q=85"
                    alt="Person preparing for life's unexpected moments"
                >

            </div>


            <!-- FLOATING LABEL -->

            <!-- <div class="awareness-hero__visual-label awareness-hero__visual-label--top">
                <span>01</span>
                Prepare
            </div>

            <div class="awareness-hero__visual-label awareness-hero__visual-label--bottom">
                <span>02</span>
                Protect
            </div> -->

        </div>

    </div>


    <!-- =========================================
         STATS
    ========================================== -->

    <div class="awareness-hero__stats">

        <div class="awareness-stat">

            <div class="awareness-stat__number">
                76%
            </div>

            <div class="awareness-stat__content">

                <strong>Life cover gap</strong>

                <span>
                    of Indians lack adequate life cover
                </span>

            </div>

        </div>


        <div class="awareness-stat">

            <div class="awareness-stat__number">
                ₹71K
            </div>

            <div class="awareness-stat__content">

                <strong>Hospitalisation</strong>

                <span>
                    average hospitalisation cost
                </span>

            </div>

        </div>


        <div class="awareness-stat">

            <div class="awareness-stat__number">
                1 in 4
            </div>

            <div class="awareness-stat__content">

                <strong>Financial strain</strong>

                <span>
                    families face financial strain post-illness
                </span>

            </div>

        </div>


        <div class="awareness-stat">

            <div class="awareness-stat__number">
                68%
            </div>

            <div class="awareness-stat__content">

                <strong>No health cover</strong>

                <span>
                    have no health insurance cover
                </span>

            </div>

        </div>

    </div>

</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {

    // Check whether AOS is loaded
    if (typeof AOS !== "undefined") {

        AOS.init({
            duration: 900,
            easing: "ease-out-cubic",
            once: true,
            offset: 80,
            delay: 0,
            mirror: false
        });

    } else {

        console.warn("AOS library is not loaded.");

    }

});
</script>