<?php

// =====================================================
// PERSONAL ACCIDENT INSURANCE CHECKLIST
// =====================================================

$folder_sections = [

    // -------------------------------------------------
    // 01 — POLICY COVERAGE
    // -------------------------------------------------
    [
        'id'       => 'pa-tab-1',
        'title'    => 'On the Policy Coverage',
        'subtitle' => 'Core Benefits & Scope',
        'tab_text' => 'COVERAGE',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',

        'intro' => 'Review the core protection parameters before finalizing your policy to ensure your coverage matches your financial and professional reality.',

        'items' => [
            'CSI is at least 10× my annual income + outstanding loans',
            'Policy covers all four core events: AD, PTD, PPD, and TTD',
            'Disability Schedule has at least 30+ conditions listed (broader is better)',
            'PPD percentages for disabilities relevant to my profession are clearly stated',
            'TTD benefit is included (if I am self-employed or do not have employer sick pay)',
            'Add-ons I selected are explicitly listed in the policy schedule',
            'Worldwide cover is included (if I travel internationally)'
        ]
    ],

    // -------------------------------------------------
    // 02 — EXCLUSIONS
    // -------------------------------------------------
    [
        'id'       => 'pa-tab-2',
        'title'    => 'On Exclusions',
        'subtitle' => 'What is Not Covered',
        'tab_text' => 'EXCLUSIONS',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg>',

        'intro' => 'Understand the boundaries of your policy so there are no surprises at the time of a claim.',

        'items' => [
            'I have read the full exclusions section — not just the summary',
            'I know what the policy will NOT pay for',
            'The intoxication exclusion terms are clear to me',
            'Adventure sports exclusion applies / does not apply to my lifestyle (add-on taken if needed)',
            'Pre-existing condition implications are understood'
        ]
    ],

    // -------------------------------------------------
    // 03 — THE INSURER
    // -------------------------------------------------
    [
        'id'       => 'pa-tab-3',
        'title'    => 'On the Insurer',
        'subtitle' => 'Reliability & Service',
        'tab_text' => 'THE INSURER',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path><path d="M9 9h1"></path><path d="M9 13h1"></path><path d="M9 17h1"></path></svg>',

        'intro' => 'Evaluate the insurer’s track record, claims support, and structural renewal terms.',

        'items' => [
            'Claim Settlement Ratio (CSR) is above 90% for the past 3 years (check IRDAI Annual Report)',
            'Insurer has an accessible claims helpline and physical branch in my city',
            'Premium quoted excludes GST — I have compared like-for-like',
            'Renewal terms are confirmed — maximum renewal age verified'
        ]
    ],

    // -------------------------------------------------
    // 04 — DOCUMENTATION AND NOMINATION
    // -------------------------------------------------
    [
        'id'       => 'pa-tab-4',
        'title'    => 'On Documentation and Nomination',
        'subtitle' => 'Records & Compliance',
        'tab_text' => 'DOCS & NOMINATION',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>',

        'intro' => 'Ensure your paperwork is accurate and accessible so claims can be processed without administrative friction.',

        'items' => [
            'Proposal Form has been filled by me, not the agent, and I have kept a copy',
            'Nominee is named correctly — exact legal name matching PAN / Aadhaar',
            'Nominee knows the policy exists and has the insurer contact details',
            'Policy document is stored digitally (DigiLocker) and shared with a trusted family member'
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

<div class="insurance-checklist-wrapper" id="pa-checklist">

    <!-- ============================================= -->
    <!-- HEADER -->
    <!-- ============================================= -->

    <header class="checklist-header">
        <div class="header-content">
            <h2>Checklist — What to Check Before You Sign</h2>
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
    const wrapper = document.getElementById('pa-checklist');
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