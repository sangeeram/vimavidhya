<?php
/**
 * Template Part: What to Consider When Choosing a Policy
 * Theme: Vima Vidya Custom Theme (Tabs + White Cards Architecture)
 */

$policy_considerations = [
    'csi' => [
        'label' => 'Capital Sum Insured',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
        'title' => 'Capital Sum Insured (CSI): The Foundation of Your Cover',
        'subtitle' => 'The Capital Sum Insured is the maximum amount your policy will pay for Accidental Death or Permanent Total Disability. Every other benefit is calculated as a percentage of this figure.',
        'content_type' => 'text_with_callout',
        'intro' => 'The most common mistake Indian buyers make is choosing too low a CSI because a lower sum means a lower premium. But the premium saved is meaningless if the payout cannot cover the actual loss.',
        'callout' => [
            'type' => 'formula',
            'title' => 'How to calculate the ideal CSI',
            'text' => 'A widely accepted benchmark: Capital Sum Insured = 10–15× your annual gross income. If your annual income is ₹8 lakh, your CSI should be at least ₹80 lakh to ₹1.2 crore. Add outstanding liabilities (home loan, personal loan) to it. This is the sum that would replace your income-generating capacity for a meaningful period, if you were permanently disabled.'
        ]
    ],
    'scope' => [
        'label' => 'Scope of Cover',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>',
        'title' => 'Scope of Cover: What Events Are Included?',
        'subtitle' => 'All policies cover the basics — Accidental Death and Permanent Total Disability. But the list of covered disabilities and payout percentages vary significantly.',
        'content_type' => 'list_detailed',
        'intro' => 'When comparing policies, examine the Disability Schedule carefully. Look specifically for:',
        'items' => [
            ['label' => 'Loss of limbs', 'desc' => 'How many, at what level — above or below elbow/knee.'],
            ['label' => 'Loss of sight', 'desc' => 'One eye vs. both eyes.'],
            ['label' => 'Loss of hearing', 'desc' => 'One ear vs. both ears.'],
            ['label' => 'Paralysis', 'desc' => 'Paraplegia, quadriplegia, hemiplegia.'],
            ['label' => 'Fractures', 'desc' => 'Some policies specifically cover fracture care as a lump sum.']
        ]
    ],
    'exclusions' => [
        'label' => 'Exclusions',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>',
        'title' => 'Exclusions: What the Policy Will NOT Pay For',
        'subtitle' => 'Every PA policy has a list of exclusions — events or circumstances under which no claim will be paid. Reading these is financial literacy.',
        'content_type' => 'exclusions_list',
        'intro' => 'Standard exclusions in PA insurance in India include:',
        'items' => [
            'Self-inflicted injury or suicide attempt',
            'Injury while under the influence of alcohol or drugs (including unprescribed medication)',
            'Participation in adventure sports — sky diving, parachuting, scuba diving, bungee jumping (unless added as a rider)',
            'Injury arising from war, invasion, civil unrest, or nuclear events',
            'Injury while committing a criminal act, riot participation, or acts of terrorism',
            'Illness, disease, or medical conditions — even if they result in disability (PA covers accident-caused injury only)',
            'Complications arising from childbirth, pregnancy, or maternity (in most standard policies)',
            'HIV/AIDS related injuries or disabilities',
            'Pre-existing disabilities or injuries present before the policy inception',
            'Mental illness, psychiatric conditions, or psychological trauma without physical injury',
            'Natural death not caused by an accident',
            'Participation in military, naval, or air force operations'
        ],
        'callout' => [
            'type' => 'warning',
            'title' => 'The Realization — Alcohol-Related Claim Rejections',
            'text' => 'One of the most common claim rejections occurs when a policyholder\'s death or injury is linked to alcohol consumption at the time of the accident. Insurers require a blood alcohol report in road accident fatalities. If the insured’s alcohol level was above legal limits, the claim can be rejected.'
        ]
    ],
    'occupation' => [
        'label' => 'Occupational Risk',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'title' => 'Occupational Categories: How Your Job Affects Premium & Coverage',
        'subtitle' => 'PA Insurance classifies occupations by risk level. This is one of the most important and least-understood aspects of buying a PA policy.',
        'content_type' => 'table_view',
        'intro' => 'Insurers typically use three or four risk classes:',
        'table' => [
            ['class' => 'Class 1 (Lowest Risk)', 'occupations' => 'Office workers, doctors, teachers, IT professionals, managers', 'effect' => 'Lowest premium rates'],
            ['class' => 'Class 2 (Moderate Risk)', 'occupations' => 'Construction supervisors, drivers, shop floor workers, sales field staff', 'effect' => 'Moderate premium rates'],
            ['class' => 'Class 3 (Higher Risk)', 'occupations' => 'Manual labor, miners, explosive industry workers, high-altitude workers', 'effect' => 'Higher premium, some exclusions apply'],
            ['class' => 'Class 4 / Excluded', 'occupations' => 'Armed forces, aviation (certain roles), hazardous trades', 'effect' => 'Very high premium or no cover available']
        ],
        'callout' => [
            'type' => 'warning',
            'title' => 'Declare your occupation truthfully',
            'text' => 'If you are a field sales engineer who rides a two-wheeler daily and declare yourself as an \'office executive\' to save premium, you risk claim rejection under material misrepresentation. Always declare accurately.'
        ]
    ],
    'addons' => [
        'label' => 'Add-ons & Riders',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>',
        'title' => 'Add-ons and Riders Worth Understanding',
        'subtitle' => 'Standard PA policies cover death and disability. Life is complex, which is why modular add-ons bridge the gap.',
        'content_type' => 'grid_cards',
        'items' => [
            ['name' => 'Accidental Medical Reimbursement', 'desc' => 'Pays hospital and treatment bills caused by an accident.', 'best' => 'Those without adequate health cover'],
            ['name' => 'Temporary Total Disability (TTD)', 'desc' => 'Pays a weekly sum when an accident prevents working temporarily.', 'best' => 'Self-employed, gig workers, freelancers'],
            ['name' => 'Education Grant', 'desc' => 'Lump sum for dependent children\'s education if disabled/deceased.', 'best' => 'Parents with school-going children'],
            ['name' => 'Loan / EMI Protector', 'desc' => 'Covers outstanding EMIs during disability or death.', 'best' => 'Those with active home/vehicle loans'],
            ['name' => 'Fracture Care', 'desc' => 'Lump sum payment for fractures sustained in an accident.', 'best' => 'Construction workers, 2-wheeler commuters'],
            ['name' => 'Hospital Daily Cash', 'desc' => 'Fixed daily amount for each day hospitalized due to an accident.', 'best' => 'Compensates incidentals not covered by health insurance'],
            ['name' => 'Adventure Sports Cover', 'desc' => 'Extends cover to trekking, paragliding, scuba diving, etc.', 'best' => 'Outdoor enthusiasts, young professionals'],
            ['name' => 'Cumulative Bonus', 'desc' => 'Sum insured increases by 5–10% for every claim-free year.', 'best' => 'Long-term policyholders maintaining clean records']
        ]
    ],
    'dependents' => [
        'label' => 'Dependent Checklist',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="23 21v-2a4 4 0 0 0-3-3.87"/><path d="16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'title' => 'The Dependent-Protection Checklist',
        'subtitle' => 'An accident does not happen to one person. It happens to a family.',
        'content_type' => 'checklist_view',
        'intro' => 'When deciding your PA coverage, answer these questions honestly:',
        'items' => [
            'How many people depend on my income? List children, spouse, parents, siblings.',
            'What are my fixed monthly financial obligations? EMIs, school fees, rent, utilities.',
            'If I were disabled tomorrow and could not work for 5 years, could my savings sustain my family?',
            'Are my dependents named as nominees in my policy? Have I informed them where documents are kept?',
            'Does my spouse have their own independent PA cover?'
        ],
        'callout' => [
            'type' => 'success',
            'title' => 'Key Takeaway',
            'text' => 'The best policy is one your family can claim on. Tell your nominee where the policy is stored, which company it is from, what the policy number is, and what documents they will need.'
        ]
    ]
];
?>

