<?php
/**
 * Life Insurance Understand — Hero Section Template Part
 */

$page_category = 'Understand';$current_step  = 'Understand';

$eyebrow     = get_field('hero_eyebrow') ?: 'Life Insurance';$title_white = get_field('hero_title_white') ?: 'You can’t protect ';
$title_blue  = get_field('hero_title_blue') ?: 'what you don’t understand.';
$description = get_field('hero_description') ?: 'Most Indians have life insurance. Very few have the right kind, in the right amount, for the right reason.
For many, it’s a tax-saving receipt. For others, an investment that quietly underdelivers.
For too many families, it’s cover that looks reassuring — until it’s tested.
Life insurance is the only product that creates a guaranteed pool of money exactly when your family needs it most — regardless of market conditions or savings accumulated.
This section explains what life insurance really is, why protection matters more than returns, and how timing, structure, and product choice change outcomes permanently.';

// Fetch dynamic ACF Background Image or use Unsplash fallback
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image =$bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image =$bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1506015391300-4802dc74de2e?auto=format&fit=crop&w=1920&q=80';
}
?>

<section class="lifeunderstandhero">
    <div class="lifeunderstandhero-slider-container">
        <div class="lifeunderstandhero-slide active">

            <!-- Background Image -->
            <div class="lifeunderstandhero-slide-image-wrapper"
                style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>

            <!-- Gradient Overlay -->
            <div class="lifeunderstandhero-slide-image-overlay"></div>

            <div class="lifeunderstandhero-inner">
                <div class="lifeunderstandhero-slide-content">

                    <!-- Top Stage Navigation Menu (Large Buttons) -->
                    <nav class="lifeunderstandhero-top-nav-large" aria-label="Main Section Flow">
                        <a href="/life-insurance/" class="lifeunderstandhero-nav-large-item">
                            <span class="lifeunderstandhero-step-label">00</span>
                            <span class="lifeunderstandhero-step-text">Home</span>
                        </a>
                        <span class="lifeunderstandhero-nav-sep">/</span>
                        <a href="/life-understand/" class="lifeunderstandhero-nav-large-item active">
                            <span class="lifeunderstandhero-step-label">01</span>
                            <span class="lifeunderstandhero-step-text">Understand</span>
                        </a>
                        <span class="lifeunderstandhero-nav-sep">/</span>
                        <a href="/life-evaluate/" class="lifeunderstandhero-nav-large-item">
                            <span class="lifeunderstandhero-step-label">02</span>
                            <span class="lifeunderstandhero-step-text">Evaluate</span>
                        </a>
                        <span class="lifeunderstandhero-nav-sep">/</span>
                        <a href="/life-act/" class="lifeunderstandhero-nav-large-item">
                            <span class="lifeunderstandhero-step-label">03</span>
                            <span class="lifeunderstandhero-step-text">Act</span>
                        </a>
                    </nav>

                    <br>

                    <!-- Eyebrow Pill -->
                    <?php if ($eyebrow) : ?>
                    <div class="lifeunderstandhero-slide-eyebrow">
                        <span class="lifeunderstandhero-eyebrow-dot"></span>
                        <?php echo esc_html($eyebrow); ?>
                    </div>
                    <?php endif; ?>

                    <div class="lifeunderstandhero-page-indicator">
                        <span class="lifeunderstandhero-indicator-step"><?php echo esc_html($current_step); ?></span>
                    </div>

                    <!-- Main Title -->
                    <h1 class="lifeunderstandhero-slide-title">
                        <?php echo esc_html($title_white); ?>
                        <?php if ($title_blue) : ?>
                        <span><?php echo esc_html($title_blue); ?></span>
                        <?php endif; ?>
                    </h1>

                    <!-- Description -->
                    <?php if ($description) : ?>
                    <p class="lifeunderstandhero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
                    <?php endif; ?>

                </div>
            </div>

            <!-- Long Navy Sub-Nav Bar (Big Menu Buttons) -->
            <div class="lifeunderstandhero-navy-bar">
                <nav class="lifeunderstandhero-navy-button-group" role="tablist" aria-label="Topic Chapters">
                    <a href="#life-insurance-basics" class="lifeunderstandhero-navy-btn active" role="tab">What it is</a>
                    <a href="#life-why-it-matters" class="lifeunderstandhero-navy-btn" role="tab">Why it matters</a>
                    <!-- <a href="#life-protection-mindset" class="lifeunderstandhero-navy-btn" role="tab">The protection mindset</a> -->
                    <a href="#life-not-investment-section" class="lifeunderstandhero-navy-btn" role="tab">Why it's not an investment</a>
                    <!-- <a href="#life-starting-early" class="lifeunderstandhero-navy-btn" role="tab">Why starting </a> -->
                    <a href="#life-insurance-types" class="lifeunderstandhero-navy-btn" role="tab">Types </a>
                </nav>
            </div>


        </div>
    </div>
</section>