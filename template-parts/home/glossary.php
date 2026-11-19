
<?php
/**
 * Vima Vidya - Dynamic Homepage Glossary Glimpse
 */

$vv_glossary_page = home_url('/glossary/');

$vv_glossary_posts = get_posts([
    'post_type'      => 'vv_glossary',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
]);

$vv_home_terms = [];

foreach ($vv_glossary_posts as $post) {

    $id = $post->ID;

    $field = function ($name) use ($id) {
        if (!function_exists('get_field')) {
            return '';
        }

        $value = get_field($name, $id);

        return is_string($value) ? $value : '';
    };

    $title = get_the_title($id);

    $short = $field('vv_short_definition');

    if (!$short) {
        $short = get_the_excerpt($id);
    }

    if (!$short) {
        $short = wp_trim_words(
            wp_strip_all_tags($post->post_content),
            30
        );
    }

    $letter = strtoupper(substr($title, 0, 1));

    if (!preg_match('/^[A-Z]$/', $letter)) {
        $letter = '#';
    }

    $vv_home_terms[] = [
        'id'          => $id,
        'title'       => $title,
        'slug'        => $post->post_name,
        'letter'      => $letter,
        'short'       => wp_strip_all_tags($short),
        'what'        => wp_strip_all_tags($field('vv_what_it_means')),
        'why'         => wp_strip_all_tags($field('vv_why_it_matters')),
        'how'         => wp_strip_all_tags($field('vv_how_it_works')),
        'scenario'    => wp_strip_all_tags($field('vv_real_life_scenario')),
        'event'       => wp_strip_all_tags($field('vv_case_event')),
        'application' => wp_strip_all_tags($field('vv_practical_application')),
        'outcome'     => wp_strip_all_tags($field('vv_outcome')),
    ];
}

// Pick a different word each day.
// Same word for all visitors on the same day.
$total = count($vv_home_terms);

$day_number = (int) wp_date('z');
$year       = (int) wp_date('Y');

$daily_index = $total > 0
    ? (($year * 366 + $day_number) % $total)
    : 0;

$today_term = $total > 0
    ? $vv_home_terms[$daily_index]
    : null;

?>

