<?php
/**
 * ============================================================
 * VIMA VIDYA
 * MOTOR INSURANCE ADD-ON COVERS COMPONENT
 * ============================================================
 */

$motor_addons = [
    [
        'title' => 'Zero Depreciation (Bumper-to-Bumper)',
        'desc' => 'Eliminates depreciation deduction — insurer pays full replacement cost of parts.',
        'best_for' => 'Vehicles up to 5 years old; premium cars',
        'cost' => '15–20% of OD premium',
        'tag' => 'Most Popular'
    ],
    [
        'title' => 'Engine Protection Cover',
        'desc' => 'Covers engine/gearbox damage from water ingression, hydrolock — excluded in standard OD.',
        'best_for' => 'Flood-prone cities; all EVs; diesel engines',
        'cost' => '₹2,500–6,000/year',
        'tag' => 'Critical'
    ],
    [
        'title' => 'Return to Invoice (RTI)',
        'desc' => 'If stolen or total loss, pays original invoice price — not depreciated IDV.',
        'best_for' => 'New vehicles in first 3 years; vehicles with car loans',
        'cost' => '10–15% of OD premium',
        'tag' => 'High Value'
    ],
    [
        'title' => 'Roadside Assistance (RSA)',
        'desc' => '24x7 towing, minor repairs, fuel delivery, flat tyre, key retrieval.',
        'best_for' => 'All drivers — especially highway and new drivers',
        'cost' => '₹500–1,500/year',
        'tag' => 'Essential'
    ],
    [
        'title' => 'Consumables Cover',
        'desc' => 'Pays for engine oil, coolant, bolts, brake fluid, AC gas used in accident repairs.',
        'best_for' => 'All comprehensive policyholders — low cost, high value',
        'cost' => '₹500–1,000/year',
        'tag' => 'High Value'
    ],
    [
        'title' => 'Key and Lock Replacement',
        'desc' => 'Covers lost/stolen key replacement and smart key reprogramming.',
        'best_for' => 'High-value vehicles with expensive smart keys',
        'cost' => '₹300–700/year',
        'tag' => 'Convenience'
    ],
    [
        'title' => 'Tyre Protection Cover',
        'desc' => 'Covers tyre damage from cuts, bursts, bulges not in standard OD.',
        'best_for' => 'Vehicles on poor roads; SUVs',
        'cost' => '₹800–2,000/year',
        'tag' => 'Terrain Specific'
    ],
    [
        'title' => 'PA Cover — Unnamed Passengers',
        'desc' => 'Extends death/disability cover to all passengers in vehicle.',
        'best_for' => 'Anyone regularly carrying family or colleagues',
        'cost' => '₹50–100 per seat/year',
        'tag' => 'Safety'
    ],
    [
        'title' => 'PA Cover — Paid Driver',
        'desc' => 'Covers accident compensation for your employed driver.',
        'best_for' => 'Anyone employing a full-time or part-time driver',
        'cost' => '₹100–300/year',
        'tag' => 'Compliance'
    ],
    [
        'title' => 'NCB Protect',
        'desc' => 'Preserves No-Claim Bonus even after one claim in the policy year.',
        'best_for' => 'Anyone with 25%+ NCB built over claim-free years',
        'cost' => '5–10% of OD premium',
        'tag' => 'Savings'
    ],
    [
        'title' => 'EV Battery Protection',
        'desc' => 'Covers EV battery pack — most expensive EV component — against damage.',
        'best_for' => 'All EV owners; battery replacement costs ₹2–8 lakh',
        'cost' => '₹3,000–8,000/year',
        'tag' => 'EV Essential'
    ],
    [
        'title' => 'Accessories Cover',
        'desc' => 'Covers declared CNG kits, alloy wheels, music systems, other extras.',
        'best_for' => 'Anyone with declared accessories; CNG vehicle owners',
        'cost' => 'Based on declared value',
        'tag' => 'Customization'
    ]
];
?>

<section class="vv-motor-addons-section" id="motor-addons">
    <div class="master-container">

        <!-- SECTION HEADER -->
        <header class="whocanbuy-section-header">
            <span class="step-badge">01.6 Add-On Protections</span>
            <h2 class="section-title">Add-On Covers to Build the Right Protection</h2>
            <p class="section-lead">
                Add-ons are optional extensions that fill gaps in standard coverage. Choosing the right add-ons is as important as choosing the right base policy.
            </p>
        </header>

        <!-- ADD-ONS GRID -->
        <div class="addons-grid">
            <?php foreach ($motor_addons as $addon): ?>
            <div class="addon-card">
                <div class="addon-card-header">
                    <span class="addon-tag"><?= esc_html($addon['tag']); ?></span>
                    <h3 class="addon-title"><?= esc_html($addon['title']); ?></h3>
                </div>
                
                <p class="addon-desc"><?= esc_html($addon['desc']); ?></p>

                <div class="addon-meta">
                    <div class="meta-item">
                        <span class="meta-label">Best For:</span>
                        <span class="meta-value"><?= esc_html($addon['best_for']); ?></span>
                    </div>
                    <div class="meta-item cost-item">
                        <span class="meta-label">Approx. Cost:</span>
                        <span class="meta-value highlight"><?= esc_html($addon['cost']); ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>