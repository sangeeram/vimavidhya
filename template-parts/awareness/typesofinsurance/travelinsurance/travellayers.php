<?php
/**
 * Interactive Layered Accordion Section - Travel Insurance
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
            'You can\'t protect what you don\'t understand. Most Indians who travel — domestically and internationally — don \'t carry travel insurance. Not because it is expensive. Not because it is complicated to buy, but because nobody explained what it actually does, what goes wrong without it, and why the cost of not having it can dwarf the cost of the trip itself.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('What is Travel Insurance?', 'vima-vidya'),
                'url'   => home_url('/travel-understand/#what-is-travel-insurance'),
                'icon'  => 'dashicons-shield',
            ],
            [
                'title' => __('Types', 'vima-vidya'),
                'url'   => home_url('/travel-understand/#travel-types'),
                'icon'  => 'dashicons-list-view',
            ],
            [
                'title' => __('Who can buy', 'vima-vidya'),
                'url'   => home_url('/travel-understand/#travel-who-can-buy'),
                'icon'  => 'dashicons-groups',
            ],
            [
                'title' => __('Impact', 'vima-vidya'),
                'url'   => home_url('/travel-understand/#travel-impact'),
                'icon'  => 'dashicons-shield-alt',
            ],
            [
                'title' => __('Travel Insurance vs. other cover', 'vima-vidya'),
                'url'   => home_url('/travel-understand/#travel-insurance-other'),
                'icon'  => 'dashicons-randomize',
            ],
            [
                'title' => __('7 things to know', 'vima-vidya'),
                'url'   => home_url('/travel-understand/#travel-seven-things'),
                'icon'  => 'dashicons-location',
            ],
        ],

        'cta_text' => __('Start with the basics', 'vima-vidya'),
        'cta_url'  => home_url('/travel-understand/'),
    ],


    // =========================================================
    // 02 — EVALUATE
    // =========================================================
    [
        'class'       => 'card-orange',
        'number'      => '02',
        'title'       => __('Evaluate', 'vima-vidya'),

        'description' => __(
            'Most people buy the wrong policy. A travel insurance policy bought at the airport kiosk in two minutes, for the cheapest possible premium, with no understanding of what it covers or excludes, is not protection. It is paperwork. It will sit in your inbox until something goes wrong — and when something goes wrong, you will discover, at the worst possible moment, exactly what you did not read.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('How premiums are calculated', 'vima-vidya'),
                'url'   => home_url('/travel-evaluate/#premium-logic'),
                'icon'  => 'dashicons-chart-line',
            ],
            // [
            //     'title' => __('What it actually costs', 'vima-vidya'),
            //     'url'   => home_url('/travel-evaluate/#actual-costs'),
            //     'icon'  => 'dashicons-money-alt',
            // ],
            [
                'title' => __('Suitability', 'vima-vidya'),
                'url'   => home_url('/travel-evaluate/#suitability'),
                'icon'  => 'dashicons-yes-alt',
            ],
            [
                'title' => __('Buying a Policy', 'vima-vidya'),
                'url'   => home_url('/travel-evaluate/#evaluate-policy-considerations'),
                'icon'  => 'dashicons-media-document',
            ],
            [
                'title' => __('Myths', 'vima-vidya'),
                'url'   => home_url('/travel-evaluate/#travel-evaluate-myths'),
                'icon'  => 'dashicons-info',
            ],
            [
                'title' => __('Real stories', 'vima-vidya'),
                'url'   => home_url('/travel-evaluate/#evaluate-travel-real-scenerios'),
                'icon'  => 'dashicons-format-video',
            ],
        ],

        'cta_text' => __('Start with the numbers', 'vima-vidya'),
        'cta_url'  => home_url('/travel-evaluate/'),
    ],


    // =========================================================
    // 03 — ACT
    // =========================================================
    [
        'class'       => 'card-dark-blue',
        'number'      => '03',
        'title'       => __('Act', 'vima-vidya'),

        'description' => __(
            'Knowing is not enough. A policy that sits in a drawer helps no one. Most travel insurance claims that fail are not failed because of a bad policy. They fail because the traveller paid out of pocket at a foreign hospital not knowing cashless was available. Because the cancellation claim was filed a week too late. Because no one collected the airline\'s written delay certificate at the airport — the one document the insurer needed.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('How to apply', 'vima-vidya'),
                'url'   => home_url('/travel-act/#how-to-apply'),
                'icon'  => 'dashicons-forms',
            ],
            [
                'title' => __("Do's & Don'ts", 'vima-vidya'),
                'url'   => home_url('/travel-act/#dos-donts'),
                'icon'  => 'dashicons-editor-help',
            ],
            [
                'title' => __('What you can claim', 'vima-vidya'),
                'url'   => home_url('/travel-act/#what-you-can-claim'),
                'icon'  => 'dashicons-yes',
            ],
            [
                'title' => __('Claims process', 'vima-vidya'),
                'url'   => home_url('/travel-act/#claims-process'),
                'icon'  => 'dashicons-list-view',
            ],
            // [
            //     'title' => __('Documents', 'vima-vidya'),
            //     'url'   => home_url('/travel-act/#documents'),
            //     'icon'  => 'dashicons-media-document',
            // ],
            // [
            //     'title' => __('Networks', 'vima-vidya'),
            //     'url'   => home_url('/travel-act/#networks'),
            //     'icon'  => 'dashicons-admin-site',
            // ],
            
            [
                'title' => __('Checklist', 'vima-vidya'),
                'url'   => home_url('/travel-act/#checklist'),
                'icon'  => 'dashicons-clipboard',
            ],
            // [
            //     'title' => __('FAQs', 'vima-vidya'),
            //     'url'   => home_url('/travel-act/#faqs'),
            //     'icon'  => 'dashicons-sos',
            // ],
        ],

        'cta_text' => __('Start with the steps', 'vima-vidya'),
        'cta_url'  => home_url('/travel-act/'),
    ],

];
?>

<section class="journey-accordion-section travel-journey-section">
  <div class="property-intro">
    <div class="property-routine" aria-label="Automatically animated daily travel preparation routine">
      <div class="property-routine__eyebrow">TRAVEL INSURANCE</div>
      <div class="property-wheel" id="travel-wheel">
        <svg class="property-wheel__track" viewBox="0 0 500 500" aria-hidden="true"><circle cx="250" cy="250" r="178" fill="none" stroke="#8ac6ff" stroke-width="2.5" stroke-dasharray="8 10"/><path d="M 397 146 l 13 1 -3 -13 M 404 343 l 3 13 -13 -1 M 104 343 l -13 -1 3 13" fill="none" stroke="#8ac6ff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <div class="property-wheel__center" aria-live="polite">
          <svg viewBox="0 0 180 155" role="img" aria-label="Illustration of an airplane in flight"><circle cx="90" cy="76" r="72" fill="#e0f3ff"/><path d="M23 73L90 23l67 50" fill="none" stroke="#08274b" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M39 70h102v68H39z" fill="#fff4e7" stroke="#d0e3ef" stroke-width="2"/><path d="M75 91h30v47H75z" fill="#d49b63"/><path d="M47 87h20v23H47zM113 87h20v23h-20z" fill="#7dc8f6" stroke="#08274b" stroke-width="2"/><path d="M14 139h152" stroke="#77b96b" stroke-width="6" stroke-linecap="round"/><circle cx="24" cy="113" r="16" fill="#82bc73"/><circle cx="157" cy="116" r="16" fill="#82bc73"/></svg>
          <span class="property-wheel__center-label">YOUR TRIP</span>
        </div>
        <?php
        $routine_steps = [
            [
                'icon' => '✈',
                'label' => 'You planned the trip.',
                'position' => 'top'
            ],
            [
                'icon' => '🏨',
                'label' => 'You booked the hotel.',
                'position' => 'right'
            ],
            [
                'icon' => '🎫',
                'label' => 'You confirmed the flight.',
                'position' => 'bottom'
            ],
            [
                'icon' => '🧳',
                'label' => 'You packed the bag.',
                'position' => 'left'
            ],
        ];
        foreach ($routine_steps as $i => $step) : ?>
          <div class="property-wheel__step property-wheel__step--<?php echo esc_attr($step['position']); ?> <?php echo $i===0 ? 'is-active' : ''; ?>" data-routine-step>
            <span class="property-wheel__icon" aria-hidden="true"><?php echo esc_html($step['icon']); ?></span>
            <span class="property-wheel__label"><?php echo esc_html($step['label']); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
      <p class="property-routine__hint">You plan every detail — flights, hotels, and itineraries</p>
    </div>
    
    <div class="property-story">
      <span class="property-story__eyebrow">And rarely do you think</span>
      <h2 class="property-story__heading">What almost no Indian traveller does is plan for the <span>journey going wrong.</span></h2>
      <p class="property-story__description">Not catastrophically wrong. Just wrong enough: a flight delayed by eight hours, a bag that never comes off the belt, a fall on a temple staircase in Kedarnath, a fever in Bangkok where one hospital night costs more than your entire trip budget.</p>
      <!-- <p class="property-story__description" style="margin-top: 15px;">Travel insurance is the financial safety net that activates in exactly those moments. It does not replace your doctor, your family, or your savings. It ensures that an unexpected event on a journey does not become a financial emergency that follows you home.</p> -->
      <div class="property-story__art" role="img" aria-label="Travel insurance protects your journey">
        <div class="property-story__shield">✓</div>
        <div class="property-story__house">✈️</div>
        <div class="property-story__policy"><span>◆ TRAVEL</span><strong>INSURANCE</strong><i></i><i></i><i></i><i></i></div>
        <span class="property-story__art-caption">Protect your journey.</span>
      </div>
    </div>
  </div>

  <div class="property-protection-note">
    <span class="property-protection-note__icon" aria-hidden="true">♢</span>
    <p>Travel insurance is the financial safety net that activates in exactly those moments. It does not replace your doctor, your family, or your savings. It ensures that an unexpected event on a journey does not become a financial emergency that follows you home.</p>
  </div>

  <div class="journey-vault-bg">
    <div class="vault-content">
      <span class="sub-heading">The protection most Indian travellers skip — until something goes wrong on a trip.</span>
      <h2 class="section-title">Understand. <span class="highlight">Evaluate.</span> Act.</h2>
      <p class="section-subtitle">Explore the essentials, assess your coverage options, and take the next step with confidence.</p>
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
      const wheel = document.getElementById('travel-wheel');
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

      const cards = document.querySelectorAll('.travel-journey-section .journey-card[data-layer]');

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