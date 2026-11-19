<?php
// ============================================================
// VIMA VIDYA — MOTOR INSURANCE MYTHS/FACTS
// SINGLE CONTAINER ACCORDION COMPONENT (TEXT ONLY, WITH ARROWS)
// ============================================================

$motorCardsData = [
    [
        "title" => "Your NCB follows you — not your vehicle. When you sell your car, you keep the NCB Certificate and apply it to your next vehicle.",
        "fact" => "Most people believe NCB is lost when they sell — it is not. Request an NCB Certificate from your insurer when selling, and present it at your next vehicle purchase.",
        "tag" => "NCB Transfer"
    ],
    [
        "title" => "The compulsory PA cover of ₹15 lakh does NOT cover you if you are hit while walking or cycling — it is tied to the insured vehicle.",
        "fact" => "Motor PA is exclusively vehicle-linked. A standalone PA policy covers you in all accident scenarios regardless of your mode of transport.",
        "tag" => "PA Limitations"
    ],
    [
        "title" => "Transferring a used vehicle without transferring the insurance policy within 14 days voids Own Damage cover for the new owner.",
        "fact" => "This is the most common and costliest used-vehicle insurance mistake in India. Ensure you transfer the policy or buy fresh OD coverage on Day 1 of ownership.",
        "tag" => "Used Vehicles"
    ],
    [
        "title" => "For vehicles with a car loan (hypothecation), the insurer pays the financier first — not you — in a total loss or theft claim.",
        "fact" => "The bank is the Hypothecatee on your RC and policy; settlement clears the loan first. Ensure RTI (Return to Invoice) is in place for financed vehicles.",
        "tag" => "Financing & Loans"
    ],
    [
        "title" => "You can buy OD cover from a different insurer than the one holding your TP — they do not have to be the same company.",
        "fact" => "The standalone OD market lets you competitively shop OD at renewal without affecting your TP. Compare OD quotes independently at every renewal.",
        "tag" => "Standalone OD"
    ],
    [
        "title" => "A 15-day Free Look Period applies — you can return an unsuitable motor policy for a full refund.",
        "fact" => "Most buyers never read the policy document within the 15-day window. Read your policy document immediately — check IDV, add-ons, exclusions, and deductibles.",
        "tag" => "Free Look Period"
    ],
    [
        "title" => "In a hit-and-run case where the at-fault vehicle is uninsured or untraceable, you can claim from the MACT Solatium Fund.",
        "fact" => "This is a government-funded scheme that provides fixed compensation and cashless medical treatment to victims of hit-and-run motor accidents.",
        "tag" => "Hit-and-Run"
    ]
];

$motorSlides = $motorCardsData; 
?>

<section class="vv-myths vv-myths--motor" id="motor-seven-things">
    <div class="vv-myths__container">

        <!-- HEADER -->
        <header class="vv-myths__header">
            <h2 class="vv-myths__heading">
                7 Things You May Not Know About Motor Insurance
            </h2>
        </header>

        <!-- MASTER SINGLE BOX WRAPPER -->
        <div class="vv-myth-master-box">
            <div class="vv-myth-carousel">
                <div class="vv-myth-carousel__viewport" id="vvMotorMythViewport">
                    <div class="vv-myth-carousel__track" id="vvMotorMythTrack">

                        <?php foreach ($motorSlides as $slideIndex => $item): ?>
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
    const track = document.getElementById('vvMotorMythTrack');
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