<?php
/**
 * Template Part: Motor Insurance Policy Section
 * 
 * @package CustomTheme
 */
?>

<div class="motor-insurance-template-part" id="motor-insurance-section">
    <!-- Header Section -->
    <header class="section-header">
        <h1>Types of Motor Insurance Policies</h1>
        <p>Motor insurance in India comes in distinct policy types. Understanding each — and knowing which is right for you — is the difference between being genuinely protected and being merely legally compliant.</p>
    </header>

    <!-- Policy Selector Tabs -->
    <div class="policy-tabs" role="tablist">
        <button class="tab-btn active" role="tab" aria-selected="true" data-policy="tp">
            <span class="radio-icon"></span> Third-Party Only (TP)
        </button>
        <button class="tab-btn" role="tab" aria-selected="false" data-policy="od">
            <span class="radio-icon"></span> Own Damage (OD)
        </button>
        <button class="tab-btn" role="tab" aria-selected="false" data-policy="comp">
            <span class="radio-icon"></span> Comprehensive (Package)
        </button>
    </div>

    <!-- Main Policy Card Panel -->
    <section class="policy-card" id="policy-card-panel">
        <!-- Left: Image & Title Info -->
        <div class="policy-hero">
            <div class="image-wrapper">
                <img id="policy-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/driver.jpg'); ?>" alt="Policy Illustration">
                <span class="shield-badge">🛡️</span>
            </div>
            <div class="policy-title-block">
                <h2 id="policy-title">Third-Party Liability Insurance (TP)</h2>
                <span id="policy-status" class="badge-mandatory">MANDATORY BY LAW</span>
                <p id="policy-desc">The legal floor. Required for every vehicle on Indian roads.</p>
                <button type="button" class="btn-outline" id="accordion-toggle" aria-expanded="false" aria-controls="policy-accordion-content">
                    View Details <span class="arrow-icon">↓</span>
                </button>
            </div>
        </div>

        <!-- Middle: What It Covers -->
        <div class="coverage-box covers">
            <h3>✅ What It Covers</h3>
            <ul id="policy-covers">
                <li>Death of a third party caused by your vehicle — unlimited compensation as per MACT</li>
                <li>Bodily injury to a third party — medical expenses, rehabilitation, loss of income, pain and suffering</li>
                <li>Third-party property damage — up to ₹7.5 lakh</li>
                <li>Legal defence costs — insurer appoints a lawyer</li>
                <li>Compensation ordered by court — full amount to injured third party</li>
                <li>Long-Term TP (New Vehicles) — 3 yrs (cars) / 5 yrs (two-wheelers)</li>
            </ul>
        </div>

        <!-- Right: What It Does NOT Cover -->
        <div class="coverage-box not-covers">
            <h3>❌ What It Does NOT Cover</h3>
            <ul id="policy-not-covers">
                <li>Damage to your own vehicle</li>
                <li>Your own medical expenses or injuries</li>
                <li>Passengers in your vehicle</li>
                <li>Natural disasters affecting your vehicle</li>
                <li>Theft of your vehicle</li>
                <li>Your own financial loss of any kind</li>
            </ul>
        </div>
    </section>

    <!-- Collapsible Accordion Content (Summary Table Details) -->
    <div class="policy-accordion-panel" id="policy-accordion-content">
        <div class="accordion-inner">
            <h3>Quick Comparison Overview</h3>
            <div class="accordion-grid">
                <div class="accordion-col">
                    <strong>Policy Type</strong>
                    <p id="acc-type">Third-Party Only (TP)</p>
                </div>
                <div class="accordion-col">
                    <strong>What It Covers</strong>
                    <ul id="acc-covers">
                        <li>Bodily injury / death / property damage to third parties.</li>
                        <li>Long-term TP (applicable for new vehicles - 3 yrs cars / 5 yrs two-wheelers)</li>
                    </ul>
                </div>
                <div class="accordion-col">
                    <strong>Who Should Buy</strong>
                    <ul id="acc-who">
                        <li>Old vehicles with low market value; legal minimum only</li>
                        <li>All new vehicles — standard at dealerships since 2018</li>
                    </ul>
                </div>
                <div class="accordion-col">
                    <strong>Key Limitation</strong>
                    <p id="acc-limitation">Does NOT cover your own vehicle damage at all</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Key Update Notice Banner -->
    <div class="notice-banner">
        <span class="icon">ℹ️</span>
        <p><strong>Key Update:</strong> Since 2019, all new vehicles are sold with a bundled policy (TP + OD). You can still choose separate policies for existing vehicles[cite: 1].</p>
    </div>

    <!-- Real-Life Case Studies Section -->
    <section class="case-studies-section">
        <div class="case-studies-header">
            <h2>Real-Life Case Studies</h2>
            <p>Real people. Real incidents. Real lessons. These stories show how motor insurance works — and what it doesn't cover.</p>
        </div>

        <div class="case-cards-grid">
            <!-- Case 1 -->
            <article class="case-card">
                <div class="case-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/harish.jpg'); ?>" alt="Harish's Red Light">
                </div>
                <div class="case-content">
                    <h3>Harish's Red Light</h3>
                    <p>He had only Third-Party insurance. After hitting a food delivery rider, the ₹11.4 lakh claim was covered. But his own car repair cost of ₹38,000 wasn't.</p>
                    <a href="#" class="read-more">Read Full Story &rarr;</a>
                </div>
            </article>

            <!-- Case 2 -->
            <article class="case-card">
                <div class="case-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/kavitha.jpg'); ?>" alt="Kavitha's Car Accident">
                </div>
                <div class="case-content">
                    <h3>Kavitha's Car Accident</h3>
                    <p>A minor collision turned into a major expense. With only TP, her own vehicle repair cost came out of her pocket.</p>
                    <a href="#" class="read-more">Read Full Story &rarr;</a>
                </div>
            </article>

            <!-- Case 3 -->
            <article class="case-card">
                <div class="case-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/rohan.jpg'); ?>" alt="Rohan's Two-Wheeler">
                </div>
                <div class="case-content">
                    <h3>Rohan's Two-Wheeler</h3>
                    <p>A fall led to hospitalisation and a ₹2.8 lakh bill. His comprehensive policy covered the claim, saving his savings.</p>
                    <a href="#" class="read-more">Read Full Story &rarr;</a>
                </div>
            </article>
        </div>
    </section>
