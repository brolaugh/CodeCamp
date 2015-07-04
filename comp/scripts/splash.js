var registerForm, loginForm;

function init(){
	registerForm = document.getElementById("register-form");
	loginForm = document.getElementById("login-form");
}
function showRegForm(){
	loginForm.style.display = "none";
	registerForm.style.display = "inline-block";
	
}
function showLoginForm(){
	registerForm.style.display = "none";
	loginForm.style.display = "inline-block";	
}