<?
/**
 * SECTION 01 — WHY PROPERTY INSURANCE?
 * Module: Property Insurance Showcase
 */

$personas = [
    'homeowner' => [
        'id'             => 'homeowner',
        'tab_title'      => 'Homeowner ',
        'tag'            => 'Homeowner',
        'name'           => 'Vikram',
        'location_age'   => 'Visakhapatnam, age 47',
        'coverage_badge' => '₹8L',
        'image_url'      => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=700&q=80',
        'scenario_title' => 'SCENARIO',
        'scenario_text'  => 'Vikram, 47, owns a house in Visakhapatnam. A severe cyclone partially tears off the roof, brings down the compound wall, rain water enters and destroys furniture, appliances, and his daughter\'s laptop. He also has to vacate the house for two months while repairs are underway.',
        'highlight_box'  => 'Cyclone damage — estimated repair and replacement cost <strong>₹8 lakhs</strong>',
        'items'          => [
            [
                'label'         => 'Structural repairs — roof, walls',
                'with_cover'    => 'Building cover pays for structural repairs up to sum insured',
                'without_cover' => 'Entire rebuilding cost falls on Vikram — <strong>₹5.5L</strong> for structure',
            ],
            [
                'label'         => 'Compound wall — ₹80,000',
                'with_cover'    => 'Compound wall covered under building policy',
                'without_cover' => 'Compound wall <strong>₹80,000</strong> — from savings or loan',
            ],
            [
                'label'         => 'Furniture, appliances, laptop — ₹1.7L',
                'with_cover'    => 'Contents cover replaces furniture, appliances, electronics',
                'without_cover' => 'Furniture, appliances, laptop — <strong>₹1.7L</strong> paid from pocket',
            ],
            [
                'label'         => 'Alternate accommodation — ₹36,000',
                'with_cover'    => 'Loss of Rent add-on covers alternate accommodation costs',
                'without_cover' => 'Two months\' alternate accommodation — <strong>₹36,000</strong> from savings',
            ],
            [
                'label'         => 'Home loan EMI',
                'with_cover'    => 'EMI continues but other costs are absorbed by insurer',
                'without_cover' => 'Home loan EMI continues — no relief during repairs',
            ],
            [
                'label'         => 'Retirement savings',
                'with_cover'    => 'Savings remain intact — retirement plans undisturbed',
                'without_cover' => 'Savings wiped out; retirement plans disrupted',
            ],
        ],
    ],
    'tenant' => [
        'id'             => 'tenant',
        'tab_title'      => 'Tenant',
        'tag'            => 'Tenant',
        'name'           => 'Shiraj',
        'location_age'   => 'Bengaluru, age 33',
        'coverage_badge' => '₹3L',
        'image_url'      => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=700&q=80',
        'scenario_title' => 'SCENARIO',
        'scenario_text'  => 'Shiraj, 33, lives in a rented home in Bengaluru. A kitchen fire caused by an electrical short circuit destroys appliances and furniture. Estimated loss: ₹3,00,000.',
        'highlight_box'  => 'Kitchen fire — contents loss <strong>₹3,00,000</strong>',
        'items'          => [
            [
                'label'         => 'Kitchen fire contents loss — ₹3,00,000',
                'with_cover'    => 'Insurer absorbs the financial blow — claim filed, loss covered',
                'without_cover' => '<strong>₹3,00,000</strong> paid directly from accumulated personal savings',
            ],
            [
                'label'         => 'Living expenses & EMIs',
                'with_cover'    => 'Emergency fund stays intact — daily expenses uninterrupted',
                'without_cover' => 'Rent, EMIs, school fees compete against an empty fund',
            ],
            [
                'label'         => 'Restoring lost contents',
                'with_cover'    => 'No loan needed — contents cover bridges the gap',
                'without_cover' => 'Loan taken to restore lost contents — interest piles up',
            ],
            [
                'label'         => 'Financial goals & SIPs',
                'with_cover'    => 'SIPs, FDs, and financial goals remain on track',
                'without_cover' => 'Savings plans pushed back by 18–24 months',
            ],
            [
                'label'         => 'Mental peace & stability',
                'with_cover'    => 'Peace of mind and financial stability restored',
                'without_cover' => 'Persistent financial anxiety long after the fire is out',
            ],
        ],
    ],
    'business' => [
        'id'             => 'business',
        'tab_title'      => 'Small Business Owner ',
        'tag'            => 'Business Owner',
        'name'           => 'Murugan',
        'location_age'   => 'Coimbatore, age 44',
        'coverage_badge' => '₹4.9L',
        'image_url'      => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=700&q=80',
        'scenario_title' => 'SCENARIO',
        'scenario_text'  => 'Murugan, 44, runs a grocery store in Coimbatore from rented premises. A fire destroys ₹3.5L of stock, refrigeration unit (₹85k), billing computer/printer (₹45k), and shelving/counter (₹60k). Total loss: ₹4.9L.',
        'highlight_box'  => 'Shop fire — stock, equipment and fixture loss <strong>₹4.9 lakh</strong>',
        'items'          => [
            [
                'label'         => 'Commercial stock — ₹3.5L',
                'with_cover'    => 'Stock loss of <strong>₹3.5L</strong> covered under Shopkeeper\'s Package Policy',
                'without_cover' => '<strong>₹3.5L</strong> worth of stock lost — no income during rebuilding season',
            ],
            [
                'label'         => 'Refrigeration unit — ₹85,000',
                'with_cover'    => 'Equipment and fixtures covered under business contents',
                'without_cover' => 'Refrigeration unit <strong>₹85,000</strong> replaced from personal savings',
            ],
            [
                'label'         => 'Computer, printer, shelving — ₹1.05L',
                'with_cover'    => 'Loss of profit / business interruption add-on covers 3-week income gap',
                'without_cover' => 'Computer, printer, shelving — <strong>₹1.05L</strong> from family funds',
            ],
            [
                'label'         => 'Store downtime & revenue',
                'with_cover'    => 'Store reopens within weeks; customer base retained',
                'without_cover' => 'Three weeks of zero revenue while store is shut',
            ],
            [
                'label'         => 'Restocking & festival orders',
                'with_cover'    => 'Festival season restocking funded by claim payout',
                'without_cover' => 'Loan taken to restock — interest cost added to the loss',
            ],
            [
                'label'         => 'Household & family security',
                'with_cover'    => 'Family finances untouched — household stability maintained',
                'without_cover' => 'Family\'s school fees and household costs disrupted',
            ],
        ],
    ],
];
?>

