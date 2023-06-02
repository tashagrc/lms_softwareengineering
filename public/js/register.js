let x = 0, y = 0, a = 0, b = 0

const specialChar = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~0-9]/;

const tagName = document.querySelector("#UserName");

tagName.addEventListener("input", ()=>{
    const name = tagName.value;
    if(!tagName.value || tagName.value.length == 0 || tagName.value.trim().length == 0 || specialChar.test(tagName.value)){
        document.getElementById("valName").style.display="block";
        a = 0;
    } else{
        document.getElementById("valName").style.display="none";
        a=1;
    }
}
)

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

const tagCPassword = document.querySelector("#UserCPass");

function confPassVal(){
    var pass = document.getElementById("UserPassword").value;
    var confpass = document.getElementById("UserCPass").value;
    if(pass === confpass){
        return true
    }
    return false
}

tagCPassword.addEventListener("input", ()=>{
    if(!confPassVal()){
        document.getElementById("valCPass").style.display="block";
        b=0;
    }else{
        document.getElementById("valCPass").style.display="none";
        b=1;
    }
})
