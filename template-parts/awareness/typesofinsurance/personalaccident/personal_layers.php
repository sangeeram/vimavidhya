
<?php
/**
 * Interactive Layered Accordion Section — Personal Accident
 * WordPress Custom Template Part
 *
 * Hero:
 * - Everyday routine displayed vertically
 * - Large, attention-grabbing hook
 * - Supporting narrative
 *
 * Cards:
 * - Understand
 * - Evaluate
 * - Act
 */


// =========================================================
// 01 — JOURNEY CARDS DATA
// =========================================================

$layers = [

    // =====================================================
    // 01 — UNDERSTAND
    // =====================================================

    [
        'class'       => 'card-light-blue',
        'number'      => '01',
        'title'       => __('Understand', 'vima-vidya'),

        'description' => __(
            'Most Indians who need personal accident insurance don\'t have it — not because it\'s expensive, but because nobody explained how life-altering a disability or injury can be to household income. This section covers what a PA policy actually is, who it\'s for, what it covers, and why it is fundamentally different from health or life insurance. Start here.',
            'vima-vidya'
        ),

        'links' => [

            [
                'title' => __('What is PA?', 'vima-vidya'),
                'url'   => home_url('/pa-understand/#what-is-pa'),
                'icon'  => 'dashicons-shield',
            ],

            [
                'title' => __('Types', 'vima-vidya'),
                'url'   => home_url('/pa-understand/#pa-types'),
                'icon'  => 'dashicons-groups',
            ],

            [
                'title' => __('Who Can Buy', 'vima-vidya'),
                'url'   => home_url('/pa-understand/#pa-who-can-bu'),
                'icon'  => 'dashicons-shield-alt',
            ],

            [
                'title' => __('Impact', 'vima-vidya'),
                'url'   => home_url('/pa-understand/#pa-impact'),
                'icon'  => 'dashicons-randomize',
            ],

            [
                'title' => __('PA vs Other Cover', 'vima-vidya'),
                'url'   => home_url('/pa-understand/#pa-insurance-other'),
                'icon'  => 'dashicons-randomize',
            ],

            [
                'title' => __('7 Things', 'vima-vidya'),
                'url'   => home_url('/pa-understand/#pa-seven-things'),
                'icon'  => 'dashicons-randomize',
            ],

        ],

        'cta_text' => __('Start with the basics', 'vima-vidya'),
        'cta_url'  => home_url('/pa-understand/'),
    ],


    // =====================================================
    // 02 — EVALUATE
    // =====================================================

    [
        'class'       => 'card-orange',
        'number'      => '02',
        'title'       => __('Evaluate', 'vima-vidya'),

        'description' => __(
            'Personal accident insurance fails people when they buy arbitrary cover without factoring in income replacement, or misread exclusions like hazardous sports and pre-existing conditions. This section walks you through how premiums work, adequate cover by life stage, and the myths that mislead buyers.',
            'vima-vidya'
        ),

        'links' => [

            [
                'title' => __('Premium Logic', 'vima-vidya'),
                'url'   => home_url('/pa-evaluate/#premium-logic'),
                'icon'  => 'dashicons-chart-line',
            ],

            [
                'title' => __('Real Costs', 'vima-vidya'),
                'url'   => home_url('/pa-evaluate/#real-costs'),
                'icon'  => 'dashicons-money-alt',
            ],

            [
                'title' => __('Suitability', 'vima-vidya'),
                'url'   => home_url('/pa-evaluate/#suitability'),
                'icon'  => 'dashicons-yes-alt',
            ],

            [
                'title' => __('Fine Print', 'vima-vidya'),
                'url'   => home_url('/pa-evaluate/#fine-print'),
                'icon'  => 'dashicons-media-document',
            ],

            [
                'title' => __('Myths', 'vima-vidya'),
                'url'   => home_url('/pa-evaluate/#myth-reality'),
                'icon'  => 'dashicons-info',
            ],

            [
                'title' => __('Real Scenarios', 'vima-vidya'),
                'url'   => home_url('/pa-evaluate/#lived-experiences'),
                'icon'  => 'dashicons-format-video',
            ],

        ],

        'cta_text' => __(
            'Before you commit to any policy, evaluate',
            'vima-vidya'
        ),

        'cta_url' => home_url('/pa-evaluate/'),
    ],


    // =====================================================
    // 03 — ACT
    // =====================================================

    [
        'class'       => 'card-dark-blue',
        'number'      => '03',
        'title'       => __('Act', 'vima-vidya'),

        'description' => __(
            'Most claim disputes happen due to delayed intimation, missing disability certificates, or incomplete declaration of occupation risk. This section gives you everything you need to apply right, claim fast, and ensure your family receives financial stability when an accident occurs.',
            'vima-vidya'
        ),

        'links' => [

            [
                'title' => __('How to Apply', 'vima-vidya'),
                'url'   => home_url('/pa-act/#how-to-apply'),
                'icon'  => 'dashicons-forms',
            ],

            [
                'title' => __('What You Can Claim', 'vima-vidya'),
                'url'   => home_url('/pa-act/#what-you-can-claim'),
                'icon'  => 'dashicons-yes',
            ],

            [
                'title' => __('Claims Process', 'vima-vidya'),
                'url'   => home_url('/pa-act/#claims-process'),
                'icon'  => 'dashicons-list-view',
            ],

            [
                'title' => __("Do's & Don'ts", 'vima-vidya'),
                'url'   => home_url('/pa-act/#dos-donts'),
                'icon'  => 'dashicons-editor-help',
            ],

            [
                'title' => __('Checklist', 'vima-vidya'),
                'url'   => home_url('/pa-act/#checklist'),
                'icon'  => 'dashicons-clipboard',
            ],

            [
                'title' => __('FAQs', 'vima-vidya'),
                'url'   => home_url('/pa-act/#faqs'),
                'icon'  => 'dashicons-editor-help',
            ],

        ],

        'cta_text' => __('Act with confidence', 'vima-vidya'),
        'cta_url'  => home_url('/pa-act/'),
    ],

];