</div>

<!-- JavaScript for Tabs and Accordion -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const policyData = {
        tp: {
            title: "Third-Party Liability Insurance (TP)",
            status: "MANDATORY BY LAW",
            desc: "The legal floor. Required for every vehicle on Indian roads.",
            covers: [
                "Death of a third party caused by your vehicle — unlimited compensation as per MACT",
                "Bodily injury to a third party — medical expenses, rehabilitation, loss of income, pain and suffering",
                "Third-party property damage — up to ₹7.5 lakh",
                "Legal defence costs — insurer appoints a lawyer",
                "Compensation ordered by court — full amount to injured third party",
                "Long-Term TP (New Vehicles) — 3 yrs (cars) / 5 yrs (two-wheelers)"
            ],
            notCovers: [
                "Damage to your own vehicle",
                "Your own medical expenses or injuries",
                "Passengers in your vehicle",
                "Natural disasters affecting your vehicle",
                "Theft of your vehicle",
                "Your own financial loss of any kind"
            ],
            accType: "Third-Party Only (TP)",
            accCovers: [
                "Bodily injury / death / property damage to third parties.",
                "Long-term TP (applicable for new vehicles - 3 yrs cars / 5 yrs two-wheelers)"
            ],
            accWho: [
                "Old vehicles with low market value; legal minimum only",
                "All new vehicles — standard at dealerships since 2018"
            ],
            accLimitation: "Does NOT cover your own vehicle damage at all"
        },
        od: {
            title: "Own Damage Insurance (OD)",
            status: "OPTIONAL — BUT ONLY VALID WITH ACTIVE TP",
            desc: "Protection for your vehicle — when others are not the problem.",
            covers: [
                "Accidental damage — collision, overturning, skidding, rollover",
                "Fire and explosion — including self-ignition and lightning",
                "Theft — insurer pays Insured Declared Value (IDV)",
                "Natural calamities — floods, earthquakes, cyclones, landslides",
                "Man-made events — riots, strikes, malicious damage",
                "Damage during transit by road, rail, air, or waterway"
            ],
            notCovers: [
                "Third-party injury, death, or property damage",
                "Your own medical expenses or personal injuries as driver",
                "Mechanical or electrical breakdown not caused by an insured event",
                "Normal wear and tear — tyres, brakes, batteries ageing naturally",
                "Consequential damage (e.g., starting a flooded engine)",
                "Drunk driving or driving without a valid licence"
            ],
            accType: "Own Damage Only (OD)",
            accCovers: [
                "Damage to your own vehicle — accident, fire, flood, theft"
            ],
            accWho: [
                "Vehicles with valid TP from another insurer"
            ],
            accLimitation: "Cannot stand alone legally — must be paired with valid TP. Subject to depreciation unless Zero Dep add-on taken."
        },
        comp: {
            title: "Comprehensive (Package) Insurance",
            status: "THE RECOMMENDED STANDARD",
            desc: "TP + OD + PA — all in one policy. 360° protection.",
            covers: [
                "Everything Third-Party Liability covers",
                "Everything Own Damage covers",
                "Owner-Driver Personal Accident (PA) Cover — ₹15 lakh mandatory cover",
                "Passenger PA Cover (through optional add-on)",
                "Add-on enhancements — Zero Dep, Engine Protection, RSA, NCB Protector",
                "Pan-India validity and full legal defence support"
            ],
            notCovers: [
                "Mechanical or electrical breakdown from normal use or age",
                "Wear and tear of tyres, clutch, and brakes",
                "Driving under influence of alcohol or drugs",
                "Driving without a valid licence",
                "Commercial use of a personally-insured vehicle",
                "Undeclared vehicle modifications or structural changes"
            ],
            accType: "Comprehensive (Package)",
            accCovers: [
                "TP + OD + Compulsory PA (₹15 lakh) — all in one"
            ],
            accWho: [
                "Any vehicle with significant value"
            ],
            accLimitation: "TP and OD can have different expiry dates; OD renewed annually"
        }
    };

    const tabs = document.querySelectorAll('#motor-insurance-section .tab-btn');
    const titleEl = document.getElementById('policy-title');
    const statusEl = document.getElementById('policy-status');
    const descEl = document.getElementById('policy-desc');
    const coversEl = document.getElementById('policy-covers');
    const notCoversEl = document.getElementById('policy-not-covers');

    // Accordion elements
    const accToggle = document.getElementById('accordion-toggle');
    const accPanel = document.getElementById('policy-accordion-content');
    const accType = document.getElementById('acc-type');
    const accCovers = document.getElementById('acc-covers');
    const accWho = document.getElementById('acc-who');
    const accLimitation = document.getElementById('acc-limitation');

    let currentPolicyKey = 'tp';

    // Toggle Accordion functionality
    accToggle.addEventListener('click', function() {
        const isExpanded = accToggle.getAttribute('aria-expanded') === 'true';
        accToggle.setAttribute('aria-expanded', !isExpanded);
        accPanel.classList.toggle('open');
        this.querySelector('.arrow-icon').textContent = isExpanded ? '↓' : '↑';
    });

    // Tab Switching functionality
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            tabs.forEach(t => {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });

            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');

            currentPolicyKey = this.getAttribute('data-policy');
            const data = policyData[currentPolicyKey];

            if (data) {
                titleEl.textContent = data.title;
                statusEl.textContent = data.status;
                descEl.textContent = data.desc;

                coversEl.innerHTML = '';
                data.covers.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    coversEl.appendChild(li);
                });

                notCoversEl.innerHTML = '';
                data.notCovers.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    notCoversEl.appendChild(li);
                });

                // Update accordion content dynamically based on selected tab
                accType.textContent = data.accType;
                
                accCovers.innerHTML = '';
                data.accCovers.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    accCovers.appendChild(li);
                });

                accWho.innerHTML = '';
                data.accWho.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    accWho.appendChild(li);
                });

                accLimitation.textContent = data.accLimitation;
            }
        });
    });
});
</script>