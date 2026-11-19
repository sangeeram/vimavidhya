<?php
// ============================================================
// VIMA VIDYA — TRAVEL INSURANCE MYTHS/FACTS
// SINGLE CONTAINER ACCORDION COMPONENT (TEXT ONLY, WITH ARROWS)
// ============================================================

$travelCardsData = [
    [
        "title" => "Domestic travel insurance exists and IRDAI has mandated a standard product for it",
        "fact" => "The Bharat Yatra Suraksha is a mandated domestic travel product all insurers must offer — covering medical emergencies, baggage, delay, and PA for road, rail, and air within India. Most Indian travellers have never heard of it.",
        "tag" => "Domestic Cover"
    ],
    [
        "title" => "You are covered from Day 1 — no waiting period",
        "fact" => "Unlike health insurance with its 30-day initial waiting period, a travel policy is active from the declared trip start date. An accident on Day 1 of your trek is fully covered.",
        "tag" => "Immediate Cover"
    ],
    [
        "title" => "No medical test is required for most standard plans",
        "fact" => "Standard travel insurance requires no pre-purchase medical examination for most plans up to age 65. You declare your health status; the policy is issued immediately.",
        "tag" => "No Medicals"
    ],
    [
        "title" => "Your medical sum insured can be as high as USD 500,000 for international travel",
        "fact" => "High-end international plans offer medical cover up to USD 500,000 — critical for the USA, UK, and Australia where a single ICU day can cost USD 5,000–10,000.",
        "tag" => "High Sum Insured"
    ],
    [
        "title" => "Annual Multi-Trip policies exist and cost less than buying per trip for frequent travellers",
        "fact" => "If you travel internationally more than 3 times per year, an AMT policy almost always costs less than buying individually — and ensures you are never accidentally uninsured.",
        "tag" => "Annual Multi-Trip"
    ],
    [
        "title" => "A compassionate visit benefit will pay for a family member to reach you if hospitalised abroad",
        "fact" => "If you are hospitalised overseas for more than 5–7 days, most international plans cover economy-class airfare for one family member to travel from India to be with you.",
        "tag" => "Compassionate Visit"
    ],
    [
        "title" => "The 24/7 Assistance Service is operationally, not just financially important",
        "fact" => "A good insurer's assistance team pre-authorises hospital treatment, pays hospitals directly, arranges evacuation, briefs your family in India, and coordinates your return home. This capability is as valuable as the financial payout itself.",
        "tag" => "24/7 Assistance"
    ]
];

$travelSlides = $travelCardsData; 
?>

<section class="vv-myths vv-myths--travel" id="travel-seven-things">
    <div class="vv-myths__container">

        <!-- HEADER -->
        <header class="vv-myths__header">
            <h2 class="vv-myths__heading">
                7 Things You May Not Be Aware of About Travel Insurance
            </h2>
        </header>

        <!-- MASTER SINGLE BOX WRAPPER -->
        <div class="vv-myth-master-box">
            <div class="vv-myth-carousel">
                <div class="vv-myth-carousel__viewport" id="vvTravelMythViewport">
                    <div class="vv-myth-carousel__track" id="vvTravelMythTrack">

                        <?php foreach ($travelSlides as $slideIndex => $item): 
                            $colorClass = 'vv-myth-slide--color-' . (($slideIndex % 7) + 1);
                        ?>
                            <div class="vv-myth-slide <?php echo $slideIndex === 0 ? 'is-expanded' : ''; ?> <?php echo $colorClass; ?>" data-slide="<?php echo esc_attr($slideIndex); ?>">
                                
                                <!-- SPLIT SCREEN CARD CONTAINER -->
                                <div class="vv-myth-split-card">

                                    <!-- MYTH SIDE (Toggle Header) -->
                                    <div class="vv-myth-side">
                                        <div class="vv-myth-side__header">
                                            <span class="vv-myth-badge"><?php echo sprintf('%02d', $slideIndex + 1); ?></span>
                                            <span class="vv-myth-tag"><?php echo esc_html($item['tag']); ?></span>
                                        </div>
                                        <h3 class="vv-myth-side__title"><?php echo esc_html($item['title']); ?></h3>
                                        <span class="vv-accordion-icon">⌄</span>
                                    </div>

                                    <!-- REALITY SIDE (Shown when Expanded) -->
                                    <div class="vv-reality-side">
                                        <p class="vv-reality-text"><?php echo esc_html($item['fact']); ?></p>
                                    </div>

                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('vvTravelMythTrack');
    const slides = track ? track.querySelectorAll('.vv-myth-slide') : [];

    if (!track || !slides.length) return;

    slides.forEach((slide) => {
        const mythHeader = slide.querySelector('.vv-myth-side');
        
        mythHeader.addEventListener('click', function () {
            // Remove expanded state from all slides in this section
            slides.forEach(s => s.classList.remove('is-expanded'));
            
            // Add expanded state to the clicked slide
            slide.classList.add('is-expanded');
        });
    });
});
</script>