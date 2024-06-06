document.addEventListener('DOMContentLoaded', function(e){
    iniciarSwiper();
})

function iniciarSwiper(){
    var swiper = new Swiper(".mySwiper", {

        mousewheel: true,
        keyboard: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
            300: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            560:{
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 10,
            },
            1024: {
              slidesPerView: 4,
              spaceBetween: 30,
            },
          },
      });
}