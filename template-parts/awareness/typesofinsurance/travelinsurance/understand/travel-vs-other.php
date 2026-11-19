<?php
/**
 * Template Part: Travel Insurance vs Other Insurance Categories (Single Column Layout)
 * 
 * @package VimaVidya / Custom Theme
 */

$travelTabsData = [
    'health' => [
        'label' => 'Health Insurance',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>',
        'title' => "'My health insurance will cover me' — The most expensive belief a traveller can carry",
        'scenario' => "When people hear 'travel insurance', the most common response from financially aware Indians is: 'I have health insurance — so I'm covered, right?' This is the single most dangerous misconception in Indian travel planning.",
        'type' => 'table',
        'columns' => ['What You Need', 'Covered in Health Insurance?', 'Covered in Travel Insurance?'],
        'rows' => [
            ['Medical emergencies in India', 'Yes', 'Domestic plans: Yes'],
            ['Medical emergencies abroad', 'No — overseas exclusion clause in most Indian policies', 'Yes — primary purpose of international travel insurance'],
            ['Emergency medical evacuation', 'Limited — rarely covers helicopter or air evacuation', 'Yes — explicitly covered; insurer arranges and funds it'],
            ['Flight / train delay compensation', 'Not applicable', 'Yes — meal and accommodation up to the delay sub-limit'],
            ['Checked baggage loss', 'Not applicable', 'Yes — reimbursement up to baggage sub-limit'],
            ['Trip cancellation reimbursement', 'Not applicable', 'Yes — for defined covered reasons'],
            ['Loss of passport abroad', 'Not applicable', 'Yes — emergency replacement cost covered'],
            ['Personal liability abroad', 'Not applicable', 'Yes — third-party injury or property damage'],
            ['Compassionate visit if hospitalised abroad', 'Not applicable', 'Yes — economy airfare for a family member to reach you'],
            ['Accidental death during the trip', 'Not applicable', 'Yes — personal accident benefit during the trip'],
            ['Repatriation of mortal remains', 'Not applicable', 'Yes — one of the most important international benefits']
        ],
        'takeaway' => "Your Indian health insurance has a cashless network that does not exist outside India. International travel insurance provides a 24/7 Assistance Service that speaks directly to foreign hospitals, arranges cashless treatment, and prevents financial crises."
    ],
    'employer' => [
        'label' => 'Employer Group',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'title' => "Your Employer's Travel Cover vs. Your Own Policy — What's the Difference?",
        'scenario' => "If your employer's group policy is your only travel cover, you have no protection on any personal trip, family holiday, pilgrimage, or trip taken after changing jobs. Freelancers and self-employed individuals have no employer policy at all.",
        'type' => 'table',
        'columns' => ['Aspect', 'Employer Group Travel Cover', 'Individual Travel Policy'],
        'rows' => [
            ['What trips are covered', 'Only official business trips. Personal holidays are not covered.', 'Any trip you declare — work, leisure, domestic, or international.'],
            ['Medical cover amount', 'Set by your employer. Often too low for destinations like the USA, Europe, or Australia.', 'You decide the amount based on where you are going and what you need.'],
            ['Does it cover your family', 'No. Only you as the employee are covered.', 'Yes — a Family Floater covers your spouse, children, and declared parents.'],
            ['Leisure travel', 'Not covered.', 'Covered, as long as you declare the trip when buying.'],
            ['What happens when you change jobs', 'Cover stops the day your employment ends.', 'The policy is yours until it expires, regardless of where you work.'],
            ['Can you customise it', 'No. What your employer buys is what you get.', 'Yes — you can add adventure sports cover, senior parent cover, higher medical limits, and more.'],
            ['Who controls it', 'Your employer. They can change the benefits or cancel the policy at any time.', 'You. It stays in force as long as you pay the premium.']
        ],
        'takeaway' => "A domestic travel policy for a single trip costs ₹150–₹400, and an international policy costs ₹800–₹5,000. These modest premiums prevent devastating out-of-pocket expenses when travelling."
    ],
    'travel' => [
        'label' => 'Three-Way Distinction',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/></svg>',
        'title' => 'The Critical Three-Way Distinction: Travel Insurance vs. PA Insurance vs. Health Insurance',
        'scenario' => 'Each policy does a different job. None of them does the other\'s job. Understanding how Travel, PA, and Health insurance complement each other ensures total protection across every life and travel milestone.',
        'type' => 'table',
        'columns' => ['Situation', 'Travel Insurance', 'PA Insurance', 'Health Insurance'],
        'rows' => [
            ['Sudden illness abroad — appendicitis, food poisoning', 'Yes — core benefit of international travel insurance', 'No — PA covers accident-caused injury only, not illness', 'No — most Indian health plans exclude overseas treatment'],
            ['Accident, causing injury while travelling', 'Yes — medical bills during the trip covered', 'Yes — disability/death lump sum and income replacement', 'Yes, within India; No for overseas trips'],
            ['Flight delayed; prepaid hotel non-refundable', 'Yes — Trip Delay and Interruption benefit', 'Not applicable', 'Not applicable'],
            ['Baggage stolen on overnight train', 'Yes — Baggage Loss benefit', 'Not applicable', 'Not applicable'],
            ['Permanent disability from a travel accident', 'Limited — small PA benefit only; not for long-term income replacement', 'Yes — full CSI payout; this is the core purpose of PA insurance', 'No — pays treatment bills, not disability compensation'],
            ['Lost income during recovery at home after accident', 'No — travel insurance expires with the trip', 'Yes — TTD benefit continues until recovery irrespective of where the accident occurred', 'No — pays hospital bills, not lost wages'],
            ['Helicopter evacuation from a remote trek', 'Yes — Medical Evacuation is a core travel benefit', 'No — PA covers death/disability outcomes, not evacuation logistics', 'No — rarely covered by standard health insurance']
        ],
        'takeaway' => 'Health insurance fixes your body at home. PA insurance replaces your income anywhere in the world for any accident. Travel insurance protects your trip from start to finish. If you travel without travel insurance, you are unprotected during the journey itself.'
    ],
    'exclusions' => [
        'label' => 'Key Exclusions',
        'icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>',
        'title' => 'What Travel Insurance Does Not Cover: Key Exclusions',
        'scenario' => 'Reviewing policy exclusions is essential to ensure you are fully aware of limitations before embarking on domestic or international travel.',
        'type' => 'list',
        'items' => [
            ['Pre-existing medical conditions', 'Unless a specific PED waiver is purchased; stability clause requirements apply.'],
            ['Self-inflicted injury or substance influence', 'Self-inflicted injury or suicide; injury while under the influence of alcohol or drugs.'],
            ['Adventure sports', 'Participation in adventure sports — trekking above specified altitudes, scuba diving, bungee jumping, paragliding, white-water rafting — unless an Adventure Sports Add-On is purchased.'],
            ['Restricted regions', 'Travel to countries under Ministry of External Affairs advisories or active conflict zones.'],
            ['Elective treatment', 'Elective or planned medical treatment abroad — travel insurance covers emergencies only.'],
            ['Insured\'s own actions', 'Losses caused by the insured\'s own actions — arriving late at the airport, failing to obtain required documents.'],
            ['Dental treatment', 'Dental treatment unless caused by a sudden accident during the trip.'],
            ['Post-event purchase', 'Losses that occur before the policy start date — you cannot buy travel insurance after an event and expect coverage.']
        ],
        'takeaway' => 'Always verify your travel policy phrasing, add-ons, and endorsements before departing to prevent unexpected out-of-pocket expenses.'
    ]
];
?>

