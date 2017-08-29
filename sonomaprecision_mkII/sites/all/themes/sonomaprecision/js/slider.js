(function($){
  Drupal.behaviors.slider = {
    attach: function (context, settings) {
      $('.field-items').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
      });
    }
  };
})(jQuery);
