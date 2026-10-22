<?php
/**
 * ============================================================
 * VIMA VIDYA
 * PERSONAL ACCIDENT MASTER COMPONENT (PROPERTY REFERENCE STYLE)
 * ============================================================
 */

$pa_master_data = [

    'individual-standard' => [
        'tab_title' => 'Individual PA (Standard)',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>',
        'card_title' => 'Individual Personal Accident Policy — Standard Tier',
        'badge' => 'Standard',
        'html_content' => '<p>The standard individual personal accident policy provides core financial protection against accidental death, permanent total disablement, and permanent partial disablement for single policyholders.</p>',
        'stats' => [
            ['label' => 'Minimum Entry Age', 'value' => '18 years', 'type' => 'covered'],
            ['label' => 'Maximum Entry Age', 'value' => '65 years', 'type' => 'neutral'],
            ['label' => 'Maximum Renewal Age', 'value' => '70 years (most)', 'type' => 'neutral'],
            ['label' => 'Medical Tests', 'value' => 'None Required', 'type' => 'covered'],
            ['label' => 'Waiting Period', 'value' => 'Zero Days', 'type' => 'covered'],
        ],
        'takeaway' => 'Standard individual policies lock fresh entries at age 65–70. Securing your policy early guarantees seamless lifetime renewal rights up to the renewal ceiling.'
    ],

    'individual-enhanced' => [
        'tab_title' => 'Individual PA (Enhanced)',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
        'card_title' => 'Individual Personal Accident Policy — Enhanced / Select Tier',
        'badge' => 'Enhanced',
        'html_content' => '<p>Select insurers offer enhanced individual tiers with expanded entry thresholds and higher maximum renewal ceilings for active older adults who require comprehensive accident protection.</p>',
        'stats' => [
            ['label' => 'Minimum Entry Age', 'value' => '18 years', 'type' => 'covered'],
            ['label' => 'Maximum Entry Age', 'value' => '70 years', 'type' => 'covered'],
            ['label' => 'Maximum Renewal Age', 'value' => '75 years (select)', 'type' => 'covered'],
            ['label' => 'Medical Tests', 'value' => 'None Required', 'type' => 'covered'],
            ['label' => 'Coverage Scope', 'value' => 'Expanded Limits', 'type' => 'covered'],
        ],
        'takeaway' => 'Enhanced plans offer extended entry brackets up to 70 years, though availability depends heavily on specific insurer underwriting guidelines.'
    ],

    'family-primary' => [
        'tab_title' => 'Family PA (Primary)',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'card_title' => 'Family Personal Accident Policy — Primary Insured',
        'badge' => 'Family Plan',
        'html_content' => '<p>A unified family PA plan covers the primary earning member under a single umbrella sum insured, offering streamlined administration and often bundled family premium discounts.</p>',
        'stats' => [
            ['label' => 'Minimum Entry Age', 'value' => '18 years', 'type' => 'covered'],
            ['label' => 'Maximum Entry Age', 'value' => '65 years', 'type' => 'neutral'],
            ['label' => 'Maximum Renewal Age', 'value' => '70 years', 'type' => 'neutral'],
            ['label' => 'Sum Insured', 'value' => 'Shared / Floating', 'type' => 'covered'],
            ['label' => 'Documentation', 'value' => 'Single Proposal', 'type' => 'covered'],
        ],
        'takeaway' => 'Primary policyholders manage the family master contract while extending individual accident shields to qualifying dependents.'
    ],

    'spouse-cover' => [
        'tab_title' => 'Spouse Cover',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
        'card_title' => 'Spouse Coverage Under Family PA Plan',
        'badge' => 'Spouse',
        'html_content' => '<p>Spouses can be seamlessly integrated into the family PA policy sharing identical age brackets and protection benefits, ensuring both household income earners are shielded.</p>',
        'stats' => [
            ['label' => 'Minimum Entry Age', 'value' => '18 years', 'type' => 'covered'],
            ['label' => 'Maximum Entry Age', 'value' => '65 years', 'type' => 'neutral'],
            ['label' => 'Maximum Renewal Age', 'value' => '70 years', 'type' => 'neutral'],
            ['label' => 'Benefit Structure', 'value' => 'Proportional', 'type' => 'covered'],
            ['label' => 'Add-ons', 'value' => 'Optional Riders', 'type' => 'covered'],
        ],
        'takeaway' => 'Protecting both partners under a structured family rider eliminates gaps in household financial stability following an unforeseen accident.'
    ],

    'dependent-children' => [
        'tab_title' => 'Dependent Children',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
        'card_title' => 'Dependent Children Coverage & Transition Rules',
        'badge' => 'Children',
        'html_content' => '<p>Children can be added to family policies starting from infancy up to early adulthood, with explicit transition rules upon reaching the age limit[cite: 1].</p>',
        'stats' => [
            ['label' => 'Minimum Entry Age', 'value' => '91 days', 'type' => 'covered'],
            ['label' => 'Maximum Entry Age', 'value' => '23 years', 'type' => 'neutral'],
            ['label' => 'Maximum Renewal Age', 'value' => 'Exits at 23[cite: 1]', 'type' => 'loss'],
            ['label' => 'Transition Option', 'value' => 'Convert policy[cite: 1]', 'type' => 'covered'],
            ['label' => 'Medical Exam', 'value' => 'Not Required', 'type' => 'covered'],
        ],
        'takeaway' => 'Dependent children exit the family policy upon turning 23[cite: 1], at which point they should transition smoothly into an independent individual PA policy[cite: 1].'
    ],

    'parents-inlaws' => [
        'tab_title' => 'Parents & In-laws',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'card_title' => 'Dependent Parents and Parents-in-Law Coverage',
        'badge' => 'Parents',
        'html_content' => '<p>Many comprehensive family PA plans permit the inclusion of dependent senior parents and parents-in-law, subject to specific insurer underwriting thresholds[cite: 1].</p>',
        'stats' => [
            ['label' => 'Minimum Entry Age', 'value' => '18 years', 'type' => 'covered'],
            ['label' => 'Maximum Entry Age', 'value' => '65–70 yrs[cite: 1]', 'type' => 'neutral'],
            ['label' => 'Maximum Renewal Age', 'value' => 'Insurer-specific[cite: 1]', 'type' => 'neutral'],
            ['label' => 'Verification', 'value' => 'Verify at proposal[cite: 1]', 'type' => 'loss'],
            ['label' => 'Underwriting', 'value' => 'Subject to terms', 'type' => 'neutral'],
        ],
        'takeaway' => 'Always verify senior parent eligibility limits directly during proposal submission, as maximum entry caps vary significantly across insurers[cite: 1].'
    ],

    'group-pa' => [
        'tab_title' => 'Group PA (Employer)',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'card_title' => 'Group Personal Accident Policy via Employer',
        'badge' => 'Group PA',
        'html_content' => '<p>Group PA policies are sponsored by employers to protect active staff members throughout their employment tenure without individual medical underwriting.</p>',
        'stats' => [
            ['label' => 'Minimum Entry Age', 'value' => 'As per job[cite: 1]', 'type' => 'covered'],
            ['label' => 'Maximum Entry Age', 'value' => 'Retirement[cite: 1]', 'type' => 'neutral'],
            ['label' => 'Maximum Renewal Age', 'value' => 'Tied to job[cite: 1]', 'type' => 'loss'],
            ['label' => 'Continuity', 'value' => 'Exits on exit[cite: 1]', 'type' => 'loss'],
            ['label' => 'Cost', 'value' => 'Employer Funded', 'type' => 'covered'],
        ],
        'takeaway' => 'Group coverage terminates immediately upon job resignation or retirement[cite: 1], making an independent individual PA policy vital for complete long-term security.'
    ],

    'pmsby-scheme' => [
        'tab_title' => 'PMSBY Scheme',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
        'card_title' => 'Pradhan Mantri Suraksha Bima Yojana (PMSBY)',
        'badge' => 'Govt Scheme',
        'html_content' => '<p>PMSBY is an affordable government-backed accident insurance scheme accessible directly through participating bank and postal accounts across India[cite: 1].</p>',
        'stats' => [
            ['label' => 'Minimum Entry Age', 'value' => '18 years', 'type' => 'covered'],
            ['label' => 'Maximum Entry Age', 'value' => '70 years', 'type' => 'neutral'],
            ['label' => 'Renewal Mechanism', 'value' => 'Annual auto[cite: 1]', 'type' => 'neutral'],
            ['label' => 'Channel', 'value' => 'Bank Account[cite: 1]', 'type' => 'covered'],
            ['label' => 'Premium', 'value' => 'Nominal Govt Rate', 'type' => 'covered'],
        ],
        'takeaway' => 'PMSBY provides a foundational public safety net requiring annual automated bank account re-enrollment up to age 70[cite: 1].'
    ],

    'saral-suraksha' => [
        'tab_title' => 'Saral Suraksha Bima',
        'tab_icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
        'card_title' => 'Saral Suraksha Bima (IRDAI-Standardized Product)',
        'badge' => 'IRDAI Standard',
        'html_content' => '<p>Mandated by the IRDAI, Saral Suraksha Bima is a standardized individual personal accident product ensuring uniform wording, transparent terms, and simplified coverage across all insurers[cite: 1].</p>',
        'stats' => [
            ['label' => 'Minimum Entry Age', 'value' => '18 years', 'type' => 'covered'],
            ['label' => 'Maximum Entry Age', 'value' => '70 years', 'type' => 'neutral'],
            ['label' => 'Maximum Renewal Age', 'value' => 'Up to 70[cite: 1]', 'type' => 'neutral'],
            ['label' => 'Product Standard', 'value' => 'IRDAI Uniform[cite: 1]', 'type' => 'covered'],
            ['label' => 'Underwriting', 'value' => 'Standardized', 'type' => 'covered'],
        ],
        'takeaway' => 'Saral Suraksha Bima offers standardized policy wording and predictable terms regulated uniformly across the Indian insurance market[cite: 1].'
    ],
];
?>

