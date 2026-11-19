<?php
/**
 * =========================================================
 * VIMA VIDYA
 * INSURANCE AWARENESS — TYPES OF INSURANCE
 * =========================================================
 */

$section_tagline = 'INSURANCE AWARENESS';
$section_title   = 'Insurance — A risk management tool to protect you through the unexpected';
$section_text    = 'Insurance is a great risk management tool. It is an agreement between an insurer and an individual that helps to compensate for the economic loss suffered. Insurance policies cover various types of risks — when these risks occur, the insurer financially compensates for the loss suffered depending on the agreed terms. A quick look at various types of insurance policies for an individual and what they mean.';

$insurance_items = [
    [
        'number'      => '01',
        'slug'        => 'life',
        'title'       => 'Life Insurance',
        'short_title' => 'Life',
        'icon'        => '❤️',
        'url'         => home_url('/life-insurance/'),
        'image'       => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=1200&q=85',
        'description' => 'Financial security for your dependents — parents, spouse, children — when the primary earner is no longer around.',
        'why'         => [
            '<strong>Income replacement</strong> — Replaces lost income so family commitments — EMIs, school fees — can continue uninterrupted.',
            '<strong>Long-term goals</strong> — Protects children\'s education and retirement savings from being derailed by an untimely loss.',
            '<strong>Debt protection</strong> — Covers outstanding loans so debts don\'t become a burden on your family.'
        ],
        'benefits'    => [
            '<strong>Low cost, high cover</strong> — High coverage at very low premiums, especially when purchased young.',
            '<strong>Tax benefit</strong> — Deductions under Section 80C on premiums paid annually.',
            '<strong>Lock in early</strong> — The younger you buy, the lower the premium for life — rates only rise with age.'
        ],
        'footer'      => 'Mandatory in India? No — but essential if you have dependents. Term plan recommended.'
    ],
    [
        'number'      => '02',
        'slug'        => 'health',
        'title'       => 'Health Insurance',
        'short_title' => 'Health',
        'icon'        => '🏥',
        'url'         => home_url('/health-insurance/'),
        'image'       => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1200&q=85',
        'description' => 'Protect yourself and your family from the rising cost of medical treatment.',
        'why'         => [
            '<strong>Hospital expenses</strong> — Helps manage large medical bills.',
            '<strong>Family protection</strong> — Provides financial support during medical emergencies.',
            '<strong>Cashless treatment</strong> — Eligible treatments can be covered through network hospitals.'
        ],
        'benefits'    => [
            '<strong>Hospitalisation cover</strong> — Coverage for eligible hospitalisation expenses.',
            '<strong>Pre and post treatment</strong> — Certain plans cover related medical expenses.',
            '<strong>Tax benefit</strong> — Eligible premiums may qualify for tax deductions.'
        ],
        'footer'      => 'Not mandatory for everyone, but strongly recommended for financial protection.'
    ],
    [
        'number'      => '03',
        'slug'        => 'accident',
        'title'       => 'Accident Insurance',
        'short_title' => 'Accident',
        'icon'        => '🚨',
        'url'         => home_url('/personal-accident/'),
        'image'       => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=1200&q=85',
        'description' => 'Financial protection against the unexpected impact of accidental injuries.',
        'why'         => [
            '<strong>Accidental injury</strong> — Provides financial support following covered accidents.',
            '<strong>Income protection</strong> — Helps manage financial disruption caused by injury.',
            '<strong>Family support</strong> — Can provide benefits in case of accidental death.'
        ],
        'benefits'    => [
            '<strong>Accidental death benefit</strong> — Financial benefit to nominees under covered conditions.',
            '<strong>Disability benefit</strong> — Support for eligible permanent disabilities.',
            '<strong>Affordable protection</strong> — Accident cover can be relatively inexpensive.'
        ],
        'footer'      => 'Useful additional protection against unexpected accidents.'
    ],
    [
        'number'      => '04',
        'slug'        => 'motor',
        'title'       => 'Motor Insurance',
        'short_title' => 'Motor',
        'icon'        => '🚗',
        'url'         => home_url('/motor-insurance/'),
        'image'       => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1200&q=85',
        'description' => 'Protection for your vehicle against covered accidents, damage and third-party liabilities.',
        'why'         => [
            '<strong>Vehicle protection</strong> — Helps cover eligible repair or replacement costs.',
            '<strong>Third-party liability</strong> — Provides protection against covered third-party liabilities.',
            '<strong>Accident support</strong> — Helps reduce the financial impact of road accidents.'
        ],
        'benefits'    => [
            '<strong>Own damage cover</strong> — Available under relevant comprehensive policies.',
            '<strong>Third-party cover</strong> — Protects against eligible third-party liabilities.',
            '<strong>Roadside assistance</strong> — Available as an add-on in some policies.'
        ],
        'footer'      => 'Third-party motor insurance is mandatory for vehicles on Indian roads.'
    ],
    [
        'number'      => '05',
        'slug'        => 'property',
        'title'       => 'Property Insurance',
        'short_title' => 'Property',
        'icon'        => '🏠',
        'url'         => home_url('/property-insurance/'),
        'image'       => 'https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?auto=format&fit=crop&w=1200&q=85',
        'description' => 'Protection for your home and property against covered risks and unexpected damage.',
        'why'         => [
            '<strong>Home protection</strong> — Helps protect against covered property losses.',
            '<strong>Asset protection</strong> — Provides financial support for eligible damage.',
            '<strong>Peace of mind</strong> — Reduces the financial burden of unexpected property events.'
        ],
        'benefits'    => [
            '<strong>Building cover</strong> — Protection for eligible structural damage.',
            '<strong>Contents cover</strong> — Can protect eligible household belongings.',
            '<strong>Optional extensions</strong> — Additional protection may be available depending on the policy.'
        ],
        'footer'      => 'Home insurance is generally not mandatory, but can protect a major financial asset.'
    ],
    [
        'number'      => '06',
        'slug'        => 'travel',
        'title'       => 'Travel Insurance',
        'short_title' => 'Travel',
        'icon'        => '✈️',
        'url'         => home_url('/travel-insurance/'),
        'image'       => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=1200&q=85',
        'description' => 'Financial protection against unexpected trip cancellations, medical emergencies abroad, and lost luggage.',
        'why'         => [
            '<strong>Medical emergencies abroad</strong> — Covers unexpected hospitalisation and treatment costs while traveling.',
            '<strong>Trip interruption</strong> — Compensates for sudden cancellations, delays, or missed connections.',
            '<strong>Baggage loss safety</strong> — Protection against lost, stolen, or delayed checked-in luggage.'
        ],
        'benefits'    => [
            '<strong>Global assistance</strong> — 24/7 emergency helpline and concierge support worldwide.',
            '<strong>Personal liability</strong> — Covers accidental damages caused to third parties during travel.',
            '<strong>Peace of mind</strong> — Travel stress-free knowing unexpected disruptions are financially cushioned.'
        ],
        'footer'      => 'Highly recommended for international trips; mandatory for visas in many countries.'
    ],
    [
        'number'      => '07',
        'slug'        => 'government-schemes',
        'title'       => 'Government Schemes',
        'short_title' => 'Govt Schemes',
        'icon'        => '🛡️',
        'url'         => home_url('/government-scheme/'),
        'image'       => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1200&q=85',
        'description' => 'Affordable social security and insurance initiatives backed by the government for financial inclusion.',
        'why'         => [
            '<strong>Subsidized premiums</strong> — Highly affordable coverage designed for broad societal welfare.',
            '<strong>Broad accessibility</strong> — Ensures vulnerable and rural populations have basic safety nets.',
            '<strong>Life & accident security</strong> — Schemes like PMJJBY and PMSBY provide crucial family backing.'
        ],
        'benefits'    => [
            '<strong>Low cost enrolment</strong> — Extremely nominal annual subscription fees.',
            '<strong>Direct benefit transfer</strong> — Seamless payouts directly linked to bank accounts.',
            '<strong>Inclusive welfare</strong> — Complements private insurance to cover underserved segments.'
        ],
        'footer'      => 'Accessible via public and private banks; ideal baseline safety net for every citizen.'
    ]
];
?>

