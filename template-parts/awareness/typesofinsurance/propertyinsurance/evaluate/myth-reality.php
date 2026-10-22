<?php
$myths_realities = [
    [
        'image' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?w=400&auto=format&fit=crop&q=80',
        'myth' => 'Nothing will happen to my home — I have lived here 30 years and nothing has happened.',
        'reality' => 'India has recorded catastrophic earthquakes, cyclones, and floods in every decade. The absence of a past loss is not evidence that a future loss won\'t come. Risk is by definition unpredictable.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=400&auto=format&fit=crop&q=80',
        'myth' => 'My housing society\'s policy covers my flat.',
        'reality' => 'A housing society\'s master policy covers common areas and the building shell only. It does NOT cover your individual flat\'s interior, your contents, your jewellery, or your electronics. You need your own policy.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=400&auto=format&fit=crop&q=80',
        'myth' => 'I am a tenant — I don\'t own the home, so I don\'t need insurance.',
        'reality' => 'You do not insure the home you rent but you need to insure everything you brought into it — electronics, appliances, jewellery, furniture. All of that is entirely your responsibility. Your landlord\'s policy cannot and will not cover your belongings.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=400&auto=format&fit=crop&q=80',
        'myth' => 'Property insurance is expensive.',
        'reality' => 'A basic home insurance policy for a ₹50 lakh property costs ₹3,000–₹5,000 a year — less than a monthly mobile plan.<br><br>A Shopkeeper\'s Package Policy covering ₹5 lakh in stock and equipment costs approximately ₹4,000–₹6,000 a year — less than 2 days of revenue for most small shops.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?w=400&auto=format&fit=crop&q=80',
        'myth' => 'My bank\'s insurance covers my home fully.',
        'reality' => 'The bank\'s insurance is sized to protect the bank\'s outstanding loan — not the full Reinstatement Value of your structure, and certainly not your contents. It is designed to recover the bank\'s collateral. You must take your own independent policy to protect yourself.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&auto=format&fit=crop&q=80',
        'myth' => 'I can update my policy whenever I want.',
        'reality' => 'Policy updates require endorsements, which must be requested proactively. A renovation completed six months ago that was never declared leaves you exposed at claim time. Update your policy immediately after any change.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1578916171728-46686eac8d58?w=400&auto=format&fit=crop&q=80',
        'myth' => 'My shop is small — insurance is for big businesses.',
        'reality' => 'The Shopkeeper\'s Package Policy exists specifically for small and micro businesses. The premium is sized for small-business budgets. The risk — fire, flood, burglary, equipment failure — is identical regardless of whether the business is large or small. The question is not whether the risk exists. It is whether you are prepared for it.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=400&auto=format&fit=crop&q=80',
        'myth' => 'As a shopkeeper I rent my space — the landlord covers any damage.',
        'reality' => 'Your commercial landlord\'s building insurance covers the structure. It does not — and legally cannot — cover your stock, your trade equipment, your cash on premises, or your business interruption. You need your own commercial contents and stock policy.'
    ]
];
?>

<section class="vv-myths-section" id="myth-reality">
    <div class="vv-container">
        
        <!-- Header -->
        <div class="vv-section-header">
            <h2 class="vv-title">Myths vs. Reality of Property Insurance</h2>
            <p class="vv-subtitle">These are the beliefs that leave millions of Indians financially exposed. Each myth sounds reasonable. Each one is wrong.</p>
        </div>

        <!-- Carousel Container -->
        <div class="vv-carousel-wrapper">
            <button class="vv-carousel-nav vv-prev-btn" aria-label="Previous card">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <div class="vv-carousel-viewport">
                <div class="vv-carousel-track">
                    <?php foreach ($myths_realities as $index => $item) : ?>
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

                                    <!-- Back: Reality (Green Theme - keeps original image) -->
                                    <div class="vv-card-face vv-card-back">
                                        <div class="vv-card-header-tag">
                                            <span class="vv-label vv-label--reality">REALITY</span>
                                            <span class="vv-flip-hint-icon">🔄 Tap to Flip</span>
                                        </div>

                                        <div class="vv-card-image-wrap">
                                            <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="Illustration" loading="lazy">
                                        </div>

                                        <div class="vv-reality-text">
                                            <?php echo $item['reality']; ?>
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

    wrapper.addEventListener('mouseenter', stopAutoScroll);
    wrapper.addEventListener('mouseleave', startAutoScroll);

    window.addEventListener('resize', () => {
        createDots();
        updateCarousel();
    });

    createDots();
    updateCarousel();
    startAutoScroll();
});
</script>
