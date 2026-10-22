<?php
// Dynamic Hero Data
$subheading  = "ABOUT US";
$title       = "Empowering India<br>Through Insurance<br>Awareness & Education";
$description = "Vima Vidya is a public awareness initiative dedicated to making insurance simple, relevant, and accessible for every Indian. We believe informed citizens build a stronger, more resilient India.";
$heroImage   = "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSUvnNAb-udlQJRfQzjMhDN1ZzxHLKIgmAwtBBg1TEtsORl21ETHV_zx3MBs7U";// Dynamic PNG image with transparent/solid background

$features = [
    [
        'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/icons/people-fill.svg',
        'text' => 'Informed Today'
    ],
    [
        'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/icons/shield-check.svg',
        'text' => 'Secure Tomorrow'
    ],
    [
        'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/icons/sun-fill.svg',
        'text' => 'Resilient India'
    ]
];
?>

<section class="hero-section">
    <div class="hero-wrapper">
        <!-- Left Content Block -->
        <div class="hero-content">
            <div class="hero-subheading">
                <span><?php echo htmlspecialchars($subheading); ?></span>
                <div class="subheading-line"></div>
            </div>

            <h1 class="hero-title"><?php echo $title; ?></h1>

            <p class="hero-description">
                <?php echo htmlspecialchars($description); ?>
            </p>

            <div class="hero-features">
                <?php foreach ($features as $index => $feature): ?>
                    <div class="feature-item">
                        <img src="<?php echo htmlspecialchars($feature['icon']); ?>" alt="" class="feature-icon" aria-hidden="true" />
                        <span class="feature-text"><?php echo htmlspecialchars($feature['text']); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Right Media Block (Deep Curved Background) -->
        <!-- <div class="hero-media">
            <div class="curved-blue-bg">
                <img src="<?php echo htmlspecialchars($heroImage); ?>" alt="Books and Pencils" class="hero-img" />
            </div>
        </div> -->
    </div>
</section>