<?php
/**
 * =========================================================
 * VIMAVIDYA — DYNAMIC HOMEPAGE HERO SLIDER
 * =========================================================
 *
 * Data source: Hero Slide CPT + ACF fields
 */

/* =========================================================
   FETCH HERO SLIDES
========================================================= */

$slides = array();

$hero_query = new WP_Query(
    array(
        'post_type'      => 'hero_slide',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'meta_key'       => 'slide_order',
        'orderby'        => 'meta_value_num',
        'order'          => 'ASC',
    )
);


/* =========================================================
   BUILD SLIDE ARRAY
========================================================= */

if ( $hero_query->have_posts() ) {

    while ( $hero_query->have_posts() ) {

        $hero_query->the_post();

        $image     = get_field( 'hero_image' );
        $image_url = '';

        if ( is_array( $image ) && ! empty( $image['url'] ) ) {

            $image_url = $image['url'];

        } elseif ( is_string( $image ) ) {

            $image_url = $image;

        }

        $slides[] = array(

            'category'         => get_field( 'category' ),
            'eyebrow'          => get_field( 'eyebrow' ),
            'title'            => get_field( 'title' ),
            'desc'             => get_field( 'description' ),
            'img'              => $image_url,

            'primary_button'   => get_field( 'primary_button_text' ),
            'primary_link'     => get_field( 'primary_button_link' ),

            'secondary_button' => get_field( 'secondary_button_text' ),
            'secondary_link'   => get_field( 'secondary_button_link' ),

        );
    }

    wp_reset_postdata();
}


/* =========================================================
   HOMEPAGE HERO
========================================================= */

?>

<section
    class="insurance-hero"
    id="home-hero"
