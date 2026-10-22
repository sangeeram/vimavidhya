<?php
// 1. Flip Cards Data
$policy_sections = [
    ['icon' => '📄', 'title' => 'Policy Schedule', 'description' => 'Page 1. Your name, address, policy number, start/end dates, sum insured for structure and contents separately, premium paid. Verify every detail immediately.'],
    ['icon' => '📖', 'title' => 'Definitions Section', 'description' => 'The legal definitions of \'flood\', \'earthquake\', \'contents\', \'peril\' — as understood by the insurer. These definitions, not the dictionary, govern your claim.'],
    ['icon' => '🛡️', 'title' => 'Coverage / Insuring Clause', 'description' => 'Exactly what the policy covers. The heart of your contract.'],
    ['icon' => '⚠️', 'title' => 'Exclusions Section', 'is_critical' => true, 'description' => 'What is NOT covered. The most important section most policyholders never read — and there are surprises here that can cost money.'],
    ['icon' => '📋', 'title' => 'Conditions Section', 'description' => 'Your obligations — taking reasonable precautions, notifying the insurer promptly, cooperating with surveyors.'],
    ['icon' => '➕', 'title' => 'Add-ons / Endorsements Schedule', 'description' => 'Lists all additional covers — EEI, Portable Equipment, Loss of Rent, Business Interruption, Cash Cover etc. Verify they are all there.'],
    ['icon' => '🚨', 'title' => 'Claims Procedure', 'description' => 'How and when to report a claim. Deadlines are strict, often 24 to 72 hours from discovery.'],
    ['icon' => '⚖️', 'title' => 'Grievance Redressal', 'description' => 'Your rights if the insurer\'s decision is unsatisfactory. IRDAI Consumer Helpline: 155255. Portal: policyholder.gov.in.']
];

// 2. Box Grid Data (Previously Accordion)
$missed_points = [
    [
        'num' => '01',
        'title' => 'Replacement Value vs. Market Value',
        'content' => 'Whether contents / stock are covered on \'New-for-Old\' (Replacement Value) or \'Market Value\' (depreciated) basis — makes a significant difference at claim time.'
    ],
    [
        'num' => '02',
        'title' => 'The Excess / Deductible Amount',
        'content' => 'Small losses below this number are entirely your cost.'
    ],
    [
        'num' => '03',
        'title' => 'Specific Sub-limits for Jewellery',
        'content' => 'Sub-limits for jewellery are often far lower than what Indian households actually hold.'
    ],
    [
        'num' => '04',
        'title' => 'Burglary & Forcible Entry Clause',
        'content' => 'Whether burglary requires evidence of forcible entry — some policies reject claims where entry was made without breaking in.'
    ],
    [
        'num' => '05',
        'title' => 'Strict Claims Notification Deadlines',
        'content' => 'A claim reported ten days late may be rejected on procedural grounds alone.'
    ],
    [
        'num' => '06',
        'title' => 'Peak Seasonal Stock Valuation (For Businesses)',
        'content' => 'For businesses: whether the declared stock value reflects peak seasonal inventory. Undervaluing stock to reduce premium triggers the Average Clause at claim time.'
    ]
];
?>

