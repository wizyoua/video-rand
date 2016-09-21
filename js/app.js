jQuery( document ).ready(function($) {
	
/*
* Begin Controls for Video Player
*/
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
	});































});//ends jquery loaded
  