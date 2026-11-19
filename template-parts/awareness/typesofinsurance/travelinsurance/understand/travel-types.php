<?php
/**
 * ============================================================
 * VIMA VIDYA
 * TRAVEL INSURANCE MASTER COMPONENT (Individual Policy Tabs)
 * ============================================================
 */

$travel_master_data = [
    'domestic-trip' => [
        'tab_title'     => 'Single Trip — Domestic',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
        'card_title'    => 'Single Trip — Domestic Travel Insurance',
        'image'         => 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'One or more named travellers on a single domestic journey',
        'min_age'       => 'From birth (1 day old)',
        'max_age'       => '85 years',
        'key_features'  => 'Travel insurance is among the most accessible insurance products in India. For domestic trips, virtually any Indian resident can purchase a policy.',
        'description'   => 'Under a family plan, children are usually covered at no extra charge.',
        'best_for'      => 'Anyone travelling within India — whether by train, road, or air. Pilgrims, trekkers, weekend travellers.'
    ],
    'international-trip' => [
        'tab_title'     => 'Single Trip — International',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
        'card_title'    => 'Single Trip — International Travel Insurance',
        'image'         => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Travellers heading outside India for leisure, business, or visits',
        'min_age'       => 'From birth (1 day old)',
        'max_age'       => '70 years (standard policies)',
        'key_features'  => 'For international travel, most insurers cover travellers up to established age bands subject to pre-existing condition declarations.',
        'description'   => 'If you are above 60, look for a Senior Citizen Travel Plan — these go up to age 85 but cost more.',
        'best_for'      => 'People travelling internationally who need robust overseas medical and emergency assistance'
    ],
    'senior-citizen' => [
        'tab_title'     => 'Senior Citizen Plan',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>',
        'card_title'    => 'Senior Citizen Travel Plan',
        'image'         => 'https://images.unsplash.com/photo-1516738901171-8eb4fc13bd20?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Travellers aged 60 years and above',
        'min_age'       => '60 years',
        'max_age'       => '85 years (not all insurers offer this)',
        'key_features'  => 'Specialised coverage designed for older travellers needing medical and emergency assistance abroad.',
        'description'   => 'You must declare all existing health conditions when buying. Payouts for specific conditions may be capped under the stability clause.',
        'best_for'      => 'Elderly travellers and parents visiting their children abroad'
    ],
    'annual-multitrip' => [
        'tab_title'     => 'Annual Multi-Trip',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.66-5.66"/></svg>',
        'card_title'    => 'Annual Multi-Trip Policy',
        'image'         => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'The named policyholder, for as many trips as they take in 12 months',
        'min_age'       => '18 years',
        'max_age'       => '70 years (standard policies)',
        'key_features'  => 'Ideal for frequent travellers taking multiple trips throughout the year under a single annual policy structure.',
        'description'   => 'Each individual trip under this policy can last a maximum of 30–45 days. Longer trips need a separate single-trip policy.',
        'best_for'      => 'Frequent travellers — anyone making 4 or more trips a year'
    ],
    'family-floater' => [
        'tab_title'     => 'Family Floater',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'card_title'    => 'Family Floater (Main Policyholder)',
        'image'         => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'You, your spouse, your children, and immediate family under one unified plan',
        'min_age'       => '18 years',
        'max_age'       => '65 years',
        'key_features'  => 'Comprehensive protection covering the primary policyholder and immediate family members under one unified plan.',
        'description'   => 'Your spouse gets the same level of cover as you. Children are covered at no extra cost.',
        'best_for'      => 'Families on holiday together, and those taking family members on trips'
    ],
    'dependent-children' => [
        'tab_title'     => 'Dependent Children',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5.586a1 1 0 0 1 .707.293l5.414 5.414a1 1 0 0 1 .293.707V19a2 2 0 0 1-2 2z"/></svg>',
        'card_title'    => 'Dependent Children Coverage',
        'image'         => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Children travelling with family or embarking on approved youth journeys',
        'min_age'       => '91 days old',
        'max_age'       => '25 years',
        'key_features'  => 'Extends coverage for children travelling with family or embarking on approved youth journeys.',
        'description'   => 'Once your child turns 25 (or the age limit on your policy), they are no longer covered under your family plan. Buy them their own policy before that birthday.',
        'best_for'      => 'Parents travelling with children or sending youth on school/family trips'
    ],
    'dependent-parents' => [
        'tab_title'     => 'Parents / In-laws',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg>',
        'card_title'    => 'Dependent Parents / In-laws',
        'image'         => 'https://images.unsplash.com/photo-1516738901171-8eb4fc13bd20?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Senior parents and in-laws accompanying you or visiting family abroad',
        'min_age'       => 'Any age',
        'max_age'       => '85 years (varies by insurer)',
        'key_features'  => 'Customised protection for senior parents and in-laws accompanying you on trips or visiting family abroad.',
        'description'   => 'Always declare their age and all health conditions honestly when buying. Payouts for senior dependents may have a cap.',
        'best_for'      => 'Travellers taking elderly parents on pilgrimage or family holidays'
    ],
    'student-travel' => [
        'tab_title'     => 'Student Travel',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>',
        'card_title'    => 'Student Travel Policy',
        'image'         => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Students going abroad for full-time education',
        'min_age'       => '16 years',
        'max_age'       => '35 years',
        'key_features'  => 'Tailored specifically for students pursuing higher education or academic programs abroad.',
        'description'   => 'Must cover the full duration of your academic year abroad. The policy must match your visa type and the country you are studying in.',
        'best_for'      => 'Students going abroad on F-1, Tier-4, or similar student visas'
    ],
    'corporate-group' => [
        'tab_title'     => 'Corporate Group',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'card_title'    => 'Corporate Group Travel',
        'image'         => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Employees of a company, covered together under one master policy',
        'min_age'       => 'Must be employed',
        'max_age'       => 'Retirement age',
        'key_features'  => 'Business travel insurance provided through employer-sponsored group policies.',
        'description'   => 'Cover is linked to your job — it ends when you leave. Cannot be carried over to a new employer. Personal holidays are not covered.',
        'best_for'      => 'A useful starting point for business travel — but not sufficient on its own for personal holidays'
    ]
];
?>

