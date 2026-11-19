<?php



// =============================================================================



// VIMA VIDYA — STORIES THAT CONNECT



// Layout:



// LEFT  = Category + Title + Subtitle + Image



// RIGHT = Story Content + Takeaway



// =============================================================================



// =============================================================================



// SELECTED GLOSSARY TERMS (ACF relationship field: glossary_terms)



// =============================================================================



if (!function_exists('vv_story_selected_glossary')) {



    function vv_story_selected_glossary($story_id) {



        $selected = function_exists('get_field') ? get_field('glossary_terms', $story_id) : [];



        if (empty($selected)) return [];



        if (!is_array($selected)) $selected = [$selected];



        $result = [];



        foreach ($selected as $entry) {



            $id = is_object($entry) && isset($entry->ID) ? (int) $entry->ID : (int) $entry;



            if (!$id || get_post_type($id) !== 'vv_glossary' || get_post_status($id) !== 'publish') continue;



            $title = trim(get_the_title($id));



            if ($title === '') continue;



            $definition = function_exists('get_field') ? get_field('vv_short_definition', $id) : '';



            if (!is_string($definition) || trim($definition) === '') $definition = get_the_excerpt($id);



            if (trim((string) $definition) === '') $definition = wp_trim_words(wp_strip_all_tags(get_post_field('post_content', $id)), 30);



            $result[$title] = [



                'url' => add_query_arg('term', get_post_field('post_name', $id), home_url('/glossary/')),



                'definition' => wp_strip_all_tags((string) $definition),



            ];



        }



        return $result;



    }



}



// =============================================================================



// STORY CATEGORIES



// =============================================================================



$story_categories = get_terms([



    'taxonomy'   => 'vv_story_category',



    'hide_empty' => false,



    'orderby'    => 'name',



    'order'      => 'ASC',



]);



if (is_wp_error($story_categories)) $story_categories = [];



// Existing book-spine CSS classes are reused; new categories cycle through them.



// Each taxonomy term is keyed by its slug (rather than the old ACF code).



$spine_styles = [

    'spine-navy',

    'spine-green',

    'spine-burgundy',

    'spine-terracotta',

    'spine-slate',

    'spine-teal',

    'spine-purple',

    'spine-brown',

    'spine-emerald'

];



$category_icons = [



    'health' => 'fa-solid fa-heart-pulse',



    'life' => 'fa-solid fa-heart',



    'term' => 'fa-solid fa-shield-heart',



    'property' => 'fa-solid fa-house',



    'motor' => 'fa-solid fa-car',



    'travel' => 'fa-solid fa-plane',



    'personal_accident' => 'fa-solid fa-person-falling',



    'government_schemes' => 'fa-solid fa-landmark',



    'retirement' => 'fa-solid fa-person-cane',



    'child' => 'fa-solid fa-child',



    'critical' => 'fa-solid fa-kit-medical',



];



$categories = [];



foreach ($story_categories as $index => $term) {



    $slug = $term->slug;



    $categories[$slug] = [



        'title' => $term->name,



        'icon' => $category_icons[$slug] ?? 'fa-solid fa-book-open',



        'badge' => sprintf('%02d', $index + 1),



        'spine_class' => $spine_styles[$index % count($spine_styles)],



    ];



}



// =============================================================================



// GET STORIES FROM ACF / CPT



// =============================================================================



$stories = [];



