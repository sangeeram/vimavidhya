<?php
// ============================================================
// VIMA VIDYA — INSURANCE MYTHS VS REALITIES
// SINGLE CONTAINER ACCORDION COMPONENT (TEXT ONLY, WITH ARROWS)
// ============================================================

$cardsData = [
    [
        "title" => "Your landlord's insurance does NOT cover your belongings as a tenant",
        "fact" => "Every tenant needs their own contents policy. The landlord's policy legally cannot extend to your personal property.",
        "tag" => "Tenant Insurance"
    ],
    [
        "title" => "Land cannot be insured — only the structure above it",
        "fact" => "Your sum insured must reflect only the cost to rebuild the structure, not the market resale value of the property which includes land.",
        "tag" => "Property Valuation"
    ],
    [
        "title" => "Jewellery has a sub-limit unless declared as specified items",
        "fact" => "A standard contents policy caps jewellery claims at ₹50,000–₹1 lakh. Indian households frequently hold far more. Every significant piece must be separately declared with a valuation certificate.",
        "tag" => "Valuables Cover"
    ],
    [
        "title" => "An escalation clause automatically adjusts your cover as construction costs rise",
        "fact" => "Without it, your building cover erodes every year as construction costs rise, potentially triggering the Average Clause at claim time.",
        "tag" => "Escalation Clause"
    ],
    [
        "title" => "Portable equipment cover follows your device outside the home",
        "fact" => "A standard contents policy covers electronics only inside your home. A portable equipment add-on covers your laptop, camera, and phone wherever you go.",
        "tag" => "Gadget Protection"
    ],
    [
        "title" => "Bharat Griha Raksha is a standard product available from all IRDAI insurers",
        "fact" => "IRDAI mandates that all general insurers offer this product, enabling true comparison across insurers on identical terms.",
        "tag" => "IRDAI Mandate"
    ],
    [
        "title" => "A single late notification can void an otherwise valid claim",
        "fact" => "Most policies require claim notification within 24–72 hours of the event. A claim reported ten days late may be rejected on procedural grounds alone.",
        "tag" => "Claim Timelines"
    ],
    [
        "title" => "As a small business owner, your landlord's building insurance does NOT cover stock, equipment, or cash",
        "fact" => "Your commercial landlord may have fire insurance on the structure. It has no obligation to — and will not — cover your inventory, your trade equipment, or the cash in your drawer. You need your own commercial contents policy.",
        "tag" => "Commercial Cover"
    ],
    [
        "title" => "Business stock must be insured at its peak seasonal value — not average value",
        "fact" => "A kirana that holds ₹2L in stock ordinarily may hold ₹5L ahead of Diwali. The policy sum insured must reflect the maximum stock value, not the average. A shortfall at claim time triggers the Average Clause.",
        "tag" => "Seasonal Stock"
    ],
    [
        "title" => "Business interruption is a separate, equally important cover",
        "fact" => "A fire that destroys your shop costs you the physical loss. The weeks you cannot trade while rebuilding costs you the income loss. Standard commercial property policies cover the first. Business interruption cover is needed for the second.",
        "tag" => "Business Continuity"
    ]
];

$mythSlides = $cardsData; 
?>

<section class="vv-myths" id="ten-things">
    <div class="vv-myths__container">

        <!-- HEADER -->
        <header class="vv-myths__header">
            <h2 class="vv-myths__heading">
                10 Things You May Not Be Aware of About Property Insurance
            </h2>
        </header>

        <!-- MASTER SINGLE BOX WRAPPER -->
        <div class="vv-myth-master-box">
            <div class="vv-myth-carousel">
                <div class="vv-myth-carousel__viewport" id="vvMythViewport">
                    <div class="vv-myth-carousel__track" id="vvMythTrack">

                        <?php foreach ($mythSlides as $slideIndex => $item): ?>
                            <div class="vv-myth-slide <?php echo $slideIndex === 0 ? 'is-expanded' : ''; ?>" data-slide="<?php echo esc_attr($slideIndex); ?>">
                                
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
    const track = document.getElementById('vvMythTrack');
    const slides = track ? track.querySelectorAll('.vv-myth-slide') : [];

    if (!track || !slides.length) return;

    slides.forEach((slide) => {
        const mythHeader = slide.querySelector('.vv-myth-side');
        
        mythHeader.addEventListener('click', function () {
            // Remove expanded state from all slides
            slides.forEach(s => s.classList.remove('is-expanded'));
            
            // Add expanded state to the clicked slide
            slide.classList.add('is-expanded');
        });
    });
});
</script>