//scroll navbar chaning color
$(function () {
    $(document).scroll(function () {
      var $nav = $(".navbar-fixed-top"),
          $links = $(".navbar-inverse .navbar-nav > li > a");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      $links.toggleClass('change', $(this).scrollTop() > $links.height());
    });
  });
  
/* smooth scroll */
$("#fe").click(function() {
  $('html, body').animate({
      scrollTop: $("#features").offset().top
  }, 2000);
  $('#fea').addClass('active');
  $('#home').removeClass('active');
  $('#contact').removeClass('active');
});
$("#cont").click(function() {
  $('html, body').animate({
      scrollTop: $("#contact").offset().top
  }, 2000);
  $('#fea').removeClass('active');
  $('#home').removeClass('active');
  $('#conta').addClass('active');
});
$("#main").click(function() {
  $('html, body').animate({
      scrollTop: 0
  }, 2000);
  $('#fea').removeClass('active');
  $('#home').addClass('active');
  $('#conta').removeClass('active');
});