<?php
/**
 * Claim Timeline Component Template (Health Insurance)
 */

$timeline_heading = 'Claim Timeline — What to Expect';

$timeline_steps = [
    [
        'step' => '01',
        'title' => 'Claim Intimation',
        'timeframe' => 'Within 24 hours (emergency) / 4–8 hours (planned)',
        'description' => 'Notify insurer by phone or app. Get a claim reference number. Notify even if documents are not ready.',
        'icon' => 'fa-phone-alt',
        'color_class' => 'step-pink'
    ],
    [
        'step' => '02',
        'title' => 'Document Submission',
        'timeframe' => 'Usually within 15–30 days of discharge',
        'description' => 'Submit all required documents. Insurer acknowledges receipt.',
        'icon' => 'fa-file-invoice',
        'color_class' => 'step-orange'
    ],
    [
        'step' => '03',
        'title' => 'Assessment',
        'timeframe' => '15–30 working days post document receipt',
        'description' => 'Insurer reviews documents; may request additional information or send a TPA representative.',
        'icon' => 'fa-chart-bar',
        'color_class' => 'step-yellow'
    ],
    [
        'step' => '04',
        'title' => 'Query / Additional Docs',
        'timeframe' => 'If insurer raises queries',
        'description' => 'Respond within the timeframe specified (usually 15 days). Delays in response can delay or lapse the claim.',
        'icon' => 'fa-paper-plane',
        'color_class' => 'step-teal'
    ],
    [
        'step' => '05',
        'title' => 'Settlement or Rejection',
        'timeframe' => 'Within 30 days of receiving all documents (IRDAI mandated)',
        'description' => 'If approved: payment released within 7 days. If rejected: written rejection with reasons must be provided.',
        'icon' => 'fa-check-circle',
        'color_class' => 'step-blue'
    ],
    [
        'step' => '06',
        'title' => 'Grievance / Escalation',
        'timeframe' => 'If rejected or underpaid',
        'description' => 'First: Insurer\'s grievance officer. Then: Insurance Ombudsman (within 1 year of rejection). Finally: IRDAI complaint or Consumer Forum.',
        'icon' => 'fa-shield-alt',
        'color_class' => 'step-navy'
    ]
];

// Key Takeaway Block Data
$takeaway_title = "Key Takeaway — IRDAI mandates that insurers settle claims within 30 days of receiving all required documents";
$takeaway_text = "If your insurer exceeds this without valid written reasons, file a grievance with the Insurance Ombudsman. The Ombudsman is free, fast, and effective for disputes up to ₹50 lakh. The best policy is one your family can claim on — buy thoughtfully and prepare your family.";
?>

<section class="snake-timeline-section" id="claims-timeline">
    <div class="timeline-container">
        
        <!-- Timeline Header -->
        <div class="timeline-header">
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

        <!-- Key Takeaway Callout Box -->
        <div class="key-takeaway-box">
            <div class="takeaway-icon-wrap">
                <i class="fas fa-thumbtack takeaway-icon"></i>
            </div>
            <div class="takeaway-content">
                <p class="takeaway-text">
                    <strong class="takeaway-title">✅ <?php echo htmlspecialchars($takeaway_title); ?>:</strong>
                    <?php echo htmlspecialchars($takeaway_text); ?>
                </p>
            </div>
        </div>

    </div>
</section>