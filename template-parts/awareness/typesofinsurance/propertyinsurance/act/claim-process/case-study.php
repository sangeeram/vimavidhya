<?php
/**
 * Vima Vidya
 * Case Studies / Stories That Matter
 *
 * Template Part:
 * template-parts/awareness/stories/case-studies.php
 */

$case_studies = [

    // =====================================================
    // CASE STUDY 01 — NALINI
    // =====================================================

    [
        'eyebrow' => 'A Choice Made and Lakhs Saved',

        'title' => "Nalini's Flood Claim — How She Got Every Rupee",

        'person' => 'Nalini, 55',
        'location' => 'Chennai',

        'image' => get_template_directory_uri() . '/assets/images/stories/nalini-flood-claim.jpg',

        'image_alt' => "Nalini's flood-damaged home and insurance claim",

        'stats' => [
            [
                'icon' => 'dashicons-location',
                'label' => 'Location',
                'value' => 'Chennai',
                'sub' => 'Ground-floor home',
            ],
            [
                'icon' => 'dashicons-shield',
                'label' => 'Coverage',
                'value' => 'Comprehensive',
                'sub' => 'Structure + Contents',
            ],
            [
                'icon' => 'dashicons-warning',
                'label' => 'Damage',
                'value' => 'Flood',
                'sub' => '2015 Chennai floods',
            ],
            [
                'icon' => 'dashicons-money-alt',
                'label' => 'Claim settled',
                'value' => '₹6.8 Lakhs',
                'sub' => 'Full assessed value',
            ],
        ],

        'takeaway_title' => 'TAKEAWAY',

        'takeaway' => 'A comprehensive policy and exhaustive documentation of your contents can cushion the financial impact of a disaster.',

        'paragraphs' => [
            "Nalini, 55, a retired teacher in Chennai, experienced the 2015 floods. Her ground-floor home was extensively damaged. She had a <strong>comprehensive home policy</strong> covering <strong>structure</strong> and <strong>contents.</strong>",

            "Within hours of the water receding, she photographed every room systematically. She listed every damaged item with the purchase year and estimated replacement cost. She <strong>notified her insurer</strong> the same evening via phone and email, and had all documents — purchase receipts, renovation invoices, policy schedule — ready when the <strong>surveyor</strong> arrived two days later.",

            "Her claim was settled at ₹6.8 lakhs, the full assessed value. 'I treated my home like a business,' she said. 'Every receipt, every photo, every record. <strong>Documentation</strong> made all the difference.'",
        ],
    ],


    // =====================================================
    // CASE STUDY 02 — PRIYA
    // =====================================================

    [
        'eyebrow' => 'A Choice Made Before It Was Too Late',

        'title' => "Priya's Choice — The Story That Ends Differently",

        'person' => 'Priya, 32',
        'location' => 'Pune',

        'image' => get_template_directory_uri() . '/assets/images/stories/priya-rented-home.jpg',

        'image_alt' => "Priya and her husband in their rented home",

        'stats' => [
            [
                'icon' => 'dashicons-location',
                'label' => 'Location',
                'value' => 'Pune',
                'sub' => 'Rented 2BHK',
            ],
            [
                'icon' => 'dashicons-cart',
                'label' => 'Belongings',
                'value' => '₹4 Lakhs',
                'sub' => 'Total contents value',
            ],
            [
                'icon' => 'dashicons-warning',
                'label' => 'Damage',
                'value' => 'Fire',
                'sub' => 'Kitchen fire',
            ],
            [
                'icon' => 'dashicons-money-alt',
                'label' => 'Claim settled',
                'value' => '₹1.6 Lakhs',
                'sub' => 'Against ₹3,800 premium',
            ],
        ],

        'takeaway_title' => 'TAKEAWAY',

        'takeaway' => "Property insurance for tenants is not the landlord's job. It is yours. The premium is small. The decision is simple. The difference it makes can be enormous.",

        'paragraphs' => [
            "Priya, 32, was a marketing professional in Pune. She had just moved into her first rented 2BHK with her husband. They spent ₹4 lakhs furnishing it — a washing machine, refrigerator, smart TV, a laptop and desktop for their home office, and a full wardrobe.",

            "At a financial literacy workshop, the presenter asked: 'How many of you have insured your rented home's contents?' Nobody raised their hand. The presenter's reply was simple: <strong>Your landlord insures his four walls. You insure everything you brought inside them.</strong>",

            "If any <strong>peril</strong> like a fire starts tonight and destroys everything you own, your <strong>landlord's insurance</strong> will pay to fix the walls. Everything you own inside will be your loss alone — unless you have your own policy.",

            "Priya went home that evening and applied for a <strong>tenant's contents</strong> policy: ₹4.5 lakh sum insured, EEI add-on for the electronics, and a <strong>portable equipment</strong> rider for her laptop. Annual <strong>premium: ₹3,800</strong>. Less than her monthly grocery bill.",

            "Two years later, a kitchen fire damaged the refrigerator and part of the home office. The claim was settled in three weeks. 'I never thought of it as expensive,' she said. 'I just never thought of it at all — until someone explained it clearly.'",

            "The premium was ₹3,800. The claim payout was ₹1.6 lakhs. The decision to buy the policy took twenty minutes.",
        ],
    ],

];

