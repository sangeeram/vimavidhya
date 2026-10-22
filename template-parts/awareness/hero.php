<?php
/**
 * =========================================================
 * VIMA VIDYA — AWARENESS HERO
 * =========================================================
 */

$awareness_hero_img = 'https://images.unsplash.com/photo-1648221350871-e3ae3c8d0f58?q=80&w=1920&auto=format&fit=crop&ixlib=rb-4.1.0';
?>

<section
    class="awarenesshero"
    id="awareness-hero"
    style="--awareness-bg: url('<?php echo esc_url($awareness_hero_img); ?>');"
>

    <!-- =========================================
         HERO BACKGROUND
    ========================================== -->

    <div class="awarenesshero__bg"></div>


    <!-- =========================================
         LEFT OVERLAY
    ========================================== -->

    <div class="awarenesshero__overlay"></div>


    <!-- =========================================
         HERO CONTAINER
    ========================================== -->

    <div class="awarenesshero__container">

        <div class="awarenesshero__content">

            <!-- EYEBROW -->

            <div class="awarenesshero__eyebrow">
                Awareness
            </div>


            <!-- TITLE -->

            <h1 class="awarenesshero__title">

                <span class="title-dark">
                    Life is Unpredictable.
                </span>

                <span class="title-orange">
                    Are You Prepared?
                </span>

            </h1>


            <!-- DESCRIPTION -->

            <p class="awarenesshero__description">

                Most Indian families assume financial difficulty
                won't affect them. The data suggests otherwise.
                A few honest questions can shift perspective and
                prompt decisions that genuinely matter.

            </p>


            <!-- BREADCRUMB -->

            <div class="awarenesshero__breadcrumb">

                <a href="<?php echo esc_url(home_url('/')); ?>">
                    Home
                </a>

                <span>/</span>

                <span>Awareness</span>

            </div>


            <!-- BUTTONS -->

            <div class="awarenesshero__actions">

                <a
                    href="#what-is-insurance"
                    class="awarenesshero__button awarenesshero__button--primary"
                >
                    Explore Awareness

                    <span>↗</span>

                </a>


                <a
                    href="#risk-management"
                    class="awarenesshero__button awarenesshero__button--outline"
                >
                    Why Insurance Matters

                    <span>→</span>

                </a>

            </div>

        </div>


        <!-- =========================================
             FLOATING RISK MANAGEMENT CARD
        ========================================== -->

        <div class="awarenesshero__risk-card">

            <div class="awarenesshero__risk-icon">

                <svg
                    viewBox="0 0 64 64"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >

                    <path
                        d="M32 6L53 14V29C53 42.5 44.2 54.1 32 58C19.8 54.1 11 42.5 11 29V14L32 6Z"
                        stroke="currentColor"
                        stroke-width="2.5"
                    />

                    <path
                        d="M21 32L28 39L44 23"
                        stroke="currentColor"
                        stroke-width="2.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />

                </svg>

            </div>


            <div class="awarenesshero__risk-content">

                <span class="risk-label">
                    RISK MANAGEMENT
                </span>

                <h2>
                    Why Insurance is
                    <br>
                    Good Risk Management
                </h2>

                <p>
                    Protection isn't about predicting the future.
                    It's about being prepared for it.
                </p>

                <a href="#risk-management">

                    Explore Risk Management

                    <span>→</span>

                </a>

            </div>

        </div>

    </div>


    <!-- =========================================
         STATISTICS CARD
    ========================================== -->

    <div class="awarenesshero__stats-wrapper">

        <div class="awarenesshero__stats">


            <!-- STAT 01 -->

            <div class="awarenesshero__stat">

                <div class="awarenesshero__stat-icon">

                    <svg
                        viewBox="0 0 64 64"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >

                        <path
                            d="M32 7L52 15V30C52 42 44 52.5 32 57C20 52.5 12 42 12 30V15L32 7Z"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M22 32L28.5 38.5L42 25"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />

                    </svg>

                </div>


                <div class="awarenesshero__stat-content">

                    <strong>76%</strong>

                    <span>
                        of Indians lack
                        adequate life cover
                    </span>

                </div>

            </div>


            <!-- STAT 02 -->

            <div class="awarenesshero__stat">

                <div class="awarenesshero__stat-icon">

                    <svg
                        viewBox="0 0 64 64"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >

                        <rect
                            x="13"
                            y="18"
                            width="38"
                            height="35"
                            rx="2"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M21 18V13H43V18"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M25 29H39"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M25 37H39"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M25 45H34"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                    </svg>

                </div>


                <div class="awarenesshero__stat-content">

                    <strong>₹71K</strong>

                    <span>
                        average hospitalisation
                        cost (2024)
                    </span>

                </div>

            </div>


            <!-- STAT 03 -->

            <div class="awarenesshero__stat">

                <div class="awarenesshero__stat-icon">

                    <svg
                        viewBox="0 0 64 64"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >

                        <circle
                            cx="32"
                            cy="19"
                            r="7"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <circle
                            cx="18"
                            cy="33"
                            r="6"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <circle
                            cx="46"
                            cy="33"
                            r="6"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M20 53C20 44 25 39 32 39C39 39 44 44 44 53"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M7 52C7 45 11 41 18 41"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M57 52C57 45 53 41 46 41"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                    </svg>

                </div>


                <div class="awarenesshero__stat-content">

                    <strong>1 in 4</strong>

                    <span>
                        families face financial
                        strain post-illness
                    </span>

                </div>

            </div>


            <!-- STAT 04 -->

            <div class="awarenesshero__stat">

                <div class="awarenesshero__stat-icon">

                    <svg
                        viewBox="0 0 64 64"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >

                        <path
                            d="M10 27C16 18 24 14 32 14C40 14 48 18 54 27"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M10 27H54"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M32 14V27"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M32 27L25 52"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M32 27L39 52"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M18 27L13 52"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                        <path
                            d="M46 27L51 52"
                            stroke="currentColor"
                            stroke-width="2.5"
                        />

                    </svg>

                </div>


                <div class="awarenesshero__stat-content">

                    <strong>68%</strong>

                    <span>
                        have no health insurance
                        cover at all
                    </span>

                </div>

            </div>


        </div>

    </div>


    <!-- =========================================
         BOTTOM MESSAGE
    ========================================== -->

    <div class="awarenesshero__message">

        <div class="awarenesshero__message-icon">

            <span>✓</span>

        </div>

        <div>

            <strong>
                Building a risk-aware India.
            </strong>

            <span>
                Building financially secure tomorrows,
                one informed decision at a time.
            </span>

        </div>

    </div>

</section>