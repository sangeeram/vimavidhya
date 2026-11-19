<?php

$assets_url = get_stylesheet_directory_uri() . '/assets/images/typesofinsurance/motor-insurance/';

$motor_insurance_page_data = [

    // -------------------------------------------------------------
    // SECTION 01.1: What is Motor Insurance?
    // -------------------------------------------------------------
    'section_1' => [
        'subtag'      => '01.1 — START HERE',
        'title'       => 'What is Motor Insurance?',
        'description' => __(
            'Motor insurance — also called vehicle insurance — is a contract between you and an insurance company in which, in return for a premium paid annually or for a defined term, the insurer agrees to compensate defined losses arising from your vehicle. These losses may be to your own vehicle, to third parties injured or whose property is damaged by your vehicle, or to you personally as the driver-owner.<br><br>In India, motor insurance is governed by the Motor Vehicles Act, 1988, and regulated by the Insurance Regulatory and Development Authority of India (IRDAI). Section 146 of the Motor Vehicles Act makes Third-Party Liability Insurance mandatory for every vehicle operating on a public road. Driving without it is a criminal offence.',
            'vima-vidya'
        ),
        
        'covered_events' => [
            'title'   => 'What It Covers',
            'subtext' => 'The three core pillars of motor insurance protect against statutory liabilities, physical vehicle damage, and personal safety.',
            'cards'   => [
                [
                    'id'          => 'third_party',
                    'label'       => 'Third-Party Liability',
                    'tag'         => 'MANDATORY',
                    'icon'        => '⚖️',
                    'explanation' => 'Compensation to other people — their injury, death, or property damage caused by your vehicle.',
                    'image'       => 'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'id'          => 'own_damage',
                    'label'       => 'Own Damage (OD)',
                    'tag'         => 'CRITICAL',
                    'icon'        => '🚗',
                    'explanation' => 'Your vehicle — repair or replacement after accident, fire, flood, theft, natural disaster.',
                    'image'       => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'id'          => 'personal_accident',
                    'label'       => 'Personal Accident (PA)',
                    'tag'         => 'COMPULSORY',
                    'icon'        => '🛡️',
                    'explanation' => 'Lump sum if you die or are permanently disabled due to an accident while driving your insured vehicle. Minimum ₹15 lakh mandated by IRDAI.',
                    'image'       => 'https://images.unsplash.com/photo-1506015391300-4802dc74de2e?auto=format&fit=crop&w=600&q=80'
                ]
            ]
        ],

        'not_covered_events' => [
            'title'   => 'What It Does Not Cover',
            'subtext' => 'Motor insurance is not life insurance. It is not personal accident insurance. It does not pay your family a fixed lump sum if you die from illness. It does not replace your income if you are disabled at home. It is a vehicle-linked product — it protects your vehicle, compensates third parties harmed by your vehicle, and includes specific, defined cover for the owner-driver while driving the insured vehicle. Understanding this distinction is important.',
            'cards'   => [
                [
                    'id'          => 'life_illness',
                    'label'       => 'Death from Illness',
                    'tag'         => 'NOT COVERED',
                    'icon'        => '🏥',
                    'explanation' => 'Does not pay a lump sum if you pass away due to natural causes or illness.',
                    'image'       => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'id'          => 'home_disability',
                    'label'       => 'Home Disability Income',
                    'tag'         => 'NOT COVERED',
                    'icon'        => '🏠',
                    'explanation' => 'Does not replace your regular income if you are disabled away from the insured vehicle.',
                    'image'       => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=600&q=80'
                ]
            ]
        ],

        'takeaway' => '<strong>Key Takeaway:</strong> Motor insurance is not one thing. It is a combination of three protections. Most people buy only the mandatory minimum. The minimum leaves them exposed exactly where protection matters most.'
    ],

    // -------------------------------------------------------------
    // SECTION 01.2: The Three Pillars of Motor Insurance
    // -------------------------------------------------------------
    'section_2' => [
        'subtag'   => '01.2 — THE THREE PILLARS',
        'title'    => 'The Three Pillars of Motor Insurance',
        'subtitle' => 'An interactive breakdown of Third-Party Liability, Own Damage, and Personal Accident coverage.',

        'zones' => [
            'third_party' => [
                'id'       => 'third_party',
                'label'    => '1. Third-Party (TP)',
                'icon'     => '⚖️',
                'image'    => $assets_url . 'understand-thirdparty.png',
                'badge'    => 'Mandatory Liability',
                'title'    => 'Third-Party Liability (TP)',
                'desc'     => 'Compensation to other people — their injury, death, or property damage caused by your vehicle.',
                'includes' => [
                    'Bodily injury to third parties',
                    'Third-party death compensation',
                    'Third-party property damage'
                ],
                'who_for'  => ['All Vehicle Owners'],
                'best_for' => 'Mandatory for every vehicle operating on a public road by law',
                'protects_against' => [
                    '⚖️ Statutory legal liabilities',
                    '💸 Third-party injury & property claims'
                ],
                'pins'     => [
                    ['label' => 'Legal Liability', 'top' => '45%', 'left' => '50%']
                ]
            ],
            'own_damage' => [
                'id'       => 'own_damage',
                'label'    => '2. Own Damage (OD)',
                'icon'     => '🚗',
                'image'    => $assets_url . 'own-damage-large.jpg',
                'badge'    => 'Vehicle Protection',
                'title'    => 'Own Damage (OD)',
                'desc'     => 'Your vehicle — repair or replacement after accident, fire, flood, theft, natural disaster.',
                'includes' => [
                    'Accidental crashes & collisions',
                    'Fire & explosion damage',
                    'Natural disasters (floods/cyclones)',
                    'Theft & total loss'
                ],
                'who_for'  => ['Vehicle Owners'],
                'best_for' => 'Financially critical protection for your own asset',
                'protects_against' => [
                    '🔥 Fire, flood, earthquake, cyclone',
                    '🔒 Theft & accidental impact'
                ],
                'pins'     => [
                    ['label' => 'Vehicle Body & Engine', 'top' => '55%', 'left' => '48%']
                ]
            ],
            'personal_accident' => [
                'id'       => 'personal_accident',
                'label'    => '3. Personal Accident (PA)',
                'icon'     => '🛡️',
                'image'    => $assets_url . 'personal-accident-large.jpg',
                'badge'    => 'Owner-Driver Safety',
                'title'    => 'Personal Accident (PA) for Owner-Driver',
                'desc'     => 'You — lump sum if you die or are permanently disabled due to an accident while driving your insured vehicle. Minimum ₹15 lakh mandated by IRDAI.',
                'includes' => [
                    'Accidental death cover',
                    'Permanent total disability',
                    'Minimum ₹15 lakh IRDAI mandated sum'
                ],
                'who_for'  => ['Registered Owner-Drivers'],
                'best_for' => 'Compulsory personal safety coverage for the driver-owner',
                'protects_against' => [
                    '⚠️ Fatal road accidents while driving',
                    '♿ Permanent disablement mishaps'
                ],
                'pins'     => [
                    ['label' => 'Driver Protection', 'top' => '50%', 'left' => '52%']
                ]
            ]
        ],

        'takeaway' => '<strong>Key Takeaway:</strong> Motor insurance is not one thing. It is a combination of three protections. Most people buy only the mandatory minimum. The minimum leaves them exposed exactly where protection matters most.'
    ]
];
?>


