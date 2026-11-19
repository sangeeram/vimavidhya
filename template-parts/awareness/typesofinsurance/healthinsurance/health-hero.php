<?php

$health_hero_slides = [
    [
        'id' => 'health-banner-1',
        'eyebrow' => 'Vima Vidya',
        'tag' => 'Health Insurance in India',
        'title' => 'The financial reality',
        'title_accent' => 'every family must prepare for',
        'description' => 'A stage-by-stage guide for every Indian family. Insurance isn\'t about fear — it\'s about preparation, whichever stage of life you\'re in.',
        'primary_label' => 'Understand the risk',
        'primary_url' => '#understand-risk',
        'secondary_label' => 'Explore plans',
        'secondary_url' => '#explore-plans',
        'image' => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?q=80&w=1920&auto=format&fit=crop',
        'image_alt' => 'Medical professional reviewing healthcare data and insurance plans',
        'highlights' => [
            ['value' => '₹3–8L', 'label' => 'Avg. serious illness hospitalisation cost'],
            ['value' => '14%', 'label' => 'Annual rise in healthcare inflation'],
            ['value' => '60%', 'label' => 'Out-of-pocket expense borne by families'],
            ['value' => '1 in 4', 'label' => 'Indians face critical illness before retirement'],
        ],
    ],
    [
        'id' => 'health-banner-2',
        'eyebrow' => 'Vima Vidya',
        'tag' => 'Healthcare Inflation',
        'title' => 'Rising at 14% annually',
        'title_accent' => 'one of the highest rates in the world',
        'description' => 'India\'s healthcare costs are soaring. Yet less than 40% of Indians have any health insurance coverage. A single hospitalisation can wipe out years of savings, push families into debt, or force impossible choices.',
        'primary_label' => 'Understand the risk',
        'primary_url' => '#understand-risk',
        'secondary_label' => 'Explore plans',
        'secondary_url' => '#explore-plans',
        'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=1920&auto=format&fit=crop',
        'image_alt' => 'Doctor consulting with a patient in a modern hospital setting',
        'highlights' => [
            ['value' => '40%', 'label' => 'Indians with any health insurance coverage'],
            ['value' => '14%', 'label' => 'Annual healthcare inflation rate'],
            ['value' => 'Debt', 'label' => 'Risk from single unplanned hospitalisation'],
            ['value' => 'Savings', 'label' => 'Wiped out by unmanaged medical emergencies'],
        ],
    ],
    [
        'id' => 'health-banner-3',
        'eyebrow' => 'Vima Vidya',
        'tag' => 'Family Protection',
        'title' => 'Secure your family',
        'title_accent' => 'before medical emergencies strike',
        'description' => 'Preparation is the ultimate safeguard. Equip your household with comprehensive health coverage designed to handle critical illnesses, room rent limits, and modern medical treatments without compromise.',
        'primary_label' => 'Understand the risk',
        'primary_url' => '#understand-risk',
        'secondary_label' => 'Explore plans',
        'secondary_url' => '#explore-plans',
        'image' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?q=80&w=1920&auto=format&fit=crop',
        'image_alt' => 'Happy protected family smiling together indoors',
        'highlights' => [
            ['value' => '100%', 'label' => 'Cashless network hospital access'],
            ['value' => '0%', 'label' => 'Compromise on quality medical care'],
            ['value' => 'Life', 'label' => 'Stage-by-stage financial planning'],
            ['value' => 'Peace', 'label' => 'Of mind for your entire household'],
        ],
    ],
];

$total_slides = count($health_hero_slides);

?>

<!-- =========================================================
     HEALTH INSURANCE HERO
     ========================================================= -->

<section
    class="insurance-hero healthinsurancehero"
    id="health-insurance-hero"
    aria-label="Health Insurance"
