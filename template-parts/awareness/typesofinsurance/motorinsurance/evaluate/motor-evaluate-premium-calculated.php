<?php
/**
 * Template Part: How Motor Insurance Premiums Are Calculated
 * Theme: Vima Vidya Custom Theme (Stacked White Cards Architecture)
 */

$motor_premiums = [
    'tp' => [
        'label' => 'Third-Party Premium',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
        'title' => 'Third-Party Premium — Fixed by IRDAI',
        'subtitle' => 'The TP premium is set by IRDAI, not the insurer. All insurers charge identical TP premiums. You cannot negotiate it.',
        'content_type' => 'text_only',
        'intro' => 'Mandatory statutory cover ensuring compensation for third-party injury, death, or property damage.',
        'callout' => [
            'type' => 'warning',
            'title' => 'Statutory Compliance Note',
            'text' => 'Driving without an active Third-Party insurance policy is a punishable offense under the Motor Vehicles Act, carrying heavy fines and potential legal consequences.'
        ]
    ],
    'od' => [
        'label' => 'Own Damage Premium',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>',
        'title' => 'Own Damage Premium — Calculated by Insurer',
        'subtitle' => 'Own Damage (OD) cover pays for repairs to your own vehicle resulting from accidents, theft, fire, or natural calamities. Insurers compute this dynamically.',
        'content_type' => 'advanced_table_view',
        'intro' => 'Several core variables determine your final Own Damage quote:',
        'table' => [
            [
                'factor' => 'Insured Declared Value (IDV)',
                'how' => 'Current market value of vehicle, depreciated by age. Higher IDV = higher premium. IDV is also the maximum OD payout.',
                'control' => 'Partial — never artificially lower IDV; it reduces claim payout proportionally'
            ],
            [
                'factor' => 'Vehicle Age',
                'how' => 'Older vehicles have lower IDV and lower OD premium — but also less claim protection',
                'control' => 'No — IRDAI-fixed depreciation schedule'
            ],
            [
                'factor' => 'Geographical Zone',
                'how' => 'Metro cities and high-accident zones attract higher OD loading',
                'control' => 'Limited — reflects registration address'
            ],
            [
                'factor' => 'Make, Model, Fuel Type',
                'how' => 'High-performance, imported, luxury models attract higher rates',
                'control' => 'Factored in at vehicle choice stage'
            ],
            [
                'factor' => 'Add-ons Selected',
                'how' => 'Each add-on adds percentage or flat amount to OD base premium',
                'control' => 'Full control — choose based on real risk'
            ],
            [
                'factor' => 'No-Claim Bonus (NCB)',
                'how' => 'Grows per claim-free year: 20%→25%→35%→45%→50%',
                'control' => 'Full control — protect NCB, avoid small claims'
            ],
            [
                'factor' => 'Voluntary Deductible',
                'how' => 'Higher voluntary excess reduces OD premium proportionally',
                'control' => 'Full control — choose by risk tolerance'
            ],
            [
                'factor' => 'ARAI Anti-Theft Device',
                'how' => 'IRDAI/ARAI-approved immobiliser or tracker: 2.5% OD discount',
                'control' => 'Install only ARAI-approved devices'
            ]
        ],
        'callout' => [
            'type' => 'success',
            'title' => 'Smart Optimization Tip',
            'text' => 'Maintaining a clean record to secure maximum No-Claim Bonus (NCB) combined with an optimal voluntary deductible is the most effective way to lower your annual Own Damage premium without risking underinsurance.'
        ]
    ]
];
?>

<section class="asset-stacked-section" id="evaluate-motor-premiums">
    <div class="container-wide">

        <!-- HEADER -->
        <div class="section-header">
            <h2 class="h2 text-navy m-t-12">
                How Motor Insurance Premiums Are Calculated
            </h2>
            <p class="text-body-med max-w-800 m-t-16">
                Motor insurance pricing in India is split into two components: a standardized statutory Third-Party rate set by regulators, and a dynamic Own Damage rate calculated by insurers.
            </p>
        </div>

        <!-- STACKED CONTENT CARDS -->
        <div class="asset-stack-wrapper m-t-32">
            <?php foreach ($motor_premiums as $key => $data): ?>
                <div class="asset-content-card" id="motor-<?= htmlspecialchars($key); ?>">
                    
                    <!-- PANEL HEADER -->
                    <div class="asset-content-header">
                        <div>
                            <span class="asset-content-label"><?= htmlspecialchars($data['label']); ?></span>
                            <h3><?= htmlspecialchars($data['title']); ?></h3>
                        </div>
                        <span class="asset-policy-note">Rate Analysis</span>
                    </div>

                    <p class="asset-card-description"><?= htmlspecialchars($data['subtitle']); ?></p>
                    <?php if (!empty($data['intro'])): ?>
                        <p class="asset-card-intro"><?= htmlspecialchars($data['intro']); ?></p>
                    <?php endif; ?>

                    <!-- CONTENT VARIANT: ADVANCED FACTOR TABLE (OD) -->
                    <?php if ($data['content_type'] === 'advanced_table_view'): ?>
                        <div class="policy-table-wrapper m-t-20">
                            <table class="policy-risk-table motor-od-table">
                                <thead>
                                    <tr>
                                        <th>Factor</th>
                                        <th>How It Works</th>
                                        <th>Your Control?</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['table'] as $row): ?>
                                        <tr>
                                            <td><strong><?= htmlspecialchars($row['factor']); ?></strong></td>
                                            <td><?= htmlspecialchars($row['how']); ?></td>
                                            <td><span class="effect-tag"><?= htmlspecialchars($row['control']); ?></span></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>

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
            <?php endforeach; ?>
        </div>

    </div>
</section>