<?php
// 1. Common Documents Array
$common_docs = [
    'Duly completed claim form (insurer-provided)',
    'Original policy document or policy schedule',
    'Photo identity proof of insured / claimant (Aadhaar, PAN, Passport)',
    'Address proof of insured / claimant',
    'Bank account details (cancelled cheque or passbook copy) for NEFT payment'
];

// 2. Individual Claim Tabs with respective icon representations (Personal Accident)
$claim_tabs = [
    'death' => [
        'tab_title' => 'Accidental Death',
        'icon' => '🕊️',
        'desc' => 'Required documentation for accidental death claims.',
        'checklist' => [
            'Original death certificate',
            'FIR / Panchnama / Police report',
            'Post-mortem report (where conducted)',
            'Hospital records if hospitalised before death',
            'Nominee\'s ID and relationship proof',
            'Nominee\'s bank details'
        ]
    ],
    'ptd' => [
        'tab_title' => 'Permanent Total Disability',
        'icon' => '♿',
        'desc' => 'Required documents for permanent total disability claims.',
        'checklist' => [
            'FIR (if accident in public place or road)',
            'Complete hospital records, discharge summary',
            'Specialist medical certificate confirming permanent total nature of disability',
            'Certificate from government-authorised medical officer',
            'Employer letter confirming inability to resume work (if salaried)',
            'Photographs of disability (some insurers require this)'
        ]
    ],
    'ppd' => [
        'tab_title' => 'Permanent Partial Disability',
        'icon' => '📉',
        'desc' => 'Required documents for permanent partial disability claims.',
        'checklist' => [
            'FIR (where applicable)',
            'Hospital records',
            'Specialist certificate confirming specific disability and its permanence',
            'Medical photographs',
            'Disability certificate from authorised doctor',
            'Policy\'s Disability Schedule (retained by you for reference)'
        ]
    ],
    'ttd' => [
        'tab_title' => 'Temporary Total Disability',
        'icon' => '⏱️',
        'desc' => 'Essential documents for temporary total disability claims.',
        'checklist' => [
            'FIR (where applicable)',
            'Treating doctor\'s certificate confirming inability to work (to be renewed periodically)',
            'Employer\'s HR certificate confirming leave / income loss (for salaried)',
            'For self-employed: CA / business documents showing income loss'
        ]
    ],
    'medical' => [
        'tab_title' => 'Medical Reimbursement',
        'icon' => '🏥',
        'desc' => 'Documentation required for accidental medical reimbursement add-on claims.',
        'checklist' => [
            'Hospital bills (originals)',
            'Discharge summary',
            'Prescription records',
            'Lab and diagnostic reports',
            'FIR (for road or assault-related accidents)'
        ]
    ],
    'fracture' => [
        'tab_title' => 'Fracture Care',
        'icon' => '🦴',
        'desc' => 'Documentation for fracture care add-on claims.',
        'checklist' => [
            'X-ray reports confirming fracture',
            'Doctor\'s certificate',
            'Hospital / clinic records'
        ]
    ],
    'nominee' => [
        'tab_title' => 'Nominee & Legal',
        'icon' => '⚖️',
        'desc' => 'Documentation for nominee and legal heir verification.',
        'checklist' => [
            'Nomination proof as per policy',
            'If no nominee: succession certificate, legal heir certificate, court order',
            'Marriage certificate (if claiming as spouse)'
        ]
    ]
];
?>

