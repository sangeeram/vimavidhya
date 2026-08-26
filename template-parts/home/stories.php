<?php
// Story items structured with image URLs matching your site & design themes
$stories = [
    [
        'category'    => 'HEALTH INSURANCE',
        'badge_icon'  => 'https://img.icons8.com/ios-filled/50/0b48a2/health-heart.png',
        'title'       => 'When health insurance matters',
        'excerpt'     => 'A sudden medical expense can change everything. Learn how the right health insurance provides financial support and peace of mind.',
        'image_url'   => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80',
        'link'        => '/health-insurance/story-1'
    ],
    [
        'category'    => 'PROPERTY INSURANCE',
        'badge_icon'  => 'https://img.icons8.com/ios-filled/50/16a34a/home.png',
        'title'       => 'Protecting what you have built',
        'excerpt'     => 'Your home is more than just a building. Discover how property insurance can help you rebuild and recover from unexpected events.',
        'image_url'   => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80',
        'link'        => '/property-insurance/story-2'
    ],
    [
        'category'    => 'LIFE INSURANCE',
        'badge_icon'  => 'https://img.icons8.com/ios-filled/50/9333ea/conference-call.png',
        'title'       => 'Planning for those who matter',
        'excerpt'     => 'Life is full of uncertainties. Learn how life insurance ensures your loved ones are financially secure, no matter what.',
        'image_url'   => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'link'        => '/life-insurance/story-3'
    ]
];
?>

<section class="stories-section">
    <div class="stories-section__header">
        <div class="header-badge">
            <img src="https://img.icons8.com/ios-filled/50/0b48a2/filled-like.png" alt="Stories Icon" />
        </div>
        <h2>Stories that connect</h2>
        <p>Real-life situations. Everyday risks. Simple insurance lessons.</p>
    </div>

    <!-- 3D Carousel Wrapper -->
    <div class="carousel-container">
        <button class="carousel-btn prev" id="carouselPrev" aria-label="Previous">
            <img src="https://img.icons8.com/ios-glyphs/30/0b48a2/chevron-left.png" alt="Previous" />
        </button>
        
        <div class="carousel-stage">
            <div class="carousel-track" id="carouselTrack">
                <?php foreach ($stories as $index => $story): ?>
                    <article class="story-card" data-index="<?= $index; ?>">
                        <div class="story-card__image-wrap">
                            <img src="<?= htmlspecialchars($story['image_url']); ?>" alt="<?= htmlspecialchars($story['title']); ?>" loading="lazy" />
                            <span class="story-card__badge">
                                <img src="<?= htmlspecialchars($story['badge_icon']); ?>" class="badge-icon" alt="" />
                                <?= htmlspecialchars($story['category']); ?>
                            </span>
                        </div>
                        <div class="story-card__content">
                            <h3><?= htmlspecialchars($story['title']); ?></h3>
                            <p><?= htmlspecialchars($story['excerpt']); ?></p>
                            <a href="<?= htmlspecialchars($story['link']); ?>" class="story-card__link">
                                Read the story
                                <img src="https://img.icons8.com/ios-glyphs/20/0b48a2/long-arrow-right.png" alt="Arrow" />
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

        <button class="carousel-btn next" id="carouselNext" aria-label="Next">
            <img src="https://img.icons8.com/ios-glyphs/30/0b48a2/chevron-right.png" alt="Next" />
        </button>
    </div>

    <div class="stories-section__cta">
        <a href="/all-stories" class="btn-primary">Explore all stories &rarr;</a>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('carouselTrack');
    const cards = Array.from(track.querySelectorAll('.story-card'));
    const prevBtn = document.getElementById('carouselPrev');
    const nextBtn = document.getElementById('carouselNext');
    
    let currentIndex = 0;
    let autoPlayTimer = null;
    const autoPlayDelay = 3000; // Time per slide (3 seconds)

    // Function to update CSS classes for 3D layout position
    function updateCarousel() {
        const totalCards = cards.length;

        cards.forEach((card, index) => {
            // Remove previous positional classes
            card.classList.remove('active', 'prev-card', 'next-card', 'far-prev', 'far-next');

            // Calculate relative offset from active card
            let offset = index - currentIndex;

            // Handle wrap-around math for continuous looping
            if (offset < -1) offset += totalCards;
            if (offset > 1) offset -= totalCards;

            // Assign positional classes based on calculated offset
            if (offset === 0) {
                card.classList.add('active');
            } else if (offset === -1) {
                card.classList.add('prev-card');
            } else if (offset === 1) {
                card.classList.add('next-card');
            } else if (offset < -1) {
                card.classList.add('far-prev');
            } else {
                card.classList.add('far-next');
            }
        });
    }

    // Move to next slide
    function nextSlide() {
        currentIndex = (currentIndex + 1) % cards.length;
        updateCarousel();
    }

    // Move to previous slide
    function prevSlide() {
        currentIndex = (currentIndex - 1 + cards.length) % cards.length;
        updateCarousel();
    }

    // Auto-play timer controls
    function startAutoPlay() {
        stopAutoPlay(); // Clear any existing intervals first
        autoPlayTimer = setInterval(nextSlide, autoPlayDelay);
    }

    function stopAutoPlay() {
        if (autoPlayTimer) {
            clearInterval(autoPlayTimer);
            autoPlayTimer = null;
        }
    }

    // Event Listeners for Buttons
    nextBtn.addEventListener('click', () => {
        nextSlide();
        startAutoPlay(); // Reset timer on manual click
    });

    prevBtn.addEventListener('click', () => {
        prevSlide();
        startAutoPlay(); // Reset timer on manual click
    });

    // Pause slider when user hovers over carousel area
    const container = document.querySelector('.carousel-container');
    container.addEventListener('mouseenter', stopAutoPlay);
    container.addEventListener('mouseleave', startAutoPlay);

    // Initial setup
    updateCarousel();
    startAutoPlay();
});
</script>