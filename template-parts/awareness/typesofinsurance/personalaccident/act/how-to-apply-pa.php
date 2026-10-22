<?php
$steps = [
    [
        'number' => '01',
        'title' => 'Decide your CSI',
        'description' => 'Calculate 10–15× annual gross income + outstanding loans. This is your target CSI, not a starting bid.',
    ],
    [
        'number' => '02',
        'title' => 'Know your occupation class',
        'description' => 'Identify your actual daily work. If in doubt, describe it honestly and let the insurer classify it. Do not self-classify to save premium.',
    ],
    [
        'number' => '03',
        'title' => 'Decide which add-ons you need',
        'description' => 'Prioritise TTD (if self-employed or no sick pay), Education Grant (if you have dependent children), EMI Protector (if you have active loans).',
    ],
    [
        'number' => '04',
        'title' => 'Compare at least 3 insurers',
        'description' => 'Use digital insurance aggregator or insurer websites directly. Compare:',
        'tags' => [
            'Disability Schedule breadth',
            'Exclusions list',
            'Claim settlement ratio (CSR)',
            'Premium excluding GST'
        ]
    ],
    [
        'number' => '05',
        'title' => 'Fill the Proposal Form yourself',
        'description' => 'Do not hand it to an agent to fill. Read every question. Your occupation, health status, existing cover, and income are material declarations.',
    ],
    [
        'number' => '06',
        'title' => 'Pay the premium and receive the policy',
        'description' => 'Premium can be paid online or by cheque. Policy document is issued digitally (email / DigiLocker) or by post. Some insurers provide instant digital issuance.',
    ],
    [
        'number' => '07',
        'title' => 'Use the 15-day Free Look Period',
        'description' => 'Read the policy document within 15 days. Verify:',
        'tags' => [
            'Disability Schedule matches what you were shown',
            'Add-ons are correctly reflected',
            'Exclusions are as expected',
            'Raise discrepancies immediately'
        ]
    ],
    [
        'number' => '08',
        'title' => 'Store and share policy details',
        'description' => 'Store the policy document digitally (DigiLocker) and physically. Share the policy number, insurer name, and claims helpline number with your nominee. They must know what exists and where.',
    ]
];
?>

<section class="how-to-apply" id="how-to-apply">
  <div class="container">
    <div class="section-header">
      <!-- <span class="eyebrow">3.1 How to apply</span> -->
      <h2 class="sec-title">Buying a Policy - A Complete Guide</h2>
      <h3 class="section-title">How to Apply for a Personal Accident Policy</h3>
      <p class="section-subtitle">
        Buying a PA policy is genuinely simple. The complexity lies in making the right choices before you apply — not in the application itself. Follow this sequence.
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

                <?php if (!empty($step['tags'])): ?>
                  <div class="tags-group">
                    <?php foreach ($step['tags'] as $tag): ?>
                      <span class="tag"><i class="icon-check">✓</i> <?php echo $tag; ?></span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
  const items = Array.from(document.querySelectorAll('#accordionTimeline .timeline__item'));

  function updateSuggestedStep() {
    // Remove all previous suggestions
    items.forEach(item => item.classList.remove('next-suggested'));

    // Find the highest open step index
    let lastActiveIndex = -1;
    items.forEach((item, index) => {
      if (item.classList.contains('is-active')) {
        lastActiveIndex = index;
      }
    });

    // Highlight the very next unopened step in sequence
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
        // Collapse
        item.classList.remove('is-active');
        trigger.setAttribute('aria-expanded', 'false');
        content.style.maxHeight = '0px';
      } else {
        // Expand
        item.classList.add('is-active');
        trigger.setAttribute('aria-expanded', 'true');
        content.style.maxHeight = content.scrollHeight + 'px';
      }

      // Update sequence pointer highlight
      updateSuggestedStep();
    });
  });

  // Run on page load for initial state (suggests Step 2 since Step 1 is open)
  updateSuggestedStep();
});
</script>