/**
 * Interactive Assessment Grid Handler
 */
document.addEventListener('DOMContentLoaded', () => {
    const assessmentCards = document.querySelectorAll('.assessment-card');

    assessmentCards.forEach(card => {
        card.addEventListener('click', (event) => {
            // Do not trigger flip animation if target element clicked is the actual CTA button link
            if (event.target.classList.contains('btn-learn')) {
                return;
            }
            
            // Toggle active animation status
            card.classList.toggle('is-flipped');
        });
    });
});