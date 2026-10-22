<?php
/**
 * =========================================================
 * VIMA VIDYA
 * RISK MANAGEMENT — HERO
 * =========================================================
 */

$risk_hero = [

    'eyebrow' => 'RISK MANAGEMENT',

    'title_dark' => 'Six ways to',
    'title_blue' => 'manage risk.',

    'description' =>
        'Choose the right approach for every situation. Effective risk management helps you protect what matters most. Explore the six key pillars that individuals and businesses use to handle uncertainty with confidence.',

    'background' =>
        'https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=85&w=1800',

    'breadcrumb' => [
        'Home' => home_url('/'),
        'Risk Management' => '#'
    ],

    'primary_button' => [
        'text' => 'Explore Pillars',
        'url'  => '#risk-pillars'
    ],

    'secondary_button' => [
        'text' => 'Learn More',
        'url'  => '#risk-overview'
    ],

    'card' => [
        'label' => 'RISK MANAGEMENT',
        'title' => 'Why Risk Management Matters',
        'description' =>
            'Risk cannot always be avoided. But it can be understood, planned for, reduced, transferred, or accepted with confidence.',
        'link_text' => 'Explore Risk Management',
        'link' => '#risk-pillars'
    ],

    'stats' => [
        [
            'value' => '01',
            'label' => 'Avoid risks that can be prevented',
            'icon' => 'shield'
        ],
        [
            'value' => '02',
            'label' => 'Reduce the impact of uncertainty',
            'icon' => 'chart'
        ],
        [
            'value' => '03',
            'label' => 'Transfer major financial risks',
            'icon' => 'people'
        ],
        [
            'value' => '04',
            'label' => 'Accept manageable risks wisely',
            'icon' => 'check'
        ]
    ]
];
?>

<section
    class="risk-hero"
    id="risk-overview"
    style="--risk-bg: url('<?php echo esc_url($risk_hero['background']); ?>');"
>

    <!-- =====================================================
         BACKGROUND
    ====================================================== -->

    <div class="risk-hero__bg"></div>

    <div class="risk-hero__overlay"></div>


    <!-- =====================================================
         MAIN CONTAINER
    ====================================================== -->

    <div class="risk-hero__container">

        <!-- =================================================
             LEFT CONTENT
        ================================================== -->

        <div class="risk-hero__content">

            <!-- EYEBROW -->

            <div class="risk-hero__eyebrow">

                <span>
                    <?php echo esc_html($risk_hero['eyebrow']); ?>
                </span>

            </div>


            <!-- TITLE -->

            <h1 class="risk-hero__title">

                <span class="title-dark">
                    <?php echo esc_html($risk_hero['title_dark']); ?>
                </span>

                <span class="title-blue">
                    <?php echo esc_html($risk_hero['title_blue']); ?>
                </span>

            </h1>


            <!-- DESCRIPTION -->

            <p class="risk-hero__description">
                <?php echo esc_html($risk_hero['description']); ?>
            </p>


            <!-- BREADCRUMB -->

            <div class="risk-hero__breadcrumb">

                <a href="<?php echo esc_url(home_url('/')); ?>">
                    Home
                </a>

                <span>/</span>

                <span>
                    Risk Management
                </span>

            </div>


            <!-- ACTIONS -->

            <div class="risk-hero__actions">

                <a
                    href="<?php echo esc_url($risk_hero['primary_button']['url']); ?>"
                    class="risk-hero__button risk-hero__button--primary"
                >
                    <?php echo esc_html($risk_hero['primary_button']['text']); ?>

                    <span>↗</span>
                </a>


                <a
                    href="<?php echo esc_url($risk_hero['secondary_button']['url']); ?>"
                    class="risk-hero__button risk-hero__button--outline"
                >
                    <?php echo esc_html($risk_hero['secondary_button']['text']); ?>

                    <span>→</span>
                </a>

            </div>

        </div>


        <!-- =================================================
             RIGHT FLOATING CARD
        ================================================== -->

        <div class="risk-hero__risk-card">

            <div class="risk-hero__risk-icon">

                <!-- Shield -->

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.6"
                    aria-hidden="true"
                >
                    <path
                        d="M12 3l7 3v5c0 4.8-3 8.8-7 10-4-1.2-7-5.2-7-10V6l7-3z"
                    />

                    <path d="M9 12l2 2 4-4" />
                </svg>

            </div>


            <div class="risk-hero__risk-content">

                <span class="risk-label">
                    <?php echo esc_html($risk_hero['card']['label']); ?>
                </span>


                <h2>
                    <?php echo esc_html($risk_hero['card']['title']); ?>
                </h2>


                <p>
                    <?php echo esc_html($risk_hero['card']['description']); ?>
                </p>


                <a href="<?php echo esc_url($risk_hero['card']['link']); ?>">

                    <?php echo esc_html($risk_hero['card']['link_text']); ?>

                    <span>→</span>

                </a>

            </div>

        </div>

    </div>


    <!-- =====================================================
         STATISTICS
    ====================================================== -->

    <div class="risk-hero__stats-wrapper">

        <div class="risk-hero__stats">

            <?php foreach ($risk_hero['stats'] as $stat) : ?>

                <div class="risk-hero__stat">

                    <div class="risk-hero__stat-icon">

                        <?php if ($stat['icon'] === 'shield') : ?>

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path
                                    d="M12 3l7 3v5c0 4.8-3 8.8-7 10-4-1.2-7-5.2-7-10V6l7-3z"
                                />
                            </svg>

                        <?php elseif ($stat['icon'] === 'chart') : ?>

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <path d="M4 19V5" />
                                <path d="M4 19h16" />
                                <path d="M7 15l4-4 3 2 5-6" />
                            </svg>

                        <?php elseif ($stat['icon'] === 'people') : ?>

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <circle cx="9" cy="8" r="3" />
                                <circle cx="17" cy="9" r="2.5" />
                                <path d="M3 19c0-3.2 2.5-5 6-5s6 1.8 6 5" />
                                <path d="M15 14c3 0 5 1.5 5 4" />
                            </svg>

                        <?php else : ?>

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                            >
                                <circle cx="12" cy="12" r="8" />
                                <path d="M8 12l2.5 2.5L16 9" />
                            </svg>

                        <?php endif; ?>

                    </div>


                    <div class="risk-hero__stat-content">

                        <strong>
                            <?php echo esc_html($stat['value']); ?>
                        </strong>

                        <span>
                            <?php echo esc_html($stat['label']); ?>
                        </span>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>