?>

<section
    class="journey-accordion-section pa-journey-section"
    id="personal-layers"
    aria-label="<?php esc_attr_e('Personal Accident Insurance Journey', 'vima-vidya'); ?>"
>

    <!-- =====================================================
         HERO SECTION
    ====================================================== -->

<!-- =====================================================
     PERSONAL ACCIDENT — EDITORIAL HERO
====================================================== -->

<div class="journey-vault-bg pa-hero">

    <div class="pa-hero-layout">

        <!-- LEFT: EVERYDAY ROUTINE -->
        <div class="pa-hero-timeline">

            <span class="pa-hero-eyebrow">
                <?php
                esc_html_e(
                    'PERSONAL ACCIDENT INSURANCE',
                    'vima-vidya'
                );
                ?>
            </span>

            <div
                class="pa-hero-sequence"
                aria-label="<?php esc_attr_e('Your everyday routine', 'vima-vidya'); ?>"
            >

                <div class="pa-routine-item">
                    <span class="pa-routine-dot"></span>
                    <strong class="pa-routine-text">
                        <?php esc_html_e('You wake up.', 'vima-vidya'); ?>
                    </strong>
                </div>

                <div class="pa-routine-item">
                    <span class="pa-routine-dot"></span>
                    <strong class="pa-routine-text">
                        <?php esc_html_e('You get ready.', 'vima-vidya'); ?>
                    </strong>
                </div>

                <div class="pa-routine-item">
                    <span class="pa-routine-dot"></span>
                    <strong class="pa-routine-text">
                        <?php esc_html_e('You commute.', 'vima-vidya'); ?>
                    </strong>
                </div>

                <div class="pa-routine-item">
                    <span class="pa-routine-dot"></span>
                    <strong class="pa-routine-text">
                        <?php esc_html_e('You work.', 'vima-vidya'); ?>
                    </strong>
                </div>

                <div class="pa-routine-item">
                    <span class="pa-routine-dot"></span>
                    <strong class="pa-routine-text">
                        <?php esc_html_e('You commute again.', 'vima-vidya'); ?>
                    </strong>
                </div>

                <div class="pa-routine-item is-final">
                    <span class="pa-routine-dot"></span>
                    <strong class="pa-routine-text">
                        <?php esc_html_e('You return home.', 'vima-vidya'); ?>
                    </strong>
                </div>

            </div>

            <p class="pa-timeline-note">
                <?php
                esc_html_e(
                    'You do this every day — five or six days a week, fifty weeks a year.',
                    'vima-vidya'
                );
                ?>
            </p>

        </div>


        <!-- RIGHT: LARGE EDITORIAL HOOK + ORIGINAL CONTENT -->
        <div class="pa-hero-content">

            <span class="pa-hero-question-label">
                <?php
                esc_html_e(
                    'HAVE YOU EVER THOUGHT?',
                    'vima-vidya'
                );
                ?>
            </span>

            <h2 class="pa-hero-hook">
                <span class="pa-hook-first">
                    <?php esc_html_e('What if today is', 'vima-vidya'); ?>
                </span>

                <span class="pa-hook-highlight">
                    <?php esc_html_e('different?', 'vima-vidya'); ?>
                </span>
            </h2>

            <div class="pa-hero-description">

                <p>
                    <?php
                    esc_html_e(
                        'That is the nature of accidents. They do not announce themselves. They arrive without warning — on a wet road, on a construction site, in a crowded marketplace, on a staircase at home.',
                        'vima-vidya'
                    );
                    ?>
                </p>
