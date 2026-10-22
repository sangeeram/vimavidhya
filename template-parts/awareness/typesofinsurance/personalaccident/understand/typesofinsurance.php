<?php
/**
 * Personal Accident Insurance Policy Types
 * Individual Policy Stacked Accordion
 */

$pa_policies = [
    [
        'number'        => '01',
        'type'          => 'Individual PA Policy',
        'image'         => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'One named person',
        'key_features'  => 'CSI chosen by insured; full add-on flexibility; portable across jobs and life events.',
        'best_for'      => 'Salaried professionals, self-employed, business owners.'
    ],
    [
        'number'        => '02',
        'type'          => 'Family PA Policy',
        'image'         => 'https://images.unsplash.com/photo-1542382257-80dedb725088?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Insured + spouse + dependent children',
        'key_features'  => 'Discounted combined premium; spouse typically at 50% of CSI; each child at 20%; single renewal.',
        'best_for'      => 'Working couples; families with school-going children.'
    ],
    [
        'number'        => '03',
        'type'          => 'Group PA Policy (Employer)',
        'image'         => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'All enrolled employees as a group',
        'key_features'  => 'Fixed CSI (usually 2–3× salary); no portability; no add-ons; employer pays or splits premium.',
        'best_for'      => 'Only a starting point — not adequate as sole cover.'
    ],
    [
        'number'        => '04',
        'type'          => 'Saral Suraksha Bima',
        'image'         => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Individual — standardised product',
        'key_features'  => 'IRDAI-mandated uniform structure across all insurers; easy to compare; covers AD, PTD, PPD.',
        'best_for'      => 'First-time buyers; benchmark for comparison shopping.'
    ],
    [
        'number'        => '05',
        'type'          => 'PMSBY (Govt. Scheme)',
        'image'         => 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Any savings account holder aged 18–70',
        'key_features'  => '₹20/year premium; ₹2 lakh cover for AD and PTD; enroll through bank account.',
        'best_for'      => 'Baseline cover for lower-income groups; not adequate alone for earners with dependents.'
    ],
    [
        'number'        => '06',
        'type'          => 'Group PA (Associations/Trade Bodies)',
        'image'         => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1800&auto=format&fit=crop',
        'who_it_covers' => 'Members of professional or trade associations',
        'key_features'  => 'Negotiated group rates; may offer broader cover than employer policies.',
        'best_for'      => 'Freelancers, gig workers, professional association members.'
    ]
];
?>

<section class="vv-property-types vv-pa-types" id="pa-types">
    <div class="vv-container">

        <header class="vv-section-header">
            <div class="vv-section-kicker">
                <!-- <span class="vv-badge">Types of Personal Accident Insurance</span> -->
            </div>
            <h2 class="vv-title">Types of Personal Accident Insurance</h2>
            <p class="vv-subtitle">PA Insurance is not one-size-fits-all. Understanding the types available in India helps you choose the right layer of protection.</p>
        </header>

        <div class="vv-stack-wrapper" data-accordion-group>
            <?php foreach ($pa_policies as $index => $item) : ?>
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
                        <span class="vv-collapsed-label"><?php echo esc_html($item['type']); ?></span>
                        <span class="vv-tab-arrow">&rarr;</span>
                    </button>

                    <!-- EXPANDED CONTENT -->
                    <div class="vv-card-content">
                        <div class="vv-card-main">
                            <div class="vv-card-header">
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