<?php
// Lucide SVG Helper Function
function lucide_icon($name, $size = 32, $stroke_width = 2) {
    $icons = [
        // Lucide 'lightbulb'
        'lightbulb' => '<svg xmlns="http://www.w3.org/2000/svg" width="'.$size.'" height="'.$size.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$stroke_width.'" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1.3.5 2.6 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/><path d="M9 18h6"/><path d="M10 22h4"/></svg>',
        
        // Lucide 'search'
        'search' => '<svg xmlns="http://www.w3.org/2000/svg" width="'.$size.'" height="'.$size.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$stroke_width.'" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>',
        
        // Lucide 'clipboard-list'
        'clipboard-list' => '<svg xmlns="http://www.w3.org/2000/svg" width="'.$size.'" height="'.$size.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$stroke_width.'" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-list"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/></svg>',
        
        // Lucide 'shield-check'
        'shield-check' => '<svg xmlns="http://www.w3.org/2000/svg" width="'.$size.'" height="'.$size.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$stroke_width.'" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>',
        
        // Lucide 'arrow-right'
        'arrow-right' => '<svg xmlns="http://www.w3.org/2000/svg" width="'.$size.'" height="'.$size.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="'.$stroke_width.'" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>'
    ];

    return $icons[$name] ?? '';
}

$steps = [
    [
        'icon'  => 'lightbulb',
        'title' => 'UNDERSTAND',
        'desc'  => 'Learn the basics of insurance and risk.'
    ],
    [
        'icon'  => 'search',
        'title' => 'RECOGNISE',
        'desc'  => 'Identify the risks in everyday life.'
    ],
    [
        'icon'  => 'clipboard-list',
        'title' => 'PREPARE',
        'desc'  => 'Plan ahead and build your protection.'
    ],
    [
        'icon'  => 'shield-check',
        'title' => 'PROTECT',
        'desc'  => 'Transfer risk and secure what matters most.'
    ],
];

$cards = [
    [
        'number'       => '01',
        'title'        => 'WHAT IS INSURANCE?',
        'desc'         => 'Start with the basics. What insurance is, how it works, and why it exists.',
        'image'        => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=800&q=80',
        'link'         => '/awareness/what-is-insurance',
        'bg_color'     => '#EAF4EC', // Soft Mint
        'accent_color' => '#1B4332'
    ],
    [
        'number'       => '02',
        'title'        => 'WHY DOES INSURANCE MATTER?',
        'desc'         => 'Understand the financial impact of everyday risks.',
        'image'        => 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?auto=format&fit=crop&w=800&q=80',
        'link'         => '/awareness/why-insurance-matters',
        'bg_color'     => '#FEF6E4', // Soft Cream / Gold
        'accent_color' => '#855B14'
    ],
    [
        'number'       => '03',
        'title'        => 'TYPES OF INSURANCE',
        'desc'         => 'Explore coverage options across life, health, motor, property, and business protection.',
        'image'        => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=800&q=80',
        'link'         => '/awareness/types-of-insurance',
        'bg_color'     => '#EBF3FA', // Soft Sky Blue
        'accent_color' => '#1C4A70'
    ],
    [
        'number'       => '04',
        'title'        => 'MANAGING RISKS',
        'desc'         => "Understand → Prepare → Protect\n\nLearn how risk management works and where insurance fits in.",
        'image'        => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?auto=format&fit=crop&w=800&q=80',
        'link'         => '/awareness/managing-risks',
        'bg_color'     => '#F3EFEA', // Warm Pastel Beige
        'accent_color' => '#5C4A3E'
    ],
    [
        'number'       => '05',
        'title'        => 'STORIES THAT CONNECT',
        'desc'         => 'Real-life situations that make insurance easier to understand.',
        'image'        => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'link'         => '/awareness/stories',
        'bg_color'     => '#FCEEEB', // Soft Rose
        'accent_color' => '#7A3228'
    ],
];
?>

<section class="awareness-section">
    <div class="awareness-container">
        
        <!-- Header & Process Steps -->
        <header class="awareness-header">
            <span class="sub-heading">START HERE — YOUR AWARENESS JOURNEY</span>
            
            <div class="process-steps">
                <?php foreach ($steps as $index => $step): ?>
                    <div class="step-item">
                        <div class="step-icon">
                            <?php echo lucide_icon($step['icon'], 32, 2); ?>
                        </div>
                        <h3><?php echo htmlspecialchars($step['title']); ?></h3>
                        <p><?php echo htmlspecialchars($step['desc']); ?></p>
                    </div>
                    <?php if ($index < count($steps) - 1): ?>
                        <div class="step-arrow">
                            <?php echo lucide_icon('arrow-right', 20, 2); ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </header>

        <!-- Main Cards Grid -->
       <div class="cards-grid">
    <?php foreach ($cards as $card): ?>
        <article class="awareness-card" 
                 style="
                     background-image: url('<?php echo htmlspecialchars($card['image']); ?>');
                     --card-bg: <?php echo htmlspecialchars($card['bg_color']); ?>;
                     --card-accent: <?php echo htmlspecialchars($card['accent_color']); ?>;
                 ">
            <div class="card-overlay"></div>
            <div class="card-content">
                <span class="card-number"><?php echo htmlspecialchars($card['number']); ?></span>
                <h2 class="card-title"><?php echo htmlspecialchars($card['title']); ?></h2>
                <p class="card-desc"><?php echo nl2br(htmlspecialchars($card['desc'])); ?></p>
                <a href="<?php echo htmlspecialchars($card['link']); ?>" class="explore-btn">
                    Explore <span><?php echo lucide_icon('arrow-right', 16, 2); ?></span>
                </a>
            </div>
        </article>
    <?php endforeach; ?>
</div>

    </div>
</section>