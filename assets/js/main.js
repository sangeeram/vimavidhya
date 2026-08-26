document.addEventListener("DOMContentLoaded",()=>{

    navbar();

    heroSlider();

    accordion();

    glossarySearch();

});

const header = document.querySelector(".site-header");

window.addEventListener("scroll", () => {

    if(window.scrollY > 40){

        header.classList.add("scrolled");

    }

    else{

        header.classList.remove("scrolled");

    }

});
document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.site-header');
    
    const handleScroll = () => {
        if (window.scrollY > 50) {
            header.classList.add('is-sticky');
        } else {
            header.classList.remove('is-sticky');
        }
    };

    window.addEventListener('scroll', handleScroll);
});

document.addEventListener('DOMContentLoaded', function () {

    AOS.init({
        duration: 900,
        easing: 'ease-out-cubic',
        once: true,
        offset: 80,
        disable: false
    });

});