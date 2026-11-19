<?php
/**
 * Life Insurance Claim Documents Section
 * Built for Vima Vidya WordPress Theme
 */

// 1. Life Insurance Common Documents Array (Section 1: Ribbon Grid)
$common_docs = [
    'Completed Claim Form (available on insurer website / branches)',
    'Original Policy Document or Policy Bond',
    'Original or certified Death Certificate from the relevant Municipal Corporation / Panchayat',
    'Nominee\'s Photo Identity Proof (PAN / Passport)', // Redacted sensitive identifier per privacy protocol
    'Nominee\'s Address Proof',
    'Bank account details — cancelled cheque and passbook copy for NEFT settlement',
    'Nomination certificate (if available) or proof of relationship to the insured'
];

// 2. Life Insurance Claim Bento Tabs (Section 2: Asymmetrical Bento Grid)
$claim_tabs = [
    'accidental' => [
        'tab_title' => 'Accidental Death',
        'icon' => '⚡',
        'number' => '01',
        'badge' => 'High Priority',
        'image' => 'https://images.unsplash.com/photo-1541899481282-d53bffe3c351?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Required documents and guidelines for accidental death claims.',
        'checklist' => [
            'FIR / Police Report',
            'Post-Mortem Report',
            'Inquest Report',
            'Newspaper reports (if accident was reported)',
            'FIR must be filed at the nearest police station within 24 hours of accidental death'
        ]
    ],
    'illness' => [
        'tab_title' => 'Death due to illness',
        'icon' => '🏥',
        'number' => '02',
        'badge' => 'Medical Records',
        'image' => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Required medical documents for illness-related death claims.',
        'checklist' => [
            'Hospital records',
            'Treating doctor\'s certificate',
            'Discharge summary or death summary',
            'Any diagnostic reports',
            'Medical records need to go back to the onset of the condition — gather historical hospital records'
        ]
    ],
    'early' => [
        'tab_title' => 'Early Claim (within 3 years)',
        'icon' => '⏳',
        'number' => '03',
        'badge' => 'Investigation',
        'image' => 'https://images.unsplash.com/photo-1555680202-c86f0e12f086?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Documentation and cooperation requirements for early claims.',
        'checklist' => [
            'All standard death claim documents',
            'Financial documents to establish insurable interest',
            'Insurer may conduct field investigation',
            'Full cooperation is essential; incontestability protection begins after 3 years'
        ]
    ],
    'critical' => [
        'tab_title' => 'Critical Illness Rider Claim',
        'icon' => '❤️',
        'number' => '04',
        'badge' => 'Living Benefit',
        'image' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Required documentation for critical illness rider claims triggered by diagnosis.',
        'checklist' => [
            'Diagnosis report',
            'Specialist doctor\'s certificate',
            'Hospital admission records — claim is triggered by diagnosis, not death',
            'Claim must be filed within the specified period from diagnosis — check rider terms'
        ]
    ],
    'disability' => [
        'tab_title' => 'Accidental Disability Claim',
        'icon' => '♿',
        'number' => '05',
        'badge' => 'Disability Cover',
        'image' => 'https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=600&q=80',
        'desc' => 'Required verification documents for permanent total disability claims.',
        'checklist' => [
            'Doctor\'s certificate confirming permanent total disability',
            'Physiotherapy / rehabilitation records',
            'Permanent total disability requires independent medical assessment — insurer may appoint a medical examiner'
        ]
    ]
];
?>

<section class="claim-docs">
    <div class="claim-docs__container">

        <!-- HEADER -->
        <header class="claim-docs__header">
            <span class="claim-docs__eyebrow">LIFE INSURANCE</span>
            <h2 class="claim-docs__title">
                Documents Required for Life Insurance Claims
            </h2>
            <p class="claim-docs__subtitle">
                Ensure your nominee has complete paperwork to process claims without friction. Here is the complete reference guide for all claim types.
            </p>
        </header>

        <!-- SECTION 1: COMMON DOCUMENTS (Folded Ribbon Process Graphic) -->
        <section class="claim-docs__common">
            <div class="claim-docs__common-heading">
                <div>
                    <span class="claim-docs__eyebrow">ESSENTIAL CHECKLIST</span>
                    <h3>Standard Documents Required for All Death Claims</h3>
                    <p>Start with these essential foundational documents.</p>
                </div>
            </div>

            <div class="claim-docs__ribbon-grid">
                <?php foreach ($common_docs as $index => $doc): ?>
                    <?php 
                        $step_num = str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT);
                        $step_icons = ['📋', '📄', '🏛️', '🪪', '🏠', '💳', '📁'];
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
                    <span class="claim-docs__eyebrow">ADDITIONAL CHECKLIST</span>
                    <h3>Additional Documents — By Claim Type</h3>
                    <p>Click any visual bento card on the right to load its full checklist and key points into the active white panel on the left.</p>
                </div>
            </div>

            <div class="claim-docs__bento-container">
                
                <!-- LEFT SIDE: Large Active White Panel -->
                <div class="claim-docs__bento-left">
                    <?php $first = true; ?>
                    <?php foreach ($claim_tabs as $key => $tab): ?>
                        <div class="claim-docs__active-panel <?php echo $first ? 'is-active' : ''; ?>" 
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
                                <?php foreach ($tab['checklist'] as $itemIndex => $item): ?>
                                    <?php $checkbox_id = 'life-bento-' . $key . '-' . $itemIndex; ?>
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
                    <?php foreach ($claim_tabs as $key => $tab): ?>
                        <button type="button" 
                                class="claim-docs__bento-card claim-docs__bento-card--<?php echo esc_attr($key); ?> <?php echo $first ? 'is-active' : ''; ?>"
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
                    <strong>Important:</strong> Always submit attested photocopies or certified originals as requested by the insurer. Ensure your nominee is fully aware of where physical policy bonds and documents are stored to prevent delays during claim intimation.
                </p>
            </div>
        </aside>

    </div>
</section>

<script>
(function () {
    function initLifeClaimDocs() {
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
        document.addEventListener('DOMContentLoaded', initLifeClaimDocs);
    } else {
        initLifeClaimDocs();
    }
})();
</script>