<section class="vv-glossary-section" id="vv-home-glossary">

    <div class="vv-container">

        <header class="vv-glossary-header">

            <h2 class="vv-glossary-header__title">
                Understand the Insurance Glossary
            </h2>

            <p class="vv-glossary-header__subtitle">
                Explore key definitions and examples to
                better navigate your coverage.
            </p>

        </header>

        <?php if ($today_term) : ?>

        <div class="vv-glossary-card">

            <!-- ALPHABET NAVIGATION -->

            <nav
                class="vv-glossary-card__alphabet-bar"
                aria-label="Alphabet Navigation"
            >

                <?php foreach (range('A', 'Z') as $letter) : ?>

                    <button
                        type="button"
                        class="vv-home-letter <?php
                            echo $today_term['letter'] === $letter
                                ? 'current-word'
                                : '';
                        ?>"
                        data-letter="<?php echo esc_attr($letter); ?>"
                        aria-pressed="<?php
                            echo $today_term['letter'] === $letter
                                ? 'true'
                                : 'false';
                        ?>"
                    >
                        <?php echo esc_html($letter); ?>
                    </button>

                <?php endforeach; ?>

            </nav>

            <!-- MAIN CONTENT -->

            <div class="vv-glossary-card__body">

                <!-- LEFT COLUMN -->

                <div class="vv-glossary-card__left-col">

                    <div class="vv-glossary-card__title-group">

                        <span class="vv-badge" id="vv-word-badge">
                            Today's Glossary Word
                        </span>

                        <h2
                            class="vv-glossary-card__word"
                            id="vv-home-word"
                        >
                            <?php echo esc_html($today_term['title']); ?>
                        </h2>

                    </div>

                    <p
                        class="vv-glossary-card__desc"
                        id="vv-home-definition"
                    >
                        <?php echo esc_html($today_term['short']); ?>
                    </p>

                    <div class="vv-glossary-card__actions">

                        <a
                            href="<?php
                                echo esc_url(
                                    add_query_arg(
                                        'term',
                                        $today_term['slug'],
                                        $vv_glossary_page
                                    )
                                );
                            ?>"
                            id="vv-understand-link"
                            class="vv-btn--theme"
                        >
                            Understand Term &rarr;
                        </a>

                        <a
                            href="<?php echo esc_url($vv_glossary_page); ?>"
                            class="vv-btn--outline"
                        >

                            <svg
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                aria-hidden="true"
                            >
                                <circle cx="11" cy="11" r="8"/>
                                <line
                                    x1="21"
                                    y1="21"
                                    x2="16.65"
                                    y2="16.65"
                                />
                            </svg>

                            Go to Glossary

                        </a>

                    </div>

                </div>

                <!-- RIGHT COLUMN -->

                <div class="vv-glossary-card__right-col">

                    <nav
                        class="vv-glossary-tabs"
                        role="tablist"
                        aria-label="Glossary information"
                    >

                        <button
                            type="button"
                            class="vv-tab-btn"
                            role="tab"
                            aria-selected="false"
                            data-tab="introduction"
                        >
                            Introduction
                        </button>

                        <button
                            type="button"
                            class="vv-tab-btn active"
                            role="tab"
                            aria-selected="true"
                            data-tab="description"
                        >
                            Description
                        </button>

                        <button
                            type="button"
                            class="vv-tab-btn"
                            role="tab"
                            aria-selected="false"
                            data-tab="case-study"
                        >
                            Case study
                        </button>

                    </nav>

                    <div class="vv-tab-content-container">

                        <!-- INTRODUCTION -->

                        <div
                            class="vv-tab-pane"
                            id="tab-introduction"
                            role="tabpanel"
                            hidden
                        >

                            <div class="vv-detail-group">

                                <h4 class="vv-detail-label">
                                    What does it mean?
                                </h4>

                                <p
                                    class="vv-detail-text"
                                    id="vv-intro-what"
                                ></p>

                            </div>

                            <div class="vv-detail-group">

                                <h4 class="vv-detail-label">
                                    Why it matters
                                </h4>

                                <p
                                    class="vv-detail-text"
                                    id="vv-intro-why"
                                ></p>

                            </div>

                        </div>

                        <!-- DESCRIPTION -->

                        <div
                            class="vv-tab-pane active"
                            id="tab-description"
                            role="tabpanel"
                        >

                            <div class="vv-detail-group">

                                <h4 class="vv-detail-label">What</h4>

                                <p
                                    class="vv-detail-text"
                                    id="vv-desc-what"
                                ></p>

                            </div>

                            <div class="vv-detail-group">

                                <h4 class="vv-detail-label">Why</h4>

                                <p
                                    class="vv-detail-text"
                                    id="vv-desc-why"
                                ></p>

                            </div>

                            <div class="vv-detail-group">

                                <h4 class="vv-detail-label">How</h4>

                                <p
                                    class="vv-detail-text"
                                    id="vv-desc-how"
                                ></p>

                            </div>

                        </div>

                        <!-- CASE STUDY -->

                        <div
                            class="vv-tab-pane"
                            id="tab-case-study"
                            role="tabpanel"
                            hidden
                        >

                            <div class="vv-detail-group">

                                <h4 class="vv-detail-label">
                                    Scenario
                                </h4>

                                <p
                                    class="vv-detail-text"
                                    id="vv-case-scenario"
                                ></p>

                            </div>

                            <div class="vv-detail-group">

                                <h4 class="vv-detail-label">
                                    Event
                                </h4>

                                <p
                                    class="vv-detail-text"
                                    id="vv-case-event"
                                ></p>

                            </div>

                            <div class="vv-detail-group">

                                <h4 class="vv-detail-label">
                                    Application
                                </h4>

                                <p
                                    class="vv-detail-text"
                                    id="vv-case-application"
                                ></p>

                            </div>

                            <div class="vv-detail-group">

                                <h4 class="vv-detail-label">
                                    Outcome
                                </h4>

                                <p
                                    class="vv-detail-text"
                                    id="vv-case-outcome"
                                ></p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <?php else : ?>

            <p>
                Glossary terms will appear here once published.
            </p>

        <?php endif; ?>

    </div>

</section>

<?php if ($today_term) : ?>

