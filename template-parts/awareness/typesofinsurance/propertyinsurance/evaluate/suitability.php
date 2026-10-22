<?php
/**
 * Template Part: Suitability by Need and Life Stage
 * Theme: Vima Vidya Custom Theme (Light / White Card)
 */

$life_stages = [
    [
        'id'          => 'stage-1',
        'tab_icon'    => '🚀',
        'tab_label'   => 'Young Professional',
        'badge'       => '01 / First Rented Home',
        'title'       => 'Young Professional (Age 22–30)',
        'subtitle'    => 'Covers tenant contents, portable equipment, and personal liability while renting your first space.',
        'image_url'   => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Young Professional working on laptop',
        'priorities'  => [
            'Take a tenant\'s contents policy immediately upon moving in',
            'List all your belongings — laptop, phone, camera, appliances, clothing',
            'Add Portable Equipment cover — your devices travel with you',
            'Add EEI if you own electronics worth over ₹1 lakh',
            'Update your policy within 30 days of any major new purchase',
        ],
        'costs'       => [
            'Sum Insured'    => '₹3–8 lakh (contents)',
            'Annual premium' => '₹2,000–₹5,000',
            'Monthly cost'   => '₹170–₹420',
        ],
        'cost_note'   => 'Far less than one restaurant dinner a month',
    ],
    [
        'id'          => 'stage-2',
        'tab_icon'    => '🏡',
        'tab_label'   => 'New Homeowner',
        'badge'       => '02 / First Home Purchase',
        'title'       => 'First Home Purchase (Age 28–40)',
        'subtitle'    => 'Protect your primary structure and high-value household assets right from day one.',
        'image_url'   => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Happy homebuyer holding keys',
        'priorities'  => [
            'Buy building + contents insurance immediately at purchase',
            'Calculate Reinstatement Value — not market price or loan amount',
            'Cover contents at replacement cost (New-for-Old basis)',
            'Declare all jewellery above sub-limit as specified items',
            'Add Loss of Rent if you may need to vacate during repairs',
            'Add EMI protection if the loss of your home could disrupt loan repayments',
        ],
        'costs'       => [
            'Sum Insured'    => '₹40–80 lakh (structure) + ₹10–20 lakh (contents)',
            'Annual premium' => '₹5,000–₹12,000',
            'Monthly cost'   => '₹420–₹1,000',
        ],
        'cost_note'   => 'Less than one school term\'s textbook expense',
    ],
    [
        'id'          => 'stage-3',
        'tab_icon'    => '🛡️',
        'tab_label'   => 'Peak Responsibility',
        'badge'       => '03 / Established Home',
        'title'       => 'Established Home (Age 40–55)',
        'subtitle'    => 'Ensure comprehensive coverage aligned with rising construction costs and high-value family assets.',
        'image_url'   => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Family relaxing together in home',
        'priorities'  => [
            'Review and significantly increase sum insured — construction costs have risen',
            'Add escalation clause to keep cover aligned with rising costs automatically',
            'Ensure all renovations have been declared and sum insured updated',
            'Review jewellery declarations — gold prices change significantly over time',
            'Add All-Risks cover for jewellery worn outside the home',
            'Verify add-ons are still active — Loss of Rent, EEI, Portable Equipment',
        ],
        'costs'       => [
            'Sum Insured'    => '₹60 lakh–1.5 crore (structure) + ₹15–30 lakh (contents)',
            'Annual premium' => '₹8,000–₹20,000',
            'Monthly cost'   => '₹670–₹1,670',
        ],
        'cost_note'   => 'Less than one family holiday weekend',
    ],
    [
        'id'          => 'stage-4',
        'tab_icon'    => '📜',
        'tab_label'   => 'Legacy Protection',
        'badge'       => '04 / Pre-Retirement',
        'title'       => 'Legacy Asset Protection (Age 55–65+)',
        'subtitle'    => 'Lock in long-term stability and ensure your family estate is completely secured without renewal lapses.',
        'image_url'   => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Senior couple enjoying peace of mind',
        'priorities'  => [
            'Lock in a 5-year long-term policy for premium certainty and continuity',
            'Ensure the policy is renewable — verify renewal terms',
            'Update all valuations: structure, contents, jewellery',
            'Consider a comprehensive package policy if you have multiple high-value assets',
            'Ensure family members know policy details and insurer contact information',
            'Do not reduce sum insured — the cost of rebuilding does not reduce with age',
        ],
        'costs'       => [],
        'cost_note'   => 'A long-term policy locked in at this stage provides continuity without the risk of renewal lapses. The premium discount (up to 12%) over 5 years is material.',
    ],
    [
        'id'          => 'stage-5',
        'tab_icon'    => '💼',
        'tab_label'   => 'Small Business Owner',
        'badge'       => '05 / Business Owner',
        'title'       => 'Starting or Running a Small Business (Any Age)',
        'subtitle'    => 'Protect stock, machinery, cash flow, and business continuity against sudden interruptions.',
        'image_url'   => 'https://images.unsplash.com/photo-1556742049-0a67daf40955?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Small business owner inside shop',
        'priorities'  => [
            'Buy a Shopkeeper\'s Package Policy on Day 1 — before stock enters premises',
            'Insure stock at maximum seasonal peak value — not average value',
            'Cover all trade equipment, machinery, and fittings at full replacement cost',
            'Include business interruption cover — income loss can exceed physical loss',
            'If operating from owned premises, insure structure at Reinstatement Value',
            'If operating from rented commercial space, verify stock/equipment coverage',
            'Add cash cover and plate glass endorsement if applicable',
            'Review and update policy every year as stock values and turnover change',
        ],
        'costs'       => [
            'Sum Insured'    => 'Stock ₹3–10L + Equipment ₹1–6L',
            'Annual premium' => '₹2,500–₹14,000 (Shopkeeper\'s Package)',
            'Monthly cost'   => '₹200–₹1,200',
        ],
        'cost_note'   => 'For most small businesses: less than 2–3 days of revenue per year',
    ],
];
?>

