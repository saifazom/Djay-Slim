(function($) {
   "use strict";

   // =-=-= Sicky Header =-=-=
   jQuery(window).scroll(function(){
      if ($(window).scrollTop() >= 67) {
         $('.o-panel--heaher,.c-hamburger-menu__trigger').addClass('fixed-h');
      }
      else {
         $('.o-panel--heaher,.c-hamburger-menu__trigger').removeClass('fixed-h');
      }
   });

   jQuery('.more-btn').on('click', function(){
      $(this).hide();
      $('.hidden-photo').show();

      return false;
   });

   jQuery('.more-event-btn').on('click', function(){
      $(this).hide();
      $('.hidden-event').show();

      return false;
   });

   // =-=-= Slick Slider =-=-=
   jQuery('.js-video-carousel').slick({
      autoplay: false,
      prevArrow: jQuery('#video-prev'),
      nextArrow: jQuery('#video-next'),
      dots: false,
      autoplaySpeed: 4000,
      useCSS: false,
      cssEase: 'linear',
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: false,
      infinite: true,
      pauseOnDotsHover: false,
      pauseOnFocus: false,
      pauseOnHover: false,
      touchMove: true
   });

   jQuery('.js-testimonials').slick({
      autoplay: false,
      prevArrow: jQuery('#testimonial-prev'),
      nextArrow: jQuery('#testimonial-next'),
      dots: false,
      autoplaySpeed: 4000,
      useCSS: false,
      cssEase: 'linear',
      slidesToShow: 3,
      slidesToScroll: 1,
      adaptiveHeight: false,
      infinite: true,
      pauseOnDotsHover: false,
      pauseOnFocus: false,
      pauseOnHover: false,
      touchMove: true,
      responsive: [
         {
            breakpoint: 1024,
            settings: {
               slidesToShow: 2
            }
         },
         {
            breakpoint: 767,
            settings: {
               slidesToShow: 1
            }
         }
      ]
   });

   jQuery('.js-mixes').slick({
      autoplay: false,
      prevArrow: jQuery('#mixes-prev'),
      nextArrow: jQuery('#mixes-next'),
      dots: false,
      autoplaySpeed: 4000,
      useCSS: false,
      cssEase: 'linear',
      slidesToShow: 3,
      slidesToScroll: 3,
      adaptiveHeight: false,
      infinite: true,
      pauseOnDotsHover: false,
      pauseOnFocus: false,
      pauseOnHover: false,
      touchMove: true,
      responsive: [
         {
            breakpoint: 1024,
            settings: {
               slidesToShow: 2,
               slidesToScroll: 2
            }
         },
         {
            breakpoint: 767,
            settings: {
               slidesToShow: 1,
               slidesToScroll: 1
            }
         }
      ]
   });

   jQuery('.s-primary-menu ul li a').click(function(e) {
      e.preventDefault();

      var $handler = $(this);
      var target = $handler.attr('href');

      if($(target).length){
         $('body, html').animate({
            scrollTop: $(target).offset().top - 127
         });
      }

      $(this).parent().addClass('slected').siblings().removeClass('slected');
   });

   jQuery('.go-to-hash-item').click(function(e) {
      e.preventDefault();

      var $handler = $(this);
      var target = $handler.attr('href');

      if($(target).length){
         $('body, html').animate({
            scrollTop: $(target).offset().top - 127
         });
      }
   });

 /* -- End JS -- */
})(jQuery);
