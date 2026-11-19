<?php
/**
 * Template Part: What Life Insurance Actually Costs — Indicative (2025–26)
 * Theme: Vima Vidya Custom Theme (Automatic Scrolling Marquee + Interactive Flip Cards)
 */

$life_costs = [
    'title' => 'What Life Insurance Actually Costs — Indicative (2025–26)',
    'subtitle' => 'Actual premiums vary by insurer, medical underwriting outcome, and individual profile. These figures are indicative for a non-smoker in good health.',
    'cards' => [
        [
            'profile' => '25-year-old, non-smoker, ₹4 lakh income',
            'policy' => 'Term — 35-year term',
            'sum_assured' => '₹75 lakh',
            'premium' => '₹6,500–9,000 / year',
            'img' => 'https://images.unsplash.com/photo-1544717305-2782549b5136?w=600&auto=format&fit=crop&q=80'
        ],
        [
            'profile' => '30-year-old, non-smoker, ₹6 lakh income',
            'policy' => 'Term — 30-year term',
            'sum_assured' => '₹1 crore',
            'premium' => '₹10,000–14,000 / year',
            'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&auto=format&fit=crop&q=80'
        ],
        [
            'profile' => '30-year-old, non-smoker, with CI Rider',
            'policy' => 'Term + Critical Illness Rider',
            'sum_assured' => '₹1 crore + ₹25 lakh CI',
            'premium' => '₹18,000–24,000 / year',
            'img' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&auto=format&fit=crop&q=80'
        ],
        [
            'profile' => '35-year-old, non-smoker, ₹12 lakh income',
            'policy' => 'Term — 25-year term',
            'sum_assured' => '₹1.5 crore',
            'premium' => '₹22,000–30,000 / year',
            'img' => 'https://images.unsplash.com/photo-1506784983877-45594efa4cbe?w=600&auto=format&fit=crop&q=80'
        ],
        [
            'profile' => '30-year-old, non-smoker',
            'policy' => 'Endowment — 20-year term',
            'sum_assured' => '₹25 lakh',
            'premium' => '₹70,000–90,000 / year',
            'img' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&auto=format&fit=crop&q=80'
        ],
        [
            'profile' => '30-year-old, non-smoker',
            'policy' => 'Money-Back Plan — 20-year term',
            'sum_assured' => '₹20 lakh SA; survival benefits at 5/10/15 yrs',
            'premium' => '₹55,000–75,000 / year',
            'img' => 'https://images.unsplash.com/photo-1527529482837-4698179dc6ce?w=600&auto=format&fit=crop&q=80'
        ],
        [
            'profile' => '31-year-old, non-smoker, ₹12 lakh income',
            'policy' => 'ULIP — 15-year policy, equity fund',
            'sum_assured' => '₹10 lakh SA (10× premium); ₹1 lakh/year',
            'premium' => '₹1,00,000/year (+ charges)',
            'img' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&auto=format&fit=crop&q=80'
        ],
        [
            'profile' => '35-year-old, parent of 5-year-old',
            'policy' => "Children's Policy — 15-year term",
            'sum_assured' => '₹25 lakh maturity',
            'premium' => '₹30,000–45,000 / year',
            'img' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=600&auto=format&fit=crop&q=80'
        ],
        [
            'profile' => '40-year-old, planning retirement',
            'policy' => 'Guaranteed Income Plan — 10 yr premium, 25 yr payout',
            'sum_assured' => '₹4.5–5 lakh/year guaranteed from age 50',
            'premium' => '₹1,50,000–2,00,000 / year',
            'img' => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?w=600&auto=format&fit=crop&q=80'
        ],
        [
            'profile' => '45-year-old, planning retirement',
            'policy' => 'Deferred Annuity — 15-year accumulation',
            'sum_assured' => '₹50,000/month post-60',
            'premium' => '₹1,50,000–2,00,000 / year',
            'img' => 'https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=600&auto=format&fit=crop&q=80'
        ],
        [
            'profile' => '60-year-old, ₹50 lakh retirement corpus',
            'policy' => 'Immediate Annuity — Life with ROP',
            'sum_assured' => '₹30,000–35,000/month for life',
            'premium' => 'Single premium: ₹50 lakh',
            'img' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=600&auto=format&fit=crop&q=80'
        ],
        [
            'profile' => 'Any salaried employee (employer-funded)',
            'policy' => 'Group Term Insurance',
            'sum_assured' => '3–5× annual salary',
            'premium' => 'Employer-paid; Cost: Nil',
            'img' => 'https://images.unsplash.com/photo-1519501025264-65ba15a82390?w=600&auto=format&fit=crop&q=80'
        ],
        [
            'profile' => 'First-time buyer, smaller city/town',
            'policy' => 'Saral Jeevan Bima',
            'sum_assured' => '₹5–25 lakh',
            'premium' => '₹3,000–12,000 / year',
            'img' => 'https://images.unsplash.com/photo-1617814076367-b759c7d7e738?w=600&auto=format&fit=crop&q=80'
        ]
    ]
];
?>

