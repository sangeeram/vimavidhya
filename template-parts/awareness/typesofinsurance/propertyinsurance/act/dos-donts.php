<?php
$dos = [
    'Calculate Reinstatement Value — not market value — for building insurance',
    'Take contents cover as a tenant — your belongings are your responsibility',
    'Declare valuable jewellery on the policy schedule',
    'Review and choose a Replacement Value / New-for-Old basis where possible',
    'Add Portable Equipment cover if devices leave the premises',
    'Notify your insurer promptly according to policy requirements after any loss',
    'Review sum insured and add-ons at every annual renewal',
    'Read the policy during the 15-day Free Look Period',
    'Maintain business stock records throughout the year',
    'Insure at peak seasonal stock value — not average value',
    'Keep purchase invoices, receipts and valuation certificates'
];

$donts = [
    'Use market value as a substitute for rebuilding/reinstatement cost',
    "Assume the landlord's or society's policy covers your personal belongings",
    'Leave high-value jewellery undeclared on the policy',
    'Assume standard home contents cover follows devices used outside the premises',
    'Delay claim notification beyond the period specified in your policy',
    'Ignore endorsements and add-ons — check they appear in your policy schedule',
    'Buy a policy based only on lowest premium without checking coverage scope',
    "Assume your commercial landlord's cover protects your business stock",
    'Under-insure seasonal inventory at an off-peak figure',
    'Skip assessing Business Interruption cover for commercial premises'
];
?>

<section class="guidance-section guidance-section--dark" id="dos-donts">
  <div class="guidance-container">
    <div class="guidance-header">
      <!-- <span class="guidance-subtitle">3.5 Do's & Don'ts</span> -->
      <h2 class="guidance-title">The Do's and Don'ts When Buying a Property Insurance Policy</h2>
    </div>

    <div class="guidance-grid">
      <!-- DO'S CARD -->
      <div class="guidance-card do-card">
        <div class="card-header">
          <span class="icon">&#10003;</span> DO
        </div>
        <ul class="guidance-list">
          <?php foreach ($dos as $item): ?>
            <li>
              <span class="list-icon">&#10003;</span>
              <span class="list-text"><?php echo htmlspecialchars($item); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- DON'TS CARD -->
      <div class="guidance-card dont-card">
        <div class="card-header">
          <span class="icon">&#10005;</span> DON'T
        </div>
        <ul class="guidance-list">
          <?php foreach ($donts as $item): ?>
            <li>
              <span class="list-icon">&#10005;</span>
              <span class="list-text"><?php echo htmlspecialchars($item); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>