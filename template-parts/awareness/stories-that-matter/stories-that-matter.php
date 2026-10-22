<?php
// =============================================================================
// VIMA VIDYA — STORIES THAT CONNECT
// Layout:
// LEFT  = Category + Title + Subtitle + Image
// RIGHT = Story Content + Takeaway
// =============================================================================


// =============================================================================
// GLOSSARY DICTIONARY
// =============================================================================

$glossary = [

    'Pre-authorization' => [
        'slug' => 'Pre-authorization',
        'definition' => 'Pre-authorization is the process of obtaining prior approval from the insurance company before undergoing planned medical treatment or hospitalization.'
    ],

    'cashless hospitalization' => [
        'slug' => 'Cashless-Hospitalization',
        'definition' => 'A facility where the insurer settles admissible hospital bills directly with network hospitals, requiring no upfront payment from the insured.'
    ],

    'sum insured' => [
        'slug' => 'Sum-Insured',
        'definition' => 'The maximum financial limit an insurer will pay in a policy year for covered medical expenses.'
    ],

    'network hospital' => [
        'slug' => 'Network-Hospital',
        'definition' => 'Hospitals partnered with the insurer to provide cashless treatment and pre-negotiated tariff rates.'
    ],

    'waiting period' => [
        'slug' => 'Waiting-Period',
        'definition' => 'A specified timeframe from policy inception during which certain illnesses or pre-existing diseases are not covered.'
    ],

    'deductible' => [
        'slug' => 'Deductible',
        'definition' => 'A cost-sharing amount you must pay out-of-pocket before your insurance policy begins covering medical expenses.'
    ],

    'co-payment' => [
        'slug' => 'Co-payment',
        'definition' => 'A fixed percentage of the admissible claim amount that the policyholder agrees to pay out-of-pocket.'
    ],

    'cumulative bonus' => [
        'slug' => 'Cumulative-Bonus',
        'definition' => 'An increase in the sum insured granted for claim-free policy years without an increase in premium.'
    ],

    'family floater' => [
        'slug' => 'Family-Floater',
        'definition' => 'A single policy where the total sum insured is shared equally among all covered family members.'
    ],

    'portability' => [
        'slug' => 'Portability',
        'definition' => 'The right of an insured to switch from one insurance provider to another while retaining accrued waiting-period credits.'
    ],

    'grace period' => [
        'slug' => 'Grace-Period',
        'definition' => 'A 30-day extension past the premium due date allowing renewal without policy lapse or forfeiture of continuity benefits.'
    ],

    'top-up' => [
        'slug' => 'Top-up-Insurance',
        'definition' => 'Additional coverage that activates once hospital bills cross an agreed threshold (deductible) in a single claim.'
    ],

    'super top-up' => [
        'slug' => 'Super-Top-up',
        'definition' => 'Coverage that activates when total medical expenses across multiple claims in a single policy year cross the deductible.'
    ],

    'critical illness' => [
        'slug' => 'Critical-Illness',
        'definition' => 'A policy or rider providing a lump-sum payout upon diagnosis of a covered major condition (e.g., cancer, stroke).'
    ],

    'restore benefit' => [
        'slug' => 'Restore-Benefit',
        'definition' => 'A feature that automatically recharges the sum insured once it is exhausted within the same policy year.'
    ],

    'maternity coverage' => [
        'slug' => 'Maternity-Coverage',
        'definition' => 'Coverage for childbirth and pregnancy-related hospital expenses, subject to specified waiting periods.'
    ],

    'daycare' => [
        'slug' => 'Daycare-Treatment',
        'definition' => 'Surgical and medical procedures requiring advanced technology completed within less than 24 hours of hospitalization.'
    ],

    'average clause' => [
        'slug' => 'Average-Clause',
        'definition' => 'A property insurance condition where claim payouts are proportionally reduced if the property was under-insured relative to rebuilding cost.'
    ],

    'contents' => [
        'slug' => 'Home-Contents-Insurance',
        'definition' => 'Insurance protection covering movable personal items, appliances, and furniture within a residential dwelling.'
    ],

    'rebuilding cost' => [
        'slug' => 'Rebuilding-Cost',
        'definition' => 'The actual material and labor expenditure required to reconstruct a property structure, excluding land valuation.'
    ]
];


