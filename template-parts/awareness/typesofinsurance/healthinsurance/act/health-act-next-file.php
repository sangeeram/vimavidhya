<?php
/**
- ========================================
- VIMA VIDYA
- HEALTH INSURANCE
- EVALUATE → ACT TRANSITION
- ========================================
 *
- Purpose:
- End of the Evaluate section and
- transition the visitor toward Act.
 */
?>

<section class="health-transition" aria-labelledby="health-transition-title">

    <div class="health-transition__container">

        <!-- ========================================
             EYEBROW
        ======================================== -->
        <div class="health-transition__eyebrow">
            Next Step
        </div>


        <!-- ========================================
             MAIN CONTENT
        ======================================== -->
        <div class="health-transition__content">

            <h2 id="health-transition-title" class="health-transition__title">
                You've Understood the Risks.<br>
                You've Evaluated Your Health Coverage Needs.<br>
                Now You're Ready to Make an Informed Decision.
            </h2>

            <p class="health-transition__description">
                You now understand how unexpected medical expenses can affect your finances, what health insurance
                protects you against and how to evaluate coverage based on your healthcare needs. Now put that knowledge
                into action — select a suitable policy, verify the coverage, waiting periods and exclusions, complete
                the application process and take a step towards protecting your health and financial security.

                <!-- LARGE LINK: CONTINUE TO ACT -->
                <a href="/awareness/" class="health-transition__heading-large">
                    Continue Your Journey
                    <span aria-hidden="true">→</span>
                </a>

        </div>


        <!-- ========================================
             JOURNEY INDICATOR (5 STEPS)
        ======================================== -->
        <nav class="health-transition__journey" aria-label="Health insurance learning journey">

            <!-- 01. AWARENESS -->
            <a href="/awareness/" class="health-transition__step">
                <span class="health-transition__step-number">01</span>
                <span class="health-transition__step-label">Awareness</span>
            </a>

            <span class="health-transition__line" aria-hidden="true"></span>

            <!-- 02. HEALTH INSURANCE HOME -->
            <a href="/health-insurance/" class="health-transition__step">
                <span class="health-transition__step-number">02</span>
                <span class="health-transition__step-label">Health Insurance Home</span>
            </a>

            <span class="health-transition__line" aria-hidden="true"></span>

            <!-- 03. UNDERSTAND -->
            <a href="/health-understand/" class="health-transition__step">
                <span class="health-transition__step-number">03</span>
                <span class="health-transition__step-label">Understand</span>
            </a>

            <span class="health-transition__line" aria-hidden="true"></span>

            <!-- 04. EVALUATE -->
            <a href="/health-evaluate/" class="health-transition__step" aria-current="false">
                <span class="health-transition__step-number">04</span>
                <span class="health-transition__step-label">Evaluate</span>
            </a>

            <span class="health-transition__line" aria-hidden="true"></span>

            <!-- 05. ACT -->
            <a href="/health-act/" class="health-transition__step health-transition__step--active" aria-current="step">
                <span class="health-transition__step-number">05</span>
                <span class="health-transition__step-label">Act</span>
            </a>

        </nav>

    </div>

</section>