<?php
$claims_data = [
    [
        'title' => 'Accidental Death (AD)',
        'payout' => 'Lump sum to nominee',
        'limit' => '100% of CSI',
        'notes' => 'Within 12 months of accident; FIR + death certificate required',
        'image' => 'https://images.unsplash.com/photo-1541888946425-d0fbb18f2f2c?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Permanent Total Disability (PTD)',
        'payout' => 'Lump sum to insured',
        'limit' => '100% of CSI (up to 125% in select policies)',
        'notes' => 'Formally certified after 6–12 months post-injury; specific qualifying conditions apply',
        'image' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Permanent Partial Disability (PPD)',
        'payout' => 'Lump sum per Disability Schedule',
        'limit' => '5%–100% of CSI, per schedule',
        'notes' => 'Depends entirely on your policy\'s Disability Schedule — compare before buying',
        'image' => 'https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Temporary Total Disability (TTD)',
        'payout' => 'Weekly / monthly benefit',
        'limit' => '~1% of CSI per week, capped at 52–104 weeks',
        'notes' => 'Must provide regular medical certificates; paid retrospectively',
        'image' => 'https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Accidental Medical Reimbursement',
        'payout' => 'Reimbursement / cashless',
        'limit' => 'Up to a % of CSI or fixed limit',
        'notes' => 'Add-on; hospital bills arising from accident',
        'image' => 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Fracture Care / Broken Bones Benefit',
        'payout' => 'Lump sum per fracture schedule',
        'limit' => 'Fixed sums by bone type / severity',
        'notes' => 'Add-on; independent of disability payout; paid even if recovery is full',
        'image' => 'https://images.unsplash.com/photo-1526738549149-8e07eca6c147?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Hospital Confinement / Daily Cash',
        'payout' => 'Per-day benefit',
        'limit' => '₹1,000–₹3,000/day typically',
        'notes' => 'Add-on; for each day hospitalised due to an accident',
        'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Education Grant',
        'payout' => 'Lump sum per child',
        'limit' => '5–10% of CSI per child',
        'notes' => 'Add-on; triggered by AD or PTD; for dependent children up to ~age 19',
        'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'EMI / Loan Protector',
        'payout' => 'Monthly payments or lump sum',
        'limit' => 'Outstanding EMI schedule',
        'notes' => 'Add-on; covers home / vehicle / personal loan EMIs during disability',
        'image' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Carriage of Mortal Remains',
        'payout' => 'Reimbursement',
        'limit' => 'Fixed limit (typically ₹5,000–₹25,000)',
        'notes' => 'Add-on; cost of transporting body to hometown',
        'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Ambulance (incl. Air Ambulance)',
        'payout' => 'Reimbursement',
        'limit' => 'Fixed limit',
        'notes' => 'Add-on; for emergency transport to hospital after accident',
        'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Burns Benefit',
        'payout' => 'Lump sum by severity',
        'limit' => 'Per burns schedule in policy',
        'notes' => 'Add-on; for burns of specified degree and body surface area',
        'image' => 'https://images.unsplash.com/photo-1539185441755-769473a23570?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Home Alteration / Vehicle Modification',
        'payout' => 'Reimbursement',
        'limit' => 'Fixed limit',
        'notes' => 'Add-on; wheelchair ramps, modified vehicles after permanent mobility-affecting disability',
        'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Life Support Benefit',
        'payout' => 'Lump sum',
        'limit' => 'Fixed amount or % of CSI',
        'notes' => 'Add-on; triggered if insured is put on life support post-accident',
        'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Family Transportation Allowance',
        'payout' => 'Reimbursement',
        'limit' => 'Fixed limit',
        'notes' => 'Add-on; family travel costs to reach hospital in another city',
        'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Adventure Sports Cover',
        'payout' => 'Extends standard AD/PTD/PPD/TTD cover',
        'limit' => 'Same as base policy',
        'notes' => 'Add-on; extends cover to specific adventure activities normally excluded',
        'image' => 'https://images.unsplash.com/photo-1580519542036-c47de6196ba5?auto=format&fit=crop&w=600&q=80'
    ]
];
?>

