<?php

// =====================================================
// MOTOR INSURANCE CHECKLIST
// =====================================================

$folder_sections = [

    // -------------------------------------------------
    // 01 — POLICY COVERAGE
    // -------------------------------------------------
    [
        'id'       => 'motor-tab-1',
        'title'    => 'On Policy Coverage',
        'subtitle' => 'IDV, Covers & Add-ons',
        'tab_text' => 'COVERAGE',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',
        'intro'    => 'Verify core protection parameters before finalizing your motor policy to ensure adequate financial safety.',
        'items'    => [
            'IDV is set accurately — matches current market value; not artificially inflated or deflated',
            'Policy type is Comprehensive (TP + OD + Compulsory PA) for any vehicle with meaningful repair value',
            'All chosen add-ons are explicitly listed in the policy schedule — not just described in the sales brochure',
            'Zero Depreciation is included for vehicles under 5 years old',
            'Engine Protection is included if the vehicle will be used in a flood-prone city',
            'Compulsory PA Cover of ₹15 lakh for owner-driver is confirmed in the policy schedule',
            'Unnamed Passenger PA cover is included if family members or colleagues travel in the vehicle regularly',
            'Return to Invoice add-on is included if the vehicle has an outstanding car loan within the first 3 years'
        ]
    ],

    // -------------------------------------------------
    // 02 — EXCLUSIONS AND DEDUCTIBLES
    // -------------------------------------------------
    [
        'id'       => 'motor-tab-2',
        'title'    => 'On Exclusions and Deductibles',
        'subtitle' => 'What is Not Covered',
        'tab_text' => 'EXCLUSIONS',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>',
        'intro'    => 'Understand policy boundaries and deductibles so there are no surprises at claim time.',
        'items'    => [
            'Read the full exclusions section of the policy wording — not just the summary in the brochure',
            'Know your Compulsory Deductible amount and factor that into your expectations for any OD claim',
            'Any CNG/LPG conversion, accessories, or modifications are declared and endorsed on the policy',
            'Vehicle usage is accurately declared — private, commercial, or mixed; no undisclosed commercial use'
        ]
    ],

    // -------------------------------------------------
    // 03 — THE INSURER
    // -------------------------------------------------
    [
        'id'       => 'motor-tab-3',
        'title'    => 'On the Insurer',
        'subtitle' => 'Reliability & Service',
        'tab_text' => 'THE INSURER',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path><path d="M9 9h1"></path><path d="M9 13h1"></path><path d="M9 17h1"></path></svg>',
        'intro'    => 'Evaluate the insurer’s track record, garage network, and competitive pricing.',
        'items'    => [
            'Claim Settlement Ratio (CSR) is above 85% for 3 consecutive years — verified at IRDAI Annual Report (irdai.gov.in)',
            'Cashless garage network in your area includes your vehicle brand\'s authorised service centre — confirmed, not assumed',
            'The insurer has an accessible 24x7 claims helpline — number saved in your phone right now',
            'OD premium compared on a pre-GST, same-IDV, same-add-on basis across at least 3 insurers'
        ]
    ],

    // -------------------------------------------------
    // 04 — DOCUMENTATION AND COMPLIANCE
    // -------------------------------------------------
    [
        'id'       => 'motor-tab-4',
        'title'    => 'On Documentation and Compliance',
        'subtitle' => 'Records & Paperwork',
        'tab_text' => 'DOCS & COMPLIANCE',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>',
        'intro'    => 'Ensure your paperwork and compliance are properly handled to prevent claim rejections.',
        'items'    => [
            'Proposal Form filled personally — not by the agent — and retention of a signed copy',
            'Policy certificate stored digitally in DigiLocker and in the mParivahan app',
            'Renewal reminder set in calendar 30 days before the policy expiry date',
            'All modifications and accessories declared on the policy and endorsed correctly',
            'If used vehicle: Policy transfer completed or fresh policy issued on the date of purchase',
            'A family member knows where the policy is stored, knows the insurer\'s helpline number, and knows what to do in a claim'
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

<div class="insurance-checklist-wrapper" id="motor-checklist">

    <!-- ============================================= -->
    <!-- HEADER -->
    <!-- ============================================= -->

    <header class="checklist-header">
        <div class="header-content">
            <h2>Checklist — What to Verify Before You Sign</h2>
            <p class="section-subtitle">
                Use this as your pre-purchase checklist. Tick every item before you pay the premium.
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
    const wrapper = document.getElementById('motor-checklist');
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