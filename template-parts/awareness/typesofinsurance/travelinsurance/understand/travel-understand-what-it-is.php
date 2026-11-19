<?php
// =========================================================
// VIMA VIDYA — TRAVEL INSURANCE COMPLETE SHOWCASE
// =========================================================

$theme_uri = get_template_directory_uri();

$travel_page_data = [

    // -------------------------------------------------------------
    // SECTION 01.1: What is Travel Insurance?
    // -------------------------------------------------------------
    'section_1' => [
        'subtag'         => '01.1 — START HERE',
        'title'          => 'What Is Travel Insurance?',
        'description'    => __(
            "Travel insurance is a contract between you and an insurance company where, in return for a relatively small premium, the insurer agrees to pay defined benefits if certain events disrupt or end your journey — whether that journey is from Delhi to Goa, or from Mumbai to Munich. The word 'trip' has a precise meaning in insurance: a specified journey with a declared start date, end date, and destination. The policy is activated for that journey and lapses when you return home. Every rupee of premium is calculated around that specific window of risk.",
            'vima-vidya'
        ),
        'image'          => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=600&q=80',
        'not_what_title' => 'What Travel Insurance is NOT',
        'not_what_desc'  => __(
            "Travel insurance is not the same as your health insurance. It is not a duplicate of your Mediclaim policy. It is a trip-specific contract that covers financial losses during a journey — flight delays, baggage loss, overseas medical emergencies, trip cancellation, passport loss, and more.<br><br>Health insurance covers your body every day of the year. Travel insurance activates only during the trip. But within that trip, it covers a wide range of losses your health insurer was never designed to handle — including risks that have nothing to do with your health.",
            'vima-vidya'
        )
    ],

    // -------------------------------------------------------------
    // SECTION 01.2: The Core Events (All 8 Events)
    // -------------------------------------------------------------
    'section_2' => [
        'subtag'   => '01.2 — THE CORE EVENTS',
        'title'    => 'The Core Events Travel Insurance Covers',
        'subtitle' => 'The policy provides financial support for these key events, helping you stay secure.',
        'zones'    => [
            'medical_emergency' => [
                'id'            => 'medical_emergency',
                'label'         => 'Medical Emergency',
                'badge'         => 'MEDICAL SUPPORT',
                'title'         => 'Medical Emergency',
                'desc'          => 'Provides financial support and coverage for sudden health contingencies during transit.',
                'image'         => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=800&q=80',
                'what_happens'  => 'You fall ill or are injured during the trip requiring hospitalisation',
                'benefit_paid'  => 'Medical expenses settled cashless or reimbursed up to the Medical Sum Insured',
                'summary_box'   => 'Robust backing for medical care and hospital bills during the trip.'
            ],
            'medical_evacuation' => [
                'id'            => 'medical_evacuation',
                'label'         => 'Medical Evacuation',
                'badge'         => 'EMERGENCY TRANSPORT',
                'title'         => 'Medical Evacuation',
                'desc'          => 'Arranges and funds critical emergency transport when local infrastructure fails.',
                'image'         => 'https://images.unsplash.com/photo-1516738901171-8eb4fc13bd20?auto=format&fit=crop&w=800&q=80',
                'what_happens'  => 'Local facilities cannot treat you; emergency transport to an adequately equipped hospital needed',
                'benefit_paid'  => 'Full evacuation arranged and funded by the insurer',
                'summary_box'   => 'Reliable transit backing when remote emergency transport is vital.'
            ],
            'trip_cancellation' => [
                'id'            => 'trip_cancellation',
                'label'         => 'Trip Cancellation',
                'badge'         => 'PRE-DEPARTURE',
                'title'         => 'Trip Cancellation',
                'desc'          => 'Protects non-refundable advance deposits when unforeseen emergencies force cancellation.',
                'image'         => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=800&q=80',
                'what_happens'  => 'A covered event forces you to cancel before departure',
                'benefit_paid'  => 'Non-refundable prepaid costs reimbursed up to the Trip Cancellation limit',
                'summary_box'   => 'Financial security against pre-departure non-refundable bookings.'
            ],
            'trip_delay' => [
                'id'            => 'trip_delay',
                'label'         => 'Trip Delay',
                'badge'         => 'TRANSIT PROTECTION',
                'title'         => 'Trip Delay',
                'desc'          => 'Compensates expenses during extended scheduling disruptions or transit holds.',
                'image'         => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=800&q=80',
                'what_happens'  => 'Flight or train delayed beyond the threshold period',
                'benefit_paid'  => 'Meal and accommodation expenses compensated per policy schedule',
                'summary_box'   => 'Immediate comfort backing for extended transit and connection delays.'
            ],
            'trip_interruption' => [
                'id'            => 'trip_interruption',
                'label'         => 'Trip Interruption',
                'badge'         => 'EMERGENCY RETURN',
                'title'         => 'Trip Interruption',
                'desc'          => 'Covers unexpected emergency returns home when forced to cut a trip short.',
                'image'         => 'https://images.unsplash.com/photo-1508672019048-805c876b67e2?auto=format&fit=crop&w=800&q=80',
                'what_happens'  => 'A covered emergency forces you to return home early',
                'benefit_paid'  => 'Unused prepaid costs and emergency return ticket covered',
                'summary_box'   => 'Secure support for unexpected early returns and unused days.'
            ],
            'baggage_loss' => [
                'id'            => 'baggage_loss',
                'label'         => 'Baggage Loss or Delay',
                'badge'         => 'BELONGINGS',
                'title'         => 'Baggage Loss or Delay',
                'desc'          => 'Covers permanent luggage loss or provides emergency purchase support.',
                'image'         => 'https://images.unsplash.com/photo-1569154941061-e231b4725ef1?auto=format&fit=crop&w=800&q=80',
                'what_happens'  => 'Checked baggage permanently lost or delayed beyond threshold',
                'benefit_paid'  => 'Replacement compensation or emergency purchase reimbursement up to sub-limit',
                'summary_box'   => 'Secure backing for lost checked items and emergency necessities.'
            ],
            'personal_accident' => [
                'id'            => 'personal_accident',
                'label'         => 'Personal Accident',
                'badge'         => 'ACCIDENT SECURITY',
                'title'         => 'Personal Accident',
                'desc'          => 'Provides lump sum coverage for accidental severe injuries or loss of life.',
                'image'         => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80',
                'what_happens'  => 'You die or suffer permanent disability in an accident during the trip',
                'benefit_paid'  => 'Lump sum benefit per the policy schedule',
                'summary_box'   => 'Comprehensive life and disability safeguard during active journeys.'
            ],
            'personal_liability' => [
                'id'            => 'personal_liability',
                'label'         => 'Personal Liability',
                'badge'         => 'THIRD-PARTY SHIELD',
                'title'         => 'Personal Liability',
                'desc'          => 'Protects you legally if you accidentally cause injury or property damage.',
                'image'         => 'https://images.unsplash.com/photo-1533587851505-d119e13fa0d7?auto=format&fit=crop&w=800&q=80',
                'what_happens'  => 'You accidentally injure a third party or damage their property',
                'benefit_paid'  => 'Legal liability costs covered up to the Personal Liability limit',
                'summary_box'   => 'Financial safeguard against third-party claims and liabilities.'
            ]
        ],
        'takeaway' => 'Travel insurance pays for the trip that went wrong — delays, lost bags, overseas hospital bills, cancelled holidays, stolen passports. Your health insurance was never designed for these. Each product has its own territory. Travel insurance is the territory of the journey.'
    ]
];
?>

