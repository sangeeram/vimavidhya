<?php
/**
 * Motor Insurance Claim Documents Section
 * Built for Vima Vidya WordPress Theme
 */

// 1. Motor Insurance Common Documents Array (Section 1: Ribbon Grid)
$common_docs = [
    'Duly completed claim form (available on insurer\'s website or via claims helpline)',
    'Original policy document or policy schedule',
    'Copy of the vehicle\'s Registration Certificate (RC)',
    'Copy of the driver\'s valid Driving Licence (appropriate class for vehicle)',
    'Copy of valid Pollution Under Control (PUC) certificate',
    'FIR copy from police (mandatory for third-party accidents, theft, and major accidents)',
    'Photographs of vehicle damage, accident scene, and all involved vehicles',
    'Bank account details — cancelled cheque or passbook copy for NEFT settlement'
];

// 2. Motor Insurance Claim Bento Tabs (Section 2: Asymmetrical Bento Grid)
$claim_tabs = [
    'od' => [
        'tab_title' => 'Own Damage — Accident',
        'icon' => '🚗',
        'number' => '01',
        'badge' => 'Primary Claim',
        'image' => 'https://images.unsplash.com/photo-1541899481282-d53bffe3c351?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Required documentation for own-damage accident claims.',
        'checklist' => [
            'Repair estimate from garage',
            'Repair bills and payment receipts (for reimbursement claims)',
            'Surveyor\'s inspection report',
            'Completed claim form with incident details'
        ]
    ],
    'theft' => [
        'tab_title' => 'Theft',
        'icon' => '🔒',
        'number' => '02',
        'badge' => 'High Priority',
        'image' => 'https://images.unsplash.com/photo-1555680202-c86f0e12f086?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Required documents for vehicle theft claims.',
        'checklist' => [
            'Original FIR copy filed within 24 hours',
            'All sets of vehicle keys',
            'Original Registration Certificate (RC)',
            'Final Police Report (non-traceable certificate) issued after 90 days'
        ]
    ],
    'tp_injury' => [
        'tab_title' => 'Third-Party Injury',
        'icon' => '⚠️',
        'number' => '03',
        'badge' => 'Legal Req.',
        'image' => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Required documents for third-party bodily injury claims.',
        'checklist' => [
            'FIR copy detailing the accident',
            'Copy of driver\'s valid Driving Licence at the time of incident',
            'Medical records and hospital bills of the injured party',
            'MACT (Motor Accident Claims Tribunal) court notices if received'
        ]
    ],
    'tp_death' => [
        'tab_title' => 'Third-Party Death',
        'icon' => '⚖️',
        'number' => '04',
        'badge' => 'Tribunal Case',
        'image' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Required documents for third-party fatal accident claims.',
        'checklist' => [
            'FIR copy',
            'Official death certificate',
            'Post-mortem report',
            'Legal heir certificate / succession certificate',
            'MACT court notices'
        ]
    ],
    'calamity' => [
        'tab_title' => 'Natural Calamity',
        'icon' => '🌧️',
        'number' => '05',
        'badge' => 'Weather Loss',
        'image' => 'https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Documentation for flood, storm, or earthquake damage claims.',
        'checklist' => [
            'Photographs and videos showing submersion or natural calamity damage',
            'Repair estimate from authorized garage',
            'Surveyor\'s inspection report',
            'Proof of towing (if vehicle was towed from waterlogged area)'
        ]
    ]
];
?>

