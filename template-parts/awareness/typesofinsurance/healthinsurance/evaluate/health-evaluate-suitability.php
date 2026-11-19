<?php
/**
 * Template Part: Health Suitability by Need and Life Stage
 * Theme: Vima Vidya Custom Theme (Light / White Card)
 */

$health_life_stages = [
    [
        'id'          => 'stage-1',
        'tab_icon'    => '🌱',
        'tab_label'   => 'Young Working',
        'badge'       => '01 / Young Working (Age 22–30)',
        'title'       => 'Young Working (Age 22–30)',
        'subtitle'    => 'You are starting out. Medical history is clean, premiums are at their lowest, and employer cover may be your only insurance. This is the best time to buy and lock in favourable terms — before health conditions emerge and premiums rise.',
        'image_url'   => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Young professional building financial and health security',
        'priorities'  => [
            'Buy an individual health policy immediately — don\'t rely on employer cover alone',
            'Set SI at ₹5–10 lakh minimum; add a ₹50 lakh super top-up',
            'Add critical illness rider — diagnosis at any age is possible',
            'Claim Section 80D tax benefit on premiums paid',
            'Review every 2–3 years as income and responsibilities grow',
        ],
        'costs'       => [
            'Base SI' => '₹5–10 lakh',
            'Annual premium' => '₹4,000–₹9,000',
            'Monthly cost' => '₹330–₹750',
        ],
        'cost_note'   => 'Less than one weekend outing a month.',
    ],
    [
        'id'          => 'stage-2',
        'tab_icon'    => '🏡',
        'tab_label'   => 'Married / Family Building',
        'badge'       => '02 / Married / Family Building (Age 28–40)',
        'title'       => 'Married / Family Building (Age 28–40)',
        'subtitle'    => 'You now have dependents — a spouse, young children, and perhaps ageing parents who rely on your income. A single health emergency can cascade into financial disruption across multiple lives simultaneously.',
        'image_url'   => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Family planning and insurance protection',
        'priorities'  => [
            'Upgrade to a family floater plan covering spouse and children',
            'Add maternity cover if planning a child — remember the 3-year waiting period',
            'Take a super top-up policy for higher coverage at low incremental cost',
            'Take a separate senior citizen policy for parents — don\'t add them to your floater',
            'Ensure spouse has independent coverage — not only dependent on floater',
        ],
        'costs'       => [
            'Family floater SI' => '₹10–15 lakh',
            'Annual premium' => '₹15,000–₹28,000',
            'Monthly cost' => '₹1,250–₹2,330',
        ],
        'cost_note'   => 'Less than one month\'s school tuition.',
    ],
    [
        'id'          => 'stage-3',
        'tab_icon'    => '⚡',
        'tab_label'   => 'Peak Responsibility',
        'badge'       => '03 / Peak Responsibility (Age 40–55)',
        'title'       => 'Peak Responsibility (Age 40–55)',
        'subtitle'    => 'You carry the heaviest financial load of your life. Healthcare costs for chronic conditions and age-related ailments begin to emerge. A single critical illness can affect a decade or more of family financial security. This is when adequacy of SI matters most.',
        'image_url'   => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Professional handling peak financial and family responsibilities',
        'priorities'  => [
            'Raise Sum Insured to ₹25 lakh or higher before health conditions emerge',
            'Add a critical illness cover — cancer, cardiac, stroke diagnoses are now significant risks',
            'Use portability to move to an insurer with a stronger hospital network if needed',
            'Review room rent limits and co-payment clauses — renegotiate at portability',
            'If self-employed: ensure OPD cover or separate health savings plan',
        ],
        'costs'       => [
            'SI' => '₹15–25 lakh',
            'Annual premium' => '₹22,000–₹45,000',
            'Monthly cost' => '₹1,830–₹3,750',
        ],
        'cost_note'   => 'Less than one family medical checkup per month.',
    ],
    [
        'id'          => 'stage-4',
        'tab_icon'    => '🛡️',
        'tab_label'   => 'Pre-Retirement',
        'badge'       => '04 / Pre-Retirement (Age 55–65)',
        'title'       => 'Pre-Retirement (Age 55–65)',
        'subtitle'    => 'Employer group cover is about to end. Physical vulnerability to chronic illness, critical conditions, and long-term treatment increases sharply. Retirement savings — built over decades — must not be disrupted by a single hospitalisation.',
        'image_url'   => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Senior couple securing peaceful pre-retirement years',
        'priorities'  => [
            'Buy or upgrade individual health policies before retirement — better terms while still employed',
            'Ensure SI is ₹25 lakh+ before leaving employment',
            'Declare all pre-existing conditions upfront — honesty protects you at claim time',
            'Add a super top-up to economically scale your coverage',
            'Ensure spouse has independent coverage that survives retirement',
        ],
        'costs'       => [
            'Key Reminder' => 'Buy or upgrade while still employed and medically insurable at better terms.',
            'Underwriting Risk' => 'Waiting until after retirement means higher premiums, stricter underwriting, and potential gaps in coverage for conditions that emerge during the gap.',
            'Impact' => 'This is the stage most people regret not acting on sooner.'
        ],
        'cost_note'   => 'Secure coverage before retirement to avoid higher premiums and medical exclusions.',
    ],
];
?>

<section class="lifestage-section" id="evaluate-health-lifestages">
    <div class="lifestage-container">
        <!-- Section Header -->
        <div class="lifestage-header">
            <h2 class="main-heading">Suitability by Need and Life Stage</h2>
            <p class="section-desc">Your health insurance needs evolve as your life does. Here is how to approach each stage — what to buy, how much, and what to prioritise.</p>
        </div>

        <!-- Navigation Tabs -->
        <div class="lifestage-tabs-nav" role="tablist" aria-label="Health insurance life stage tabs">
            <?php foreach ($health_life_stages as $index => $stage) : ?>
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
            <?php foreach ($health_life_stages as $index => $stage) : ?>
                <div class="tab-panel <?php echo $index === 0 ? 'active' : ''; ?>" id="<?php echo esc_attr($stage['id']); ?>" role="tabpanel">
                    
                    <!-- Single Main Card Wrapper (WHITE THEME) -->
                    <div class="single-lifestage-card white-theme">
                        
                        <!-- Left Side: Content & Columns -->
                        <div class="card-left-content">
                            <span class="badge"><?php echo esc_html($stage['badge']); ?></span>
                            <h3 class="panel-title"><?php echo esc_html($stage['title']); ?></h3>
                            <p class="panel-subtitle"><?php echo esc_html($stage['subtitle']); ?></p>

                            <!-- Sub-divided Two Columns with Divider -->
                            <div class="details-grid">
                                <!-- Sub Column 1: Priority Focus -->
                                <div class="priority-column">
                                    <h4 class="section-sub-title">PRIORITY ACTIONS AT THIS STAGE</h4>
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

                                <!-- Sub Column 2: Illustrative Costs / Reminders -->
                                <div class="cost-column">
                                    <h4 class="section-sub-title">
                                        <?php echo ($index === 3) ? 'KEY REMINDER AT THIS STAGE' : 'ILLUSTRATIVE COST AT THIS STAGE'; ?>
                                    </h4>
                                    
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
    const tabButtons = document.querySelectorAll('#evaluate-health-lifestages .tab-btn');
    const tabPanels = document.querySelectorAll('#evaluate-health-lifestages .tab-panel');

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