<?php
/**
 * =========================================================
 * VIMA VIDYA
 * STORIES — HERO SECTION
 * =========================================================
 */

// $stories_assets = get_template_directory_uri() . '/assets/images/stories';


$stories_hero_data = [

    'eyebrow' => 'REAL STORIES',

    'headline_part1' => 'Real Journeys.',

    'headline_part2' => 'Proven Security.',

    'description' =>
        'Explore how proactive financial planning and timely insurance decisions transformed unexpected life challenges into stories of stability, resilience, and hope for real families.',


    'background_image' =>
       'https://images.pexels.com/photos/7642028/pexels-photo-7642028.jpeg?_gl=1*18msl32*_ga*ODU1NTc5NDMzLjE3ODg0MjQyNjM.*_ga_8JE65Q40S6*czE3ODg0MjQyNjIkbzEkZzAkdDE3ODg0MjQyNjIkajYwJGwwJGgw',


    'breadcrumbs' => [
        [
            'label' => 'Home',
            'url'   => home_url('/')
        ],
        [
            'label' => 'Stories',
            'url'   => home_url('/stories/')
        ]
    ],


    'primary_btn' => [
        'label' => 'Read Featured Case',
        'url'   => '#featured'
    ],


    'secondary_btn' => [
        'label' => 'Share Your Story',
        'url'   => '#submit-story'
    ],


    'card' => [

        'tag' => 'FEATURED STORY',

        'title' =>
            'How the Sharma Family Secured Their Future',

        'description' =>
            'A sudden medical emergency tested their resolve, but full health coverage kept their life savings untouched.',

        'link_label' =>
            'Read Full Story',

        'link_url' =>
            '#featured'
    ],


    'stats' => [

        [
            'number' => '1,200+',
            'label'  => 'families protected across India',
            'icon'   => 'users'
        ],

        [
            'number' => '₹4.2Cr+',
            'label'  => 'claims settled smoothly to date',
            'icon'   => 'shield-check'
        ],

        [
            'number' => '99.1%',
            'label'  => 'claim settlement satisfaction rate',
            'icon'   => 'award'
        ],

        [
            'number' => '24/7',
            'label'  => 'guided support during emergencies',
            'icon'   => 'headset'
        ]

    ]

];

?>



<section
    class="stories-hero-section"
    aria-labelledby="stories-hero-title"