// =============================================================================
// PHP GLOSSARY PARSER
// =============================================================================

function parseGlossaryTerms($text, $glossary) {

    if (empty($text)) {
        return '';
    }

    uksort($glossary, function ($a, $b) {
        return strlen($b) - strlen($a);
    });

    foreach ($glossary as $term => $meta) {

        $pattern = '/\b(' . preg_quote($term, '/') . ')(s|es)?\b/i';

        $replacement =
            '<span class="glossary-term" tabindex="0">' .

                '<a href="https://vimavidya.com/glossary/' .
                    esc_attr($meta['slug']) .
                    '" target="_blank" rel="noopener">$0</a>' .

                '<span class="glossary-tooltip" role="tooltip">' .
                    esc_html($meta['definition']) .
                '</span>' .

            '</span>';

        $text = preg_replace(
            $pattern,
            $replacement,
            $text,
            1
        );
    }

    return $text;
}


// =============================================================================
// STORY CATEGORIES
// =============================================================================

$categories = [

    'HEALTH' => [
        'title' => 'HEALTH INSURANCE',
        'spine_class' => 'spine-navy',
        'icon' => 'fa-solid fa-heart-pulse',
        'badge' => '01'
    ],

    'LIFE' => [
        'title' => 'LIFE INSURANCE',
        'spine_class' => 'spine-green',
        'icon' => 'fa-solid fa-people-roof',
        'badge' => '02'
    ],

    'TERM' => [
        'title' => 'TERM INSURANCE',
        'spine_class' => 'spine-burgundy',
        'icon' => 'fa-solid fa-shield-halved',
        'badge' => '03'
    ],

    'PROPERTY' => [
        'title' => 'HOME INSURANCE',
        'spine_class' => 'spine-terracotta',
        'icon' => 'fa-solid fa-house-chimney',
        'badge' => '04'
    ],

    'MOTOR' => [
        'title' => 'MOTOR INSURANCE',
        'spine_class' => 'spine-slate',
        'icon' => 'fa-solid fa-car',
        'badge' => '05'
    ],

    'TRAVEL' => [
        'title' => 'TRAVEL INSURANCE',
        'spine_class' => 'spine-teal',
        'icon' => 'fa-solid fa-plane-departure',
        'badge' => '06'
    ],

    'RETIREMENT' => [
        'title' => 'RETIREMENT PLANNING',
        'spine_class' => 'spine-purple',
        'icon' => 'fa-solid fa-sack-dollar',
        'badge' => '07'
    ],

    'CHILD' => [
        'title' => 'CHILD FUTURE',
        'spine_class' => 'spine-brown',
        'icon' => 'fa-solid fa-children',
        'badge' => '08'
    ],

    'CRITICAL' => [
        'title' => 'CRITICAL ILLNESS',
        'spine_class' => 'spine-emerald',
        'icon' => 'fa-solid fa-hand-holding-medical',
        'badge' => '09'
    ]
];


// =============================================================================
// GET STORIES FROM ACF / CPT
// =============================================================================

$stories = [];

$story_query = new WP_Query([

    'post_type'      => 'vima_story',

    'posts_per_page' => -1,

    'orderby'        => [
        'menu_order' => 'ASC',
        'date'       => 'ASC'
    ],

    'order' => 'ASC'

]);


