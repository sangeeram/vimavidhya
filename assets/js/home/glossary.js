document.addEventListener('DOMContentLoaded', function () {
    const letters = document.querySelectorAll('.alphabet-letter-link');
    
    letters.forEach(letter => {
        letter.addEventListener('click', function (e) {
            // Optional: Intercept for AJAX loading if desired, else falls back to link queries
            letters.forEach(l => l.classList.remove('is-active'));
            this.classList.add('is-active');
        });
    });
});