<section class="vv-property-types vv-travel-types" id="travel-types">
    <div class="vv-container">

        <header class="vv-section-header">
            <div class="vv-section-kicker">
                <!-- <span class="vv-badge">Types of Travel Insurance</span> -->
            </div>
            <h2 class="vv-title">Types of Travel Insurance</h2>
            <p class="vv-subtitle">Travel insurance is not a single product. It is a category of trip-specific policies, each designed for a different type of traveller, trip, or duration.</p>
        </header>

        <div class="vv-stack-wrapper" data-accordion-group>
            <?php $i = 1; foreach ($travel_master_data as $key => $item) : 
                $num_str = str_pad($i, 2, '0', STR_PAD_LEFT);
            ?>
                <article
                    class="vv-stack-card <?php echo $i === 1 ? 'is-active' : ''; ?>"
                    data-accordion-card
                    tabindex="0"
                    aria-expanded="<?php echo $i === 1 ? 'true' : 'false'; ?>"
                    style="--card-image: url('<?php echo esc_url($item['image']); ?>');"
                >
                    <div class="vv-card-image"></div>
                    <div class="vv-card-overlay"></div>

                    <!-- COLLAPSED TRIGGER TAB -->
                    <button
                        type="button"
                        class="vv-tab-trigger"
                        data-accordion-trigger
                        aria-label="Expand <?php echo esc_attr($item['tab_title']); ?>"
                    >
                        <span class="vv-tab-icon"><?php echo $item['tab_icon']; ?></span>
                        <span class="vv-collapsed-label"><?php echo esc_html($item['tab_title']); ?></span>
                        <span class="vv-tab-arrow">&rarr;</span>
                    </button>

                    <!-- EXPANDED CONTENT -->
                    <div class="vv-card-content">
                        <div class="vv-card-main">
                            <div class="vv-card-header">
                                <span class="vv-card-number"><?php echo $num_str; ?></span>
                                <h3 class="vv-card-title"><?php echo esc_html($item['card_title']); ?></h3>
                            </div>
                        </div>

                        <div class="vv-card-details">
                            <div class="vv-detail-block">
                                <div class="vv-detail-icon"><span>♙</span></div>
                                <span class="vv-detail-label">WHO IT COVERS & AGE LIMIT</span>
                                <p class="vv-detail-text">
                                    <strong>Covers:</strong> <?php echo esc_html($item['who_it_covers']); ?><br>
                                    <strong>Age Range:</strong> Min: <?php echo esc_html($item['min_age']); ?> | Max: <?php echo esc_html($item['max_age']); ?>
                                </p>
                            </div>

                            <div class="vv-detail-block">
                                <div class="vv-detail-icon"><span>◇</span></div>
                                <span class="vv-detail-label">KEY FEATURES & DESCRIPTION</span>
                                <p class="vv-detail-text"><?php 
                                    $kf = isset($item['key_features']) ? $item['key_features'] : '';
                                    $desc = isset($item['description']) ? $item['description'] : '';
                                    echo esc_html(trim($kf . ' ' . $desc)); 
                                ?></p>
                            </div>

                            <div class="vv-detail-block">
                                <div class="vv-detail-icon"><span>⌂</span></div>
                                <span class="vv-detail-label">BEST FOR</span>
                                <p class="vv-detail-text"><?php echo esc_html($item['best_for']); ?></p>
                            </div>
                        </div>
                    </div>
                </article>
            <?php $i++; endforeach; ?>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const groups = document.querySelectorAll('[data-accordion-group]');

    groups.forEach(function (group) {
        const cards = group.querySelectorAll('[data-accordion-card]');

        cards.forEach(function (card) {
            const trigger = card.querySelector('[data-accordion-trigger]');

            trigger.addEventListener('click', function () {
                if (card.classList.contains('is-active')) return;

                cards.forEach(function (item) {
                    item.classList.remove('is-active');
                    item.setAttribute('aria-expanded', 'false');
                });

                card.classList.add('is-active');
                card.setAttribute('aria-expanded', 'true');
            });
        });
    });
});
</script>