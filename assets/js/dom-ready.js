$(document).ready(function(){
    var slider = $('#slider');

    slider.owlCarousel({
        items: 1,
        nav: true,
        navText: ['', ''],
        loop: true,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        onInitialized: function() {
          $('.slider-content').eq(2).addClass('show');
        }
    });

    var sliderContent = $('.slider-content');

    slider.on('changed.owl.carousel', function(e){
      sliderContent.each(function(){
        $(this).removeClass('show');
      });

      var slide = $('.owl-item').eq(e.item.index);

      slide.find('.slider-content').addClass('show');
    });


    // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
});
