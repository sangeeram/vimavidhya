<section class="vv-glossary-section">
  <div class="vv-container">
     <header class="vv-glossary-header">
      <h1 class="vv-glossary-header__title">Understand the Insurance Terms</h1>
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

      <!-- Card Main Body -->
      <div class="vv-glossary-card__body">
        
        <!-- Header -->
        <div class="vv-glossary-card__header">
          <div class="vv-glossary-card__title-group">
            <span class="vv-badge">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
              Today's Insurance Word
            </span>
            <h2 class="vv-glossary-card__word">Deductible</h2>
          </div>
        </div>

        <!-- Definition -->
        <p class="vv-glossary-card__desc">
          <strong>Definition:</strong> The fixed amount you pay out-of-pocket for covered services before your insurance carrier begins to cover costs.
        </p>

        <!-- Visual Element: Deductible Breakdown Formula -->
        <div class="vv-glossary-card__visual">
          <div class="vv-visual-step">
            <span class="vv-visual-step__label">Total Claim</span>
            <span class="vv-visual-step__val">$2,000</span>
          </div>
          <span class="vv-visual-operator">&minus;</span>
          <div class="vv-visual-step vv-visual-step--highlight">
            <span class="vv-visual-step__label">Your Deductible</span>
            <span class="vv-visual-step__val">$500</span>
          </div>
          <span class="vv-visual-operator">=</span>
          <div class="vv-visual-step vv-visual-step--success">
            <span class="vv-visual-step__label">Insurance Pays</span>
            <span class="vv-visual-step__val">$1,500</span>
          </div>
        </div>

        <!-- Why It Matters -->
        <div class="vv-glossary-card__desc vv-glossary-card__desc--highlight">
          <strong>Why It Matters:</strong> Choosing a higher deductible lowers your monthly premium payment, whereas a lower deductible reduces your out-of-pocket expenses when filing a claim.
        </div>

        <!-- Action Bar -->
        <div class="vv-glossary-card__actions">
          <a href="#" class="vv-btn--theme">Understand Term &rarr;</a>
          <a href="#" class="vv-btn--outline">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            Go to Glossary
          </a>
        </div>

      </div>

      
    </div>
  </div>
</section>