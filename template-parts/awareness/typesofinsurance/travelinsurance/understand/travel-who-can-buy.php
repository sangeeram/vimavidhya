<?php
/**
 * ============================================================
 * VIMA VIDYA
 * TRAVEL INSURANCE MASTER COMPONENT (Individual Policy Tabs)
 * ============================================================
 */

// ============================================================
// TRAVEL INSURANCE DATA STRUCTURE (9 Policy Tabs)
// ============================================================

$travel_master_data = [

    'domestic-trip' => [
        'tab_title' => 'Single Trip — Domestic',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
        'card_title' => 'Single Trip — Domestic Travel Insurance',
        'min_age' => 'From birth (1 day old)',
        'max_age' => '85 years',
        'description' => 'Travel insurance is among the most accessible insurance products in India. For domestic trips, virtually any Indian resident can purchase a policy.',
        'details' => 'Under a family plan, children are usually covered at no extra charge.'
    ],

    'international-trip' => [
        'tab_title' => 'Single Trip — International',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
        'card_title' => 'Single Trip — International Travel Insurance',
        'min_age' => 'From birth (1 day old)',
        'max_age' => '70 years (standard policies)',
        'description' => 'For international travel, most insurers cover travellers up to established age bands subject to pre-existing condition declarations.',
        'details' => 'If you are above 60, look for a Senior Citizen Travel Plan — these go up to age 85 but cost more.'
    ],

    'senior-citizen' => [
        'tab_title' => 'Senior Citizen Plan',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>',
        'card_title' => 'Senior Citizen Travel Plan',
        'min_age' => '60 years',
        'max_age' => '85 years (not all insurers offer this)',
        'description' => 'Specialised coverage designed for older travellers needing medical and emergency assistance abroad.',
        'details' => 'You must declare all existing health conditions when buying. Payouts for specific conditions may be capped. The condition must also have been stable — meaning no new treatment or change in medication — for a set period before your trip (usually 60–90 days). This is called the stability clause.'
    ],

    'annual-multitrip' => [
        'tab_title' => 'Annual Multi-Trip',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.66-5.66"/></svg>',
        'card_title' => 'Annual Multi-Trip Policy',
        'min_age' => '18 years',
        'max_age' => '70 years (standard policies)',
        'description' => 'Ideal for frequent travellers taking multiple trips throughout the year under a single annual policy structure.',
        'details' => 'Each individual trip under this policy can last a maximum of 30–45 days. Longer trips need a separate single-trip policy.'
    ],

    'family-floater' => [
        'tab_title' => 'Family Floater',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'card_title' => 'Family Floater (Main Policyholder)',
        'min_age' => '18 years',
        'max_age' => '65 years',
        'description' => 'Comprehensive protection covering the primary policyholder and immediate family members under one unified plan.',
        'details' => 'Your spouse gets the same level of cover as you. Children are covered at no extra cost.'
    ],

    'dependent-children' => [
        'tab_title' => 'Dependent Children',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5.586a1 1 0 0 1 .707.293l5.414 5.414a1 1 0 0 1 .293.707V19a2 2 0 0 1-2 2z"/></svg>',
        'card_title' => 'Dependent Children Coverage',
        'min_age' => '91 days old',
        'max_age' => '25 years',
        'description' => 'Extends coverage for children travelling with family or embarking on approved youth journeys.',
        'details' => 'Once your child turns 25 (or the age limit on your policy), they are no longer covered under your family plan. Buy them their own policy before that birthday.'
    ],

    'dependent-parents' => [
        'tab_title' => 'Parents / In-laws',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg>',
        'card_title' => 'Dependent Parents / In-laws',
        'min_age' => 'Any age',
        'max_age' => '85 years (varies by insurer)',
        'description' => 'Customised protection for senior parents and in-laws accompanying you on trips or visiting family abroad.',
        'details' => 'Always declare their age and all health conditions honestly when buying. Payouts for senior dependents may have a cap.'
    ],

    'student-travel' => [
        'tab_title' => 'Student Travel',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>',
        'card_title' => 'Student Travel Policy',
        'min_age' => '16 years',
        'max_age' => '35 years',
        'description' => 'Tailored specifically for students pursuing higher education or academic programs abroad.',
        'details' => 'Must cover the full duration of your academic year abroad. The policy must match your visa type and the country you are studying in.'
    ],

    'corporate-group' => [
        'tab_title' => 'Corporate Group',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'card_title' => 'Corporate Group Travel',
        'min_age' => 'Must be employed',
        'max_age' => 'Retirement age',
        'description' => 'Business travel insurance provided through employer-sponsored group policies.',
        'details' => 'Cover is linked to your job — it ends when you leave. Cannot be carried over to a new employer. Personal holidays are not covered.'
    ]

];
?>


