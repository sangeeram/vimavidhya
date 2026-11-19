<?php
/**
 * Vima Vidya Feature Grid Template (3 Items with Learn More Links)
 */
$features = [
    [
        'title' => 'Understand Risk',
        'desc' => "Identify life's uncertainties and their direct financial impact with clear guidance.",
        'link' => home_url('/managing-risks/'),
        'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>'
    ],
    [
        'title' => 'Explore Insurance',
        'desc' => 'Learn different types of protection policies and what they actually cover for your family.',
        'link' => home_url('/awareness/#insurance-showcase'),
        'icon' => '<path d="M10 10H6l-2 8h6m4-8h4l2 8h-6m-4-8V4a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v6m-4 0h4"/>'
    ],
    [
        'title' => 'Learn With Stories',
        'desc' => 'Real-life examples and practical learning resources that make insurance easy to relate to.',
        'link' => home_url('/stories-that-matter/'),
        'icon' => '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>'
    ]
];
?>

<section class="vima-features-section">
    <div class="container">
        
        <!-- Header Section -->
        <div class="section-header">
            <h2>How VimaVidya Helps You</h2>
            <p>A simple, structured way to build insurance understanding and confidence.</p>
        </div>

        <!-- 3 Cards Grid -->
        <div class="features-grid">
            <?php foreach ($features as $feature): ?>
                <div class="feature-card">
                    <div class="card-top">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <?php echo $feature['icon']; ?>
                            </svg>
                        </div>
                        <div class="card-header-text">
                            <h3><?php echo htmlspecialchars($feature['title']); ?></h3>
                            <p><?php echo htmlspecialchars($feature['desc']); ?></p>
                        </div>
                    </div>
                    
                    <!-- Learn More Action Link -->
                    <a href="<?php echo htmlspecialchars($feature['link']); ?>" class="learn-more-btn">
                        Learn More 
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>