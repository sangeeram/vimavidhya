<?php
$claims_data = [
    [
        'title' => 'Building / Structure Damage',
        'payout' => 'Reinstatement Value (cost to rebuild)',
        'limit' => 'Up to Building Sum Insured',
        'notes' => 'Must use CPWD/PWD rates; Average Clause applies if under-insured',
        'image' => 'https://images.unsplash.com/photo-1541888946425-d0fbb18f2f2c?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Contents — Fire, Flood, Named Perils',
        'payout' => 'New-for-Old or Market Value',
        'limit' => 'Up to Contents Sum Insured',
        'notes' => 'Coverage basis depends on policy type chosen',
        'image' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Jewellery & Valuables (declared)',
        'payout' => 'Agreed Value per valuation certificate',
        'limit' => 'Per item as declared',
        'notes' => 'Must be listed as Specified Items; valuation certificate required',
        'image' => 'https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Jewellery (undeclared)',
        'payout' => 'Market Value, up to sub-limit',
        'limit' => '₹50,000–₹1 lakh (varies by policy)',
        'notes' => 'Sub-limit applies; undeclared items capped',
        'image' => 'https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Theft / Burglary',
        'payout' => 'Replacement cost or market value',
        'limit' => 'Up to contents sum insured',
        'notes' => 'FIR required; some policies require evidence of forcible entry',
        'image' => 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Electronic Equipment (EEI)',
        'payout' => 'Repair or replacement',
        'limit' => 'Per item declared',
        'notes' => 'Add-on; covers breakdown, power surge, accidental damage',
        'image' => 'https://images.unsplash.com/photo-1526738549149-8e07eca6c147?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Portable Equipment (outside home)',
        'payout' => 'Replacement / repair',
        'limit' => 'Per device declared',
        'notes' => 'Add-on; follows device outside home',
        'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Loss of Rent / Alternate Accommodation',
        'payout' => 'Monthly rent or hotel cost',
        'limit' => 'Up to Indemnity Period (6–12 months)',
        'notes' => 'Add-on; triggered when property uninhabitable after covered event',
        'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Third-Party Liability',
        'payout' => 'Legal costs + compensation',
        'limit' => 'Per policy limit',
        'notes' => 'Covers legal claims for injury/property damage to third party',
        'image' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Debris Removal',
        'payout' => 'Actual cost',
        'limit' => 'Up to a percentage of SI',
        'notes' => 'Often automatically included; verify in policy',
        'image' => 'https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Architects\'/Surveyors\' Fees',
        'payout' => 'Actual cost',
        'limit' => 'Up to a percentage of SI',
        'notes' => 'For rebuilding plans after structural damage',
        'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'All-Risks Cover (jewellery outside home)',
        'payout' => 'Agreed value',
        'limit' => 'Per item declared',
        'notes' => 'Add-on; covers chain snatching, loss in transit, away from home',
        'image' => 'https://images.unsplash.com/photo-1539185441755-769473a23570?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Business Stock Loss (SFSP / SPKG)',
        'payout' => 'Replacement cost of stock',
        'limit' => 'Up to Stock Sum Insured',
        'notes' => 'Must be insured at maximum seasonal value; Average Clause applies if under-insured',
        'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Trade Equipment / Machinery Loss',
        'payout' => 'Replacement / repair cost',
        'limit' => 'Per item/category declared',
        'notes' => 'All equipment must be listed in policy schedule at full replacement value',
        'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Shop Fixtures & Fittings',
        'payout' => 'Replacement / reinstatement cost',
        'limit' => 'Up to declared SI for fixtures',
        'notes' => 'Shelving, counters, glass — must be declared; some require separate endorsement',
        'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Cash on Premises',
        'payout' => 'Actual cash stolen',
        'limit' => 'Up to cash cover limit (typically ₹25K–₹2L)',
        'notes' => 'Add-on; FIR required; safe required above certain limits',
        'image' => 'https://images.unsplash.com/photo-1580519542036-c47de6196ba5?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Plate Glass Breakage',
        'payout' => 'Replacement cost of glass',
        'limit' => 'Per pane / total limit',
        'notes' => 'Separate endorsement; shop fronts, display windows, countertops',
        'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Business Interruption / Loss of Profit',
        'payout' => 'Actual revenue lost during closure',
        'limit' => 'Subject to Indemnity Period (e.g. 3–6 months)',
        'notes' => 'Add-on; triggered by covered physical loss that forces closure',
        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Public / Third-Party Liability (Business)',
        'payout' => 'Legal costs + compensation to injured party',
        'limit' => 'Per policy limit',
        'notes' => 'Customer injuries, damage to adjacent property; included in most Shopkeeper\'s Package Policies',
        'image' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Fidelity / Employee Dishonesty',
        'payout' => 'Actual loss from employee theft',
        'limit' => 'Per policy limit',
        'notes' => 'Add-on; requires proof of employee dishonesty; police report required',
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80'
    ]
];
?>
<section class="coverage-section" id="what-you-can-claim">
    <div class="coverage-container">
        <header class="coverage-header">
             <h2 class="sec-title">Claim Process -  A Complete Guide</h2>
            <h3 class="coverage-title">What You Can Claim</h3>
            <p class="coverage-description">
                The building and contents covers are the foundation. Add-ons extend what is payable. Here is everything claimable under a comprehensive property insurance policy in one reference view.
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
                                    <span class="detail-label">Limit / Amount</span>
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