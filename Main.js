function ValidateForm(){
    var email = document.getElementById("email").value;
    var passwordtype_1 = document.getElementById("Password_1").value;
    var passwordtype_2 = document.getElementById("Password_2").value;

    if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))){
        alert("You have entered an invalid email address!");
        return false;
    }
    else if(passwordtype_1 != passwordtype_2){
        alert("Please make sure your passwords match.");
        return false;
    }
    else{
        alert("You have registered successfully!");
        return true;
    }
}