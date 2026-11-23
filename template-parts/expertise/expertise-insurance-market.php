<?php
    /**
     * =========================================================
     * VIMA VIDYA
     * INSURANCE MARKET INSTITUTIONS & REFERENCE WORDINGS
     * =========================================================
     */

    $insurance_market_data = [
        'section_eyebrow' => 'GLOBAL STANDARDS & INSIGHTS',
        'title_dark' => 'Insurance Market',
        'title_blue' => 'Institutions and Reference Wordings',
        'intro_paragraph' => 'Insurance is built on precise terms, evolving practices, and continuous learning. This section brings together knowledge and insights that shape the industry—ranging from policy wordings and insurance concepts to the latest industry developments.',
        'secondary_paragraph' => 'Drawing on credible sources such as Lloyd’s Dictionary, the London market, and leading insurance publications, our aim is to simplify complex information and make it accessible.',
        'highlight_box' => 'Whether you are a policyholder, student, or industry professional, this knowledge hub will help you understand not only the language of insurance but also the trends and issues shaping its future.',
        'cards' => [
            [
                'slides' => [
                   get_template_directory_uri() . '/assets/images/expertise/lloyd-image1.png',
                   get_template_directory_uri() . '/assets/images/expertise/lloyd-image2.png',
                   get_template_directory_uri() . '/assets/images/expertise/lloyd-image3.png'
                ],
                'tags' => ['Global', 'Standard'],
                'rating' => '4.9',
                'title' => "Lloyd's Dictionary",
                'description' => 'An official glossary of terms maintained by Lloyd’s of London, offering standardized definitions for various insurance terms. This ensures consistency and global understanding, especially in specialty risk markets.',
                'publisher' => 'Lloyd’s of London',
                'button_text' => 'For more on this',
                'url' => 'https://www.lloyds.com/help/glossary-and-acronyms'
            ],
            [
                'slides' => [
                   get_template_directory_uri() . '/assets/images/expertise/london-image1.png',
                   get_template_directory_uri() . '/assets/images/expertise/london-image2.png',
                   get_template_directory_uri() . '/assets/images/expertise/london-image3.png'
                ],
                'tags' => ['Market', 'Clauses'],
                'rating' => '4.8',
                'title' => 'London Market',
                'description' => 'Refers to the standardized language and clause libraries used within the London insurance market, including policy wordings, endorsements, and regulatory terms. These are widely adopted in complex and international insurance operations.',
                'publisher' => 'London Operations',
                'button_text' => 'For more on this',
                'url' => 'https://thelondoninsurancemarket.com/how-london-works/glossary/'
            ],
            [
                'slides' => [
                    get_template_directory_uri() . '/assets/images/expertise/us-image1.png',
                    get_template_directory_uri() . '/assets/images/expertise/us-image2.png',
                    get_template_directory_uri() . '/assets/images/expertise/us-image3.png'
                ],
                'tags' => ['U.S.', 'Practices'],
                'rating' => '4.7',
                'title' => 'National Underwriter (U.S.)',
                'description' => 'A trusted U.S.-based resource providing terminology, definitions, and industry insights for insurance professionals. This is often used as a reference for American underwriting practices, coverage types, and policy information.',
                'publisher' => 'U.S. Resource Group',
                'button_text' => 'For more on this',
                'url' => 'https://content.naic.org/glossary-insurance-terms'
            ]
        ]
    ];
?>

