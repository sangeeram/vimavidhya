<?php
/**
 * Travel Evaluate Hero Section Template with Background Image & Enhanced Menus
 */

$page_category = 'Evaluate';
$current_step  = 'Evaluate';

$eyebrow     = get_field('hero_eyebrow') ?: 'Travel Insurance';
$title_white = get_field('hero_title_white') ?: 'Most people ';
$title_blue  = get_field('hero_title_blue') ?: 'buy the wrong policy.';
$description = get_field('hero_description') ?: 'Not the wrong product — the wrong version of it.
A travel insurance policy bought at the airport kiosk in two minutes, for the cheapest possible premium, with no understanding of what it covers or excludes, is not protection. It is paperwork. It will sit in your inbox until something goes wrong — and when something goes wrong, you will discover, at the worst possible moment, exactly what you did not read.
The difference between a policy that pays and a policy that disappoints is almost never the insurer. It is the buyer. The person who understood what they were buying — the sum insured, the exclusions, the claim process, the difference between medical evacuation and hospitalisation cover — walks away whole. The person who bought on price alone walks away with a rejection letter and a bill they cannot afford.';


// Fetch dynamic ACF Background Image or use Unsplash fallback for travel
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image = $bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image = $bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="travelevaluatehero">
  <div class="travelevaluatehero-slider-container">
    <div class="travelevaluatehero-slide active">
      
      <!-- Background Image -->
      <div class="travelevaluatehero-slide-image-wrapper" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
      
      <!-- Gradient Overlay -->
      <div class="travelevaluatehero-slide-image-overlay"></div>

      <div class="travelevaluatehero-inner">
        <div class="travelevaluatehero-slide-content">
          
          <!-- Top Stage Navigation Menu (Large Buttons) -->
          <nav class="travelevaluatehero-top-nav-large" aria-label="Main Section Flow">
            <a href="/travel-insurance/" class="travelevaluatehero-nav-large-item">
              <span class="travelevaluatehero-step-label">00</span>
              <span class="travelevaluatehero-step-text">Home</span>
            </a>
            <span class="travelevaluatehero-nav-sep">/</span>
            <a href="/travel-understand/" class="travelevaluatehero-nav-large-item">
              <span class="travelevaluatehero-step-label">01</span>
              <span class="travelevaluatehero-step-text">Understand</span>
            </a>
            <span class="travelevaluatehero-nav-sep">/</span>
            <a href="/travel-evaluate/" class="travelevaluatehero-nav-large-item active">
              <span class="travelevaluatehero-step-label">02</span>
              <span class="travelevaluatehero-step-text">Evaluate</span>
            </a>
            <span class="travelevaluatehero-nav-sep">/</span>
            <a href="/travel-act/" class="travelevaluatehero-nav-large-item">
              <span class="travelevaluatehero-step-label">03</span>
              <span class="travelevaluatehero-step-text">Act</span>
            </a>
          </nav>
          <br>

          <!-- Eyebrow Pill -->
          <?php if ($eyebrow) : ?>
            <div class="travelevaluatehero-slide-eyebrow">
              <span class="travelevaluatehero-eyebrow-dot"></span>
              <?php echo esc_html($eyebrow); ?>
            </div>
          <?php endif; ?>

          <!-- Large Font Location Header -->
          <div class="travelevaluatehero-page-indicator">
            <span class="travelevaluatehero-indicator-step"><?php echo esc_html($current_step); ?></span>
          </div>

          <!-- Main Title -->
          <h1 class="travelevaluatehero-slide-title">
            <?php echo esc_html($title_white); ?>
            <?php if ($title_blue) : ?>
              <span><?php echo esc_html($title_blue); ?></span>
            <?php endif; ?>
          </h1>

          <!-- Description -->
          <?php if ($description) : ?>
            <p class="travelevaluatehero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
          <?php endif; ?>

        </div>
      </div>

      <!-- Long Navy Sub-Nav Bar (Chapter Buttons) -->
      <div class="travelevaluatehero-navy-bar">
        <nav class="travelevaluatehero-navy-button-group" role="tablist" aria-label="Topic Chapters">
          <a href="#premium-logic" class="travelevaluatehero-navy-btn active" role="tab">Premium Logic</a>
          <a href="#suitability" class="travelevaluatehero-navy-btn" role="tab">Suitability</a>
          <a href="#evaluate-policy-considerations" class="travelevaluatehero-navy-btn" role="tab">Buying a Policy</a>
          <a href="#travel-evaluate-myths" class="travelevaluatehero-navy-btn" role="tab">Myths</a>
          <a href="#evaluate-travel-real-scenerios" class="travelevaluatehero-navy-btn" role="tab">Real Scenarios</a>
        </nav>
      </div>

    </div>
  </div>
</section>