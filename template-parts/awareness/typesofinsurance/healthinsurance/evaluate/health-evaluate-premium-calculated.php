<?php
/**
- Health Insurance — What Influences Premium?
- Left-aligned header layout + tabbed panels + Premium Calculation Framework
 */

$health_pricing_factors = [
    [
        'number'       => '01',
        'tab'          => 'Sum Insured (SI)',
        'tab_label'    => 'Sum Insured (SI)',
        'title'        => 'Sum Insured (SI)',
        'subtitle'     => 'The foundation of your hospitalisation coverage limits',
        'image'        => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'FULL CONTROL',
        'badge_class'  => 'choice',
        'how'          => 'Higher SI = higher premium. The SI is your maximum payout per year. Choose it to reflect realistic hospitalisation costs in your city.',
        'control'      => 'Full control',
        'control_text' => 'Full control — choose your SI thoughtfully based on realistic city treatment costs.',
        'points'       => [
            'Reflects realistic annual hospitalisation costs',
            'Adapts to urban medical inflation',
            'Protects against major medical events',
            'Determines maximum annual claim ceiling'
        ]
    ],
    [
        'number'       => '02',
        'tab'          => 'Age',
        'tab_label'    => 'Traveller Age',
        'title'        => 'Age',
        'subtitle'     => 'Age brackets heavily influence underwriting risk and base rates',
        'image'        => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'BUY EARLY',
        'badge_class'  => 'limited',
        'how'          => 'Premiums are age-banded. Each decade (18–35, 36–45, 46–55, 56–65) attracts a higher base rate. Buy early to lock in the lowest band.',
        'control'      => 'Buy early',
        'control_text' => 'Buy early. Renewal keeps you in the same band longer.',
        'points'       => [
            'Decade-based age-band rate structures',
            'Locking in lower entry-age pricing',
            'Renewal continuity benefits',
            'Long-term risk mitigation'
        ]
    ],
    [
        'number'       => '03',
        'tab'          => 'Pre-existing Conditions',
        'tab_label'    => 'Pre-existing Conditions',
        'title'        => 'Pre-existing Conditions',
        'subtitle'     => 'Medical history and underwriting disclosures',
        'image'        => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'DECLARE TRUTHFULLY',
        'badge_class'  => 'choice',
        'how'          => 'Declared conditions may attract premium loading or waiting periods. Non-disclosure can void claims — always declare accurately.',
        'control'      => 'Declare truthfully',
        'control_text' => 'Declare truthfully — misrepresentation is the most common reason claims are rejected.',
        'points'       => [
            'Mandatory medical disclosure',
            'Waiting period terms for chronic conditions',
            'Premium loading transparency',
            'Claim integrity protection'
        ]
    ],
    [
        'number'       => '04',
        'tab'          => 'Add-ons / Riders',
        'tab_label'    => 'Add-ons / Riders Selected',
        'title'        => 'Add-ons / Riders Selected',
        'subtitle'     => 'Specialized extensions modify your baseline cost',
        'image'        => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'Each add-on (maternity, critical illness, OPD, AYUSH) adds a defined amount to the base premium. More cover = higher premium.',
        'control'      => 'Your choice',
        'control_text' => 'Choose add-ons that match your actual life stage and coverage needs.',
        'points'       => [
            'Maternity and childcare extensions',
            'Critical illness riders',
            'Outpatient department (OPD) covers',
            'AYUSH alternative treatment inclusions'
        ]
    ],
    [
        'number'       => '05',
        'tab'          => 'City / Tier',
        'tab_label'    => 'City / Tier',
        'title'        => 'City / Tier',
        'subtitle'     => 'Geographic healthcare cost variations',
        'image'        => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'LIMITED',
        'badge_class'  => 'limited',
        'how'          => 'Insurers apply zone loadings. Metro cities (Zone 1) attract higher premiums than Tier-2/3 cities, reflecting higher treatment costs.',
        'control'      => 'Limited control',
        'control_text' => 'Reflects your city of residence — limited control over regional medical costs.',
        'points'       => [
            'Metro city zone pricing (Zone 1)',
            'Tier-2 and Tier-3 city rate adjustments',
            'Local hospital treatment cost indexing',
            'Zone-based claim settlements'
        ]
    ],
    [
        'number'       => '06',
        'tab'          => 'No-Claim History',
        'tab_label'    => 'No-Claim History',
        'title'        => 'No-Claim History',
        'subtitle'     => 'Rewards for claim-free continuity and bonuses',
        'image'        => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'PARTIAL',
        'badge_class'  => 'partial',
        'how'          => 'Most policies give a cumulative bonus: 5–50% increase in SI for each claim-free year at no extra premium.',
        'control'      => 'Partial control',
        'control_text' => 'Maintain the policy continuously and avoid unnecessary claims to build cumulative bonuses.',
        'points'       => [
            'Cumulative bonus sum insured increases',
            'Claim-free tenure rewards (5–50%)',
            'Continuous policy renewal tracking',
            'Enhanced protection without extra cost'
        ]
    ]
];
?>

