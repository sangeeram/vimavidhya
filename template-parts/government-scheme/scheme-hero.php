<?php
/**
 * =========================================================
 * VIMA VIDYA
 * GOVERNMENT SCHEMES — HERO SLIDER
 * =========================================================
 *
 * 11 Storytelling Slides
 * 01 — PMSBY (Personal Accident)
 * 02 — PMJJBY (Life Insurance)
 * 03 — PMFBY (Crop Insurance)
 * 04 — PMJAY / Ayushman Bharat (Free Health Insurance)
 * 05 — Arogya Sanjeevani (Cashless Health Insurance)
 * 06 — Bharat Yatra Suraksha (Domestic Travel Insurance)
 * 07 — Hit & Run Scheme (Motor Accident Compensation)
 * 08 — PM RAHAT (Golden Hour Emergency Care)
 * 09 — AABY (Unorganised Sector)
 * 10 — Atal Pension Yojana (Guaranteed Pension)
 * 11 — Saral Jeevan Bima (Standard Term Life Insurance)
 *
 * =========================================================
 */

/**
 * =========================================================
 * GOVERNMENT SCHEMES HERO DATA
 * =========================================================
 */

$gov_hero_slides = [

    // =====================================================
    // SLIDE 01
    // =====================================================
    [
        'id'            => 'scheme-pmsby',
        'eyebrow'       => 'PERSONAL ACCIDENT',
        'tag'           => 'SCHEME 1 — PMSBY (PRADHAN MANTRI SURAKSHA BIMA YOJANA)',

        'title'         => 'Your Life Is Worth',
        'title_accent'  => 'More Than ₹20.',

        'description'   => "If an accident kills or permanently disables you, your family gets ₹2 lakh. Annual Premium: ₹20 · Auto-debited from your bank account. Eligibility: Age 18–70 with a savings bank account. Enrol at your bank or jansuraksha.gov.in",

        'primary_label'   => 'Enrol at Jansuraksha',
        'primary_url'     => 'https://www.jansuraksha.gov.in',

        'secondary_label' => 'Check Eligibility',
        'secondary_url'   => '#pmsby-eligibility',

        'image'         => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Indian worker smiling',

        'category'      => 'ACCIDENT',
        'category_icon' => 'shield',
    ],

    // =====================================================
    // SLIDE 02
    // =====================================================
    [
        'id'            => 'scheme-pmjjby',
        'eyebrow'       => 'LIFE INSURANCE',
        'tag'           => 'SCHEME 2 — PMJJBY (PRADHAN MANTRI JEEVAN JYOTI BIMA YOJANA)',

        'title'         => 'If Something Happens to You,',
        'title_accent'  => 'Will Your Family Be Okay?',

        'description'   => "PMJJBY covers death from ANY cause — accident, illness, any reason. ₹2 lakh to your family. No medical test. No agent needed. Annual Premium: ₹436 (~₹1.20 a day) - Auto-debited. Eligibility: Age 18–50 with a savings bank account.",

        'primary_label'   => 'Enrol Today',
        'primary_url'     => 'https://www.jansuraksha.gov.in',

        'secondary_label' => 'Learn More',
        'secondary_url'   => '#pmjjby-details',

        'image'         => 'https://images.unsplash.com/photo-1542224566-6e85f2e6772f?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Indian family together',

        'category'      => 'LIFE',
        'category_icon' => 'moon',
    ],

    // =====================================================
    // SLIDE 03
    // =====================================================
    [
        'id'            => 'scheme-pmfby',
        'eyebrow'       => 'CROP INSURANCE',
        'tag'           => 'SCHEME 3 — PMFBY (PRADHAN MANTRI FASAL BIMA YOJANA)',

        'title'         => 'Protecting Farmers',
        'title_accent'  => 'Against Unpredictable Yields.',

        'description'   => "Comprehensive crop insurance scheme supporting farmers against natural risks, pests, and weather anomalies. Ensuring financial stability when weather destroys the harvest.",

        'primary_label'   => 'Explore PMFBY',
        'primary_url'     => 'https://pmfby.gov.in',

        'secondary_label' => 'Calculate Premium',
        'secondary_url'   => '#pmfby-calculator',

        'image'         => 'https://images.unsplash.com/photo-1500937386664-56d1dfef3854?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Farmer in agricultural field',

        'category'      => 'CROP',
        'category_icon' => 'sprout',
    ],

    // =====================================================
    // SLIDE 04
    // =====================================================
    [
        'id'            => 'scheme-pmjay',
        'eyebrow'       => 'FREE HEALTH INSURANCE',
        'tag'           => 'SCHEME 4 — PMJAY / AYUSHMAN BHARAT',

        'title'         => 'A ₹2 Lakh Surgery.',
        'title_accent'  => 'Your Bill: ₹0.',

        'description'   => "₹5 lakh cashless health cover per family — fully government-funded. Surgeries · Cancer · Cardiac · Dialysis · 1,300+ procedures. Pre-existing diseases covered from Day 1. Zero premium. All citizens aged 70+ are automatically eligible.",

        'primary_label'   => 'Check Eligibility',
        'primary_url'     => 'https://beneficiary.nha.gov.in',

        'secondary_label' => 'Helpline: 14555',
        'secondary_url'   => 'tel:14555',

        'image'         => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Modern hospital healthcare',

        'category'      => 'HEALTH',
        'category_icon' => 'hospital',
    ],

    // =====================================================
    // SLIDE 05
    // =====================================================
    [
        'id'            => 'scheme-arogya',
        'eyebrow'       => 'PRIVATE HEALTH',
        'tag'           => 'SCHEME 5 — CASHLESS HEALTH / AROGYA SANJEEVANI',

        'title'         => 'Hospital Bill: ₹85,000.',
        'title_accent'  => 'Your Payment: ₹0.',

        'description'   => "Compare the IRDAI-mandated Arogya Sanjeevani Policy across all insurers. Same terms. Same coverage. Just compare premium and network hospitals. From September 2025: NO GST on individual & family health insurance.",

        'primary_label'   => 'Compare at IRDAI',
        'primary_url'     => 'https://www.irdai.gov.in',

        'secondary_label' => 'File Grievance',
        'secondary_url'   => 'https://bimabharosa.irdai.gov.in',

        'image'         => 'https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Medical professional consulting',

        'category'      => 'PRIVATE',
        'category_icon' => 'card',
    ],

    // =====================================================
    // SLIDE 06
    // =====================================================
    [
        'id'            => 'scheme-yatra',
        'eyebrow'       => 'DOMESTIC TRAVEL',
        'tag'           => 'SCHEME 6 — BHARAT YATRA SURAKSHA',

        'title'         => 'Every Trip Carries Risk.',
        'title_accent'  => 'Are You Covered?',

        'description'   => "Bus · Train · Auto · Airplane · Ship — all modes, all trips. Accidental death cover from ₹1 lakh to ₹1 crore. Coverage starts the moment your journey begins. No waiting period. Typical cost for a 7-day trip: under ₹100.",

        'primary_label'   => 'Explore Travel Cover',
        'primary_url'     => '#travel-protection',

        'secondary_label' => 'View Insurers',
        'secondary_url'   => '#registered-insurers',

        'image'         => 'https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Travel transit station',

        'category'      => 'TRAVEL',
        'category_icon' => 'plane',
    ],

    // =====================================================
    // SLIDE 07
    // =====================================================
    [
        'id'            => 'scheme-hitrun',
        'eyebrow'       => 'MOTOR ACCIDENT',
        'tag'           => 'SCHEME 7 — HIT & RUN SCHEME',

        'title'         => 'Hit by a Vehicle That Fled?',
        'title_accent'  => 'You Still Have Rights.',

        'description'   => "Even if you don't know who hit you — ₹2 lakh for death · ₹50,000 for grievous hurt. Funded by the Motor Vehicle Accident Fund. Administered by the General Insurance Council.",

        'primary_label'   => 'File Claim Online',
        'primary_url'     => 'https://hitandrunclaims.gicouncil.in',

        'secondary_label' => 'Learn Rights',
        'secondary_url'   => '#hit-and-run-info',

        'image'         => 'https://images.unsplash.com/photo-1506015391300-4802dc74de2e?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'City road traffic at dusk',

        'category'      => 'MOTOR',
        'category_icon' => 'car',
    ],

    // =====================================================
    // SLIDE 08
    // =====================================================
    [
        'id'            => 'scheme-rahat',
        'eyebrow'       => 'EMERGENCY CARE',
        'tag'           => 'SCHEME 8 — PM RAHAT / GOLDEN HOUR SCHEME',

        'title'         => 'In a Road Accident?',
        'title_accent'  => 'Treatment Is Free. Immediate.',

        'description'   => "Launched February 14, 2026. ANY road accident victim — driver, passenger, pedestrian, cyclist, foreigner. ₹1.5 lakh cashless treatment · 7 days · 30,000+ hospitals. No FIR needed. Emergency: Call 112",

        'primary_label'   => 'Emergency Call 112',
        'primary_url'     => 'tel:112',

        'secondary_label' => 'Good Samaritan Reward',
        'secondary_url'   => '#good-samaritan',

        'image'         => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Ambulance emergency medical service',

        'category'      => 'EMERGENCY',
        'category_icon' => 'ambulance',
    ],

    // =====================================================
    // SLIDE 09
    // =====================================================
    [
        'id'            => 'scheme-aaby',
        'eyebrow'       => 'UNORGANISED SECTOR',
        'tag'           => 'SCHEME 9 — AAM AADMI BIMA YOJANA (AABY)',

        'title'         => 'No Employer? No Problem.',
        'title_accent'  => 'You Were Always Protected.',

        'description'   => "Life · Accidental Death · Disability · Children's Scholarship. Premium: ₹200/year. Note: No new enrolments post-2017. Today's equivalent: PMJJBY + PMSBY. Existing AABY members: Check with LIC.",

        'primary_label'   => 'Check with LIC',
        'primary_url'     => 'https://www.licindia.in',

        'secondary_label' => 'View Modern Equivalents',
        'secondary_url'   => '#modern-schemes',

        'image'         => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Skilled independent craftsman',

        'category'      => 'WORKFORCE',
        'category_icon' => 'worker',
    ],

    // =====================================================
    // SLIDE 10
    // =====================================================
    [
        'id'            => 'scheme-apy',
        'eyebrow'       => 'PENSION',
        'tag'           => 'SCHEME 10 — ATAL PENSION YOJANA (APY)',

        'title'         => 'Old Age. No Income.',
        'title_accent'  => "That Doesn't Have to Be Your Story.",

        'description'   => "Guaranteed Government Pension for Life. ₹1,000 to ₹5,000 guaranteed every month from age 60. Spouse receives same pension upon death, and full corpus goes to nominee. Start at 18: ₹42/mo. Start at 30: ₹116/mo.",

        'primary_label'   => 'Visit PFRDA',
        'primary_url'     => 'https://www.pfrda.org.in',

        'secondary_label' => 'Helpline: 1800-110-708',
        'secondary_url'   => 'tel:1800110708',

        'image'         => 'https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Peaceful elderly person outdoors',

        'category'      => 'PENSION',
        'category_icon' => 'pension',
    ],

    // =====================================================
    // SLIDE 11
    // =====================================================
    [
        'id'            => 'scheme-saral',
        'eyebrow'       => 'TERM LIFE',
        'tag'           => 'SCHEME 11 — SARAL JEEVAN BIMA',

        'title'         => 'Refused Life Insurance',
        'title_accent'  => 'Because of Your Job?',

        'description'   => "India's Standard Term Life Plan. No occupation restrictions. No education barriers. Available from every life insurer in India with IDENTICAL terms. Sum Assured: ₹5L–₹25L. Free Look: 30 days.",

        'primary_label'   => 'Compare Plans',
        'primary_url'     => 'https://www.irdai.gov.in',

        'secondary_label' => 'Read Guidelines',
        'secondary_url'   => '#saral-guidelines',

        'image'         => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Financial planning consultation',

        'category'      => 'TERM LIFE',
        'category_icon' => 'scroll',
    ],

];

