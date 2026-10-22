<?php

// =====================================================
// VIMA VIDYA — PROPERTY INSURANCE CHECKLIST
// =====================================================

$folder_sections = [

    // -------------------------------------------------
    // 01 — NEW POLICY
    // -------------------------------------------------
    [
        'id'       => 'tab-1',
        'title'    => 'When Buying a New Policy',
        'subtitle' => 'Policy Essentials',
        'tab_text' => 'NEW POLICY',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>',

        'intro' => 'Before buying a policy, make sure you have identified what needs to be protected, how much it should be insured for, and which risks and covers apply to you.',

        'items' => [
            'Have you established your status — homeowner, tenant, or small business owner? This determines the type of policy and covers you need.',
            'Have you calculated the Reinstatement Value of the building? (CPWD/PWD rate per sq ft × built-up area — not purchase price, not market value)',
            'Have you listed all contents room by room with replacement costs? (electronics, appliances, furniture, jewellery, clothing)',
            'If you are a small business owner: have you listed all stock at peak seasonal value, all equipment at replacement cost, and all fixtures and fittings?',
            'Have you declared high-value jewellery with a professional valuation certificate?',
            'Have you opted for New-for-Old (Replacement Value) for contents and stock?',
            'Have you verified all relevant perils are covered for your location? (flood, earthquake, cyclone — do not exclude these just to reduce premium)',
            'Have you read and understood the Exclusions section?',
            'Have you considered an Escalation Clause to automatically adjust the sum insured each year?',
            'Have you added Loss of Rent or Alternate Accommodation cover?',
            'Have you added Portable Equipment or EEI cover for electronics?',
            'If small business: have you added Business Interruption cover, Cash Cover, Plate Glass endorsement, and Public Liability?',
            'Have you confirmed the insurer is IRDAI-registered?'
        ]
    ],

    // -------------------------------------------------
    // 02 — ANNUAL RENEWAL
    // -------------------------------------------------
    [
        'id'       => 'tab-2',
        'title'    => 'At Every Annual Renewal',
        'subtitle' => 'Review & Update',
        'tab_text' => 'ANNUAL RENEWAL',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>',

        'intro' => 'Your property, possessions and business can change from year to year. Review your policy before every renewal so your sum insured and covers continue to reflect your current situation.',

        'items' => [
            'Has construction cost risen? Recalculate the Reinstatement Value and update the building sum insured to match.',
            'Have you added major appliances, electronics, or furniture? Add them to the contents schedule before renewing.',
            'Has jewellery value changed? Update the Specified Items declaration and obtain a fresh valuation certificate.',
            'Have you done any renovations? Request an endorsement to reflect the new reinstatement value.',
            'If small business: has stock value changed? Have you added new equipment? Has turnover grown? Update sum insured accordingly.',
            'Is the Policy Schedule accurate? Verify the correct address, insured name, and sum insured figures.',
            'Are all your add-ons still active? Confirm EEI, Portable Equipment cover, Loss of Rent, Business Interruption are renewed and not quietly dropped.'
        ]
    ],

    // -------------------------------------------------
    // 03 — TRAVEL / BUSINESS CLOSURE
    // -------------------------------------------------
    [
        'id'       => 'tab-3',
        'title'    => 'Before Extended Travel / Business Closure',
        'subtitle' => 'Vacancy Precautions',
        'tab_text' => 'TRAVEL & CLOSURE',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',

        'intro' => 'Some policies have conditions around extended vacancy that can affect claim validity. Before leaving your property or premises for more than 30 days, check the following.',

        'items' => [
            'Notify your insurer in writing — keep the reference.',
            'Check your policy’s vacancy clause.',
            'Ensure someone you trust can access the property or premises in an emergency.',
            'Photograph all rooms, valuables, and business stock before leaving — store in cloud.',
            'Confirm your insurer’s claims helpline number is saved in your phone.'
        ]
    ],

    // -------------------------------------------------
    // 04 — LIFE / BUSINESS CHANGE
    // -------------------------------------------------
    [
        'id'       => 'tab-4',
        'title'    => 'After a Life Event or Business Change',
        'subtitle' => 'Circumstance Update',
        'tab_text' => 'LIFE & BIZ CHANGE',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',

        'intro' => 'Life events and business changes can alter what you own and what needs to be protected. Review your policy whenever your circumstances change.',

        'items' => [
            'Has there been a marriage, inheritance, new baby, or partnership change? Contents, asset, and business values change — review and update accordingly.'
        ]
    ],

    // -------------------------------------------------
    // 05 — EMERGENCY FILE
    // -------------------------------------------------
    [
        'id'       => 'tab-5',
        'title'    => 'In Your Emergency File — Keep This Accessible',
        'subtitle' => 'Critical Records',
        'tab_text' => 'EMERGENCY FILE',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>',

        'intro' => 'Keep these documents and records together so they are easy to access when you need to report or support a claim.',

        'items' => [
            'A copy of your current Policy Schedule — both digital (email/cloud) and one physical printout.',
            'Your insurer’s claims helpline number — saved in your phone and written in your emergency file.',
            'Photographs of all rooms, valuables, and business stock — updated annually and stored in cloud.',
            'Purchase receipts for all major appliances, electronics, and furniture.',
            'Jewellery valuation certificate — kept with policy documents.',
            'For small businesses: stock register as on date of last policy update; purchase invoices for all equipment; last 3 years of business accounts (for business interruption claims).'
        ]
    ]
];

