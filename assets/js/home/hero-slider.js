document.addEventListener('DOMContentLoaded', () => {
    // 1. Selector Mapping updated to support both global and property heroes
    const heroSection = document.querySelector('.insurance-hero, .property-insurance-hero');
    if (!heroSection) return;

    const slides = heroSection.querySelectorAll('.hero-slide');
    const dots = heroSection.querySelectorAll('.slider-dot');
    const nextBtn = heroSection.querySelector('.hero-arrow--next');
    const prevBtn = heroSection.querySelector('.hero-arrow--prev');
    
    // Config & Trackers
    let currentIdx = 0;
    const totalSlides = slides.length;
    let autoPlayInterval = null;
    const AUTOPLAY_DELAY = 6000; // 6 seconds

    // 2. Central Component State Engine
    function updateSlider(targetIdx) {
        // Drop active states from the older frame
        slides[currentIdx].classList.remove('active');
        if (dots[currentIdx]) dots[currentIdx].classList.remove('active');

        // Cyclically calculate the boundary frame indexes
        currentIdx = (targetIdx + totalSlides) % totalSlides;

        // Apply active states to target elements
        slides[currentIdx].classList.add('active');
        if (dots[currentIdx]) dots[currentIdx].classList.add('active');
    }

    // 3. Side Arrow Control Event Triggers
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            updateSlider(currentIdx + 1);
            resetAutoPlay();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            updateSlider(currentIdx - 1);
            resetAutoPlay();
        });
    }

    // 4. Dot Pagination Click Navigation Triggers
    dots.forEach(dot => {
        dot.addEventListener('click', (e) => {
            const goTo = parseInt(e.target.getAttribute('data-goto'), 10);
            if (goTo === currentIdx) return; 
            
            updateSlider(goTo);
            resetAutoPlay();
        });
    });

    // 5. Autoplay Engine Management Functions
    function startAutoPlay() {
        if (totalSlides <= 1) return; 
        autoPlayInterval = setInterval(() => {
            updateSlider(currentIdx + 1);
        }, AUTOPLAY_DELAY);
    }

    function resetAutoPlay() {
        clearInterval(autoPlayInterval);
        startAutoPlay();
    }

    // 6. Initialize Engine Sequence
    startAutoPlay();
});