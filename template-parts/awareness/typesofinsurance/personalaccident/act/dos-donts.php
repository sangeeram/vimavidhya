<?php
$dos = [
    'Declare your actual occupation — the one you do daily, not what sounds safer',
    'Size your CSI to 10–15× your annual income, plus all outstanding loans',
    'Read the Disability Schedule before finalising any policy',
    'Use the 15-day Free Look Period to read every page of the policy document',
    'Nominate a family member with their exact legal name matching PAN or Aadhaar',
    'Buy your own individual policy even if your employer provides group cover',
    'Enrol in PMSBY (₹20/year) through your bank account as an immediate minimum baseline',
    'Set a calendar reminder 30 days before your policy renewal date'
];

$donts = [
    "Don't let your agent fill the Proposal Form and sign it without verifying every answer",
    "Don't choose a lower CSI just to save a few hundred rupees on premium",
    "Don't assume your health insurance or life insurance covers accident-related income loss",
    "Don't ignore the exclusions section — it defines the real boundaries of your protection",
    "Don't buy based on premium alone — compare Disability Schedules and exclusion lists",
    "Don't let your policy lapse — even the 30-day grace period does not maintain coverage",
    "Don't leave your nominee out of date — a name mismatch causes months of settlement delay"
];
?>

<section class="guidance-section guidance-section--dark" id="dos-donts">
  <div class="guidance-container">
    <div class="guidance-header">
      <!-- <span class="guidance-subtitle">3.5 Do's & Don'ts</span> -->
      <h2 class="guidance-title">The Do's and Don'ts When Buying a Personal Accident Policy</h2>
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