<section class="vv-pricing-factors" id="evaluate-health-premiums">
    <div class="vv-pricing-factors__container">

        <!-- SECTION HEADER (LEFT ALIGNED) -->
        <header class="vv-pricing-factors__header">
            <h2 class="vv-pricing-factors__title">
                How Premiums Are Calculated
            </h2>
            <p class="vv-pricing-factors__intro">
                The most common reason people delay buying health insurance is the assumption that it is expensive. It is not — but understanding how the number is arrived at helps you make a smarter decision and a smarter comparison.
            </p>
        </header>

        <!-- TABS (6 COLUMNS FOR HEALTH) -->
        <div class="vv-pricing-tabs vv-pricing-tabs--health" role="tablist" aria-label="Health insurance premium factors">
            <?php foreach ($health_pricing_factors as $index => $factor) : ?>
            <button class="vv-pricing-tab <?php echo $index === 0 ? 'is-active' : ''; ?>"
                id="health-pricing-tab-<?php echo esc_attr($index); ?>" type="button" role="tab"
                aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                aria-controls="health-pricing-panel-<?php echo esc_attr($index); ?>"
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
            <?php foreach ($health_pricing_factors as $index => $factor) : ?>
            <article class="vv-pricing-panel <?php echo $index === 0 ? 'is-active' : ''; ?>"
                id="health-pricing-panel-<?php echo esc_attr($index); ?>" role="tabpanel"
                aria-labelledby="health-pricing-tab-<?php echo esc_attr($index); ?>">
                
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
                            <span class="dashicons dashicons-heart"></span>
                        </div>
                        <div>
                            <span class="vv-pricing-panel__section-label">
                                HEALTH PRICING FACTOR
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
                            <?php foreach ($factor['points'] as $point) : ?>
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
                The final health insurance premium depends on the insurer, underlying underwriting guidelines, medical declarations, riders selected, and applicable terms and conditions.
            </p>
        </div>


        <!-- ==========================================
            PREMIUM CALCULATION FRAMEWORK SECTION
        =========================================== -->
        <div class="vv-calc-framework">
            <div class="vv-calc-framework__card">
                <h2 class="vv-pricing-factors__title">
                   📐 Premium Formula
                </h2>
                <p class="vv-calc-framework__intro">
                    Understand the mathematical components underlying your health insurance quotation:
                </p>

                <!-- STEP 1 -->
                <div class="vv-calc-step">
                    <div class="vv-calc-box">
                        <div class="vv-calc-equation">
                            <span class="vv-calc-label">Base Premium =</span>
                            <span class="vv-calc-term">SI</span>
                            <span class="vv-calc-operator">×</span>
                            <span class="vv-calc-term">Age Band Rate</span>
                            <span class="vv-calc-operator">×</span>
                            <span class="vv-calc-term">Zone Multiplier</span>
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
                        GST at 18% applies to all health insurance premiums in India. Always compare pre-GST premiums for like-for-like comparison.
                    </p>
                </div>

                <div class="vv-calc-footer-note">
                    Insurers apply risk adjustments or medical loadings for specific health histories to maintain solvency while keeping comprehensive health coverage active.
                </div>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('#evaluate-health-premiums .vv-pricing-tab');
    const panels = document.querySelectorAll('#evaluate-health-premiums .vv-pricing-panel');

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

        const activeTab = document.querySelector(`#evaluate-health-premiums .vv-pricing-tab[data-tab="${targetIndex}"]`);
        const activePanel = document.getElementById('health-pricing-panel-' + targetIndex);

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