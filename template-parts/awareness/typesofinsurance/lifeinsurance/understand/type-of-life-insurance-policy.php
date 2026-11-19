<?php
/**
 * Life Insurance Policy Types
 * Stacked Image Accordion with Full Detailed Modals
 */

$policies = [
    [
        'number'                  => '01',
        'type'                    => 'Term Insurance',
        'image'                   => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1200&q=80',
        'What it actually does'   => 'Pays a large lump sum — the Sum Assured (SA) — to your chosen nominee if you die during the policy period. Nothing is paid if you survive. Pure life cover, no maturity benefit.',
        'Who genuinely needs it'  => 'Anyone whose death would leave someone else financially worse off — spouse, children, parents, siblings, or dependents.',
        'The one thing to remember' => 'Maximum protection for minimum cost. Every other product should be compared against this.'
    ],
    [
        'number'                  => '02',
        'type'                    => 'Endowment Plan',
        'image'                   => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=1200&q=80',
        'What it actually does'   => 'You pay premiums for 15–20 years. If you die, your nominee gets the cover amount. If you survive, you get the cover amount plus accumulated bonuses — a savings plan with insurance attached.',
        'Who genuinely needs it'  => 'Anyone — single or married — who wants forced savings discipline and a guaranteed lump sum on a specific future date.',
        'The one thing to remember' => 'Think of it as a low-return savings plan (4–6% per year) that also gives you some life cover — not the other way around.'
    ],
    [
        'number'                  => '03',
        'type'                    => 'Money-Back Plan',
        'image'                   => 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?auto=format&fit=crop&w=1200&q=80',
        'What it actually does'   => 'Same as an endowment plan, but instead of waiting till the end, you receive a chunk of money every few years — for example, 25% of the cover at years 5, 10, and 15.',
        'Who genuinely needs it'  => 'Anyone with specific expenses coming up at known future dates, such as further education, a property purchase, or family wedding.',
        'The one thing to remember' => 'The money you receive back is mostly your own premiums returning with a small bonus. It is not an investment return.'
    ],
    [
        'number'                  => '04',
        'type'                    => 'Whole Life Insurance',
        'image'                   => 'https://images.unsplash.com/photo-1516726817505-f5ed825624d8?auto=format&fit=crop&w=1200&q=80',
        'What it actually does'   => 'Covers you for your entire life — until age 99 or 100. Also builds up a cash reserve over time that you can borrow against.',
        'Who genuinely needs it'  => 'People who want to leave a guaranteed inheritance for parents, siblings, partners, or the next generation.',
        'The one thing to remember' => 'This is a legacy-planning tool for passing money on — it is not designed to replace primary income.'
    ],
    [
        'number'                  => '05',
        'type'                    => "Children's Policies",
        'image'                   => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1200&q=80',
        'What it actually does'   => 'You pay premiums now so a lump sum is available when your child reaches a target age (18 or 21) to fund education or a wedding. Premiums stop on death while policy continues.',
        'Who genuinely needs it'  => 'Parents of young children who want to ensure financial backing for specific future goals regardless of what happens.',
        'The one thing to remember' => 'The Waiver of Premium (WoP) feature is everything — it ensures the money reaches your child even if you are not there.'
    ],
    [
        'number'                  => '06',
        'type'                    => 'ULIPs',
        'image'                   => 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?auto=format&fit=crop&w=1200&q=80',
        'What it actually does'   => 'Your premium is split — part buys life cover, part is invested in market-linked funds. The value goes up or down with the market.',
        'Who genuinely needs it'  => 'Anyone committed to investing for 10+ years who wants an insurance-linked market investment structure.',
        'The one thing to remember' => 'The life cover is too small to protect a family. Fully understand NAV, FMC charges, and the 5-year lock-in period.'
    ],
    [
        'number'                  => '07',
        'type'                    => 'Guaranteed Income Plans',
        'image'                   => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80',
        'What it actually does'   => 'You pay premiums for a set period. In return, the insurer promises to pay a fixed amount every year for a defined future period — guaranteed.',
        'Who genuinely needs it'  => 'Anyone approaching retirement who wants certainty on income received without depending on market fluctuations.',
        'The one thing to remember' => 'You are buying certainty (5–6.5% effective return), not the highest return. Best used alongside other investments.'
    ],
    [
        'number'                  => '08',
        'type'                    => 'Annuity / Pension Plans',
        'image'                   => 'https://images.unsplash.com/photo-1532619675605-1ede6c2ed2b0?auto=format&fit=crop&w=1200&q=80',
        'What it actually does'   => 'You hand over a lump sum. In return, the insurer pays you a fixed income every month for the rest of your life — no matter how long you live.',
        'Who genuinely needs it'  => 'Anyone who needs a reliable retirement income, especially single individuals with no second household pension to fall back on.',
        'The one thing to remember' => 'Protection against outliving your money. It ensures you always have income for as long as you live.'
    ],
    [
        'number'                  => '09',
        'type'                    => 'Group Term Insurance',
        'image'                   => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80',
        'What it actually does'   => 'Your employer buys a group policy covering all employees automatically with no medical checks and zero cost.',
        'Who genuinely needs it'  => 'Useful for everyone as an extra supplement, though it ends the exact day you leave the company.',
        'The one thing to remember' => 'The day you resign or are retrenched, this cover disappears. Never treat it as your only protection.'
    ],
    [
        'number'                  => '10',
        'type'                    => 'Saral Jeevan Bima',
        'image'                   => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=1200&q=80',
        'What it actually does'   => 'A no-frills standard term plan that every insurer in India must offer identically, with cover ranging from ₹5 lakh to ₹25 lakh.',
        'Who genuinely needs it'  => 'First-time buyers of any age or situation who find standard insurance products overwhelming to compare.',
        'The one thing to remember' => 'A simple, standardised starting point. The ₹25 lakh limit is too low as a final solution for urban families.'
    ]
];
?>

