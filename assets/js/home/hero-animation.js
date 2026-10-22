document.addEventListener("DOMContentLoaded", function () {

    gsap.registerPlugin(ScrollTrigger);

    const hero = document.querySelector("#home-hero");

    if (!hero) {
        return;
    }

    const slides = hero.querySelectorAll(".hero-slide");

    if (!slides.length) {
        return;
    }


    /* =========================================================
       GET ACTIVE SLIDE
    ========================================================= */

    function getActiveSlide() {

        return hero.querySelector(".hero-slide.active");

    }


    /* =========================================================
       ANIMATE SLIDE IN
    ========================================================= */

    function animateSlideIn(slide) {

        if (!slide) {
            return;
        }

        const image = slide.querySelector(".slide-image-wrapper");
        const overlay = slide.querySelector(".slide-image-overlay");

        const eyebrow = slide.querySelector(".slide-eyebrow");
        const title = slide.querySelector(".slide-title");
        const description = slide.querySelector(".slide-desc");
        const actions = slide.querySelector(".hero-actions");
        const categories = slide.querySelector(".hero-categories");
        const number = slide.querySelector(".hero-slide-number");


        /* ---------------------------------------------------------
           RESET
        --------------------------------------------------------- */

        gsap.killTweensOf([
            image,
            overlay,
            eyebrow,
            title,
            description,
            actions,
            categories,
            number
        ]);


        /* ---------------------------------------------------------
           IMAGE
        --------------------------------------------------------- */

        if (image) {

            gsap.fromTo(
                image,
                {
                    scale: 1.12
                },
                {
                    scale: 1,
                    duration: 1.8,
                    ease: "power3.out"
                }
            );

        }


        /* ---------------------------------------------------------
           OVERLAY
        --------------------------------------------------------- */

        if (overlay) {

            gsap.fromTo(
                overlay,
                {
                    opacity: 0
                },
                {
                    opacity: 1,
                    duration: 1.2,
                    ease: "power2.out"
                }
            );

        }


        /* ---------------------------------------------------------
           CONTENT TIMELINE
        --------------------------------------------------------- */

        const tl = gsap.timeline({
            defaults: {
                ease: "power3.out"
            }
        });


        if (eyebrow) {

            tl.fromTo(
                eyebrow,
                {
                    opacity: 0,
                    y: 30
                },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.7
                }
            );

        }


        if (title) {

            tl.fromTo(
                title,
                {
                    opacity: 0,
                    y: 70
                },
                {
                    opacity: 1,
                    y: 0,
                    duration: 1
                },
                "-=0.4"
            );

        }


        if (description) {

            tl.fromTo(
                description,
                {
                    opacity: 0,
                    y: 35
                },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.75
                },
                "-=0.5"
            );

        }


        if (actions) {

            tl.fromTo(
                actions,
                {
                    opacity: 0,
                    y: 30
                },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.7
                },
                "-=0.4"
            );

        }


        if (categories) {

            tl.fromTo(
                categories,
                {
                    opacity: 0,
                    y: 25
                },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.65
                },
                "-=0.35"
            );

        }


        if (number) {

            tl.fromTo(
                number,
                {
                    opacity: 0,
                    x: 30
                },
                {
                    opacity: 1,
                    x: 0,
                    duration: 0.6
                },
                "-=0.3"
            );

        }

    }


    /* =========================================================
       INITIAL HERO ANIMATION
    ========================================================= */

    const initialSlide = getActiveSlide();

    if (initialSlide) {

        animateSlideIn(initialSlide);

    }


    /* =========================================================
       HERO IMAGE PARALLAX
    ========================================================= */

    slides.forEach(function (slide) {

        const image = slide.querySelector(".slide-image-wrapper");

        if (!image) {
            return;
        }

        gsap.to(image, {

            yPercent: -8,

            ease: "none",

            scrollTrigger: {
                trigger: hero,
                start: "top top",
                end: "bottom top",
                scrub: 1
            }

        });

    });


});