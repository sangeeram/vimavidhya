document.addEventListener("DOMContentLoaded", () => {

    const cards = document.querySelectorAll(
        ".pillar-card-wrapper"
    );

    if (!cards.length) return;

    const observer = new IntersectionObserver(
        (entries, observer) => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    entry.target.classList.add("is-visible");

                    observer.unobserve(entry.target);

                }

            });

        },
        {
            threshold: 0.2,
            rootMargin: "0px 0px -60px 0px"
        }
    );

    cards.forEach(card => {

        observer.observe(card);

    });

});