<!-- RELEVANT ILLUSTRATION -->
                <div class="pa-hero-inline-image" style="margin-top: 1.5rem;">
                    <img 
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/typesofinsurance/personal-accident/personal-layer-image.png' ); ?>" 
                        alt="<?php esc_attr_e('Personal Accident Insurance Overview', 'vima-vidya'); ?>" 
                        style="width: 100%; height: auto; border-radius: 12px;"
                    />
                </div>
                

            </div>

        </div>

    </div>


    <!-- FULL-WIDTH INSURANCE CALLOUT -->
    <div class="pa-hero-callout">

        <div class="pa-callout-icon" aria-hidden="true">

            <svg
                viewBox="0 0 48 48"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M24 4L40 10V21C40 31 33 39 24 44C15 39 8 31 8 21V10L24 4Z"
                    stroke="currentColor"
                    stroke-width="2.5"
                    stroke-linejoin="round"
                />

                <path
                    d="M16 24L21 29L32 18"
                    stroke="currentColor"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>

        </div>

        <p>
            <?php
            esc_html_e(
                'Yet, Personal Accident Insurance — a product specifically designed to cushion you and your family from the financial shock of such events — remains one of the most undervalued and least purchased insurance products in India.',
                'vima-vidya'
            );
            ?>
        </p>

    </div>

</div>


    <!-- =====================================================
         INTERACTIVE JOURNEY CARDS
    ====================================================== -->

    <div class="cards-container">

        <?php foreach ($layers as $index => $layer) : ?>

            <article
                class="journey-card
                    <?php echo esc_attr($layer['class']); ?>
                    <?php echo 0 === $index ? 'is-expanded' : ''; ?>"
                data-layer
            >

                <div class="card-inner">

                    <!-- Card Number -->
                    <div class="badge-number">
                        <?php echo esc_html($layer['number']); ?>
                    </div>


                    <!-- Card Title -->
                    <h3 class="card-title">
                        <?php echo esc_html($layer['title']); ?>
                    </h3>


                    <!-- Card Description -->
                    <p class="card-description">
                        <?php echo esc_html($layer['description']); ?>
                    </p>


                    <!-- Collapsed State Arrow -->
                    <div class="circle-arrow-btn" aria-hidden="true">
                        &rarr;
                    </div>


                    <!-- Expanded Card Content -->
                    <?php if (!empty($layer['links']) || !empty($layer['cta_text'])) : ?>

                        <div class="card-expanded-content">

                            <!-- Navigation Links -->
                            <?php if (!empty($layer['links'])) : ?>

                                <ul class="card-links-list">

                                    <?php foreach ($layer['links'] as $link) : ?>

                                        <li>

                                            <a href="<?php echo esc_url($link['url']); ?>">

                                                <span class="link-label">

                                                    <i
                                                        class="dashicons <?php echo esc_attr($link['icon']); ?>"
                                                        aria-hidden="true"
                                                    ></i>

                                                    <?php echo esc_html($link['title']); ?>

                                                </span>

                                                <span class="arrow" aria-hidden="true">
                                                    &rarr;
                                                </span>

                                            </a>

                                        </li>

                                    <?php endforeach; ?>

                                </ul>

                            <?php endif; ?>


                            <!-- Card CTA -->
                            <?php if (!empty($layer['cta_text']) && !empty($layer['cta_url'])) : ?>

                                <a
                                    href="<?php echo esc_url($layer['cta_url']); ?>"
                                    class="card-cta-button"
                                >

                                    <?php echo esc_html($layer['cta_text']); ?>

                                    <span aria-hidden="true">&rarr;</span>

                                </a>

                            <?php endif; ?>

                        </div>

                    <?php endif; ?>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

</section>


<!-- =========================================================
     INTERACTIVE CARD BEHAVIOUR
========================================================== -->

<script>
(function () {
    'use strict';

    function initPersonalAccidentJourney() {

        const sections = document.querySelectorAll(
            '.pa-journey-section'
        );

        sections.forEach(function (section) {

            if (section.dataset.paInitialized === 'true') {
                return;
            }

            section.dataset.paInitialized = 'true';

            const cards = section.querySelectorAll(
                '.journey-card[data-layer]'
            );

            cards.forEach(function (card) {

                card.addEventListener('click', function (event) {

                    // Allow navigation links to work normally.
                    if (event.target.closest('a')) {
                        return;
                    }

                    // Keep the already expanded card open.
                    if (card.classList.contains('is-expanded')) {
                        return;
                    }

                    // Close all other cards.
                    cards.forEach(function (otherCard) {
                        otherCard.classList.remove('is-expanded');
                    });

                    // Expand the selected card.
                    card.classList.add('is-expanded');

                });

            });

        });

    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initPersonalAccidentJourney
        );
    } else {
        initPersonalAccidentJourney();
    }

})();
</script>
