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
        'image'       => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=1400&q=80',
        
        'not_what_it_is' => [
            'icon'  => '💡',
            'title' => 'What PA Insurance is NOT',
            'text'  => 'PA Insurance is not health insurance. It does not cover the cost of your hospital room or surgery. It is not life insurance — it does not help you build a corpus. It is a standalone income-protection and family-security product that activates specifically when an accident changes your ability to live, work, or survive.'
        ],
    ],

    // -------------------------------------------------------------
    // SECTION 02: The Four Events PA Insurance Covers (Tabbed System)
    // -------------------------------------------------------------
    'section_2' => [
        'subtag'   => '02 — THE FOUR EVENTS',
        'title'    => 'The Four Events PA Insurance Covers',
        'subtitle' => 'The policy provides financial support for these four key events, helping you stay secure.',

        'events' => [
            'ad' => [
                'id'          => 'ad',
                'label'       => 'Accidental Death',
                'short_name'  => 'Accidental Death',
                'icon'        => '🛡️',
                'image'       => 'https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&w=1400&q=80',
                'badge'       => '100% Payout',
                'title'       => 'Accidental Death (AD)',
                'desc'        => 'Financial support for your family in the event of an accidental death.',
                'happens'     => 'You die as a direct result of an accident',
                'benefit'     => '100% of Capital Sum Insured (CSI) paid to nominee',
                'banner'      => 'Financial protection for your family\'s future.'
            ],
            'ptd' => [
                'id'          => 'ptd',
                'label'       => 'Permanent Total Disability',
                'short_name'  => 'Permanent Total Disability',
                'icon'        => '⚠️',
                'image'       => 'https://images.unsplash.com/photo-1581056771107-24ca5f036842?auto=format&fit=crop&w=1400&q=80',
                'badge'       => '100% to 125%',
                'title'       => 'Permanent Total Disability (PTD)',
                'desc'        => 'Income and livelihood security when total permanent disability occurs.',
                'happens'     => 'Accident renders you permanently unable to work',
                'benefit'     => '100% of Capital Sum Insured (CSI). Some policies pay up to 125%',
                'banner'      => 'Complete financial security for permanent lifestyle changes.'
            ],
            'ppd' => [
                'id'          => 'ppd',
                'label'       => 'Permanent Partial Disability',
                'short_name'  => 'Permanent Partial Disability',
                'icon'        => '🦴',
                'image'       => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1400&q=80',
                'badge'       => 'Tiered Schedule',
                'title'       => 'Permanent Partial Disability (PPD)',
                'desc'        => 'Compensation proportional to specific limb or sensory loss.',
                'happens'     => 'Loss of limb, eye, hearing, or partial body function',
                'benefit'     => 'Percentage of Capital Sum Insured (CSI) per Disability Schedule (e.g. loss of one hand = 50%)',
                'banner'      => 'Flexible tiered payouts matching your specific recovery needs.'
            ],
            'ttd' => [
                'id'          => 'ttd',
                'label'       => 'Temporary Total Disability',
                'short_name'  => 'Temporary Total Disability',
                'icon'        => '⏳',
                'image'       => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=1400&q=80',
                'badge'       => 'Income Replacement',
                'title'       => 'Temporary Total Disability (TTD)',
                'desc'        => 'Provides continuous financial compensation during recovery.',
                'happens'     => 'Accident prevents work during recovery period',
                'benefit'     => 'Weekly/monthly compensation - typically 1% of Capital Sum Insured (CSI) per week/month, capped',
                'banner'      => 'Robust backing for income replacement during recovery.'
            ]
        ],
        'takeaway' => '<strong>Key Takeaway:</strong> These four events cover the most common risks of accidental injury and disability, ensuring you\'re protected when life takes an unexpected turn.'
    ]
];

?>

