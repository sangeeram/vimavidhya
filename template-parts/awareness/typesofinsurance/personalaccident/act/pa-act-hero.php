<?php
/**
 * Hero Section Template with Background Image & Enhanced Menus (Personal Accident - Act Section)
 */

$page_category = 'Act';
$current_step  = 'Act';

$eyebrow     = get_field('hero_eyebrow') ?: 'Personal Accident';
$title_white = get_field('hero_title_white') ?: "Knowing is not enough.\nA policy that sits in a drawer";
$title_blue  = get_field('hero_title_blue') ?: 'helps no one.';
$description = get_field('hero_description') ?: 'Most claim rejections are not about bad policies — they are about missed steps, wrong documents, and things nobody told you at the time of buying.
This section gives you everything you need to apply right, claim fast, and make sure your policy pays when the moment arrives.
The right paperwork. The right process. The right questions to ask before you sign.
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
    $bg_image = 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="paacthero">
  <div class="paacthero-slider-container">
    <div class="paacthero-slide active">
      
      <!-- Background Image -->
      <div class="paacthero-slide-image-wrapper" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
      
      <!-- Gradient Overlay -->
      <div class="paacthero-slide-image-overlay"></div>

      <div class="paacthero-inner">
        <div class="paacthero-slide-content">
          
          <!-- Top Stage Navigation Menu (Large Buttons) -->
          <nav class="paacthero-top-nav-large" aria-label="Main Section Flow">
            <a href="/personal-accident/" class="paacthero-nav-large-item">
              <span class="paacthero-step-label">00</span>
              <span class="paacthero-step-text">Home</span>
            </a>
            <span class="paacthero-nav-sep">/</span>
            <a href="/pa-understand/" class="paacthero-nav-large-item">
              <span class="paacthero-step-label">01</span>
              <span class="paacthero-step-text">Understand</span>
            </a>
            <span class="paacthero-nav-sep">/</span>
            <a href="pa-evaluate/" class="paacthero-nav-large-item">
              <span class="paacthero-step-label">02</span>
              <span class="paacthero-step-text">Evaluate</span>
            </a>
            <span class="paacthero-nav-sep">/</span>
            <a href="/pa-act/" class="paacthero-nav-large-item active">
              <span class="paacthero-step-label">03</span>
              <span class="paacthero-step-text">Act</span>
            </a>
          </nav>

          <!-- Header Row (Eyebrow Pill & Page Indicator Side-by-Side) -->
          <div class="paacthero-header-row">
            <!-- Eyebrow Pill -->
            <?php if ($eyebrow) : ?>
              <div class="paacthero-slide-eyebrow">
                <span class="paacthero-eyebrow-dot"></span>
                <?php echo esc_html($eyebrow); ?>
              </div>
            <?php endif; ?>

            <!-- Large Font Location Header -->
            <div class="paacthero-page-indicator">
              <span class="paacthero-indicator-step"><?php echo esc_html($current_step); ?></span>
            </div>
          </div>

          <!-- Main Title -->
          <h1 class="paacthero-slide-title">
            <?php echo nl2br(esc_html($title_white)); ?>
            <br>
            <?php if ($title_blue) : ?>
              <span><?php echo esc_html($title_blue); ?></span>
            <?php endif; ?>
          </h1>

          <!-- Description -->
          <?php if ($description) : ?>
            <p class="paacthero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
          <?php endif; ?>

        </div>
      </div>

      <!-- Long Navy Sub-Nav Bar Container -->
      <div class="paacthero-navy-wrapper">
        <!-- Sub-Nav Title Above Navy Bar -->
        <?php if ($subnav_title) : ?>
          <h2 class="paacthero-navy-title"><?php echo esc_html($subnav_title); ?></h2>
        <?php endif; ?>

        <div class="paacthero-navy-bar">
          <nav class="paacthero-navy-button-group" role="tablist" aria-label="Topic Chapters">
            <a href="#how-to-apply" class="paacthero-navy-btn active" role="tab">How to apply</a>
            <a href="#dos-donts" class="paacthero-navy-btn" role="tab">Do's & Don'ts</a>
            <a href="#what-you-can-claim" class="paacthero-navy-btn" role="tab">What you can claim</a>
            <a href="#claims-process" class="paacthero-navy-btn" role="tab">Claims process</a>
            
            <a href="#pa-checklist" class="paacthero-navy-btn" role="tab">Checklist</a>
            <!-- <a href="#faqs" class="paacthero-navy-btn" role="tab">FAQs</a> -->
          </nav>
        </div>
      </div>

    </div>
  </div>
</section>