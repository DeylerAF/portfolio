/* ========== Swiper effect ========== */
var swiper = new Swiper(".blog-slider", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    mousewheel: {
        invert: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".blog-slider__pagination",
        clickable: true,
    },
    /* mousewheel: true, */
    keyboard: true,
});
//console.log("Portfolio swiper is working!");