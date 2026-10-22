<?php
// Dynamic data array using precise matching Unsplash stock image URLs
$cards = [
    [
        'number' => '01',
        'image' => 'https://images.unsplash.com/photo-1530026405186-ed1f139313f8?auto=format&fit=crop&w=600&q=80',
        'icon' => 'assets/icons/heart.svg',
        'title' => 'Cardiac Event at 42',
        'description' => "Bypass surgery, ICU care, and post-operative medication. Without health cover, a family's savings can be depleted within weeks.",
        'stat_icon' => 'assets/icons/wallet.svg',
        'stat_value' => '₹8–15 Lakh',
        'caption' => 'Typical treatment cost - Tier-1 hospital'
    ],
    [
        'number' => '02',
        'image' => 'https://images.unsplash.com/photo-1563720223185-11003d516935?auto=format&fit=crop&w=600&q=80',
        'icon' => 'assets/icons/car.svg',
        'title' => 'Road Accident',
        'description' => 'India records approximately one road accident every minute. A spinal injury can mean permanent disability and complete loss of earning capacity.',
        'stat_icon' => 'assets/icons/wallet.svg',
        'stat_value' => '₹5–20 Lakh',
        'caption' => 'Treatment + rehabilitation + income loss'
    ],
    [
        'number' => '03',
        'image' => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=600&q=80',
        'icon' => 'assets/icons/family.svg',
        'title' => 'Sole Earner Lost',
        'description' => "When a family's primary earner passes away without life cover, education plans, home loans, and daily life all face disruption at once.",
        'stat_icon' => 'assets/icons/clock.svg',
        'stat_value' => '20–30 Years',
        'caption' => 'Of financial security the family would lose'
    ],
    [
        'number' => '04',
        'image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=600&q=80',
        'icon' => 'assets/icons/hospital-bed.svg',
        'title' => 'Critical Illness',
        'description' => 'Cancer or renal failure treatment is a multi-year financial commitment. Without cover, families frequently sell assets or take loans they carry for decades.',
        'stat_icon' => 'assets/icons/wallet.svg',
        'stat_value' => '₹10–50 Lakh',
        'caption' => 'Average cancer treatment cost over 2 years'
    ]
];
?>

<section class="insurance-absent">
  <div class="insurance-absent__container">
    
    <!-- Section Header -->
    <header class="insurance-absent__header">
      <h2 class="insurance-absent__title"><span>When Insurance</span> Was Absent</h2>
      <div class="insurance-absent__divider">
        <div class="insurance-absent__shield-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            <path d="m9 12 2 2 4-4"/>
          </svg>
        </div>
      </div>
      <p class="insurance-absent__subtitle">
        Life is unpredictable. Without insurance, unexpected events can lead to financial stress, deplete savings, and disrupt your family's future.
      </p>
    </header>

    <!-- Cards Slider -->
    <div class="insurance-absent__carousel-wrapper">
      <button class="insurance-absent__nav insurance-absent__nav--prev" aria-label="Previous slide">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>
      </button>

      <div class="insurance-absent__grid">
        <?php foreach ($cards as $card): ?>
          <article class="insurance-card">
            <div class="insurance-card__media">
              <span class="insurance-card__badge"><?php echo htmlspecialchars($card['number']); ?></span>
              <img src="<?php echo htmlspecialchars($card['image']); ?>" alt="<?php echo htmlspecialchars($card['title']); ?>" class="insurance-card__img" />
              <div class="insurance-card__category-icon">
                <img src="<?php echo htmlspecialchars($card['icon']); ?>" alt="" />
              </div>
            </div>

            <div class="insurance-card__content">
              <h3 class="insurance-card__title"><?php echo htmlspecialchars($card['title']); ?></h3>
              <p class="insurance-card__description"><?php echo htmlspecialchars($card['description']); ?></p>

              <div class="insurance-card__stat-pill">
                <img src="<?php echo htmlspecialchars($card['stat_icon']); ?>" alt="" class="insurance-card__stat-icon" />
                <span class="insurance-card__stat-value"><?php echo htmlspecialchars($card['stat_value']); ?></span>
              </div>

              <p class="insurance-card__caption"><?php echo htmlspecialchars($card['caption']); ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <button class="insurance-absent__nav insurance-absent__nav--next" aria-label="Next slide">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
      </button>
    </div>

    <!-- Dots -->
    <div class="insurance-absent__dots">
      <span class="insurance-absent__dot insurance-absent__dot--active"></span>
      <span class="insurance-absent__dot"></span>
      <span class="insurance-absent__dot"></span>
      <span class="insurance-absent__dot"></span>
    </div>

    <!-- Bottom Reality Banner -->
    <!-- <div class="insurance-absent__reality-banner">
      <div class="insurance-absent__reality-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          <path d="m9 12 2 2 4-4"/>
        </svg>
      </div>
      <div class="insurance-absent__reality-text">
        <strong class="insurance-absent__reality-title">The Reality</strong>
        <p class="insurance-absent__reality-desc">Without insurance, unexpected events don't just bring emotional stress—they bring financial setbacks that can take years to recover from.</p>
      </div>
    </div> -->

  </div>
</section>
<script>document.addEventListener('DOMContentLoaded', () => {
  const grid = document.querySelector('.insurance-absent__grid');
  const prevBtn = document.querySelector('.insurance-absent__nav--prev');
  const nextBtn = document.querySelector('.insurance-absent__nav--next');
  const dots = document.querySelectorAll('.insurance-absent__dot');
  const cards = document.querySelectorAll('.insurance-card');

  if (!grid || cards.length === 0) return;

  let currentIndex = 0;

  // Calculate maximum visible index based on current screen size
  const getCardsPerView = () => {
    if (window.innerWidth <= 640) return 1;
    if (window.innerWidth <= 1024) return 2;
    return 4;
  };

  const updateSlider = (index) => {
    const cardsPerView = getCardsPerView();
    const maxIndex = cards.length - cardsPerView;

    // Clamp index between 0 and maxIndex
    currentIndex = Math.max(0, Math.min(index, maxIndex));

    // Scroll to the targeted card smoothly
    const cardWidth = cards[0].offsetWidth;
    const gap = parseInt(window.getComputedStyle(grid).gap) || 24;
    const scrollAmount = currentIndex * (cardWidth + gap);

    grid.parentElement.scrollTo({
      left: scrollAmount,
      behavior: 'smooth'
    });

    // Update pagination dots state
    dots.forEach((dot, idx) => {
      dot.classList.toggle('insurance-absent__dot--active', idx === currentIndex);
    });
  };

  // Event Listeners for Navigation Buttons
  prevBtn?.addEventListener('click', () => updateSlider(currentIndex - 1));
  nextBtn?.addEventListener('click', () => updateSlider(currentIndex + 1));

  // Event Listeners for Pagination Dots
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => updateSlider(index));
  });

  // Handle window resize to adjust scroll bounds on mobile/tablet screens
  window.addEventListener('resize', () => updateSlider(currentIndex));
});</script>