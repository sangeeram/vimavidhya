<?php
$dos = [
    'Compare at least 3 quotes from different insurers for OD — use the same IDV and identical add-ons for a genuinely fair comparison',
    'Read the full policy document within the 15-day Free Look Period — check IDV, add-ons, exclusions, and deductibles before the window closes',
    'Declare all modifications, CNG/LPG conversions, accessories, and hypothecation accurately on the Proposal Form',
    'Set a calendar reminder for policy renewal 30 days before the expiry date — both TP and OD expiry dates if they differ',
    'Verify your insurer\'s cashless network in your city includes your vehicle brand\'s authorised service centre before buying',
    'File an FIR within 24 hours of vehicle theft — delayed FIR is one of the most common grounds for theft claim complications',
    'Intimate the insurer within 24 hours of any accident — call the helpline before any repair begins',
    'Store the insurance certificate, RC, DL, and PUC digitally in DigiLocker — accessible even if the vehicle and documents are lost'
];

$donts = [
    'Do not accept the default policy offered by the vehicle dealership without independently comparing at least 2 alternatives',
    'Do not let your agent fill the Proposal Form and sign it without reviewing every field — it is a legal document and your declaration',
    'Do not artificially lower IDV to reduce premium — the saving is small; the under-insurance gap at claim time can be enormous',
    'Do not wait until the policy expiry date to renew — after expiry, vehicle inspection may be required and NCB may be affected',
    'Do not choose an insurer with a poor local network based only on a marginally lower premium',
    'Do not start a waterlogged vehicle engine after flooding — this converts a covered flood event into an excluded consequential loss',
    'Do not repair the vehicle before the insurer\'s surveyor has inspected it — pre-repair movement without approval weakens your claim evidence',
    'Do not allow an unlicensed person to drive your insured vehicle — any claim during their driving will be rejected in full'
];
?>

<section class="motor-split-process-section" id="dos-donts">
  <div class="process-container">
    <div class="section-header text-center">
      <h2 class="section-title">The Do's and Don'ts When Buying Motor Insurance</h2>
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
                  <span class="step-label"> (DO's)</span>
                  <p><?php echo htmlspecialchars($dos[$i]); ?></p>
                </div>
              </div>
              <!-- BACK: DON'T -->
              <div class="flip-card-back dont-back">
                <div class="card-badge dont-badge">✕</div>
                <div class="card-content">
                  <span class="step-label"> (DONT's)</span>
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
            <span class="hub-tag">MOTOR INSURANCE</span>
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
                  <span class="step-label">(DONT's)</span>
                  <p><?php echo htmlspecialchars($donts[$i]); ?></p>
                </div>
              </div>
              <!-- BACK: DO -->
              <div class="flip-card-back do-back">
                <div class="card-badge do-badge">✓</div>
                <div class="card-content">
                  <span class="step-label"> (DO's)</span>
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