<?php
/**
 * =========================================================
 * VIMA VIDYA
 * WHAT IS INSURANCE — STORY HERO SLIDER
 * =========================================================
 */

/*
 * Content adapted from the Vima Vidya Insurance Puzzle page.
 *
 * 7 slides:
 * 01 Life Insurance
 * 02 Health Insurance
 * 03 Personal Accident Insurance
 * 04 Motor Insurance
 * 05 Property & Home Insurance
 * 06 Life Insurance — Family
 * 07 Closing / Why Insurance Matters
 */

$insurance_hero_slides = [

    // =====================================================
    // SLIDE 01 — LIFE INSURANCE
    // =====================================================

    [
        'number' => '01',

        'category' => 'LIFE INSURANCE',
        'short' => 'Life',

        'title_dark' => 'Arjun woke up',
        'title_blue' => 'to a letter that<br>changed everything',

        'person' => 'Arjun · Software Engineer · Mumbai',

        'description' =>
            'A cardiac episode at 38 left him unable to work for eight months. His critical illness rider released ₹25 lakh — clearing his EMIs, covering school fees, and keeping his savings untouched.',

        'bottom_text' =>
            'Life insurance is not only about what happens after you are gone. It protects the obligations you carry.',

        'image' =>
            'https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=1800&auto=format&fit=crop',

        'risk_label' => 'THE RISK',

        'risk_title' =>
            'Income — interrupted without warning',

        'risk_text' =>
            'A single health event can suspend a salary for months — or permanently. The financial obligations remain.',

        'stat' => '₹1 Cr',

        'stat_text' =>
            'Cover available from approximately ₹700/month for a healthy 30-year-old',

        'primary_text' => 'Explore Life Cover',
        'primary_url' => '#life-insurance',

        'secondary_text' => 'Find Your Stage',
        'secondary_url' => '#insurance-types',
    ],


    // =====================================================
    // SLIDE 02 — HEALTH INSURANCE
    // =====================================================

    [
        'number' => '02',

        'category' => 'HEALTH INSURANCE',
        'short' => 'Health',

        'title_dark' => 'A diagnosis at midnight',
        'title_blue' => '— and a bill that<br>nobody had anticipated',

        'person' => 'Priya · Teacher · Bengaluru',

        'description' =>
            'Her son collapsed during a school match. Emergency surgery. A ₹4.8 lakh bill followed. The family floater settled ₹4.6 lakh cashlessly — and Priya went home with both her son and her savings intact.',

        'bottom_text' =>
            'The right health policy can transform a potential financial crisis into a manageable event.',

        'image' =>
            'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=1800&auto=format&fit=crop',

        'risk_label' => 'THE RISK',

        'risk_title' =>
            'Medical emergencies are indifferent to timing',

        'risk_text' =>
            'Illness does not wait for a convenient moment — or a sufficient bank balance.',

        'stat' => '14%',

        'stat_text' =>
            'Annual increase in Indian medical costs — consistently outpacing salary growth',

        'primary_text' => 'Explore Health Cover',
        'primary_url' => '#health-insurance',

        'secondary_text' => 'Cover Your Family',
        'secondary_url' => '#insurance-types',
    ],


    // =====================================================
    // SLIDE 03 — PERSONAL ACCIDENT
    // =====================================================

    [
        'number' => '03',

        'category' => 'PERSONAL ACCIDENT INSURANCE',
        'short' => 'Accident',

        'title_dark' => "Rahul's Tuesday commute",
        'title_blue' => 'became<br>six months of uncertainty',

        'person' => 'Rahul · Sales Manager · Pune',

        'description' =>
            'A fractured leg. Six months bedridden, commission gone. His personal accident policy released ₹3.6 lakh as a disability benefit — rent covered, family provided for. He recovered without financial collapse.',

        'bottom_text' =>
            'Personal accident cover addresses the income lost while you recover — at home, at work, or anywhere in the world.',

        'image' =>
            'https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=1800&auto=format&fit=crop',

        'risk_label' => 'THE RISK',

        'risk_title' =>
            'Disability suspends income — commitments do not pause',

        'risk_text' =>
            'An accident can interrupt earnings for weeks, months, or permanently. Financial obligations rarely wait.',

        'stat' => '24/7',

        'stat_text' =>
            'Continuous worldwide protection — at home, at work, and at leisure',

        'primary_text' => 'Explore PA Cover',
        'primary_url' => '#personal-accident',

        'secondary_text' => 'Protect Your Income',
        'secondary_url' => '#risk-management',
    ],


    // =====================================================
    // SLIDE 04 — MOTOR
    // =====================================================

    [
        'number' => '04',

        'category' => 'MOTOR INSURANCE',
        'short' => 'Motor',

        'title_dark' => 'One wet evening.',
        'title_blue' => 'One intersection.<br>One ₹12 lakh claim.',

        'person' => 'Deepak · Entrepreneur · Delhi',

        'description' =>
            'Rear-ended by a truck. His car totalled, a pedestrian injured. The third-party claim reached ₹12 lakh. His comprehensive motor policy absorbed it entirely.',

        'bottom_text' =>
            'Motor insurance is a legal requirement — and considerably more. Comprehensive cover protects your vehicle, your finances, and the people around you.',

        'image' =>
            'https://images.unsplash.com/photo-1502877338535-766e1452684a?q=80&w=1800&auto=format&fit=crop',

        'risk_label' => 'THE RISK',

        'risk_title' =>
            'Third-party liability — no upper limit',

        'risk_text' =>
            'Courts may award substantial amounts for death or permanent disability attributed to your vehicle.',

        'stat' => '₹∞',

        'stat_text' =>
            'Uncapped third-party exposure — comprehensive cover is a prudent choice',

        'primary_text' => 'Explore Motor Cover',
        'primary_url' => '#motor-insurance',

        'secondary_text' => 'Stay Road-Ready',
        'secondary_url' => '#risk-management',
    ],


    // =====================================================
    // SLIDE 05 — PROPERTY & HOME
    // =====================================================

    [
        'number' => '05',

        'category' => 'PROPERTY & HOME INSURANCE',
        'short' => 'Property',

        'title_dark' => 'The cyclone lasted',
        'title_blue' => 'four hours.<br>The damage took four years.',

        'person' => 'Sunita & Ravi · Homeowners · Chennai',

        'description' =>
            'Cyclone Michaung. Roof gone. Ground floor flooded. Loss: ₹8.2 lakh. Their home policy settled ₹7.4 lakh — covering structure, contents, and temporary accommodation.',

        'bottom_text' =>
            'Your home is likely your most significant asset. Fire, flood, earthquake, or theft can cause irreversible damage overnight.',

        'image' =>
            'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1800&auto=format&fit=crop',

        'risk_label' => 'THE RISK',

        'risk_title' =>
            'Natural events arrive without notice',

        'risk_text' =>
            'Every Indian state is exposed to cyclones, floods, fires, or earthquakes — in some form, every year.',

        'stat' => '3%',

        'stat_text' =>
            'Of Indian homes carry insurance cover — leaving the vast majority without a financial safety net',

        'primary_text' => 'Explore Home Cover',
        'primary_url' => '#property-insurance',

        'secondary_text' => 'Protect Your Asset',
        'secondary_url' => '#risk-management',
    ],


    // =====================================================
    // SLIDE 06 — LIFE / FAMILY
    // =====================================================

    [
        'number' => '06',

        'category' => 'LIFE INSURANCE · FAMILY',
        'short' => 'Family',

        'title_dark' => 'Meera had not expected',
        'title_blue' => 'to find herself<br>on her own at 36',

        'person' => 'Meera · Homemaker · Hyderabad',

        'description' =>
            'Vikram passed away in a road accident. The ₹1 crore term policy she had considered unnecessary was settled within 15 days. The home loan was cleared, her daughters’ education secured, and a small business begun.',

        'bottom_text' =>
            'A modest monthly outlay can provide decades of meaningful protection for everyone who depends on you.',

        'image' =>
            'https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1800&auto=format&fit=crop',

        'risk_label' => 'THE RISK',

        'risk_title' =>
            'The unexpected — at any stage of life',

        'risk_text' =>
            'Nobody anticipates leaving too soon. Those who plan ahead leave something that genuinely endures.',

        'stat' => '15 days',

        'stat_text' =>
            'Average term life claim settlement — available when families need it most',

        'primary_text' => 'Protect Your Family',
        'primary_url' => '#life-insurance',

        'secondary_text' => 'At Your Life Stage',
        'secondary_url' => '#insurance-types',
    ],


    // =====================================================
    // SLIDE 07 — CLOSING
    // =====================================================

    [
        'number' => '07',

        'category' => 'WHY INSURANCE MATTERS',
        'short' => 'Be Prepared',

        'title_dark' => 'There is rarely a convenient moment',
        'title_blue' => 'to discover why insurance matters.',

        'person' => 'Life · Health · Accident · Motor · Home',

        'description' =>
            'The people in these stories did not anticipate what happened. Their insurance did.',

        'bottom_text' =>
            'Five areas of risk. Five considered responses. One decision, made thoughtfully today.',

        'image' =>
            'https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1800&auto=format&fit=crop',

        'risk_label' => 'THE BIGGER PICTURE',

        'risk_title' =>
            'Understand your risks before they become financial shocks',

        'risk_text' =>
            'Insurance is about preparing for uncertainty — protecting income, health, family, vehicles, homes and the future.',

        'stat' => '5',

        'stat_text' =>
            'Key areas of risk — Life, Health, Accident, Motor and Home',

        'primary_text' => 'Explore Insurance',
        'primary_url' => '#insurance-types',

        'secondary_text' => 'Understand Risk',
        'secondary_url' => '#risk-management',
    ],

];

