<?php
$motor_network_cards = [
    [
        'title'   => 'Cashless Garage Network',
        'aspect'  => 'Cashless Garage Network',
        'notes'   => 'Authorised garages where you can get your vehicle repaired without paying the workshop directly — insurer pays the garage.',
        'action'  => 'Before buying: verify the network includes garages near your home and your vehicle brand\'s authorised service centre.',
        'image'   => 'https://images.unsplash.com/photo-1486006920555-c77dce18193b?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'Cashless Garage Network'
    ],
    [
        'title'   => 'Network vs Non-Network Garage',
        'aspect'  => 'Network vs Non-Network Garage',
        'notes'   => 'Network: cashless — you pay only deductible and non-covered items.<br><br>Non-network: reimbursement — you pay upfront and claim back.',
        'action'  => 'Always use network garages where possible; reimbursement involves more documentation and longer settlement time.',
        'image'   => 'https://images.unsplash.com/photo-1580273916550-e323be2ae537?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'Network vs Non-Network Garage'
    ],
    [
        'title'   => 'Authorised Service Centre',
        'aspect'  => 'Authorised Service Centre',
        'notes'   => 'Most comprehensive policies allow use of the vehicle manufacturer\'s authorised service centre as a cashless garage.',
        'action'  => 'Confirm your vehicle brand\'s authorised service centre is in your insurer\'s cashless network before buying.',
        'image'   => 'https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'Authorised Service Centre'
    ],
    [
        'title'   => 'Towing to Network Garage',
        'aspect'  => 'Towing to Network Garage',
        'notes'   => 'If vehicle cannot be driven after an accident, use Roadside Assistance (RSA) to tow it to a cashless network garage.',
        'action'  => 'Do not instruct towing to a non-network garage — cashless eligibility is lost once repairs begin at a non-network facility.',
        'image'   => 'https://images.unsplash.com/photo-1519641481650-f8010892f33f?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'Towing to Network Garage'
    ],
    [
        'title'   => 'EV-Specific Service Centres',
        'aspect'  => 'EV-Specific Service Centres',
        'notes'   => 'Electric vehicles need authorised EV service centres for battery-related repairs — confirm these are in your insurer\'s network.',
        'action'  => 'Especially important in cities where EV service centres are still limited; check network before buying EV insurance.',
        'image'   => 'https://images.unsplash.com/photo-1558449028-b53a39d100fc?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'EV-Specific Service Centres'
    ]
];
?>

<section class="coverage-section motor-network-section">
    <div class="coverage-container">
        <div class="coverage-header">
            <h2 class="sec-title">Networks — Garages and What They Mean</h2>
            <p class="coverage-description">The network that matters in motor insurance is the cashless garage network. Understanding it before you buy is important — discovering it at claim time is too late.</p>
        </div>

        <div class="carousel-wrapper">
            <button class="carousel-arrow prev-arrow" aria-label="Previous slide">&#10094;</button>
            
            <div class="carousel-track-container">
                <div class="carousel-track">
                    <?php foreach ($motor_network_cards as $index => $card): ?>
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
                                        <span class="detail-label">What It Means</span>
                                        <p class="detail-notes"><?php echo $card['notes']; ?></p>
                                    </div>
                                    <div class="detail-group">
                                        <span class="detail-label">Action Required</span>
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
            <?php foreach ($motor_network_cards as $index => $card): ?>
                <button class="dot <?php echo $index === 0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>" aria-label="Slide <?php echo $index + 1; ?>"></button>
            <?php endforeach; ?>
        </div>

        <!-- KEY TAKEAWAY BOX -->
        <!-- <div class="key-takeaway-box">
            <div class="takeaway-icon">🚗</div>
            <div class="takeaway-content">
                <h4 class="takeaway-title">Why Garage Networks Matter</h4>
                <p class="takeaway-text">
                    In motor insurance, having access to a wide cashless garage network means you can drop off your vehicle after an accident and pick it up repaired without needing to arrange heavy upfront cash sums. Always check your preferred service centres before purchasing your policy.
                </p>
            </div>
        </div> -->
    </div>
</section>

<script>
/**
 * Motor Network Cards Carousel & Flip Interaction Script
 */
document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('.motor-network-section');
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