<?php
/**
 * Hospital Networks and the Cashless Facility Component Template (Travel Insurance)
 */

$travel_network_cards = [
    [
        'title'   => 'Cashless Hospitalisation — International',
        'aspect'  => 'Cashless Hospitalisation — International',
        'notes'   => 'Available at the insurer\'s empanelled overseas hospitals or global assistance network. Insurer pre-authorises and pays the hospital directly — you pay nothing at discharge up to the sum insured.',
        'action'  => 'Requires calling the 24/7 insurer helpline before treatment commences.',
        'image'   => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'Cashless Hospitalisation International'
    ],
    [
        'title'   => 'Cashless Hospitalisation — Domestic',
        'aspect'  => 'Cashless Hospitalisation — Domestic',
        'notes'   => 'Available at the insurer\'s domestic network hospitals. For emergency admission to a non-network hospital, most insurers allow reimbursement.',
        'action'  => 'Inform the insurer within 24 hours of admission.',
        'image'   => 'https://images.unsplash.com/photo-1586773860418-d37222d8fce3?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'Cashless Hospitalisation Domestic'
    ],
    [
        'title'   => 'Reimbursement Basis',
        'aspect'  => 'Reimbursement Basis',
        'notes'   => 'If the hospital is not in-network, you pay the bill and claim reimbursement.',
        'action'  => 'Keep all original bills, prescriptions, lab reports, and the discharge summary.',
        'image'   => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'Reimbursement Basis'
    ],
    [
        'title'   => 'Finding Your Insurer\'s Network',
        'aspect'  => 'Finding Your Insurer\'s Network',
        'notes'   => 'All IRDAI-regulated insurers must publish their hospital network.',
        'action'  => 'Verify for your specific destination — overseas network, or domestic network for Tier-2 cities and pilgrimage routes.',
        'image'   => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'Finding Your Insurers Network'
    ],
    [
        'title'   => 'Emergency Admission to Any Hospital',
        'aspect'  => 'Emergency Admission to Any Hospital',
        'notes'   => 'In a genuine emergency, you cannot always choose a network hospital. Most insurers allow emergency admissions anywhere with subsequent reimbursement.',
        'action'  => 'Inform the insurer helpline within 24 hours.',
        'image'   => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=800&q=80',
        'alt'     => 'Emergency Admission to Any Hospital'
    ]
];

$takeaway_title = "🔍 The 24/7 Assistance Service — Non-Negotiable for International Travel:";
$takeaway_text1 = "A good assistance service pre-authorises hospital admission, pays the hospital through a global network, provides an English-speaking medical case manager, coordinates medical evacuation or repatriation, briefs your family in India, and operates every hour of every day.";
$takeaway_text2 = "Before buying any international travel policy, call the 24/7 helpline number. See how quickly a human being answers. Ask whether they can confirm cashless network hospitals at your destination. The quality of that response tells you more than any comparison website.";
$takeaway_text3 = "A policy with the cheapest premium and a 45-minute hold time on the assistance line is not a good travel insurance policy. The difference becomes visible at 2 AM in a foreign hospital — when it is too late to change your mind.";
?>

<section class="coverage-section motor-network-section" id="networks">
    <div class="coverage-container">
        <div class="coverage-header">
            <h2 class="sec-title">Hospital Networks and the Cashless Facility</h2>
            <p class="coverage-description">Understanding your network coverage before you buy is essential for seamless medical claims abroad and domestically.</p>
        </div>

        <div class="carousel-wrapper">
            <button class="carousel-arrow prev-arrow" aria-label="Previous slide">&#10094;</button>
            
            <div class="carousel-track-container">
                <div class="carousel-track">
                    <?php foreach ($travel_network_cards as $index => $card): ?>
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
            <?php foreach ($travel_network_cards as $index => $card): ?>
                <button class="dot <?php echo $index === 0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>" aria-label="Slide <?php echo $index + 1; ?>"></button>
            <?php endforeach; ?>
        </div>

        <!-- KEY TAKEAWAY BOX -->
        <div class="key-takeaway-box">
            <div class="takeaway-icon">📞</div>
            <div class="takeaway-content">
                <h4 class="takeaway-title"><?php echo htmlspecialchars($takeaway_title); ?></h4>
                <p class="takeaway-text"><?php echo htmlspecialchars($takeaway_text1); ?></p>
                <p class="takeaway-text" style="margin-top: 8px;"><?php echo htmlspecialchars($takeaway_text2); ?></p>
                <p class="takeaway-text" style="margin-top: 8px;"><?php echo htmlspecialchars($takeaway_text3); ?></p>
            </div>
        </div>
    </div>
</section>

<script>
/**
 * Travel Network Cards Carousel & Flip Interaction Script
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