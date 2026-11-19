<?php
/**
 * Motor Insurance Understand — Hero Section Template Part
 */

$page_category = 'Understand';
$current_step  = 'Understand';

$eyebrow     = get_field('hero_eyebrow') ?: 'Motor Insurance';
$title_white = get_field('hero_title_white') ?: 'You can’t protect ';
$title_blue  = get_field('hero_title_blue') ?: 'what you don’t understand.';
$description = get_field('hero_description') ?: 'Most Indians have motor insurance. Very few actually understand what it protects. For many, it’s a renewal reminder, a cheapest-price decision, or a legal checkbox.
But motor insurance is designed to do far more — protect your vehicle, the people inside it, others on the road, and your family’s financial stability when something goes wrong.
This section explains what motor insurance really is, why it matters, what it covers (and doesn’t), and what’s at stake when coverage is misunderstood or incomplete.';

// Fetch dynamic ACF Background Image or use Unsplash fallback
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image = $bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image = $bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1506015391300-4802dc74de2e?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="motorunderstandhero">
    <div class="motorunderstandhero-slider-container">
        <div class="motorunderstandhero-slide active">

            <!-- Background Image -->
            <div class="motorunderstandhero-slide-image-wrapper"
                style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>

            <!-- Gradient Overlay -->
            <div class="motorunderstandhero-slide-image-overlay"></div>

            <div class="motorunderstandhero-inner">
                <div class="motorunderstandhero-slide-content">

                    <!-- Top Stage Navigation Menu (Large Buttons) -->
                    <nav class="motorunderstandhero-top-nav-large" aria-label="Main Section Flow">
                        <a href="/motor-insurance/" class="motorunderstandhero-nav-large-item">
                            <span class="motorunderstandhero-step-label">00</span>
                            <span class="motorunderstandhero-step-text">Home</span>
                        </a>
                        <span class="motorunderstandhero-nav-sep">/</span>
                        <a href="/motor-understand/" class="motorunderstandhero-nav-large-item active">
                            <span class="motorunderstandhero-step-label">01</span>
                            <span class="motorunderstandhero-step-text">Understand</span>
                        </a>
                        <span class="motorunderstandhero-nav-sep">/</span>
                        <a href="/motor-evaluate/" class="motorunderstandhero-nav-large-item">
                            <span class="motorunderstandhero-step-label">02</span>
                            <span class="motorunderstandhero-step-text">Evaluate</span>
                        </a>
                        <span class="motorunderstandhero-nav-sep">/</span>
                        <a href="/motor-act/" class="motorunderstandhero-nav-large-item">
                            <span class="motorunderstandhero-step-label">03</span>
                            <span class="motorunderstandhero-step-text">Act</span>
                        </a>
                    </nav>

                    <br>

                    <!-- Eyebrow Pill -->
                    <?php if ($eyebrow) : ?>
                    <div class="motorunderstandhero-slide-eyebrow">
                        <span class="motorunderstandhero-eyebrow-dot"></span>
                        <?php echo esc_html($eyebrow); ?>
                    </div>
                    <?php endif; ?>

                    <div class="motorunderstandhero-page-indicator">
                        <span class="motorunderstandhero-indicator-step"><?php echo esc_html($current_step); ?></span>
                    </div>

                    <!-- Main Title -->
                    <h1 class="motorunderstandhero-slide-title">
                        <?php echo esc_html($title_white); ?>
                        <?php if ($title_blue) : ?>
                        <span><?php echo esc_html($title_blue); ?></span>
                        <?php endif; ?>
                    </h1>

                    <!-- Description -->
                    <?php if ($description) : ?>
                    <p class="motorunderstandhero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
                    <?php endif; ?>

                </div>
            </div>

            <!-- Long Navy Sub-Nav Bar (Big Menu Buttons) -->
            <div class="motorunderstandhero-navy-bar">
                <nav class="motorunderstandhero-navy-button-group" role="tablist" aria-label="Topic Chapters">
                    <a href="#motor-insurance" class="motorunderstandhero-navy-btn active" role="tab">What is Motor Insurance</a>
                    <a href="#motor-types" class="motorunderstandhero-navy-btn" role="tab">Types</a>
                    <a href="#motor-types-master" class="motorunderstandhero-navy-btn" role="tab">Who can buy</a>
                    <a href="#motor-addons" class="motorunderstandhero-navy-btn" role="tab">Impact</a>
                    <a href="#motor-vs-pa" class="motorunderstandhero-navy-btn" role="tab">Motor vs other cover</a>
                    <a href="#motor-seven-things" class="motorunderstandhero-navy-btn" role="tab">7 things to know</a>
                </nav>
            </div>

        </div>
    </div>
</section>