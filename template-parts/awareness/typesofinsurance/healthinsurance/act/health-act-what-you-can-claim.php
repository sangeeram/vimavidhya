<?php
/**
 * What You Can Claim Section Template (Health Insurance)
 */

$claims_data = [
    [
        'title'  => 'Hospitalisation (Indemnity)',
        'payout' => 'Indemnity / Actual Expenses',
        'limit'  => 'Up to Sum Insured',
        'notes'  => 'Room, nursing, surgeon fees, medicines, diagnostics during admission. SI limit applies; room rent sub-limit may cap proportionally.',
        'image'  => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title'  => 'Pre-hospitalisation',
        'payout' => 'Reimbursement of Medical Bills',
        'limit'  => '30–60 Days Window',
        'notes'  => 'Tests, doctor visits, medicines before admission. Must be for the same diagnosed illness.',
        'image'  => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title'  => 'Post-hospitalisation',
        'payout' => 'Reimbursement of Recovery Care',
        'limit'  => '60–180 Days Window',
        'notes'  => 'Recovery care, follow-up consultations after discharge. Must be directly related to the hospitalisation.',
        'image'  => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title'  => 'Day Care Procedures',
        'payout' => 'Cashless or Reimbursement',
        'limit'  => 'Listed Procedures (<24 Hrs)',
        'notes'  => 'Cataract, dialysis, chemotherapy, etc. requiring less than 24 hours. Check your insurer\'s specific list — most modern policies are comprehensive.',
        'image'  => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title'  => 'Critical Illness (Rider)',
        'payout' => 'Lump Sum Payout',
        'limit'  => 'Fixed Rider Sum Insured',
        'notes'  => 'Diagnosis of covered illness (cancer, heart attack, stroke, kidney failure). Paid regardless of actual expense; amount fixed at policy issuance.',
        'image'  => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title'  => 'Maternity (Add-on)',
        'payout' => 'Cashless or Reimbursement',
        'limit'  => 'Sub-limit / Maternity Cap',
        'notes'  => 'Normal and caesarean delivery, pre-natal, post-natal care, newborn cover. Waiting period (2–4 years) must be served; check sub-limits.',
        'image'  => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title'  => 'AYUSH Treatment',
        'payout' => 'Inpatient Settlement',
        'limit'  => 'Up to Policy Sub-limit',
        'notes'  => 'Ayurveda, Yoga, Unani, Siddha, Homeopathy in inpatient setting. Must be hospitalised; limits apply; check insurer\'s AYUSH coverage.',
        'image'  => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title'  => 'Restore Benefit',
        'payout' => 'Automatic SI Replenishment',
        'limit'  => '100% of Base Sum Insured',
        'notes'  => 'Reinstates SI if exhausted during the year. Check if applies to same illness or only new illness — critical distinction.',
        'image'  => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title'  => 'OPD (if included)',
        'payout' => 'Outpatient Reimbursement',
        'limit'  => 'Annual OPD Limit',
        'notes'  => 'Outpatient doctor consultations, diagnostics, medicines. Available in select premium plans; annual limit applies.',
        'image'  => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=600&q=80'
    ]
];
?>
<section class="coverage-section" id="what-you-can-claim">
    <div class="coverage-container">
        <header class="coverage-header">
             <h2 class="sec-title">Claim Process - A Complete Guide</h2>
             <h3 class="coverage-title">What You Can Claim </h3>
             <p class="coverage-description">
               Coverage differs by policy, plan, and add-ons selected. Explore below to understand what is claimable under a comprehensive health insurance policy.
             </p>
        </header>
    </div>

    <!-- Carousel Wrapper with Left/Right Floating Arrows -->
    <div class="carousel-wrapper">
        <button class="carousel-arrow prev-arrow" aria-label="Previous items">&#10094;</button>
        
        <div class="carousel-track-container">
            <div class="carousel-track">
                <?php foreach ($claims_data as $index =>$item): ?>
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
                                    <span class="detail-label">Claim Type / Payout</span>
                                    <span class="detail-value highlight"><?php echo htmlspecialchars($item['payout']); ?></span>
                                </div>
                                
                                <div class="detail-group">
                                    <span class="detail-label">Limit / Scope</span>
                                    <span class="detail-value accent"><?php echo htmlspecialchars($item['limit']); ?></span>
                                </div>

                                <div class="detail-group">
                                    <span class="detail-label">What Is Covered &amp; To Note</span>
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
    
    const getVisibleCount = () => window.innerWidth > 1024 ? 3 : (window.innerWidth > 768 ? 2 : 1);
    let maxIndex = Math.max(0, cards.length - getVisibleCount());

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
        const gap = 20;
        const offset = currentIndex * (cardWidth + gap);
        
        track.style.transform = `translateX(-${offset}px)`;

        const dots = dotsContainer ? dotsContainer.querySelectorAll('.dot') : [];
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    };

    updateDots();

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

    let autoScrollTimer;
    const startAutoScroll = () => {
        autoScrollTimer = setInterval(() => {
            currentIndex = currentIndex >= maxIndex ? 0 : currentIndex + 1;
            updateCarousel();
        }, 4000);
    };

    const resetAutoScroll = () => {
        clearInterval(autoScrollTimer);
        startAutoScroll();
    };

    startAutoScroll();

    container.addEventListener('mouseenter', () => clearInterval(autoScrollTimer));
    container.addEventListener('mouseleave', startAutoScroll);

    window.addEventListener('resize', () => {
        updateDots();
        updateCarousel();
    });
});
</script>