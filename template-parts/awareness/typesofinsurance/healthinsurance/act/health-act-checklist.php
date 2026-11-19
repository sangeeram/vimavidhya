<?php
/**
 * Vima Vidya — Health Insurance Checklist Template
 */

$folder_sections = [

    // -------------------------------------------------
    // 01 — POLICY COVERAGE
    // -------------------------------------------------
    [
        'id'       => 'tab-1',
        'title'    => 'On the Policy Coverage',
        'subtitle' => 'Coverage & Limits',
        'tab_text' => 'POLICY COVERAGE',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>',

        'intro' => 'Verify your core policy benefits and limits to match your healthcare needs before paying the premium.',

        'items' => [
            'Sum Insured is appropriate for my city and likely hospitalisation costs (minimum ₹5–10 lakh for metros)',
            'Policy covers hospitalisation, day care procedures, pre- and post-hospitalisation expenses',
            'Room rent sub-limit is at least 1–2% of SI (or I have opted for a no-sub-limit policy)',
            'Restore/recharge benefit is included — critical for families',
            'No-claim bonus terms are clearly stated — I know how my cover grows',
            'Add-ons I selected are explicitly listed in the policy schedule',
            'Waiting period for pre-existing diseases is understood and accepted'
        ]
    ],

    // -------------------------------------------------
    // 02 — EXCLUSIONS
    // -------------------------------------------------
    [
        'id'       => 'tab-2',
        'title'    => 'On Exclusions',
        'subtitle' => 'Boundaries & Scope',
        'tab_text' => 'EXCLUSIONS',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>',

        'intro' => 'Know specifically what the policy will NOT pay for so you can plan and prepare accordingly.',

        'items' => [
            'I have read the full exclusions section — not just the summary',
            'I know what the policy will NOT pay for',
            'Co-payment clause terms are clear — I understand my share of each claim',
            'Pre-existing condition waiting period implications are understood',
            'AYUSH coverage status is confirmed (covered or not)'
        ]
    ],

    // -------------------------------------------------
    // 03 — INSURER
    // -------------------------------------------------
    [
        'id'       => 'tab-3',
        'title'    => 'On the Insurer',
        'subtitle' => 'Credibility & Service',
        'tab_text' => 'INSURER',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',

        'intro' => 'Verify insurer credibility, claim settlement track records, and operational support channels.',

        'items' => [
            'Claim Settlement Ratio (CSR) is above 90% for the past 3 years (check IRDAI Annual Report)',
            'Insurer has an accessible claims helpline and TPA with strong hospital network in my city',
            'Premium quoted excludes GST — I have compared like-for-like',
            'Network hospitals in my area are confirmed — I checked the insurer\'s hospital locator'
        ]
    ],

    // -------------------------------------------------
    // 04 — DOCUMENTATION AND NOMINATION
    // -------------------------------------------------
    [
        'id'       => 'tab-4',
        'title'    => 'On Documentation and Nomination',
        'subtitle' => 'Preparedness',
        'tab_text' => 'DOCS & NOMINATION',
        'icon_svg' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>',

        'intro' => 'Ensure your proposal forms, digital records, and emergency contacts are accurate before activation.',

        'items' => [
            'Proposal Form has been filled by me, not the agent, and I have kept a copy',
            'All family members to be covered are listed with correct names matching ID documents',
            'Policy document is stored digitally (DigiLocker) and shared with a trusted family member',
            'I have noted the TPA name and claims helpline number in my contacts'
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