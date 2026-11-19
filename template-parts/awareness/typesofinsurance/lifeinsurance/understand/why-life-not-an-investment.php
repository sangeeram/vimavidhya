<?php
/**
 * Life Insurance — Why Life Insurance Is Not an Investment Template Part
 */
?>
<section class="not-an-investment" id="life-not-investment-section">
    <div class="not-an-investment__container">

        <!-- Section Header -->
        <header class="not-an-investment__header">
            <!-- <span class="not-an-investment__subtag">01.3 — CRITICAL DISTINCTION</span> -->
            <h2 class="not-an-investment__title">Why Life Insurance Is Not an Investment</h2>
            <p class="not-an-investment__subtitle">And Why That Distinction Could Save Your Family</p>
        </header>

        <!-- Magazine Split Layout: Left Text, Right Table -->
        <div class="not-an-investment__magazine-split">
            
            <!-- Left Column: Narrative Content -->
            <div class="not-an-investment__narrative">
                <h3 class="not-an-investment__section-heading">The Insurance-as-Investment Trap</h3>
                <p class="not-an-investment__text">
                    India has a unique problem. For decades, a significant portion of life insurance was sold not on the strength of protection — but on the promise of returns. Agents emphasized the maturity value. Customers bought policies because of perceived investment benefits, tax deductions under Section 80C, and the comfort of 'getting money back.'
                </p>
                <p class="not-an-investment__text" style="margin-top: 14px;">
                    The result: crores of Indians have grossly inadequate life cover — but have dutifully paid premiums on endowment plans and money-back policies for 20 years. Here is the arithmetic of that trade-off.
                </p>

                <!-- Magazine Pull-Quote -->
                <div class="not-an-investment__pullquote">
                    <blockquote>
                        "Insurance should protect your family if you die. Investments should grow your money if you live. Any product claiming to do both usually does neither well."
                    </blockquote>
                </div>
            </div>

            <!-- Right Column: Comparison Table -->
            <div class="not-an-investment__table-col">
                <div class="not-an-investment__table-wrapper">
                    <table class="not-an-investment__table">
                        <thead>
                            <tr>
                                <th>Scenario</th>
                                <th>Pure Term Insurance</th>
                                <th>Traditional Endowment Plan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Age at purchase</strong></td>
                                <td>30 years</td>
                                <td>30 years</td>
                            </tr>
                            <tr>
                                <td><strong>Sum Assured</strong></td>
                                <td>₹1 crore</td>
                                <td>₹25 lakh</td>
                            </tr>
                            <tr>
                                <td><strong>Annual premium</strong></td>
                                <td>₹12,000–15,000</td>
                                <td>₹75,000–90,000</td>
                            </tr>
                            <tr>
                                <td><strong>Premium paid over 20 years</strong></td>
                                <td>₹2.4–3 lakh</td>
                                <td>₹15–18 lakh</td>
                            </tr>
                            <tr>
                                <td><strong>Maturity value (if you survive)</strong></td>
                                <td>Zero — pure protection only</td>
                                <td>₹30–40 lakh (approx. 4–5% returns)</td>
                            </tr>
                            <tr>
                                <td><strong>Death benefit to family</strong></td>
                                <td>₹1 crore — full income replacement</td>
                                <td>₹25 lakh — covers roughly 3 years of income</td>
                            </tr>
                            <tr>
                                <td><strong>If you invested the premium difference in an index fund (@10% avg)</strong></td>
                                <td colspan="2"><strong>Portfolio value at 20 years:</strong> ₹75–90 lakh additional wealth (Term)<br><em>No additional investment — capital locked in low-return plan</em> (Endowment)</td>
                            </tr>
                            <tr>
                                <td><strong>Who benefits most from this arrangement?</strong></td>
                                <td><strong>Your family</strong>, in the event of your death</td>
                                <td><strong>The insurer</strong> — and partly the agent</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- Newspaper Theme Based Clickable Interactive Grid -->
        <div class="not-an-investment__newspaper-grid">
            
            <!-- Interactive Box 1: The Right Framework -->
            <div class="not-an-investment__news-card is-interactive">
                <div class="not-an-investment__news-card-header">
                    <span class="not-an-investment__news-icon">💡</span>
                    <h4 class="not-an-investment__news-title">The Right Framework</h4>
                    <span class="not-an-investment__news-toggle" aria-hidden="true">▼</span>
                </div>
                <div class="not-an-investment__news-body">
                    <p class="not-an-investment__text">
                        Buy the maximum protection for the minimum premium (Term Insurance). Invest separately for returns (equity mutual funds, PPF, NPS). Never mix the two. This is what financial planners call the <strong>'buy term and invest the rest'</strong> principle — and it is the approach that maximises both protection and wealth simultaneously.
                    </p>
                </div>
            </div>

            <!-- Interactive Box 2: What About the Tax Benefit? -->
            <div class="not-an-investment__news-card is-interactive">
                <div class="not-an-investment__news-card-header">
                    <span class="not-an-investment__news-icon">🧾</span>
                    <h4 class="not-an-investment__news-title">What About the Tax Benefit?</h4>
                    <span class="not-an-investment__news-toggle" aria-hidden="true">▼</span>
                </div>
                <div class="not-an-investment__news-body">
                    <p class="not-an-investment__text">
                        Section 80C of the Income Tax Act allows deduction of up to ₹1.5 lakh annually for life insurance premiums. This is real and valuable. But here is the critical insight: a ₹1 crore term plan typically costs ₹12,000–15,000 per year for a 30-year-old — well within the ₹1.5 lakh limit and eligible for the same 80C deduction. You do not need an expensive endowment plan to claim a tax benefit. The same deduction is available on a pure protection term plan at a fraction of the premium.<br><br>
                        Buying a ₹75,000/year endowment plan 'for the tax benefit' means paying ₹75,000 to save ₹22,500 in tax (at 30% slab). The economics do not work. The protection does not work either — the sum assured is far too low.<br><br>
                        <strong>The tax benefit should be a bonus of buying adequate insurance. It should never be the reason.</strong>
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
    /**
 * Life Insurance — Not an Investment Interactivity
 */
document.addEventListener('DOMContentLoaded', function() {
    const interactiveCards = document.querySelectorAll('.not-an-investment__news-card.is-interactive');

    interactiveCards.forEach(card => {
        card.addEventListener('click', function() {
            this.classList.toggle('is-expanded');
        });
    });
});
</script>