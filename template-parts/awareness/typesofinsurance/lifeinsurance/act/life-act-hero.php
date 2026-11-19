<?php
/**
 * Hero Section Template with Background Image & Enhanced Menus (Life Insurance - Act Section)
 */

$page_category = 'Act';
$current_step  = 'Act';

$eyebrow     = get_field('hero_eyebrow') ?: 'Layer 3 · Act';
$title_white = get_field('hero_title_white') ?: "Knowing is not enough.\nA policy that isn’t bought right —or claimed right —";
$title_blue  = get_field('hero_title_blue') ?: 'helps no one.';
$description = get_field('hero_description') ?: 'Most life insurance claim problems aren’t caused by bad policies.\n\nThey’re caused by wrong disclosures, lapsed premiums, missing nominees, and families who don’t know what to do when it matters most.\nNone of this is inevitable. All of it is preventable.\nThis section gives you everything you need to buy correctly, document properly, and ensure your nominee can claim without friction.';

// Sub-nav Section Header Title
$subnav_title = get_field('hero_subnav_title') ?: 'Act with confidence';

// Fetch dynamic ACF Background Image or use Unsplash fallback
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image = $bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image = $bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="lifeacthero">
  <div class="lifeacthero-slider-container">
    <div class="lifeacthero-slide active">
      
      <!-- Background Image -->
      <div class="lifeacthero-slide-image-wrapper" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
      
      <!-- Gradient Overlay -->
      <div class="lifeacthero-slide-image-overlay"></div>

      <div class="lifeacthero-inner">
        <div class="lifeacthero-slide-content">
          
          <!-- Top Stage Navigation Menu (Large Buttons) -->
          <nav class="lifeacthero-top-nav-large" aria-label="Main Section Flow">
            <a href="/life-insurance/" class="lifeacthero-nav-large-item">
              <span class="lifeacthero-step-label">00</span>
              <span class="lifeacthero-step-text">Home</span>
            </a>
            <span class="lifeacthero-nav-sep">/</span>
            <a href="/life-understand/" class="lifeacthero-nav-large-item">
              <span class="lifeacthero-step-label">01</span>
              <span class="lifeacthero-step-text">Understand</span>
            </a>
            <span class="lifeacthero-nav-sep">/</span>
            <a href="/life-evaluate/" class="lifeacthero-nav-large-item">
              <span class="lifeacthero-step-label">02</span>
              <span class="lifeacthero-step-text">Evaluate</span>
            </a>
            <span class="lifeacthero-nav-sep">/</span>
            <a href="/life-act/" class="lifeacthero-nav-large-item active">
              <span class="lifeacthero-step-label">03</span>
              <span class="lifeacthero-step-text">Act</span>
            </a>
          </nav>

          <!-- Header Row (Eyebrow Pill & Page Indicator Side-by-Side) -->
          <div class="lifeacthero-header-row">
            <!-- Eyebrow Pill -->
            <?php if ($eyebrow) : ?>
              <div class="lifeacthero-slide-eyebrow">
                <span class="lifeacthero-eyebrow-dot"></span>
                <?php echo esc_html($eyebrow); ?>
              </div>
            <?php endif; ?>

            <!-- Large Font Location Header -->
            <div class="lifeacthero-page-indicator">
              <span class="lifeacthero-indicator-step"><?php echo esc_html($current_step); ?></span>
            </div>
          </div>

          <!-- Main Title -->
          <h1 class="lifeacthero-slide-title">
            <?php echo nl2br(esc_html($title_white)); ?>
            <br>
            <?php if ($title_blue) : ?>
              <span><?php echo esc_html($title_blue); ?></span>
            <?php endif; ?>
          </h1>

          <!-- Description -->
          <?php if ($description) : ?>
            <p class="lifeacthero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
          <?php endif; ?>

        </div>
      </div>

      <!-- Long Navy Sub-Nav Bar Container -->
      <div class="lifeacthero-navy-wrapper">
        <!-- Sub-Nav Title Above Navy Bar -->
        <?php if ($subnav_title) : ?>
          <h2 class="lifeacthero-navy-title"><?php echo esc_html($subnav_title); ?></h2>
        <?php endif; ?>

        <div class="lifeacthero-navy-bar">
          <nav class="lifeacthero-navy-button-group" role="tablist" aria-label="Topic Chapters">
            <a href="#how-to-apply" class="lifeacthero-navy-btn active" role="tab">How to buy</a>
            <a href="#what-you-can-claim" class="lifeacthero-navy-btn" role="tab">What you can claim</a>
            <a href="#claims-process" class="lifeacthero-navy-btn" role="tab">Claims process</a>
            <a href="#documents-required" class="lifeacthero-navy-btn" role="tab">Documents required</a>
            <a href="#dos-donts" class="lifeacthero-navy-btn" role="tab">Do's & Don'ts</a>
            <a href="#life-checklist" class="lifeacthero-navy-btn" role="tab">Pre-purchase checklist</a>
          </nav>
        </div>
      </div>

    </div>
  </div>
</section>