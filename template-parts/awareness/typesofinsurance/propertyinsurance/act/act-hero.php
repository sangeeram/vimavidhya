<?php
/**
 * Hero Section Template with Background Image & Enhanced Menus (Act Section)
 */

$page_category = 'Act';
$current_step  = 'Act';

$eyebrow     = get_field('hero_eyebrow') ?: 'Property Insurance';
$title_white = get_field('hero_title_white') ?: 'Knowing ';
$title_blue  = get_field('hero_title_blue') ?: 'is not enough.';
$description = get_field('hero_description') ?: 'A property insurance policy that sits in a drawer helps no one.
Most property insurance claim failures aren’t caused by bad policies.
They happen because of missed intimation timelines, incorrect documentation, unclear ownership details, or steps no one explained at the time of purchase.
When damage occurs — fire, flood, seepage, theft, or structural impact —what you do next determines what your policy pays.

This section gives you everything you need to buy correctly, document properly, and navigate claims with confidence, so protection works when it’s needed most.
The right paperwork. The right process. The right questions — before you sign.
';

// Sub-nav Section Header Title
$subnav_title = get_field('hero_subnav_title') ?: 'Act with confidence';

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

<section class="propertyacthero">
  <div class="propertyacthero-slider-container">
    <div class="propertyacthero-slide active">
      
      <!-- Background Image -->
      <div class="propertyacthero-slide-image-wrapper" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
      
      <!-- Gradient Overlay -->
      <div class="propertyacthero-slide-image-overlay"></div>

      <div class="propertyacthero-inner">
        <div class="propertyacthero-slide-content">
          
          <!-- Top Stage Navigation Menu (Large Buttons) -->
          <nav class="propertyacthero-top-nav-large" aria-label="Main Section Flow">
            <a href="/property-insurance/" class="propertyacthero-nav-large-item">
              <span class="propertyacthero-step-label">00</span>
              <span class="propertyacthero-step-text">Home</span>
            </a>
            <span class="propertyacthero-nav-sep">/</span>
            <a href="/property-understand/" class="propertyacthero-nav-large-item">
              <span class="propertyacthero-step-label">01</span>
              <span class="propertyacthero-step-text">Understand</span>
            </a>
            <span class="propertyacthero-nav-sep">/</span>
            <a href="/property-evaluate/" class="propertyacthero-nav-large-item">
              <span class="propertyacthero-step-label">02</span>
              <span class="propertyacthero-step-text">Evaluate</span>
            </a>
            <span class="propertyacthero-nav-sep">/</span>
            <a href="/property-act/" class="propertyacthero-nav-large-item active">
              <span class="propertyacthero-step-label">03</span>
              <span class="propertyacthero-step-text">Act</span>
            </a>
          </nav>
          <br>

          <!-- Header Row (Eyebrow Pill & Page Indicator Side-by-Side) -->
          <div class="propertyacthero-header-row">
            <!-- Eyebrow Pill -->
            <?php if ($eyebrow) : ?>
              <div class="propertyacthero-slide-eyebrow">
                <span class="propertyacthero-eyebrow-dot"></span>
                <?php echo esc_html($eyebrow); ?>
              </div>
            <?php endif; ?>

            <!-- Large Font Location Header -->
            <div class="propertyacthero-page-indicator">
              <span class="propertyacthero-indicator-step"><?php echo esc_html($current_step); ?></span>
            </div>
          </div>

          <!-- Main Title -->
          <h1 class="propertyacthero-slide-title">
            <?php echo esc_html($title_white); ?>
            <?php if ($title_blue) : ?>
              <span><?php echo esc_html($title_blue); ?></span>
            <?php endif; ?>
          </h1>

          <!-- Description -->
          <?php if ($description) : ?>
            <p class="propertyacthero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
          <?php endif; ?>

        </div>
      </div>

      <!-- Long Navy Sub-Nav Bar Container -->
      <div class="propertyacthero-navy-wrapper">
        <!-- Sub-Nav Title Above Navy Bar -->
        <?php if ($subnav_title) : ?>
          <h2 class="propertyacthero-navy-title"><?php echo esc_html($subnav_title); ?></h2>
        <?php endif; ?>

        <div class="propertyacthero-navy-bar">
          <nav class="propertyacthero-navy-button-group" role="tablist" aria-label="Topic Chapters">
            <a href="#how-to-apply" class="propertyacthero-navy-btn active" role="tab">How to apply</a>
            <a href="#dos-donts" class="propertyacthero-navy-btn" role="tab">Do's & Don'ts</a>
            <a href="#what-you-can-claim" class="propertyacthero-navy-btn" role="tab">What you can claim</a>
            <a href="#claims-process" class="propertyacthero-navy-btn" role="tab">Claims process</a>
            
            <a href="#checklist" class="propertyacthero-navy-btn" role="tab">Checklist</a>
            <!-- <a href="#templates" class="propertyacthero-navy-btn" role="tab">FAQs</a> -->
          </nav>
        </div>
      </div>

    </div>
  </div>
</section>