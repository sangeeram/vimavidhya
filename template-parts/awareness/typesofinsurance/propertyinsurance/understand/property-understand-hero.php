<?php
/**
 * Hero Section Template with Background Image & Enhanced Menus
 */

$page_category = 'Understand';
$current_step  = 'Understand';

$eyebrow     = get_field('hero_eyebrow') ?: 'Property Insurance';
$title_white = get_field('hero_title_white') ?: 'You can’t protect ';
$title_blue  = get_field('hero_title_blue') ?: 'what you don’t understand.';
$description = get_field('hero_description') ?: 'For most Indians, a home is the single largest asset they will ever own.Yet property insurance remains one of the least understood and least purchased forms of protection.Not because it’s unaffordable — but because it’s rarely explained in plain language.Many assume the building is “covered by the society.” Others believe nothing significant can happen.Some think insurance only matters after decades.
This section explains what property insurance actually is, who it’s meant for, what it covers (and doesn’t), and what’s at stake when protection is missing or incomplete.';

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

<section class="propertyunderstandhero">
    <div class="propertyunderstandhero-slider-container">
        <div class="propertyunderstandhero-slide active">

            <!-- Background Image -->
            <div class="propertyunderstandhero-slide-image-wrapper"
                style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>

            <!-- Gradient Overlay -->
            <div class="propertyunderstandhero-slide-image-overlay"></div>

            <div class="propertyunderstandhero-inner">
                <div class="propertyunderstandhero-slide-content">

                    <!-- Top Stage Navigation Menu (Large Buttons) -->
                    <nav class="propertyunderstandhero-top-nav-large" aria-label="Main Section Flow">
                        <a href="/property-insurance/" class="propertyunderstandhero-nav-large-item">
                            <span class="propertyunderstandhero-step-label">00</span>
                            <span class="propertyunderstandhero-step-text">Home</span>
                        </a>
                        <span class="propertyunderstandhero-nav-sep">/</span>
                        <a href="/property-understand/" class="propertyunderstandhero-nav-large-item active">
                            <span class="propertyunderstandhero-step-label">01</span>
                            <span class="propertyunderstandhero-step-text">Understand</span>
                        </a>
                        <span class="propertyunderstandhero-nav-sep">/</span>
                        <a href="/property-evaluate/" class="propertyunderstandhero-nav-large-item">
                            <span class="propertyunderstandhero-step-label">02</span>
                            <span class="propertyunderstandhero-step-text">Evaluate</span>
                        </a>
                        <span class="propertyunderstandhero-nav-sep">/</span>
                        <a href="/property-act/" class="propertyunderstandhero-nav-large-item">
                            <span class="propertyunderstandhero-step-label">03</span>
                            <span class="propertyunderstandhero-step-text">Act</span>
                        </a>
                    </nav>

                    <br>
                    <!-- Large Font Location Header -->

                    <!-- Eyebrow Pill -->
                    <?php if ($eyebrow) : ?>
                    <div class="propertyunderstandhero-slide-eyebrow">
                        <span class="propertyunderstandhero-eyebrow-dot"></span>
                        <?php echo esc_html($eyebrow); ?>
                    </div>
                    <?php endif; ?>

                    <div class="propertyunderstandhero-page-indicator">
                        <!-- <span class="propertyunderstandhero-indicator-category"><?php echo esc_html($page_category); ?></span> -->
                        <span
                            class="propertyunderstandhero-indicator-step"><?php echo esc_html($current_step); ?></span>
                    </div>


                    <!-- Main Title -->
                    <h1 class="propertyunderstandhero-slide-title">
                        <?php echo esc_html($title_white); ?>
                        <?php if ($title_blue) : ?>
                        <span><?php echo esc_html($title_blue); ?></span>
                        <?php endif; ?>
                    </h1>

                    <!-- Description -->
                    <?php if ($description) : ?>
                    <p class="propertyunderstandhero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
                    <?php endif; ?>



                </div>
            </div>
            <!-- Long Navy Sub-Nav Bar (Big Menu Buttons) -->
            <div class="propertyunderstandhero-navy-bar">
                <nav class="propertyunderstandhero-navy-button-group" role="tablist" aria-label="Topic Chapters">
                    <a href="#what-it-is" class="propertyunderstandhero-navy-btn active" role="tab">What it is</a>
                    <a href="#why-it-matters" class="propertyunderstandhero-navy-btn" role="tab">Why it matters</a>
                    <a href="#types" class="propertyunderstandhero-navy-btn" role="tab">Types</a>
                    <a href="#who-can-buy" class="propertyunderstandhero-navy-btn" role="tab">Who can buy</a>
                    <a href="#impact" class="propertyunderstandhero-navy-btn" role="tab">Impact</a>
                    <a href="#ten-things" class="propertyunderstandhero-navy-btn" role="tab">10 things to know</a>
                </nav>
            </div>
        </div>

    </div>

</section>