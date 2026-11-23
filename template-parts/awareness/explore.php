<?php
// ==========================================================
// VIMAVIDYA - RISK CARDS DATA (4 STATIC CARDS)
// ==========================================================

$vv_riskcards = [
    [
        'number'      => '01',
        'title'       => 'Managing Risks',
        'description' => 'Learn how to identify everyday risks, understand their impact, and make informed decisions to prepare for the unexpected.',
        'image'       => get_template_directory_uri() . '/assets/images/awareness/managing-risk.png',
        'url'         => home_url('/managing-risks/'),
    ],
    [
        'number'      => '02',
        'title'       => 'What & Why Insurance',
        'description' => 'Understand the basic idea of insurance and discover how it provides financial stability, reduces uncertainty, and protects what matters most.',
        'image'       => get_template_directory_uri() . '/assets/images/awareness/what-why.png',
        'url'         => home_url('/what-and-why-is-insurance/'),
    ],
    [
        'number'      => '03',
        'title'       => 'Types Of Insurance',
        'description' => 'Discover the different categories of insurance available and find out which coverage options fit your needs best.',
        'image'       => get_template_directory_uri() . '/assets/images/awareness/type-of-insurance.png',
        'url'         => home_url('/awareness/#insurance-showcase'),
    ],
    [
        'number'      => '04',
        'title'       => 'Stories That Connect',
        'description' => 'Explore relatable stories and real-life situations that make insurance concepts easier to understand and remember.',
        'image'       => get_template_directory_uri() . '/assets/images/awareness/stories-connect.png',
        'url'         => home_url('/stories-that-matter/'),
    ],
];

$vv_riskcards_eyebrow = 'UNDERSTAND YOUR PROTECTION';
$vv_riskcards_title = 'Insurance, made';
$vv_riskcards_title_accent = 'simple.';
?>

<section class="vv-lifestage" id="vv-lifestage" aria-label="Insurance awareness">
    <div class="vv-lifestage__header">
        <span class="vv-lifestage__eyebrow">
            <?php echo esc_html($vv_riskcards_eyebrow); ?>
        </span>
        <h2 class="vv-lifestage__title">
            <?php echo esc_html($vv_riskcards_title); ?>
            <strong><?php echo esc_html($vv_riskcards_title_accent); ?></strong>
        </h2>
    </div>

    <div class="vv-lifestage__container">
        <div class="vv-lifestage__grid">
            <?php foreach ($vv_riskcards as $index => $card): ?>
                <article class="vv-card <?php echo $index % 2 !== 0 ? 'vv-card--reverse' : ''; ?>">
                    <div class="vv-card__content">
                        <span class="vv-card__index"><?php echo esc_html($card['number']); ?></span>
                        <h3 class="vv-card__title"><?php echo esc_html($card['title']); ?></h3>
                        <p class="vv-card__desc"><?php echo esc_html($card['description']); ?></p>
                        <a href="<?php echo esc_url($card['url']); ?>" class="vv-card__cta" aria-label="Explore <?php echo esc_attr($card['title']); ?>">
                            <span>Explore Topic</span>
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                    <div class="vv-card__image-wrap">
                        <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" />
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>