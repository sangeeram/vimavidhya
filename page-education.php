
<?php
/**
 * =========================================================
 * VIMA VIDYA
 * EDUCATION — HERO
 * =========================================================
 */
get_header();
$education_hero = [

    'eyebrow' => 'VIMAVIDYA EDUCATION',

    'title_dark' => 'Empowering Financial',
    'title_blue' => 'Futures Through Education.',

    'description' =>
        'At VimaVidya, we believe financial knowledge empowers better decisions. We make financial concepts easier to understand, helping individuals and families build confidence, make informed choices, and work towards lasting financial resilience.',

    'background' =>
       get_template_directory_uri() . '/assets/images/education/banner.png',

    'breadcrumb' => [
        'Home' => home_url('/'),
        'Education' => '#'
    ],

    'primary_button' => [
        'text' => 'Explore Programs',
        'url'  => '#education-programs'
    ],

    'secondary_button' => [
        'text' => 'Learn More',
        'url'  => '#education-overview'
    ],

    'card' => [
        'label' => 'FINANCIAL LITERACY',
        'title' => 'Why Education Matters',
        'description' =>
            'Financial literacy is not just about numbers; it is about freedom, security, and making informed choices for tomorrow.',
        'link_text' => 'Explore Learning Hub',
        'link' => '#education-programs'
    ],

    'stats' => [
        [
            'value' => '01',
            'label' => 'Simplify complex financial concepts',
            'icon' => 'book'
        ],
        [
            'value' => '02',
            'label' => 'Build long-term money confidence',
            'icon' => 'chart'
        ],
        [
            'value' => '03',
            'label' => 'Achieve lasting financial resilience',
            'icon' => 'shield'
        ]
    ]
];
?>

<section
    class="edu-hero"
    id="education-overview"
    style="--edu-bg: url('<?php echo esc_url($education_hero['background']); ?>');"
>

    <!-- BACKGROUND -->
    <div class="edu-hero__bg"></div>
    <div class="edu-hero__overlay"></div>

    <!-- MAIN CONTAINER -->
    <div class="edu-hero__container">

        <!-- LEFT CONTENT -->
        <div class="edu-hero__content">

            <!-- EYEBROW -->
            <div class="edu-hero__eyebrow">
                <span>
                    <?php echo esc_html($education_hero['eyebrow']); ?>
                </span>
            </div>

            <!-- TITLE -->
            <h1 class="edu-hero__title">
                <span class="title-dark">
                    <?php echo esc_html($education_hero['title_dark']); ?>
                </span>
                <span class="title-blue">
                    <?php echo esc_html($education_hero['title_blue']); ?>
                </span>
            </h1>

            <!-- DESCRIPTION -->
            <p class="edu-hero__description">
                <?php echo esc_html($education_hero['description']); ?>
            </p>

            <!-- BREADCRUMB -->
            <div class="edu-hero__breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span>/</span>
                <span>Education</span>
            </div>

            <!-- ACTIONS -->
            <div class="edu-hero__actions">
                <a
                    href="<?php echo esc_url($education_hero['primary_button']['url']); ?>"
                    class="edu-hero__button edu-hero__button--primary"
                >
                    <?php echo esc_html($education_hero['primary_button']['text']); ?>
                    <span>↗</span>
                </a>

                <a
                    href="<?php echo esc_url($education_hero['secondary_button']['url']); ?>"
                    class="edu-hero__button edu-hero__button--outline"
                >
                    <?php echo esc_html($education_hero['secondary_button']['text']); ?>
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
                    <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5z" />
                    <path d="M6 6h12M6 10h12" />
                </svg>
            </div>

            <div class="edu-hero__card-content">
                <span class="edu-label">
                    <?php echo esc_html($education_hero['card']['label']); ?>
                </span>

                <h2>
                    <?php echo esc_html($education_hero['card']['title']); ?>
                </h2>

                <p>
                    <?php echo esc_html($education_hero['card']['description']); ?>
                </p>

                <a href="<?php echo esc_url($education_hero['card']['link']); ?>">
                    <?php echo esc_html($education_hero['card']['link_text']); ?>
                    <span>→</span>
                </a>
            </div>
        </div>

    </div>

    <!-- STATISTICS -->
    <div class="edu-hero__stats-wrapper">
        <div class="edu-hero__stats">
            <?php foreach ($education_hero['stats'] as $stat) : ?>
                <div class="edu-hero__stat">
                    <div class="edu-hero__stat-icon">
                        <?php if ($stat['icon'] === 'book') : ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5z" />
                                <path d="M6 6h12M6 10h12" />
                            </svg>
                        <?php elseif ($stat['icon'] === 'chart') : ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M4 19V5" />
                                <path d="M4 19h16" />
                                <path d="M7 15l4-4 3 2 5-6" />
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


<?php
/**
 * =========================================================
 * VIMA VIDYA
 * INSURANCE EDUCATION PORTAL — COMING SOON ANNOUNCEMENT
 * =========================================================
 */

$announcement_data = [
    'badge'       => 'Coming Soon',
    'title_part1' => 'We are excited to announce that ',
    'title_brand' => 'VimaVidya',
    'title_part2' => ' is expanding with a dedicated ',
    'title_highlight' => 'Insurance Education Portal',
    'title_part3' => ' – designed to empower every individual with the right knowledge about insurance.',
    'description' => 'Insurance can often feel complicated, but the right understanding can make all the difference in making smart financial decisions. That’s why we are creating a structured, easy-to-understand platform that caters to the learning needs of different audiences.'
];
?>

<section class="portal-announcement" id="insurance-portal-announcement">
    <div class="portal-announcement__container">

        <!-- LIGHT BLUE ASYMMETRIC CARD -->
        <div class="portal-announcement__card">
            <div class="portal-announcement__card-glow"></div>
            
            <div class="portal-announcement__icon-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path d="M3 11v2a2 2 0 0 0 2 2h1l4 4V5L6 9H5a2 2 0 0 0-2 2z"/>
                    <path d="M15.54 8.46a5 5 0 0 1 0 7.07"/>
                    <path d="M19.07 4.93a10 10 0 0 1 0 14.14"/>
                </svg>
            </div>

            <div class="portal-announcement__card-body">
                <span class="portal-announcement__card-title">
                    <span class="brand-name">VimaVidya</span> Education Portal
                </span>
            </div>

            <div class="portal-announcement__badge-wrapper">
                <div class="portal-announcement__badge">
                    <?php echo esc_html($announcement_data['badge']); ?>
                </div>
            </div>
        </div>

        <!-- MAIN HEADLINE & SUBTITLE -->
        <div class="portal-announcement__text-block">
            <h2 class="portal-announcement__heading">
                <?php echo esc_html($announcement_data['title_part1']); ?>
                <span class="text-blue"><?php echo esc_html($announcement_data['title_brand']); ?></span>
                <?php echo esc_html($announcement_data['title_part2']); ?>
                <span class="text-blue"><?php echo esc_html($announcement_data['title_highlight']); ?></span>
                <?php echo esc_html($announcement_data['title_part3']); ?>
            </h2>

            <p class="portal-announcement__desc">
                <?php echo esc_html($announcement_data['description']); ?>
            </p>
        </div>

    </div>
</section>

<?php get_footer(); ?>