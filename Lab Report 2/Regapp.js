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
    // --------------------------------password------------------------------
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
    
    if(confirmpassword !== password)
    {
        document.getElementById("ConfirmPasswordError").innerHTML = "Confirm Password must match Password.";
        event.preventDefault();
    }
    // ---------------------------------------Genre selection validation------------------------------------------
    let selectedValues = [];

    if (document.getElementById('FGA').checked) selectedValues.push(document.getElementById('FGA').value);
    if (document.getElementById('FGAd').checked) selectedValues.push(document.getElementById('FGAd').value);
    if (document.getElementById('FGP').checked) selectedValues.push(document.getElementById('FGP').value);
    if (document.getElementById('FGF').checked) selectedValues.push(document.getElementById('FGF').value);
    if (document.getElementById('FGD').checked) selectedValues.push(document.getElementById('FGD').value);

    if(selectedValues.length < 2)
    {
        document.getElementById("SelectionError").innerHTML = "Selected values are less than 2";
        event.preventDefault();
    }
    // ----------------------------------------country validation--------------------------------
    var country = document.getElementById("CountryName").value;
    var isvalid = /^[A-Z]{3}$/.test(country);

    if(!isvalid)
    {
        document.getElementById("CountryError").innerHTML = "Country code should be 3 lettres all uppercase";
        event.preventDefault();
    }
    // // ---------------------------------------gender validation-----------------------
    // var gender = $('input[name=Gender]:checked').val(); 
    // console.log(gender);
    // if(gender.value !== "M")
    // {
    //     document.getElementById("GenderError").innerHTML = "Please select a gender";
    //     event.preventDefault();
    // }
}