<?php
/**
 * Template Name: Vima Vidya Interactive Glossary
 * Description: Interactive insurance glossary with categories, A-Z,
 * searchable terms and a dynamic detail panel.
 */

defined('ABSPATH') || exit;

get_header();

/* =========================================================
   HELPERS
========================================================= */

/**
 * Get an ACF field safely.
 */
if (!function_exists('vv_glossary_get_field')) {
    function vv_glossary_get_field($field_name, $post_id) {
        if (!function_exists('get_field')) {
            return '';
        }

        $value = get_field($field_name, $post_id);

        return ($value !== null && $value !== false) ? $value : '';
    }
}

/**
 * Convert ACF file fields, which may return an array,
 * attachment ID, or URL, into a usable URL.
 */
if (!function_exists('vv_glossary_resource_url')) {
    function vv_glossary_resource_url($value) {
        if (is_array($value)) {
            if (!empty($value['url'])) {
                return $value['url'];
            }

            if (!empty($value['ID'])) {
                return wp_get_attachment_url((int) $value['ID']) ?: '';
            }

            if (!empty($value['id'])) {
                return wp_get_attachment_url((int) $value['id']) ?: '';
            }

            return '';
        }

        if (is_numeric($value)) {
            return wp_get_attachment_url((int) $value) ?: '';
        }

        if (is_string($value) && filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        }

        return '';
    }
}

/**
 * Render ACF rich text or plain text safely.
 */
if (!function_exists('vv_glossary_render_content')) {
    function vv_glossary_render_content($content) {
        if (is_array($content) || is_object($content)) {
            return '';
        }

        if (!is_string($content) || trim($content) === '') {
            return '<p class="vv-ig__placeholder">Content for this section will be available soon.</p>';
        }

        return wp_kses_post(wpautop($content));
    }
}

/**
 * Get an embed URL for common YouTube links.
 */
if (!function_exists('vv_glossary_youtube_embed_url')) {
    function vv_glossary_youtube_embed_url($url) {
        if (!is_string($url) || !filter_var($url, FILTER_VALIDATE_URL)) {
            return '';
        }

        $host = strtolower((string) wp_parse_url($url, PHP_URL_HOST));
        $host = preg_replace('/^www\./', '', $host);

        $video_id = '';

        if ($host === 'youtu.be') {
            $video_id = trim((string) wp_parse_url($url, PHP_URL_PATH), '/');
        } elseif (
            $host === 'youtube.com' ||
            $host === 'm.youtube.com' ||
            $host === 'youtube-nocookie.com'
        ) {
            $path = (string) wp_parse_url($url, PHP_URL_PATH);

            if ($path === '/watch') {
                $query = [];
                parse_str((string) wp_parse_url($url, PHP_URL_QUERY), $query);
                $video_id = isset($query['v']) ? $query['v'] : '';
            } elseif (preg_match('#^/(embed|shorts)/([^/]+)#', $path, $matches)) {
                $video_id = $matches[2];
            }
        }

        if (!preg_match('/^[A-Za-z0-9_-]{11}$/', $video_id)) {
            return '';
        }

        return 'https://www.youtube-nocookie.com/embed/' . $video_id;
    }
}

/* =========================================================
   CATEGORIES
========================================================= */

$glossary_categories = get_terms([
    'taxonomy'   => 'vv_glossary_category',
    'hide_empty' => false,
    'orderby'    => 'term_id',
    'order'      => 'ASC',
]);

if (is_wp_error($glossary_categories)) {
    $glossary_categories = [];
}

/*
 * Optional preferred category order.
 * Any other categories are shown after these four.
 */
$preferred_category_order = [
    'fundamentals-of-insurance',
    'types-of-policies',
    'process',
    'dos-and-donts',
];

