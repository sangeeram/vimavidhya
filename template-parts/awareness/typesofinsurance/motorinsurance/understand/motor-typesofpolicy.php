<?php
/**
 * ============================================================
 * VIMA VIDYA
 * MOTOR INSURANCE MASTER COMPONENT (With / Without Cover Toggle)
 * ============================================================
 */

$motor_master_data = [

    // ========================================================
    // THIRD-PARTY LIABILITY (TP)
    // ========================================================
    'third-party' => [
        'tab_title' => 'Third-Party Liability (TP)',
        'tab_icon' => '
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
        ',
        'card_title' => 'Third-Party Liability Insurance — Mandatory by Law',
        'badge' => 'Third-Party',
        'scenario_title' => 'Third-Party Accident Claim / Bodily Injury Liability — Tribunal Award ₹11.4 Lakhs',
        'comparison_items' => [
            [
                'aspect' => 'Death of a Third Party',
                'with_text' => 'Fully covered — insurer pays unlimited compensation determined by MACT',
                'without_text' => 'Zero cover — you face personal liability with no upper limit for bodily fatality'
            ],
            [
                'aspect' => 'Third-Party Bodily Injury',
                'with_text' => 'Medical expenses, rehab, and loss of income paid in full by insurer',
                'without_text' => 'You are personally sued and forced to pay out of pocket or face asset seizure'
            ],
            [
                'aspect' => 'Third-Party Property Damage',
                'with_text' => 'Covered up to ₹7.5 lakh (walls, parked vehicles, shop fronts, gates)',
                'without_text' => 'Property damage claims fall entirely on your personal savings'
            ],
            [
                'aspect' => 'Legal Defence & Court Representation',
                'with_text' => 'Insurer appoints a specialized lawyer and defends you at MACT or civil court',
                'without_text' => 'You must hire and pay your own defense counsel out of pocket'
            ],
            [
                'aspect' => 'Own Vehicle Body Damage',
                'with_text' => 'Not covered under TP (TP is strictly for others; requires OD add-on)',
                'without_text' => 'Entire repair cost for your own vehicle falls strictly on you'
            ],
            [
                'aspect' => 'Own Medical Expenses / Injuries',
                'with_text' => 'Not covered under base TP (requires Personal Accident cover)',
                'without_text' => 'Driver medical expenses are completely unprotected'
            ]
        ],
        'case_study' => [
            'eyebrow' => 'CASE STUDY',
            'title' => 'Harish’s Red Light',
            'subtitle' => 'The Consequence He Could Not Pay For',
            'person' => 'Harish, 51',
            'location' => 'Nagpur',
            'role' => 'Grocery Store Owner',
            'image' => 'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&w=1200&q=80',
            'story' => 'Harish jumped a red light and hit a food delivery rider, who suffered severe fractures and was hospitalized for 47 days. The MACT awarded ₹11.4 lakh. Harish’s TP insurance handled the full amount, but his Alto’s ₹38,000 repair cost came straight from his shop working capital.',
            'stats' => [
                ['label' => 'MACT Award', 'value' => '₹11.4 Lakh', 'type' => 'covered'],
                ['label' => 'TP Cover', 'value' => '100% Paid', 'type' => 'covered'],
                ['label' => 'Vehicle Damage', 'value' => '₹38,000', 'type' => 'loss'],
                ['label' => 'Out of Pocket', 'value' => '₹38,000', 'type' => 'loss'],
                ['label' => 'Legal Defense', 'value' => 'Insurer', 'type' => 'covered'],
            ],
            'takeaway' => 'TP insurance protects the person you might harm. It protects nothing that belongs to you.',
        ],
    ],

    // ========================================================
    // OWN DAMAGE INSURANCE (OD)
    // ========================================================
    'own-damage' => [
        'tab_title' => 'Own Damage (OD)',
        'tab_icon' => '
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <path d="m12 8 4 4-4 4M8 12h8"/>
            </svg>
        ',
        'card_title' => 'Own Damage (OD) Insurance — Protection for Your Asset',
        'badge' => 'Own Damage',
        'scenario_title' => 'Solo Accident / Crash into Wall — Estimated Repair & Part Replacement ₹24,000',
        'comparison_items' => [
            [
                'aspect' => 'Accidental Collision & Skidding',
                'with_text' => 'Repair costs for your vehicle fully compensated subject to policy terms',
                'without_text' => 'Zero compensation — 100% of accident repair costs paid out of pocket'
            ],
            [
                'aspect' => 'Fire, Explosion & Lightning',
                'with_text' => 'Complete protection against self-ignition and fire damage',
                'without_text' => 'Complete financial loss if your vehicle catches fire'
            ],
            [
                'aspect' => 'Theft Protection',
                'with_text' => 'Insurer pays full Insured Declared Value (IDV) if vehicle is stolen',
                'without_text' => 'Total loss of asset value if vehicle is stolen with no payout'
            ],
            [
                'aspect' => 'Natural Calamities (Floods/Cyclones)',
                'with_text' => 'Covers flood inundation, earthquake shock, and cyclone destruction',
                'without_text' => 'Weather and flood damage costs borne entirely by owner'
            ],
            [
                'aspect' => 'Zero Depreciation Deductions',
                'with_text' => 'With Zero Dep add-on, full part cost is paid without depreciation cut',
                'without_text' => 'Heavy depreciation deductions (up to 50% on plastic/metal parts)'
            ],
            [
                'aspect' => 'Third-Party Legal Liability',
                'with_text' => 'Requires active paired TP policy to remain legally compliant',
                'without_text' => 'OD policy alone does not satisfy legal third-party requirements'
            ]
        ],
        'case_study' => [
            'eyebrow' => 'CASE STUDY',
            'title' => 'Kavitha’s Solo Accident',
            'subtitle' => 'The Day OD Insurance Earned Its Worth',
            'person' => 'Kavitha, 33',
            'location' => 'Coimbatore',
            'role' => 'Radiologist',
            'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=1200&q=80',
            'story' => 'Swerving to avoid a dog, Kavitha lost control and crashed her scooter into a wall, causing ₹24,000 in damage. Because she had a standalone OD policy with Zero Depreciation for ₹3,200/year, the full claim was approved instantly.',
            'stats' => [
                ['label' => 'OD Premium', 'value' => '₹3,200', 'type' => 'neutral'],
                ['label' => 'Repair Estimate', 'value' => '₹24,000', 'type' => 'covered'],
                ['label' => 'Zero Dep Saving', 'value' => '₹7,000', 'type' => 'covered'],
                ['label' => 'Deductible', 'value' => '₹100', 'type' => 'neutral'],
                ['label' => 'Claim ROI', 'value' => '7.5x', 'type' => 'covered'],
            ],
            'takeaway' => 'An OD policy is what stands between your vehicle repair cost and your savings. It only works when paired with a valid TP.',
        ],
    ],

    // ========================================================
    // COMPREHENSIVE (PACKAGE) INSURANCE
    // ========================================================
    'comprehensive' => [
        'tab_title' => 'Comprehensive (Package)',
        'tab_icon' => '
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
        ',
        'card_title' => 'Comprehensive (Package) Insurance — 360° Protection',
        'badge' => 'Comprehensive',
        'scenario_title' => 'Severe Monsoon Flood & Collision Underpass — Total Damage ₹2,92,500',
        'comparison_items' => [
            [
                'aspect' => 'Third-Party Liability & Legal Defence',
                'with_text' => 'Fully covered for third-party injury, death, and MACT court defense',
                'without_text' => 'Unprotected against third-party lawsuits and tribunal claims'
            ],
            [
                'aspect' => 'Own Vehicle Accident & Flood Damage',
                'with_text' => 'Covers body repair, accident damage, and natural calamity losses',
                'without_text' => 'All accident and flood repair costs fall straight on your savings'
            ],
            [
                'aspect' => 'Engine Protection (Hydrostatic Lock)',
                'with_text' => 'Engine Protection add-on covers full ₹2.2L engine replacement cost',
                'without_text' => 'Engine seizing from floodwater left completely uncovered'
            ],
            [
                'aspect' => 'Owner-Driver Personal Accident',
                'with_text' => '₹15 lakh mandatory PA cover active for accidental fatality or disability',
                'without_text' => 'No personal accident financial security for the owner-driver'
            ],
            [
                'aspect' => 'Roadside Assistance & Towing',
                'with_text' => '24/7 emergency towing and breakdown support included',
                'without_text' => 'Out-of-pocket towing expenses during highway breakdowns'
            ],
            [
                'aspect' => 'No Claim Bonus (NCB) Protection',
                'with_text' => 'NCB Protector safeguards your accumulated discount despite claims',
                'without_text' => 'Accumulated NCB discount lost instantly upon making a claim'
            ]
        ],
        'case_study' => [
            'eyebrow' => 'CASE STUDY',
            'title' => 'Rohan and the Highway Rain',
            'subtitle' => 'When Comprehensive Earned Every Rupee',
            'person' => 'Rohan, 38',
            'location' => 'Pune',
            'role' => 'Sales Manager',
            'image' => 'https://images.unsplash.com/photo-1506015391300-4802dc74de2e?auto=format&fit=crop&w=1200&q=80',
            'story' => 'Driving a Hyundai Creta through a flooded underpass, Rohan suffered hydrostatic lock and a divider collision totaling ₹2,92,500 in damages. His comprehensive policy with Engine Protection and Zero Depreciation covered everything.',
            'stats' => [
                ['label' => 'Total Damage', 'value' => '₹2.92 Lakh', 'type' => 'loss'],
                ['label' => 'Engine Replacement', 'value' => '₹2.2 Lakh', 'type' => 'covered'],
                ['label' => 'Body Repairs', 'value' => '₹68,000', 'type' => 'covered'],
                ['label' => 'Towing (RSA)', 'value' => 'Covered', 'type' => 'covered'],
                ['label' => 'NCB Protected', 'value' => '35% Safe', 'type' => 'covered'],
            ],
            'takeaway' => 'Comprehensive insurance is not the most expensive option. It is the cheapest option when something goes wrong.',
        ],
    ],
];
?>

