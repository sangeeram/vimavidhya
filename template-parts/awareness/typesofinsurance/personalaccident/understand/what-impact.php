<?php
$pa_events = [
    [
        'id'          => 'turning-36',
        'title'       => 'Turning 36',
        'icon'        => '🎂',
        'image'       => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Entering the next age bracket',
        'description' => 'Move into the next premium band — slight premium increase at renewal. Budget for the adjustment; do not lapse.',
    ],
    [
        'id'          => 'turning-46',
        'title'       => 'Turning 46',
        'icon'        => '📈',
        'image'       => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Mid-career risk tier shift',
        'description' => 'Next premium band — more significant increase for manual occupation classes. Review Capital Sum Insured (CSI) adequacy simultaneously.',
    ],
    [
        'id'          => 'turning-56',
        'title'       => 'Turning 56',
        'icon'        => '🛡️',
        'image'       => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Enhanced vulnerability phase',
        'description' => 'Many add-ons become more expensive; fracture risk rises. Add Fracture Care and Hospital Daily Cash if not already included.',
    ],
    [
        'id'          => 'turning-65',
        'title'       => 'Turning 65',
        'icon'        => '⏳',
        'image'       => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Entry threshold limit',
        'description' => 'Last opportunity to enter a new policy in most cases. If uninsured, buy immediately — every year of delay narrows options.',
    ],
    [
        'id'          => 'turning-70',
        'title'       => 'Turning 70',
        'icon'        => '🛑',
        'image'       => 'https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Renewal ceiling limits',
        'description' => 'Many individual policies stop accepting renewals; some stop at 75. Confirm your insurer\'s renewal ceiling early and plan accordingly.',
    ],
    [
        'id'          => 'turning-23',
        'title'       => 'Turning 23',
        'icon'        => '👶',
        'image'       => 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=600&q=80',
        'heading'     => 'Dependent child maturity',
        'description' => 'Child exits family policy coverage. Initiate child\'s own individual PA policy before their 23rd birthday.',
    ],
];

$assets_uri = get_template_directory_uri() . '/assets/images/lifestyle/';
?>

<section class="policy-impact-section pa-impact-section" id="pa-impact">
    <div class="policy-impact-compact-container">
        
        <!-- Header -->
        <div class="policy-impact-header">
            <!-- <span class="policy-impact-badge">02.5 Life Stages & Age Milestones</span> -->
            <h2 class="policy-impact-title">What Impacts Your PA Policy at Each Age?</h2>
            <p class="policy-impact-subtitle">
                Personal accident risk evolves across your lifetime. Here is how age milestones and life shifts alter your coverage terms and premiums.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="policy-impact-5col-grid">
            <?php foreach ($pa_events as $item): ?>
                <?php 
                    $img_src = (strpos($item['image'], 'http') === 0) 
                        ? $item['image'] 
                        : $assets_uri . $item['image']; 
                ?>
                <div class="impact-card-5col">
                    <div class="card-inner">
                        <div class="card-image-wrap">
                            <img src="<?= esc_url($img_src); ?>" alt="<?= htmlspecialchars($item['title']); ?>" loading="lazy" />
                        </div>

                        <div class="card-content">
                            <div class="card-header-row">
                                <span class="card-icon"><?= $item['icon']; ?></span>
                                <h3 class="card-title"><?= htmlspecialchars($item['title']); ?></h3>
                            </div>
                            <h4 class="card-heading"><?= htmlspecialchars($item['heading']); ?></h4>
                            <p class="card-desc"><?= htmlspecialchars($item['description']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Standalone Key Takeaway Banner -->
        <div class="pa-standalone-takeaway">
            <div class="takeaway-banner wide-banner">
                <div class="takeaway-badge-icon">✅</div>
                <div class="takeaway-text-group">
                    <strong class="takeaway-title">Key Takeaway —</strong>
                    <span class="takeaway-body">There is no perfect age to buy PA Insurance, but there is a perfect time — and that is before you need it. The premiums are lowest when you are young and healthy. The need is highest when an accident happens. These two moments must never be the same[cite: 2].</span>
                </div>
            </div>
        </div>

    </div>
</section>