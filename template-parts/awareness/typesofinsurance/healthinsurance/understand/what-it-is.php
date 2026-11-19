<?php
/**
 * Template Part: Health Insurance Showcase
 */

$theme_uri = get_template_directory_uri();

$health_insurance_page_data = [

    // -------------------------------------------------------------
    // SECTION 01.1: What is Health Insurance? (Split Layout)
    // -------------------------------------------------------------

    'section_1' => [

        'subtag'        => '01.1 — START HERE',

        'title'         => 'What Is Health Insurance?',

        'description'   => __(

            'Simply put, health insurance is an agreement where you pay a regular premium, and your insurer takes care of your medical bills — hospitalisation, surgery, diagnostics, and more — up to the cover amount you\'ve chosen.<br><br>In India, most people pay for healthcare entirely from their own pockets. Government schemes like Ayushman Bharat cover only certain income groups, and employer cover discontinues the moment you switch jobs. With medical costs rising at nearly 14–15% a year — far faster than regular inflation — a procedure that costs ₹2 lakh today could cost ₹8 lakh or more in a decade.<br><br>A health insurance policy that you own and renew every year is the only cover that truly stays with you — through job changes, life stages, and the unexpected. It\'s not just about paying hospital bills; it\'s about making sure a medical crisis doesn\'t become a financial one too.',

            'vima-vidya'

        ),

        'callout_title' => 'What Health Insurance is NOT',

        'callout_text'  => 'Health insurance is not a savings or investment product. It does not build a corpus for you. It is a risk-transfer contract: you pay a premium and the insurer bears the cost of covered medical events. Without it, every hospitalisation is paid entirely from your own savings — there is no reimbursement, no cashless facility, and no buffer between a medical emergency and financial devastation.',

        'image'         => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=800&q=80',

        'image_alt'     => 'Health Insurance Medical Care',

        'takeaway'      => '<strong>Key Takeaway:</strong> Health insurance is a financial protection product that activates specifically when a medical crisis strikes. Owning your individual policy ensures uninterrupted coverage across job changes and rising healthcare costs.'

    ],

    // -------------------------------------------------------------
    // SECTION 01.2: What Health Insurance Covers (Interactive Layers)
    // -------------------------------------------------------------

    'section_2' => [

        'subtag'   => '01.2 — WHAT HEALTH INSURANCE COVERS',

        'title'    => 'What Health Insurance Covers',

        'subtitle' => 'An interactive breakdown of hospitalisation, day care, pre/post care, and specialized riders.',

        'zones' => [

            'hospitalisation' => [

                'id'       => 'hospitalisation',

                'label'    => '1. Hospitalisation',

                'icon'     => '🏥',

                'image'    => $theme_uri . '/assets/images/typesofinsurance/healthinsurance/understand/what-can-it-protect-1.png',

                'badge'    => 'Core Inpatient Care',

                'title'    => 'Hospitalisation Cover',

                'desc'     => 'Admitted to hospital for illness or injury, covering room rent, nursing, surgeon fees, medicines, and diagnostics up to Sum Insured (SI).',

                'includes' => [

                    'Room rent',

                    'Nursing charges',

                    'Surgeon fees',

                    'Medicines',

                    'Diagnostics'

                ],

                'who_for'  => ['Individuals', 'Families'],

                'best_for' => 'Everyone seeking protection against major hospital bills',

                'protects_against' => [

                    '🏨 Inpatient hospital admission expenses',

                    '🩺 Comprehensive medical treatment costs'

                ],

                'pins'     => [

                    ['label' => 'Inpatient Room & Nursing', 'top' => '40%', 'left' => '50%'],

                    ['label' => 'Surgeon & Medical Care', 'top' => '68%', 'left' => '40%']

                ]

            ],

            'day_care' => [

                'id'       => 'day_care',

                'label'    => '2. Day Care',

                'icon'     => '⚡',

                'image'    => $theme_uri . '/assets/images/typesofinsurance/healthinsurance/understand/what-can-it-protect-2.png',

                'badge'    => 'Short Procedures',

                'title'    => 'Day Care Procedures',

                'desc'     => 'Covers specialized medical treatments and surgical procedures that require less than 24 hours of hospitalisation due to technological advancements.',

                'includes' => [

                    'Cataract surgery',

                    'Dialysis',

                    'Chemotherapy sessions',

                    'Lithotripsy'

                ],

                'who_for'  => ['All Policyholders'],

                'best_for' => 'Patients undergoing advanced medical treatments without overnight stays',

                'protects_against' => [

                    '⚡ Short-stay surgical treatments',

                    '🔬 Advanced clinical procedures'

                ],

                'pins'     => [

                    ['label' => 'Outpatient Surgical Unit', 'top' => '46%', 'left' => '48%']

                ]

            ],

            'pre_post' => [

                'id'       => 'pre_post',

                'label'    => '3. Pre & Post Care',

                'icon'     => '🩺',

                'image'    => $theme_uri . '/assets/images/typesofinsurance/healthinsurance/understand/what-can-it-protect-3.png',

                'badge'    => 'Associated Expenses',

                'title'    => 'Pre & Post Hospitalisation Cover',

                'desc'     => 'Shields you against medical expenses incurred prior to admission (tests, doctor consultations) and during recovery post discharge.',

                'includes' => [

                    'Pre-admission diagnostics (30–60 days)',

                    'Doctor consultation fees',

                    'Post-discharge medicines',

                    'Follow-up care (60–180 days)'

                ],

                'who_for'  => ['All Policyholders'],

                'best_for' => 'Complete medical cycle coverage from diagnosis to full recovery',

                'protects_against' => [

                    '📋 Pre-hospitalisation diagnostic bills',

                    '💊 Post-discharge recovery medications'

                ],

                'pins'     => [

                    ['label' => 'Diagnostic Consultations', 'top' => '42%', 'left' => '60%'],

                    ['label' => 'Recovery & Follow-up', 'top' => '70%', 'left' => '30%']

                ]

            ],

            'critical_illness' => [

                'id'       => 'critical_illness',

                'label'    => '4. Critical Illness',

                'icon'     => '❤️',

                'image'    => $theme_uri . '/assets/images/typesofinsurance/healthinsurance/understand/what-can-it-protect-4.png',

                'badge'    => 'Lump Sum Rider',

                'title'    => 'Critical Illness Rider',

                'desc'     => 'Provides a pre-defined lump sum payout upon the first-time diagnosis of major critical illnesses, regardless of actual medical expenditure.',

                'includes' => [

                    'Cancer cover',

                    'Cardiac arrest / Heart attack',

                    'Stroke & paralysis',

                    'Kidney failure'

                ],

                'who_for'  => ['Primary Earners', 'Families'],

                'best_for' => 'Income replacement and specialized treatment funding during severe illnesses',

                'protects_against' => [

                    '⚠️ Major life-threatening diagnoses',

                    '💰 Financial loss during long-term treatment'

                ],

                'pins'     => [

                    ['label' => 'Critical Diagnosis Support', 'top' => '36%', 'left' => '50%']

                ]

            ],

            'ayush' => [

                'id'       => 'ayush',

                'label'    => '5. AYUSH Treatment',

                'icon'     => '🌿',

                'image'    => $theme_uri . '/assets/images/typesofinsurance/healthinsurance/understand/what-can-it-protect-5.png',

                'badge'    => 'Alternative Medicine',

                'title'    => 'AYUSH Treatment Cover',

                'desc'     => 'Extends health insurance protection to traditional Indian systems of medicine when hospitalised in recognized government or institutional centers.',

                'includes' => [

                    'Ayurveda treatments',

                    'Yoga & Naturopathy',

                    'Unani & Siddha care',

                    'Homeopathy hospitalisation'

                ],

                'who_for'  => ['Traditional Care Seekers'],

                'best_for' => 'Individuals preferring holistic and traditional medical therapies',

                'protects_against' => [

                    '🌿 Alternative hospitalisation expenses',

                    '🏥 Recognized institutional AYUSH care'

                ],

                'pins'     => [

                    ['label' => 'Holistic Care Center', 'top' => '50%', 'left' => '50%']

                ]

            ]

        ],

        'takeaway' => '<strong>Key Takeaway:</strong> Health insurance provides comprehensive protection spanning inpatient hospitalisation, day care procedures, extended pre and post-care, and specialized riders like critical illness.'

    ]

];

