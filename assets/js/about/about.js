document.addEventListener("DOMContentLoaded", function () {

    /* =========================================================
       ABOUT HERO SLIDER
    ========================================================= */

    const slides = document.querySelectorAll(".about-hero-slide");
    const dots = document.querySelectorAll(".about-slide-dot");

    if (slides.length && dots.length) {

        let currentSlide = 0;
        let autoSlide;

        function showSlide(index) {

            slides.forEach((slide, i) => {
                slide.classList.toggle("active", i === index);
            });

            dots.forEach((dot, i) => {
                dot.classList.toggle("active", i === index);
            });

            currentSlide = index;
        }

        function startAutoSlide() {

            clearInterval(autoSlide);

            autoSlide = setInterval(function () {

                let nextSlide = currentSlide + 1;

                if (nextSlide >= slides.length) {
                    nextSlide = 0;
                }

                showSlide(nextSlide);

            }, 5000);
        }

        dots.forEach((dot, index) => {

            dot.addEventListener("click", function () {

                clearInterval(autoSlide);

                showSlide(index);

                startAutoSlide();

            });

        });

        showSlide(0);
        startAutoSlide();
    }


    /* =========================================================
       WHAT WE DO - ACCORDION CARDS
    ========================================================= */

    const cards = document.querySelectorAll(".what-card");

    if (cards.length) {

        cards.forEach(function (card) {

            const trigger = card.querySelector(".what-card-trigger");
            const toggle = card.querySelector(".what-card-toggle");

            /*
             * Support either:
             * .what-card-trigger
             * OR
             * .what-card-toggle
             */

            const clickableElement = trigger || toggle;

            if (!clickableElement) {
                return;
            }

            clickableElement.addEventListener("click", function (event) {

                event.preventDefault();

                const isOpen =
                    card.classList.contains("active") ||
                    card.classList.contains("is-open");

                /* Close every card */
                cards.forEach(function (otherCard) {

                    otherCard.classList.remove("active");
                    otherCard.classList.remove("is-open");

                    const otherToggle =
                        otherCard.querySelector(".what-card-toggle");

                    if (otherToggle) {
                        otherToggle.setAttribute(
                            "aria-expanded",
                            "false"
                        );
                    }

                });

                /* Open clicked card */
                if (!isOpen) {

                    card.classList.add("active");
                    card.classList.add("is-open");

                    if (toggle) {
                        toggle.setAttribute(
                            "aria-expanded",
                            "true"
                        );
                    }

                }

            });

        });

    }


    /* =========================================================
       SMOOTH SCROLL
    ========================================================= */

    const anchorLinks = document.querySelectorAll(
        'a[href^="#"]'
    );

    anchorLinks.forEach(function (link) {

        link.addEventListener("click", function (event) {

            const targetId =
                link.getAttribute("href");

            if (
                !targetId ||
                targetId === "#" ||
                targetId.length < 2
            ) {
                return;
            }

            const target =
                document.querySelector(targetId);

            if (!target) {
                return;
            }

            event.preventDefault();

            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });

        });

    });


    /* =========================================================
       HEADER SCROLL EFFECT
    ========================================================= */

    const header =
        document.querySelector(".site-header");

    if (header) {

        function updateHeader() {

            if (window.scrollY > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }

        }

        window.addEventListener(
            "scroll",
            updateHeader,
            { passive: true }
        );

        updateHeader();
    }


    /* =========================================================
       MOBILE MENU
    ========================================================= */

    const menuToggle =
        document.querySelector(".menu-toggle");

    const mobileMenu =
        document.querySelector(".mobile-menu");

    if (menuToggle && mobileMenu) {

        menuToggle.addEventListener("click", function () {

            const isOpen =
                mobileMenu.classList.contains("active");

            mobileMenu.classList.toggle("active");

            menuToggle.classList.toggle("active");

            menuToggle.setAttribute(
                "aria-expanded",
                isOpen ? "false" : "true"
            );

        });

        /* Close mobile menu after clicking a link */

        const mobileLinks =
            mobileMenu.querySelectorAll("a");

        mobileLinks.forEach(function (link) {

            link.addEventListener("click", function () {

                mobileMenu.classList.remove("active");
                menuToggle.classList.remove("active");

                menuToggle.setAttribute(
                    "aria-expanded",
                    "false"
                );

            });

        });

    }


    /* =========================================================
       ESC KEY - CLOSE MOBILE MENU / CARDS
    ========================================================= */

    document.addEventListener("keydown", function (event) {

        if (event.key !== "Escape") {
            return;
        }

        /* Close mobile menu */

        if (mobileMenu) {
            mobileMenu.classList.remove("active");
        }

        if (menuToggle) {
            menuToggle.classList.remove("active");

            menuToggle.setAttribute(
                "aria-expanded",
                "false"
            );
        }

        /* Close cards */

        cards.forEach(function (card) {

            card.classList.remove("active");
            card.classList.remove("is-open");

            const toggle =
                card.querySelector(".what-card-toggle");

            if (toggle) {
                toggle.setAttribute(
                    "aria-expanded",
                    "false"
                );
            }

        });

    });

});