<section class="insurance-showcase" id="insurance-showcase">
    <div class="insurance-showcase-container">

        <!-- SECTION HEADER -->
        <header class="insurance-section-header">
            <span class="insurance-section-tagline"><?php echo esc_html($section_tagline); ?></span>
            <h2><?php echo esc_html($section_title); ?></h2>
            <p><?php echo esc_html($section_text); ?></p>
        </header>

        <!-- CAROUSEL WRAPPER -->
        <div class="insurance-carousel-wrapper">
            <button class="insurance-carousel-btn insurance-prev" aria-label="Previous slide">←</button>
            
            <div class="insurance-cards-track" id="insuranceTrack">
                <?php foreach ($insurance_items as $index => $item) : ?>
                <article class="insurance-card" 
                    data-url="<?php echo esc_url($item['url']); ?>"
                    tabindex="0" role="button"
                    aria-label="Learn more about <?php echo esc_attr($item['title']); ?>">

                    <div class="insurance-image-wrap">
                        <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>"
                            loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>">
                        <div class="insurance-image-overlay"></div>
                    </div>

                    <div class="insurance-floating-icon">
                        <span><?php echo esc_html($item['icon']); ?></span>
                    </div>

                    <div class="insurance-card-content">
                        <span class="insurance-number"><?php echo esc_html($item['number']); ?></span>
                        <span class="insurance-blue-line"></span>
                        <h3><?php echo esc_html($item['title']); ?></h3>
                        <p><?php echo esc_html($item['description']); ?></p>
                        <span class="insurance-explore">
                            Explore <span class="insurance-explore-arrow">→</span>
                        </span>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>

            <button class="insurance-carousel-btn insurance-next" aria-label="Next slide">→</button>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('insuranceTrack');
    const prevBtn = document.querySelector('.insurance-carousel-btn.insurance-prev');
    const nextBtn = document.querySelector('.insurance-carousel-btn.insurance-next');
    const cards = document.querySelectorAll('.insurance-card');

    if (!track || !cards.length) return;

    // Carousel Navigation
    function getScrollAmount() {
        const cardWidth = cards[0].offsetWidth;
        const gap = 16; // gap from CSS
        return cardWidth + gap;
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            track.scrollBy({ left: getScrollAmount() * 2, behavior: 'smooth' });
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            track.scrollBy({ left: -(getScrollAmount() * 2), behavior: 'smooth' });
        });
    }

    // Card Click & Key Navigation
    cards.forEach(function(card) {
        const url = card.dataset.url;

        function navigateToUrl() {
            if (url) {
                window.location.href = url;
            }
        }

        card.addEventListener('click', navigateToUrl);

        card.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                navigateToUrl();
            }
        });
    });
});
</script>