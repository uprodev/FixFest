jQuery(document).ready(function ($) {

  //slider
  var swiperFestival = new Swiper(".festival-slider", {
    slidesPerView: "auto",
    spaceBetween: 32,
    navigation: {
      nextEl: ".festival-next",
      prevEl: ".festival-prev",
    },
  });

  //slider
  var swiperPresenters = new Swiper(".presenters-slider", {
    slidesPerView: "auto",
    spaceBetween: 24,
  });

  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
    });
    setTimeout(function() {
      $('html').addClass('is-menu');
    }, 100);

  });

  /*close mob menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $.fancybox.close();
    $('html').removeClass('is-menu');
  });

  //accordion
  $(function() {
    $(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();
    $(document).on('click', '.accordion > .accordion-item .accordion-thumb', function (e){
      $(this).parent('.accordion-item').siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
      $(this).parent('.accordion-item').toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
    })
  });

  $('.select-block select').niceSelect();
});