$total_gov_slides = count($gov_hero_slides);
?>

<!-- =========================================================
     GOVERNMENT SCHEMES HERO SECTION
     ========================================================= -->

<section
    class="insurance-hero govschemeshero"
    id="gov-schemes-hero"
    aria-label="Government Welfare Schemes"
>

    <!-- =====================================================
         SLIDER CONTAINER
         ===================================================== -->

    <div class="govschemeshero-slider-container">

        <!-- =================================================
             SLIDES
             ================================================= -->

        <?php foreach ($gov_hero_slides as $index => $slide) : ?>

            <article
                class="govschemeshero-slide <?php echo $index === 0 ? 'active' : ''; ?>"
                data-slide="<?php echo esc_attr($index); ?>"
                data-slide-id="<?php echo esc_attr($slide['id']); ?>"
                aria-hidden="<?php echo $index === 0 ? 'false' : 'true'; ?>"
            >

                <!-- BACKGROUND IMAGE -->
                <div
                    class="govschemeshero-slide-image-wrapper"
                    style="background-image: url('<?php echo esc_url($slide['image']); ?>');"
                    role="img"
                    aria-label="<?php echo esc_attr($slide['image_alt']); ?>"
                ></div>

                <!-- IMAGE OVERLAY -->
                <div class="govschemeshero-slide-image-overlay"></div>

                <!-- HERO INNER -->
                <div class="govschemeshero-inner">

                    <div class="govschemeshero-slide-content">

                        <!-- EYEBROW -->
                        <div class="govschemeshero-slide-eyebrow">
                            <span class="govschemeshero-eyebrow-dot" aria-hidden="true"></span>
                            <?php echo esc_html($slide['eyebrow']); ?>
                        </div>

                        <!-- TAG -->
                        <span class="govschemeshero-slide-tag">
                            <?php echo esc_html($slide['tag']); ?>
                        </span>

                        <!-- TITLE -->
                        <h1 class="govschemeshero-slide-title">
                            <?php echo esc_html($slide['title']); ?>
                            <span>
                                <?php echo esc_html($slide['title_accent']); ?>
                            </span>
                        </h1>

                        <!-- DESCRIPTION -->
                        <p class="govschemeshero-slide-desc">
                            <?php echo esc_html($slide['description']); ?>
                        </p>

                        <!-- ACTIONS -->
                        <div class="govschemeshero-actions">
                            <a
                                href="<?php echo esc_url($slide['primary_url']); ?>"
                                class="govschemeshero-btn govschemeshero-btn--primary"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <?php echo esc_html($slide['primary_label']); ?>
                                <span aria-hidden="true">↗</span>
                            </a>

                            <a
                                href="<?php echo esc_url($slide['secondary_url']); ?>"
                                class="govschemeshero-btn govschemeshero-btn--secondary"
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
             NAVIGATION CONTROLS
             ================================================= -->

        <button
            type="button"
            class="govschemeshero-arrow govschemeshero-arrow--prev"
            aria-label="Previous government scheme slide"
        >
            ←
        </button>

        <button
            type="button"
            class="govschemeshero-arrow govschemeshero-arrow--next"
            aria-label="Next government scheme slide"
        >
            →
        </button>

        <!-- SLIDER DOTS -->
        <div
            class="govschemeshero-slider-dots"
            role="tablist"
            aria-label="Government Schemes slides"
        >
            <?php foreach ($gov_hero_slides as $index => $slide) : ?>
                <button
                    type="button"
                    class="govschemeshero-slider-dot <?php echo $index === 0 ? 'active' : ''; ?>"
                    data-slide-to="<?php echo esc_attr($index); ?>"
                    role="tab"
                    aria-label="Go to slide <?php echo esc_attr($index + 1); ?>"
                    aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                ></button>
            <?php endforeach; ?>
        </div>

    </div>

