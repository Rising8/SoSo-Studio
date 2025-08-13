// Slider for About Page - Get To Know Us Section
document.addEventListener("DOMContentLoaded", function () {
    // Creates a new swiper slider instance targetting the tranding-slider element
    var TrandingSlider = new Swiper('.tranding-slider', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: false,
        initialSlide: 1,
        slidesPerView: 2.5,
        spaceBetween: 30,

        // Settings specfic to the coverflow effect - creates a 3D carousel-like appearance
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 150,
            modifier: 1,
            slideShadows: false
        },

        // Pagination settings (dots below the slider)
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    });
});

