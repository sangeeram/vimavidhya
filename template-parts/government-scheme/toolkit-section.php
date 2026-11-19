<?php
/**
 * =========================================================
 * VIMA VIDYA
 * AGE-WISE PROTECTION TOOLKIT & FAMILY STORY SECTION
 * =========================================================
 */
$toolkit_stages = [
    [
        'id' => 'toolkit-18-25',
        'badge' => '🧒 Age 18–25',
        'badge_class' => 'starter',
        'title' => 'First Job, First Protection',
        'subtitle' => 'Starter Stage',
        'description' => 'Essential coverage for starting your career, handling student loans, and early safety nets.',
        'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80',
        'items' => [
            '<strong>PMSBY (₹20/yr)</strong> — accidental death and disability from Day 1',
            '<strong>PMJJBY (₹436/yr)</strong> — life cover if you have parents or siblings depending on you',
            '<strong>APY</strong> — start your pension NOW. At 18, just ₹42/month for ₹1,000/month pension at 60',
            '<strong>Bharat Yatra Suraksha</strong> — every time you travel for college, internship, work',
            '<strong>Saral Jeevan Bima</strong> — especially if you have taken an education loan'
        ]
    ],
    [
        'id' => 'toolkit-26-35',
        'badge' => '🧑‍💼 Age 26–35',
        'badge_class' => 'growth',
        'title' => 'Building a Family, Building Wealth',
        'subtitle' => 'Growth Stage',
        'description' => 'Mandatory baselines, cashless health insurance, and term plans for growing responsibilities.',
        'image' => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=600&q=80',
        'items' => [
            '<strong>PMSBY + PMJJBY</strong> — mandatory baseline (both cost ₹456/yr together)',
            '<strong>Cashless Health Insurance</strong> — priority if you earn above PMJAY eligibility',
            '<strong>Saral Jeevan Bima / Term Plan</strong> — critical after marriage, home loan, or first child',
            '<strong>APY</strong> — still affordable; ₹126–₹226/month for ₹3,000/month pension',
            '<strong>PMFBY</strong> — if you are a farmer or have agriculture income'
        ]
    ],
    [
        'id' => 'toolkit-36-50',
        'badge' => '🧑‍👩‍👧 Age 36–50',
        'badge_class' => 'peak',
        'title' => 'Peak Earning, Peak Responsibility',
        'subtitle' => 'Peak Stage',
        'description' => 'Enhance health covers, lock in expiring options like PMJJBY, and review large liabilities.',
        'image' => 'https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=600&q=80',
        'items' => [
            '<strong>PMJJBY</strong> — last chance to enrol is before age 50. Act NOW if not already enrolled',
            '<strong>PMSBY</strong> — continue or start (covers till age 70)',
            '<strong>Enhance health cover</strong> — top-up or super top-up plans, critical illness add-ons',
            '<strong>Review life cover</strong> — is Saral Jeevan Bima enough? Add more if you have large loans',
            '<strong>APY</strong> — you can still join till 40; contribution is higher but pension is guaranteed'
        ]
    ],
    [
        'id' => 'toolkit-51-60',
        'badge' => '👴 Age 51–60+',
        'badge_class' => 'retirement',
        'title' => 'Protecting What You\'Ve Built',
        'subtitle' => 'Retirement Stage',
        'description' => 'Senior citizen medical planning, automatic 70+ health benefits, and claim preparedness.',
        'image' => 'https://images.unsplash.com/photo-1447452001602-7090c7ab2db3?auto=format&fit=crop&w=600&q=80',
        'items' => [
            '<strong>PMSBY</strong> — continues till 70 — keep renewing every June',
            '<strong>Senior citizen health plans</strong> — critical; check if PMJAY eligibility applies',
            '<strong>PMJAY</strong> — all citizens 70+ automatically get ₹5 lakh health cover',
            '<strong>Saral Jeevan Bima</strong> — entry till 65; protect family if you still have dependents',
            '<strong>PM RAHAT + Hit & Run</strong> — ensure your family knows how to claim if needed'
        ]
    ]
];
?>

