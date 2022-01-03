const password = document.getElementById('pass');
const confirmPassword = document.getElementById('pass2');
const togglePassword = document.getElementById("togglePassword");

togglePassword.addEventListener("click", toggleClicked);

function toggleClicked(){
    try{
        if (this.checked) {
            password.type = "text";
            confirmPassword.type = "text";
        } else {
            password.type = "password";
            confirmPassword.type = "password";
        }
    }catch(error){
        alert('something went wrong');
    } 
        
}
