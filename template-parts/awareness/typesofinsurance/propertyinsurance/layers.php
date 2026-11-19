<?php
/**
 * Interactive Layered Accordion Section
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
            'Most Indians who need property insurance don\'t have it — not because it\'s expensive, but because nobody explained it clearly. This section covers what it actually is, who it\'s for, what it covers, and what\'s at stake when it\'s missing. Start here. Everything else in this guide follows from this.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('What it is', 'vima-vidya'),
                'url'   => home_url('/property-understand/#what-it-is'),
                'icon'  => 'dashicons-shield',
            ],
            [
                'title' => __('Why it matters', 'vima-vidya'),
                'url'   => home_url('/property-understand/#why-it-matters'),
                'icon'  => 'dashicons-admin-home',
            ],
            [
                'title' => __('Types', 'vima-vidya'),
                'url'   => home_url('/property-understand/#types'),
                'icon'  => 'dashicons-list-view',
            ],
            [
                'title' => __('Who can buy', 'vima-vidya'),
                'url'   => home_url('/property-understand/#who-can-buy'),
                'icon'  => 'dashicons-groups',
            ],
            [
                'title' => __('Impact', 'vima-vidya'),
                'url'   => home_url('/property-understand/#impact'),
                'icon'  => 'dashicons-shield-alt',
            ],
            [
                'title' => __('10 things to know', 'vima-vidya'),
                'url'   => home_url('/property-understand/#ten-things'),
                'icon'  => 'dashicons-location',
            ],
        ],

        'cta_text' => __('Start with the basics', 'vima-vidya'),
        'cta_url'  => home_url('/property-understand/'),
    ],


    // =========================================================
    // 02 — EVALUATE
    // =========================================================
    [
        'class'       => 'card-orange',
        'number'      => '02',
        'title'       => __('Evaluate', 'vima-vidya'),

        'description' => __(
            'Property insurance fails people not when they buy it — but when they bought too little, misread the fine print, or believed something that simply isn\'t true. This section walks you through how premiums actually work, what adequate cover looks like at your life stage, and the myths that lead most buyers astray. Before you commit to any policy, spend time here first.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('Premium logic', 'vima-vidya'),
                'url'   => home_url('/property-evaluate/#premium-logic'),
                'icon'  => 'dashicons-chart-line',
            ],
            // [
            //     'title' => __('Real Costs', 'vima-vidya'),
            //     'url'   => home_url('/why-property-insurance-matters/'),
            //     'icon'  => 'dashicons-money-alt',
            // ],
            [
                'title' => __('Suitability', 'vima-vidya'),
                'url'   => home_url('/property-evaluate/#suitability'),
                'icon'  => 'dashicons-yes-alt',
            ],
            [
                'title' => __('Fine Print', 'vima-vidya'),
                'url'   => home_url('/property-evaluate/#fine-print'),
                'icon'  => 'dashicons-media-document',
            ],
            [
                'title' => __('Myths', 'vima-vidya'),
                'url'   => home_url('/property-evaluate/#myth-reality'),
                'icon'  => 'dashicons-info',
            ],
            [
                'title' => __('Real Scenarios', 'vima-vidya'),
                'url'   => home_url('/property-evaluate/#lived-experiences'),
                'icon'  => 'dashicons-format-video',
            ],
        ],

        'cta_text' => __('Before you commit to any policy, evaluate', 'vima-vidya'),
        'cta_url'  => home_url('/property-evaluate/'),
    ],


    // =========================================================
    // 03 — ACT
    // =========================================================
    [
        'class'       => 'card-dark-blue',
        'number'      => '03',
        'title'       => __('Act', 'vima-vidya'),

        'description' => __(
            'Most claim rejections are not about bad policies — they are about missed steps, wrong documents, and things nobody told you at the time of buying. This section gives you everything you need to apply right, claim fast, and make sure your policy pays when the moment arrives.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('How to apply', 'vima-vidya'),
                'url'   => home_url('/property-act/#how-to-apply'),
                'icon'  => 'dashicons-forms',
            ],
             [
                'title' => __("Do's & Don'ts", 'vima-vidya'),
                'url'   => home_url('/property-act/#dos-donts'),
                'icon'  => 'dashicons-editor-help',
            ],
            [
                'title' => __('What you can claim', 'vima-vidya'),
                'url'   => home_url('/property-act/#what-you-can-claim'),
                'icon'  => 'dashicons-yes',
            ],
           
            [
                'title' => __('Claim Process', 'vima-vidya'),
                'url'   => home_url('/property-act/#claims-process'),
                'icon'  => 'dashicons-list-view',
            ],
            
            [
                'title' => __('Checklist', 'vima-vidya'),
                'url'   => home_url('/property-act/#checklist'),
                'icon'  => 'dashicons-clipboard',
            ],
            // [
            //     'title' => __('FAQs', 'vima-vidya'),
            //     'url'   => home_url('/property-act/#faqs'),
            //     'icon'  => 'dashicons-editor-help',
            // ],
        ],

         'cta_text' => __('Act with confidence', 'vima-vidya'),
        'cta_url'  => home_url('/property-act/'),
    ],

];
?>


<section class="journey-accordion-section">
  <div class="property-intro">
    <div class="property-routine" aria-label="Automatically animated daily property routine">
      <div class="property-routine__eyebrow">PROPERTY INSURANCE</div>
      <!-- <h3 class="property-routine__title">A day in the life of your home</h3> -->
      <div class="property-wheel" id="property-wheel">
        <svg class="property-wheel__track" viewBox="0 0 500 500" aria-hidden="true"><circle cx="250" cy="250" r="178" fill="none" stroke="#8ac6ff" stroke-width="2.5" stroke-dasharray="8 10"/><path d="M 397 146 l 13 1 -3 -13 M 404 343 l 3 13 -13 -1 M 104 343 l -13 -1 3 13" fill="none" stroke="#8ac6ff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <div class="property-wheel__center" aria-live="polite">
          <svg viewBox="0 0 180 155" role="img" aria-label="Illustration of a family home"><circle cx="90" cy="76" r="72" fill="#e0f3ff"/><path d="M23 73 90 23l67 50" fill="none" stroke="#08274b" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M39 70h102v68H39z" fill="#fff4e7" stroke="#d0e3ef" stroke-width="2"/><path d="M75 91h30v47H75z" fill="#d49b63"/><path d="M47 87h20v23H47zM113 87h20v23h-20z" fill="#7dc8f6" stroke="#08274b" stroke-width="2"/><path d="M14 139h152" stroke="#77b96b" stroke-width="6" stroke-linecap="round"/><circle cx="24" cy="113" r="16" fill="#82bc73"/><circle cx="157" cy="116" r="16" fill="#82bc73"/></svg>
          <span class="property-wheel__center-label">YOUR HOME</span>
        </div>
        <?php
      
$routine_steps = [
    [
        'icon' => '☀',
        'label' => 'You wake up.',
        'position' => 'top'
    ],
    [
        'icon' => '▣',
        'label' => 'You leave for work.',
        'position' => 'upper-right'
    ],
    [
        'icon' => '🔒',
        'label' => 'You lock the door.',
        'position' => 'lower-right'
    ],
    [
        'icon' => '☼',
        'label' => 'Lights off.',
        'position' => 'bottom'
    ],
    [
        'icon' => '♨',
        'label' => 'Gas checked.',
        'position' => 'lower-left'
    ],
    [
        'icon' => '🗝',
        'label' => 'A familiar turn of the key.',
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
      <p class="property-routine__hint">You do this every day — week after week, year after year</p>
    </div>
    <div class="property-story">
      <span class="property-story__eyebrow">And rarely do you think</span>
      <h2 class="property-story__heading">What if today is <span>different?</span></h2>
      <p class="property-story__description">That is the nature of property loss. It does not announce itself. It arrives quietly — through a leaking pipe, a short circuit, a structural crack, a flood that rises overnight, a fire that spreads faster than expected.
Your home did not come easy. It came through years of saving, decades of EMIs, postponed plans, and patient sacrifice. For most Indians, it is not just where life happens — it is the single largest asset they will ever own.
For millions of small business owners, the situation is even more acute. The shop, the store, the kirana — it is not just property. It is the family's livelihood, built over years, built by hand.
Yet, despite its value, it is often left financially exposed. 
</p>
      <div class="property-story__art" role="img" aria-label="Property insurance protects a family home">
        <div class="property-story__shield">✓</div>
        <div class="property-story__house">🏡</div>
        <div class="property-story__policy"><span>◆ PROPERTY</span><strong>INSURANCE</strong><i></i><i></i><i></i><i></i></div>
        <span class="property-story__art-caption">Protect what you've built.</span>
      </div>
    </div>
  </div>
  <div class="property-protection-note"><span class="property-protection-note__icon" aria-hidden="true">♢</span><p>Property Insurance exists for exactly these ordinary days that end differently—designed to protect not just walls and floors, but everything they represent.</p></div>
  <div class="journey-vault-bg"><div class="vault-content"><span class="sub-heading">The protection most homeowners and tenants overlook — until a fire, flood, or theft changes everything.</span><h2 class="section-title">Understand. <span class="highlight">Evaluate.</span> Act.</h2><p class="section-subtitle">Explore the essentials, assess your options, and take the next step with confidence.</p></div></div>

  <!-- Cards Container -->
  <div class="cards-container">
    <?php foreach ($layers as $index => $layer) : ?>
      <article class="journey-card <?php echo esc_attr($layer['class']); ?> <?php echo $index === 0 ? 'is-expanded' : ''; ?>" data-layer>
        
        <div class="card-inner">
          <div class="badge-number"><?php echo esc_html($layer['number']); ?></div>
          <h3 class="card-title"><?php echo esc_html($layer['title']); ?></h3>
          <p class="card-description"><?php echo esc_html($layer['description']); ?></p>

          <!-- Collapsed State Trigger Arrow -->
          <div class="circle-arrow-btn" aria-hidden="true">&rarr;</div>

          <!-- Expanded Links and Actions -->
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
  const wheel = document.querySelector('.property-wheel');
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
  const cards = document.querySelectorAll('.journey-card[data-layer]');

  cards.forEach((card) => {
    card.addEventListener('click', (e) => {
      // Prevent accordion collapse/expansion if a link is clicked
      if (e.target.closest('a')) return;

      if (!card.classList.contains('is-expanded')) {
        cards.forEach((c) => c.classList.remove('is-expanded'));
        card.classList.add('is-expanded');
      }
    });
  });
});
</script>