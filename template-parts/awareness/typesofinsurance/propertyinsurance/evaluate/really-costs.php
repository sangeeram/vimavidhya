<?php
$insurance_table_data = [
    [
        "profile" => "Tenant, 1BHK, Bengaluru, contents only",
        "sum_insured" => "₹3–5 lakh contents",
        "add_ons" => "EEI, Portable Equipment",
        "premium" => "₹2,000–₹4,500",
        "highlight" => false
    ],
    [
        "profile" => "Homeowner, 2BHK, Mumbai, RCC",
        "sum_insured" => "₹60 lakh structure + ₹10L contents",
        "add_ons" => "Loss of Rent, EEI",
        "premium" => "₹5,500–₹8,000",
        "highlight" => false
    ],
    [
        "profile" => "Homeowner, 3BHK, Chennai",
        "sum_insured" => "₹80 lakh structure + ₹15L contents",
        "add_ons" => "All perils, EEI, Jewellery declaration",
        "premium" => "₹8,000–₹12,000",
        "highlight" => false
    ],
    [
        "profile" => "Independent house, Visakhapatnam",
        "sum_insured" => "₹55 lakh structure + ₹12L contents",
        "add_ons" => "All perils, Loss of Rent",
        "premium" => "₹7,000–₹11,000",
        "highlight" => false
    ],
    [
        "profile" => "Homeowner, Delhi NCR",
        "sum_insured" => "₹75 lakh structure + ₹18L contents",
        "add_ons" => "EEI, specified jewellery",
        "premium" => "₹9,000–₹14,000",
        "highlight" => false
    ],
    [
        "profile" => "Kirana / grocery store",
        "sum_insured" => "Stock ₹5L + equipment ₹1L + cash ₹50K",
        "add_ons" => "Burglary, plate glass, cash",
        "premium" => "₹3,500–₹6,000",
        "highlight" => false
    ],
    [
        "profile" => "Tailoring / textile shop",
        "sum_insured" => "Stock ₹3L + machinery ₹1.5L",
        "add_ons" => "SFSP, burglary, EEI",
        "premium" => "₹2,500–₹4,500",
        "highlight" => false
    ],
    [
        "profile" => "Medical / pharmacy",
        "sum_insured" => "Stock ₹8L + equipment ₹1.5L",
        "add_ons" => "SFSP, public liability, burglary",
        "premium" => "₹6,000–₹10,000",
        "highlight" => false
    ],
    [
        "profile" => "Small restaurant / café",
        "sum_insured" => "Structure ₹15L + kitchen equipment ₹3L + stock ₹1L",
        "add_ons" => "Fire, flood, EEI, public liability",
        "premium" => "₹8,000–₹14,000",
        "highlight" => false
    ],
    [
        "profile" => "Long-term policy (3 year)",
        "sum_insured" => "Same as above",
        "add_ons" => "Same + escalation clause",
        "premium" => "Discount up to 12%",
        "highlight" => true // Special styling row at the bottom
    ]
];
?>
<section class="insurance-reference-section">
    <div class="container">
        <!-- Table Header -->
        <div class="section-header">
            <span class="section-tag">2.2 What really costs?</span>
            <h2 class="section-title">What Property Insurance Actually Costs</h2>
            <p class="section-subtitle">These figures are indicative and vary by insurer, property type, location, and add-ons selected.</p>
        </div>

        <!-- Reference Table Card -->
       <div class="insurance-cards-grid">
            <?php foreach ($insurance_table_data as $row): ?>
                <div class="insurance-card <?php echo $row['highlight'] ? 'card-highlight' : ''; ?>">
                    <div class="card-header-tag">
                        <h3 class="card-title"><?php echo htmlspecialchars($row['profile']); ?></h3>
                    </div>
                    
                    <div class="card-body">
                        <div class="card-info-row">
                            <span class="info-label">Sum Insured:</span>
                            <span class="info-value"><?php echo htmlspecialchars($row['sum_insured']); ?></span>
                        </div>
                        <div class="card-info-row">
                            <span class="info-label">Add-ons:</span>
                            <span class="info-value"><?php echo htmlspecialchars($row['add_ons']); ?></span>
                        </div>
                    </div>

                    <div class="card-footer">
                        <span class="footer-label">INDICATIVE ANNUAL PREMIUM</span>
                        <div class="card-premium"><?php echo htmlspecialchars($row['premium']); ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Planning Guidance Section (Appended Below Table) -->
        <div class="planning-guidance-wrapper">
            <div class="planning-header">
                <span class="section-tag">PLANNING GUIDANCE</span>
                <h3 class="section-title">📐 How to Calculate What You Should Spend on Property Insurance</h3>
                <!-- <p class="section-subtitle">Use these as planning indicators, not guaranteed market rates.</p> -->
            </div>

            <div class="planning-cards-grid">
                <!-- Home Card -->
                <div class="planning-card">
                    <div class="card-icon-title">
                        <span class="card-icon">🏠</span>
                        <span class="card-category">HOME</span>
                    </div>
                    <h4 class="card-metric-title">Annual premium &approx;</h4>
                    <div class="card-metric-box">
                        <div class="metric-value">0.05–0.15%</div>
                        <div class="metric-desc">of reinstatement value + contents value</div>
                    </div>
                </div>

                <!-- Small Business Card -->
                <div class="planning-card">
                    <div class="card-icon-title">
                        <span class="card-icon">🏢</span>
                        <span class="card-category">SMALL BUSINESS</span>
                    </div>
                    <h4 class="card-metric-title">Annual premium &approx;</h4>
                    <div class="card-metric-box">
                        <div class="metric-value">0.10–0.20%</div>
                        <div class="metric-desc">of insured stock + equipment value</div>
                    </div>
                </div>
            </div>

            <div class="table-footer-note">
                Indicative planning ranges only. Actual premiums vary by insurer, property, location, occupancy, coverage, and policy terms.
            </div>
        </div>
    </div>
</section>