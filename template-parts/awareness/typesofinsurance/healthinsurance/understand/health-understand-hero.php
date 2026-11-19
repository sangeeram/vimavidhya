<?php
/**
 * Hero Section Template with Background Image & Enhanced Menus (Health Insurance)
 */

$page_category = 'Understand';
$current_step  = 'Understand';

$eyebrow     = get_field('hero_eyebrow') ?: 'Health Insurance';
$title_white = get_field('hero_title_white') ?: 'Healthcare is unpredictable. Understanding your ';
$title_blue  = get_field('hero_title_blue') ?: 'protection shouldn’t be.';
$description = get_field('hero_description') ?: "Health is something most people take for granted — until an unexpected illness or medical emergency changes everything.
Yet health insurance remains one of the least understood forms of financial protection.
Not because it isn't important — but because it's often misunderstood, overlooked, or explained in complicated terms.
Many assume their employer's health cover is enough. Others believe medical emergencies happen only to older people. Some think health insurance is only useful when hospitalisation becomes necessary.
But healthcare costs are rising, illnesses don't follow a schedule, and even a single medical emergency can put years of savings at risk.
This section explains what health insurance actually is, why it matters today, the different types of plans available, who can buy it, and what the financial consequences are when adequate protection is missing.";

// Fetch dynamic ACF Background Image or use theme asset fallback
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image = $bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image = $bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?q=80&w=2000&auto=format&fit=crop';
}
?>

<section class="healthunderstandhero">
    <div class="healthunderstandhero-slider-container">
        <div class="healthunderstandhero-slide active">

            <!-- Background Image -->
            <div class="healthunderstandhero-slide-image-wrapper"
                style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>

            <!-- Gradient Overlay -->
            <div class="healthunderstandhero-slide-image-overlay"></div>

            <div class="healthunderstandhero-inner">
                <div class="healthunderstandhero-slide-content">

                    <!-- Top Stage Navigation Menu (Large Buttons) -->
                    <nav class="healthunderstandhero-top-nav-large" aria-label="Main Section Flow">
                        <a href="/health-insurance/" class="healthunderstandhero-nav-large-item">
                            <span class="healthunderstandhero-step-label">00</span>
                            <span class="healthunderstandhero-step-text">Home</span>
                        </a>
                        <span class="healthunderstandhero-nav-sep">/</span>
                        <a href="/health-understand/" class="healthunderstandhero-nav-large-item active">
                            <span class="healthunderstandhero-step-label">01</span>
                            <span class="healthunderstandhero-step-text">Understand</span>
                        </a>
                        <span class="healthunderstandhero-nav-sep">/</span>
                        <a href="/health-evaluate/" class="healthunderstandhero-nav-large-item">
                            <span class="healthunderstandhero-step-label">02</span>
                            <span class="healthunderstandhero-step-text">Evaluate</span>
                        </a>
                        <span class="healthunderstandhero-nav-sep">/</span>
                        <a href="/health-act/" class="healthunderstandhero-nav-large-item">
                            <span class="healthunderstandhero-step-label">03</span>
                            <span class="healthunderstandhero-step-text">Act</span>
                        </a>
                    </nav>

                    <br>

                    <!-- Eyebrow & Page Indicator Row -->
                    <div class="healthunderstandhero-heading-row">

                        <!-- Left: Health Insurance Eyebrow -->
                        <div class="healthunderstandhero-slide-eyebrow">
                            <span class="healthunderstandhero-eyebrow-dot"></span>
                            <?php echo esc_html($eyebrow); ?>
                        </div>

                        <!-- Center: Understand Indicator -->
                        <div class="healthunderstandhero-page-indicator">
                            <span class="healthunderstandhero-indicator-step">
                                <?php echo esc_html($current_step); ?>
                            </span>
                        </div>

                    </div>

                    <!-- Main Title -->
                    <h1 class="healthunderstandhero-slide-title">
                        <?php echo esc_html($title_white); ?>
                        <?php if ($title_blue) : ?>
                        <span><?php echo esc_html($title_blue); ?></span>
                        <?php endif; ?>
                    </h1>

                    <!-- Description -->
                    <?php if ($description) : ?>
                    <p class="healthunderstandhero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
                    <?php endif; ?>

                </div>
            </div>


            <!-- Long Navy Sub-Nav Bar (Big Menu Buttons) -->
            <div class="healthunderstandhero-navy-bar">
                <nav class="healthunderstandhero-navy-button-group" role="tablist" aria-label="Topic Chapters">
                    <a href="#what-it-is" class="healthunderstandhero-navy-btn active" role="tab">What it is</a>
                    <!-- <a href="#what-it-covers" class="healthunderstandhero-navy-btn" role="tab">What it covers</a> -->
                    <a href="#why-it" class="healthunderstandhero-navy-btn" role="tab">Why it matters</a>
                    <a href="#health-types" class="healthunderstandhero-navy-btn" role="tab">Types</a>
                    <!-- <a href="#health-who-can-buy" class="healthunderstandhero-navy-btn" role="tab">Who can buy</a> -->
                    <a href="#health-insurance-other" class="healthunderstandhero-navy-btn" role="tab">Health vs Other</a>
                    <!-- <a href="#comparisons" class="healthunderstandhero-navy-btn" role="tab">Comparisons</a> -->
                    <a href="#health-seven-things" class="healthunderstandhero-navy-btn" role="tab">7 things to know</a>
                </nav>
            </div>

        </div>
    </div>
</section>