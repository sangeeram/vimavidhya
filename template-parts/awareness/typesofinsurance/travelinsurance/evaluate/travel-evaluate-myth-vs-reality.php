<?php
/**
 * Template Part: Myths vs. Reality of Travel Insurance
 * Theme: Vima Vidya Custom Theme (Interactive 3D Flip Carousel)
 */

$travel_myths_realities = [
    [
        'image' => 'https://images.unsplash.com/photo-1506015391300-4802dc74de2e?w=400&auto=format&fit=crop&q=80',
        'myth' => 'Travel insurance is only for international trips. I don\'t need it for a domestic holiday.',
        'reality' => 'A helicopter evacuation from Kedarnath costs ₹1.5 lakh. A bag stolen on a night train costs ₹30,000–₹90,000. A cancelled pilgrimage package costs ₹45,000. None of these are international events. Domestic travel carries real financial risk.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=400&auto=format&fit=crop&q=80',
        'myth' => 'My health insurance covers me when I travel — I don\'t need a separate policy.',
        'reality' => 'Most Indian health insurance policies explicitly exclude overseas medical treatment. Domestically, they cover hospitalisation but not evacuation, not baggage, not trip cancellation, and not the sub-limits that leave large out-of-pocket costs.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&auto=format&fit=crop&q=80',
        'myth' => 'It\'s expensive. Not worth it for a short trip.',
        'reality' => 'A domestic 3-day travel policy costs ₹150–₹300. An international 7-day Asia policy costs ₹800–₹1,500. The hotel you booked for one night probably costs more. The premium is not the expensive part — being uninsured is.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=400&auto=format&fit=crop&q=80',
        'myth' => 'Nothing ever happens to me when I travel. I\'ve been travelling for years without incident.',
        'reality' => 'This is selection bias. The travellers who file claims also travelled without incident for years before the event occurred. What changes is not your experience or caution — it is the specific trip, the specific road, the specific day.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=400&auto=format&fit=crop&q=80',
        'myth' => 'My credit card travel insurance is enough.',
        'reality' => 'Credit card travel cover is typically a minimal personal accident benefit — accidental death only, or a small trip delay allowance. It rarely covers overseas medical emergencies to an adequate sum insured, trip cancellation, or baggage loss.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=400&auto=format&fit=crop&q=80',
        'myth' => 'If something goes wrong abroad, I\'ll figure it out.',
        'reality' => 'You will figure it out — by paying from savings, by borrowing from family, or by spending months repaying a massive medical debt. A major overseas hospital bill is not something you can just "figure out" without insurance.'
    ]
];
?>

<section class="vv-myths-section" id="travel-evaluate-myths">
    <div class="vv-container">
        
        <!-- Header -->
        <div class="vv-section-header">
            <h2 class="vv-title">Myths vs. Reality of Travel Insurance</h2>
            <p class="vv-subtitle">These are the beliefs that leave millions of Indian travellers financially exposed. Each myth sounds entirely reasonable. Each one is wrong.</p>
        </div>

        <!-- Carousel Container -->
        <div class="vv-carousel-wrapper">
            <button class="vv-carousel-nav vv-prev-btn" aria-label="Previous card">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <div class="vv-carousel-viewport">
                <div class="vv-carousel-track">
                    <?php foreach ($travel_myths_realities as $index => $item) : ?>
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
    const section = document.querySelector('#travel-evaluate-myths');
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