<?php
/**
 * =========================================================
 * VIMA VIDYA
 * MOTOR INSURANCE — HERO SLIDER
 * =========================================================
 *
 * 4 Storytelling Slides
 * 01 — Daily Life & Protection
 * 02 — Road Accident Deaths (2024 Data)
 * 03 — Registered Vehicles on Indian Roads
 * 04 — Peak Earning Age Group Impact
 *
 * =========================================================
 */



/**
 * =========================================================
 * MOTOR INSURANCE HERO DATA
 * =========================================================
 */

$motor_hero_slides = [

    // =====================================================
    // SLIDE 01
    // =====================================================

    [
        'id'            => 'motor-vehicle-life',
        'eyebrow'       => 'MOTOR INSURANCE',
        'tag'           => 'YOUR VEHICLE PROTECTS YOUR DAILY LIFE',

        'title'         => 'Your Vehicle Protects Your Daily Life —',
        'title_accent'  => 'Until The Road Tests It.',

        'description'   => "For most Indians, a vehicle isn't a luxury — it’s how they work, earn, care for family, and stay connected. Yet motor insurance is often bought only to meet a legal requirement, not to truly protect what’s at risk. Most people believe “my policy will handle it.” But accidents are unpredictable — and inadequate cover shows up only after the damage is done. Motor insurance pays when your vehicle is damaged, when others are injured, or when legal and repair costs threaten your savings. It’s the protection many realise the value of only after the road tests it.",

        'primary_label'   => 'Start Here',
        'primary_url'     => '#motor-start',

        'secondary_label' => 'It Takes 3 Minutes',
        'secondary_url'   => '#motor-quick-start',

        'image'         => 'https://images.unsplash.com/photo-1506015391300-4802dc74de2e?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Vehicle driving on Indian roadway',

        'category'      => 'AWARENESS',
        'category_icon' => 'awareness',
    ],


    // =====================================================
    // SLIDE 02
    // =====================================================

    [
        'id'            => 'motor-fatalities',
        'eyebrow'       => 'UNDERSTANDING THE RISK',
        'tag'           => '1.77 LAKH+ ROAD ACCIDENT DEATHS IN INDIA (2024)',

        'title'         => 'Road Accidents Are a Daily Reality,',
        'title_accent'  => 'Not Rare Events.',

        'description'   => "Road accidents are a daily reality, not rare events. Every journey carries risk — even the familiar ones. Motor Insurance exists for roads that don’t forgive mistakes.",

        'primary_label'   => 'Understand the Risk',
        'primary_url'     => '#motor-risks',

        'secondary_label' => 'Explore Accident Statistics',
        'secondary_url'   => '#accident-stats',

        'image'         => 'https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Busy highway traffic in India',

        'category'      => 'RISK AWARENESS',
        'category_icon' => 'risk',
    ],


    // =====================================================
    // SLIDE 03
    // =====================================================

    [
        'id'            => 'motor-congestion',
        'eyebrow'       => 'SHARED ROAD REALITIES',
        'tag'           => '30 CRORE+ REGISTERED VEHICLES ON INDIAN ROADS',

        'title'         => 'More Vehicles Mean More Congestion,',
        'title_accent'  => 'Interaction, and Probability.',

        'description'   => "More vehicles mean more congestion, more interaction, and higher probability of incidents. Motor Insurance prepares you for shared road realities.",

        'primary_label'   => 'Understand the Risk',
        'primary_url'     => '#motor-congestion-risk',

        'secondary_label' => 'Explore Road Density',
        'secondary_url'   => '#vehicle-density',

        'image'         => 'https://images.unsplash.com/photo-1563720223185-11003d516935?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Heavy traffic congestion on urban road',

        'category'      => 'DENSITY',
        'category_icon' => 'density',
    ],


    // =====================================================
    // SLIDE 04
    // =====================================================

    [
        'id'            => 'motor-demographic',
        'eyebrow'       => 'FAMILY STABILITY & PROTECTION',
        'tag'           => '18–45 YEARS • MOST AFFECTED EARNING AGE GROUP',

        'title'         => 'Accidents Strike Hardest',
        'title_accent'  => 'During Peak Earning Years.',

        'description'   => "Accidents strike hardest during peak earning years, when income, EMIs, and dependents are closely linked. Motor Insurance helps prevent one incident from disrupting family stability.",

        'primary_label'   => 'Understand the Risk',
        'primary_url'     => '#motor-stability',

        'secondary_label' => 'Protect Your Family',
        'secondary_url'   => '#family-protection',

        'image'         => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Young working professional commuting',

        'category'      => 'PROTECTION',
        'category_icon' => 'protection',
    ],

];