<section class="property-insurance-master-section" id="motor-types-master">
    <div class="master-container">

        <!-- HEADER -->
        <header class="whocanbuy-section-header">
            <h2 class="section-title">
                Who Can Buy A Policy
            </h2>
            <p class="section-lead">
                Motor insurance comes in distinct policy types. Understanding each — and knowing which is right for you — is the difference between being genuinely protected and being merely legally compliant.
            </p>

            <!-- CATEGORY TABS -->
            <div class="category-tabs" role="tablist" aria-label="Motor insurance categories">
                <?php $i = 0; foreach ($motor_master_data as $key => $tab): ?>
                <button type="button" role="tab" class="tab-btn <?= $i === 0 ? 'is-active' : ''; ?>"
                    data-target="<?= esc_attr($key); ?>" aria-selected="<?= $i === 0 ? 'true' : 'false'; ?>"
                    aria-controls="pane-motor-<?= esc_attr($key); ?>" onclick="switchMotorMasterTab('<?= esc_js($key); ?>')">
                    <span class="tab-icon"><?= $tab['tab_icon']; ?></span>
                    <span class="tab-name"><?= esc_html($tab['tab_title']); ?></span>
                </button>
                <?php $i++; endforeach; ?>
            </div>
        </header>

        <!-- CONTENT -->
        <div class="master-content-grid">
            <?php $i = 0; foreach ($motor_master_data as $key => $tab): ?>
            <div id="pane-motor-<?= esc_attr($key); ?>" class="property-content-panel <?= $i === 0 ? 'is-active' : ''; ?>"
                data-pane-id="<?= esc_attr($key); ?>" role="tabpanel" aria-hidden="<?= $i === 0 ? 'false' : 'true'; ?>">

                <!-- MAIN CONTENT WITH WITH/WITHOUT TOGGLE -->
                <div class="info-pane">
                    <div class="pane-header-flex">
                        <h3 class="pane-title"><?= esc_html($tab['card_title']); ?></h3>
                        
                        <!-- TOGGLE SWITCH -->
                        <div class="vv-toggle-wrapper" role="radiogroup" aria-label="Coverage Simulation Toggle">
                            <button type="button" class="vv-pill-btn is-active" data-toggle-state="with" onclick="switchMotorState('<?= esc_js($key); ?>', 'with')">
                                <span class="pill-dot"></span> WITH COVER
                            </button>
                            <button type="button" class="vv-pill-btn" data-toggle-state="without" onclick="switchMotorState('<?= esc_js($key); ?>', 'without')">
                                <span class="pill-dot"></span> WITHOUT COVER
                            </button>
                        </div>
                    </div>

                    <!-- SCENARIO BANNER -->
                    <div class="vv-scenario-banner">
                        <span class="scenario-icon">🚗</span>
                        <span class="scenario-text"><?= esc_html($tab['scenario_title']); ?></span>
                    </div>

                    <!-- COMPARISON ROWS -->
                    <div class="vv-comparison-list">
                        <?php foreach ($tab['comparison_items'] as $row): ?>
                        <div class="vv-comparison-row">
                            <div class="row-aspect">
                                <strong><?= esc_html($row['aspect']); ?></strong>
                            </div>
                            
                            <!-- WITH COVER STATE -->
                            <div class="row-outcome state-with is-visible">
                                <span class="outcome-icon check">✓</span>
                                <p><?= esc_html($row['with_text']); ?></p>
                            </div>

                            <!-- WITHOUT COVER STATE -->
                            <div class="row-outcome state-without">
                                <span class="outcome-icon cross">✕</span>
                                <p><?= esc_html($row['without_text']); ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- CASE STUDY -->
                <?php if (!empty($tab['case_study'])): ?>
                <?php $case = $tab['case_study']; ?>
                <article class="property-case-study">

                    <!-- LEFT SIDE -->
                    <div class="case-study-visual">
                        <div class="case-study-image-wrap">
                            <img src="<?= esc_url($case['image']); ?>" alt="<?= esc_attr($case['title']); ?>"
                                class="case-study-image" loading="lazy">
                            <div class="case-study-image-overlay"></div>

                            <div class="case-study-person">
                                <span class="person-name"><?= esc_html($case['person']); ?></span>
                                <span class="person-meta">
                                    <?= esc_html($case['location']); ?>
                                    <span class="person-separator">•</span>
                                    <?= esc_html($case['role']); ?>
                                </span>
                            </div>
                        </div>

                        <!-- FINANCIAL CARDS -->
                        <div class="case-study-stats">
                            <?php foreach ($case['stats'] as $stat): ?>
                            <div class="case-stat <?= esc_attr($stat['type']); ?>">
                                <span class="case-stat-label"><?= esc_html($stat['label']); ?></span>
                                <strong class="case-stat-value"><?= esc_html($stat['value']); ?></strong>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- TAKEAWAY -->
                        <div class="case-study-takeaway">
                            <span class="takeaway-icon">!</span>
                            <div class="takeaway-content">
                                <span class="takeaway-label">Takeaway</span>
                                <p><?= esc_html($case['takeaway']); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT SIDE STORY -->
                    <div class="case-study-story">
                        <span class="case-study-eyebrow"><?= esc_html($case['eyebrow']); ?></span>
                        <h4 class="case-study-title"><?= esc_html($case['title']); ?></h4>
                        <h5 class="case-study-subtitle"><?= esc_html($case['subtitle']); ?></h5>
                        <div class="case-study-divider"></div>
                        <p class="case-study-description"><?= esc_html($case['story']); ?></p>

                        <div class="case-study-context">
                            <span><?= esc_html($case['person']); ?></span>
                            <span><?= esc_html($case['location']); ?></span>
                        </div>
                    </div>

                </article>
                <?php endif; ?>

            </div>
            <?php $i++; endforeach; ?>
        </div>

    </div>
