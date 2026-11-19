<?php
/**
 * =========================================================
 * VIMA VIDYA
 * LIFE INSURANCE — HERO SLIDER
 * =========================================================
 *
 * 4 Storytelling Slides
 * 01 — Protection families assume they have
 * 02 — New life insurance policies sold every year (5.5 crore+)
 * 03 — India's life insurance protection gap (₹59 lakh crore)
 * 04 — Term cover affordability (₹1 crore for <₹700/month)
 *
 * =========================================================
 */



/**
 * =========================================================
 * LIFE INSURANCE HERO DATA
 * =========================================================
 */

$life_hero_slides = [

    // =====================================================
    // SLIDE 01
    // =====================================================

    [
        'id'            => 'life-protection-reality',
        'eyebrow'       => 'LIFE INSURANCE PROTECTION',
        'tag'           => 'MOST FAMILIES ASSUME THEY HAVE — UNTIL IT’S TESTED.',

        'title'         => 'You Plan For The Future.',
        'title_accent'  => 'You Budget For EMIs. You Save For Education.',

        'description'   => "What most families don’t plan for is income stopping before responsibilities do. Not dramatically. Just suddenly — a medical event, an accident, a life cut short. Life Insurance exists to replace income when it’s no longer there, so dependents don’t inherit debt, disruption, or uncertainty.",

        'primary_label' => 'Understand the Risk',
        'primary_url'   => '#life-risks',

        'secondary_label' => 'It Takes 3 Minutes',
        'secondary_url'   => '#life-quick-start',

        'image'         => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Family planning financial security together',

        'category'      => 'AWARENESS',
        'category_icon' => 'awareness',
    ],


    // =====================================================
    // SLIDE 02
    // =====================================================

    [
        'id'            => 'life-new-policies',
        'eyebrow'       => 'COVERAGE VS ADEQUACY',
        'tag'           => '5.5 CRORE+ NEW LIFE INSURANCE POLICIES SOLD EVERY YEAR',

        'title'         => 'Coverage Exists.',
        'title_accent'  => 'Adequate Protection Often Doesn’t.',

        'description'   => "Buying life insurance isn’t the same as buying enough of it. Millions of policies are issued annually, yet the sum assured across most households is dangerously low. True protection requires sizing your coverage against real liabilities and future years of income replacement.",

        'primary_label' => 'Understand the Risk',
        'primary_url'   => '#life-adequacy',

        'secondary_label' => 'Calculate Coverage',
        'secondary_url'   => '#coverage-calculator',

        'image'         => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Reviewing financial policy documents',

        'category'      => 'RISK AWARENESS',
        'category_icon' => 'risk',
    ],


    // =====================================================
    // SLIDE 03
    // =====================================================

    [
        'id'            => 'life-protection-gap',
        'eyebrow'       => 'THE PROTECTION GAP',
        'tag'           => '₹59 LAKH CRORE INDIA’S LIFE INSURANCE PROTECTION GAP',

        'title'         => 'Most Families Are Insured —',
        'title_accent'  => 'But Far Below What Responsibilities Require.',

        'description'   => "India's massive protection gap reflects a harsh reality: life insurance fails when it’s sized for comfort, not reality. When policies pay out only a few lakhs instead of crores, surviving family members are forced to liquidate assets, compromise on education, or take on compounding debt.",

        'primary_label' => 'Understand the Risk',
        'primary_url'   => '#life-gap-risk',

        'secondary_label' => 'Explore the Gap',
        'secondary_url'   => '#protection-gap-data',

        'image'         => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Analyzing financial protection gaps',

        'category'      => 'DEFICIT',
        'category_icon' => 'deficit',
    ],


    // =====================================================
    // SLIDE 04
    // =====================================================

    [
        'id'            => 'life-affordability',
        'eyebrow'       => 'AFFORDABLE SECURITY',
        'tag'           => '₹1 CRORE TERM COVER FOR LESS THAN ₹700/MONTH (AGE 30)',

        'title'         => 'Protection at Scale',
        'title_accent'  => 'Is Remarkably Affordable.',

        'description'   => "Underinsurance usually isn’t a cost issue — it’s an awareness issue. Life Insurance is significantly cheaper than most families assume when bought early as pure term protection. Securing your family's entire financial future costs less than daily utilities.",

        'primary_label' => 'Understand the Risk',
        'primary_url'   => '#life-affordability-risk',

        'secondary_label' => 'Calculate Premium',
        'secondary_url'   => '#term-calculator',

        'image'         => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=2000&q=85',
        'image_alt'     => 'Young professional reviewing term insurance options',

        'category'      => 'PROTECTION',
        'category_icon' => 'protection',
    ],

];

