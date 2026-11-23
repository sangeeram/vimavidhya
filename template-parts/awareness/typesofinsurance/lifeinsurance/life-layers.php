<?php
/**
 * Interactive Layered Accordion Section — Life Insurance
 * WordPress Custom Template Part
 */

$layers = [

    // =========================================================
    // 01 — UNDERSTAND
    // =========================================================
    [
        'class'       => 'card-light-blue',
        'number'      => '01',
        'title'       => __('Understand', 'vima-vidya'),

        'description' => __(
            'Most Indians have life insurance. Very few have the right kind, in the right amount, for the right reason.
For many, it’s a tax-saving receipt. For others, an investment that quietly underdelivers. For too many families, it’s cover that looks reassuring — until it’s tested.
',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('What it is', 'vima-vidya'),
                'url'   => home_url('/life-understand/#life-insurance-basics'),
                'icon'  => 'dashicons-shield',
            ],
            [
                'title' => __('Why it matters', 'vima-vidya'),
                'url'   => home_url('/life-understand/#life-why-it-matters'),
                'icon'  => 'dashicons-admin-home',
            ],
             [
                'title' => __('Why it \'s not an investment', 'vima-vidya'),
                'url'   => home_url('/life-understand/#life-not-investment-section'),
                'icon'  => 'dashicons-groups',
            ],
            [
                'title' => __('Types', 'vima-vidya'),
                'url'   => home_url('/life-understand/#life-insurance-types'),
                'icon'  => 'dashicons-list-view',
            ],
           
            // [
            //     'title' => __('Impact', 'vima-vidya'),
            //     'url'   => home_url('/life-understand/#impact'),
            //     'icon'  => 'dashicons-shield-alt',
            // ],
            // [
            //     'title' => __('10 things to know', 'vima-vidya'),
            //     'url'   => home_url('/life-understand/#ten-things'),
            //     'icon'  => 'dashicons-location',
            // ],
        ],

        'cta_text' => __('Start with the basics', 'vima-vidya'),
        'cta_url'  => home_url('/life-understand/'),
    ],


    // =========================================================
    // 02 — EVALUATE
    // =========================================================
    [
        'class'       => 'card-orange',
        'number'      => '02',
        'title'       => __('Evaluate', 'vima-vidya'),

        'description' => __(
            'Life insurance doesn’t fail people when they buy it.
It fails when cover is sized to affordability instead of responsibility, when complexity is mistaken for value, or when employer cover is treated as a safety net.
',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('Premium logic', 'vima-vidya'),
                'url'   => home_url('/life-evaluate/#premium-logic'),
                'icon'  => 'dashicons-chart-line',
            ],
            [
                'title' => __('Suitability', 'vima-vidya'),
                'url'   => home_url('/life-evaluate/#evaluate-life-lifestages'),
                'icon'  => 'dashicons-yes-alt',
            ],
            [
                'title' => __('Fine Print', 'vima-vidya'),
                'url'   => home_url('/life-evaluate/#evaluate-life-policy-considerations'),
                'icon'  => 'dashicons-media-document',
            ],
            [
                'title' => __('Myths', 'vima-vidya'),
                'url'   => home_url('/life-evaluate/#life-evaluate-myths'),
                'icon'  => 'dashicons-info',
            ],
            [
                'title' => __('Real Scenarios', 'vima-vidya'),
                'url'   => home_url('/life-evaluate/#evaluate-life-real-scenerios'),
                'icon'  => 'dashicons-format-video',
            ],
        ],

        'cta_text' => __('Before you commit to any policy, evaluate', 'vima-vidya'),
        'cta_url'  => home_url('/life-evaluate/'),
    ],


    // =========================================================
    // 03 — ACT
    // =========================================================
    [
        'class'       => 'card-dark-blue',
        'number'      => '03',
        'title'       => __('Act', 'vima-vidya'),

        'description' => __(
            'Most life insurance claim problems aren’t caused by bad policies.
They’re caused by wrong disclosures, lapsed premiums, missing nominees, and families who don’t know what to do when it matters most.
',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('How to apply', 'vima-vidya'),
                'url'   => home_url('/life-act/#how-to-apply'),
                'icon'  => 'dashicons-forms',
            ],
            [
                'title' => __("Do's & Don'ts", 'vima-vidya'),
                'url'   => home_url('/life-act/#dos-donts'),
                'icon'  => 'dashicons-editor-help',
            ],
            // [
            //     'title' => __('What you can claim', 'vima-vidya'),
            //     'url'   => home_url('/life-act/#what-you-can-claim'),
            //     'icon'  => 'dashicons-yes',
            // ],
            [
                'title' => __('Claim Process', 'vima-vidya'),
                'url'   => home_url('/life-act/#claims-process'),
                'icon'  => 'dashicons-list-view',
            ],
            [
                'title' => __('Checklist', 'vima-vidya'),
                'url'   => home_url('/life-act/#life-checklist'),
                'icon'  => 'dashicons-clipboard',
            ],
        ],

         'cta_text' => __('Act with confidence', 'vima-vidya'),
        'cta_url'  => home_url('/life-act/'),
    ],

];
?>

