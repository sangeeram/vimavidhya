<?php
/**
 * SECTION — PERSONAL ACCIDENT INSURANCE IMPACT SHOWCASE
 * Module: PA Insurance Impact Comparison (With vs. Without Cover)
 */

$pa_personas = [
    'earner' => [
        'id'             => 'earner',
        'tab_title'      => 'Primary Earner',
        'tag'            => 'Primary Earner',
        'name'           => 'Rajesh',
        'location_age'   => 'Mumbai, age 42',
        'coverage_badge' => '₹1 Cr',
        'image_url'      => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=700&q=80',
        'scenario_title' => 'SCENARIO — PERMANENT TOTAL DISABILITY (PTD)',
        'scenario_text'  => 'Rajesh, 42, is a primary earner earning ₹80,000/month. He meets with a severe accident leading to Permanent Total Disability, permanently halting his income.',
        'highlight_box'  => 'Permanent Total Disability (PTD) — primary income of <strong>₹80,000/month</strong> abruptly stops',
        'items'          => [
            [
                'label'         => 'Monthly income replacement',
                'with_cover'    => 'PA pays 100% of CSI as lump sum — income replacement fund created',
                'without_cover' => 'Income stops immediately — zero replacement',
            ],
            [
                'label'         => 'Home loan EMI & debt',
                'with_cover'    => 'EMI Protector add-on covers outstanding loan repayments',
                'without_cover' => 'Home loan EMI defaults — property at risk',
            ],
            [
                'label'         => 'Children\'s education',
                'with_cover'    => 'Education Grant add-on funds children\'s schooling continuity',
                'without_cover' => 'Children\'s education disrupted — fees unpaid',
            ],
            [
                'label'         => 'Family & parent support',
                'with_cover'    => 'Lump sum large enough to provide multi-year family support',
                'without_cover' => 'Aging parents lose monthly support',
            ],
            [
                'label'         => 'Spouse career stability',
                'with_cover'    => 'Spouse has time to plan — not forced into crisis decisions',
                'without_cover' => 'Spouse forced into emergency employment',
            ],
            [
                'label'         => 'Emergency savings & reserves',
                'with_cover'    => 'CSI of ₹1 crore provides 10+ years of income equivalent',
                'without_cover' => 'Savings wiped out within 18–24 months',
            ],
        ],
    ],
    'freelancer' => [
        'id'             => 'freelancer',
        'tab_title'      => 'Freelancer',
        'tag'            => 'Freelancer',
        'name'           => 'Ananya',
        'location_age'   => 'Bengaluru, age 31',
        'coverage_badge' => '₹50L',
        'image_url'      => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=700&q=80',
        'scenario_title' => 'SCENARIO — TEMPORARY TOTAL DISABILITY (TTD)',
        'scenario_text'  => 'Ananya, 31, is a freelance graphic designer earning ₹40,000/month. She breaks both wrists in a fall and is completely out of work for 11 weeks.',
        'highlight_box'  => 'Temporary Total Disability (TTD) — <strong>11 weeks</strong> out of work with zero sick pay',
        'items'          => [
            [
                'label'         => 'Weekly income support',
                'with_cover'    => 'TTD weekly benefit: ₹2,000/week × 11 = ₹22,000 paid',
                'without_cover' => 'Zero income for 11 weeks — no sick pay',
            ],
            [
                'label'         => 'Rent, utilities & groceries',
                'with_cover'    => 'Essential expenses covered without touching savings',
                'without_cover' => 'Rent, utilities, groceries — all drained from personal savings',
            ],
            [
                'label'         => 'Physiotherapy & medical care',
                'with_cover'    => 'Fracture Care lump sum covers physiotherapy costs',
                'without_cover' => 'Physiotherapy costs must be paid out of pocket',
            ],
            [
                'label'         => 'Avoiding emergency debt',
                'with_cover'    => 'No loan needed — TTD covers the gap',
                'without_cover' => 'Emergency loan taken — high interest cost adds up',
            ],
            [
                'label'         => 'Client continuity & stability',
                'with_cover'    => 'Financial stability maintained — client communication from recovery possible',
                'without_cover' => 'Client relationships disrupted, future income at risk',
            ],
        ],
    ],
];
?>

<section class="pi-wrapper">
    <div class="pi-section-s7 pa-impact-showcase" data-cover-state="with-cover">
        <div class="pi-container">

            <header class="pi-header">
                <h2 class="policy-impact-title">The impact of having vs not having PA Insurance</h2>
