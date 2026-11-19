<?php
/**
 * Vima Vidya — Health Evaluate Hero Section Template with Background Image & Enhanced Menus
 */

$page_category = 'Evaluate';$current_step  = 'Evaluate';

$eyebrow     = get_field('hero_eyebrow') ?: 'Health Insurance';$title_white = get_field('hero_title_white') ?: 'Most people ';
$title_blue  = get_field('hero_title_blue') ?: 'buy the wrong health policy.';$description = get_field('hero_description') ?: 'Not the wrong product — the wrong version of it.
A health insurance policy bought in two minutes for the cheapest premium, with no understanding of waiting periods, room rent sub-limits, co-pay clauses, or restoration benefits, is not protection. It is paperwork. It will sit in your drawer until a medical emergency strikes — and when it does, you will discover, at the worst possible moment, exactly what you did not read.
The difference between a claim that settles seamlessly and a claim that gets entangled in deductions is almost never the hospital. It is the buyer. The person who understood what they were buying walks away fully covered; the person who bought on price alone walks away with a massive out-of-pocket hospital bill.';

// Fetch dynamic ACF Background Image or use Unsplash fallback for healthcare
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image =$bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image =$bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="healthevaluatehero">
  <div class="healthevaluatehero-slider-container">
    <div class="healthevaluatehero-slide active">
      
      <!-- Background Image -->
      <div class="healthevaluatehero-slide-image-wrapper" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
      
      <!-- Gradient Overlay -->
      <div class="healthevaluatehero-slide-image-overlay"></div>

      <div class="healthevaluatehero-inner">
        <div class="healthevaluatehero-slide-content">
          
          <!-- Top Stage Navigation Menu (Large Buttons) -->
          <nav class="healthevaluatehero-top-nav-large" aria-label="Main Section Flow">
            <a href="/health-insurance/" class="healthevaluatehero-nav-large-item">
              <span class="healthevaluatehero-step-label">00</span>
              <span class="healthevaluatehero-step-text">Home</span>
            </a>
            <span class="healthevaluatehero-nav-sep">/</span>
            <a href="/health-understand/" class="healthevaluatehero-nav-large-item">
              <span class="healthevaluatehero-step-label">01</span>
              <span class="healthevaluatehero-step-text">Understand</span>
            </a>
            <span class="healthevaluatehero-nav-sep">/</span>
            <a href="/health-evaluate/" class="healthevaluatehero-nav-large-item active">
              <span class="healthevaluatehero-step-label">02</span>
              <span class="healthevaluatehero-step-text">Evaluate</span>
            </a>
            <span class="healthevaluatehero-nav-sep">/</span>
            <a href="/health-act/" class="healthevaluatehero-nav-large-item">
              <span class="healthevaluatehero-step-label">03</span>
              <span class="healthevaluatehero-step-text">Act</span>
            </a>
          </nav>
          <br>

          <!-- Eyebrow Pill -->
          <?php if ($eyebrow) : ?>
            <div class="healthevaluatehero-slide-eyebrow">
              <span class="healthevaluatehero-eyebrow-dot"></span>
              <?php echo esc_html($eyebrow); ?>
            </div>
          <?php endif; ?>

          <!-- Large Font Location Header -->
          <div class="healthevaluatehero-page-indicator">
            <span class="healthevaluatehero-indicator-step"><?php echo esc_html($current_step); ?></span>
          </div>

          <!-- Main Title -->
          <h1 class="healthevaluatehero-slide-title">
            <?php echo esc_html($title_white); ?>
            <?php if ($title_blue) : ?>
              <span><?php echo esc_html($title_blue); ?></span>
            <?php endif; ?>
          </h1>

          <!-- Description -->
          <?php if ($description) : ?>
            <p class="healthevaluatehero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
          <?php endif; ?>

        </div>
      </div>

      <!-- Long Navy Sub-Nav Bar (Chapter Buttons) -->
      <div class="healthevaluatehero-navy-bar">
        <nav class="healthevaluatehero-navy-button-group" role="tablist" aria-label="Topic Chapters">
          <a href="#evaluate-health-premiums" class="healthevaluatehero-navy-btn active" role="tab">Premium Logic</a>
          <a href="#evaluate-health-lifestages" class="healthevaluatehero-navy-btn" role="tab">Suitability</a>
          <a href="#evaluate-policy-considerations" class="healthevaluatehero-navy-btn" role="tab">Buying a Policy</a>
          <a href="#health-evaluate-myths" class="healthevaluatehero-navy-btn" role="tab">Myths</a>
          <a href="#evaluate-health-real-scenerios" class="healthevaluatehero-navy-btn" role="tab">Real Scenarios</a>
        </nav>
      </div>

      
    </div>
  </div>
</section>