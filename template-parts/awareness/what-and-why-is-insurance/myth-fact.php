<?php
// ========================================
// MISCONCEPTIONS DATA ARRAY
// ========================================
$misconceptions = [
    [
        'id'          => 1,
        'number'      => '01',
        'myth'        => '"I\'m young and healthy. Insurance can wait."',
        'fact'        => 'The most advantageous time to purchase cover is when you are young and healthy. Premiums are at their lowest, and pre-existing conditions cannot be excluded.',
        'image'       => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'id'          => 2,
        'number'      => '02',
        'myth'        => '"Insurance companies don\'t pay claims."',
        'fact'        => 'IRDAI data shows India\'s leading insurers maintain claim settlement ratios above 95%. The majority of rejected claims involve non-disclosure.',
        'image'       => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'id'          => 3,
        'number'      => '03',
        'myth'        => '"My employer provides health cover. That\'s sufficient."',
        'fact'        => 'Employer cover ceases the day you leave. Cover is also typically ₹2-5 lakh, well below the ₹10-20 lakh required for serious illness today.',
        'image'       => 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'id'          => 4,
        'number'      => '04',
        'myth'        => '"INSURANCE IS TOO EXPENSIVE FOR ME."',
        'fact'        => 'A basic term life policy can cost less than ₹500 per month. The cost of being uninsured is almost always far higher.',
        'image'       => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'id'          => 5,
        'number'      => '05',
        'myth'        => '"My LIC policy provides sufficient cover."',
        'fact'        => 'Traditional endowment policies blend insurance and investment inefficiently. A separate term plan provides significantly more coverage at a fraction of the cost.',
        'image'       => 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=800&q=80'
    ],
    [
        'id'          => 6,
        'number'      => '06',
        'myth'        => '"Insurance is too complicated to understand."',
        'fact'        => 'A basic term plan requires three decisions: coverage amount, duration, and insurer. The decision can be made thoughtfully in under an hour.',
        'image'       => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80'
    ]
];
$initialIndex = 0; // Starting at 4th card ("Insurance is too expensive")
?>

<section class="misconceptions">
  <div class="misconceptions__container">
    
    <!-- Section Header -->
    <header class="misconceptions__header">
      <span class="misconceptions__subheading">COMMON MISCONCEPTIONS</span>
      <h2 class="misconceptions__title">Myth VS Fact</h2>
    </header>

    <!-- Interactive Carousel Wrapper -->
    <div class="misconceptions__wrapper">
      
      <!-- Left Side: Myth Card -->
      <article class="misconception-card" id="misconceptionCard" style="background-image: url('<?php echo htmlspecialchars($misconceptions[$initialIndex]['image']); ?>');">
        <div class="misconception-card__overlay"></div>
        <div class="misconception-card__inner">
          <span class="misconception-card__badge misconception-card__badge--myth">MYTH</span>
          <h3 class="misconception-card__myth-text" id="mythText">
            <?php echo htmlspecialchars($misconceptions[$initialIndex]['myth']); ?>
          </h3>
          <!-- <button class="misconception-card__btn-reveal" id="btnReveal" type="button">REVEAL FACT &rarr;</button> -->
        </div>
      </article>

      <!-- Right Side: Fact Card -->
      <div class="misconception-fact" id="factPanel">
        <div class="misconception-fact__body">
          <span class="misconception-card__badge misconception-card__badge--fact">FACT</span>
          <p class="misconception-fact__text" id="factText">
            <?php echo htmlspecialchars($misconceptions[$initialIndex]['fact']); ?>
          </p>
        </div>
        
        <!-- Controls & Navigation -->
        <div class="misconceptions__controls">
          <button class="misconceptions__nav misconceptions__nav--prev" aria-label="Previous myth">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>
          </button>
          <button class="misconceptions__nav misconceptions__nav--next" aria-label="Next myth">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
          </button>
          <span class="misconceptions__counter" id="slideCounter">
            <?php echo ($initialIndex + 1); ?> / <?php echo count($misconceptions); ?>
          </span>
        </div>
      </div>

    </div>

    <!-- Pagination Indicators -->
    <div class="misconceptions__dots">
      <?php foreach ($misconceptions as $index => $item): ?>
        <span class="misconceptions__dot <?php echo $index === $initialIndex ? 'misconceptions__dot--active' : ''; ?>" data-index="<?php echo $index; ?>"></span>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', () => {
  const misconceptionsData = <?php echo json_encode($misconceptions); ?>;
  let currentIndex = <?php echo $initialIndex; ?>;

  const cardElement = document.getElementById('misconceptionCard');
  const mythText = document.getElementById('mythText');
  const factText = document.getElementById('factText');
  const slideCounter = document.getElementById('slideCounter');
  const prevBtn = document.querySelector('.misconceptions__nav--prev');
  const nextBtn = document.querySelector('.misconceptions__nav--next');
  const dots = document.querySelectorAll('.misconceptions__dot');

  const updateSlide = (index) => {
    // Clamp or loop index
    if (index < 0) index = misconceptionsData.length - 1;
    if (index >= misconceptionsData.length) index = 0;

    currentIndex = index;
    const currentData = misconceptionsData[currentIndex];

    // Update Image & Text
    cardElement.style.backgroundImage = `url('${currentData.image}')`;
    mythText.textContent = currentData.myth;
    factText.textContent = currentData.fact;
    slideCounter.textContent = `${currentIndex + 1} / ${misconceptionsData.length}`;

    // Update Dots
    dots.forEach((dot, idx) => {
      dot.classList.toggle('misconceptions__dot--active', idx === currentIndex);
    });
  };

  // Event Listeners
  prevBtn?.addEventListener('click', () => updateSlide(currentIndex - 1));
  nextBtn?.addEventListener('click', () => updateSlide(currentIndex + 1));

  dots.forEach((dot) => {
    dot.addEventListener('click', (e) => {
      const targetIndex = parseInt(e.target.getAttribute('data-index'), 10);
      updateSlide(targetIndex);
    });
  });
});
</script>