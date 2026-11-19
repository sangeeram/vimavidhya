<?php
/**
 * Life Insurance — How to Buy Policy Steps Template
 */

$steps = [
    [
        'number'      => '01',
        'title'       => 'Step 1: Determine Your Human Life Value (HLV)',
        'description' => 'Calculate: 10–12× annual income + all outstanding loans + children\'s education funds + parents\' dependency',
        'tags'        => [
            'This is your minimum required Sum Assured — not the figure that feels comfortable, but the figure your family would actually need'
        ]
    ],
    [
        'number'      => '02',
        'title'       => 'Step 2: Choose the Right Policy Type',
        'description' => 'Start with Term Insurance for pure protection. Add riders (CI, WoP, ADB) based on gap analysis. Consider Children\'s Policy and Annuity separately.',
        'tags'        => [
            'Do not buy an endowment plan as your primary life cover — the sum assured is structurally insufficient for income replacement'
        ]
    ],
    [
        'number'      => '03',
        'title'       => 'Step 3: Compare at Least 3 Insurers',
        'description' => 'Compare on: CSR (3-year average), premium for the same sum assured, rider availability, claim processing reputation.',
        'tags'        => [
            'CSR is your most important filter — do not choose solely on lowest premium'
        ]
    ],
    [
        'number'      => '04',
        'title'       => 'Step 4: Fill the Proposal Form Personally',
        'description' => 'Complete every field accurately — health, occupation, income, existing policies, family medical history. Do not let an agent fill it for you. Even if you do, ensure you go through the filled form in detail.',
        'tags'        => [
            'The Proposal Form is a legal declaration — non-disclosure voids the claim when your family needs it most'
        ]
    ],
    [
        'number'      => '05',
        'title'       => 'Step 5: Undergo Medical Examination Honestly',
        'description' => 'Disclose all health conditions during the medical examination. Do not attempt to manipulate results.',
        'tags'        => [
            'Insurers verify health history at claims; misrepresentation at exam stage is treated as fraud'
        ]
    ],
    [
        'number'      => '06',
        'title'       => 'Step 6: Review the Policy Document Within the Free Look Period',
        'description' => 'Read the policy schedule, sum assured, policy term, premium term, rider details, and exclusions within 15 days of receipt',
        'tags'        => [
            'Return the policy for a full refund within the Free Look Period if anything does not match what you were sold'
        ]
    ],
    [
        'number'      => '07',
        'title'       => 'Step 7: Set Up Auto-Pay (e-NACH / SI)',
        'description' => 'Immediately set up a Standing Instruction or e-NACH mandate for premium payment — do not rely on manual renewal reminders',
        'tags'        => [
            'A lapsed term plan means zero cover. Auto-payment prevents the single most avoidable protection gap.'
        ]
    ],
    [
        'number'      => '08',
        'title'       => 'Step 8: Inform Your Nominee',
        'description' => 'Tell your nominee exactly where the policy document is stored, the policy number, the insurer\'s claims helpline, and what documents to gather',
        'tags'        => [
            'A nominee who does not know how to claim is a nominee who may not claim within the stipulated time'
        ]
    ]
];
?>

<section class="life-how-to-apply" id="how-to-apply">
  <div class="container">
    <div class="life-section-header">
      <h2 class="sec-title">Buying a Life Insurance Policy</h2>
      <h3 class="section-title">How to Buy a Life Insurance Policy</h3>
      <p class="section-subtitle">
        Buying life insurance is a straightforward process. The complexity lies in making the right decisions before you buy. The buying itself is the final step.
      </p>
    </div>

    <div class="life-timeline" id="lifeAccordionTimeline">
      <div class="life-timeline__line"></div>

      <?php foreach ($steps as $index => $step): 
        // Step 01 is open by default
        $isOpen = ($index === 0);
      ?>
        <div class="life-timeline__item <?php echo $isOpen ? 'is-active' : ''; ?>" data-step="<?php echo $index; ?>">
          <div class="life-timeline__badge"><?php echo $step['number']; ?></div>
          
          <div class="life-timeline__card">
            <!-- Accordion Trigger Header -->
            <button class="life-timeline__trigger" type="button" aria-expanded="<?php echo $isOpen ? 'true' : 'false'; ?>">
              <h3 class="card-title"><?php echo $step['title']; ?></h3>
              <span class="accordion-icon" aria-hidden="true"></span>
            </button>

            <!-- Accordion Content -->
            <div class="life-timeline__content" style="<?php echo $isOpen ? 'max-height: 1000px;' : 'max-height: 0;'; ?>">
              <div class="life-timeline__content-inner">
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
    const items = Array.from(document.querySelectorAll('#lifeAccordionTimeline .life-timeline__item'));

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
      const trigger = item.querySelector('.life-timeline__trigger');
      const content = item.querySelector('.life-timeline__content');

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