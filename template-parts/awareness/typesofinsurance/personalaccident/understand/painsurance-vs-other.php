<?php
// ============================================================
// PERSONAL ACCIDENT VS OTHERS — TAB DATA
// ============================================================

$paTabsData = [
    'health' => [
        'label' => 'Health vs. PA Insurance',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>',
        'title' => "'My Health Insurance will cover it' — The Most Expensive Myth in India",
        'scenario' => 'Health insurance and Personal Accident Insurance are built for completely different purposes. One pays for hospital bills; the other replaces lost income, compensates permanent disability, and protects dependents.',
        'type' => 'table',
        'columns' => ['What you need', 'Covered by Health Insurance?', 'Covered by PA Insurance?'],
        'rows' => [
            ['Hospital bills after an accident', '✅ Yes', '❌ No (unless medical expenses add-on taken)'],
            ['ICU, surgery, medicines', '✅ Yes', '❌ No'],
            ['Lost income while recovering at home', '❌ No', '✅ Yes (TTD benefit)'],
            ['Income after permanent disability', '❌ No', '✅ Yes (PTD/PPD lump sum)'],
            ['Family support if you die in an accident', '❌ No', '✅ Yes (Accidental Death benefit)'],
            ['EMI support during disability period', '❌ No', '✅ Yes (through lump sum or TTD weekly benefit)'],
            ["Children's education if parent is disabled", '❌ No', '✅ Yes (Education grant add-on available)'],
            ['Funeral / transportation of body expenses', '❌ No', '✅ Yes (add-on available)']
        ],
        'takeaway' => 'Health insurance and PA Insurance are partners, not substitutes. You need both. Health insurance fixes your body; PA insurance fixes your life.'
    ],
    'employer' => [
        'label' => 'Employer Group vs. Individual PA',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'title' => 'Employer Group Personal Accident Cover vs. Your Own Policy',
        'scenario' => 'Many salaried employees receive Group Personal Accident cover as part of their employment benefits. This is valuable, but comes with critical limitations that leave you vulnerable during career transitions.',
        'type' => 'table',
        'columns' => ['Aspect', 'Employer Group PA Cover', 'Individual PA Policy'],
        'rows' => [
            ['Portability', 'Stops the day you resign or are laid off', 'Continues regardless of employment status'],
            ['Sum insured', 'Fixed by employer (often 2–3× annual salary)', 'You choose the amount — up to any level you need'],
            ['Family coverage', 'Rarely includes spouse or children', 'Add-ons available for family'],
            ['Continuity', 'Lost between jobs', 'Uninterrupted through career transitions'],
            ['Customization', 'Standard policy — no add-ons', 'Multiple add-ons based on your life situation'],
            ['Control', 'Employer can change or withdraw', 'Yours, as long as you pay the premium']
        ],
        'takeaway' => "If your only PA cover is your employer's group policy, you are uninsured every time you change jobs, take a sabbatical, go freelance, or start a business."
    ],
    'travel' => [
        'label' => 'Travel vs. PA vs. Health',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/></svg>',
        'title' => 'The Critical Three-Way Distinction: Travel, PA & Health Insurance',
        'scenario' => 'Many assume that holding Health or PA insurance covers them abroad or on domestic trips. They are not fully protected. Each product operates in its own distinct territory.',
        'type' => 'table',
        'columns' => ['Situation', 'Travel Insurance', 'Personal Accident (PA)', 'Health Insurance'],
        'rows' => [
            ['Sudden illness while abroad (e.g., food poisoning)', '✅ Yes - core benefit', '❌ No - PA covers accidents only', '❌ No - most Indian plans exclude overseas'],
            ['Accident injury while travelling', '✅ Yes - trip medical bills', '✅ Yes - disability/death lump sum', '✅ Yes (within India); ❌ Overseas'],
            ['Permanent disability from travel accident', '⚠️ Limited (small AD&D benefit)', '✅ Yes - full CSI payout', '❌ No - pays treatment, not disability'],
            ['Lost income during recovery at home', '❌ No - travel policy expires', '✅ Yes – TTD benefit continues', '❌ No - pays bills, not wages'],
            ['Flight cancelled / hotel non-refundable', '✅ Yes - trip interruption', '❌ Not applicable', '❌ Not applicable']
        ],
        'takeaway' => 'Health insurance fixes your body at home. PA insurance replaces your income after any accident anywhere. Travel insurance protects your trip logistics and medical emergencies abroad.'
    ],
    'exclusions' => [
        'label' => 'Key Travel Exclusions',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>',
        'title' => 'What Travel Insurance Does Not Cover: Key Exclusions',
        'scenario' => 'Reading policy exclusions is just as important as reviewing coverage limits before embarking on domestic or international travel.',
        'type' => 'list',
        'items' => [
            ['Pre-existing medical conditions', 'Illnesses known before the trip are generally excluded unless a specific waiver is purchased.'],
            ['Substance influence', 'Self-inflicted injury, suicide, or injuries sustained under the influence of alcohol or drugs.'],
            ['Extreme sports', 'Participation in professional sports or extreme adventure activities (unless specifically endorsed).'],
            ['Restricted zones', 'Travel to countries under government-issued safety advisories or active war zones.'],
            ['Self-induced delays & dental', 'Losses from delays caused by your own actions (e.g. late arrival), and dental treatments unless caused by a sudden accident.']
        ],
        'takeaway' => 'Always verify your travel policy phrasing and endorsements before departing to avoid unexpected out-of-pocket expenses.'
    ]
];
?>

