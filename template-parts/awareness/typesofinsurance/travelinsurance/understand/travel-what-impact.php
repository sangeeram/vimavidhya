
<?php
/**
 * =========================================================
 * VIMA VIDYA — TRAVEL INSURANCE MILESTONE CAROUSEL
 * =========================================================
 */

$travel_events = [
    [
        'id'          => 'first-international',
        'title'       => 'First international trip',
        'icon'        => '✈️',
        'image'       => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'You cross into territory where Indian health insurance does not apply',
        'description' => 'Buy international travel cover before departure — even for a 3-day trip',
    ],
    [
        'id'          => 'first-solo-trek',
        'title'       => 'First solo domestic trek (18–25)',
        'icon'        => '🏔️',
        'image'       => 'https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Physical risk rises; evacuation costs in remote areas can be significant',
        'description' => 'Buy domestic plan with evacuation cover; check altitude limits and adventure exclusions',
    ],
    [
        'id'          => 'married-with-children',
        'title'       => 'Married with children (28–40)',
        'icon'        => '👨‍👩‍👧‍👦',
        'image'       => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Your emergency now affects the entire family financially',
        'description' => 'Switch to a family floater; include parents if travelling; increase sum insured',
    ],
    [
        'id'          => 'parents-joining',
        'title'       => 'Parents joining a trip (60+)',
        'icon'        => '🧓',
        'image'       => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Senior travellers have higher medical risk; Indian health insurance has no overseas coverage',
        'description' => 'Buy senior citizen travel cover for parents; declare all pre-existing conditions',
    ],
    [
        'id'          => 'frequent-traveller',
        'title'       => 'Travelling 4+ times a year',
        'icon'        => '🔄',
        'image'       => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Individual policies cost more and leave gaps when forgotten',
        'description' => 'Switch to an Annual Multi-Trip policy — automatic cover for every trip',
    ],
    [
        'id'          => 'child-exit-age',
        'title'       => 'Child reaching policy exit age',
        'icon'        => '🎒',
        'image'       => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Child exits family policy coverage',
        'description' => "Initiate child's own travel insurance before the birthday",
    ],
    [
        'id'          => 'medical-event',
        'title'       => 'Medical event / health condition before travel',
        'icon'        => '🩺',
        'image'       => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Stability clause becomes critical for PED (pre-existing disease) cover. Most travel policies require that any pre-existing condition must have been stable — meaning no new treatment, no change in medication, no new diagnosis — for 60 to 90 days before your departure date.',
        'description' => 'Wait until the required stability period has passed before you travel, or declare the condition clearly when buying the policy. Get confirmation from the insurer whether it is covered in writing before you depart.',
    ],
];

$assets_uri = get_template_directory_uri() . '/assets/images/lifestyle/';
?>

