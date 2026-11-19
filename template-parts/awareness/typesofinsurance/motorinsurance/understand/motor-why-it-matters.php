<?php
// motor-why-it-matters.php
?>
<section class="case-for-cover" id="why-it-matters">
    <div class="case-for-cover__container">

        <!-- Section Header -->
        <header class="case-for-cover__header">
            <h2 class="case-for-cover__title">Why It Matters</h2>
            <p class="case-for-cover__subtitle">Why You Must Have Motor Insurance</p>
        </header>

        <!-- 3-Column Card Grid -->
        <div class="case-for-cover__grid">
            
            <!-- Card 1: The Law Requires It -->
            <div class="case-for-cover__card">
                <div class="case-for-cover__card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                </div>
                <span class="case-for-cover__card-badge">Reason 01</span>
                <h3 class="case-for-cover__card-title">The Law Requires It</h3>
                <div class="case-for-cover__table-wrapper">
                    <table class="case-for-cover__table">
                        <thead>
                            <tr>
                                <th>Offence</th>
                                <th>First Offence Penalty</th>
                                <th>Repeat Offence</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Driving without valid insurance</strong></td>
                                <td>Fine and/ or imprisonment up to 3 months</td>
                                <td>Fine and/ or further legal action</td>
                            </tr>
                            <tr>
                                <td><strong>Allowing uninsured vehicle to be driven</strong></td>
                                <td>Owner equally liable as the driver</td>
                                <td>Enhanced penalty; vehicle may be impounded</td>
                            </tr>
                            <tr>
                                <td><strong>Third-party injury/death without insurance</strong></td>
                                <td>Owner personally liable — no upper limit for bodily injury or death</td>
                                <td>MACT awards can exceed ₹1–2 crore for a young earner's fatality</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Card 2: Third-Party Liability Is Unlimited -->
            <div class="case-for-cover__card">
                <div class="case-for-cover__card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </div>
                <span class="case-for-cover__card-badge">Reason 02</span>
                <h3 class="case-for-cover__card-title">Third-Party Liability Is Unlimited</h3>
                <p class="case-for-cover__text">
                    <strong>⚖️ Real MACT Award Scale:</strong> A 32-year-old software professional earning ₹90,000/month, killed in a road accident, can result in a Motor Accidents Claims Tribunal (MACT) compensation award exceeding ₹1.5 crore — calculated on income, years of working life remaining, dependency, and future prospects. If you caused that accident and were uninsured, that ₹1.5 crore comes from you personally. Your savings. Your property. Your family's future.
                </p>
            </div>

            <!-- Card 3: Your Own Vehicle Is a Major Asset -->
            <div class="case-for-cover__card">
                <div class="case-for-cover__card-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <span class="case-for-cover__card-badge">Reason 03</span>
                <h3 class="case-for-cover__card-title">Your Own Vehicle Is a Major Asset</h3>
                <p class="case-for-cover__text">
                    For most Indian families, a vehicle is the second-largest asset after their home. A mid-segment car purchased for ₹10–16 lakh today can have repair costs of ₹3–8 lakh after a serious accident, and full replacement cost if declared a total loss. Without Own Damage cover, every rupee comes from your savings.
                </p>
            </div>

        </div>

    </div>
</section>

<style>
/* 3-Column Layout Styles matching your design cards */
.case-for-cover__grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 24px;
    margin-top: 30px;
}
.case-for-cover__card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 24px;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.case-for-cover__card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
}
.case-for-cover__card-icon {
    width: 48px;
    height: 48px;
    background: #eff6ff;
    color: #2563eb;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
}
.case-for-cover__card-badge {
    font-size: 12px;
    font-weight: 600;
    color: #2563eb;
    text-transform: uppercase;
    margin-bottom: 8px;
    letter-spacing: 0.5px;
}
.case-for-cover__card-title {
    font-size: 18px;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 12px;
}
.case-for-cover__text {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
}
.case-for-cover__table-wrapper {
    margin-top: 8px;
    overflow-x: auto;
}
.case-for-cover__table {
    width: 100%;
    border-collapse: collapse;
    font-size: 11.5px;
}
.case-for-cover__table th, 
.case-for-cover__table td {
    border: 1px solid #cbd5e1;
    padding: 8px;
    text-align: left;
    color: #475569;
}
.case-for-cover__table th {
    background: #f1f5f9;
    font-weight: 600;
    color: #1e293b;
}
</style>