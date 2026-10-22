<?php
/**
 * Hero Section Template with Background Image & Enhanced Menus
 */

$page_category = 'Evaluate';
$current_step  = 'Evaluate';

$eyebrow     = get_field('hero_eyebrow') ?: 'Property Insurance';
$title_white = get_field('hero_title_white') ?: 'Most people  ';
$title_blue  = get_field('hero_title_blue') ?: 'Buy the wrong policy.';
$description = get_field('hero_description') ?: 'Not the wrong product — the wrong version of it.
Property insurance doesn’t fail people when they buy it.It fails them when they underinsure their home, misjudge reconstruction costs, ignore exclusions, or assume the society’s cover is enough.
Premiums are often misunderstood. So are sum insured, contents valuation, depreciation, and claim conditions.
And when damage occurs, correcting these mistakes is no longer possible.
This section walks you through how property insurance premiums actually work, what adequate cover looks like for your home and life stage, and the myths that lead most buyers astray.';

// Fetch dynamic ACF Background Image or use Unsplash fallback
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image = $bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image = $bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="propertyevaluatehero">
  <div class="propertyevaluatehero-slider-container">
    <div class="propertyevaluatehero-slide active">
      
      <!-- Background Image -->
      <div class="propertyevaluatehero-slide-image-wrapper" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
      
      <!-- Gradient Overlay -->
      <div class="propertyevaluatehero-slide-image-overlay"></div>

      <div class="propertyevaluatehero-inner">
        <div class="propertyevaluatehero-slide-content">
          
          <!-- Top Stage Navigation Menu (Large Buttons) -->
          <nav class="propertyevaluatehero-top-nav-large" aria-label="Main Section Flow">
            <a href="/property-insurance/" class="propertyevaluatehero-nav-large-item">
              <span class="propertyevaluatehero-step-label">00</span>
              <span class="propertyevaluatehero-step-text">Home</span>
            </a>
            <span class="propertyevaluatehero-nav-sep">/</span>
            <a href="/property-understand/" class="propertyevaluatehero-nav-large-item">
              <span class="propertyevaluatehero-step-label">01</span>
              <span class="propertyevaluatehero-step-text">Understand</span>
            </a>
            <span class="propertyevaluatehero-nav-sep">/</span>
            <a href="/property-evaluate/" class="propertyevaluatehero-nav-large-item active">
              <span class="propertyevaluatehero-step-label">02</span>
              <span class="propertyevaluatehero-step-text">Evaluate</span>
            </a>
            <span class="propertyevaluatehero-nav-sep">/</span>
            <a href="/property-act/" class="propertyevaluatehero-nav-large-item">
              <span class="propertyevaluatehero-step-label">03</span>
              <span class="propertyevaluatehero-step-text">Act</span>
            </a>
          </nav>
<br>
  <!-- Eyebrow Pill -->
          <?php if ($eyebrow) : ?>
            <div class="propertyevaluatehero-slide-eyebrow">
              <span class="propertyevaluatehero-eyebrow-dot"></span>
              <?php echo esc_html($eyebrow); ?>
            </div>
          <?php endif; ?>

          <!-- Large Font Location Header -->
          <div class="propertyevaluatehero-page-indicator">
            <!-- <span class="propertyevaluatehero-indicator-category"><?php echo esc_html($page_category); ?></span> -->
            <span class="propertyevaluatehero-indicator-step"><?php echo esc_html($current_step); ?></span>
          </div>

        

          <!-- Main Title -->
          <h1 class="propertyevaluatehero-slide-title">
            <?php echo esc_html($title_white); ?>
            <?php if ($title_blue) : ?>
              <span><?php echo esc_html($title_blue); ?></span>
            <?php endif; ?>
          </h1>

          <!-- Description -->
          <?php if ($description) : ?>
            <p class="propertyevaluatehero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
          <?php endif; ?>

         

        </div>
      </div>
      <!-- Long Navy Sub-Nav Bar (Big Menu Buttons) -->
      <div class="propertyevaluatehero-navy-bar">
        <nav class="propertyevaluatehero-navy-button-group" role="tablist" aria-label="Topic Chapters">
          <a href="#premium-logic" class="propertyevaluatehero-navy-btn active" role="tab">Premium logic</a>
          <!-- <a href="#why-it-matters" class="propertyevaluatehero-navy-btn" role="tab">Real Costs</a> -->
          <a href="#suitability" class="propertyevaluatehero-navy-btn" role="tab">Suitability</a>
          <a href="#fine-print" class="propertyevaluatehero-navy-btn" role="tab">Fine Print</a>
          <a href="#myth-reality" class="propertyevaluatehero-navy-btn" role="tab">Myths</a>
          <a href="#lived-experiences" class="propertyevaluatehero-navy-btn" role="tab">Real Scenarios</a>
        </nav>
      </div>
    </div>
     
  </div>
  
</section>