<?php
/**
 * Health Insurance Do's & Don'ts Split Process Section Template
 */

$dos = [
    'Declare all pre-existing conditions truthfully at application',
    'Read the policy document — especially exclusions — before signing',
    'Renew on time every year without a break in coverage',
    'Inform your insurer immediately at the time of hospitalisation',
    'Keep all hospital bills, prescriptions, and discharge summaries',
    'Port your policy if dissatisfied — waiting period credits carry over',
    'Review and upgrade Sum Insured every 3–4 years',
    'Set a calendar reminder 30 days before your renewal date'
];

$donts = [
    'Hide medical history — claims can be rejected and policies cancelled',
    'Let a policy lapse — you lose waiting period benefits accumulated',
    'Rely entirely on employer cover without a personal plan',
    'Buy only the cheapest plan without checking exclusions and sub-limits',
    'Delay purchase until you are older or have a health condition',
    'Ignore the fine print on co-payments and room rent limits',
    'File frivolous small claims — it affects your NCB and renewability',
    'Sign the Proposal Form without reading every answer'
];
?>

<section class="health-split-process-section" id="dos-donts">
  <div class="process-container">
    <div class="section-header text-center">
      <h2 class="section-title">The Do's and Don'ts When Buying a Health Insurance Policy</h2>
      <p class="section-subtitle">Click any card to flip and view the counterpart</p>
    </div>

    <!-- 3-Column Layout: Left (Do's) | Center Hub | Right (Don'ts) -->
    <div class="split-process-grid">
      
      <!-- LEFT SIDE: 4 Items (Front: DO, Back: DON'T) -->
      <div class="process-column left-column">
        <?php for ($i = 0; $i < 4; $i++): ?>
          <div class="flip-card" onclick="this.classList.toggle('flipped')">
            <div class="flip-card-inner">
              <!-- FRONT: DO -->
              <div class="flip-card-front do-front">
                <div class="card-badge do-badge">✓</div>
                <div class="card-content">
                  <span class="step-label">Step <?php echo $i + 1; ?> (DO)</span>
                  <p><?php echo htmlspecialchars($dos[$i]); ?></p>
                </div>
              </div>
              <!-- BACK: DON'T -->
              <div class="flip-card-back dont-back">
                <div class="card-badge dont-badge">✕</div>
                <div class="card-content">
                  <span class="step-label">Step <?php echo $i + 1; ?> (DON'T)</span>
                  <p><?php echo htmlspecialchars($donts[$i]); ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>

      <!-- CENTER: Hub Circle -->
      <div class="process-column center-column">
        <div class="central-hub-circle">
          <div class="hub-content">
            <span class="hub-tag">HEALTH INSURANCE</span>
            <h3 class="hub-title">DO'S &amp; DON'TS</h3>
            <div class="hub-line"></div>
            <p class="hub-desc">Interactive Guide<br>Left: Do's | Right: Don'ts</p>
          </div>
        </div>
      </div>

      <!-- RIGHT SIDE: 4 Items (Front: DON'T, Back: DO) -->
      <div class="process-column right-column">
        <?php for ($i = 4; $i < 8; $i++): ?>
          <div class="flip-card" onclick="this.classList.toggle('flipped')">
            <div class="flip-card-inner">
              <!-- FRONT: DON'T -->
              <div class="flip-card-front dont-front">
                <div class="card-badge dont-badge">✕</div>
                <div class="card-content">
                  <span class="step-label">Step <?php echo $i + 1; ?> (DON'T)</span>
                  <p><?php echo htmlspecialchars($donts[$i]); ?></p>
                </div>
              </div>
              <!-- BACK: DO -->
              <div class="flip-card-back do-back">
                <div class="card-badge do-badge">✓</div>
                <div class="card-content">
                  <span class="step-label">Step <?php echo $i + 1; ?> (DO)</span>
                  <p><?php echo htmlspecialchars($dos[$i]); ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>

    </div>
  </div>
</section>