<?php
/**
 * Personal Accident Hero Section Template - Layer 2: Evaluate
 */


$page_category = 'Evaluate';
$current_step  = 'Evaluate';

$eyebrow     = get_field('hero_eyebrow') ?: 'Personal Accident';
$title_white = get_field('hero_title_white') ?: 'Most people buy the wrong policy. ';
$title_blue  = get_field('hero_title_blue') ?: 'Not the wrong product — the wrong version of it.';
$description = get_field('hero_description') ?: "PA Insurance fails people not when they buy it — but when they bought too little, misread the fine print, or believed something that simply isn't true.This section walks you through how premiums actually work, what adequate cover looks like at your life stage, and the myths that lead most buyers astray.Before you commit to any policy, spend time here first.";

// Fetch dynamic ACF Background Image or use default fallback
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image = $bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image = $bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="paevaluatehero">
    <div class="paevaluatehero-slider-container">
        <div class="paevaluatehero-slide active">

            <!-- Background Image -->
            <div class="paevaluatehero-slide-image-wrapper"
                style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>

            <!-- Gradient Overlay -->
            <div class="paevaluatehero-slide-image-overlay"></div>

            <div class="paevaluatehero-inner">
                <div class="paevaluatehero-slide-content">

                    <!-- Top Stage Navigation Menu -->
                    <nav class="paevaluatehero-top-nav-large" aria-label="Main Section Flow">
                        <a href="/personal-accident/" class="paevaluatehero-nav-large-item">
                            <span class="paevaluatehero-step-label">00</span>
                            <span class="paevaluatehero-step-text">Home</span>
                        </a>
                        <span class="paevaluatehero-nav-sep">/</span>
                        <a href="/pa-understand/" class="paevaluatehero-nav-large-item">
                            <span class="paevaluatehero-step-label">01</span>
                            <span class="paevaluatehero-step-text">Understand</span>
                        </a>
                        <span class="paevaluatehero-nav-sep">/</span>
                        <a href="/pa-evaluate/" class="paevaluatehero-nav-large-item active">
                            <span class="paevaluatehero-step-label">02</span>
                            <span class="paevaluatehero-step-text">Evaluate</span>
                        </a>
                        <span class="paevaluatehero-nav-sep">/</span>
                        <a href="/pa-act/" class="paevaluatehero-nav-large-item">
                            <span class="paevaluatehero-step-label">03</span>
                            <span class="paevaluatehero-step-text">Act</span>
                        </a>
                    </nav>

                    <br>

                    <!-- Eyebrow Pill -->
                    <?php if ($eyebrow) : ?>
                    <div class="paevaluatehero-slide-eyebrow">
                        <span class="paevaluatehero-eyebrow-dot"></span>
                        <?php echo esc_html($eyebrow); ?>
                    </div>
                    <?php endif; ?>

                    <div class="paevaluatehero-page-indicator">
                        <span class="paevaluatehero-indicator-step"><?php echo esc_html($current_step); ?></span>
                    </div>

                    <!-- Main Title -->
                    <h1 class="paevaluatehero-slide-title">
                        <?php echo esc_html($title_white); ?>
                        <?php if ($title_blue) : ?>
                        <span><?php echo esc_html($title_blue); ?></span>
                        <?php endif; ?>
                    </h1>

                    <!-- Description -->
                    <?php if ($description) : ?>
                    <p class="paevaluatehero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
                    <?php endif; ?>

                     <div class="paevaluatehero-navy-bar">
                <nav class="paevaluatehero-navy-button-group" role="tablist" aria-label="Topic Chapters">
                    <a href="#evaluate-pa-premium-logic" class="paevaluatehero-navy-btn active" role="tab">Premium logic</a>
                    <a href="#evaluate-pa-actual-costs" class="paevaluatehero-navy-btn" role="tab">Real costs</a>
                    <a href="#evaluate-pa-suitability" class="paevaluatehero-navy-btn" role="tab">Suitability</a>
                    <a href="#evaluate-pa-choosing-policy" class="paevaluatehero-navy-btn" role="tab">Choosing a Policy</a>
                    <a href="#pa-evaluate-myths" class="paevaluatehero-navy-btn" role="tab">Myths</a>
                    <a href="#evaluate-pa-real-scenerios" class="paevaluatehero-navy-btn" role="tab">Real scenarios</a>
                </nav>
            </div>

                </div>
            </div>

            <!-- Long Navy Sub-Nav Bar (Chapter Buttons) -->
           

        </div>
    </div>
</section>