// =====================================================
// TOTAL CHECKLIST COUNT
// =====================================================

$total_items = 0;

foreach ($folder_sections as $folder) {
    $total_items += count($folder['items']);
}
?>

<div class="insurance-checklist-wrapper" id="checklist">

    <!-- ============================================= -->
    <!-- HEADER -->
    <!-- ============================================= -->

    <header class="checklist-header">
        <div class="header-content">
            <h2>Your Property Insurance Checklist</h2>
            <p class="section-subtitle">
                This checklist is your practical tool, to use when buying a policy,
                at every renewal, and when making a claim. Share it with your family
                — and your business partner. Keep a copy accessible alongside your
                policy documents.
            </p>
        </div>

        <div class="total-progress-badge">
            <strong class="total-completed">0</strong>
            /
            <span class="total-count"><?php echo esc_html($total_items); ?></span>
            <span class="badge-label">completed</span>
        </div>
    </header>

    <!-- ============================================= -->
    <!-- ACCORDION CARDS GRID -->
    <!-- ============================================= -->

    <div class="checklist-grid-container">
        <?php foreach ($folder_sections as $index => $folder): ?>
        <?php 
                $item_count = count($folder['items']);
                $is_first = ($index === 0);
            ?>
        <div class="checklist-card <?php echo $is_first ? 'active' : ''; ?>"
            id="card-<?php echo esc_attr($folder['id']); ?>">

            <!-- Card Header / Toggle Button -->
            <button type="button" class="card-toggle-btn"
                onclick="toggleAccordion('card-<?php echo esc_attr($folder['id']); ?>')">
                <div class="card-icon-title">
                    <span class="card-icon">
                        <?php echo $folder['icon_svg']; ?>
                    </span>
                    <div class="card-titles">
                        <h3 class="card-title title-collapsed"><?php echo esc_html($folder['tab_text']); ?></h3>
                        <h3 class="card-title title-expanded"><?php echo esc_html($folder['title']); ?></h3>
                        <span class="card-subtitle-text"><?php echo esc_html($folder['subtitle']); ?></span>
                    </div>
                </div>

                <div class="card-meta-right">
                    <span class="card-progress-indicator">
                        <strong class="folder-completed">0</strong>/<?php echo esc_html($item_count); ?>
                    </span>
                    <span class="accordion-arrow">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                </div>
            </button>

            <!-- Card Body / Checklist Items -->
            <div class="card-dropdown-body">
                <?php if (!empty($folder['intro'])): ?>
                <p class="folder-intro"><?php echo esc_html($folder['intro']); ?></p>
                <?php endif; ?>

                <ul class="checklist-items-list">
                    <?php foreach ($folder['items'] as $item_idx => $item_text): ?>
                    <?php $item_id = $folder['id'] . '_chk_' . $item_idx; ?>
                    <li class="checklist-item-row">
                        <input type="checkbox" id="<?php echo esc_attr($item_id); ?>" class="binder-checkbox">
                        <label for="<?php echo esc_attr($item_id); ?>">
                            <?php echo esc_html($item_text); ?>
                        </label>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
        <?php endforeach; ?>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector('.insurance-checklist-wrapper');
    if (!wrapper) return;

    const checkboxes = wrapper.querySelectorAll('.binder-checkbox');

    function updateProgress() {
        let totalCompleted = 0;

        wrapper.querySelectorAll('.checklist-card').forEach(function(card) {
            const completed = card.querySelectorAll('.binder-checkbox:checked').length;
            const folderCompleted = card.querySelector('.folder-completed');

            if (folderCompleted) {
                folderCompleted.textContent = completed;
            }

            totalCompleted += completed;
        });

        const totalCompletedElement = wrapper.querySelector('.total-completed');
        if (totalCompletedElement) {
            totalCompletedElement.textContent = totalCompleted;
        }
    }

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', updateProgress);
    });

    updateProgress();
});

function toggleAccordion(cardId) {
    const targetCard = document.getElementById(cardId);
    if (!targetCard) return;

    targetCard.classList.toggle('active');
}
</script>