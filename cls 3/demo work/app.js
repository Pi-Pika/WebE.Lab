function fun() {
    event.preventDefault(); 

    let username = document.getElementById("UserName").value;
    let flag = 0;


    for (let i = 0; i < username.length; i++) {
        if ((username[i] >= 'A' && username[i] <= 'Z') || ((username[i] >= 'a' && username[i] <= 'z'))) {
            flag++;
        }
    }

    if (flag === username.length) {
        document.write("You May Pass")
        
    } else {
        alert("Contaminated Username");
    }
}