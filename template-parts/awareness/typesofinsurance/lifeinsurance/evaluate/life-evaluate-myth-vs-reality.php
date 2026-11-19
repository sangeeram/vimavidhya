<?php
/**
 * Template Part: Myths vs. Reality of Life Insurance
 * Theme: Vima Vidya Custom Theme (Interactive 3D Flip Carousel)
 */

$life_myths_realities = [
    [
        'image' => 'https://images.unsplash.com/photo-1506015391300-4802dc74de2e?w=400&auto=format&fit=crop&q=80',
        'myth' => 'I\'m young and healthy — I don\'t need life insurance yet.',
        'reality' => 'Youth and health are the two factors that make your premium cheapest and your application easiest. Every year of delay costs you permanently higher premiums for the rest of the policy. A health event at 35 can make ₹1 crore cover unaffordable — or unattainable.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=400&auto=format&fit=crop&q=80',
        'myth' => 'My company provides group term insurance — I\'m covered.',
        'reality' => 'Group insurance typically offers 3–5× your annual salary — far below the 10–12× your family actually needs. It terminates the day you change jobs or are retrenched. You cannot take it with you. It is a workplace benefit, not a family protection plan. Example: For a ₹6 lakh/year earner, that is ₹18–30 lakh. Their actual Human Life Value may be ₹80 lakh–₹1.2 crore. GTI covers 20–35% of actual need — and disappears with the job. Every professional must hold personal term insurance regardless of employer-provided cover.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&auto=format&fit=crop&q=80',
        'myth' => 'Endowment plans are better — I get my money back.',
        'reality' => 'The "money back" is your own money returned at 4–6% annual growth — below most inflation measures. You could have bought a term plan at 1/6th the premium, invested the difference, and ended up with 3–4× more wealth AND 4× more life cover. "Getting money back" is expensive financial comfort.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=400&auto=format&fit=crop&q=80',
        'myth' => 'I don\'t need life insurance because I have savings and investments.',
        'reality' => 'Until those savings and investments equal your Human Life Value — 10–15 years of income, plus liabilities, plus future obligations — your family depends on your presence to fund their future. Life insurance bridges the gap between what you have built and what your family would actually need if you were gone today.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=400&auto=format&fit=crop&q=80',
        'myth' => 'ULIPs give insurance plus investment — it\'s the best of both worlds so I don\'t need a separate term plan.',
        'reality' => 'ULIPs in their early years have high charges (allocation, policy administration, fund management, mortality) that significantly erode returns. The life cover in a ULIP is a fraction of what a separate term plan would provide. If you want investment, use mutual funds. If you want protection, use a term plan. Combining them in a ULIP compromises both. A ULIP is an investment product with thin cover attached. Treating it as your primary life insurance leaves your family exposed to 90%+ of their actual financial need. So, you do need a Term Plan.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=400&auto=format&fit=crop&q=80',
        'myth' => 'Annuities give poor returns — I\'ll invest myself for retirement.',
        'reality' => 'Doing returns comparison misses the point of annuities. Annuities are longevity insurance — they protect against outliving your savings. Self-managed investments require constant management, offer no guarantee of income, and can be exhausted. An annuity pays until your last day, regardless of market conditions. Its value is the guarantee, not the yield.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1506015391300-4802dc74de2e?w=400&auto=format&fit=crop&q=80',
        'myth' => 'I\'ll buy life insurance when I get married / have children.',
        'reality' => 'The day you have dependents is the day you already needed life insurance. Waiting means your family was unprotected during the interval. If a health event occurs before you get around to buying, the premium you will pay after the health event will far exceed what you saved by waiting.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=400&auto=format&fit=crop&q=80',
        'myth' => 'A Guaranteed Income Plan gives poor returns — I\'ll just invest in mutual funds.',
        'reality' => 'Guaranteed Income Plans give certainty, not returns. A mutual fund gives potentially higher returns with no income guarantee. For retirement planning, both have a role: equity mutual funds build wealth during accumulation; a guaranteed income plan provides an income floor in retirement that cannot be market-eroded or outlived. A mere comparison misses the point — they serve different purposes.'
    ]
];
?>

