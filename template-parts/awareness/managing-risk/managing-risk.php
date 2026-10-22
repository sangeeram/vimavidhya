<?php
/**
 * =========================================================
 * VIMA VIDYA
 * RISK MANAGEMENT — SIX WAYS
 * ORIGINAL CONTENT
 * =========================================================
 */

$vv_assets = get_template_directory_uri() . '/assets/images/managingrisks';


$vv_risk_cards = [

    // =====================================================
    // 01 — RISK AVOIDANCE
    // =====================================================

    [
        'id' => 'risk-avoidance',
        'number' => '01',

        'title' => 'Risk Avoidance',

        'description' =>
            'Eliminating activities or situations that expose one to risk.',

        'image' =>
            $vv_assets . '/Risk Avoidance.webp',

        'class' => 'blue',


        'what' =>
            'Risk avoidance is the simplest way to deal with risk: not doing the activity or staying away from the situation that creates the risk in the first place. In other words, you completely eliminate your exposure to that particular risk. The safest risk is the one you never take.',


        'examples' => [

            'Lockdown during COVID-19 – a large-scale example of governments avoiding risk of virus spread by restricting movement.',

            'Not building a warehouse in flood prone areas to avoid damage to goods.'

        ],


        'important' => [

            'It prevents both the chance of loss and the loss itself because you never enter the risky situation.',

            'It can save life, health, property and financial resources, especially when the risk could cause severe or catastrophic damage.',

            'For students, it encourages safer choices in daily life (safe travel, careful use of online platforms, avoiding hazardous environments).'

        ],


        'practice' => [

            'Identify the risk clearly – Understand what activities or situations have a high probability of causing harm (e.g. slippery roads, careless driving, exposure to contagious diseases).',

            'Seek alternatives – Use online meetings instead of travelling during severe weather, or store goods in a safer warehouse.',

            'Talk to a family member or an expert – Where you sense anything risky.'

        ]
    ],



    // =====================================================
    // 02 — RISK PREVENTION
    // =====================================================

    [
        'id' => 'risk-prevention',
        'number' => '02',

        'title' => 'Risk Prevention',

        'description' =>
            'Taking proactive steps to stop a loss from happening.',

        'image' =>
            $vv_assets . '/Risk Prevension.webp',

        'class' => 'orange',


        'what' =>
            'Risk prevention is about taking proactive steps to stop a loss from happening, even if you can’t (or don’t want to) completely avoid the activity. Instead of staying away from the risk altogether (risk avoidance), you reduce the chance that the risk will materialize. In other words, you still do the activity, but you make it much safer.',


        'examples' => [

            'Road Safety: Wearing seatbelts, obeying traffic rules, and regular vehicle maintenance to prevent accidents.',

            'Health Safety: Vaccinations, regular health check-ups, hand-washing and using masks to prevent infection.',

            'Fire Safety: Installing smoke detectors, keeping fire extinguishers, and using non-flammable materials to prevent fires.',

            'Business Safety: Keeping proper storage for goods, training workers on safety, and using protective equipment in factories.'

        ],


        'important' => [

            'It reduces the likelihood of accidents and losses.',

            'It protects life, health, and property without giving up useful activities.',

            'It complements insurance: by preventing or reducing losses, you help keep premiums lower.'

        ],


        'practice' => [

            'Identify the hazards – Understand what could go wrong (slippery floors, faulty wiring, unsafe driving).',

            'Plan preventive measures – e.g., safety training, regular inspections, maintenance schedules.',

            'Use protective devices – seat belts, helmets, gloves, safety signage, alarms.',

            'Educate and enforce rules – For example, make sure family, friends or staff follow safety practices consistently.'

        ]
    ],



    // =====================================================
    // 03 — RISK REDUCTION
    // =====================================================

    [
        'id' => 'risk-reduction',
        'number' => '03',

        'title' => 'Risk Reduction',

        'description' =>
            'Taking steps to reduce the likelihood or impact of loss.',

        'image' =>
            $vv_assets . '/Risk Reduction.webp',

        'class' => 'purple',


        'what' =>
            'Risk reduction is about lowering either the chance of a loss happening or the size of the loss if it does happen. Unlike risk avoidance (not doing the activity) and risk prevention (stopping the loss before it occurs), risk reduction accepts that some risk remains but works to minimize its impact. In insurance language this is sometimes called “loss prevention” or “loss reduction”. You may not remove the risk, but you can reduce the damage.',


        'examples' => [

            'Road Safety: Driving at slower speeds, using better road signage, installing airbags in cars to reduce injury severity.',

            'Health & Pandemic Safety: Social distancing and masks reduce the spread and severity of infections, vaccination reduces severity of illness if infected.',

            'Fire Safety: Installing sprinklers and fire alarms — even if a fire starts, damage is less. Keeping emergency exits clear.',

            'Business/Property Safety: Backup servers and disaster recovery plans to reduce data losses, segregating flammable materials to limit fire spread.'

        ],


        'important' => [

            'Minimizes losses: Even if the event occurs, the damage is much smaller.',

            'Protects people and property: Reduces injuries, saves lives, and preserves assets.',

            'Keeps costs and insurance premiums lower: Fewer or smaller claims mean lower long-term costs.'

        ],


        'practice' => [

            'Identify remaining risks after avoidance and prevention.',

            'Introduce safeguards — physical (safety gear, alarms), procedural (rules, training), and environmental (better layouts, barriers).',

            'Prepare for quick response — emergency plans, drills, first-aid readiness.',

            'Regular maintenance and audits to ensure controls keep working.'

        ]
    ],



    // =====================================================
    // 04 — RISK TRANSFER
    // =====================================================

    [
        'id' => 'risk-transfer',
        'number' => '04',

        'title' => 'Risk Transfer',

        'description' =>
            'Shifting the financial burden of risk to another party.',

        'image' =>
            $vv_assets . '/Risk Transfer.webp',

        'class' => 'orange',


        'what' =>
            'Risk transfer means shifting the financial impact of a risk to another person or organization. You still face the event (an accident, loss or disaster may occur), but instead of you paying for the loss yourself, another party takes on that financial responsibility under an agreement. In simple terms, “If something goes wrong, someone else will pay.” Move the financial burden where it can be managed.',


        'examples' => [

            'Insurance: You pay a premium to an insurance company. If a covered loss happens (accident, fire, hospitalisation), the insurer pays you or the third party on your behalf.',

            'Contracts: A contractor agrees to take on certain liabilities for damages in a project. A logistics company assumes responsibility for goods in transit.',

            'Warranties / Service Contracts: Extended warranty on a product shifts repair or replacement cost from you to the provider.'

        ],


        'important' => [

            'Protects you or your business from large financial losses.',

            'Ensures stability and continuity after an accident or disaster.',

            'Allows you to focus on your main activities while the risk is financially covered elsewhere.'

        ],


        'practice' => [

            'Identify risks that cannot be avoided, prevented or reduced enough.',

            'Select a transfer method: Insurance policies (life, health, motor, property, liability).',

            'Contracts with indemnity or “hold harmless” clauses.',

            'Pay the cost (premium or fee) to the other party to take on the risk.',

            'Understand terms and exclusions so you know exactly what is covered.'

        ]
    ],



    // =====================================================
    // 05 — RISK RETENTION
    // =====================================================

    [
        'id' => 'risk-retention',
        'number' => '05',

        'title' => 'Risk Retention',

        'description' =>
            'Accepting and budgeting for certain risks.',

        'image' =>
            $vv_assets . '/Risk Retention.webp',

        'class' => 'pink',


        'what' =>
            'Risk retention is when you accept and keep the risk yourself instead of avoiding, reducing, or transferring it. In other words, you decide to pay for any loss from your own money if it occurs. It is also called “self-insurance” because you set aside funds to cover possible losses. When you retain the risk, you fund the loss.',


        'examples' => [

            'Small everyday losses: Paying out of pocket for minor medical expenses instead of buying insurance with a high premium. Bearing the cost of small repairs on your own vehicle or gadgets.',

            'Business Contingency funds: A company creates a reserve fund to pay for small damages or disruptions instead of insuring them.',

            'Deductibles / Co-pays: In health or motor insurance, you agree to pay a part of the loss (the deductible), while the insurer pays the rest. This is a form of partial risk retention.'

        ],


        'important' => [

            'Cost saving: Buying insurance for very small losses may cost more than paying for them yourself.',

            'Flexibility: You control how the funds are used and invested.',

            'Encourages risk awareness: When you keep some risk, you become more careful about preventing losses.'

        ],


        'practice' => [

            'Identify which risks are small or manageable (low probability or low loss amount).',

            'Set aside a contingency fund or budget for these risks.',

            'Use partial retention through deductibles and co-pays in your insurance policies.',

            'Review regularly – as your financial position or risk exposure changes, adjust how much risk you retain.'

        ]
    ],



    // =====================================================
    // 06 — RISK CONTROL
    // =====================================================

    [
        'id' => 'risk-control',
        'number' => '06',

        'title' => 'Risk Control',

        'description' =>
            'Applying policies and procedures to manage and minimize risks.',

        'image' =>
            $vv_assets . '/Risk Control.webp',

        'class' => 'green',


        'what' =>
            'Risk control is the overall strategy of identifying, evaluating and taking actions to manage risks so that their likelihood and impact are reduced to an acceptable level. It is an umbrella concept that includes Risk Avoidance, Risk Prevention, Risk Reduction, and sometimes Risk Transfer (like insurance). Don’t avoid the activity—make it safer. In simple words, it’s everything you do to control the causes and effects of loss before, during, and after an event. Identify, control, and minimize the impact.',


        'objectives' => [

            'Reduce the frequency of losses (fewer accidents).',

            'Reduce the severity of losses (smaller impact if they occur).',

            'Improve safety and resilience of people, property, and operations.',

            'Ensure continuity of business or daily life after an incident.'

        ],


        'examples' => [

            'Safety Rules: Road safety rules, workplace safety training, personal protective equipment.',

            'Maintenance: Regular checking of vehicles, electrical wiring, and fire equipment.',

            'Planning: Emergency evacuation plans, disaster drills, and backup systems.',

            'Design Choices: Building on higher ground to avoid floods; using fire-resistant materials.',

            'Insurance: Although it does not stop accidents, insurance transfers the financial part of the risk.'

        ],


        'important' => [

            'Risk control brings together different approaches to reduce the frequency and severity of losses.',

            'It improves safety and resilience of people, property, and operations.',

            'It helps ensure continuity of business or daily life after an incident.'

        ],


        'practice' => [

            'Identify the risk — list hazards and potential perils.',

            'Analyze and evaluate — measure how likely and how severe each risk is.',

            'Choose the method — avoid, prevent, reduce, or transfer.',

            'Implement controls — safety measures, policies, training, insurance.',

            'Monitor and review — keep checking and improving.'

        ]
    ]

];
?>

