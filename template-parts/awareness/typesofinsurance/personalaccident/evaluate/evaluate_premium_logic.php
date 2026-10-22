<?php
/**
 * Vima Vidya
 * Personal Accident Insurance — What Influences Premium?
 *
 * Left-aligned header layout + tabbed panels + Premium Calculation Framework
 */

$pa_pricing_factors = [
    [
        'number'       => '01',
        'tab'          => 'CSI',
        'tab_label'    => 'Capital Sum Insured',
        'title'        => 'Capital Sum Insured (CSI)',
        'subtitle'     => 'The foundation of your accident coverage',
        'image'        => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'Premium is almost always a rate per ₹1,000 of CSI. Double the CSI, broadly double the premium. This is the single biggest lever.',
        'control'      => 'Full control',
        'control_text' => 'Choose your CSI thoughtfully based on your income replacement needs.',
        'points'       => [
            'Income multiplication rule (10x–20x)',
            'Adequate family financial security',
            'Review upon major life milestones'
        ]
    ],
    [
        'number'       => '02',
        'tab'          => 'Occupation',
        'tab_label'    => 'Occupation Class',
        'title'        => 'Occupation Class',
        'subtitle'     => 'Your job risk determines your rate tier',
        'image'        => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'LIMITED',
        'badge_class'  => 'limited',
        'how'          => 'Insurers classify all occupations into 3–4 risk classes. A miner pays 4–6x the premium of an office worker for identical CSI. Your declared occupation at proposal stage locks in your class.',
        'control'      => 'Declare accurately',
        'control_text' => 'Misrepresentation of occupation can result in voided claims.',
        'points'       => [
            'Class 1: Desk jobs & administrative work',
            'Class 2: Non-hazardous travel/field duties',
            'Class 3: Manual labour & heavy machinery',
            'Class 4: High-risk occupations (mining/heights)'
        ]
    ],
    [
        'number'       => '03',
        'tab'          => 'Age',
        'tab_label'    => 'Age Bands',
        'title'        => 'Age & Life Stage',
        'subtitle'     => 'PA premiums are structured by age brackets',
        'image'        => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'PARTIAL',
        'badge_class'  => 'partial',
        'how'          => 'Each age band (18–35, 36–45, 46–55, 56–65) attracts a higher base rate. Buy early to lock in a lower band — continuous renewal keeps you stable longer.',
        'control'      => 'Buy early',
        'control_text' => 'Renewal is typically cheaper than starting a new policy at an older age.',
        'points'       => [
            'Age-banded base rates',
            'Entry age advantages',
            'Long-term renewability benefits',
            'Maximum entry age ceilings'
        ]
    ],
    [
        'number'       => '04',
        'tab'          => 'Add-ons',
        'tab_label'    => 'Add-ons Selected',
        'title'        => 'Add-ons & Riders',
        'subtitle'     => 'Enhance protection for income loss and expenses',
        'image'        => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'Each add-on (TTD, Education Grant, Hospital Daily Cash, etc.) adds a defined percentage or flat fee to the base premium. More cover means a proportionally higher total premium.',
        'control'      => 'Your choice',
        'control_text' => 'Choose add-ons that match your actual risk profile and family dependency.',
        'points'       => [
            'Temporary Total Disablement (TTD)',
            'Child Education Grant',
            'Hospital Daily Cash rider',
            'Medical expense reimbursement'
        ]
    ],
    [
        'number'       => '05',
        'tab'          => 'Geography',
        'tab_label'    => 'Geographical Zone',
        'title'        => 'Geographical Scope & Zone',
        'subtitle'     => 'Where you travel affects policy underwriting',
        'image'        => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'LIMITED',
        'badge_class'  => 'limited',
        'how'          => 'Some insurers apply loading for high-accident regions or frequent international travel. Standard India-wide coverage policies do not differ by city.',
        'control'      => 'Limited control',
        'control_text' => 'Reflects your operational travel and work locations.',
        'points'       => [
            'Worldwide vs. India-only coverage',
            'Loading for high-risk travel regions',
            'Adventure sports risk extensions',
            'Commuter risk factors'
        ]
    ],
    [
        'number'       => '06',
        'tab'          => 'Claim History',
        'tab_label'    => 'No-Claim History',
        'title'        => 'No-Claim History & Cumulative Bonus',
        'subtitle'     => 'Clean records reward you with enhanced coverage',
        'image'        => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'PARTIAL',
        'badge_class'  => 'partial',
        'how'          => 'Most PA policies offer a cumulative bonus: a 5–10% increase in CSI for each claim-free year at no extra premium, up to a maximum cap of 50%.',
        'control'      => 'Partial control',
        'control_text' => 'Maintain the policy continuously and avoid policy lapses.',
        'points'       => [
            'Cumulative Bonus (CB) structure',
            'Claim-free policy extensions',
            'Continuous policy maintenance',
            'Bonus protection add-ons'
        ]
    ]
];
?>

