$(document).ready(function() {

  $('header').fadeIn(1000);
  $('#scrollbutton').click(function() {
    window.scroll({
      top: 0,
      left: 0,
      behavior: 'smooth'
    });
  })
  var height = $('#hover-me').height();
  height = height;
  $('#hover-me').css('line-height', height+'px');
  if($(window).width() > 900){
  $('#photo').hover(function() {
    $('#left').fadeIn('fast');
    $('#right').fadeIn('fast');
    $('#hover-me').fadeOut('fast');
    var p_height = $('#left p').height();
    $('.text-show').css('line-height', p_height+'px');
  }, function() {
    $('#left').fadeOut('fast');
    $('#right').fadeOut('fast');
    $('#hover-me').fadeIn('fast');
  });
}else{
  $('.text-show').hide();
  $('#hover-me').hide();
}
  $('#photo').hover(function() {
    $('header h1').html('hai...');
  }, function() {
    $('header h1').html('masatrio @ blog');
  });
});