</section>

<!-- TAB & TOGGLE JAVASCRIPT -->
<script>
function switchMotorMasterTab(targetKey) {
    const section = document.querySelector('#motor-types-master');
    if (!section) return;

    section.querySelectorAll('.tab-btn').forEach(function(button) {
        const isActive = button.getAttribute('data-target') === targetKey;
        button.classList.toggle('is-active', isActive);
        button.setAttribute('aria-selected', isActive ? 'true' : 'false');
    });

    section.querySelectorAll('.property-content-panel').forEach(function(panel) {
        const isActive = panel.getAttribute('data-pane-id') === targetKey;
        panel.classList.toggle('is-active', isActive);
        panel.setAttribute('aria-hidden', isActive ? 'false' : 'true');
    });
}

function switchMotorState(paneKey, state) {
    const panel = document.querySelector('#pane-motor-' + paneKey);
    if (!panel) return;

    panel.querySelectorAll('.vv-pill-btn').forEach(btn => {
        const isActive = btn.getAttribute('data-toggle-state') === state;
        btn.classList.toggle('is-active', isActive);
    });

    const withStates = panel.querySelectorAll('.state-with');
    const withoutStates = panel.querySelectorAll('.state-without');

    if (state === 'with') {
        withStates.forEach(el => {
            el.style.display = 'flex';
            setTimeout(() => el.classList.add('is-visible'), 10);
        });
        withoutStates.forEach(el => {
            el.classList.remove('is-visible');
            setTimeout(() => el.style.display = 'none', 200);
        });
    } else {
        withoutStates.forEach(el => {
            el.style.display = 'flex';
            setTimeout(() => el.classList.add('is-visible'), 10);
        });
        withStates.forEach(el => {
            el.classList.remove('is-visible');
            setTimeout(() => el.style.display = 'none', 200);
        });
    }
}
</script>