<section class="asset-tabs-section" id="evaluate-pa-choosing-policy">
    <div class="container-wide">

        <!-- HEADER -->
        <div class="section-header">
            <h2 class="h2 text-navy m-t-12">
                What to Consider When Choosing a Policy
            </h2>
            <p class="text-body-med max-w-800 m-t-16">
                A policy is only as good as what it covers; and what it does not. PA Insurance policies appear simple. The difference between a policy that pays fully and one that disappoints lies in details.
            </p>
        </div>

        <!-- CATEGORY TABS -->
        <div class="asset-category-tabs m-t-32" role="tablist">
            <?php $i = 0; ?>
            <?php foreach ($policy_considerations as $key => $data): ?>
                <button
                    type="button"
                    class="asset-tab <?= $i === 0 ? 'active' : ''; ?>"
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
        <div class="asset-tab-content m-t-24">
            <?php $i = 0; ?>
            <?php foreach ($policy_considerations as $key => $data): ?>
                <div
                    class="asset-tab-panel <?= $i === 0 ? 'active' : ''; ?>"
                    id="policy-<?= htmlspecialchars($key); ?>"
                    role="tabpanel"
                    aria-hidden="<?= $i === 0 ? 'false' : 'true'; ?>"
                >
                    <div class="asset-content-card">
                        
                        <!-- PANEL HEADER -->
                        <div class="asset-content-header">
                            <div>
                                <span class="asset-content-label"><?= htmlspecialchars($data['label']); ?></span>
                                <h3><?= htmlspecialchars($data['title']); ?></h3>
                            </div>
                            <span class="asset-policy-note">Critical Analysis</span>
                        </div>

                        <p class="asset-card-description"><?= htmlspecialchars($data['subtitle']); ?></p>
                        <?php if (!empty($data['intro'])): ?>
                            <p class="asset-card-intro"><?= htmlspecialchars($data['intro']); ?></p>
                        <?php endif; ?>

                        <!-- CONTENT VARIANT: TEXT WITH CALLOUT -->
                        <?php if ($data['content_type'] === 'text_with_callout'): ?>
                            <?php if (!empty($data['callout'])): ?>
                                <div class="policy-callout-box <?= $data['callout']['type']; ?>">
                                    <div class="callout-icon">📐</div>
                                    <div class="callout-content">
                                        <strong><?= htmlspecialchars($data['callout']['title']); ?></strong>
                                        <p><?= htmlspecialchars($data['callout']['text']); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                        <!-- CONTENT VARIANT: DETAILED LIST -->
                        <?php elseif ($data['content_type'] === 'list_detailed'): ?>
                            <div class="asset-items-container">
                                <ul class="asset-bullet-list">
                                    <?php foreach ($data['items'] as $item): ?>
                                        <li>
                                            <strong><?= htmlspecialchars($item['label']); ?>:</strong> 
                                            <span><?= htmlspecialchars($item['desc']); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                        <!-- CONTENT VARIANT: EXCLUSIONS -->
                        <?php elseif ($data['content_type'] === 'exclusions_list'): ?>
                            <div class="asset-items-container">
                                <ul class="asset-bullet-list exclusions-grid">
                                    <?php foreach ($data['items'] as $excl): ?>
                                        <li>
                                            <span class="excl-bullet">✕</span>
                                            <span><?= htmlspecialchars($excl); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php if (!empty($data['callout'])): ?>
                                <div class="policy-callout-box <?= $data['callout']['type']; ?> m-t-24">
                                    <div class="callout-icon">⚠️</div>
                                    <div class="callout-content">
                                        <strong><?= htmlspecialchars($data['callout']['title']); ?></strong>
                                        <p><?= htmlspecialchars($data['callout']['text']); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                        <!-- CONTENT VARIANT: TABLE VIEW -->
                        <?php elseif ($data['content_type'] === 'table_view'): ?>
                            <div class="policy-table-wrapper m-t-20">
                                <table class="policy-risk-table">
                                    <thead>
                                        <tr>
                                            <th>Risk Class</th>
                                            <th>Typical Occupations</th>
                                            <th>Effect on Premium</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data['table'] as $row): ?>
                                            <tr>
                                                <td><strong><?= htmlspecialchars($row['class']); ?></strong></td>
                                                <td><?= htmlspecialchars($row['occupations']); ?></td>
                                                <td><span class="effect-tag"><?= htmlspecialchars($row['effect']); ?></span></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php if (!empty($data['callout'])): ?>
                                <div class="policy-callout-box <?= $data['callout']['type']; ?> m-t-24">
                                    <div class="callout-icon">⚠️</div>
                                    <div class="callout-content">
                                        <strong><?= htmlspecialchars($data['callout']['title']); ?></strong>
                                        <p><?= htmlspecialchars($data['callout']['text']); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>

                        <!-- CONTENT VARIANT: GRID CARDS (ADD-ONS) -->
                        <?php elseif ($data['content_type'] === 'grid_cards'): ?>
                            <div class="policy-addons-grid m-t-20">
                                <?php foreach ($data['items'] as $addon): ?>
                                    <div class="addon-mini-card">
                                        <h5><?= htmlspecialchars($addon['name']); ?></h5>
                                        <p class="addon-desc"><?= htmlspecialchars($addon['desc']); ?></p>
                                        <span class="addon-best"><strong>Best for:</strong> <?= htmlspecialchars($addon['best']); ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        <!-- CONTENT VARIANT: CHECKLIST VIEW -->
                        <?php elseif ($data['content_type'] === 'checklist_view'): ?>
                            <div class="asset-items-container">
                                <ul class="asset-bullet-list checklist">
                                    <?php foreach ($data['items'] as $check): ?>
                                        <li>
                                            <span class="check-box-icon">✓</span>
                                            <span><?= htmlspecialchars($check); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php if (!empty($data['callout'])): ?>
                                <div class="policy-callout-box <?= $data['callout']['type']; ?> m-t-24">
                                    <div class="callout-icon">✅</div>
                                    <div class="callout-content">
                                        <strong><?= htmlspecialchars($data['callout']['title']); ?></strong>
                                        <p><?= htmlspecialchars($data['callout']['text']); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>

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
    const section = document.querySelector('#evaluate-pa-choosing-policy');
    if (!section) return;

    const buttons = section.querySelectorAll('.asset-tab');
    const panels = section.querySelectorAll('.asset-tab-panel');

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

            const targetPanel = section.querySelector('#policy-' + target);
            if (targetPanel) {
                targetPanel.classList.add('active');
                targetPanel.setAttribute('aria-hidden', 'false');
            }
        });
    });
});
</script>