?>

<section class="vv-case-studies" aria-labelledby="vv-case-studies-title">

    <div class="vv-case-studies__container">

        <!-- =========================================
             SECTION HEADER
        ========================================== -->

        <div class="vv-case-studies__header">

            <h2 id="vv-case-studies-title">
                A Choice Made and Lakhs Saved
            </h2>

            <p>
                Real-life situations show what property insurance can change
                when the unexpected happens.
            </p>

        </div>


        <!-- =========================================
             CASE STUDIES
        ========================================== -->

        <div class="vv-case-studies__list">

            <?php foreach ($case_studies as $index => $story) : ?>

                <article
                    class="vv-case-study <?php echo $index % 2 !== 0 ? 'vv-case-study--reverse' : ''; ?>"
                >

                    <!-- =================================
                         LEFT / VISUAL COLUMN
                    ================================== -->

                    <div class="vv-case-study__visual">

                        <div class="vv-case-study__image-wrap">

                            <img
                                src="<?php echo esc_url($story['image']); ?>"
                                alt="<?php echo esc_attr($story['image_alt']); ?>"
                                class="vv-case-study__image"
                                loading="lazy"
                            >

                        </div>


                        <!-- =================================
                             STAT CARDS
                        ================================== -->

                        <div class="vv-case-study__stats">

                            <?php foreach ($story['stats'] as $stat) : ?>

                                <div class="vv-case-study__stat">

                                    <span class="vv-case-study__stat-icon">
                                        <span class="dashicons <?php echo esc_attr($stat['icon']); ?>"></span>
                                    </span>

                                    <div class="vv-case-study__stat-content">

                                        <span class="vv-case-study__stat-label">
                                            <?php echo esc_html($stat['label']); ?>
                                        </span>

                                        <strong class="vv-case-study__stat-value">
                                            <?php echo esc_html($stat['value']); ?>
                                        </strong>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>


                        <!-- =================================
                             TAKEAWAY
                        ================================== -->

                        <div class="vv-case-study__takeaway">

                            <div class="vv-case-study__takeaway-icon">

                                <span class="dashicons dashicons-lightbulb"></span>

                            </div>

                            <div class="vv-case-study__takeaway-content">

                                <span class="vv-case-study__takeaway-label">
                                    <?php echo esc_html($story['takeaway_title']); ?>
                                </span>

                                <p>
                                    <?php echo esc_html($story['takeaway']); ?>
                                </p>

                            </div>

                        </div>


                        <!-- =================================
                             READ MORE BUTTON (Below Takeaway)
                        ================================== -->

                        <div class="vv-case-study__footer">
                            <a href="<?php echo esc_url(home_url('/stories-that-matter/')); ?>" class="vv-button vv-button--primary">
                                Read More Stories <span class="dashicons dashicons-arrow-right-alt"></span>
                            </a>
                        </div>

                    </div>


                    <!-- =================================
                         RIGHT / STORY COLUMN
                    ================================== -->

                    <div class="vv-case-study__content">

                        <div class="vv-case-study__meta">

                            <span class="vv-case-study__person">
                                <?php echo esc_html($story['person']); ?>
                            </span>

                            <span class="vv-case-study__separator">
                                |
                            </span>

                            <span class="vv-case-study__location">
                                <?php echo esc_html($story['location']); ?>
                            </span>

                        </div>


                        <h3 class="vv-case-study__title">
                            <?php echo esc_html($story['title']); ?>
                        </h3>


                        <div class="vv-case-study__story">

                            <?php foreach ($story['paragraphs'] as $paragraph) : ?>

                                <p>
                                    <?php echo wp_kses_post($paragraph); ?>
                                </p>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>