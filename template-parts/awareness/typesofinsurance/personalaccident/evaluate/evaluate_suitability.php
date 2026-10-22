<?php
/**
 * Template Part: PA Suitability by Need and Life Stage
 * Theme: Vima Vidya Custom Theme (Light / White Card)
 */

$pa_life_stages = [
    [
        'id'          => 'stage-1',
        'tab_icon'    => '🚀',
        'tab_label'   => 'Early Career',
        'badge'       => '01 / Age 22–30',
        'title'       => 'First Job / Early Career (Age 22–30)',
        'subtitle'    => 'Maximum earning years ahead with minimal savings. High exposure to daily commuting risk.',
        'image_url'   => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Young professional starting career',
        'priorities'  => [
            'Buy an individual PA policy immediately — don\'t rely on employer cover alone',
            'Set CSI at minimum 5–7× annual income',
            'Include TTD weekly benefit — your savings buffer is thin',
            'Add carriage of mortal remains if you live away from your hometown',
            'Review every 2–3 years as income grows',
        ],
        'costs'       => [
            'CSI'            => '₹30–50 lakh',
            'Annual premium' => '₹1,800–₹4,000',
            'Monthly cost'   => '₹150–₹350',
        ],
        'cost_note'   => 'Less than one restaurant meal a month',
    ],
    [
        'id'          => 'stage-2',
        'tab_icon'    => '🏡',
        'tab_label'   => 'Family Building',
        'badge'       => '02 / Age 28–40',
        'title'       => 'Married / Family Building (Age 28–40)',
        'subtitle'    => 'Growing obligations with dependents. A single income shock can devastate multiple lives.',
        'image_url'   => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Family relaxing together',
        'priorities'  => [
            'Upgrade CSI to 10× annual income minimum — add outstanding home loan balance',
            'Switch to a Family PA policy to cover spouse and children',
            'Add EMI Protector / Loan Protector add-on',
            'Add Education Grant to protect children\'s schooling if you are disabled',
            'Ensure spouse has their own independent PA cover',
        ],
        'costs'       => [
            'CSI'            => '₹75 lakh–₹1.5 crore',
            'Annual premium' => '₹5,000–₹14,000',
            'Monthly cost'   => '₹420–₹1,150',
        ],
        'cost_note'   => 'Less than one school term\'s expenditure on books',
    ],
    [
        'id'          => 'stage-3',
        'tab_icon'    => '🛡️',
        'tab_label'   => 'Peak Responsibility',
        'badge'       => '03 / Age 40–55',
        'title'       => 'Peak Responsibility (Age 40–55)',
        'subtitle'    => 'Carrying the heaviest financial load. Accidents now can affect 15+ years of family security.',
        'image_url'   => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Mid-career professional working',
        'priorities'  => [
            'Review and significantly increase CSI — minimum 12–15× annual income',
            'Add Hospital Daily Cash — hospitalisation costs for recovery are real',
            'Ensure nomination is updated and accurate',
            'Consider worldwide cover if you travel frequently for business',
            'If self-employed: TTD weekly benefit is critical — no employer sick pay exists',
        ],
        'costs'       => [
            'CSI'            => '₹1–2 crore',
            'Annual premium' => '₹10,000–₹22,000',
            'Monthly cost'   => '₹830–₹1,830',
        ],
        'cost_note'   => 'Less than one family dine-out evening per month',
    ],
    [
        'id'          => 'stage-4',
        'tab_icon'    => '📜',
        'tab_label'   => 'Pre-Retirement',
        'badge'       => '04 / Age 55–65',
        'title'       => 'Pre-Retirement (Age 55–65)',
        'subtitle'    => 'Physical vulnerability increases. Retirement savings must not be disrupted by injury.',
        'image_url'   => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Senior individual enjoying peace of mind',
        'priorities'  => [
            'Renew your existing policy before age thresholds close — most cap entry at 65',
            'Ensure policy is renewable up to age 70',
            'Add Fracture Care — fractures become more frequent with age',
            'Add Hospital Daily Cash — recovery takes longer at this stage',
            'Do not reduce CSI simply because children are independent — protect retirement capital',
        ],
        'costs'       => [],
        'cost_note'   => 'Most individual PA policies have an entry age limit of 65–70. You cannot take a fresh policy after this. You can only renew an existing one. If you do not have a policy by age 60, start immediately.',
    ],
];
?>

<section class="lifestage-section" id="evaluate-pa-suitability">
    <div class="lifestage-container">
        <!-- Section Header -->
        <div class="lifestage-header">
            <h2 class="main-heading">Suitability by Need and Life Stage</h2>
            <p class="section-desc">Your PA Insurance needs evolve as your life does. Here is how to approach each stage — what to buy, how much, and what to prioritise.</p>
        </div>

        <!-- Navigation Tabs -->
        <div class="lifestage-tabs-nav" role="tablist">
            <?php foreach ($pa_life_stages as $index => $stage) : ?>
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
            <?php foreach ($pa_life_stages as $index => $stage) : ?>
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