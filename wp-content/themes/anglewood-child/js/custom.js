$ = jQuery;


$( document ).ready(function() {

    AOS.init(
        {
            startEvent: 'DOMContentLoaded',
            disable: 'mobile'
        }
    );
    
      $('.recent-projects-slider').slick({
          slidesToShow: 3,
          slidesToScroll: 3,    
          autoplay: false,
          infinite: true,
          autoplaySpeed: 10000,
          arrows: true,
          prevArrow: $('.prev'),
          nextArrow: $('.next') 
      });
    
});


