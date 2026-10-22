<?php
$events = [
    [
        'id'          => 'buy-home',
        'title'       => 'Buy Home',
        'icon'        => '🏠',
        'image'       => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'When you buy a home (new or resale)',
        'description' => 'Buy building + contents insurance immediately. Calculate the Reinstatement Value using current CPWD rates × built-up area.',
    ],
    [
        'id'          => 'move-rental',
        'title'       => 'Move to Rental',
        'icon'        => '🚚',
        'image'       => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'When you move into a rented flat',
        'description' => 'Take a tenant\'s contents policy within the first month. List all your belongings against theft and damage.',
    ],
    [
        'id'          => 'open-shop-owned',
        'title'       => 'Shop (Owned)',
        'icon'        => '🏪',
        'image'       => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'When you open a shop (own premises)',
        'description' => 'Buy a Shopkeeper\'s Package Policy or SFSP immediately. Cover structure and stock at replacement cost.',
    ],
    [
        'id'          => 'rented-commercial',
        'title'       => 'Shop (Rented)',
        'icon'        => '🏢',
        'image'       => 'https://images.unsplash.com/photo-1513151233558-d860c5398176?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Operating rented commercial space',
        'description' => 'Buy contents/stock insurance — landlord\'s building insurance does not cover your inventory or cash.',
    ],
    [
        'id'          => 'renovate',
        'title'       => 'Renovate Home',
        'icon'        => '🔨',
        'image'       => 'https://images.unsplash.com/photo-1581858726788-75bc0f6a952d?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'When you renovate or upgrade',
        'description' => 'A new kitchen or interior upgrade increases home value. Request an endorsement to update sum insured.',
    ],
    [
        'id'          => 'expand-business',
        'title'       => 'Expand Business',
        'icon'        => '📈',
        'image'       => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'When you expand stock or business',
        'description' => 'Notify your insurer to cover additional stock and equipment, especially ahead of peak seasonal inventory.',
    ],
    [
        'id'          => 'buy-appliance',
        'title'       => 'Buy Appliance',
        'icon'        => '📺',
        'image'       => 'https://images.unsplash.com/photo-1593784991095-a205069470b6?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'When you buy a major appliance',
        'description' => 'Add high-value electronics and gadgets to your contents policy right away and retain original invoices.',
    ],
    [
        'id'          => 'buy-jewellery',
        'title'       => 'Buy Jewellery',
        'icon'        => '💎',
        'image'       => 'https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'When you buy significant jewellery',
        'description' => 'Update your Specified Items declaration and obtain fresh valuations as market rates appreciate.',
    ],
    [
        'id'          => 'annual-renewal',
        'title'       => 'Annual Renewal',
        'icon'        => '🔄',
        'image'       => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'At every annual policy renewal',
        'description' => 'Review Sum Insured against current construction costs, update stock values, and verify active add-ons.',
    ],
    [
        'id'          => 'extended-travel',
        'title'       => 'Extended Travel',
        'icon'        => '✈️',
        'image'       => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Before extended travel (30+ days)',
        'description' => 'Notify your insurer prior to departure. Vacancies exceeding 30 days can affect claim validity without prior notice.',
    ],
];

$assets_uri = get_template_directory_uri() . '/assets/images/lifestyle/';
?>