$total_slides = count($motor_hero_slides);
?>


<!-- =========================================================
     MOTOR INSURANCE HERO
     ========================================================= -->

<section
    class="insurance-hero motorinsurancehero"
    id="motor-insurance-hero"
    aria-label="Motor Insurance"
>

    <!-- =====================================================
         SLIDER CONTAINER
         ===================================================== -->

    <div class="motorinsurancehero-slider-container">


        <!-- =================================================
             SLIDES
             ================================================= -->

        <?php foreach ($motor_hero_slides as $index => $slide) : ?>

            <article
                class="motorinsurancehero-slide <?php echo $index === 0 ? 'active' : ''; ?>"
                data-slide="<?php echo esc_attr($index); ?>"
                data-slide-id="<?php echo esc_attr($slide['id']); ?>"
                aria-hidden="<?php echo $index === 0 ? 'false' : 'true'; ?>"
            >


                <!-- =========================================
                     BACKGROUND IMAGE
                     ========================================= -->

                <div
                    class="motorinsurancehero-slide-image-wrapper"
                    style="background-image: url('<?php echo esc_url($slide['image']); ?>');"
                    role="img"
                    aria-label="<?php echo esc_attr($slide['image_alt']); ?>"
                ></div>


                <!-- =========================================
                     IMAGE OVERLAY
                     ========================================= -->

                <div class="motorinsurancehero-slide-image-overlay"></div>


                <!-- =========================================
                     HERO INNER
                     ========================================= -->

                <div class="motorinsurancehero-inner">


                    <!-- =====================================
                         CONTENT
                         ===================================== -->

                    <div class="motorinsurancehero-slide-content">


                        <!-- =================================
                             EYEBROW
                             ================================= -->

                        <div class="motorinsurancehero-slide-eyebrow">

                            <span
                                class="motorinsurancehero-eyebrow-dot"
                                aria-hidden="true"
                            ></span>

                            <?php echo esc_html($slide['eyebrow']); ?>

                        </div>


                        <!-- =================================
                             TAG
                             ================================= -->

                        <span class="motorinsurancehero-slide-tag">
                            <?php echo esc_html($slide['tag']); ?>
                        </span>


                        <!-- =================================
                             TITLE
                             ================================= -->

                        <h1 class="motorinsurancehero-slide-title">

                            <?php echo esc_html($slide['title']); ?>

                            <span>
                                <?php echo esc_html($slide['title_accent']); ?>
                            </span>

                        </h1>


                        <!-- =================================
                             DESCRIPTION
                             ================================= -->

                        <p class="motorinsurancehero-slide-desc">
                            <?php echo esc_html($slide['description']); ?>
                        </p>


                        <!-- =================================
                             ACTIONS
                             ================================= -->

                        <div class="motorinsurancehero-actions">

                            <a
                                href="<?php echo esc_url($slide['primary_url']); ?>"
                                class="motorinsurancehero-btn motorinsurancehero-btn--primary"
                            >

                                <?php echo esc_html($slide['primary_label']); ?>

                                <span aria-hidden="true">↗</span>

                            </a>


                            <a
                                href="<?php echo esc_url($slide['secondary_url']); ?>"
                                class="motorinsurancehero-btn motorinsurancehero-btn--secondary"
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
            class="motorinsurancehero-arrow motorinsurancehero-arrow--prev"
            aria-label="Previous motor insurance slide"
        >
            ←
        </button>


        <!-- =================================================
             NEXT
             ================================================= -->

        <button
            type="button"
            class="motorinsurancehero-arrow motorinsurancehero-arrow--next"
            aria-label="Next motor insurance slide"
        >
            →
        </button>


        <!-- =================================================
             SLIDER DOTS
             ================================================= -->

        <div
            class="motorinsurancehero-slider-dots"
            role="tablist"
            aria-label="Motor Insurance slides"
        >

            <?php foreach ($motor_hero_slides as $index => $slide) : ?>

                <button
                    type="button"
                    class="motorinsurancehero-slider-dot <?php echo $index === 0 ? 'active' : ''; ?>"
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
        ".motorinsurancehero"
    );

    if (!hero) {
        return;
    }


    // =====================================================
    // ELEMENTS
    // =====================================================

    const slides = Array.from(
        hero.querySelectorAll(".motorinsurancehero-slide")
    );

    const dots = Array.from(
        hero.querySelectorAll(".motorinsurancehero-slider-dot")
    );

    const categories = Array.from(
        hero.querySelectorAll(".motorinsurancehero-category")
    );

    const previousButton = hero.querySelector(
        ".motorinsurancehero-arrow--prev"
    );

    const nextButton = hero.querySelector(
        ".motorinsurancehero-arrow--next"
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