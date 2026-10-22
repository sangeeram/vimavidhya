<?php
// Dynamic Configuration Variables
$brandName       = "Vimavidya";
$pageTitle       = "About Us";
$headingText     = "About Us";
$subheadingLine1 = "Empowering confidence through knowledge.";
$subheadingLine2 = "Building a safer tomorrow, together.";
$bgImagePath     = "https://images.unsplash.com/photo-1511895426328-dc8714191300?q=80&w=1600&auto=format&fit=crop";
$founderImagePath= get_template_directory_uri() . '/assets/images/aboutus/founder.png'; // Replace with your uploaded portrait image
?>

<div class="hero-wrapper">
  <section 
    class="c-hero" 
    style="--bg-image: url('<?php echo htmlspecialchars($bgImagePath); ?>');"
    data-aos="fade"
    data-aos-duration="1200"
  >
    <div class="c-hero__overlay"></div>

    <div class="c-hero__container">
      
      <!-- Content Column Left -->
      <div class="c-hero__content">
        <!-- Brand Tag -->
        <div 
          class="c-hero__brand-tag"
          data-aos="fade-down"
          data-aos-duration="800"
          data-aos-delay="200"
        >
          <span class="c-hero__brand-name">
            ABOUT <?php echo htmlspecialchars(strtoupper($brandName)); ?>
          </span>
        </div>

        <!-- Main Heading Title -->
        <h1 
          class="c-hero__title"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-delay="400"
        >
          <span class="c-hero__title-primary"><?php echo htmlspecialchars($headingText); ?></span>
          <span class="c-hero__title-secondary"><?php echo htmlspecialchars($subheadingLine1); ?></span>
        </h1>

        <!-- Subtitle & Breadcrumbs -->
        <p 
          class="c-hero__subtitle"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-delay="600"
        >
          <?php echo htmlspecialchars($subheadingLine2); ?>
        </p>

        <nav 
          class="c-hero__breadcrumb" 
          aria-label="Breadcrumb navigation"
          data-aos="fade-up"
          data-aos-duration="800"
          data-aos-delay="800"
        >
          <a href="/" class="c-hero__breadcrumb-link">Home</a>
          <span class="c-hero__breadcrumb-separator">/</span>
          <span class="c-hero__breadcrumb-current">
            <?php echo htmlspecialchars($pageTitle); ?>
          </span>
        </nav>

        <!-- Action Callout Buttons -->
        <div class="c-hero__actions">
          <a href="#explore" class="c-btn c-btn--primary">EXPLORE KNOWLEDGE</a>
          <div class="c-tag c-tag--orange">
            FOUNDER<br><?php echo htmlspecialchars(strtoupper($brandName)); ?>
          </div>
        </div>
      </div>

      <!-- Founder Image Column Right -->
      <div 
        class="c-hero__media"
        data-aos="fade-left"
        data-aos-duration="1000"
        data-aos-delay="500"
      >
        <!-- <div class="c-hero__image-wrapper">
          <img 
            src="<?php echo htmlspecialchars($founderImagePath); ?>" 
            alt="Founder - <?php echo htmlspecialchars($brandName); ?>" 
            class="c-hero__image"
          />
        </div> -->
      </div>

    </div>
  </section>
</div>