<section class="vv-life-myths-section" id="life-evaluate-myths">
    <div class="vv-life-container">

        <!-- Header -->
        <div class="vv-life-section-header">
            <h2 class="vv-life-title">Myths vs. Reality of Life Insurance</h2>
            <p class="vv-life-subtitle">These are the beliefs that leave millions of Indian families unprotected or under-protected. Each myth sounds reasonable. Each one is wrong.</p>
        </div>

        <!-- Carousel Container -->
        <div class="vv-life-carousel-wrapper">
            <button class="vv-life-carousel-nav vv-life-prev-btn" aria-label="Previous card">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <div class="vv-life-carousel-viewport">
                <div class="vv-life-carousel-track">
                    <?php foreach ($life_myths_realities as $index => $item) : ?>
                        <div class="vv-life-carousel-slide">
                            <div class="vv-life-flip-card" tabindex="0" role="button" aria-label="Click to flip card">
                                <div class="vv-life-flip-card-inner">

                                    <!-- Front: Myth (Red Theme) -->
                                    <div class="vv-life-card-face vv-life-card-front">
                                        <div class="vv-life-card-header-tag">
                                            <span class="vv-life-label--myth">❌ MYTH</span>
                                            <span class="vv-life-flip-hint">🔄 Tap to Flip</span>
                                        </div>

                                        <blockquote class="vv-life-myth-text">
                                            &ldquo;<?php echo htmlspecialchars($item['myth']); ?>&rdquo;
                                        </blockquote>
                                    </div>

                                    <!-- Back: Reality (Green Theme) -->
                                    <div class="vv-life-card-face vv-life-card-back">
                                        <div class="vv-life-card-header-tag">
                                            <span class="vv-life-label--reality">✅ REALITY</span>
                                            <span class="vv-life-flip-hint">🔄 Tap to Flip</span>
                                        </div>

                                        <div class="vv-life-card-image-wrap">
                                            <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="Illustration" loading="lazy">
                                        </div>

                                        <div class="vv-life-reality-text">
                                            <?php echo htmlspecialchars($item['reality']); ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <button class="vv-life-carousel-nav vv-life-next-btn" aria-label="Next card">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>

        <!-- Dots Pagination -->
        <div class="vv-life-carousel-dots" role="tablist" aria-label="Carousel pagination"></div>

    </div>
</section>

<!-- SCRIPT FOR FLIP CARDS & CAROUSEL NAVIGATION -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('#life-evaluate-myths');
    if (!section) return;

    // 1. Flip Card Interaction (Independent per card)
    const flipCards = section.querySelectorAll('.vv-life-flip-card');
    flipCards.forEach(card => {
        card.addEventListener('click', () => {
            card.classList.toggle('is-flipped');
        });
        card.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                card.classList.toggle('is-flipped');
            }
        });
    });

    // 2. Carousel Functionality & Auto-Scroll
    const track = section.querySelector('.vv-life-carousel-track');
    const slides = Array.from(track.children);
    const nextBtn = section.querySelector('.vv-life-next-btn');
    const prevBtn = section.querySelector('.vv-life-prev-btn');
    const dotsContainer = section.querySelector('.vv-life-carousel-dots');
    const wrapper = section.querySelector('.vv-life-carousel-wrapper');

    let currentIndex = 0;
    let autoScrollTimer = null;
    const autoScrollDelay = 5000;

    function getSlidesPerView() {
        if (window.innerWidth <= 768) return 1;
        if (window.innerWidth <= 1024) return 2;
        return 3;
    }

    function updateCarousel() {
        const slidesPerView = getSlidesPerView();
        const maxIndex = Math.max(0, slides.length - slidesPerView);
        if (currentIndex > maxIndex) currentIndex = maxIndex;

        const slideWidth = slides[0].getBoundingClientRect().width + 20;
        track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

        const dots = dotsContainer.querySelectorAll('.vv-life-dot');
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }

    function nextSlide() {
        const slidesPerView = getSlidesPerView();
        const maxIndex = slides.length - slidesPerView;

        if (currentIndex < maxIndex) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    }

    function startAutoScroll() {
        stopAutoScroll();
        autoScrollTimer = setInterval(nextSlide, autoScrollDelay);
    }

    function stopAutoScroll() {
        if (autoScrollTimer) {
            clearInterval(autoScrollTimer);
            autoScrollTimer = null;
        }
    }

    function createDots() {
        dotsContainer.innerHTML = '';
        const slidesPerView = getSlidesPerView();
        const numDots = Math.ceil(slides.length / slidesPerView);

        for (let i = 0; i < numDots; i++) {
            const dot = document.createElement('button');
            dot.classList.add('vv-life-dot');
            if (i === 0) dot.classList.add('active');
            dot.setAttribute('aria-label', `Go to slide group ${i + 1}`);
            dot.addEventListener('click', () => {
                currentIndex = i * slidesPerView;
                updateCarousel();
                startAutoScroll();
            });
            dotsContainer.appendChild(dot);
        }
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            const slidesPerView = getSlidesPerView();
            const maxIndex = slides.length - slidesPerView;
            if (currentIndex < maxIndex) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateCarousel();
            startAutoScroll();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = slides.length - getSlidesPerView();
            }
            updateCarousel();
            startAutoScroll();
        });
    }

    if (wrapper) {
        wrapper.addEventListener('mouseenter', stopAutoScroll);
        wrapper.addEventListener('mouseleave', startAutoScroll);
    }

    window.addEventListener('resize', () => {
        createDots();
        updateCarousel();
    });

    createDots();
    updateCarousel();
    startAutoScroll();
});
</script>