<?php
$section_data = [
    'number' => '01.6 Mandatory',
    'title' => 'Property Insurance in India: Mandatory or Optional?',
    'subtitle' => "One of the most common questions of first-time buyers is: 'Is property insurance required by law?' The answer is nuanced — and understanding it correctly could save you from both a legal misunderstanding and a financial blind spot.",
    'tabs' => [
        ['id' => 'individuals', 'label' => 'For Individuals', 'active' => true],
        ['id' => 'home-loan', 'label' => 'With a Home Loan', 'active' => false]
    ],
    'cards' => [
        [
            'type' => 'info',
            'icon' => '⚖️',
            'title' => 'The Legal Position',
            'content' => 'Under Indian law, property insurance is <strong>NOT mandatory for individuals</strong>, unlike motor vehicle third-party insurance, which is legally compulsory. That is why so many Indians neglect to cover their property.'
        ],
        [
            'type' => 'warning',
            'icon' => '💡',
            'title' => 'When It Becomes Practically Mandatory — The Home Loan Context',
            'content' => 'While not legally required for individuals, property insurance becomes practically mandatory when you take a home loan or a business loan secured against property. Most banks require borrowers to take a policy as a loan condition. However, there is a critical difference between insurance the bank arranges and insurance you take independently to protect yourself.'
        ]
    ],
    'realisation' => [
        'title' => 'The Realisation',
        'content' => "The bank's sum insured is sized to protect the loan it has given, not your home or your business. Bank-arranged insurance is almost never enough. Buy your own comprehensive policy independently, in addition to whatever the bank arranges. Remember that the Reinstatement Value of your structure is not the same as the market resale price of your property. It is the cost to rebuild the structure today — walls, roof, floors, fixtures, using current construction rates. This figure must be separately calculated and insured."
    ],
    'case_story' => [
        'tag' => 'CASE STORY',
        'title' => 'Ramesh\'s Home Loan Misconception',
        'image' => 'assets/images/typesofinsurance/propertyinsurance/casestory/ramesh.jfif',
        'stats' => [
            ['icon' => '🏦', 'label' => 'Home Loan Amount', 'value' => '₹35 lakhs', 'blue' => true],
            ['icon' => '🔥', 'label' => 'Short Circuit Damage', 'value' => '₹2.8 lakhs',  'highlight' => true],
            ['icon' => '🛋️', 'label' => 'Uninsured Contents Value', 'value' => '₹4 lakhs',],
            ['icon' => '📋', 'label' => 'Policy Assignment', 'value' => 'To Bank', ],
            ['icon' => '❌', 'label' => 'Claim Payout Deficit', 'value' => 'Far Less','highlight' => true]
        ],
        'takeaway' => [
            'label' => 'Takeaway:',
            'text' => 'Property insurance may be optional under Indian law, but having the right cover is important when you have a home loan. A bank-arranged policy primarily protects the lender’s interest. Your own independent policy should cover: (1) the full current Reinstatement Value of the structure — the cost to rebuild it today, not the loan amount or market resale price; and (2) your household contents. Structure and contents are separate covers, and both need to be considered.',
            'cost_tag' => 'Essential Coverage Requirement',
            'cost_val' => 'Reinstatement + Contents'
        ],
        'paragraphs' => [
            'Ramesh, 42, from Nagpur, had taken a home loan of ₹35 lakhs. His bank arranged a fire insurance policy on the property as a loan condition. He paid the premium alongside his EMIs and felt fully protected.',
            'When an electrical short circuit fire damaged his ground floor, Ramesh discovered three gaps. The policy was assigned to the bank, the sum insured matched the ₹35 lakh loan rather than the higher reinstatement value of the structure, and the cover applied only to the structure — not his ₹4 lakh worth of furniture, appliances, and electronics. The policy protected the bank’s collateral, but it was not designed to cover Ramesh’s complete financial loss.',
            'Ramesh needed ₹2.8 lakhs to restore his home and replace damaged contents. Because he had not taken an independent comprehensive home policy, the amount he received fell well short of his actual loss.',
        ],
    ]
];
?>

