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


/*
	FIREBASE REGISTER
*/

// Initialize Firebase
var config = {
apiKey: "AIzaSyASokMvkXg155TmZFtBFUclqmmIS5yy8dA",
authDomain: "rand-b8615.firebaseapp.com",
databaseURL: "https://rand-b8615.firebaseio.com",
storageBucket: "",
messagingSenderId: "98446327425"
};
firebase.initializeApp(config);

var email = $("#txtEmail").val();
var password = $("txtPassword").val();
var confirmPassword = $("confirmPassword").val();
var signUp = $("btnSignUp").val();
var logout = $("btnLogout").val();



























});//ends jquery loaded
  