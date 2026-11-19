<?php
/**
 * Template Part: Travel Suitability by Need and Life Stage
 * Theme: Vima Vidya Custom Theme (Light / White Card)
 */

$life_stages = [
    [
        'id'          => 'stage-1',
        'tab_icon'    => '🚀',
        'tab_label'   => 'Young & Mobile',
        'badge'       => '01 / Young & Mobile (Age 22–35)',
        'title'       => 'Young Professional & Adventurer (Age 22–35)',
        'subtitle'    => 'You travel for leisure, adventure, or work with a thin savings buffer. Ensure your active trips are fully protected.',
        'image_url'   => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Young traveller exploring new destinations',
        'priorities'  => [
            'Buy travel insurance for every trip — domestic and international, without exception',
            'International trips: minimum USD 100,000 medical sum insured',
            'Add Adventure Sports Add-On for any trek, dive, paragliding, or water sport',
            'If travelling internationally 3+ times per year: switch to Annual Multi-Trip policy',
            'Buy immediately after booking — Trip Cancellation cover starts from purchase date',
        ],
        'costs'       => [
            'Domestic 3-day trip' => '₹150–₹300',
            'International Asia (7 days)' => '₹800–₹1,500',
            'Europe + Adventure (14 days)' => '₹2,800–₹5,000',
            'Annual Multi-Trip (Intl)' => '₹8,000–₹14,000 / year',
        ],
        'cost_note'   => 'Less than one restaurant meal — every trip, every risk, covered.',
    ],
    [
        'id'          => 'stage-2',
        'tab_icon'    => '🏡',
        'tab_label'   => 'Family Traveller',
        'badge'       => '02 / Family Traveller (Age 35–55)',
        'title'       => 'The Axle of the Family (Age 35–55)',
        'subtitle'    => 'Protect your spouse, children, and parents during family holidays, pilgrimages, and multi-generational travel.',
        'image_url'   => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Family travelling together with peace of mind',
        'priorities'  => [
            'Buy a Family Floater Travel Policy covering spouse, children, and declared parents',
            'Declare elderly parents accurately — age and all pre-existing conditions at purchase',
            'For USA, UK, or Australia trips: minimum USD 250,000 medical sum insured',
            'Include Home Burglary add-on if your home will be unoccupied during a long trip',
            'Save the 24/7 Assistance helpline in your phone before every departure',
        ],
        'costs'       => [
            'Domestic pilgrimage (14 days)' => '₹700–₹1,400',
            'Family Asia (10 days, 4 pax)' => '₹5,000–₹9,000',
            'Family Europe (14 days, 4 pax)' => '₹10,000–₹18,000',
            'Annual Multi-Trip (Family)' => '₹14,000–₹22,000 / year',
        ],
        'cost_note'   => 'Less than one mid-range hotel night — the entire family is protected.',
    ],
    [
        'id'          => 'stage-3',
        'tab_icon'    => '🛡️',
        'tab_label'   => 'Senior Traveller',
        'badge'       => '03 / Senior Traveller (Age 55+)',
        'title'       => 'Senior Traveller (Age 55 and Above)',
        'subtitle'    => 'Physical risk rises with age. Secure comprehensive medical cover and repatriation support where adequacy matters most.',
        'image_url'   => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Senior traveller enjoying secure global travel',
        'priorities'  => [
            'Buy a Senior Citizen Travel Policy — do not use a standard plan and hope for the best',
            'Declare all pre-existing conditions without exception — stability clause governs actual coverage',
            'International travel: minimum USD 250,000–500,000 medical sum insured',
            'Confirm the insurer\'s maximum entry age — some cap at 70, others at 85',
            'Buy Repatriation of Mortal Remains without exception — without it, the cost falls entirely on your family',
        ],
        'costs'       => [
            'Senior Intl Plan (14 days, Europe, USD 250K)' => '₹9,000–₹18,000',
            'Entry Age Limits' => 'Typically capped at 70–85 years',
            'Critical Cover' => 'USD 250K–500K medical sum insured',
        ],
        'cost_note'   => 'One un-insured ICU night abroad can cost ₹4–8 lakh. The choice made before the trip determines the outcome after it.',
    ],
];
?>

<section class="lifestage-section" id="suitability">
    <div class="lifestage-container">
        <!-- Section Header -->
        <div class="lifestage-header">
            <h2 class="main-heading">Suitability by Need and Life Stage</h2>
            <p class="section-desc">Your travel insurance needs evolve as your life does. Here is how to approach each stage — what to buy, how much, and what to prioritise.</p>
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