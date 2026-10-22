<?php
/**
 * Vima Vidya - Dynamic Assessment Flip Cards
 *
 * CPT: vv_assessment
 * ACF fields:
 * scenario_number
 * question
 * option_a
 * option_b
 * option_c
 * recommended_option
 * answer_title
 * why_this_matters
 * key_takeaway
 */

$assessment_query = new WP_Query([
    'post_type'      => 'vv_assessment',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => [
        'menu_order' => 'ASC',
        'date'       => 'ASC',
    ],
]);

if ($assessment_query->have_posts()) :
?>

<section class="vv-assessment-section">

    <div class="vv-assessment-header">
        <h2>Questions Worth Thinking About</h2>
        <p>
            Think about each situation and discover the stronger approach.
        </p>
    </div>

    <div class="vv-assessment-grid">

        <?php
        $card_index = 0;

        while ($assessment_query->have_posts()) :
            $assessment_query->the_post();

            $scenario_number   = get_field('scenario_number');
            $question          = get_field('question');
            $option_a          = get_field('option_a');
            $option_b          = get_field('option_b');
            $option_c          = get_field('option_c');
            $recommended       = get_field('recommended_option');
            $answer_title      = get_field('answer_title');
            $why_this_matters  = get_field('why_this_matters');
            $key_takeaway      = get_field('key_takeaway');

            /*
             * Six visual variations:
             *
             * 01 → light blue
             * 02 → medium blue
             * 03 → dark blue
             * 04 → light teal
             * 05 → medium teal
             * 06 → dark teal
             *
             * Then repeats for additional cards.
             */
            $color_variants = [
                'blue-light',
                'blue-medium',
                'blue-dark',
                'teal-light',
                'teal-medium',
                'teal-dark',
            ];

            $color_class = $color_variants[$card_index % 6];

            /*
             * Give every card a unique ID for the checkbox flip system.
             */
            $card_id = 'vv-assessment-' . get_the_ID() . '-' . $card_index;

            /*
             * Recommended option.
             */
            $recommended = strtoupper(trim((string) $recommended));

            /*
             * Get the actual text of the recommended option.
             */
            $recommended_text = '';

            switch ($recommended) {
                case 'A':
                case 'OPTION A':
                    $recommended = 'A';
                    $recommended_text = $option_a;
                    break;

                case 'B':
                case 'OPTION B':
                    $recommended = 'B';
                    $recommended_text = $option_b;
                    break;

                case 'C':
                case 'OPTION C':
                    $recommended = 'C';
                    $recommended_text = $option_c;
                    break;

                default:
                    $recommended_text = '';
                    break;
            }
        ?>

        <div class="vv-assessment-card <?php echo esc_attr($color_class); ?>">

            <!-- Hidden checkbox controls the flip -->
            <input type="checkbox" class="vv-flip-toggle" id="<?php echo esc_attr($card_id); ?>">

            <label class="vv-flip-card" for="<?php echo esc_attr($card_id); ?>">

                <!-- =========================================
                         FRONT
                    ========================================== -->
                <div class="vv-card-face vv-card-front">

                    <div class="vv-front-content">

                        <div class="vv-card-number">
                            <?php echo esc_html($scenario_number); ?>
                        </div>

                        <h3 class="vv-card-title">
                            <?php echo esc_html(get_the_title()); ?>
                        </h3>

                        <div class="vv-card-divider"></div>

                        <p class="vv-question">
                            <?php echo esc_html($question); ?>
                        </p>

                        <div class="vv-options">

                            <div class="vv-option">
                                <span class="vv-option-key">A</span>
                                <span class="vv-option-text">
                                    <?php echo esc_html($option_a); ?>
                                </span>
                            </div>

                            <div class="vv-option">
                                <span class="vv-option-key">B</span>
                                <span class="vv-option-text">
                                    <?php echo esc_html($option_b); ?>
                                </span>
                            </div>

                            <div class="vv-option">
                                <span class="vv-option-key">C</span>
                                <span class="vv-option-text">
                                    <?php echo esc_html($option_c); ?>
                                </span>
                            </div>

                        </div>

                    </div>

                    <div class="vv-card-action">
                        <span>Tap / Click to reveal</span>
                        <span class="vv-flip-icon">↻</span>
                    </div>

                </div>


                <!-- =========================================
     BACK
========================================== -->
                <div class="vv-card-face vv-card-back">

                    <div class="vv-back-content">

                        <div class="vv-answer-label">
                            ANSWER OPTION
                        </div>

                        <div class="vv-recommended-option">
                            <?php echo esc_html($recommended); ?>
                        </div>

                        <?php if ($answer_title) : ?>
                        <div class="vv-answer-title">
                            <?php echo esc_html($answer_title); ?>
                        </div>
                        <?php endif; ?>

                        <?php if ($why_this_matters) : ?>
                        <div class="vv-recommended-text">
                            <?php echo wp_kses_post($why_this_matters); ?>
                        </div>
                        <?php endif; ?>

                    </div>

                    <div class="vv-card-action vv-back-action">

                        <span>Tap / Click to flip back</span>

                        <span class="vv-flip-icon">↻</span>

                    </div>

                </div>
            </label>

        </div>

        <?php
            $card_index++;

        endwhile;
        ?>

    </div>

</section>

<?php
endif;

wp_reset_postdata();
?>