?>

<section
    class="insurance-story-hero"
    id="insurance-story-hero"
    aria-label="Insurance stories"
>

    <!-- =====================================================
         SLIDER
    ====================================================== -->

    <div class="insurance-story-hero__slider">

        <?php foreach ($insurance_hero_slides as $index => $slide) : ?>

            <article
                class="insurance-story-hero__slide <?php echo $index === 0 ? 'is-active' : ''; ?>"
                data-slide="<?php echo esc_attr($index); ?>"
            >

                <!-- =========================================
                     BACKGROUND IMAGE
                ========================================== -->

                <div
                    class="insurance-story-hero__image"
                    style="background-image:url('<?php echo esc_url($slide['image']); ?>');"
                ></div>


                <!-- =========================================
                     IMAGE OVERLAY
                ========================================== -->

                <div class="insurance-story-hero__overlay"></div>


                <!-- =========================================
                     MAIN CONTENT
                ========================================== -->

                <div class="insurance-story-hero__container">

                    <div class="insurance-story-hero__content">

                        <!-- CATEGORY -->

                        <div class="insurance-story-hero__category">

                            <span></span>

                            <?php echo esc_html($slide['category']); ?>

                        </div>


                        <!-- TITLE -->

                        <h1 class="insurance-story-hero__title">

                            <span class="title-dark">
                                <?php echo wp_kses_post($slide['title_dark']); ?>
                            </span>

                            <span class="title-blue">
                                <?php echo wp_kses_post($slide['title_blue']); ?>
                            </span>

                        </h1>


                        <!-- PERSON -->

                        <div class="insurance-story-hero__person">

                            <?php echo esc_html($slide['person']); ?>

                        </div>


                        <!-- DESCRIPTION -->

                        <p class="insurance-story-hero__description">

                            <?php echo esc_html($slide['description']); ?>

                        </p>


                        <!-- ACTIONS -->

                        <div class="insurance-story-hero__actions">

                            <a
                                href="<?php echo esc_url($slide['primary_url']); ?>"
                                class="insurance-story-hero__button insurance-story-hero__button--primary"
                            >

                                <?php echo esc_html($slide['primary_text']); ?>

                                <span>↗</span>

                            </a>


                            <a
                                href="<?php echo esc_url($slide['secondary_url']); ?>"
                                class="insurance-story-hero__button insurance-story-hero__button--secondary"
                            >

                                <?php echo esc_html($slide['secondary_text']); ?>

                            </a>

                        </div>

                    </div>


                    <!-- =====================================
                         RIGHT INFORMATION PANEL
                    ====================================== -->

                    <div class="insurance-story-hero__panel">

                        <div class="insurance-story-hero__panel-card">

                            <span class="panel-label">
                                <?php echo esc_html($slide['risk_label']); ?>
                            </span>

                            <h2>
                                <?php echo esc_html($slide['risk_title']); ?>
                            </h2>

                            <p>
                                <?php echo esc_html($slide['risk_text']); ?>
                            </p>

                        </div>


                        <div class="insurance-story-hero__panel-card insurance-story-hero__panel-card--stat">

                            <strong>
                                <?php echo esc_html($slide['stat']); ?>
                            </strong>

                            <p>
                                <?php echo esc_html($slide['stat_text']); ?>
                            </p>

                        </div>


                        <div class="insurance-story-hero__panel-note">

                            <?php echo esc_html($slide['bottom_text']); ?>

                        </div>

                    </div>

                </div>

            </article>

        <?php endforeach; ?>


        <!-- ===============================================
             PREVIOUS BUTTON
        ================================================ -->

        <button
            type="button"
            class="insurance-story-hero__arrow insurance-story-hero__arrow--prev"
            aria-label="Previous story"
        >
            ←
        </button>


        <!-- ===============================================
             NEXT BUTTON
        ================================================ -->

        <button
            type="button"
            class="insurance-story-hero__arrow insurance-story-hero__arrow--next"
            aria-label="Next story"
        >
            →
        </button>


        <!-- ===============================================
             TOP SLIDE COUNTER
        ================================================ -->

        <div class="insurance-story-hero__counter">

            <strong>01</strong>

            <span></span>

            <em>07</em>

        </div>


        <!-- ===============================================
             BOTTOM DOTS
        ================================================ -->

        <div class="insurance-story-hero__dots">

            <?php foreach ($insurance_hero_slides as $index => $slide) : ?>

                <button
                    type="button"
                    class="insurance-story-hero__dot <?php echo $index === 0 ? 'is-active' : ''; ?>"
                    data-slide-to="<?php echo esc_attr($index); ?>"
                    aria-label="Go to slide <?php echo esc_attr($index + 1); ?>"
                ></button>

            <?php endforeach; ?>

        </div>

    </div>