usort($glossary_categories, function ($a, $b) use ($preferred_category_order) {
    $a_index = array_search($a->slug, $preferred_category_order, true);
    $b_index = array_search($b->slug, $preferred_category_order, true);

    $a_index = ($a_index === false) ? 999 : $a_index;
    $b_index = ($b_index === false) ? 999 : $b_index;

    if ($a_index === $b_index) {
        return strcasecmp($a->name, $b->name);
    }

    return $a_index <=> $b_index;
});

/* =========================================================
   GLOSSARY TERMS
========================================================= */

$glossary_query = new WP_Query([
    'post_type'                => 'vv_glossary',
    'post_status'              => 'publish',
    'posts_per_page'           => -1,
    'orderby'                  => 'title',
    'order'                    => 'ASC',
    'no_found_rows'            => true,
    'update_post_meta_cache'   => true,
    'update_post_term_cache'   => true,
]);

$glossary_items = [];

if ($glossary_query->have_posts()) {
    while ($glossary_query->have_posts()) {
        $glossary_query->the_post();

        $post_id = get_the_ID();
        $title   = get_the_title($post_id);

        $short_definition = vv_glossary_get_field(
            'vv_short_definition',
            $post_id
        );

        if (!is_string($short_definition)) {
            $short_definition = '';
        }

        if (trim($short_definition) === '') {
            $short_definition = get_the_excerpt($post_id);
        }

        if (trim((string) $short_definition) === '') {
            $short_definition = wp_trim_words(
                wp_strip_all_tags(get_post_field('post_content', $post_id)),
                30
            );
        }

        $what_it_means = vv_glossary_get_field(
            'vv_what_it_means',
            $post_id
        );

        $why_it_matters = vv_glossary_get_field(
            'vv_why_it_matters',
            $post_id
        );

        $how_it_works = vv_glossary_get_field(
            'vv_how_it_works',
            $post_id
        );

        $real_life_scenario = vv_glossary_get_field(
            'vv_real_life_scenario',
            $post_id
        );

        $practical_application = vv_glossary_get_field(
            'vv_practical_application',
            $post_id
        );

        $outcome = vv_glossary_get_field(
            'vv_outcome',
            $post_id
        );

        $youtube_url = vv_glossary_get_field(
            'vv_youtube_url',
            $post_id
        );

        $audio_value = vv_glossary_get_field(
            'vv_audio_file',
            $post_id
        );

        $pdf_value = vv_glossary_get_field(
            'vv_pdf_file',
            $post_id
        );

        $case_event = vv_glossary_get_field(
            'vv_case_event',
            $post_id
        );

        $audio_url = vv_glossary_resource_url($audio_value);
        $pdf_url   = vv_glossary_resource_url($pdf_value);

        $youtube_url = is_string($youtube_url) ? trim($youtube_url) : '';
        $youtube_embed = vv_glossary_youtube_embed_url($youtube_url);

        $thumbnail = get_the_post_thumbnail_url($post_id, 'large');

        $post_terms = get_the_terms(
            $post_id,
            'vv_glossary_category'
        );

        $categories = [];

        if ($post_terms && !is_wp_error($post_terms)) {
            foreach ($post_terms as $term) {
                $categories[] = [
                    'name' => $term->name,
                    'slug' => $term->slug,
                ];
            }
        }

        $first_character = function_exists('mb_substr')
            ? mb_substr($title, 0, 1, 'UTF-8')
            : substr($title, 0, 1);

        $letter = strtoupper($first_character);

        if (!preg_match('/^[A-Z]$/', $letter)) {
            $letter = '#';
        }

        $search_text = $title . ' ' . $short_definition;

        foreach ($categories as $category) {
            $search_text .= ' ' . $category['name'];
        }

        $glossary_items[] = [
            'id'                    => $post_id,
            'title'                 => $title,
            'url'                   => get_permalink($post_id),
            'letter'                => $letter,
            'short_definition'      => $short_definition,
            'what_it_means'         => $what_it_means,
            'why_it_matters'        => $why_it_matters,
            'how_it_works'          => $how_it_works,
            'real_life_scenario'    => $real_life_scenario,
            'practical_application' => $practical_application,
            'outcome'               => $outcome,
            'youtube_url'           => $youtube_url,
            'youtube_embed'         => $youtube_embed,
            'audio_url'             => $audio_url,
            'pdf_url'               => $pdf_url,
            'case_event'            => $case_event,
            'thumbnail'             => $thumbnail,
            'categories'            => $categories,
            'search'                => $search_text,
        ];
    }
}

