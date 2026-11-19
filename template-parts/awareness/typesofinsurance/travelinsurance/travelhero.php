<?php

$travel_hero_slides = [
    [
        'id' => 'travel-banner-1',
        'eyebrow' => 'Travel Insurance',
        'tag' => 'Domestic Risk',
        'title' => '14 Cr+',
        'title_accent' => 'Domestic air passengers every year',
        'description' => 'Millions travel across India annually. Most do so without protection for delays, cancellations, or medical expenses away from home. Domestic travel carries real financial exposure.',
        'primary_label' => 'Understand the risk',
        'primary_url' => '#understand-risk',
        'secondary_label' => 'Explore plans',
        'secondary_url' => '#explore-plans',
        'image' => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?q=80&w=1920&auto=format&fit=crop',
        'image_alt' => 'Airplane flying above clouds representing domestic air travel across India',
    ],
    [
        'id' => 'travel-banner-2',
        'eyebrow' => 'Travel Insurance',
        'tag' => 'Financial Exposure',
        'title' => '₹0',
        'title_accent' => 'What most Indians spend on travel insurance',
        'description' => 'Flights, hotels, and experiences are carefully planned. Unexpected expenses during travel are often left entirely to chance. Travel Insurance exists so surprises don’t become expenses.',
        'primary_label' => 'Understand the risk',
        'primary_url' => '#understand-risk',
        'secondary_label' => 'Explore plans',
        'secondary_url' => '#explore-plans',
        'image' => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?q=80&w=1920&auto=format&fit=crop',
        'image_alt' => 'Traveler planning a journey with a map and luggage',
    ],
    [
        'id' => 'travel-banner-3',
        'eyebrow' => 'Travel Insurance',
        'tag' => 'Target Demographics',
        'title' => '25–60',
        'title_accent' => 'The most at-risk travel age group',
        'description' => 'Work travel. Family holidays. Pilgrimages. The age group that travels the most also skips protection the most. Travel Insurance protects travellers when plans don’t hold.',
        'primary_label' => 'Understand the risk',
        'primary_url' => '#understand-risk',
        'secondary_label' => 'Explore plans',
        'secondary_url' => '#explore-plans',
        'image' => 'https://images.unsplash.com/photo-1503220317375-aaad61436b1b?q=80&w=1920&auto=format&fit=crop',
        'image_alt' => 'Adults and families traveling together across scenic locations',
    ],
];

$total_slides = count($travel_hero_slides);

?>

<!-- =========================================================
     TRAVEL INSURANCE HERO
     ========================================================= -->

<section
    class="insurance-hero travelinsurancehero"
    id="travel-insurance-hero"
    aria-label="Travel Insurance"
>

    <!-- =====================================================
         SLIDER CONTAINER
         ===================================================== -->

    <div class="travelinsurancehero-slider-container">

        <!-- =================================================
             SLIDES
             ================================================= -->

        <?php foreach ($travel_hero_slides as $index =>$slide) : ?>

            <article
                class="travelinsurancehero-slide <?php echo $index === 0 ? 'active' : ''; ?>"
                data-slide="<?php echo esc_attr($index); ?>"
                data-slide-id="<?php echo esc_attr($slide['id']); ?>"
                aria-hidden="<?php echo $index === 0 ? 'false' : 'true'; ?>"
            >

                <!-- =========================================
                     BACKGROUND IMAGE
                     ========================================= -->

                <div
                    class="travelinsurancehero-slide-image-wrapper"
                    style="background-image: url('<?php echo esc_url($slide['image']); ?>');"
                    role="img"
                    aria-label="<?php echo esc_attr($slide['image_alt']); ?>"
                ></div>

                <!-- =========================================
                     IMAGE OVERLAY
                     ========================================= -->

                <div class="travelinsurancehero-slide-image-overlay"></div>

                <!-- =========================================
                     HERO INNER
                     ========================================= -->

                <div class="travelinsurancehero-inner">

                    <!-- =====================================
                         CONTENT
                         ===================================== -->

                    <div class="travelinsurancehero-slide-content">

                        <!-- =================================
                             EYEBROW
                             ================================= -->

                        <div class="travelinsurancehero-slide-eyebrow">

                            <span
                                class="travelinsurancehero-eyebrow-dot"
                                aria-hidden="true"
                            ></span>

                            <?php echo esc_html($slide['eyebrow']); ?>

                        </div>

                        <!-- =================================
                             TAG
                             ================================= -->

                        <span class="travelinsurancehero-slide-tag">
                            <?php echo esc_html($slide['tag']); ?>
                        </span>

                        <!-- =================================
                             TITLE
                             ================================= -->

                        <h1 class="travelinsurancehero-slide-title">

                            <?php echo esc_html($slide['title']); ?>

                            <span>
                                <?php echo esc_html($slide['title_accent']); ?>
                            </span>

                        </h1>

                        <!-- =================================
                             DESCRIPTION
                             ================================= -->

                        <p class="travelinsurancehero-slide-desc">
                            <?php echo esc_html($slide['description']); ?>
                        </p>

                        <!-- =================================
                             ACTIONS
                             ================================= -->

                        <div class="travelinsurancehero-actions">

                            <a
                                href="<?php echo esc_url($slide['primary_url']); ?>"
                                class="travelinsurancehero-btn travelinsurancehero-btn--primary"
                            >

                                <?php echo esc_html($slide['primary_label']); ?>

                                <span aria-hidden="true">→</span>

                            </a>

                            <a
                                href="<?php echo esc_url($slide['secondary_url']); ?>"
                                class="travelinsurancehero-btn travelinsurancehero-btn--secondary"
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
            class="travelinsurancehero-arrow travelinsurancehero-arrow--prev"
            aria-label="Previous travel insurance slide"
        >
            ←
        </button>

        <!-- =================================================
             NEXT
             ================================================= -->

        <button
            type="button"
            class="travelinsurancehero-arrow travelinsurancehero-arrow--next"
            aria-label="Next travel insurance slide"
        >
            →
        </button>

        <!-- =================================================
             SLIDER DOTS
             ================================================= -->

        <div
            class="travelinsurancehero-slider-dots"
            role="tablist"
            aria-label="Travel Insurance slides"
        >

            <?php foreach ($travel_hero_slides as $index =>$slide) : ?>

                <button
                    type="button"
                    class="travelinsurancehero-slider-dot <?php echo $index === 0 ? 'active' : ''; ?>"
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

    const hero = document.querySelector(".travelinsurancehero");

    if (!hero) {
        return;
    }

    const slides = Array.from(hero.querySelectorAll(".travelinsurancehero-slide"));
    const dots = Array.from(hero.querySelectorAll(".travelinsurancehero-slider-dot"));
    const previousButton = hero.querySelector(".travelinsurancehero-arrow--prev");
    const nextButton = hero.querySelector(".travelinsurancehero-arrow--next");

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