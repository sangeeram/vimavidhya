<?php
/**
 * Template Part: Motor Insurance Suitability by Life Stage
 * Theme: Vima Vidya Custom Theme (Light / White Card Architecture)
 */

$motor_life_stages = [
    [
        'id'          => 'stage-1',
        'tab_icon'    => '🚀',
        'tab_label'   => 'Early Career',
        'badge'       => '01 / Age 18–28',
        'title'       => 'First Vehicle / Early Career (Age 18–28)',
        'subtitle'    => 'Building your foundational driving footprint and managing initial vehicle purchases.',
        'image_url'   => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Young professional with vehicle',
        'priorities'  => [
            'Buy Comprehensive — not just TP. Young drivers have statistically higher accident rates.',
            'Add Zero Depreciation — your new vehicle\'s parts are expensive; depreciation deductions will hurt at claim time.',
            'Add Roadside Assistance — you are likely unfamiliar with what to do when stranded.',
            'Buy a Standalone Personal Accident Policy immediately — motor PA of ₹15 lakh is insufficient for lifetime income loss.',
            'Declare any CNG kit, accessories, or modifications — undisclosed modifications void claims.'
        ],
        'costs'       => [
            'Two-wheeler' => '₹3,000–₹8,000/year',
            'Small car'   => '₹12,000–₹20,000/year',
            'Coverage'    => 'Comprehensive + Zero Dep + RSA + Compulsory PA'
        ],
        'cost_note'   => 'Less than one monthly EMI on your vehicle loan',
    ],
    [
        'id'          => 'stage-2',
        'tab_icon'    => '🏡',
        'tab_label'   => 'Family Vehicle',
        'badge'       => '02 / Age 28–45',
        'title'       => 'Family Vehicle (Age 28–45)',
        'subtitle'    => 'Protecting family passengers, mid-segment assets, and handling liabilities alongside travel.',
        'image_url'   => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Family traveling together',
        'priorities'  => [
            'Add Unnamed Passenger PA Cover — your family travels with you; protect them explicitly.',
            'Add NCB Protect — you have built NCB over years; one unavoidable claim should not erase it.',
            'Add Engine Protection if in a flood-prone city (Mumbai, Chennai, Bengaluru, Hyderabad, Pune, Kolkata).',
            'Add Return to Invoice in the first 3 years of a new purchase — especially if you have a car loan.',
            'Size your standalone PA policy to cover your income and all outstanding loan obligations.',
            'If you employ a driver, add Paid Driver PA Cover.'
        ],
        'costs'       => [
            'Family car'  => '₹18,000–₹32,000/year',
            'Coverage'    => 'Comp + Zero Dep + RTI + Passenger PA + NCB Protect'
        ],
        'cost_note'   => 'Less than one school term\'s extracurricular fees',
    ],
    [
        'id'          => 'stage-3',
        'tab_icon'    => '🛡️',
        'tab_label'   => 'Peak Asset Stage',
        'badge'       => '03 / Age 45–60',
        'title'       => 'Peak Asset Stage (Age 45–60)',
        'subtitle'    => 'Optimizing multi-year No-Claim Bonuses, reviewing IDV accuracy, and tailoring coverage for luxury or EVs.',
        'image_url'   => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Mid-career professional reviewing assets',
        'priorities'  => [
            'Review IDV annually — ensure it reflects accurate market value, not an artificially depressed figure.',
            'Retain Zero Dep if the vehicle is under 5 years old; reassess at 5 years.',
            'Maximise your NCB — at 50% after 5 claim-free years the annual saving is significant.',
            'Ensure your standalone PA policy\'s Capital Sum Insured is adequate for remaining working years.',
            'Add EV Battery Protection if you have transitioned to an electric vehicle.',
            'For a high-value vehicle, consider Agreed Value policy rather than standard IDV-based cover.'
        ],
        'costs'       => [
            'NCB Saving'  => '50% NCB on ₹12k OD base = ₹6,000 saved/yr',
            'Add-ons'     => 'Approx. ₹4,500/year',
            'Net Benefit' => 'Still ahead by ₹1,500 with full coverage'
        ],
        'cost_note'   => 'NCB is a meaningful, compounding cost benefit — not just a reward.',
    ],
];
?>

<section class="lifestage-section" id="evaluate-motor-lifestages">
    <div class="lifestage-container">
        <!-- Section Header -->
        <div class="lifestage-header">
            <h2 class="main-heading">Suitability by Life Stage — What to Buy and How Much</h2>
            <p class="section-desc">Your motor insurance and protection requirements shift as you progress professionally and personally. Tailor your coverage to match your exact life stage.</p>
        </div>

        <!-- Navigation Tabs -->
        <div class="lifestage-tabs-nav" role="tablist">
            <?php foreach ($motor_life_stages as $index => $stage) : ?>
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
            <?php foreach ($motor_life_stages as $index => $stage) : ?>
                <div class="tab-panel <?php echo $index === 0 ? 'active' : ''; ?>" id="<?php echo esc_attr($stage['id']); ?>" role="tabpanel">
                    
                    <!-- Single Main Card Wrapper (WHITE THEME) -->
                    <div class="single-lifestage-card white-theme">
                        
                        <!-- Left Side: Content & Columns -->
                        <div class="card-left-content">
                            <span class="badge"><?php echo esc_html($stage['badge']); ?></span>
                            <h3 class="panel-title"><?php echo esc_html($stage['title']); ?></h3>

                            <!-- Sub-divided Two Columns with Divider -->
                            <div class="details-grid">
                                <!-- Sub Column 1: Priority Focus -->
                                <div class="priority-column">
                                    <h4 class="section-sub-title">PRIORITY ACTIONS</h4>
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

                                <!-- Sub Column 2: Illustrative Costs -->
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

<!-- Tab Switching Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.lifestage-section .tab-btn');
    const tabPanels = document.querySelectorAll('.lifestage-section .tab-panel');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-target');

            tabButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.setAttribute('aria-selected', 'false');
            });

            tabPanels.forEach(panel => {
                panel.classList.remove('active');
            });

            button.classList.add('active');
            button.setAttribute('aria-selected', 'true');

            const targetPanel = document.getElementById(targetId);
            if (targetPanel) {
                targetPanel.classList.add('active');
            }
        });
    });
});
</script>