<?php
/**
 * Life Insurance Understand — Sections 01.1 & 01.2 Template Part
 */

$assets_url = get_stylesheet_directory_uri() . '/assets/images/typesofinsurance/life-insurance/';

$life_insurance_page_data = [

    // -------------------------------------------------------------
    // SECTION 01.1: What is Life Insurance?
    // -------------------------------------------------------------
    'section_1' => [
        'subtag'      => '01.1 — START HERE',
        'title'       => 'What Is Life Insurance?',
        'description' => __(
            'Life insurance is a legally binding contract between you — the policyholder — and an insurance company — the insurer. In return for the premium, you pay (monthly, quarterly, half-yearly, or annually), the insurer agrees to pay a defined sum — the Sum Assured — to your nominees upon your death, or to you upon the policy\'s maturity, depending on the type of policy.<br><br>In India, life insurance is regulated by the Insurance Regulatory and Development Authority of India (IRDAI) under the Insurance Act, 1938, as amended. No one can legally sell life insurance in India without an IRDAI licence.<br><br>The central purpose of life insurance is human life value protection — replacing the financial contribution a person makes to their dependents in the event of their death or in some policies, their disability. Everything else — maturity benefits, bonuses, returns — is secondary.',
            'vima-vidya'
        ),
        
        'covered_events' => [
            'title'   => 'What It Is / What It Covers',
            'subtext' => 'Life insurance functions primarily as a guaranteed financial safety net, risk transfer mechanism, and human life value protector.',
            'cards'   => [
                [
                    'id'          => 'risk_transfer',
                    'label'       => 'Risk Transfer Mechanism',
                    'tag'         => 'CORE PURPOSE',
                    'icon'        => '🛡️',
                    'explanation' => 'You pay a known, defined premium so an unknown, potentially catastrophic financial event does not destroy your family\'s stability.',
                    'image'       => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'id'          => 'sum_assured',
                    'label'       => 'Guaranteed Sum Assured',
                    'tag'         => 'FINANCIAL SAFETY',
                    'icon'        => '💰',
                    'explanation' => 'A guaranteed lump sum paid to your nominees upon your death, or to you upon maturity depending on the policy structure.',
                    'image'       => 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'id'          => 'hlv_protection',
                    'label'       => 'Human Life Value (HLV) Protection',
                    'tag'         => 'ESSENTIAL',
                    'icon'        => '👨‍👩‍👧‍👦',
                    'explanation' => 'Replacing the precise financial contribution you make to your dependents in the event of untimely death or disability.',
                    'image'       => 'https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&w=600&q=80'
                ]
            ]
        ],

        'not_covered_events' => [
            'title'   => 'What Life Insurance Is NOT',
            'subtext' => 'Life insurance is not a savings account, a mutual fund, or an equity investment. It is not primarily a tax-saving instrument. It is not a wealth-building tool. Understanding this distinction is the single most important step before buying any life insurance product.',
            'cards'   => [
                [
                    'id'          => 'not_investment',
                    'label'       => 'Not a Wealth-Building Tool',
                    'tag'         => 'NOT COVERED',
                    'icon'        => '📉',
                    'explanation' => 'It is not designed to act as an aggressive equity investment or mutual fund substitute.',
                    'image'       => 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'id'          => 'not_tax_receipt',
                    'label'       => 'Not Just a Tax Receipt',
                    'tag'         => 'NOT COVERED',
                    'icon'        => '🧾',
                    'explanation' => 'It should never be purchased solely as a year-end tax-saving compliance checklist item.',
                    'image'       => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=600&q=80'
                ]
            ]
        ],

        'takeaway' => '<strong>Key Takeaway:</strong> Life insurance is a risk transfer mechanism — you pay a known, defined premium so that an unknown, potentially catastrophic financial event does not destroy your family\'s stability.'
    ],

    // -------------------------------------------------------------
    // SECTION 01.2: The Core Pillars / Structure of Life Insurance
    // -------------------------------------------------------------
    'section_2' => [
        'subtag'   => '01.2 — CORE PILLARS',
        'title'    => 'Core Dimensions of Life Insurance',
        'subtitle' => 'An interactive breakdown of Risk Transfer, Human Life Value Protection, and Regulatory Mandates under IRDAI.',

        'zones' => [
            'risk_transfer' => [
                'id'       => 'risk_transfer',
                'label'    => '1. Risk Transfer',
                'icon'     => '🛡️',
                'image'    => $assets_url . 'understand-risk.jpg',
                'badge'    => 'Pure Protection',
                'title'    => 'Risk Transfer & Financial Stability',
                'desc'     => 'Shifting catastrophic financial risk from your dependents to an institutional guarantor.',
                'includes' => [
                    'Guaranteed payout on unfortunate demise',
                    'Protection against debt transfer to family',
                    'Immediate liquidity during family crisis'
                ],
                'who_for'  => ['Primary Breadwinners'],
                'best_for' => 'Essential financial security for households relying on active income',
                'protects_against' => [
                    '🛡️ Untimely income cessation',
                    '💸 Destabilizing family debt liabilities'
                ],
                'pins'     => [
                    ['label' => 'Income Replacement', 'top' => '48%', 'left' => '50%']
                ]
            ],
            'hlv_protection' => [
                'id'       => 'hlv_protection',
                'label'    => '2. Human Life Value',
                'icon'     => '👨‍👩‍👧‍👦',
                'image'    => $assets_url . 'understand-hlv.jpg',
                'badge'    => 'Economic Value',
                'title'    => 'Human Life Value (HLV) Protection',
                'desc'     => 'Calculating and replacing your total future economic contribution to your dependents.',
                'includes' => [
                    'Future earnings calculation',
                    'Family living expense coverage',
                    'Children education and milestone funding'
                ],
                'who_for'  => ['Earning Family Members'],
                'best_for' => 'Determining the precise sum assured needed to sustain family lifestyle',
                'protects_against' => [
                    '📉 Future income deficits',
                    '🎓 Compromised milestone goals'
                ],
                'pins'     => [
                    ['label' => 'Family Sustenance', 'top' => '52%', 'left' => '48%']
                ]
            ],
            'regulatory_framework' => [
                'id'       => 'regulatory_framework',
                'label'    => '3. IRDAI Oversight',
                'icon'     => '📜',
                'image'    => $assets_url . 'understand-irdai.jpg',
                'badge'    => 'Statutory Framework',
                'title'    => 'Regulatory Oversight by IRDAI',
                'desc'     => 'Strict legal frameworks governing policy issuance, claims settlement, and consumer rights.',
                'includes' => [
                    'Insurance Act, 1938 compliance',
                    'Licensed intermediary enforcement',
                    'Consumer grievance redressal'
                ],
                'who_for'  => ['All Policyholders'],
                'best_for' => 'Ensuring full transparency and legally binding insurer obligations',
                'protects_against' => [
                    '⚠️ Mis-selling & fraudulent claims',
                    '⚖️ Contractual disputes'
                ],
                'pins'     => [
                    ['label' => 'Legal Compliance', 'top' => '50%', 'left' => '52%']
                ]
            ]
        ],

        'takeaway' => '<strong>Key Takeaway:</strong> Protection matters more than returns. Understanding timing, structure, and product choice changes your financial outcomes permanently.'
    ]
];
?>

