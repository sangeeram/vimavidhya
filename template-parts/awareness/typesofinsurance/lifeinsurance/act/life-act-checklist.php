<?php
/**
 * Life Insurance Checklist
 */

$folder_sections = [

    // -------------------------------------------------
    // 01 — COVERAGE ADEQUACY
    // -------------------------------------------------
    [
        'id'       => 'life-tab-1',
        'title'    => 'On Coverage Adequacy',
        'subtitle' => 'Sum Assured & Riders',
        'tab_text' => 'COVERAGE',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',
        'intro'    => 'Verify your core protection parameters before finalizing your life insurance policy to ensure adequate financial safety.',
        'items'    => [
            'Term Plan Sum Assured equals at least 10× annual income plus all outstanding liabilities',
            'Policy term covers full working life and liability period — ideally to age 60 or 65',
            'Critical Illness Rider has been added if above 30 and can afford the additional premium',
            'Waiver of Premium Rider is included in Children\'s Policies',
            'If there are business liabilities, the policy is structured under MWPA',
            'Annuity / NPS accumulation plan exists or is being initiated',
            'Group Term Insurance from employer has been noted as a supplement — a separate personal term plan has been bought independently',
            'If a ULIP has been purchased: have verified the charge illustration, lock-in period, fund options, and that annual premium is within ₹2.5 lakh for tax efficiency',
            'If a money-back or endowment plan has been purchased: a separate adequate term plan also exists',
            'If a Guaranteed Income Plan has been purchased: the IRR has been calculated, and it fits as a certainty floor — not as the primary wealth-building tool'
        ]
    ],

    // -------------------------------------------------
    // 02 — PROPOSAL FORM AND POLICY
    // -------------------------------------------------
    [
        'id'       => 'life-tab-2',
        'title'    => 'On the Proposal Form and Policy',
        'subtitle' => 'Declarations & Review',
        'tab_text' => 'PROPOSAL & POLICY',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>',
        'intro'    => 'Ensure legal accuracy of your proposal form, free-look verification, nomination, and payment setup.',
        'items'    => [
            'Proposal Form was filled personally and all health conditions, income, and existing policies declared accurately',
            'Policy document reviewed within 15-day Free Look Period — Sum Assured, term, premium term, and riders verified',
            'Nominee is correctly named and is a Beneficial Nominee (spouse / child / parent)',
            'e-NACH or Standing Instruction is set up for automatic premium payment'
        ]
    ],

    // -------------------------------------------------
    // 03 — THE INSURER
    // -------------------------------------------------
    [
        'id'       => 'life-tab-3',
        'title'    => 'On the Insurer',
        'subtitle' => 'Reliability & Track Record',
        'tab_text' => 'THE INSURER',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path><path d="M9 9h1"></path><path d="M9 13h1"></path><path d="M9 17h1"></path></svg>',
        'intro'    => 'Evaluate the insurer’s claim settlement track record and regulatory registration.',
        'items'    => [
            'Insurer\'s 3-year average Claim Settlement Ratio (CSR) is above 95% — verified at IRDAI Annual Report',
            'Insurer has a 24x7 claims helpline — number saved in phone and shared with nominee',
            'Insurer is IRDAI-registered — verifiable at irdai.gov.in'
        ]
    ],

    // -------------------------------------------------
    // 04 — DOCUMENTATION AND COMMUNICATION
    // -------------------------------------------------
    [
        'id'       => 'life-tab-4',
        'title'    => 'On Documentation and Communication',
        'subtitle' => 'Records & Family Readiness',
        'tab_text' => 'DOCS & COMM',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>',
        'intro'    => 'Ensure storage security and that your nominee is fully briefed for emergency execution.',
        'items'    => [
            'Policy document is stored in DigiLocker and a physical copy is accessible to nominee',
            'Nominee knows the policy number, insurer name, sum assured, and what documents to gather for a claim',
            'Renewal reminder is set in calendar 45 days before premium due date (as backup to auto-pay)'
        ]
    ]
];

// =====================================================
// TOTAL CHECKLIST COUNT
// =====================================================

$total_items = 0;

foreach ($folder_sections as$folder) {
    $total_items += count($folder['items']);
}
?>

<div class="insurance-checklist-wrapper" id="life-checklist">

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
        <?php foreach ($folder_sections as $index =>$folder): ?>
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
                    <?php foreach ($folder['items'] as $item_idx =>$item_text): ?>
                    <?php $item_id = $folder['id'] . '_chk_' .$item_idx; ?>
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
    const wrapper = document.getElementById('life-checklist');
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