>

    <!-- =====================================================
         SLIDER CONTAINER
         ===================================================== -->

    <div class="healthinsurancehero-slider-container">

        <!-- =================================================
             SLIDES
             ================================================= -->

        <?php foreach ($health_hero_slides as $index =>$slide) : ?>

            <article
                class="healthinsurancehero-slide <?php echo $index === 0 ? 'active' : ''; ?>"
                data-slide="<?php echo esc_attr($index); ?>"
                data-slide-id="<?php echo esc_attr($slide['id']); ?>"
                aria-hidden="<?php echo $index === 0 ? 'false' : 'true'; ?>"
            >

                <!-- =========================================
                     BACKGROUND IMAGE
                     ========================================= -->

                <div
                    class="healthinsurancehero-slide-image-wrapper"
                    style="background-image: url('<?php echo esc_url($slide['image']); ?>');"
                    role="img"
                    aria-label="<?php echo esc_attr($slide['image_alt']); ?>"
                ></div>

                <!-- =========================================
                     IMAGE OVERLAY
                     ========================================= -->

                <div class="healthinsurancehero-slide-image-overlay"></div>

                <!-- =========================================
                     HERO INNER
                     ========================================= -->

                <div class="healthinsurancehero-inner">

                    <!-- =====================================
                         CONTENT
                         ===================================== -->

                    <div class="healthinsurancehero-slide-content">

                        <!-- =================================
                             EYEBROW
                             ================================= -->

                        <div class="healthinsurancehero-slide-eyebrow">

                            <span
                                class="healthinsurancehero-eyebrow-dot"
                                aria-hidden="true"
                            ></span>

                            <?php echo esc_html($slide['eyebrow']); ?>

                        </div>

                        <!-- =================================
                             TAG
                             ================================= -->

                        <span class="healthinsurancehero-slide-tag">
                            <?php echo esc_html($slide['tag']); ?>
                        </span>

                        <!-- =================================
                             TITLE
                             ================================= -->

                        <h1 class="healthinsurancehero-slide-title">

                            <?php echo esc_html($slide['title']); ?>

                            <span>
                                <?php echo esc_html($slide['title_accent']); ?>
                            </span>

                        </h1>

                        <!-- =================================
                             DESCRIPTION
                             ================================= -->

                        <p class="healthinsurancehero-slide-desc">
                            <?php echo esc_html($slide['description']); ?>
                        </p>

                        <!-- =================================
                             STATS HIGHLIGHTS GRID
                             ================================= -->

                        <?php if (!empty($slide['highlights'])) : ?>
                            <div class="healthinsurancehero-highlights">
                                <?php foreach ($slide['highlights'] as$stat) : ?>
                                    <div class="healthinsurancehero-stat-card">
                                        <span class="healthinsurancehero-stat-value"><?php echo esc_html($stat['value']); ?></span>
                                        <span class="healthinsurancehero-stat-label"><?php echo esc_html($stat['label']); ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <!-- =================================
                             ACTIONS
                             ================================= -->

                        <div class="healthinsurancehero-actions">

                            <a
                                href="<?php echo esc_url($slide['primary_url']); ?>"
                                class="healthinsurancehero-btn healthinsurancehero-btn--primary"
                            >

                                <?php echo esc_html($slide['primary_label']); ?>

                                <span aria-hidden="true">→</span>

                            </a>

                            <a
                                href="<?php echo esc_url($slide['secondary_url']); ?>"
                                class="healthinsurancehero-btn healthinsurancehero-btn--secondary"
                            >

                                <?php echo esc_html($slide['secondary_label']); ?>

                                <span aria-hidden="true">↗</span>

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
            class="healthinsurancehero-arrow healthinsurancehero-arrow--prev"
            aria-label="Previous health insurance slide"
        >
            ←
        </button>

        <!-- =================================================
             NEXT
             ================================================= -->

        <button
            type="button"
            class="healthinsurancehero-arrow healthinsurancehero-arrow--next"
            aria-label="Next health insurance slide"
        >
            →
        </button>

        <!-- =================================================
             SLIDER DOTS
             ================================================= -->

        <div
            class="healthinsurancehero-slider-dots"
            role="tablist"
            aria-label="Health Insurance slides"
        >

            <?php foreach ($health_hero_slides as $index =>$slide) : ?>

                <button
                    type="button"
                    class="healthinsurancehero-slider-dot <?php echo $index === 0 ? 'active' : ''; ?>"
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

        const hero = document.querySelector(".healthinsurancehero");

        if (!hero) {
            return;
        }

        const slides = Array.from(hero.querySelectorAll(".healthinsurancehero-slide"));
        const dots = Array.from(hero.querySelectorAll(".healthinsurancehero-slider-dot"));
        const previousButton = hero.querySelector(".healthinsurancehero-arrow--prev");
        const nextButton = hero.querySelector(".healthinsurancehero-arrow--next");

        const AUTO_PLAY_TIME = 7000;
        let currentSlide = 0;
        let autoPlayTimer = null;
        let isPaused = false;

        if (!slides.length) {
            return;
        }

        function showSlide(index) {
            if (index < 0) {
                index = slides.length - 1;
            }
            if (index >= slides.length) {
                index = 0;
            }

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

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function previousSlide() {
            showSlide(currentSlide - 1);
        }

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

        hero.addEventListener("mouseenter", function () {
            isPaused = true;
            stopAutoPlay();
        });

        hero.addEventListener("mouseleave", function () {
            isPaused = false;
            startAutoPlay();
        });

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
            handleSwipe();
        }, { passive: true });

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

        document.addEventListener("visibilitychange", function () {
            if (document.hidden) {
                stopAutoPlay();
            } else {
                startAutoPlay();
            }
        });

        showSlide(0);
        startAutoPlay();
    });
</script>