<?php
/**
 * Claim Timeline Component Template (Travel Insurance)
 */

$timeline_tag = 'PROCESS';
$timeline_heading = 'Claim Timeline — What to Expect';

$timeline_steps = [
    [
        'step' => '01',
        'title' => 'Claim Intimation',
        'timeframe' => 'Immediately / within 24–72 hours',
        'description' => 'Call or notify online. Get a claim reference number. Notify even if documentation is not yet ready.',
        'icon' => 'fa-phone-alt',
        'color_class' => 'step-pink'
    ],
    [
        'step' => '02',
        'title' => 'Cashless Pre-Authorisation (medical)',
        'timeframe' => 'Within 30–60 minutes of helpline call',
        'description' => 'Assistance team contacts the hospital; authorisation issued; you pay nothing upfront',
        'icon' => 'fa-hospital-user',
        'color_class' => 'step-orange'
    ],
    [
        'step' => '03',
        'title' => 'Document Submission',
        'timeframe' => 'Within 30–90 days of intimation',
        'description' => 'Submit all required documents. Insurer acknowledges receipt in writing.',
        'icon' => 'fa-file-invoice',
        'color_class' => 'step-yellow'
    ],
    [
        'step' => '04',
        'title' => 'Assessment',
        'timeframe' => '15–30 working days post-receipt',
        'description' => 'Insurer reviews; may appoint a surveyor or independent medical assessor for overseas claims',
        'icon' => 'fa-chart-bar',
        'color_class' => 'step-teal'
    ],
    [
        'step' => '05',
        'title' => 'Query / Additional Documents',
        'timeframe' => 'If and when insurer raises queries',
        'description' => 'Respond within the specified time — typically 15 days. Delays can lapse the claim.',
        'icon' => 'fa-paper-plane',
        'color_class' => 'step-blue'
    ],
    [
        'step' => '06',
        'title' => 'Settlement / Rejection',
        'timeframe' => 'Within 30 days of all documents received (IRDAI mandated)',
        'description' => 'If approved: payment within 7 days. If rejected: written reasons must be provided by insurer.',
        'icon' => 'fa-check-circle',
        'color_class' => 'step-navy'
    ],
    [
        'step' => '07',
        'title' => 'Grievance / Escalation',
        'timeframe' => 'If rejected or underpaid',
        'description' => 'First: Insurer\'s Grievance Officer. Then: Insurance Ombudsman (within 1 year). Finally: Consumer Forum or IRDAI portal.',
        'icon' => 'fa-shield-alt',
        'color_class' => 'step-pink'
    ]
];

// Key Takeaway Block Data
$takeaway_title = "Key Takeaway — IRDAI mandates that insurers settle claims within 30 days of receiving all required documents";
$takeaway_text = "If your insurer exceeds this without valid written reasons, file a grievance with the Insurance Ombudsman. The service is free, binding on the insurer for claims up to ₹50 lakh.";
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