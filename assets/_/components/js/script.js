(function ($) {
    $(document).ready(function() {
      // Adds span "taxo" to taxonomy terms so they can be styled.
      $(".field-type-taxonomy-term-reference .field-items .field-item") .wrap("<span class='taxoterm'></span>"); 
  
      // Scroll animation for anchor links.
      $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {

              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                 if (target.length) {
                   $('html,body').animate({
                       scrollTop: target.offset().top
                  }, 1000);
                  return false;
              }
          }
      });
  }); //end document ready function
})(jQuery);