</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {

    const slider = document.querySelector(
        ".insurance-story-hero"
    );

    if (!slider) {
        return;
    }


    const slides = slider.querySelectorAll(
        ".insurance-story-hero__slide"
    );

    const dots = slider.querySelectorAll(
        ".insurance-story-hero__dot"
    );

    const prevButton = slider.querySelector(
        ".insurance-story-hero__arrow--prev"
    );

    const nextButton = slider.querySelector(
        ".insurance-story-hero__arrow--next"
    );

    const counterCurrent = slider.querySelector(
        ".insurance-story-hero__counter strong"
    );


    let currentSlide = 0;

    let autoplay = null;

    const totalSlides = slides.length;


    /* =====================================================
       UPDATE SLIDE
    ===================================================== */

    function showSlide(index) {

        if (index < 0) {

            index = totalSlides - 1;

        }

        if (index >= totalSlides) {

            index = 0;

        }


        slides.forEach(function (slide, i) {

            slide.classList.toggle(
                "is-active",
                i === index
            );

        });


        dots.forEach(function (dot, i) {

            dot.classList.toggle(
                "is-active",
                i === index
            );

        });


        if (counterCurrent) {

            counterCurrent.textContent =
                String(index + 1).padStart(2, "0");
        }


        currentSlide = index;
    }


    /* =====================================================
       NEXT
    ===================================================== */

    function nextSlide() {

        showSlide(currentSlide + 1);

        restartAutoplay();
    }


    /* =====================================================
       PREVIOUS
    ===================================================== */

    function previousSlide() {

        showSlide(currentSlide - 1);

        restartAutoplay();
    }


    /* =====================================================
       BUTTONS
    ===================================================== */

    if (nextButton) {

        nextButton.addEventListener(
            "click",
            nextSlide
        );
    }


    if (prevButton) {

        prevButton.addEventListener(
            "click",
            previousSlide
        );
    }


    /* =====================================================
       DOT NAVIGATION
    ===================================================== */

    dots.forEach(function (dot) {

        dot.addEventListener(
            "click",
            function () {

                const index =
                    parseInt(
                        dot.dataset.slideTo,
                        10
                    );

                showSlide(index);

                restartAutoplay();
            }
        );

    });


    /* =====================================================
       AUTOPLAY
    ===================================================== */

    function startAutoplay() {

        autoplay = setInterval(
            function () {

                showSlide(
                    currentSlide + 1
                );

            },
            7000
        );
    }


    function restartAutoplay() {

        clearInterval(autoplay);

        startAutoplay();
    }


    /* =====================================================
       PAUSE ON HOVER
    ===================================================== */

    slider.addEventListener(
        "mouseenter",
        function () {

            clearInterval(autoplay);
        }
    );


    slider.addEventListener(
        "mouseleave",
        function () {

            startAutoplay();
        }
    );


    /* =====================================================
       KEYBOARD
    ===================================================== */

    document.addEventListener(
        "keydown",
        function (event) {

            if (
                event.key === "ArrowRight"
            ) {

                nextSlide();
            }


            if (
                event.key === "ArrowLeft"
            ) {

                previousSlide();
            }

        }
    );


    /* =====================================================
       TOUCH / SWIPE
    ===================================================== */

    let touchStartX = 0;

    let touchEndX = 0;


    slider.addEventListener(
        "touchstart",
        function (event) {

            touchStartX =
                event.changedTouches[0].screenX;

        },
        {
            passive: true
        }
    );


    slider.addEventListener(
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

        const distance =
            touchEndX - touchStartX;


        if (Math.abs(distance) < 50) {

            return;
        }


        if (distance < 0) {

            nextSlide();

        } else {

            previousSlide();
        }
    }


    /* =====================================================
       INITIALIZE
    ===================================================== */

    showSlide(0);

    startAutoplay();

});
</script>