<section class="insurance-market-section" id="insurance-institutions">
    <div class="insurance-market__container">

        <!-- HEADER SECTION -->
        <div class="insurance-market__header">
            <div class="insurance-market__heading-group">
                <div class="insurance-market__eyebrow">
                    <span><?php echo esc_html($insurance_market_data['section_eyebrow']); ?></span>
                </div>
                <h2 class="insurance-market__title">
                    <span class="title-dark"><?php echo esc_html($insurance_market_data['title_dark']); ?></span>
                    <span class="title-blue"><?php echo esc_html($insurance_market_data['title_blue']); ?></span>
                </h2>
            </div>

            <div class="insurance-market__intro-text">
                <p><?php echo esc_html($insurance_market_data['intro_paragraph']); ?></p>
                <p><?php echo esc_html($insurance_market_data['secondary_paragraph']); ?></p>
            </div>
        </div>

        <!-- FEATURED BANNER -->
        <div class="insurance-market__banner">
            <div class="insurance-market__banner-content">
                <div class="insurance-market__banner-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <p><?php echo esc_html($insurance_market_data['highlight_box']); ?></p>
            </div>
        </div>

        <!-- HORIZONTAL CARDS WITH CAROUSEL ANIMATION -->
        <div class="insurance-market__stack">
            <?php foreach ($insurance_market_data['cards'] as $index => $card) : ?>
                <div class="horizontal-card">
                    
                    <!-- LEFT COLUMN: CAROUSEL CONTAINER -->
                    <div class="horizontal-card__media" data-carousel>
                        <div class="carousel-track">
                            <?php foreach ($card['slides'] as $slide_index => $slide_url) : ?>
                                <div class="carousel-slide <?php echo $slide_index === 0 ? 'active' : ''; ?>">
                                    <img src="<?php echo esc_url($slide_url); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy">
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Top Tags -->
                        <div class="horizontal-card__tags">
                            <?php foreach ($card['tags'] as $tag) : ?>
                                <span class="horizontal-card__tag"><?php echo esc_html($tag); ?></span>
                            <?php endforeach; ?>
                        </div>

                        <!-- Top Rating -->
                        <div class="horizontal-card__rating">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <span><?php echo esc_html($card['rating']); ?></span>
                        </div>

                        <!-- Bottom Carousel Pagination Dots -->
                        <div class="horizontal-card__dots">
                            <?php foreach ($card['slides'] as $dot_index => $slide_url) : ?>
                                <button type="button" class="dot <?php echo $dot_index === 0 ? 'active' : ''; ?>" data-slide="<?php echo $dot_index; ?>" aria-label="Slide <?php echo $dot_index + 1; ?>"></button>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN: CONTENT BODY -->
                    <div class="horizontal-card__body">
                        <div class="horizontal-card__content-top">
                            <span class="horizontal-card__subtitle">Reference Guide 0<?php echo $index + 1; ?></span>
                            <h3><?php echo esc_html($card['title']); ?></h3>
                            <p class="horizontal-card__desc"><?php echo esc_html($card['description']); ?></p>
                        </div>

                        <div class="horizontal-card__content-bottom">
                            <span class="horizontal-card__author"><?php echo esc_html($card['publisher']); ?></span>
                            
                            <a href="<?php echo esc_url($card['url']); ?>" class="horizontal-card__button">
                                <?php echo esc_html($card['button_text']); ?>
                                <span>→</span>
                            </a>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- AUTOMATED & CLICKABLE CAROUSEL SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const carousels = document.querySelectorAll("[data-carousel]");

    carousels.forEach(carousel => {
        const slides = carousel.querySelectorAll(".carousel-slide");
        const dots = carousel.querySelectorAll(".dot");
        let currentIndex = 0;
        let interval;

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove("active"));
            dots.forEach(dot => dot.classList.remove("active"));
            
            currentIndex = (index + slides.length) % slides.length;
            
            slides[currentIndex].classList.add("active");
            dots[currentIndex].classList.add("active");
        }

        // Click event for pagination dots
        dots.forEach((dot, index) => {
            dot.addEventListener("click", () => {
                showSlide(index);
                resetTimer();
            });
        });

        // Auto-advance loop every 4 seconds
        function startTimer() {
            interval = setInterval(() => {
                showSlide(currentIndex + 1);
            }, 4000);
        }

        function resetTimer() {
            clearInterval(interval);
            startTimer();
        }

        startTimer();
    });
});
</script>