if ($story_query->have_posts()) {

    $i = 1;

    while ($story_query->have_posts()) {

        $story_query->the_post();

        $post_id = get_the_ID();


        // ---------------------------------------------------------------------
        // ACF FIELDS
        // ---------------------------------------------------------------------

        $category = get_field(
            'story_category',
            $post_id
        );

        $subtitle = get_field(
            'story_subtitle',
            $post_id
        );

        $image = get_field(
            'story_image',
            $post_id
        );

        $content = get_field(
            'story_content',
            $post_id
        );

        $takeaway = get_field(
            'takeaway',
            $post_id
        );


        // ---------------------------------------------------------------------
        // IMAGE URL
        // ---------------------------------------------------------------------

        $image_url = '';

        if (is_array($image) && isset($image['url'])) {

            $image_url = $image['url'];

        } elseif (is_numeric($image)) {

            $image_url = wp_get_attachment_image_url(
                $image,
                'large'
            );

        } elseif (is_string($image)) {

            $image_url = $image;
        }


        // ---------------------------------------------------------------------
        // CATEGORY
        // ---------------------------------------------------------------------

        $cat_key = (
            !empty($category) &&
            isset($categories[$category])
        )
            ? $category
            : 'HEALTH';


        $cat_title = $categories[$cat_key]['title'];


        // ---------------------------------------------------------------------
        // STORY DATA
        // ---------------------------------------------------------------------

       $stories[$i] = [
    "type"        => $cat_key,
    "category"    => $cat_title,

    // WordPress POST TITLE
    "title"       => get_the_title(),

    // ACF subtitle
    "subtitle"    => $subtitle ?: '',

    // Main WYSIWYG content
    "description" => $content ?: '',

    // ACF takeaway
    "takeaway"    => $takeaway ?: '',

    // Story image
    "image"       => $image_url,
];


        $i++;
    }

    wp_reset_postdata();
}


// =============================================================================
// FALLBACK
// =============================================================================

$total_stories = count($stories);


if ($total_stories === 0) {

    $stories = [

        1 => [

            'type' => 'HEALTH',

            'title' =>
                $categories['HEALTH']['title'],

            'subtitle' =>
                'No stories published yet',

            'comic_label' => '',

            'description' =>
                'Add your first story under Vima Stories to see it appear here.',

            'takeaway' => '',

            'image' => ''

        ]

    ];

    $total_stories = 1;
}


$first_story_id =
    array_key_first($stories);

$first_story =
    $stories[$first_story_id];

?>



<!-- ========================================================================
     STORIES SECTION
======================================================================== -->

<section class="vima-experience-section">


    <!-- ====================================================================
         STORY INTRO / BOOK SHELF
    ===================================================================== -->

    <div class="shelf-scene">

        <div class="shelf-split-layout">


            <!-- --------------------------------------------------------------
                 INTRO
            --------------------------------------------------------------- -->

            <div class="shelf-col-intro">

                <div class="shelf-intro-text">

                    <h1>
                        Stories That<br>
                        <span>Connect</span>
                    </h1>

                    <div class="gold-filigree-divider">

                        <span></span>

                        <i>♦ ♦ ♦</i>

                        <span></span>

                    </div>

                </div>

            </div>



            <!-- --------------------------------------------------------------
                 BOOKS
            --------------------------------------------------------------- -->

            <div class="shelf-col-shelf">

                <div class="shelf-wall-frame">

                    <div class="sign-wood-bevel">

                        <div class="sign-parchment">

                            <p>
                                Understand today,<br>
                                protect tomorrow.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="books-lineup">

                    <?php

                    foreach ($categories as $cat_key => $cat_meta):

                        $first_target_id = null;


                        foreach ($stories as $s_id => $s_data) {

                            if ($s_data['type'] === $cat_key) {

                                $first_target_id = $s_id;

                                break;
                            }
                        }


                        if (!$first_target_id) {
                            continue;
                        }

                    ?>

                    <button type="button" class="
                                book-spine
                                <?= esc_attr($cat_meta['spine_class']); ?>

                                <?= (
                                    $first_story['type'] === $cat_key
                                )
                                    ? 'is-active'
                                    : '';
                                ?>
                            " data-type="<?= esc_attr($cat_key); ?>"
                        data-target-story="<?= esc_attr($first_target_id); ?>"
                        title="<?= esc_attr($cat_meta['title']); ?>">

                        <span class="spine-foil-line spine-foil-left"></span>

                        <div class="spine-emboss-rib ribbon-top"></div>


                        <div class="spine-vertical-core">

                            <i class="<?= esc_attr($cat_meta['icon']); ?>"></i>

                            <span class="spine-title-vertical">

                                <?= esc_html($cat_meta['title']); ?>

                            </span>

                        </div>


                        <div class="spine-bottom-number">

                            <?= esc_html($cat_meta['badge']); ?>

                        </div>


                        <div class="spine-emboss-rib ribbon-bottom"></div>

                        <span class="spine-foil-line spine-foil-right"></span>

                    </button>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>



        <!-- --------------------------------------------------------------
             SHELF
        --------------------------------------------------------------- -->

        <div class="shelf-plank-edge">

            <div class="wood-plane-top"></div>

            <div class="wood-plane-lip"></div>

            <div class="wood-plane-shadow"></div>

        </div>


        <p class="shelf-interact-hint">

            <i class="fa-regular fa-hand-pointer"></i>

            Click on a book to read real-life stories

        </p>

    </div>



    <!-- ====================================================================
         BOOK READER
    ===================================================================== -->

    <div class="reader-stage">


        <div class="book-viewport-3d">


            <div class="realistic-open-book" id="realisticBook">


                <!-- ========================================================
                     PAGE DEPTH
                ========================================================= -->

                <div class="stacked-pages-depth">

                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                </div>


                <!-- ========================================================
                     BOOK GUTTER
                ========================================================= -->

                <div class="book-gutter-valley"></div>



               <!-- =========================================================
     LEFT PAGE
     CATEGORY + POST TITLE + ACF SUBTITLE + IMAGE