<section class="claim-docs">
    <div class="claim-docs__container">

        <!-- HEADER -->
        <header class="claim-docs__header">
            <!-- <span class="claim-docs__eyebrow">MOTOR INSURANCE</span> -->
            <h2 class="claim-docs__title">
                Documents Required for Claims
            </h2>
            <p class="claim-docs__subtitle">
               Document requirements vary by insurer and claim type. Always obtain the specific checklist from your insurer at the time of intimation. This is an indicative reference.
        </header>

        <!-- SECTION 1: COMMON DOCUMENTS (Folded Ribbon Process Graphic) -->
        <section class="claim-docs__common">
            <div class="claim-docs__common-heading">
                <div>
                    <!-- <span class="claim-docs__eyebrow">ESSENTIAL CHECKLIST</span> -->
                    <h3>Documents Common to All Claim Types</h3>
                    <p>Start with these essential documents.</p>
                </div>
            </div>

            <div class="claim-docs__ribbon-grid">
                <?php foreach ($common_docs as $index =>$doc): ?>
                    <?php 
                        $step_num = str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT);$step_icons = ['📋', '📄', '🚗', '🪪', '🛡️', '🚨', '📷', '💳'];
                        $current_icon = $step_icons[$index] ?? '📋';
                    ?>
                    <div class="claim-docs__ribbon-card">
                        <div class="claim-docs__ribbon-number" aria-hidden="true">
                            <span><?php echo $step_num; ?></span>
                            <div class="claim-docs__fold-shadow"></div>
                        </div>
                        <div class="claim-docs__ribbon-arrow">
                            <div class="claim-docs__ribbon-content">
                                <span class="claim-docs__ribbon-icon"><?php echo $current_icon; ?></span>
                                <p><?php echo esc_html($doc); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- SECTION 2: CLAIM TYPES (Asymmetrical Bento Grid Layout with White Active Panel) -->
        <section class="claim-docs__section">
            <div class="claim-docs__section-heading">
                <div>
                    <span class="claim-docs__eyebrow">YOUR CHECKLIST</span>
                    <h3>Additional Documents — By Claim Type</h3>
                    <p>Click any visual bento card on the right to load its full details into the active white panel on the left.</p>
                </div>
            </div>

            <div class="claim-docs__bento-container">
                
                <!-- LEFT SIDE: Large Active White Panel -->
                <div class="claim-docs__bento-left">
                    <?php $first = true; ?>
                    <?php foreach ($claim_tabs as $key =>$tab): ?>
                        <div class="claim-docs__active-panel <?php echo $first ? 'is-active' : ''; ?>" 
                             id="active-panel-<?php echo esc_attr($key); ?>">
                            
                            <div class="claim-docs__panel-heading">
                                <div class="claim-docs__panel-symbol" aria-hidden="true">
                                    <?php echo esc_html($tab['icon']); ?>
                                </div>
                                <div class="claim-docs__panel-intro">
                                    <span class="claim-docs__panel-kicker">CLAIM CATEGORY — <?php echo esc_html($tab['number']); ?></span>
                                    <h4 class="claim-docs__panel-title">
                                        <?php echo esc_html($tab['tab_title']); ?>
                                    </h4>
                                    <p class="claim-docs__panel-desc">
                                        <?php echo esc_html($tab['desc']); ?>
                                    </p>
                                </div>
                            </div>

                            <div class="claim-docs__progress">
                                <div class="claim-docs__progress-track">
                                    <span class="claim-docs__progress-fill"></span>
                                </div>
                                <span class="claim-docs__panel-progress-text">
                                    0 of <?php echo count($tab['checklist']); ?> completed
                                </span>
                            </div>

                            <div class="claim-docs__checklist">
                                <?php foreach ($tab['checklist'] as $itemIndex =>$item): ?>
                                    <?php $checkbox_id = 'bento-' . $key . '-' .$itemIndex; ?>
                                    <label class="claim-docs__checkbox-label" for="<?php echo esc_attr($checkbox_id); ?>">
                                        <input type="checkbox"
                                               id="<?php echo esc_attr($checkbox_id); ?>"
                                               class="claim-docs__checkbox"
                                               data-claim="<?php echo esc_attr($key); ?>">
                                        <span class="claim-docs__custom-check" aria-hidden="true">
                                            <svg viewBox="0 0 20 20" fill="none">
                                                <path d="M4 10.5L8 14.5L16 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="claim-docs__item-text">
                                            <?php echo esc_html($item); ?>
                                        </span>
                                        <span class="claim-docs__item-status">Required</span>
                                    </label>
                                <?php endforeach; ?>
                            </div>

                            <div class="claim-docs__panel-footer">
                                <span class="claim-docs__footer-icon" aria-hidden="true">i</span>
                                <p>Requirements may vary by insurer and policy terms. Confirm the final document list with your insurer or claims representative.</p>
                            </div>

                        </div>
                        <?php $first = false; ?>
                    <?php endforeach; ?>
                </div>

                <!-- RIGHT SIDE: Image-Backed Bento Cards Grid -->
                <div class="claim-docs__bento-right">
                    <?php $first = true; ?>
                    <?php foreach ($claim_tabs as $key =>$tab): ?>
                        <button type="button" 
                                class="claim-docs__bento-card claim-docs__bento-card--<?php echo esc_attr($key); ?> <?php echo$first ? 'is-active' : ''; ?>"
                                data-target-tab="<?php echo esc_attr($key); ?>">
                            
                            <div class="claim-docs__bento-bg" style="background-image: url('<?php echo esc_url($tab['image']); ?>');"></div>
                            <div class="claim-docs__bento-overlay"></div>

                            <div class="claim-docs__bento-card-top">
                                <span class="claim-docs__bento-icon"><?php echo $tab['icon']; ?></span>
                                <span class="claim-docs__bento-badge"><?php echo esc_html($tab['badge']); ?></span>
                            </div>
                            
                            <div class="claim-docs__bento-card-content">
                                <h4 class="claim-docs__bento-title"><?php echo esc_html($tab['tab_title']); ?></h4>
                                <span class="claim-docs__bento-num"><?php echo esc_html($tab['number']); ?></span>
                            </div>
                        </button>
                        <?php $first = false; ?>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <!-- IMPORTANT NOTICE -->
        <aside class="claim-docs__notice">
            <span class="claim-docs__notice-icon" aria-hidden="true">!</span>
            <div class="claim-docs__notice-content">
                <h3>Important Guidelines</h3>
                <p>
                    <strong>Important:</strong> Always submit attested photocopies, not originals, unless specifically requested. Retain originals. Get a document receipt acknowledgment from the insurer in writing. Store digital copies of your RC, DL, PUC, insurance certificate, and policy schedule in DigiLocker — accessible even if physical documents are lost or damaged.
                </p>
            </div>
        </aside>

    </div>
