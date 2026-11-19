<?php
// ============================================================
// BEYOND BRICKS & WALLS — TAB DATA
// ============================================================

function vv_asset_icon($name) {
    $icons = [
        'house' => '<path d="m3 10 9-7 9 7v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1z"/><path d="M9 21v-8h6v8"/>',
        'sofa' => '<path d="M4 12V9a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3"/><path d="M4 12a2 2 0 0 0-2 2v4h20v-4a2 2 0 0 0-4 0v1H6v-1a2 2 0 0 0-2-2z"/><path d="M4 18v3m16-3v3"/>',
        'refrigerator' => '<rect x="5" y="2" width="14" height="20" rx="2"/><path d="M5 10h14M9 6v2m0 6v2"/>',
        'cooking-pot' => '<path d="M3 11h18v7a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3zM8 11V7m8 4V7M2 7h20"/><path d="M10 3h4"/>',
        'monitor' => '<rect x="2" y="3" width="20" height="15" rx="2"/><path d="M8 22h8m-4-4v4"/>',
        'laptop' => '<rect x="4" y="3" width="16" height="13" rx="2"/><path d="M2 20h20l-2-4H4z"/>',
        'gem' => '<path d="M6 3h12l5 7-11 12L1 10zM1 10h22M6 3l6 19L18 3"/>',
        'shirt' => '<path d="m8 3-5 3-2 6 5 2v7h12v-7l5-2-2-6-5-3a4 4 0 0 1-8 0z"/>',
        'shield-check' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>',
        'panels-top-left' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 10h18M10 3v18"/>',
        'settings' => '<circle cx="12" cy="12" r="3"/><path d="M12 2v3m0 14v3M2 12h3m14 0h3M5 5l2 2m10 10 2 2M19 5l-2 2M7 17l-2 2"/>',
        'wrench' => '<path d="M14 7a5 5 0 0 0-7 7L2 19l3 3 5-5a5 5 0 0 0 7-7l-3 3-3-3z"/>',
        'package' => '<path d="m12 2 9 5v10l-9 5-9-5V7zM3 7l9 5 9-5M12 12v10"/>',
        'wallet' => '<rect x="2" y="5" width="20" height="16" rx="2"/><path d="M2 9h20M16 14h3"/>',
        'store' => '<path d="M3 10h18l-2-7H5zM5 10v11h14V10M9 21v-7h6v7"/>',
    ];
    $shape = $icons[$name] ?? $icons['package'];
    return '<svg viewBox="0 0 24 24" width="27" height="27" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $shape . '</svg>';
}

