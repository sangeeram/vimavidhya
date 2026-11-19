<?php
/**
 * How to Apply Section Template (Travel Insurance)
 */

$steps = [
    [
        'number' => '01',
        'title' => 'Determine your Medical Sum Insured',
        'type' => 'definition-list',
        'items' => [
            ['label' => 'Domestic', 'text' => 'Minimum ₹10 lakh'],
            ['label' => 'Asia', 'text' => 'USD 100,000'],
            ['label' => 'Europe/USA/AUS', 'text' => 'USD 250,000+'],
            ['label' => 'Senior Travellers', 'text' => 'USD 500,000. This is not a number to optimise downward.']
        ]
    ],
    [
        'number' => '02',
        'title' => 'Confirm your destination and trip dates accurately',
        'description' => 'Travel insurance is priced by destination zone and duration. Declare accurately — a policy for \'Asia\' cannot be used to claim in Europe.'
    ],
    [
        'number' => '03',
        'title' => 'Declare all pre-existing medical conditions',
        'description' => 'List every condition. If you have hypertension, cardiac history, diabetes, or any ongoing treatment — declare it. Non-disclosure voids the claim under Utmost Good Faith.'
    ],
    [
        'number' => '04',
        'title' => 'Decide which add-ons you need',
        'description' => 'Adventure Sports Add-On if any physical activity is planned. PED cover if you have pre-existing conditions. Trip Cancellation if your prepaid costs are significant.'
    ],
    [
        'number' => '05',
        'title' => 'Compare at least 3 insurers',
        'description' => 'Compare:',
        'tags' => [
            'Medical Sum Insured',
            'Exclusions',
            '24/7 Assistance quality',
            'Claim Settlement Ratio (above 90%)',
            'Premium excluding GST'
        ]
    ],
    [
        'number' => '06',
        'title' => 'Fill the proposal form yourself',
        'quote' => 'Do not hand it to an agent to complete. Read every question. Every declaration has legal significance under the insurance contract.'
    ],
    [
        'number' => '07',
        'title' => 'Pay the premium and receive the policy',
        'description' => 'Policy issued digitally within minutes. Confirm: correct dates, destination, sum insured, and add-ons are all reflected accurately.'
    ],
    [
        'number' => '08',
        'title' => 'Use the Free Look Period where applicable',
        'description' => 'Read the full policy document. Verify Medical Sum Insured, exclusions, and add-ons. Raise discrepancies within the Free Look Period — typically 15 days for annual plans.'
    ],
    [
        'number' => '09',
        'title' => 'Store and share the policy before departure',
        'description' => 'Save the policy certificate to your phone and email. Share the policy number and 24/7 helpline with a family member in India. This is the step most travellers skip and always regret.'
    ]
];
?>

<section class="how-to-apply" id="how-to-apply">
  <div class="container">
    <div class="section-header">
      <h2 class="sec-title">Buying a Policy - A Complete Guide</h2>
      <h3 class="section-title">How to Apply for a Travel Insurance Policy</h3>
      <p class="section-subtitle">
        Buying a travel insurance policy is genuinely simple. The complexity lies in making the right choices before you apply — not in the application itself. Follow this sequence for every trip.
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