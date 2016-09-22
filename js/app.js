
var app = angular.module('video', []);
app.controller('registerForm', ['$scope',function($scope) {
 	$scope.registerEmail ="";
 	$scope.watch('registerEmail', function(newValue){
 		if (newValue.length === 0) {
 			console.log('empty');
 		}else {
 			console.log('has content');
 		}
 	})
}]);


jQuery( document ).ready(function($) {



/*********************
Video Controllers
*********************/
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
/*********************
Validate Form
*********************/
	
	    var length = $('#txtEmail').val().length;

		if (length == 0){
			console.log("empty");
			
		} else if(length < 4){
			$('.register-form-alert').append("Your email is not formatted properly");
		}
		else {
			console.log("password ok");
			$('.register-form-alert').append("<span class='register-form-alert-success'>Your Emai is OK</span>");
		}
	




/*********************
FIREBASE REGISTER
*********************/

// Initialize Firebase
var config = {
apiKey: "AIzaSyASokMvkXg155TmZFtBFUclqmmIS5yy8dA",
authDomain: "rand-b8615.firebaseapp.com",
databaseURL: "https://rand-b8615.firebaseio.com",
storageBucket: "",
messagingSenderId: "98446327425"
};
firebase.initializeApp(config);

//gets info from log in form

const txtEmailLogin = document.getElementById('txtEmailLogin');
const txtPasswordLogin = document.getElementById('txtPasswordLogin');
const btnLogin = document.getElementById('btnLogin');
//gets info from sign up form
//make sure to valdate form
const txtEmail = document.getElementById('txtEmail');
const txtPassword = document.getElementById('txtPassword');
const btnSignUp = document.getElementById('btnSignUp');
const btnLogout = document.getElementById('btnLogout');


//user sign in
btnLogin.addEventListener('click', e => {
	//grabs email and password
	const email = txtEmailLogin.value;
	const pass = txtPasswordLogin.value;
	const auth = firebase.auth();
	//signs in
	const promise = auth.signInWithEmailAndPassword(email,pass);
	promise.catch(e => console.log(e.message));
});


//User Sign up event
btnSignUp.addEventListener('click', e => {
	//grabs email and password
	const email = txtEmail.value;
	const pass = txtPassword.value;
	const auth = firebase.auth();
	//sign up
	const promise = auth.createUserWithEmailAndPassword(email,pass);
	promise.catch(e => console.log(e.message));
});

btnLogout.addEventListener('click', e=> {
	firebase.auth().signOut();
});

//real time authentication listener
firebase.auth().onAuthStateChanged(firebaseUser=>{
	if(firebaseUser) {
		console.log(firebaseUser);
		btnLogout.classList.remove('hide');
	} else{
		console.log('not logged in');
		btnLogout.classList.add('hide');
	}
});
  