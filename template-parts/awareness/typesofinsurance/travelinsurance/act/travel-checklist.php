<?php
/**
 * Vima Vidya — Travel Insurance Checklist Template
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

        'intro' => 'Verify your core policy benefits and limits to match your destination and activities before paying the premium.',

        'items' => [
            'Medical sum insured is appropriate for my destination: ₹10 lakh+ domestic; USD 100,000+ Asia; USD 250,000+ USA/UK/Europe/ANZ',
            'Medical Evacuation is explicitly listed — including helicopter evacuation for domestic treks or remote pilgrimages',
            'Trip Cancellation limit is adequate to cover the total prepaid non-refundable cost of my trip',
            'Baggage sub-limits are adequate for the electronics and valuables I am travelling with',
            'Adventure Sports Add-On is included if I plan any non-standard physical activity during the trip',
            'Pre-existing condition coverage status is confirmed, stability clause requirements understood and satisfied',
            'Compassionate Visit benefit is included for international travel',
            'Repatriation of Mortal Remains benefit is included for all international travel'
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
            'Read the full exclusions section — not just the product summary on the comparison website',
            'Adventure sports exclusion applies or does not apply to your planned activities — add-on purchased if needed',
            'Know specifically what the policy will NOT pay for and have plans for that accordingly',
            'The overseas exclusion / territorial scope is clear — your policy covers the destinations you have declared',
            'Delay thresholds for Trip Delay and Baggage Delay are known, reasonable, and acceptable'
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
            'Claim Settlement Ratio (CSR) is above 90% for the past 3 years — verified on the IRDAI Annual Report at irdai.gov.in',
            'A 24/7 Assistance helpline is explicitly listed as a benefit; you have called it and confirmed it connects to a human being',
            'Premium quoted has been compared excluding GST — you have done a like-for-like comparison across at least 3 plans',
            'The insurer\'s hospital network has been verified for your specific destination'
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

        'intro' => 'Ensure your digital records and emergency contacts are shared and accessible before departure.',

        'items' => [
            'Policy certificate is saved to your phone, email, and shared with one family member in India before departure',
            'The 24/7 helpline number is saved in your phone under a distinctly memorable contact name',
            'A digital copy of your passport is stored on cloud storage and accessible without your physical device',
            'Your nominee details on all insurance policies are accurate and current before you depart'
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
                Use this as your pre-purchase verification. Tick every item before paying the premium.
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