<section class="claim-docs">
    <div class="claim-docs__container">

        <header class="claim-docs__header">
            <span class="claim-docs__eyebrow">PERSONAL ACCIDENT INSURANCE</span>
            <h2 class="claim-docs__title">
                Documents Required for Claims — Indicative List
            </h2>
            <p class="claim-docs__subtitle">
                Document requirements vary by insurer and claim type. This is an indicative list. Always obtain the specific checklist from your insurer at the time of intimation.
            </p>
        </header>

        <!-- Common documents -->
        <section class="claim-docs__common">
            <div class="claim-docs__common-heading">
                <span class="claim-docs__common-icon">📋</span>
                <div>
                    <h3>Documents Common to All Claim Types</h3>
                    <p>Start with these essential documents.</p>
                </div>
            </div>

            <ul class="claim-docs__common-list">
                <?php foreach ($common_docs as $index => $doc): ?>
                    <li class="claim-docs__common-item">
                        <span class="claim-docs__common-number">
                            <?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?>
                        </span>
                        <span><?php echo esc_html($doc); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <!-- Connected tab system -->
        <section class="claim-docs__section">

            <div class="claim-docs__section-heading">
                <div>
                    <span class="claim-docs__eyebrow">YOUR CHECKLIST</span>
                    <h3>Additional Documents — By Claim Type</h3>
                    <p>Select a claim type to view its checklist.</p>
                </div>

                <div class="claim-docs__counter" aria-live="polite">
                    <span class="claim-docs__counter-icon">✓</span>
                    <span id="claim-completed-count">0</span>
                    <span>/</span>
                    <span id="claim-total-count">0</span>
                    <span>completed</span>
                </div>
            </div>

            <!-- Tabs and panels share one connected component -->
            <div class="claim-docs__interface">

                <div class="claim-docs__tabs"
                     role="tablist"
                     aria-label="Select claim type">

                    <?php $i = 0; ?>
                    <?php foreach ($claim_tabs as $key => $tab): ?>
                        <button
                            type="button"
                            class="claim-docs__tab <?php echo $i === 0 ? 'is-active' : ''; ?>"
                            id="claim-tab-<?php echo esc_attr($key); ?>"
                            data-tab="<?php echo esc_attr($key); ?>"
                            role="tab"
                            aria-controls="claim-panel-<?php echo esc_attr($key); ?>"
                            aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                            tabindex="<?php echo $i === 0 ? '0' : '-1'; ?>">

                            <span class="claim-docs__tab-icon"
                                  aria-hidden="true">
                                <?php echo esc_html($tab['icon']); ?>
                            </span>

                            <span class="claim-docs__tab-text">
                                <?php echo esc_html($tab['tab_title']); ?>
                            </span>

                            <span class="claim-docs__tab-arrow"
                                  aria-hidden="true">↗</span>
                        </button>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </div>

                <!-- Content area directly joins the tab navigation -->
                <div class="claim-docs__content">

                    <?php $i = 0; ?>
                    <?php foreach ($claim_tabs as $key => $tab): ?>

                        <div
                            class="claim-docs__panel <?php echo $i === 0 ? 'is-active' : ''; ?>"
                            id="claim-panel-<?php echo esc_attr($key); ?>"
                            role="tabpanel"
                            aria-labelledby="claim-tab-<?php echo esc_attr($key); ?>"
                            <?php echo $i === 0 ? '' : 'hidden'; ?>>

                            <div class="claim-docs__panel-heading">
                                <div class="claim-docs__panel-symbol"
                                     aria-hidden="true">
                                    <?php echo esc_html($tab['icon']); ?>
                                </div>

                                <div class="claim-docs__panel-intro">
                                    <span class="claim-docs__panel-kicker">
                                        CLAIM DOCUMENT CHECKLIST
                                    </span>

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
                                    <?php
                                    $checkbox_id = 'claim-' . $key . '-' . $itemIndex;
                                    ?>
                                    <label
                                        class="claim-docs__checkbox-label"
                                        for="<?php echo esc_attr($checkbox_id); ?>">

                                        <input
                                            type="checkbox"
                                            id="<?php echo esc_attr($checkbox_id); ?>"
                                            class="claim-docs__checkbox"
                                            data-claim="<?php echo esc_attr($key); ?>">

                                        <span class="claim-docs__custom-check"
                                              aria-hidden="true">
                                            <svg viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M4 10.5L8 14.5L16 6"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>
                                        </span>

                                        <span class="claim-docs__item-text">
                                            <?php echo esc_html($item); ?>
                                        </span>

                                        <span class="claim-docs__item-status">
                                            Required
                                        </span>
                                    </label>
                                <?php endforeach; ?>
                            </div>

                            <div class="claim-docs__panel-footer">
                                <span class="claim-docs__footer-icon"
                                      aria-hidden="true">i</span>
                                <p>
                                    Requirements may vary by insurer and policy terms. Confirm the final document list with your insurer or claims representative.
                                </p>
                            </div>

                        </div>

                        <?php $i++; ?>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <!-- Important notice -->
        <aside class="claim-docs__notice">
            <span class="claim-docs__notice-icon"
                  aria-hidden="true">!</span>

            <div class="claim-docs__notice-content">
                <h3>Important Guidelines</h3>
                <p>
                    <strong>Important:</strong> Always submit attested photocopies, not originals, unless specifically requested. Retain originals. Get a document receipt acknowledgment from the insurer in writing. If submitting online, keep screenshots of each upload confirmation.
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

            const tabs = Array.from(
                root.querySelectorAll('.claim-docs__tab')
            );

            const panels = Array.from(
                root.querySelectorAll('.claim-docs__panel')
            );

            const checkboxes = Array.from(
                root.querySelectorAll('.claim-docs__checkbox')
            );

            const completedOutput = root.querySelector(
                '#claim-completed-count'
            );

            const totalOutput = root.querySelector(
                '#claim-total-count'
            );

            if (!tabs.length || !panels.length) return;

            if (totalOutput) {
                totalOutput.textContent = checkboxes.length;
            }

            function updatePanelProgress(panel) {
                const items = Array.from(
                    panel.querySelectorAll('.claim-docs__checkbox')
                );

                const completed = items.filter(function (input) {
                    return input.checked;
                }).length;

                const fill = panel.querySelector(
                    '.claim-docs__progress-fill'
                );

                const progressText = panel.querySelector(
                    '.claim-docs__panel-progress-text'
                );

                if (fill) {
                    fill.style.width = items.length
                        ? (completed / items.length * 100) + '%'
                        : '0%';
                }

                if (progressText) {
                    progressText.textContent =
                        completed + ' of ' + items.length + ' completed';
                }
            }

            function updateOverallProgress() {
                const completed = checkboxes.filter(function (input) {
                    return input.checked;
                }).length;

                if (completedOutput) {
                    completedOutput.textContent = completed;
                }

                panels.forEach(updatePanelProgress);
            }

            function activateTab(tab, moveFocus) {
                const key = tab.dataset.tab;

                tabs.forEach(function (item) {
                    const isActive = item === tab;

                    item.classList.toggle('is-active', isActive);
                    item.setAttribute(
                        'aria-selected',
                        isActive ? 'true' : 'false'
                    );
                    item.tabIndex = isActive ? 0 : -1;
                });

                panels.forEach(function (panel) {
                    const isActive =
                        panel.id === 'claim-panel-' + key;

                    panel.classList.toggle('is-active', isActive);
                    panel.hidden = !isActive;
                });

                /*
                 * Place the selected tab at the beginning of the second
                 * row. This keeps the selected tab connected to the
                 * content panel beneath it.
                 */
                const tabsContainer = root.querySelector(
                    '.claim-docs__tabs'
                );

                if (tabsContainer && tabs.length > 5) {
                    const orderedTabs = tabs.filter(function (item) {
                        return item !== tab;
                    });

                    const firstRow = orderedTabs.slice(0, 5);
                    const remaining = orderedTabs.slice(5);

                    firstRow.forEach(function (item) {
                        tabsContainer.appendChild(item);
                    });

                    tabsContainer.appendChild(tab);

                    remaining.forEach(function (item) {
                        tabsContainer.appendChild(item);
                    });
                }

                updateOverallProgress();

                if (moveFocus) {
                    tab.focus();
                }
            }

            tabs.forEach(function (tab, index) {
                tab.addEventListener('click', function () {
                    activateTab(tab, false);
                });

                tab.addEventListener('keydown', function (event) {
                    let nextIndex = index;

                    if (event.key === 'ArrowRight') {
                        nextIndex = (tabs.indexOf(tab) + 1) % tabs.length;
                    } else if (event.key === 'ArrowLeft') {
                        nextIndex =
                            (tabs.indexOf(tab) - 1 + tabs.length) % tabs.length;
                    } else if (event.key === 'Home') {
                        nextIndex = 0;
                    } else if (event.key === 'End') {
                        nextIndex = tabs.length - 1;
                    } else {
                        return;
                    }

                    event.preventDefault();
                    activateTab(tabs[nextIndex], true);
                });
            });

            checkboxes.forEach(function (checkbox) {
                checkbox.addEventListener('change', function () {
                    const label = checkbox.closest(
                        '.claim-docs__checkbox-label'
                    );

                    if (label) {
                        label.classList.toggle(
                            'is-checked',
                            checkbox.checked
                        );
                    }

                    updateOverallProgress();
                });
            });

            activateTab(tabs.find(function (tab) {
                return tab.getAttribute('aria-selected') === 'true';
            }) || tabs[0], false);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initClaimDocs);
    } else {
        initClaimDocs();
    }
})();
</script>
