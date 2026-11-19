<?php
/**
 * Interactive Layered Accordion Section (Motor Insurance)
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
            'Most Indians have motor insurance. Very few actually understand what it protects. For many, it’s a renewal reminder, a cheapest-price decision, or a legal checkbox. But motor insurance is designed to do far more — protect your vehicle, the people inside it, others on the road, and your family’s financial stability when something goes wrong. This section explains what motor insurance really is, why it matters, what it covers (and doesn’t), and what’s at stake when coverage is misunderstood or incomplete.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('What is Motor Insurance', 'vima-vidya'),
                'url'   => home_url('/motor-understand/#motor-insurance'),
                'icon'  => 'dashicons-shield',
            ],
            [
                'title' => __('Types', 'vima-vidya'),
                'url'   => home_url('/motor-understand/#motor-types'),
                'icon'  => 'dashicons-list-view',
            ],
            [
                'title' => __('Who can buy', 'vima-vidya'),
                'url'   => home_url('/motor-understand/#motor-types-master'),
                'icon'  => 'dashicons-groups',
            ],
            [
                'title' => __('Impact', 'vima-vidya'),
                'url'   => home_url('/motor-understand/#motor-addons'),
                'icon'  => 'dashicons-shield-alt',
            ],
            [
                'title' => __('Motor vs other cover', 'vima-vidya'),
                'url'   => home_url('/motor-understand/#motor-vs-pa'),
                'icon'  => 'dashicons-randomize',
            ],
            [
                'title' => __('7 things to know', 'vima-vidya'),
                'url'   => home_url('/motor-understand/#motor-seven-things'),
                'icon'  => 'dashicons-location',
            ],
        ],

        'cta_text' => __('Start with the basics', 'vima-vidya'),
        'cta_url'  => home_url('/motor-understand/'),
    ],


    // =========================================================
    // 02 — EVALUATE
    // =========================================================
    [
        'class'       => 'card-orange',
        'number'      => '02',
        'title'       => __('Evaluate', 'vima-vidya'),

        'description' => __(
            'Most people buy the wrong policy. Not the wrong product — the wrong version of it. Motor insurance doesn’t fail people when they buy it. It fails them when they opt for the cheapest cover, underestimate risk, skip critical add-ons, or assume everything is covered when it isn’t. Premiums are misunderstood. So are deductibles, depreciation, claim limits, and exclusions. This section helps you understand how motor insurance premiums actually work, what adequate cover looks like for your vehicle and life stage, and the myths that lead most buyers astray.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('Premium logic', 'vima-vidya'),
                'url'   => home_url('/motor-evaluate/#evaluate-motor-premiums'),
                'icon'  => 'dashicons-chart-line',
            ],
            // [
            //     'title' => __('Real costs', 'vima-vidya'),
            //     'url'   => home_url('/motor-evaluate/#real-costs'),
            //     'icon'  => 'dashicons-money-alt',
            // ],
            [
                'title' => __('Suitability', 'vima-vidya'),
                'url'   => home_url('/motor-evaluate/#evaluate-motor-lifestages'),
                'icon'  => 'dashicons-yes-alt',
            ],
            [
                'title' => __('Buying a Policy', 'vima-vidya'),
                'url'   => home_url('/motor-evaluate/#evaluate-policy-considerations'),
                'icon'  => 'dashicons-media-document',
            ],
            [
                'title' => __('Myths', 'vima-vidya'),
                'url'   => home_url('/motor-evaluate/#motor-evaluate-myths'),
                'icon'  => 'dashicons-info',
            ],
            [
                'title' => __('Real Scenarios', 'vima-vidya'),
                'url'   => home_url('/motor-evaluate/#evaluate-motor-real-scenerios'),
                'icon'  => 'dashicons-format-video',
            ],
        ],

        'cta_text' => __('Evaluate before you buy', 'vima-vidya'),
        'cta_url'  => home_url('/motor-evaluate/'),
    ],


    // =========================================================
    // 03 — ACT
    // =========================================================
    [
        'class'       => 'card-dark-blue',
        'number'      => '03',
        'title'       => __('Act', 'vima-vidya'),

        'description' => __(
            'Knowing is not enough. A motor insurance policy that sits in a drawer helps no one. Most motor insurance claim problems aren’t caused by bad policies. They’re caused by missed steps, wrong assumptions, incomplete documents, or not knowing how the process actually works. This section gives you everything you need to buy correctly, navigate claims smoothly, and make sure your policy works when you need it most — whether it’s a minor repair or a serious accident.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('How to apply', 'vima-vidya'),
                'url'   => home_url('/motor-act/#how-to-apply'),
                'icon'  => 'dashicons-forms',
            ],
            // [
            //     'title' => __('What you can claim', 'vima-vidya'),
            //     'url'   => home_url('/motor-act/#what-you-can-claim'),
            //     'icon'  => 'dashicons-yes',
            // ],
            [
                'title' => __('Claims Process', 'vima-vidya'),
                'url'   => home_url('/motor-act/#claims-process'),
                'icon'  => 'dashicons-list-view',
            ],
            [
                'title' => __("Do's & Don'ts", 'vima-vidya'),
                'url'   => home_url('/motor-act/#dos-donts'),
                'icon'  => 'dashicons-editor-help',
            ],
            [
                'title' => __('Checklist', 'vima-vidya'),
                'url'   => home_url('/motor-act/#motor-checklist'),
                'icon'  => 'dashicons-clipboard',
            ],
            // [
            //     'title' => __('FAQs', 'vima-vidya'),
            //     'url'   => home_url('/motor-act/#faqs'),
            //     'icon'  => 'dashicons-editor-help',
            // ],
        ],

        'cta_text' => __('Act with confidence', 'vima-vidya'),
        'cta_url'  => home_url('/motor-act/'),
    ],

];
?>

<section class="journey-accordion-section motor-journey-accordion">
  <!-- Top Section: 2-Column Visual Header -->
  <div class="journey-vault-bg">
    <div class="vault-hero-grid">
      
      <!-- LEFT COLUMN: Timeline Routine -->
      <div class="vault-col-left">
        <div class="routine-header">
          <h3><?php esc_html_e('MOTOR INSURANCE', 'vima-vidya'); ?></h3>
        </div>

        <ul class="routine-timeline">
          <li>
            <span class="dot"></span>
            <span class="text"><?php esc_html_e('You buy a vehicle.', 'vima-vidya'); ?></span>
          </li>
          <li>
            <span class="dot"></span>
            <span class="text"><?php esc_html_e('You drive to work.', 'vima-vidya'); ?></span>
          </li>
          <li>
            <span class="dot"></span>
            <span class="text"><?php esc_html_e('You drop the children at school.', 'vima-vidya'); ?></span>
          </li>
          <li>
            <span class="dot"></span>
            <span class="text"><?php esc_html_e('You carry groceries home.', 'vima-vidya'); ?></span>
          </li>
          <li>
            <span class="dot"></span>
            <span class="text"><?php esc_html_e('You visit parents on weekends.', 'vima-vidya'); ?></span>
          </li>
          <li>
            <span class="dot active-dot"></span>
            <span class="text bold-text"><?php esc_html_e('Every single day on the road.', 'vima-vidya'); ?></span>
          </li>
        </ul>

        <div class="routine-footer">
          <p><?php esc_html_e('Every single day, millions of Indians are on the road — and every single day,', 'vima-vidya'); ?></p>
        </div>
      </div>

      <!-- RIGHT COLUMN: Main Content & Visual Card -->
      <div class="vault-col-right">
        <div class="vault-eyebrow"><?php esc_html_e('HAVE YOU EVER THOUGHT?', 'vima-vidya'); ?></div>
        
        <h2 class="section-title">
          <?php esc_html_e('What if today is different?', 'vima-vidya'); ?>
        </h2>

        <p class="section-lead-text">
          <?php esc_html_e(' ~473 (based on the 2023 MoRTH report) of them don\'t return home. That is still the reality of Indian roads in 2026.', 'vima-vidya'); ?>
        </p>

        <!-- Illustration Card -->
        <div class="vault-illustration-card">
          <img 
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/typesofinsurance/motorinsurance/home/motor-hero-illustration.svg'); ?>" 
            alt="<?php esc_attr_e('Motor Insurance Protection', 'vima-vidya'); ?>" 
            class="illustration-img"
          />
        </div>

        <!-- Bottom Highlighted Callout Box -->
        <div class="vault-highlight-callout">
          <div class="callout-icon">
            <i class="dashicons dashicons-shield"></i>
          </div>
          <p class="callout-text">
            <?php esc_html_e('Yet motor insurance — a product specifically designed to protect you, your vehicle, the other people on the road, and your family\'s financial security — remains poorly understood, under-purchased, and in many cases bought for entirely the wrong reasons.', 'vima-vidya'); ?>
          </p>
        </div>
      </div>

    </div>
  </div>

  <!-- Bottom Cards Container (Accordion) -->
  <div class="cards-container">
    <?php foreach ($layers as $index =>$layer) : ?>
      <article class="journey-card <?php echo esc_attr($layer['class']); ?> <?php echo$index === 0 ? 'is-expanded' : ''; ?>" data-layer>
        
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
                  <?php foreach ($layer['links'] as$link) : ?>
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
  const section = document.querySelector('.motor-journey-accordion');
  if (!section) return;

  const cards = section.querySelectorAll('.journey-card[data-layer]');

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