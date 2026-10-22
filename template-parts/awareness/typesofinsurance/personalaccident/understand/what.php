<?php

$accident_page_data = [

    // -------------------------------------------------------------
    // SECTION 01: What is Personal Accident Insurance?
    // -------------------------------------------------------------
    'section_1' => [
        'subtag'      => '01 — START HERE',
        'title'       => 'What Is Personal Accident Insurance?',
        'description' => __(
            'Personal Accident Insurance, often abbreviated as PA Insurance — is a contract between you and an insurance company where, in return for a relatively small annual premium, the insurer agrees to pay defined benefits if you suffer bodily injury, disability, or death purely because of an accident. The word \'accident\' has a precise legal meaning in insurance: it must be a sudden, unforeseen, unintended, and external event. Illness, pre-existing conditions, or self-inflicted harm are excluded.',
            'vima-vidya'
        ),
        
        'not_what_it_is' => [
            'icon'  => '💡',
            'title' => 'What PA Insurance is NOT:',
            'text'  => 'PA Insurance is not health insurance. It does not cover the cost of your hospital room or surgery. It is not life insurance — it does not help you build a corpus. It is a standalone income-protection and family-security product that activates specifically when an accident changes your ability to live, work, or survive.'
        ],

       
    ],

    // -------------------------------------------------------------
    // SECTION 02: The Four Events PA Insurance Covers (Tabbed System)
    // -------------------------------------------------------------
    'section_2' => [
        'subtag'   => '02 — THE FOUR EVENTS',
        'title'    => 'The Four Events PA Insurance Covers',
        'subtitle' => 'Interactive breakdown of accident categories, what happens, and their corresponding benefit payouts.',

        'events' => [
            'ad' => [
                'id'          => 'ad',
                'label'       => 'Accidental Death (AD)',
                'short_name'  => 'Accidental Death (AD)',
                'icon'        => '🛡️',
                'image'       => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1400&q=80',
                'badge'       => '100% Payout',
                'title'       => 'Accidental Death (AD)',
                'happens'     => 'You die as a direct result of an accident',
                'benefit'     => '100% of Capital Sum Insured (CSI) paid to nominee',
                'desc'        => 'Triggered when insured individuals pass away directly as a result of a sudden, unforeseen, unintended, and external accident.',
                'pins'        => [
                    ['label' => '100% CSI Payout to Nominee', 'top' => '45%', 'left' => '50%']
                ]
            ],
            'ptd' => [
                'id'          => 'ptd',
                'label'       => 'Permanent Total Disability (PTD)',
                'short_name'  => 'Permanent Total Disability (PTD)',
                'icon'        => '⚠️',
                'image'       => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=1400&q=80',
                'badge'       => '100% to 125%',
                'title'       => 'Permanent Total Disability (PTD)',
                'happens'     => 'Accident renders you permanently unable to work',
                'benefit'     => '100% of Capital Sum Insured (CSI). Some policies pay up to 125%',
                'desc'        => 'Activated when an accident permanently and completely disables you from engaging in any kind of employment or occupation.',
                'pins'        => [
                    ['label' => 'Total Disablement Payout', 'top' => '50%', 'left' => '45%']
                ]
            ],
            'ppd' => [
                'id'          => 'ppd',
                'label'       => 'Permanent Partial Disability (PPD)',
                'short_name'  => 'Permanent Partial Disability (PPD)',
                'icon'        => '🦴',
                'image'       => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=1400&q=80',
                'badge'       => 'Tiered Schedule',
                'title'       => 'Permanent Partial Disability (PPD)',
                'happens'     => 'Loss of limb, eye, hearing, or partial body function',
                'benefit'     => 'Percentage of Capital Sum Insured (CSI) per Disability Schedule (e.g. loss of one hand = 50%)',
                'desc'        => 'Compensates for irreversible loss of specific bodily functions or limbs according to the predefined policy disability schedule.',
                'pins'        => [
                    ['label' => 'Schedule Percentage Scale', 'top' => '48%', 'left' => '52%']
                ]
            ],
            'ttd' => [
                'id'          => 'ttd',
                'label'       => 'Temporary Total Disability (TTD)',
                'short_name'  => 'Temporary Total Disability (TTD)',
                'icon'        => '⏳',
                'image'       => 'https://images.unsplash.com/photo-1506784983877-45594efa4cbe?auto=format&fit=crop&w=1400&q=80',
                'badge'       => 'Income Replacement',
                'title'       => 'Temporary Total Disability (TTD)',
                'happens'     => 'Accident prevents work during recovery period',
                'benefit'     => 'Weekly/monthly compensation - typically 1% of Capital Sum Insured (CSI) per week/month, capped',
                'desc'        => 'Provides continuous financial compensation while an unexpected accident temporarily keeps you bedridden or unable to work during recovery.',
                'pins'        => [
                    ['label' => 'Weekly / Monthly Capped Stream', 'top' => '52%', 'left' => '48%']
                ]
            ]
        ],
         'takeaway' => '<strong>✅ Key Takeaway -</strong> Health insurance pays your hospital bills. PA insurance pays you for the income you lose, compensating the disability you carry, and protecting the family that depends on you.'
    ]

];

