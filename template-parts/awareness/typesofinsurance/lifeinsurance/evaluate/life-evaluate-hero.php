<?php
/**
 * Vima Vidya — Life Insurance Evaluate Hero Section
 */

$page_category = 'Evaluate';$current_step  = 'Evaluate';

$eyebrow     = get_field('hero_eyebrow') ?: 'Layer 2 · Evaluate before you buy';
$title_white = get_field('hero_title_white') ?: 'Most people ';
$title_blue  = get_field('hero_title_blue') ?: 'buy the wrong policy.';$description = get_field('hero_description') ?: 'Not the wrong product — but the wrong version of it.
Life insurance doesn’t fail people when they buy it.

It fails when cover is sized to affordability instead of responsibility, when complexity is mistaken for value, or when employer cover is treated as a safety net.
Premiums, charges, guarantees, and exclusions are widely misunderstood. And once a claim arises, there is no scope to correct the mistake.
This section helps you understand how premiums work across product types, what adequate cover looks like at each life stage, and the myths that keep families under-protected.

Evaluate before you buy
Premium logic by product · Suitability by life stage · Fine print that matters · Myths vs reality · Real-world scenarios';

// Fetch dynamic ACF Background Image or use Unsplash fallback
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image =$bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image =$bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="lifeevaluatehero">
  <div class="lifeevaluatehero-slider-container">
    <div class="lifeevaluatehero-slide active">
      
      <!-- Background Image -->
      <div class="lifeevaluatehero-slide-image-wrapper" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
      
      <!-- Gradient Overlay -->
      <div class="lifeevaluatehero-slide-image-overlay"></div>

      <div class="lifeevaluatehero-inner">
        <div class="lifeevaluatehero-slide-content">
          
          <!-- Top Stage Navigation Menu (Large Buttons) -->
          <nav class="lifeevaluatehero-top-nav-large" aria-label="Main Section Flow">
            <a href="/life-insurance/" class="lifeevaluatehero-nav-large-item">
              <span class="lifeevaluatehero-step-label">00</span>
              <span class="lifeevaluatehero-step-text">Home</span>
            </a>
            <span class="lifeevaluatehero-nav-sep">/</span>
            <a href="/life-understand/" class="lifeevaluatehero-nav-large-item">
              <span class="lifeevaluatehero-step-label">01</span>
              <span class="lifeevaluatehero-step-text">Understand</span>
            </a>
            <span class="lifeevaluatehero-nav-sep">/</span>
            <a href="/life-evaluate/" class="lifeevaluatehero-nav-large-item active">
              <span class="lifeevaluatehero-step-label">02</span>
              <span class="lifeevaluatehero-step-text">Evaluate</span>
            </a>
            <span class="lifeevaluatehero-nav-sep">/</span>
            <a href="/life-act/" class="lifeevaluatehero-nav-large-item">
              <span class="lifeevaluatehero-step-label">03</span>
              <span class="lifeevaluatehero-step-text">Act</span>
            </a>
          </nav>
          <br>

          <!-- Eyebrow Pill -->
          <?php if ($eyebrow) : ?>
            <div class="lifeevaluatehero-slide-eyebrow">
              <span class="lifeevaluatehero-eyebrow-dot"></span>
              <?php echo esc_html($eyebrow); ?>
            </div>
          <?php endif; ?>

          <!-- Large Font Location Header -->
          <div class="lifeevaluatehero-page-indicator">
            <span class="lifeevaluatehero-indicator-step"><?php echo esc_html($current_step); ?></span>
          </div>

          <!-- Main Title -->
          <h1 class="lifeevaluatehero-slide-title">
            <?php echo esc_html($title_white); ?>
            <?php if ($title_blue) : ?>
              <span><?php echo esc_html($title_blue); ?></span>
            <?php endif; ?>
          </h1>

          <!-- Description -->
          <?php if ($description) : ?>
            <p class="lifeevaluatehero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
          <?php endif; ?>

        </div>
      </div>

      <!-- Long Navy Sub-Nav Bar (Big Menu Buttons) -->
      <div class="lifeevaluatehero-navy-bar">
        <nav class="lifeevaluatehero-navy-button-group" role="tablist" aria-label="Topic Chapters">
          <a href="#premium-logic" class="lifeevaluatehero-navy-btn active" role="tab">Premium logic</a>
          <a href="#evaluate-life-lifestages" class="lifeevaluatehero-navy-btn" role="tab">Suitability</a>
          <a href="#evaluate-life-policy-considerations" class="lifeevaluatehero-navy-btn" role="tab">Fine Print</a>
          <a href="#life-evaluate-myths" class="lifeevaluatehero-navy-btn" role="tab">Myths</a>
          <a href="#evaluate-life-real-scenerios" class="lifeevaluatehero-navy-btn" role="tab">Real Scenarios</a>
        </nav>
      </div>

    </div>
  </div>
</section>