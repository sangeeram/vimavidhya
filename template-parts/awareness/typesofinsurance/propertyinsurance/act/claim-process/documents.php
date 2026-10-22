<?php
// 1. Common Documents Array
$common_docs = [
    'Duly completed claim form (insurer-provided)',
    'Original policy document or policy schedule',
    'Photo identity proof of insured / claimant (Aadhaar, PAN, Passport)',
    'Address proof confirming property / business address',
    'Bank account details (cancelled cheque or passbook copy) for NEFT payment'
];

// 2. Individual Claim Tabs with respective icon representations
$claim_tabs = [
    'fire' => [
        'tab_title' => 'Fire / Explosion',
        'icon' => '🔥',
        'desc' => 'Required documentation for fire or explosion damage to home or business properties.',
        'checklist' => [
            'FIR or Fire Brigade Report',
            'Photographs of damage',
            'Contractor estimate for repairs',
            'Purchase receipts/invoices for damaged contents',
            'Discharge summary if any person was injured'
        ]
    ],
    'flood' => [
        'tab_title' => 'Flood & Disaster',
        'icon' => '🌊',
        'desc' => 'Required documents for flood, cyclone, or natural disaster losses.',
        'checklist' => [
            'Photographs of flood/damage levels',
            'Local authority / news report confirming event',
            'List of damaged items with purchase details',
            'Surveyor cooperation documentation'
        ]
    ],
    'rent' => [
        'tab_title' => 'Loss of Rent',
        'icon' => '🏠',
        'desc' => 'Required documents for loss of rental income due to uninhabitable property.',
        'checklist' => [
            'Rental agreement showing previous rent',
            'Evidence of property being uninhabitable (surveyor report/photographs)',
            'Hotel/rent receipts for alternate accommodation'
        ]
    ],
    'theft' => [
        'tab_title' => 'Theft & Burglary',
        'icon' => '🚨',
        'desc' => 'Essential documents required for break-ins and property theft.',
        'checklist' => [
            'FIR with details of items stolen',
            'List of stolen items with purchase value and dates',
            'Proof of ownership (invoices, photographs)',
            'Final police report'
        ]
    ],
    'cash' => [
        'tab_title' => 'Cash Cover',
        'icon' => '💵',
        'desc' => 'Documentation required for cash losses and theft in business premises.',
        'checklist' => [
            'FIR detailing the theft',
            'Cash register records / daily cash book entries',
            'CCTV footage (if available)',
            'Evidence of cash storage method (safe records)'
        ]
    ],
    'contents' => [
        'tab_title' => 'Contents Loss',
        'icon' => '🛋️',
        'desc' => 'Documentation for household items and general contents loss.',
        'checklist' => [
            'Room-by-room inventory of damaged/lost items',
            'Purchase invoices or receipts (originals or digital copies)',
            'Photographs of damaged items'
        ]
    ],
    'jewellery' => [
        'tab_title' => 'Jewellery & Valuables',
        'icon' => '💎',
        'desc' => 'Required documents for jewellery and specified valuable items.',
        'checklist' => [
            'FIR (for theft/loss)',
            'Valuation certificate (pre-loss)',
            'Photographs of items',
            'List with description, weight, and declared value'
        ]
    ],
    'stock' => [
        'tab_title' => 'Stock Loss',
        'icon' => '📦',
        'desc' => 'Commercial claims documentation for inventory and stock loss.',
        'checklist' => [
            'Stock register / inventory records as on date of loss',
            'Purchase invoices for stock',
            'Sales records to establish turnover',
            'Photographs of damaged/destroyed stock',
            'List of items destroyed with purchase value'
        ]
    ],
    'equipment' => [
        'tab_title' => 'Equipment & Machinery',
        'icon' => '⚙️',
        'desc' => 'Documentation for commercial equipment and machinery damage.',
        'checklist' => [
            'Equipment list from policy schedule',
            'Purchase invoices for all equipment',
            'Photographs of damaged machinery',
            'Repair estimate or replacement quotation'
        ]
    ],
    'interruption' => [
        'tab_title' => 'Business Interruption',
        'icon' => '📈',
        'desc' => 'Required records for business interruption and revenue loss claims.',
        'checklist' => [
            'Audited accounts for the previous 2–3 years',
            'Monthly revenue records',
            'Evidence of closure period (surveyor report)',
            'Evidence that closure was caused by the covered physical loss'
        ]
    ]
];
?>


<section class="claim-docs">
    <div class="claim-docs__container">

        <header class="claim-docs__header">
            <span class="claim-docs__eyebrow">PROPERTY INSURANCE</span>
            <h2 class="claim-docs__title">
                Documents Required for Claims
            </h2>
            <p class="claim-docs__subtitle">
                Keep your essential documents ready. Select a claim type
                to see the additional documents you may need.
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
                    <h3>Additional Documents Required</h3>
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
                                    Requirements may vary by insurer and
                                    policy terms. Confirm the final document
                                    list with your insurer or claims
                                    representative.
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
                    Submit copies rather than original documents unless
                    your insurer specifically requests originals.
                    Retain your records and obtain written acknowledgment
                    when documents are submitted.
                </p>
                <p>
                    <strong>For business claims:</strong>
                    Keep stock registers, invoices, sales records and
                    relevant financial statements available. The actual
                    requirements depend on your policy and the nature
                    of the loss.
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
