
<?php
/**
 * Vima Vidya Homepage
 * Display ONE story from EACH category.
 */

$vv_stories_page = home_url('/stories/');

$stories = [];
$selected_categories = [];

// Fetch published stories in the same order
// as the main Stories page.
$vv_story_query = new WP_Query([
    'post_type'      => 'vima_story',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => [
        'menu_order' => 'ASC',
        'date'       => 'ASC',
    ],
    'order'          => 'ASC',
    'no_found_rows'  => true,
]);

if ($vv_story_query->have_posts()) {

    while ($vv_story_query->have_posts()) {

        $vv_story_query->the_post();

        $post_id = get_the_ID();

        // CATEGORY
        $terms = get_the_terms(
            $post_id,
            'vv_story_category'
        );

        $category = 'Insurance Stories';
        $category_slug = 'general';

        if (!empty($terms) && !is_wp_error($terms)) {

            $category = $terms[0]->name;
            $category_slug = $terms[0]->slug;

        } else {

            // Support legacy imported stories.
            $legacy = function_exists('get_field')
                ? get_field('story_category', $post_id)
                : '';

            if (is_array($legacy)) {
                $legacy = $legacy['value']
                    ?? $legacy['label']
                    ?? '';
            }

            if (is_string($legacy) && trim($legacy) !== '') {
                $category = $legacy;
                $category_slug = sanitize_title($legacy);
            }
        }

        // Skip if this category already has a story.
        if (isset($selected_categories[$category_slug])) {
            continue;
        }

        // ACF FIELDS
        $subtitle = function_exists('get_field')
            ? get_field('story_subtitle', $post_id)
            : '';

        $story_image = function_exists('get_field')
            ? get_field('story_image', $post_id)
            : '';

        $story_content = function_exists('get_field')
            ? get_field('story_content', $post_id)
            : '';

        // IMAGE
        $image_url = '';

        if (is_array($story_image)) {
            $image_url = $story_image['url'] ?? '';
        } elseif (is_numeric($story_image)) {
            $image_url = wp_get_attachment_image_url(
                (int) $story_image,
                'large'
            );
        } elseif (is_string($story_image)) {
            $image_url = $story_image;
        }

        if (!$image_url) {
            $image_url = get_the_post_thumbnail_url(
                $post_id,
                'large'
            );
        }

        // EXCERPT
        if (has_excerpt($post_id)) {
            $excerpt_source = get_the_excerpt($post_id);
        } elseif (is_string($story_content) && $story_content !== '') {
            $excerpt_source = $story_content;
        } elseif (is_string($subtitle) && $subtitle !== '') {
            $excerpt_source = $subtitle;
        } else {
            $excerpt_source = get_post_field(
                'post_content',
                $post_id
            );
        }

        $excerpt = wp_trim_words(
            wp_strip_all_tags(
                strip_shortcodes($excerpt_source)
            ),
            22,
            '...'
        );

        // CATEGORY ICONS
        $icon_map = [
            'health'             => 'fa-heart-pulse',
            'health-insurance'   => 'fa-heart-pulse',
            'life'               => 'fa-heart',
            'life-insurance'     => 'fa-heart',
            'property'           => 'fa-house',
            'property-insurance' => 'fa-house',
            'motor'              => 'fa-car',
            'travel'             => 'fa-plane',
            'personal_accident'  => 'fa-shield-halved',
            'government_schemes' => 'fa-landmark',
            'retirement'         => 'fa-person-cane',
            'child'              => 'fa-child',
            'critical'           => 'fa-kit-medical',
        ];

        $badge_icon = $icon_map[$category_slug]
            ?? 'fa-book-open';

        // ADD FIRST STORY FROM CATEGORY
        $stories[] = [
            'id'            => $post_id,
            'category'      => $category,
            'category_slug' => $category_slug,
            'badge_icon'    => $badge_icon,
            'title'         => get_the_title($post_id),
            'excerpt'       => $excerpt,
            'image_url'     => $image_url,
            'link'          => add_query_arg(
                'story',
                $post_id,
                $vv_stories_page
            ),
        ];

        // Mark category as selected.
        $selected_categories[$category_slug] = true;
    }

    wp_reset_postdata();
}
?>

