<?php
/**
 * Documents Required for Claims Component Template (Travel Insurance)
 */

// 1. Common Documents Array (Travel)
$common_docs = [
    'Duly completed claim form (insurer-provided at the time of intimation)',
    'Policy certificate and schedule (original or digital copy)',
    'Photo identity proof of insured / claimant — [ID Redacted], PAN, or Passport',
    'Bank account details — cancelled cheque or passbook copy — for NEFT payment',
    'Boarding passes and travel tickets confirming declared trip dates and destination'
];

// 2. Individual Claim Tabs with respective icon representations and checklists
$claim_tabs = [
    'medical_overseas' => [
        'tab_title' => 'Medical — Overseas',
        'icon' => '✈️',
        'desc' => 'Required documentation for emergency medical treatments and hospitalisations abroad.',
        'checklist' => [
            'Hospital bills (originals)',
            'Discharge summary',
            'Doctor\'s report',
            'Diagnostic reports',
            'Prescription receipts',
            'Passport copy with entry/exit stamps'
        ]
    ],
    'medical_domestic' => [
        'tab_title' => 'Medical — Domestic',
        'icon' => '🏥',
        'desc' => 'Required documents for emergency medical claims within the home country.',
        'checklist' => [
            'Hospital bills',
            'Discharge summary',
            'Doctor\'s certificate confirming emergency nature',
            'Ambulance receipt if applicable'
        ]
    ],
    'evacuation' => [
        'tab_title' => 'Medical Evacuation',
        'icon' => '🚁',
        'desc' => 'Required documentation for emergency medical evacuation services.',
        'checklist' => [
            'Treating doctor\'s certificate confirming evacuation necessity',
            'Evacuation invoice',
            'Insurer\'s pre-authorisation record'
        ]
    ],
    'cancellation' => [
        'tab_title' => 'Trip Cancellation',
        'icon' => '❌',
        'desc' => 'Required records for pre-departure trip cancellations and covered reasons.',
        'checklist' => [
            'Original booking invoices',
            'Cancellation confirmations',
            'Proof of covered reason (hospital/death certificate, official disaster notification)'
        ]
    ],
    'delay' => [
        'tab_title' => 'Trip Delay',
        'icon' => '⏳',
        'desc' => 'Required documents for carrier-induced trip delays across flights, trains, or other modes.',
        'checklist' => [
            'Official delay certificate from carrier with duration stated',
            'Boarding pass / ticket proof',
            'Meal and accommodation receipts'
        ]
    ],
    'baggage_airline' => [
        'tab_title' => 'Baggage Loss — Airline',
        'icon' => '🧳',
        'desc' => 'Essential documents required for lost luggage handled by airlines.',
        'checklist' => [
            'Property Irregularity Report (PIR) filed at destination airport',
            'Boarding pass',
            'Ticket',
            'Itemised list of lost contents'
        ]
    ],
    'baggage_theft' => [
        'tab_title' => 'Baggage Loss — Train/Road',
        'icon' => '🚨',
        'desc' => 'Required documents for baggage theft during train or road journeys.',
        'checklist' => [
            'FIR / police complaint with number',
            'Carrier acknowledgement',
            'Itemised list of stolen items'
        ]
    ],
    'baggage_delay' => [
        'tab_title' => 'Baggage Delay',
        'icon' => '⏱️',
        'desc' => 'Required documentation for temporary baggage delay emergency purchases.',
        'checklist' => [
            'PIR from airline or carrier confirmation',
            'Emergency purchase receipts',
            'Airline/carrier confirmation of delay duration'
        ]
    ],
    'passport_loss' => [
        'tab_title' => 'Passport Loss Abroad',
        'icon' => '📘',
        'desc' => 'Required records for emergency passport and travel document replacement abroad.',
        'checklist' => [
            'Police complaint / report',
            'Emergency travel document copy',
            'Consular fee receipts',
            'Emergency hotel bills if stranded'
        ]
    ],
    'accidental_death' => [
        'tab_title' => 'Accidental Death',
        'icon' => '🕊️',
        'desc' => 'Required documents for fatal accident claims and nominee processing.',
        'checklist' => [
            'Death certificate',
            'Hospital records',
            'FIR / police report',
            'Post-mortem report',
            'Nominee ID and relationship proof'
        ]
    ],
    'liability' => [
        'tab_title' => 'Personal Liability',
        'icon' => '⚖️',
        'desc' => 'Documentation for third-party injury or property damage claims.',
        'checklist' => [
            'Police report if relevant',
            'Third-party claim documentation',
            'Insurer\'s pre-approval (do not admit liability without insurer guidance)'
        ]
    ]
];
?>

<section class="claim-docs" id="documents">
    <div class="claim-docs__container">

        <header class="claim-docs__header">
            <span class="claim-docs__eyebrow">TRAVEL INSURANCE</span>
            <h2 class="claim-docs__title">
                Documents Required for Claims — Indicative List
            </h2>
            <p class="claim-docs__subtitle">
                Document requirements vary by insurer and claim type. Always obtain the specific checklist from your insurer at the time of intimation. This is a standard indicative reference.
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
                <h3>⚠️ Important Guidelines</h3>
                <p>
                    Always submit attested photocopies and retain all originals unless the insurer specifically requests originals. Get written confirmation before sending original documents.
                </p>
                <p>
                    Get a document receipt acknowledgement from the insurer in writing when submitting physically. If submitting online, screenshot each upload confirmation with the timestamp.
                </p>
                <p>
                    <strong>For overseas medical emergencies:</strong> Do not pay any hospital bill before calling the 24/7 helpline. Paying without insurer knowledge affects your cashless eligibility and complicates reimbursement.
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