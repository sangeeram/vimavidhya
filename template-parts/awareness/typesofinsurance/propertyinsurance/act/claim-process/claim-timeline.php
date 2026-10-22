<?php
$timeline_tag = 'PROCESS';
$timeline_heading = 'Claim Timeline — What to Expect';

$timeline_steps = [
    [
        'step' => '01',
        'title' => 'Claim Intimation',
        'timeframe' => 'Within 24–72 hours',
        'description' => 'Notify insurer by phone/online. Get a claim reference number. Even if documents are not ready, notify immediately.',
        'icon' => 'fa-phone-alt',
        'color_class' => 'step-pink'
    ],
    [
        'step' => '02',
        'title' => 'Document Submission',
        'timeframe' => '7–30 days post intimation',
        'description' => 'Submit all required documents. Insurer acknowledges receipt.',
        'icon' => 'fa-file-invoice',
        'color_class' => 'step-orange'
    ],
    [
        'step' => '03',
        'title' => 'Surveyor Assessment',
        'timeframe' => '7–15 days post intimation',
        'description' => 'Insurer appoints a Licensed Surveyor to inspect damage and estimate loss. You are entitled to be present.',
        'icon' => 'fa-chart-bar',
        'color_class' => 'step-yellow'
    ],
    [
        'step' => '04',
        'title' => 'Query / Additional Documents',
        'timeframe' => 'Within specified time',
        'description' => 'Respond within the time specified (usually 15 days). Delays in response can delay or lapse the claim.',
        'icon' => 'fa-paper-plane',
        'color_class' => 'step-teal'
    ],
    [
        'step' => '05',
        'title' => 'Settlement / Rejection',
        'timeframe' => 'Within 30 days',
        'description' => 'If approved: payment released within 7 days. If rejected: written rejection with reasons provided by insurer.',
        'icon' => 'fa-check-circle',
        'color_class' => 'step-blue'
    ],
    [
        'step' => '06',
        'title' => 'Grievance / Escalation',
        'timeframe' => 'Escalation stage',
        'description' => 'First: Insurer grievance officer. Then: Insurance Ombudsman (within 1 year). Finally: Consumer Forum or IRDAI.',
        'icon' => 'fa-shield-alt',
        'color_class' => 'step-navy'
    ]
];

// Key Takeaway Block Data
$takeaway_title = "Key Takeaway — Know Your Rights";
$takeaway_text = "IRDAI mandates that insurers settle claims within 30 days of receiving all required documents. If your insurer exceeds this without valid written reasons, file a grievance with the Insurance Ombudsman. The Ombudsman is free, fast, and effective for claims up to ₹50 lakh.";
?>

<section class="snake-timeline-section">
    <div class="timeline-container">
        
        <!-- Timeline Header -->
        <div class="timeline-header">
            <!-- <span class="timeline-tag"><?php echo htmlspecialchars($timeline_tag); ?></span> -->
            <h2 class="timeline-heading"><?php echo htmlspecialchars($timeline_heading); ?></h2>
        </div>

        <!-- Snake Flowchart Wrapper -->
        <div class="snake-wrapper">
            <?php foreach ($timeline_steps as $index => $item): 
                $is_even = ($index % 2 !== 0);
            ?>
                <div class="snake-step <?php echo $item['color_class']; ?> <?php echo $is_even ? 'pos-top' : 'pos-bottom'; ?>">
                    
                    <div class="step-center-box">
                        <div class="box-content">
                            <span class="step-num"><?php echo htmlspecialchars($item['step']); ?></span>
                            <span class="step-label">STEP</span>
                            <i class="fas <?php echo htmlspecialchars($item['icon']); ?> step-icon"></i>
                        </div>

                        <!-- Downward Hover Card -->
                        <div class="step-hover-card">
                            <p class="step-description"><?php echo htmlspecialchars($item['description']); ?></p>
                        </div>
                    </div>

                    <!-- Static Visible Header -->
                    <div class="step-static-info">
                        <h3 class="step-title"><?php echo htmlspecialchars($item['title']); ?></h3>
                        <span class="step-timeframe"><?php echo htmlspecialchars($item['timeframe']); ?></span>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
<br>
<br>
        <!-- Key Takeaway Callout Box (Reference Image Style) -->
        <div class="key-takeaway-box">
            <div class="takeaway-icon-wrap">
                <i class="fas fa-thumbtack takeaway-icon"></i>
            </div>
            <div class="takeaway-content">
                <p class="takeaway-text">
                    <strong class="takeaway-title"><?php echo htmlspecialchars($takeaway_title); ?>:</strong>
                    <?php echo htmlspecialchars($takeaway_text); ?>
                </p>
            </div>
        </div>

    </div>
</section>