</section>

<!-- =========================================================
     JAVASCRIPT BEHAVIOR
     ========================================================= -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const hero = document.querySelector(".govschemeshero");
        if (!hero) return;

        const slides = Array.from(hero.querySelectorAll(".govschemeshero-slide"));
        const dots = Array.from(hero.querySelectorAll(".govschemeshero-slider-dot"));
        const previousButton = hero.querySelector(".govschemeshero-arrow--prev");
        const nextButton = hero.querySelector(".govschemeshero-arrow--next");

        const AUTO_PLAY_TIME = 7000;
        let currentSlide = 0;
        let autoPlayTimer = null;
        let isPaused = false;

        if (!slides.length) return;

        function showSlide(index) {
            if (index < 0) index = slides.length - 1;
            if (index >= slides.length) index = 0;
            currentSlide = index;

            slides.forEach(function (slide, slideIndex) {
                const isActive = slideIndex === currentSlide;
                slide.classList.toggle("active", isActive);
                slide.setAttribute("aria-hidden", isActive ? "false" : "true");
            });

            dots.forEach(function (dot, dotIndex) {
                const isActive = dotIndex === currentSlide;
                dot.classList.toggle("active", isActive);
                dot.setAttribute("aria-selected", isActive ? "true" : "false");
            });
        }

        function nextSlide() { showSlide(currentSlide + 1); }
        function previousSlide() { showSlide(currentSlide - 1); }

        function startAutoPlay() {
            stopAutoPlay();
            if (isPaused) return;
            autoPlayTimer = setInterval(nextSlide, AUTO_PLAY_TIME);
        }

        function stopAutoPlay() {
            if (autoPlayTimer) {
                clearInterval(autoPlayTimer);
                autoPlayTimer = null;
            }
        }

        function restartAutoPlay() {
            stopAutoPlay();
            startAutoPlay();
        }

        if (nextButton) {
            nextButton.addEventListener("click", function () {
                nextSlide();
                restartAutoPlay();
            });
        }

        if (previousButton) {
            previousButton.addEventListener("click", function () {
                previousSlide();
                restartAutoPlay();
            });
        }

        dots.forEach(function (dot) {
            dot.addEventListener("click", function () {
                const targetIndex = parseInt(dot.dataset.slideTo, 10);
                if (Number.isNaN(targetIndex)) return;
                showSlide(targetIndex);
                restartAutoPlay();
            });
        });

        hero.addEventListener("mouseenter", function () { isPaused = true; stopAutoPlay(); });
        hero.addEventListener("mouseleave", function () { isPaused = false; startAutoPlay(); });

        hero.addEventListener("keydown", function (event) {
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
        });

        let touchStartX = 0;
        let touchEndX = 0;

        hero.addEventListener("touchstart", function (event) {
            touchStartX = event.changedTouches[0].screenX;
        }, { passive: true });

        hero.addEventListener("touchend", function (event) {
            touchEndX = event.changedTouches[0].screenX;
            const swipeDistance = touchEndX - touchStartX;
            if (Math.abs(swipeDistance) < 50) return;
            if (swipeDistance < 0) nextSlide();
            else previousSlide();
            restartAutoPlay();
        }, { passive: true });

        document.addEventListener("visibilitychange", function () {
            if (document.hidden) stopAutoPlay();
            else startAutoPlay();
        });

        showSlide(0);
        startAutoPlay();
    });
</script>