<section class="vv-pricing-factors" id="evaluate-pa-premium-logic">
    <div class="vv-pricing-factors__container">

        <!-- SECTION HEADER (LEFT ALIGNED) -->
        <header class="vv-pricing-factors__header">
            <span class="vv-pricing-factors__eyebrow">EVALUATE BEFORE YOU BUY</span>
            <h2 class="vv-pricing-factors__title">
                How Are PA Premiums Calculated?
            </h2>
            <p class="vv-pricing-factors__intro">
                The most common reason people delay buying PA Insurance is the assumption that it is expensive. It is not. Understanding how the number is arrived at helps you make a smarter decision — and a smarter comparison.
            </p>
        </header>

        <!-- TABS (6 items for PA) -->
        <div class="vv-pricing-tabs vv-pricing-tabs--pa" role="tablist" aria-label="Personal accident insurance premium factors">
            <?php foreach ($pa_pricing_factors as $index =>$factor) : ?>
            <button class="vv-pricing-tab <?php echo $index === 0 ? 'is-active' : ''; ?>"
                id="pa-tab-<?php echo esc_attr($index); ?>" type="button" role="tab"
                aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                aria-controls="pa-panel-<?php echo esc_attr($index); ?>"
                data-tab="<?php echo esc_attr($index); ?>">
                <span class="vv-pricing-tab__number">
                    <?php echo esc_html($factor['number']); ?>
                </span>
                <span class="vv-pricing-tab__text">
                    <?php echo esc_html($factor['tab_label']); ?>
                </span>
            </button>
            <?php endforeach; ?>
        </div>

        <!-- TAB PANELS -->
        <div class="vv-pricing-panels">
            <?php foreach ($pa_pricing_factors as $index =>$factor) : ?>
            <article class="vv-pricing-panel <?php echo $index === 0 ? 'is-active' : ''; ?>"
                id="pa-panel-<?php echo esc_attr($index); ?>" role="tabpanel"
                aria-labelledby="pa-tab-<?php echo esc_attr($index); ?>">
                
                <!-- IMAGE SIDE -->
                <div class="vv-pricing-panel__visual">
                    <img src="<?php echo esc_url($factor['image']); ?>" alt="<?php echo esc_attr($factor['title']); ?>"
                        loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>">
                    <div class="vv-pricing-panel__visual-overlay"></div>
                    <div class="vv-pricing-panel__visual-label">
                        <span>
                            FACTOR <?php echo esc_html($factor['number']); ?>
                        </span>
                    </div>
                </div>

                <!-- INFORMATION SIDE -->
                <div class="vv-pricing-panel__content">
                    <div class="vv-pricing-panel__heading">
                        <div class="vv-pricing-panel__icon">
                            <span class="dashicons dashicons-shield"></span>
                        </div>
                        <div>
                            <span class="vv-pricing-panel__section-label">
                                PRICING FACTOR
                            </span>
                            <h3 class="vv-pricing-panel__title">
                                <?php echo esc_html($factor['title']); ?>
                            </h3>
                            <p class="vv-pricing-panel__subtitle">
                                <?php echo esc_html($factor['subtitle']); ?>
                            </p>
                        </div>
                    </div>

                    <!-- HOW IT WORKS -->
                    <div class="vv-pricing-info">
                        <span class="vv-pricing-info__label">
                            HOW IT WORKS
                        </span>
                        <p class="vv-pricing-info__text">
                            <?php echo esc_html($factor['how']); ?>
                        </p>
                    </div>

                    <!-- YOUR CONTROL -->
                    <div class="vv-pricing-control">
                        <div class="vv-pricing-control__top">
                            <span class="vv-pricing-info__label">
                                YOUR CONTROL
                            </span>
                            <span class="vv-pricing-status vv-pricing-status--<?php echo esc_attr($factor['badge_class']); ?>">
                                <?php echo esc_html($factor['badge']); ?>
                            </span>
                        </div>
                        <h4 class="vv-pricing-control__title">
                            <?php echo esc_html($factor['control']); ?>
                        </h4>
                        <p class="vv-pricing-control__text">
                            <?php echo esc_html($factor['control_text']); ?>
                        </p>
                    </div>

                    <!-- KEY POINTS -->
                    <div class="vv-pricing-points">
                        <span class="vv-pricing-info__label">
                            KEY POINTS
                        </span>
                        <ul>
                            <?php foreach ($factor['points'] as$point) : ?>
                            <li>
                                <span class="vv-pricing-points__check">✓</span>
                                <span><?php echo esc_html($point); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <!-- BOTTOM NOTE -->
        <div class="vv-pricing-factors__note">
            <span class="vv-pricing-factors__note-icon">
                <span class="dashicons dashicons-info-outline"></span>
            </span>
            <p>
                <strong>Remember:</strong>
                The final personal accident premium depends on the insurer, policy wording, risk assessment, capital sum insured, selected riders and applicable terms and conditions.
            </p>
        </div>

        <!-- ==========================================
            PREMIUM CALCULATION FRAMEWORK SECTION (PA)
        =========================================== -->
        <div class="vv-calc-framework">
            <div class="vv-calc-framework__card">
                <h2 class="vv-pricing-factors__title">
                   The Premium Calculation Formula
                </h2>
                <p class="vv-calc-framework__intro">
                    While each insurer uses its own actuarial tables, the broad structure is:
                </p>

                <!-- STEP 1 -->
                <div class="vv-calc-step">
                    <div class="vv-calc-box">
                        <div class="vv-calc-equation">
                            <span class="vv-calc-label">Base Premium =</span>
                            <span class="vv-calc-term">CSI</span>
                            <span class="vv-calc-operator">×</span>
                            <span class="vv-calc-term">Occupation Rate</span>
                            <span class="vv-calc-operator">×</span>
                            <span class="vv-calc-term">Age Band Multiplier</span>
                        </div>
                    </div>
                </div>

                <!-- STEP 2 -->
                <div class="vv-calc-step">
                    <div class="vv-calc-box">
                        <div class="vv-calc-equation">
                            <span class="vv-calc-label">Final Premium =</span>
                            <span class="vv-calc-term">Base Premium</span>
                            <span class="vv-calc-operator">+</span>
                            <span class="vv-calc-term">Add-on Premiums</span>
                            <span class="vv-calc-operator">+</span>
                            <span class="vv-calc-term">GST @ 18%</span>
                        </div>
                    </div>
                    <p class="vv-calc-note-text">
                        GST at 18% applies to all general insurance premiums in India. When comparing quotes, always compare the premium excluding GST to ensure a like-for-like comparison.
                    </p>
                </div>

                <hr class="vv-calc-divider">

                <!-- STRUCTURED ILLUSTRATIVE EXAMPLES -->
                <div class="vv-calc-examples-text">
                    <p class="vv-calc-example-item">
                        <strong>Illustrative Example:</strong> Ramesh, 38, IT manager, CSI ₹1 crore, Class 1 occupation, TTD add-on selected. Base rate (illustrative): ₹0.08 per ₹100 CSI = ₹8,000. TTD add-on: ₹1,200. Sub-total: ₹9,200. GST 18%: ₹1,656. Total annual outflow: ₹10,856. Monthly: ₹905.
                    </p>
                </div>

                <div class="vv-calc-footer-note">
                    Each insurer uses its own actuarial tables. This is a simplified framework for understanding the major pricing drivers.
                </div>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Corrected selector from #pa-premium-logic to #evaluate-pa-premium-logic
    const tabs = document.querySelectorAll('#evaluate-pa-premium-logic .vv-pricing-tab');
    const panels = document.querySelectorAll('#evaluate-pa-premium-logic .vv-pricing-panel');

    if (!tabs.length || !panels.length) {
        return;
    }

    function switchPaTab(targetIndex) {
        tabs.forEach(function(item) {
            item.classList.remove('is-active');
            item.setAttribute('aria-selected', 'false');
        });

        panels.forEach(function(panel) {
            panel.classList.remove('is-active');
        });

        const activeTab = document.querySelector(`#evaluate-pa-premium-logic .vv-pricing-tab[data-tab="${targetIndex}"]`);
        const activePanel = document.getElementById('pa-panel-' + targetIndex);

        if (activeTab) {
            activeTab.classList.add('is-active');
            activeTab.setAttribute('aria-selected', 'true');
        }

        if (activePanel) {
            activePanel.classList.add('is-active');
        }
    }

    tabs.forEach(function(tab) {
        tab.addEventListener('click', function() {
            const targetIndex = this.getAttribute('data-tab');
            switchPaTab(targetIndex);
        });
    });

    /* KEYBOARD NAVIGATION */
    tabs.forEach(function(tab, index) {
        tab.addEventListener('keydown', function(event) {
            let newIndex = index;

            switch (event.key) {
                case 'ArrowRight':
                    newIndex = (index + 1) % tabs.length;
                    break;
                case 'ArrowLeft':
                    newIndex = (index - 1 + tabs.length) % tabs.length;
                    break;
                case 'Home':
                    newIndex = 0;
                    break;
                case 'End':
                    newIndex = tabs.length - 1;
                    break;
                default:
                    return;
            }

            event.preventDefault();
            tabs[newIndex].focus();
            switchPaTab(tabs[newIndex].getAttribute('data-tab'));
        });
    });
});
</script>