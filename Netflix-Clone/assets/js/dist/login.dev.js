"use strict";

var confirmP = document.getElementById('pass');
var togglePassword2 = document.getElementById("togglePassword");
togglePassword.addEventListener("click", toggleClicked);

function toggleClicked() {
  try {
    if (this.checked) {
      confirmP.type = "text";
    } else {
      confirmP.type = "password";
    }
  } catch (error) {
    alert('something went wrong');
  }
}