<div class="vima-pa-wrapper" id="what-is-pa">
    
    <!-- ========================================================= -->
    <!-- SECTION 01: WHAT IS PERSONAL ACCIDENT INSURANCE?          -->
    <!-- ========================================================= -->
    <section class="vima-pa-section-s1">
        <div class="vima-pa-s1-split">
            <div class="vima-pa-s1-content">
                <header class="vima-pa-header">
                    <h1 class="vima-pa-title"><?php echo esc_html($accident_page_data['section_1']['title']); ?></h1>
                    <p class="vima-pa-desc"><?php echo wp_kses_post($accident_page_data['section_1']['description']); ?></p>
                </header>

                <!-- What PA Insurance is NOT Box -->
                <div class="vima-pa-global-takeaway vima-pa-global-takeaway--not">
                    <span class="vima-pa-global-takeaway__icon" aria-hidden="true">
                        <?php echo esc_html($accident_page_data['section_1']['not_what_it_is']['icon']); ?>
                    </span>
                    <p class="vima-pa-global-takeaway__text">
                        <strong><?php echo esc_html($accident_page_data['section_1']['not_what_it_is']['title']); ?></strong>
                        <?php echo esc_html($accident_page_data['section_1']['not_what_it_is']['text']); ?>
                    </p>
                </div>
            </div>

            <div class="vima-pa-s1-image-wrap">
                <img src="<?php echo esc_url($accident_page_data['section_1']['image']); ?>" alt="Personal Accident Insurance">
            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- SECTION 02: THE FOUR EVENTS PA INSURANCE COVERS (TABS)    -->
    <!-- ========================================================= -->
    <section class="vima-pa-section-s2">
        <header class="vima-pa-header vima-pa-header--secondary">
            <h2 class="vima-pa-title-h2"><?php echo esc_html($accident_page_data['section_2']['title']); ?></h2>
            <p class="vima-pa-desc"><?php echo esc_html($accident_page_data['section_2']['subtitle']); ?></p>
        </header>

        <div class="vima-pa-stage-wrapper">
            <!-- 1. EVENT TABS TIMELINE -->
            <nav class="vima-pa-layer-timeline vima-pa-layer-timeline--events" id="vima-pa-events-tabs" role="tablist" aria-label="Four PA Events">
                <?php foreach ($accident_page_data['section_2']['events'] as $key => $event): ?>
                <button type="button" role="tab"
                    class="vima-pa-layer-step <?php echo $key === 'ad' ? 'is-active' : ''; ?>"
                    data-event="<?php echo esc_attr($key); ?>"
                    aria-selected="<?php echo $key === 'ad' ? 'true' : 'false'; ?>">
                    <span class="vima-pa-layer-step__label"><?php echo esc_html($event['short_name']); ?></span>
                </button>
                <?php endforeach; ?>
            </nav>

            <!-- 2. SIDE-BY-SIDE SPLIT CONTAINER -->
            <div class="vima-pa-stage-split">
                <!-- LEFT: IMAGE VIEWPORT WITH OVERLAY -->
                <div class="vima-pa-viewport vima-pa-viewport--compact" id="vimaPaEventViewport">
                    <img id="vimaPaEventStageImage" class="vima-pa-stage-img"
                        src="<?php echo esc_url($accident_page_data['section_2']['events']['ad']['image']); ?>"
                        alt="PA Insurance Event View">

                    <div class="vima-pa-viewport__overlay-content">
                        <span class="vima-pa-layer-badge" id="vimaPaEventBadge">
                            <?php echo esc_html($accident_page_data['section_2']['events']['ad']['badge']); ?>
                        </span>
                        <h3 class="vima-pa-viewport-title" id="vimaPaEventOverlayTitle">
                            <?php echo esc_html($accident_page_data['section_2']['events']['ad']['title']); ?>
                        </h3>
                        <p class="vima-pa-viewport-desc" id="vimaPaEventOverlayDesc">
                            <?php echo esc_html($accident_page_data['section_2']['events']['ad']['desc']); ?>
                        </p>
                    </div>
                </div>

                <!-- RIGHT: DETAILS PANEL -->
                <div class="vima-pa-side-panel vima-pa-side-panel--compact" id="vimaPaEventSidePanel">
                    <!-- What Happens -->
                    <div class="vima-pa-panel-feature">
                        <div class="vima-pa-panel-feature-icon">🛡️</div>
                        <div>
                            <span class="vima-pa-panel-feature-heading">What Happens</span>
                            <p class="vima-pa-panel-feature-text" id="vimaPaEventPanelHappens">
                                <?php echo esc_html($accident_page_data['section_2']['events']['ad']['happens']); ?>
                            </p>
                        </div>
                    </div>

                    <!-- Benefit Paid -->
                    <div class="vima-pa-panel-feature">
                        <div class="vima-pa-panel-feature-icon">🎯</div>
                        <div>
                            <span class="vima-pa-panel-feature-heading">Benefit Paid</span>
                            <p class="vima-pa-panel-feature-text" id="vimaPaEventPanelBenefit">
                                <?php echo esc_html($accident_page_data['section_2']['events']['ad']['benefit']); ?>
                            </p>
                        </div>
                    </div>

                    <!-- Bottom Callout Banner -->
                    <div class="vima-pa-panel-banner" id="vimaPaEventPanelBanner">
                        <span class="vima-pa-panel-banner-icon">🟢</span>
                        <p><?php echo esc_html($accident_page_data['section_2']['events']['ad']['banner']); ?></p>
                    </div>
                </div>
            </div>

            <!-- Global Takeaway Footer -->
            <aside class="vima-pa-global-takeaway vima-pa-global-takeaway--footer">
                <span class="vima-pa-global-takeaway__icon" aria-hidden="true">🛡️</span>
                <p class="vima-pa-global-takeaway__text">
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

    const imgEl = document.getElementById('vimaPaEventStageImage');
    const badgeEl = document.getElementById('vimaPaEventBadge');
    const overlayTitle = document.getElementById('vimaPaEventOverlayTitle');
    const overlayDesc = document.getElementById('vimaPaEventOverlayDesc');
    const tabButtons = document.querySelectorAll('#vima-pa-events-tabs .vima-pa-layer-step');

    const panelHappens = document.getElementById('vimaPaEventPanelHappens');
    const panelBenefit = document.getElementById('vimaPaEventPanelBenefit');
    const panelBanner = document.querySelector('#vimaPaEventPanelBanner p');

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
                if (overlayTitle) overlayTitle.textContent = data.title;
                if (overlayDesc) overlayDesc.textContent = data.desc;
                if (panelHappens) panelHappens.textContent = data.happens;
                if (panelBenefit) panelBenefit.textContent = data.benefit;
                if (panelBanner) panelBanner.textContent = data.banner;

                imgEl.onload = function() {
                    imgEl.classList.remove('is-switching');
                };
            }, 150);
        }
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