========================================================= -->
<div class="book-page page-left" id="staticLeftPage">

    <div class="page-content-box story-intro-page">

        <!-- CATEGORY -->
        <div class="page-top-meta">
            <i class="<?= esc_attr($categories[$first_story['type']]['icon']); ?> meta-icon"
               id="uiLeftIcon"></i>

            <span class="meta-category" id="uiLeftType">
                <?= esc_html($first_story['category']); ?>
            </span>
        </div>


        <!-- MAIN STORY TITLE -->
        <h2 class="story-title" id="uiLeftTitle">

            <span class="story-title-main">
                <?= esc_html($first_story['title']); ?>
            </span>

            <?php if (!empty($first_story['subtitle'])): ?>

                <span class="story-title-subtitle">
                    – <?= esc_html($first_story['subtitle']); ?>
                </span>

            <?php endif; ?>

        </h2>


        <!-- ORNAMENT -->
        <div class="ornament-divider">
            <span></span>
            <i>♦</i>
            <span></span>
        </div>


        <!-- IMAGE -->
        <?php if (!empty($first_story['image'])): ?>

            <div class="story-intro-image" id="uiLeftImageWrap">

                <img
                    id="uiLeftImage"
                    src="<?= esc_url($first_story['image']); ?>"
                    alt="<?= esc_attr($first_story['title']); ?>"
                >

                <div class="story-image-caption">
                    <span></span>
                    REAL-LIFE STORY
                    <span></span>
                </div>

            </div>

        <?php endif; ?>

    </div>

</div>



                <!-- =========================================================
     RIGHT PAGE
     CONTENT + TAKEAWAY
