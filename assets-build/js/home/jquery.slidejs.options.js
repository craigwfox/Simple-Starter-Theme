// Slider Options for the Home Page
jQuery(document).ready(function($) {

  var mainSlider = $('#mainSlider');
  var mainSlidelen = $('#mainSlider img').length;

  if (mainSlidelen >= 2) {

    $(function(){
      mainSlider.slidesjs({
        width: 770,
        height: 4000,
        play: {
          auto: true,
          effect:'fade',
          interval:6500,
        },
        effect: {
          fade: {
            speed: 900
          }
        }
      });
    });

  } else {
    mainSlider.css('display','block');
    $('#slider img').css('visibility','visible');
  }

});