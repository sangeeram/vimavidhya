<?php
/**
 * ============================================================
 * VIMA VIDYA
 * PROPERTY INSURANCE MASTER COMPONENT
 * ============================================================
 *
 * Includes:
 * - Homeowners
 * - Tenants
 * - Small Businesses
 * - Shopkeeper's Package Policy
 *
 * Case studies are separated from the main content so they
 * can be presented as premium editorial case-study cards.
 */

// ============================================================
// PROPERTY INSURANCE DATA
// ============================================================

$property_master_data = [

    // ========================================================
    // HOMEOWNERS
    // ========================================================

    'homeowners' => [

        'tab_title' => 'Homeowners',

        'tab_icon' => '
            <svg width="16" height="16"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2">
                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
        ',

        'card_title' => 'Homeowners — Why Your Home Needs a Shield',

        'badge' => 'Homeowners',

        'html_content' => '

            <p>
                Every Indian dream begins with a home. Decades of sacrifice,
                years of EMI payments, a lifetime of savings — all compressed
                into four walls and a roof. Yet fewer than 1 in 10 Indian
                homes have any form of property insurance.
            </p>

            <p>
                We insure our cars because the law requires it. We insure our
                lives because banks insist on it. And then we walk into our
                homes, our single largest asset, and leave them completely
                unprotected.
            </p>

            <p>
                As a homeowner, you have two categories of assets requiring separate coverage — home and its contents. Property insurance covers them besides giving other benefits.
            </p>

            <h4>Asset Coverage Breakdown</h4>

            <ul>
                <li>
                    <strong>Building / Structure:</strong>
                    Walls, roof, floors, staircases, fixtures,
                    plumbing, electrical wiring, compound walls, outhouses. Covered under a
                    Building Policy.
                </li>

                <li>
                    <strong>Contents:</strong>
                    All movable belongings inside — furniture,
                    appliances, electronics, jewellery, clothing. Requires a separate Contents
                    Policy or Comprehensive Policy.
                </li>

                <li>
                    <strong>Add-ons:</strong>
                    Loss of Rent, Alternate Accommodation, EEI,
                    Portable Equipment, Specified Items, Escalation Clause.
                </li>

                <li>
                     <strong>Landlord\'s Insurance:</strong>
                    If you rent out the property it covers loss of
                    rent, structural damage, and liability arising from
                    tenant-related events.
                </li>

                <li>
                    <strong>Third-Party Liability:</strong>
                    If a visitor is injured on your property due to
                    structural issues, it covers medical and legal costs.
                </li>
            </ul>
        ',

        // ====================================================
        // CASE STUDY
        // ====================================================

        'case_study' => [

            'eyebrow' => 'CASE STUDY',

            'title' => 'Priya’s Partial Policy',

            'subtitle' => 'The Mistake That Cost Lakhs',

            'person' => 'Priya, 45',

            'location' => 'Bhopal',

            'role' => 'Government Officer',

            'image' => get_template_directory_uri() .
                '/assets/images/typesofinsurance/propertyinsurance/understand/Priya Partial Policy.png',

            'story' => '
                Priya, 45, a government officer in Bhopal, had insured her house for ₹55 lakhs and felt completely secure. Then a kitchen short circuit caused a fire that destroyed her modular kitchen (₹3.5 lakhs), refrigerator (₹55,000), and dining set (₹80,000) and also damaged the kitchen walls.
The wall damage was covered and the building policy paid ₹4 lakhs for the structure. But her modular kitchen, refrigerator, and dining set were rejected. She had a building-only policy. She had not added cover for the contents.
            ',

            'stats' => [

                [
                    'label' => 'Building Policy',
                    'value' => '₹55 lakhs',
                    'type' => 'covered',
                ],

                [
                    'label' => 'Wall Damage',
                    'value' => '₹4 lakhs',
                    'type' => 'covered',
                ],

                [
                    'label' => 'Modular Kitchen',
                    'value' => '₹3.5 lakhs',
                    'type' => 'loss',
                ],

                [
                    'label' => 'Refrigerator',
                    'value' => '₹55,000',
                    'type' => 'loss',
                ],

                [
                    'label' => 'Dining Set',
                    'value' => '₹80,000',
                    'type' => 'loss',
                ],
            ],

            'takeaway' =>
                'A building policy protects the shell. Your life inside the shell needs its own protection.',
        ],
    ],


    // ========================================================
    // TENANTS
    // ========================================================

    'tenants' => [

        'tab_title' => 'The Tenant’s World',

        'tab_icon' => '
            <svg width="16" height="16"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2">
                <circle cx="7.5" cy="15.5" r="5.5"/>
                <path d="m21 2-9.6 9.6"/>
                <path d="m15.5 7.5 3 3"/>
            </svg>
        ',

        'card_title' =>
            'The Tenant’s World — Often Overlooked, Always Vulnerable',

        'badge' => 'Tenants',

        'html_content' => '

            <p>
                One of the most persistent myths in India is that property
                insurance is only for people who own homes. Tens of millions
                of Indians live in rented homes. Almost none carry
                property insurance. The common justification:
                <em>“It’s not my house.”</em>
            </p>

            <p>
                Consider what you bring into a rented home:
            </p>

            <ul>

                <li>
                    Television, laptop, tablet, mobile devices
                </li>

                <li>
                    Refrigerator, washing machine, microwave (if the flat is unfurnished)
                </li>

                <li>
                    Furniture, clothing, jewellery, personal effects
                </li>

                <li>
                    Any improvements you make — custom woodwork, light fixtures, curtains
                </li>

            </ul>

            <p>
                Whether you own the four walls or simply live within them, you have assets worth protecting. Tenant-specific policies exist precisely to protect renters\' personal belongings against theft, fire, and other risks.
            </p>

            <h4>What a Tenant Needs</h4>

            <ul>

                <li>
                    <strong>Contents Insurance:</strong>
                    Covers all your personal belongings in the rented space — furniture, electronics, jewellery, clothing.
                </li>

                <li>
                    <strong>Tenant’s Liability Cover:</strong>
                    If your negligence causes damage to the landlord\'s property, it covers the landlord\'s claim against you.
                </li>

                <li>
                    <strong>Portable Equipment Cover:</strong>
                    For laptops, cameras, phones — covering them inside and outside the rented home.
                </li>

                <li>
                    <strong>EEI Add-On (Electronic Equipment Insurance):</strong>
                    For electronic equipment breakdown — particularly valuable if you own expensive home-office or audio-visual equipment.
                </li>

            </ul>
        ',

        // ====================================================
        // CASE STUDY
        // ====================================================

        'case_study' => [

            'eyebrow' => 'CASE STUDY',

            'title' => 'Riya’s Rented Reality',

            'subtitle' => 'The Invisible Risk',

            'person' => 'Riya, 27',

            'location' => 'Mumbai',

            'role' => 'Marketing Professional',

            'image' => get_template_directory_uri() .
                '/assets/images/typesofinsurance/propertyinsurance/understand/Riya Rented Reality.png',

            'story' => '
                Riya, 27, a marketing professional in Mumbai, lived in a rented furnished flat in Andheri. While she was away for a long weekend, the flat was burgled. Her laptop (₹90,000), camera (₹55,000), gold earrings (₹40,000), and portable speakers were taken.
She called her landlord. The landlord\'s policy covered the building. It did not cover Riya\'s belongings. She paid ₹2 lakhs out of her savings.
For under ₹4,000 a year, a tenant\'s contents policy would have covered her. She learned this at the most expensive possible moment.
            ',

            'stats' => [

                [
                    'label' => 'Total Loss',
                    'value' => '₹2 lakhs',
                    'type' => 'loss',
                ],

                [
                    'label' => 'Electronics',
                    'value' => 'Lost',
                    'type' => 'loss',
                ],

                [
                    'label' => 'Jewellery',
                    'value' => 'Lost',
                    'type' => 'loss',
                ],

                [
                    'label' => 'Landlord Policy',
                    'value' => 'Building only',
                    'type' => 'neutral',
                ],

                [
                    'label' => 'Tenant Contents',
                    'value' => 'Not covered',
                    'type' => 'loss',
                ],
            ],

            'takeaway' =>
                'If you are a tenant, your landlord\'s insurance policy protects the landlord\'s building. It does not protect you. Your belongings are your responsibility — and a tenant\'s contents policy costs a fraction of what a single theft or fire could take from you.',
        ],
    ],


    // ========================================================
    // SMALL BUSINESSES
    // ========================================================

    'small-businesses' => [

        'tab_title' => 'Small Businesses & Shops',

        'tab_icon' => '
            <svg width="16" height="16"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2">
                <rect width="20" height="14"
                    x="2" y="7"
                    rx="2" ry="2"/>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
            </svg>
        ',

        'card_title' =>
            'Small Businesses & Shops — The Livelihood Left Unprotected',

        'badge' => 'Small Businesses',

        'html_content' => '

            <p>
                Across India\'s streets and markets, millions of small businesses operate every day — the kirana store that opens at 6 am, the tailoring shop that stays late, the mobile repair counter, the medical store, the small restaurant, the stationery and book shop near the school gate. These businesses share something important with homeowners and tenants: their physical premises, their stock, and their equipment are as exposed to fire, flood, theft, and cyclone as any home. But unlike homes, a small business loss does not just damage property — it stops income. Immediately. Completely.
                Yet the vast majority of India\'s small and micro businesses operate without any property insurance. The reasons are familiar: \'Nothing has happened so far.\' \'It is too expensive.\' \'I don\'t know how it works.\' 
                Every one of these reasons is the same one homeowners give — and everyone is wrong for the same reasons.
            </p>

            <h4>🏪 The Small Business Owner\'s Reality</h4>

            <p>
                Your shop is not just a building. It is your stock, your livelihood, your family\'s income, and often years of personal investment compressed into a single premises. A fire that destroys a kirana store\'s festival inventory does not just cost ₹3–5 lakh in stock — it means zero income for weeks during the highest-earning season. An electrical surge that burns out a workshop\'s machinery does not just cost replacement value — it shuts the business until the machine is replaced. Flood damage to a ground-floor medical store does not just ruin medicines and furniture — it destroys the ability to serve customers and earn revenue. Property insurance for small businesses is not a cost. It is the financial difference between a crisis that you recover from and one that closes you down.
            </p>

            <h4>What a Small Business Owner Can Insure</h4>

            <ul>

                <li>
                    <strong>Building / Structure (if owned):</strong>
                    Walls, roof, shutters, flooring, fitted counters, wiring — the physical structure of the commercial premises.
                    <br><em>Why it matters:</em> If you own the premises, a single fire or cyclone can require full rebuilding. Without insurance, this cost is entirely yours.
                </li>

                <li>
                    <strong>Stock / Merchandise:</strong>
                    Raw materials, finished goods, goods in process, merchandise on the shelves — whatever you buy to sell.
                    <br><em>Why it matters:</em> Stock is your working capital on the shelf. Losing it means losing the investment you made to buy it — plus the revenue it would have generated.
                </li>

                <li>
                    <strong>Trade Equipment & Machinery:</strong>
                    Refrigerators, sewing machines, grinders, lathe machines, billing computers, printers, medical equipment, tools of trade.
                    <br><em>Why it matters:</em> Your equipment is your ability to do business. Its loss means shutdown until replacement — at full current market cost.
                </li>

                <li>
                    <strong>Fixtures & Fittings:</strong>
                    Shelving, display racks, billing counters, false ceilings, signage, interior woodwork.
                    <br><em>Why it matters:</em> Fitted elements are expensive to replace and often overlooked — but they are what makes the shop functional.
                </li>

                <li>
                    <strong>Cash on Premises:</strong>
                    Physical cash in the cash drawer, in the safe, or during transit.
                    <br><em>Why it matters:</em> Cash theft is one of the most common losses for small businesses. Most policies cover cash up to a defined limit.
                </li>

                <li>
                    <strong>Business Interruption / Loss of Profit:</strong>
                    Income lost during the period your business cannot operate following a covered event.
                    <br><em>Why it matters:</em> This is arguably the most important cover for a small business. The rebuilding cost is one loss. The income you cannot earn while rebuilding is a second, equally real loss.
                </li>

                <li>
                    <strong>Public / Third-Party Liability:</strong>
                    Legal liability if a customer or visitor is injured on your premises — or if your business activity causes damage to a neighbour\'s property.
                    <br><em>Why it matters:</em> A customer who slips on your wet floor and files a legal claim can cost far more than a theft or fire. Liability cover protects the business from legal and compensation costs.
                </li>

                <li>
                    <strong>Fidelity / Employee Dishonesty:</strong>
                    Loss caused by an employee\'s dishonest act — theft of cash, stock, or assets.
                    <br><em>Why it matters:</em> For businesses with staff handling cash or stock, employee dishonesty is a real and frequently underestimated risk.
                </li>

            </ul>
        ',

        // ====================================================
        // CASE STUDY
        // ====================================================

        'case_study' => null
    ],


    // ========================================================
    // SHOPKEEPER PACKAGE POLICY
    // ========================================================

    'package-policy' => [

        'tab_title' => 'Shopkeeper’s Package Policy',

        'tab_icon' => '
            <svg width="16" height="16"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
            </svg>
        ',

        'card_title' =>
            'The Shopkeeper’s Package Policy — What It Is and Why It Matters',

        'badge' => 'Package Policy',

        'html_content' => '

            <p>
                The Shopkeeper’s Package Policy is an all-in-one commercial
                property insurance product specifically designed for small
                retail and service businesses in India, bundling multiple
                covers into a single affordable policy.
            </p>

            <h4>Covers Bundled in Shopkeeper\'s Package</h4>

            <ul>

                <li>
                    <strong>Standard Fire & Special Perils (SFSP):</strong>
                    Fire, explosion, lightning, flood, cyclone, earthquake, riot, strike, malicious damage — for the building and/or stock and equipment.
                </li>

                <li>
                    <strong>Burglary / Housebreaking Cover:</strong>
                    Theft of stock, cash, and equipment involving forcible entry — the most common risk for most small shops.
                </li>

                <li>
                    <strong>Cash Cover (in safe + in transit):</strong>
                    Cash stolen from the premises (safe or counter) and cash in transit between your shop and the bank.
                </li>

                <li>
                    <strong>Plate Glass Cover:</strong>
                    Breakage of glass shop fronts, display windows, countertops — a common and expensive small-business loss.
                </li>

                <li>
                    <strong>Public Liability:</strong>
                    Compensation to a customer or third party injured on your premises or due to your business activity.
                </li>

                <li>
                    <strong>Personal Accident Cover (owner):</strong>
                    Compensation to the owner if injured or killed in an accident — recognising that the owner\'s capacity to work is the business\'s engine.
                </li>

                <li>
                    <strong>Fidelity Guarantee:</strong>
                    Loss caused by dishonesty of an employee — theft of cash, stock, or assets.
                </li>

                <li>
                    <strong>Electronic Equipment Insurance (EEI):</strong>
                    Breakdown of computers, billing machines, refrigeration units, and other electronic equipment — beyond standard fire cover.
                </li>

            </ul>

            <h4>📐 What a Shopkeeper\'s Package Policy Typically Costs</h4>

            <p>
                These figures are indicative and vary by insurer, location, nature of business, and sum insured selected.
            </p>

            <ul>
                <li>
                    <strong>Kirana / grocery store, Tier-2 city:</strong> Stock ₹5L + equipment ₹1L + cash ₹50K → Approx. ₹3,500–₹6,000/year
                </li>
                <li>
                    <strong>Tailoring / textile shop, small town:</strong> Stock ₹3L + machinery ₹1.5L → Approx. ₹2,500–₹4,500/year
                </li>
                <li>
                    <strong>Medical / pharmacy store, metro:</strong> Stock ₹8L + equipment ₹1.5L + public liability → Approx. ₹6,000–₹10,000/year
                </li>
                <li>
                    <strong>Small restaurant / café:</strong> Structure ₹15L + kitchen equipment ₹3L + stock ₹1L → Approx. ₹8,000–₹14,000/year
                </li>
            </ul>

            <p>
                For most small businesses, the annual premium is less than 2–3 days of revenue. The potential loss from a single fire, flood, or burglary is weeks or months of revenue.
            </p>
        ',

        'case_study' => [

            'eyebrow' => 'CASE STUDY',

            'title' => 'Murugan’s Kirana',

            'subtitle' => 'The Festival Fire That Should Not Have Ruined Everything',

            'person' => 'Murugan, 44',

            'location' => 'Coimbatore',

            'role' => 'Kirana Store Owner',

            'image' => get_template_directory_uri() .
                '/assets/images/typesofinsurance/propertyinsurance/understand/Murugan Kirana.png',

            'story' => '
                Murugan, 44, ran a well-stocked kirana store in a busy residential colony in Coimbatore. He had been building it for eleven years. Every October, he stocked heavily for Diwali — an investment of nearly ₹4 lakh in premium products: dry fruits, sweets, packaged goods, premium oils, cleaning materials. On the night of October 28, an electrical short circuit in the adjacent cycle repair shop started a fire that spread quickly through the shared wall. By the time the fire brigade arrived, Murugan\'s store had lost nearly everything. Total loss: stock ₹3.8 lakh, refrigeration unit ₹78,000, billing computer ₹32,000, shelving and fitting ₹55,000, glass display counter ₹18,000. He was shut for four weeks while the interior was rebuilt by his landlord. His total loss — including four weeks of zero income — exceeded ₹7 lakh. Murugan had no insurance of any kind. He had always assumed that nothing would happen, that the shop was too small for insurance to be worthwhile, and that the premium would eat into thin margins. He borrowed ₹5 lakh from two relatives and restocked at a reduced scale. He missed the Diwali season entirely. Two years later, he was still repaying the borrowed amount.

                A Shopkeeper\'s Package Policy covering his stock at ₹5 lakh, equipment at ₹1.5 lakh, and cash at ₹50,000 would have cost him approximately ₹4,800 per year — ₹400 per month, less than the cost of a half kg bag of premium dry fruits. The policy would have covered his stock loss, his equipment, and a partial business interruption payout for the four-week closure.
            ',

            'stats' => [

                [
                    'label' => 'Total Loss',
                    'value' => '₹7+ lakhs',
                    'type' => 'loss',
                ],

                [
                    'label' => 'Stock',
                    'value' => 'Destroyed',
                    'type' => 'loss',
                ],

                [
                    'label' => 'Equipment',
                    'value' => 'Damaged',
                    'type' => 'loss',
                ],

                [
                    'label' => 'Income Loss',
                    'value' => '4 weeks',
                    'type' => 'loss',
                ],

                [
                    'label' => 'Package Policy',
                    'value' => 'Under ₹5K/year',
                    'type' => 'covered',
                ],
            ],

            'takeaway' =>
                'A shop is not just its walls. It is the stock, the tools, and the income they create. For Murugan, the ₹7 lakh loss was not just property damage — it was a blow to his livelihood. For small businesses, property insurance costs far less than the damage one bad night can cause. The premium is not an expense; it is the price of protecting eleven years of hard work.',
        ],
    ],
];


