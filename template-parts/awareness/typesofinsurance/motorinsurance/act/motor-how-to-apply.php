<?php
$steps = [
    [
        'number' => '01',
        'title' => 'Step 1: Know Your Vehicle',
        'description' => 'Gather your RC, engine number, chassis number, year of manufacture, and current market value.',
        'tags' => [
            'Accurate vehicle details are required on the Proposal Form',
            'Errors cause claim complications'
        ]
    ],
    [
        'number' => '02',
        'title' => 'Step 2: Decide Your Coverage',
        'description' => 'Choose between TP-only, OD-only, or Comprehensive. Select add-ons based on vehicle age, city, and usage.',
        'tags' => [
            'Start with Comprehensive for any vehicle under 10 years with significant value'
        ]
    ],
    [
        'number' => '03',
        'title' => 'Step 3: Get Minimum 3 Quotes',
        'description' => 'Compare OD premium (pre-GST), IDV offered, cashless network size, and CSR across at least 3 insurers.',
        'tags' => [
            'Always compare on the same IDV and identical add-ons for a fair comparison'
        ]
    ],
    [
        'number' => '04',
        'title' => 'Step 4: Fill the Proposal Form Yourself',
        'description' => 'Complete the Proposal Form personally — do not allow the agent to fill it without your review. If using an agent make sure you read it carefully before submission.',
        'tags' => [
            'The Proposal Form is a legal document',
            'Errors or omissions can void claims'
        ]
    ],
    [
        'number' => '05',
        'title' => 'Step 5: Declare All Modifications',
        'description' => 'Declare any CNG/LPG kit, accessories, modifications, or hypothecation (car loan).',
        'tags' => [
            'Undisclosed material facts are the most common ground for claim reduction or rejection'
        ]
    ],
    [
        'number' => '06',
        'title' => 'Step 6: Pay and Receive Policy',
        'description' => 'Pay the full premium including GST at 18%. Receive the policy document and certificate of insurance.',
        'tags' => [
            'Request the full policy wording AND the schedule — not just the certificate'
        ]
    ],
    [
        'number' => '07',
        'title' => 'Step 7: Read It Within 15 Days',
        'description' => 'Use the Free Look Period (15 days from receipt) to read the policy in full — verify IDV, add-ons, exclusions, and deductibles.',
        'tags' => [
            'Return the policy for a refund within 15 days if it does not match what you were sold'
        ]
    ],
    [
        'number' => '08',
        'title' => 'Step 8: Store Digitally',
        'description' => 'Upload the policy certificate to DigiLocker and mParivahan. Traffic police accept digital insurance certificates.',
        'tags' => [
            'Share the storage location with a family member — they need it in an emergency'
        ]
    ]
];
?>

<section class="motor-how-to-apply" id="how-to-apply">
  <div class="container">
    <div class="motor-section-header">
      <!-- <span class="eyebrow">3.1 How to apply</span> -->
      <h2 class="sec-title">Buying a Motor Insurance Policy</h2>
      <h3 class="section-title">How to Buy a Motor Insurance Policy</h3>
      <p class="section-subtitle">
        Buying a motor insurance policy is straightforward. The complexity lies in making the right choices before you buy — not in the buying process itself.
      </p>
    </div>

    <div class="motor-timeline" id="motorAccordionTimeline">
      <div class="motor-timeline__line"></div>

      <?php foreach ($steps as $index => $step): 
        // Step 01 is open by default
        $isOpen = ($index === 0);
      ?>
        <div class="motor-timeline__item <?php echo $isOpen ? 'is-active' : ''; ?>" data-step="<?php echo $index; ?>">
          <div class="motor-timeline__badge"><?php echo $step['number']; ?></div>
          
          <div class="motor-timeline__card">
            <!-- Accordion Trigger Header -->
            <button class="motor-timeline__trigger" type="button" aria-expanded="<?php echo $isOpen ? 'true' : 'false'; ?>">
              <h3 class="card-title"><?php echo $step['title']; ?></h3>
              <span class="accordion-icon" aria-hidden="true"></span>
            </button>

            <!-- Accordion Content -->
            <div class="motor-timeline__content" style="<?php echo $isOpen ? 'max-height: 1000px;' : 'max-height: 0;'; ?>">
              <div class="motor-timeline__content-inner">
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
    const items = Array.from(document.querySelectorAll('#motorAccordionTimeline .motor-timeline__item'));

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
      const trigger = item.querySelector('.motor-timeline__trigger');
      const content = item.querySelector('.motor-timeline__content');

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