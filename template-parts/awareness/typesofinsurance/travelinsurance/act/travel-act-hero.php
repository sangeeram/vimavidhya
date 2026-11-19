<?php
/**
 * Hero Section Template with Background Image & Enhanced Menus (Travel Act Section)
 */

$page_category = 'Act';
$current_step  = 'Act';

$eyebrow     = get_field('hero_eyebrow') ?: 'Travel Insurance';
$title_white = get_field('hero_title_white') ?: 'Knowing is ';
$title_blue  = get_field('hero_title_blue') ?: 'not enough.';
$description = get_field('hero_description') ?: 'A policy that sits in a drawer helps no one.
Most travel insurance claims that fail are not failed because of a bad policy. They fail because the traveller paid out of pocket at a foreign hospital not knowing cashless was available. Because the cancellation claim was filed a week too late. Because no one collected the airline\'s written delay certificate at the airport — the one document the insurer needed.
The policy was never the problem. The process was.

This section gives you what you need — before you leave, at the moment something goes wrong, and when you file the claim back home. The steps are straightforward. But they must be known before you need them. Because a hospital in Bangkok at midnight is not the moment to read the fine print for the first time.';

// Sub-nav Section Header Title
$subnav_title = get_field('hero_subnav_title') ?: 'Start with the steps';

// Fetch dynamic ACF Background Image or use Unsplash fallback
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image = $bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image = $bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="travelacthero">
  <div class="travelacthero-slider-container">
    <div class="travelacthero-slide active">
      
      <!-- Background Image -->
      <div class="travelacthero-slide-image-wrapper" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
      
      <!-- Gradient Overlay -->
      <div class="travelacthero-slide-image-overlay"></div>

      <div class="travelacthero-inner">
        <div class="travelacthero-slide-content">
          
          <!-- Top Stage Navigation Menu (Large Buttons) -->
          <nav class="travelacthero-top-nav-large" aria-label="Main Section Flow">
            <a href="/travel-insurance/" class="travelacthero-nav-large-item">
              <span class="travelacthero-step-label">00</span>
              <span class="travelacthero-step-text">Home</span>
            </a>
            <span class="travelacthero-nav-sep">/</span>
            <a href="/travel-understand/" class="travelacthero-nav-large-item">
              <span class="travelacthero-step-label">01</span>
              <span class="travelacthero-step-text">Understand</span>
            </a>
            <span class="travelacthero-nav-sep">/</span>
            <a href="/travel-evaluate/" class="travelacthero-nav-large-item">
              <span class="travelacthero-step-label">02</span>
              <span class="travelacthero-step-text">Evaluate</span>
            </a>
            <span class="travelacthero-nav-sep">/</span>
            <a href="/travel-act/" class="travelacthero-nav-large-item active">
              <span class="travelacthero-step-label">03</span>
              <span class="travelacthero-step-text">Act</span>
            </a>
          </nav>
          <br>

          <!-- Header Row (Eyebrow Pill & Page Indicator Side-by-Side) -->
          <div class="travelacthero-header-row">
            <!-- Eyebrow Pill -->
            <?php if ($eyebrow) : ?>
              <div class="travelacthero-slide-eyebrow">
                <span class="travelacthero-eyebrow-dot"></span>
                <?php echo esc_html($eyebrow); ?>
              </div>
            <?php endif; ?>

            <!-- Large Font Location Header -->
            <div class="travelacthero-page-indicator">
              <span class="travelacthero-indicator-step"><?php echo esc_html($current_step); ?></span>
            </div>
          </div>

          <!-- Main Title -->
          <h1 class="travelacthero-slide-title">
            <?php echo esc_html($title_white); ?>
            <?php if ($title_blue) : ?>
              <span><?php echo esc_html($title_blue); ?></span>
            <?php endif; ?>
          </h1>

          <!-- Description -->
          <?php if ($description) : ?>
            <p class="travelacthero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
          <?php endif; ?>

        </div>
      </div>

      <!-- Long Navy Sub-Nav Bar Container -->
      <div class="travelacthero-navy-wrapper">
        <!-- Sub-Nav Title Above Navy Bar -->
        <?php if ($subnav_title) : ?>
          <h2 class="travelacthero-navy-title"><?php echo esc_html($subnav_title); ?></h2>
        <?php endif; ?>

        
        
        <div class="travelacthero-navy-bar">
          <nav class="travelacthero-navy-button-group" role="tablist" aria-label="Topic Chapters">
            <a href="#how-to-apply" class="travelacthero-navy-btn active" role="tab">How to apply</a>
             <a href="#dos-donts" class="travelacthero-navy-btn" role="tab">Do's & Don'ts</a>
            <a href="#what-you-can-claim" class="travelacthero-navy-btn" role="tab">What you can claim</a>
            <a href="#claims-process" class="travelacthero-navy-btn" role="tab">Claims process</a>
            <!-- <a href="#documents" class="travelacthero-navy-btn" role="tab">Documents</a> -->
            <!-- <a href="#networks" class="travelacthero-navy-btn" role="tab">Networks</a> -->
           
            <a href="#checklist" class="travelacthero-navy-btn" role="tab">Checklist</a>
            <!-- <a href="#faqs" class="travelacthero-navy-btn" role="tab">FAQs</a> -->
          </nav>
        </div>
      </div>

    </div>
  </div>
</section>