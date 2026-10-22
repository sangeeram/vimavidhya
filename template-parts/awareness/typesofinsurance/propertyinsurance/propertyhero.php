<?php
/**
 * =========================================================
 * VIMA VIDYA
 * PROPERTY INSURANCE — HERO SLIDER
 * =========================================================
 *
 * 3 Storytelling Slides
 * 01 — Your Home
 * 02 — Flood Risk
 * 03 — Urban Fire Risk
 *
 * =========================================================
 */



/**
 * =========================================================
 * PROPERTY INSURANCE HERO DATA
 * =========================================================
 */

$property_hero_slides = [

    // =====================================================
    // SLIDE 01
    // =====================================================

    [
        'id'            => 'property-home',
        'eyebrow'       => 'PROPERTY INSURANCE',
        'tag'           => 'YOUR HOME. YOUR BIGGEST ASSET.',

        'title'         => 'Your Home Did Not Come Easy.',
        'title_accent'  => "Don't Leave It Unprotected.",

        'description'   => "For most Indians, a home is the single largest asset they will ever own. Yet fewer than 1 in 10 Indian homes have any form of property insurance. Most people believe “nothing will happen to my home.” But risk is unpredictable. Property insurance helps protect your home, belongings and finances when an unexpected event changes everything.",

        'primary_label'   => 'Start Here',
        'primary_url'     => '#property-start',

        'secondary_label' => 'Understand Property Insurance',
        'secondary_url'   => '#what-is-property-insurance',

        'image'         => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Modern Indian family home',

        'category'      => 'AWARENESS',
        'category_icon' => 'awareness',
    ],


    // =====================================================
    // SLIDE 02
    // =====================================================

    [
        'id'            => 'property-flood',
        'eyebrow'       => 'UNDERSTANDING THE RISK',
        'tag'           => 'FLOOD LOSSES IN INDIA',

        'title'         => 'Your Home Is More Vulnerable',
        'title_accent'  => 'Than You Think.',

        'description'   => "India accounts for approximately 10% of global flood-related economic losses. Most disasters happen in conditions that felt completely ordinary when the week began. Property insurance exists for exactly those ordinary days that end differently.",

        'primary_label'   => 'Understand the Risk',
        'primary_url'     => '#property-risks',

        'secondary_label' => 'Explore Flood Protection',
        'secondary_url'   => '#flood-risk',

        'image'         => 'https://images.unsplash.com/photo-1547683905-f686c993aae5?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Flooded residential area',

        'category'      => 'RISK AWARENESS',
        'category_icon' => 'risk',
    ],


    // =====================================================
    // SLIDE 03
    // =====================================================

    [
        'id'            => 'property-fire',
        'eyebrow'       => 'URBAN PROPERTY RISKS',
        'tag'           => 'APARTMENT FIRE RISK',

        'title'         => 'Every Few Hours,',
        'title_accent'  => 'A Family Loses Its Shelter.',

        'description'   => "Behind every number is a household that woke up that morning with ordinary plans. A basic property insurance policy can help protect a significant home asset and provide a financial floor when the unexpected happens.",

        'primary_label'   => 'See How Protection Works',
        'primary_url'     => '#property-protection',

        'secondary_label' => 'Explore Property Insurance',
        'secondary_url'   => '#property-insurance',

        'image'         => 'https://images.unsplash.com/photo-1485081669829-bacb8c7bb1f3?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Residential building at night',

        'category'      => 'PROTECTION',
        'category_icon' => 'protection',
    ],

];

$total_slides = count($property_hero_slides);
?>


<!-- =========================================================
     PROPERTY INSURANCE HERO
     ========================================================= -->

<section
    class="insurance-hero propertyinsurancehero"
    id="property-insurance-hero"
    aria-label="Property Insurance"
