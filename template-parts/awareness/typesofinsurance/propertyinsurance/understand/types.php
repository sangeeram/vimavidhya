<?php

$who_can_buy_data = [

    // =========================================================
    // 01 — HOMEOWNERS
    // =========================================================

    'homeowners' => [

        'tab_title' => 'Homeowners — Why Your Home Needs a Shield',

        'icon' => '
            <svg width="18" height="18" fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 0 2 2H5a2 2 0 0 1-2-2z"/>
                <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
        ',

        'description' =>
            'Every Indian dream begins with a home. Decades of sacrifice, years of EMI payments, a lifetime of savings — all compressed into four walls and a roof.

Yet fewer than 1 in 10 Indian homes have any form of property insurance.

We insure our cars because the law requires it. We insure our lives because banks insist on it. And then we walk into our homes, our single largest asset, and leave them completely unprotected.

As a homeowner, you have two categories of assets requiring separate coverage- home and its contents. Property insurance covers them besides giving other benefits.
',

        'items' => [

            [
                'title' => 'Building / Structure',
                'desc' => 'Walls, roof, floors, staircases, fixtures, plumbing, electrical wiring, compound walls, outhouses. Covered under a Building Policy.',
                'tags' => ['Walls', 'Roof', 'Wiring']
            ],

            [
                'title' => 'Contents',
                'desc' => 'All movable belongings inside — furniture, appliances, electronics, jewellery, clothing. Requires a separate Contents Policy or Comprehensive Policy.',
                'tags' => ['Furniture', 'Appliances', 'Jewellery']
            ],

            [
                'title' => 'Add-ons',
                'desc' => 'Loss of Rent, Alternate Accommodation, EEI, Portable Equipment, Specified Items, Escalation Clause.',
                'tags' => ['Loss of Rent', 'EEI', 'Portable Equipment']
            ],

            [
                'title' => "Landlord's Insurance",
                'desc' => 'If you rent out the property it covers loss of rent, structural damage, and liability arising from tenant-related events.',
                'tags' => ['Loss of Rent', 'Structural Damage', 'Liability']
            ],

            [
                'title' => 'Third-Party Liability',
                'desc' => 'If a visitor is injured on your property due to structural issues, it covers medical and legal costs.',
                'tags' => ['Medical', 'Legal', 'Third Party']
            ]

        ],

        'case_story' => [

            'title' =>
                '📖 Priya’s Partial Policy — The Mistake That Cost Lakhs',
                

            'body' =>
                'Priya, 45, a government officer in Bhopal, had insured her house for ₹55 lakhs and felt completely secure. Then a kitchen short circuit caused a fire that destroyed her modular kitchen (₹3.5 lakhs), refrigerator (₹55,000), and dining set (₹80,000) and also damaged the kitchen walls.',

            'body_2' =>
                'The wall damage was covered and the building policy paid ₹4 lakhs for the structure. But her modular kitchen, refrigerator, and dining set were rejected. She had a building-only policy. She had not added cover for the contents.',

            'takeaway' =>
                'Takeaway - A building policy protects the shell. Your life inside the shell needs its own protection.',

            'cost' => ''
        ]
    ],


    // =========================================================
    // 02 — TENANTS
    // =========================================================

    'tenants' => [

        'tab_title' => ' The Tenant\'s World — Often Overlooked, Always Vulnerable',

        'icon' => '
            <svg width="18" height="18" fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
        ',

        'description' =>
            'One of the most persistent myths in India is that property insurance is only for people who own homes. Tens of millions of Indians live in rented homes. Almost none carry property insurance. The common justification: \'It\'s not my house.\' Consider what you bring into a rented home:

• Television, laptop, tablet, mobile devices

• Refrigerator, washing machine, microwave (if the flat is unfurnished)

• Furniture, clothing, jewellery, personal effects

• Any improvements you make — custom woodwork, light fixtures, curtains

Whether you own the four walls or simply live within them, you have assets worth protecting. Tenant-specific policies exist precisely to protect renters\' personal belongings against theft, fire, and other risks.
',

        'items' => [

            [
                'title' => 'Contents Insurance',
                'desc' => 'Covers all your personal belongings in the rented space — furniture, electronics, jewellery, clothing.',
                'tags' => ['Furniture', 'Electronics', 'Jewellery']
            ],

            [
                'title' => "Tenant's Liability Cover",
                'desc' => 'If your negligence causes damage to the landlord\'s property, it covers the landlord\'s claim against you.',
                'tags' => ['Accidental Damage', 'Legal Claims']
            ],

            [
                'title' => 'Portable Equipment Cover',
                'desc' => 'For laptops, cameras, phones — covering them inside and outside the rented home.',
                'tags' => ['Laptops', 'Cameras', 'Phones']
            ],

            [
                'title' => 'EEI Add-On (Electronic Equipment Insurance)',
                'desc' => 'For electronic equipment breakdown — particularly valuable if you own expensive home-office or audio-visual equipment.',
                'tags' => ['Home Office', 'Audio-Visual', 'EEI']
            ]

        ],

        'case_story' => [

            'title' =>
                '📖 Riya’s Rented Reality — The Invisible Risk',

            'body' =>
                'Riya, 27, a marketing professional in Mumbai, lived in a rented furnished flat in Andheri. While she was away for a long weekend, the flat was burgled. Her laptop (₹90,000), camera (₹55,000), gold earrings (₹40,000), and portable speakers were taken.',

            'body_2' =>
                'She called her landlord. The landlord\'s policy covered the building. It did not cover Riya\'s belongings. She paid ₹2 lakhs out of her savings.',

            'policy_cost' =>
                'For under ₹4,000 a year, a tenant\'s contents policy would have covered her. She learned this at the most expensive possible moment.',

            'takeaway' =>
                'Takeaway - If you are a tenant, your landlord\'s insurance policy protects the landlord\'s building. It does not protect you. Your belongings are your responsibility — and a tenant\'s contents policy costs a fraction of what a single theft or fire could take from you.',

            'cost' =>
                'Under ₹4,000/year'
        ]
    ],


    // =========================================================
    // 03 — SMALL BUSINESSES & SHOPS
    // =========================================================

    'small-businesses' => [

        'tab_title' => 'Small Businesses & Shops — The Livelihood Left Unprotected',

        'icon' => '
            <svg width="18" height="18" fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24">
                <rect x="2" y="7" width="20" height="14" rx="2"/>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
            </svg>
        ',

        'description' =>
            'Across India\'s streets and markets, millions of small businesses operate every day — the kirana store that opens at 6 am, the tailoring shop that stays late, the mobile repair counter, the medical store, the small restaurant, the stationery and book shop near the school gate.

These businesses share something important with homeowners and tenants: their physical premises, their stock, and their equipment are as exposed to fire, flood, theft, and cyclone as any home. But unlike homes, a small business loss does not just damage property — it stops income. Immediately. Completely.

Yet the vast majority of India\'s small and micro businesses operate without any property insurance. The reasons are familiar: \'Nothing has happened so far.\' \'It is too expensive.\' \'I don\'t know how it works.\'

Every one of these reasons is the same one homeowners give — and everyone is wrong for the same reasons.
',


        // ---------------------------------------------------------
        // SMALL BUSINESS OWNER'S REALITY
        // ---------------------------------------------------------

        'reality_section' => [

            'title' => '🏪 The Small Business Owner\'s Reality',

            'description' =>
                'Your shop is not just a building. It is your stock, your livelihood, your family\'s income, and often years of personal investment compressed into a single premises. A fire that destroys a kirana store\'s festival inventory does not just cost ₹3–5 lakh in stock — it means zero income for weeks during the highest-earning season. An electrical surge that burns out a workshop\'s machinery does not just cost replacement value — it shuts the business until the machine is replaced. Flood damage to a ground-floor medical store does not just ruin medicines and furniture — it destroys the ability to serve customers and earn revenue. Property insurance for small businesses is not a cost. It is the financial difference between a crisis that you recover from and one that closes you down.'
        ],


        // ---------------------------------------------------------
        // TABLE 1 — WHAT A SMALL BUSINESS OWNER CAN INSURE
        // THREE COLUMNS
        // ---------------------------------------------------------

        'business_insurance_table' => [

            'title' => 'What a Small Business Owner Can Insure',

            'columns' => [
                'Asset / Cover',
                'What It Protects',
                'Why It Matters for Your Business'
            ],

            'rows' => [

                [
                    'asset_cover' => 'Building / Structure (if owned)',

                    'what_it_protects' =>
                        'Walls, roof, shutters, flooring, fitted counters, wiring — the physical structure of the commercial premises.',

                    'why_it_matters' =>
                        'If you own the premises, a single fire or cyclone can require full rebuilding. Without insurance, this cost is entirely yours.'
                ],

                [
                    'asset_cover' => 'Stock / Merchandise',

                    'what_it_protects' =>
                        'Raw materials, finished goods, goods in process, merchandise on the shelves — whatever you buy to sell.',

                    'why_it_matters' =>
                        'Stock is your working capital on the shelf. Losing it means losing the investment you made to buy it — plus the revenue it would have generated.'
                ],

                [
                    'asset_cover' => 'Trade Equipment & Machinery',

                    'what_it_protects' =>
                        'Refrigerators, sewing machines, grinders, lathe machines, billing computers, printers, medical equipment, tools of trade.',

                    'why_it_matters' =>
                        'Your equipment is your ability to do business. Its loss means shutdown until replacement — at full current market cost.'
                ],

                [
                    'asset_cover' => 'Fixtures & Fittings',

                    'what_it_protects' =>
                        'Shelving, display racks, billing counters, false ceilings, signage, interior woodwork.',

                    'why_it_matters' =>
                        'Fitted elements are expensive to replace and often overlooked — but they are what makes the shop functional.'
                ],

                [
                    'asset_cover' => 'Cash on Premises',

                    'what_it_protects' =>
                        'Physical cash in the cash drawer, in the safe, or during transit.',

                    'why_it_matters' =>
                        'Cash theft is one of the most common losses for small businesses. Most policies cover cash up to a defined limit.'
                ],

                [
                    'asset_cover' => 'Business Interruption / Loss of Profit',

                    'what_it_protects' =>
                        'Income lost during the period your business cannot operate following a covered event.',

                    'why_it_matters' =>
                        'This is arguably the most important cover for a small business. The rebuilding cost is one loss. The income you cannot earn while rebuilding is a second, equally real loss.'
                ],

                [
                    'asset_cover' => 'Public / Third-Party Liability',

                    'what_it_protects' =>
                        'Legal liability if a customer or visitor is injured on your premises — or if your business activity causes damage to a neighbour\'s property.',

                    'why_it_matters' =>
                        'A customer who slips on your wet floor and files a legal claim can cost far more than a theft or fire. Liability cover protects the business from legal and compensation costs.'
                ],

                [
                    'asset_cover' => 'Fidelity / Employee Dishonesty',

                    'what_it_protects' =>
                        'Loss caused by an employee\'s dishonest act — theft of cash, stock, or assets.',

                    'why_it_matters' =>
                        'For businesses with staff handling cash or stock, employee dishonesty is a real and frequently underestimated risk.'
                ]

            ]
        ],


        // ---------------------------------------------------------
        // SHOPKEEPER'S PACKAGE POLICY
        // ---------------------------------------------------------

        'shopkeeper_package_intro' => [

            'title' =>
                'The Shopkeeper\'s Package Policy — What It Is and Why It Matters',

            'description' =>
                'The Shopkeeper\'s Package Policy is an all-in-one commercial property insurance product specifically designed for small retail and service businesses in India. It bundles multiple covers into a single, affordable policy — making it the most practical starting point for any small business owner.'
        ],


        // ---------------------------------------------------------
        // TABLE 2 — SHOPKEEPER'S PACKAGE
        // THREE COLUMNS
        // ---------------------------------------------------------

        'shopkeeper_package_table' => [

            'title' =>
                'Cover Bundled in Shopkeeper\'s Package',

            'columns' => [
                'Cover Bundled in Shopkeeper\'s Package',
                'What It Pays For',
                'Why It Matters'
            ],

            'rows' => [

                [
                    'cover' =>
                        'Standard Fire & Special Perils (SFSP)',

                    'what_it_pays_for' =>
                        'Fire, explosion, lightning, flood, cyclone, earthquake, riot, strike, malicious damage — for the building and/or stock and equipment.',

                    'why_it_matters' =>
                        ''
                ],

                [
                    'cover' =>
                        'Burglary / Housebreaking Cover',

                    'what_it_pays_for' =>
                        'Theft of stock, cash, and equipment involving forcible entry — the most common risk for most small shops.',

                    'why_it_matters' =>
                        ''
                ],

                [
                    'cover' =>
                        'Cash Cover (in safe + in transit)',

                    'what_it_pays_for' =>
                        'Cash stolen from the premises (safe or counter) and cash in transit between your shop and the bank.',

                    'why_it_matters' =>
                        ''
                ],

                [
                    'cover' =>
                        'Plate Glass Cover',

                    'what_it_pays_for' =>
                        'Breakage of glass shop fronts, display windows, countertops — a common and expensive small-business loss.',

                    'why_it_matters' =>
                        ''
                ],

                [
                    'cover' =>
                        'Public Liability',

                    'what_it_pays_for' =>
                        'Compensation to a customer or third party injured on your premises or due to your business activity.',

                    'why_it_matters' =>
                        ''
                ],

                [
                    'cover' =>
                        'Personal Accident Cover (owner)',

                    'what_it_pays_for' =>
                        'Compensation to the owner if injured or killed in an accident — recognising that the owner\'s capacity to work is the business\'s engine.',

                    'why_it_matters' =>
                        ''
                ],

                [
                    'cover' =>
                        'Fidelity Guarantee',

                    'what_it_pays_for' =>
                        'Loss caused by dishonesty of an employee — theft of cash, stock, or assets.',

                    'why_it_matters' =>
                        ''
                ],

                [
                    'cover' =>
                        'Electronic Equipment Insurance (EEI)',

                    'what_it_pays_for' =>
                        'Breakdown of computers, billing machines, refrigeration units, and other electronic equipment — beyond standard fire cover.',

                    'why_it_matters' =>
                        ''
                ]

            ]
        ],


        // ---------------------------------------------------------
        // TABLE 3 — TYPICAL COSTS
        // THREE COLUMNS
        // ---------------------------------------------------------

        'cost_section' => [

            'title' =>
                '📐 What a Shopkeeper\'s Package Policy Typically Costs',

            'note' =>
                'These figures are indicative and vary by insurer, location, nature of business, and sum insured selected.',

            'columns' => [
                'Business Type',
                'Coverage',
                'Approximate Cost'
            ],

            'examples' => [

                [
                    'business_type' =>
                        'Kirana / grocery store, Tier-2 city',

                    'coverage' =>
                        'Stock ₹5L + equipment ₹1L + cash ₹50K',

                    'cost' =>
                        'Approx. ₹3,500–₹6,000/year'
                ],

                [
                    'business_type' =>
                        'Tailoring / textile shop, small town',

                    'coverage' =>
                        'Stock ₹3L + machinery ₹1.5L',

                    'cost' =>
                        'Approx. ₹2,500–₹4,500/year'
                ],

                [
                    'business_type' =>
                        'Medical / pharmacy store, metro',

                    'coverage' =>
                        'Stock ₹8L + equipment ₹1.5L + public liability',

                    'cost' =>
                        'Approx. ₹6,000–₹10,000/year'
                ],

                [
                    'business_type' =>
                        'Small restaurant / café',

                    'coverage' =>
                        'Structure ₹15L + kitchen equipment ₹3L + stock ₹1L',

                    'cost' =>
                        'Approx. ₹8,000–₹14,000/year'
                ]

            ],

            'summary' =>
                'For most small businesses, the annual premium is less than 2–3 days of revenue. The potential loss from a single fire, flood, or burglary is weeks or months of revenue.'
        ],


        // ---------------------------------------------------------
        // CASE STORY
        // ---------------------------------------------------------

        'case_story' => [

            'title' =>
                '📖 Murugan\'s Kirana — The Festival Fire That Should Not Have Ruined Everything',

            'body' =>
                'Murugan, 44, ran a well-stocked kirana store in a busy residential colony in Coimbatore. He had been building it for eleven years. Every October, he stocked heavily for Diwali — an investment of nearly ₹4 lakh in premium products: dry fruits, sweets, packaged goods, premium oils, cleaning materials.

On the night of October 28, an electrical short circuit in the adjacent cycle repair shop started a fire that spread quickly through the shared wall. By the time the fire brigade arrived, Murugan\'s store had lost nearly everything. Total loss: stock ₹3.8 lakh, refrigeration unit ₹78,000, billing computer ₹32,000, shelving and fitting ₹55,000, glass display counter ₹18,000. He was shut for four weeks while the interior was rebuilt by his landlord. His total loss — including four weeks of zero income — exceeded ₹7 lakh. Murugan had no insurance of any kind. He had always assumed that nothing would happen, that the shop was too small for insurance to be worthwhile, and that the premium would eat into thin margins. He borrowed ₹5 lakh from two relatives and restocked at a reduced scale. He missed the Diwali season entirely. Two years later, he was still repaying the borrowed amount.',

            'policy_example' =>
                'A Shopkeeper\'s Package Policy covering his stock at ₹5 lakh, equipment at ₹1.5 lakh, and cash at ₹50,000 would have cost him approximately ₹4,800 per year — ₹400 per month, less than the cost of a half kg bag of premium dry fruits. The policy would have covered his stock loss, his equipment, and a partial business interruption payout for the four-week closure.',

            'takeaway' =>
                'Takeaway: A shop is not just its walls. It is the stock, the tools, and the income they create. For Murugan, the ₹7 lakh loss was not just property damage — it was a blow to his livelihood.',

            'final_note' =>
                'For small businesses, property insurance costs far less than the damage one bad night can cause. The premium is not an expense; it is the price of protecting eleven years of hard work.',

            'cost' =>
                'Approx. ₹4,800/year'
        ]

    ],


    // =========================================================
    // 04 — SHOPKEEPER'S PACKAGE
    // =========================================================

    'shopkeeper-package' => [

        'tab_title' => "The Shopkeeper's Package Policy — What It Is and Why It Matters",

        'icon' => '
            <svg width="18" height="18" fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="16" rx="2"/>
                <path d="M8 8h8M8 12h8M8 16h5"/>
            </svg>
        ',

        'description' =>
            'An all-in-one commercial property insurance product designed for small retail and service businesses. It bundles multiple covers into a single policy.',

        'items' => [

            [
                'title' => 'Standard Fire & Special Perils',
                'desc' => 'Fire, explosion, lightning, flood, cyclone, earthquake, riot, strike and malicious damage.',
                'tags' => ['Fire', 'Flood', 'Cyclone']
            ],

            [
                'title' => 'Burglary / Housebreaking Cover',
                'desc' => 'Theft of stock, cash and equipment involving forcible entry.',
                'tags' => ['Theft', 'Stock', 'Equipment']
            ],

            [
                'title' => 'Cash Cover',
                'desc' => 'Cash stolen from the premises and cash in transit between the shop and bank.',
                'tags' => ['Cash', 'Safe', 'Transit']
            ],

            [
                'title' => 'Plate Glass Cover',
                'desc' => 'Breakage of glass shop fronts, display windows and countertops.',
                'tags' => ['Glass', 'Shop Front']
            ],

            [
                'title' => 'Public Liability',
                'desc' => 'Compensation to a customer or third party injured on the premises or due to business activity.',
                'tags' => ['Liability', 'Compensation']
            ],

            [
                'title' => 'Personal Accident Cover',
                'desc' => 'Compensation to the owner if injured or killed in an accident.',
                'tags' => ['Owner', 'Accident']
            ],

            [
                'title' => 'Fidelity Guarantee',
                'desc' => 'Loss caused by dishonesty of an employee — including theft of cash, stock or assets.',
                'tags' => ['Employee', 'Dishonesty']
            ],

            [
                'title' => 'Electronic Equipment Insurance',
                'desc' => 'Breakdown of computers, billing machines, refrigeration units and other electronic equipment.',
                'tags' => ['Computers', 'EEI', 'Equipment']
            ]

        ],

        'case_story' => [

            'title' =>
                "Why a Shopkeeper's Package Matters",

            'body' =>
                "A Shopkeeper's Package brings several forms of protection together — from fire and burglary to cash, liability, employee dishonesty and electronic equipment.",

            'body_2' =>
                'For a small retailer or service business, this bundled approach can help address multiple risks within one commercial policy structure.',

            'takeaway' =>
                'A shopkeeper’s policy looks beyond the building to the assets, people and income that keep the business running.',

            'cost' =>
                'Indicative — varies by business'
        ]
    ]

];

