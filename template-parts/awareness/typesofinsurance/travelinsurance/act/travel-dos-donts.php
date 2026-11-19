<?php
/**
 * Do's & Don'ts Section Template (Travel Insurance)
 */

$dos = [
    'Declare your destination, trip dates, and all pre-existing medical conditions accurately at purchase',
    'Buy immediately after booking your trip — Trip Cancellation cover starts from the purchase date, not the travel date',
    'Save the 24/7 Assistance helpline number in your phone contacts before every departure',
    'Buy the Adventure Sports Add-On if your trip includes any trek, dive, water sport, or non-standard physical activity',
    'For international travel with parents above 60: use a senior citizen plan and declare their conditions precisely',
    'File a Property Irregularity Report (PIR) at the airline\'s baggage desk before leaving the airport if your bag is missing',
    'For domestic pilgrimages and treks: buy a domestic travel plan and confirm helicopter evacuation is explicitly covered',
    'Use the Free Look Period to read the full policy document and verify sum insured, add-ons, and see that the exclusions match what you purchased'
];

$donts = [
    'Don\'t buy the cheapest plan on a comparison site without checking the medical sum insured and the full exclusion list',
    'Don\'t buy at the airport check-in counter — you have already lost Trip Cancellation cover for anything that happened before that moment',
    'Don\'t pay a foreign hospital bill without first calling the insurer — this affects your cashless eligibility and complicates settlement',
    'Don\'t assume your credit card travel cover or employer\'s group policy is adequate for personal international travel',
    'Don\'t choose a lower medical sum insured to save a few hundred rupees — medical costs abroad are the one thing you cannot negotiate',
    'Don\'t let your policy details remain only in your inbox — share the policy number and helpline with a family member before you leave',
    'Don\'t travel without reading the exclusions section — that is where the real boundaries of your protection are defined',
    'Don\'t file a claim without first gathering all mandatory documents — incomplete claims are rejected and time-consuming to restart'
];
?>

<section class="travel-split-process-section" id="travel-dos-donts">
  <div class="process-container">
    <div class="section-header text-center">
      <h2 class="section-title">Travel Insurance Guidelines</h2>
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
                  <span class="step-label">(DO'S)</span>
                  <p><?php echo htmlspecialchars($dos[$i]); ?></p>
                </div>
              </div>
              <!-- BACK: DON'T -->
              <div class="flip-card-back dont-back">
                <div class="card-badge dont-badge">✕</div>
                <div class="card-content">
                  <span class="step-label">(DON'TS)</span>
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
            <span class="hub-tag">TRAVEL INSURANCE</span>
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
                  <span class="step-label">(DON'TS)</span>
                  <p><?php echo htmlspecialchars($donts[$i]); ?></p>
                </div>
              </div>
              <!-- BACK: DO -->
              <div class="flip-card-back do-back">
                <div class="card-badge do-badge">✓</div>
                <div class="card-content">
                  <span class="step-label">(DO'S)</span>
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