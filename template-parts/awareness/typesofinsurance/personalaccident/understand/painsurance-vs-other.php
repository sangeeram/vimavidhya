<?php
/**
 * Template Part: Personal Accident vs Other Insurance Categories (Single Column Layout)
 * 
 * @package VimaVidya / Custom Theme
 */

$paTabsData = [
    'health' => [
        'label' => 'Health Insurance',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>',
        'title' => "'My Health Insurance will cover it' — The Most Expensive Myth in India",
        'scenario' => 'Health insurance and Personal Accident Insurance are built for completely different purposes. One pays for hospital bills; the other replaces lost income, compensates permanent disability, and protects dependents.',
        'type' => 'table',
        'columns' => ['Feature', 'Health Insurance', 'PA Insurance'],
        'rows' => [
            ['Covers accidental injury', '❌ No', '✅ Yes'],
            ['Covers medical expenses', '✅ Yes', '✅ Yes (limited)'],
            ['Lost income replacement', '❌ No', '✅ Yes (TTD benefit)'],
            ['Permanent disability payout', '❌ No', '✅ Yes (full CSI payout)'],
            ['Family/Dependent support', '❌ No', '✅ Yes']
        ],
        'takeaway' => 'Health insurance and PA Insurance are partners, not substitutes. You need both. Health insurance fixes your body; PA insurance fixes your life.'
    ],
    'employer' => [
        'label' => 'Employer Group',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'title' => 'Employer Group Personal Accident Cover vs. Your Own Policy',
        'scenario' => 'Many salaried employees receive Group Personal Accident cover as part of their employment benefits. This is valuable, but comes with critical limitations that leave you vulnerable during career transitions.',
        'type' => 'table',
        'columns' => ['Aspect', 'Employer Group PA Cover', 'Individual PA Policy'],
        'rows' => [
            ['Portability', '❌ Stops on resignation/layoff', '✅ Continues independently'],
            ['Sum insured', '⚠️ Fixed by employer (2–3× salary)', '✅ Custom chosen by you'],
            ['Family coverage', '❌ Rarely included', '✅ Add-ons available'],
            ['Continuity', '❌ Lost between jobs', '✅ Uninterrupted coverage']
        ],
        'takeaway' => "If your only PA cover is your employer's group policy, you are uninsured every time you change jobs, take a sabbatical, go freelance, or start a business."
    ],
    'travel' => [
        'label' => 'Travel Insurance',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/></svg>',
        'title' => 'The Critical Three-Way Distinction: Travel, PA & Health Insurance',
        'scenario' => 'Many assume that holding Health or PA insurance covers them abroad or on domestic trips. They are not fully protected. Each product operates in its own distinct territory.',
        'type' => 'table',
        'columns' => ['Situation', 'Travel Insurance', 'PA Insurance', 'Health Insurance'],
        'rows' => [
            ['Sudden illness while abroad', '✅ Yes - core benefit', '❌ No - PA covers accidents only', '❌ No - most Indian plans exclude overseas'],
            ['Accident injury while travelling', '✅ Yes - trip medical bills', '✅ Yes - disability/death lump sum', '✅ Yes (within India); ❌ Overseas'],
            ['Permanent disability from travel', '⚠️ Limited (small benefit)', '✅ Yes - full CSI payout', '❌ No - pays treatment, not disability']
        ],
        'takeaway' => 'Health insurance fixes your body at home. PA insurance replaces your income after any accident anywhere. Travel insurance protects your trip logistics and medical emergencies abroad.'
    ],
    'exclusions' => [
        'label' => 'Key Exclusions',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>',
        'title' => 'What Travel Insurance Does Not Cover: Key Exclusions',
        'scenario' => 'Reading policy exclusions is just as important as reviewing coverage limits before embarking on domestic or international travel.',
        'type' => 'list',
        'items' => [
            ['Pre-existing medical conditions', 'Illnesses known before the trip are generally excluded unless a specific waiver is purchased.'],
            ['Substance influence', 'Self-inflicted injury, suicide, or injuries sustained under the influence of alcohol or drugs.'],
            ['Extreme sports', 'Participation in professional sports or extreme adventure activities (unless specifically endorsed).']
        ],
        'takeaway' => 'Always verify your travel policy phrasing and endorsements before departing to avoid unexpected out-of-pocket expenses.'
    ]
];
?>

