<?php
/**
 * SECTION 01 — WHY HEALTH INSURANCE & IMPACT SHOWCASE
 * Module: Health Insurance Showcase
 */

$theme_uri = get_template_directory_uri();

// --- REASONS DATA (Why Health Insurance Matters) ---
$reasons = [
    [
        'icon'        => '🏥',
        'badge'       => 'Reason 01',
        'title'       => 'Rising Medical Costs',
        'description' => 'Healthcare inflation in India runs at 14–15% annually — double the general CPI. A hospitalisation that costs ₹3 lakh today could cost ₹10 lakh in ten years.',
    ],
    [
        'icon'        => '💰',
        'badge'       => 'Reason 02',
        'title'       => 'Protect Your Savings',
        'description' => 'A single major illness can wipe out years of savings. Insurance is your financial firewall — so a health crisis does not become a financial one.',
    ],
    [
        'icon'        => '🏨',
        'badge'       => 'Reason 03',
        'title'       => 'Access Quality Care',
        'description' => 'Cashless cover at network hospitals lets you choose better facilities without worrying about bills at the counter.',
    ],
    [
        'icon'        => '🧘',
        'badge'       => 'Reason 04',
        'title'       => 'Peace of Mind',
        'description' => 'Knowing you are covered lets you focus on recovery, not finances, during an already stressful time.',
    ],
    [
        'icon'        => '📋',
        'badge'       => 'Reason 05',
        'title'       => 'Waiting Periods Apply',
        'description' => 'Most policies have 2–4 year waiting periods for pre-existing diseases. Starting early means being fully covered when it matters most.',
    ],
    [
        'icon'        => '💸',
        'badge'       => 'Reason 06',
        'title'       => 'Tax Benefit — Section 80D',
        'description' => 'Premiums qualify for deductions up to ₹25,000 (₹50,000–₹75,000 if covering senior citizen parents).',
    ],
    [
        'icon'        => '🔄',
        'badge'       => 'Reason 07',
        'title'       => 'Employer Cover Is Not Enough',
        'description' => 'Group cover ends with your job, carries low sum insured, and rarely covers your family post-retirement.',
    ],
];

// --- PERSONAS DATA (Impact of Having vs Not Having Health Insurance) ---
$personas = [
    'cardiac' => [
        'id'             => 'cardiac',
        'tab_title'      => 'Cardiac Emergency',
        'tag'            => 'Primary Earner',
        'name'           => 'Rajesh',
        'location_age'   => 'Age 42, Family of 4',
        'coverage_badge' => '₹6.5L',
        'image_url'      => $theme_uri . '/assets/images/typesofinsurance/healthinsurance/understand/cardiac-1.png',
        'scenario_title' => 'SCENARIO',
        'scenario_text'  => 'Primary earner (₹80,000/month), age 42, family with two children, home loan outstanding. Experiences a sudden cardiac event requiring hospitalisation.',
        'highlight_box'  => 'Cardiac emergency — estimated medical and treatment cost <strong>₹6,50,000</strong>',
        'items'          => [
            [
                'label'         => 'Hospitalisation bill',
                'with_cover'    => 'Cashless hospitalisation at network hospital',
                'without_cover' => '₹6.5 lakh bill paid from retirement savings',
            ],
            [
                'label'         => 'Emergency savings',
                'with_cover'    => 'Savings remain completely intact',
                'without_cover' => 'Emergency fund wiped out immediately',
            ],
            [
                'label'         => 'Shortfall handling',
                'with_cover'    => 'Pre-authorisation in a few hours — no upfront payment',
                'without_cover' => 'Borrowed ₹50,000 from family to cover shortfall',
            ],
            [
                'label'         => 'Children\'s education',
                'with_cover'    => 'Children\'s education fund untouched',
                'without_cover' => 'Education fund for children reduced',
            ],
            [
                'label'         => 'Retirement corpus',
                'with_cover'    => 'Retirement corpus fully protected',
                'without_cover' => 'Retirement savings disrupted',
            ],
            [
                'label'         => 'Spouse coverage',
                'with_cover'    => 'Spouse independently covered under family floater',
                'without_cover' => 'Spouse left with no independent coverage',
            ],
            [
                'label'         => 'Day-to-day dependency',
                'with_cover'    => 'No dependency on children — financial independence maintained',
                'without_cover' => 'Dependent on children for day-to-day expenses',
            ],
            [
                'label'         => 'Post-retirement plans',
                'with_cover'    => 'Post-retirement plans remain on track',
                'without_cover' => 'Post-retirement income plan derailed',
            ],
        ],
    ],
    'dengue' => [
        'id'             => 'dengue',
        'tab_title'      => 'Young Professional (Dengue)',
        'tag'            => 'Call Centre',
        'name'           => 'Arjun',
        'location_age'   => 'Age 26, Working Professional',
        'coverage_badge' => '₹80K',
        'image_url'      => $theme_uri . '/assets/images/typesofinsurance/healthinsurance/understand/dengue-1.png',
        'scenario_title' => 'SCENARIO',
        'scenario_text'  => 'Arjun, 26, working in a call centre, contracts dengue during monsoons and requires hospitalisation.',
        'highlight_box'  => 'Dengue treatment — hospitalisation cost <strong>₹80,000</strong>',
        'items'          => [
            [
                'label'         => 'Medical bill payment',
                'with_cover'    => 'Insurer covers majority of medical expenses',
                'without_cover' => '₹80,000 bill paid from personal savings',
            ],
            [
                'label'         => 'Emergency fund safety',
                'with_cover'    => 'Savings remain intact',
                'without_cover' => 'Emergency fund wiped out',
            ],
            [
                'label'         => 'Mental focus',
                'with_cover'    => 'Focus stays on recovery, not bill payment',
                'without_cover' => 'Stress about rent, EMIs, lifestyle expenses',
            ],
            [
                'label'         => 'Investment continuity',
                'with_cover'    => 'Savings continue to grow uninterrupted',
                'without_cover' => 'Investment goals delayed — SIPs paused',
            ],
            [
                'label'         => 'Financial anxiety',
                'with_cover'    => 'Peace of mind and financial stability maintained',
                'without_cover' => 'Financial anxiety persists for months',
            ],
        ],
    ],
];
?>

