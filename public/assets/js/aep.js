// hero swiper
var hero = new Swiper(".heroSwiper", {
  pagination: {
    el: ".swiper-pagination",
  },
  loop: true,
  autoplay: {
    delay: 2500
  }
});

// pelanggan
var pelangganSwiper = new Swiper(".pelangganSwiper", {
  loop: true,
  autoplay: {
    delay: 2500
  },
  slidesPerView: 4,
  spaceBetween: 30,
});

// partener
var partnerSwiper = new Swiper(".partnerSwiper", {
  loop: true,
  autoplay: {
    delay: 3000
  },
  slidesPerView: 4,
  spaceBetween: 30,
}); 

// map
// var swiper = new Swiper(".mySwiper", {
//   pagination: {
//     el: ".swiper-pagination",
//   },
//   lazyLoading: true,
//   loop: true,
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
// });