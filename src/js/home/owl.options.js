jQuery(document).ready(function($) {

  if ($('.hero-slider__item').length > 1) {
    $("#home-slider").owlCarousel({
      autoPlay : 5000,
      stopOnHover : false,
      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      lazyLoad: true,
      lazyEffect: "fade",
      transitionStyle: "fade" 
    });
  }
 
});