<section class="hi-wrapper" data-cover-state="with-cover" id="why-it">
    <div class="hi-section-s7">
        <div class="hi-container">

            <!-- ======================================================= -->
            <!-- PART 1: WHY YOU NEED HEALTH INSURANCE (CAROUSEL)       -->
            <!-- ======================================================= -->
            <header class="hi-header">
                <!-- <div class="hi-subtag">Why Health Insurance</div> -->
                <h2 class="hi-title">Why You Need Health Insurance Today</h2>
                <p class="hi-desc">
                    The best time to buy health insurance is when you are young and healthy. The second-best time is right now.
                </p>
            </header>

            <div class="hi-carousel-wrapper">
                <button type="button" class="hi-nav-btn hi-nav-btn--prev" id="hi-prev-btn" aria-label="Previous Slide">
                    <svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </button>

                <div class="hi-carousel-viewport" id="hi-carousel-viewport">
                    <div class="hi-carousel-grid">
                        <?php foreach ($reasons as $reason): ?>
                            <div class="hi-reason-card">
                                <div class="hi-card-icon"><?php echo $reason['icon']; ?></div>
                                <span class="hi-card-badge"><?php echo htmlspecialchars($reason['badge']); ?></span>
                                <h3 class="hi-card-title"><?php echo htmlspecialchars($reason['title']); ?></h3>
                                <p class="hi-card-text"><?php echo htmlspecialchars($reason['description']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <button type="button" class="hi-nav-btn hi-nav-btn--next" id="hi-next-btn" aria-label="Next Slide">
                    <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </button>
            </div>

            <!-- ======================================================= -->
            <!-- PART 2: THE IMPACT OF HAVING VS NOT HAVING COVER      -->
            <!-- ======================================================= -->
            <div class="hi-impact-section-divider">
                <header class="hi-header">
                    <!-- <div class="hi-subtag">Impact Analysis</div> -->
                    <h2 class="hi-title">The Impact of Having vs. Not Having Health Insurance</h2>
                    <p class="hi-desc">
                        The financial consequences of a serious illness ripple through a family for years. Here is what that looks like, with and without health insurance.
                    </p>
                </header>

                <!-- TOOLBAR: PERSONA TABS + COVER SWITCH TOGGLE -->
                <div class="hi-toolbar">
                    <nav class="hi-tabs" role="tablist" aria-label="Select Scenario Persona">
                        <?php foreach ($personas as $key => $p): ?>
                            <button 
                                type="button" 
                                role="tab"
                                class="hi-tab-btn <?php echo $key === 'cardiac' ? 'is-active' : ''; ?>"
                                data-target="<?php echo htmlspecialchars($p['id']); ?>"
                                aria-selected="<?php echo $key === 'cardiac' ? 'true' : 'false'; ?>">
                                <?php echo htmlspecialchars($p['tab_title']); ?>
                            </button>
                        <?php endforeach; ?>
                    </nav>

                    <div class="hi-toggle-switch" role="group" aria-label="Cover status switcher">
                        <button type="button" class="hi-toggle-btn is-active" data-state="with-cover" aria-pressed="true">
                            <span class="hi-dot hi-dot--with"></span> WITH COVER
                        </button>
                        <button type="button" class="hi-toggle-btn" data-state="without-cover" aria-pressed="false">
                            <span class="hi-dot hi-dot--without"></span> WITHOUT COVER
                        </button>
                    </div>
                </div>

                <!-- PANES -->
                <div class="hi-panes">
                    <?php foreach ($personas as $key => $p): ?>
                        <div class="hi-pane <?php echo $key === 'cardiac' ? 'is-active' : ''; ?>" id="hi-pane-<?php echo htmlspecialchars($p['id']); ?>">
                            
                            <!-- Left: Emphasized Profile & Scenario Card -->
                            <div class="hi-profile-card">
                                <div class="hi-profile-media">
                                    <?php if (!empty($p['image_url'])): ?>
                                        <img src="<?php echo esc_url($p['image_url']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>" class="hi-profile-img">
                                    <?php else: ?>
                                        <div class="hi-profile-placeholder"></div>
                                    <?php endif; ?>
                                    <span class="hi-badge-tag"><?php echo htmlspecialchars($p['tag']); ?></span>
                                    
                                    <div class="hi-profile-overlay">
                                        <div class="hi-profile-meta">
                                            <h3 class="hi-profile-name"><?php echo htmlspecialchars($p['name']); ?></h3>
                                            <p class="hi-profile-location"><?php echo htmlspecialchars($p['location_age']); ?></p>
                                        </div>
                                        <span class="hi-badge-amt"><?php echo htmlspecialchars($p['coverage_badge']); ?></span>
                                    </div>
                                </div>

                                <div class="hi-profile-scenario">
                                    <span class="hi-scenario-tag"><?php echo htmlspecialchars($p['scenario_title']); ?></span>
                                    <p class="hi-scenario-desc"><?php echo htmlspecialchars($p['scenario_text']); ?></p>
                                </div>
                            </div>

                            <!-- Right: Consolidated Single Box Breakdown Card -->
                            <div class="hi-right-column">
                                <div class="hi-loss-banner">
                                    <?php echo $p['highlight_box']; ?>
                                </div>

                                <div class="hi-breakdown-card">
                                    <ul class="hi-breakdown-list">
                                        <?php foreach ($p['items'] as $item): ?>
                                            <li class="hi-breakdown-row">
                                                <div class="hi-breakdown-label">
                                                    <?php echo htmlspecialchars($item['label']); ?>
                                                </div>
                                                
                                                <div class="hi-outcome hi-outcome--with">
                                                    <svg class="hi-icon hi-icon--check" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                    </svg>
                                                    <span><?php echo $item['with_cover']; ?></span>
                                                </div>

                                                <div class="hi-outcome hi-outcome--without">
                                                    <svg class="hi-icon hi-icon--cross" viewBox="0 0 20 20" fill="currentColor">
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
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const wrapper = document.querySelector('.hi-wrapper');
    if (!wrapper) return;

    // 1. Carousel Scroll Logic
    const viewport = document.getElementById("hi-carousel-viewport");
    const prevBtn = document.getElementById("hi-prev-btn");
    const nextBtn = document.getElementById("hi-next-btn");

    if (viewport && prevBtn && nextBtn) {
        const scrollAmount = 344;
        prevBtn.addEventListener("click", () => {
            viewport.scrollBy({ left: -scrollAmount, behavior: "smooth" });
        });
        nextBtn.addEventListener("click", () => {
            viewport.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    }

    // 2. Cover State Switcher Logic (With Cover vs Without Cover)
    const toggles = wrapper.querySelectorAll('.hi-toggle-btn');
    toggles.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var state = btn.getAttribute('data-state');
            wrapper.setAttribute('data-cover-state', state);

            toggles.forEach(function (b) {
                b.classList.remove('is-active');
                b.setAttribute('aria-pressed', String(b === btn));
            });
            btn.classList.add('is-active');
        });
    });

    // 3. Persona Tabs Switching Logic (Cardiac Emergency vs Dengue)
    const tabs = wrapper.querySelectorAll('.hi-tab-btn');
    const panes = wrapper.querySelectorAll('.hi-pane');

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
                if (p.id === 'hi-pane-' + targetId) {
                    p.classList.add('is-active');
                } else {
                    p.classList.remove('is-active');
                }
            });
        });
    });
});
</script>