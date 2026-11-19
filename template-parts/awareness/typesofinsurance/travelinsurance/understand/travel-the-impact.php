<?php
/**
 * SECTION — TRAVEL INSURANCE IMPACT SHOWCASE
 * Module: Travel Insurance Impact Comparison (With vs. Without Cover)
 */

$travel_personas = [
    'international' => [
        'id'             => 'international',
        'tab_title'      => 'International Holiday',
        'tag'            => 'International Trip',
        'name'           => 'Rajesh',
        'location_age'   => 'Europe, age 44',
        'coverage_badge' => '$100K+',
        'image_url'      => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=700&q=80',
        'scenario_title' => 'SCENARIO — MEDICAL EMERGENCY ABROAD',
        'scenario_text'  => "You are 44, the family's main earner, on a 10-day family holiday in Europe.",
        'highlight_box'  => 'Medical Emergency Abroad — cardiac event in Germany requires <strong>5 days</strong> in hospital (₹25–40 lakh bill)',
        'items'          => [
            [
                'label'         => 'Hospitalization & bills',
                'with_cover'    => "The insurer's team authorises cashless treatment before you are even admitted. Your family pays nothing at the hospital.",
                'without_cover' => 'A cardiac event in Germany puts you in hospital for 5 days. The bill: ₹25–40 lakh. You pay from savings and family loans',
            ],
            [
                'label'         => 'Family coordination & assistance',
                'with_cover'    => "The insurer's assistance team handles the hospital admission, keeps your family informed in real time, and assigns an English-speaking case manager on the ground.",
                'without_cover' => 'Your family in India has no idea which hospital to use, who to call, or how to arrange payment. They are on their own.',
            ],
            [
                'label'         => 'Medical repatriation',
                'with_cover'    => 'The insurer arranges and pays for your medical repatriation to India the moment you are fit to travel.',
                'without_cover' => 'Once you are stable, getting home requires a medical-grade flight with a doctor on board. Cost: ₹18–35 lakh. Your family cannot raise the money. You stay longer than necessary.',
            ],
            [
                'label'         => 'Trip interruption & bookings',
                'with_cover'    => "The Trip Interruption benefit covers your family's emergency return travel and reimburses the unused prepaid costs.",
                'without_cover' => 'Your return flights, prepaid hotel nights, and booked tours are forfeited. None of it is refundable.',
            ],
            [
                'label'         => 'Financial impact & savings',
                'with_cover'    => 'Your financial position is exactly where you left it. A medical emergency abroad does not come home with you as a financial crisis.',
                'without_cover' => "Your savings are wiped out. Your home loan EMI is under strain. You dip into your children's education fund for the first time.",
            ],
        ],
    ],
    'pilgrimage' => [
        'id'             => 'pilgrimage',
        'tab_title'      => 'Domestic Pilgrimage',
        'tag'            => 'Domestic Trek',
        'name'           => 'Anand',
        'location_age'   => 'Uttarakhand, age 58',
        'coverage_badge' => '₹10L',
        'image_url'      => 'https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=700&q=80',
        'scenario_title' => 'SCENARIO — DOMESTIC PILGRIMAGE',
        'scenario_text'  => 'You are 58, on the Char Dham Yatra in Uttarakhand.',
        'highlight_box'  => 'Domestic Pilgrimage Emergency — medical evacuation and disruption during <strong>Char Dham Yatra</strong>',
        'items'          => [
            [
                'label'         => 'Emergency evacuation',
                'with_cover'    => 'The Medical Evacuation benefit covers the helicopter and the ground ambulance to hospital. Your family pays nothing.',
                'without_cover' => 'Altitude sickness at Badrinath. You need an emergency helicopter to get down to Rishikesh. Your family receives a bill for ₹1.5 lakh.',
            ],
            [
                'label'         => 'Treatment & cashless access',
                'with_cover'    => "Emergency medical expenses are covered. The insurer's 24/7 helpline coordinates your treatment regardless of which hospital you are in.",
                'without_cover' => "The hospital in Rishikesh is not on your regular health insurer's cashless list. You pay ₹80,000 out of pocket and hope to claim later — if at all.",
            ],
            [
                'label'         => 'Trip curtailment refund',
                'with_cover'    => 'The Trip Curtailment benefit reimburses the unused portion of your prepaid yatra costs.',
                'without_cover' => 'You had paid ₹45,000 for a prepaid Char Dham package. The yatra ends midway. The organiser refunds nothing.',
            ],
            [
                'label'         => 'Family travel assistance',
                'with_cover'    => "Emergency Family Travel Assistance covers a family member's travel cost to reach you in a medical emergency.",
                'without_cover' => 'Your spouse flies in from home to be with you. Last-minute flights: ₹22,000 — unplanned, unavoidable, and entirely out of pocket.',
            ],
        ],
    ],
    'cancellation' => [
        'id'             => 'cancellation',
        'tab_title'      => 'Trip Cancellation',
        'tag'            => 'Pre-Trip Emergency',
        'name'           => 'Priya',
        'location_age'   => 'Solo Trip, age 35',
        'coverage_badge' => '₹2L',
        'image_url'      => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=700&q=80',
        'scenario_title' => 'SCENARIO — TRIP CANCELLATION',
        'scenario_text'  => 'You are 35, planning a solo international trip. Total spend so far: ₹1.2 lakh.',
        'highlight_box'  => 'Trip Cancellation — family medical emergency forces cancellation of <strong>₹1.2 lakh</strong> trip',
        'items'          => [
            [
                'label'         => 'Flight cancellation refund',
                'with_cover'    => "The Trip Cancellation benefit pays out for exactly this situation. A close family member's hospitalisation is a covered reason for cancellation.",
                'without_cover' => 'Your mother is hospitalised three days before you were due to fly. You cancel the trip. The airline does not give you a refund — only a travel credit that expires in 12 months.',
            ],
            [
                'label'         => 'Non-refundable hotel costs',
                'with_cover'    => "All prepaid, non-refundable hotel and tour costs are reimbursed up to the policy's cancellation limit.",
                'without_cover' => 'The hotel took full payment upfront and has a no-refund policy within 7 days of check-in. ₹28,000 gone.',
            ],
            [
                'label'         => 'Claim settlement & recovery',
                'with_cover'    => 'You submit the hospital certificate and your booking documents. The claim is settled within 10–15 working days. You get your money back.',
                'without_cover' => 'Total loss: ₹88,000. The money you had saved for this holiday disappears in a single afternoon through no fault of your own.',
            ],
        ],
    ],
];
?>

