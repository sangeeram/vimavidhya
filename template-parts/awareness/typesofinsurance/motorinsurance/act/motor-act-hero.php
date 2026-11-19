<?php
/**
 * Hero Section Template with Background Image & Enhanced Menus (Motor Insurance - Act Section)
 */

$page_category = 'Act';
$current_step  = 'Act';

$eyebrow     = get_field('hero_eyebrow') ?: 'Motor Insurance';
$title_white = get_field('hero_title_white') ?: "Knowing is not enough.\nA motor insurance policy that sits in a drawer";
$title_blue  = get_field('hero_title_blue') ?: 'helps no one.';
$description = get_field('hero_description') ?: 'Most motor insurance claim problems aren’t caused by bad policies.
They’re caused by missed steps, wrong assumptions, incomplete documents, or not knowing how the process actually works.
This section gives you everything you need to buy correctly, navigate claims smoothly, and make sure your policy works when you need it most — whether it’s a minor repair or a serious accident.
The right paperwork. The right process. The right questions - before you sign.';

// Sub-nav Section Header Title
$subnav_title = get_field('hero_subnav_title') ?: 'Act with confidence';

// Fetch dynamic ACF Background Image or use Unsplash fallback
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image = $bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image = $bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1486006920555-c77dce18193b?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="motoracthero">
  <div class="motoracthero-slider-container">
    <div class="motoracthero-slide active">
      
      <!-- Background Image -->
      <div class="motoracthero-slide-image-wrapper" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
      
      <!-- Gradient Overlay -->
      <div class="motoracthero-slide-image-overlay"></div>

      <div class="motoracthero-inner">
        <div class="motoracthero-slide-content">
          
          <!-- Top Stage Navigation Menu (Large Buttons) -->
          <nav class="motoracthero-top-nav-large" aria-label="Main Section Flow">
            <a href="/motor-insurance/" class="motoracthero-nav-large-item">
              <span class="motoracthero-step-label">00</span>
              <span class="motoracthero-step-text">Home</span>
            </a>
            <span class="motoracthero-nav-sep">/</span>
            <a href="/motor-understand/" class="motoracthero-nav-large-item">
              <span class="motoracthero-step-label">01</span>
              <span class="motoracthero-step-text">Understand</span>
            </a>
            <span class="motoracthero-nav-sep">/</span>
            <a href="/motor-evaluate/" class="motoracthero-nav-large-item">
              <span class="motoracthero-step-label">02</span>
              <span class="motoracthero-step-text">Evaluate</span>
            </a>
            <span class="motoracthero-nav-sep">/</span>
            <a href="/motor-act/" class="motoracthero-nav-large-item active">
              <span class="motoracthero-step-label">03</span>
              <span class="motoracthero-step-text">Act</span>
            </a>
          </nav>

          <!-- Header Row (Eyebrow Pill & Page Indicator Side-by-Side) -->
          <div class="motoracthero-header-row">
            <!-- Eyebrow Pill -->
            <?php if ($eyebrow) : ?>
              <div class="motoracthero-slide-eyebrow">
                <span class="motoracthero-eyebrow-dot"></span>
                <?php echo esc_html($eyebrow); ?>
              </div>
            <?php endif; ?>

            <!-- Large Font Location Header -->
            <div class="motoracthero-page-indicator">
              <span class="motoracthero-indicator-step"><?php echo esc_html($current_step); ?></span>
            </div>
          </div>

          <!-- Main Title -->
          <h1 class="motoracthero-slide-title">
            <?php echo nl2br(esc_html($title_white)); ?>
            <br>
            <?php if ($title_blue) : ?>
              <span><?php echo esc_html($title_blue); ?></span>
            <?php endif; ?>
          </h1>

          <!-- Description -->
          <?php if ($description) : ?>
            <p class="motoracthero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
          <?php endif; ?>

        </div>
      </div>

      <!-- Long Navy Sub-Nav Bar Container -->
      <div class="motoracthero-navy-wrapper">
        <!-- Sub-Nav Title Above Navy Bar -->
        <?php if ($subnav_title) : ?>
          <h2 class="motoracthero-navy-title"><?php echo esc_html($subnav_title); ?></h2>
        <?php endif; ?>

        <div class="motoracthero-navy-bar">
          <nav class="motoracthero-navy-button-group" role="tablist" aria-label="Topic Chapters">
            <a href="#how-to-apply" class="motoracthero-navy-btn active" role="tab">How to apply</a>
            <a href="#dos-donts" class="motoracthero-navy-btn" role="tab">Do's & Don'ts</a>
            <!-- <a href="#what-you-can-claim" class="motoracthero-navy-btn" role="tab">What you can claim</a> -->
            <a href="#claims-process" class="motoracthero-navy-btn" role="tab">Claims process</a>
            
            <a href="#motor-checklist" class="motoracthero-navy-btn" role="tab">Checklist</a>
            <!-- <a href="#faqs" class="motoracthero-navy-btn" role="tab">FAQs</a> -->
          </nav>
        </div>
      </div>

    </div>
  </div>
</section>