<section class="lifestage-section" id ="suitability">
    <div class="lifestage-container">
        <!-- Section Header -->
        <div class="lifestage-header">
            <!-- <span class="sub-heading">2.2 LIFE STAGE</span> -->
            <h2 class="main-heading">Suitability by Need and Life Stage</h2>
            <p class="section-desc">Your property insurance needs evolve as your life does. Here is how to approach each stage — what to buy, how much, and what to prioritise.</p>
        </div>

        <!-- Navigation Tabs -->
        <div class="lifestage-tabs-nav" role="tablist">
            <?php foreach ($life_stages as $index => $stage) : ?>
                <button class="tab-btn <?php echo $index === 0 ? 'active' : ''; ?>" 
                        data-target="<?php echo esc_attr($stage['id']); ?>" 
                        role="tab" 
                        aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                    <span class="tab-icon"><?php echo esc_html($stage['tab_icon']); ?></span>
                    <span><?php echo esc_html($stage['tab_label']); ?></span>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Tab Panels -->
        <div class="lifestage-tabs-content">
            <?php foreach ($life_stages as $index => $stage) : ?>
                <div class="tab-panel <?php echo $index === 0 ? 'active' : ''; ?>" id="<?php echo esc_attr($stage['id']); ?>" role="tabpanel">
                    
                    <!-- Single Main Card Wrapper (WHITE THEME) -->
                    <div class="single-lifestage-card white-theme">
                        
                        <!-- Left Side: Content & Columns -->
                        <div class="card-left-content">
                            <span class="badge"><?php echo esc_html($stage['badge']); ?></span>
                            <h3 class="panel-title"><?php echo esc_html($stage['title']); ?></h3>
                            <!-- <p class="panel-desc"><?php echo esc_html($stage['subtitle']); ?></p> -->

                            <!-- Sub-divided Two Columns with Divider -->
                            <div class="details-grid">
                                <!-- Sub Column 1: Priority Focus -->
                                <div class="priority-column">
                                    <h4 class="section-sub-title">PRIORITY FOCUS</h4>
                                    <ul class="priority-list">
                                        <?php foreach ($stage['priorities'] as $priority) : ?>
                                            <li>
                                                <svg class="check-icon" viewBox="0 0 24 24" width="18" height="18">
                                                    <path fill="none" stroke="currentColor" stroke-width="2.5" d="M20 6L9 17l-5-5"/>
                                                </svg>
                                                <span><?php echo esc_html($priority); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <!-- Sub Column 2: Illustrative Costs (No box, with divider line) -->
                                <div class="cost-column">
                                    <h4 class="section-sub-title">ILLUSTRATIVE COST</h4>
                                    
                                    <?php if (!empty($stage['costs'])) : ?>
                                        <ul class="cost-details">
                                            <?php foreach ($stage['costs'] as $label => $val) : ?>
                                                <li><strong><?php echo esc_html($label); ?>:</strong> <?php echo esc_html($val); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <?php if (!empty($stage['cost_note'])) : ?>
                                        <p class="cost-highlight"><?php echo esc_html($stage['cost_note']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side: Image -->
                        <div class="card-right-image">
                            <div class="image-box">
                                <img src="<?php echo esc_url($stage['image_url']); ?>" alt="<?php echo esc_attr($stage['image_alt']); ?>" loading="lazy" />
                            </div>
                        </div>

                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.lifestage-section .tab-btn');
    const tabPanels = document.querySelectorAll('.lifestage-section .tab-panel');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-target');

            // Deactivate all tabs
            tabButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.setAttribute('aria-selected', 'false');
            });

            // Hide all panels
            tabPanels.forEach(panel => {
                panel.classList.remove('active');
            });

            // Activate current tab
            button.classList.add('active');
            button.setAttribute('aria-selected', 'true');

            // Show current panel
            const targetPanel = document.getElementById(targetId);
            if (targetPanel) {
                targetPanel.classList.add('active');
            }
        });
    });
});
</script>