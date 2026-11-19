<?php

$theme_uri = get_template_directory_uri();

$insurance_page_data = [

    // -------------------------------------------------------------
    // SECTION 01.1: What is Property Insurance?
    // -------------------------------------------------------------

    'section_1' => [

        'subtag'      => '01.1 — START HERE',

        'title'       => 'What is Property Insurance?',

        'description' => __(

            'Property insurance is a contract between you and an insurance company where, in return for a regular premium, the insurer agrees to pay for the cost of repairing, rebuilding, or replacing your home or its contents if they are damaged, destroyed, or stolen by a covered event.',

            'vima-vidya'

        ),

        

        'covered_events' => [

            'title'   => 'What It Covers',

            'subtext' => 'The events covered are called <strong>"perils."</strong> These must be sudden and external — fire, flood, earthquake, cyclone, theft. Gradual deterioration, normal wear and tear, and inherent defects are not covered.',

            'cards'   => [

                [

                    'id'          => 'fire',

                    'label'       => 'Fire & Explosions',

                    'tag'         => 'COVERED',

                    'icon'        => '🔥',

                    'explanation' => 'Short-circuit sparks, sudden explosion, or lightning damage.',

                    'image'       => 'https://images.unsplash.com/photo-1527482797697-8795b05a13fe?auto=format&fit=crop&w=600&q=80'

                ],

                [

                    'id'          => 'flood',

                    'label'       => 'Flood & Inundation',

                    'tag'         => 'COVERED',

                    'icon'        => '🌊',

                    'explanation' => 'Monsoon surges or external water runoff flooding floors.',

                    'image'       => 'https://images.unsplash.com/photo-1547683905-f686c993aae5?auto=format&fit=crop&w=600&q=80'

                ],

                [

                    'id'          => 'earthquake',

                    'label'       => 'Earthquake Shock',

                    'tag'         => 'COVERED',

                    'icon'        => '⚡',

                    'explanation' => 'Seismic shockwaves fracturing walls and foundations.',

                    'image'       => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=600&q=80'

                ],

                [

                    'id'          => 'cyclone',

                    'label'       => 'Cyclone & Storm',

                    'tag'         => 'COVERED',

                    'icon'        => '🌀',

                    'explanation' => 'High winds, hail, and storm damage to the structure.',

                    'image'       => 'https://images.unsplash.com/photo-1505672678857-8f9370d46a76?auto=format&fit=crop&w=600&q=80'

                ],

                [

                    'id'          => 'theft',

                    'label'       => 'Theft & Burglary',

                    'tag'         => 'COVERED',

                    'icon'        => '🥷',

                    'explanation' => 'Forced entry and theft of covered property.',

                    'image'       => 'https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=600&q=80'

                ],

                [

                    'id'          => 'accidental',

                    'label'       => 'Accidental Damage',

                    'tag'         => 'COVERED',

                    'icon'        => '🛋️',

                    'explanation' => 'Unexpected and sudden damage to your home\'s contents.',

                    'image'       => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=600&q=80'

                ]

            ]

        ],



        'not_covered_events' => [

            'title'   => 'What It Does Not Cover',

            'subtext' => 'Property insurance is not a maintenance contract. It does not cover routine wear and tear, gradual deterioration, or cosmetic damage. It is not a home warranty — it will not pay because your appliance is old. It is a financial protection product that activates specifically when a sudden, unexpected, covered event damages or destroys your property or its contents.',

            'cards'   => [

                [

                    'id'          => 'wear_tear',

                    'label'       => 'Wear & Tear',

                    'tag'         => 'NOT COVERED',

                    'icon'        => '🛋️',

                    'explanation' => 'Faded upholstery, broken springs, and normal multi-year usage.',

                    'image'       => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=600&q=80'

                ],

                [

                    'id'          => 'cosmetic',

                    'label'       => 'Cosmetic Damage',

                    'tag'         => 'NOT COVERED',

                    'icon'        => '🏠',

                    'explanation' => 'Marker drawings and surface scratches require owner repainting.',

                    'image'       => 'https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?auto=format&fit=crop&w=600&q=80'

                ],

                [

                    'id'          => 'gradual',

                    'label'       => 'Gradual Deterioration',

                    'tag'         => 'NOT COVERED',

                    'icon'        => '❄️',

                    'explanation' => 'Aging of appliances, AC units, and mechanical parts.',

                    'image'       => 'https://images.unsplash.com/photo-1585338107529-13afc5f02586?auto=format&fit=crop&w=600&q=80'

                ],

                [

                    'id'          => 'mold_leak',

                    'label'       => 'Gradual Wall Leak & Mold',

                    'tag'         => 'NOT COVERED',

                    'icon'        => '💧',

                    'explanation' => 'Slow water seepages, wet rot, and mold growth.',

                    'image'       => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=600&q=80'

                ],

                [

                    'id'          => 'pre_existing',

                    'label'       => 'Pre-existing Fault',

                    'tag'         => 'NOT COVERED',

                    'icon'        => '🔨',

                    'explanation' => 'Substandard construction material or design defects.',

                    'image'       => 'https://images.unsplash.com/photo-1541888946425-d0fbb186c5f8?auto=format&fit=crop&w=600&q=80'

                ],

                [

                    'id'          => 'obsolete',

                    'label'       => 'Old or Outdated Items',

                    'tag'         => 'NOT COVERED',

                    'icon'        => '🖥️',

                    'explanation' => 'Items beyond their useful life or obsolete technology.',

                    'image'       => 'https://images.unsplash.com/photo-1526738549149-8e07eca6c147?auto=format&fit=crop&w=600&q=80'

                ]

            ]

        ],



        'takeaway' => '<strong>Key Takeaway:</strong> Property insurance is not a maintenance contract. It does not cover routine wear and tear, gradual deterioration, or cosmetic damage. It is not a home warranty — it will not pay because your appliance is old. It is a financial protection product that activates specifically when a sudden, unexpected, covered event damages or destroys your property or its contents.'

    ],



    // -------------------------------------------------------------
    // SECTION 01.2: What Can It Protect?
    // -------------------------------------------------------------

    'section_2' => [

        'subtag'   => '01.2 — WHAT CAN IT PROTECT?',

        'title'    => 'What can it protect?',

        'subtitle' => 'An interactive layer-by-layer breakdown of structure, contents, and commercial assets.',



        'zones' => [

            'building' => [

                'id'       => 'building',

                'label'    => '1. Structure Shell',

                'icon'     => '🏗️',

                'image'    => $theme_uri . '/assets/images/typesofinsurance/propertyinsurance/understand/what-can-it-protect-1.png',

                'badge'    => 'Base Structure',

                'title'    => 'Building / Structure Cover',

                'desc'     => 'Protects the physical structure — walls, roof, floors, staircases, built-in fixtures, plumbing, electrical wiring, and compound walls.',

                'includes' => [

                    'Walls & roof',

                    'Floors',

                    'Staircases',

                    'Fixtures',

                    'Plumbing',

                    'Electrical wiring',

                    'Compound walls'

                ],

                'who_for'  => ['Homeowners'],

                'best_for' => 'Homeowners — those who own the property',

                'protects_against' => [

                    '🔥 Damage from fire, flood, earthquake, cyclone',

                    '🔒 Theft & burglary (Based on policy clause)'

                ],

                'pins'     => [

                    ['label' => 'Roof & Structure', 'top' => '18%', 'left' => '44%'],

                    ['label' => 'Exterior Walls', 'top' => '52%', 'left' => '24%'],

                    ['label' => 'Built-in Fixtures', 'top' => '70%', 'left' => '58%']

                ]

            ],

            'contents' => [

                'id'       => 'contents',

                'label'    => '2. Interior & Contents',

                'icon'     => '🛋️',

                'image'    => $theme_uri . '/assets/images/typesofinsurance/propertyinsurance/understand/what-can-it-protect-2.png',

                'badge'    => 'Interior Furnishings',

                'title'    => 'Contents Cover',

                'desc'     => 'Everything movable inside — furniture, appliances, clothing, kitchenware, and home accessories.',

                'includes' => [

                    'Sofas & Tables',

                    'Refrigerators & Washers',

                    'Smart TV / Sound systems',

                    'Kitchen cookware',

                    'Wardrobes'

                ],

                'who_for'  => ['Homeowners', 'Tenants'],

                'best_for' => 'Both homeowners and tenants',

                'protects_against' => [

                    '🔥 Damage from fire, flood, earthquake, cyclone',

                    '🔒 Theft & burglary (Based on policy clause)'

                ],

                'pins'     => [

                    ['label' => 'Living Suite & Tables', 'top' => '46%', 'left' => '48%'],

                    ['label' => 'Appliances', 'top' => '72%', 'left' => '38%']

                ]

            ],

            'electronics' => [

                'id'       => 'electronics',

                'label'    => '3. Electronics Cover',

                'icon'     => '💻',

                'image'    => $theme_uri . '/assets/images/typesofinsurance/propertyinsurance/understand/what-can-it-protect-3.png',

                'badge'    => 'Digital & Appliances',

                'title'    => 'Dedicated Electronics Cover',

                'desc'     => 'Shields costly personal or business computers, audio-visual arrays, and automation systems from sudden power surges and mishaps.',

                'includes' => [

                    'Computers & Laptops',

                    'High-end Televisions',

                    'Home Server / Audio Gear',

                    'Surge Breakdown'

                ],

                'who_for'  => ['Homeowners', 'Tenants', 'Small Business Owners'],

                'best_for' => 'Homeowners, tenants and small business owners',

                'protects_against' => [

                    '🔥 Damage from fire, flood, earthquake, cyclone',

                    '🔒 Theft & burglary (Based on policy clause)'

                ],

                'pins'     => [

                    ['label' => 'Workstations & Screens', 'top' => '40%', 'left' => '62%'],

                    ['label' => 'Power Surge Protection', 'top' => '68%', 'left' => '74%']

                ]

            ],

            'stock' => [

                'id'       => 'stock',

                'label'    => '4. Stock & Equipment',

                'icon'     => '📦',

                'image'    => $theme_uri . '/assets/images/typesofinsurance/propertyinsurance/understand/what-can-it-protect-4.png',

                'badge'    => 'Commercial Inventory',

                'title'    => 'Stock & Business Equipment',

                'desc'     => 'For commercial shop owners and business operators — protects wholesale inventory, specialized tools, and display equipment.',

                'includes' => [

                    'Trade equipment & machinery',

                    'Raw material inventories',

                    'Point-of-sale registers',

                    'Display counters'

                ],

                'who_for'  => ['Small Business Owners'],

                'best_for' => 'Small business owners — both owners and those in rented commercial space',

                'protects_against' => [

                    '🔥 Damage from fire, flood, earthquake, cyclone',

                    '🔒 Theft & burglary (Based on policy clause)'

                ],

                'pins'     => [

                    ['label' => 'Inventory Shelves', 'top' => '36%', 'left' => '34%'],

                    ['label' => 'Commercial Tools', 'top' => '64%', 'left' => '66%']

                ]

            ],

            'valuables' => [

                'id'       => 'valuables',

                'label'    => '5. Valuables & Jewellery',

                'icon'     => '💍',

                'image'    => $theme_uri . '/assets/images/typesofinsurance/propertyinsurance/understand/what-can-it-protect-5.png',

                'badge'    => 'Declared Valuables',

                'title'    => 'Valuables & Jewellery Cover',

                'desc'     => 'High-value items kept at premises requiring declared value protection against covered sudden theft or destructive fire perils.',

                'includes' => [

                    'Gold & Diamond jewellery',

                    'Luxury watches',

                    'Rare heirlooms',

                    'Works of art'

                ],

                'who_for'  => ['Homeowners', 'Tenants', 'Small Business Owners'],

                'best_for' => 'Homeowners, tenants and small business owners',

                'protects_against' => [

                    '🔥 Damage from fire, flood, earthquake, cyclone',

                    '🔒 Theft & burglary (Based on policy clause)'

                ],

                'pins'     => [

                    ['label' => 'Locker & Safe Storage', 'top' => '52%', 'left' => '50%']

                ]

            ]

        ],



        'takeaway' => '

            <strong>Key Takeaway:</strong>

            Building cover protects the shell. Contents cover protects the life inside the shell.

            For small businesses, stock and equipment cover protects the livelihood inside the shell.
<br>
         

            Homeowners need the first two.

           
<br>
            Tenants need contents cover urgently. Many renters assume their landlord\'s policy covers their belongings. It does not, and never will.

           <br>

            Small business owners need commercial property cover — whether they own or rent the premises.

        '

    ]

];

