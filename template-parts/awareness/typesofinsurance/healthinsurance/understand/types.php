<?php
/**
 * ============================================================
 * VIMA VIDYA
 * HEALTH INSURANCE MASTER COMPONENT (Individual Policy Tabs)
 * ============================================================
 */

$health_master_data = [
    'individual-health' => [
        'tab_title'     => 'Individual Health',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>',
        'card_title'    => 'Individual Health Policy',
        'image'         => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'One named person',
        'min_age'       => '18 years',
        'max_age'       => '65 years (Max Renewal: Lifetime)',
        'key_features'  => 'Full flexibility on Sum Insured; portable across jobs; add-on options available.',
        'description'   => 'Provides dedicated protection exclusively for a single policyholder without sharing limits.',
        'best_for'      => 'Young professionals; self-employed individuals'
    ],
    'family-floater' => [
        'tab_title'     => 'Family Floater',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'card_title'    => 'Family Floater Policy',
        'image'         => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Insured + spouse + dependent children (91 days – 25 years)',
        'min_age'       => '18 years (Primary)',
        'max_age'       => '65 years (Max Renewal: Lifetime)',
        'key_features'  => 'Single Sum Insured shared by all members; one unified premium under a cost-effective structure.',
        'description'   => 'Children are typically covered under the floater from 91 days up to 25 years of age.',
        'best_for'      => 'Working couples; families with young children'
    ],
    'group-health' => [
        'tab_title'     => 'Group Health (Employer)',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'card_title'    => 'Group Health Policy (Employer)',
        'image'         => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'All enrolled employees (Policy-specific dependent coverage)',
        'min_age'       => 'Per employment',
        'max_age'       => 'Retirement age (Tied to employment)',
        'key_features'  => 'Employer pays premium; covers basic hospitalisation. Note that policies are generally not portable.',
        'description'   => 'Coverage ceases immediately upon leaving the organization or reaching retirement age.',
        'best_for'      => 'Baseline corporate coverage only — not adequate as sole standalone personal cover'
    ],
    'senior-citizen' => [
        'tab_title'     => 'Senior Citizen Plan',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>',
        'card_title'    => 'Senior Citizen Policy',
        'image'         => 'https://images.unsplash.com/photo-1516738901171-8eb4fc13bd20?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Individuals aged 60 and above',
        'min_age'       => '60 years',
        'max_age'       => '80+ years (varies) | Max Renewal: Lifetime',
        'key_features'  => 'Higher premiums; covers pre-existing conditions after waiting period; co-payment often mandatory.',
        'description'   => 'Tailored specifically for older adults requiring dedicated coverage for age-related medical needs.',
        'best_for'      => 'Parents / in-laws aged 60 and above'
    ],
    'critical-illness' => [
        'tab_title'     => 'Critical Illness',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
        'card_title'    => 'Critical Illness Policy',
        'image'         => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Individual / family (Some products include children)',
        'min_age'       => '18 years',
        'max_age'       => '65 years (Max Renewal: 70–75 years)',
        'key_features'  => 'Lump sum payout upon diagnosis of covered critical illnesses; non-indemnity structure.',
        'description'   => 'Provides financial freedom to cover specialized treatments, loss of income, or debt obligations upon diagnosis.',
        'best_for'      => 'Anyone with family dependents; pre-retirement individuals'
    ],
    'super-topup' => [
        'tab_title'     => 'Super Top-Up',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.66-5.66"/></svg>',
        'card_title'    => 'Super Top-Up Policy',
        'image'         => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Individual / family',
        'min_age'       => '18 years',
        'max_age'       => 'Standard adult bands',
        'key_features'  => 'Covers aggregate claims above a deductible threshold; low premium; works seamlessly with any base policy.',
        'description'   => 'An affordable way to expand overall health cover without paying high premiums for a large base policy.',
        'best_for'      => 'Best value for higher coverage at low incremental cost'
    ],
    'ayushman-bharat' => [
        'tab_title'     => 'Ayushman Bharat (PM-JAY)',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/><circle cx="12" cy="12" r="10"/></svg>',
        'card_title'    => 'Ayushman Bharat (PM-JAY)',
        'image'         => 'https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Eligible low-income households (Family-based including dependents)',
        'min_age'       => 'Any (family-based)',
        'max_age'       => 'No limit (Annual renewal)',
        'key_features'  => '₹5 lakh annual cover; cashless treatment at empanelled hospitals; zero premium for beneficiaries.',
        'description'   => 'Government-backed healthcare scheme targeting vulnerable socioeconomic groups.',
        'best_for'      => 'BPL and targeted beneficiary households — not adequate as sole coverage for earning families'
    ]
];
?>

<section class="vv-property-types vv-health-types" id="health-types">
    <div class="vv-container">

        <header class="vv-section-header">
            <div class="vv-section-kicker"></div>
            <h2 class="vv-title">Types of Health Insurance Plans</h2>
            <p class="vv-subtitle">Health insurance is not one-size-fits-all. Understanding the types available in India helps you choose the right layer of protection.</p>
            <p>Most individual health insurance policies in India are available to anyone between 18 and 65 years of age at entry. Many insurers now offer policies without an upper age limit at renewal, subject to loadings. Dependent children can typically be covered from 91 days of age up to 25 years under a family floater.
Unlike Personal Accident Insurance, most health policies require a pre-insurance medical examination for applicants above 45–55 years of age. Below this threshold, coverage is typically based on your self-declared health at proposal.

</p>
        </header>

        <div class="vv-stack-wrapper" data-accordion-group>
            <?php $i = 1; foreach ($health_master_data as $key => $item) : 
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

        <!-- PRE-EXISTING DISEASE WAITING PERIOD NOTICE BOX -->
        <div class="vv-waiting-period-notice">
            <div class="vv-notice-icon">⚠️</div>
            <div class="vv-notice-content">
                <h4 class="vv-notice-title">The Pre-Existing Disease Waiting Period:</h4>
                <p class="vv-notice-text">Most health policies impose a waiting period of 2–4 years for pre-existing diseases (illnesses you had before buying the policy). During this period, expenses related to those conditions will not be reimbursed. This is why buying young — when you are healthy — is critical. The earlier you buy, the sooner your waiting periods are behind you.</p>
            </div>
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