$total_slides = count($life_hero_slides);
?>


<!-- =========================================================
     LIFE INSURANCE HERO TEMPLATE PART
     ========================================================= -->

<section
    class="insurance-hero lifeinsurancehero"
    id="life-insurance-hero"
    aria-label="Life Insurance"
>

    <!-- =====================================================
         SLIDER CONTAINER
         ===================================================== -->

    <div class="lifeinsurancehero-slider-container">


        <!-- =================================================
             SLIDES
             ================================================= -->

        <?php foreach ($life_hero_slides as $index => $slide) : ?>

            <article
                class="lifeinsurancehero-slide <?php echo $index === 0 ? 'active' : ''; ?>"
                data-slide="<?php echo esc_attr($index); ?>"
                data-slide-id="<?php echo esc_attr($slide['id']); ?>"
                aria-hidden="<?php echo $index === 0 ? 'false' : 'true'; ?>"
            >



                <!-- =========================================
                     BACKGROUND IMAGE
                     ========================================= -->

                <div
                    class="lifeinsurancehero-slide-image-wrapper"
                    style="background-image: url('<?php echo esc_url($slide['image']); ?>');"
                    role="img"
                    aria-label="<?php echo esc_attr($slide['image_alt']); ?>"
                ></div>



                <!-- =========================================
                     IMAGE OVERLAY
                     ========================================= -->

                <div class="lifeinsurancehero-slide-image-overlay"></div>



                <!-- =========================================
                     HERO INNER
                     ========================================= -->

                <div class="lifeinsurancehero-inner">



                    <!-- =====================================
                         CONTENT
                         ===================================== -->

                    <div class="lifeinsurancehero-slide-content">



                        <!-- =================================
                             EYEBROW
                             ================================= -->

                        <div class="lifeinsurancehero-slide-eyebrow">

                            <span
                                class="lifeinsurancehero-eyebrow-dot"
                                aria-hidden="true"
                            ></span>

                            <?php echo esc_html($slide['eyebrow']); ?>

                        </div>



                        <!-- =================================
                             TAG
                             ================================= -->

                        <span class="lifeinsurancehero-slide-tag">
                            <?php echo esc_html($slide['tag']); ?>
                        </span>



                        <!-- =================================
                             TITLE
                             ================================= -->

                        <h1 class="lifeinsurancehero-slide-title">

                            <?php echo esc_html($slide['title']); ?>

                            <span>
                                <?php echo esc_html($slide['title_accent']); ?>
                            </span>

                        </h1>



                        <!-- =================================
                             DESCRIPTION
                             ================================= -->

                        <p class="lifeinsurancehero-slide-desc">
                            <?php echo esc_html($slide['description']); ?>
                        </p>



                        <!-- =================================
                             ACTIONS
                             ================================= -->

                        <div class="lifeinsurancehero-actions">

                            <a
                                href="<?php echo esc_url($slide['primary_url']); ?>"
                                class="lifeinsurancehero-btn lifeinsurancehero-btn--primary"
                            >

                                <?php echo esc_html($slide['primary_label']); ?>

                                <span aria-hidden="true">↗</span>

                            </a>


                            <a
                                href="<?php echo esc_url($slide['secondary_url']); ?>"
                                class="lifeinsurancehero-btn lifeinsurancehero-btn--secondary"
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
            class="lifeinsurancehero-arrow lifeinsurancehero-arrow--prev"
            aria-label="Previous life insurance slide"
        >
            ←
        </button>



        <!-- =================================================
             NEXT
             ================================================= -->

        <button
            type="button"
            class="lifeinsurancehero-arrow lifeinsurancehero-arrow--next"
            aria-label="Next life insurance slide"
        >
            →
        </button>



        <!-- =================================================
             SLIDER DOTS
             ================================================= -->

        <div
            class="lifeinsurancehero-slider-dots"
            role="tablist"
            aria-label="Life Insurance slides"
        >

            <?php foreach ($life_hero_slides as $index => $slide) : ?>

                <button
                    type="button"
                    class="lifeinsurancehero-slider-dot <?php echo $index === 0 ? 'active' : ''; ?>"
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
    /**
 * =========================================================
 * VIMA VIDYA
 * LIFE INSURANCE HERO SLIDER — INTERACTION SCRIPT
 * =========================================================
 */