$story_query = new WP_Query([



    'post_type'      => 'vima_story',



    'post_status'    => 'publish',

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



        $selected_glossary = vv_story_selected_glossary($post_id);



        // ---------------------------------------------------------------------



        // ACF FIELDS



        // ---------------------------------------------------------------------



        $assigned_terms = get_the_terms($post_id, 'vv_story_category');



        $category = (!is_wp_error($assigned_terms) && !empty($assigned_terms))



            ? $assigned_terms[0]->slug : '';



        $subtitle = (function_exists('get_field') ? get_field('story_subtitle', $post_id) : '');



        $image = (function_exists('get_field') ? get_field('story_image', $post_id) : '');



        $content = (function_exists('get_field') ? get_field('story_content', $post_id) : '');



        $takeaway = (function_exists('get_field') ? get_field('takeaway', $post_id) : '');



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



        $cat_key = $category;



        if (!$cat_key || !isset($categories[$cat_key])) {

        // Preserve imported stories that still use the old ACF Select field.

        $legacy_category = function_exists('get_field') ? get_field('story_category', $post_id) : '';

        if (is_array($legacy_category)) {

            $legacy_category = $legacy_category['value'] ?? ($legacy_category['label'] ?? '');

        }

        $legacy_slug = sanitize_title((string) $legacy_category);

        if ($legacy_slug && isset($categories[$legacy_slug])) {

            $cat_key = $legacy_slug;

        } else {

            $cat_key = 'uncategorized';

            if (!isset($categories[$cat_key])) {

                $categories[$cat_key] = [

                    'title' => 'Uncategorized',

                    'icon' => 'fa-solid fa-book-open',

                    'badge' => '00',

                    'spine_class' => 'spine-navy',

                ];

            }

        }

    }



        $cat_title = $categories[$cat_key]['title'];



        // ---------------------------------------------------------------------



        // STORY DATA



        // ---------------------------------------------------------------------



       $stories[$i] = [



    "type"        => $cat_key,



    "category"    => $cat_title,



    // WordPress POST TITLE



 "title" => html_entity_decode(
    get_the_title(),
    ENT_QUOTES | ENT_HTML5,
    'UTF-8'
),



    // ACF subtitle



    "subtitle"    => $subtitle ?: '',



    // Main WYSIWYG content



    "description" => $content ?: '',



    "glossary" => $selected_glossary,



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

// ======================================================
// GROUP STORIES BY INSURANCE CATEGORY
// ======================================================

$category_order = [
    'health',
    'health-insurance',
    'life',
    'life-insurance',
    'term',
    'term-insurance',
    'motor',
    'motor-insurance',
    'property',
    'property-insurance',
    'personal_accident',
    'personal-accident-insurance',
    'travel',
    'travel-insurance',
    'government_schemes',
    'government-schemes',
    'retirement',
    'child',
    'critical'
];

$category_priority = array_flip($category_order);

// Sort by category while preserving original order
// within each category.
uasort($stories, function ($a, $b) use ($category_priority) {

    $priority_a = $category_priority[$a['type']] ?? 999;
    $priority_b = $category_priority[$b['type']] ?? 999;

    return $priority_a <=> $priority_b;
});

// Rebuild sequential story IDs for the book reader.
$stories = array_values($stories);

$stories = array_combine(
    range(1, count($stories)),
    $stories
);

$total_stories = count($stories);



if ($total_stories === 0) {



    $placeholder_key = array_key_first($categories);



    if ($placeholder_key === null) {



        $placeholder_key = 'uncategorized';



        $categories[$placeholder_key] = [



            'title' => 'Stories', 'icon' => 'fa-solid fa-book-open',



            'badge' => '01', 'spine_class' => 'spine-navy'



        ];



    }



    $stories = [1 => [



        'type' => $placeholder_key,



        'category' => $categories[$placeholder_key]['title'],



        'title' => 'No stories published yet',



        'subtitle' => '',



        'description' => 'Publish a story and assign a Story Category to see it here.',



        'glossary' => [],



        'takeaway' => '',



        'image' => ''



    ]];



    $total_stories = 1;



}



$first_story_id =



    array_key_first($stories);



$first_story =



    $stories[$first_story_id];



?>



<!-- ========================================================================



     STORIES SECTION



\\\\\\======================================================================== -->



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
        <div class="book-navigation-layout">
            <button type="button" class="book-side-arrow book-side-prev" id="prevStoryBtn" aria-label="Previous story" disabled>
                <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
            </button>



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



\========================================================= -->



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



                            <img id="uiLeftImage" src="<?= esc_url($first_story['image']); ?>"

                                alt="<?= esc_attr($first_story['title']); ?>">



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



\\\\\\\\========================================================= -->



                <div class="book-page page-right" id="staticRightPage">



                    <div class="page-content-box story-content-page">



                        <!-- BOOKMARK -->



                        <div class="story-corner-bookmark" id="uiRightRibbon">



                            <?= sprintf("%02d", $first_story_id); ?>



                        </div>



                        <!-- STORY CONTENT -->



                        <div class="story-paragraphs" id="uiRightDesc">



                            <?= wp_kses_post($first_story['description']); ?>



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
            <button type="button" class="book-side-arrow book-side-next" id="nextStoryBtn" aria-label="Next story">
                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
            </button>
        </div>
        <div class="reader-control-row">
            <div class="page-indicator-pill" aria-live="polite">
                <span id="uiCurrentIdx"><?= sprintf('%02d', $first_story_id); ?></span>
                <span class="sep">/</span>
                <span><?= sprintf('%02d', $total_stories); ?></span>
            </div>
        </div>
    </div>
</section>



<!-- ========================================================================



     JAVASCRIPT



\\\\\\======================================================================== -->



<style>
/* Side arrows align to the changing book height. */
.book-navigation-layout { display:grid; grid-template-columns:44px minmax(0,1fr) 44px; gap:12px; align-items:center; width:100%; }
.book-navigation-layout .book-viewport-3d { min-width:0; width:100%; }
.book-side-arrow { display:flex; align-items:center; justify-content:center; width:44px; height:44px; border-radius:50%; border:1px solid #d9e5f4; background:#fff; color:#09294d; cursor:pointer; font-size:17px; box-shadow:0 5px 18px rgba(0,0,0,.25); transition:transform .2s, opacity .2s; }
.book-side-arrow:hover:not(:disabled) { transform:scale(1.08); }
.book-side-arrow:disabled { opacity:.35; cursor:not-allowed; }
.reader-control-row { justify-content:center; margin-top:16px; }
@media(max-width:1200px) { .book-navigation-layout { grid-template-columns:36px minmax(0,1fr) 36px; gap:7px; } .book-side-arrow { width:36px; height:36px; font-size:14px; } }
@media(max-width:600px) { .book-navigation-layout { grid-template-columns:30px minmax(0,1fr) 30px; gap:4px; } .book-side-arrow { width:30px; height:30px; font-size:12px; } }
</style>

<script>

document.addEventListener('DOMContentLoaded', function() {



    // ========================================================================



    // DATA FROM PHP



    // ========================================================================



    const stories =



        <?= wp_json_encode(



            $stories,



            JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT



        ); ?>;



    const categoryMeta =



        <?= wp_json_encode(



            $categories,



            JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT



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



    // Link only the glossary terms selected for this specific story.



    // Uses a text-node walker to preserve existing WYSIWYG formatting and links.



    function linkifyGlossary(html, selectedTerms = {}) {



        if (!html) return '';



        const container = document.createElement('div');



        container.innerHTML = html;



        const names = Object.keys(selectedTerms).filter(Boolean).sort((a, b) => b.length - a.length);



        if (!names.length) return html;
        const escapeRegex = str => str.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
        const expression = new RegExp('(^|[^\\p{L}\\p{N}])(' + names.map(escapeRegex).join('|') + ')(?=$|[^\\p{L}\\p{N}])', 'giu');

        const lookup = new Map(names.map(name => [name.toLocaleLowerCase(), selectedTerms[name]]));



        const walker = document.createTreeWalker(container, NodeFilter.SHOW_TEXT);



        const nodes = [];



        let node;



        while ((node = walker.nextNode())) {



            if (!node.nodeValue.trim() || node.parentElement?.closest(

                    'a, button, script, style, .glossary-term')) continue;



            nodes.push(node);



        }



        nodes.forEach(textNode => {



            const value = textNode.nodeValue;



            expression.lastIndex = 0;



            const fragment = document.createDocumentFragment();



            let lastIndex = 0,

                match, found = false;



            while ((match = expression.exec(value)) !== null) {



                const meta = lookup.get(match[2].toLocaleLowerCase());



                if (!meta?.url) continue;



                found = true;



                const termStart = match.index + match[1].length;



                fragment.appendChild(document.createTextNode(value.slice(lastIndex, termStart)));



                const wrapper = document.createElement('span');



                wrapper.className = 'glossary-term';



                const link = document.createElement('a');



                link.href = meta.url;



                link.textContent = match[2];



                const tooltip = document.createElement('span');



                tooltip.className = 'glossary-tooltip';



                tooltip.setAttribute('role', 'tooltip');



                tooltip.textContent = meta.definition || '';



                wrapper.append(link, tooltip);



                fragment.appendChild(wrapper);



                lastIndex = termStart + match[2].length;



            }



            if (found) {



                fragment.appendChild(document.createTextNode(value.slice(lastIndex)));



                textNode.replaceWith(fragment);



            }



        });



        return container.innerHTML;



    }



    // The first story is server-rendered, so apply its glossary links on load.



    const initialStoryContent = document.getElementById('uiRightDesc');



    if (initialStoryContent && storyKeys.length) {



        const first = stories[storyKeys[0]];



        initialStoryContent.innerHTML = linkifyGlossary(initialStoryContent.innerHTML, first.glossary || {});



    }



    // ========================================================================



    // ========================================================================



    // BUILD LEFT PAGE



    // TITLE + SUBTITLE + IMAGE



    // ========================================================================



    function buildLeftHTML(story) {



        const iconClass =



            categoryMeta[story.type]?.icon || 'fa-solid fa-book';



        const subtitleHTML = story.subtitle



            ?

            `<span class="story-title-subtitle">



               – ${escapeHTML(story.subtitle)}



           </span>`



            :

            '';



        const imageHTML = story.image



            ?

            `



            <div class="story-intro-image">



                <img



                    src="${escapeHTML(story.image)}"



                    alt="${escapeHTML(story.title)}"



                >



                <div class="story-image-caption">



                    <span></span>



                    REAL-LIFE STORY



                    <span></span>



                </div>



            </div>



          `



            :

            '';



        return `



        <div class="page-top-meta">



            <i class="${iconClass} meta-icon"></i>



            <span class="meta-category">



                ${escapeHTML(story.category)}



            </span>



        </div>



        <h2 class="story-title">



            <span class="story-title-main">



                ${escapeHTML(story.title)}



            </span>



            ${subtitleHTML}



        </h2>



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



            ${linkifyGlossary(story.description, story.glossary || {})}



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
        updateNavigationButtons();



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
                updateNavigationButtons();



            }, window.matchMedia('(max-width: 1024px)').matches ? 0 : 850);



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
                updateNavigationButtons();



            }, window.matchMedia('(max-width: 1024px)').matches ? 0 : 850);



        }



    }



    // ========================================================================



    // NEXT BUTTON



    // ========================================================================



    function updateNavigationButtons() {
        prevBtn.disabled = isTurning || currentIndex === 0;
        nextBtn.disabled = isTurning || currentIndex === totalStories - 1;
    }
    updateNavigationButtons();

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