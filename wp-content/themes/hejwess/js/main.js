( function( $ ) {
  $('.parallax section').each(function(){
      var $bgobj = $(this); // assigning the object

      $(window).scroll(function() {
          var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
          var coords = '50% '+ yPos + 'px';
          $bgobj.css({ backgroundPosition: coords });
      });
  });
} )( jQuery );
