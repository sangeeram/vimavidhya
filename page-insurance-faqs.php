<?php
/**
 * Template Name: Insurance FAQs
 * Vima Vidya - Dynamic FAQ Library
 */

defined('ABSPATH') || exit;

get_header();

$categories = get_terms([
    'taxonomy'   => 'vv_faq_category',
    'hide_empty' => true,
]);

$faq_query = new WP_Query([
    'post_type'      => 'vv_faq',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => [
        'menu_order' => 'ASC',
        'title'      => 'ASC',
    ],
]);

?>

<main class="vv-faq-page">

    <section class="vv-faq-hero">
        <div class="vv-faq-container">

            <span class="vv-faq-eyebrow">
                VIMA VIDYA KNOWLEDGE HUB
            </span>

            <h1>Frequently Asked Questions</h1>

            <p>
                Clear answers to your insurance questions.
                Explore topics, understand coverage,
                and make informed decisions.
            </p>

            <div class="vv-faq-search">
                <input
                    type="search"
                    id="vvFaqSearch"
                    placeholder="Search your questions..."
                    aria-label="Search insurance FAQs"
                >
            </div>

        </div>
    </section>

    <section class="vv-faq-library">

        <div class="vv-faq-container">

            <div class="vv-faq-filters">

                <button
                    type="button"
                    class="vv-faq-filter active"
                    data-category="all"
                    aria-pressed="true"
                >
                    All FAQs
                </button>

                <?php if (
                    !is_wp_error($categories) &&
                    !empty($categories)
                ) : ?>

                    <?php foreach ($categories as $category) : ?>

                        <button
                            type="button"
                            class="vv-faq-filter"
                            data-category="<?php
                                echo esc_attr($category->slug);
                            ?>"
                            aria-pressed="false"
                        >
                            <?php
                                echo esc_html($category->name);
                            ?>
                        </button>

                    <?php endforeach; ?>

                <?php endif; ?>

            </div>

            <div class="vv-faq-list" id="vvFaqList">

                <?php if ($faq_query->have_posts()) : ?>

                    <?php
                    while ($faq_query->have_posts()) :
                        $faq_query->the_post();

                        $terms = get_the_terms(
                            get_the_ID(),
                            'vv_faq_category'
                        );

                        $slugs = [];

                        if (
                            $terms &&
                            !is_wp_error($terms)
                        ) {
                            foreach ($terms as $term) {
                                $slugs[] = $term->slug;
                            }
                        }

                        $category_string = implode(
                            ' ',
                            $slugs
                        );
                    ?>

                    <article
                        class="vv-faq-item"
                        data-category="<?php
                            echo esc_attr($category_string);
                        ?>"
                    >

                        <button
                            type="button"
                            class="vv-faq-question"
                            aria-expanded="false"
                            aria-controls="vv-faq-answer-<?php
                                echo esc_attr(get_the_ID());
                            ?>"
                        >

                            <span>
                                <?php the_title(); ?>
                            </span>

                            <span
                                class="vv-faq-plus"
                                aria-hidden="true"
                            >
                                +
                            </span>

                        </button>

                        <div
                            class="vv-faq-answer"
                            id="vv-faq-answer-<?php
                                echo esc_attr(get_the_ID());
                            ?>"
                            hidden
                        >

                           <div class="vv-faq-answer-inner">
    <?php
    $faq_answer = function_exists('get_field')
        ? get_field('faq_answer', get_the_ID())
        : '';

    if (!empty($faq_answer)) {
        echo apply_filters('the_content', $faq_answer);
    } else {
        echo '<p>Answer coming soon.</p>';
    }
    ?>
</div>
                        </div>

                    </article>

                    <?php endwhile; ?>

                <?php endif; ?>

            </div>

            <p
                class="vv-faq-empty"
                id="vvFaqEmpty"
                hidden
            >
                No matching FAQs found.
            </p>

        </div>

    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const search = document.getElementById('vvFaqSearch');

    const filters = document.querySelectorAll(
        '.vv-faq-filter'
    );

    const items = document.querySelectorAll(
        '.vv-faq-item'
    );

    const empty = document.getElementById('vvFaqEmpty');

    let activeCategory = 'all';

    function filterFAQs() {

        const keyword = search.value
            .toLowerCase()
            .trim();

        let visibleCount = 0;

        items.forEach(function (item) {

            const categories = (
                item.dataset.category || ''
            ).split(/\s+/);

            const content = item.textContent
                .toLowerCase();

            const matchesCategory =
                activeCategory === 'all' ||
                categories.includes(activeCategory);

            const matchesSearch =
                content.includes(keyword);

            const show =
                matchesCategory && matchesSearch;

            item.hidden = !show;

            if (show) {
                visibleCount++;
            }
        });

        empty.hidden = visibleCount > 0;
    }

    filters.forEach(function (filter) {

        filter.addEventListener('click', function () {

            filters.forEach(function (button) {
                button.classList.remove('active');
                button.setAttribute(
                    'aria-pressed',
                    'false'
                );
            });

            filter.classList.add('active');
            filter.setAttribute(
                'aria-pressed',
                'true'
            );

            activeCategory = filter.dataset.category;

            filterFAQs();
        });

    });

    search.addEventListener('input', filterFAQs);

    document.querySelectorAll(
        '.vv-faq-question'
    ).forEach(function (button) {

        button.addEventListener('click', function () {

            const answer = document.getElementById(
                button.getAttribute('aria-controls')
            );

            const isOpen =
                button.getAttribute('aria-expanded') === 'true';

            button.setAttribute(
                'aria-expanded',
                String(!isOpen)
            );

            answer.hidden = isOpen;

            button.closest('.vv-faq-item')
                .classList.toggle('open', !isOpen);

        });

    });

    filterFAQs();

});
</script>

<?php
wp_reset_postdata();
get_footer();
?>