<section class="pi-wrapper">
    <div class="pi-section-s7 travel-impact-showcase" data-cover-state="with-cover">
        <div class="pi-container">

            <header class="pi-header">
                <h2 class="policy-impact-title">The Impact of Having vs Not Having Travel Insurance</h2>
                <br>
                <h3 class="pi-desc">The financial consequences of a travel emergency ripple through a family for months — sometimes years.</h3>
            </header>

            <!-- TOOLBAR: PERSONA TABS + COVER SWITCH TOGGLE -->
            <div class="pi-toolbar">
                <nav class="pi-tabs" role="tablist" aria-label="Select Travel Persona">
                    <?php foreach ($travel_personas as $key => $p): ?>
                        <button 
                            type="button" 
                            role="tab"
                            class="pi-tab-btn <?php echo $key === 'international' ? 'is-active' : ''; ?>"
                            data-target="<?php echo htmlspecialchars($p['id']); ?>"
                            aria-selected="<?php echo $key === 'international' ? 'true' : 'false'; ?>">
                            <?php echo htmlspecialchars($p['tab_title']); ?>
                        </button>
                    <?php endforeach; ?>
                </nav>

                <div class="pi-toggle-switch" role="group" aria-label="Cover status switcher">
                    <button type="button" class="pi-toggle-btn is-active" data-state="with-cover">
                        <span class="pi-dot pi-dot--with"></span> WITH COVER
                    </button>
                    <button type="button" class="pi-toggle-btn" data-state="without-cover">
                        <span class="pi-dot pi-dot--without"></span> WITHOUT COVER
                    </button>
                </div>
            </div>

            <!-- PANES -->
            <div class="pi-panes">
                <?php foreach ($travel_personas as $key => $p): ?>
                    <div class="pi-pane <?php echo $key === 'international' ? 'is-active' : ''; ?>" id="pi-pane-<?php echo htmlspecialchars($p['id']); ?>">
                        
                        <!-- Left: Emphasized Profile & Scenario Card -->
                        <div class="pi-profile-card pi-profile-card--emphasized">
                            <div class="pi-profile-media">
                                <?php if (!empty($p['image_url'])): ?>
                                    <img src="<?php echo htmlspecialchars($p['image_url']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>" class="pi-profile-img">
                                <?php else: ?>
                                    <div class="pi-profile-placeholder"></div>
                                <?php endif; ?>
                                <span class="pi-badge-tag"><?php echo htmlspecialchars($p['tag']); ?></span>
                                
                                <div class="pi-profile-overlay">
                                    <div class="pi-profile-meta">
                                        <h3 class="pi-profile-name"><?php echo htmlspecialchars($p['name']); ?></h3>
                                        <p class="pi-profile-location"><?php echo htmlspecialchars($p['location_age']); ?></p>
                                    </div>
                                    <span class="pi-badge-amt"><?php echo htmlspecialchars($p['coverage_badge']); ?></span>
                                </div>
                            </div>

                            <div class="pi-profile-scenario">
                                <span class="pi-scenario-tag"><?php echo htmlspecialchars($p['scenario_title']); ?></span>
                                <p class="pi-scenario-desc"><?php echo htmlspecialchars($p['scenario_text']); ?></p>
                            </div>
                        </div>

                        <!-- Right: Consolidated Single Box Breakdown Card -->
                        <div class="pi-right-column">
                            <div class="pi-loss-banner">
                                <?php echo $p['highlight_box']; ?>
                            </div>

                            <div class="pi-breakdown-card pi-breakdown-card--unified">
                                <ul class="pi-breakdown-list">
                                    <?php foreach ($p['items'] as $item): ?>
                                        <li class="pi-breakdown-row">
                                            <div class="pi-breakdown-label">
                                                <?php echo htmlspecialchars($item['label']); ?>
                                            </div>
                                            
                                            <div class="pi-outcome pi-outcome--with">
                                                <svg class="pi-icon pi-icon--check" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span><?php echo $item['with_cover']; ?></span>
                                            </div>

                                            <div class="pi-outcome pi-outcome--without">
                                                <svg class="pi-icon pi-icon--cross" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                                                </svg>
                                                <span><?php echo $item['without_cover']; ?></span>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

            <!-- KEY TAKEAWAY CARD -->
            <div class="pi-takeaway-card">
                <div class="pi-takeaway-icon-box">
                    <svg class="pi-takeaway-icon" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <div class="pi-takeaway-content">
                    <p class="pi-takeaway-lead">
                        <strong>Key Takeaway:</strong> There is no perfect age to buy travel insurance — only the age you are when the trip happens.
                    </p>
                    <p class="pi-takeaway-body">
                        Premiums are modest at every stage. The consequences of travelling without cover are not. Buy before departure. Every time.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var section = document.querySelector('.travel-impact-showcase');
        if (!section) return;

        var toggles = section.querySelectorAll('.pi-toggle-btn');
        toggles.forEach(function (btn) {
            btn.addEventListener('click', function () {
                var state = btn.getAttribute('data-state');
                section.setAttribute('data-cover-state', state);

                toggles.forEach(function (b) { b.classList.remove('is-active'); });
                btn.classList.add('is-active');
            });
        });

        var tabs = section.querySelectorAll('.pi-tab-btn');
        var panes = section.querySelectorAll('.pi-pane');

        tabs.forEach(function (btn) {
            btn.addEventListener('click', function () {
                var targetId = btn.getAttribute('data-target');

                tabs.forEach(function (b) {
                    b.classList.remove('is-active');
                    b.setAttribute('aria-selected', 'false');
                });
                btn.classList.add('is-active');
                btn.setAttribute('aria-selected', 'true');

                panes.forEach(function (p) {
                    if (p.id === 'pi-pane-' + targetId) {
                        p.classList.add('is-active');
                    } else {
                        p.classList.remove('is-active');
                    }
                });
            });
        });
    });
</script>