$tabsData = [
    'home' => [
        'label' => 'Home Assets',
        'tagline' => 'Everything inside your home',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
        'title' => 'Beyond Bricks & Walls — What Can Your Home Insurance Cover?',
        'scenario' => 'Home insurance can protect far more than the physical structure. Depending on the policy and add-ons, coverage can extend to furniture, appliances, electronics, jewellery, personal belongings, plate glass and third-party liability.',
        'items' => [
            ['label' => 'Building / Structure', 'icon' => 'house', 'desc' => 'Walls, roof, floors, staircases, built-in plumbing, electrical wiring, compound walls, garage, outhouses and swimming pool. Land is not insurable.'],
            ['label' => 'Furniture & Fixtures', 'icon' => 'sofa', 'desc' => 'Sofas, beds, dining sets, wardrobes, study tables, curtains, rugs and bookshelves.'],
            ['label' => 'Home Appliances', 'icon' => 'refrigerator', 'desc' => 'Refrigerators, washing machines, dishwashers, air conditioners, water heaters and water purifiers.'],
            ['label' => 'Kitchen Equipment', 'icon' => 'cooking-pot', 'desc' => 'Microwave ovens, mixers, juicers, chimneys, cooking ranges and induction cooktops.'],
            ['label' => 'Consumer Electronics', 'icon' => 'monitor', 'desc' => 'Televisions, home theatre systems, music systems and gaming consoles.'],
            ['label' => 'Personal Electronics', 'icon' => 'laptop', 'desc' => 'Laptops, tablets, desktop computers, printers and cameras. Portable cover may be available.'],
            ['label' => 'Jewellery & Valuables', 'icon' => 'gem', 'desc' => 'Gold jewellery, diamond sets, silverware, antiques, artwork and collectibles. Specific declaration and valuation may be required.'],
            ['label' => 'Clothing & Personal Effects', 'icon' => 'shirt', 'desc' => 'Clothing, bags and shoes, generally subject to applicable sub-limits.'],
            ['label' => 'Third-Party Liability', 'icon' => 'shield-check', 'desc' => 'Legal compensation for covered claims involving a visitor injured on your property.'],
            ['label' => 'Plate Glass', 'icon' => 'panels-top-left', 'desc' => 'Large windows, shower enclosures and glass-topped furniture may require specific plate-glass cover.'],
            ['label' => 'Domestic Appliance Breakdown', 'icon' => 'settings', 'desc' => 'Mechanical or electrical breakdown of covered appliances, including after the manufacturer warranty expires, where the policy/add-on provides this cover.']
        ]
    ],
    'business' => [
        'label' => 'Business Assets',
        'tagline' => 'What keeps your business running',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'title' => 'Beyond the Walls — Protecting What Keeps a Small Business Running',
        'scenario' => 'For a small business, commercial property insurance can extend beyond the building to protect stock, machinery, shop fittings, computers, cash and other essential business assets, subject to policy terms and limits.',
        'items' => [
            ['label' => 'Building / Commercial Structure', 'icon' => 'house', 'desc' => 'Walls, roof, floors, staircases, built-in plumbing, electrical wiring, compound walls, garage, outhouses and other insured structures. Land is not insurable.'],
            ['label' => 'Shop Fixtures & Fittings', 'icon' => 'store', 'desc' => 'Shelving, display racks, billing counters, fitted woodwork, signage, false ceilings and interior fittings that make the shop functional.'],
            ['label' => 'Business Equipment & Machinery', 'icon' => 'wrench', 'desc' => 'Sewing machines, lathe machines, refrigeration units, ovens, grinders, generators, billing computers and medical equipment — the tools of trade.'],
            ['label' => 'Business Stock / Merchandise', 'icon' => 'package', 'desc' => 'Raw materials, finished goods, goods in process and merchandise on shelves — the core working capital of a small business.'],
            ['label' => 'Cash on Premises', 'icon' => 'wallet', 'desc' => 'Physical cash in a cash drawer or safe, and in some policies cash in transit, subject to defined limits and conditions.'],
            ['label' => 'Business Appliance Breakdown', 'icon' => 'settings', 'desc' => 'Mechanical or electrical breakdown of eligible business equipment. EEI or machinery breakdown cover may be available as an add-on.'],
            ['label' => 'Consumer & Personal Electronics', 'icon' => 'monitor', 'desc' => 'Televisions, laptops, tablets, desktop computers, printers and cameras where relevant to the insured premises and policy.'],
            ['label' => 'Plate Glass — Commercial', 'icon' => 'panels-top-left', 'desc' => 'Glass shop fronts, display windows and countertops can be covered through suitable plate-glass cover or endorsement.'],
            ['label' => 'Public Liability', 'icon' => 'shield-check', 'desc' => 'Protection against covered legal liability arising from customers, visitors or other third parties injured on business premises.']
        ]
    ],
    'both' => [
        'label' => 'Home + Business',
        'tagline' => 'Residential & commercial protection',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/></svg>',
        'title' => 'One Asset-by-Asset View — Residential & Commercial Protection',
        'scenario' => 'The same principle applies to both homes and small businesses: identify what you own, understand what is exposed to loss, and select appropriate cover for the building, contents, equipment and liabilities.',
        'items' => [
            ['label' => 'Structure', 'icon' => 'house', 'desc' => 'Residential or commercial walls, roof, floors, wiring, plumbing and eligible external structures can be insured. Land itself is not insurable.'],
            ['label' => 'Furniture & Fixtures', 'icon' => 'sofa', 'desc' => 'Residential furniture and eligible commercial fixtures such as shelving, counters, fitted interiors and display racks.'],
            ['label' => 'Appliances & Equipment', 'icon' => 'refrigerator', 'desc' => 'Home appliances or business equipment and machinery can be protected under suitable sections or add-ons.'],
            ['label' => 'Electronics', 'icon' => 'monitor', 'desc' => 'Televisions, laptops, computers, printers, cameras and other eligible electronic equipment may be covered.'],
            ['label' => 'Jewellery & Valuables', 'icon' => 'gem', 'desc' => 'Gold, diamonds, silverware, antiques, artwork and collectibles may require declaration, valuation and specific limits.'],
            ['label' => 'Stock / Merchandise', 'icon' => 'package', 'desc' => 'For businesses, raw materials, work-in-progress and finished merchandise can be insured under appropriate stock cover.'],
            ['label' => 'Cash', 'icon' => 'wallet', 'desc' => 'Business cash kept on premises or carried in transit can be covered under suitable cash insurance, subject to policy limits.'],
            ['label' => 'Plate Glass', 'icon' => 'panels-top-left', 'desc' => 'Residential and commercial glass can require dedicated plate-glass protection where standard cover excludes it.'],
            ['label' => 'Third-Party Liability', 'icon' => 'shield-check', 'desc' => 'Liability protection can address covered claims involving visitors at a home or customers and third parties at a business premises.']
        ]
    ]
];