<section class="pa-comparison-section" id="pa-insurance-other">
    <div class="container-wide">

        <!-- HEADER -->
        <div class="section-header">
            <h2 class="h2 text-navy m-t-12">
                PA Insurance vs. Other Insurance Categories
            </h2>
            <p class="text-body-med max-w-800 m-t-16">
                Understand how Personal Accident insurance uniquely protects your income, dependents, and long-term financial security compared to standard health, group, and travel policies.
            </p>
        </div>

        <!-- CATEGORY TABS -->
        <div class="pa-category-tabs m-t-32">
            <?php $i = 0; ?>
            <?php foreach ($paTabsData as $key => $data): ?>
                <button
                    type="button"
                    class="pa-tab <?= $i === 0 ? 'active' : ''; ?>"
                    data-tab="<?= htmlspecialchars($key); ?>"
                    role="tab"
                    aria-selected="<?= $i === 0 ? 'true' : 'false'; ?>"
                >
                    <span class="tab-icon">
                        <?= $data['icon']; ?>
                    </span>
                    <?= htmlspecialchars($data['label']); ?>
                </button>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>

        <!-- TAB CONTENT PANELS -->
        <div class="pa-tab-content m-t-24">
            <?php $i = 0; ?>
            <?php foreach ($paTabsData as $key => $data): ?>
                <div
                    class="pa-tab-panel <?= $i === 0 ? 'active' : ''; ?>"
                    id="pa-<?= htmlspecialchars($key); ?>"
                    role="tabpanel"
                    aria-hidden="<?= $i === 0 ? 'false' : 'true'; ?>"
                >
                    <!-- MAIN CARD CONTAINER -->
                    <div class="pa-content-card">
                        <div class="pa-content-header">
                            <div>
                                <span class="pa-content-label">
                                    <?= htmlspecialchars($data['label']); ?>
                                </span>
                                <h3>
                                    <?= htmlspecialchars($data['title']); ?>
                                </h3>
                            </div>
                            <span class="pa-policy-note">
                                Critical Distinction
                            </span>
                        </div>

                        <p class="pa-card-description">
                            <?= htmlspecialchars($data['scenario']); ?>
                        </p>

                        <?php if ($data['type'] === 'table'): ?>
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
                                                <?php foreach ($row as $cellIndex => $cell): ?>
                                                    <td>
                                                        <?php if ($cellIndex === 0): ?>
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
                        <?php elseif ($data['type'] === 'list'): ?>
                            <!-- BULLET LIST FOR EXCLUSIONS -->
                            <ul class="pa-bullet-list">
                                <?php foreach ($data['items'] as $item): ?>
                                    <li>
                                        <strong><?= htmlspecialchars($item[0]); ?>:</strong> 
                                        <span><?= htmlspecialchars($item[1]); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <!-- TAKEAWAY BANNER (ONLY) -->
                    <div class="story-takeaway-card m-t-32">
                        <div class="takeaway-icon-bubble">!</div>
                        <div class="takeaway-text-content">
                            <strong>KEY TAKEAWAY</strong>
                            <p><?= htmlspecialchars($data['takeaway']); ?></p>
                        </div>
                    </div>

                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- TAB SWITCHING SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const section = document.querySelector('.pa-comparison-section');
    if (!section) return;

    const buttons = section.querySelectorAll('.pa-tab');
    const panels = section.querySelectorAll('.pa-tab-panel');

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

            const targetPanel = section.querySelector('#pa-' + target);
            if (targetPanel) {
                targetPanel.classList.add('active');
                targetPanel.setAttribute('aria-hidden', 'false');
            }
        });
    });
});
</script>