<br>
                <h3 class="pi-desc">The financial consequences of an accident ripple through a family for years. Here is what that looks like, with and without PA Insurance</h3>
            </header>

            <!-- TOOLBAR: PERSONA TABS + COVER SWITCH TOGGLE -->
            <div class="pi-toolbar">
                <nav class="pi-tabs" role="tablist" aria-label="Select PA Persona">
                    <?php foreach ($pa_personas as $key => $p): ?>
                        <button 
                            type="button" 
                            role="tab"
                            class="pi-tab-btn <?php echo $key === 'earner' ? 'is-active' : ''; ?>"
                            data-target="<?php echo htmlspecialchars($p['id']); ?>"
                            aria-selected="<?php echo $key === 'earner' ? 'true' : 'false'; ?>">
                            <?php echo htmlspecialchars($p['tab_title']); ?>
                        </button>
                    <?php endforeach; ?>
                </nav>

                <div class="pi-toggle-switch" role="group" aria-label="Cover status switcher">
                    <button type="button" class="pi-toggle-btn is-active" data-state="with-cover">
                        <span class="pi-dot pi-dot--with"></span> WITH COVER
                    </button>
                    <button type="button" class="pi-toggle-btn" data-state="without-cover">
                        <span class="pi-dot pi-dot--without"></span> WITHOUT COVER
                    </button>
                </div>
            </div>

            <!-- PANES -->
            <div class="pi-panes">
                <?php foreach ($pa_personas as $key => $p): ?>
                    <div class="pi-pane <?php echo $key === 'earner' ? 'is-active' : ''; ?>" id="pi-pane-<?php echo htmlspecialchars($p['id']); ?>">
                        
                        <!-- Left: Emphasized Profile & Scenario Card -->
                        <div class="pi-profile-card pi-profile-card--emphasized">
                            <div class="pi-profile-media">
                                <?php if (!empty($p['image_url'])): ?>
                                    <img src="<?php echo htmlspecialchars($p['image_url']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>" class="pi-profile-img">
                                <?php else: ?>
                                    <div class="pi-profile-placeholder"></div>
                                <?php endif; ?>
                                <span class="pi-badge-tag"><?php echo htmlspecialchars($p['tag']); ?></span>
                                
                                <div class="pi-profile-overlay">
                                    <div class="pi-profile-meta">
                                        <h3 class="pi-profile-name"><?php echo htmlspecialchars($p['name']); ?></h3>
                                        <p class="pi-profile-location"><?php echo htmlspecialchars($p['location_age']); ?></p>
                                    </div>
                                    <span class="pi-badge-amt"><?php echo htmlspecialchars($p['coverage_badge']); ?></span>
                                </div>
                            </div>

                            <div class="pi-profile-scenario">
                                <span class="pi-scenario-tag"><?php echo htmlspecialchars($p['scenario_title']); ?></span>
                                <p class="pi-scenario-desc"><?php echo htmlspecialchars($p['scenario_text']); ?></p>
                            </div>
                        </div>

                        <!-- Right: Consolidated Single Box Breakdown Card -->
                        <div class="pi-right-column">
                            <div class="pi-loss-banner">
                                <?php echo $p['highlight_box']; ?>
                            </div>

                            <div class="pi-breakdown-card pi-breakdown-card--unified">
                                <ul class="pi-breakdown-list">
                                    <?php foreach ($p['items'] as $item): ?>
                                        <li class="pi-breakdown-row">
                                            <div class="pi-breakdown-label">
                                                <?php echo htmlspecialchars($item['label']); ?>
                                            </div>
                                            
                                            <div class="pi-outcome pi-outcome--with">
                                                <svg class="pi-icon pi-icon--check" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span><?php echo $item['with_cover']; ?></span>
                                            </div>

                                            <div class="pi-outcome pi-outcome--without">
                                                <svg class="pi-icon pi-icon--cross" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/>
                                                </svg>
                                                <span><?php echo $item['without_cover']; ?></span>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

            <!-- KEY TAKEAWAY CARD -->
            <div class="pi-takeaway-card">
                <div class="pi-takeaway-icon-box">
                    <svg class="pi-takeaway-icon" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                </div>
                <div class="pi-takeaway-content">
                    <p class="pi-takeaway-lead">
                        <strong>Key Takeaway:</strong> There is no perfect age to buy PA Insurance, but there is a perfect time — and that is before you need it.
                    </p>
                    <p class="pi-takeaway-body">
                        The premiums are lowest when you are young and healthy. The need is highest when an accident happens. These two moments must never be the same.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    var section = document.querySelector('.pa-impact-showcase');
    if (!section) return;

    var toggles = section.querySelectorAll('.pi-toggle-btn');
    toggles.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var state = btn.getAttribute('data-state');
            section.setAttribute('data-cover-state', state);

            toggles.forEach(function (b) { b.classList.remove('is-active'); });
            btn.classList.add('is-active');
        });
    });

    var tabs = section.querySelectorAll('.pi-tab-btn');
    var panes = section.querySelectorAll('.pi-pane');

    tabs.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var targetId = btn.getAttribute('data-target');

            tabs.forEach(function (b) {
                b.classList.remove('is-active');
                b.setAttribute('aria-selected', 'false');
            });
            btn.classList.add('is-active');
            btn.setAttribute('aria-selected', 'true');

            panes.forEach(function (p) {
                if (p.id === 'pi-pane-' + targetId) {
                    p.classList.add('is-active');
                } else {
                    p.classList.remove('is-active');
                }
            });
        });
    });
});
</script>