function func(event) {

    let isValid = true;
    
    // document.getElementById("NameError").innerHTML = "";
    // document.getElementById("EmailError").innerHTML = "";
    // document.getElementById("MobileError").innerHTML = "";
    // document.getElementById("GenderError").innerHTML = "";
    // document.getElementById("DesignationError").innerHTML = "";
    // document.getElementById("SalaryError").innerHTML = "";

    const uname = document.getElementById("uname").value;
    const email = document.getElementById("email").value;
    const designation = document.getElementById("designation").value;
    const salary = document.getElementById("salary").value;
    const mobile = document.getElementById("mobile").value;


    if (uname.length < 3) {
        document.getElementById("NameError").innerHTML = "Name should be at least 3 characters long.";
        isValid = false;
    }

    if (!email.includes('@')) {
        document.getElementById("EmailError").innerHTML = "Email must contain an @ symbol.";
        isValid = false;
    }

    const mobileRegex = /^01\d{9}$/;
    if (mobile.length > 0 && !mobileRegex.test(mobile)) {
        document.getElementById("MobileError").innerHTML = "Please enter a valid 11-digit mobile number starting with '01'.";
        isValid = false;
    }

    const genderRadios = document.getElementsByName("gender");
    let genderSelected = false;
    for (let i = 0; i < genderRadios.length; i++) {
        if (genderRadios[i].checked) {
            genderSelected = true;
            break;
        }
    }
    if (!genderSelected) {
        document.getElementById("GenderError").innerHTML = "Please select a gender.";
        isValid = false;
    }

    if (designation === "") {
        document.getElementById("DesignationError").innerHTML = "Designation cannot be empty.";
        isValid = false;
    }

    if (isNaN(salary) || salary <= 0) {
        document.getElementById("SalaryError").innerHTML = "Please enter a valid salary (greater than 0).";
        isValid = false;
    }

    if (!isValid) {
        event.preventDefault(); 

    return isValid;
}