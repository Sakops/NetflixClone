const confirmP = document.getElementById('pass');
const togglePassword2 = document.getElementById("togglePassword");

togglePassword.addEventListener("click", toggleClicked);

function toggleClicked(){
    try{
        if (this.checked) {
            confirmP.type = "text";
        } else {
            confirmP.type = "password";
        }
    }catch(error){
        alert('something went wrong');
    } 
        
}