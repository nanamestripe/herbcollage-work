var swiper = new Swiper('.swiper-container', {
  navigation: {
    nextEl: 'swiper-button-next',
    prevEl: 'swiper-button-prev'
  },
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: true
  }
});
