<?php
/**
 * Vima Vidya
 * What PA Insurance Actually Costs — Interactive Expandable Card Carousel with Clean Circular Navigation Arrows
 */

$pa_profiles = [
    [
        'title'        => 'Young Professional (IT)',
        'age'          => '27',
        'csi'          => '₹40 lakh',
        'occupation'   => 'Class 1 (Office)',
        'premium'      => '₹2,000–₹3,500',
        'image'        => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'Entry Level'
    ],
    [
        'title'        => 'Field Sales Executive',
        'age'          => '32',
        'csi'          => '₹50 lakh',
        'occupation'   => 'Class 2 (Field)',
        'premium'      => '₹3,500–₹5,500',
        'image'        => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'Field Travel'
    ],
    [
        'title'        => 'Construction Supervisor',
        'age'          => '38',
        'csi'          => '₹60 lakh',
        'occupation'   => 'Class 3 (Manual)',
        'premium'      => '₹6,000–₹9,000',
        'image'        => 'https://images.unsplash.com/photo-1541888946425-d0fbb18f06f4?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'Manual Risk'
    ],
    [
        'title'        => 'Family PA Plan',
        'age'          => '42',
        'csi'          => '₹1 crore + family',
        'occupation'   => 'Class 1',
        'premium'      => '₹9,000–₹14,000',
        'image'        => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'Comprehensive'
    ],
    [
        'title'        => 'Mid-Career Professional',
        'age'          => '45',
        'csi'          => '₹1 crore',
        'occupation'   => 'Class 1',
        'premium'      => '₹8,000–₹13,000',
        'image'        => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'Wealth Shield'
    ],
    [
        'title'        => 'Pre-Retirement Individual',
        'age'          => '58',
        'csi'          => '₹75 lakh',
        'occupation'   => 'Class 1',
        'premium'      => '₹10,000–₹18,000',
        'image'        => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'Late Career'
    ],
    [
        'title'        => 'PMSBY Scheme',
        'age'          => 'Any 18–70',
        'csi'          => '₹2 lakh (AD/PTD)',
        'occupation'   => 'All',
        'premium'      => '₹20/year (fixed)',
        'image'        => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'Govt Scheme'
    ]
];
?>

