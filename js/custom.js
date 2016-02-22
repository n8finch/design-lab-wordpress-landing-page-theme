(function ($) {

  $(document).ready(function () {

    //Pulsing scroll replace
    //$(".hero-scroll").click(function() {
    //  $('html, body').animate({
    //    scrollTop: $("#about-us").offset().top
    //  }, 1000);
    //});



    //Parallax Effect
    //$(document).ready(function() {
    //  if ($("#js-parallax-window").length) {
    //    parallax();
    //  }
    //});
    //
    //$(window).scroll(function(e) {
    //  if ($("#js-parallax-window").length) {
    //    parallax();
    //  }
    //});
    //
    //function parallax(){
    //  if( $("#js-parallax-window").length > 0 ) {
    //    var plxBackground = $("#js-parallax-background");
    //    var plxWindow = $("#js-parallax-window");
    //
    //    var plxWindowTopToPageTop = $(plxWindow).offset().top;
    //    var windowTopToPageTop = $(window).scrollTop();
    //    var plxWindowTopToWindowTop = plxWindowTopToPageTop - windowTopToPageTop;
    //
    //    var plxBackgroundTopToPageTop = $(plxBackground).offset().top;
    //    var windowInnerHeight = window.innerHeight;
    //    var plxBackgroundTopToWindowTop = plxBackgroundTopToPageTop - windowTopToPageTop;
    //    var plxBackgroundTopToWindowBottom = windowInnerHeight - plxBackgroundTopToWindowTop;
    //    var plxSpeed = 0.35;
    //
    //    plxBackground.css('top', - (plxWindowTopToWindowTop * plxSpeed) + 'px');
    //  }
    //}

    // variables
    var $header_top = $('.header-top');
    var $nav = $('nav');



// toggle menu
    $header_top.find('a').on('click', function() {
      $(this).parent().toggleClass('open-menu');
    });



// fullpage customization
    $('#fullpage').fullpage({
      sectionSelector: '.vertical-scrolling',
      slideSelector: '.horizontal-scrolling',
      navigation: true,
      slidesNavigation: true,
      controlArrows: false,
      anchors: ['hero-section', 'about-us', 'services-section', 'what-we-do-section', 'gallery-section', 'contact-us-section'],
      menu: '#menu',

      afterLoad: function(anchorLink, index) {
        $header_top.css('background', 'rgba(0, 47, 77, .3)');
        $nav.css('background', 'rgba(0, 47, 77, .25)');
        if (index == 5) {
          $('#fp-nav').hide();
        }
      },

      onLeave: function(index, nextIndex, direction) {
        if(index == 5) {
          $('#fp-nav').show();
        }
      },

      afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex) {
        if(anchorLink == 'contact-us-section' && slideIndex == 1) {
          $.fn.fullpage.setAllowScrolling(false, 'up');
          $header_top.css('background', 'transparent');
          $nav.css('background', 'transparent');
          $(this).css('background', '#374140');
          $(this).find('h2').css('color', 'white');
          $(this).find('h3').css('color', 'white');
          $(this).find('p').css(
            {
              'color': '#DC3522',
              'opacity': 1,
              'transform': 'translateY(0)'
            }
          );
        }
      },

      onSlideLeave: function( anchorLink, index, slideIndex, direction) {
        if(anchorLink == 'contact-us-section' && slideIndex == 1) {
          $.fn.fullpage.setAllowScrolling(true, 'up');
          $header_top.css('background', 'rgba(0, 47, 77, .3)');
          $nav.css('background', 'rgba(0, 47, 77, .25)');
        }
      }
    });


    //Modals
    $(function() {
      $("#modal-1").on("change", function() {
        if ($(this).is(":checked")) {
          $("body").addClass("modal-open");
        } else {
          $("body").removeClass("modal-open");
        }
      });

      $(".modal-fade-screen, .modal-close").on("click", function() {
        $(".modal-state:checked").prop("checked", false).change();
      });

      $(".modal-inner").on("click", function(e) {
        e.stopPropagation();
      });
    });





  });

}(jQuery));