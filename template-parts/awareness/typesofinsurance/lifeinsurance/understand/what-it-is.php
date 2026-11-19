<?php

$theme_uri = get_template_directory_uri();

$life_insurance_page_data = [

    // -------------------------------------------------------------
    // SECTION 01.1: What is Life Insurance?
    // -------------------------------------------------------------

    'section_1' => [

        'subtag'      => '01.1 — START HERE',

        'title'       => 'What Is Life Insurance?',

        'description' => __(
            'Life insurance is a legally binding contract between you — the policyholder — and an insurance company — the insurer. In return for the premium, you pay (monthly, quarterly, half-yearly, or annually), the insurer agrees to pay a defined sum — the Sum Assured — to your nominees upon your death, or to you upon the policy\'s maturity, depending on the type of policy. In India, life insurance is regulated by the Insurance Regulatory and Development Authority of India (IRDAI) under the Insurance Act, 1938, as amended. No one can legally sell life insurance in India without an IRDAI licence.',
            'vima-vidya'
        ),

        'covered_events' => [
            'title'   => 'What It Is',
            'subtext' => 'The central purpose of life insurance is <strong>human life value protection</strong> — replacing the financial contribution a person makes to their dependents in the event of their death or in some policies, their disability. Everything else — maturity benefits, bonuses, returns — is secondary.',
            'cards'   => [
                [
                    'id'          => 'risk_transfer',
                    'label'       => 'Risk Transfer Mechanism',
                    'tag'         => 'COVERED',
                    'icon'        => '🛡️',
                    'explanation' => 'You pay a known, defined premium so that an unknown, potentially catastrophic financial event does not destroy your family\'s stability.',
                    'image'       => 'https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'id'          => 'sum_assured',
                    'label'       => 'Sum Assured Payout',
                    'tag'         => 'COVERED',
                    'icon'        => '💰',
                    'explanation' => 'Guaranteed financial payout to your nominees upon your death, or to you upon maturity depending on the policy.',
                    'image'       => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'id'          => 'regulatory',
                    'label'       => 'IRDAI Regulated Protection',
                    'tag'         => 'COVERED',
                    'icon'        => '📜',
                    'explanation' => 'Regulated by the Insurance Regulatory and Development Authority of India under the Insurance Act, 1938.',
                    'image'       => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'id'          => 'disability',
                    'label'       => 'Disability & Death Cover',
                    'tag'         => 'COVERED',
                    'icon'        => '🤝',
                    'explanation' => 'Replaces the financial contribution a person makes to their dependents during unforeseen loss of life or disability.',
                    'image'       => 'https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&w=600&q=80'
                ]
            ]
        ],

        'not_covered_events' => [
            'title'   => 'What Life Insurance Is NOT',
            'subtext' => ' Life insurance is not a savings account, a mutual fund, or an equity investment. It is not primarily a tax-saving instrument. It is not a wealth-building tool. 
It is a risk transfer mechanism — you pay a known, defined premium so that an unknown, potentially catastrophic financial event does not destroy your family \'s stability. Understanding this distinction is the single most important step before buying any life insurance product.
',
            'cards'   => [
                [
                    'id'          => 'not_savings',
                    'label'       => 'Not a Savings Account',
                    'tag'         => 'NOT COVERED',
                    'icon'        => '🏦',
                    'explanation' => 'It does not function as a standard liquid bank savings account or emergency fund.',
                    'image'       => 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'id'          => 'not_mutual_fund',
                    'label'       => 'Not a Mutual Fund',
                    'tag'         => 'NOT COVERED',
                    'icon'        => '📈',
                    'explanation' => 'It is not designed as a market-linked equity investment vehicle for short-term speculative gains.',
                    'image'       => 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'id'          => 'not_tax_tool',
                    'label'       => 'Not Primarily Tax-Saving',
                    'tag'         => 'NOT COVERED',
                    'icon'        => '📝',
                    'explanation' => 'While tax benefits exist, tax-saving is an incidental feature, not the primary purpose of risk protection.',
                    'image'       => 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'id'          => 'not_wealth_builder',
                    'label'       => 'Not a Wealth-Building Tool',
                    'tag'         => 'NOT COVERED',
                    'icon'        => '💎',
                    'explanation' => 'It is a risk transfer mechanism rather than an aggressive capital compounding instrument.',
                    'image'       => 'https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=600&q=80'
                ]
            ]
        ],

        'takeaway' => '<strong>Key Takeaway:</strong> Understanding this distinction is the single most important step before buying any life insurance product. It is a risk transfer mechanism — you pay a known, defined premium so that an unknown, potentially catastrophic financial event does not destroy your family\'s stability.'

    ]

];

?>

