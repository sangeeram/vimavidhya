<?php
/**
 * Template Part: What to Consider When Buying a Policy
 * Theme: Vima Vidya Custom Theme (Light Blue Background + Left Sidebar Buttons + Right White Card)
 */

$policy_considerations = [
    'idv' => [
        'id'          => 'idv',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
        'tab_label_1' => '1. IDV Strategy',
        'tab_label_2' => 'Valuation & Cover Foundation',
        'badge'       => 'Valuation',
        'title'       => 'Insured Declared Value (IDV) — The Foundation of Your OD Cover',
        'subtitle'    => '',
        'content_type'=> 'table_split',
        'intro'       => '',
        'table_headers' => ['Your IDV Decision', 'Short-Term Effect', 'Long-Term Consequence'],
        'table_rows'  => [
            ['Set IDV artificially low (to reduce OD premium)', 'Slightly lower premium today', 'If vehicle is stolen or declared total loss, you receive less than its actual worth'],
            ['Set IDV accurately at current market value', 'Correct premium', 'Full protection at total loss or theft; no under-insurance gap'],
            ['Set IDV artificially high', 'Higher premium (wasteful)', 'Insurer pays market value regardless; you cannot claim more than actual value']
        ],
        'callout'     => null
    ],
    'network' => [
        'id'          => 'network',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>',
        'tab_label_1' => '2. Garage Network',
        'tab_label_2' => 'Cashless Settlement Density',
        'badge'       => 'Settlements',
        'title'       => 'Cashless Garage Network & Claim Settlement',
        'subtitle'    => '',
        'content_type'=> 'single_focus',
        'heading'     => '',
        'text'        => 'Cashless settlement is only available at authorised network garages. Before buying, confirm: How many cashless garages are within 10 km of my home and office? Is my vehicle brand\'s authorised service centre in the network? A thin local network means paying out of pocket at claim time and filing for reimbursement.',
        'callout'     => null
    ],
    'csr' => [
        'id'          => 'csr',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'tab_label_1' => '3. Insurer Claim Settlement Ratio',
        'tab_label_2' => 'Reliability & Consistency',
        'badge'       => 'Reliability',
        'title'       => 'Claim Settlement Ratio (CSR) & Insurer Consistency',
        'subtitle'    => '',
        'content_type'=> 'single_focus',
        'heading'     => '',
        'text'        => 'The Claim Settlement Ratio represents the percentage of claims successfully settled out of all claims received by the insurer in a financial year. While a single year with a high ratio can be misleading, consistent performance above 85% over three consecutive years indicates robust financial health, disciplined underwriting, and customer-first claims processing.',
        'callout'     => null
    ],
    'deductibles' => [
        'id'          => 'deductibles',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>',
        'tab_label_1' => '4. Deductibles',
        'tab_label_2' => 'Statutory Requirements',
        'badge'       => 'Statutory',
        'title'       => 'Compulsory Deductible Requirements',
        'subtitle'    => '',
        'content_type'=> 'table_split',
        'intro'       => '',
        'table_headers' => ['Vehicle Type', 'Compulsory Deductible (IRDAI Fixed)', 'Impact on Every Claim'],
        'table_rows'  => [
            ['Private cars up to 1500cc', 'As per IRDAI norms', 'First portion of every own-damage claim is your personal expense'],
            ['Private cars above 1500cc', 'As per IRDAI norms', 'First portion of every own-damage claim is your personal expense'],
            ['Two-wheelers', 'As per IRDAI norms', 'First portion of every own-damage claim is your personal expense']
        ],
        'callout'     => null
    ],
    'savings' => [
        'id'          => 'savings',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="23 21v-2a4 4 0 0 0-3-3.87"/><path d="16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'tab_label_1' => '5. Reduce Premium',
        'tab_label_2' => 'Legitimate Savings',
        'badge'       => 'Optimization',
        'title'       => 'How to Reduce Your Premium — Legitimately',
        'subtitle'    => '',
        'content_type'=> 'table_split',
        'intro'       => '',
        'table_headers' => ['Strategy', 'How It Works'],
        'table_rows'  => [
            ['Protect and Maximise NCB', 'NCB grows to 50% over 5 claim-free years. Never claim for amounts less than your annual NCB discount value.'],
            ['Choose a Higher Voluntary Deductible', 'Offer to pay the first ₹2,500–₹5,000 of each OD claim yourself'],
            ['Install ARAI-Approved Anti-Theft Device', 'IRDAI/ARAI-approved immobiliser or GPS tracker: 2.5% OD discount'],
            ['Right-size Add-ons to Actual Risk', 'Zero Dep on a 7-year-old vehicle is low value. Match add-ons to your vehicle\'s age and real risks.'],
            ['Buy NCB Protect once NCB reaches 35%', 'Costs ₹500–1,500/year; saves ₹2,000–6,000 if you make even one claim'],
            ['Compare OD Premiums at Every Renewal', 'OD can be purchased from any insurer independently; meaningful price variation exists'],
            ['Maintain Continuous Policy History', 'A lapsed policy resets NCB to zero and requires fresh inspection']
        ],
        'callout'     => [
            'type'  => 'success',
            'title' => 'Key Takeaway — Small Claims Calculation',
            'text'  => 'Before making any small own-damage claim, calculate: Is the settlement worth more than the NCB I will lose and the higher premium I will pay over the next 3–5 years? For most cosmetic or minor damage claims, the answer is no. Pay it yourself and protect the NCB.'
        ]
    ]
];
?>

<section class="asset-tabs-section" id="evaluate-policy-considerations">
    <div class="container-wide">

        <!-- HEADER -->
        <div class="section-header">
            <h2 class="h2 text-navy m-t-12">
                What to Consider When Buying a Policy
            </h2>
            <p class="text-body-med max-w-800 m-t-16">
                Motor insurance policies look similar in advertising. They are not. The difference between a policy that pays fully and one that disappoints lies in details most buyers never read before paying the premium.
            </p>
        </div>

        <!-- LAYOUT CONTAINER: LEFT SIDEBAR BUTTONS + RIGHT WHITE CARD -->
        <div class="stage-layout-wrapper m-t-32">
            
            <!-- LEFT SIDEBAR NAVIGATION BUTTONS (5 Headings) -->
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
                            </div>

                            <hr class="stage-divider" />

                            <!-- CONTENT BODY -->
                            <div class="stage-body-content">
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
                            </div>

                            <!-- CALLOUT BOX -->
                            <?php if (!empty($data['callout'])): ?>
                                <div class="policy-callout-box <?= $data['callout']['type']; ?> m-t-24">
                                    <div class="callout-icon">✅</div>
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