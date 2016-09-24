
/*********************
Video Controllers
*********************/
jQuery( document ).ready(function($) {
    $('#mainVideo').click(function() {
        this.paused ? this.play() : this.pause();
    });
    $(window).keypress(function(e) {
	  var video = document.getElementById("mainVideo");
	  if (e.which == 32) {
	    if (video.paused == true)
	      video.play();
	    else
	      video.pause();
	  }
	});//ends mainvideo click functions
});//ends jquery loaded

/*********************
switch between login/register modal
*********************/
$(function() {
    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
});







  