<section class="travel-comparison-section" id="travel-insurance-other">
    <div class="container-wide">

        <!-- HEADER -->
        <div class="section-header">
            <div class="header-badge-row"></div>
            <h2 class="h2 text-white">
                Travel Insurance vs. Other Insurance Categories
            </h2>
            <p class="text-body-med max-w-800">
                Each type of insurance serves a different purpose. Here's how travel insurance compares with other common insurance categories.
            </p>
        </div>

        <!-- CATEGORY TABS -->
        <div class="travel-category-tabs" role="tablist">
            <?php $i = 0; ?>
            <?php foreach ($travelTabsData as $key => $data): ?>
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
                <?php foreach ($travelTabsData as $key => $data): ?>
                    <div
                        class="travel-tab-panel <?= $i === 0 ? 'active' : ''; ?>"
                        id="travel-<?= esc_attr($key); ?>"
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
                                                                        <?php elseif ($key === 'travel'): ?>
                                                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/></svg>
                                                                        <?php else: ?>
                                                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
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
                                <ul class="travel-bullet-list">
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
    const section = document.querySelector('.travel-comparison-section');
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

            const targetPanel = section.querySelector('#travel-' + target);
            if (targetPanel) {
                targetPanel.classList.add('active');
                targetPanel.setAttribute('aria-hidden', 'false');
            }
        });
    });
});
</script>