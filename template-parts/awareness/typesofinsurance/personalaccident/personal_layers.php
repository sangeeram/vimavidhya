<?php
/**
 * Interactive Layered Accordion Section - Personal Accident
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
            'Most Indians who need personal accident insurance don\'t have it — not because it\'s expensive, but because nobody explained how life-altering a disability or injury can be to household income. This section covers what a PA policy actually is, who it\'s for, what it covers, and why it is fundamentally different from health or life insurance. Start here.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('What is PA?', 'vima-vidya'),
                'url'   => home_url('/pa-understand/"#what-is-pa'),
                'icon'  => 'dashicons-shield',
            ],
            
            [
                'title' => __('Types', 'vima-vidya'),
                'url'   => home_url('/pa-understand/#pa-types'),
                'icon'  => 'dashicons-groups',
            ],
            [
                'title' => __('Who Can Buy', 'vima-vidya'),
                'url'   => home_url('/pa-understand/#pa-who-can-bu'),
                'icon'  => 'dashicons-shield-alt',
            ],
            [
                'title' => __('Impact', 'vima-vidya'),
                'url'   => home_url('/pa-understand/#pa-impact'),
                'icon'  => 'dashicons-randomize',
            ],
            [
                'title' => __('PA vs Other Cover', 'vima-vidya'),
                'url'   => home_url('/pa-understand/#pa-insurance-other'),
                'icon'  => 'dashicons-randomize',
            ],
            [
                'title' => __('7 Things ', 'vima-vidya'),
                'url'   => home_url('/pa-understand/#pa-seven-things'),
                'icon'  => 'dashicons-randomize',
            ],
           
        ],

        'cta_text' => __('Start with the basics', 'vima-vidya'),
        'cta_url'  => home_url('/pa-understand/'),
    ],


    // =========================================================
    // 02 — EVALUATE
    // =========================================================
    [
        'class'       => 'card-orange',
        'number'      => '02',
        'title'       => __('Evaluate', 'vima-vidya'),

        'description' => __(
            'Personal accident insurance fails people when they buy arbitrary cover without factoring in income replacement, or misread exclusions like hazardous sports and pre-existing conditions. This section walks you through how premiums work, adequate cover by life stage, and the myths that mislead buyers.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('Premium logic', 'vima-vidya'),
                'url'   => home_url('/pa-evaluate/#premium-logic'),
                'icon'  => 'dashicons-chart-line',
            ],
            [
                'title' => __('Real Costs', 'vima-vidya'),
                'url'   => home_url('/pa-evaluate/#real-costs'),
                'icon'  => 'dashicons-money-alt',
            ],
            [
                'title' => __('Suitability', 'vima-vidya'),
                'url'   => home_url('/pa-evaluate/#suitability'),
                'icon'  => 'dashicons-yes-alt',
            ],
            [
                'title' => __('Fine Print', 'vima-vidya'),
                'url'   => home_url('/pa-evaluate/#fine-print'),
                'icon'  => 'dashicons-media-document',
            ],
            [
                'title' => __('Myths', 'vima-vidya'),
                'url'   => home_url('/pa-evaluate/#myth-reality'),
                'icon'  => 'dashicons-info',
            ],
            [
                'title' => __('Real Scenarios', 'vima-vidya'),
                'url'   => home_url('/pa-evaluate/#lived-experiences'),
                'icon'  => 'dashicons-format-video',
            ],
        ],

        'cta_text' => __('Before you commit to any policy, evaluate', 'vima-vidya'),
        'cta_url'  => home_url('/pa-evaluate/'),
    ],


    // =========================================================
    // 03 — ACT
    // =========================================================
    [
        'class'       => 'card-dark-blue',
        'number'      => '03',
        'title'       => __('Act', 'vima-vidya'),

        'description' => __(
            'Most claim disputes happen due to delayed intimation, missing disability certificates, or incomplete declaration of occupation risk. This section gives you everything you need to apply right, claim fast, and ensure your family receives financial stability when an accident occurs.',
            'vima-vidya'
        ),

        'links' => [
            [
                'title' => __('How to apply', 'vima-vidya'),
                'url'   => home_url('/pa-act/#how-to-apply'),
                'icon'  => 'dashicons-forms',
            ],
            [
                'title' => __('What you can claim', 'vima-vidya'),
                'url'   => home_url('/pa-act/#what-you-can-claim'),
                'icon'  => 'dashicons-yes',
            ],
            [
                'title' => __('Claims Process', 'vima-vidya'),
                'url'   => home_url('/pa-act/#claims-process'),
                'icon'  => 'dashicons-list-view',
            ],
            [
                'title' => __("Do's & Don'ts", 'vima-vidya'),
                'url'   => home_url('/pa-act/#dos-donts'),
                'icon'  => 'dashicons-editor-help',
            ],
            [
                'title' => __('Checklist', 'vima-vidya'),
                'url'   => home_url('/pa-act/#checklist'),
                'icon'  => 'dashicons-clipboard',
            ],
            [
                'title' => __('FAQs', 'vima-vidya'),
                'url'   => home_url('/pa-act/#faqs'),
                'icon'  => 'dashicons-editor-help',
            ],
        ],

        'cta_text' => __('Act with confidence', 'vima-vidya'),
        'cta_url'  => home_url('/pa-act/'),
    ],

];
?>

<section class="journey-accordion-section pa-journey-section" id="personal-layers">
  <!-- Top Header Content -->
  <div class="journey-vault-bg">
    <div class="vault-content">
      <h2 class="section-title">
        <?php esc_html_e('You wake up. You get ready. You commute. You work. You commute again. You return home. You do this every day — five or six days a week, fifty weeks a year. Have you ever thought: what if today is different?'); ?>
      </h2>
      <p>
        That is the nature of accidents. They do not announce themselves. They arrive without warning — on a wet road, on a construction site, in a crowded marketplace, on a staircase at home.
      </p>
      <p class="section-subtitle">
        <?php esc_html_e('Personal Accident Insurance — a product specifically designed to cushion you and your family from the financial shock of such events — remains one of the most undervalued and least purchased insurance products in India.'); ?>
      </p>
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
  const cards = document.querySelectorAll('.pa-journey-section .journey-card[data-layer]');

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