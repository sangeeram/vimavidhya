<?php
/**
 * Template Part: What to Consider When Choosing a Health Policy
 * Theme: Vima Vidya Custom Theme (Light Blue Background + Left Sidebar Buttons + Right White Card)
 */

$health_policy_considerations = [
    'sum_insured' => [
        'id'          => 'sum_insured',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
        'tab_label_1' => '1. Sum Insured (SI)',
        'tab_label_2' => 'Foundation of Your Cover',
        'badge'       => 'Coverage Valuation',
        'title'       => 'Sum Insured (SI) — The Foundation of Your Cover',
        'subtitle'    => 'The Sum Insured is the maximum amount your policy will reimburse per policy year. A surgery that costs ₹8 lakh against a ₹5 lakh SI means ₹3 lakh from your pocket.',
        'content_type'=> 'single_focus',
        'heading'     => 'Why Adequate Sum Insured Matters:',
        'text'        => 'In metro cities, serious illness hospitalisation routinely costs ₹5–15 lakh. Choose your SI to reflect real healthcare costs, not the lowest premium option.',
        'callout'     => null
    ],
    'network_hospitals' => [
        'id'          => 'network_hospitals',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>',
        'tab_label_1' => '2. Network Hospitals',
        'tab_label_2' => 'Cashless vs. Reimbursement',
        'badge'       => 'Network Access',
        'title'       => 'Network Hospitals — Cashless vs. Reimbursement',
        'subtitle'    => 'Understand how hospitalisation billing is processed across network and non-network healthcare facilities.',
        'content_type'=> 'single_focus',
        'heading'     => 'Key Operational Differences:',
        'text'        => 'Cashless facility is available only at your insurer\'s network hospitals. At a non-network hospital, you pay the bill first and claim reimbursement later — which can take weeks. Always verify that your preferred hospitals are in the network before buying.',
        'callout'     => null
    ],
    'sub_limits' => [
        'id'          => 'sub_limits',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'tab_label_1' => '3. Sub-Limits',
        'tab_label_2' => 'Where the Fine Print Lives',
        'badge'       => 'Policy Clauses',
        'title'       => 'Sub-Limits — Where the Fine Print Lives',
        'subtitle'    => 'Many policies impose sub-limits that restrict payouts regardless of the total SI. Examine these clauses carefully before signing.',
        'content_type'=> 'list_box',
        'heading'     => 'Core Sub-Limit Restrictions Include:',
        'items'       => [
            'Room Rent Limit — typically 1–2% of SI per day. If your SI is ₹5 lakh, your eligible room is ₹5,000/day. A private room at ₹10,000/day means you pay 50% of all charges — not just the room.',
            'Co-payment — a percentage (10–30%) of every claim you pay. Lowers your premium but increases your out-of-pocket cost at claim time.',
            'Disease-specific Sub-limits — some policies cap payouts for specific illnesses (e.g., cataract surgery at ₹40,000). Check whether these apply to conditions relevant to your family.'
        ],
        'callout'     => null
    ],
    'restore_benefit' => [
        'id'          => 'restore_benefit',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg>',
        'tab_label_1' => '4. Restore Benefit',
        'tab_label_2' => 'Recharging Your Coverage',
        'badge'       => 'Recharge Features',
        'title'       => 'Restore / Recharge Benefit',
        'subtitle'    => 'The Restore benefit reinstates your SI if it is exhausted during the year — critical for families where multiple members may claim in the same policy year.',
        'content_type'=> 'single_focus',
        'heading'     => 'How Restoration Works:',
        'text'        => 'Always verify whether restoration applies to the same illness or only new illnesses in the same policy year. Comprehensive plans offer unlimited restoration for unrelated illnesses.',
        'callout'     => null
    ],
    'ncb' => [
        'id'          => 'ncb',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>',
        'tab_label_1' => '5. No-Claim Bonus',
        'tab_label_2' => 'Claim-Free Rewards',
        'badge'       => 'Cumulative Rewards',
        'title'       => 'No-Claim Bonus (NCB)',
        'subtitle'    => 'Build accumulated sum insured benefits through claim-free continuity.',
        'content_type'=> 'single_focus',
        'heading'     => 'Growth of Sum Insured:',
        'text'        => 'For every claim-free year, most insurers add 5–50% to your SI at no extra premium. A ₹10 lakh policy with 5 consecutive claim-free years could grow to ₹15 lakh or more. Maintain your policy continuously — lapses reset the NCB.',
        'callout'     => null
    ],
    'exclusions' => [
        'id'          => 'exclusions',
        'tab_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>',
        'tab_label_1' => '6. Exclusions',
        'tab_label_2' => 'Read Before You Sign',
        'badge'       => 'Policy Exclusions',
        'title'       => 'Exclusions — Read Before You Sign',
        'subtitle'    => 'Every health policy contains specific conditions and treatments that are explicitly excluded from coverage.',
        'content_type'=> 'list_box',
        'heading'     => 'Common Health Insurance Exclusions Include:',
        'items'       => [
            'Pre-existing diseases (during waiting period)',
            'Cosmetic treatments, dental (unless accidental), spectacles, hearing aids',
            'Non-allopathic treatments (unless AYUSH rider purchased)',
            'Self-inflicted injury, suicide attempts',
            'Fertility treatments, infertility, surrogacy',
            'War, nuclear events, hazardous activities'
        ],
        'callout'     => [
            'type'  => 'success',
            'title' => 'A Policy is Only as Good as What it Covers',
            'text'  => 'Health insurance policies appear simple. They are not. The difference between a policy that pays fully and one that disappoints at claim time lies in details that most buyers never read. Review every clause before purchasing.'
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
                A policy is only as good as what it covers — and what it does not. Health insurance policies appear simple. They are not. The difference between a policy that pays fully and one that disappoints at claim time lies in details that most buyers never read.
            </p>
        </div>

        <!-- LAYOUT CONTAINER: LEFT SIDEBAR BUTTONS + RIGHT WHITE CARD -->
        <div class="stage-layout-wrapper m-t-32">
            
            <!-- LEFT SIDEBAR NAVIGATION BUTTONS -->
            <div class="stage-nav-sidebar" role="tablist">
                <?php $i = 0; ?>
                <?php foreach ($health_policy_considerations as $key =>$data): ?>
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
                <?php foreach ($health_policy_considerations as $key =>$data): ?>
                    <div
                        class="stage-panel <?= $i === 0 ? 'active' : ''; ?>"
                        id="health-policy-panel-<?= htmlspecialchars($key); ?>"
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
                                            <?php foreach ($data['items'] as$item): ?>
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

            const targetPanel = section.querySelector('#health-policy-panel-' + target);
            if (targetPanel) {
                targetPanel.classList.add('active');
                targetPanel.setAttribute('aria-hidden', 'false');
            }
        });
    });
});
</script>