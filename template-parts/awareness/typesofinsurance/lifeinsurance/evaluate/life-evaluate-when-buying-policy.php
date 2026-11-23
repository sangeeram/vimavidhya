<?php
/**
 * Template Part: What to Consider When Buying a Policy — The Fine Print That Matters
 * Theme: Vima Vidya Custom Theme (Light Blue Background + Left Sidebar Buttons + Right White Card)
 */

$life_policy_considerations = [
    'csr' => [
        'id'            => 'csr',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
        'tab_label_1'   => '1. Claim Settlement Ratio',
        'tab_label_2'   => 'Reliability & Benchmarks',
        'badge'         => 'Reliability',
        'title'         => 'Claim Settlement Ratio (CSR) — Your Insurer\'s Most Important Number',
        'subtitle'      => 'The CSR is the percentage of death claims an insurer settled out of all claims received in a year. IRDAI publishes this annually. For life insurance, a CSR above 95% is the standard benchmark. Look for consistency across 3 consecutive years. A CSR of 98–99% means 98–99 out of every 100 families received their claims. At 91%, 9 in 100 families were denied. That matters when your family is the claimant.',
        'content_type'  => 'table_split',
        'table_headers' => [
            ['icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>', 'text' => 'CSR Range'],
            ['icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>', 'text' => 'Interpretation'],
            ['icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>', 'text' => 'Action']
        ],
        'table_rows'    => [
            ['98–100%', 'Excellent — very high claim reliability', 'Strong shortlist candidate; verify consistency across 3 years'],
            ['95–97%', 'Good — acceptable claim performance', 'Acceptable; check for specific claim rejection patterns'],
            ['90–94%', 'Below benchmark — some concern', 'Investigate claim rejection reasons; proceed with caution'],
            ['Below 90%', 'Concerning — verify carefully before buying', 'Strongly consider alternative insurers; check complaint ratios']
        ],
        'callout'       => null
    ],
    'proposal' => [
        'id'            => 'proposal',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'tab_label_1'   => '2. The Proposal Form',
        'tab_label_2'   => 'Legal Declaration & Disclosure',
        'badge'         => 'Legal Duty',
        'title'         => 'The Proposal Form — Your Legal Declaration',
        'subtitle'      => 'The Proposal Form is a legal document. Everything you declare on it forms the basis for the insurer accepting your risk and any future claim. The principle of Utmost Good Faith (Uberrimae Fidei) requires you to disclose every material fact — health conditions, family medical history, other existing policies, occupation details, and income — accurately and completely.',
        'content_type'  => 'table_split',
        'table_headers' => [
            ['icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>', 'text' => 'Common Non-Disclosure That Causes Claim Rejection'],
            ['icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>', 'text' => 'Consequence']
        ],
        'table_rows'    => [
            ['Undisclosed smoking status', 'Claim rejected or settled at non-smoker premium rates only'],
            ['Existing health condition not declared (diabetes, hypertension, cardiac)', 'Claim investigated and rejected for non-disclosure — even if death was unrelated'],
            ['Correct annual income not disclosed', 'Affects the insurer\'s assessment of SA adequacy; high SA with low declared income triggers scrutiny'],
            ['Other existing life policies not disclosed especially with multiple Insurers', 'Every life insurer requires disclosure of all existing coverage to assess your human life value based on your Income — non-disclosure may create challenges at the Claims stage including rejection due to non-disclosure'],
            ['Hazardous occupation not declared', 'Any claim arising from or during occupational activity may be rejected']
        ],
        'callout'       => [
            'type'  => 'warning',
            'title' => 'Important — The Moratorium Period',
            'text'  => 'After 3 years from policy issue (or revival), an insurer can no longer contest a claim on grounds of non-disclosure unless fraud is established. This is a consumer protection provision. However, it does not protect you if you committed deliberate fraud. Do not misrepresent on the proposal form — the consequences at claim time are severe, and your family cannot recover what was contractually voided.'
        ]
    ],
    'exclusions' => [
        'id'            => 'exclusions',
        'tab_icon'      => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>',
        'tab_label_1'   => '3. Policy Exclusions',
        'badge'         => 'Exclusions',
        'title'         => 'Exclusions — What Your Policy Will NOT Pay',
        'subtitle'      => '',
        'content_type'  => 'table_split',
        'table_headers' => [
            ['icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>', 'text' => 'Exclusion'],
            ['icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>', 'text' => 'What This Means'],
            ['icon' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>', 'text' => 'How to Address']
        ],
        'table_rows'    => [
            ['Suicide exclusion (first year)', 'If the insured commits suicide within 12 months of policy issue or revival, the insurer pays only 80% of premiums paid — not the sum assured', 'Exclusion expires after 12 months; full cover applies thereafter'],
            ['Specific illness exclusions (pre-existing)', 'IRDAI does not permit any exclusion other than the suicide clause. Exclusions are allowed only on riders and health-type covers attached to the policy.', 'There are no exclusions in a Life Insurance Policy for the Base benefits except the Suicide Clause'],
            ['Adventure / hazardous activity (without rider)', 'This does not apply for the base death cover of a life or term plan, though they are often true for riders.', 'Adventure Sports Rider or specific personal accident policy may be excluded in Rider benefits, if opted for'],
            ['War and terrorism', 'This does not apply for the base death cover of a life or term plan, though they are often true for riders', 'They are likely to get lower sum assured based on the role and profile, job posting and designation. Riders may not be allowed based on profile risk'],
            ['Fraudulent claim', 'Claim through deliberate misrepresentation voids the policy; criminal proceedings possible', 'No mitigation allowed — declare accurately at inception']
        ],
        'callout'       => null
    ]
];
?>


<section class="asset-tabs-section" id="evaluate-life-policy-considerations">
    <div class="container-wide">

        <!-- HEADER -->
        <div class="section-header">
            <h2 class="h2 text-navy m-t-12">
                What to Consider When Buying a Policy — The Fine Print That Matters
            </h2>
            <p class="text-body-med max-w-800 m-t-16">
                Understand critical metrics like Claim Settlement Ratios, legal disclosures on proposal forms, and policy exclusions before purchasing life insurance coverage.
            </p>
        </div>

        <!-- LAYOUT CONTAINER: LEFT SIDEBAR BUTTONS + RIGHT WHITE CARD -->
        <div class="stage-layout-wrapper m-t-32">
            
            <!-- LEFT SIDEBAR NAVIGATION BUTTONS -->
            <div class="stage-nav-sidebar" role="tablist">
                <?php $i = 0; ?>
                <?php foreach ($life_policy_considerations as $key => $data): ?>
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
                <?php foreach ($life_policy_considerations as $key => $data): ?>
                    <div
                        class="stage-panel <?= $i === 0 ? 'active' : ''; ?>"
                        id="life-policy-panel-<?= htmlspecialchars($key); ?>"
                        role="tabpanel"
                        aria-hidden="<?= $i === 0 ? 'false' : 'true'; ?>"
                    >
                        <div class="stage-split-card">
                            
                            <!-- CARD HEADER -->
                            <div class="stage-card-header">
                                <span class="stage-badge"><?= htmlspecialchars($data['badge']); ?></span>
                                <h3><?= htmlspecialchars($data['title']); ?></h3>
                                <?php if (!empty($data['subtitle'])): ?>
                                    <p class="desc-text m-t-12"><?= htmlspecialchars($data['subtitle']); ?></p>
                                <?php endif; ?>
                            </div>

                            <hr class="stage-divider" />

                            <!-- CONTENT BODY -->
                            <div class="stage-body-content">
                                <?php if (!empty($data['table_rows'])): ?>
                                    <div class="policy-table-wrapper m-t-16">
                                        <table class="policy-risk-table highlighted-columns-table">
                                            <thead>
                                                <tr>
                                                    <?php foreach ($data['table_headers'] as $th_idx => $th): ?>
                                                        <th class="col-highlight-<?= $th_idx + 1; ?>">
                                                            <span class="th-icon"><?= $th['icon']; ?></span>
                                                            <span class="th-text"><?= htmlspecialchars($th['text']); ?></span>
                                                        </th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data['table_rows'] as $row): ?>
                                                    <tr>
                                                        <?php foreach ($row as $cell_idx => $cell): ?>
                                                            <td class="col-highlight-<?= $cell_idx + 1; ?>">
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
                            </div>

                            <!-- CALLOUT BOX -->
                            <?php if (!empty($data['callout'])): ?>
                                <div class="policy-callout-box <?= $data['callout']['type']; ?> m-t-24">
                                    <div class="callout-icon"><?= $data['callout']['type'] === 'warning' ? '⚠️' : '✅'; ?></div>
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

<!-- INTERACTIVITY SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const section = document.querySelector('#evaluate-life-policy-considerations');
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

            const targetPanel = section.querySelector('#life-policy-panel-' + target);
            if (targetPanel) {
                targetPanel.classList.add('active');
                targetPanel.setAttribute('aria-hidden', 'false');
            }
        });
    });
});
</script>