<section class="vv-property-types vv-life-types" id="life-insurance-types">
    <div class="vv-container">

        <header class="vv-section-header">
            <div class="vv-section-kicker"></div>
            <h2 class="vv-title">Types of Life Insurance Policies in India</h2>
            <p class="vv-subtitle">Life insurance in India is available in distinct product categories — each serving a different financial purpose. Matching the right product to the right need is the most important decision you will make. Read this table before considering any product.</p>
        </header>

        <div class="vv-stack-wrapper" data-accordion-group>
            <?php foreach ($policies as $index =>$item) : ?>
                <article
                    class="vv-stack-card <?php echo $index === 0 ? 'is-active' : ''; ?>"
                    data-accordion-card
                    tabindex="0"
                    aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                    style="--card-image: url('<?php echo esc_url($item['image']); ?>');"
                >
                    <div class="vv-card-image"></div>
                    <div class="vv-card-overlay"></div>

                    <!-- COLLAPSED TRIGGER TAB -->
                    <button
                        type="button"
                        class="vv-tab-trigger"
                        data-accordion-trigger
                        aria-label="Expand <?php echo esc_attr($item['type']); ?>"
                    >
                        <span class="vv-collapsed-label"><?php echo esc_html($item['type']); ?></span>
                        <span class="vv-tab-arrow">&rarr;</span>
                    </button>

                    <!-- EXPANDED CONTENT -->
                    <div class="vv-card-content">
                        <div class="vv-card-main">
                            <div class="vv-card-header">
                                <h3 class="vv-card-title"><?php echo esc_html($item['type']); ?></h3>
                            </div>
                        </div>

                        <div class="vv-card-details">
                            <div class="vv-detail-block">
                                <div class="vv-detail-icon"><span>◇</span></div>
                                <span class="vv-detail-label">WHAT IT ACTUALLY DOES</span>
                                <p class="vv-detail-text"><?php echo esc_html($item['What it actually does']); ?></p>
                            </div>

                            <div class="vv-detail-block">
                                <div class="vv-detail-icon"><span>♙</span></div>
                                <span class="vv-detail-label">WHO GENUINELY NEEDS IT</span>
                                <p class="vv-detail-text"><?php echo esc_html($item['Who genuinely needs it']); ?></p>
                            </div>

                            <div class="vv-detail-block">
                                <div class="vv-detail-icon"><span>⌂</span></div>
                                <span class="vv-detail-label">THE ONE THING TO REMEMBER</span>
                                <p class="vv-detail-text"><?php echo esc_html($item['The one thing to remember']); ?></p>
                            </div>
                        </div>

                        <!-- MODAL TRIGGER BUTTON -->
                        <div class="vv-card-action">
                            <button type="button" class="vv-modal-trigger" data-policy-id="<?php echo esc_attr($index); ?>">
                                Click for Detailed Breakdown &rarr;
                            </button>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- FULL DETAIL POPUP MODAL CONTAINER -->