<section class="vv-interactive-carousel" id="evaluate-pa-actual-costs">
    <div class="vv-interactive-carousel__container">

        <!-- SECTION HEADER -->
        <header class="vv-interactive-carousel__header">
            <div class="vv-interactive-carousel__header-left">
                <span class="vv-interactive-carousel__eyebrow">PRICING BENCHMARKS</span>
                <h2 class="vv-interactive-carousel__title">
                    What PA Insurance Actually Costs
                </h2>
                <p class="vv-interactive-carousel__intro">
                    These figures are indicative and vary by insurer, occupation class, age, and add-ons selected. Click <strong>Read More</strong> on any profile to explore details.
                </p>
            </div>
        </header>

        <!-- CAROUSEL CONTAINER WITH CIRCULAR EDGE NAVIGATION BUTTONS -->
        <div class="vv-ic-outer-wrap">
            <button class="vv-ic-edge-btn vv-ic-edge-btn--prev" aria-label="Scroll left">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <div class="vv-ic-wrapper" id="icWrapper">
                <div class="vv-ic-track" id="icTrack">
                    <?php foreach ($pa_profiles as $index => $profile) : ?>
                    <div class="vv-ic-card <?php echo $index === 0 ? 'is-expanded' : ''; ?>" data-card-index="<?php echo $index; ?>">
                        
                        <!-- INITIAL VIEW (Title + Read More Button) -->
                        <div class="vv-ic-card__collapsed-content">
                            <span class="card-badge"><?php echo esc_html($profile['badge']); ?></span>
                            <h3 class="card-title"><?php echo esc_html($profile['title']); ?></h3>
                            
                            <button class="card-toggle-btn" type="button" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                                <span class="btn-text">Read More</span>
                                <span class="btn-icon">↗</span>
                            </button>
                        </div>

                        <!-- EXPANDED VIEW -->
                        <div class="vv-ic-card__expanded-content">
                            <div class="expanded-inner-top">
                                <span class="card-badge"><?php echo esc_html($profile['badge']); ?></span>
                                <h3 class="card-title"><?php echo esc_html($profile['title']); ?></h3>
                            </div>

                            <div class="expanded-body-grid">
                                <ul class="card-details-list">
                                    <li>
                                        <span class="label">Age</span>
                                        <span class="value"><?php echo esc_html($profile['age']); ?></span>
                                    </li>
                                    <li>
                                        <span class="label">Sum Insured (CSI)</span>
                                        <span class="value"><?php echo esc_html($profile['csi']); ?></span>
                                    </li>
                                    <li>
                                        <span class="label">Occupation</span>
                                        <span class="value"><?php echo esc_html($profile['occupation']); ?></span>
                                    </li>
                                </ul>

                                <?php if (!empty($profile['image'])) : ?>
                                <div class="card-image-box">
                                    <img src="<?php echo esc_url($profile['image']); ?>" alt="<?php echo esc_attr($profile['title']); ?>" loading="lazy">
                                </div>
                                <?php endif; ?>
                            </div>

                            <div class="expanded-footer-area">
                                <div class="card-footer-price">
                                    <span class="price-title">APPROX. ANNUAL PREMIUM</span>
                                    <span class="price-amount"><?php echo esc_html($profile['premium']); ?></span>
                                </div>

                                <button class="card-collapse-btn" type="button">
                                    <span class="collapse-icon">←</span> Less Details
                                </button>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <button class="vv-ic-edge-btn vv-ic-edge-btn--next" aria-label="Scroll right">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>

        <!-- CALCULATION FRAMEWORK / KEY TAKEAWAY BOX -->
        <div class="vv-pa-calc-box">
            <div class="vv-pa-calc-box__icon">📐</div>
            <div class="vv-pa-calc-box__content">
                <h4 class="vv-pa-calc-box__title">
                    How to calculate what you should spend on PA Insurance
                </h4>
                <p class="vv-pa-calc-box__text">
                    A well-sized PA policy should cost <strong>0.5–1.5%</strong> of the Capital Sum Insured annually. So, CSI = 10× your annual income + outstanding loans. Annual premium target = 0.5–1.5% of that CSI. For most working Indians aged 25–50, this works out to between <strong>₹4,000 and ₹18,000 per year</strong> — a small fraction of what an accident without cover would cost your family.
                </p>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('icTrack');
    const wrapper = document.getElementById('icWrapper');
    const cards = document.querySelectorAll('.vv-ic-card');
    const prevBtn = document.querySelector('.vv-ic-edge-btn--prev');
    const nextBtn = document.querySelector('.vv-ic-edge-btn--next');

    if (!track) return;

    let autoScrollInterval;
    let isUserInteracting = false;

    // Expand/Collapse Toggle Functionality
    cards.forEach(card => {
        const toggleBtn = card.querySelector('.card-toggle-btn');
        const collapseBtn = card.querySelector('.card-collapse-btn');

        toggleBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            isUserInteracting = true;
            
            const isOpen = card.classList.contains('is-expanded');
            cards.forEach(c => c.classList.remove('is-expanded'));
            
            if (!isOpen) {
                card.classList.add('is-expanded');
                toggleBtn.setAttribute('aria-expanded', 'true');
                card.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
            }
        });

        if (collapseBtn) {
            collapseBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                card.classList.remove('is-expanded');
                toggleBtn.setAttribute('aria-expanded', 'false');
            });
        }
    });

    // Auto-scroll Carousel Logic
    const scrollStep = 320;
    function startAutoCarousel() {
        autoScrollInterval = setInterval(() => {
            if (isUserInteracting) return;
            
            if (track.scrollLeft + track.clientWidth >= track.scrollWidth - 5) {
                track.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: scrollStep, behavior: 'smooth' });
            }
        }, 3500);
    }

    wrapper.addEventListener('mouseenter', () => { isUserInteracting = true; });
    wrapper.addEventListener('mouseleave', () => { isUserInteracting = false; });

    nextBtn.addEventListener('click', () => {
        isUserInteracting = true;
        if (track.scrollLeft + track.clientWidth >= track.scrollWidth - 5) {
            track.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
            track.scrollBy({ left: scrollStep, behavior: 'smooth' });
        }
    });

    prevBtn.addEventListener('click', () => {
        isUserInteracting = true;
        if (track.scrollLeft <= 0) {
            track.scrollTo({ left: track.scrollWidth, behavior: 'smooth' });
        } else {
            track.scrollBy({ left: -scrollStep, behavior: 'smooth' });
        }
    });

    startAutoCarousel();
});
</script>