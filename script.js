// script.js -- client side small helpers
window.addEventListener('DOMContentLoaded', function(){
const emailInput = document.getElementById('email');
const remember = document.getElementById('rememberMe');


// Prefill from cookie/localStorage if present
try {
const remembered = localStorage.getItem('remember_email');
if(remembered){
emailInput.value = remembered;
remember.checked = true;
}
} catch(e){}


document.getElementById('loginForm').addEventListener('submit', function(){
if(remember.checked){
localStorage.setItem('remember_email', emailInput.value);
} else {
localStorage.removeItem('remember_email');
}
});
});