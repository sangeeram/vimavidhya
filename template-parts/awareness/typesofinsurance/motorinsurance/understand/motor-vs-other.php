<?php
/**
 * ============================================================
 * VIMA VIDYA
 * MOTOR VS PERSONAL ACCIDENT INSURANCE COMPONENT
 * ============================================================
 */

$motor_vs_pa_data = [
    'motor_pa' => [
        'label' => 'Motor PA vs. Standalone PA',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>',
        'title' => "Motor Insurance vs. Personal Accident Insurance — The Critical Distinction",
        'scenario' => "'My motor insurance will cover me if I'm in an accident.' This statement is partly true, precisely wrong, and dangerously incomplete.",
        'type' => 'table',
        'columns' => ['Situation', 'Compulsory PA in Motor Policy (₹15 Lakh)', 'Standalone Personal Accident Insurance'],
        'rows' => [
            [
                'situation' => 'Owner-driver dies in accident involving the insured vehicle',
                'motor'     => ['type' => 'yes', 'text' => 'Pays 100% of ₹15 lakh to nominee'],
                'standalone'=> ['type' => 'yes', 'text' => 'Pays full Capital Sum Insured — sized to your income']
            ],
            [
                'situation' => 'Owner-driver dies NOT involving insured vehicle (pedestrian, cyclist, other vehicle)',
                'motor'     => ['type' => 'no',  'text' => 'Does NOT pay — cover is tied to the specific insured vehicle'],
                'standalone'=> ['type' => 'yes', 'text' => 'Pays — standalone PA covers accidents anywhere, any mode']
            ],
            [
                'situation' => 'Permanent total disability after accident',
                'motor'     => ['type' => 'yes', 'text' => 'Pays ₹15 lakh'],
                'standalone'=> ['type' => 'yes', 'text' => 'CSI can be sized to 10–15× your annual income']
            ],
            [
                'situation' => 'Temporary disability — weeks off work, income stopped',
                'motor'     => ['type' => 'no',  'text' => 'No income replacement in motor PA'],
                'standalone'=> ['type' => 'yes', 'text' => 'Pays weekly TTD (Temporary Total Disability) benefit']
            ],
            [
                'situation' => 'Passenger in your vehicle injured or killed',
                'motor'     => ['type' => 'no',  'text' => 'Compulsory PA does not cover passengers'],
                'standalone'=> ['type' => 'yes', 'text' => 'Each person needs their own standalone PA policy']
            ],
            [
                'situation' => 'Cover portable across all vehicles you drive?',
                'motor'     => ['type' => 'no',  'text' => 'No — tied to this specific registered vehicle'],
                'standalone'=> ['type' => 'yes', 'text' => 'Yes — follows you regardless of which vehicle you are in']
            ],
            [
                'situation' => 'Family loses income if you are bedridden 3 months',
                'motor'     => ['type' => 'no',  'text' => 'Motor insurance has no income replacement component'],
                'standalone'=> ['type' => 'yes', 'text' => 'TTD benefit in standalone PA replaces income weekly']
            ]
        ],
        'highlight_box' => [
            'title' => '⚡ The ₹15 Lakh Gap:',
            'text' => 'The IRDAI-mandated compulsory PA cover of ₹15 lakh sounds significant. For a 35-year-old earning ₹60,000/month, permanent disability means a loss of ₹72 lakh in income over 10 years — before accounting for medical care, children\'s education, or loan repayments. A standalone Personal Accident policy lets you choose a Capital Sum Insured of ₹50 lakh, ₹1 crore or more, sized to your actual income and dependents. The compulsory ₹15 lakh is a legal floor. Never treat it as a financial ceiling.'
        ],
        'takeaway' => 'Motor insurance protects your vehicle and third parties. Personal Accident Insurance protects you and your family from the financial consequences of your disability or accidental death. You need both. One is not a substitute for the other.'
    ]
];
?>

<section class="pa-comparison-section" id="motor-vs-pa">
    <div class="container-wide">

        <!-- HEADER -->
        <div class="section-header">
            <h2 class="h2 text-navy m-t-12">
                Motor Insurance vs. Personal Accident Insurance
            </h2>
            <p class="text-body-med max-w-800 m-t-16">
                Understand why the mandatory ₹15 lakh motor PA cover is just a legal floor, and why a standalone Personal Accident policy is critical for complete financial security.
            </p>
        </div>

        <!-- TAB CONTENT PANEL -->
        <div class="pa-tab-content m-t-24">
            <?php foreach ($motor_vs_pa_data as $key => $data): ?>
                <div class="pa-tab-panel active" id="motor-pa-<?= htmlspecialchars($key); ?>" role="tabpanel" aria-hidden="false">
                    
                    <!-- MAIN CARD CONTAINER -->
                    <div class="pa-content-card">
                        <div class="pa-content-header">
                            <div>
                                <span class="pa-content-label"><?= htmlspecialchars($data['label']); ?></span>
                                <h3><?= htmlspecialchars($data['title']); ?></h3>
                            </div>
                            <span class="pa-policy-note">Critical Distinction</span>
                        </div>

                        <p class="pa-card-description">
                            <?= htmlspecialchars($data['scenario']); ?>
                        </p>

                        <!-- COMPARISON TABLE -->
                        <div class="pa-table-wrapper">
                            <table class="pa-comparison-table">
                                <thead>
                                    <tr>
                                        <?php foreach ($data['columns'] as $col): ?>
                                            <th><?= htmlspecialchars($col); ?></th>
                                        <?php endforeach; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['rows'] as $row): ?>
                                        <tr>
                                            <!-- Situation Column -->
                                            <td>
                                                <strong><?= htmlspecialchars($row['situation']); ?></strong>
                                            </td>
                                            
                                            <!-- Motor PA Column -->
                                            <td class="col-motor">
                                                <div class="status-cell">
                                                    <span class="status-badge <?= $row['motor']['type']; ?>">
                                                        <?= $row['motor']['type'] === 'yes' ? '✓' : '✕'; ?>
                                                    </span>
                                                    <span><?= htmlspecialchars($row['motor']['text']); ?></span>
                                                </div>
                                            </td>
                                            
                                            <!-- Standalone PA Column -->
                                            <td>
                                                <div class="status-cell">
                                                    <span class="status-badge <?= $row['standalone']['type']; ?>">
                                                        <?= $row['standalone']['type'] === 'yes' ? '✓' : '✕'; ?>
                                                    </span>
                                                    <span><?= htmlspecialchars($row['standalone']['text']); ?></span>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- HIGHLIGHT / CALLOUT BOX -->
                        <?php if (!empty($data['highlight_box'])): ?>
                            <div class="pa-highlight-box m-t-24" style="background: #f8fafc; border-left: 4px solid #f59e0b; padding: 18px 20px; border-radius: 4px; margin-top: 24px;">
                                <strong style="color: #1e3a8a; display: block; margin-bottom: 6px; font-size: 15px;"><?= htmlspecialchars($data['highlight_box']['title']); ?></strong>
                                <p style="margin: 0; color: #334155; font-size: 14.5px; line-height: 1.5;"><?= htmlspecialchars($data['highlight_box']['text']); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- TAKEAWAY BANNER -->
                    <div class="story-takeaway-card m-t-32">
                        <div class="takeaway-icon-bubble">!</div>
                        <div class="takeaway-text-content">
                            <strong>KEY TAKEAWAY</strong>
                            <p><?= htmlspecialchars($data['takeaway']); ?></p>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>