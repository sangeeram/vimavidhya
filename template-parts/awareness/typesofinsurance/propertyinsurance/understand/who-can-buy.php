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

            <h4>Asset Coverage Breakdown</h4>

            <ul>
                <li>
                    <strong>Homeowners:</strong>
                    Have insurable interest in both structure and contents.
                </li>

                <li>
                    <strong>Building / Structure:</strong>
                    Walls, roof, floors, staircases, fixtures, plumbing,
                    electrical wiring, compound walls, outhouses
                    (Covered under a Building Policy).
                </li>

                <li>
                    <strong>Contents:</strong>
                    All movable belongings inside — furniture, appliances,
                    electronics, jewellery, clothing
                    (Requires a separate Contents Policy or Comprehensive Policy).
                </li>

                <li>
                    <strong>Add-ons:</strong>
                    Loss of Rent, Alternate Accommodation, EEI,
                    Portable Equipment, Specified Items, Escalation Clause.
                </li>

                <li>
                     <strong>Landlord Insurance:</strong>
                    If you rent out the property it covers loss of rent,
                    structural damage, and liability arising from
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

            /*
             * Change this image path to your actual image.
             */
            'image' => get_template_directory_uri() .
                '/assets/images/property-insurance/case-studies/priya.jpg',

            'story' => '
                Priya had insured her house for ₹55 lakhs and felt secure.
                A kitchen short circuit destroyed her modular kitchen,
                refrigerator, dining set and damaged the walls. The building
                policy paid ₹4 lakhs for the walls, but her contents were
                rejected because she had a building-only policy.
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
                of Indians live in rented homes, and almost none carry property
                insurance with the justification:
                <em>“It’s not my house.”</em>
            </p>

            <p>
                Consider what you bring into a rented home:
            </p>

            <ul>

                <li>
                    <strong>Tenants:</strong>
                    Have insurable interest in their personal belongings
                    and improvements made to the rented space.
                </li>

                <li>
                    Television, laptop, tablet, mobile devices
                </li>

                <li>
                    Refrigerator, washing machine, microwave
                </li>

                <li>
                    Furniture, clothing, jewellery, personal effects
                </li>

                <li>
                    Any improvements you make — custom woodwork,
                    light fixtures, curtains
                </li>

            </ul>

            <h4>What a Tenant Needs</h4>

            <ul>

                <li>
                    <strong>Contents Insurance:</strong>
                    Covers personal belongings in the rented space.
                </li>

                <li>
                    <strong>Tenant’s Liability Cover:</strong>
                    Covers landlord claims if your negligence damages
                    their property.
                </li>

                <li>
                    <strong>Portable Equipment Cover:</strong>
                    For laptops, cameras, phones inside and outside
                    the home.
                </li>

                <li>
                    <strong>EEI Add-On:</strong>
                    For electronic equipment breakdown
                    such as home-office or audio-visual gear.
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
                '/assets/images/property-insurance/case-studies/riya.jpg',

            'story' => '
                Riya lived in a rented furnished flat in Andheri. While away
                for a long weekend, her flat was burgled, resulting in a
                ₹2 lakh loss of electronics and jewellery. Her landlord’s
                building policy did not cover her belongings.
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
                'Your landlord’s insurance protects their building, not your belongings.',
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
                Across India’s streets and markets, millions of small
                businesses operate every day. Their physical premises,
                stock, and equipment are as exposed to fire, flood, theft,
                and cyclone as any home — but a small business loss stops
                income immediately and completely.
            </p>

            <h4>What a Small Business Owner Can Insure</h4>

            <ul>

                <li>
                    <strong>Small business owners:</strong>
                    Have insurable interest in their commercial structure
                    (if owned), their business stock, trade equipment,
                    fixtures, fittings, and cash on premises.
                </li>

                <li>
                    <strong>Building / Structure (if owned):</strong>
                    Walls, roof, shutters, flooring, wiring.
                </li>

                <li>
                    <strong>Stock / Merchandise:</strong>
                    Raw materials, finished goods, items on shelves.
                </li>

                <li>
                    <strong>Trade Equipment & Machinery:</strong>
                    Refrigerators, sewing machines, billing computers,
                    tools.
                </li>

                <li>
                    <strong>Fixtures & Fittings:</strong>
                    Shelving, display racks, billing counters,
                    false ceilings.
                </li>

                <li>
                    <strong>Cash on Premises:</strong>
                    Physical cash in drawer, safe, or transit.
                </li>

                <li>
                    <strong>Business Interruption / Loss of Profit:</strong>
                    Income lost during operational downtime.
                </li>

                <li>
                    <strong>Public / Third-Party Liability:</strong>
                    Legal liability if a customer is injured.
                </li>

                <li>
                    <strong>Fidelity / Employee Dishonesty:</strong>
                    Loss caused by dishonest employee acts.
                </li>

            </ul>
        ',

        // ====================================================
        // CASE STUDY
        // ====================================================

        'case_study' => [

            'eyebrow' => 'CASE STUDY',

            'title' => 'Murugan’s Kirana',

            'subtitle' => 'The Festival Fire',

            'person' => 'Murugan, 44',

            'location' => 'Coimbatore',

            'role' => 'Kirana Store Owner',

            'image' => get_template_directory_uri() .
                '/assets/images/property-insurance/case-studies/murugan.jpg',

            'story' => '
                A short circuit destroyed Murugan’s Diwali stock and
                equipment, leading to a ₹7+ lakh total loss including
                four weeks of zero income. Having no insurance, he
                borrowed heavily and struggled for years.
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
                'A property loss can become an income loss when the business has no protection.',
        ],
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

            <h4>Covers Bundled in Shopkeeper’s Package</h4>

            <ul>

                <li>
                    <strong>Standard Fire & Special Perils (SFSP):</strong>
                    Fire, flood, earthquake, strike, malicious damage.
                </li>

                <li>
                    <strong>Burglary / Housebreaking Cover:</strong>
                    Theft involving forcible entry.
                </li>

                <li>
                    <strong>Cash Cover:</strong>
                    Cash in safe/counter and cash in transit to bank.
                </li>

                <li>
                    <strong>Plate Glass Cover:</strong>
                    Breakage of glass shop fronts and display windows.
                </li>

                <li>
                    <strong>Public Liability:</strong>
                    Compensation for injured customers or third parties.
                </li>

                <li>
                    <strong>Personal Accident Cover (Owner):</strong>
                    Compensation if the owner is injured or killed.
                </li>

                <li>
                    <strong>Fidelity Guarantee:</strong>
                    Loss from employee dishonesty.
                </li>

                <li>
                    <strong>Electronic Equipment Insurance (EEI):</strong>
                    Breakdown of computers and refrigeration units.
                </li>

            </ul>

            <h4>Indicative Costs</h4>

            <ul>

                <li>
                    <strong>Kirana / Grocery Store (Tier-2):</strong>
                    Stock ₹5L + equipment ₹1L + cash ₹50K
                    → ₹3,500–₹6,000/year
                </li>

                <li>
                    <strong>Tailoring / Textile Shop:</strong>
                    Stock ₹3L + machinery ₹1.5L
                    → ₹2,500–₹4,500/year
                </li>

                <li>
                    <strong>Medical / Pharmacy Store (Metro):</strong>
                    Stock ₹8L + equipment ₹1.5L
                    → ₹6,000–₹10,000/year
                </li>

                <li>
                    <strong>Small Restaurant / Café:</strong>
                    Structure ₹15L + equipment ₹3L + stock ₹1L
                    → ₹8,000–₹14,000/year
                </li>

            </ul>
        ',

        /*
         * Package Policy does not currently have a case study
         * in your original content, so we intentionally don't
         * add a fabricated one here.
         */
        'case_study' => null,
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