<section class="pi-wrapper">
    <div class="pi-section-s7" data-cover-state="with-cover">
        <div class="pi-container">

            <header class="pi-header">
                <h3 class="pi-desc">The financial consequences of property loss ripple through a family for years. Here is what that looks like, with and without property insurance.</h3>
            </header>

            <!-- TOOLBAR: PERSONA TABS + COVER SWITCH TOGGLE -->
            <div class="pi-toolbar">
                <nav class="pi-tabs" role="tablist" aria-label="Select Persona">
                    <?php foreach ($personas as $key => $p): ?>
                        <button 
                            type="button" 
                            role="tab"
                            class="pi-tab-btn <?php echo $key === 'homeowner' ? 'is-active' : ''; ?>"
                            data-target="<?php echo htmlspecialchars($p['id']); ?>"
                            aria-selected="<?php echo $key === 'homeowner' ? 'true' : 'false'; ?>">
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
                <?php foreach ($personas as $key => $p): ?>
                    <div class="pi-pane <?php echo $key === 'homeowner' ? 'is-active' : ''; ?>" id="pi-pane-<?php echo htmlspecialchars($p['id']); ?>">
                        
                        <!-- Left: Emphasized Profile & Scenario Card (Approx 45%) -->
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

                        <!-- Right: Consolidated Single Box Breakdown Card (Approx 55%) -->
                        <div class="pi-right-column">
                            <div class="pi-loss-banner">
                                <?php echo $p['highlight_box']; ?>
                            </div>

                            <!-- Single Unified Container Box -->
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
                        <path d="M16 9V4h1c.55 0 1-.45 1-1s-.45-1-1-1H7c-.55 0-1 .45-1 1s.45 1 1 1h1v5c0 1.66-1.34 3-3 3v2h5.97v7l1 1 1-1v-7H19v-2c-1.66 0-3-1.34-3-3z"/>
                    </svg>
                </div>
                <div class="pi-takeaway-content">
                    <p class="pi-takeaway-lead">
                        <strong>Key Takeaway:</strong> Property insurance fixes your home and the life inside it. For small business owners, it also fixes the livelihood inside the premises.
                    </p>
                    <p class="pi-takeaway-body">
                        Without cover, every loss is your loss alone — and for a kirana or small shop, that means the family's income stops the day the damage occurs.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* --- Compact Layout & 50/50 Grid Adjustments --- */
.pi-section-s7 .pi-pane {
    display: none;
    grid-template-columns: 42% 55%;
    gap: 24px;
    align-items: start;
}
.pi-section-s7 .pi-pane.is-active {
    display: grid;
}

/* Emphasized Image & Scenario Card */
.pi-profile-card--emphasized {
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.06);
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
}
.pi-profile-media {
    position: relative;
    height: 220px;
}
.pi-profile-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.pi-profile-scenario {
    padding: 16px;
}

/* Consolidated Single Box Breakdown Card */
.pi-breakdown-card--unified {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
    overflow: hidden;
    padding: 4px 16px;
}
.pi-breakdown-list {
    list-style: none;
    margin: 0;
    padding: 0;
}
.pi-breakdown-row {
    padding: 10px 0;
    border-bottom: 1px solid #f1f5f9;
}
.pi-breakdown-row:last-child {
    border-bottom: none;
}
.pi-loss-banner {
    margin-bottom: 12px;
    padding: 10px 14px;
    font-size: 0.95rem;
    border-radius: 8px;
}

/* Cover State Toggling Logic */
.pi-section-s7[data-cover-state="with-cover"] .pi-outcome--without,
.pi-section-s7[data-cover-state="without-cover"] .pi-outcome--with {
    display: none;
}
.pi-section-s7[data-cover-state="with-cover"] .pi-outcome--with,
.pi-section-s7[data-cover-state="without-cover"] .pi-outcome--without {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 0.88rem;
    margin-top: 4px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var section = document.querySelector('.pi-section-s7');
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