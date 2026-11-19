<?php
/**
 * ========================================
 * VIMA VIDYA
 * HEALTH INSURANCE
 * EVALUATE → ACT TRANSITION
 * ========================================
 *
 * Purpose:
 * End of the Evaluate section and
 * transition the visitor toward Act for Health Insurance.
 */
?>

<section class="property-transition" aria-labelledby="health-transition-title">

    <div class="property-transition__container">

        <!-- ========================================
             EYEBROW
        ======================================== -->
        <div class="property-transition__eyebrow">
            Next Step
        </div>


        <!-- ========================================
             MAIN CONTENT
        ======================================== -->
        <div class="property-transition__content">

            <h2 id="health-transition-title" class="property-transition__title">
                You've Evaluated Your Health Coverage Needs.<br>
                Now Take Action to Protect Your Health and Savings.
            </h2>

            <p class="property-transition__description">
                You've assessed your healthcare needs, considered your family's medical history, reviewed your existing
                coverage and evaluated how much financial protection you may need against medical expenses. You've also
                explored sum insured, premiums, waiting periods, exclusions, room limits and other policy conditions.
                Now it's time to put your evaluation into action — compare suitable health insurance plans, verify the
                benefits and limitations, choose coverage that meets your needs and ensure you're prepared for
                unexpected medical expenses.
            </p>

            <!-- LARGE LINK: CONTINUE TO ACT -->
            <a href="/health-act/" class="property-transition__heading-large">
                Continue to Act
                <span aria-hidden="true">→</span>
            </a>

        </div>


        <!-- ========================================
             JOURNEY INDICATOR (5 STEPS)
        ======================================== -->
        <nav class="property-transition__journey" aria-label="Health insurance learning journey">

            <!-- 01. AWARENESS -->
            <a href="/awareness/" class="property-transition__step">
                <span class="property-transition__step-number">01</span>
                <span class="property-transition__step-label">Awareness</span>
            </a>

            <span class="property-transition__line" aria-hidden="true"></span>

            <!-- 02. HEALTH INSURANCE HOME -->
            <a href="/health-insurance/" class="property-transition__step">
                <span class="property-transition__step-number">02</span>
                <span class="property-transition__step-label">
                    Health Insurance Home
                </span>
            </a>

            <span class="property-transition__line" aria-hidden="true"></span>

            <!-- 03. UNDERSTAND -->
            <a href="/health-understand/" class="property-transition__step">
                <span class="property-transition__step-number">03</span>
                <span class="property-transition__step-label">Understand</span>
            </a>

            <span class="property-transition__line" aria-hidden="true"></span>

            <!-- 04. EVALUATE -->
            <a href="/health-evaluate/" class="property-transition__step property-transition__step--active"
                aria-current="step">
                <span class="property-transition__step-number">04</span>
                <span class="property-transition__step-label">Evaluate</span>
            </a>

            <span class="property-transition__line" aria-hidden="true"></span>

            <!-- 05. ACT -->
            <a href="/health-act/" class="property-transition__step">
                <span class="property-transition__step-number">05</span>
                <span class="property-transition__step-label">Act</span>
            </a>

        </nav>

    </div>

</section>