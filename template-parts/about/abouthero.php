<?php
// Dynamic Configuration Variables
$brandName       = "Vimavidya";
$pageTitle       = "ABOUT US";
$headingText     = "ABOUT US";
$subheadingLine1 = "Empowering confidence through knowledge.";
$subheadingLine2 = "Building a safer tomorrow, together.";
$bgImagePath     = "https://images.unsplash.com/photo-1511895426328-dc8714191300?q=80&w=1600&auto=format&fit=crop";
?>

<section class="c-hero" style="background-image: url('<?php echo htmlspecialchars($bgImagePath); ?>');">
  <div class="c-hero__overlay"></div>
  
  <div class="c-hero__container">
    
    <!-- Top Brand Badge -->
    <div class="c-hero__brand-tag">
      <span class="c-hero__brand-name"><?php echo htmlspecialchars($brandName); ?></span>
      <span class="c-hero__brand-divider"></span>
      <span class="c-hero__brand-label"><?php echo htmlspecialchars($pageTitle); ?></span>
    </div>

    <!-- Main Title & Divider -->
    <h1 class="c-hero__title"><?php echo htmlspecialchars($headingText); ?></h1>
    <div class="c-hero__accent-line"></div>
    
    <!-- Subtitle -->
    <p class="c-hero__subtitle">
      <?php echo htmlspecialchars($subheadingLine1); ?><br>
      <?php echo htmlspecialchars($subheadingLine2); ?>
    </p>

    <!-- Breadcrumbs -->
    <nav class="c-hero__breadcrumb" aria-label="Breadcrumb navigation">
      <a href="/" class="c-hero__breadcrumb-link">Home</a>
      <span class="c-hero__breadcrumb-separator">/</span>
      <span class="c-hero__breadcrumb-current"><?php echo htmlspecialchars($pageTitle); ?></span>
    </nav>

  </div>
</section>