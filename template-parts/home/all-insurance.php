<?php
/**
 * Component: Full-Image Types of Insurance Carousel (Text Over Image)
 */

$insurance_slides = [
    [
        'hook'  => 'Explore the World',
        'type'  => 'Travel Insurance',
        'color' => '#10B981',
        'image' => get_template_directory_uri() . '/assets/images/home/travel insurance.png', // Fixed semicolon to comma & space in filename
        'link'  => '/insurance/travel-insurance/',
    ],
    [
        'hook'  => 'Buy Your First Vehicle',
        'type'  => 'Motor Insurance',
        'color' => '#3B82F6',
        'image' => get_template_directory_uri() . '/assets/images/home/motor insurance.png',
        'link'  => '/insurance/motor-insurance/',
    ],
    [
        'hook'  => 'Build Your Home',
        'type'  => 'Property Insurance',
        'color' => '#F59E0B',
        'image' => get_template_directory_uri() . '/assets/images/home/property insurance.png',
        'link'  => '/insurance/property-insurance/',
    ],
    [
        'hook'  => 'Take Care of Yourself',
        'type'  => 'Health Insurance',
        'color' => '#EC4899',
        'image' => get_template_directory_uri() . '/assets/images/home/health insurance.png',
        'link'  => '/insurance/health-insurance/',
    ],
    [
        'hook'  => 'Life Happens',
        'type'  => 'Personal Accident Insurance',
        'color' => '#EF4444',
        'image' => get_template_directory_uri() . '/assets/images/home/personal accident insurance.png',
        'link'  => '/insurance/personal-accident-insurance/',
    ],
    [
        'hook'  => 'Secure Your Family',
        'type'  => 'Life Insurance',
        'color' => '#8B5CF6',
        'image' => get_template_directory_uri() . '/assets/images/home/life insurance.png',
        'link'  => '/insurance/life-insurance/',
    ],
];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<section class="section-insurance-carousel" aria-labelledby="insurance-carousel-heading">
    <div class="insurance-carousel-container">

        <header class="insurance-carousel-header">
            <h2 id="insurance-carousel-heading" class="title">Explore All Insurance Topics</h2>
        </header>

        <?php if (!empty($insurance_slides)) : ?>
        <div class="insurance-carousel-shell">
            <div class="swiper insurance-swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($insurance_slides as $slide) :
                        $accent = esc_attr($slide['color']);
                        $url    = esc_url($slide['link']);
                    ?>
                    <article class="swiper-slide insurance-slide">
                        <a href="<?php echo $url; ?>" class="insurance-poster" style="--accent-color: <?php echo $accent; ?>;">
                            <img src="<?php echo esc_url($slide['image']); ?>"
                                 alt="<?php echo esc_attr($slide['hook'] . ' - ' . $slide['type']); ?>"
                                 loading="lazy" />

                            <div class="insurance-poster__overlay">
                                <span class="insurance-poster__hook">
                                    <?php echo esc_html($slide['hook']); ?>
                                </span>
                                <h3 class="insurance-poster__type">
                                    <?php echo esc_html($slide['type']); ?>
                                </h3>
                            </div>
                        </a>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <button type="button" class="insurance-nav insurance-nav--prev" aria-label="Previous insurance type">
                &lsaquo;
            </button>
            <button type="button" class="insurance-nav insurance-nav--next" aria-label="Next insurance type">
                &rsaquo;
            </button>

            <div class="insurance-pagination"></div>
        </div>
        <?php endif; ?>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const swiperEl = document.querySelector('.insurance-swiper');
    if (!swiperEl || typeof Swiper === 'undefined') return;

    new Swiper(swiperEl, {
        slidesPerView: 1.15,
        spaceBetween: 16,
        grabCursor: true,
        watchOverflow: true,
        pagination: {
            el: '.insurance-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.insurance-nav--next',
            prevEl: '.insurance-nav--prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 24,
            },
        },
    });
});
</script>