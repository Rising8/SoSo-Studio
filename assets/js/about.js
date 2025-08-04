// Slider for About Page - Get To Know Us Section
document.addEventListener("DOMContentLoaded", function () {
  var TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: false,
    initialSlide: 1,
    slidesPerView: 2.5,
    spaceBetween: 30,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 150,
      modifier: 1,
      slideShadows: false
    },

    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });
});
