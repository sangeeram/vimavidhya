<?php
/**
 * ========================================
 * VIMA VIDYA
 * LIFE INSURANCE
 * ACT TRANSITION FILE
 * ========================================
 *
 * Purpose:
 * End of the Act section / transition 
 * back to the Life Insurance Hub or Awareness journey.
 */
?>

<section class="property-transition" aria-labelledby="life-transition-title">

    <div class="property-transition__container">

        <!-- ========================================
             EYEBrow
        ======================================== -->
        <div class="property-transition__eyebrow">
            Journey Complete
        </div>

        <!-- ========================================
             MAIN CONTENT
        ======================================== -->
        <div class="property-transition__content">

            <h2 id="life-transition-title" class="property-transition__title">
                You've Understood Your Responsibilities.<br>
                You've Evaluated Your Family's Protection Needs.<br>
                Now You're Ready to Secure Their Future.
            </h2>

            <p class="property-transition__description">
                You now understand how life insurance can protect your loved ones from financial uncertainty, what your
                family may face in your absence and how to evaluate coverage that supports their future. Now put that
                knowledge into action — choose appropriate protection, verify the sum assured, review policy benefits
                and conditions, complete the application process and take a meaningful step towards safeguarding your
                family's financial future.
            </p>

            <!-- LARGE LINK: RETURN TO LIFE INSURANCE HUB -->
            <a href="<?php echo esc_url( home_url( '/life-insurance/' ) ); ?>"
                class="property-transition__heading-large">
                Return to Life Insurance Hub
                <span aria-hidden="true">→</span>
            </a>

        </div>

        <!-- ========================================
             JOURNEY INDICATOR (5 STEPS)
        ======================================== -->
        <nav class="property-transition__journey" aria-label="Life insurance learning journey">

            <!-- 01. AWARENESS -->
            <a href="<?php echo esc_url( home_url( '/awareness/' ) ); ?>" class="property-transition__step">
                <span class="property-transition__step-number">01</span>
                <span class="property-transition__step-label">Awareness</span>
            </a>

            <span class="property-transition__line" aria-hidden="true"></span>

            <!-- 02. LIFE INSURANCE HOME -->
            <a href="<?php echo esc_url( home_url( '/life-insurance/' ) ); ?>" class="property-transition__step">
                <span class="property-transition__step-number">02</span>
                <span class="property-transition__step-label">Life Insurance Home</span>
            </a>

            <span class="property-transition__line" aria-hidden="true"></span>

            <!-- 03. UNDERSTAND -->
            <a href="<?php echo esc_url( home_url( '/life-understand/' ) ); ?>" class="property-transition__step">
                <span class="property-transition__step-number">03</span>
                <span class="property-transition__step-label">Understand</span>
            </a>

            <span class="property-transition__line" aria-hidden="true"></span>

            <!-- 04. EVALUATE -->
            <a href="<?php echo esc_url( home_url( '/life-evaluate/' ) ); ?>" class="property-transition__step">
                <span class="property-transition__step-number">04</span>
                <span class="property-transition__step-label">Evaluate</span>
            </a>

            <span class="property-transition__line" aria-hidden="true"></span>

            <!-- 05. ACT -->
            <a href="<?php echo esc_url( home_url( '/life-act/' ) ); ?>"
                class="property-transition__step property-transition__step--active" aria-current="step">
                <span class="property-transition__step-number">05</span>
                <span class="property-transition__step-label">Act</span>
            </a>

        </nav>

    </div>

</section>