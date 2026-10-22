<?php
/**
 * Property Insurance Policy Types
 * Individual Policy Stacked Accordion
 */


$policies = [
    [
        'number'        => '01',
        'type'          => 'Individual Homeowner Policy',
        'image'         => 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'One property owner',
        'key_features'  => 'Structure + contents; full add-on flexibility; renewable annually.',
        'best_for'      => 'Owner-occupiers, landlords renting out property.'
    ],
    [
        'number'        => '02',
        'type'          => "Tenant's Contents Policy",
        'image'         => 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Renter / tenant',
        'key_features'  => 'Contents only — no building cover; covers personal belongings in rented space.',
        'best_for'      => 'Renters and PG residents.'
    ],
    [
        'number'        => '03',
        'type'          => 'Bharat Griha Raksha',
        'image'         => 'https://images.unsplash.com/photo-1580587771525-78b9dba3b914?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Any individual homeowner',
        'key_features'  => 'IRDAI-mandated standard product; uniform structure across all insurers; 1–5 year cover.',
        'best_for'      => 'First-time buyers; comparison baseline.'
    ],
    [
        'number'        => '04',
        'type'          => "Householder's Package Policy",
        'image'         => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Homeowner — bundle',
        'key_features'  => 'Combines building, contents, third-party liability, and several add-ons in one policy.',
        'best_for'      => 'Comprehensive single-policy buyers.'
    ],
    [
        'number'        => '05',
        'type'          => 'Standard Fire & Special Perils (SFSP)',
        'image'         => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Small businesses, shops, commercial establishments',
        'key_features'  => 'Covers structure and/or stock against fire, explosion, flood, cyclone, earthquake, riot, and named perils.',
        'best_for'      => 'Kirana stores, small retail, workshops, service establishments — any physical premises.'
    ],
    [
        'number'        => '06',
        'type'          => "Shopkeeper's Package Policy",
        'image'         => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Small retail and service businesses',
        'key_features'  => 'Bundled commercial policy combining building, stock, cash, fidelity, personal accident, and public liability.',
        'best_for'      => 'The single most practical starting point for most small business owners.'
    ],
    [
        'number'        => '07',
        'type'          => 'Group Property Policy (Societies)',
        'image'         => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Society / RWA',
        'key_features'  => 'Covers only common areas and building shell — NOT individual flats or contents.',
        'best_for'      => 'Common area protection only — not adequate as sole cover for residents.'
    ],
    [
        'number'        => '08',
        'type'          => 'Long-Term Policy (2–5 years)',
        'image'         => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Individual owner',
        'key_features'  => 'Premium discount up to 12%; no renewal risk; cover locked in.',
        'best_for'      => 'Those wanting continuity and savings on premium.'
    ]
];
?>

<section class="vv-property-types" id="types">
    <div class="vv-container">

        <header class="vv-section-header">
            <div class="vv-section-kicker">
                <!-- <span class="vv-badge">01.3 Types of Property Insurance</span> -->
               
            </div>
            <h2 class="vv-title">Types of Property Insurance in India</h2>
            <p class="vv-subtitle">Property insurance is not one-size-fits-all. Understanding the types available in India helps you choose the right layer of protection.</p>
        </header>

        <div class="vv-stack-wrapper" data-accordion-group>
            <?php foreach ($policies as $index => $item) : ?>
                <article
                    class="vv-stack-card <?php echo $index === 0 ? 'is-active' : ''; ?>"
                    data-accordion-card
                    tabindex="0"
                    aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                    style="--card-image: url('<?php echo esc_url($item['image']); ?>');"
                >
                    <div class="vv-card-image"></div>
                    <div class="vv-card-overlay"></div>

                    <!-- COLLAPSED TRIGGER TAB -->
                    <button
                        type="button"
                        class="vv-tab-trigger"
                        data-accordion-trigger
                        aria-label="Expand <?php echo esc_attr($item['type']); ?>"
                    >
                        <!-- <span class="vv-card-index"><?php echo esc_html($item['number']); ?></span> -->
                        <span class="vv-collapsed-label"><?php echo esc_html($item['type']); ?></span>
                        <span class="vv-tab-arrow">&rarr;</span>
                    </button>

                    <!-- EXPANDED CONTENT -->
                    <div class="vv-card-content">
                        <div class="vv-card-main">
                            <div class="vv-card-header">
                                <!-- <span class="vv-card-number"><?php echo esc_html($item['number']); ?></span> -->
                                <h3 class="vv-card-title"><?php echo esc_html($item['type']); ?></h3>
                            </div>
                        </div>

                        <div class="vv-card-details">
                            <div class="vv-detail-block">
                                <div class="vv-detail-icon"><span>♙</span></div>
                                <span class="vv-detail-label">WHO IT COVERS</span>
                                <p class="vv-detail-text"><?php echo esc_html($item['who_it_covers']); ?></p>
                            </div>

                            <div class="vv-detail-block">
                                <div class="vv-detail-icon"><span>◇</span></div>
                                <span class="vv-detail-label">KEY FEATURES</span>
                                <p class="vv-detail-text"><?php echo esc_html($item['key_features']); ?></p>
                            </div>

                            <div class="vv-detail-block">
                                <div class="vv-detail-icon"><span>⌂</span></div>
                                <span class="vv-detail-label">BEST FOR</span>
                                <p class="vv-detail-text"><?php echo esc_html($item['best_for']); ?></p>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const groups = document.querySelectorAll('[data-accordion-group]');

    groups.forEach(function (group) {
        const cards = group.querySelectorAll('[data-accordion-card]');

        cards.forEach(function (card) {
            const trigger = card.querySelector('[data-accordion-trigger]');

            trigger.addEventListener('click', function () {
                if (card.classList.contains('is-active')) return;

                cards.forEach(function (item) {
                    item.classList.remove('is-active');
                    item.setAttribute('aria-expanded', 'false');
                });

                card.classList.add('is-active');
                card.setAttribute('aria-expanded', 'true');
            });
        });
    });
});
</script>