<section class="stories-section" id="vv-home-stories">

    <div class="stories-section__header">

        <div class="header-badge">

            <i class="fa-solid fa-book-open"></i>

        </div>

        <h2>Stories that connect</h2>

        <p>
            Real-life situations. Everyday risks.
            Simple insurance lessons.
        </p>

    </div>

    <?php if (!empty($stories)) : ?>

    <div class="carousel-container">

        <!-- PREVIOUS BUTTON -->

        <button
            type="button"
            class="carousel-btn prev"
            id="carouselPrev"
            aria-label="Previous story"
        >

            <img
                src="https://img.icons8.com/ios-glyphs/30/0b48a2/chevron-left.png"
                alt=""
            />

        </button>

        <!-- CAROUSEL -->

        <div class="carousel-stage">

            <div
                class="carousel-track"
                id="carouselTrack"
            >

                <?php foreach ($stories as $index => $story) : ?>

                    <article
                        class="story-card"
                        data-index="<?php echo esc_attr($index); ?>"
                    >

                        <!-- IMAGE -->

                        <div class="story-card__image-wrap">

                            <?php if (!empty($story['image_url'])) : ?>

                                <img
                                    src="<?php echo esc_url($story['image_url']); ?>"
                                    alt="<?php echo esc_attr($story['title']); ?>"
                                    loading="lazy"
                                />

                            <?php else : ?>

                                <div class="story-card__image-placeholder">
                                    <i class="fa-solid fa-book-open"></i>
                                </div>

                            <?php endif; ?>

                            <!-- CATEGORY BADGE -->

                            <span class="story-card__badge">

                                <i class="fa-solid <?php
                                    echo esc_attr($story['badge_icon']);
                                ?> badge-icon"></i>

                                <?php
                                    echo esc_html(
                                        strtoupper($story['category'])
                                    );
                                ?>

                            </span>

                        </div>

                        <!-- CONTENT -->

                        <div class="story-card__content">

                            <h3>
                                <?php echo esc_html($story['title']); ?>
                            </h3>

                            <p>
                                <?php echo esc_html($story['excerpt']); ?>
                            </p>

                            <a
                                href="<?php echo esc_url($story['link']); ?>"
                                class="story-card__link"
                            >

                                Read the story

                                <img
                                    src="https://img.icons8.com/ios-glyphs/20/0b48a2/long-arrow-right.png"
                                    alt=""
                                />

                            </a>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

        <!-- NEXT BUTTON -->

        <button
            type="button"
            class="carousel-btn next"
            id="carouselNext"
            aria-label="Next story"
        >

            <img
                src="https://img.icons8.com/ios-glyphs/30/0b48a2/chevron-right.png"
                alt=""
            />

        </button>

    </div>

    <?php else : ?>

        <p class="stories-section__empty">
            Stories will appear here once published.
        </p>

    <?php endif; ?>

    <div class="stories-section__cta">

        <a
            href="<?php echo esc_url($vv_stories_page); ?>"
            class="btn-primary"
        >
            Explore all stories &rarr;
        </a>

    </div>

</section>


<script>
  
document.addEventListener('DOMContentLoaded', function () {

    const root = document.getElementById('vv-home-stories');

    if (!root) return;

    const track = root.querySelector('#carouselTrack');

    if (!track) return;

    const cards = Array.from(
        track.querySelectorAll('.story-card')
    );

    const prevBtn = root.querySelector('#carouselPrev');
    const nextBtn = root.querySelector('#carouselNext');

    const container = root.querySelector('.carousel-container');

    const total = cards.length;

    if (!total) return;

    let currentIndex = 0;
    let autoPlayTimer = null;

    const autoPlayDelay = 3000;

    function updateCarousel() {

        cards.forEach(function (card, index) {

            card.classList.remove(
                'active',
                'prev-card',
                'next-card',
                'far-prev',
                'far-next'
            );

            const forward = (index - currentIndex + total) % total;
            const backward = (currentIndex - index + total) % total;

            if (forward === 0) {

                card.classList.add('active');

            } else if (total > 2 && backward === 1) {

                card.classList.add('prev-card');

            } else if (forward === 1) {

                card.classList.add('next-card');

            } else if (backward < forward) {

                card.classList.add('far-prev');

            } else {

                card.classList.add('far-next');
            }

        });

    }

    function nextSlide() {

        if (total <= 1) return;

        currentIndex = (currentIndex + 1) % total;

        updateCarousel();
    }

    function prevSlide() {

        if (total <= 1) return;

        currentIndex = (currentIndex - 1 + total) % total;

        updateCarousel();
    }

    function stopAutoPlay() {

        if (autoPlayTimer !== null) {

            clearInterval(autoPlayTimer);
            autoPlayTimer = null;
        }
    }

    function startAutoPlay() {

        stopAutoPlay();

        if (total <= 1) return;

        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            return;
        }

        autoPlayTimer = setInterval(
            nextSlide,
            autoPlayDelay
        );
    }

    if (prevBtn) {

        prevBtn.addEventListener('click', function () {

            prevSlide();
            startAutoPlay();

        });

    }

    if (nextBtn) {

        nextBtn.addEventListener('click', function () {

            nextSlide();
            startAutoPlay();

        });

    }

    if (container) {

        container.addEventListener(
            'mouseenter',
            stopAutoPlay
        );

        container.addEventListener(
            'mouseleave',
            startAutoPlay
        );

        container.addEventListener(
            'focusin',
            stopAutoPlay
        );

        container.addEventListener(
            'focusout',
            function (event) {
                if (!container.contains(event.relatedTarget)) {
                    startAutoPlay();
                }
            }
        );

    }

    document.addEventListener('visibilitychange', function () {

        if (document.hidden) {
            stopAutoPlay();
        } else {
            startAutoPlay();
        }

    });

    if (total <= 1) {

        if (prevBtn) prevBtn.hidden = true;
        if (nextBtn) nextBtn.hidden = true;
    }

    updateCarousel();
    startAutoPlay();

});

</script>