?>
<section class="who-can-buy-section" id="types">

    <div class="container">

        <!-- HEADER -->
        <div class="section-header">

            <span class="section-badge">
                01.9 Types
            </span>

            <h2 class="section-title">
                Types
            </h2>

            
        </div>


        <!-- ==================================================
             TAB NAVIGATION
        =================================================== -->

        <div class="tab-triggers">

            <?php
            $first = true;

            foreach ($who_can_buy_data as $key => $data):
                // Extract clean tab name (remove long subtitle text if present for the tab button title)
                $tab_title_text = explode('—', $data['tab_title'])[0];
            ?>

                <button
                    type="button"
                    class="tab-btn <?= $first ? 'active' : '' ?>"
                    data-target="<?= esc_attr($key); ?>"
                >

                    <?= $data['icon']; ?>

                    <span>
                        <?= htmlspecialchars(trim($tab_title_text)); ?>
                    </span>

                </button>

            <?php
                $first = false;
            endforeach;
            ?>

        </div>


        <!-- ==================================================
             TAB CONTENT
        =================================================== -->

        <?php
        $first = true;

        foreach ($who_can_buy_data as $key => $data):
        ?>

            <div
                class="who-tab-content <?= $first ? 'active' : '' ?>"
                id="tab-<?= esc_attr($key); ?>"
            >

                <div class="tab-content-grid">

                    <!-- ======================================
                         LEFT — CONTENT / TABLES
                    ======================================= -->

                    <div class="card content-card">

                        <div class="content-card-header">

                            <span class="mini-label">
                                What you can protect
                            </span>

                            <h3>
                                <?= htmlspecialchars($data['tab_title']); ?>
                            </h3>

                            <p>
                                <?= nl2br(htmlspecialchars($data['description'])); ?>
                            </p>

                        </div>

                        <?php if (isset($data['business_insurance_table'])): ?>
                            <!-- SPECIAL TABLE RENDER FOR SMALL BUSINESSES -->
                            <div class="business-table-wrapper">
                                <h4><?= htmlspecialchars($data['business_insurance_table']['title']); ?></h4>
                                <div class="table-container">
                                    <table class="custom-data-table">
                                        <thead>
                                            <tr>
                                                <?php foreach ($data['business_insurance_table']['columns'] as $col): ?>
                                                    <th><?= htmlspecialchars($col); ?></th>
                                                <?php endforeach; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data['business_insurance_table']['rows'] as $row): ?>
                                                <tr>
                                                    <td><strong><?= htmlspecialchars($row['asset_cover']); ?></strong></td>
                                                    <td><?= htmlspecialchars($row['what_it_protects']); ?></td>
                                                    <td><?= htmlspecialchars($row['why_it_matters']); ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        <?php elseif (isset($data['shopkeeper_package_table'])): ?>
                            <!-- SPECIAL TABLE RENDER FOR SHOPKEEPER PACKAGE TABLE -->
                            <div class="business-table-wrapper">
                                <h4><?= htmlspecialchars($data['shopkeeper_package_table']['title']); ?></h4>
                                <div class="table-container">
                                    <table class="custom-data-table">
                                        <thead>
                                            <tr>
                                                <?php foreach ($data['shopkeeper_package_table']['columns'] as $col): ?>
                                                    <th><?= htmlspecialchars($col); ?></th>
                                                <?php endforeach; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data['shopkeeper_package_table']['rows'] as $row): ?>
                                                <tr>
                                                    <td><strong><?= htmlspecialchars($row['cover']); ?></strong></td>
                                                    <td><?= htmlspecialchars($row['what_it_pays_for']); ?></td>
                                                    <td><?= htmlspecialchars($row['why_it_matters']); ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        <?php elseif (isset($data['items'])): ?>
                            <!-- STANDARD ITEMS LIST -->
                            <div class="coverage-list">

                                <?php foreach ($data['items'] as $index => $item): ?>

                                    <div class="pane-item">

                                        <div class="item-number">
                                            <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
                                        </div>

                                        <div class="item-content">

                                            <h4>
                                                <?= htmlspecialchars($item['title']); ?>
                                            </h4>

                                            <p>
                                                <?= htmlspecialchars($item['desc']); ?>
                                            </p>

                                            <?php if (!empty($item['tags'])): ?>
                                                <div class="sub-tags">
                                                    <?php foreach ($item['tags'] as $tag): ?>
                                                        <span>
                                                            <?= htmlspecialchars($tag); ?>
                                                        </span>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>

                                        </div>

                                    </div>

                                <?php endforeach; ?>

                            </div>
                        <?php endif; ?>

                    </div>


                    <!-- ======================================
                         RIGHT — CASE STORY
                    ======================================= -->

                    <div class="card case-story-card">

                        <div>

                            <span class="story-tag">
                                📖 Real-World Impact
                            </span>

                            <h3>
                                <?= htmlspecialchars($data['case_story']['title']); ?>
                            </h3>

                        </div>


                        <div class="case-body">

                            <p>
                                <?= htmlspecialchars($data['case_story']['body']); ?>
                            </p>

                            <?php if (!empty($data['case_story']['body_2'])): ?>
                                <p>
                                    <?= htmlspecialchars($data['case_story']['body_2']); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (!empty($data['case_story']['policy_example'])): ?>
                                <p>
                                    <em><?= htmlspecialchars($data['case_story']['policy_example']); ?></em>
                                </p>
                            <?php endif; ?>


                            <blockquote class="story-takeaway">

                                <strong>Takeaway:</strong>

                                <?= htmlspecialchars(str_replace('Takeaway - ', '', $data['case_story']['takeaway'])); ?>

                            </blockquote>

                        </div>


                        <?php if (!empty($data['case_story']['cost'])): ?>

                            <div class="case-footer">

                                <span class="stat-badge">

                                    Protection Cost:

                                    <strong>
                                        <?= htmlspecialchars($data['case_story']['cost']); ?>
                                    </strong>

                                </span>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        <?php
            $first = false;
        endforeach;
        ?>

    </div>

</section>
<script>
 
document.addEventListener('DOMContentLoaded', function () {

    const buttons = document.querySelectorAll(
        '.who-can-buy-section .tab-btn'
    );

    const contents = document.querySelectorAll(
        '.who-can-buy-section .who-tab-content'
    );

    buttons.forEach(button => {

        button.addEventListener('click', function () {

            const target = this.dataset.target;

            buttons.forEach(btn => {
                btn.classList.remove('active');
            });

            contents.forEach(content => {
                content.classList.remove('active');
            });

            this.classList.add('active');

            const selected =
                document.getElementById('tab-' + target);

            if (selected) {
                selected.classList.add('active');
            }

        });

    });

});

</script>
