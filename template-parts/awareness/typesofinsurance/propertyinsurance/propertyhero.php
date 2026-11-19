
<?php

$property_hero_slides = [];

$hero_query = new WP_Query([
    'post_type' => 'property_hero',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => [
        'menu_order' => 'ASC',
        'date' => 'ASC',
    ],
]);

if ($hero_query->have_posts()) {

    while ($hero_query->have_posts()) {

        $hero_query->the_post();

        $post_id = get_the_ID();

        $image_id = get_post_thumbnail_id($post_id);

        $property_hero_slides[] = [
            'id' => 'property-' . $post_id,

            'eyebrow' => get_post_meta(
                $post_id, '_vv_eyebrow', true
            ),

            'tag' => get_post_meta(
                $post_id, '_vv_tag', true
            ),

            'title' => get_the_title(),

            'title_accent' => get_post_meta(
                $post_id, '_vv_title_accent', true
            ),

            'description' => get_post_meta(
                $post_id, '_vv_description', true
            ),

            'primary_label' => get_post_meta(
                $post_id, '_vv_primary_label', true
            ),

            'primary_url' => get_post_meta(
                $post_id, '_vv_primary_url', true
            ),

            'secondary_label' => get_post_meta(
                $post_id, '_vv_secondary_label', true
            ),

            'secondary_url' => get_post_meta(
                $post_id, '_vv_secondary_url', true
            ),

            'image' => get_the_post_thumbnail_url(
                $post_id, 'full'
            ) ?: '',

            'image_alt' => $image_id
                ? get_post_meta(
                    $image_id, '_wp_attachment_image_alt', true
                )
                : '',

            'category' => get_post_meta(
                $post_id, '_vv_category', true
            ),

            'category_icon' => get_post_meta(
                $post_id, '_vv_category_icon', true
            ),
        ];
    }

    wp_reset_postdata();
}

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