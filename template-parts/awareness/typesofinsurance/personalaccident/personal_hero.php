<?php
/**
 * =========================================================
 * VIMA VIDYA
 * PERSONAL ACCIDENT INSURANCE — HERO SLIDER
 * =========================================================
 *
 * 5 Storytelling Slides
 * 01 — Main Hero Hook (Car, Home, You)
 * 02 — Road Accidents Risk Stat (4,73,000+)
 * 03 — Deaths from Road Accidents (1,73,000+)
 * 04 — Age Group (18–45)
 * 05 — Entry Cost (₹53/month)
 *
 * =========================================================
 */


/**
 * =========================================================
 * PERSONAL ACCIDENT HERO DATA
 * =========================================================
 */

$pa_hero_slides = [

    // =====================================================
    // SLIDE 01 — MAIN HOOK
    // =====================================================

    [
        'id'            => 'pa-overview',
        'eyebrow'       => 'PERSONAL ACCIDENT INSURANCE',
        'stat_line_1'   => 'You insure your car.',
        'stat_line_2'   => 'You insure your home.',
        'title'         => 'Who insures you?',
        'description'   => "Most Indians have health cover for hospital bills — and nothing for the income that stops when they can't work.PA Insurance pays when an accident leaves you disabled, unable to earn, or gone — and your family is left to manage without you. It's the protection most people remember only after they needed it.",
        'primary_label'   => 'Start here — it takes 3 minutes →',
        'primary_url'     => '#pa-start',
        'secondary_label' => 'Understand PA Insurance',
        'secondary_url'   => '#what-is-pa-insurance',
        'image'         => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Commuter in transit',
    ],


    // =====================================================
    // SLIDE 02 — ROAD ACCIDENTS STAT
    // =====================================================

    [
        'id'            => 'pa-road-risk',
        'eyebrow'       => 'Road accidents in India, 2024',
        'stat'          => '4,73,000+',
        'title'         => 'Your commute is more dangerous than you think',
        'description'   => "That's one accident every 67 seconds — on Indian roads, every single day.Most happen in conditions that felt completely ordinary when the journey began. PA Insurance exists for exactly those ordinary days that end differently.",
        'primary_label'   => 'Understand the risk →',
        'primary_url'     => '#pa-risks',
        'secondary_label' => 'Explore Commuter Cover',
        'secondary_url'   => '#road-risk',
        'image'         => 'https://images.unsplash.com/photo-1519501025264-65ba15a82390?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Busy urban traffic in India',
    ],


    // =====================================================
    // SLIDE 03 — DEATHS STAT
    // =====================================================

    [
        'id'            => 'pa-impact',
        'eyebrow'       => 'Deaths from road accidents',
        'stat'          => '1,73,000+',
        'title'         => 'Every 3 minutes, a family loses its earner',
        'description'   => "Behind each number is a household that woke up that morning with plans.An accidental death benefit pays 100% of CSI to your nominee — immediately. Not grief counselling. A financial floor, when the ground disappears.",
        'primary_label'   => 'See the impact →',
        'primary_url'     => '#pa-impact-section',
        'secondary_label' => 'Explore Death Benefit',
        'secondary_url'   => '#accidental-death',
        'image'         => 'https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Family walking together',
    ],


    // =====================================================
    // SLIDE 04 — AGE GROUP STAT
    // =====================================================

    [
        'id'            => 'pa-age-group',
        'eyebrow'       => 'Most affected earning age group',
        'stat'          => '18–45',
        'title'         => 'The age you think you’re invincible is the age you need cover most',
        'description'   => "This is peak earning time — dependents, EMIs, school fees, ageing parents.An accident at 34 doesn't just hurt you. It stops everyone who relies on you. This age group has the most to protect, and often the least cover in place.",
        'primary_label'   => 'Find cover for your stage →',
        'primary_url'     => '#pa-costing',
        'secondary_label' => 'See Age Groups',
        'secondary_url'   => '#age-groups',
        'image'         => 'https://images.unsplash.com/photo-1556742049-0a67d553c2a5?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Young professional reviewing finances',
    ],


    // =====================================================
    // SLIDE 05 — COST STAT
    // =====================================================

    [
        'id'            => 'pa-cost',
        'eyebrow'       => 'Entry cost of PA Insurance',
        'stat'          => '₹53/month',
        'title'         => 'Less than a cup of coffee. More consequential than almost anything else in your wallet.',
        'description'   => "For the price of one auto ride, a PA policy puts lakh-level financial protection behind you, every single day.Death, disability, income loss — covered from Day 1, no waiting period, no medical tests required. The real question isn't whether you can afford PA Insurance. It's whether you can afford not to have it.",
        'primary_label'   => 'See full costing breakdown →',
        'primary_url'     => '#pa-costing',
        'secondary_label' => 'Explore Plan Options',
        'secondary_url'   => '#plans',
        'image'         => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Financial calculations',
    ],

];

