<?php
/**
 * Life Insurance — Do's & Don'ts Interactive Flip Cards Template
 */

$dos = [
    'Buy a term plan early — at 25, not at 35. Every year of delay means permanently higher premiums for the policy\'s entire duration.',
    'Fill the Proposal Form personally and accurately — every health condition, family history, income detail, and existing policy must be disclosed.',
    'Size your Sum Assured to your Human Life Value — 10–12× income + all liabilities + future obligations.',
    'Set up an e-NACH or Standing Instruction for premium payment on the day you buy the policy.',
    'Tell your nominee exactly where the policy document is, the policy number, and the claims helpline number.',
    'Choose an insurer with a 3-year average CSR (Claim Settlement Ratio) of 95%+.',
    'Review and update your nomination after marriage, divorce, birth of children, or death of an existing nominee.',
    'Buy a Critical Illness Rider for coverage after age 35 — cancer and cardiac events strike at working ages.',
    'Consider an MWPA policy if you have business liabilities or potential creditor claims.',
    'Start an annuity or NPS contribution by age 40 at the latest — retirement income planning requires time.',
    'If buying a ULIP, ensure you already hold an adequate term plan, commit to 10+ years, and keep annual premium within ₹2.5 lakh for tax efficiency.',
    'Consider a Guaranteed Income Plan as a certainty floor in your retirement portfolio — not as a wealth-building instrument.',
    'Use Saral Jeevan Bima as an entry point if standard term plans feel complex — it is identical across all insurers and directly comparable.'
];

$donts = [
    'Don\'t buy endowment plans as your primary life insurance — sum assured is structurally too low for genuine income replacement.',
    'Don\'t let your agent pre-fill the proposal form — it is your declaration; errors and omissions can void your family\'s claim.',
    'Don\'t size the sum assured to what seems affordable — size it to what your family actually needs.',
    'Don\'t rely on manual renewal reminders — a lapsed term plan leaves your family with zero cover.',
    'Don\'t keep the policy document in a locker your nominee cannot access — a claim not filed is a claim never received.',
    'Don\'t choose solely on premium — a marginally cheaper policy from a low-CSR insurer is a risk you are transferring to your family.',
    'Don\'t leave an outdated nomination in place — proceeds can go to the wrong person or get stuck in legal complications.',
    'Don\'t surrender or lapse an existing life policy — re-entry costs are higher and may be worse if there are health conditions.',
    'Don\'t buy a ULIP as your primary life insurance — Sum Assured is 10× annual premium, far below your HLV. The charges erode returns for 5–7 years.',
    'Don\'t buy life insurance primarily for the tax benefit — buy for protection first; tax saving follows.',
    'Don\'t rely on Group Term Insurance from your employer as your primary cover — it terminates with your employment and covers only 3–5× salary.',
    'Don\'t buy a money-back plan expecting investment returns — the IRR is 4–6% and survival benefits are primarily your own premiums returning.',
    'Don\'t confuse Whole Life Insurance with term insurance for income protection — Whole Life is a legacy and estate planning tool, not a family income replacement product.'
];
?>

<section class="life-split-process-section" id="dos-donts">
  <div class="process-container">
    <div class="section-header text-center">
      <h2 class="section-title">Do's and Don'ts — Life Insurance</h2>
      <p class="section-subtitle">Click any card to flip and view the counterpart</p>
    </div>

    <!-- 3-Column Layout: Left (Do's) | Center Hub | Right (Don'ts) -->
    <div class="split-process-grid">
      
      <!-- LEFT SIDE: 7 Items (Front: DO, Back: DON'T) -->
      <div class="process-column left-column">
        <?php for ($i = 0; $i < 7; $i++): ?>
          <div class="flip-card" onclick="this.classList.toggle('flipped')">
            <div class="flip-card-inner">
              <!-- FRONT: DO -->
              <div class="flip-card-front do-front">
                <div class="card-badge do-badge">✓</div>
                <div class="card-content">
                  <span class="step-label">Guideline <?php echo $i + 1; ?> (DO)</span>
                  <p><?php echo htmlspecialchars($dos[$i]); ?></p>
                </div>
              </div>
              <!-- BACK: DON'T -->
              <div class="flip-card-back dont-back">
                <div class="card-badge dont-badge">✕</div>
                <div class="card-content">
                  <span class="step-label">Guideline <?php echo $i + 1; ?> (DON'T)</span>
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
            <span class="hub-tag">LIFE INSURANCE</span>
            <h3 class="hub-title">DO'S &amp; DON'TS</h3>
            <div class="hub-line"></div>
            <p class="hub-desc">Interactive Guide<br>Left: Do's | Right: Don'ts</p>
          </div>
        </div>
      </div>

      <!-- RIGHT SIDE: 6 Items (Front: DON'T, Back: DO) -->
      <div class="process-column right-column">
        <?php for ($i = 7; $i < 13; $i++): ?>
          <div class="flip-card" onclick="this.classList.toggle('flipped')">
            <div class="flip-card-inner">
              <!-- FRONT: DON'T -->
              <div class="flip-card-front dont-front">
                <div class="card-badge dont-badge">✕</div>
                <div class="card-content">
                  <span class="step-label">Guideline <?php echo $i + 1; ?> (DON'T)</span>
                  <p><?php echo htmlspecialchars($donts[$i]); ?></p>
                </div>
              </div>
              <!-- BACK: DO -->
              <div class="flip-card-back do-back">
                <div class="card-badge do-badge">✓</div>
                <div class="card-content">
                  <span class="step-label">Guideline <?php echo $i + 1; ?> (DO)</span>
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