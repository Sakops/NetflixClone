"use strict";

var password = document.getElementById('pass');
var confirmPassword = document.getElementById('pass2');
var togglePassword = document.getElementById("togglePassword");
togglePassword.addEventListener("click", toggleClicked);

function toggleClicked() {
  try {
    if (this.checked) {
      password.type = "text";
      confirmPassword.type = "text";
    } else {
      password.type = "password";
      confirmPassword.type = "password";
    }
  } catch (error) {
    alert('something went wrong');
  }
}