<section class="property-insurance-master-section pa-reference-style-section" id="pa-who-can-buy">
    <div class="master-container">

        <!-- HEADER -->
        <header class="whocanbuy-section-header">
            <h2 class="section-title">
                Who Can Buy a PA Policy?
            </h2>
            <p class="section-lead">
                Most individual PA policies in India are available to anyone between 18 and 65 years of age. Some extend the upper limit to 70. Dependent children can typically be covered from 91 days of age up to 23 years. Parents and parents-in-law of the primary insured can be added as dependents in many family PA plans. There are no pre-policy medical tests required. You apply through a Proposal Form — declaring your occupation, income, health status, and existing insurance. Coverage begins from the policy start date, with no waiting period. Day 1 is Day 1.
            </p>
        </header>

        <!-- WHITE BOX CONTAINER -->
        <div class="master-content-grid">

            <!-- CATEGORY TABS -->
            <div class="category-tabs" role="tablist" aria-label="Personal accident policy categories">
                <?php
                $i = 0;
                foreach ($pa_master_data as $key => $tab):
                ?>
                <button type="button" role="tab" class="tab-btn <?= $i === 0 ? 'is-active' : ''; ?>"
                    data-target="<?= esc_attr($key); ?>" aria-selected="<?= $i === 0 ? 'true' : 'false'; ?>"
                    aria-controls="pane-<?= esc_attr($key); ?>" onclick="switchPATab('<?= esc_js($key); ?>')">
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

            <!-- CONTENT PANELS -->
            <div class="master-panels-container">
                <?php
                $i = 0;
                foreach ($pa_master_data as $key => $tab):
                ?>
                <div id="pane-<?= esc_attr($key); ?>" class="property-content-panel <?= $i === 0 ? 'is-active' : ''; ?>"
                    data-pane-id="<?= esc_attr($key); ?>" role="tabpanel" aria-hidden="<?= $i === 0 ? 'false' : 'true'; ?>">

                    <div class="info-pane">
                        <span class="pane-badge"><?= esc_html($tab['badge']); ?></span>
                        <h3 class="pane-title">
                            <?= esc_html($tab['card_title']); ?>
                        </h3>
                        <div class="pane-body-text">
                            <?= $tab['html_content']; ?>
                        </div>
                    </div>

                    <!-- FINANCIAL STATS CARDS & TAKEAWAY -->
                    <article class="property-case-study" style="margin-top: 36px;">
                        <div class="case-study-visual" style="width: 100%;">
                            
                            <!-- 5 STAT CARDS -->
                            <div class="case-study-stats" style="grid-template-columns: repeat(5, minmax(0, 1fr)); margin: 0 0 16px 0;">
                                <?php foreach ($tab['stats'] as $stat): ?>
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
                                    <p><?= esc_html($tab['takeaway']); ?></p>
                                </div>
                            </div>

                        </div>
                    </article>

                </div>
                <?php
                    $i++;
                endforeach;
                ?>
            </div>

            <!-- ==================================================
                 THE AGE-70 WALL (ADDED AT THE END)
            ================================================== -->
            <div class="pa-age-wall-banner" style="margin-top: 40px; padding: 22px 24px; background: #fff8f8; border: 1px solid #fed7d7; border-radius: 8px; display: flex; align-items: flex-start; gap: 16px;">
                <span style="font-size: 24px; line-height: 1; flex-shrink: 0;">⚠️</span>
                <div>
                    <h4 style="margin: 0 0 8px; color: #991b1b; font-size: 1.1rem; font-weight: 700; letter-spacing: -0.01em;">
                        The Age-70 Wall
                    </h4>
                    <p style="margin: 0; color: #4b5563; font-size: 15.5px; line-height: 1.5;">
                        Most standard individual PA policies cannot be entered fresh after age 65–70. After that threshold, you can only renew an existing policy — you cannot take a new one. If you reach 68 without a PA policy in force, your options narrow significantly. This is why buying before you need it is not just financial wisdom — it is a structural constraint of the product.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- TAB JAVASCRIPT -->
<script>
function switchPATab(targetKey) {
    const section = document.querySelector('.pa-reference-style-section');
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
</script>