<div class="vv-property-insurance-wrapper" id="what-is-life-insurance">

    <!-- ========================================================= -->
    <!-- SECTION 01.1: WHAT IS LIFE INSURANCE?                     -->
    <!-- ========================================================= -->

    <section class="vv-property-insurance-section-s1">

        <header class="vv-property-insurance-header">
            <!-- <span class="vv-property-insurance-subtag"><?php echo esc_html($life_insurance_page_data['section_1']['subtag']); ?></span> -->
            <h1 class="vv-property-insurance-title"><?php echo esc_html($life_insurance_page_data['section_1']['title']); ?></h1>
            <p class="vv-property-insurance-desc">
                <?php echo wp_kses_post($life_insurance_page_data['section_1']['description']); ?>
            </p>
        </header>

        <div class="vv-property-insurance-contrast-grid">

            <!-- Left: Covered Column (What It Is) -->
            <section class="vv-property-insurance-contrast-col vv-property-insurance-contrast-col--covered">

                <div class="vv-property-insurance-col-header">
                    <div class="vv-property-insurance-col-icon-circle vv-property-insurance-col-icon-circle--covered">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <div class="vv-property-insurance-col-title-wrap">
                        <h2 class="vv-property-insurance-col-title">
                            <?php echo esc_html($life_insurance_page_data['section_1']['covered_events']['title']); ?>
                        </h2>
                        <span class="vv-property-insurance-col-underline vv-property-insurance-col-underline--covered"></span>
                    </div>
                </div>

                <p class="vv-property-insurance-col-subtext">
                    <?php echo wp_kses_post($life_insurance_page_data['section_1']['covered_events']['subtext']); ?>
                </p>

                <!-- 2-Column Grid for Covered Cards -->
                <div class="vv-property-insurance-peril-card-grid">
                    <?php foreach ($life_insurance_page_data['section_1']['covered_events']['cards'] as $card): ?>
                    <article class="vv-property-insurance-visual-card vv-property-insurance-visual-card--covered">
                        <div class="vv-property-insurance-visual-card__media">
                            <span class="vv-property-insurance-visual-card__pill"><?php echo esc_html($card['tag']); ?></span>
                            <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['label']); ?>" loading="lazy">
                        </div>
                        <div class="vv-property-insurance-visual-card__body">
                            <div class="vv-property-insurance-visual-card__icon-badge" aria-hidden="true"><?php echo esc_html($card['icon']); ?></div>
                            <h3 class="vv-property-insurance-visual-card__title"><?php echo esc_html($card['label']); ?></h3>
                            <p class="vv-property-insurance-visual-card__desc"><?php echo esc_html($card['explanation']); ?></p>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>

            </section>

            <!-- Right: Not Covered Column (What It Is NOT) -->
            <section class="vv-property-insurance-contrast-col vv-property-insurance-contrast-col--denied">

                <!-- Diagonal Watermark Stamp -->
                <div class="vv-property-insurance-watermark-stamp" aria-hidden="true">
                    <span class="vv-property-insurance-watermark-text">NOT COVERED</span>
                </div>

                <div class="vv-property-insurance-col-header">
                    <div class="vv-property-insurance-col-icon-circle vv-property-insurance-col-icon-circle--denied">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                    <div class="vv-property-insurance-col-title-wrap">
                        <h2 class="vv-property-insurance-col-title">
                            <?php echo esc_html($life_insurance_page_data['section_1']['not_covered_events']['title']); ?>
                        </h2>
                        <span class="vv-property-insurance-col-underline vv-property-insurance-col-underline--denied"></span>
                    </div>
                </div>

                <p class="vv-property-insurance-col-subtext">
                    <?php echo esc_html($life_insurance_page_data['section_1']['not_covered_events']['subtext']); ?>
                </p>

                <!-- 2-Column Grid for Not Covered Cards -->
                <div class="vv-property-insurance-peril-card-grid">
                    <?php foreach ($life_insurance_page_data['section_1']['not_covered_events']['cards'] as $card): ?>
                    <article class="vv-property-insurance-visual-card vv-property-insurance-visual-card--denied">
                        <div class="vv-property-insurance-visual-card__media">
                            <span class="vv-property-insurance-visual-card__pill"><?php echo esc_html($card['tag']); ?></span>
                            <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['label']); ?>" loading="lazy">
                        </div>
                        <div class="vv-property-insurance-visual-card__body">
                            <div class="vv-property-insurance-visual-card__icon-badge" aria-hidden="true"><?php echo esc_html($card['icon']); ?></div>
                            <h3 class="vv-property-insurance-visual-card__title"><?php echo esc_html($card['label']); ?></h3>
                            <p class="vv-property-insurance-visual-card__desc"><?php echo esc_html($card['explanation']); ?></p>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>

            </section>

        </div>

        <!-- <aside class="vv-property-insurance-global-takeaway vv-property-insurance-global-takeaway--s1">
            <span class="vv-property-insurance-global-takeaway__icon" aria-hidden="true">📌</span>
            <p class="vv-property-insurance-global-takeaway__text">
                <?php echo wp_kses_post($life_insurance_page_data['section_1']['takeaway']); ?>
            </p>
        </aside> -->

    </section>

</div>