wp_reset_postdata();

$total_terms = count($glossary_items);
$alphabet   = range('A', 'Z');

/* =========================================================
   DEFAULT SELECTED TERM
========================================================= */

$default_term_id = !empty($glossary_items)
    ? (int) $glossary_items[0]['id']
    : 0;

?>

<main id="primary" class="site-main vv-ig">

    <!-- ===============================================
         PAGE HEADER
    ================================================ -->

    <section class="vv-ig__hero">
        <div class="vv-ig__hero-inner">

            <div class="vv-ig__hero-copy">
                <span class="vv-ig__eyebrow">
                    VIMA VIDYA KNOWLEDGE CENTRE
                </span>

                <h1 class="vv-ig__hero-title">
                    Interactive <span>Glossary</span>
                </h1>

                <p class="vv-ig__hero-description">
                    Explore insurance terminology through simple
                    explanations, practical examples and real-life stories.
                </p>
            </div>

            <div class="vv-ig__hero-mark" aria-hidden="true">
                <span>Aa</span>
                <i></i>
            </div>

        </div>
    </section>


    <!-- ===============================================
         CATEGORY NAVIGATION
    ================================================ -->

    <section class="vv-ig__workspace">

        <div class="vv-ig__container">

            <nav
                class="vv-ig__category-nav"
                aria-label="Glossary categories"
            >

                <button
                    type="button"
                    class="vv-ig__category-tab is-active"
                    data-category="all"
                    aria-pressed="true"
                >
                    All Terms
                </button>

                <?php foreach ($glossary_categories as $category) : ?>

                    <button
                        type="button"
                        class="vv-ig__category-tab"
                        data-category="<?php echo esc_attr($category->slug); ?>"
                        aria-pressed="false"
                    >
                        <?php echo esc_html($category->name); ?>
                    </button>

                <?php endforeach; ?>

            </nav>


            <!-- ===========================================
                 A-Z FILTER
            ============================================ -->

            <div class="vv-ig__alphabet-wrap">

                <div
                    class="vv-ig__alphabet"
                    role="group"
                    aria-label="Filter terms alphabetically"
                >

                    <button
                        type="button"
                        class="vv-ig__letter is-active"
                        data-letter="all"
                        aria-pressed="true"
                    >
                        All
                    </button>

                    <?php foreach ($alphabet as $letter) : ?>

                        <button
                            type="button"
                            class="vv-ig__letter"
                            data-letter="<?php echo esc_attr($letter); ?>"
                            aria-pressed="false"
                        >
                            <?php echo esc_html($letter); ?>
                        </button>

                    <?php endforeach; ?>

                    <button
                        type="button"
                        class="vv-ig__letter"
                        data-letter="#"
                        aria-pressed="false"
                    >
                        #
                    </button>

                </div>

            </div>


            <!-- ===========================================
                 TWO-COLUMN INTERACTIVE LAYOUT
            ============================================ -->

            <div class="vv-ig__layout">

                <!-- LEFT: TERM LIST -->

                <aside class="vv-ig__sidebar">

                    <div class="vv-ig__sidebar-heading">
                        <div>
                            <span class="vv-ig__small-label">
                                GLOSSARY INDEX
                            </span>

                            <h2>Explore terms</h2>
                        </div>

                        <span class="vv-ig__term-count">
                            <span data-visible-count>
                                <?php echo esc_html($total_terms); ?>
                            </span>
                        </span>
                    </div>


                    <div class="vv-ig__search">

                        <label
                            class="screen-reader-text"
                            for="vv-ig-search"
                        >
                            Search glossary terms
                        </label>

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            aria-hidden="true"
                        >
                            <circle
                                cx="10.8"
                                cy="10.8"
                                r="6.8"
                                stroke="currentColor"
                                stroke-width="1.7"
                            />
                            <path
                                d="M16 16L21 21"
                                stroke="currentColor"
                                stroke-width="1.7"
                                stroke-linecap="round"
                            />
                        </svg>

                        <input
                            type="search"
                            id="vv-ig-search"
                            placeholder="Search terms..."
                            autocomplete="off"
                        />

                    </div>


                    <div
                        class="vv-ig__term-list"
                        role="listbox"
                        aria-label="Glossary terms"
                    >

                        <?php foreach ($glossary_items as $item) : ?>

                            <?php
                            $category_slugs = array_column(
                                $item['categories'],
                                'slug'
                            );

                            $is_selected = (
                                $item['id'] === $default_term_id
                            );
                            ?>

                            <button
                                type="button"
                                class="vv-ig__term-item<?php echo $is_selected ? ' is-active' : ''; ?>"
                                data-term-id="<?php echo esc_attr($item['id']); ?>"
                                data-title="<?php echo esc_attr($item['title']); ?>"
                                data-letter="<?php echo esc_attr($item['letter']); ?>"
                                data-categories="<?php echo esc_attr(implode(' ', $category_slugs)); ?>"
                                data-search="<?php echo esc_attr($item['search']); ?>"
                                role="option"
                                aria-selected="<?php echo $is_selected ? 'true' : 'false'; ?>"
                            >

                                <span class="vv-ig__term-item-copy">
                                    <span class="vv-ig__term-name">
                                        <?php echo esc_html($item['title']); ?>
                                    </span>

                                    <?php if (!empty($item['categories'])) : ?>
                                        <span class="vv-ig__term-category">
                                            <?php
                                            echo esc_html(
                                                $item['categories'][0]['name']
                                            );
                                            ?>
                                        </span>
                                    <?php endif; ?>
                                </span>

                                <span
                                    class="vv-ig__term-arrow"
                                    aria-hidden="true"
                                >
                                    ›
                                </span>

                            </button>

                        <?php endforeach; ?>


                        <div
                            class="vv-ig__list-empty"
                            data-list-empty
                            hidden
                        >
                            <p>No matching terms found.</p>

                            <button type="button" data-reset>
                                Clear filters
                            </button>
                        </div>

                    </div>

                    <div class="vv-ig__sidebar-footer">
                        <span class="vv-ig__sidebar-dot"></span>
                        <span>Learn at your own pace</span>
                    </div>

                </aside>


                <!-- RIGHT: TERM DETAILS -->

                <section
                    class="vv-ig__detail"
                    aria-label="Selected glossary term"
                    aria-live="polite"
                >

                    <?php if (!empty($glossary_items)) : ?>

                        <?php foreach ($glossary_items as $item) : ?>

                            <?php
                            $is_selected = (
                                $item['id'] === $default_term_id
                            );
                            ?>

                            <article
                                class="vv-ig__detail-panel"
                                data-detail-id="<?php echo esc_attr($item['id']); ?>"
                                <?php echo $is_selected ? '' : 'hidden'; ?>
                            >

                                <!-- Term header -->

                                <header class="vv-ig__detail-header">

                                    <div class="vv-ig__detail-breadcrumb">
                                        <span>Glossary</span>
                                        <span aria-hidden="true">/</span>

                                        <?php
                                        if (!empty($item['categories'])) {
                                            echo esc_html(
                                                $item['categories'][0]['name']
                                            );
                                        } else {
                                            echo 'Insurance terminology';
                                        }
                                        ?>
                                    </div>

                                    <div class="vv-ig__detail-title-row">

                                        <div>
                                            <h2 class="vv-ig__detail-title">
                                                <?php echo esc_html($item['title']); ?>
                                            </h2>

                                            <?php if (!empty($item['short_definition'])) : ?>
                                                <p class="vv-ig__detail-subtitle">
                                                    <?php
                                                    echo esc_html(
                                                        wp_trim_words(
                                                            wp_strip_all_tags(
                                                                $item['short_definition']
                                                            ),
                                                            30
                                                        )
                                                    );
                                                    ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>

                                        <span class="vv-ig__detail-initial">
                                            <?php echo esc_html($item['letter']); ?>
                                        </span>

                                    </div>

                                    <?php if (!empty($item['categories'])) : ?>
                                        <div class="vv-ig__detail-categories">
                                            <?php foreach ($item['categories'] as $category) : ?>
                                                <span>
                                                    <?php echo esc_html($category['name']); ?>
                                                </span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                                </header>


                                <!-- Detail tabs -->

                                <div
                                    class="vv-ig__detail-tabs"
                                    role="tablist"
                                    aria-label="<?php echo esc_attr($item['title']); ?> sections"
                                >

                                    <button
                                        type="button"
                                        class="vv-ig__detail-tab is-active"
                                        role="tab"
                                        aria-selected="true"
                                        data-detail-tab="introduction"
                                    >
                                        Introduction
                                    </button>

                                    <button
                                        type="button"
                                        class="vv-ig__detail-tab"
                                        role="tab"
                                        aria-selected="false"
                                        data-detail-tab="description"
                                    >
                                        Description
                                    </button>

                                    <button
                                        type="button"
                                        class="vv-ig__detail-tab"
                                        role="tab"
                                        aria-selected="false"
                                        data-detail-tab="case-study"
                                    >
                                        Case study
                                    </button>

                                </div>


                                <!-- INTRODUCTION -->

                                <div
                                    class="vv-ig__tab-content is-active"
                                    data-tab-content="introduction"
                                    role="tabpanel"
                                >

                                    <?php if (!empty($item['thumbnail'])) : ?>
                                        <div class="vv-ig__feature-image">
                                            <img
                                                src="<?php echo esc_url($item['thumbnail']); ?>"
                                                alt="<?php echo esc_attr($item['title']); ?>"
                                                loading="lazy"
                                            />
                                        </div>
                                    <?php endif; ?>

                                    <div class="vv-ig__content-block">

                                        <span class="vv-ig__content-kicker">
                                            THE BASICS
                                        </span>

                                        <h3>What does it mean?</h3>

                                        <?php
                                        echo vv_glossary_render_content(
                                            $item['what_it_means']
                                                ?: $item['short_definition']
                                        );
                                        ?>

                                    </div>

                                    <div class="vv-ig__content-divider"></div>

                                    <div class="vv-ig__content-block">
                                        <h3>Why it matters</h3>

                                        <?php
                                        echo vv_glossary_render_content(
                                            $item['why_it_matters']
                                        );
                                        ?>
                                    </div>

                                    <div class="vv-ig__content-divider"></div>

                                    <div class="vv-ig__content-block">
                                        <h3>How it works</h3>

                                        <?php
                                        echo vv_glossary_render_content(
                                            $item['how_it_works']
                                        );
                                        ?>
                                    </div>

                                    <?php if (!empty($item['audio_url'])) : ?>

                                        <div class="vv-ig__resource-section">

                                            <div class="vv-ig__resource-heading">
                                                <h3>Listen to this term</h3>
                                                <span>AUDIO</span>
                                            </div>

                                            <audio controls preload="none">
                                                <source
                                                    src="<?php echo esc_url($item['audio_url']); ?>"
                                                />
                                                Your browser does not support audio playback.
                                            </audio>

                                        </div>

                                    <?php endif; ?>

                                </div>


                                <!-- DESCRIPTION -->

                                <div
                                    class="vv-ig__tab-content"
                                    data-tab-content="description"
                                    role="tabpanel"
                                    hidden
                                >

                                    <?php if (!empty($item['youtube_embed'])) : ?>

                                        <div class="vv-ig__resource-section">

                                            <div class="vv-ig__resource-heading">
                                                <h3>Watch and learn</h3>
                                                <span>VIDEO</span>
                                            </div>

                                            <div class="vv-ig__video">
                                                <iframe
                                                    src="<?php echo esc_url($item['youtube_embed']); ?>"
                                                    title="<?php echo esc_attr($item['title'] . ' video'); ?>"
                                                    loading="lazy"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin"
                                                    allowfullscreen
                                                ></iframe>
                                            </div>

                                        </div>

                                    <?php elseif (!empty($item['youtube_url'])) : ?>

                                        <div class="vv-ig__resource-link">
                                            <a
                                                href="<?php echo esc_url($item['youtube_url']); ?>"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                            >
                                                Watch the video
                                                <span aria-hidden="true">↗</span>
                                            </a>
                                        </div>

                                    <?php endif; ?>

                                    <div class="vv-ig__content-block">

                                        <span class="vv-ig__content-kicker">
                                            APPLICATION
                                        </span>

                                        <h3>Practical application</h3>

                                        <?php
                                        echo vv_glossary_render_content(
                                            $item['practical_application']
                                        );
                                        ?>

                                    </div>

                                    <?php if (!empty($item['outcome'])) : ?>

                                        <div class="vv-ig__outcome">

                                            <span>KEY TAKEAWAY</span>

                                            <?php
                                            echo vv_glossary_render_content(
                                                $item['outcome']
                                            );
                                            ?>

                                        </div>

                                    <?php endif; ?>

                                </div>


                                <!-- CASE STUDY -->

                                <div
                                    class="vv-ig__tab-content"
                                    data-tab-content="case-study"
                                    role="tabpanel"
                                    hidden
                                >

                                    <div class="vv-ig__case-intro">

                                        <span class="vv-ig__content-kicker">
                                            REAL-LIFE LEARNING
                                        </span>

                                        <h3>See it in practice</h3>

                                        <p>
                                            Explore how this insurance concept
                                            can apply in a real-life situation.
                                        </p>

                                    </div>

                                    <?php if (!empty($item['case_event'])) : ?>

                                        <div class="vv-ig__case-event">
                                            <span>CASE / EVENT</span>

                                            <?php
                                            echo vv_glossary_render_content(
                                                $item['case_event']
                                            );
                                            ?>
                                        </div>

                                    <?php endif; ?>

                                    <div class="vv-ig__case-content">

                                        <?php
                                        echo vv_glossary_render_content(
                                            $item['real_life_scenario']
                                        );
                                        ?>

                                    </div>

                                    <?php if (!empty($item['outcome'])) : ?>

                                        <div class="vv-ig__outcome">

                                            <span>WHAT WE LEARN</span>

                                            <?php
                                            echo vv_glossary_render_content(
                                                $item['outcome']
                                            );
                                            ?>

                                        </div>

                                    <?php endif; ?>

                                </div>


                                <!-- RESOURCE FOOTER -->

                                <?php if (!empty($item['pdf_url'])) : ?>

                                    <footer class="vv-ig__detail-footer">

                                        <div class="vv-ig__pdf-icon" aria-hidden="true">
                                            PDF
                                        </div>

                                        <div class="vv-ig__pdf-copy">
                                            <strong>Further reading</strong>
                                            <span>Download the resource for reference.</span>
                                        </div>

                                        <a
                                            href="<?php echo esc_url($item['pdf_url']); ?>"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="vv-ig__pdf-link"
                                        >
                                            View PDF
                                            <span aria-hidden="true">↗</span>
                                        </a>

                                    </footer>

                                <?php endif; ?>

                            </article>

                        <?php endforeach; ?>


                        <!-- No term selected -->

                        <div class="vv-ig__no-selection" data-no-selection hidden>
                            <div class="vv-ig__no-selection-mark">Aa</div>
                            <h2>Select a glossary term</h2>
                            <p>
                                Choose a term from the list to explore
                                its meaning and learning resources.
                            </p>
                        </div>

                    <?php else : ?>

                        <div class="vv-ig__no-selection">
                            <div class="vv-ig__no-selection-mark">Aa</div>
                            <h2>Your glossary is taking shape</h2>
                            <p>
                                Published glossary terms will appear here
                                when you add them in WordPress.
                            </p>
                        </div>

                    <?php endif; ?>

                </section>

            </div>

        </div>

    </section>