<script type="application/json" id="vv-home-glossary-data">
<?php
echo wp_json_encode(
    [
        'terms'      => $vv_home_terms,
        'dailyIndex' => $daily_index,
        'glossaryUrl'=> $vv_glossary_page,
    ],
    JSON_HEX_TAG |
    JSON_HEX_AMP |
    JSON_HEX_APOS |
    JSON_HEX_QUOT
);
?>
</script>

<?php endif; ?>
<script>

document.addEventListener('DOMContentLoaded', function () {

    const root = document.getElementById('vv-home-glossary');
    const dataElement = document.getElementById('vv-home-glossary-data');

    if (!root || !dataElement) return;

    let data;

    try {
        data = JSON.parse(dataElement.textContent);
    } catch (error) {
        console.error('Glossary data could not be loaded.', error);
        return;
    }

    const terms = data.terms || [];

    if (!terms.length) return;

    let currentIndex = data.dailyIndex || 0;

    const wordElement = root.querySelector('#vv-home-word');
    const definitionElement = root.querySelector('#vv-home-definition');
    const badge = root.querySelector('#vv-word-badge');
    const understandLink = root.querySelector('#vv-understand-link');

    const letters = Array.from(
        root.querySelectorAll('.vv-home-letter')
    );

    const tabButtons = Array.from(
        root.querySelectorAll('.vv-tab-btn')
    );

    const tabPanes = Array.from(
        root.querySelectorAll('.vv-tab-pane')
    );

    function setText(id, value) {
        const element = root.querySelector('#' + id);

        if (!element) return;

        element.textContent =
            value && value.trim()
                ? value.trim()
                : 'Information coming soon.';
    }

    function renderWord(index, isDaily = false) {

        const term = terms[index];

        if (!term) return;

        currentIndex = index;

        wordElement.textContent = term.title;

        definitionElement.textContent =
            term.short || 'Definition coming soon.';

        badge.textContent = isDaily
            ? "Today's Glossary Word"
            : 'Explore Glossary Term';

        // INTRODUCTION

        setText(
            'vv-intro-what',
            term.what || term.short
        );

        setText(
            'vv-intro-why',
            term.why
        );

        // DESCRIPTION

        setText(
            'vv-desc-what',
            term.what || term.short
        );

        setText(
            'vv-desc-why',
            term.why
        );

        setText(
            'vv-desc-how',
            term.how
        );

        // CASE STUDY

        setText(
            'vv-case-scenario',
            term.scenario
        );

        setText(
            'vv-case-event',
            term.event
        );

        setText(
            'vv-case-application',
            term.application
        );

        setText(
            'vv-case-outcome',
            term.outcome
        );

        // UPDATE DEEP LINK

        const url = new URL(
            data.glossaryUrl,
            window.location.origin
        );

        url.searchParams.set('term', term.slug);

        understandLink.href = url.toString();

        // UPDATE ALPHABET HIGHLIGHT

        letters.forEach(function (button) {

            const active =
                button.dataset.letter === term.letter;

            button.classList.toggle('current-word', active);

            button.setAttribute(
                'aria-pressed',
                String(active)
            );

        });

    }

    // ALPHABET CLICK

    letters.forEach(function (button) {

        button.addEventListener('click', function () {

            const letter = button.dataset.letter;

            const matchingIndexes = [];

            terms.forEach(function (term, index) {

                if (term.letter === letter) {
                    matchingIndexes.push(index);
                }

            });

            if (!matchingIndexes.length) return;

            // Repeated clicks on the same letter
            // cycle through all words starting with it.

            const currentPosition =
                matchingIndexes.indexOf(currentIndex);

            const nextPosition =
                (currentPosition + 1) % matchingIndexes.length;

            renderWord(
                matchingIndexes[nextPosition],
                false
            );

        });

    });

    // TABS

    function activateTab(tabName) {

        tabButtons.forEach(function (button) {

            const active =
                button.dataset.tab === tabName;

            button.classList.toggle('active', active);

            button.setAttribute(
                'aria-selected',
                String(active)
            );

        });

        tabPanes.forEach(function (pane) {

            const active =
                pane.id === 'tab-' + tabName;

            pane.classList.toggle('active', active);
            pane.hidden = !active;

        });

    }

    tabButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            activateTab(button.dataset.tab);

        });

    });

    // INITIAL RENDER

    renderWord(currentIndex, true);
    activateTab('description');

});

</script>