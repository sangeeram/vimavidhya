<?php
/**
 * What You Can Claim Section Template (Travel Insurance)
 */

$claims_data = [
    [
        'title' => 'Emergency Medical Expenses',
        'payout' => 'Cashless or reimbursement',
        'limit' => 'Up to Medical Sum Insured',
        'notes' => 'Primary benefit; hospital bills, surgery, ICU, diagnostics, prescriptions',
        'image' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Medical Evacuation',
        'payout' => 'Insurer arranges and funds',
        'limit' => 'Actual cost up to sub-limit',
        'notes' => 'Helicopter, road ambulance, air ambulance — whichever is medically needed',
        'image' => 'https://images.unsplash.com/photo-1516738901171-8eb4fc13bd20?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Repatriation of Mortal Remains',
        'payout' => 'Insurer arranges and funds',
        'limit' => 'Up to repatriation sub-limit',
        'notes' => 'Air freight, consular clearances, preservation, and handling',
        'image' => 'https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Trip Cancellation',
        'payout' => 'Reimbursement',
        'limit' => 'Up to Trip Cancellation limit',
        'notes' => 'Pre-departure only; covered reason required; documentation mandatory',
        'image' => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Trip Delay',
        'payout' => 'Reimbursement of expenses',
        'limit' => 'Per-day limit up to maximum',
        'notes' => 'Activates after threshold (3 hrs domestic, 6 hrs international); keep receipts [To check]',
        'image' => 'https://images.unsplash.com/photo-1464037866556-6812c9d1c72e?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Trip Interruption / Curtailment',
        'payout' => 'Reimbursement',
        'limit' => 'Up to Interruption limit',
        'notes' => 'Unused prepaid costs + emergency return ticket; covered reason required',
        'image' => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Checked Baggage Loss',
        'payout' => 'Reimbursement',
        'limit' => 'Up to sub-limit per item and total',
        'notes' => 'PIR (Property Irregularity Report) mandatory for airline; FIR (First Information Report) mandatory for theft',
        'image' => 'https://images.unsplash.com/photo-1565026057475-728f5f5e6a27?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Checked Baggage Delay',
        'payout' => 'Reimbursement of emergency purchases',
        'limit' => 'Up to Baggage Delay sub-limit',
        'notes' => 'Activates after threshold (6–12 hours); keep all receipts',
        'image' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Passport and Document Loss',
        'payout' => 'Reimbursement',
        'limit' => 'Fixed sub-limit',
        'notes' => 'Emergency replacement cost abroad; police report required [Is complaint to be filed with Indian consulate in the visiting country too?]',
        'image' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Personal Accident (Accidental Death / Dismemberment)',
        'payout' => 'Lump sum',
        'limit' => 'Per policy schedule',
        'notes' => 'Accidents during the trip; separate from long-term PA insurance',
        'image' => 'https://images.unsplash.com/photo-1506784983877-45594efa4cbe?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Personal Liability',
        'payout' => 'Insurer pays liability costs',
        'limit' => 'Up to Personal Liability limit',
        'notes' => 'Third-party injury or property damage; do not admit liability without insurer guidance',
        'image' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Emergency Cash Advance',
        'payout' => 'Cash disbursed; recovered at settlement',
        'limit' => 'Up to advance limit',
        'notes' => 'Loan against final settlement — not a free disbursement',
        'image' => 'https://images.unsplash.com/photo-1580519542036-c47de6196ba5?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Compassionate Visit',
        'payout' => 'Reimbursement of airfare',
        'limit' => 'Economy class; threshold hospitalisation days required',
        'notes' => 'Family member to reach you if hospitalised abroad 5–7+ days',
        'image' => 'https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Adventure Sports Injuries (add-on)',
        'payout' => 'Same as medical benefit',
        'limit' => 'Up to Medical Sum Insured',
        'notes' => 'Extends cover to declared activities that are normally excluded',
        'image' => 'https://images.unsplash.com/photo-1551698618-1dfe5d97d256?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Study Interruption (student plan, add-on)',
        'payout' => 'Reimbursement of course fees',
        'limit' => 'Up to Study Interruption limit',
        'notes' => 'Medical event forcing deferral; university documentation required',
        'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80'
    ]
];
?>
<section class="coverage-section" id="what-you-can-claim">
    <div class="coverage-container">
        <header class="coverage-header">
             <h2 class="sec-title">Claim Process - A Complete Guide</h2>
             <h3 class="coverage-title">What You Can Claim</h3>
             <p class="coverage-description">
               Coverage differs by policy, plan, and add-ons selected. This is a reference view of what is claimable under a comprehensive travel insurance policy.
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