<?php
/**
 * Vima Vidya
 * Life Insurance — How Premiums Are Calculated
 *
 * Left-aligned header layout + tabbed panels + Premium Calculation Framework
 */

$pricing_factors = [
    [
        'number'       => '01',
        'tab'          => 'Age at Entry',
        'tab_label'    => 'Age at Entry',
        'title'        => 'Age at Entry',
        'subtitle'     => 'The single most powerful factor in life insurance pricing',
        'image'        => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'Premiums increase 8–15% for every year of delay after age 30. Buying at age 25 vs 35 can save ₹4,000–6,000/year on a ₹1 crore term plan.',
        'control'      => 'Full control',
        'control_text' => 'Buy early to lock in lower lifelong premium rates.',
        'points'       => [
            'Lock in lower base rates',
            'Avoid age-based rate hikes',
            'Secure long-term financial safety early'
        ]
    ],
    [
        'number'       => '02',
        'tab'          => 'Gender',
        'tab_label'    => 'Gender',
        'title'        => 'Gender',
        'subtitle'     => 'Statistical life expectancy advantage',
        'image'        => 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'LIMITED',
        'badge_class'  => 'limited',
        'how'          => 'Women typically pay 5–15% lower premiums than men of the same age for term plans — reflecting statistical life expectancy advantages.',
        'control'      => 'None',
        'control_text' => 'Gender-based pricing is predetermined by actuarial tables.',
        'points'       => [
            'Statistical life expectancy advantages',
            'Lower premium rates for women',
            'Standardized actuarial tables'
        ]
    ],
    [
        'number'       => '03',
        'tab'          => 'Sum Assured',
        'tab_label'    => 'Sum Assured',
        'title'        => 'Sum Assured',
        'subtitle'     => 'Coverage amount determines financial protection scale',
        'image'        => 'https://images.unsplash.com/photo-1541888946425-d0fbb18f06f4?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'Proportional — higher cover means a higher premium — but not always proportionally. Insurers often charge less per lakh as the Sum Assured increases, so the jump from ₹75 lakh to ₹1 crore cover may cost far less than you expect. Always get a quote for both before deciding.',
        'control'      => 'Your choice',
        'control_text' => 'Size to genuine need, not budget convenience.',
        'points'       => [
            'Align with income replacement goals',
            'Evaluate slab-based rate discounts',
            'Compare ₹75L vs ₹1Cr brackets'
        ]
    ],
    [
        'number'       => '04',
        'tab'          => 'Policy Term',
        'tab_label'    => 'Policy Term',
        'title'        => 'Policy Term',
        'subtitle'     => 'Duration of active life insurance coverage',
        'image'        => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'Longer terms cost more in total but less per year. A 40-year term at age 25 is usually the most cost-effective structure.',
        'control'      => 'Your choice',
        'control_text' => 'Choose term to cover your full liability period.',
        'points'       => [
            'Match active earning years',
            'Cover liabilities and dependents',
            'Optimize long-term annual costs'
        ]
    ],
    [
        'number'       => '05',
        'tab'          => 'Payment Term',
        'tab_label'    => 'Premium Payment Term',
        'title'        => 'Premium Payment Term',
        'subtitle'     => 'How and when you pay your policy premiums',
        'image'        => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'Regular pay, single pay or limited pay. Limited pay concentrates premium into fewer years but at higher annual amounts.',
        'control'      => 'Your choice',
        'control_text' => 'Match to income stability and cash flow preferences.',
        'points'       => [
            'Regular pay flexibility',
            'Limited pay concentration',
            'Single pay options'
        ]
    ],
    [
        'number'       => '06',
        'tab'          => 'Tobacco Status',
        'tab_label'    => 'Smoking / Tobacco',
        'title'        => 'Smoking / Tobacco Status',
        'subtitle'     => 'Lifestyle habits significantly impact underwriting risk',
        'image'        => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'Smokers pay 30–70% higher premiums than non-smokers. This is declared on the proposal form and verified rigorously at claims.',
        'control'      => 'Full control',
        'control_text' => 'Quitting before proposal saves significantly on premiums.',
        'points'       => [
            'Accurate proposal declaration',
            'Verification during medical tests',
            'Significant savings for non-smokers'
        ]
    ],
    [
        'number'       => '07',
        'tab'          => 'Health & Medical',
        'tab_label'    => 'Health Declaration',
        'title'        => 'Health Declaration / Medical Tests',
        'subtitle'     => 'Current health metrics and medical history review',
        'image'        => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'PARTIAL',
        'badge_class'  => 'partial',
        'how'          => 'Pre-existing conditions, family history, BMI, blood pressure, sugar — all assessed. Adverse findings cause loading (extra premium) or decline.',
        'control'      => 'Partial control',
        'control_text' => 'Maintain health; do not misrepresent on the proposal form.',
        'points'       => [
            'Pre-existing condition screening',
            'BMI and vitals assessment',
            'Transparent disclosure mandatory'
        ]
    ],
    [
        'number'       => '08',
        'tab'          => 'Occupation Hazard',
        'tab_label'    => 'Occupation Hazard',
        'title'        => 'Occupation Hazard',
        'subtitle'     => 'Nature of employment risk profile',
        'image'        => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'PARTIAL',
        'badge_class'  => 'partial',
        'how'          => 'High-risk occupations (mining, offshore drilling, armed forces) attract premium loading or specific policy exclusions.',
        'control'      => 'Partial control',
        'control_text' => 'Declare accurately — occupation misrepresentation voids claims.',
        'points'       => [
            'High-risk industry evaluation',
            'Accurate job role disclosure',
            'Exclusion or loading assessment'
        ]
    ],
    [
        'number'       => '09',
        'tab'          => 'Riders Selected',
        'tab_label'    => 'Riders Selected',
        'title'        => 'Riders Selected',
        'subtitle'     => 'Enhancing base term plans with specialized add-ons',
        'image'        => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'Each rider adds to the base premium. Critical Illness Rider typically adds 20–35% to the base term premium.',
        'control'      => 'Your choice',
        'control_text' => 'Choose riders based on genuine gap analysis.',
        'points'       => [
            'Critical illness protection',
            'Accidental death benefit',
            'Waiver of premium extensions'
        ]
    ]
];
?>

<section class="vv-pricing-factors" id="premium-logic">
    <div class="vv-pricing-factors__container">

        <!-- SECTION HEADER (LEFT ALIGNED) -->
        <header class="vv-pricing-factors__header">
            <h2 class="vv-pricing-factors__title">
                How Life Insurance Premiums Are Calculated
            </h2>
            <p class="vv-pricing-factors__intro">
                Unlike motor insurance where the IRDAI fixes Third-Party premiums, all life insurance premiums are calculated by actuaries based on risk factors. Understanding what drives premiums helps you make better decisions.
            </p>
        </header>

        <!-- TABS -->
        <div class="vv-pricing-tabs" role="tablist" aria-label="Life insurance premium factors">
            <?php foreach ($pricing_factors as $index => $factor) : ?>
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
            <?php foreach ($pricing_factors as $index => $factor) : ?>
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
                Life insurance premiums depend on actuarial underwriting, health disclosures, sum assured, policy terms, and selected riders.
            </p>
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