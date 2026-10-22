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
  <!-- Top Floating Frosted Header Arc -->
  <div class="journey-vault-bg">
    <div class="vault-content">
      <!-- <span class="sub-heading"><?php esc_html_e('THE JOURNEY'); ?></span> -->
      <h2 class="section-title">
        <?php esc_html_e('You wake up. You leave for work. You lock the door. Lights off. Gas checked. A familiar turn of the key.  You do this every day — week after week, year after year. And rarely do you think: what if today is different?'); ?> 
       
      </h2>
      <p>

      That is the nature of property loss. It does not announce itself. It arrives quietly — through a leaking pipe, a short circuit, a structural crack, a flood that rises overnight, a fire that spreads faster than expected.
Your home did not come easy. It came through years of saving, decades of EMIs, postponed plans, and patient sacrifice. For most Indians, it is not just where life happens — it is the single largest asset they will ever own.
For millions of small business owners, the situation is even more acute. The shop, the store, the kirana — it is not just property. It is the family's livelihood, built over years, built by hand.
Yet, despite its value, it is often left financially exposed. 

</p>
      <p class="section-subtitle">
        <?php esc_html_e('Property Insurance exists for exactly these ordinary days that end differently—designed to protect not just walls and floors, but everything they represent.'); ?>
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