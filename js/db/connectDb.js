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