<section class="toolkit-container" id="age-wise-protection-toolkit">
    
    <!-- Section Intro Header -->
    <div class="section-intro-header">
        <h2>Your Age-Wise Protection Toolkit</h2>
        <p>Different life stages carry different risks. Stack your protection intelligently.</p>
    </div>

    <!-- Toolkit Container Wrapper -->
    <div class="toolkit-wrapper">
        
        <!-- Visual Cards Grid -->
        <div class="toolkit-cards-grid">
            <?php foreach ($toolkit_stages as $index => $stage) : ?>
                <div class="toolkit-card <?php echo $index === 0 ? 'active' : ''; ?>" data-target="<?php echo esc_attr($stage['id']); ?>">
                    <div class="card-img-wrapper">
                        <img src="<?php echo esc_url($stage['image']); ?>" alt="<?php echo esc_attr($stage['title']); ?>">
                        <div class="card-badge"><?php echo esc_html($stage['badge']); ?></div>
                    </div>
                    <div class="card-body">
                        <div>
                            <h3><?php echo esc_html($stage['title']); ?></h3>
                            <p><?php echo esc_html($stage['description']); ?></p>
                        </div>
                        <button type="button" class="toolkit-toggle-btn">View Details &rarr;</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Detailed Content Display Panes -->
        <div class="toolkit-display-pane-container">
            <?php foreach ($toolkit_stages as $index => $stage) : ?>
                <div id="<?php echo esc_attr($stage['id']); ?>" class="toolkit-pane <?php echo $index === 0 ? 'active' : ''; ?>">
                    <div class="info-card">
                        <div class="pane-header-flex">
                            <h3><?php echo esc_html($stage['badge']); ?> — <?php echo esc_html($stage['title']); ?></h3>
                            <span class="pane-badge"><?php echo esc_html($stage['subtitle']); ?></span>
                        </div>
                        <ul>
                            <?php foreach ($stage['items'] as $item) : ?>
                                <li><?php echo wp_kses_post($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- PROTECTING YOUR FAMILY STORY MODULE -->
        <div class="family-story-card">
            <div class="family-story-header">
                <span class="family-story-tag">Real-World Integration</span>
                <h3>Protecting Your Family, Not Just Yourself</h3>
            </div>
            
            <div class="story-box-content">
                <h4>📖 The Sharma Family — 6 Schemes, One Family, Complete Protection</h4>
                
                <p>Meet the Sharmas of Lucknow: Ramesh (45, small shop owner), Sunita (42, homemaker), son Rahul (22, working), daughter Pooja (19, just started a job), and Amma (72, Ramesh's mother).</p>
                
                <p>Ramesh holds <strong>PMJJBY</strong> (₹2 lakh sum assured, annual premium ₹436) + <strong>PMSBY</strong> (₹2 lakh accidental death benefit, ₹20/yr) + a cashless health family floater policy (₹5 lakh sum insured, ₹8,000/yr). His nominee for both Jan Suraksha schemes: Sunita.</p>
                
                <p>Pooja enrolled in <strong>PMSBY</strong> (₹20) and <strong>APY</strong> (₹126/month) on her first salary — ₹3,000/month pension guaranteed from age 60. Rahul has PMSBY on his Jan Dhan account.</p>
                
                <p>Amma qualified for <strong>PMJAY</strong> automatically at 70+ — her recent knee replacement surgery (at an empanelled hospital, ₹1.8 lakh procedure) cost the family ₹0 — covered as cashless treatment under AB-PMJAY.</p>
                
                <p>If Ramesh dies, Sunita gets ₹2 lakh from PMJJBY as death benefit. If he has a fatal road accident, ₹2 lakh from PMSBY as accidental death benefit. If any of them are in a road accident, <strong>PM RAHAT</strong> covers ₹1.5 lakh cashless for 7 days.</p>
                
                <p>If the vehicle that hits them flees, the <strong>Hit & Run scheme</strong> provides ₹2 lakh (death) or ₹50,000 (grievous hurt) from the Motor Vehicle Accident Fund.</p>
                
                <div class="family-highlight-footer">
                    <p><strong>Total annual spend across this entire family for all government schemes: under ₹10,000.</strong></p>
                    <p class="tagline">This is what comprehensive financial security looks like for an Indian family in 2026.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Lightweight Tab-Switching Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll('.toolkit-card');
    const panes = document.querySelectorAll('.toolkit-pane');

    cards.forEach(card => {
        card.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');

            cards.forEach(c => c.classList.remove('active'));
            panes.forEach(p => p.classList.remove('active'));

            this.classList.add('active');
            const targetPane = document.getElementById(targetId);
            if (targetPane) {
                targetPane.classList.add('active');
            }
        });
    });
});
</script>