function fun(){
    var name = document.getElementById("Name").value;
    if(name.length < 3)
    {
        document.getElementById("NameError").innerHTML = "Name should be at least 3 characters long";
        event.preventDefault();
    }
    
    var email = document.getElementById("EMail").value;
    if(!email.includes('@'))
    {
        document.getElementById("EMailError").innerHTML = "Email doesnt contain @.";
        event.preventDefault();
    }
    
    var password = document.getElementById("Password").value;
    var confirmpassword = document.getElementById("ConfirmPassword").value;
    var hasless6 = true;
    if(password.length < 6)
    {
        var hasless6 = false;
    }
    var hasUpperCase = /[A-Z]/.test(password);
    var hasDigits = /[0123456789]/.test(password);
    var hasSpecialChar = /[!@#$%^&()*-+]/.test(password);
    
    if ( !hasless6 || !hasUpperCase || !hasDigits || !hasSpecialChar) {
        console.log(hasDigits + hasSpecialChar + hasUpperCase + hasless6)
        a= "You are missing"
        if(!hasless6)
        {
            a = a +" -6characters";
        }
        if(!hasUpperCase)
        {
            a = a +" -a Upper Case letter";
        }
        if(!hasDigits)
        {
            a = a +" -a digit";
        }
        if(!hasSpecialChar)
        {
            a = a +" -a Special Character";
        }
        a = a + ".";
        document.getElementById("PasswordError").innerHTML = a;
        event.preventDefault();
        // var a = "";
    }
    console.log(password)
    
    if(confirmpassword !== password)
    {
        document.getElementById("ConfirmPasswordError").innerHTML = "Confirm Password must match Password.";
        event.preventDefault();
    }
    
    
}