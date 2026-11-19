<?php
/**
 * Vima Vidya
 * Understand Travel Insurance Through Lived Experiences
 *
 * Template Part: Travel Case Studies (Two Upfront + Connected Archive Link with Images)
 */

$travel_case_studies = [

    // =====================================================
    // CASE STUDY 01 — ARJUN (Shown Upfront 1)
    // =====================================================
    [
        'eyebrow' => 'The ₹8,400 Surprise',
        'title' => "Arjun's Goa Weekend — The ₹8,400 Surprise That ₹180 Would Have Prevented",
        'person' => 'Arjun, 29',
        'location' => 'Hyderabad',
        'image' => 'https://images.unsplash.com/photo-1506015391300-4802dc74de2e?w=800&auto=format&fit=crop&q=80',
        'image_alt' => "Arjun's flight delay and travel insurance gap",
        'stats' => [
            ['icon' => 'dashicons-location', 'label' => 'Location', 'value' => 'Hyderabad', 'sub' => 'Software developer'],
            ['icon' => 'dashicons-shield', 'label' => 'Coverage', 'value' => 'None', 'sub' => 'Skipped ₹180 policy'],
            ['icon' => 'dashicons-warning', 'label' => 'Incident', 'value' => '7-Hour Delay', 'sub' => 'Missed hotel & scuba'],
            ['icon' => 'dashicons-money-alt', 'label' => 'Out-of-Pocket', 'value' => '₹7,000', 'sub' => 'Total recoverable loss'],
        ],
        'takeaway_title' => 'TAKEAWAY',
        'takeaway' => "Trip Delay and Trip Interruption benefits are not international-only provisions — they apply equally to domestic flights. Non-refundable prepaid bookings are recoverable under Trip Interruption when the cause is a covered event. At ₹180 in premium for ₹7,000 in potential recovery, the ratio of risk transferred to cost is exceptional.",
        'paragraphs' => [
            "Arjun, 29, a software developer in Hyderabad, booked a solo long-weekend trip to Goa. His flight was delayed by 7 hours. He missed his pre-paid hotel check-in. The boutique property charged one night at ₹4,200 under its no-show clause. His pre-paid scuba diving booking — ₹2,800 — was forfeited when he arrived too late.",
            "A basic domestic travel insurance plan for his 3-day trip — approximately ₹180 — would have covered both losses. The hotel no-show triggered by the airline delay falls under the Trip Delay benefit — compensation for accommodation and meal costs arising from a delay beyond the specified threshold, typically 3 hours for domestic air travel.",
            "The forfeited scuba booking falls under Trip Interruption — non-refundable prepaid costs lost because of a covered delay event. Total recoverable loss: ₹7,000. Premium not spent: ₹180.",
            "He told this story to three colleagues the following week. None of them had domestic travel insurance either."
        ],
    ],

    // =====================================================
    // CASE STUDY 02 — VIKRANT (Shown Upfront 2)
    // =====================================================
    [
        'eyebrow' => 'Family Holiday in Bangkok',
        'title' => "Vikrant's Family Holiday in Bangkok — ₹13.5 Lakh, Zero Out of Pocket",
        'person' => 'Vikrant, 44',
        'location' => 'Thailand',
        'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=800&auto=format&fit=crop&q=80',
        'image_alt' => "Vikrant's mother medical emergency and travel insurance claim handling",
        'stats' => [
            ['icon' => 'dashicons-location', 'label' => 'Location', 'value' => 'Bangkok', 'sub' => 'Family holiday organizer'],
            ['icon' => 'dashicons-calendar-alt', 'label' => 'Policy Status', 'value' => 'Family Floater', 'sub' => 'Covered 5 travellers'],
            ['icon' => 'dashicons-warning', 'label' => 'Incident', 'value' => 'Hip Fracture', 'sub' => 'Emergency surgery'],
            ['icon' => 'dashicons-money-alt', 'label' => 'Claim Payout', 'value' => '₹17 Lakhs', 'sub' => 'Out-of-pocket: ₹0'],
        ],
        'takeaway_title' => 'TAKEAWAY',
        'takeaway' => "A Family Floater Travel Policy covers all named members under one premium — including elderly parents, provided they are declared accurately at purchase with their age and pre-existing conditions. Indian health insurance almost certainly has an overseas exclusion clause. The 24/7 Assistance team coordinates treatment and pays the hospital directly through the insurer's network.",
        'paragraphs' => [
            "Vikrant, 44, organised a 10-day family holiday to Thailand with his wife, two children (ages 9 and 12), and his mother (68). On Day 6, his mother slipped at Wat Pho temple and fractured her hip. Emergency surgery was required in a private Bangkok hospital.",
            "The bill: THB 580,000 — approximately ₹17 lakh*. His mother's Indian health insurance had no overseas coverage — a clause she had never read, and neither had Vikrant.",
            "Vikrant had, however, purchased a Family Floater Travel Policy covering all five travellers. His mother was declared as a dependent, with her age (68) and hypertension recorded under the pre-existing disease declaration at purchase.",
            "The insurer's 24/7 Assistance team coordinated the surgery directly with the Bangkok hospital through their Asia assistance network. Total out-of-pocket expense for the family: ₹0. The premium for the family travel plan for five people, 10 days to Thailand, had cost ₹6,200."
        ],
    ],

    // =====================================================
    // CASE STUDY 03 — MEENAKSHI
    // =====================================================
    [
        'eyebrow' => 'The Rajdhani Journey',
        'title' => "Meenakshi's Rajdhani Journey — ₹91,000 Lost and a Six Months Chase for Nothing",
        'person' => 'Meenakshi, 52',
        'location' => 'Nagpur to Raipur',
        'image' => 'https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?w=800&auto=format&fit=crop&q=80',
        'image_alt' => "Meenakshi's damaged luggage and stolen jewellery on Rajdhani Express",
        'stats' => [
            ['icon' => 'dashicons-location', 'label' => 'Location', 'value' => 'Raipur', 'sub' => 'Wedding traveller'],
            ['icon' => 'dashicons-shield', 'label' => 'Coverage', 'value' => 'None', 'sub' => 'Skipped domestic plan'],
            ['icon' => 'dashicons-warning', 'label' => 'Incident', 'value' => 'Stolen Jewellery', 'sub' => 'Damaged trolley bag'],
            ['icon' => 'dashicons-money-alt', 'label' => 'Loss', 'value' => '₹91,000', 'sub' => 'Recovered: ₹0'],
        ],
        'takeaway_title' => 'TAKEAWAY',
        'takeaway' => "Domestic travel insurance covers baggage loss on trains and roads — not just airline baggage. Filing a police complaint immediately is mandatory documentation for any baggage theft claim. The baggage sub-limit defines the maximum payout per item. Same train, same delay, same risk — one person recovered their loss in 15 days with insurance, the other recovered nothing in six months.",
        'paragraphs' => [
            "Meenakshi, 52, was travelling from Nagpur to Raipur on the Rajdhani Express for her nephew's wedding. The train was delayed six hours. She missed the wedding ceremony entirely. At Raipur station, her checked trolley bag arrived damaged — with the inner zippered pouch containing gold jewellery (valued at ₹91,000) missing. She filed a police complaint. The jewellery was never recovered.",
            "A 4-day domestic travel insurance plan for this journey would have cost approximately ₹250–₹380. It would have activated three benefits simultaneously: Checked Baggage Loss cover for the stolen jewellery, up to the policy's baggage sub-limit; a Trip Delay benefit for the six-hour delay; and 24/7 support in properly documenting the police complaint.",
            "Her colleague on the same train had domestic travel insurance. His claim — for the delay-related hotel stay and a stolen item — was settled in 15 working days. Meenakshi spent six months following up with Railways and recovered nothing."
        ],
    ],

    // =====================================================
    // CASE STUDY 04 — KAVYA
    // =====================================================
    [
        'eyebrow' => 'Fall in Zurich',
        'title' => "Kavya's Fall in Zurich — The Insurer Who Handled Everything at 2 AM",
        'person' => 'Kavya, 32',
        'location' => 'Zurich, Switzerland',
        'image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800&auto=format&fit=crop&q=80',
        'image_alt' => "Kavya's hiking accident in Zurich and medical repatriation handling",
        'stats' => [
            ['icon' => 'dashicons-location', 'label' => 'Location', 'value' => 'Zurich', 'sub' => 'Solo backpacker'],
            ['icon' => 'dashicons-cart', 'label' => 'Policy Cost', 'value' => '₹3,100', 'sub' => '3-week Europe trip'],
            ['icon' => 'dashicons-warning', 'label' => 'Incident', 'value' => 'Knee Injury', 'sub' => 'Required surgery'],
            ['icon' => 'dashicons-money-alt', 'label' => 'Claim Settled', 'value' => '₹27 Lakhs', 'sub' => 'Cashless pre-auth'],
        ],
        'takeaway_title' => 'TAKEAWAY',
        'takeaway' => "Call the 24/7 helpline before you pay anything at a foreign hospital. Cashless pre-authorisation ensures the insurer pays the hospital directly, eliminating the need to arrange foreign currency transfers at 2 AM. Medical Repatriation safely flies you back to India once stable. The 24/7 assistance helpline acts as an operational crisis manager.",
        'paragraphs' => [
            "Kavya, 32, was on a solo backpacking trip through Europe. On a hiking trail near Zurich, she fell on wet rock and suffered a serious knee injury requiring surgery. She was hospitalised in Switzerland for two days.",
            "Her parents in Coimbatore received the call at 2 AM India time. They were told the hospital bill would be approximately CHF 22,000 — around ₹27 lakh*. Her father's first instinct was to initiate a bank transfer. But Kavya had already called the insurer's 24/7 Assistance helpline from the emergency room.",
            "Within 40 minutes, the insurer's assistance network had arranged cashless pre-authorisation directly with the Swiss hospital. No transfer was needed from India. Three weeks later, once medically cleared to fly, the insurer coordinated Kavya's return to India through their Medical Repatriation service. Total policy cost: ₹3,100. Total claim settled: ₹27 lakh."
        ],
    ],

    // =====================================================
    // CASE STUDY 05 — NANDINI
    // =====================================================
    [
        'eyebrow' => 'The Solo Traveller',
        'title' => "Nandini — The Solo Traveller Who Understands Before She Needs To",
        'person' => 'Nandini, 29',
        'location' => 'Bengaluru',
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&auto=format&fit=crop&q=80',
        'image_alt' => "Nandini reviewing annual multi-trip travel insurance policy details",
        'stats' => [
            ['icon' => 'dashicons-location', 'label' => 'Location', 'value' => 'Bengaluru', 'sub' => 'Content strategist'],
            ['icon' => 'dashicons-shield', 'label' => 'Policy Type', 'value' => 'Annual Multi-Trip', 'sub' => 'Cost ₹9,400/year'],
            ['icon' => 'dashicons-warning', 'label' => 'Discovery', 'value' => 'Page 14', 'sub' => 'Found overseas exclusion'],
            ['icon' => 'dashicons-money-alt', 'label' => 'Protection', 'value' => 'Unlimited', 'sub' => '3+ trips per year'],
        ],
        'takeaway_title' => 'TAKEAWAY',
        'takeaway' => "The overseas exclusion clause is standard in most Indian health insurance policies — check page 14 of your health policy tonight. An Annual Multi-Trip (AMT) policy is more economical for anyone making 3+ international trips per year. Use the Free Look Period to verify policy terms and remove unwanted default add-ons.",
        'paragraphs' => [
            "Nandini, 29, a content strategist in Bengaluru, travelled internationally at least three times a year without travel insurance, assuming her employer's health plan covered her abroad. At a personal finance workshop, she saw the overseas exclusion clause from a standard Indian health policy on screen and recognized her own insurer's name. She checked her policy that evening — the exclusion was there on page 14.",
            "The next morning, she bought an Annual Multi-Trip Policy (AMT) for ₹9,400 — covering unlimited international trips of up to 30 days each for the full year. She selected USD 100,000 medical sum insured, added the Adventure Sports Add-On for a Bali surfing trip, and included Trip Cancellation cover.",
            "She read the policy within the 15-day Free Look Period, found two unnecessary default add-ons, and had them removed to save ₹800. She has since taken five international trips under the AMT policy with complete peace of mind."
        ],
    ],

    // =====================================================
    // CASE STUDY 06 — RAMESH
    // =====================================================
    [
        'eyebrow' => 'Retirement Trip to the UK',
        'title' => "Ramesh's Retirement Trip to the UK — When the PED Declaration Saved Everything",
        'person' => 'Ramesh, 61',
        'location' => 'Pune to London',
        'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=800&auto=format&fit=crop&q=80',
        'image_alt' => "Ramesh's medical emergency in London and PED disclosure success",
        'stats' => [
            ['icon' => 'dashicons-location', 'label' => 'Location', 'value' => 'London', 'sub' => 'Retired principal'],
            ['icon' => 'dashicons-shield', 'label' => 'Plan Type', 'value' => 'Senior Intl Plan', 'sub' => 'Cost ₹14,200 with PED'],
            ['icon' => 'dashicons-warning', 'label' => 'Incident', 'value' => 'Cardiac Event', 'sub' => '4-day hospital stay'],
            ['icon' => 'dashicons-money-alt', 'label' => 'Claim Settled', 'value' => '₹14.7 Lakhs', 'sub' => 'Fully covered via waiver'],
        ],
        'takeaway_title' => 'TAKEAWAY',
        'takeaway' => "A pre-existing disease (PED) is any condition treated before the policy start date — diabetes, hypertension, and asthma must always be declared. Declaring a PED does not mean automatic exclusion; many insurers offer a PED waiver for stable conditions. Non-declaration guarantees a disputed or rejected claim during investigation.",
        'paragraphs' => [
            "Ramesh, 61, a retired school principal from Pune, booked a 21-day trip to visit his daughter in London with his wife Usha, 58. Ramesh managed Type 2 diabetes with oral medication, while Usha had mild, stable hypertension.",
            "Their son Vikram called the insurer's helpline and declared both conditions accurately. Both were recorded as pre-existing diseases (PEDs) under a PED waiver for an extra ₹200, bringing the total premium to ₹14,200.",
            "On Day 14 in London, Ramesh experienced a mild cardiac event linked to his diabetes and was hospitalised for four days. The bill: GBP 11,400 — approximately ₹14.7 lakh*. Because both conditions were fully declared at purchase, the claim was processed without dispute, and Ramesh paid nothing at the counter."
        ],
    ],

    // =====================================================
    // CASE STUDY 07 — PRIYA (TREK)
    // =====================================================
    [
        'eyebrow' => 'Trek to Hampta Pass',
        'title' => "Priya's Trek to Hampta Pass — When the Stability Clause became the Entire Story",
        'person' => 'Priya, 44',
        'location' => 'Himachal Pradesh',
        'image' => 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=800&auto=format&fit=crop&q=80',
        'image_alt' => "Priya's trekking injury at Hampta Pass and stability clause implications",
        'stats' => [
            ['icon' => 'dashicons-location', 'label' => 'Location', 'value' => 'Hampta Pass', 'sub' => 'Marketing director'],
            ['icon' => 'dashicons-shield', 'label' => 'Policy Gap', 'value' => 'Stability Clause', 'sub' => 'Treated within 90 days'],
            ['icon' => 'dashicons-warning', 'label' => 'Incident', 'value' => 'Disc Injury Relapse', 'sub' => 'Helicopter evacuation'],
            ['icon' => 'dashicons-money-alt', 'label' => 'Out-of-Pocket', 'value' => '₹2.95 Lakhs', 'sub' => 'Partially rejected claim'],
        ],
        'takeaway_title' => 'TAKEAWAY',
        'takeaway' => "The stability clause requires pre-existing conditions to be medically stable without new treatment for a specified period (typically 60–90 days) before the policy start date. 'Medically fit to travel' is not the same as 'medically stable' under policy terms. Declare any recent treatment within the past 12 months, even if fully resolved.",
        'paragraphs' => [
            "Priya, 44, a marketing director from Chennai, planned a 7-day Hampta Pass trek in Himachal Pradesh. Two months prior, she was diagnosed with a herniated disc from a gym injury, which resolved satisfactorily with physiotherapy by her departure date.",
            "When buying domestic travel insurance, she did not declare the herniated disc, reasoning that since she was cleared to trek, it was no longer a pre-existing condition. On Day 4 of the trek at 4,200 metres, she suffered a severe relapse of the disc injury requiring helicopter evacuation and surgery totalling ₹3.8 lakh.",
            "The insurer's assessment identified the prior treatment from two months earlier. The policy's stability clause mandated that pre-existing conditions must be stable without new treatment for 90 days before inception. Consequently, the surgery claim was rejected, and only ₹85,000 was covered for the evacuation. Priya paid ₹2.95 lakh from her savings."
        ],
    ],

    // =====================================================
    // CASE STUDY 08 — SUNDAR
    // =====================================================
    [
        'eyebrow' => 'Business Trip to the USA',
        'title' => "Sundar's Business Trip to the USA — What Medical Loading Looks Like in Real Life",
        'person' => 'Sundar, 48',
        'location' => 'Chicago, USA',
        'image' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&auto=format&fit=crop&q=80',
        'image_alt' => "Sundar's medical emergency in Chicago and USA health cost coverage",
        'stats' => [
            ['icon' => 'dashicons-location', 'label' => 'Location', 'value' => 'Chicago', 'sub' => 'Consulting partner'],
            ['icon' => 'dashicons-shield', 'label' => 'Coverage Upgrade', 'value' => 'USD 500,000', 'sub' => 'Added USD 5K premium'],
            ['icon' => 'dashicons-warning', 'label' => 'Incident', 'value' => 'Cardiac Event', 'sub' => '3 days hospital stay'],
            ['icon' => 'dashicons-money-alt', 'label' => 'Claim Settled', 'value' => '₹56 Lakhs', 'sub' => 'Full bill covered'],
        ],
        'takeaway_title' => 'TAKEAWAY',
        'takeaway' => "Healthcare costs in the USA, Canada, and Australia are 5–10 times higher than elsewhere, making medical sum insured loading critical. Standard USD 50,000 covers can be wiped out by a single American hospital procedure. For USA travel, a minimum medical sum insured of USD 250,000—500,000 is essential.",
        'paragraphs' => [
            "Sundar, 48, a senior consulting partner in Bengaluru, travelled to the USA twice a year for client meetings, always buying cheap international plans with a USD 50,000 medical sum insured. After learning about healthcare cost differences in America, he upgraded to a USD 500,000 plan for an additional ₹4,600 per trip.",
            "On his next USA trip in Chicago, he suffered a severe cardiac event requiring catheterisation and a 3-day hospital stay. The bill reached USD 68,000 — approximately ₹56 lakh*.",
            "His upgraded USD 500,000 policy covered the full amount. His previous USD 50,000 plan would have left him with a personal liability of roughly ₹38 lakh*. A small premium upgrade returned ₹56 lakh in covered liability."
        ],
    ],

    // =====================================================
    // CASE STUDY 09 — PRIYA & ADITYA
    // =====================================================
    [
        'eyebrow' => 'Honeymoon in Bali',
        'title' => "Priya and Aditya's Honeymoon in Bali — The Delayed Bag",
        'person' => 'Priya & Aditya',
        'location' => 'Bali, Indonesia',
        'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80',
        'image_alt' => "Priya and Aditya's delayed baggage claim handling in Bali",
        'stats' => [
            ['icon' => 'dashicons-location', 'label' => 'Location', 'value' => 'Bali', 'sub' => 'Honeymoon couple'],
            ['icon' => 'dashicons-shield', 'label' => 'Action Taken', 'value' => 'Filed PIR', 'sub' => 'At airport desk'],
            ['icon' => 'dashicons-warning', 'label' => 'Incident', 'value' => 'Delayed Baggage', 'sub' => 'Arrived on Day 3'],
            ['icon' => 'dashicons-money-alt', 'label' => 'Reimbursement', 'value' => '₹14,000', 'sub' => 'Essential purchases'],
        ],
        'takeaway_title' => 'TAKEAWAY',
        'takeaway' => "Always file a Property Irregularity Report (PIR) at the destination airline desk before leaving arrivals; insurers require it for baggage delay claims. The Checked Baggage Delay benefit covers essential purchases (clothing, toiletries) after the policy threshold (6 hours international). Keep all itemised receipts.",
        'paragraphs' => [
            "Priya, 28, and Aditya, 31, landed in Bali for their honeymoon after a connecting flight. At the baggage carousel, Aditya's bag arrived, but Priya's bag carrying formal clothes, jewellery, and medication was missing.",
            "Aditya immediately went to the airline's baggage desk inside the arrivals terminal and filed a Property Irregularity Report (PIR) before exiting. He then called their insurer's 24/7 Assistance helpline to activate the Checked Baggage Delay benefit.",
            "Since the bag was delayed beyond 12 hours, Priya was authorized to purchase essential replacements. She spent ₹14,000 on essentials over two days and kept all receipts. The bag arrived on Day 3, and their full claim of ₹14,000 was reimbursed upon return to India."
        ],
    ],

];

