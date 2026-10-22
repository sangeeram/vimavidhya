<section class="vv-glossary-section">
  <div class="vv-container">
    <header class="vv-glossary-header">
      <h1 class="vv-glossary-header__title">Understand the Insurance Glossary</h1>
      <p class="vv-glossary-header__subtitle">Explore key definitions and examples to better navigate your coverage.</p>
    </header>
    
    <div class="vv-glossary-card">
      <!-- Horizontal Alphabet Strip Top Bar -->
      <nav class="vv-glossary-card__alphabet-bar" aria-label="Alphabet Navigation">
        <?php 
          $letters = range('A', 'Z');
          foreach ($letters as $letter) {
              $class = ($letter === 'D') ? 'current-word' : '';
              echo '<a href="#" class="' . $class . '">' . $letter . '</a>';
          }
        ?>
      </nav>

      <!-- Card Main Body with Two-Column Split -->
      <div class="vv-glossary-card__body">
        
        <!-- Left Column: Word & Actions -->
        <div class="vv-glossary-card__left-col">
          <div class="vv-glossary-card__title-group">
            <span class="vv-badge">
              Today's Glossary Word
            </span>
            <h2 class="vv-glossary-card__word">Assignment</h2>
          </div>

          <p class="vv-glossary-card__desc">
            The legal process of transferring policy rights and benefits to another party or financial institution.
          </p>

          <div class="vv-glossary-card__actions">
            <a href="#" class="vv-btn--theme">Understand Term &rarr;</a>
            <a href="#" class="vv-btn--outline">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
              Go to Glossary
            </a>
          </div>
        </div>

        <!-- Right Column: Navigation Tabs & Dynamic Content Block -->
        <div class="vv-glossary-card__right-col">
          
          <!-- Tab Navigation Bar -->
          <nav class="vv-glossary-tabs" role="tablist">
            <button class="vv-tab-btn" role="tab" aria-selected="false" data-tab="introduction">Introduction</button>
            <button class="vv-tab-btn active" role="tab" aria-selected="true" data-tab="description">Description</button>
            <button class="vv-tab-btn" role="tab" aria-selected="false" data-tab="case-study">Case study</button>
          </nav>

          <!-- Tab Content Container -->
          <div class="vv-tab-content-container">
            
            <!-- Tab 1: Introduction -->
            <div class="vv-tab-pane" id="tab-introduction">
              <div class="vv-detail-group">
                <h4 class="vv-detail-label">Overview</h4>
                <p class="vv-detail-text">An introduction to understanding how policy assignment functions across standard insurance contracts.</p>
              </div>
            </div>

            <!-- Tab 2: Description -->
            <div class="vv-tab-pane active" id="tab-description">
              <div class="vv-detail-group">
                <h4 class="vv-detail-label">What</h4>
                <p class="vv-detail-text">Assignment is the legal process of giving the rights of a policy to someone else, often to a bank or a lender.</p>
              </div>

              <div class="vv-detail-group">
                <h4 class="vv-detail-label">Why</h4>
                <p class="vv-detail-text">It is useful when the policy is used as a security for a loan.</p>
              </div>

              <div class="vv-detail-group">
                <h4 class="vv-detail-label">How</h4>
                <p class="vv-detail-text">The policyholder submits an assignment request to the insurance company.</p>
              </div>
            </div>

            <!-- Tab 3: Case Study -->
            <div class="vv-tab-pane" id="tab-case-study">
              <div class="vv-detail-group">
                <h4 class="vv-detail-label">Scenario:</h4>
                <p class="vv-detail-text">Mr. Sharma took a life policy and assigned it to a bank for a home loan.</p>
              </div>

              <div class="vv-detail-group">
                <h4 class="vv-detail-label">Event:</h4>
                <p class="vv-detail-text">If he dies, the claim will first go to the bank.</p>
              </div>

              <div class="vv-detail-group">
                <h4 class="vv-detail-label">Application:</h4>
                <p class="vv-detail-text">Assignment ensures loan repayment.</p>
              </div>

              <div class="vv-detail-group">
                <h4 class="vv-detail-label">Outcome:</h4>
                <p class="vv-detail-text">His family won't be burdened with debt.</p>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
  const tabButtons = document.querySelectorAll('.vv-tab-btn');
  const tabPanes = document.querySelectorAll('.vv-tab-pane');

  tabButtons.forEach(button => {
    button.addEventListener('click', () => {
      const targetTabId = button.getAttribute('data-tab');

      // 1. Reset state on all buttons and panes
      tabButtons.forEach(btn => {
        btn.classList.remove('active');
        btn.setAttribute('aria-selected', 'false');
      });

      tabPanes.forEach(pane => {
        pane.classList.remove('active');
      });

      // 2. Set active state on target button and pane
      button.classList.add('active');
      button.setAttribute('aria-selected', 'true');

      const targetPane = document.getElementById(`tab-${targetTabId}`);
      if (targetPane) {
        targetPane.classList.add('active');
      }
    });
  });
});
</script>