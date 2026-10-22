<?php
/**
 * Vima Vidya
 * Understand PA Insurance Through Lived Experiences
 *
 * Template Part:
 * template-parts/awareness/stories/pa-case-studies.php
 */

$pa_case_studies = [

    // =====================================================
    // CASE STUDY 01 — VIKRAM
    // =====================================================

    [
        'eyebrow' => 'The Disability Nobody Insured For',

        'title' => "Vikram's Ordinary Tuesday — The Income That Stopped",

        'person' => 'Vikram, 34',
        'location' => 'Bengaluru',

        'image' => get_template_directory_uri() . '/assets/images/stories/vikram-disability.jpg',

        'image_alt' => "Vikram's disability recovery and financial impact",

        'stats' => [
            [
                'icon' => 'dashicons-location',
                'label' => 'Location',
                'value' => 'Bengaluru',
                'sub' => 'Software team lead',
            ],
            [
                'icon' => 'dashicons-shield',
                'label' => 'Coverage',
                'value' => 'Health Only',
                'sub' => 'No disability cover',
            ],
            [
                'icon' => 'dashicons-warning',
                'label' => 'Incident',
                'value' => 'Spinal Injury',
                'sub' => 'Commuting accident',
            ],
            [
                'icon' => 'dashicons-money-alt',
                'label' => 'Income Gap',
                'value' => '₹14 Lakhs/yr',
                'sub' => 'Uncovered deficit',
            ],
        ],

        'takeaway_title' => 'TAKEAWAY',

        'takeaway' => "Health insurance fixes the body. PA Insurance fixes the life. Vikram's hospital bills were paid. What was not paid was his income — the ₹14 lakh per year that his family needed for the next fifteen years.",

        'paragraphs' => [
            "Vikram, 34, was a software team lead in Bengaluru. He had health insurance through his employer, a term life plan, and a small SIP running. He thought he was covered.",

            "On an ordinary Tuesday morning, his two-wheeler skidded on a rain-slicked road near his office. He was hospitalised for six weeks with a fractured spine. He survived, but the injury left him unable to sit at a desk for more than two hours. His employer placed him on medical leave. Three months later, his employment was formally discontinued.",

            "His health insurance paid the hospital bills as that is all it was designed to do. His term life plan pays only on death. His savings ran out in eight months. His wife Ananya's ₹22,000 monthly income as a teacher became the only support for their two children, aged 4 and 7.",

            "This is the gap that <strong>Personal Accident Insurance (PA Insurance)</strong> exists to fill. A PA policy with Permanent Total Disability (PTD) cover would have paid a lump sum — the <strong>Capital Sum Insured (CSI)</strong> — the moment Vikram was certified as permanently unable to work. That lump sum would have become the family's financial bridge.",

            "What was missing was a Personal Accident policy with a CSI of at least ₹75 lakh. Annual premium: approximately <strong>₹6,000–₹8,000</strong>."
        ],
    ],


    // =====================================================
    // CASE STUDY 02 — PRIYA & ROHAN
    // =====================================================

    [
        'eyebrow' => 'Same Accident, Different Outcomes',

        'title' => "Priya and Rohan — The Power of Individual PPD Cover",

        'person' => 'Priya & Rohan, 36/37',
        'location' => 'Delhi & Pune',

        'image' => get_template_directory_uri() . '/assets/images/stories/rohan-priya-accident.jpg',

        'image_alt' => "Comparison of insurance claim outcomes for Priya and Rohan",

        'stats' => [
            [
                'icon' => 'dashicons-location',
                'label' => 'Location',
                'value' => 'Delhi / Pune',
                'sub' => 'Identical accidents',
            ],
            [
                'icon' => 'dashicons-cart',
                'label' => 'Group Cover',
                'value' => '₹5 Lakhs',
                'sub' => 'Employer hospital cover',
            ],
            [
                'icon' => 'dashicons-warning',
                'label' => 'Injury',
                'value' => 'Hand Damage',
                'sub' => 'Permanent partial loss',
            ],
            [
                'icon' => 'dashicons-money-alt',
                'label' => 'Claim Payout',
                'value' => '₹12.5 Lakhs',
                'sub' => 'Paid to Rohan only',
            ],
        ],

        'takeaway_title' => 'TAKEAWAY',

        'takeaway' => "An employer group cover is a starting point, not a destination. It pays for hospitalisation through linked health cover. It does not provide a PPD benefit for partial disability. Only an individual PA policy with a comprehensive Disability Schedule does.",

        'paragraphs' => [
            "Priya, 36, was a marketing executive in Delhi. Rohan, 37, was a civil engineer in Pune. Both had identical employer <strong>Group Personal Accident</strong> cover covering ₹5 lakh each. In the same month, both suffered serious accidents requiring surgery and six weeks of hospitalisation. Both had bills of approximately ₹3.8 lakh — fully settled by their policies.",

            "So far, identical outcomes. But Rohan had also taken an individual PA policy separately on his own. His <strong>Capital Sum Insured (CSI)</strong> was ₹25 lakh. His injury — crushing damage to his right hand — resulted in a <strong>Permanent Partial Disability (PPD)</strong> claim. Under his policy's Disability Schedule, loss of dominant hand function was valued at 50% of CSI. He received <strong>₹12.5 lakh</strong> within 45 days.",

            "Priya received nothing beyond the hospital settlement. Her hand injury was identical in medical severity, but she had no individual PA policy — only the employer group cover, which carried no PPD benefit. Her financial recovery took three years longer, and her children's school loan took five years to repay.",

            "The difference was one individual PA policy that Rohan had and Priya did not. An individual policy includes a Disability Schedule that compensates for partial loss of function. That is the gap.",
        ],
    ],

];

?>

<section class="vv-case-studies" aria-labelledby="vv-case-studies-title" id="evaluate-pa-real-scenerios">

    <div class="vv-case-studies__container">

        <!-- =========================================
            SECTION HEADER
        ========================================= -->

        <div class="vv-case-studies__header">

            <span class="vv-case-studies__eyebrow">LIVED EXPERIENCES</span>

            <h2 id="vv-case-studies-title">
                Understand PA Insurance Through Lived Experiences
            </h2>

            <p>
                These are not statistics. These are families. Read them carefully — because one of these stories could be yours.
            </p>

        </div>


        <!-- =========================================
            CASE STUDIES LIST
        ========================================= -->

        <div class="vv-case-studies__list">

            <?php foreach ($pa_case_studies as $index => $story) : ?>

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

                                        <span class="vv-case-study__stat-sub">
                                            <?php echo esc_html($stat['sub']); ?>
                                        </span>

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
                            READ MORE BUTTON
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