>

    <!-- =====================================================
         SLIDER CONTAINER
         ===================================================== -->

    <div class="propertyinsurancehero-slider-container">


        <!-- =================================================
             SLIDES
             ================================================= -->

        <?php foreach ($property_hero_slides as $index => $slide) : ?>

            <article
                class="propertyinsurancehero-slide <?php echo $index === 0 ? 'active' : ''; ?>"
                data-slide="<?php echo esc_attr($index); ?>"
                data-slide-id="<?php echo esc_attr($slide['id']); ?>"
                aria-hidden="<?php echo $index === 0 ? 'false' : 'true'; ?>"
            >


                <!-- =========================================
                     BACKGROUND IMAGE
                     ========================================= -->

                <div
                    class="propertyinsurancehero-slide-image-wrapper"
                    style="background-image: url('<?php echo esc_url($slide['image']); ?>');"
                    role="img"
                    aria-label="<?php echo esc_attr($slide['image_alt']); ?>"
                ></div>


                <!-- =========================================
                     IMAGE OVERLAY
                     ========================================= -->

                <div class="propertyinsurancehero-slide-image-overlay"></div>


                <!-- =========================================
                     HERO INNER
                     ========================================= -->

                <div class="propertyinsurancehero-inner">


                    <!-- =====================================
                         CONTENT
                         ===================================== -->

                    <div class="propertyinsurancehero-slide-content">


                        <!-- =================================
                             EYEBROW
                             ================================= -->

                        <div class="propertyinsurancehero-slide-eyebrow">

                            <span
                                class="propertyinsurancehero-eyebrow-dot"
                                aria-hidden="true"
                            ></span>

                            <?php echo esc_html($slide['eyebrow']); ?>

                        </div>


                        <!-- =================================
                             TAG
                             ================================= -->

                        <span class="propertyinsurancehero-slide-tag">
                            <?php echo esc_html($slide['tag']); ?>
                        </span>


                        <!-- =================================
                             TITLE
                             ================================= -->

                        <h1 class="propertyinsurancehero-slide-title">

                            <?php echo esc_html($slide['title']); ?>

                            <span>
                                <?php echo esc_html($slide['title_accent']); ?>
                            </span>

                        </h1>


                        <!-- =================================
                             DESCRIPTION
                             ================================= -->

                        <p class="propertyinsurancehero-slide-desc">
                            <?php echo esc_html($slide['description']); ?>
                        </p>


                        <!-- =================================
                             ACTIONS
                             ================================= -->

                        <div class="propertyinsurancehero-actions">

                            <a
                                href="<?php echo esc_url($slide['primary_url']); ?>"
                                class="propertyinsurancehero-btn propertyinsurancehero-btn--primary"
                            >

                                <?php echo esc_html($slide['primary_label']); ?>

                                <span aria-hidden="true">↗</span>

                            </a>


                            <a
                                href="<?php echo esc_url($slide['secondary_url']); ?>"
                                class="propertyinsurancehero-btn propertyinsurancehero-btn--secondary"
                            >

                                <?php echo esc_html($slide['secondary_label']); ?>

                                <span aria-hidden="true">→</span>

                            </a>

                        </div>


                    </div>

                </div>

            </article>

        <?php endforeach; ?>


        <!-- =================================================
             PREVIOUS
             ================================================= -->

        <button
            type="button"
            class="propertyinsurancehero-arrow propertyinsurancehero-arrow--prev"
            aria-label="Previous property insurance slide"
        >
            ←
        </button>


        <!-- =================================================
             NEXT
             ================================================= -->

        <button
            type="button"
            class="propertyinsurancehero-arrow propertyinsurancehero-arrow--next"
            aria-label="Next property insurance slide"
        >
            →
        </button>


        <!-- =================================================
             SLIDER DOTS
             ================================================= -->

        <div
            class="propertyinsurancehero-slider-dots"
            role="tablist"
            aria-label="Property Insurance slides"
        >

            <?php foreach ($property_hero_slides as $index => $slide) : ?>

                <button
                    type="button"
                    class="propertyinsurancehero-slider-dot <?php echo $index === 0 ? 'active' : ''; ?>"
                    data-slide-to="<?php echo esc_attr($index); ?>"
                    role="tab"
                    aria-label="Go to slide <?php echo esc_attr($index + 1); ?>"
                    aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                ></button>

            <?php endforeach; ?>

        </div>


    </div>

