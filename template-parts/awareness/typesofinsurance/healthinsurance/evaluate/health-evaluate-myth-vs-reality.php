<?php
/**
 * Template Part: Myths vs. Reality of Health Insurance
 * Theme: Vima Vidya Custom Theme (Interactive 3D Flip Carousel)
 */

$health_myths_realities = [
    [
        'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&auto=format&fit=crop&q=80',
        'myth' => 'I\'m young and healthy — I don\'t need it yet',
        'reality' => 'Pre-existing waiting periods start counting only when you buy. Buy at 27, waiting periods expire by 31. Buy at 40, they expire at 44. Every year of delay is a year of non-coverage.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?w=400&auto=format&fit=crop&q=80',
        'myth' => 'My employer\'s group policy is enough',
        'reality' => 'Group cover ends the day you leave. It covers you and perhaps a spouse, at a fixed SI you cannot increase, with no portability. It is a starting point, not a complete solution.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=400&auto=format&fit=crop&q=80',
        'myth' => 'Health insurance is too expensive',
        'reality' => 'An individual policy with ₹5 lakh SI costs less than ₹7,000/year for a young professional. That is ₹580/month — less than one restaurant meal. The cost of not having it is measured in lakhs.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=400&auto=format&fit=crop&q=80',
        'myth' => 'Government schemes cover everyone',
        'reality' => 'Ayushman Bharat covers specific BPL households. It does not cover salaried professionals, self-employed individuals, or anyone above the income threshold. Do not assume you are eligible.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&auto=format&fit=crop&q=80',
        'myth' => 'Filing small claims is always a good idea',
        'reality' => 'Filing small claims reduces your no-claim bonus and may trigger premium increases at renewal. For minor expenses, self-paying and preserving the NCB is often the better financial decision.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=400&auto=format&fit=crop&q=80',
        'myth' => 'All policies are the same — just pick the cheapest',
        'reality' => 'Room rent limits, sub-limits, network strength, co-payment clauses, and exclusion lists vary enormously across products. A cheaper policy that imposes a 20% co-pay could cost you lakhs more at claim time.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?w=400&auto=format&fit=crop&q=80',
        'myth' => 'I can buy when I get sick',
        'reality' => 'Health insurance is bought before illness, not during it. Most insurers will not cover a new pre-existing condition. A policy bought after diagnosis may exclude that condition entirely, or be declined.'
    ]
];
?>

<section class="vv-myths-section" id="health-evaluate-myths">
    <div class="vv-container">
        
        <!-- Header -->
        <div class="vv-section-header">
            <h2 class="vv-title">Myths vs. Reality of Health Insurance</h2>
            <p class="vv-subtitle">These are the beliefs that leave millions of individuals financially exposed. Each myth sounds entirely reasonable. Each one is wrong.</p>
        </div>

        <!-- Carousel Container -->
        <div class="vv-carousel-wrapper">
            <button class="vv-carousel-nav vv-prev-btn" aria-label="Previous card">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <div class="vv-carousel-viewport">
                <div class="vv-carousel-track">
                    <?php foreach ($health_myths_realities as $index => $item) : ?>
                        <div class="vv-carousel-slide">
                            <div class="vv-flip-card" tabindex="0" role="button" aria-label="Click to flip card">
                                <div class="vv-flip-card-inner">
                                    
                                    <!-- Front: Myth (Red Theme) -->
                                    <div class="vv-card-face vv-card-front">
                                        <div class="vv-card-header-tag">
                                            <span class="vv-label vv-label--myth">❌ MYTH</span>
                                            <span class="vv-flip-hint-icon">🔄 Tap to Flip</span>
                                        </div>
                                        
                                        <blockquote class="vv-myth-text">
                                            &ldquo;<?php echo htmlspecialchars($item['myth']); ?>&rdquo;
                                        </blockquote>
                                    </div>

                                    <!-- Back: Reality (Green Theme) -->
                                    <div class="vv-card-face vv-card-back">
                                        <div class="vv-card-header-tag">
                                            <span class="vv-label vv-label--reality">✅ REALITY</span>
                                            <span class="vv-flip-hint-icon">🔄 Tap to Flip</span>
                                        </div>

                                        <div class="vv-card-image-wrap">
                                            <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="Illustration" loading="lazy">
                                        </div>

                                        <div class="vv-reality-text">
                                            <?php echo htmlspecialchars($item['reality']); ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <button class="vv-carousel-nav vv-next-btn" aria-label="Next card">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>

        <!-- Dots Pagination -->
        <div class="vv-carousel-dots" role="tablist" aria-label="Carousel pagination"></div>

    </div>
</section>

<!-- SCRIPT FOR FLIP CARDS & CAROUSEL NAVIGATION -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('#health-evaluate-myths');
    if (!section) return;

    // 1. Flip Card Interaction (Independent per card)
    const flipCards = section.querySelectorAll('.vv-flip-card');
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
    const track = section.querySelector('.vv-carousel-track');
    const slides = Array.from(track.children);
    const nextBtn = section.querySelector('.vv-next-btn');
    const prevBtn = section.querySelector('.vv-prev-btn');
    const dotsContainer = section.querySelector('.vv-carousel-dots');
    const wrapper = section.querySelector('.vv-carousel-wrapper');

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

        const dots = dotsContainer.querySelectorAll('.vv-dot');
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
            dot.classList.add('vv-dot');
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