<section class="policy-impact-section" id="impact">
    <div class="policy-impact-compact-container">
        
        <!-- Header -->
        <div class="policy-impact-header">
            <!-- <span class="policy-impact-badge">01.5 Life Stages</span> -->
            <h2 class="policy-impact-title">What Impacts Your Policy at Each Stage?</h2>
            <p class="policy-impact-subtitle">
                Timing in property insurance is everything. Here is a quick walkthrough of every key life and business event that triggers a policy review.
            </p>
        </div>

        <!-- 5-Column Cards Grid -->
        <div class="policy-impact-5col-grid">
            <?php foreach ($events as $item): ?>
                <?php 
                    $img_src = (strpos($item['image'], 'http') === 0) 
                        ? $item['image'] 
                        : $assets_uri . $item['image']; 
                ?>
                <div class="impact-card-5col">
                    <div class="card-inner">
                        <div class="card-image-wrap">
                            <img src="<?= esc_url($img_src); ?>" alt="<?= htmlspecialchars($item['title']); ?>" loading="lazy" />
                        </div>

                        <div class="card-content">
                            <div class="card-header-row">
                                <span class="card-icon"><?= $item['icon']; ?></span>
                                <h3 class="card-title"><?= htmlspecialchars($item['title']); ?></h3>
                            </div>
                            <h4 class="card-heading"><?= htmlspecialchars($item['heading']); ?></h4>
                            <p class="card-desc"><?= htmlspecialchars($item['description']); ?></p>
                            
                            <!-- <button class="card-action-btn" type="button">
                                <span>What to do</span> &rarr;
                            </button> -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Case Story Container -->
        <div class="case-story-card">
            <div class="case-story-main-grid">
                
                <!-- Left Side: Image with Overlapping Metrics -->
                <div class="case-story-left-col">
                    <div class="case-story-image-wrap">
                        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/typesofinsurance/propertyinsurance/casestory/vikram.png'); ?>" alt="Vikram's Renovation Regret" class="case-story-hero-img" />
                    </div>

                    <div class="metrics-overlay-grid">
                        <div class="metric-item">
                            <span class="metric-icon-bg icon-blue">🏠</span>
                            <span class="metric-label">Renovation Cost</span>
                            <span class="metric-value">₹18 lakhs</span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-icon-bg icon-red">🔥</span>
                            <span class="metric-label">Fire Damage</span>
                            <span class="metric-value highlight-red">₹22 lakhs</span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-icon-bg icon-shield">🛡️</span>
                            <span class="metric-label">Insured Value <small>(Old Sum Insured)</small></span>
                            <span class="metric-value highlight-blue">₹55 lakhs</span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-icon-bg icon-building">🏛️</span>
                            <span class="metric-label">Actual Reinstatement Value</span>
                            <span class="metric-value highlight-navy">₹90 lakhs</span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-icon-bg icon-orange">⚖️</span>
                            <span class="metric-label">Average Clause Reduced Payout</span>
                            <span class="metric-value highlight-blue">₹9 lakhs</span>
                        </div>
                    </div>

                    <div class="case-story-footer-row">
                        <div class="takeaway-banner">
                            <div class="takeaway-badge-icon">💡</div>
                            <div class="takeaway-text-group">
                                <strong class="takeaway-title">Takeaway:</strong>
                                <span class="takeaway-body">Even within a long-term policy, you should still update your sum insured via an endorsement if construction costs or asset values rise significantly.</span>
                            </div>
                        </div>

                        <div class="premium-stat-card">
                            <span class="premium-icon">💳</span>
                            <div class="premium-details">
                                <span class="premium-label">Additional premium to update sum insured</span>
                                <span class="premium-value">&lt; ₹800 / year</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Text Narrative -->
                <div class="case-story-right-col">
                    <span class="case-story-badge">📖 CASE STORY</span>
                    <h3 class="case-story-title">Vikram’s<br>Renovation Regret</h3>
                    <div class="accent-line"></div>
                    
                    <div class="case-story-text">
                        <p>Vikram, 48, a businessman from Pune, spent ₹18 lakhs renovating his home with new flooring, modular kitchen, false ceiling with designer lights, and an outdoor deck. He never updated his insurance policy. A kitchen fire caused ₹22 lakhs in damage.</p>
                        <p>But his property reinstatement value was now worth ₹90 lakhs while insured for ₹55 lakhs (the pre-renovation sum insured). The Average Clause reduced his payout by nearly ₹9 lakhs. It would have cost Vikram less than ₹800 per year in additional premium to update his sum insured. The cost of not doing it? ₹9 lakhs.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.impact-filter-btn');
    const cards = document.querySelectorAll('.impact-card-5col');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            cards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filter === 'all' || category === filter || category === 'all') {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>