// ============================================================
// SECTION
// ============================================================

?>


<section class="property-insurance-master-section" id="who-can-buy">

    <div class="master-container">


        <!-- ==================================================
             HEADER
        ================================================== -->

        <header class="whocanbuy-section-header">

            <!-- <span class="step-badge">
                01.4 Who Can Buy?
            </span> -->

            <h2 class="section-title">
                Who Can Buy a Property Insurance Policy
            </h2>

            <p class="section-lead">
                Property insurance in India is available to homeowners, tenants, and small business owners. There is no
                age restriction — anyone who has an insurable interest in a property or its contents can buy one. The
                insurable interest simply means you have a direct financial stake in the property or its contents.
            </p>


            <!-- ==================================================
                 CATEGORY TABS
            ================================================== -->

            <div class="category-tabs" role="tablist" aria-label="Property insurance categories">

                <?php
                $i = 0;

                foreach ($property_master_data as $key => $tab):
                ?>

                <button type="button" role="tab" class="tab-btn <?= $i === 0 ? 'is-active' : ''; ?>"
                    data-target="<?= esc_attr($key); ?>" aria-selected="<?= $i === 0 ? 'true' : 'false'; ?>"
                    aria-controls="pane-<?= esc_attr($key); ?>" onclick="switchMasterTab('<?= esc_js($key); ?>')">

                    <span class="tab-icon">
                        <?= $tab['tab_icon']; ?>
                    </span>

                    <span class="tab-name">
                        <?= esc_html($tab['tab_title']); ?>
                    </span>

                </button>

                <?php
                    $i++;
                endforeach;
                ?>

            </div>

        </header>


        <!-- ==================================================
             CONTENT
        ================================================== -->

        <div class="master-content-grid">


            <?php
            $i = 0;

            foreach ($property_master_data as $key => $tab):
            ?>

            <div id="pane-<?= esc_attr($key); ?>" class="property-content-panel <?= $i === 0 ? 'is-active' : ''; ?>"
                data-pane-id="<?= esc_attr($key); ?>" role="tabpanel" aria-hidden="<?= $i === 0 ? 'false' : 'true'; ?>">


                <!-- ======================================
                            MAIN CONTENT
                    ======================================= -->

                <div class="info-pane">

                    <!-- <span class="pane-badge">
                        <?= esc_html($tab['badge']); ?>
                    </span> -->

                    <h3 class="pane-title">
                        <?= esc_html($tab['card_title']); ?>
                    </h3>

                    <div class="pane-body-text">

                        <?= $tab['html_content']; ?>

                    </div>

                </div>


                <!-- ======================================
                            CASE STUDY
                    ======================================= -->

                <?php if (!empty($tab['case_study'])): ?>

                <?php
                        $case = $tab['case_study'];
                        ?>

                <article class="property-case-study">


                    <!-- =================================
                                LEFT SIDE
                        ================================== -->

                    <div class="case-study-visual">


                        <!-- IMAGE -->

                        <div class="case-study-image-wrap">

                            <img src="<?= esc_url($case['image']); ?>" alt="<?= esc_attr($case['title']); ?>"
                                class="case-study-image" loading="lazy">

                            <div class="case-study-image-overlay"></div>


                            <!-- Person -->

                            <div class="case-study-person">

                                <span class="person-name">
                                    <?= esc_html($case['person']); ?>
                                </span>

                                <span class="person-meta">

                                    <?= esc_html($case['location']); ?>

                                    <span class="person-separator">
                                        •
                                    </span>

                                    <?= esc_html($case['role']); ?>

                                </span>

                            </div>

                        </div>


                        <!-- =================================
                                        FINANCIAL CARDS
                                ================================== -->

                        <div class="case-study-stats">

                            <?php foreach ($case['stats'] as $stat): ?>

                            <div class="case-stat <?= esc_attr($stat['type']); ?>">

                                <span class="case-stat-label">
                                    <?= esc_html($stat['label']); ?>
                                </span>

                                <strong class="case-stat-value">
                                    <?= esc_html($stat['value']); ?>
                                </strong>

                            </div>

                            <?php endforeach; ?>

                        </div>


                        <!-- =================================
                                        TAKEAWAY
                                ================================== -->

                        <div class="case-study-takeaway">

                            <span class="takeaway-icon">
                                !
                            </span>

                            <div class="takeaway-content">

                                <span class="takeaway-label">
                                    Takeaway
                                </span>

                                <p>
                                    <?= esc_html($case['takeaway']); ?>
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- =================================
                                RIGHT SIDE STORY
                        ================================== -->

                    <div class="case-study-story">

                        <span class="case-study-eyebrow">
                            <?= esc_html($case['eyebrow']); ?>
                        </span>

                        <h4 class="case-study-title">
                            <?= esc_html($case['title']); ?>
                        </h4>

                        <h5 class="case-study-subtitle">
                            <?= esc_html($case['subtitle']); ?>
                        </h5>

                        <div class="case-study-divider"></div>

                        <p class="case-study-description">
                            <?= esc_html($case['story']); ?>
                        </p>


                        <!-- Context -->

                        <div class="case-study-context">

                            <span>
                                <?= esc_html($case['person']); ?>
                            </span>

                            <span>
                                <?= esc_html($case['location']); ?>
                            </span>

                        </div>

                    </div>


                </article>

                <?php endif; ?>


            </div>

            <?php
                $i++;
            endforeach;
            ?>


        </div>

    </div>

</section>


<!-- ==========================================================
    TAB JAVASCRIPT
=========================================================== -->

<script>
function switchMasterTab(targetKey) {

    const section =
        document.querySelector(
            '.property-insurance-master-section'
        );

    if (!section) {
        return;
    }


    // --------------------------------------------
    // BUTTONS
    // --------------------------------------------

    section
        .querySelectorAll('.tab-btn')
        .forEach(function(button) {

            const isActive =
                button.getAttribute('data-target') === targetKey;

            button.classList.toggle(
                'is-active',
                isActive
            );

            button.setAttribute(
                'aria-selected',
                isActive ? 'true' : 'false'
            );

        });


    // --------------------------------------------
    // CONTENT PANELS
    // --------------------------------------------

    section
        .querySelectorAll('.property-content-panel')
        .forEach(function(panel) {

            const isActive =
                panel.getAttribute('data-pane-id') === targetKey;

            panel.classList.toggle(
                'is-active',
                isActive
            );

            panel.setAttribute(
                'aria-hidden',
                isActive ? 'false' : 'true'
            );

        });

}
</script>