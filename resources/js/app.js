import './bootstrap';
import 'bootstrap';
import './carosello-img';
import './password';

// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

// init Swiper:
const swiper = new Swiper('.mySwiper',{
    slidesPerView: 4,
    spaceBetween: 20,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
});