// SINGLE CASE STUDY DATA
$caseStudy = [
    'title' => "Suresh's Smart Home",
    'subtitle' => 'What He Insured That Others Don\'t Think Of',
    'desc' => "Suresh, 51, a retired engineer in Coimbatore, had recently renovated his home — solar water heater, modular kitchen with an imported chimney, home theatre, smart security panel. His investment in contents and fixtures exceeded ₹14 lakhs.\n\nWhen he renewed his policy, he walked through each room with his agent and listed every item with its replacement value. Six months later, a voltage surge during a thunderstorm damaged his home theatre and smart panel. His EEI add-on covered ₹1.8 lakhs in repairs.",
    'pills' => [
        ['label' => 'Renovation Value', 'amount' => '₹14 Lakhs', 'status' => 'success'],
        ['label' => 'Surge Damage', 'amount' => '₹1.8 Lakhs', 'status' => 'success'],
        ['label' => 'EEI Add-on', 'amount' => 'Covered', 'status' => 'success'],
        ['label' => 'Asset Audit', 'amount' => 'Itemized', 'status' => 'success']
    ],
    'takeaway' => 'An average Indian urban household holds contents worth ₹8 to ₹25 lakhs — furniture, electronics, jewellery, appliances, and clothing combined. Most of this is completely uninsured. A single theft, fire, or flood can erase years of accumulation in one event.'
];
?>