<section class="journey-accordion-section life-insurance-section">
  <div class="property-intro">
    <div class="property-routine" aria-label="Automatically animated daily life routine">
      <div class="property-routine__eyebrow">LIFE INSURANCE</div>
      <div class="property-wheel" id="life-wheel">
        <svg class="property-wheel__track" viewBox="0 0 500 500" aria-hidden="true"><circle cx="250" cy="250" r="178" fill="none" stroke="#8ac6ff" stroke-width="2.5" stroke-dasharray="8 10"/><path d="M 397 146 l 13 1 -3 -13 M 404 343 l 3 13 -13 -1 M 104 343 l -13 -1 3 13" fill="none" stroke="#8ac6ff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <div class="property-wheel__center" aria-live="polite">
          <svg viewBox="0 0 180 155" role="img" aria-label="Illustration representing family security"><circle cx="90" cy="76" r="72" fill="#e0f3ff"/><path d="M90 35a24 24 0 1 1 0 48 24 24 0 0 1 0-48z" fill="#08274b"/><path d="M50 115c0-22 18-32 40-32s40 10 40 32v12H50z" fill="#08274b"/><circle cx="140" cy="55" r="14" fill="#f59a18"/><path d="M120 127c0-15 12-22 20-22s20 7 20 22v10h-40z" fill="#f59a18"/><circle cx="40" cy="55" r="14" fill="#7dc8f6"/><path d="M20 127c0-15 12-22 20-22s20 7 20 22v10H20z" fill="#7dc8f6"/></svg>
          <span class="property-wheel__center-label">YOUR FAMILY</span>
        </div>
        <?php 
        $routine_steps = [
            [
                'icon' => '💼',
                'label' => 'You go to work.',
                'position' => 'top'
            ],
            [
                'icon' => '💳',
                'label' => 'You pay EMIs.',
                'position' => 'upper-right'
            ],
            [
                'icon' => '🎒',
                'label' => 'You send your children to school.',
                'position' => 'lower-right'
            ],
            [
                'icon' => '🤲',
                'label' => 'You take care of ageing parents.',
                'position' => 'bottom'
            ],
            [
                'icon' => '⚖️',
                'label' => 'You carry the financial weight.',
                'position' => 'lower-left'
            ],
            [
                'icon' => '🔄',
                'label' => 'Every single day.',
                'position' => 'upper-left'
            ],
        ];

        foreach ($routine_steps as $i => $step) : ?>
          <div class="property-wheel__step property-wheel__step--<?php echo esc_attr($step['position']); ?> <?php echo $i===0 ? 'is-active' : ''; ?>" data-routine-step>
            <span class="property-wheel__icon" aria-hidden="true"><?php echo esc_html($step['icon']); ?></span>
            <span class="property-wheel__label"><?php echo esc_html($step['label']); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
      <p class="property-routine__hint">Carrying the financial weight of everyone who depends on you</p>
    </div>

    <div class="property-story">
      <span class="property-story__eyebrow">Now ask yourself honestly</span>
      <h2 class="property-story__heading">If you were not here tomorrow, would those you love be able to <span>carry on?</span></h2>
      <p class="property-story__description">
        Life insurance exists to answer that question with certainty — not hope, not prayer, not the goodwill of relatives. Yet in India today, life insurance is one of the most widely misunderstood financial products. Most people buy Life Insurance for a tax receipt. Many buy it as an investment. And if Insurance is bought for tax or investment purpose, the Insurance component is usually very small or inadequate. 
      </p>
      <div class="property-story__art" role="img" aria-label="Life insurance provides certainty for your family">
        <div class="property-story__shield">✓</div>
        <div class="property-story__house">🛡️</div>
        <div class="property-story__policy"><span>◆ LIFE</span><strong>INSURANCE</strong><i></i><i></i><i></i><i></i></div>
        <span class="property-story__art-caption">Protect your family's future.</span>
      </div>
    </div>
  </div>

  <div class="property-protection-note">
    <span class="property-protection-note__icon" aria-hidden="true">♢</span>
    <p>Many buy the wrong Life Insurance products entirely. And a disturbing number of people discover what they actually bought only when they — or their families — try to make a claim</p>
  </div>

  <div class="journey-vault-bg">
    <div class="vault-content">
      <span class="sub-heading">The protection most Indians buy for the wrong reasons — and the one reason that actually matters.</span>
      <h2 class="section-title">Understand. <span class="highlight">Evaluate.</span> Act.</h2>
      <p class="section-subtitle">Explore the essentials, assess your options, and take the next step with confidence.</p>
    </div>
  </div>

  <!-- Cards Container -->
  <div class="cards-container">
    <?php foreach ($layers as $index => $layer) : ?>
      <article class="journey-card <?php echo esc_attr($layer['class']); ?> <?php echo $index === 0 ? 'is-expanded' : ''; ?>" data-layer>
        <div class="card-inner">
          <div class="badge-number"><?php echo esc_html($layer['number']); ?></div>
          <h3 class="card-title"><?php echo esc_html($layer['title']); ?></h3>
          <p class="card-description"><?php echo esc_html($layer['description']); ?></p>

          <div class="circle-arrow-btn" aria-hidden="true">&rarr;</div>

          <?php if (!empty($layer['links']) || !empty($layer['cta_text'])) : ?>
            <div class="card-expanded-content">
              <?php if (!empty($layer['links'])) : ?>
                <ul class="card-links-list">
                  <?php foreach ($layer['links'] as $link) : ?>
                    <li>
                      <a href="<?php echo esc_url($link['url']); ?>">
                        <span class="link-label">
                          <i class="dashicons <?php echo esc_attr($link['icon']); ?>"></i>
                          <?php echo esc_html($link['title']); ?>
                        </span>
                        <span class="arrow">&rarr;</span>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>

              <?php if (!empty($layer['cta_text'])) : ?>
                <a href="<?php echo esc_url($layer['cta_url']); ?>" class="card-cta-button">
                  <?php echo esc_html($layer['cta_text']); ?> <span>&rarr;</span>
                </a>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const wheel = document.getElementById('life-wheel');
  const steps = wheel ? Array.from(wheel.querySelectorAll('[data-routine-step]')) : [];
  let activeStep = 0;
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const showStep = (index) => {
    steps.forEach((step, i) => step.classList.toggle('is-active', i === index));
  };
  if (steps.length && !reduceMotion) {
    showStep(activeStep);
    let routineTimer = null;
    const startRoutine = () => {
      if (routineTimer) return;
      routineTimer = window.setInterval(() => {
        activeStep = (activeStep + 1) % steps.length;
        showStep(activeStep);
      }, 3000);
    };
    const stopRoutine = () => {
      if (routineTimer) window.clearInterval(routineTimer);
      routineTimer = null;
    };
    const observer = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting && !document.hidden) startRoutine();
      else stopRoutine();
    }, { threshold: 0.15 });
    observer.observe(wheel);
    document.addEventListener('visibilitychange', () => {
      if (document.hidden) stopRoutine();
      else if (wheel.getBoundingClientRect().bottom > 0 && wheel.getBoundingClientRect().top < window.innerHeight) startRoutine();
    });
  }

  const cards = document.querySelectorAll('.life-insurance-section .journey-card[data-layer]');
  cards.forEach((card) => {
    card.addEventListener('click', (e) => {
      if (e.target.closest('a')) return;
      if (!card.classList.contains('is-expanded')) {
        cards.forEach((c) => c.classList.remove('is-expanded'));
        card.classList.add('is-expanded');
      }
    });
  });
});
</script>