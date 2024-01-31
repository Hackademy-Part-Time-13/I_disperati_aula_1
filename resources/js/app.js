import './bootstrap';
import 'bootstrap';
import './carosello-img';
import './password';

// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

// init Swiper:
const swiper = new Swiper('.mySwiper', {
  slidesPerView: 4,
  spaceBetween: 15,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

if (location.href.includes('http://127.0.0.1:8000/revisor/home')){
    console.log('ciao');
       new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          type: "fraction",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
}


