document.addEventListener("DOMContentLoaded",cargar);



function cargar(){
    document.getElementById("email").addEventListener("blur",Correo);
    document.getElementById("password").addEventListener("blur",validarPassw);
}



function validarPassw(){
 pass = this.value;
let requisitos=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;
if(requisitos.test(pass)){
    document.getElementById("errorPassw").innerHTML="";
    this.style.borderColor="greenyellow";
}else{
    document.getElementById("errorPassw").innerHTML="!Password incorrecta¡";
    this.style.borderColor="red";
}

}
function Correo(){
    var texto = this.value;
    var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
  
    if (!regex.test(texto)) {
        document.getElementById("errorEmail").innerHTML="!Correo incorrecto¡";
        this.style.borderColor="red";
    } else {
        this.style.borderColor="greenyellow";
        document.getElementById("errorEmail").innerHTML="";
    }
}