>

    <?php if ( ! empty( $slides ) ) : ?>

        <div class="hero-slider-container">

            <?php foreach ( $slides as $index => $slide ) : ?>

                <article
                    class="hero-slide <?php echo $index === 0 ? 'active' : ''; ?>"
                    data-slide="<?php echo esc_attr( $index ); ?>"
                >

                    <!-- =================================================
                         BACKGROUND IMAGE
                    ================================================== -->

                    <div
                        class="slide-image-wrapper"
                        <?php if ( ! empty( $slide['img'] ) ) : ?>
                            style="background-image: url('<?php echo esc_url( $slide['img'] ); ?>');"
                        <?php endif; ?>
                        aria-hidden="true"
                    ></div>


                    <!-- =================================================
                         IMAGE OVERLAY
                    ================================================== -->

                    <div
                        class="slide-image-overlay"
                        aria-hidden="true"
                    ></div>


                    <!-- =================================================
                         HERO CONTENT
                    ================================================== -->

                    <div class="hero-inner">

                        <div class="slide-content">


                            <!-- =================================================
                                 EYEBROW
                            ================================================== -->

                            <?php if ( ! empty( $slide['eyebrow'] ) ) : ?>

                                <span
                                    class="slide-eyebrow"
                                    data-aos="fade-down"
                                    data-aos-duration="700"
                                    data-aos-delay="100"
                                >

                                    <span
                                        class="eyebrow-dot"
                                        aria-hidden="true"
                                    ></span>

                                    <?php echo esc_html( $slide['eyebrow'] ); ?>

                                </span>

                            <?php endif; ?>


                            <!-- =================================================
                                 TITLE
                            ================================================== -->

                            <?php if ( ! empty( $slide['title'] ) ) : ?>

                                <h1
                                    class="slide-title"
                                    data-aos="fade-up"
                                    data-aos-duration="900"
                                    data-aos-delay="200"
                                >

                                    <?php

                                    echo wp_kses(
                                        $slide['title'],
                                        array(

                                            'br' => array(),

                                            'span' => array(
                                                'class' => array()
                                            ),

                                            'strong' => array(),

                                            'em' => array(),

                                        )
                                    );

                                    ?>

                                </h1>

                            <?php endif; ?>


                            <!-- =================================================
                                 DESCRIPTION
                            ================================================== -->

                            <?php if ( ! empty( $slide['desc'] ) ) : ?>

                                <p
                                    class="slide-desc"
                                    data-aos="fade-up"
                                    data-aos-duration="850"
                                    data-aos-delay="350"
                                >

                                    <?php echo esc_html( $slide['desc'] ); ?>

                                </p>

                            <?php endif; ?>


                            <!-- =================================================
                                 BUTTONS
                            ================================================== -->

                            <?php if (
                                ! empty( $slide['primary_button'] ) ||
                                ! empty( $slide['secondary_button'] )
                            ) : ?>

                                <div
                                    class="hero-actions"
                                    data-aos="fade-up"
                                    data-aos-duration="850"
                                    data-aos-delay="450"
                                >


                                    <!-- PRIMARY BUTTON -->

                                    <?php if ( ! empty( $slide['primary_button'] ) ) : ?>

                                        <a
                                            href="<?php echo ! empty( $slide['primary_link'] )
                                                ? esc_url( $slide['primary_link'] )
                                                : '#'; ?>"
                                            class="hero-btn hero-btn--primary"
                                        >

                                            <?php echo esc_html(
                                                $slide['primary_button']
                                            ); ?>

                                            <span aria-hidden="true">
                                                ↗
                                            </span>

                                        </a>

                                    <?php endif; ?>


                                    <!-- SECONDARY BUTTON -->

                                    <?php if ( ! empty( $slide['secondary_button'] ) ) : ?>

                                        <a
                                            href="<?php echo ! empty( $slide['secondary_link'] )
                                                ? esc_url( $slide['secondary_link'] )
                                                : '#'; ?>"
                                            class="hero-btn hero-btn--secondary"
                                        >

                                            <?php echo esc_html(
                                                $slide['secondary_button']
                                            ); ?>

                                        </a>

                                    <?php endif; ?>


                                </div>

                            <?php endif; ?>


                            <!-- =================================================
                                 HERO CATEGORY NAVIGATION
                            ================================================== -->

                            <div
                                class="hero-categories"
                                data-aos="fade-up"
                                data-aos-duration="850"
                                data-aos-delay="550"
                            >


                                <!-- =================================================
                                     AWARENESS
                                ================================================== -->

                                <a
                                    href="<?php echo esc_url(
                                        home_url( '/awareness/' )
                                    ); ?>"
                                    class="hero-category <?php echo (
                                        $slide['category'] === 'AWARENESS'
                                    ) ? 'active' : ''; ?>"
                                >

                                    <span
                                        class="category-icon"
                                        aria-hidden="true"
                                    >

                                        <svg
                                            viewBox="0 0 24 24"
                                            fill="none"
                                        >

                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                            ></circle>

                                            <path
                                                d="M12 8v4l2.5 2"
                                            ></path>

                                        </svg>

                                    </span>

                                    <span class="category-name">
                                        AWARENESS
                                    </span>

                                </a>


                                <!-- =================================================
                                     EDUCATION
                                ================================================== -->

                                <a
                                    href="<?php echo esc_url(
                                        home_url( '/education/' )
                                    ); ?>"
                                    class="hero-category <?php echo (
                                        $slide['category'] === 'EDUCATION'
                                    ) ? 'active' : ''; ?>"
                                >

                                    <span
                                        class="category-icon"
                                        aria-hidden="true"
                                    >

                                        <svg
                                            viewBox="0 0 24 24"
                                            fill="none"
                                        >

                                            <path
                                                d="M4 9.5L12 5l8 4.5-8 4.5L4 9.5Z"
                                            ></path>

                                            <path
                                                d="M7 11.5V16c2.8 2.2 7.2 2.2 10 0v-4.5"
                                            ></path>

                                            <path
                                                d="M20 10v5"
                                            ></path>

                                        </svg>

                                    </span>

                                    <span class="category-name">
                                        EDUCATION
                                    </span>

                                </a>


                                <!-- =================================================
                                     EXPERTISE
                                ================================================== -->

                                <a
                                    href="<?php echo esc_url(
                                        home_url( '/expertise/' )
                                    ); ?>"
                                    class="hero-category <?php echo (
                                        $slide['category'] === 'EXPERTISE'
                                    ) ? 'active' : ''; ?>"
                                >

                                    <span
                                        class="category-icon"
                                        aria-hidden="true"
                                    >

                                        <svg
                                            viewBox="0 0 24 24"
                                            fill="none"
                                        >

                                            <path
                                                d="M12 3l2.2 5.1L20 10l-5.8 1.9L12 17l-2.2-5.1L4 10l5.8-1.9L12 3Z"
                                            ></path>

                                            <path
                                                d="M19 16l.8 1.8L21.5 18l-1.7.7L19 20.5l-.8-1.8-1.7-.7 1.7-.2L19 16Z"
                                            ></path>

                                        </svg>

                                    </span>

                                    <span class="category-name">
                                        EXPERTISE
                                    </span>

                                </a>


                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         SLIDE NUMBER
                    ================================================== -->

                    <div
                        class="hero-slide-number"
                        data-aos="fade-left"
                        data-aos-duration="800"
                        data-aos-delay="500"
                    >

                        <span>
                            <?php echo esc_html(
                                sprintf(
                                    '%02d',
                                    $index + 1
                                )
                            ); ?>
                        </span>

                        <i></i>

                        <span>
                            <?php echo esc_html(
                                sprintf(
                                    '%02d',
                                    count( $slides )
                                )
                            ); ?>
                        </span>

                    </div>


                </article>

            <?php endforeach; ?>


            <!-- =================================================
                 SLIDER ARROWS
            ================================================== -->

            <button
                class="hero-arrow hero-arrow--prev"
                type="button"
                aria-label="Previous slide"
            >
                ←
            </button>

            <button
                class="hero-arrow hero-arrow--next"
                type="button"
                aria-label="Next slide"
            >
                →
            </button>


            <!-- =================================================
                 SLIDER DOTS
            ================================================== -->

            <div
                class="slider-dots"
                aria-label="Hero slider navigation"
            >

                <?php foreach ( $slides as $index => $slide ) : ?>

                    <button
                        class="slider-dot <?php echo $index === 0 ? 'active' : ''; ?>"
                        type="button"
                        data-goto="<?php echo esc_attr( $index ); ?>"
                        aria-label="<?php echo esc_attr(
                            'Go to slide ' . ( $index + 1 )
                        ); ?>"
                        aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                    ></button>

                <?php endforeach; ?>

            </div>


        </div>

    <?php endif; ?>

</section>
