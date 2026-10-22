<?php
/**
 * Vima Vidya
 * Property Insurance — What Influences Premium?
 *
 * Left-aligned header layout + tabbed panels + Premium Calculation Framework
 */

$pricing_factors = [
    [
        'number'       => '01',
        'tab'          => 'Sum Insured',
        'tab_label'    => 'Sum Insured',
        'title'        => 'Sum Insured',
        'subtitle'     => 'Building + Contents / Stock + Equipment',
        'image'        => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'Premium is broadly a rate per ₹1,000 of sum insured. The higher the insured value, the higher the premium. This is the single biggest lever.',
        'control'      => 'Full control',
        'control_text' => 'Calculate reinstatement value carefully when deciding the sum insured.',
        'points'       => [
            'Choose an adequate sum insured',
            'Avoid deliberate underinsurance',
            'Review the value when assets change'
        ]
    ],
    [
        'number'       => '02',
        'tab'          => 'Location',
        'tab_label'    => 'Location & Flood / Seismic',
        'title'        => 'Location & Flood / Seismic Zone',
        'subtitle'     => 'Geographic risk influences the premium',
        'image'        => 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'LIMITED',
        'badge_class'  => 'limited',
        'how'          => 'Properties in high-risk zones such as coastal, seismic Zone IV/V or flood-prone areas may attract higher rates. This reflects the underlying geographic risk.',
        'control'      => 'Limited control',
        'control_text' => 'The location itself determines much of the underlying risk profile.',
        'points'       => [
            'Flood-prone areas',
            'Earthquake / seismic zones',
            'Coastal exposure',
            'Local catastrophe risk'
        ]
    ],
    [
        'number'       => '03',
        'tab'          => 'Construction',
        'tab_label'    => 'Construction Type',
        'title'        => 'Construction Type',
        'subtitle'     => 'The structure and construction quality matter',
        'image'        => 'https://images.unsplash.com/photo-1541888946425-d0fbb18f06f4?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'LIMITED',
        'badge_class'  => 'limited',
        'how'          => 'RCC and framed structures may attract lower rates than load-bearing or kucha construction because construction quality affects the potential severity of damage.',
        'control'      => 'Limited control',
        'control_text' => 'Construction characteristics are largely determined by the property itself.',
        'points'       => [
            'RCC / framed structures',
            'Load-bearing construction',
            'Construction materials',
            'Structural quality'
        ]
    ],
    [
        'number'       => '04',
        'tab'          => 'Property Age',
        'tab_label'    => 'Age of Property',
        'title'        => 'Age of Property',
        'subtitle'     => 'Older properties may carry additional risk',
        'image'        => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'PARTIAL',
        'badge_class'  => 'partial',
        'how'          => 'Older properties may attract a loading because ageing structures, wiring, plumbing and other components can increase the risk of damage.',
        'control'      => 'Partial control',
        'control_text' => 'Buying appropriate cover early and maintaining the property can help manage exposure.',
        'points'       => [
            'Age of the building',
            'Condition of the structure',
            'Electrical systems',
            'Plumbing and maintenance'
        ]
    ],
    [
        'number'       => '05',
        'tab'          => 'Business / Occupancy',
        'tab_label'    => 'Nature of Business',
        'title'        => 'Nature of Business / Occupancy',
        'subtitle'     => 'What happens inside the property affects risk',
        'image'        => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'LIMITED',
        'badge_class'  => 'limited',
        'how'          => 'For shops, the type of goods stored significantly affects the premium rate. A medical store presents a different risk from a furniture shop. Hazardous stock attracts higher rates.',
        'control'      => 'Limited control',
        'control_text' => 'The insurer assesses the actual use and risk profile of the premises.',
        'points'       => [
            'Type of business',
            'Nature of goods stored',
            'Occupancy type',
            'Hazardous materials'
        ]
    ],
    [
        'number'       => '06',
        'tab'          => 'Add-ons',
        'tab_label'    => 'Add-ons Selected',
        'title'        => 'Add-ons Selected',
        'subtitle'     => 'Additional protection can increase the premium',
        'image'        => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'EEI, Portable Equipment, Loss of Rent, Business Interruption and All Risks cover each add a defined percentage to the base premium.',
        'control'      => 'Your choice',
        'control_text' => 'Choose add-ons that match the actual risks and protection needs.',
        'points'       => [
            'Electronic equipment',
            'Portable equipment',
            'Loss of rent',
            'Business interruption',
            'All-risk extensions'
        ]
    ],
    [
        'number'       => '07',
        'tab'          => 'Coverage Basis',
        'tab_label'    => 'Coverage Basis',
        'title'        => 'Coverage Basis',
        'subtitle'     => 'New-for-old and market-value approaches work differently',
        'image'        => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'New-for-old / Replacement Value coverage generally costs more than Market Value indemnity, but can provide significantly more at claim time depending on the policy terms.',
        'control'      => 'Your choice',
        'control_text' => 'Choose the coverage basis according to your needs and applicable policy terms.',
        'points'       => [
            'Replacement value',
            'Market value',
            'Depreciation treatment',
            'Claim settlement basis'
        ]
    ],
    [
        'number'       => '08',
        'tab'          => 'No-Claim History',
        'tab_label'    => 'No-Claim History',
        'title'        => 'No-Claim History',
        'subtitle'     => 'Claim history may influence renewal pricing',
        'image'        => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'PARTIAL',
        'badge_class'  => 'partial',
        'how'          => 'Some insurers offer no-claim bonuses for claim-free renewals, potentially reducing the premium over time, subject to the policy and insurer terms.',
        'control'      => 'Partial control',
        'control_text' => 'Maintain the policy continuously and avoid unnecessary claims where appropriate.',
        'points'       => [
            'Claim-free renewals',
            'No-claim benefits',
            'Continuous policy history',
            'Renewal terms'
        ]
    ]
];
?>