<section class="asset-stacked-section" id="life-costs-autoscroll-flip">
    <div class="container-wide">

        <!-- HEADER -->
        <div class="section-header">
            <h2 class="h2 text-navy m-t-12">
                <?= htmlspecialchars($life_costs['title']); ?>
            </h2>
            <p class="text-body-med max-w-800 m-t-16">
                <?= htmlspecialchars($life_costs['subtitle']); ?>
            </p>
        </div>

    </div>

    <!-- AUTO-SCROLLING MARQUEE TRACK -->
    <div class="auto-scroll-marquee-wrapper m-t-32">
        <div class="auto-scroll-track" id="marqueeTrack">
            
            <?php 
            // Duplicate the array to create a seamless infinite loop effect
            $all_cards = array_merge($life_costs['cards'],$life_costs['cards']);
            foreach ($all_cards as $index =>$card): 
                $unique_id = 'card-' . ($index % count($life_costs['cards'])) . '-' .$index;
            ?>
                <div class="flip-card-container">
                    <div class="flip-card-inner" id="<?= $unique_id; ?>">
                        
                        <!-- FRONT SIDE: PROFILE -->
                        <div class="flip-card-face flip-card-front" style="background-image: url('<?= htmlspecialchars($card['img']); ?>');">
                            <div class="ref-card-overlay"></div>
                            
                            <div class="ref-card-top-bar">
                                <span class="ref-badge">Indicative</span>
                                <div class="ref-icon-badge">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>
                                </div>
                            </div>

                            <div class="ref-card-content">
                                <h3 class="ref-card-title"><?= htmlspecialchars($card['profile']); ?></h3>
                                <button type="button" class="flip-trigger-btn" onclick="toggleCardFlip('<?= $unique_id; ?>')">
                                    <span>View Details</span>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                </button>
                            </div>
                        </div>

                        <!-- BACK SIDE: POLICY DETAILS -->
                        <div class="flip-card-face flip-card-back">
                            <div class="back-card-header">
                                <span class="back-tag">Plan Breakdown</span>
                                <button type="button" class="back-flip-btn" onclick="toggleCardFlip('<?= $unique_id; ?>')" aria-label="Flip back">&times;</button>
                            </div>

                            <div class="back-card-body">
                                <h4 class="back-profile-title"><?= htmlspecialchars($card['profile']); ?></h4>
                                
                                <div class="back-info-group">
                                    <span class="info-label">Policy Type</span>
                                    <p class="info-value"><?= htmlspecialchars($card['policy']); ?></p>
                                </div>

                                <div class="back-info-group">
                                    <span class="info-label">Sum Assured</span>
                                    <p class="info-value"><?= htmlspecialchars($card['sum_assured']); ?></p>
                                </div>

                                <div class="back-info-group highlight-box">
                                    <span class="info-label">Approx. Annual Premium</span>
                                    <p class="premium-highlight"><?= htmlspecialchars($card['premium']); ?></p>
                                </div>
                            </div>

                            <div class="back-card-footer">
                                <button type="button" class="return-flip-btn" onclick="toggleCardFlip('<?= $unique_id; ?>')">&larr; Back to Profile</button>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<script>
    /**
 * Vima Vidya — Auto-Scroll Marquee + Card Flip Controller
 */

function toggleCardFlip(cardId) {
    const cardInner = document.getElementById(cardId);
    const marqueeTrack = document.getElementById('marqueeTrack');

    if (cardInner) {
        cardInner.classList.toggle('is-flipped');
        
        // Check if any card in the slider is currently flipped
        const anyFlipped = marqueeTrack.querySelector('.flip-card-inner.is-flipped');
        
        if (anyFlipped) {
            // Pause auto-scrolling so user can read the back details comfortably
            marqueeTrack.classList.add('is-paused');
        } else {
            // Resume scrolling if no cards remain flipped
            marqueeTrack.classList.remove('is-paused');
        }
    }
}
</script>