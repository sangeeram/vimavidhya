<?php
/**
 * Template Part: Myths vs. Reality of Personal Accident Insurance
 * Theme: Vima Vidya Custom Theme (Interactive 3D Flip Carousel)
 */

$pa_myths_realities = [
    [
        'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=400&auto=format&fit=crop&q=80',
        'myth' => 'I have health insurance — I am fully covered.',
        'reality' => 'Health insurance pays hospital bills. It does not replace your income if you are disabled for months, nor compensate your family if you are permanently unable to work. PA Insurance fills that gap.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1506015391300-4802dc74de2e?w=400&auto=format&fit=crop&q=80',
        'myth' => 'Nothing will happen to me — I am a safe driver.',
        'reality' => 'India recorded 4,73,000 road accidents in recent data. The most vulnerable age group is 18–45 — the same people who believe they are safe. Accidents by definition are unforeseen.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=400&auto=format&fit=crop&q=80',
        'myth' => 'My employer\'s group cover is enough.',
        'reality' => 'Employer cover typically offers 2–3x your annual salary, stops the day you change jobs, and rarely covers your family. For a 40-year-old with dependents and a home loan, this is far from adequate.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=400&auto=format&fit=crop&q=80',
        'myth' => 'PA Insurance is expensive.',
        'reality' => 'Entry-level PA coverage starts at ₹53 a month. A policy with ₹50 lakh CSI covering death, disability, and income replacement costs ₹500–₹1,000/month — less than most broadband plans.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&auto=format&fit=crop&q=80',
        'myth' => 'My life insurance policy covers accidents too.',
        'reality' => 'Term life insurance pays only on death — from any cause. It pays nothing if you are disabled, unable to work, or need income replacement during a long recovery. PA Insurance is specifically designed for exactly that.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?w=400&auto=format&fit=crop&q=80',
        'myth' => 'I can buy PA Insurance when I need it.',
        'reality' => 'Insurance is the one purchase that must happen before the need arises. A claim event after an accident makes you uninsurable. The premium is cheapest when you are young and healthy.'
    ]
];
?>

<section class="vv-myths-section" id="pa-evaluate-myths">
    <div class="vv-container">
        
        <!-- Header -->
        <div class="vv-section-header">
            <h2 class="vv-title">Myths vs. Reality of Personal Accident Insurance</h2>
            <p class="vv-subtitle">These are the beliefs that leave millions of Indians financially exposed. Each myth sounds reasonable. Each one is wrong.</p>
        </div>

        <!-- Carousel Container -->
        <div class="vv-carousel-wrapper">
            <button class="vv-carousel-nav vv-prev-btn" aria-label="Previous card">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <div class="vv-carousel-viewport">
                <div class="vv-carousel-track">
                    <?php foreach ($pa_myths_realities as $index =>$item) : ?>
                        <div class="vv-carousel-slide">
                            <div class="vv-flip-card" tabindex="0" role="button" aria-label="Click to flip card">
                                <div class="vv-flip-card-inner">
                                    
                                    <!-- Front: Myth (Red Theme) -->
                                    <div class="vv-card-face vv-card-front">
                                        <div class="vv-card-header-tag">
                                            <span class="vv-flip-hint-icon">🔄 Tap to Flip</span>
                                        </div>
                                        
                                        <!-- Large MYTH? Heading Display -->
                                        <div class="vv-big-myth-title">MYTH?</div>

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

<script>
document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('.vv-myths-section');
    if (!section) return;

    // 1. Flip Card Interaction
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
    const autoScrollDelay = 4000;

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