<section class="mandatory-section">
    <div class="container">
        <!-- Section Header -->
        <!-- <span class="section-number"><?php echo htmlspecialchars($section_data['number']); ?></span> -->
        <h2 class="section-title"><?php echo htmlspecialchars($section_data['title']); ?></h2>
        <p class="section-subtitle"><?php echo htmlspecialchars($section_data['subtitle']); ?></p>

        <!-- Info Cards Grid -->
        <div class="cards-grid">
            <?php foreach ($section_data['cards'] as $card): ?>
            <div class="info-card card-<?php echo $card['type']; ?>">
                <div class="card-icon"><?php echo $card['icon']; ?></div>
                <h3 class="card-title"><?php echo htmlspecialchars($card['title']); ?></h3>
                <p class="card-text"><?php echo $card['content']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- The Realisation Box -->
        <div class="realisation-box">
            <div class="realisation-header">
                <span class="realisation-icon">⚠️</span>
                <h3 class="realisation-title"><?php echo htmlspecialchars($section_data['realisation']['title']); ?></h3>
            </div>
            <p class="realisation-text"><?php echo htmlspecialchars($section_data['realisation']['content']); ?></p>
        </div>

        <!-- Case Story Block (2-Column Reference Layout) -->
        <div class="case-story-block">
            <!-- Left Column: Image with Overlaid Metric Cards & Dual Takeaway Layout -->
            <div class="case-left-col">

                <!-- Image Wrapper with Overlaid Cards -->
                <div class="case-media-container">
                    <div class="case-image-wrapper">
                        <img src="<?= esc_url(get_template_directory_uri() . '/' . $section_data['case_story']['image']); ?>"
                            alt="<?php echo htmlspecialchars($section_data['case_story']['title']); ?>"
                            class="case-story-hero-img" />
                    </div>

                    <!-- 5 Stat Metric Cards Grid (Overlaid on Image Bottom) -->
                    <div class="stats-grid-overlay">
                        <?php foreach ($section_data['case_story']['stats'] as $stat): ?>
                        <div class="stat-card">
                            <span class="stat-icon"><?php echo $stat['icon']; ?></span>
                            <span class="stat-label"><?php echo htmlspecialchars($stat['label']); ?></span>
                            <span class="stat-value <?php echo isset($stat['highlight']) ? 'text-red' : (isset($stat['blue']) ? 'text-blue' : ''); ?>">
                                <?php echo htmlspecialchars($stat['value']); ?>
                            </span>
                            <?php if (!empty($stat['sub'])): ?>
                            <span class="stat-sub"><?php echo htmlspecialchars($stat['sub']); ?></span>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Dual Takeaway Boxes Matching Reference Image -->
                <div class="takeaway-split-wrapper">
                    <!-- Left Takeaway Card -->
                    <div class="takeaway-card-main">
                        <div class="takeaway-icon-bubble">💡</div>
                        <div class="takeaway-text-content">
                            <p><strong><?php echo htmlspecialchars($section_data['case_story']['takeaway']['label']); ?></strong> 
                            <?php echo htmlspecialchars($section_data['case_story']['takeaway']['text']); ?></p>
                        </div>
                    </div>

                    <!-- Right Cost/Detail Card -->
                    <!-- <div class="takeaway-card-side">
                        <div class="side-card-icon">💳</div>
                        <div class="side-card-content">
                            <span class="pill-label"><?php echo htmlspecialchars($section_data['case_story']['takeaway']['cost_tag']); ?></span>
                            <span class="pill-value"><?php echo htmlspecialchars($section_data['case_story']['takeaway']['cost_val']); ?></span>
                        </div>
                    </div> -->
                </div>
            </div>

            <!-- Right Column: Narrative Content -->
            <div class="case-right-col">
                <span class="case-tag"><?php echo htmlspecialchars($section_data['case_story']['tag']); ?></span>
                <h2 class="case-main-title"><?php echo htmlspecialchars($section_data['case_story']['title']); ?></h2>

                <div class="case-text-body">
                    <?php foreach ($section_data['case_story']['paragraphs'] as $para): ?>
                    <p><?php echo htmlspecialchars($para); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>