?>

<div class="pi-wrapper" id="what-is-pa">
    
    <!-- ========================================================= -->
    <!-- SECTION 01: WHAT IS PERSONAL ACCIDENT INSURANCE?          -->
    <!-- ========================================================= -->
    <section class="pi-section-s1">
        <header class="pi-header">
            <h1 class="pi-title"><?php echo esc_html($accident_page_data['section_1']['title']); ?></h1>
            <p class="pi-desc"><?php echo wp_kses_post($accident_page_data['section_1']['description']); ?></p>
        </header>

        <!-- What PA Insurance is NOT Box -->
        <div class="pi-global-takeaway pi-global-takeaway--not" style="margin: 24px 0; background: #fffbeb; border-color: #f59e0b; border-left-color: #d97706;">
            <span class="pi-global-takeaway__icon" aria-hidden="true">
                <?php echo esc_html($accident_page_data['section_1']['not_what_it_is']['icon']); ?>
            </span>
            <p class="pi-global-takeaway__text">
                <strong><?php echo esc_html($accident_page_data['section_1']['not_what_it_is']['title']); ?></strong>
                <?php echo esc_html($accident_page_data['section_1']['not_what_it_is']['text']); ?>
            </p>
        </div>

        
    </section>

    <!-- ========================================================= -->
    <!-- SECTION 02: THE FOUR EVENTS PA INSURANCE COVERS (TABS)    -->
    <!-- ========================================================= -->
    <section class="pi-section-s2" style="margin-top: 50px;">
        <header class="pi-header pi-header--secondary">
            <h2 class="pi-title-h2"><?php echo esc_html($accident_page_data['section_2']['title']); ?></h2>
            <p class="pi-desc"><?php echo esc_html($accident_page_data['section_2']['subtitle']); ?></p>
        </header>

        <div class="pi-stage-wrapper">
            <!-- 1. EVENT TABS TIMELINE -->
            <nav class="pi-layer-timeline pi-layer-timeline--events" role="tablist" aria-label="Four PA Events">
                <?php foreach ($accident_page_data['section_2']['events'] as $key => $event): ?>
                <button type="button" role="tab"
                    class="pi-layer-step <?php echo $key === 'ad' ? 'is-active' : ''; ?>"
                    data-event="<?php echo esc_attr($key); ?>"
                    aria-selected="<?php echo $key === 'ad' ? 'true' : 'false'; ?>">
                    <span class="pi-layer-step__icon"><?php echo esc_html($event['icon']); ?></span>
                    <span class="pi-layer-step__label"><?php echo esc_html($event['short_name']); ?></span>
                </button>
                <?php endforeach; ?>
            </nav>

            <!-- 2. SIDE-BY-SIDE SPLIT CONTAINER -->
            <div class="pi-stage-split">
                <!-- LEFT: IMAGE VIEWPORT WITH PINS -->
                <div class="pi-viewport pi-viewport--compact" id="paEventViewport">
                    <img id="paEventStageImage" class="pi-stage-img"
                        src="<?php echo esc_url($accident_page_data['section_2']['events']['ad']['image']); ?>"
                        alt="PA Insurance Event View">

                    <div class="pi-viewport__overlay">
                        <span class="pi-layer-badge" id="paEventBadge">
                            <?php echo esc_html($accident_page_data['section_2']['events']['ad']['badge']); ?>
                        </span>
                    </div>

                    <div id="paEventPinContainer" class="pi-pin-container">
                        <?php foreach ($accident_page_data['section_2']['events']['ad']['pins'] as $pin): ?>
                        <button type="button" class="pi-map-pin"
                            style="top: <?php echo esc_attr($pin['top']); ?>; left: <?php echo esc_attr($pin['left']); ?>;">
                            <?php echo esc_html($pin['label']); ?>
                        </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- RIGHT: DETAILS PANEL -->
                <div class="pi-side-panel pi-side-panel--compact" id="paEventSidePanel">
                    <div class="pi-panel-header">
                        <span class="pi-panel-icon" id="paEventPanelIcon">🛡️</span>
                        <div>
                            <span class="pi-panel-sub">Event Specification</span>
                            <h3 class="pi-panel-title" id="paEventPanelTitle">
                                <?php echo esc_html($accident_page_data['section_2']['events']['ad']['title']); ?>
                            </h3>
                        </div>
                    </div>

                    <div class="pi-panel-body">
                        <p class="pi-panel-desc" id="paEventPanelDesc">
                            <?php echo esc_html($accident_page_data['section_2']['events']['ad']['desc']); ?>
                        </p>

                        <!-- What Happens Block -->
                        <div class="pi-panel-group">
                            <span class="pi-panel-group-title">What Happens</span>
                            <p class="pi-panel-best-for" id="paEventPanelHappens" style="font-weight: 600; color: #1e293b;">
                                <?php echo esc_html($accident_page_data['section_2']['events']['ad']['happens']); ?>
                            </p>
                        </div>

                        <!-- Benefit Paid Block -->
                        <div class="pi-panel-group" style="margin-top: 10px;">
                            <span class="pi-panel-group-title" style="color: #16a34a;">Benefit Paid</span>
                            <p class="pi-panel-best-for" id="paEventPanelBenefit" style="font-weight: 700; color: #0f172a; background: #f0fdf4; padding: 12px; border-radius: 8px; border: 1px solid #bbf7d0;">
                                <?php echo esc_html($accident_page_data['section_2']['events']['ad']['benefit']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="pi-global-takeaway pi-global-takeaway--s1">
            <p class="pi-global-takeaway__text">
                <?php echo wp_kses_post($accident_page_data['section_2']['takeaway']); ?>
            </p>
        </aside>
        </div>
    </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const eventsData = <?php echo json_encode($accident_page_data['section_2']['events'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
    let activeEventKey = 'ad';

    const imgEl = document.getElementById('paEventStageImage');
    const badgeEl = document.getElementById('paEventBadge');
    const pinContainer = document.getElementById('paEventPinContainer');
    const tabButtons = document.querySelectorAll('#pa-events-tabs-system .pi-layer-step');

    const panelIcon = document.getElementById('paEventPanelIcon');
    const panelTitle = document.getElementById('paEventPanelTitle');
    const panelDesc = document.getElementById('paEventPanelDesc');
    const panelHappens = document.getElementById('paEventPanelHappens');
    const panelBenefit = document.getElementById('paEventPanelBenefit');

    function renderPins(pins) {
        if (!pinContainer) return;
        pinContainer.innerHTML = '';
        if (!Array.isArray(pins)) return;
        pins.forEach(function(pin) {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'pi-map-pin';
            btn.style.top = pin.top || '50%';
            btn.style.left = pin.left || '50%';
            btn.textContent = pin.label || '';
            pinContainer.appendChild(btn);
        });
    }

    function switchEventTab(key) {
        if (!eventsData[key] || key === activeEventKey) return;
        activeEventKey = key;
        const data = eventsData[key];

        tabButtons.forEach(function(btn) {
            const isActive = btn.getAttribute('data-event') === key;
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

        if (panelIcon) panelIcon.textContent = data.icon || '';
        if (panelTitle) panelTitle.textContent = data.title || '';
        if (panelDesc) panelDesc.textContent = data.desc || '';
        if (panelHappens) panelHappens.textContent = data.happens || '';
        if (panelBenefit) panelBenefit.textContent = data.benefit || '';
    }

    if (tabButtons.length) {
        tabButtons.forEach(function(btn) {
            btn.addEventListener('click', function() {
                switchEventTab(this.getAttribute('data-event'));
            });
        });
    }
});
</script>

<style>
/* Responsive 4-Column Timeline Grid for Events */
#pa-events-tabs-system .pi-layer-timeline--events {
    grid-template-columns: repeat(4, 1fr) !important;
}
@media (max-width: 1024px) {
    #pa-events-tabs-system .pi-layer-timeline--events {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}
@media (max-width: 640px) {
    #pa-events-tabs-system .pi-layer-timeline--events {
        grid-template-columns: 1fr !important;
    }
}
</style>