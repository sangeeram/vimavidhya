<?php
    /**
     * =========================================================
     * VIMA VIDYA
     * EXPERTISE — HERO
     * =========================================================
     */
  

    $expertise_hero = [
        'eyebrow' => 'FINANCIAL WISDOM & LITERACY',
        'title_dark' => 'Empowering Minds Through',
        'title_blue' => 'Knowledge.',
        'description' =>
            'Discover our core expertise and structured learning modules designed to build lasting financial confidence, smart money management, and long-term wealth.',
        'background' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&q=85&w=1800',
        'breadcrumb' => [
            'Home' => home_url('/'),
            'Expertise' => '#'
        ],
        'primary_button' => [
            'text' => 'Explore Modules',
            'url'  => '#modules-grid'
        ],
        'secondary_button' => [
            'text' => 'Our Curriculum',
            'url'  => '#curriculum'
        ],
        'card' => [
            'label' => 'LEARN & GROW',
            'title' => 'Master Financial Literacy',
            'description' =>
                'Gain practical insights and deep understanding of markets, budgeting, and investments guided by seasoned professionals.',
            'link_text' => 'Start Learning',
            'link' => '#modules-grid'
        ],
        'stats' => [
            [
                'value' => '100%',
                'label' => 'Practical financial insights',
                'icon' => 'shield'
            ],
            [
                'value' => '24/7',
                'label' => 'Learning resource access',
                'icon' => 'clock'
            ],
            [
                'value' => '04+',
                'label' => 'Core empowerment pillars',
                'icon' => 'chat'
            ]
        ]
    ];
?>

<section class="edu-hero expertise-hero" id="expertise-overview">

    <!-- BACKGROUND -->
    <div class="edu-hero__bg" style="background-image: url('<?php echo esc_url($expertise_hero['background']); ?>');"></div>
    <div class="edu-hero__overlay"></div>

    <!-- MAIN CONTAINER -->
    <div class="edu-hero__container">

        <!-- LEFT CONTENT -->
        <div class="edu-hero__content">

            <!-- EYEBROW -->
            <div class="edu-hero__eyebrow">
                <span>
                    <?php echo esc_html($expertise_hero['eyebrow']); ?>
                </span>
            </div>

            <!-- TITLE -->
            <h1 class="edu-hero__title">
                <span class="title-dark">
                    <?php echo esc_html($expertise_hero['title_dark']); ?>
                </span>
                <span class="title-blue">
                    <?php echo esc_html($expertise_hero['title_blue']); ?>
                </span>
            </h1>

            <!-- DESCRIPTION -->
            <p class="edu-hero__description">
                <?php echo esc_html($expertise_hero['description']); ?>
            </p>

            <!-- BREADCRUMB -->
            <div class="edu-hero__breadcrumb">
                <?php foreach ($expertise_hero['breadcrumb'] as $label =>$url) : ?>
                    <?php if ($url !== '#') : ?>
                        <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($label); ?></a>
                        <span>/</span>
                    <?php else : ?>
                        <span><?php echo esc_html($label); ?></span>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <!-- ACTIONS -->
            <div class="edu-hero__actions">
                <a
                    href="<?php echo esc_url($expertise_hero['primary_button']['url']); ?>"
                    class="edu-hero__button edu-hero__button--primary"
                >
                    <?php echo esc_html($expertise_hero['primary_button']['text']); ?>
                    <span>↗</span>
                </a>

                <a
                    href="<?php echo esc_url($expertise_hero['secondary_button']['url']); ?>"
                    class="edu-hero__button edu-hero__button--outline"
                >
                    <?php echo esc_html($expertise_hero['secondary_button']['text']); ?>
                    <span>→</span>
                </a>
            </div>

        </div>

        <!-- RIGHT FLOATING CARD -->
        <div class="edu-hero__card">
            <div class="edu-hero__card-icon">
                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.6"
                    aria-hidden="true"
                >
                    <path d="M12 3l7 3v5c0 4.8-3 8.8-7 10-4-1.2-7-5.2-7-10V6l7-3z" />
                </svg>
            </div>

            <div class="edu-hero__card-content">
                <span class="edu-label">
                    <?php echo esc_html($expertise_hero['card']['label']); ?>
                </span>

                <h2>
                    <?php echo esc_html($expertise_hero['card']['title']); ?>
                </h2>

                <p>
                    <?php echo esc_html($expertise_hero['card']['description']); ?>
                </p>

                <a href="<?php echo esc_url($expertise_hero['card']['link']); ?>">
                    <?php echo esc_html($expertise_hero['card']['link_text']); ?>
                    <span>→</span>
                </a>
            </div>
        </div>

    </div>

    <!-- STATISTICS -->
    <div class="edu-hero__stats-wrapper">
        <div class="edu-hero__stats">
            <?php foreach ($expertise_hero['stats'] as$stat) : ?>
                <div class="edu-hero__stat">
                    <div class="edu-hero__stat-icon">
                        <?php if ($stat['icon'] === 'chat') : ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                            </svg>
                        <?php elseif ($stat['icon'] === 'clock') : ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7v5l3 3" />
                            </svg>
                        <?php else : ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M12 3l7 3v5c0 4.8-3 8.8-7 10-4-1.2-7-5.2-7-10V6l7-3z" />
                            </svg>
                        <?php endif; ?>
                    </div>

                    <div class="edu-hero__stat-content">
                        <strong><?php echo esc_html($stat['value']); ?></strong>
                        <span><?php echo esc_html($stat['label']); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>

