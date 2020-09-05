$( document ).ready(function() {
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        slidesPerView: 6,
        spaceBetween: 30,
        mousewheel: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
    });
});
