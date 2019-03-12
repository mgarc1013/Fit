

$(window).scroll(function() {
  var height = $(window).scrollTop();
  if (height > 200) {
      $('#scroll').fadeIn();
  } else {
      $('#scroll').fadeOut();
  }
});

$(document).ready(function() {
  $("#scroll").click(function(event) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: 10 }, "slow");
      return false;
  });

});

$(".button-collapse").sideNav({
  edge: 'right'
});
(jQuery);

$(document).ready(function(){
  $('.modal').modal();
  });

$(".tap-target").hover(function(){
      $(this).tapTarget('open');
        }, function(){
        $(this).tapTarget('close');
    });