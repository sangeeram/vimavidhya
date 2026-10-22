<?php
$network_cards = [
    [
        'title'  => 'Cashless Hospitalisation',
        'aspect' => 'Cashless Facility',
        'notes'  => 'Available only for Accidental Medical Reimbursement add-on at empanelled hospitals. Insurer settles the bill directly (up to the add-on limit).',
        'image'  => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=800&q=80',
        'alt'    => 'Cashless Hospitalisation'
    ],
    [
        'title'  => 'Reimbursement Basis',
        'aspect' => 'Non-Network Hospital',
        'notes'  => 'If you go to a non-network hospital, pay the bill and claim reimbursement later. Keep all original bills, prescriptions, and discharge summary.',
        'image'  => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80',
        'alt'    => 'Reimbursement Basis'
    ],
    [
        'title'  => 'Finding Your Network',
        'aspect' => 'Insurer Directory',
        'notes'  => 'IRDAI-regulated insurers must publish hospital networks online. Search website for network hospitals or use insurer apps.',
        'image'  => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=800&q=80',
        'alt'    => 'Finding Your Network'
    ],
    [
        'title'  => 'Emergency vs. Planned',
        'aspect' => 'Admission Rules',
        'notes'  => 'In an emergency, admission is allowed at any hospital with reimbursement. Inform the insurer within 24 hours of admission.',
        'image'  => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=800&q=80',
        'alt'    => 'Emergency Admissions'
    ],
    [
        'title'  => 'Tier-2/3 & Rural Areas',
        'aspect' => 'Local Coverage',
        'notes'  => 'Network coverage is thinner outside metros. Check local networks explicitly or rely on the well-documented reimbursement route.',
        'image'  => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=800&q=80',
        'alt'    => 'Rural Areas Coverage'
    ]
];
?>

<section class="coverage-section network-section">
    <div class="coverage-container">
        <div class="coverage-header">
            <h2 class="sec-title">Networks — Hospitals, Clinics, and the Garage Question</h2>
            <p class="coverage-description">PA Insurance is a people-based product, not a motor vehicle-based product. Understanding what 'network' means in this context is essential.</p>
        </div>

        <div class="carousel-wrapper">
            <button class="carousel-arrow prev-arrow" aria-label="Previous slide">&#10094;</button>
            
            <div class="carousel-track-container">
                <div class="carousel-track">
                    <?php foreach ($network_cards as $index => $card): ?>
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
                                        <span class="detail-label">Aspect</span>
                                        <span class="detail-value highlight"><?php echo htmlspecialchars($card['aspect']); ?></span>
                                    </div>
                                    <div class="detail-group">
                                        <span class="detail-label">What It Means for You</span>
                                        <p class="detail-notes"><?php echo htmlspecialchars($card['notes']); ?></p>
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
            <?php foreach ($network_cards as $index => $card): ?>
                <button class="dot <?php echo $index === 0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>" aria-label="Slide <?php echo $index + 1; ?>"></button>
            <?php endforeach; ?>
        </div>

        <!-- KEY TAKEAWAY BOX: THE GARAGE QUESTION -->
        <div class="key-takeaway-box">
            <div class="takeaway-icon">🚗</div>
            <div class="takeaway-content">
                <h4 class="takeaway-title">Are Garages part of PA Insurance?</h4>
                <p class="takeaway-text">
                    No. Garages are part of Motor Insurance (Own Damage and Third-Party Liability cover) — not Personal Accident Insurance. 
                    If you are injured in a road accident, your PA policy responds to your injury, disability, or death. The vehicle repair 
                    cost is covered by your motor insurance. The two are separate products and serve completely different purposes. Some people 
                    confuse the two because road accidents trigger both products simultaneously — PA for the person, motor insurance for the vehicle.
                </p>
            </div>
        </div>
    </div>
</section>
<script>
    /**
 * Network Cards Carousel & Flip Interaction Script
 */
document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('.network-section');
    if (!section) return;

    const track = section.querySelector('.carousel-track');
    const cards = Array.from(track.children);
    const nextButton = section.querySelector('.next-arrow');
    const prevButton = section.querySelector('.prev-arrow');
    const dotsContainer = section.querySelector('.carousel-dots');
    const dots = Array.from(dotsContainer.children);

    let currentIndex = 0;

    // Function to calculate card width with gap and shift the track
    const updateCarousel = (index) => {
        if (cards.length === 0) return;
        
        // Handle boundaries
        if (index < 0) {
            currentIndex = 0;
        } else if (index >= cards.length) {
            currentIndex = cards.length - 1;
        } else {
            currentIndex = index;
        }

        const cardWidth = cards[0].getBoundingClientRect().width + 20; // accounting for 20px gap
        track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

        // Update active dot indicators
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentIndex);
        });
    };

    // Next button click listener
    if (nextButton) {
        nextButton.addEventListener('click', () => {
            updateCarousel(currentIndex + 1);
        });
    }

    // Previous button click listener
    if (prevButton) {
        prevButton.addEventListener('click', () => {
            updateCarousel(currentIndex - 1);
        });
    }

    // Dot navigation click listeners
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            updateCarousel(index);
        });
    });

    // Keyboard accessibility for card flipping & focus states
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