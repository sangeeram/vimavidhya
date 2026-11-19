<?php
/**
 * Hero Section Template with Background Image & Enhanced Menus (Health Insurance Act Section)
 */

$page_category = 'Act';$current_step  = 'Act';

$eyebrow     = get_field('hero_eyebrow') ?: 'Health Insurance';$title_white = get_field('hero_title_white') ?: 'Coverage is ';
$title_blue  = get_field('hero_title_blue') ?: 'only a start.';$description = get_field('hero_description') ?: 'A health insurance policy sitting in a folder prevents zero hospital bills.
Most claims fail not because the policy is weak, but because the process broke down. Because the patient paid out-of-pocket at a network hospital without initiating cashless pre-authorization. Because pre-existing condition disclosures were missed, or itemized hospital bills were submitted without discharge summaries and pharmacy tax receipts.
The policy was never the problem. The execution was.

This section equips you with what you need — before hospital admission, during your stay, and when settling bills or filing reimbursement claims. The steps are straightforward. But they must be known before an emergency arrives. Because an emergency room desk at 2 AM is not the moment to decipher your deductible or sub-limit clauses.';

// Sub-nav Section Header Title
$subnav_title = get_field('hero_subnav_title') ?: 'Start with the steps';

// Fetch dynamic ACF Background Image or use Unsplash fallback
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image =$bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image =$bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="healthacthero">
  <div class="healthacthero-slider-container">
    <div class="healthacthero-slide active">
      
      <!-- Background Image -->
      <div class="healthacthero-slide-image-wrapper" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
      
      <!-- Gradient Overlay -->
      <div class="healthacthero-slide-image-overlay"></div>

      <div class="healthacthero-inner">
        <div class="healthacthero-slide-content">
          
          <!-- Top Stage Navigation Menu (Large Buttons) -->
          <nav class="healthacthero-top-nav-large" aria-label="Main Section Flow">
            <a href="/health-insurance/" class="healthacthero-nav-large-item">
              <span class="healthacthero-step-label">00</span>
              <span class="healthacthero-step-text">Home</span>
            </a>
            <span class="healthacthero-nav-sep">/</span>
            <a href="/health-understand/" class="healthacthero-nav-large-item">
              <span class="healthacthero-step-label">01</span>
              <span class="healthacthero-step-text">Understand</span>
            </a>
            <span class="healthacthero-nav-sep">/</span>
            <a href="/health-evaluate/" class="healthacthero-nav-large-item">
              <span class="healthacthero-step-label">02</span>
              <span class="healthacthero-step-text">Evaluate</span>
            </a>
            <span class="healthacthero-nav-sep">/</span>
            <a href="/health-act/" class="healthacthero-nav-large-item active">
              <span class="healthacthero-step-label">03</span>
              <span class="healthacthero-step-text">Act</span>
            </a>
          </nav>
          <br>

          <!-- Header Row (Eyebrow Pill & Page Indicator Side-by-Side) -->
          <div class="healthacthero-header-row">
            <!-- Eyebrow Pill -->
            <?php if ($eyebrow) : ?>
              <div class="healthacthero-slide-eyebrow">
                <span class="healthacthero-eyebrow-dot"></span>
                <?php echo esc_html($eyebrow); ?>
              </div>
            <?php endif; ?>

            <!-- Large Font Location Header -->
            <div class="healthacthero-page-indicator">
              <span class="healthacthero-indicator-step"><?php echo esc_html($current_step); ?></span>
            </div>
          </div>

          <!-- Main Title -->
          <h1 class="healthacthero-slide-title">
            <?php echo esc_html($title_white); ?>
            <?php if ($title_blue) : ?>
              <span><?php echo esc_html($title_blue); ?></span>
            <?php endif; ?>
          </h1>

          <!-- Description -->
          <?php if ($description) : ?>
            <p class="healthacthero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
          <?php endif; ?>

        </div>
      </div>

      <!-- Long Navy Sub-Nav Bar Container -->
      <div class="healthacthero-navy-wrapper">
        <!-- Sub-Nav Title Above Navy Bar -->
        <?php if ($subnav_title) : ?>
          <h2 class="healthacthero-navy-title"><?php echo esc_html($subnav_title); ?></h2>
        <?php endif; ?>


        <div class="healthacthero-navy-bar">
          <nav class="healthacthero-navy-button-group" role="tablist" aria-label="Topic Chapters">
            <a href="#how-to-apply" class="healthacthero-navy-btn active" role="tab">How to apply</a>
            <a href="#dos-donts" class="healthacthero-navy-btn" role="tab">Do's & Don'ts</a>
            <a href="#what-you-can-claim" class="healthacthero-navy-btn" role="tab">What you can claim</a>
            <a href="#claims-process" class="healthacthero-navy-btn" role="tab">Claims process</a>
            <a href="#checklist" class="healthacthero-navy-btn" role="tab">Checklist</a>
         
        </div>
      </div>

    </div>
  </div>
</section>