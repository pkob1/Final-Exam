function validate(){
    var pwdregex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
    var password = document.getElementById('password').value;
    var passwordResult = pwdregex.test(password);

    if(passwordResult == false){
        document.getElementById("error").innerHTML="Password must be between 7 to 15 characters and must contain at least one digit and a special character";
    }
    return true;
}