========================================================= -->
                <div class="book-page page-right" id="staticRightPage">

                    <div class="page-content-box story-content-page">

                        <!-- BOOKMARK -->
                        <div class="story-corner-bookmark" id="uiRightRibbon">
                            <?= sprintf("%02d", $first_story_id); ?>
                        </div>


                        <!-- STORY CONTENT -->
                        <div class="story-paragraphs" id="uiRightDesc">

                            <?= parseGlossaryTerms(
                $first_story['description'],
                $glossary
            ); ?>

                        </div>


                        <!-- TAKEAWAY -->
                        <?php if (!empty($first_story['takeaway'])): ?>

                        <div class="takeaway-banner" id="uiRightTakeawayBanner">

                            <div class="takeaway-shield">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>

                            <div class="takeaway-body">

                                <strong>Takeaway</strong>

                                <p id="uiRightTakeaway">
                                    <?= esc_html($first_story['takeaway']); ?>
                                </p>

                            </div>

                        </div>

                        <?php endif; ?>

                    </div>

                </div>



                <!-- ========================================================
                     FLIPPING SHEET
                ========================================================= -->

                <div class="flipping-page-leaf" id="flippingPageLeaf">


                    <!-- FRONT -->

                    <div class="leaf-face leaf-front">

                        <div class="page-content-box" id="leafFrontSlot"></div>

                        <div class="leaf-shadow"></div>

                    </div>



                    <!-- BACK -->

                    <div class="leaf-face leaf-back">

                        <div class="page-content-box" id="leafBackSlot"></div>

                        <div class="leaf-shadow"></div>

                    </div>


                </div>


            </div>

        </div>



        <!-- =================================================================
             NAVIGATION
        ================================================================== -->

        <div class="reader-control-row">


            <button type="button" class="book-nav-btn" id="prevStoryBtn">

                <i class="fa-solid fa-arrow-left"></i>

                Previous

            </button>



            <div class="page-indicator-pill">

                <span id="uiCurrentIdx">

                    <?= sprintf(
                        '%02d',
                        $first_story_id
                    ); ?>

                </span>

                <span class="sep">/</span>

                <span>

                    <?= sprintf(
                        '%02d',
                        $total_stories
                    ); ?>

                </span>

            </div>



            <button type="button" class="book-nav-btn" id="nextStoryBtn">

                Next

                <i class="fa-solid fa-arrow-right"></i>

            </button>


        </div>

    </div>

</section>



<!-- ========================================================================
     JAVASCRIPT
======================================================================== -->

