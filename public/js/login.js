let y = 0

const tagEmail = document.querySelector("#Email");

function emailVal(emVal){
    var emVal = document.getElementById("Email").value;
    // regular expression
    var validate = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.(com)$/
    if(validate.test(emVal)){
        return true
    }
    return false
}

tagEmail.addEventListener("input", ()=>{
    if(!emailVal()){
        document.getElementById("warnEmail").style.display="block";
        y=0;
    }else{
        document.getElementById("warnEmail").style.display="none";
        y=1;
    }
}
)
