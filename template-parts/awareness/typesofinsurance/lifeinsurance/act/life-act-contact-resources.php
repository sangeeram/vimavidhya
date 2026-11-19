<?php
/**
 * Life Insurance — Useful Contacts and Resources Template
 */

$life_resource_cards = [
    [
        'title'   => 'Your Insurer\'s Claims Helpline',
        'aspect'  => 'Claims Helpline',
        'notes'   => 'Printed on policy document and on insurer\'s website — save in your phone and your nominee\'s phone today.',
        'action'  => 'Immediately on death of the insured — before anything else.',
        'image'   => 'https://images.unsplash.com/photo-1486006920555-c77dce18193b?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'Claims Helpline'
    ],
    [
        'title'   => 'IRDAI Bima Bharosa Grievance Portal',
        'aspect'  => 'Bima Bharosa Portal',
        'notes'   => 'bimabharosa.irdai.gov.in',
        'action'  => 'If your claim is delayed beyond 30 days or wrongly rejected.',
        'image'   => 'https://images.unsplash.com/photo-1580273916550-e323be2ae537?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'IRDAI Bima Bharosa'
    ],
    [
        'title'   => 'Insurance Ombudsman',
        'aspect'  => 'Insurance Ombudsman',
        'notes'   => 'ombudsman.irdai.gov.in — 17 offices across India.',
        'action'  => 'For claim disputes up to ₹50 lakh — free service, no lawyer required.',
        'image'   => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'Insurance Ombudsman'
    ],
    [
        'title'   => 'IRDAI Insurance Information Portal',
        'aspect'  => 'IRDAI Portal',
        'notes'   => 'irdai.gov.in — annual insurer reports, CSR data, registered insurer list.',
        'action'  => 'To verify insurer registration, check CSR, research complaint ratios.',
        'image'   => 'https://images.unsplash.com/photo-1519641481650-f8010892f33f?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'IRDAI Portal'
    ],
    [
        'title'   => 'DigiLocker',
        'aspect'  => 'Digital Vault',
        'notes'   => 'digilocker.gov.in / DigiLocker app.',
        'action'  => 'Store policy documents — accessible to nominee even if physical documents are lost.',
        'image'   => 'https://images.unsplash.com/photo-1558449028-b53a39d100fc?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'DigiLocker'
    ],
    [
        'title'   => 'National Pension System (NPS)',
        'aspect'  => 'Retirement Savings',
        'notes'   => 'npscra.nsdl.co.in / eNPS portal.',
        'action'  => 'Open or contribute to your NPS account for retirement income building.',
        'image'   => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'National Pension System'
    ],
    [
        'title'   => 'PFRDA (Pension Fund Regulatory Authority)',
        'aspect'  => 'Pension Regulator',
        'notes'   => 'pfrda.org.in',
        'action'  => 'All questions related to NPS, ATAL Pension Yojana, retirement income schemes.',
        'image'   => 'https://images.unsplash.com/photo-1541899481282-d53bffe3c351?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'PFRDA'
    ],
    [
        'title'   => 'Central Insurance Repository',
        'aspect'  => 'Policy Repository',
        'notes'   => 'cir.policyholder.gov.in',
        'action'  => 'Consolidate all your life insurance policies in one digital repository — access for nominee.',
        'image'   => 'https://images.unsplash.com/photo-1555680202-c86f0e12f086?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'Central Insurance Repository'
    ],
    [
        'title'   => 'IRDAI ULIP Illustration / Benefit Illustration',
        'aspect'  => 'Benefit Illustration',
        'notes'   => 'irdai.gov.in — ULIP benefit illustration format mandated for all ULIPs.',
        'action'  => 'Request the standard benefit illustration from your insurer before buying any ULIP — it shows projected fund values at 4%, 8%, 12% growth rates net of charges.',
        'image'   => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'ULIP Illustration'
    ]
];
?>

<section class="coverage-section life-resources-section" id="resources">
    <div class="coverage-container">
        <div class="coverage-header">
            <h2 class="sec-title">Useful Contacts and Resources</h2>
            <p class="coverage-description">Essential portals, regulatory authorities, and emergency contacts to help you navigate life insurance, claim disputes, and retirement planning with confidence.</p>
        </div>

        <div class="carousel-wrapper">
            <button class="carousel-arrow prev-arrow" aria-label="Previous slide">&#10094;</button>
            
            <div class="carousel-track-container">
                <div class="carousel-track">
                    <?php foreach ($life_resource_cards as $index => $card): ?>
                        <div class="flip-card-item" tabindex="0">
                            <div class="flip-card-inner">
                                <!-- FRONT -->
                                <div class="flip-card-front">
                                    <div class="card-image-wrapper">
                                        <img src="<?php echo htmlspecialchars($card['image']); ?>" alt="<?php echo htmlspecialchars($card['alt']); ?>">
                                    </div>
                                    <h3 class="card-title"><?php echo htmlspecialchars($card['title']); ?></h3>
                                    <span class="flip-hint">Hover to view details &rarr;</span>
                                </div>
                                
                                <!-- BACK -->
                                <div class="flip-card-back">
                                    <div class="detail-group">
                                        <span class="detail-label">Resource Type</span>
                                        <span class="detail-value highlight"><?php echo htmlspecialchars($card['aspect']); ?></span>
                                    </div>
                                    <div class="detail-group">
                                        <span class="detail-label">Contact / Location</span>
                                        <p class="detail-notes"><?php echo htmlspecialchars($card['notes']); ?></p>
                                    </div>
                                    <div class="detail-group">
                                        <span class="detail-label">When to Use</span>
                                        <p class="detail-notes"><?php echo htmlspecialchars($card['action']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <button class="carousel-arrow next-arrow" aria-label="Next slide">&#10095;</button>
        </div>

        <div class="carousel-dots">
            <?php foreach ($life_resource_cards as $index => $card): ?>
                <button class="dot <?php echo $index === 0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>" aria-label="Slide <?php echo $index + 1; ?>"></button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
/**
 * Life Resources Cards Carousel & Flip Interaction Script
 */
document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('.life-resources-section');
    if (!section) return;

    const track = section.querySelector('.carousel-track');
    const cards = Array.from(track.children);
    const nextButton = section.querySelector('.next-arrow');
    const prevButton = section.querySelector('.prev-arrow');
    const dotsContainer = section.querySelector('.carousel-dots');
    const dots = Array.from(dotsContainer.children);

    let currentIndex = 0;

    const updateCarousel = (index) => {
        if (cards.length === 0) return;
        
        if (index < 0) {
            currentIndex = 0;
        } else if (index >= cards.length) {
            currentIndex = cards.length - 1;
        } else {
            currentIndex = index;
        }

        const cardWidth = cards[0].getBoundingClientRect().width + 20; // 20px gap
        track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentIndex);
        });
    };

    if (nextButton) {
        nextButton.addEventListener('click', () => {
            updateCarousel(currentIndex + 1);
        });
    }

    if (prevButton) {
        prevButton.addEventListener('click', () => {
            updateCarousel(currentIndex - 1);
        });
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            updateCarousel(index);
        });
    });

    cards.forEach(card => {
        card.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                const inner = card.querySelector('.flip-card-inner');
                if (inner) {
                    const isFlipped = inner.style.transform === 'rotateY(180deg)';
                    inner.style.transform = isFlipped ? 'rotateY(0deg)' : 'rotateY(180deg)';
                }
            }
        });
    });
});
</script>