?>

<div class="vv-property-insurance-wrapper" id="what-it-is">

    <!-- ========================================================= -->
    <!-- SECTION 01.1: WHAT IS HEALTH INSURANCE?                   -->
    <!-- ========================================================= -->

    <section class="vv-property-insurance-section-s1">

        <div class="vv-health-intro-split-grid">
            
            <!-- LEFT COLUMN: Title, Description, & Callout Box -->
            <div class="vv-health-intro-left">
                
                <header class="vv-property-insurance-header">
                    <!-- <span class="vv-property-insurance-subtag"><?php echo esc_html($health_insurance_page_data['section_1']['subtag']); ?></span> -->
                    <h1 class="vv-property-insurance-title"><?php echo esc_html($health_insurance_page_data['section_1']['title']); ?></h1>
                    <div class="vv-property-insurance-desc">
                        <?php echo wp_kses_post($health_insurance_page_data['section_1']['description']); ?>
                    </div>
                </header>

                <!-- Highlight / Warning Box -->
                <div class="vv-health-callout-box">
                    <div class="vv-health-callout-box__header">
                        <span class="vv-health-callout-box__icon" aria-hidden="true">💡</span>
                        <h4 class="vv-health-callout-box__title"><?php echo esc_html($health_insurance_page_data['section_1']['callout_title']); ?></h4>
                    </div>
                    <p class="vv-health-callout-box__text">
                        <?php echo esc_html($health_insurance_page_data['section_1']['callout_text']); ?>
                    </p>
                </div>

            </div>

            <!-- RIGHT COLUMN: Featured Image Card -->
            <div class="vv-health-intro-right">
                <div class="vv-health-featured-image-card">
                    <img src="<?php echo esc_url($health_insurance_page_data['section_1']['image']); ?>" 
                         alt="<?php echo esc_attr($health_insurance_page_data['section_1']['image_alt']); ?>">
                </div>
            </div>

        </div>

        <!-- <aside class="vv-property-insurance-global-takeaway vv-property-insurance-global-takeaway--s1">
            <span class="vv-property-insurance-global-takeaway__icon" aria-hidden="true">📌</span>
            <p class="vv-property-insurance-global-takeaway__text">
                <?php echo wp_kses_post($health_insurance_page_data['section_1']['takeaway']); ?></p>
        </aside> -->

    </section>



    <!-- ========================================================= -->
    <!-- SECTION 01.2: WHAT HEALTH INSURANCE COVERS (SPLIT VIEW)   -->
    <!-- ========================================================= -->

    <section class="vv-property-insurance-section-s2">
        <header class="vv-property-insurance-header vv-property-insurance-header--secondary">
            <!-- <span class="vv-property-insurance-subtag"><?php echo esc_html($health_insurance_page_data['section_2']['subtag']); ?></span> -->
            <h2 class="vv-property-insurance-title-h2">
                <?php echo esc_html($health_insurance_page_data['section_2']['title']); ?></h2>
            <p class="vv-property-insurance-desc"><?php echo esc_html($health_insurance_page_data['section_2']['subtitle']); ?>
            </p>
        </header>

        <div class="vv-property-insurance-stage-wrapper">
            <!-- 1. TOP TABS / TIMELINE -->
            <nav class="vv-property-insurance-layer-timeline" role="tablist" aria-label="Health Coverage Stages">
                <?php foreach ($health_insurance_page_data['section_2']['zones'] as $key => $zone): ?>
                <button type="button" role="tab"
                    class="vv-property-insurance-layer-step <?php echo $key === 'hospitalisation' ? 'is-active' : ''; ?>"
                    data-layer="<?php echo esc_attr($key); ?>"
                    aria-selected="<?php echo $key === 'hospitalisation' ? 'true' : 'false'; ?>">
                    <span class="vv-property-insurance-layer-step__icon"><?php echo esc_html($zone['icon']); ?></span>
                    <span class="vv-property-insurance-layer-step__label"><?php echo esc_html($zone['label']); ?></span>
                </button>
                <?php endforeach; ?>
            </nav>

            <!-- 2. SIDE-BY-SIDE SPLIT CONTAINER -->
            <div class="vv-property-insurance-stage-split">
                <!-- LEFT: IMAGE VIEWPORT -->
                <div class="vv-property-insurance-viewport vv-property-insurance-viewport--compact"
                    id="vvPropertyInsuranceViewport">
                    <img id="vvPropertyInsuranceStageImage" class="vv-property-insurance-stage-img"
                        src="<?php echo esc_url($health_insurance_page_data['section_2']['zones']['hospitalisation']['image']); ?>"
                        alt="Health Insurance Stage View">

                    <div class="vv-property-insurance-viewport__overlay">
                        <span class="vv-property-insurance-layer-badge" id="vvPropertyInsuranceLayerBadge">
                            <?php echo esc_html($health_insurance_page_data['section_2']['zones']['hospitalisation']['badge']); ?>
                        </span>
                    </div>

                    <!-- PINS -->
                    <div id="vvPropertyInsurancePinContainer" class="vv-property-insurance-pin-container">
                        <?php foreach ($health_insurance_page_data['section_2']['zones']['hospitalisation']['pins'] as $pin): ?>
                        <button type="button" class="vv-property-insurance-map-pin"
                            style="top: <?php echo esc_attr($pin['top']); ?>; left: <?php echo esc_attr($pin['left']); ?>;">
                            <?php echo esc_html($pin['label']); ?>
                        </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- RIGHT: COMPACT SIDE DETAILS PANEL -->
                <div class="vv-property-insurance-side-panel vv-property-insurance-side-panel--compact"
                    id="vvPropertyInsuranceSidePanel">
                    <div class="vv-property-insurance-panel-header">
                        <span class="vv-property-insurance-panel-icon" id="vvPropertyInsurancePanelIcon">
                            <?php echo esc_html($health_insurance_page_data['section_2']['zones']['hospitalisation']['icon']); ?>
                        </span>
                        <div>
                            <span class="vv-property-insurance-panel-sub" id="vvPropertyInsurancePanelSub">Coverage Details</span>
                            <h3 class="vv-property-insurance-panel-title" id="vvPropertyInsurancePanelTitle">
                                <?php echo esc_html($health_insurance_page_data['section_2']['zones']['hospitalisation']['title']); ?>
                            </h3>
                        </div>
                    </div>

                    <div class="vv-property-insurance-panel-body">
                        <p class="vv-property-insurance-panel-desc" id="vvPropertyInsurancePanelDesc">
                            <?php echo esc_html($health_insurance_page_data['section_2']['zones']['hospitalisation']['desc']); ?>
                        </p>

                        <!-- Combined Target Audience Block -->
                        <div class="vv-property-insurance-panel-group vv-property-insurance-panel-group--merged">
                            <span class="vv-property-insurance-panel-group-title">Who & Best For</span>
                            <div class="vv-property-insurance-merged-audience-content">
                                <p class="vv-property-insurance-panel-best-for" id="vvPropertyInsurancePanelBestFor">
                                    <?php echo esc_html($health_insurance_page_data['section_2']['zones']['hospitalisation']['best_for']); ?>
                                </p>
                            </div>
                        </div>

                        <!-- Side-by-Side Grid for Includes & Protects -->
                        <div class="vv-property-insurance-panel-grid-row">
                            <div class="vv-property-insurance-panel-group vv-property-insurance-panel-group--no-border">
                                <span class="vv-property-insurance-panel-group-title">Includes</span>
                                <ul class="vv-property-insurance-panel-list" id="vvPropertyInsurancePanelIncludes">
                                    <?php 
                                    $default_health_icons = [
                                        'Room rent' => '🏨', 'Nursing charges' => '👩‍⚕️', 'Surgeon fees' => '🩺', 
                                        'Medicines' => '💊', 'Diagnostics' => '🔬', 'Cataract surgery' => '👁️', 
                                        'Dialysis' => '🩸', 'Chemotherapy sessions' => '🧬', 'Lithotripsy' => '⚡', 
                                        'Pre-admission diagnostics (30–60 days)' => '📋', 'Doctor consultation fees' => '👨‍⚕️', 
                                        'Post-discharge medicines' => '💊', 'Follow-up care (60–180 days)' => '🗓️', 
                                        'Cancer cover' => '🎗️', 'Cardiac arrest / Heart attack' => '❤️', 'Stroke & paralysis' => '🧠', 
                                        'Kidney failure' => '🩺', 'Ayurveda treatments' => '🌿', 'Yoga & Naturopathy' => '🧘', 
                                        'Unani & Siddha care' => '🍃', 'Homeopathy hospitalisation' => '💧'
                                    ];
                                    foreach ($health_insurance_page_data['section_2']['zones']['hospitalisation']['includes'] as $inc): 
                                    ?>
                                    <li>
                                        <span class="vv-property-include-icon" aria-hidden="true">
                                            <?php echo esc_html($default_health_icons[$inc] ?? '✓'); ?>
                                        </span>
                                        <span><?php echo esc_html($inc); ?></span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="vv-property-insurance-panel-group vv-property-insurance-panel-group--no-border">
                                <span class="vv-property-insurance-panel-group-title">When It Protects</span>
                                <ul class="vv-property-insurance-panel-list" id="vvPropertyInsurancePanelProtects">
                                    <?php foreach ($health_insurance_page_data['section_2']['zones']['hospitalisation']['protects_against'] as $item): ?>
                                    <li><?php echo esc_html($item); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <aside class="vv-property-insurance-global-takeaway vv-property-insurance-global-takeaway--s2">
            <span class="vv-property-insurance-global-takeaway__icon" aria-hidden="true">📌</span>
            <p class="vv-property-insurance-global-takeaway__text">
                <?php echo wp_kses_post($health_insurance_page_data['section_2']['takeaway']); ?></p>
        </aside>
    </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const healthZonesData = <?php echo json_encode($health_insurance_page_data['section_2']['zones'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
    let activeHealthZoneKey = 'hospitalisation';

    const imgEl = document.getElementById('vvPropertyInsuranceStageImage');
    const badgeEl = document.getElementById('vvPropertyInsuranceLayerBadge');
    const pinContainer = document.getElementById('vvPropertyInsurancePinContainer');
    const timelineButtons = document.querySelectorAll('.vv-property-insurance-layer-step');

    const panelIcon = document.getElementById('vvPropertyInsurancePanelIcon');
    const panelTitle = document.getElementById('vvPropertyInsurancePanelTitle');
    const panelDesc = document.getElementById('vvPropertyInsurancePanelDesc');
    const panelBestFor = document.getElementById('vvPropertyInsurancePanelBestFor');
    const panelIncludes = document.getElementById('vvPropertyInsurancePanelIncludes');
    const panelProtects = document.getElementById('vvPropertyInsurancePanelProtects');

    function renderPins(pins) {
        if (!pinContainer) return;
        pinContainer.innerHTML = '';
        if (!Array.isArray(pins)) return;

        pins.forEach(function(pin, index) {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'vv-property-insurance-map-pin';
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
                const healthCoverageIcons = {
                    "Room rent": "🏨", "Nursing charges": "👩‍⚕️", "Surgeon fees": "🩺", 
                    "Medicines": "💊", "Diagnostics": "🔬", "Cataract surgery": "👁️", 
                    "Dialysis": "🩸", "Chemotherapy sessions": "🧬", "Lithotripsy": "⚡", 
                    "Pre-admission diagnostics (30–60 days)": "📋", "Doctor consultation fees": "👨‍⚕️", 
                    "Post-discharge medicines": "💊", "Follow-up care (60–180 days)": "🗓️", 
                    "Cancer cover": "🎗️", "Cardiac arrest / Heart attack": "❤️", "Stroke & paralysis": "🧠", 
                    "Kidney failure": "🩺", "Ayurveda treatments": "🌿", "Yoga & Naturopathy": "🧘", 
                    "Unani & Siddha care": "🍃", "Homeopathy hospitalisation": "💧"
                };

                data.includes.forEach(function(item) {
                    const li = document.createElement('li');
                    const icon = document.createElement('span');
                    icon.className = 'vv-property-include-icon';
                    icon.textContent = healthCoverageIcons[item] || '✓';
                    icon.setAttribute('aria-hidden', 'true');

                    const label = document.createElement('span');
                    label.textContent = item;

                    li.appendChild(icon);
                    li.appendChild(label);
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
        if (!healthZonesData || !healthZonesData[key] || key === activeHealthZoneKey) return;
        activeHealthZoneKey = key;
        const data = healthZonesData[key];

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

    if (healthZonesData.hospitalisation) {
        renderPins(healthZonesData.hospitalisation.pins);
    }
});
</script>