<?php
/**
 * How to Apply Section Template (Health Insurance)
 */

$steps = [
    [
        'number' => '01',
        'title' => 'Choose a plan',
        'description' => 'Compare policies online (insurer websites, aggregators like PolicyBazaar, Coverfox). Compare SI, network hospitals, sub-limits, exclusions, and claim settlement ratio — not just premium.'
    ],
    [
        'number' => '02',
        'title' => 'Fill the Proposal Form',
        'description' => 'Complete honestly — declare all pre-existing conditions, surgeries, hospitalisations in the last 5 years. Non-disclosure is the primary reason claims are rejected.'
    ],
    [
        'number' => '03',
        'title' => 'Medical examination (if required)',
        'description' => 'Required for applicants above 45–55 years or for high SI amounts. Insurer arranges at a network diagnostic centre — typically free.'
    ],
    [
        'number' => '04',
        'title' => 'Underwriting decision',
        'description' => 'Insurer reviews your proposal. For young, healthy applicants: immediate approval. For older applicants or declared conditions: may involve loading (higher premium) or exclusions.'
    ],
    [
        'number' => '05',
        'title' => 'Premium payment',
        'description' => 'Pay online. You receive a policy schedule and policy document (soft copy). Hard copy follows by post.'
    ],
    [
        'number' => '06',
        'title' => 'Free Look Period',
        'description' => 'Read every page within 15 days. If dissatisfied, return for a refund. This is your only opportunity to catch anything that doesn\'t match what you were sold.'
    ]
];
?>

<section class="how-to-apply" id="how-to-apply">
  <div class="container">
    <div class="section-header">
      <h2 class="sec-title">Buying a Health Insurance Policy - A complete Guide</h2>
      <h3 class="section-title">How to Apply </h3>
      <p class="section-subtitle">
        Applying for health insurance is simpler than most people assume. The process takes 10–30 minutes online, and most policies are issued within 24–48 hours for younger applicants.
      </p>
    </div>

    <div class="timeline" id="accordionTimeline">
      <div class="timeline__line"></div>

      <?php foreach ($steps as $index => $step): 
        // Step 01 is open by default
        $isOpen = ($index === 0);
      ?>
        <div class="timeline__item <?php echo $isOpen ? 'is-active' : ''; ?>" data-step="<?php echo $index; ?>">
          <div class="timeline__badge"><?php echo $step['number']; ?></div>
          
          <div class="timeline__card">
            <!-- Accordion Trigger Header -->
            <button class="timeline__trigger" type="button" aria-expanded="<?php echo $isOpen ? 'true' : 'false'; ?>">
              <h3 class="card-title"><?php echo $step['title']; ?></h3>
              <span class="accordion-icon" aria-hidden="true"></span>
            </button>

            <!-- Accordion Content -->
            <div class="timeline__content" style="<?php echo $isOpen ? 'max-height: 1000px;' : 'max-height: 0;'; ?>">
              <div class="timeline__content-inner">
                <?php if (!empty($step['description'])): ?>
                  <p class="card-text"><?php echo $step['description']; ?></p>
                <?php endif; ?>
              </div>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- CRITICAL WARNING BOX -->
    <div class="policy-callout-box warning m-t-32">
        <div class="callout-icon">⚠️</div>
        <div class="callout-content">
            <strong>Critical — Fill the Proposal Form Yourself:</strong>
            <p>Do not let an agent fill the Proposal Form on your behalf and simply hand it to you to sign. Every answer on the Proposal Form has legal significance. Incorrect answers — even if entered by the agent — are your responsibility as the applicant. Non-disclosure of known conditions is the most common grounds for claim rejection.</p>
        </div>
    </div>

  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const items = Array.from(document.querySelectorAll('#accordionTimeline .timeline__item'));

  function updateSuggestedStep() {
    items.forEach(item => item.classList.remove('next-suggested'));

    let lastActiveIndex = -1;
    items.forEach((item, index) => {
      if (item.classList.contains('is-active')) {
        lastActiveIndex = index;
      }
    });

    const nextIndex = lastActiveIndex + 1;
    if (nextIndex < items.length && !items[nextIndex].classList.contains('is-active')) {
      items[nextIndex].classList.add('next-suggested');
    }
  }

  items.forEach(item => {
    const trigger = item.querySelector('.timeline__trigger');
    const content = item.querySelector('.timeline__content');

    trigger.addEventListener('click', () => {
      const isActive = item.classList.contains('is-active');

      if (isActive) {
        item.classList.remove('is-active');
        trigger.setAttribute('aria-expanded', 'false');
        content.style.maxHeight = '0px';
      } else {
        item.classList.add('is-active');
        trigger.setAttribute('aria-expanded', 'true');
        content.style.maxHeight = content.scrollHeight + 'px';
      }

      updateSuggestedStep();
    });
  });

  updateSuggestedStep();
});
</script>