( function( $ ) {
  $('.parallax section').each(function(){
      var $bgobj = $(this); // assigning the object

      $(window).scroll(function() {
          var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
          var coords = '50% '+ yPos + 'px';
          $bgobj.css({ backgroundPosition: coords });
      });
  });

  $('.small-wrap').find('span').on('click', function() {
      $('.menu').slideToggle(400);
  });

  $('.slider').bxSlider();
  
  var menu = $('.main-menu')[0];
  var $smallMenu = $('.menu-small');
  recalculateMenu();

  $(window).on('scroll', function() {
    recalculateMenu();
  });

  function recalculateMenu() {
    var rect = menu.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;

    var isVisible = elemTop < window.innerHeight && elemBottom >= 0;

    if (isVisible) {
        $smallMenu.slideUp(400);
    } else {
        $smallMenu.slideDown(400);
    }
  }
} )( jQuery );