<div class="pi-wrapper" id="life-insurance-basics">

    <!-- ========================================================= -->
    <!-- SECTION 01.1: WHAT IS LIFE INSURANCE?                    -->
    <!-- ========================================================= -->
    <section class="pi-section-s1">
        <header class="pi-header">
            <span class="pi-subtag"><?php echo esc_html($life_insurance_page_data['section_1']['subtag']); ?></span>
            <h1 class="pi-title"><?php echo esc_html($life_insurance_page_data['section_1']['title']); ?></h1>
            <p class="pi-desc"><?php echo wp_kses_post($life_insurance_page_data['section_1']['description']); ?></p>
        </header>

        <div class="pi-contrast-grid">
            <!-- Left: Covered Column -->
            <section class="pi-contrast-col pi-contrast-col--covered" id="life-why-it-matters">
                <div class="pi-col-header">
                    <div class="pi-col-icon-circle pi-col-icon-circle--covered">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <div class="pi-col-title-wrap">
                        <h2 class="pi-col-title"><?php echo esc_html($life_insurance_page_data['section_1']['covered_events']['title']); ?></h2>
                        <span class="pi-col-underline pi-col-underline--covered"></span>
                    </div>
                </div>

                <p class="pi-col-subtext">
                    <?php echo wp_kses_post($life_insurance_page_data['section_1']['covered_events']['subtext']); ?>
                </p>

                <div class="pi-peril-card-grid">
                    <?php foreach ($life_insurance_page_data['section_1']['covered_events']['cards'] as$card): ?>
                    <article class="pi-visual-card pi-visual-card--covered">
                        <div class="pi-visual-card__media">
                            <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['label']); ?>" loading="lazy">
                            <span class="pi-visual-card__pill"><?php echo esc_html($card['tag']); ?></span>
                        </div>
                        <div class="pi-visual-card__body">
                            <span class="pi-visual-card__icon-badge"><?php echo esc_html($card['icon']); ?></span>
                            <h3 class="pi-visual-card__title"><?php echo esc_html($card['label']); ?></h3>
                            <p class="pi-visual-card__desc"><?php echo esc_html($card['explanation']); ?></p>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Right: Not Covered Column -->
            <section class="pi-contrast-col pi-contrast-col--denied" id="life-not-investment">
                <div class="pi-col-header">
                    <div class="pi-col-icon-circle pi-col-icon-circle--denied">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                    <div class="pi-col-title-wrap">
                        <h2 class="pi-col-title"><?php echo esc_html($life_insurance_page_data['section_1']['not_covered_events']['title']); ?></h2>
                        <span class="pi-col-underline pi-col-underline--denied"></span>
                    </div>
                </div>

                <p class="pi-col-subtext">
                    <?php echo esc_html($life_insurance_page_data['section_1']['not_covered_events']['subtext']); ?>
                </p>

                <div class="pi-peril-card-grid">
                    <?php foreach ($life_insurance_page_data['section_1']['not_covered_events']['cards'] as$card): ?>
                    <article class="pi-visual-card pi-visual-card--denied">
                        <div class="pi-visual-card__media">
                            <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['label']); ?>" loading="lazy">
                            <span class="pi-visual-card__pill"><?php echo esc_html($card['tag']); ?></span>
                        </div>
                        <div class="pi-visual-card__body">
                            <span class="pi-visual-card__icon-badge"><?php echo esc_html($card['icon']); ?></span>
                            <h3 class="pi-visual-card__title"><?php echo esc_html($card['label']); ?></h3>
                            <p class="pi-visual-card__desc"><?php echo esc_html($card['explanation']); ?></p>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>

        <aside class="pi-global-takeaway pi-global-takeaway--s1" id="life-protection-mindset">
            <span class="pi-global-takeaway__icon" aria-hidden="true">📌</span>
            <p class="pi-global-takeaway__text"><?php echo wp_kses_post($life_insurance_page_data['section_1']['takeaway']); ?></p>
        </aside>
    </section>

    <!-- ========================================================= -->
    <!-- SECTION 01.2: CORE DIMENSIONS (SPLIT VIEW)                -->
    <!-- ========================================================= -->
    <section class="pi-section-s2" id="life-product-types">
        <header class="pi-header pi-header--secondary">
            <span class="pi-subtag"><?php echo esc_html($life_insurance_page_data['section_2']['subtag']); ?></span>
            <h2 class="pi-title-h2"><?php echo esc_html($life_insurance_page_data['section_2']['title']); ?></h2>
            <p class="pi-desc"><?php echo esc_html($life_insurance_page_data['section_2']['subtitle']); ?></p>
        </header>

        <div class="pi-stage-wrapper" id="life-starting-early">
            <!-- TIMELINE TABS -->
            <nav class="pi-layer-timeline" role="tablist" aria-label="Core Life Insurance Pillars">
                <?php foreach ($life_insurance_page_data['section_2']['zones'] as $key =>$zone): ?>
                <button type="button" role="tab"
                    class="pi-layer-step <?php echo $key === 'risk_transfer' ? 'is-active' : ''; ?>"
                    data-layer="<?php echo esc_attr($key); ?>"
                    aria-selected="<?php echo $key === 'risk_transfer' ? 'true' : 'false'; ?>">
                    <span class="pi-layer-step__icon"><?php echo esc_html($zone['icon']); ?></span>
                    <span class="pi-layer-step__label"><?php echo esc_html($zone['label']); ?></span>
                </button>
                <?php endforeach; ?>
            </nav>

            <!-- SPLIT CONTAINER -->
            <div class="pi-stage-split">
                <!-- VIEWPORT -->
                <div class="pi-viewport pi-viewport--compact" id="lifeViewport">
                    <img id="lifeStageImage" class="pi-stage-img"
                        src="<?php echo esc_url($life_insurance_page_data['section_2']['zones']['risk_transfer']['image']); ?>"
                        alt="Life Insurance Stage View">

                    <div class="pi-viewport__overlay">
                        <span class="pi-layer-badge" id="lifeLayerBadge">
                            <?php echo esc_html($life_insurance_page_data['section_2']['zones']['risk_transfer']['badge']); ?>
                        </span>
                    </div>

                    <div id="lifePinContainer" class="pi-pin-container">
                        <?php foreach ($life_insurance_page_data['section_2']['zones']['risk_transfer']['pins'] as$pin): ?>
                        <button type="button" class="pi-map-pin" style="top: <?php echo esc_attr($pin['top']); ?>; left: <?php echo esc_attr($pin['left']); ?>;">
                            <?php echo esc_html($pin['label']); ?>
                        </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- SIDE DETAILS PANEL -->
                <div class="pi-side-panel pi-side-panel--compact" id="lifeSidePanel">
                    <div class="pi-panel-header">
                        <span class="pi-panel-icon" id="lifePanelIcon">🛡️</span>
                        <div>
                            <span class="pi-panel-sub" id="lifePanelSub">Coverage Details</span>
                            <h3 class="pi-panel-title" id="lifePanelTitle">
                                <?php echo esc_html($life_insurance_page_data['section_2']['zones']['risk_transfer']['title']); ?>
                            </h3>
                        </div>
                    </div>

                    <div class="pi-panel-body">
                        <p class="pi-panel-desc" id="lifePanelDesc">
                            <?php echo esc_html($life_insurance_page_data['section_2']['zones']['risk_transfer']['desc']); ?>
                        </p>

                        <div class="pi-panel-group pi-panel-group--merged">
                            <span class="pi-panel-group-title">Who & Best For</span>
                            <div class="pi-merged-audience-content">
                                <p class="pi-panel-best-for" id="lifePanelBestFor">
                                    <?php echo esc_html($life_insurance_page_data['section_2']['zones']['risk_transfer']['best_for']); ?>
                                </p>
                            </div>
                        </div>

                        <div class="pi-panel-grid-row">
                            <div class="pi-panel-group pi-panel-group--no-border">
                                <span class="pi-panel-group-title">Includes</span>
                                <ul class="pi-panel-list" id="lifePanelIncludes">
                                    <?php foreach ($life_insurance_page_data['section_2']['zones']['risk_transfer']['includes'] as$inc): ?>
                                    <li><?php echo esc_html($inc); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="pi-panel-group pi-panel-group--no-border">
                                <span class="pi-panel-group-title">When It Protects</span>
                                <ul class="pi-panel-list" id="lifePanelProtects">
                                    <?php foreach ($life_insurance_page_data['section_2']['zones']['risk_transfer']['protects_against'] as$item): ?>
                                    <li><?php echo esc_html($item); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <aside class="pi-global-takeaway pi-global-takeaway--s2">
            <span class="pi-global-takeaway__icon" aria-hidden="true">📌</span>
            <p class="pi-global-takeaway__text"><?php echo wp_kses_post($life_insurance_page_data['section_2']['takeaway']); ?></p>
        </aside>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const lifeZonesData = <?php echo json_encode($life_insurance_page_data['section_2']['zones'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
    let activeLifeKey = 'risk_transfer';

    const imgEl = document.getElementById('lifeStageImage');
    const badgeEl = document.getElementById('lifeLayerBadge');
    const pinContainer = document.getElementById('lifePinContainer');
    const timelineButtons = document.querySelectorAll('#life-insurance-basics .pi-layer-step');

    const panelIcon = document.getElementById('lifePanelIcon');
    const panelTitle = document.getElementById('lifePanelTitle');
    const panelDesc = document.getElementById('lifePanelDesc');
    const panelBestFor = document.getElementById('lifePanelBestFor');
    const panelIncludes = document.getElementById('lifePanelIncludes');
    const panelProtects = document.getElementById('lifePanelProtects');

    function renderPins(pins) {
        if (!pinContainer) return;
        pinContainer.innerHTML = '';
        if (!Array.isArray(pins)) return;
        pins.forEach(function(pin, index) {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'pi-map-pin';
            btn.style.top = pin.top || '50%';
            btn.style.left = pin.left || '50%';
            btn.textContent = pin.label || '';
            btn.style.animationDelay = (index * 0.12) + 's';
            pinContainer.appendChild(btn);
        });
    }

    function updateDetailsPanel(data) {
        if (!data) return;
        if (panelIcon) panelIcon.textContent = data.icon || '';
        if (panelTitle) panelTitle.textContent = data.title || '';
        if (panelDesc) panelDesc.textContent = data.desc || '';
        if (panelBestFor) panelBestFor.textContent = data.best_for || '';

        if (panelIncludes) {
            panelIncludes.innerHTML = '';
            if (Array.isArray(data.includes)) {
                data.includes.forEach(function(item) {
                    const li = document.createElement('li');
                    li.textContent = item;
                    panelIncludes.appendChild(li);
                });
            }
        }

        if (panelProtects) {
            panelProtects.innerHTML = '';
            if (Array.isArray(data.protects_against)) {
                data.protects_against.forEach(function(item) {
                    const li = document.createElement('li');
                    li.textContent = item;
                    panelProtects.appendChild(li);
                });
            }
        }
    }

    function switchLayer(key) {
        if (!lifeZonesData || !lifeZonesData[key] || key === activeLifeKey) return;
        activeLifeKey = key;
        const data = lifeZonesData[key];

        timelineButtons.forEach(function(btn) {
            const isActive = btn.getAttribute('data-layer') === key;
            btn.classList.toggle('is-active', isActive);
            btn.setAttribute('aria-selected', isActive ? 'true' : 'false');
        });

        if (imgEl) {
            imgEl.classList.add('is-switching');
            setTimeout(function() {
                imgEl.src = data.image;
                if (badgeEl) badgeEl.textContent = data.badge;
                renderPins(data.pins);
                imgEl.onload = function() {
                    imgEl.classList.remove('is-switching');
                };
            }, 150);
        }

        updateDetailsPanel(data);
    }

    if (timelineButtons.length) {
        timelineButtons.forEach(function(btn) {
            btn.addEventListener('click', function() {
                switchLayer(this.getAttribute('data-layer'));
            });
        });
    }

    if (lifeZonesData.risk_transfer) {
        renderPins(lifeZonesData.risk_transfer.pins);
    }
});
</script>