<section class="travel-insurance-master-section" id="travel-who-can-buy">
    <div class="master-container">

        <!-- HEADER -->
        <header class="whocanbuy-section-header">
            <h2 class="section-title">
                Who Can Buy a Travel Insurance Policy?
            </h2>
            <p class="section-lead">
                Travel insurance is among the most accessible insurance products in India. Select a category below to explore age limits, entry criteria, and key policy guidelines.
            </p>

            <!-- CATEGORY TABS -->
            <div class="category-tabs" role="tablist" aria-label="Travel insurance policy categories">
                <?php
                $i = 0;
                foreach ($travel_master_data as $key => $tab):
                ?>
                <button type="button" role="tab" class="tab-btn <?= $i === 0 ? 'is-active' : ''; ?>"
                    data-target="<?= esc_attr($key); ?>" aria-selected="<?= $i === 0 ? 'true' : 'false'; ?>"
                    aria-controls="pane-<?= esc_attr($key); ?>" onclick="switchTravelTab('<?= esc_js($key); ?>')">
                    <span class="tab-icon">
                        <?= $tab['tab_icon']; ?>
                    </span>
                    <span class="tab-name">
                        <?= esc_html($tab['tab_title']); ?>
                    </span>
                </button>
                <?php
                    $i++;
                endforeach;
                ?>
            </div>
        </header>

        <!-- CONTENT -->
        <div class="master-content-grid">
            <?php
            $i = 0;
            foreach ($travel_master_data as $key => $tab):
            ?>
            <div id="pane-<?= esc_attr($key); ?>" class="travel-content-panel <?= $i === 0 ? 'is-active' : ''; ?>"
                data-pane-id="<?= esc_attr($key); ?>" role="tabpanel" aria-hidden="<?= $i === 0 ? 'false' : 'true'; ?>">

                <div class="info-pane">
                    <h3 class="pane-title">
                        <?= esc_html($tab['card_title']); ?>
                    </h3>

                    <div class="pane-body-text">
                        <p><?= esc_html($tab['description']); ?></p>

                        <div class="eligibility-meta-box">
                            <div class="meta-item">
                                <span class="meta-label">Minimum Age</span>
                                <span class="meta-value"><?= esc_html($tab['min_age']); ?></span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Maximum Entry Age</span>
                                <span class="meta-value"><?= esc_html($tab['max_age']); ?></span>
                            </div>
                        </div>

                        <p><strong>What You Need to Know:</strong> <?= esc_html($tab['details']); ?></p>

                        <?php if ($key === 'senior-citizen' || $key === 'dependent-parents'): ?>
                        <!-- Notice box attached to senior/parent categories -->
                        <div class="travel-notice-box">
                            <span class="notice-icon">⚠️</span>
                            <div class="notice-content">
                                <span class="notice-label">The Senior Traveller Gap:</span>
                                <p>Most standard travel plans cap entry or coverage above age 70–75. Above this threshold, fewer insurers offer cover and premiums rise sharply.</p>
                                <p>If you plan regular travel after age 60, buy and maintain a senior citizen travel plan proactively — before age thresholds make it harder and more expensive.</p>
                                <p>Your elderly parent's Indian health insurance almost certainly has no overseas coverage. Without travel insurance, a single medical emergency abroad becomes a family financial crisis.</p>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <?php
                $i++;
            endforeach;
            ?>
        </div>

    </div>
</section>

<!-- TAB JAVASCRIPT -->
<script>
function switchTravelTab(targetKey) {
    const section = document.querySelector('.travel-insurance-master-section');
    if (!section) return;

    section.querySelectorAll('.tab-btn').forEach(function(button) {
        const isActive = button.getAttribute('data-target') === targetKey;
        button.classList.toggle('is-active', isActive);
        button.setAttribute('aria-selected', isActive ? 'true' : 'false');
    });

    section.querySelectorAll('.travel-content-panel').forEach(function(panel) {
        const isActive = panel.getAttribute('data-pane-id') === targetKey;
        panel.classList.toggle('is-active', isActive);
        panel.setAttribute('aria-hidden', isActive ? 'false' : 'true');
    });
}
</script>