<section class="asset-tabs-section">
    <div class="container-wide">

        <!-- HEADER -->
        <div class="section-header">
            <!-- <span class="badge-pill">
                1.11 Beyond Bricks and Walls
            </span> -->
            <h2 class="h2 text-navy m-t-12">
                Beyond Bricks and Walls - What Contents Can Be Insured?
            </h2>
            <p class="text-body-med max-w-800 m-t-16">
                Home insurance extends far beyond the structure, covering jewellery, electronics, memorabilia and personal belongings. For small businesses, commercial property insurance can also protect stock, equipment, cash and other essential assets.
            </p>
        </div>

        <!-- THREE CLICKABLE MAIN TABS -->
        <div class="asset-category-tabs" role="tablist" aria-label="Asset insurance categories">
            <?php $i = 0; foreach ($tabsData as $key => $data): ?>
                <button type="button" class="asset-tab <?= $i === 0 ? 'active' : ''; ?>"
                    id="asset-tab-<?= esc_attr($key); ?>" data-tab="<?= esc_attr($key); ?>"
                    role="tab" aria-controls="asset-<?= esc_attr($key); ?>"
                    aria-selected="<?= $i === 0 ? 'true' : 'false'; ?>" tabindex="<?= $i === 0 ? '0' : '-1'; ?>">
                    <span class="asset-tab-art" aria-hidden="true">
                        <?= vv_asset_icon($key === 'home' ? 'house' : ($key === 'business' ? 'store' : 'package')); ?>
                    </span>
                    <span class="asset-tab-copy">
                        <strong><?= esc_html($data['label']); ?></strong>
                        <small><?= esc_html($data['tagline']); ?></small>
                    </span>
                    <span class="asset-tab-arrow" aria-hidden="true">→</span>
                </button>
            <?php $i++; endforeach; ?>
        </div>

        <!-- STATIC ASSET CARDS WITH ICONS; ONLY MAIN TABS SWITCH -->
        <div class="asset-tab-content">
            <?php $i = 0; foreach ($tabsData as $key => $data): ?>
                <div class="asset-tab-panel <?= $i === 0 ? 'active' : ''; ?>"
                    id="asset-<?= esc_attr($key); ?>" role="tabpanel"
                    aria-labelledby="asset-tab-<?= esc_attr($key); ?>"
                    <?= $i === 0 ? '' : 'hidden'; ?>>
                    <div class="asset-content-card">
                        <div class="asset-content-header">
                            <div>
                                <span class="asset-content-label"><?= esc_html($data['label']); ?></span>
                                <h3><?= esc_html($data['title']); ?></h3>
                            </div>
                            <span class="asset-policy-note">Coverage varies by policy</span>
                        </div>
                        <p class="asset-card-description"><?= esc_html($data['scenario']); ?></p>
                        <div class="asset-items-grid">
                            <?php foreach ($data['items'] as $item): ?>
                                <article class="asset-item-card">
                                    <span class="asset-item-icon" aria-hidden="true">
                                        <?= vv_asset_icon($item['icon'] ?? 'package'); ?>
                                    </span>
                                    <div class="asset-item-copy">
                                        <h4><?= esc_html($item['label']); ?></h4>
                                        <p><?= esc_html($item['desc']); ?></p>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php $i++; endforeach; ?>
        </div>

        <!-- SINGLE CASE STUDY BLOCK (OUTSIDE TAB PANELS) -->
        <div class="asset-story-block m-t-32">
            <!-- LEFT COLUMN: Media Container & Overlapping Stat Cards -->
            <div class="story-left-col">
                <div class="story-media-container">
                    <div class="story-image-wrapper">
                        <img src="/wp-content/themes/vimavidya/assets/images/typesofinsurance/propertyinsurance/casestory/suresh.png" alt="Suresh's Smart Home Case Study">
                        <span class="story-img-label">Suresh, 51</span>
                    </div>

                    <!-- Overlaid Stats Cards -->
                    <div class="stats-grid-overlay">
                        <?php foreach ($caseStudy['pills'] as $pill): ?>
                            <div class="stat-card">
                                <span class="stat-icon <?= isset($pill['status']) ? $pill['status'] : ''; ?>">
                                    <?= isset($pill['status']) && $pill['status'] === 'success' ? '✓' : '!'; ?>
                                </span>
                                <span class="stat-label"><?= htmlspecialchars($pill['label']); ?></span>
                                <span class="stat-value"><?= htmlspecialchars($pill['amount']); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Takeaway Banner -->
                <div class="story-takeaway-card">
                    <div class="takeaway-icon-bubble">!</div>
                    <div class="takeaway-text-content">
                        <strong>TAKEAWAY</strong>
                        <p><?= htmlspecialchars($caseStudy['takeaway']); ?></p>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Narrative / Description -->
            <div class="story-right-col">
                <span class="case-tag">CASE STUDY</span>
                
                <h3 class="case-main-title"><?= htmlspecialchars($caseStudy['title']); ?></h3>
                <h4 class="case-subtitle"><?= htmlspecialchars($caseStudy['subtitle']); ?></h4>

                <div class="case-text-body">
                    <?php 
                        $paragraphs = explode("\n\n", $caseStudy['desc']);
                        foreach ($paragraphs as $p) {
                            echo '<p>' . htmlspecialchars($p) . '</p>';
                        }
                    ?>
                </div>

                <div class="story-tags-row">
                    <span class="meta-tag">Suresh, 51</span>
                    <span class="meta-tag">Coimbatore</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- MAIN CATEGORY TAB SWITCHING -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.asset-tabs-section').forEach(function (section) {
        const buttons = Array.from(section.querySelectorAll('.asset-tab'));
        const panels = Array.from(section.querySelectorAll('.asset-tab-panel'));
        buttons.forEach(function (button) {
            button.addEventListener('click', function () {
                const selected = button.dataset.tab;
                buttons.forEach(function (btn) {
                    const active = btn === button;
                    btn.classList.toggle('active', active);
                    btn.setAttribute('aria-selected', String(active));
                    btn.tabIndex = active ? 0 : -1;
                });
                panels.forEach(function (panel) {
                    const active = panel.id === 'asset-' + selected;
                    panel.classList.toggle('active', active);
                    panel.hidden = !active;
                });
            });
        });
    });
});
</script>
