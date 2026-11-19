<?php
// ============================================================
// VIMA VIDYA — HEALTH INSURANCE MYTHS/FACTS
// SINGLE CONTAINER ACCORDION COMPONENT (TEXT ONLY, WITH ARROWS)
// ============================================================

$healthCardsData = [
    [
        "title" => "30-day waiting period for new policies",
        "fact" => "Most policies do not cover illness-related claims in the first 30 days. Accidents are typically covered from Day 1. Buy early — don't wait until you need it.",
        "tag" => "Waiting Period"
    ],
    [
        "title" => "Pre-existing diseases have a 2–4 year wait",
        "fact" => "Conditions you already have when buying the policy are excluded for a defined period. The earlier you buy, the sooner this exclusion lifts.",
        "tag" => "Pre-existing"
    ],
    [
        "title" => "No-claim bonus grows your coverage",
        "fact" => "For every claim-free year, most insurers add 5–50% to your sum insured at no extra premium, rewarding you for staying healthy.",
        "tag" => "No-Claim Bonus"
    ],
    [
        "title" => "Portability lets you switch insurers",
        "fact" => "IRDAI mandates that you can port your policy to another insurer without losing your waiting period credits or no-claim bonus accrual.",
        "tag" => "Portability"
    ],
    [
        "title" => "Super top-up cover is highly cost-effective",
        "fact" => "A ₹50 lakh super top-up with a ₹5 lakh deductible can cost less than ₹3,000/year for a young individual — the smartest way to scale protection.",
        "tag" => "Super Top-Up"
    ],
    [
        "title" => "Day care procedures are now covered",
        "fact" => "Advances in medicine mean many procedures (cataract, dialysis, chemotherapy) are completed in under 24 hours. Most modern policies cover all listed day care procedures.",
        "tag" => "Day Care"
    ],
    [
        "title" => "Section 80D gives you a real tax benefit",
        "fact" => "Premium paid for your own policy and your parents' policy qualifies for deductions — up to ₹1,00,000 in some cases. Health insurance is the only insurance with a dedicated tax deduction.",
        "tag" => "Tax Benefit"
    ]
];

$healthSlides = $healthCardsData; 
?>

<section class="vv-myths vv-myths--health" id="health-seven-things">
    <div class="vv-myths__container">

        <!-- HEADER -->
        <header class="vv-myths__header">
            <h2 class="vv-myths__heading">
                7 Things You May Not Know About Health Insurance
            </h2>
        </header>

        <!-- MASTER SINGLE BOX WRAPPER -->
        <div class="vv-myth-master-box">
            <div class="vv-myth-carousel">
                <div class="vv-myth-carousel__viewport" id="vvHealthMythViewport">
                    <div class="vv-myth-carousel__track" id="vvHealthMythTrack">

                        <?php foreach ($healthSlides as $slideIndex => $item): 
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
    const track = document.getElementById('vvHealthMythTrack');
    const slides = track ? track.querySelectorAll('.vv-myth-slide') : [];

    if (!track || !slides.length) return;

    slides.forEach((slide) => {
        const mythHeader = slide.querySelector('.vv-myth-side');
        
        mythHeader.addEventListener('click', function () {
            // Remove expanded state from all slides in this health section
            slides.forEach(s => s.classList.remove('is-expanded'));
            
            // Add expanded state to the clicked slide
            slide.classList.add('is-expanded');
        });
    });
});
</script>