?>


<div class="vv-property-insurance-wrapper" id="what-it-is">

    <!-- ========================================================= -->
    <!-- SECTION 01.1: WHAT IS PROPERTY INSURANCE?                 -->
    <!-- ========================================================= -->

    <section class="vv-property-insurance-section-s1">

        <header class="vv-property-insurance-header">

            <h1 class="vv-property-insurance-title"><?php echo esc_html($insurance_page_data['section_1']['title']); ?></h1>

            <p class="vv-property-insurance-desc">
                <?php echo wp_kses_post($insurance_page_data['section_1']['description']); ?></p>

        </header>



        <div class="vv-property-insurance-contrast-grid">

            <!-- Left: Covered Column -->

            <section class="vv-property-insurance-contrast-col vv-property-insurance-contrast-col--covered">

                <div class="vv-property-insurance-col-header">

                    <div class="vv-property-insurance-col-icon-circle vv-property-insurance-col-icon-circle--covered">

                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">

                            <polyline points="20 6 9 17 4 12"></polyline>

                        </svg>

                    </div>

                    <div class="vv-property-insurance-col-title-wrap">

                        <h2 class="vv-property-insurance-col-title">
                            <?php echo esc_html($insurance_page_data['section_1']['covered_events']['title']); ?></h2>

                        <span
                            class="vv-property-insurance-col-underline vv-property-insurance-col-underline--covered"></span>

                    </div>

                </div>



                <p class="vv-property-insurance-col-subtext">

                    <?php echo wp_kses_post($insurance_page_data['section_1']['covered_events']['subtext']); ?>

                </p>

            </section>



            <!-- Right: Not Covered Column -->

            <section class="vv-property-insurance-contrast-col vv-property-insurance-contrast-col--denied">

                <div class="vv-property-insurance-col-header">

                    <div class="vv-property-insurance-col-icon-circle vv-property-insurance-col-icon-circle--denied">

                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">

                            <line x1="18" y1="6" x2="6" y2="18"></line>

                            <line x1="6" y1="6" x2="18" y2="18"></line>

                        </svg>

                    </div>

                    <div class="vv-property-insurance-col-title-wrap">

                        <h2 class="vv-property-insurance-col-title">
                            <?php echo esc_html($insurance_page_data['section_1']['not_covered_events']['title']); ?>
                        </h2>

                        <span
                            class="vv-property-insurance-col-underline vv-property-insurance-col-underline--denied"></span>

                    </div>

                </div>



                <p class="vv-property-insurance-col-subtext">

                    <?php echo esc_html($insurance_page_data['section_1']['not_covered_events']['subtext']); ?>

                </p>

            </section>

        </div>



        <aside class="vv-property-insurance-global-takeaway vv-property-insurance-global-takeaway--s1">

            <span class="vv-property-insurance-global-takeaway__icon" aria-hidden="true">📌</span>

            <p class="vv-property-insurance-global-takeaway__text">
                <?php echo wp_kses_post($insurance_page_data['section_1']['takeaway']); ?></p>

        </aside>

    </section>



    <!-- ========================================================= -->
    <!-- SECTION 01.2: WHAT CAN IT PROTECT? (SPLIT VIEW)          -->
    <!-- ========================================================= -->

    <section class="vv-property-insurance-section-s2">
        <header class="vv-property-insurance-header vv-property-insurance-header--secondary">
            <h2 class="vv-property-insurance-title-h2">
                <?php echo esc_html($insurance_page_data['section_2']['title']); ?></h2>
            <p class="vv-property-insurance-desc"><?php echo esc_html($insurance_page_data['section_2']['subtitle']); ?>
            </p>
        </header>

        <div class="vv-property-insurance-stage-wrapper">
            <!-- 1. TOP TABS / TIMELINE -->
            <nav class="vv-property-insurance-layer-timeline" role="tablist" aria-label="Coverage Stages">
                <?php foreach ($insurance_page_data['section_2']['zones'] as $key => $zone): ?>
                <button type="button" role="tab"
                    class="vv-property-insurance-layer-step <?php echo $key === 'building' ? 'is-active' : ''; ?>"
                    data-layer="<?php echo esc_attr($key); ?>"
                    aria-selected="<?php echo $key === 'building' ? 'true' : 'false'; ?>">
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
                        src="<?php echo esc_url($insurance_page_data['section_2']['zones']['building']['image']); ?>"
                        alt="Property Protection Stage View">

                    <div class="vv-property-insurance-viewport__overlay">
                        <span class="vv-property-insurance-layer-badge" id="vvPropertyInsuranceLayerBadge">
                            <?php echo esc_html($insurance_page_data['section_2']['zones']['building']['badge']); ?>
                        </span>
                    </div>

                    <!-- PINS -->
                    <div id="vvPropertyInsurancePinContainer" class="vv-property-insurance-pin-container">
                        <?php foreach ($insurance_page_data['section_2']['zones']['building']['pins'] as $pin): ?>
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
                            <?php echo esc_html($insurance_page_data['section_2']['zones']['building']['icon']); ?>
                        </span>
                        <div>
                            <span class="vv-property-insurance-panel-sub" id="vvPropertyInsurancePanelSub">Coverage Details</span>
                            <h3 class="vv-property-insurance-panel-title" id="vvPropertyInsurancePanelTitle">
                                <?php echo esc_html($insurance_page_data['section_2']['zones']['building']['title']); ?>
                            </h3>
                        </div>
                    </div>

                    <div class="vv-property-insurance-panel-body">
                        <p class="vv-property-insurance-panel-desc" id="vvPropertyInsurancePanelDesc">
                            <?php echo esc_html($insurance_page_data['section_2']['zones']['building']['desc']); ?>
                        </p>

                        <!-- Combined Target Audience Block -->
                        <div class="vv-property-insurance-panel-group vv-property-insurance-panel-group--merged">
                            <span class="vv-property-insurance-panel-group-title">Who & Best For</span>
                            <div class="vv-property-insurance-merged-audience-content">
                                <p class="vv-property-insurance-panel-best-for" id="vvPropertyInsurancePanelBestFor">
                                    <?php echo esc_html($insurance_page_data['section_2']['zones']['building']['best_for']); ?>
                                </p>
                            </div>
                        </div>

                        <!-- Side-by-Side Grid for Includes & Protects -->
                        <div class="vv-property-insurance-panel-grid-row">
                            <div class="vv-property-insurance-panel-group vv-property-insurance-panel-group--no-border">
                                <span class="vv-property-insurance-panel-group-title">Includes</span>
                                <ul class="vv-property-insurance-panel-list" id="vvPropertyInsurancePanelIncludes">
                                    <?php 
                                    $default_icons = [
                                        'Walls & roof' => '🏠', 'Floors' => '🧱', 'Staircases' => '🪜', 
                                        'Fixtures' => '🔧', 'Plumbing' => '🚰', 'Electrical wiring' => '⚡', 
                                        'Compound walls' => '🧱', 'Sofas & Tables' => '🛋️', 'Refrigerators & Washers' => '❄️', 
                                        'Smart TV / Sound systems' => '📺', 'Kitchen cookware' => '🍳', 'Wardrobes' => '🚪',
                                        'Computers & Laptops' => '💻', 'High-end Televisions' => '📺', 'Home Server / Audio Gear' => '🎧', 
                                        'Surge Breakdown' => '⚡', 'Trade equipment & machinery' => '⚙️', 'Raw material inventories' => '📦', 
                                        'Point-of-sale registers' => '🖥️', 'Display counters' => '🏷️', 'Gold & Diamond jewellery' => '💍', 
                                        'Luxury watches' => '⌚', 'Rare heirlooms' => '🏺', 'Works of art' => '🎨'
                                    ];
                                    foreach ($insurance_page_data['section_2']['zones']['building']['includes'] as $inc): 
                                    ?>
                                    <li>
                                        <span class="vv-property-include-icon" aria-hidden="true">
                                            <?php echo esc_html($default_icons[$inc] ?? '✓'); ?>
                                        </span>
                                        <span><?php echo esc_html($inc); ?></span>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="vv-property-insurance-panel-group vv-property-insurance-panel-group--no-border">
                                <span class="vv-property-insurance-panel-group-title">When It Protects</span>
                                <ul class="vv-property-insurance-panel-list" id="vvPropertyInsurancePanelProtects">
                                    <?php foreach ($insurance_page_data['section_2']['zones']['building']['protects_against'] as $item): ?>
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
                <?php echo wp_kses_post($insurance_page_data['section_2']['takeaway']); ?></p>
        </aside>
    </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const zonesData = <?php echo json_encode($insurance_page_data['section_2']['zones'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
    let activeZoneKey = 'building';

    const imgEl = document.getElementById('vvPropertyInsuranceStageImage');
    const badgeEl = document.getElementById('vvPropertyInsuranceLayerBadge');
    const pinContainer = document.getElementById('vvPropertyInsurancePinContainer');
    const timelineButtons = document.querySelectorAll('.vv-property-insurance-layer-step');

    const panelIcon = document.getElementById('vvPropertyInsurancePanelIcon');
    const panelTitle = document.getElementById('vvPropertyInsurancePanelTitle');
    const panelDesc = document.getElementById('vvPropertyInsurancePanelDesc');
    const panelWhoFor = document.getElementById('vvPropertyInsurancePanelWhoFor');
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
                const coverageIcons = {
                    "Walls & roof": "🏠", "Floors": "🧱", "Staircases": "🪜", 
                    "Fixtures": "🔧", "Plumbing": "🚰", "Electrical wiring": "⚡", 
                    "Compound walls": "🧱", "Sofas & Tables": "🛋️", "Refrigerators & Washers": "🧺", 
                    "Smart TV / Sound systems": "📺", "Kitchen cookware": "🍳", "Wardrobes": "🚪",
                    "Computers & Laptops": "💻", "High-end Televisions": "📺", "Home Server / Audio Gear": "🔊", 
                    "Surge Breakdown": "⚡", "Trade equipment & machinery": "⚙️", "Raw material inventories": "📦", 
                    "Point-of-sale registers": "🧾", "Display counters": "🏪", "Gold & Diamond jewellery": "💎", 
                    "Luxury watches": "⌚", "Rare heirlooms": "🏺", "Works of art": "🎨"
                };

                data.includes.forEach(function(item) {
                    const li = document.createElement('li');
                    const icon = document.createElement('span');
                    icon.className = 'vv-property-include-icon';
                    icon.textContent = coverageIcons[item] || '✓';
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
        if (!zonesData || !zonesData[key] || key === activeZoneKey) return;
        activeZoneKey = key;
        const data = zonesData[key];

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

    if (zonesData.building) {
        renderPins(zonesData.building.pins);
    }
});
</script>