<div class="vv-travel-insurance-wrapper" id="what-is-travel-insurance">

    <!-- ========================================================= -->
    <!-- SECTION 01.1: What Is Travel Insurance?                     -->
    <!-- ========================================================= -->
    <section class="vv-travel-insurance-section-s1">
        <div class="vv-travel-insurance-single-card">
            <div class="vv-travel-insurance-content-area">
                <!-- <span class="vv-travel-insurance-subtag"><?php echo esc_html($travel_page_data['section_1']['subtag']); ?></span> -->
                <h1 class="vv-travel-insurance-title"><?php echo esc_html($travel_page_data['section_1']['title']); ?></h1>
                <p class="vv-travel-insurance-desc"><?php echo wp_kses_post($travel_page_data['section_1']['description']); ?></p>

                <div class="vv-travel-insurance-inline-callout">
                    <div class="vv-travel-insurance-inline-callout__header">
                        <span class="vv-travel-insurance-inline-callout__icon" aria-hidden="true">💡</span>
                        <h4 class="vv-travel-insurance-inline-callout__title"><?php echo esc_html($travel_page_data['section_1']['not_what_title']); ?></h4>
                    </div>
                    <p class="vv-travel-insurance-inline-callout__text"><?php echo wp_kses_post($travel_page_data['section_1']['not_what_desc']); ?></p>
                </div>
            </div>

            <div class="vv-travel-insurance-media-area">
                <img src="<?php echo esc_url($travel_page_data['section_1']['image']); ?>" alt="Travel Insurance Concept" loading="lazy">
            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- SECTION 01.2: The Core Events (All 8 Events)              -->
    <!-- ========================================================= -->
    <section class="vv-travel-insurance-section-s2">
        <header class="vv-travel-insurance-header vv-travel-insurance-header--secondary">
            <!-- <span class="vv-travel-insurance-subtag"><?php echo esc_html($travel_page_data['section_2']['subtag']); ?></span> -->
            <h2 class="vv-travel-insurance-title-h2"><?php echo esc_html($travel_page_data['section_2']['title']); ?></h2>
            <p class="vv-travel-insurance-desc"><?php echo esc_html($travel_page_data['section_2']['subtitle']); ?></p>
        </header>

        <!-- Pill Navigation Bar -->
        <div class="vv-pa-tabs-nav" role="tablist" aria-label="Travel Coverage Events">
            <?php $i = 0; foreach ($travel_page_data['section_2']['zones'] as $key =>$zone): ?>
            <button type="button" role="tab"
                class="vv-pa-tab-btn <?php echo $i === 0 ? 'is-active' : ''; ?>"
                data-target="<?php echo esc_attr($key); ?>"
                aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>">
                <?php echo esc_html($zone['label']); ?>
            </button>
            <?php $i++; endforeach; ?>
        </div>

        <!-- Main Split Stage Container -->
        <div class="vv-pa-stage-container">
            <div class="vv-pa-visual-card" id="vvPaVisualCard">
                <img id="vvPaCardImage" src="<?php echo esc_url($travel_page_data['section_2']['zones']['medical_emergency']['image']); ?>" alt="Coverage Visual" loading="lazy">
                <div class="vv-pa-visual-card__overlay-content">
                    <span class="vv-pa-badge" id="vvPaCardBadge"><?php echo esc_html($travel_page_data['section_2']['zones']['medical_emergency']['badge']); ?></span>
                    <h3 class="vv-pa-card-title" id="vvPaCardTitle"><?php echo esc_html($travel_page_data['section_2']['zones']['medical_emergency']['title']); ?></h3>
                    <p class="vv-pa-card-desc" id="vvPaCardDesc"><?php echo esc_html($travel_page_data['section_2']['zones']['medical_emergency']['desc']); ?></p>
                </div>
            </div>

            <div class="vv-pa-details-panel">
                <div class="vv-pa-detail-row">
                    <div class="vv-pa-icon-box" aria-hidden="true">🛡️</div>
                    <div>
                        <span class="vv-pa-label-title">What Happens</span>
                        <p class="vv-pa-label-text" id="vvPaWhatHappens"><?php echo esc_html($travel_page_data['section_2']['zones']['medical_emergency']['what_happens']); ?></p>
                    </div>
                </div>

                <div class="vv-pa-detail-row">
                    <div class="vv-pa-icon-box" aria-hidden="true">🎯</div>
                    <div>
                        <span class="vv-pa-label-title">Benefit Paid</span>
                        <p class="vv-pa-label-text" id="vvPaBenefitPaid"><?php echo esc_html($travel_page_data['section_2']['zones']['medical_emergency']['benefit_paid']); ?></p>
                    </div>
                </div>

                <div class="vv-pa-summary-box">
                    <span class="vv-pa-summary-dot" aria-hidden="true"></span>
                    <p class="vv-pa-summary-text" id="vvPaSummaryText"><?php echo esc_html($travel_page_data['section_2']['zones']['medical_emergency']['summary_box']); ?></p>
                </div>
            </div>
        </div>

        <aside class="vv-travel-insurance-global-takeaway vv-travel-insurance-global-takeaway--s2">
            <span class="vv-travel-insurance-global-takeaway__icon" aria-hidden="true">✅</span>
            <p class="vv-travel-insurance-global-takeaway__text"><?php echo wp_kses_post($travel_page_data['section_2']['takeaway']); ?></p>
        </aside>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const zonesData = <?php echo json_encode($travel_page_data['section_2']['zones'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
    const tabButtons = document.querySelectorAll('.vv-pa-tab-btn');

    const cardImage = document.getElementById('vvPaCardImage');
    const cardBadge = document.getElementById('vvPaCardBadge');
    const cardTitle = document.getElementById('vvPaCardTitle');
    const cardDesc = document.getElementById('vvPaCardDesc');
    
    const whatHappensEl = document.getElementById('vvPaWhatHappens');
    const benefitPaidEl = document.getElementById('vvPaBenefitPaid');
    const summaryTextEl = document.getElementById('vvPaSummaryText');

    function switchPaTab(targetKey) {
        if (!zonesData || !zonesData[targetKey]) return;
        const data = zonesData[targetKey];

        tabButtons.forEach(btn => {
            const isActive = btn.getAttribute('data-target') === targetKey;
            btn.classList.toggle('is-active', isActive);
            btn.setAttribute('aria-selected', isActive ? 'true' : 'false');
        });

        if (cardImage) {
            cardImage.style.opacity = '0.3';
            setTimeout(() => {
                cardImage.src = data.image;
                if (cardBadge) cardBadge.textContent = data.badge;
                if (cardTitle) cardTitle.textContent = data.title;
                if (cardDesc) cardDesc.textContent = data.desc;
                if (whatHappensEl) whatHappensEl.textContent = data.what_happens;
                if (benefitPaidEl) benefitPaidEl.textContent = data.benefit_paid;
                if (summaryTextEl) summaryTextEl.textContent = data.summary_box;
                cardImage.style.opacity = '1';
            }, 150);
        }
    }

    if (tabButtons.length) {
        tabButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                switchPaTab(this.getAttribute('data-target'));
            });
        });
    }
});
</script>