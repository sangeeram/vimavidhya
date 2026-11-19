<?php
/**
 * Template Part: What to Consider When Choosing a Travel Policy
 * Theme: Vima Vidya Custom Theme (Light Blue Background + Left Sidebar Buttons + Right White Card)
 */

$policy_considerations = [
    'medical_sum' => [
        'id'          => 'medical_sum',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
        'tab_label_1' => '1. Medical Sum Insured',
        'tab_label_2' => 'Foundation of Your Cover',
        'badge'       => 'Valuation',
        'title'       => 'Medical Sum Insured — The Foundation of Your Cover',
        'subtitle'    => 'The medical sum insured is the maximum the insurer will pay for hospital bills, treatment, and emergency care during the trip. For international travel, this is the single most critical number — and the one most buyers compromise on to save a few hundred rupees of premium.',
        'content_type'=> 'single_focus',
        'heading'     => 'How to determine the right Medical Sum Insured:',
        'text'        => 'Domestic trips: minimum ₹5 lakh; ₹10 lakh strongly preferred for pilgrimages or remote treks. International Asia: minimum USD 100,000. International USA, Canada, Australia, Europe: minimum USD 250,000. One complex surgical event can exceed this. Senior travellers internationally: USD 500,000 or more. A single cardiac ICU stay in the USA can reach USD 200,000–400,000. The cost difference between USD 100,000 and USD 250,000 for a 14-day Europe trip is typically ₹300–₹600. This is not where you should economise.',
        'callout'     => null
    ],
    'scope_cover' => [
        'id'          => 'scope_cover',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>',
        'tab_label_1' => '2. Scope of Cover',
        'tab_label_2' => 'What Events Are Included?',
        'badge'       => 'Coverage Scope',
        'title'       => 'Scope of Cover — What Events Are Included?',
        'subtitle'    => 'When comparing policies, examine every operational boundary to avoid nasty surprises during emergencies.',
        'content_type'=> 'single_focus',
        'heading'     => 'Key Scope Questions to Check Before Purchasing:',
        'text'        => 'Is Medical Evacuation explicitly listed, including helicopter? What are the covered reasons for Trip Cancellation and maximum reimbursement? What is the baggage sub-limit per item? What are the delay thresholds — 3 hours or 6 hours? Are adventure sports covered or excluded?',
        'callout'     => null
    ],
    'exclusions' => [
        'id'          => 'exclusions',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'tab_label_1' => '3. Policy Exclusions',
        'tab_label_2' => 'What Will NOT Be Paid',
        'badge'       => 'Exclusions',
        'title'       => 'Exclusions — What the Policy Will NOT Pay For',
        'subtitle'    => 'Every travel policy has a list of exclusions. Reading this section is not optional — it defines the real boundaries of your protection.',
        'content_type'=> 'list_box',
        'heading'     => 'Standard Policy Exclusions Include:',
        'items'       => [
            'Pre-existing medical conditions (unless a PED waiver is purchased and the stability clause is satisfied)',
            'Adventure sports and high-risk activities above specified altitudes or of specified types',
            'Elective or planned medical treatment abroad — travel insurance covers emergencies only',
            'Losses caused by the insured\'s own actions — delayed arrival, failure to obtain visas or documents',
            'Travel to countries under Ministry of External Affairs advisories',
            'Injury under influence of alcohol or drugs',
            'Incidents that occurred before the policy start date'
        ],
        'callout'     => [
            'type'  => 'success',
            'title' => 'The Most Common Cause of Travel Claim Disputes',
            'text'  => 'Non-disclosure of a pre-existing medical condition is the single most frequent reason travel insurance claims are disputed or rejected. Insurers investigate and review hospital records, discharge summaries, and treatment histories during claims assessment. Declare everything. The premium difference for a PED waiver is far smaller than the cost of a rejected claim.'
        ]
    ],
    'activity_profile' => [
        'id'          => 'activity_profile',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>',
        'tab_label_1' => '4. Activity Profile',
        'tab_label_2' => 'Trip Type & Risk Matching',
        'badge'       => 'Activity Matrix',
        'title'       => 'Occupational and Activity Profile — How Your Trip Type Affects Coverage',
        'subtitle'    => 'Different travel styles carry unique hazard profiles. Match your policy parameters directly to your itinerary.',
        'content_type'=> 'table_split',
        'intro'       => 'Trip Type and Standard Coverage Alignment:',
        'table_headers' => ['Trip / Activity Type', 'Standard Policy Covers?', 'Action Required'],
        'table_rows'  => [
            ['Urban leisure travel — cities, resorts, tourist sites', 'Yes — fully covered under standard plan', 'No additional action'],
            ['Domestic pilgrimage — Char Dham, Vaishno Devi, Amarnath', 'Yes — but check evacuation cover specifically', 'Confirm helicopter evacuation is explicitly listed in your domestic plan'],
            ['Trekking in Uttarakhand or Himachal Pradesh', 'Partially — often excludes above 3,500–4,000 metres', 'Buy Adventure Sports Add-On; confirm the altitude limit in your specific plan'],
            ['White-water rafting, paragliding, bungee jumping', 'No — specifically excluded in standard plans', 'Adventure Sports Add-On mandatory; declare the activity explicitly at purchase'],
            ['Scuba diving, deep-sea fishing', 'No — specifically excluded in standard plans', 'Adventure Sports Add-On mandatory; declare activity and maximum depth'],
            ['Business travel with meetings and conferences', 'Yes — standard medical and delay cover applies', 'Confirm personal trips are covered if using a personal plan']
        ],
        'callout'     => null
    ],
    'addons' => [
        'id'          => 'addons',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'tab_label_1' => '5. Add-ons & Riders',
        'tab_label_2' => 'Customising Protection',
        'badge'       => 'Riders & Enhancements',
        'title'       => 'Add-ons and Riders Worth Understanding',
        'subtitle'    => 'Tailor your policy breadth using structured extensions designed for specific risk profiles.',
        'content_type'=> 'table_split',
        'intro'       => 'Available Add-ons and Ideal Use Cases:',
        'table_headers' => ['Add-on', 'What It Does', 'Best For'],
        'table_rows'  => [
            ['Adventure Sports Cover', 'Extends cover to injuries during trekking above specified altitudes, scuba, paragliding, bungee, rafting', 'Outdoor enthusiasts; trekkers; anyone with non-standard physical activity planned'],
            ['Pre-Existing Disease (PED) Waiver', 'Covers medical events connected to declared pre-existing conditions, subject to stability clause', 'Anyone with hypertension, diabetes, cardiac history, or any ongoing medical treatment'],
            ['Cancel for Any Reason (CFAR)', 'Reimburses a percentage of trip cost for cancellations not covered by standard covered reasons', 'Travellers with uncertain schedules; expensive multi-city international trips'],
            ['Compassionate Visit', 'Economy airfare for a family member to reach you if you are hospitalised abroad for 5+ days', 'Solo travellers; elderly travellers; anyone without family at the destination'],
            ['Emergency Cash Advance', 'Advances cash if wallet and cards are stolen (recovered from final settlement)', 'International travellers; long trips; solo travel'],
            ['Repatriation of Mortal Remains', 'Covers cost of transporting a deceased traveller\'s body back to India', 'All international travellers — especially those above 50'],
            ['Study Interruption Benefit', 'Reimburses deferred semester fees if a medical event forces the student to interrupt studies', 'Students travelling for academic programmes abroad'],
            ['Hospital Daily Cash', 'Fixed daily amount for each day hospitalised abroad — covers incidental expenses', 'Senior travellers; longer international trips']
        ],
        'callout'     => [
            'type'  => 'success',
            'title' => 'Key Takeaway — Family Protection',
            'text'  => 'The best policy is one your family can depend on in the worst moment of the journey. Buy thoughtfully. Brief your family. Tell your nominee where the policy is stored, what the policy number is, and which helpline to call. This takes five minutes and matters enormously.'
        ]
    ]
];
?>

