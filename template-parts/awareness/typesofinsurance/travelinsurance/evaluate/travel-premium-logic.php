<?php
/**
 * Travel Insurance — What Influences Premium?
 *
 * Left-aligned header layout + tabbed panels + Premium Calculation Framework
 */

$pricing_factors = [
    [
        'number'       => '01',
        'tab'          => 'Medical Sum Insured',
        'tab_label'    => 'Medical Sum Insured',
        'title'        => 'Medical Sum Insured',
        'subtitle'     => 'The primary driver of coverage and medical protection',
        'image'        => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'The primary driver of premium. Going from USD 50,000 to USD 250,000 for a 2-week Europe trip often adds only ₹300–₹500 — but the protection difference is enormous.',
        'control'      => 'Full control',
        'control_text' => 'Full control — choose the highest medical cover you can justify, not the lowest.',
        'points'       => [
            'Choose adequate medical limits',
            'Avoid low-tier coverage gaps',
            'Match limits to destination healthcare costs'
        ]
    ],
    [
        'number'       => '02',
        'tab'          => 'Destination',
        'tab_label'    => 'Destination Risk Zone',
        'title'        => 'Destination Risk Zone',
        'subtitle'     => 'Geographic medical costs influence the premium',
        'image'        => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'LIMITED',
        'badge_class'  => 'limited',
        'how'          => 'Insurers categorise destinations by medical cost. USA/Canada/Australia are highest-cost. South Asia is cheapest. The same traveller pays 2–4x more for USA cover than for an identical Southeast Asia trip.',
        'control'      => 'Limited control',
        'control_text' => 'Reflects where you are going; understand cost differences when planning.',
        'points'       => [
            'High-cost regions (USA, Canada)',
            'Standard international regions',
            'Regional healthcare inflation',
            'Local evacuation expenses'
        ]
    ],
    [
        'number'       => '03',
        'tab'          => 'Duration',
        'tab_label'    => 'Trip Duration',
        'title'        => 'Trip Duration',
        'subtitle'     => 'Length of travel directly impacts risk exposure',
        'image'        => 'https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'FULL CONTROL',
        'badge_class'  => 'choice',
        'how'          => 'More days of cover = higher premium. Annual Multi-Trip policies cap per-trip duration (typically 30–45 days) to manage this.',
        'control'      => 'Full control',
        'control_text' => 'Declare duration accurately — a shorter policy for a longer trip creates a dangerous gap.',
        'points'       => [
            'Exact trip day-count coverage',
            'Annual multi-trip per-trip limits',
            'Extension terms while abroad',
            'Unplanned delay buffers'
        ]
    ],
    [
        'number'       => '04',
        'tab'          => 'Traveller Age',
        'tab_label'    => 'Traveller Age',
        'title'        => 'Traveller Age',
        'subtitle'     => 'Age brackets heavily influence underwriting risk',
        'image'        => 'https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'LIMITED',
        'badge_class'  => 'limited',
        'how'          => 'Travel insurance uses age bands. Travellers above 60 pay significantly more for international cover because medical risk rises with age.',
        'control'      => 'Limited control',
        'control_text' => 'Buy when planning the trip — the age band at time of purchase applies.',
        'points'       => [
            'Standard adult age bands',
            'Senior citizen surcharges',
            'Pre-existing disease screenings',
            'Policy renewal age caps'
        ]
    ],
    [
        'number'       => '05',
        'tab'          => 'Add-ons Selected',
        'tab_label'    => 'Add-ons Selected',
        'title'        => 'Add-ons Selected',
        'subtitle'     => 'Specialized extensions modify your baseline cost',
        'image'        => 'https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'YOUR CHOICE',
        'badge_class'  => 'choice',
        'how'          => 'Each add-on (Adventure Sports, PED cover, CFAR-Cancel For Any Reason etc.) adds to the base premium proportionally. More relevant add-ons = more complete protection.',
        'control'      => 'Your choice',
        'control_text' => 'Choose add-ons that match your actual trip activities and health profile.',
        'points'       => [
            'Adventure sports coverage',
            'Pre-existing condition (PED) riders',
            'Cancel For Any Reason (CFAR)',
            'Baggage and passport loss protection'
        ]
    ],
    [
        'number'       => '06',
        'tab'          => 'No-Claim History (AMT plans)',
        'tab_label'    => 'No-Claim History (AMT plans)',
        'title'        => 'No-Claim History (AMT plans)',
        'subtitle'     => 'Rewards for claim-free continuity',
        'image'        => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
        'badge'        => 'PARTIAL',
        'badge_class'  => 'partial',
        'how'          => 'Some Annual Multi-Trip policies offer renewal discounts for claim-free years, reducing cumulative overhead.',
        'control'      => 'Partial control',
        'control_text' => 'Maintain AMT policies continuously — avoid gaps that reset the benefit.',
        'points'       => [
            'Annual renewal discounts',
            'Cumulative sum insured bonuses',
            'Continuous policy tracking',
            'Claim-free tenure rewards'
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
                The most common reason Indian travellers skip travel insurance is the assumption that it is expensive. It is not. Understanding how the premium is calculated helps you make a smarter decision — and a smarter comparison.
            </p>
        </header>

        <!-- TABS (6 COLUMNS FOR TRAVEL) -->
        <div class="vv-pricing-tabs vv-pricing-tabs--travel" role="tablist" aria-label="Travel insurance premium factors">
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
                            <span class="dashicons dashicons-airplane"></span>
                        </div>
                        <div>
                            <span class="vv-pricing-panel__section-label">
                                TRAVEL PRICING FACTOR
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
                The final premium depends on the insurer, policy wording, risk assessment, destination profile, selected riders and applicable terms and conditions.
            </p>
        </div>


        <!-- ==========================================
            PREMIUM CALCULATION FRAMEWORK SECTION
        =========================================== -->
        <div class="vv-calc-framework">
            <div class="vv-calc-framework__card">
                <h2 class="vv-pricing-factors__title">
                   The Premium Calculation Formula
                </h2>
                <p class="vv-calc-framework__intro">
                    While each insurer uses its own actuarial tables, the standard structural equation is:
                </p>

                <!-- STEP 1 -->
                <div class="vv-calc-step">
                    <div class="vv-calc-box">
                        <div class="vv-calc-equation">
                            <span class="vv-calc-label">Base Premium =</span>
                            <span class="vv-calc-term">Trip Duration</span>
                            <span class="vv-calc-operator">×</span>
                            <span class="vv-calc-term">Destination Zone Rate</span>
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
                            <span class="vv-calc-term">Medical Sum Insured Loading</span>
                            <span class="vv-calc-operator">+</span>
                            <span class="vv-calc-term">Add-on Premiums</span>
                            <span class="vv-calc-operator">+</span>
                            <span class="vv-calc-term">GST @ 18%</span>
                        </div>
                    </div>
                    <p class="vv-calc-note-text">
                        GST at 18% applies to all travel insurance policies issued in India. When reviewing quotations, always verify whether quotes include or exclude applicable taxes.
                    </p>
                </div>

                <hr class="vv-calc-divider">

                <!-- STRUCTURED ILLUSTRATIVE EXAMPLES -->
                <div class="vv-calc-examples-text">
                    <p class="vv-calc-example-item">
                        <strong>📐 Illustrative Example:</strong> Priya, 34, marketing manager. 10-day trip to Paris (Schengen), USD 100,000 medical sum insured, Adventure Sports Add-On (she plans hiking in the Alps).
                    </p>
                    <p class="vv-calc-example-item">
                        Base rate: ₹180/day × 10 days = ₹1,800. Medical sum insured adjustment (USD 100K tier): ₹600. Adventure Sports add-on: ₹400. Sub-total: ₹2,800. GST @ 18%: ₹504. <strong>Total outflow: ₹3,304.</strong>
                    </p>
                    <p class="vv-calc-example-item">
                        <em>Alternative view:</em> Without the Adventure Sports add-on, the cost is ₹2,714. However, omitting it means any hiking injury claim gets rejected as an excluded extreme activity. The add-on costs merely ₹472 including tax, protecting against trekking medical bills that can reach ₹15–40 lakh abroad.
                    </p>
                </div>

                <div class="vv-calc-footer-note">
                    Insurers apply risk adjustments or loadings for older demographics or high-activity extensions to maintain solvency while keeping coverage active.
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