<section class="policy-impact-section travel-impact-section" id="travel-impact">

    <div class="policy-impact-compact-container">

        <!-- HEADER -->

        <div class="policy-impact-header-row">

            <div class="policy-impact-header">

                <h2 class="policy-impact-title">
                    What Changes with Every Travel Milestone
                </h2>

                <p class="policy-impact-subtitle">
                    Travel risk and requirements evolve across your journeys.
                    Hover or tap the cards below to see how milestones and life
                    shifts alter your coverage terms.
                </p>

            </div>

        </div>


        <!-- CAROUSEL -->

        <div class="travel-carousel-viewport">

            <!-- LEFT AND RIGHT NAVIGATION -->

            <div class="carousel-nav-buttons">

                <button
                    class="carousel-btn prev-btn"
                    type="button"
                    aria-label="Previous travel milestone"
                >
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>

                <button
                    class="carousel-btn next-btn"
                    type="button"
                    aria-label="Next travel milestone"
                >
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>

            </div>


            <!-- CAROUSEL TRACK -->

            <div class="policy-impact-carousel-track">

                <?php foreach ($travel_events as $item): ?>

                    <?php
                    $img_src = (
                        strpos($item['image'], 'http') === 0
                    )
                        ? $item['image']
                        : $assets_uri . $item['image'];
                    ?>

                    <article
                        class="impact-flip-card carousel-slide"
                        data-slide="<?= esc_attr($item['id']); ?>"
                    >

                        <div class="flip-card-inner">

                            <!-- FRONT FACE -->

                            <div class="flip-card-front">

                                <div class="card-image-wrap">

                                    <img
                                        src="<?= esc_url($img_src); ?>"
                                        alt="<?= esc_attr($item['title']); ?>"
                                        loading="lazy"
                                        draggable="false"
                                    >

                                </div>

                                <div class="card-content">

                                    <div class="card-header-row">

                                        <span class="card-icon">
                                            <?= esc_html($item['icon']); ?>
                                        </span>

                                        <h3 class="card-title">
                                            <?= esc_html($item['title']); ?>
                                        </h3>

                                    </div>

                                </div>

                            </div>


                            <!-- BACK FACE -->

                            <div class="flip-card-back">

                                <div class="card-back-content">

                                    <div class="card-back-header">

                                        <span class="card-back-icon">
                                            <?= esc_html($item['icon']); ?>
                                        </span>

                                        <h3 class="card-back-title">
                                            <?= esc_html($item['title']); ?>
                                        </h3>

                                    </div>


                                    <div class="back-section">

                                        <span class="back-label">
                                            What Changes
                                        </span>

                                        <p class="card-desc">
                                            <?= esc_html($item['heading']); ?>
                                        </p>

                                    </div>


                                    <div class="back-section">

                                        <span class="back-label">
                                            Action Required
                                        </span>

                                        <p class="card-desc">
                                            <?= esc_html($item['description']); ?>
                                        </p>

                                    </div>


                                    <span class="flip-hint">
                                        Hover to flip back
                                    </span>

                                </div>

                            </div>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>


        <!-- KEY TAKEAWAY -->

        <div class="pa-standalone-takeaway">

            <div class="takeaway-banner wide-banner">

                <div class="takeaway-badge-icon">
                    ✓
                </div>

                <div class="takeaway-text-group">

                    <strong class="takeaway-title">
                        Key Takeaway —
                    </strong>

                    <span class="takeaway-body">
                        There is no perfect age to buy travel insurance —
                        only the age you are when the trip happens.
                        Premiums are modest at every stage. The consequences
                        of travelling without cover are not. Buy before
                        departure. Every time.
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     CAROUSEL JAVASCRIPT
===================================================== -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const section = document.querySelector('#travel-impact');

    if (!section) return;

    const track = section.querySelector('.policy-impact-carousel-track');
    const prevBtn = section.querySelector('.prev-btn');
    const nextBtn = section.querySelector('.next-btn');
    const slides = section.querySelectorAll('.carousel-slide');

    if (!track || slides.length === 0) return;

    let autoScrollInterval = null;

    const autoScrollDelay = 3500;
    let isDragging = false;
    let startX = 0;
    let startScrollLeft = 0;


    /* =========================================
       GET SLIDE WIDTH
    ========================================= */

    function getScrollAmount() {

        const slideWidth = slides[0].getBoundingClientRect().width;

        const gap = parseFloat(
            getComputedStyle(track).gap
        ) || 24;

        return slideWidth + gap;

    }


    /* =========================================
       NEXT SLIDE
    ========================================= */

    function scrollNext() {

        const maxScroll = track.scrollWidth - track.clientWidth;

        if (maxScroll <= 2) return;

        if (track.scrollLeft >= maxScroll - 10) {

            track.scrollTo({
                left: 0,
                behavior: 'smooth'
            });

        } else {

            track.scrollBy({
                left: getScrollAmount(),
                behavior: 'smooth'
            });

        }

    }


    /* =========================================
       PREVIOUS SLIDE
    ========================================= */

    function scrollPrev() {

        const maxScroll = track.scrollWidth - track.clientWidth;

        if (maxScroll <= 2) return;

        if (track.scrollLeft <= 10) {

            track.scrollTo({
                left: maxScroll,
                behavior: 'smooth'
            });

        } else {

            track.scrollBy({
                left: -getScrollAmount(),
                behavior: 'smooth'
            });

        }

    }


    /* =========================================
       AUTO SCROLL
    ========================================= */

    function startAutoScroll() {

        if (autoScrollInterval !== null) return;

        autoScrollInterval = setInterval(function () {

            if (!isDragging) {
                scrollNext();
            }

        }, autoScrollDelay);

    }


    function stopAutoScroll() {

        if (autoScrollInterval !== null) {

            clearInterval(autoScrollInterval);

            autoScrollInterval = null;

        }

    }


    function resetAutoScroll() {

        stopAutoScroll();
        startAutoScroll();

    }


    /* =========================================
       ARROW BUTTONS
    ========================================= */

    if (prevBtn) {

        prevBtn.addEventListener('click', function () {

            scrollPrev();
            resetAutoScroll();

        });

    }

    if (nextBtn) {

        nextBtn.addEventListener('click', function () {

            scrollNext();
            resetAutoScroll();

        });

    }


    /* =========================================
       PAUSE WHEN USER INTERACTS
    ========================================= */

    track.addEventListener('mouseenter', stopAutoScroll);

    track.addEventListener('mouseleave', startAutoScroll);


    /* =========================================
       TOUCH SUPPORT
    ========================================= */

    track.addEventListener('touchstart', stopAutoScroll, {
        passive: true
    });

    track.addEventListener('touchend', function () {

        startAutoScroll();

    }, {
        passive: true
    });


    /* =========================================
       MOUSE DRAG SUPPORT
    ========================================= */

    track.addEventListener('mousedown', function (e) {

        if (e.button !== 0) return;

        isDragging = true;

        startX = e.pageX;
        startScrollLeft = track.scrollLeft;

        track.classList.add('is-dragging');

        stopAutoScroll();

    });


    window.addEventListener('mouseup', function () {

        if (!isDragging) return;

        isDragging = false;

        track.classList.remove('is-dragging');

        startAutoScroll();

    });


    track.addEventListener('mousemove', function (e) {

        if (!isDragging) return;

        e.preventDefault();

        const distance = (e.pageX - startX) * 1.5;

        track.scrollLeft = startScrollLeft - distance;

    });


    track.addEventListener('mouseleave', function () {

        if (!isDragging) return;

        isDragging = false;

        track.classList.remove('is-dragging');

        startAutoScroll();

    });


    /* =========================================
       START AUTOMATIC CAROUSEL
    ========================================= */

    requestAnimationFrame(function () {

        startAutoScroll();

    });


    /* =========================================
       CLEAN RESIZE
    ========================================= */

    window.addEventListener('resize', function () {

        stopAutoScroll();

        startAutoScroll();

    });

});

</script>
