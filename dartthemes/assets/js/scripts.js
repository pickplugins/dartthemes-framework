jQuery(function($){

'use strict';





/* === Back To Top === */

  (function () {
      $(window).scroll(function() {
          if ($(this).scrollTop() > 100) {
              $('.scroll-up').fadeIn();
          } else {
              $('.scroll-up').fadeOut();
          }
      });
      $('.scroll-up a').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
  }());


/* === Menu === */
    //$('.menu').slicknav('toggle');


    (function () {
    $('.menu').slicknav({
      prependTo:'.menu-mobile',
      label:''
    })
  }());



	
});