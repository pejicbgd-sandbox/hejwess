( function( $ ) {
  $('.parallax section').each(function(){
    var $bgobj = $(this); // assigning the object

    $(window).scroll(function() {
      var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
      var coords = '0% '+ yPos + 'px';
      $bgobj.css({ backgroundPosition: coords });
    });
  });

  $('.small-wrap span, .close').on('click', function() {
    $('.menu').slideToggle(400);
  });

  $('.slider').bxSlider();

  var menu = $('.main-menu')[0];
  var $smallMenu = $('.menu-small');
  recalculateAnimation();

  $(window).on('scroll', function() {
    recalculateAnimation();
  });

  function recalculateAnimation() {
    var menuRect = menu.getBoundingClientRect();
    var menuTop = menuRect.top;
    var menuBottom = menuRect.bottom;


    var isMenuVisible = menuTop < window.innerHeight && menuBottom >= 0;
    if (isMenuVisible) {
      $smallMenu.slideUp(400);
      $('.small-wrap').removeClass('visible');

    } else {
      $smallMenu.slideDown(400);
      $('.small-wrap').addClass('visible');
    }
  }

var $slideup = $('.slideme');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($slideup, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position) &&
      (!$element.hasClass('in-view'))) {
      $element.delay(300).addClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);

new TypeIt('.typeme', {
  strings: 'vision',
  breakLines: false,
  loop: true
});

function check_resize_cover() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  var $element = $('#first-section');
  var element_height = $element.outerHeight();
  var element_top_position = $element.offset().top;
  var element_bottom_position = (element_top_position + element_height);

  //check to see if this current container is within viewport
  if ((element_bottom_position >= window_top_position) &&
    (element_top_position <= window_bottom_position)) {
      console.log(12);
      
    $element.animate({ width: '100%' });
  }
}

$window.on('scroll resize', check_resize_cover);

} )( jQuery );
