function test(){
    let x = document.getElementById("name").value;
    if(x.length < 3){
        document.getElementById("ename").innerHTML = "Must be at least 3 characters long";
        document.getElementById("ename").style.color = "red";
        event.preventDefault();
    }
}

document.getElementById("email").addEventListener("input", () => {
    let x = document.getElementById("email").value;
    if(x.length < 3){
        document.getElementById("eemail").innerHTML = "Must be at least 3 characters long";
        document.getElementById("eemail").style.color = "red";
    } else{
        document.getElementById("eemail").innerHTML = "";
    }
});


document.getElementById("pass").addEventListener("input", () =>{
    let x = document.getElementById("pass").value;
    let i, c = 0, l =0, d = 0, s = 0;
    for(i = 0; i<x.length; i++){
        if(x[i]>='A' && x[i]<='Z'){
            c = 1;
        } else if(x[i]>='a' && x[i]<='z'){
            l = 1;
        } else if(x[i]>'0' && x[i]<='9'){
            d = 1;
        } else if(x[i] == " "){
            continue;
        } else{
            s = 1;
        }
        if(c == 0){
            document.getElementById("epassc").innerHTML = "<br>❌at least one Capital letter required";

        } else{
            document.getElementById("epassc").innerHTML = "<br>✅Capital Alphabet OK";
        }
        if(l == 0){
            document.getElementById("epassl").innerHTML = "<br>❌at least one small letter required";
        } else{
            document.getElementById("epassl").innerHTML = "<br>✅Small Alphabet OK";
        } if(d == 0){
            document.getElementById("epassd").innerHTML = "<br>❌at least one digit required";
        } else{
            document.getElementById("epassd").innerHTML = "<br>✅Digit OK";
        } if(s == 0){
            document.getElementById("epasss").innerHTML = "<br>❌at least one special character required";
        } else{
            document.getElementById("epasss").innerHTML = "<br>✅Special character OK";
        }
    }
})