<script>
document.addEventListener('DOMContentLoaded', function() {


    // ========================================================================
    // DATA FROM PHP
    // ========================================================================

    const stories =
        <?= wp_json_encode(
            $stories,
            JSON_UNESCAPED_SLASHES |
            JSON_UNESCAPED_UNICODE
        ); ?>;


    const categoryMeta =
        <?= wp_json_encode(
            $categories,
            JSON_UNESCAPED_SLASHES |
            JSON_UNESCAPED_UNICODE
        ); ?>;


    const glossaryDict =
        <?= wp_json_encode(
            $glossary,
            JSON_UNESCAPED_SLASHES |
            JSON_UNESCAPED_UNICODE
        ); ?>;



    // ========================================================================
    // STORY INDEX
    // ========================================================================

    const storyKeys =
        Object.keys(stories).map(Number);


    const totalStories =
        storyKeys.length;


    let currentIndex = 0;

    let isTurning = false;



    // ========================================================================
    // DOM
    // ========================================================================

    const flippingSheet =
        document.getElementById(
            'flippingPageLeaf'
        );


    const leafFrontSlot =
        document.getElementById(
            'leafFrontSlot'
        );


    const leafBackSlot =
        document.getElementById(
            'leafBackSlot'
        );


    const staticLeftBox =
        document.querySelector(
            '#staticLeftPage .page-content-box'
        );


    const staticRightBox =
        document.querySelector(
            '#staticRightPage .page-content-box'
        );


    const spineBtns =
        document.querySelectorAll(
            '.book-spine'
        );


    const prevBtn =
        document.getElementById(
            'prevStoryBtn'
        );


    const nextBtn =
        document.getElementById(
            'nextStoryBtn'
        );


    const uiCurrentIdx =
        document.getElementById(
            'uiCurrentIdx'
        );



    // ========================================================================
    // ESCAPE HTML
    // ========================================================================

    function escapeHTML(value) {

        if (value === null || value === undefined) {
            return '';
        }

        return String(value)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }



    // ========================================================================
    // GLOSSARY LINKING
    // ========================================================================

    function linkifyGlossary(text) {

        if (!text) {
            return '';
        }


        let parsed = text;


        const terms =
            Object.keys(glossaryDict)
            .sort(function(a, b) {

                return b.length - a.length;

            });


        terms.forEach(function(term) {

            const meta =
                glossaryDict[term];


            const regex =
                new RegExp(
                    '\\b(' +
                    term.replace(/[.*+?^${}()|[\]\\]/g, '\\$&') +
                    ')(s|es)?\\b',
                    'i'
                );


            parsed =
                parsed.replace(
                    regex,
                    function(match) {

                        return `
                            <span
                                class="glossary-term"
                                tabindex="0"
                            >

                                <a
                                    href="https://vimavidya.com/glossary/${encodeURIComponent(meta.slug)}"
                                    target="_blank"
                                    rel="noopener"
                                >
                                    ${match}
                                </a>

                                <span
                                    class="glossary-tooltip"
                                    role="tooltip"
                                >
                                    ${escapeHTML(meta.definition)}
                                </span>

                            </span>
                        `;
                    }
                );

        });


        return parsed;

    }



    // ========================================================================
    // BUILD LEFT PAGE
    // TITLE + SUBTITLE + IMAGE
    // ========================================================================

    function buildLeftHTML(story) {

        const iconClass =
            categoryMeta[story.type]?.icon ||
            'fa-solid fa-book';

        const imageHTML = story.image ?
            `
            <div class="story-intro-image">

                <img
                    src="${story.image}"
                    alt="${story.title}"
                >

                <div class="story-image-caption">
                    <span></span>
                    REAL-LIFE STORY
                    <span></span>
                </div>

            </div>
        ` :
            '';

      const subtitleHTML = story.subtitle ?
    `
        <span class="story-title-subtitle">
            – ${escapeHTML(story.subtitle)}
        </span>
    ` :
    '';
        return `
        <div class="page-top-meta">

            <i class="${iconClass} meta-icon"></i>

            <span class="meta-category">
                ${story.category}
            </span>

        </div>


        <h2 class="story-title">
            ${story.title}
        </h2>


        ${subtitleHTML}


        <div class="ornament-divider">
            <span></span>
            <i>♦</i>
            <span></span>
        </div>


        ${imageHTML}
    `;
    }



    // ========================================================================
    // BUILD RIGHT PAGE
    // CONTENT + TAKEAWAY
    // ========================================================================

    function buildRightHTML(story, storyId) {

        const takeawayHTML = story.takeaway ?
            `
            <div class="takeaway-banner">

                <div class="takeaway-shield">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <div class="takeaway-body">

                    <strong>Takeaway</strong>

                    <p>
                        ${story.takeaway}
                    </p>

                </div>

            </div>
        ` :
            '';

        return `
        <div class="story-corner-bookmark">
            ${String(storyId).padStart(2, '0')}
        </div>


        <div class="story-paragraphs">

            ${linkifyGlossary(story.description)}

        </div>


        ${takeawayHTML}
    `;
    }



    // ========================================================================
    // UPDATE ACTIVE BOOK
    // ========================================================================

    function updateActiveSpine(story) {

        spineBtns.forEach(function(btn) {

            btn.classList.toggle(
                'is-active',
                btn.dataset.type === story.type
            );

        });

    }



    // ========================================================================
    // PAGE TURN
    // ========================================================================

    function flipTo(
        targetIndex,
        direction = 'next'
    ) {


        if (isTurning) {
            return;
        }


        if (targetIndex === currentIndex) {
            return;
        }


        if (
            targetIndex < 0 ||
            targetIndex >= totalStories
        ) {
            return;
        }


        isTurning = true;


        const currentStoryId =
            storyKeys[currentIndex];


        const nextStoryId =
            storyKeys[targetIndex];


        const currentStory =
            stories[currentStoryId];


        const nextStory =
            stories[nextStoryId];



        // ====================================================================
        // NEXT
        // ====================================================================

        if (direction === 'next') {


            // Current left page becomes front
            leafFrontSlot.innerHTML =
                buildLeftHTML(
                    currentStory,
                    currentStoryId
                );


            // Next right page becomes back
            leafBackSlot.innerHTML =
                buildRightHTML(
                    nextStory,
                    nextStoryId
                );


            // Show next right page underneath
            staticRightBox.innerHTML =
                buildRightHTML(
                    nextStory,
                    nextStoryId
                );


            flippingSheet.className =
                'flipping-page-leaf is-turning-forward';



            setTimeout(function() {


                // Next story becomes the left page
                staticLeftBox.innerHTML =
                    buildLeftHTML(
                        nextStory,
                        nextStoryId
                    );


                // Current number
                uiCurrentIdx.textContent =
                    String(
                        nextStoryId
                    ).padStart(2, '0');


                // Reset sheet
                flippingSheet.className =
                    'flipping-page-leaf';


                currentIndex =
                    targetIndex;


                isTurning =
                    false;


                updateActiveSpine(
                    nextStory
                );


            }, 850);


        }



        // ====================================================================
        // PREVIOUS
        // ====================================================================
        else {


            // Next left page
            leafFrontSlot.innerHTML =
                buildLeftHTML(
                    nextStory,
                    nextStoryId
                );


            // Current right page
            leafBackSlot.innerHTML =
                buildRightHTML(
                    currentStory,
                    currentStoryId
                );


            // Show next left page
            staticLeftBox.innerHTML =
                buildLeftHTML(
                    nextStory,
                    nextStoryId
                );


            flippingSheet.className =
                'flipping-page-leaf is-turning-backward';



            setTimeout(function() {


                staticRightBox.innerHTML =
                    buildRightHTML(
                        nextStory,
                        nextStoryId
                    );


                uiCurrentIdx.textContent =
                    String(
                        nextStoryId
                    ).padStart(2, '0');


                flippingSheet.className =
                    'flipping-page-leaf';


                currentIndex =
                    targetIndex;


                isTurning =
                    false;


                updateActiveSpine(
                    nextStory
                );


            }, 850);

        }

    }



    // ========================================================================
    // NEXT BUTTON
    // ========================================================================

    nextBtn.addEventListener(
        'click',
        function() {

            if (
                currentIndex + 1 <
                totalStories
            ) {

                flipTo(
                    currentIndex + 1,
                    'next'
                );

            }

        }
    );



    // ========================================================================
    // PREVIOUS BUTTON
    // ========================================================================

    prevBtn.addEventListener(
        'click',
        function() {

            if (
                currentIndex - 1 >= 0
            ) {

                flipTo(
                    currentIndex - 1,
                    'prev'
                );

            }

        }
    );



    // ========================================================================
    // BOOK SPINES
    // ========================================================================

    spineBtns.forEach(
        function(spine) {

            spine.addEventListener(
                'click',
                function() {


                    const targetStoryId =
                        parseInt(
                            spine.dataset.targetStory,
                            10
                        );


                    const targetIdx =
                        storyKeys.indexOf(
                            targetStoryId
                        );


                    if (
                        targetIdx !== -1 &&
                        targetIdx !== currentIndex
                    ) {


                        flipTo(

                            targetIdx,

                            targetIdx >
                            currentIndex

                            ?
                            'next' :
                            'prev'

                        );

                    }

                }
            );

        }
    );



    // ========================================================================
    // KEYBOARD
    // ========================================================================

    document.addEventListener(
        'keydown',
        function(event) {

            if (
                event.key === 'ArrowRight'
            ) {

                if (
                    currentIndex + 1 <
                    totalStories
                ) {

                    flipTo(
                        currentIndex + 1,
                        'next'
                    );

                }

            }


            if (
                event.key === 'ArrowLeft'
            ) {

                if (
                    currentIndex - 1 >= 0
                ) {

                    flipTo(
                        currentIndex - 1,
                        'prev'
                    );

                }

            }

        }
    );

});
</script>