// Slice to show only the first 2 stories upfront
$front_stories = array_slice($travel_case_studies, 0, 2);
?>

<section class="vv-case-studies" aria-labelledby="vv-case-studies-title" id="evaluate-travel-real-scenerios">
    <div class="vv-case-studies__container">

        <!-- SECTION HEADER -->
        <div class="vv-case-studies__header">
            <span class="vv-case-studies__eyebrow">LIVED EXPERIENCES</span>
            <h2 id="vv-case-studies-title">
                Understand Travel Insurance Through Lived Experiences
            </h2>
            <p>
                These are not statistics. These are journeys. Read the one closest to your own travel life — because one of these stories could be yours.
            </p>
        </div>

        <!-- FRONT 2 STORIES LIST -->
        <div class="vv-case-studies__list">
            <?php foreach ($front_stories as $index => $story) : ?>
                <article class="vv-case-study <?php echo $index % 2 !== 0 ? 'vv-case-study--reverse' : ''; ?>">

                    <!-- VISUAL & STATS COLUMN -->
                    <div class="vv-case-study__visual">
                        <div class="vv-case-study__image-wrap">
                            <img src="<?php echo esc_url($story['image']); ?>" alt="<?php echo esc_attr($story['image_alt']); ?>" class="vv-case-study__image" loading="lazy">
                        </div>

                        <!-- STAT CARDS -->
                        <div class="vv-case-study__stats">
                            <?php foreach ($story['stats'] as $stat) : ?>
                                <div class="vv-case-study__stat">
                                    <span class="vv-case-study__stat-icon">
                                        <span class="dashicons <?php echo esc_attr($stat['icon']); ?>"></span>
                                    </span>
                                    <div class="vv-case-study__stat-content">
                                        <span class="vv-case-study__stat-label"><?php echo esc_html($stat['label']); ?></span>
                                        <strong class="vv-case-study__stat-value"><?php echo esc_html($stat['value']); ?></strong>
                                        <span class="vv-case-study__stat-sub"><?php echo esc_html($stat['sub']); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- TAKEAWAY -->
                        <div class="vv-case-study__takeaway">
                            <div class="vv-case-study__takeaway-icon">
                                <span class="dashicons dashicons-lightbulb"></span>
                            </div>
                            <div class="vv-case-study__takeaway-content">
                                <span class="vv-case-study__takeaway-label"><?php echo esc_html($story['takeaway_title']); ?></span>
                                <p><?php echo esc_html($story['takeaway']); ?></p>
                            </div>
                        </div>

                        <!-- READ MORE BUTTON (Links to full story archive page) -->
                        <div class="vv-case-study__footer">
                            <a href="<?php echo esc_url(home_url('/travel-stories/')); ?>" class="vv-button vv-button--primary">
                                Read More Stories <span class="dashicons dashicons-arrow-right-alt"></span>
                            </a>
                        </div>
                    </div>

                    <!-- STORY CONTENT COLUMN -->
                    <div class="vv-case-study__content">
                        <div class="vv-case-study__meta">
                            <span class="vv-case-study__person"><?php echo esc_html($story['person']); ?></span>
                            <span class="vv-case-study__separator">|</span>
                            <span class="vv-case-study__location"><?php echo esc_html($story['location']); ?></span>
                        </div>

                        <h3 class="vv-case-study__title">
                            <?php echo esc_html($story['title']); ?>
                        </h3>

                        <div class="vv-case-study__story">
                            <?php foreach ($story['paragraphs'] as $paragraph) : ?>
                                <p><?php echo wp_kses_post($paragraph); ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>