<section class="pa-comparison-section" id="pa-insurance-other">
    <div class="container-wide">

        <!-- HEADER -->
        <div class="section-header">
            <div class="header-badge-row">
                <!-- <span class="badge-pill">PA INSURANCE VS. OTHER INSURANCE CATEGORIES</span> -->
            </div>
            <h2 class="h2 text-white">
                PA Insurance vs. Other Insurance Categories
            </h2>
            <p class="text-body-med max-w-800">
                Each type of insurance serves a different purpose. Here's how PA compares with other common insurance categories.
            </p>
        </div>

        <!-- CATEGORY TABS -->
        <div class="pa-category-tabs" role="tablist">
            <?php $i = 0; ?>
            <?php foreach ($paTabsData as $key => $data): ?>
                <button
                    type="button"
                    class="pa-tab <?= $i === 0 ? 'active' : ''; ?>"
                    data-tab="<?= esc_attr($key); ?>"
                    role="tab"
                    aria-selected="<?= $i === 0 ? 'true' : 'false'; ?>"
                >
                    <span class="tab-icon"><?= $data['icon']; ?></span>
                    <?= esc_html($data['label']); ?>
                </button>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>

        <!-- FULL WIDTH CONTENT CONTAINER -->
        <div class="pa-content-container">
            <div class="pa-tab-content">
                <?php $i = 0; ?>
                <?php foreach ($paTabsData as $key => $data): ?>
                    <div
                        class="pa-tab-panel <?= $i === 0 ? 'active' : ''; ?>"
                        id="pa-<?= esc_attr($key); ?>"
                        role="tabpanel"
                        aria-hidden="<?= $i === 0 ? 'false' : 'true'; ?>"
                    >
                        <div class="pa-content-card">
                            <div class="pa-content-header">
                                <h3><?= esc_html($data['title']); ?></h3>
                            </div>

                            <p class="pa-card-description">
                                <?= esc_html($data['scenario']); ?>
                            </p>

                            <?php if ($data['type'] === 'table'): ?>
                                <div class="pa-table-wrapper">
                                    <table class="pa-comparison-table">
                                        <thead>
                                            <tr>
                                                <?php foreach ($data['columns'] as $colIndex => $col): ?>
                                                    <th>
                                                        <?= esc_html($col); ?>
                                                    </th>
                                                <?php endforeach; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data['rows'] as $row): ?>
                                                <tr>
                                                    <?php foreach ($row as $cellIndex => $cell): ?>
                                                        <td>
                                                            <?php if ($cellIndex === 0): ?>
                                                                <div class="feature-title-cell">
                                                                    <span class="feature-icon">
                                                                        <?php if ($key === 'employer'): ?>
                                                                            <!-- Aspect Icon (Gear) -->
                                                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                                                        <?php elseif ($key === 'travel'): ?>
                                                                            <!-- Situation Icon (Pin/Circle) -->
                                                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                                                                        <?php else: ?>
                                                                            <!-- Feature Icon (Bars) -->
                                                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                                                                        <?php endif; ?>
                                                                    </span>
                                                                    <strong><?= esc_html($cell); ?></strong>
                                                                </div>
                                                            <?php else: ?>
                                                                <span><?= esc_html($cell); ?></span>
                                                            <?php endif; ?>
                                                        </td>
                                                    <?php endforeach; ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php elseif ($data['type'] === 'list'): ?>
                                <ul class="pa-bullet-list">
                                    <?php foreach ($data['items'] as $item): ?>
                                        <li>
                                            <strong><?= esc_html($item[0]); ?>:</strong> 
                                            <span><?= esc_html($item[1]); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <!-- FOOTER BANNER -->
                            <div class="card-footer-banner">
                                <span class="banner-icon">ℹ️</span>
                                <span class="banner-text"><?= esc_html($data['takeaway']); ?></span>
                            </div>
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