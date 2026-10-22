<?php
/**
 * Personal Accident Hero Section Template with Background Image & Enhanced Menus
 */

$page_category = 'Understand';
$current_step  = 'Understand';

$eyebrow     = get_field('hero_eyebrow') ?: 'Personal Accident Insurance';
$title_white = get_field('hero_title_white') ?: 'You can’t protect ';
$title_blue  = get_field('hero_title_blue') ?: 'what you don’t understand.';
$description = get_field('hero_description') ?: 'Most Indians who need PA Insurance don’t have it — not because it’s expensive, but because nobody explained it clearly.
This section covers what it actually is, who it’s for, what it covers, and what’s at stake when it’s missing.
Start here. Everything else in this guide follows from this.';

// Fetch dynamic ACF Background Image or use Unsplash fallback
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image = $bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image = $bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="paunderstandhero">
    <div class="paunderstandhero-slider-container">
        <div class="paunderstandhero-slide active">

            <!-- Background Image -->
            <div class="paunderstandhero-slide-image-wrapper"
                style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>

            <!-- Gradient Overlay -->
            <div class="paunderstandhero-slide-image-overlay"></div>

            <div class="paunderstandhero-inner">
                <div class="paunderstandhero-slide-content">

                    <!-- Top Stage Navigation Menu (Large Buttons) -->
                    <nav class="paunderstandhero-top-nav-large" aria-label="Main Section Flow">
                        <a href="/personal-accident/" class="paunderstandhero-nav-large-item">
                            <span class="paunderstandhero-step-label">00</span>
                            <span class="paunderstandhero-step-text">Home</span>
                        </a>
                        <span class="paunderstandhero-nav-sep">/</span>
                        <a href="/pa-understand/" class="paunderstandhero-nav-large-item active">
                            <span class="paunderstandhero-step-label">01</span>
                            <span class="paunderstandhero-step-text">Understand</span>
                        </a>
                        <span class="paunderstandhero-nav-sep">/</span>
                        <a href="/pa-evaluate/" class="paunderstandhero-nav-large-item">
                            <span class="paunderstandhero-step-label">02</span>
                            <span class="paunderstandhero-step-text">Evaluate</span>
                        </a>
                        <span class="paunderstandhero-nav-sep">/</span>
                        <a href="/pa-act/" class="paunderstandhero-nav-large-item">
                            <span class="paunderstandhero-step-label">03</span>
                            <span class="paunderstandhero-step-text">Act</span>
                        </a>
                    </nav>

                    <br>

                    <!-- Eyebrow Pill -->
                    <?php if ($eyebrow) : ?>
                    <div class="paunderstandhero-slide-eyebrow">
                        <span class="paunderstandhero-eyebrow-dot"></span>
                        <?php echo esc_html($eyebrow); ?>
                    </div>
                    <?php endif; ?>

                    <div class="paunderstandhero-page-indicator">
                        <span class="paunderstandhero-indicator-step"><?php echo esc_html($current_step); ?></span>
                    </div>

                    <!-- Main Title -->
                    <h1 class="paunderstandhero-slide-title">
                        <?php echo esc_html($title_white); ?>
                        <?php if ($title_blue) : ?>
                        <span><?php echo esc_html($title_blue); ?></span>
                        <?php endif; ?>
                    </h1>

                    <!-- Description -->
                    <?php if ($description) : ?>
                    <p class="paunderstandhero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
                    <?php endif; ?>

                </div>
            </div>


            <!-- Long Navy Sub-Nav Bar (Big Menu Buttons) -->
            <div class="paunderstandhero-navy-bar">
                <nav class="paunderstandhero-navy-button-group" role="tablist" aria-label="Topic Chapters">
                    <a href="#what-is-pa" class="paunderstandhero-navy-btn active" role="tab">What is PA?</a>
                    <a href="#pa-types" class="paunderstandhero-navy-btn" role="tab">Types</a>
                    <a href="#pa-who-can-buy" class="paunderstandhero-navy-btn" role="tab">Who can buy</a>
                    <a href="#pa-impact" class="paunderstandhero-navy-btn" role="tab">Impact</a>
                    <a href="#pa-insurance-other" class="paunderstandhero-navy-btn" role="tab">PA vs other cover</a>
                    <a href="#pa-seven-things" class="paunderstandhero-navy-btn" role="tab">7 things to know</a>
                </nav>
            </div>

        </div>
    </div>
</section>