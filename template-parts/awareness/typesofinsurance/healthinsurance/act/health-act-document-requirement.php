<?php
/**
- Health Insurance Claim Documents Section
- Built for Vima Vidya WordPress Theme
 */

// 1. Health Insurance Common Documents Array (Section 1: Ribbon Grid)
$common_docs = [
    'Duly completed claim form (insurer-provided)',
    'Original policy document or policy schedule',
    'Photo identity proof of insured/claimant (PAN, Passport)', // Redacted sensitive identifier per privacy protocol
    'Address proof of insured/claimant',
    'Bank account details (cancelled cheque or passbook copy) for NEFT payment'
];

// 2. Health Insurance Claim Bento Tabs (Section 2: Asymmetrical Bento Grid)
$claim_tabs = [
    'cashless' => [
        'tab_title' => 'Hospitalisation — Cashless',
        'icon' => '🏥',
        'number' => '01',
        'badge' => 'Network Claim',
        'image' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Required documentation and procedural forms for cashless hospitalisation claims at network hospitals.',
        'checklist' => [
            'Pre-authorisation form (submitted by hospital)',
            'Discharge summary',
            'Itemised bills and receipts',
            'Surgeon/consultant notes',
            'Investigation reports'
        ]
    ],
    'reimbursement' => [
        'tab_title' => 'Hospitalisation — Reimbursement',
        'icon' => '📄',
        'number' => '02',
        'badge' => 'Self Settlement',
        'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Documentation required when paying out-of-pocket at network or non-network hospitals.',
        'checklist' => [
            'All original bills, receipts, prescriptions',
            'Discharge summary',
            'Surgeon/anaesthetist certificates',
            'Investigation and lab reports',
            'Doctor\'s referral letter'
        ]
    ],
    'daycare' => [
        'tab_title' => 'Day Care Procedure',
        'icon' => '⚡',
        'number' => '03',
        'badge' => 'Short Stay',
        'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Required papers for listed medical treatments requiring less than 24 hours of hospitalisation.',
        'checklist' => [
            'Procedure completion certificate',
            'Bills and receipts',
            'Treating doctor\'s certificate',
            'Hospital records'
        ]
    ],
    'critical' => [
        'tab_title' => 'Critical Illness (Rider Claim)',
        'icon' => '❤️',
        'number' => '04',
        'badge' => 'Lump Sum',
        'image' => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Diagnostic verification papers required for critical illness rider payouts upon formal diagnosis.',
        'checklist' => [
            'Specialist\'s diagnostic report confirming illness',
            'Pathology reports (for cancer, biopsy results)',
            'ECG/angiography (cardiac)',
            'Doctor\'s certificate of first diagnosis'
        ]
    ],
    'maternity' => [
        'tab_title' => 'Maternity Claim',
        'icon' => '👶',
        'number' => '05',
        'badge' => 'Add-on Cover',
        'image' => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Documentation required for delivery, pre/post-natal care, and newborn enrollment.',
        'checklist' => [
            'Discharge summary (delivery)',
            'Bills and receipts',
            'Pre-natal records',
            'Newborn details for enrollment in policy'
        ]
    ],
    'posthosp' => [
        'tab_title' => 'Post-Hospitalisation',
        'icon' => '🩺',
        'number' => '06',
        'badge' => 'Recovery Care',
        'image' => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Required documents for follow-up care and recovery expenses after discharge.',
        'checklist' => [
            'Follow-up doctor certificates',
            'Bills for medicines, physiotherapy, consultations',
            'Original discharge summary (linking to hospitalisation)'
        ]
    ]
];
?>

<section class="claim-docs">
    <div class="claim-docs__container">

        <!-- HEADER -->
        <header class="claim-docs__header">
            <!-- <span class="claim-docs__eyebrow">HEALTH INSURANCE</span> -->
            <h2 class="claim-docs__title">
                Documents Required for Claims — Indicative List
            </h2>
            <p class="claim-docs__subtitle">
                Document requirements vary by insurer and claim type. Always obtain the specific checklist from your insurer at the time of intimation.
            </p>
        </header>

        <!-- SECTION 1: COMMON DOCUMENTS (Folded Ribbon Process Graphic) -->
        <section class="claim-docs__common">
            <div class="claim-docs__common-heading">
                <div>
                    <!-- <span class="claim-docs__eyebrow">ESSENTIAL CHECKLIST</span> -->
                    <h3>Documents Common to All Claim Types</h3>
                    <p>Start with these essential foundational documents required across all claims.</p>
                </div>
            </div>

            <div class="claim-docs__ribbon-grid">
                <?php foreach ($common_docs as $index =>$doc): ?>
                    <?php 
                        $step_num = str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT);$step_icons = ['📋', '📄', '🪪', '🏠', '💳'];
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
                    <!-- <span class="claim-docs__eyebrow">ADDITIONAL CHECKLIST</span> -->
                    <h3>Additional Documents — By Claim Type</h3>
                    <p>Click any visual bento card on the right to load its full checklist and key points into the active white panel on the left.</p>
                </div>
            </div>

            <div class="claim-docs__bento-container">
                
                <!-- LEFT SIDE: Large Active White Panel -->
                <div class="claim-docs__bento-left">
                    <?php $first = true; ?>
                    <?php foreach ($claim_tabs as $key =>$tab): ?>
                        <div class="claim-docs__active-panel claim-docs__panel--<?php echo esc_attr($key); ?> <?php echo$first ? 'is-active' : ''; ?>" 
                             id="active-panel-<?php echo esc_attr($key); ?>">
                            
                            <div class="claim-docs__panel-heading">
                                <div class="claim-docs__panel-symbol" aria-hidden="true">
                                    <?php echo esc_html($tab['icon']); ?>
                                </div>
                                <div class="claim-docs__panel-intro">
                                    <span class="claim-docs__panel-kicker">CLAIM TYPE — <?php echo esc_html($tab['number']); ?></span>
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
                                    <?php $checkbox_id = 'health-bento-' . $key . '-' .$itemIndex; ?>
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
                    <strong>Important:</strong> Always submit attested photocopies, not originals, unless specifically requested. Retain originals with yourself. Get a document receipt acknowledgment from the insurer in writing. If submitting online, keep screenshots of each upload confirmation.
                </p>
            </div>
        </aside>

    </div>
</section>

<script>
(function () {
    function initHealthClaimDocs() {
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
        document.addEventListener('DOMContentLoaded', initHealthClaimDocs);
    } else {
        initHealthClaimDocs();
    }
})();
</script>