$total_slides = count($pa_hero_slides);
?>


<!-- =========================================================
     PERSONAL ACCIDENT INSURANCE HERO
     ========================================================= -->

<section
    class="insurance-hero painthero"
    id="personal-accident-hero"
    aria-label="Personal Accident Insurance"
>

    <!-- =====================================================
         SLIDER CONTAINER
         ===================================================== -->

    <div class="painthero-slider-container">


        <!-- =================================================
             SLIDES
             ================================================= -->

        <?php foreach ($pa_hero_slides as $index => $slide) : ?>

            <article
                class="painthero-slide <?php echo $index === 0 ? 'active' : ''; ?>"
                data-slide="<?php echo esc_attr($index); ?>"
                data-slide-id="<?php echo esc_attr($slide['id']); ?>"
                aria-hidden="<?php echo $index === 0 ? 'false' : 'true'; ?>"
            >

                <!-- Background Image -->
                <div
                    class="painthero-slide-image-wrapper"
                    style="background-image: url('<?php echo esc_url($slide['image']); ?>');"
                    role="img"
                    aria-label="<?php echo esc_attr($slide['image_alt']); ?>"
                ></div>

                <div class="painthero-slide-image-overlay"></div>

                <!-- Hero Inner -->
                <div class="painthero-inner">

                    <div class="painthero-slide-content">

                        <div class="painthero-slide-eyebrow">
                            <span class="painthero-eyebrow-dot" aria-hidden="true"></span>
                            <?php echo esc_html($slide['eyebrow']); ?>
                        </div>

                        <div class="painthero-stat-highlight">
                            <?php if (isset($slide['stat_line_1'])) : ?>
                                <span><?php echo esc_html($slide['stat_line_1']); ?></span>
                                <span><?php echo esc_html($slide['stat_line_2']); ?></span>
                            <?php else : ?>
                                <?php echo esc_html($slide['stat']); ?>
                            <?php endif; ?>
                        </div>

                        <h2 class="painthero-slide-title">
                            <?php echo esc_html($slide['title']); ?>
                        </h2>

                        <p class="painthero-slide-desc">
                            <?php echo nl2br(esc_html($slide['description'])); ?>
                        </p>

                        <!-- Actions -->
                        <div class="painthero-actions">
                            <a
                                href="<?php echo esc_url($slide['primary_url']); ?>"
                                class="painthero-btn painthero-btn--primary"
                            >
                                <?php echo esc_html($slide['primary_label']); ?>
                            </a>

                            <a
                                href="<?php echo esc_url($slide['secondary_url']); ?>"
                                class="painthero-btn painthero-btn--secondary"
                            >
                                <?php echo esc_html($slide['secondary_label']); ?>
                                <span aria-hidden="true">→</span>
                            </a>
                        </div>

                    </div>

                </div>

            </article>

        <?php endforeach; ?>


        <!-- Navigation Arrows -->
        <button type="button" class="painthero-arrow painthero-arrow--prev" aria-label="Previous slide">←</button>
        <button type="button" class="painthero-arrow painthero-arrow--next" aria-label="Next slide">→</button>

        <!-- Slider Dots -->
        <div class="painthero-slider-dots" role="tablist" aria-label="Slides">
            <?php foreach ($pa_hero_slides as $index => $slide) : ?>
                <button
                    type="button"
                    class="painthero-slider-dot <?php echo $index === 0 ? 'active' : ''; ?>"
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

    const hero = document.querySelector(".painthero");

    if (!hero) {
        return;
    }


    // =====================================================
    // ELEMENTS
    // =====================================================

    const slides = Array.from(
        hero.querySelectorAll(".painthero-slide")
    );

    const dots = Array.from(
        hero.querySelectorAll(".painthero-slider-dot")
    );

    const previousButton = hero.querySelector(
        ".painthero-arrow--prev"
    );

    const nextButton = hero.querySelector(
        ".painthero-arrow--next"
    );


    // =====================================================
    // CONFIGURATION
    // =====================================================

    const AUTO_PLAY_TIME = 7000;

    let currentSlide = 0;

    let autoPlayTimer = null;

    let isPaused = false;


    // =====================================================
    // SAFETY CHECK
    // =====================================================

    if (!slides.length) {
        return;
    }


    // =====================================================
    // SHOW SLIDE FUNCTION
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
        // Update Slides
        // -----------------------------------------------

        slides.forEach(function (slide, slideIndex) {

            const isActive = slideIndex === currentSlide;

            slide.classList.toggle("active", isActive);

            slide.setAttribute(
                "aria-hidden",
                isActive ? "false" : "true"
            );
        });


        // -----------------------------------------------
        // Update Dots
        // -----------------------------------------------

        dots.forEach(function (dot, dotIndex) {

            const isActive = dotIndex === currentSlide;

            dot.classList.toggle("active", isActive);

            dot.setAttribute(
                "aria-selected",
                isActive ? "true" : "false"
            );
        });
    }


    // =====================================================
    // NAVIGATION CONTROLS
    // =====================================================

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function previousSlide() {
        showSlide(currentSlide - 1);
    }


    // =====================================================
    // AUTOPLAY MANAGEMENT
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


    // =====================================================
    // EVENT LISTENERS: ARROWS
    // =====================================================

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


    // =====================================================
    // EVENT LISTENERS: DOTS
    // =====================================================

    dots.forEach(function (dot) {
        dot.addEventListener("click", function () {

            const targetIndex = parseInt(
                dot.dataset.slideTo,
                10
            );

            if (Number.isNaN(targetIndex)) {
                return;
            }

            showSlide(targetIndex);
            restartAutoPlay();
        });
    });


    // =====================================================
    // EVENT LISTENERS: HOVER PAUSE
    // =====================================================

    hero.addEventListener("mouseenter", function () {
        isPaused = true;
        stopAutoPlay();
    });

    hero.addEventListener("mouseleave", function () {
        isPaused = false;
        startAutoPlay();
    });


    // =====================================================
    // EVENT LISTENERS: KEYBOARD NAVIGATION
    // =====================================================

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


    // =====================================================
    // EVENT LISTENERS: TOUCH SWIPE
    // =====================================================

    let touchStartX = 0;
    let touchEndX = 0;

    hero.addEventListener(
        "touchstart",
        function (event) {
            touchStartX = event.changedTouches[0].screenX;
        },
        { passive: true }
    );

    hero.addEventListener(
        "touchend",
        function (event) {
            touchEndX = event.changedTouches[0].screenX;
            handleSwipe();
        },
        { passive: true }
    );

    function handleSwipe() {
        const swipeDistance = touchEndX - touchStartX;
        const minimumSwipeDistance = 50;

        if (Math.abs(swipeDistance) < minimumSwipeDistance) {
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
    // TAB VISIBILITY PAUSE
    // =====================================================

    document.addEventListener("visibilitychange", function () {
        if (document.hidden) {
            stopAutoPlay();
        } else {
            startAutoPlay();
        }
    });


    // =====================================================
    // INITIALIZE
    // =====================================================

    showSlide(0);
    startAutoPlay();

});
</script>