document.addEventListener("DOMContentLoaded", function () {

    const hero = document.querySelector(".lifeinsurancehero");

    if (!hero) {
        return;
    }

    // =====================================================
    // ELEMENTS
    // =====================================================

    const slides = Array.from(hero.querySelectorAll(".lifeinsurancehero-slide"));
    const dots = Array.from(hero.querySelectorAll(".lifeinsurancehero-slider-dot"));
    const categories = Array.from(hero.querySelectorAll(".lifeinsurancehero-category"));
    const previousButton = hero.querySelector(".lifeinsurancehero-arrow--prev");
    const nextButton = hero.querySelector(".lifeinsurancehero-arrow--next");

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

        // Slides
        slides.forEach(function (slide, slideIndex) {
            const isActive = slideIndex === currentSlide;

            slide.classList.toggle("active", isActive);
            slide.setAttribute("aria-hidden", isActive ? "false" : "true");
        });

        // Dots
        dots.forEach(function (dot, dotIndex) {
            const isActive = dotIndex === currentSlide;

            dot.classList.toggle("active", isActive);
            dot.setAttribute("aria-selected", isActive ? "true" : "false");
        });

        // Categories
        categories.forEach(function (category, categoryIndex) {
            category.classList.toggle("active", categoryIndex === currentSlide);
        });
    }

    // =====================================================
    // NEXT / PREVIOUS
    // =====================================================

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

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

        autoPlayTimer = setInterval(function () {
            nextSlide();
        }, AUTO_PLAY_TIME);
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
    // EVENT LISTENERS
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

    dots.forEach(function (dot) {
        dot.addEventListener("click", function () {
            const targetIndex = parseInt(dot.dataset.slideTo, 10);

            if (Number.isNaN(targetIndex)) {
                return;
            }

            showSlide(targetIndex);
            restartAutoPlay();
        });
    });

    categories.forEach(function (category) {
        category.addEventListener("click", function (event) {
            const targetIndex = parseInt(category.dataset.category, 10);

            if (Number.isNaN(targetIndex)) {
                return;
            }

            event.preventDefault();
            showSlide(targetIndex);
            restartAutoPlay();
        });
    });

    // Pause on Hover
    hero.addEventListener("mouseenter", function () {
        isPaused = true;
        stopAutoPlay();
    });

    hero.addEventListener("mouseleave", function () {
        isPaused = false;
        startAutoPlay();
    });

    // Keyboard Navigation
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

    // Touch / Swipe
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

    // Visibility Change
    document.addEventListener("visibilitychange", function () {
        if (document.hidden) {
            stopAutoPlay();
        } else {
            startAutoPlay();
        }
    });

    // Initialize
    showSlide(0);
    startAutoPlay();
});

</script>