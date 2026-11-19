<?php
/**
 * Template Part: Life Insurance Suitability by Life Stage
 * Theme: Vima Vidya Custom Theme (Light / White Card Architecture)
 */

$life_stages = [
    [
        'id'          => 'stage-1',
        'tab_icon'    => '🚀',
        'tab_label'   => 'Early Career',
        'badge'       => 'Stage 1 / Age 22–28',
        'title'       => 'Stage 1 — First Earning Years (Age 22–28): The Window You Cannot Afford to Miss',
        'subtitle'    => 'Building your foundational footprint and securing long-term actuarial advantages early.',
        'image_url'   => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Young professional starting career',
        'priorities'  => [
            'Buy a Term Plan immediately — even at ₹25 lakh SA to start; upgrade as income grows. Premium at age 24–25 is the lowest it will ever be — lock in the rate for a 35-year term.',
            'Add a Critical Illness Rider — young adults are not immune to cancer, cardiac events, or strokes. Diagnosis without cover can destroy nascent savings.',
            'Do NOT buy an endowment plan sold at bank branches or by relatives — resist the temptation of "getting money back."',
            'Start an NPS (National Pension System) account — the tax benefit under 80CCD(1B) is an additional ₹50,000 deduction beyond 80C; begin building retirement corpus now.',
            'If you have financial dependents (parents, siblings), increase the SA proportionally.'
        ],
        'costs'       => [
            'Term Plan (₹1 cr, 35 yrs)' => '₹8,000–12,000/year',
            'Critical Illness Rider'    => '₹3,000–5,000/year',
            'NPS contribution'          => 'Whatever you can afford consistently'
        ],
        'cost_note'   => 'Less than ₹1,500/month can put ₹1 crore of protection in place.',
    ],
    [
        'id'          => 'stage-2',
        'tab_icon'    => '🏡',
        'tab_label'   => 'Family Formation',
        'badge'       => 'Stage 2 / Age 28–40',
        'title'       => 'Stage 2 — Family Formation (Age 28–40): Your Most Critical Protection Window',
        'subtitle'    => 'Protecting family members, long-term liabilities, and financial commitments.',
        'image_url'   => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Family growing together',
        'priorities'  => [
            'Increase Term Plan Sum Assured to at least 10–12× annual income — you now have a spouse, potentially children, and a home loan. These are obligations, not preferences.',
            'Buy a Children\'s Policy when each child is born — align maturity to the year they turn 18 or 21. Ensure the Waiver of Premium (WoP) benefit is included.',
            'Consider an MWPA (Married Women\'s Property Act) Policy for the term plan — places proceeds in trust for wife and children; protected from creditors.',
            'Add an Accidental Death Benefit Rider if your profession or commute carries elevated accident risk.',
            'Review nominees — ensure your spouse is a Beneficial Nominee, not just an old nominee from a pre-marriage policy.',
            'Do NOT surrender or let lapse any existing policies bought at 25 — you are now paying older-entry-age rates; maintaining them is more cost-effective than restarting.'
        ],
        'costs'       => [
            'Term Plan upgrade (₹1.5–2 cr)' => '₹20,000–35,000/year',
            'Children\'s Policy (₹25 lakh)'  => '₹30,000–45,000/year',
            'Total protection budget'       => 'Approximately ₹50,000–80,000/year'
        ],
        'cost_note'   => 'Less than one month\'s home loan EMI per month protects the entire family.',
    ],
    [
        'id'          => 'stage-3',
        'tab_icon'    => '🛡️',
        'tab_label'   => 'Peak Income',
        'badge'       => 'Stage 3 / Age 40–55',
        'title'       => 'Stage 3 — Peak Income and Pre-Retirement (Age 40–55): Consolidate and Transition',
        'subtitle'    => 'Consolidating assets, clearing major liabilities, and focusing on retirement income security.',
        'image_url'   => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Mid-career financial review',
        'priorities'  => [
            'Ensure term plan continues to cover the home loan outstanding and any other major liabilities.',
            'Begin a Deferred Annuity Plan — 15 years of accumulation before age 60 builds meaningful retirement income. Even ₹1 lakh/year invested in an annuity/NPS at age 45 creates a meaningful income floor at 60.',
            'If you have a Whole Life plan, review the Cash Value — it may be useful as collateral for short-term needs.',
            'Do NOT surrender endowment plans bought earlier for "liquidity" — the surrender value is heavily penalised; hold to maturity.',
            'Ensure Critical Illness cover is in place — the probability of diagnosis increases significantly after 40.',
            'Review the nomination chain — if your parents (original nominees) have passed, ensure the nomination is updated to your spouse and children.'
        ],
        'costs'       => [
            'Top-up/new term plan'      => '₹35,000–60,000/year',
            'Deferred Annuity / NPS'    => '₹1,00,000–2,00,000/year',
            'Critical Illness policy'   => '₹15,000–35,000/year'
        ],
        'cost_note'   => 'Focus: retirement income security and health protection.',
    ],
    [
        'id'          => 'stage-4',
        'tab_icon'    => '🌅',
        'tab_label'   => 'Retirement',
        'badge'       => 'Stage 4 / Age 60+',
        'title'       => 'Stage 4 — Retirement (Age 60+): From Accumulation to Income',
        'subtitle'    => 'Converting accumulated corpuses into guaranteed lifelong income streams.',
        'image_url'   => 'https://images.unsplash.com/photo-1447452001602-7090c7ab2db3?auto=format&fit=crop&w=800&q=80',
        'image_alt'   => 'Retired couple enjoying financial security',
        'priorities'  => [
            'Convert accumulated corpus (NPS, deferred annuity, PPF, MFs) into a structured income plan.',
            'An Immediate Annuity provides guaranteed income for life — no market risk, no management required.',
            'If you have a dependent spouse, choose a Joint Life Annuity — ensures your spouse has income after you.',
            'If you have a whole life or endowment plan reaching maturity, re-deploy the maturity proceeds thoughtfully — do not re-invest in unnecessary new life insurance.',
            'Ensure health insurance is in place — without it, hospitalisation can rapidly deplete the corpus your life insurance was meant to protect.',
            'A smaller term plan may still be appropriate if you have dependent children or parents — reassess actual dependency.'
        ],
        'costs'       => [
            'Immediate Annuity (₹50 lakh purchase)' => '₹25,000–35,000/month for life',
            'Health Insurance'                      => '₹25,000–60,000/year (critical at this stage)'
        ],
        'cost_note'   => 'Focus: guaranteed income that cannot be outlived; protect the corpus from healthcare expenses.',
    ]
];
?>

