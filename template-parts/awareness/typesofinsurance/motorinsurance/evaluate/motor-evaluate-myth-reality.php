<?php
/**
 * Template Part: Myths vs. Reality of Motor Insurance
 * Theme: Vima Vidya Custom Theme (Interactive 3D Flip Carousel)
 */

$motor_myths_realities = [
    [
        'image' => 'https://images.unsplash.com/photo-1506015391300-4802dc74de2e?w=400&auto=format&fit=crop&q=80',
        'myth' => 'Third-party insurance is enough. My neighbour has driven with just TP for 10 years?',
        'reality' => 'Your neighbour has been lucky. When the problem arrives — a single serious accident — the TP insurer pays the victim. You pay your own ₹3–8 lakh vehicle repair bill entirely from your pocket. Luck is not a policy.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=400&auto=format&fit=crop&q=80',
        'myth' => 'My vehicle is old — comprehensive cover is a waste of money?',
        'reality' => 'A 10-year-old car causing a fatality still generates a MACT award of ₹50–150 lakh. Third-Party insurance protects you from unlimited liability regardless of vehicle age. OD for old vehicles is optional. TP is never optional.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&auto=format&fit=crop&q=80',
        'myth' => 'The motor insurance PA cover of ₹15 lakh is enough for me?',
        'reality' => '₹15 lakh for a 30-year-old earning ₹60,000/month covers less than 21 months of income. Permanent disability means 20+ years of lost earnings. A standalone PA policy sized to your income is essential alongside motor insurance.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=400&auto=format&fit=crop&q=80',
        'myth' => 'Zero Depreciation means my insurer pays 100% — no questions asked?',
        'reality' => 'Zero Dep eliminates depreciation deductions on replaced parts. It does not eliminate the Compulsory Deductible, any Voluntary Deductible, or exclusions such as drunk driving, consequential damage, or undeclared modifications.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=400&auto=format&fit=crop&q=80',
        'myth' => 'My comprehensive policy covers everything that can happen to my car?',
        'reality' => 'Comprehensive does not cover: mechanical breakdown, wear and tear, starting a flooded engine (consequential damage), damage during illegal use, undeclared modifications, or cargo. Read the exclusions section in full.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=400&auto=format&fit=crop&q=80',
        'myth' => 'I can sort out the insurance after the accident happens?',
        'reality' => 'Most motor policies require claim intimation within 24–48 hours. Delayed intimation gives insurers grounds to scrutinise your claim. FIRs for theft must be filed within 24 hours. Sorting it after repairs begin is one of the most common reasons valid claims are settled for far less.'
    ]
];
?>

<section class="vv-myths-section" id="motor-evaluate-myths">
    <div class="vv-container">
        
        <!-- Header -->
        <div class="vv-section-header">
            <h2 class="vv-title">Myths vs. Reality of Motor Insurance</h2>
            <p class="vv-subtitle">These are the beliefs that leave millions of Indians financially exposed when an accident arrives. Each myth sounds reasonable. Each one is wrong.</p>
        </div>

        <!-- Carousel Container -->
        <div class="vv-carousel-wrapper">
            <button class="vv-carousel-nav vv-prev-btn" aria-label="Previous card">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <div class="vv-carousel-viewport">
                <div class="vv-carousel-track">
                    <?php foreach ($motor_myths_realities as $index => $item) : ?>
                        <div class="vv-carousel-slide">
                            <div class="vv-flip-card" tabindex="0" role="button" aria-label="Click to flip card">
                                <div class="vv-flip-card-inner">
                                    
                                    <!-- Front: Myth (Red Theme) -->
                                    <div class="vv-card-face vv-card-front">
                                        <div class="vv-card-header-tag">
                                            <span class="vv-label vv-label--myth">MYTH?</span>
                                            <span class="vv-flip-hint-icon">🔄 Tap to Flip</span>
                                        </div>
                                        
                                        <blockquote class="vv-myth-text">
                                            &ldquo;<?php echo htmlspecialchars($item['myth']); ?>&rdquo;
                                        </blockquote>
                                    </div>

                                    <!-- Back: Reality (Green Theme) -->
                                    <div class="vv-card-face vv-card-back">
                                        <div class="vv-card-header-tag">
                                            <span class="vv-label vv-label--reality">REALITY</span>
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
    const section = document.querySelector('#motor-evaluate-myths');
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