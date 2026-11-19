<?php
/**
 * Template Part: Health Insurance vs Other Insurance Categories (Single Column Layout)
 * 
 * @package VimaVidya / Custom Theme
 */

$healthTabsData = [
    'employer' => [
        'label' => 'Employer Group Cover',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'title' => "'My employer covers me' — The most expensive assumption in India",
        'scenario' => "When people hear about buying personal health insurance, the most common response is: 'I already have group cover from my employer.' This is one of the most costly misconceptions in personal finance. Employer group cover and personal health insurance serve overlapping but distinct purposes. Relying solely on employer cover leaves enormous gaps — gaps that only become visible when it is too late to fill them.",
        'type' => 'table',
        'columns' => ['What You Need', 'Employer Group Cover?', 'Personal Health Policy?'],
        'rows' => [
            ['Hospitalisation coverage', '✅ Yes — basic', '✅ Yes — comprehensive'],
            ['Coverage when you change jobs', '❌ No — stops immediately', '✅ Yes — continues regardless'],
            ['Coverage for your spouse', '⚠️ Sometimes — employer-specific', '✅ Yes — family floater available'],
            ['Coverage for your children', '⚠️ Sometimes — employer-specific', '✅ Yes — up to age 25'],
            ['Coverage post-retirement', '❌ No — ends with employment', '✅ Yes — lifetime renewal'],
            ['Maternity benefit', '⚠️ Limited — employer-specific', '✅ Yes — with waiting period'],
            ['Sum insured of your choice', '❌ No — fixed by employer', '✅ Yes — you choose'],
            ['Critical illness lump sum', '❌ No', '✅ Yes — with rider'],
            ['No-claim bonus', '❌ No', '✅ Yes — cover grows each year']
        ],
        'takeaway' => "If your only health cover is your employer's group policy, you are uninsured every time you change jobs, take a sabbatical, go freelance, or start a business. In India, the average salaried professional changes jobs 4–5 times in a career. Every transition is a gap in cover — unless you own an individual policy."
    ],
    'pa' => [
        'label' => 'Personal Accident Insurance',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/></svg>',
        'title' => 'Health Insurance vs. Personal Accident Insurance — The Two-Product Rule',
        'scenario' => 'Health insurance and Personal Accident (PA) Insurance are frequently confused. They are complementary, not interchangeable.',
        'type' => 'table',
        'columns' => ['What You Need', 'Health Insurance', 'PA Insurance'],
        'rows' => [
            ['Hospital bills after an accident', '✅ Yes', '❌ No (unless medical add-on taken)'],
            ['Hospital bills for illness', '✅ Yes', '❌ No — PA covers accidents only'],
            ['Income lost while recovering', '❌ No', '✅ Yes — TTD benefit'],
            ['Lump sum after permanent disability', '❌ No', '✅ Yes — PTD/PPD benefit'],
            ['Family support if you die in an accident', '❌ No', '✅ Yes — Accidental Death benefit']
        ],
        'takeaway' => 'Health insurance pays your hospital bills. PA Insurance replaces your income when an accident prevents you from working. You need both. Think of it this way: health insurance fixes your body. PA Insurance fixes your life.'
    ]
];
?>

<section class="travel-comparison-section" id="health-insurance-other">
    <div class="container-wide">

        <!-- HEADER -->
        <div class="section-header">
            <div class="header-badge-row"></div>
            <h2 class="h2 text-white">
                Health Insurance vs. Other Insurance Categories
            </h2>
            <p class="text-body-med max-w-800">
                Each type of insurance serves a different purpose. Here's how health insurance compares with other common insurance categories.
            </p>
        </div>

        <!-- CATEGORY TABS -->
        <div class="travel-category-tabs" role="tablist">
            <?php $i = 0; ?>
            <?php foreach ($healthTabsData as $key => $data): ?>
                <button
                    type="button"
                    class="travel-tab <?= $i === 0 ? 'active' : ''; ?>"
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
        <div class="travel-content-container">
            <div class="travel-tab-content">
                <?php $i = 0; ?>
                <?php foreach ($healthTabsData as $key => $data): ?>
                    <div
                        class="travel-tab-panel <?= $i === 0 ? 'active' : ''; ?>"
                        id="health-<?= esc_attr($key); ?>"
                        role="tabpanel"
                        aria-hidden="<?= $i === 0 ? 'false' : 'true'; ?>"
                    >
                        <div class="travel-content-card">
                            <div class="travel-content-header">
                                <h3><?= esc_html($data['title']); ?></h3>
                            </div>

                            <p class="travel-card-description">
                                <?= esc_html($data['scenario']); ?>
                            </p>

                            <?php if ($data['type'] === 'table'): ?>
                                <div class="travel-table-wrapper">
                                    <table class="travel-comparison-table">
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
                                                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                                                                        <?php else: ?>
                                                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/></svg>
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
    const section = document.querySelector('#health-insurance-other');
    if (!section) return;

    const buttons = section.querySelectorAll('.travel-tab');
    const panels = section.querySelectorAll('.travel-tab-panel');

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

            const targetPanel = section.querySelector('#health-' + target);
            if (targetPanel) {
                targetPanel.classList.add('active');
                targetPanel.setAttribute('aria-hidden', 'false');
            }
        });
    });
});
</script>