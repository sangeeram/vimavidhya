<?php
$steps = [
    [
        'number' => '01',
        'title' => 'Determine your status',
        'description' => 'Are you a homeowner, a tenant, or a small business owner? This determines whether you need building cover, contents cover, stock and equipment cover, or all of the above.',
    ],
    [
        'number' => '02',
        'title' => 'Calculate your sum insured',
        'type' => 'definition-list',
        'items' => [
            ['label' => 'Building', 'text' => 'Reinstatement Value = CPWD/PWD rate per sq ft × built-up area'],
            ['label' => 'Contents', 'text' => 'Room-by-room replacement cost inventory'],
            ['label' => 'Business', 'text' => 'Stock at maximum seasonal value + full replacement cost of all equipment and fittings. Do not use purchase price or market resale value.']
        ]
    ],
    [
        'number' => '03',
        'title' => 'Decide which add-ons you need',
        'type' => 'columns',
        'columns' => [
            [
                'heading' => 'HOMES',
                'list' => ['Loss of Rent', 'EEI', 'Portable Equipment', 'Specified Items (jewellery)']
            ],
            [
                'heading' => 'BUSINESSES',
                'list' => ['Business Interruption', 'Cash Cover', 'Plate Glass', 'Public Liability', 'EEI for equipment']
            ]
        ]
    ],
    [
        'number' => '04',
        'title' => 'Compare at least 3 insurers',
        'description' => 'Use digital insurance aggregators or insurer websites. Compare:',
        'tags' => [
            'Covered perils list',
            'Exclusions',
            'Coverage basis (New-for-Old vs Market Value)',
            'Claim settlement ratio (CSR)',
            'Premium excluding GST'
        ]
    ],
    [
        'number' => '05',
        'title' => 'Fill the Proposal Form yourself',
        'description' => 'Do not hand it to an agent to fill. Even if you do, read every question. The property\'s construction type, age, location, occupancy, and contents value are material declarations.',
    ],
    [
        'number' => '06',
        'title' => 'Pay the premium and receive the policy',
        'description' => 'Premium can be paid online or by cheque. Policy document is issued digitally (email / DigiLocker) or by post.',
    ],
    [
        'number' => '07',
        'title' => 'Use the 15-day Free Look Period',
        'description' => 'Read the policy document within 15 days. During this period, verify:',
        'tags' => [
            'Perils listed match location risks',
            'Add-ons are correctly reflected',
            'Exclusions are as expected',
            'Raise discrepancies immediately'
        ]
    ],
    [
        'number' => '08',
        'title' => 'Store and document',
        'description' => 'Store the policy document digitally (DigiLocker) and physically.',
        'tags' => [
            'Photograph all rooms',
            'Valuables',
            'Stock, and equipment',
            'Policy number',
            'Insurer name',
            "Claims helpline number",
            'Share access with family / business partner'
        ]
    ]
];
?>

<section class="how-to-apply" id="how-to-apply">>
  <div class="container">
    <div class="section-header">
      <!-- <span class="eyebrow">3.1 How to apply</span> -->
        <h2 class="sec-title">Buying a Policy - A Complete Guide</h2>
      <h3 class="section-title">How to Apply for a Property Insurance Policy</h3>
      <p class="section-subtitle">
        Buying a property policy is genuinely simple. The complexity lies in making the right choices before you apply — not in the application itself. Follow this sequence.
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

                <?php if (isset($step['type']) && $step['type'] === 'definition-list'): ?>
                  <div class="def-list">
                    <?php foreach ($step['items'] as $item): ?>
                      <div class="def-list__row">
                        <span class="def-list__label"><?php echo $item['label']; ?></span>
                        <span class="def-list__value"><?php echo $item['text']; ?></span>
                      </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>

                <?php if (isset($step['type']) && $step['type'] === 'columns'): ?>
                  <div class="column-grid">
                    <?php foreach ($step['columns'] as $col): ?>
                      <div class="column-grid__box">
                        <div class="column-grid__heading"><?php echo $col['heading']; ?></div>
                        <ul class="column-grid__list">
                          <?php foreach ($col['list'] as $list_item): ?>
                            <li><?php echo $list_item; ?></li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>

                <?php if (!empty($step['tags'])): ?>
                  <div class="tags-group">
                    <?php foreach ($step['tags'] as $tag): ?>
                      <span class="tag"><i class="icon-check">✓</i> <?php echo $tag; ?></span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>

                <?php if (!empty($step['quote'])): ?>
                  <div class="quote-box">
                    <p><?php echo $step['quote']; ?></p>
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