</main>


<!-- ===============================================
     INTERACTIVE GLOSSARY JAVASCRIPT
================================================ -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    const root = document.querySelector('.vv-ig');

    if (!root) return;

    const searchInput = root.querySelector('#vv-ig-search');
    const termItems = Array.from(
        root.querySelectorAll('.vv-ig__term-item')
    );
    const detailPanels = Array.from(
        root.querySelectorAll('.vv-ig__detail-panel')
    );
    const categoryButtons = Array.from(
        root.querySelectorAll('[data-category]')
    );
    const letterButtons = Array.from(
        root.querySelectorAll('[data-letter]')
    );
    const countElement = root.querySelector('[data-visible-count]');
    const listEmpty = root.querySelector('[data-list-empty]');
    const noSelection = root.querySelector('[data-no-selection]');

    let activeCategory = 'all';
    let activeLetter = 'all';
    let selectedTermId = '';

    const normalize = function (value) {
        return (value || '')
            .toLocaleLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .trim();
    };

    function getVisibleItems() {
        return termItems.filter(function (item) {
            return !item.hidden;
        });
    }

    function activateTerm(termId) {
        const selectedItem = termItems.find(function (item) {
            return item.dataset.termId === String(termId) && !item.hidden;
        });

        if (!selectedItem) {
            selectedTermId = '';

            termItems.forEach(function (item) {
                item.classList.remove('is-active');
                item.setAttribute('aria-selected', 'false');
            });

            detailPanels.forEach(function (panel) {
                panel.hidden = true;
            });

            if (noSelection) {
                noSelection.hidden = false;
            }

            return;
        }

        selectedTermId = String(termId);

        termItems.forEach(function (item) {
            const isActive = item === selectedItem;

            item.classList.toggle('is-active', isActive);
            item.setAttribute('aria-selected', String(isActive));
        });

        detailPanels.forEach(function (panel) {
            const isActive =
                panel.dataset.detailId === selectedTermId;

            panel.hidden = !isActive;

            if (isActive) {
                resetDetailTabs(panel);
            }
        });

        if (noSelection) {
            noSelection.hidden = true;
        }
    }

    function resetDetailTabs(panel) {
        const tabs = Array.from(
            panel.querySelectorAll('[data-detail-tab]')
        );

        const contents = Array.from(
            panel.querySelectorAll('[data-tab-content]')
        );

        tabs.forEach(function (tab) {
            const isIntroduction =
                tab.dataset.detailTab === 'introduction';

            tab.classList.toggle('is-active', isIntroduction);
            tab.setAttribute('aria-selected', String(isIntroduction));
        });

        contents.forEach(function (content) {
            const isIntroduction =
                content.dataset.tabContent === 'introduction';

            content.classList.toggle('is-active', isIntroduction);
            content.hidden = !isIntroduction;
        });
    }

    function applyFilters() {
        const searchValue = normalize(searchInput ? searchInput.value : '');
        let visibleCount = 0;

        termItems.forEach(function (item) {
            const itemTitle = normalize(item.dataset.title);
            const itemSearch = normalize(item.dataset.search);
            const itemLetter = item.dataset.letter || '#';

            const categories = (item.dataset.categories || '')
                .split(/\s+/)
                .filter(Boolean);

            const matchesSearch =
                !searchValue ||
                itemTitle.includes(searchValue) ||
                itemSearch.includes(searchValue);

            const matchesCategory =
                activeCategory === 'all' ||
                categories.includes(activeCategory);

            const matchesLetter =
                activeLetter === 'all' ||
                itemLetter === activeLetter;

            const isVisible =
                matchesSearch &&
                matchesCategory &&
                matchesLetter;

            item.hidden = !isVisible;

            if (isVisible) {
                visibleCount++;
            }
        });

        if (countElement) {
            countElement.textContent = visibleCount;
        }

        if (listEmpty) {
            listEmpty.hidden = visibleCount !== 0;
        }

        const selectedItem = termItems.find(function (item) {
            return item.dataset.termId === selectedTermId && !item.hidden;
        });

        if (!selectedItem) {
            const firstVisible = getVisibleItems()[0];

            if (firstVisible) {
                activateTerm(firstVisible.dataset.termId);
            } else {
                activateTerm('');
            }
        }
    }

    // Select a glossary term.
    termItems.forEach(function (item) {
        item.addEventListener('click', function () {
            activateTerm(item.dataset.termId);
        });
    });

    // Filter by category.
    categoryButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            activeCategory = button.dataset.category || 'all';

            categoryButtons.forEach(function (otherButton) {
                const isActive = otherButton === button;

                otherButton.classList.toggle('is-active', isActive);
                otherButton.setAttribute('aria-pressed', String(isActive));
            });

            applyFilters();
        });
    });

    // Filter alphabetically.
    letterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            activeLetter = button.dataset.letter || 'all';

            letterButtons.forEach(function (otherButton) {
                const isActive = otherButton === button;

                otherButton.classList.toggle('is-active', isActive);
                otherButton.setAttribute('aria-pressed', String(isActive));
            });

            applyFilters();
        });
    });

    // Search terms.
    if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
    }

    // Tabs within the currently selected term.
    root.querySelectorAll('.vv-ig__detail-tab').forEach(function (tab) {
        tab.addEventListener('click', function () {
            const panel = tab.closest('.vv-ig__detail-panel');

            if (!panel) return;

            const targetName = tab.dataset.detailTab;

            panel.querySelectorAll('[data-detail-tab]').forEach(function (otherTab) {
                const isActive = otherTab === tab;

                otherTab.classList.toggle('is-active', isActive);
                otherTab.setAttribute('aria-selected', String(isActive));
            });

            panel.querySelectorAll('[data-tab-content]').forEach(function (content) {
                const isActive =
                    content.dataset.tabContent === targetName;

                content.classList.toggle('is-active', isActive);
                content.hidden = !isActive;
            });
        });
    });

    // Reset filters.
    root.querySelectorAll('[data-reset]').forEach(function (button) {
        button.addEventListener('click', function () {
            if (searchInput) {
                searchInput.value = '';
            }

            activeCategory = 'all';
            activeLetter = 'all';

            categoryButtons.forEach(function (item) {
                const isActive = item.dataset.category === 'all';

                item.classList.toggle('is-active', isActive);
                item.setAttribute('aria-pressed', String(isActive));
            });

            letterButtons.forEach(function (item) {
                const isActive = item.dataset.letter === 'all';

                item.classList.toggle('is-active', isActive);
                item.setAttribute('aria-pressed', String(isActive));
            });

            applyFilters();

            if (searchInput) {
                searchInput.focus();
            }
        });
    });

    // Initialize first term and its Introduction tab.
    const initialItem = termItems.find(function (item) {
        return item.classList.contains('is-active');
    }) || termItems[0];

    if (initialItem) {
        activateTerm(initialItem.dataset.termId);
    }

    applyFilters();
});
</script>

<?php get_footer(); ?>