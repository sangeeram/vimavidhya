<?php
/**
 * Vima Vidya - Simple Stacked Glossary (Insurance, Premium, Claim)
 */

$vv_glossary_page = home_url('/glossary/');

$vv_simple_terms = [
    [
        'title' => 'Insurance',
        'text'  => 'You transfer specific financial risks—such as hospitalization, vehicle damage, or loss of income—to an insurance provider under clear policy terms.',
    ],
    [
        'title' => 'Premium',
        'text'  => 'The amount you pay—monthly, quarterly, or annually—to keep your insurance policy active and maintain coverage according to your policy terms.',
    ],
    [
        'title' => 'Claim',
        'text'  => 'A formal request to your insurer to settle or reimburse a covered loss under your active policy after a qualifying event occurs.',
    ],
];
?>

<section class="vv-homeglossary-section vv-homeglossary-section--stacked" id="vv-homeglossary">

    <div class="vv-homeglossary-container">

        <header class="vv-homeglossary-header">

            <h2 class="vv-homeglossary-header__title">
                Understand the Insurance Glossary
            </h2>

            <p class="vv-homeglossary-header__subtitle">
                Start with the three core building blocks—Insurance, Premium, and Claim—then explore the full glossary.
            </p>

        </header>

        <div class="vv-homeglossary-card vv-homeglossary-card--stacked">

            <div class="vv-homeglossary-stack">

                <?php foreach ($vv_simple_terms as $term) : ?>

                    <article class="vv-homeglossary-item">

                        <h3 class="vv-homeglossary-item__title">
                            <?php echo esc_html($term['title']); ?>
                        </h3>

                        <p class="vv-homeglossary-item__desc">
                            <?php echo esc_html($term['text']); ?>
                        </p>

                    </article>

                <?php endforeach; ?>

            </div>

            <div class="vv-homeglossary-card__actions">

                <a
                    href="<?php echo esc_url($vv_glossary_page); ?>"
                    class="vv-homeglossary-btn--theme"
                >
                    Explore Full Glossary &rarr;
                </a>

            </div>

        </div>

    </div>

</section>