<div class="pi-wrapper" id="motor-insurance">

    <!-- ========================================================= -->
    <!-- SECTION 01.1: WHAT IS MOTOR INSURANCE?                    -->
    <!-- ========================================================= -->
    <section class="pi-section-s1">
        <header class="pi-header">
            <h1 class="pi-title"><?php echo esc_html($motor_insurance_page_data['section_1']['title']); ?></h1>
            <p class="pi-desc"><?php echo wp_kses_post($motor_insurance_page_data['section_1']['description']); ?></p>
        </header>

        <div class="pi-contrast-grid">
            <!-- Left: Covered Column -->
            <section class="pi-contrast-col pi-contrast-col--covered">
                <div class="pi-col-header">
                    <div class="pi-col-icon-circle pi-col-icon-circle--covered">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <div class="pi-col-title-wrap">
                        <h2 class="pi-col-title"><?php echo esc_html($motor_insurance_page_data['section_1']['covered_events']['title']); ?></h2>
                        <span class="pi-col-underline pi-col-underline--covered"></span>
                    </div>
                </div>

                <p class="pi-col-subtext">
                    <?php echo wp_kses_post($motor_insurance_page_data['section_1']['covered_events']['subtext']); ?>
                </p>

                <div class="pi-peril-card-grid">
                    <?php foreach ($motor_insurance_page_data['section_1']['covered_events']['cards'] as$card): ?>
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
            <section class="pi-contrast-col pi-contrast-col--denied">
                <div class="pi-col-header">
                    <div class="pi-col-icon-circle pi-col-icon-circle--denied">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                    <div class="pi-col-title-wrap">
                        <h2 class="pi-col-title"><?php echo esc_html($motor_insurance_page_data['section_1']['not_covered_events']['title']); ?></h2>
                        <span class="pi-col-underline pi-col-underline--denied"></span>
                    </div>
                </div>

                <p class="pi-col-subtext">
                    <?php echo esc_html($motor_insurance_page_data['section_1']['not_covered_events']['subtext']); ?>
                </p>

                <div class="pi-peril-card-grid">
                    <?php foreach ($motor_insurance_page_data['section_1']['not_covered_events']['cards'] as$card): ?>
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

        <aside class="pi-global-takeaway pi-global-takeaway--s1">
            <span class="pi-global-takeaway__icon" aria-hidden="true">📌</span>
            <p class="pi-global-takeaway__text"><?php echo wp_kses_post($motor_insurance_page_data['section_1']['takeaway']); ?></p>
        </aside>
    </section>

    <!-- ========================================================= -->
    <!-- SECTION 01.2: THE THREE PILLARS (SPLIT VIEW)              -->
    <!-- ========================================================= -->
    <section class="pi-section-s2">
        <header class="pi-header pi-header--secondary">
            <h2 class="pi-title-h2"><?php echo esc_html($motor_insurance_page_data['section_2']['title']); ?></h2>
            <p class="pi-desc"><?php echo esc_html($motor_insurance_page_data['section_2']['subtitle']); ?></p>
        </header>

        <div class="pi-stage-wrapper">
            <!-- TIMELINE TABS -->
            <nav class="pi-layer-timeline" role="tablist" aria-label="Coverage Pillars">
                <?php foreach ($motor_insurance_page_data['section_2']['zones'] as $key =>$zone): ?>
                <button type="button" role="tab"
                    class="pi-layer-step <?php echo $key === 'third_party' ? 'is-active' : ''; ?>"
                    data-layer="<?php echo esc_attr($key); ?>"
                    aria-selected="<?php echo $key === 'third_party' ? 'true' : 'false'; ?>">
                    <span class="pi-layer-step__icon"><?php echo esc_html($zone['icon']); ?></span>
                    <span class="pi-layer-step__label"><?php echo esc_html($zone['label']); ?></span>
                </button>
                <?php endforeach; ?>
            </nav>

            <!-- SPLIT CONTAINER -->
            <div class="pi-stage-split">
                <!-- VIEWPORT -->
                <div class="pi-viewport pi-viewport--compact" id="motorViewport">
                    <img id="motorStageImage" class="pi-stage-img"
                        src="<?php echo esc_url($motor_insurance_page_data['section_2']['zones']['third_party']['image']); ?>"
                        alt="Motor Insurance Stage View">

                    <div class="pi-viewport__overlay">
                        <span class="pi-layer-badge" id="motorLayerBadge">
                            <?php echo esc_html($motor_insurance_page_data['section_2']['zones']['third_party']['badge']); ?>
                        </span>
                    </div>

                    <div id="motorPinContainer" class="pi-pin-container">
                        <?php foreach ($motor_insurance_page_data['section_2']['zones']['third_party']['pins'] as$pin): ?>
                        <button type="button" class="pi-map-pin" style="top: <?php echo esc_attr($pin['top']); ?>; left: <?php echo esc_attr($pin['left']); ?>;">
                            <?php echo esc_html($pin['label']); ?>
                        </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- SIDE DETAILS PANEL -->
                <div class="pi-side-panel pi-side-panel--compact" id="motorSidePanel">
                    <div class="pi-panel-header">
                        <span class="pi-panel-icon" id="motorPanelIcon">⚖️</span>
                        <div>
                            <span class="pi-panel-sub" id="motorPanelSub">Coverage Details</span>
                            <h3 class="pi-panel-title" id="motorPanelTitle">
                                <?php echo esc_html($motor_insurance_page_data['section_2']['zones']['third_party']['title']); ?>
                            </h3>
                        </div>
                    </div>

                    <div class="pi-panel-body">
                        <p class="pi-panel-desc" id="motorPanelDesc">
                            <?php echo esc_html($motor_insurance_page_data['section_2']['zones']['third_party']['desc']); ?>
                        </p>

                        <div class="pi-panel-group pi-panel-group--merged">
                            <span class="pi-panel-group-title">Who & Best For</span>
                            <div class="pi-merged-audience-content">
                                <p class="pi-panel-best-for" id="motorPanelBestFor">
                                    <?php echo esc_html($motor_insurance_page_data['section_2']['zones']['third_party']['best_for']); ?>
                                </p>
                            </div>
                        </div>

                        <div class="pi-panel-grid-row">
                            <div class="pi-panel-group pi-panel-group--no-border">
                                <span class="pi-panel-group-title">Includes</span>
                                <ul class="pi-panel-list" id="motorPanelIncludes">
                                    <?php foreach ($motor_insurance_page_data['section_2']['zones']['third_party']['includes'] as$inc): ?>
                                    <li><?php echo esc_html($inc); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="pi-panel-group pi-panel-group--no-border">
                                <span class="pi-panel-group-title">When It Protects</span>
                                <ul class="pi-panel-list" id="motorPanelProtects">
                                    <?php foreach ($motor_insurance_page_data['section_2']['zones']['third_party']['protects_against'] as$item): ?>
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
            <p class="pi-global-takeaway__text"><?php echo wp_kses_post($motor_insurance_page_data['section_2']['takeaway']); ?></p>
        </aside>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const motorZonesData = <?php echo json_encode($motor_insurance_page_data['section_2']['zones'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
    let activeMotorKey = 'third_party';

    const imgEl = document.getElementById('motorStageImage');
    const badgeEl = document.getElementById('motorLayerBadge');
    const pinContainer = document.getElementById('motorPinContainer');
    const timelineButtons = document.querySelectorAll('#motor-insurance .pi-layer-step');

    const panelIcon = document.getElementById('motorPanelIcon');
    const panelTitle = document.getElementById('motorPanelTitle');
    const panelDesc = document.getElementById('motorPanelDesc');
    const panelBestFor = document.getElementById('motorPanelBestFor');
    const panelIncludes = document.getElementById('motorPanelIncludes');
    const panelProtects = document.getElementById('motorPanelProtects');

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
        if (!motorZonesData || !motorZonesData[key] || key === activeMotorKey) return;
        activeMotorKey = key;
        const data = motorZonesData[key];

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

    if (motorZonesData.third_party) {
        renderPins(motorZonesData.third_party.pins);
    }
});
</script>