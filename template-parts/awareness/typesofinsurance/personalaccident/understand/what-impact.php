<?php
$pa_events = [
    [
        'id'          => 'turning-36',
        'title'       => 'Turning 36',
        'icon'        => '🎂',
        'image'       => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Move into the next premium band — slight premium increase at renewal',
        'description' => 'Budget for the premium adjustment; do not lapse',
    ],
    [
        'id'          => 'turning-46',
        'title'       => 'Turning 46',
        'icon'        => '📈',
        'image'       => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Next premium band — more significant increase for manual occupation classes',
        'description' => 'Review CSI adequacy simultaneously',
    ],
    [
        'id'          => 'turning-56',
        'title'       => 'Turning 56',
        'icon'        => '🛡️',
        'image'       => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Many add-ons become more expensive; fracture risk rises',
        'description' => 'Add Fracture Care and Hospital Daily Cash if not already included',
    ],
    [
        'id'          => 'turning-65',
        'title'       => 'Turning 65',
        'icon'        => '⏳',
        'image'       => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Last opportunity to enter a new policy in most cases',
        'description' => 'If uninsured, buy immediately — every year of delay narrows options',
    ],
    [
        'id'          => 'turning-70',
        'title'       => 'Turning 70',
        'icon'        => '🛑',
        'image'       => 'https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Many individual policies stop accepting renewals; some stop at 75',
        'description' => "Confirm your insurer's renewal ceiling at age 60 — plan accordingly",
    ],
    [
        'id'          => 'turning-23',
        'title'       => 'Turning 23 (dependent child)',
        'icon'        => '👶',
        'image'       => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Child exits family policy coverage',
        'description' => "Initiate child's own individual PA policy before the 23rd birthday",
    ],
];

$assets_uri = function_exists('get_template_directory_uri') ? get_template_directory_uri() . '/assets/images/lifestyle/' : '';
?>

<section class="policy-impact-section pa-impact-section" id="pa-impact">
    <div class="policy-impact-compact-container">
        
        <!-- Header -->
        <div class="policy-impact-header">
            <h2 class="policy-impact-title">What Impacts Your Policy at Each Age Milestone</h2>
            <p class="policy-impact-subtitle">
                Personal accident risk evolves across your lifetime. Hover or tap the cards below to see how age milestones and life shifts alter your coverage terms and premiums.
            </p>
        </div>

        <!-- Flip Cards Grid Layout -->
        <div class="policy-impact-grid">
            <?php foreach ($pa_events as $item): ?>
                <?php 
                    $img_src = (strpos($item['image'], 'http') === 0) 
                        ? $item['image'] 
                        : $assets_uri . $item['image']; 
                ?>
                <div class="impact-flip-card">
                    <div class="flip-card-inner">
                        
                        <!-- Front Face (Only Title & Icon over Image) -->
                        <div class="flip-card-front">
                            <div class="card-image-wrap">
                                <img src="<?= esc_url($img_src); ?>" alt="<?= htmlspecialchars($item['title']); ?>" loading="lazy" />
                            </div>
                            <div class="card-content">
                                <div class="card-header-row">
                                    <span class="card-icon"><?= $item['icon']; ?></span>
                                    <h3 class="card-title"><?= htmlspecialchars($item['title']); ?></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Back Face (Heading & Description with Custom Subheadings) -->
                        <div class="flip-card-back">
                            <div class="card-back-content">
                                <div class="card-back-header">
                                    <span class="card-back-icon"><?= $item['icon']; ?></span>
                                    <h3 class="card-back-title"><?= htmlspecialchars($item['title']); ?></h3>
                                </div>
                                
                                <div class="back-section">
                                    <span class="back-label">What Changes</span>
                                    <p class="card-desc"><?= htmlspecialchars($item['heading']); ?></p>
                                </div>

                                <div class="back-section">
                                    <span class="back-label">Action Required</span>
                                    <p class="card-desc"><?= htmlspecialchars($item['description']); ?></p>
                                </div>

                                <span class="flip-hint">Hover to flip back</span>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Standalone Key Takeaway Banner -->
        <div class="pa-standalone-takeaway" style="margin-top: 40px;">
            <div class="takeaway-banner wide-banner">
                <div class="takeaway-badge-icon">✅</div>
                <div class="takeaway-text-group">
                    <strong class="takeaway-title">Key Takeaway —</strong>
                    <span class="takeaway-body">There is no perfect age to buy PA Insurance, but there is a perfect time — and that is before you need it. The premiums are lowest when you are young and healthy. The need is highest when an accident happens. These two moments must never be the same.</span>
                </div>
            </div>
        </div>

    </div>
</section>