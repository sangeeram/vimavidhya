<?php
/**
 * Hero Section Template with Background Image & Enhanced Menus - Travel Insurance (Understand)
 */

$page_category = 'Understand';$current_step  = 'Understand';

$eyebrow     = get_field('hero_eyebrow') ?: 'Travel Insurance';$title_white = get_field('hero_title_white') ?: 'You can’t protect ';
$title_blue  = get_field('hero_title_blue') ?: 'what you don’t understand.';
$description = get_field('hero_description') ?: 'Most Indians who travel — domestically and internationally — don\'t carry travel insurance. Not because it is expensive. Not because it is complicated to buy, but because nobody explained what it actually does, what goes wrong without it, and why the cost of not having it can dwarf the cost of the trip itself.
A missed flight. A hospitalisation abroad. A stolen passport in a city where you know no one. A natural disaster that grounds every flight out of a country you are visiting. These are not rare events. They happen to ordinary travellers every single day — and the difference between a bad story and a financial catastrophe is often one small policy that cost less than a restaurant meal.';

// Fetch dynamic ACF Background Image or use Unsplash fallback
$bg_image_obj = get_field('hero_bg_image');

if (is_array($bg_image_obj) && isset($bg_image_obj['url'])) {
    $bg_image =$bg_image_obj['url'];
} elseif (is_string($bg_image_obj) && !empty($bg_image_obj)) {
    $bg_image =$bg_image_obj;
} else {
    $bg_image = 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?q=80&w=1920&auto=format&fit=crop';
}
?>

<section class="travelunderstandhero">
    <div class="travelunderstandhero-slider-container">
        <div class="travelunderstandhero-slide active">

            <!-- Background Image -->
            <div class="travelunderstandhero-slide-image-wrapper"
                style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>

            <!-- Gradient Overlay -->
            <div class="travelunderstandhero-slide-image-overlay"></div>

            <div class="travelunderstandhero-inner">
                <div class="travelunderstandhero-slide-content">

                    <!-- Top Stage Navigation Menu (Large Buttons) -->
                    <nav class="travelunderstandhero-top-nav-large" aria-label="Main Section Flow">
                        <a href="/travel-insurance/" class="travelunderstandhero-nav-large-item">
                            <span class="travelunderstandhero-step-label">00</span>
                            <span class="travelunderstandhero-step-text">Home</span>
                        </a>
                        <span class="travelunderstandhero-nav-sep">/</span>
                        <a href="/travel-understand/" class="travelunderstandhero-nav-large-item active">
                            <span class="travelunderstandhero-step-label">01</span>
                            <span class="travelunderstandhero-step-text">Understand</span>
                        </a>
                        <span class="travelunderstandhero-nav-sep">/</span>
                        <a href="/travel-evaluate/" class="travelunderstandhero-nav-large-item">
                            <span class="travelunderstandhero-step-label">02</span>
                            <span class="travelunderstandhero-step-text">Evaluate</span>
                        </a>
                        <span class="travelunderstandhero-nav-sep">/</span>
                        <a href="/travel-act/" class="travelunderstandhero-nav-large-item">
                            <span class="travelunderstandhero-step-label">03</span>
                            <span class="travelunderstandhero-step-text">Act</span>
                        </a>
                    </nav>

                    <br>

                    <!-- Eyebrow & Page Indicator Row -->
                    <div class="travelunderstandhero-heading-row">
                        <div class="travelunderstandhero-slide-eyebrow">
                            <span class="travelunderstandhero-eyebrow-dot"></span>
                            <?php echo esc_html($eyebrow); ?>
                        </div>

                        <div class="travelunderstandhero-page-indicator">
                            <span class="travelunderstandhero-indicator-step">
                                <?php echo esc_html($current_step); ?>
                            </span>
                        </div>
                    </div>

                    <!-- Main Title -->
                    <h1 class="travelunderstandhero-slide-title">
                        <?php echo esc_html($title_white); ?>
                        <?php if ($title_blue) : ?>
                        <span><?php echo esc_html($title_blue); ?></span>
                        <?php endif; ?>
                    </h1>

                    <!-- Description -->
                    <?php if ($description) : ?>
                    <p class="travelunderstandhero-slide-desc"><?php echo nl2br(esc_html($description)); ?></p>
                    <?php endif; ?>

                </div>
            </div>

            <!-- Long Navy Sub-Nav Bar (Big Menu Buttons) -->
            <div class="travelunderstandhero-navy-bar">
                <nav class="travelunderstandhero-navy-button-group" role="tablist" aria-label="Topic Chapters">
                    <a href="#what-is-travel-insurance" class="travelunderstandhero-navy-btn active" role="tab">What is Travel Insurance?</a>
                    <a href="#travel-types" class="travelunderstandhero-navy-btn" role="tab">Types</a>
                    <a href="#travel-who-can-buy" class="travelunderstandhero-navy-btn" role="tab">Who can buy</a>
                    <a href="#travel-impact" class="travelunderstandhero-navy-btn" role="tab">Impact</a>
                    <a href="#travel-insurance-other" class="travelunderstandhero-navy-btn" role="tab">Travel  vs. other cover</a>
                    <a href="#travel-seven-things" class="travelunderstandhero-navy-btn" role="tab">7 things to know</a>
                </nav>
            </div>

            
        </div>
    </div>
</section>