<section class="fine-print-section" id="fine-print">
    <div class="fine-print-container">

        <!-- Header -->
        <header class="fine-print-header">
            <h2 class="section-title">Decode Your Policy — Understand the Fine Print</h2>
            <p class="section-subtitle">
                Most policyholders receive their policy document, file it, and never open it until something goes wrong.
                Hover or tap each card to learn what to look for and why.
            </p>
        </header>

        <!-- PART 1: Compact Flip Cards Grid -->
        <div class="fine-print-grid">
            <?php foreach ($policy_sections as $section): ?>
            <div class="flip-card <?php echo !empty($section['is_critical']) ? 'is-critical' : ''; ?>" tabindex="0">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="card-icon"><?php echo $section['icon']; ?></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($section['title']); ?></h3>
                        <span class="flip-hint">Hover / Tap to read</span>
                    </div>
                    <div class="flip-card-back">
                        <span class="back-label">What to look for & why</span>
                        <h4 class="card-back-title"><?php echo htmlspecialchars($section['title']); ?></h4>
                        <p class="card-description"><?php echo htmlspecialchars($section['description']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- PART 2: 3-in-a-Row Box Grid — Six Things Most People Miss -->
        <div class="missed-points-block">
            <h3 class="block-title">Six Things Most People Miss in Property Insurance</h3>
            <div class="missed-points-grid">
                <?php foreach ($missed_points as $item): ?>
                <div class="missed-point-box">
                    <div class="box-header">
                        <span class="item-num"><?php echo $item['num']; ?></span>
                        <h4 class="item-title"><?php echo htmlspecialchars($item['title']); ?></h4>
                    </div>
                    <div class="box-body">
                        <p><?php echo htmlspecialchars($item['content']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- PART 3: Case Story Card -->
        <div class="case-story-card">
            <div class="case-story-content">
                <!-- LEFT COLUMN -->
                <div class="case-story-media-col">
                    <div class="case-story-image-wrap">
                        <img src="/wp-content/themes/vimavidya/assets/images/typesofinsurance/propertyinsurance/casestory/suresh.png"
                            alt="Kapil inspecting damaged water pipes" class="case-story-img" />
                    </div>
                    <div class="metrics-overlay-grid">
                        <div class="metric-chip">
                            <span class="chip-icon">📦</span>
                            <span class="chip-label">Storage Room</span>
                            <span class="chip-value">Utility Area</span>
                        </div>
                        <div class="metric-chip highlight-red">
                            <span class="chip-icon">🌧️</span>
                            <span class="chip-label">Damage Cause</span>
                            <span class="chip-value">Drain Backup</span>
                        </div>
                        <div class="metric-chip">
                            <span class="chip-icon">⏳</span>
                            <span class="chip-label">Premiums Paid</span>
                            <span class="chip-value">3 Years</span>
                        </div>
                        <div class="metric-chip highlight-orange">
                            <span class="chip-icon">❌</span>
                            <span class="chip-label">Claim Payout</span>
                            <span class="chip-value">₹0 Received</span>
                        </div>
                    </div>
                    <div class="takeaway-box">
                        <div class="takeaway-icon-bubble">!</div>
                        <div class="takeaway-content">
                            <strong>TAKEAWAY</strong>
                            <p>A building policy protects the shell. Your life inside the shell needs its own protection.</p>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN -->
                <div class="case-story-text">
                    <span class="story-tag">CASE STUDY</span>
                    <h3 class="story-title">Kapil's Claims Confusion — The Policy He Never Read</h3>
                    <h4 class="story-subtitle">The Policy He Never Read</h4>
                    <div class="story-description">
                        <p>
                            Kapil, 34, a software developer in Bengaluru, had a 'comprehensive' home policy. When his ground-floor 
                            storage room was flooded during heavy rains, destroying his old laptop, his son's bicycle, and winter clothing, 
                            he filed a claim.
                        </p>
                        <p>
                            The insurer rejected it on two grounds. One, the storage room was listed as a 'utility area' in the policy, and 
                            contents stored there were excluded. Next, the flooding occurred through the building's drainage backing up which 
                            is classified as 'seepage', and hence excluded. Only external natural flooding was covered.
                        </p>
                    </div>
                    <p class="highlight-text">
                        Kapil had paid premiums for three years. He received nothing. He learned two things — read the definitions, read the exclusions.
                    </p>
                    <div class="story-tags-row">
                        <span class="meta-tag">Kapil, 34</span>
                        <span class="meta-tag">Bengaluru</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // 1. FLIP CARDS INTERACTION
    const flipCards = document.querySelectorAll('.fine-print-section .flip-card');

    flipCards.forEach(card => {
        card.addEventListener('click', (e) => {
            const isFlipped = card.classList.contains('is-flipped');
            flipCards.forEach(c => c.classList.remove('is-flipped'));
            if (!isFlipped) card.classList.add('is-flipped');
        });

        card.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                card.click();
            }
        });
    });

    // Close flip cards when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.fine-print-section')) {
            flipCards.forEach(c => c.classList.remove('is-flipped'));
        }
    });
});
</script>