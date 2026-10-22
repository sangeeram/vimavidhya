<?php
// ============================================================
// VIMA VIDYA — PERSONAL ACCIDENT INSURANCE MYTHS/FACTS
// SINGLE CONTAINER ACCORDION COMPONENT (TEXT ONLY, WITH ARROWS)
// ============================================================

$paCardsData = [
    [
        "title" => "No waiting period — coverage begins immediately",
        "fact" => "Unlike health insurance which has 30-day waiting periods, a PA policy is active from Day 1. An accident on Day 2 of your policy is fully covered.",
        "tag" => "Immediate Cover"
    ],
    [
        "title" => "No pre-policy medical test required",
        "fact" => "You can buy a PA policy without any medical examination. Coverage is based on your declared occupation and health status at proposal.",
        "tag" => "No Medicals"
    ],
    [
        "title" => "PTD benefit can go up to 125% of Capital Sum Insured (CSI) in some policies",
        "fact" => "Some enhanced PA plans pay more than 100% of the Capital Sum Insured for Permanent Total Disability (PTD), recognizing the long-term care costs involved.",
        "tag" => "Disability Benefit"
    ],
    [
        "title" => "Worldwide coverage available",
        "fact" => "Many individual PA policies cover you for accidents anywhere in the world, not just India. Relevant for frequent business travelers.",
        "tag" => "Global Cover"
    ],
    [
        "title" => "Cumulative no-claim bonus increases your cover",
        "fact" => "For every claim-free year, many policies add 5–10% to your sum insured at no extra premium, up to 50% cumulative bonus.",
        "tag" => "No-Claim Bonus"
    ],
    [
        "title" => "Premiums can start from as low as ₹53/month",
        "fact" => "A basic PA policy is genuinely affordable — entry-level annual premiums start around ₹600–₹1,500 for younger individuals with standard occupations.",
        "tag" => "Affordability"
    ],
    [
        "title" => "Children from 91 days up to age 23 can be covered as dependents",
        "fact" => "Most individual PA family policies allow dependent children between 91 days and 23 years to be covered under the same policy.",
        "tag" => "Family Cover"
    ]
];

$paSlides = $paCardsData; 
?>

<section class="vv-myths vv-myths--pa" id="pa-seven-things">
    <div class="vv-myths__container">

        <!-- HEADER -->
        <header class="vv-myths__header">
            <h2 class="vv-myths__heading">
                7 Things You May Not Be Aware of About Personal Accident Insurance
            </h2>
        </header>

        <!-- MASTER SINGLE BOX WRAPPER -->
        <div class="vv-myth-master-box">
            <div class="vv-myth-carousel">
                <div class="vv-myth-carousel__viewport" id="vvPaMythViewport">
                    <div class="vv-myth-carousel__track" id="vvPaMythTrack">

                        <?php foreach ($paSlides as $slideIndex => $item): ?>
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
    const track = document.getElementById('vvPaMythTrack');
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