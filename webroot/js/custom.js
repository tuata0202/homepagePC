$(document).ready(function(){
    $('#reason-chosen').click(function () {
        $('html,body').animate({ scrollTop: $('.advantage ').offset().top - 150 }, 1000);
      });
      $(".top-section").height($(window).height() + 10);
      $( window ).resize(function() {
        $(".top-section").height($(window).height() + 10);
        $(".home__banner-background-video").height($(window).height());
      });
});
$('#owl-slider').owlCarousel({
  autoplay: true,
  loop: true,
  items: 1,
  dots: false,
  nav: false,
  navigation:true,
  navigationText: [
    "<i class='fa fa-angle-left fa-3x'></i>",
    "<i class='fa fa-angle-right fa-3x'></i>"
  ]
});
$('#project-slider').owlCarousel({
  autoplay: true,
  loop: true,
  items: 4,
  dots: false,
  nav: false,
  navigation:false,
});

$('#news-slide').owlCarousel({
  autoplay: true,
  loop: true,
  items: 4,
  dots: false,
  nav: false,
  navigation:false,
});