<section class="vv-pricing-factors" id="premium-logic">
    <div class="vv-pricing-factors__container">

        <!-- SECTION HEADER (LEFT ALIGNED) -->
        <header class="vv-pricing-factors__header">
            <h2 class="vv-pricing-factors__title">
                How Are Premiums Calculated?
            </h2>
            <p class="vv-pricing-factors__intro">
                The most common reason people delay buying property insurance is the assumption that it is expensive. It
                is not. Understanding how the number is arrived at helps you make a smarter decision — and a smarter
                comparison.
            </p>
        </header>

        <!-- TABS -->
        <div class="vv-pricing-tabs" role="tablist" aria-label="Insurance premium factors">
            <?php foreach ($pricing_factors as $index =>$factor) : ?>
            <button class="vv-pricing-tab <?php echo $index === 0 ? 'is-active' : ''; ?>"
                id="pricing-tab-<?php echo esc_attr($index); ?>" type="button" role="tab"
                aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                aria-controls="pricing-panel-<?php echo esc_attr($index); ?>"
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
            <?php foreach ($pricing_factors as $index =>$factor) : ?>
            <article class="vv-pricing-panel <?php echo $index === 0 ? 'is-active' : ''; ?>"
                id="pricing-panel-<?php echo esc_attr($index); ?>" role="tabpanel"
                aria-labelledby="pricing-tab-<?php echo esc_attr($index); ?>">
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
                            <span class="dashicons dashicons-chart-area"></span>
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
                            <span
                                class="vv-pricing-status vv-pricing-status--<?php echo esc_attr($factor['badge_class']); ?>">
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
                The final premium depends on the insurer, policy wording,
                risk assessment, sum insured, selected covers and applicable
                terms and conditions.
            </p>
        </div>


        <!-- ==========================================
            PREMIUM CALCULATION FRAMEWORK SECTION
        =========================================== -->
        <div class="vv-calc-framework">
            <div class="vv-calc-framework__card">
                <h2 class="vv-pricing-factors__title">
                   The Premium Calculation Framework
                </h2>
                <p class="vv-calc-framework__intro">
                    While each insurer uses its own actuarial tables, the broad structure is:
                </p>

                <!-- STEP 1 -->
                <div class="vv-calc-step">
                    <div class="vv-calc-box">
                        <div class="vv-calc-equation">
                            <span class="vv-calc-label">Base Premium =</span>
                            <span class="vv-calc-term">Sum Insured</span>
                            <span class="vv-calc-operator">×</span>
                            <span class="vv-calc-term">Zone Rate</span>
                            <span class="vv-calc-operator">×</span>
                            <span class="vv-calc-term">Construction Type Multiplier</span>
                            <span class="vv-calc-operator">×</span>
                            <span class="vv-calc-term">Occupancy / Business Risk Multiplier</span>
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
                        GST at 18% applies to all general insurance premiums in India. When comparing quotes, always
                        compare the premium excluding GST to ensure a like-for-like comparison.
                    </p>
                </div>

                <hr class="vv-calc-divider">

                <!-- STRUCTURED ILLUSTRATIVE EXAMPLES (CARDS) -->
                <div class="vv-calc-examples-text">
                    <p class="vv-calc-example-item">
                        <strong>Illustrative Example (Residential):</strong> Nalini, 40, owns a 1,200 sq ft RCC flat in
                        Chennai (coastal zone). Reinstatement value: ₹72 lakh. Contents: ₹12 lakh. Base rate
                        (indicative): 0.07% of SI = ₹5,040 + ₹840 (contents). EEI add-on: ₹900. Loss of Rent add-on:
                        ₹480. Sub-total: ₹7,260. GST 18%: ₹1,307. Total annual outflow: ₹8,567. Monthly: ₹714.
                    </p>

                    <p class="vv-calc-example-item">
                        <strong>Illustrative Example (Small Business):</strong> Raju, grocery store, Chennai, stock ₹5L
                        + equipment ₹1.5L. Base rate (indicative): 0.10% of SI = ₹650. Cash cover ₹50K: ₹200. Burglary
                        add-on: ₹450. Plate glass: ₹180. Sub-total: ₹1,480. GST 18%: ₹266. Total annual outflow: ₹1,746
                        for basic cover. Shopkeeper's Package with full bundled cover: approx. ₹4,200–₹5,500.
                    </p>
                </div>

                <div class="vv-calc-footer-note">
                    Each insurer uses its own actuarial tables. This is a simplified framework for understanding the
                    major pricing drivers.
                </div>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.vv-pricing-tab');
    const panels = document.querySelectorAll('.vv-pricing-panel');

    if (!tabs.length || !panels.length) {
        return;
    }

    function switchTab(targetIndex) {
        tabs.forEach(function(item) {
            item.classList.remove('is-active');
            item.setAttribute('aria-selected', 'false');
        });

        panels.forEach(function(panel) {
            panel.classList.remove('is-active');
        });

        const activeTab = document.querySelector(`.vv-pricing-tab[data-tab="${targetIndex}"]`);
        const activePanel = document.getElementById('pricing-panel-' + targetIndex);

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
            switchTab(targetIndex);
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
            switchTab(tabs[newIndex].getAttribute('data-tab'));
        });
    });
});
</script>