<section class="lifestage-section" id="evaluate-life-lifestages">
    <div class="lifestage-container">
        <!-- Section Header -->
        <div class="lifestage-header">
            <h2 class="main-heading">Suitability by Life Stage</h2>
            <p class="section-desc">Your financial obligations and protection requirements shift as you progress professionally and personally. Tailor your coverage to match your exact life stage.</p>
        </div>

        <!-- Navigation Tabs -->
        <div class="lifestage-tabs-nav" role="tablist">
            <?php foreach ($life_stages as $index =>$stage) : ?>
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
            <?php foreach ($life_stages as $index =>$stage) : ?>
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
                                        <?php foreach ($stage['priorities'] as$priority) : ?>
                                            <li>
                                                <svg class="check-icon" viewBox="0 0 24 24" width="18" height="18">
                                                    <path fill="none" stroke="currentColor" stroke-width="2.5" d="M20 6L9 17l-5-5"/>
                                                </svg>
                                                <span><?php echo esc_html($priority); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <!-- Sub Column 2: Indicative Costs -->
                                <div class="cost-column">
                                    <h4 class="section-sub-title">INDICATIVE COST AT THIS STAGE</h4>
                                    
                                    <?php if (!empty($stage['costs'])) : ?>
                                        <ul class="cost-details">
                                            <?php foreach ($stage['costs'] as $label =>$val) : ?>
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