(function ($) {

  $(document).ready(function () {

    //Pulsing scroll replace
    $(".hero-scroll").click(function() {
      $('html, body').animate({
        scrollTop: $("#about-us").offset().top
      }, 1000);
    });



    //Parallax Effect
    $(document).ready(function() {
      if ($("#js-parallax-window").length) {
        parallax();
      }
    });

    $(window).scroll(function(e) {
      if ($("#js-parallax-window").length) {
        parallax();
      }
    });

    function parallax(){
      if( $("#js-parallax-window").length > 0 ) {
        var plxBackground = $("#js-parallax-background");
        var plxWindow = $("#js-parallax-window");

        var plxWindowTopToPageTop = $(plxWindow).offset().top;
        var windowTopToPageTop = $(window).scrollTop();
        var plxWindowTopToWindowTop = plxWindowTopToPageTop - windowTopToPageTop;

        var plxBackgroundTopToPageTop = $(plxBackground).offset().top;
        var windowInnerHeight = window.innerHeight;
        var plxBackgroundTopToWindowTop = plxBackgroundTopToPageTop - windowTopToPageTop;
        var plxBackgroundTopToWindowBottom = windowInnerHeight - plxBackgroundTopToWindowTop;
        var plxSpeed = 0.35;

        plxBackground.css('top', - (plxWindowTopToWindowTop * plxSpeed) + 'px');
      }
    }


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