>


    <!-- =====================================================
         BACKGROUND
    ====================================================== -->

    <div class="hero-bg">

        <img
            src="<?php echo esc_url($stories_hero_data['background_image']); ?>"
            alt="Real family insurance story"
            class="hero-bg-img"
        >

        <div class="hero-overlay"></div>

    </div>



    <!-- =====================================================
         HERO CONTAINER
    ====================================================== -->

    <div class="hero-container">


        <div class="hero-grid">


            <!-- =================================================
                 LEFT CONTENT
            ================================================== -->

            <div class="hero-content">


                <span class="hero-eyebrow">
                    <?php
                    echo esc_html(
                        $stories_hero_data['eyebrow']
                    );
                    ?>
                </span>



                <h1
                    id="stories-hero-title"
                    class="hero-title"
                >

                    <span class="text-navy">
                        <?php
                        echo esc_html(
                            $stories_hero_data['headline_part1']
                        );
                        ?>
                    </span>

                    <br>

                    <span class="text-blue">
                        <?php
                        echo esc_html(
                            $stories_hero_data['headline_part2']
                        );
                        ?>
                    </span>

                </h1>



                <p class="hero-description">

                    <?php
                    echo esc_html(
                        $stories_hero_data['description']
                    );
                    ?>

                </p>



                <!-- =================================================
                     BREADCRUMBS
                ================================================== -->

                <nav
                    class="hero-breadcrumbs"
                    aria-label="Breadcrumb"
                >

                    <?php
                    foreach (
                        $stories_hero_data['breadcrumbs']
                        as $index => $crumb
                    ) :
                    ?>

                        <a
                            href="<?php echo esc_url($crumb['url']); ?>"
                        >
                            <?php
                            echo esc_html($crumb['label']);
                            ?>
                        </a>


                        <?php
                        if (
                            $index <
                            count(
                                $stories_hero_data['breadcrumbs']
                            ) - 1
                        ) :
                        ?>

                            <span class="sep">/</span>

                        <?php endif; ?>


                    <?php endforeach; ?>

                </nav>



                <!-- =================================================
                     CTA BUTTONS
                ================================================== -->

                <div class="hero-actions">


                    <a
                        href="<?php echo esc_url(
                            $stories_hero_data['primary_btn']['url']
                        ); ?>"
                        class="btn btn-primary"
                    >

                        <?php
                        echo esc_html(
                            $stories_hero_data['primary_btn']['label']
                        );
                        ?>


                        <svg
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >

                            <path d="M7 17L17 7"/>
                            <path d="M17 7H7"/>
                            <path d="M17 7V17"/>

                        </svg>

                    </a>



                    


                </div>


            </div>



            <!-- =================================================
                 FEATURED STORY CARD
            ================================================== -->

            <!-- <div class="hero-card-wrapper">


                <div class="hero-card">


                    <div class="hero-card-icon">

                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="#f59a18"
                            stroke-width="2"
                        >

                            <path
                                d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"
                            />

                            <path
                                d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"
                            />

                        </svg>

                    </div>



                    <span class="hero-card-tag">

                        <?php
                        echo esc_html(
                            $stories_hero_data['card']['tag']
                        );
                        ?>

                    </span>



                    <h2 class="hero-card-title">

                        <?php
                        echo esc_html(
                            $stories_hero_data['card']['title']
                        );
                        ?>

                    </h2>



                    <p class="hero-card-desc">

                        <?php
                        echo esc_html(
                            $stories_hero_data['card']['description']
                        );
                        ?>

                    </p>



                    <a
                        href="<?php echo esc_url(
                            $stories_hero_data['card']['link_url']
                        ); ?>"
                        class="hero-card-link"
                    >

                        <?php
                        echo esc_html(
                            $stories_hero_data['card']['link_label']
                        );
                        ?>


                        <svg
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >

                            <path d="M5 12h14"/>
                            <path d="M12 5l7 7-7 7"/>

                        </svg>

                    </a>


                </div>

            </div> -->


        </div>



        <!-- =====================================================
             STATS BAR
        ====================================================== -->

        <!-- <div class="hero-stats-bar">


            <?php
            foreach (
                $stories_hero_data['stats']
                as $stat
            ) :
            ?>


                <div class="stat-item">


                    <div class="stat-icon">

                        <?php if ($stat['icon'] === 'users') : ?>

                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="#f59a18"
                                stroke-width="1.8"
                            >

                                <path
                                    d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"
                                />

                                <circle
                                    cx="9"
                                    cy="7"
                                    r="4"
                                />

                                <path
                                    d="M22 21v-2a4 4 0 0 0-3-3.87"
                                />

                                <path
                                    d="M16 3.13a4 4 0 0 1 0 7.75"
                                />

                            </svg>


                        <?php elseif ($stat['icon'] === 'shield-check') : ?>

                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="#f59a18"
                                stroke-width="1.8"
                            >

                                <path
                                    d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"
                                />

                                <path
                                    d="m9 12 2 2 4-4"
                                />

                            </svg>


                        <?php elseif ($stat['icon'] === 'award') : ?>

                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="#f59a18"
                                stroke-width="1.8"
                            >

                                <circle
                                    cx="12"
                                    cy="8"
                                    r="6"
                                />

                                <path
                                    d="M8.21 13.89 7 23l5-3 5 3-1.21-9.12"
                                />

                            </svg>


                        <?php else : ?>

                            <svg
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="#f59a18"
                                stroke-width="1.8"
                            >

                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2
                                    19.79 19.79 0 0 1-8.63-3.07
                                    19.5 19.5 0 0 1-6-6
                                    19.79 19.79 0 0 1-3.07-8.67
                                    A2 2 0 0 1 4.11 2h3
                                    a2 2 0 0 1 2 1.72
                                    12.84 12.84 0 0 0 .7 2.81
                                    2 2 0 0 1-.45 2.11L8.09 9.91
                                    a16 16 0 0 0 6 6l1.27-1.27
                                    a2 2 0 0 1 2.11-.45
                                    12.84 12.84 0 0 0 2.81.7
                                    A2 2 0 0 1 22 16.92z"
                                />

                            </svg>

                        <?php endif; ?>

                    </div>



                    <div class="stat-content">

                        <div class="stat-number">

                            <?php
                            echo esc_html(
                                $stat['number']
                            );
                            ?>

                        </div>


                        <div class="stat-label">

                            <?php
                            echo esc_html(
                                $stat['label']
                            );
                            ?>

                        </div>

                    </div>


                </div>


            <?php endforeach; ?>


        </div> -->


    </div>

</section>