<section class="asset-tabs-section" id="evaluate-policy-considerations">
    <div class="container-wide">

        <!-- HEADER -->
        <div class="section-header">
            <h2 class="h2 text-navy m-t-12">
                What to Consider When Choosing a Policy
            </h2>
            <p class="text-body-med max-w-800 m-t-16">
                Travel insurance policies look similar on comparison websites. They are not. The difference between a policy that pays and one that disappoints at claim time lies in five specific areas that most buyers never examine before purchasing.
            </p>
        </div>

        <!-- LAYOUT CONTAINER: LEFT SIDEBAR BUTTONS + RIGHT WHITE CARD -->
        <div class="stage-layout-wrapper m-t-32">
            
            <!-- LEFT SIDEBAR NAVIGATION BUTTONS -->
            <div class="stage-nav-sidebar" role="tablist">
                <?php $i = 0; ?>
                <?php foreach ($policy_considerations as $key => $data): ?>
                    <button
                        type="button"
                        class="stage-tab-btn <?= $i === 0 ? 'active' : ''; ?>"
                        data-tab="<?= htmlspecialchars($key); ?>"
                        role="tab"
                        aria-selected="<?= $i === 0 ? 'true' : 'false'; ?>"
                    >
                        <span class="tab-icon-wrap"><?= $data['tab_icon']; ?></span>
                        <div class="tab-text-wrap">
                            <span class="tab-label-main"><?= htmlspecialchars($data['tab_label_1']); ?></span>
                            <?php if (!empty($data['tab_label_2'])): ?>
                                <span class="tab-label-sub"><?= htmlspecialchars($data['tab_label_2']); ?></span>
                            <?php endif; ?>
                        </div>
                    </button>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>

            <!-- RIGHT CONTENT PANELS -->
            <div class="stage-content-container">
                <?php $i = 0; ?>
                <?php foreach ($policy_considerations as $key => $data): ?>
                    <div
                        class="stage-panel <?= $i === 0 ? 'active' : ''; ?>"
                        id="policy-panel-<?= htmlspecialchars($key); ?>"
                        role="tabpanel"
                        aria-hidden="<?= $i === 0 ? 'false' : 'true'; ?>"
                    >
                        <div class="stage-split-card">
                            
                            <!-- CARD HEADER -->
                            <div class="stage-card-header">
                                <span class="stage-badge"><?= htmlspecialchars($data['badge']); ?></span>
                                <h3><?= htmlspecialchars($data['title']); ?></h3>
                                <p class="stage-subtitle"><?= htmlspecialchars($data['subtitle']); ?></p>
                            </div>

                            <hr class="stage-divider" />

                            <!-- CONTENT BODY -->
                            <div class="stage-body-content">
                                <?php if (!empty($data['intro'])): ?>
                                    <h4 class="section-sub-title"><?= htmlspecialchars($data['intro']); ?></h4>
                                <?php endif; ?>

                                <!-- VARIANT: TABLE SPLIT -->
                                <?php if ($data['content_type'] === 'table_split' && !empty($data['table_rows'])): ?>
                                    <div class="policy-table-wrapper m-t-16">
                                        <table class="policy-risk-table">
                                            <thead>
                                                <tr>
                                                    <?php foreach ($data['table_headers'] as $th): ?>
                                                        <th><?= htmlspecialchars($th); ?></th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data['table_rows'] as $row): ?>
                                                    <tr>
                                                        <?php foreach ($row as $cell_idx => $cell): ?>
                                                            <td>
                                                                <?php if ($cell_idx === 0): ?>
                                                                    <strong><?= htmlspecialchars($cell); ?></strong>
                                                                <?php else: ?>
                                                                    <?= htmlspecialchars($cell); ?>
                                                                <?php endif; ?>
                                                            </td>
                                                        <?php endforeach; ?>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php endif; ?>

                                <!-- VARIANT: SINGLE FOCUS -->
                                <?php if ($data['content_type'] === 'single_focus'): ?>
                                    <div class="single-focus-box m-t-16">
                                        <?php if (!empty($data['heading'])): ?>
                                            <h4 class="section-sub-title"><?= htmlspecialchars($data['heading']); ?></h4>
                                        <?php endif; ?>
                                        <p class="desc-text"><?= htmlspecialchars($data['text']); ?></p>
                                    </div>
                                <?php endif; ?>

                                <!-- VARIANT: LIST BOX -->
                                <?php if ($data['content_type'] === 'list_box' && !empty($data['items'])): ?>
                                    <div class="single-focus-box m-t-16">
                                        <?php if (!empty($data['heading'])): ?>
                                            <h4 class="section-sub-title"><?= htmlspecialchars($data['heading']); ?></h4>
                                        <?php endif; ?>
                                        <ul class="policy-bullet-list">
                                            <?php foreach ($data['items'] as $item): ?>
                                                <li><?= htmlspecialchars($item); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- CALLOUT BOX -->
                            <?php if (!empty($data['callout'])): ?>
                                <div class="policy-callout-box <?= htmlspecialchars($data['callout']['type']); ?> m-t-24">
                                    <div class="callout-icon">⚠️</div>
                                    <div class="callout-content">
                                        <strong><?= htmlspecialchars($data['callout']['title']); ?></strong>
                                        <p><?= htmlspecialchars($data['callout']['text']); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
</section>

<!-- TAB SWITCHING SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const section = document.querySelector('#evaluate-policy-considerations');
    if (!section) return;

    const buttons = section.querySelectorAll('.stage-tab-btn');
    const panels = section.querySelectorAll('.stage-panel');

    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            const target = this.dataset.tab;

            buttons.forEach(function (btn) {
                btn.classList.remove('active');
                btn.setAttribute('aria-selected', 'false');
            });

            panels.forEach(function (panel) {
                panel.classList.remove('active');
                panel.setAttribute('aria-hidden', 'true');
            });

            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');

            const targetPanel = section.querySelector('#policy-panel-' + target);
            if (targetPanel) {
                targetPanel.classList.add('active');
                targetPanel.setAttribute('aria-hidden', 'false');
            }
        });
    });
});
</script>