</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {

    const hero = document.querySelector(
        ".propertyinsurancehero"
    );

    if (!hero) {
        return;
    }


    // =====================================================
    // ELEMENTS
    // =====================================================

    const slides = Array.from(
        hero.querySelectorAll(".propertyinsurancehero-slide")
    );

    const dots = Array.from(
        hero.querySelectorAll(".propertyinsurancehero-slider-dot")
    );

    const categories = Array.from(
        hero.querySelectorAll(".propertyinsurancehero-category")
    );

    const previousButton = hero.querySelector(
        ".propertyinsurancehero-arrow--prev"
    );

    const nextButton = hero.querySelector(
        ".propertyinsurancehero-arrow--next"
    );


    // =====================================================
    // CONFIGURATION
    // =====================================================

    const AUTO_PLAY_TIME = 7000;

    let currentSlide = 0;

    let autoPlayTimer = null;

    let isPaused = false;


    // =====================================================
    // SAFETY
    // =====================================================

    if (!slides.length) {
        return;
    }


    // =====================================================
    // SHOW SLIDE
    // =====================================================

    function showSlide(index) {

        if (index < 0) {
            index = slides.length - 1;
        }

        if (index >= slides.length) {
            index = 0;
        }


        currentSlide = index;


        // -----------------------------------------------
        // Slides
        // -----------------------------------------------

        slides.forEach(function (slide, slideIndex) {

            const isActive =
                slideIndex === currentSlide;


            slide.classList.toggle(
                "active",
                isActive
            );


            slide.setAttribute(
                "aria-hidden",
                isActive ? "false" : "true"
            );
        });


        // -----------------------------------------------
        // Dots
        // -----------------------------------------------

        dots.forEach(function (dot, dotIndex) {

            const isActive =
                dotIndex === currentSlide;


            dot.classList.toggle(
                "active",
                isActive
            );


            dot.setAttribute(
                "aria-selected",
                isActive ? "true" : "false"
            );
        });


        // -----------------------------------------------
        // Categories
        // -----------------------------------------------

        categories.forEach(function (
            category,
            categoryIndex
        ) {

            category.classList.toggle(
                "active",
                categoryIndex === currentSlide
            );
        });
    }


    // =====================================================
    // NEXT SLIDE
    // =====================================================

    function nextSlide() {

        showSlide(currentSlide + 1);
    }


    // =====================================================
    // PREVIOUS SLIDE
    // =====================================================

    function previousSlide() {

        showSlide(currentSlide - 1);
    }


    // =====================================================
    // AUTOPLAY
    // =====================================================

    function startAutoPlay() {

        stopAutoPlay();


        if (isPaused) {
            return;
        }


        autoPlayTimer = setInterval(
            function () {

                nextSlide();

            },
            AUTO_PLAY_TIME
        );
    }


    // =====================================================
    // STOP AUTOPLAY
    // =====================================================

    function stopAutoPlay() {

        if (autoPlayTimer) {

            clearInterval(autoPlayTimer);

            autoPlayTimer = null;
        }
    }


    // =====================================================
    // RESTART AUTOPLAY
    // =====================================================

    function restartAutoPlay() {

        stopAutoPlay();

        startAutoPlay();
    }


    // =====================================================
    // NEXT BUTTON
    // =====================================================

    if (nextButton) {

        nextButton.addEventListener(
            "click",
            function () {

                nextSlide();

                restartAutoPlay();
            }
        );
    }


    // =====================================================
    // PREVIOUS BUTTON
    // =====================================================

    if (previousButton) {

        previousButton.addEventListener(
            "click",
            function () {

                previousSlide();

                restartAutoPlay();
            }
        );
    }


    // =====================================================
    // DOT NAVIGATION
    // =====================================================

    dots.forEach(function (dot) {

        dot.addEventListener(
            "click",
            function () {

                const targetIndex =
                    parseInt(
                        dot.dataset.slideTo,
                        10
                    );


                if (
                    Number.isNaN(targetIndex)
                ) {
                    return;
                }


                showSlide(targetIndex);

                restartAutoPlay();
            }
        );
    });


    // =====================================================
    // CATEGORY NAVIGATION
    // =====================================================

    categories.forEach(function (category) {

        category.addEventListener(
            "click",
            function (event) {

                const targetIndex =
                    parseInt(
                        category.dataset.category,
                        10
                    );


                if (
                    Number.isNaN(targetIndex)
                ) {
                    return;
                }


                event.preventDefault();


                showSlide(targetIndex);

                restartAutoPlay();
            }
        );
    });


    // =====================================================
    // PAUSE ON HOVER
    // =====================================================

    hero.addEventListener(
        "mouseenter",
        function () {

            isPaused = true;

            stopAutoPlay();
        }
    );


    hero.addEventListener(
        "mouseleave",
        function () {

            isPaused = false;

            startAutoPlay();
        }
    );


    // =====================================================
    // KEYBOARD NAVIGATION
    // =====================================================

    hero.addEventListener(
        "keydown",
        function (event) {

            if (event.key === "ArrowRight") {

                event.preventDefault();

                nextSlide();

                restartAutoPlay();
            }


            if (event.key === "ArrowLeft") {

                event.preventDefault();

                previousSlide();

                restartAutoPlay();
            }
        }
    );


    // =====================================================
    // TOUCH / SWIPE
    // =====================================================

    let touchStartX = 0;

    let touchEndX = 0;


    hero.addEventListener(
        "touchstart",
        function (event) {

            touchStartX =
                event.changedTouches[0].screenX;

        },
        {
            passive: true
        }
    );


    hero.addEventListener(
        "touchend",
        function (event) {

            touchEndX =
                event.changedTouches[0].screenX;


            handleSwipe();
        },
        {
            passive: true
        }
    );


    function handleSwipe() {

        const swipeDistance =
            touchEndX - touchStartX;


        const minimumSwipeDistance = 50;


        if (
            Math.abs(swipeDistance) <
            minimumSwipeDistance
        ) {
            return;
        }


        if (swipeDistance < 0) {

            nextSlide();

        } else {

            previousSlide();
        }


        restartAutoPlay();
    }


    // =====================================================
    // PAUSE WHEN TAB IS HIDDEN
    // =====================================================

    document.addEventListener(
        "visibilitychange",
        function () {

            if (
                document.hidden
            ) {

                stopAutoPlay();

            } else {

                startAutoPlay();
            }
        }
    );


    // =====================================================
    // INITIALIZE
    // =====================================================

    showSlide(0);

    startAutoPlay();

});
</script>