<section class="vv-risk-cards">

    <div class="vv-risk-cards__container">

        <!-- SECTION INTRO -->
        <!-- 
        <div class="vv-risk-cards__intro">

            <span class="vv-risk-cards__eyebrow">
                RISK MANAGEMENT
            </span>

            <h2>
                Six ways to
                <span>manage risk.</span>
            </h2>

            <p>
                Understanding the different ways to manage risk helps
                you make better decisions and protect what matters most.
            </p>

        </div> -->


        <!-- CARDS -->

        <div class="vv-risk-cards__list">

            <?php foreach ($vv_risk_cards as $index => $risk) : ?>

            <article
             id="<?php echo esc_attr($risk['id']); ?>"
                class="vv-risk-card vv-risk-card--<?php echo esc_attr($risk['class']); ?> <?php echo ($index % 2 === 1) ? 'vv-risk-card--reverse' : ''; ?>">

                <!-- IMAGE -->

                <div class="vv-risk-card__image">

                    <img src="<?php echo esc_url($risk['image']); ?>" alt="<?php echo esc_attr($risk['title']); ?>"
                        loading="lazy">

                </div>


                <!-- CONTENT -->

                <div class="vv-risk-card__body">

                    <div class="vv-risk-card__top">

                        <span class="vv-risk-card__number">
                            <?php echo esc_html($risk['number']); ?>
                        </span>

                        <div class="vv-risk-card__heading">

                            <h3>
                                <?php echo esc_html($risk['title']); ?>
                            </h3>

                            <p>
                                <?php echo esc_html($risk['description']); ?>
                            </p>

                        </div>

                    </div>


                    <!-- ACCORDIONS -->

                    <div class="vv-risk-card__accordions">


                        <!-- WHAT -->

                        <div class="vv-risk-accordion">

                            <button type="button" class="vv-risk-accordion__button" aria-expanded="false">

                                <span class="vv-risk-accordion__left">

                                    <span class="vv-risk-accordion__icon">
                                        ?
                                    </span>

                                    <span>
                                        What it Means
                                    </span>

                                </span>

                                <span class="vv-risk-accordion__plus">
                                    +
                                </span>

                            </button>


                            <div class="vv-risk-accordion__content">

                                <p>
                                    <?php echo esc_html($risk['what']); ?>
                                </p>

                            </div>

                        </div>


                        <!-- EXAMPLES -->

                        <div class="vv-risk-accordion">

                            <button type="button" class="vv-risk-accordion__button" aria-expanded="false">

                                <span class="vv-risk-accordion__left">

                                    <span class="vv-risk-accordion__icon">
                                        ✓
                                    </span>

                                    <span>
                                        Examples
                                    </span>

                                </span>

                                <span class="vv-risk-accordion__plus">
                                    +
                                </span>

                            </button>


                            <div class="vv-risk-accordion__content">

                                <ul>

                                    <?php foreach ($risk['examples'] as $example) : ?>

                                    <li>
                                        <?php echo esc_html($example); ?>
                                    </li>

                                    <?php endforeach; ?>

                                </ul>

                            </div>

                        </div>


                        <!-- WHY -->

                        <div class="vv-risk-accordion">

                            <button type="button" class="vv-risk-accordion__button" aria-expanded="false">

                                <span class="vv-risk-accordion__left">

                                    <span class="vv-risk-accordion__icon">
                                        !
                                    </span>

                                    <span>
                                        Why It's Important
                                    </span>

                                </span>

                                <span class="vv-risk-accordion__plus">
                                    +
                                </span>

                            </button>


                            <div class="vv-risk-accordion__content">

                                <ul>

                                    <?php foreach ($risk['important'] as $point) : ?>

                                    <li>
                                        <?php echo esc_html($point); ?>
                                    </li>

                                    <?php endforeach; ?>

                                </ul>

                            </div>

                        </div>

                        <!-- PRACTICE -->

                        <div class="vv-risk-accordion">

                            <button type="button" class="vv-risk-accordion__button" aria-expanded="false">

                                <span class="vv-risk-accordion__left">

                                    <span class="vv-risk-accordion__icon">
                                        →
                                    </span>

                                    <span>
                                        How to Practise <?php echo esc_html($risk['title']); ?>
                                    </span>

                                </span>

                                <span class="vv-risk-accordion__plus">
                                    +
                                </span>

                            </button>


                            <div class="vv-risk-accordion__content">

                                <ul>

                                    <?php foreach ($risk['practice'] as $step) : ?>

                                    <li>
                                        <?php echo esc_html($step); ?>
                                    </li>

                                    <?php endforeach; ?>

                                </ul>

                            </div>

                        </div>


                    </div>

                </div>

            </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<script>
document.addEventListener("DOMContentLoaded", function() {

    const accordions = document.querySelectorAll(
        ".vv-risk-accordion"
    );

    accordions.forEach(function(accordion) {

        const button = accordion.querySelector(
            ".vv-risk-accordion__button"
        );

        if (!button) {
            return;
        }

        button.addEventListener("click", function() {

            const card =
                accordion.closest(".vv-risk-card");

            const isOpen =
                accordion.classList.contains("is-open");


            /*
             * Close other accordions
             * in the same card.
             */

            if (card) {

                card
                    .querySelectorAll(
                        ".vv-risk-accordion.is-open"
                    )
                    .forEach(function(item) {

                        if (item !== accordion) {

                            item.classList.remove(
                                "is-open"
                            );

                            const itemButton =
                                item.querySelector(
                                    ".vv-risk-accordion__button"
                                );

                            if (itemButton) {

                                itemButton.setAttribute(
                                    "aria-expanded",
                                    "false"
                                );
                            }
                        }

                    });
            }


            /*
             * Toggle current accordion
             */

            accordion.classList.toggle(
                "is-open"
            );

            button.setAttribute(
                "aria-expanded",
                String(!isOpen)
            );

        });

    });

});
</script>