<?php
$stageData = [
    'badge' => 'New Job',
    'subtitle' => 'Young Professional',
    'focus_title' => 'Protecting your dreams as you begin your career',
    'focus_desc' => 'Your first job is the start of your financial independence. You are building a career, managing your own expenses, maybe buying your first car or setting up your own space. The decisions you make about money right now — including insurance — will shape your financial journey for decades to come.',
    'sections' => [
        [
            'id' => 'sec1',
            'title' => 'How Insurance Helps You',
            'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
            'type' => 'bullets',
            'items' => [
                'Shields you from unexpected events — illness, accidents, or loss of assets — that could derail your career and savings.',
                'Premiums are lowest when purchased young and healthy, making coverage cost effective now and later.',
                'Early policies ensure you qualify easily, especially for health insurance, securing coverage when you need it most.',
                'Locks in affordable premiums and builds disciplined financial habits, reducing financial anxiety.'
            ]
        ],
        [
            'id' => 'sec2',
            'title' => 'The Right Coverage for This Stage',
            'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
            'type' => 'coverage',
            'prioritise' => [
                ['title' => 'Health insurance', 'desc' => 'to cover medical costs early and avoid exclusions later'],
                ['title' => 'Term life insurance', 'desc' => 'for income replacement if you have dependents'],
                ['title' => 'Personal accident cover', 'desc' => 'for unforeseen events']
            ]
        ],
        [
            'id' => 'sec3',
            'title' => 'Smart Additions',
            'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>',
            'type' => 'bullets_bold',
            'items' => [
                ['title' => 'Motor insurance', 'desc' => 'for your vehicle'],
                ['title' => 'Home or renters insurance', 'desc' => 'for your living space'],
                ['title' => 'Critical illness coverage', 'desc' => 'to protect against high medical expenses']
            ]
        ],
        [
            'id' => 'sec4',
            'title' => 'Explore Cover Types Relevant to This Stage',
            'icon' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>',
            'type' => 'tags',
            'tags' => ['Life', 'Health', 'Personal Accident', 'Motor']
        ]
    ],
    'insight_banner' => [
        'title' => 'The bigger picture',
        'desc' => "Insurance isn't just about covering risks — it's about future proofing your financial journey. Securing protection early lets you focus on career growth, investments, and lifestyle goals without fear of setbacks."
    ]
];
?>

<section class="awareness-section">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header">
      <h2 class="header-title">
        Insurance: <span class="highlight">A safety net</span> that protects you across life’s stages
      </h2>
      <p class="header-description">
        Insurance is simply a safety net: you pay a small regular fee or a one-time lump sum, and in return the insurer takes on the risk of big, unexpected costs—like accidents, illness, or damage to your home or car. It’s a contract that shields you from heavy financial blows by shifting the burden to the insurer so you are never left carrying it alone.
      </p>
      <p class="header-callout">
        <strong>Insurance isn’t about fear — it’s about preparation, whichever life stage you may be in.</strong>
      </p>
      
      <div class="header-cta">
        <h3 class="cta-question">Are you actually insured well?</h3>
        <p class="cta-instruction">Select your life stage below to see what cover you should have in place right now.</p>
      </div>
    </div>

    <!-- Accordion Card Component -->
    <div class="accordion-card">
      <!-- Card Banner -->
      <div class="card-header">
        <div class="header-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7h-3a2 2 0 0 1-2-2V2"/><path d="M9 18a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h7l4 4v10a2 2 0 0 1-2 2Z"/></svg>
        </div>
        <div>
          <h4 class="stage-title"><?php echo htmlspecialchars($stageData['badge']); ?></h4>
          <p class="stage-subtitle"><?php echo htmlspecialchars($stageData['subtitle']); ?></p>
        </div>
      </div>

      <!-- Focus Summary -->
      <div class="focus-section">
        <p class="focus-title"><strong>Your focus:</strong> <?php echo htmlspecialchars($stageData['focus_title']); ?></p>
        <p class="focus-desc"><?php echo htmlspecialchars($stageData['focus_desc']); ?></p>
      </div>

      <!-- Accordion List -->
      <div class="accordion-group">
        <?php foreach ($stageData['sections'] as $index => $sec): ?>
          <div class="accordion-item <?php echo $index === 0 ? 'is-open' : ''; ?>">
            <button class="accordion-trigger" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>">
              <div class="trigger-left">
                <div class="item-icon"><?php echo $sec['icon']; ?></div>
                <span class="item-title"><?php echo htmlspecialchars($sec['title']); ?></span>
              </div>
              <svg class="chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
            </button>
            
            <div class="accordion-content">
              <div class="content-inner">
                <?php if ($sec['type'] === 'bullets'): ?>
                  <ul class="bullet-list">
                    <?php foreach ($sec['items'] as $item): ?>
                      <li><?php echo htmlspecialchars($item); ?></li>
                    <?php endforeach; ?>
                  </ul>

                <?php elseif ($sec['type'] === 'coverage'): ?>
                  <div class="coverage-grid">
                    <div>
                      <h5 class="sub-heading">Prioritise these:</h5>
                      <ul class="bullet-list">
                        <?php foreach ($sec['prioritise'] as $item): ?>
                          <li><strong><?php echo htmlspecialchars($item['title']); ?></strong> — <?php echo htmlspecialchars($item['desc']); ?></li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>

                <?php elseif ($sec['type'] === 'bullets_bold'): ?>
                  <ul class="bullet-list">
                    <?php foreach ($sec['items'] as $item): ?>
                      <li><strong><?php echo htmlspecialchars($item['title']); ?></strong> <?php echo htmlspecialchars($item['desc']); ?></li>
                    <?php endforeach; ?>
                  </ul>

                <?php elseif ($sec['type'] === 'tags'): ?>
                  <div class="tags-container">
                    <?php foreach ($sec['tags'] as $tag): ?>
                      <a href="#" class="tag-btn"><?php echo htmlspecialchars($tag); ?> &rarr;</a>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Insight Dark Banner -->
      <div class="insight-banner">
        <div class="banner-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .23 2.23 1.5 3.5A4.61 4.61 0 0 1 8.91 14"/></svg>
        </div>
        <div>
          <div class="insight-title"><?php echo htmlspecialchars($stageData['insight_banner']['title']); ?></div>
          <p class="insight-text"><?php echo htmlspecialchars($stageData['insight_banner']['desc']); ?></p>
        </div>
      </div>

      <!-- Card Footer -->
      <div class="card-footer">
        <button class="footer-btn"><?php echo htmlspecialchars($stageData['badge']); ?></button>
      </div>
    </div>
  </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {
  const triggers = document.querySelectorAll('.accordion-trigger');

  triggers.forEach(trigger => {
    trigger.addEventListener('click', () => {
      const currentItem = trigger.closest('.accordion-item');
      const isOpen = currentItem.classList.contains('is-open');

      // Close all accordions in the same group (Single Expand mode)
      const allItems = currentItem.parentElement.querySelectorAll('.accordion-item');
      allItems.forEach(item => {
        item.classList.remove('is-open');
        item.querySelector('.accordion-trigger').setAttribute('aria-expanded', 'false');
      });

      // Toggle current accordion state
      if (!isOpen) {
        currentItem.classList.add('is-open');
        trigger.setAttribute('aria-expanded', 'true');
      }
    });
  });
});
</script>