</section>

<script>
(function () {
    function initClaimDocs() {
        document.querySelectorAll('.claim-docs').forEach(function (root) {
            if (root.dataset.claimInitialized === 'true') return;
            root.dataset.claimInitialized = 'true';

            const bentoCards = root.querySelectorAll('.claim-docs__bento-card');
            const activePanels = root.querySelectorAll('.claim-docs__active-panel');
            const checkboxes = root.querySelectorAll('.claim-docs__checkbox');

            function switchActiveBento(targetKey) {
                bentoCards.forEach(card => {
                    card.classList.toggle('is-active', card.getAttribute('data-target-tab') === targetKey);
                });
                activePanels.forEach(panel => {
                    const isActive = panel.id === 'active-panel-' + targetKey;
                    panel.classList.toggle('is-active', isActive);
                });
            }

            bentoCards.forEach(card => {
                card.addEventListener('click', function () {
                    const targetKey = this.getAttribute('data-target-tab');
                    switchActiveBento(targetKey);
                });
            });

            checkboxes.forEach(function (checkbox) {
                checkbox.addEventListener('change', function () {
                    const label = checkbox.closest('.claim-docs__checkbox-label');
                    if (label) {
                        label.classList.toggle('is-checked', checkbox.checked);
                    }
                    const panel = checkbox.closest('.claim-docs__active-panel');
                    if (panel) {
                        const items = Array.from(panel.querySelectorAll('.claim-docs__checkbox'));
                        const completed = items.filter(i => i.checked).length;
                        const fill = panel.querySelector('.claim-docs__progress-fill');
                        const progressText = panel.querySelector('.claim-docs__panel-progress-text');
                        if (fill) {
                            fill.style.width = items.length ? (completed / items.length * 100) + '%' : '0%';
                        }
                        if (progressText) {
                            progressText.textContent = completed + ' of ' + items.length + ' completed';
                        }
                    }
                });
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initClaimDocs);
    } else {
        initClaimDocs();
    }
})();
</script>