<?php
/**
 * Health Insurance Interactive Layered Accordion Section
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
            'Most Indians who need health insurance don\'t have it — not because they don\'t care, but because nobody explained it clearly. This section covers what health insurance actually is, who it\'s for, what it covers, and what\'s at stake when it\'s missing. Start here. Everything else in this guide follows from this.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('What it is', 'vima-vidya'),
                'url'   => home_url('/health-understand/#what-it-is'),
                'icon'  => 'dashicons-shield',
            ],
            [
                'title' => __('Why it matters', 'vima-vidya'),
                'url'   => home_url('/health-understand/#why-it'),
                'icon'  => 'dashicons-heart',
            ],
            [
                'title' => __('Types', 'vima-vidya'),
                'url'   => home_url('/health-understand/#health-types'),
                'icon'  => 'dashicons-list-view',
            ],
            // [
            //     'title' => __('Who can buy', 'vima-vidya'),
            //     'url'   => home_url('/health-understand/#who-can-buy'),
            //     'icon'  => 'dashicons-groups',
            // ],
            [
                'title' => __('Health vs Other', 'vima-vidya'),
                'url'   => home_url('/health-understand/#health-insurance-other'),
                'icon'  => 'dashicons-shield-alt',
            ],
            [
                'title' => __('7 things to know', 'vima-vidya'),
                'url'   => home_url('/health-understand/#health-seven-things'),
                'icon'  => 'dashicons-location',
            ],
        ],

        'cta_text' => __('Start with the basics', 'vima-vidya'),
        'cta_url'  => home_url('/health-understand/'),
    ],


    // =========================================================
    // 02 — EVALUATE
    // =========================================================
    [
        'class'       => 'card-orange',
        'number'      => '02',
        'title'       => __('Evaluate', 'vima-vidya'),

        'description' => __(
            'Health insurance fails people not when they buy it — but when they bought too little cover, misread sub-limits, or believed myths that leave them exposed. This section walks you through how premiums and co-pays work, what adequate sum insured looks like for your family stage, and the fine print that catches buyers astray. Spend time here first.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('Premium logic', 'vima-vidya'),
                'url'   => home_url('/health-evaluate/#evaluate-health-premiums'),
                'icon'  => 'dashicons-chart-line',
            ],
            [
                'title' => __('Suitability', 'vima-vidya'),
                'url'   => home_url('/health-evaluate/#evaluate-health-lifestages'),
                'icon'  => 'dashicons-yes-alt',
            ],
            [
                'title' => __('Buying a Policy', 'vima-vidya'),
                'url'   => home_url('/health-evaluate/#evaluate-policy-considerations'),
                'icon'  => 'dashicons-media-document',
            ],
            [
                'title' => __('Myths', 'vima-vidya'),
                'url'   => home_url('/health-evaluate/#health-evaluate-myths'),
                'icon'  => 'dashicons-info',
            ],
            [
                'title' => __('Real Scenarios', 'vima-vidya'),
                'url'   => home_url('/health-evaluate/#evaluate-health-real-scenerios'),
                'icon'  => 'dashicons-format-video',
            ],
        ],

        'cta_text' => __('Before you commit to any policy, evaluate', 'vima-vidya'),
        'cta_url'  => home_url('/health-evaluate/'),
    ],


    // =========================================================
    // 03 — ACT
    // =========================================================
    [
        'class'       => 'card-dark-blue',
        'number'      => '03',
        'title'       => __('Act', 'vima-vidya'),

        'description' => __(
            'Most health claim disputes are not about bad policies — they are about disclosure gaps during application, room rent limits, network hospital rules, and paperwork nobody explained. This section gives you everything you need to declare accurately, claim fast, and make sure your policy stands by you when care is needed.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('How to apply', 'vima-vidya'),
                'url'   => home_url('/health-act/#how-to-apply'),
                'icon'  => 'dashicons-forms',
            ],
            [
                'title' => __("Do's & Don'ts", 'vima-vidya'),
                'url'   => home_url('/health-act/#dos-donts'),
                'icon'  => 'dashicons-editor-help',
            ],
            [
                'title' => __('What you can claim', 'vima-vidya'),
                'url'   => home_url('/health-act/#what-you-can-claim'),
                'icon'  => 'dashicons-yes',
            ],
            [
                'title' => __('Claim Process', 'vima-vidya'),
                'url'   => home_url('/health-act/#claims-process'),
                'icon'  => 'dashicons-list-view',
            ],
            [
                'title' => __('Checklist', 'vima-vidya'),
                'url'   => home_url('/health-act/#checklist'),
                'icon'  => 'dashicons-clipboard',
            ],
        ],

         'cta_text' => __('Act with confidence', 'vima-vidya'),
        'cta_url'  => home_url('/health-act/'),
    ],

];
?>

<section class="journey-accordion-section health-journey-section">
  <div class="property-intro">
    <div class="property-routine" aria-label="Automatically animated daily health routine">
      <div class="property-routine__eyebrow">HEALTH INSURANCE</div>
      
      <div class="property-wheel" id="health-wheel">
        <svg class="property-wheel__track" viewBox="0 0 500 500" aria-hidden="true"><circle cx="250" cy="250" r="178" fill="none" stroke="#8ac6ff" stroke-width="2.5" stroke-dasharray="8 10"/><path d="M 397 146 l 13 1 -3 -13 M 404 343 l 3 13 -13 -1 M 104 343 l -13 -1 3 13" fill="none" stroke="#8ac6ff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <div class="property-wheel__center" aria-live="polite">
          <svg viewBox="0 0 180 155" role="img" aria-label="Illustration of vital health and wellness"><circle cx="90" cy="76" r="72" fill="#e0f3ff"/><path d="M90 35v82M49 76h82" fill="none" stroke="#08274b" stroke-width="12" stroke-linecap="round"/><circle cx="90" cy="76" r="28" fill="#ff7043" opacity="0.9"/></svg>
          <span class="property-wheel__center-label">YOUR HEALTH</span>
        </div>
        <?php
        $health_routine_steps = [
            [
                'icon' => '☀',
                'label' => 'You wake up.',
                'position' => 'top'
            ],
            [
                'icon' => '💼',
                'label' => 'You get ready for work.',
                'position' => 'upper-right'
            ],
            [
                'icon' => '☕',
                'label' => 'You have breakfast.',
                'position' => 'lower-right'
            ],
            [
                'icon' => '🚶',
                'label' => 'You go about your day.',
                'position' => 'bottom'
            ],
            [
                'icon' => '🩺',
                'label' => 'A routine check-up or fever.',
                'position' => 'lower-left'
            ],
            [
                'icon' => '⚡',
                'label' => 'A sudden health infection.',
                'position' => 'upper-left'
            ],
        ];

        foreach ($health_routine_steps as $i => $step) : ?>
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
      <p class="property-story__description">That is the nature of medical emergencies. They do not announce themselves. They arrive unexpectedly — through a sudden illness, an accident, a medical diagnosis, an emergency surgery, or a hospitalisation that no one planned for.
Your health is your greatest asset. But when illness strikes, the impact rarely stops with your body. Hospital bills, diagnostic tests, medicines, surgery costs, and days away from work can place an unexpected financial burden on you and your family. Years of savings can be spent in a matter of days.
For millions of Indian families, a medical emergency can mean dipping into savings, borrowing money, postponing important plans, or compromising on the quality of treatment.
Yet, despite how unpredictable healthcare costs can be, many families remain financially unprepared.</p>
      
      <div class="property-story__art" role="img" aria-label="Health insurance protects you and your family">
        <div class="property-story__shield">✚</div>
        <div class="property-story__house">🛡️</div>
        <div class="property-story__policy"><span>◆ HEALTH</span><strong>INSURANCE</strong><i></i><i></i><i></i><i></i></div>
        <span class="property-story__art-caption">Protect your health and savings.</span>
      </div>
    </div>
  </div>

  <div class="property-protection-note">
    <span class="property-protection-note__icon" aria-hidden="true">♥</span>
    <p>Health Insurance exists for exactly these moments when an ordinary day turns into a medical emergency — designed to help protect not just your health, but your savings, financial stability, and your family's peace of mind.</p>
  </div>

  <div class="journey-vault-bg">
    <div class="vault-content">
      <span class="sub-heading">The protection most families overlook — until a medical emergency changes everything.</span>
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
  const wheel = document.querySelector('#health-wheel');
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

  const cards = document.querySelectorAll('.health-journey-section .journey-card[data-layer]');
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