<div class="vv-policy-modal-overlay" id="policyModalOverlay" aria-hidden="true">
    <div class="vv-policy-modal" role="dialog" aria-modal="true">
        <button type="button" class="vv-modal-close" id="policyModalClose" aria-label="Close modal">&times;</button>
        <div class="vv-modal-body" id="policyModalBody">
            <!-- Dynamic full content injected via JavaScript -->
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const groups = document.querySelectorAll('[data-accordion-group]');
    groups.forEach(function (group) {
        const cards = group.querySelectorAll('[data-accordion-card]');
        cards.forEach(function (card) {
            const trigger = card.querySelector('[data-accordion-trigger]');
            trigger.addEventListener('click', function () {
                if (card.classList.contains('is-active')) return;
                cards.forEach(function (item) {
                    item.classList.remove('is-active');
                    item.setAttribute('aria-expanded', 'false');
                });
                card.classList.add('is-active');
                card.setAttribute('aria-expanded', 'true');
            });
        });
    });

    // Complete uncompressed text bank for popups
    const fullPolicyDetails = [
        {
            title: "Term Insurance — The Foundation of Life Insurance",
            html: `
                <p>A Term Insurance policy is the simplest, purest, and most important form of life insurance. It pays the Sum Assured to your nominees if you die within the policy term. If you survive, the policy ends with no maturity benefit. This is exactly what life insurance is supposed to do: transfer the catastrophic risk of your premature death from your family to the insurer — at the lowest possible cost.</p>
                <table class="vv-modal-table">
                    <thead><tr><th>Feature</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Sum Assured</td><td>Typically, 10–25× your annual income; sized to replace HLV (Human Life Value).</td></tr>
                        <tr><td>Premium</td><td>Lowest of all policy types — ₹8,000–25,000/year for ₹1 crore for ages 25–40.</td></tr>
                        <tr><td>Policy Term</td><td>10 to 40 years; choose a term that covers your working life and liability period.</td></tr>
                        <tr><td>Maturity Benefit</td><td>None — pure protection; the absence of maturity benefit is what makes the premium affordable.</td></tr>
                        <tr><td>Death Benefit Options</td><td>Lump sum; or monthly income to nominee; or lump sum + income — choose based on family's financial literacy.</td></tr>
                        <tr><td>Critical Illness Rider</td><td>Optional add-on — pays a portion of Sum Assured on diagnosis of specified serious illness.</td></tr>
                        <tr><td>Waiver of Premium Rider</td><td>Optional — waives future premiums if you become permanently disabled.</td></tr>
                        <tr><td>Accidental Death Benefit Rider</td><td>Optional — doubles/increases payout for accidental death.</td></tr>
                        <tr><td>Term Plan with Return of Premium (TROP)</td><td>Variant that returns all premiums at maturity — You get your premiums back if you survive the policy term — but you pay higher premium for that comfort. If the idea of "getting something back" is what it takes for you to buy adequate life cover, it is a reasonable trade-off. Otherwise, a standard term plan costs less and protects just as well.</td></tr>
                    </tbody>
                </table>
                <div class="vv-modal-tip">💡 <strong>How much cover do you need?</strong> A widely used formula: 10–12× your current annual income, plus all outstanding liabilities (home loan, car loan, personal loan), plus funds for children's education and dependent parents' care.<br><br>For a 32-year-old earning ₹6 lakh/year with a ₹25 lakh home loan and two young children: ₹72 lakh (10× income) + ₹25 lakh (loan) + ₹25 lakh (children's education) = ₹1.22 crore. Round up to ₹1.5 crore. The premium difference between ₹1 crore and ₹1.5 crore cover is approximately ₹3,000–4,000/year — less than the cost of one dinner out per month.</div>
            `
        },
        {
            title: "Endowment Plans — When You Want Both Cover and a Defined Payout",
            html: `
                <p>An Endowment Plan provides life cover for a specified term and pays the Sum Assured — plus accumulated bonuses — either on death (to nominees) or on maturity (to the policyholder). It is a participating life insurance product, meaning it shares in the insurer's surplus through bonuses. Endowment plans are not investment products in the modern sense — returns typically range from 4–6% annually, below inflation in many periods. Their value lies in the disciplined, forced savings they represent and the defined lump sum they deliver at a specific future date.</p>
                <table class="vv-modal-table">
                    <thead><tr><th>Component</th><th>How It Works</th></tr></thead>
                    <tbody>
                        <tr><td>Basic Sum Assured</td><td>The guaranteed amount payable on death or maturity — declared at policy inception.</td></tr>
                        <tr><td>Reversionary Bonus</td><td>Annual bonus declared by insurer as a percentage of Sum Assured, added each year — not paid until claim or maturity.</td></tr>
                        <tr><td>Terminal Bonus</td><td>Additional one-time bonus payable at maturity or death — not guaranteed.</td></tr>
                        <tr><td>Premium Allocation</td><td>A portion goes to life cover (mortality charge); remainder to savings component.</td></tr>
                        <tr><td>Participating vs Non-Participating</td><td>Participating (PAR) policies allow policyholders to share in the insurer's profits through non-guaranteed bonuses or dividends. Non-participating (Non-PAR) policies offer solely guaranteed payouts with no profit-sharing. The former features higher premiums but provides wealth-building potential; the latter is more affordable and offers straightforward, fixed financial protection.</td></tr>
                        <tr><td>Surrender Value</td><td>Available after 3 years of premium payment — significantly penalised; endowment plans must not be bought for flexibility.</td></tr>
                        <tr><td>Loan Against Policy</td><td>Available after policy acquires a Surrender Value — useful for short-term liquidity needs.</td></tr>
                    </tbody>
                </table>
                <div class="vv-modal-warn">⚠️ <strong>Important:</strong> Endowment plans and money-back plans should never be bought as a substitute for adequate term cover. A ₹25 lakh endowment plan does not protect a family the way a ₹1.5 crore term plan does. If you are buying an endowment plan, also hold a separate, adequately sized term plan.</div>
            `
        },
        {
            title: "Money-Back Plans — Scheduled Payouts With a Protection Layer",
            html: `
                <p>A Money-Back Plan is a variant of the endowment plan that pays a percentage of the Sum Assured back to the policyholder at defined intervals during the policy term — called survival benefits — while keeping the full Sum Assured payable on death, regardless of survival benefits already paid. The remaining amount, plus accumulated bonuses, is paid at maturity.</p>
                <table class="vv-modal-table">
                    <thead><tr><th>Feature</th><th>How It Works</th><th>What to Watch</th></tr></thead>
                    <tbody>
                        <tr><td>Survival Benefit</td><td>At fixed points during the policy — say years 5, 10, and 15 of a 20-year plan — the insurer pays you back a chunk of money, typically 20–25% of your cover amount each time. It feels like the policy is rewarding you.</td><td>It is not a reward. It is your own premiums coming back to you, with a small bonus added. Before being impressed by the payout amount, ask: what is my actual return relative to what I paid in total?</td></tr>
                        <tr><td>Death Benefit</td><td>The full Sum Assured is paid to the family if you die during the policy term — the survival benefits already received do not get deducted from this amount.</td><td>The cover amount in most money-back plans is ₹20–30 lakh. For most families, that does not come close to replacing a breadwinner's income. A separate term plan is not optional — it is essential.</td></tr>
                        <tr><td>Maturity Benefit</td><td>If you survive to the end of the policy term, you receive the remaining portion of the Sum Assured — that is, the cover amount minus the survival benefit amounts already paid out — plus all accumulated bonuses.</td><td>When you add up every rupee you paid in premiums and compare it to every rupee you receive back, the effective annual return is typically 4.5–6%. That is often less than a fixed deposit and well below what equity investments return over the same period.</td></tr>
                        <tr><td>The actual numbers</td><td>Say you pay ₹36,000 per year for 20 years — a total outflow of ₹7.2 lakh. Over those 20 years you receive survival benefit payouts totalling around ₹10 lakh, plus a maturity bonus. The effective annual return on your money works out to roughly 5–5.5%.</td><td>5–5.5% per year is a modest return for money locked away for 20 years. The main benefit is not the return — it is that money arrives at predictable future dates. That is only useful if you actually have a specific expense planned for each of those dates.</td></tr>
                        <tr><td>Bonus Structure</td><td>Most money-back plans share in the insurer's profits each year through an annual bonus added to your policy. A further one-time bonus is added at maturity. Together these boost the final payout.</td><td>These bonuses are not guaranteed. They depend on how profitably the insurer runs its business that year. When comparing plans or projecting future value, treat the bonus as a possible extra — not as money you can count on.</td></tr>
                        <tr><td>When it genuinely makes sense</td><td>A money-back plan works well when you have specific, known expenses coming up at predictable future years — a child starting college, a wedding, a home renovation — and you want money to arrive automatically at those moments without the temptation to spend it early.</td><td>Match each survival benefit payout year to a real, named goal. If you cannot do that — if the payout years do not line up with anything specific in your life — a simple recurring deposit or mutual fund SIP will give you better returns with more flexibility.</td></tr>
                    </tbody>
                </table>
                <div class="vv-modal-warn">⚠️ <strong>Important:</strong> A money-back plan with a SA of ₹25 lakh is not life insurance protection for a family. It is a savings plan that incidentally includes life cover. The premium is structured primarily around the savings and survival benefit schedule. Always buy an adequately sized term plan (10–12× annual income) independently, and then decide if a money-back plan serves a specific savings goal.</div>
            `
        },
        {
            title: "Whole Life Insurance — Permanent Cover with a Legacy Purpose",
            html: `
                <p>A Whole Life Insurance policy provides coverage for your entire lifetime — typically up to age 99 or 100 in India — not just a defined term. It pays the Sum Assured to nominees whenever death occurs, regardless of when. Most whole life plans in India also accumulate a Cash Value over time, which the policyholder can access through loans or partial surrenders.</p>
                <table class="vv-modal-table">
                    <thead><tr><th>Feature</th><th>Whole Life Insurance Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Coverage Duration</td><td>Entire lifetime — up to age 99 or 100 as defined by the insurer.</td></tr>
                        <tr><td>Death Benefit</td><td>Sum Assured paid to nominees regardless of when death occurs — age 45 or age 85.</td></tr>
                        <tr><td>Cash Value / Surrender Value</td><td>Builds over time; policyholder can borrow against it or surrender the policy.</td></tr>
                        <tr><td>Premium Payment</td><td>Regular premiums for a defined period (e.g., 20 or 30 years); cover continues for life.</td></tr>
                        <tr><td>Bonus Accumulation</td><td>Participating whole life plans earn reversionary (regular, annual additions to your policy's payout that lock in once declared) and terminal bonuses (discretionary, one-time payout added at the very end of the policy at maturity or death, as a reward for long-term investment).</td></tr>
                        <tr><td>Legacy Use</td><td>Ensures an estate is left for heirs regardless of timing of death — particularly valuable in estate planning.</td></tr>
                        <tr><td>Best Suited For</td><td>High-net-worth individuals planning legacy and estate; those wanting to ensure their heirs receive something regardless of lifespan.</td></tr>
                        <tr><td>Not Suited For</td><td>Primary income protection — term plan is far more cost-effective for this purpose.</td></tr>
                    </tbody>
                </table>
                <div class="vv-modal-tip">💡 <strong>The Reality of Whole Life Insurance in India:</strong> Most Indians who buy Whole Life policies do so without a clear estate plan behind the decision. The policy runs for decades, premiums are paid faithfully, and yet the nominee is never told it exists, the nomination is never updated after a marriage or the birth of a child, and the cash value is never reviewed or used. The product works — the process around it often does not. A Whole Life policy is only as valuable as the estate intention behind it. Before buying, answer one question honestly: who specifically am I leaving this for, and have I told them?</div>
            `
        },
        {
            title: "Children's Policies — Protecting Your Child's Future Regardless of Yours",
            html: `
                <p>A Children's Life Insurance Policy is structured to fund a child's future financial milestone — higher education, professional college, or marriage — and crucially includes a Waiver of Premium (WoP) benefit that ensures the policy continues and pays out at the defined maturity date even if the parent (premium payer) dies during the policy term.</p>
                <table class="vv-modal-table">
                    <thead><tr><th>Feature</th><th>Children's Policy Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Who Is Insured</td><td>The child — life cover is on the child's life; premium is paid by parent/guardian.</td></tr>
                        <tr><td>Who Is the Policyholder</td><td>Parent or legal guardian — they hold and control the policy.</td></tr>
                        <tr><td>Waiver of Premium (WoP)</td><td>Most critical feature: if the parent (premium payer) dies, future premiums are waived — but the policy continues to maturity and pays the full benefit on the target date.</td></tr>
                        <tr><td>Maturity Benefit</td><td>Paid at a defined date — typically when the child reaches 18, 21, or 25 — regardless of whether the parent is alive.</td></tr>
                        <tr><td>Death Benefit (Child’s death)</td><td>Varies by plan — Different insurers handle it differently: some pay the Sum Assured immediately to the parent; others simply return all premiums paid. Either way, the policy ends.</td></tr>
                        <tr><td>Target Events</td><td>Engineering/medical college admission; MBA; marriage — you choose the maturity year to align with the goal.</td></tr>
                        <tr><td>Premium Commitment</td><td>Long — 10 to 20 years; must be affordable and sustainable across that horizon.</td></tr>
                        <tr><td>Best Practice</td><td>Parent should also hold an adequate term plan; children's policy alone does not replace the family income shortfall.</td></tr>
                    </tbody>
                </table>
                <div class="vv-modal-warn">⚠️ <strong>Important:</strong> India's higher education costs have risen at approximately 10–12% per year over the last decade — significantly faster than general inflation. An engineering or medical degree that costs ₹15 lakh today may cost ₹40 lakh or more in 15 years. A Children's Policy begun when a child is born, with the maturity year aligned to the year of college admission, creates a ring-fenced corpus that no market event, job loss, or family emergency can touch — because the Waiver of Premium ensures it continues even if the parent does not. Starting late reduces the compounding window and increases the annual premium required to reach the same target. The best time to start was the day your child was born. The second-best time is now.</div>
            `
        },
        {
            title: "Unit Linked Insurance Plans (ULIPs) — Investment-Linked Cover",
            html: `
                <p>A ULIP is a life insurance product that combines market-linked investment with life cover under a single contract. It is the most complex — and most frequently misunderstood — product in Indian life insurance. When bought for the right purpose, with clear understanding of its costs, it can serve a defined role. When bought as a substitute for adequate term cover or as a mutual fund alternative, it almost always disappoints.</p>
                <table class="vv-modal-table">
                    <thead><tr><th>ULIP Component</th><th>How It Works</th><th>What to Watch</th></tr></thead>
                    <tbody>
                        <tr><td>Premium Split</td><td>Every premium you pay is divided into two parts. One small part pays for your life cover. The rest goes into the investment fund you choose.</td><td>The life cover you get is usually only 10 times your annual premium — so a ₹1 lakh/year ULIP gives just ₹10 lakh of life cover. That is nowhere near enough to protect most families. Never treat a ULIP as your main life insurance.</td></tr>
                        <tr><td>Fund Options</td><td>You choose where your money is invested — aggressive equity funds (higher risk, higher potential return), balanced funds, or safer debt funds. You can usually switch between funds a few times a year at no cost.</td><td>Picking the wrong fund can give you returns lower than a simple fixed deposit, even after 10 years. If you don't actively manage your fund choice, the default may not suit you. A ULIP that is never reviewed is a ULIP that may quietly underperform for years without the policyholder noticing.</td></tr>
                        <tr><td>Premium Allocation Charge</td><td>Before your money is even invested, the insurer takes a cut — typically 2–5% in the early years. So, on a ₹1 lakh premium with a 5% charge, only ₹95,000 actually gets invested on day one.</td><td>This charge hits hardest in the early years when you have the least money built up. Always ask to see the full charge schedule before you sign.</td></tr>
                        <tr><td>Mortality Charge</td><td>Each month, the insurer deducts the cost of your life cover by cancelling some of your investment units. This charge increases every year as you get older.</td><td>The older you get, the more units are cancelled each month just to maintain the cover. In the later years of a long policy, this can become a significant drag on your investment.</td></tr>
                        <tr><td>Fund Management Charge (FMC)</td><td>An annual fee for managing your investment — capped by IRDAI at 1.35% of your fund value per year. It is deducted a little every day from your fund.</td><td>1.35% sounds small but over 15 years it quietly removes a meaningful chunk of your returns. A comparable index mutual fund charges as little as 0.10% per year — that difference compounds significantly over time.</td></tr>
                        <tr><td>Policy Administration Charge</td><td>A flat monthly fee — typically ₹100–150 — deducted from your fund for maintaining the policy.</td><td>Adds up to around ₹1,800 per year. Small on its own, but it adds to the total charge burden. Always check the exact figure in the product illustration document.</td></tr>
                        <tr><td>Lock-in Period</td><td>You cannot withdraw your money or close the policy for the first 5 years — by law. If you die during this period, your family still receives the death benefit immediately.</td><td>If there is any chance you may need this money within 5 years — for a home purchase, emergency, or any other reason — do not put it in a ULIP. The money is completely inaccessible during the lock-in.</td></tr>
                        <tr><td>NAV (Net Asset Value)</td><td>NAV is simply the daily price of one unit in your fund — similar to a share price. Your fund value on any day = number of units you hold × that day's NAV. When charges are deducted, units are cancelled, so your unit count falls.</td><td>A rising NAV does not necessarily mean you are ahead. Your actual position is: fund value today versus total premiums and charges you have paid so far. That is the only comparison that matters.</td></tr>
                        <tr><td>Death Benefit</td><td>If you die, your family receives whichever is higher — the Sum Assured (10× annual premium) or the current fund value. This ensures they get at least the guaranteed cover amount even if markets have fallen.</td><td>The protection is genuine but the Sum Assured is too small to replace most people's income. A separate term plan is essential alongside any ULIP.</td></tr>
                        <tr><td>Tax Treatment (from 2023)</td><td>If your total annual ULIP premium stays at ₹2.5 lakh or below, the money you receive at maturity is tax-free. If your premiums across all ULIPs together exceed ₹2.5 lakh per year, the maturity amount becomes taxable as capital gains.</td><td>This rule changed in 2023 and directly affects how much you actually keep. If you are paying high premiums, calculate your post-tax return carefully and compare it honestly against a mutual fund before deciding.</td></tr>
                    </tbody>
                </table>
                <div class="vv-modal-tip">💡 <strong>The ULIP Charge Arithmetic:</strong> You pay ₹1 lakh/year. After a 5% allocation charge, ₹95,000 is invested. From that, roughly ₹1,282 (FMC) + ₹1,800 (admin) + rising mortality charges are deducted annually — reducing your effective return by 3–4% every year in the first 7 years.<br><br>Compare: spend ₹12,000/year on a term plan for ₹1 crore cover, invest the remaining ₹88,000 in an index fund at 0.10% annual charge. You get 8–10 times more life cover and roughly 2–3% better net returns annually — at the exact same total cost. A ULIP is not automatically bad. But you must go in for it knowing precisely what it costs.</div>
                <div class="vv-modal-tip" style="margin-top: 12px; background: rgba(16, 185, 129, 0.1); border-color: rgba(16, 185, 129, 0.3); color: #d1fae5;">✅ <strong>When a ULIP Makes Sense:</strong> A ULIP can work well for investors who (1) have an existing adequate term plan, (2) commit to 10+ year investment horizon, (3) actively switch funds in response to market cycles, (4) want market-linked returns within a regulated insurance framework, and (5) keep annual premium within ₹2.5 lakh for tax efficiency. It does not work well as a first-time insurance purchase, a primary life cover product, or a short-to-medium term investment.</div>
            `
        },
        {
            title: "Guaranteed Income Plans — Certainty as a Financial Asset",
            html: `
                <p>A Guaranteed Income Plan (also called a Non-Participating Guaranteed Return Plan or a Non-PAR savings plan) is a life insurance product where the insurer contractually commits to paying a defined income stream or lump sum at specified future dates — regardless of market conditions, interest rate movements, or the insurer's own profitability in that year. The benefit is fully guaranteed at inception. This certainty is the product's defining characteristic — and its primary value. It is not the highest-return product in any financial plan. It is the most predictable.</p>
                <table class="vv-modal-table">
                    <thead><tr><th>Feature</th><th>How It Works</th><th>What to Watch</th></tr></thead>
                    <tbody>
                        <tr><td>Income Guarantee</td><td>When you buy the plan, the insurer tells you exactly how much money you will receive, on exactly which dates, for exactly how many years. That amount is written into the contract and cannot be changed — not by rising inflation, not by falling interest rates, not by the insurer's financial performance.</td><td>This is the entire point of the product. You are not chasing the best return — you are buying the certainty of knowing what will arrive in your account and when.</td></tr>
                        <tr><td>Premium Structure</td><td>Most plans work in two phases. You pay premiums for a set number of years — say 10 — and then receive income for a longer period — say 25 years. Alternatively, if you already have a lump sum (from a retirement payout, maturity proceeds, or inheritance), you can pay once upfront and start receiving income immediately or from a future date.</td><td>Choose the regular premium route if you are still working and want to build towards retirement income gradually. Choose the single premium route if you already have a corpus sitting idle and want to put it to work immediately.</td></tr>
                        <tr><td>What Return You Actually Get</td><td>The effective annual return is typically 5–6.5% after tax. That is lower than what equity markets have historically delivered over the long run.</td><td>Do not buy this product if your goal is the highest possible return. Buy it if your goal is an income, you can absolutely rely on. The return is modest — the guarantee is the value.</td></tr>
                        <tr><td>Tax Benefit</td><td>Your annual premiums qualify for a tax deduction of up to ₹1.5 lakh under Section 80C. The income you receive is also tax-free, provided your annual premium does not exceed 10% of the cover amount — which it typically does not in standard plans.</td><td>Because the income is tax-free, what you actually keep is worth more than the quoted return suggests — a 5.5% tax-free return beats a 7% fixed deposit return for anyone in the 30% tax bracket. However, this tax-free status is not guaranteed across every plan variant — confirm it with the insurer before you sign, not after.</td></tr>
                        <tr><td>No Bonuses — and Why That Is Fine</td><td>This is a Non-PAR (non participating) plan — meaning the insurer does not share its annual profits with you through bonuses. What was promised at the start is exactly what you get. Nothing more, nothing less.</td><td>With a traditional endowment plan, bonuses can go up or down depending on the insurer's performance. Here you give up that possible upside in exchange for complete certainty. For retirement income planning, certainty is usually worth more than the possibility of a bonus.</td></tr>
                        <tr><td>How It Differs from an Annuity</td><td>A guaranteed income plan pays you for a fixed number of years — say 20 or 25. If you die before the period ends, payments continue to your family. At the end of the period, some plans also return the original amount you paid in. An annuity, by contrast, pays you for as long as you live — even if that is 35 years.</td><td>If you need income for a specific known period — to bridge a gap or fund a particular life phase — use a guaranteed income plan. If you need income that you simply cannot outlive, regardless of how long you live, use an annuity.</td></tr>
                        <tr><td>Once You Commit, the Money Is Locked</td><td>If you decide to exit the plan early, the penalties are steep — especially in the first few years. This is a long-term commitment, not a flexible investment.</td><td>Only put in money you are certain you will not need for the full duration of the plan. Keep your emergency fund and short-term savings completely separate before considering this product.</td></tr>
                    </tbody>
                </table>
                <div class="vv-modal-tip">💡 <strong>The Role of Certainty in a Financial Plan:</strong> Most financial advice tells you to maximise returns. But returns are never guaranteed — equity markets can fall 40% in a single year and take years to recover. A guaranteed income plan removes one portion of your retirement from all of that uncertainty. You will never earn the most from this product. But you will always receive exactly what was promised — month after month, year after year, regardless of what markets do. For anyone approaching retirement without an employer pension, that reliability is worth a great deal more than chasing an extra percentage point of return that may or may not materialise.</div>
            `
        },
        {
            title: "Annuity / Pension Plans — Your Guaranteed Income in Retirement",
            html: `
                <p>An Annuity or Pension Plan converts a lump sum of accumulated corpus — either built during the accumulation phase or paid as a single premium — into a guaranteed, regular income stream for retirement. In India, annuity plans are offered by life insurers and provide the only product besides the Employees' Pension Scheme (EPS) that guarantees income for life, regardless of how long you live.</p>
                <table class="vv-modal-table">
                    <thead><tr><th>Annuity Type</th><th>How It Works</th><th>Best For</th></tr></thead>
                    <tbody>
                        <tr><td>Immediate Annuity</td><td>You pay a lump sum (purchase price); insurer immediately begins paying a fixed monthly income — for life or for a term.</td><td>Retirees with accumulated corpus needing to convert it to regular income now.</td></tr>
                        <tr><td>Deferred Annuity</td><td>You pay premiums for an accumulation period (5–30 years). On retirement, the accumulated corpus converts to annuity income.</td><td>Working professionals building retirement income over their career.</td></tr>
                        <tr><td>Life Annuity (without return of purchase)</td><td>Pays income for life; nothing returned to heirs on death — maximum income per rupee invested.</td><td>Those without dependents or with other estate provisions (already made separate arrangements to leave money or assets for their heirs).</td></tr>
                        <tr><td>Life Annuity with Return of Purchase Price</td><td>Pays income for life; on death, the initial purchase price is returned to nominees — lower monthly income.</td><td>Those wanting to preserve capital for heirs while drawing retirement income.</td></tr>
                        <tr><td>Joint Life Annuity</td><td>Income paid as long as either spouse is alive — continues at 50% or 100% to survivor after first death.</td><td>Married couples planning joint retirement income.</td></tr>
                        <tr><td>Annuity Certain</td><td>Income paid for a guaranteed minimum period (e.g., 10 or 20 years), then for life i.e. minimum guaranteed payout window, with lifelong income on top if you live longer.</td><td>Those wanting a guaranteed minimum payout regardless of lifespan.</td></tr>
                        <tr><td>NPS (National Pension System)</td><td>Government-run defined contribution pension; mandatory 40% annuity at retirement from accumulated corpus.</td><td>All working individuals — particularly those without employer pension coverage.</td></tr>
                    </tbody>
                </table>
                <div class="vv-modal-tip">💡 <strong>India's Retirement Reality:</strong> According to NSSO (National Sample Survey Office) data, less than 12% of India's workforce has access to formal pension coverage. The vast majority of Indians — self-employed, gig workers, small business owners, agricultural workers — have no employer pension. For them, an annuity plan is not optional planning — it is the only mechanism to guarantee income in old age. India's average life expectancy has crossed 70 years. A 60-year-old today may live another 25–30 years. That is 300 months of living expenses without guaranteed income. An annuity solves this.</div>
            `
        },
        {
            title: "Group Term Insurance (GTI) — The Protection That Travels Only While You Stay",
            html: `
                <p>Group Term Insurance (GTI) is a life insurance policy taken by an employer, association, or institution that covers all eligible members under a single master policy. It is one of the most widely available forms of life insurance in India — yet it is also one of the most dangerous to rely on as a primary protection tool, because of the one condition that defines it: it terminates the moment you leave the company.</p>
                <table class="vv-modal-table">
                    <thead><tr><th>Feature</th><th>How Group Term Insurance Works</th><th>What to Watch</th></tr></thead>
                    <tbody>
                        <tr><td>Master Policy Structure</td><td>The employer is the master policyholder. Individual members (employees) are covered under the master policy. Premium is usually paid by the employer — the employee pays nothing.</td><td>The employer controls the policy. The employer can change the insurer, reduce cover, or discontinue the scheme — the employee has no say.</td></tr>
                        <tr><td>Sum Assured</td><td>Typically, 3–5× annual salary, or a flat amount per grade. IRDAI mandates a minimum for certain categories. The sum assured is usually far below the employee's actual HLV.</td><td>3–5× salary is ₹12–20 lakh for a ₹4 lakh earner. Their HLV may be ₹80 lakh–₹1 crore. GTI covers 15–25% of the actual need.</td></tr>
                        <tr><td>No Medical Underwriting</td><td>Employees join automatically — no health declaration or medical test required. This makes GTI accessible to people with pre-existing conditions who might not qualify for individual term plans.</td><td>This accessibility is valuable as a supplement to personal insurance — but does not compensate for the portability limitation.</td></tr>
                        <tr><td>Portability</td><td>GTI does not travel with you. When you leave the employer — resign, retire, retrenchment — the cover ceases. There is no conversion right to individual cover in most cases.</td><td>The day you need insurance most (job loss, health event) is often the day your GTI has just terminated. Personal insurance is non-negotiable.</td></tr>
                        <tr><td>No Premium Commitment</td><td>Premium paid by employer means no personal premium outflow. This is a genuine benefit — but it should not be treated as a reason to avoid buying personal term insurance.</td><td>The fact that GTI is free does not make it sufficient. The absence of cost should not be confused with adequate coverage.</td></tr>
                        <tr><td>Spouse / Dependent Cover</td><td>Some employer GTI schemes offer optional cover for spouses and children at subsidised group rates. Valuable if available — but again, terminates with employment.</td><td>Dependent cover under GTI is a supplement to personal insurance for the spouse and not a substitute.</td></tr>
                        <tr><td>Gratuity-Linked Group Insurance</td><td>Some employers use group insurance to fund gratuity obligations — this is an employer liability management tool, not personal life insurance for the employee.</td><td>Gratuity-linked GTI exists to protect the employer's gratuity obligation — the employee's family benefits only if the employee dies while in service.</td></tr>
                    </tbody>
                </table>
                <div class="vv-modal-tip" style="background: rgba(16, 185, 129, 0.1); border-color: rgba(16, 185, 129, 0.3); color: #d1fae5;">✅ <strong>Key Takeaway:</strong> Group Term Insurance is valuable as a supplement — never as a substitute. Every professional earning a salary should hold a personal term plan that (1) is independent of any employer, (2) is sized to their actual HLV, and (3) continues regardless of job changes, retrenchment, or early retirement. Treat your employer's GTI as bonus protection on top of your personal cover — never as the cover itself.</div>
            `
        },
        {
            title: "Saral Jeevan Bima — The Standardised Entry Point",
            html: `
                <p>Saral Jeevan Bima (SJB) is an IRDAI-mandated standard term life insurance product that every life insurer in India must offer. All insurers offer an identical product structure — the same eligibility criteria, the same exclusions, the same benefit structure — with only the premium differing across insurers. This standardisation removes complexity and enables direct comparison. Saral Jeevan Bima is not the ideal term plan for everyone — its maximum Sum Assured of ₹25 lakh is insufficient for most urban earners' HLV — but it is the right entry product for first-time insurance buyers, rural households, and anyone intimidated by the complexity of standard term plan comparison.</p>
                <table class="vv-modal-table">
                    <thead><tr><th>Feature</th><th>What It Means in Plain Language</th></tr></thead>
                    <tbody>
                        <tr><td>Sum Assured</td><td>Minimum ₹5 lakh, maximum ₹25 lakh. You choose the amount in multiples of ₹50,000. For most urban families this will not be enough as a final solution — but it is a legitimate starting point.</td></tr>
                        <tr><td>Who can buy it</td><td>Anyone aged 18 to 65. The policy can run for anywhere between 5 and 40 years, as long as it ends before you turn 70.</td></tr>
                        <tr><td>Premium</td><td>The premium varies by your age and the cover amount you choose. Because every insurer sells exactly the same product, you can compare premiums across companies directly — the cheapest premium for the same cover is genuinely the best deal here, unlike standard term plans where features differ.</td></tr>
                        <tr><td>Death Benefit</td><td>If you die during the policy term, your nominee receives the full cover amount as a one-time lump sum. Simple and straightforward — no conditions attached.</td></tr>
                        <tr><td>Exclusions</td><td>The only exclusion is suicide within the first 12 months of buying or reviving the policy. After 12 months, that exclusion falls away. No other exclusions are permitted — by law, the product cannot add more.</td></tr>
                        <tr><td>No add-ons available</td><td>You cannot attach any riders to this plan — no critical illness cover, no accidental death benefit, no waiver of premium. If you want those features, you need a standard term plan instead.</td></tr>
                        <tr><td>Do you need a medical test</td><td>Possibly. For lower cover amounts the insurer may accept a self-declaration of health. Above a certain threshold — which varies by insurer — a medical examination is required, just as with any standard term plan.</td></tr>
                        <tr><td>Who should actually buy this</td><td>Three types of people: i) someone buying life insurance for the very first time and finding standard plans overwhelming; ii) someone who needs temporary cover while deciding on a larger, more comprehensive plan; and iii) someone who has been turned down by standard term plan underwriting and needs at least some cover in place.</td></tr>
                    </tbody>
                </table>
                <div class="vv-modal-tip">💡 <strong>The Role of Assurance:</strong> India has over 50 crore working adults. A significant proportion — daily wage earners, small traders, domestic workers, farmers, first-generation salaried employees in smaller towns — have never bought a life insurance policy, not because they do not need one, but because the process felt too complicated, the terminology too unfamiliar, and the agent too focused on products that earned a higher commission. Saral Jeevan Bima exists precisely for this gap. One standard product, identical across every insurer, with no feature differences to confuse and no hidden variations to navigate. The cover limit of ₹25 lakh will not replace the income of a ₹1 lakh per month earner — but for a family whose primary earner makes ₹20,000–30,000 a month, ₹25 lakh is the difference between losing everything and having time to recover.</div>
            `
        }
    ];

    // Modal Handling Logic
    const modalOverlay = document.getElementById('policyModalOverlay');
    const modalClose = document.getElementById('policyModalClose');
    const modalBody = document.getElementById('policyModalBody');

    document.querySelectorAll('.vv-modal-trigger').forEach(button => {
        button.addEventListener('click', function (e) {
            e.stopPropagation();
            const index = this.getAttribute('data-policy-id');
            const data = fullPolicyDetails[index];
            if (!data) return;

            let contentHtml = `<h2>${data.title}</h2>`;
            contentHtml += data.html;

            modalBody.innerHTML = contentHtml;
            modalOverlay.classList.add('is-visible');
            modalOverlay.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        });
    });

    function closeModal() {
        modalOverlay.classList.remove('is-visible');
        modalOverlay.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    modalClose.addEventListener('click', closeModal);
    modalOverlay.addEventListener('click', function (e) {
        if (e.target === modalOverlay) closeModal();
    });
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeModal();
    });
});
</script>