<section class="coverage-section" id="what-you-can-claim">
    <div class="coverage-container">
        <header class="coverage-header">
             <h2 class="sec-title">What You Can Claim — A Complete Reference</h2>
            <h3 class="coverage-title">What You Can Claim</h3>
            <p class="coverage-description">
                The four core events (AD, PTD, PPD, TTD) are the foundation. Add-ons extend what is payable. Here is everything claimable under a comprehensive PA policy in one reference view.
            </p>
        </header>
    </div>

    <!-- Carousel Wrapper with Left/Right Floating Arrows -->
    <div class="carousel-wrapper">
        <button class="carousel-arrow prev-arrow" aria-label="Previous items">&#10094;</button>
        
        <div class="carousel-track-container">
            <div class="carousel-track">
                <?php foreach ($claims_data as $index => $item): ?>
                    <div class="flip-card-item" tabindex="0">
                        <div class="flip-card-inner">
                            
                            <!-- Front Face -->
                            <div class="flip-card-front">
                                <div class="card-image-wrapper">
                                    <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" loading="lazy">
                                </div>
                                <h3 class="card-title"><?php echo htmlspecialchars($item['title']); ?></h3>
                                <span class="flip-hint">Hover / Tap to Flip &rarr;</span>
                            </div>

                            <!-- Back Face -->
                            <div class="flip-card-back">
                                <div class="detail-group">
                                    <span class="detail-label">Payout Basis</span>
                                    <span class="detail-value highlight"><?php echo htmlspecialchars($item['payout']); ?></span>
                                </div>
                                
                                <div class="detail-group">
                                    <span class="detail-label">% of CSI / Amount</span>
                                    <span class="detail-value accent"><?php echo htmlspecialchars($item['limit']); ?></span>
                                </div>

                                <div class="detail-group">
                                    <span class="detail-label">Notes</span>
                                    <p class="detail-notes"><?php echo htmlspecialchars($item['notes']); ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <button class="carousel-arrow next-arrow" aria-label="Next items">&#10095;</button>
    </div>

    <!-- Dots Navigation Indicator -->
    <div class="carousel-dots"></div>
</section>
<script>
 document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector('.carousel-track');
    const container = document.querySelector('.carousel-track-container');
    const nextBtn = document.querySelector('.next-arrow');
    const prevBtn = document.querySelector('.prev-arrow');
    const dotsContainer = document.querySelector('.carousel-dots');

    if (!track || !container) return;

    const cards = track.querySelectorAll('.flip-card-item');
    let currentIndex = 0;
    
    // 3 visible items on desktop, 2 on tablet, 1 on mobile
    const getVisibleCount = () => window.innerWidth > 1024 ? 3 : (window.innerWidth > 768 ? 2 : 1);
    let maxIndex = Math.max(0, cards.length - getVisibleCount());

    // Generate Pagination Dots
    const updateDots = () => {
        if (!dotsContainer) return;
        dotsContainer.innerHTML = '';
        maxIndex = Math.max(0, cards.length - getVisibleCount());
        
        for (let i = 0; i <= maxIndex; i++) {
            const dot = document.createElement('button');
            dot.classList.add('dot');
            if (i === currentIndex) dot.classList.add('active');
            dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
            dot.addEventListener('click', () => {
                currentIndex = i;
                updateCarousel();
                resetAutoScroll();
            });
            dotsContainer.appendChild(dot);
        }
    };

    const updateCarousel = () => {
        maxIndex = Math.max(0, cards.length - getVisibleCount());
        if (currentIndex > maxIndex) currentIndex = maxIndex;

        const cardWidth = cards[0].offsetWidth;
        const gap = 24; // Match SCSS gap
        const offset = currentIndex * (cardWidth + gap);
        
        track.style.transform = `translateX(-${offset}px)`;

        const dots = dotsContainer ? dotsContainer.querySelectorAll('.dot') : [];
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    };

    updateDots();

    // --- MANUAL CONTROLS ---
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            currentIndex = currentIndex >= maxIndex ? 0 : currentIndex + 1;
            updateCarousel();
            resetAutoScroll();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            currentIndex = currentIndex <= 0 ? maxIndex : currentIndex - 1;
            updateCarousel();
            resetAutoScroll();
        });
    }

    // --- AUTO-SCROLL SETUP ---
    let autoScrollTimer;
    const startAutoScroll = () => {
        autoScrollTimer = setInterval(() => {
            currentIndex = currentIndex >= maxIndex ? 0 : currentIndex + 1;
            updateCarousel();
        }, 4000); // Switches cards every 4 seconds
    };

    const resetAutoScroll = () => {
        clearInterval(autoScrollTimer);
        startAutoScroll();
    };

    startAutoScroll();

    // Pause auto-scroll on hover
    container.addEventListener('mouseenter', () => clearInterval(autoScrollTimer));
    container.addEventListener('mouseleave', startAutoScroll);

    window.addEventListener('resize', () => {
        updateDots();
        updateCarousel();
    });
});
</script>