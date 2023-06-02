let x = 0, y = 0

const tagEmail = document.querySelector("#UserEmail");

function emailVal(emVal){
    var emVal = document.getElementById("UserEmail").value;
    // regular expression
    var validate = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.(com)$/
    if(validate.test(emVal)){
        return true
    }
    return false
}

tagEmail.addEventListener("input", ()=>{
    if(!emailVal()){
        document.getElementById("valEmail").style.display="block";
        y=0;
    }else{
        document.getElementById("valEmail").style.display="none";
        y=1;
    }
}
)

const tagPassword = document.querySelector("#UserPassword");

function passVal(){
    var passVal = document.getElementById("UserPassword").value;
    var validate = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?])[A-Za-z\d!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{8,}$/;
    if(validate.test(passVal)){
        return true
    }
    return false
}

tagPassword.addEventListener("input", ()=>{
    if(!passVal()){
        document.getElementById("valPass").style.display="block";
        x=0;
    }else{
        document.getElementById("valPass").style.display="none";
        x=1;
    }
})



