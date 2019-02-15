document.addEventListener("DOMContentLoaded",cargar);



function cargar(){
    document.getElementById("email").addEventListener("blur",Correo);
    document.getElementById("password").addEventListener("blur",validarPassw);
}






function passwd(pass1){
    var p1= document.getElementById("password").value;
    var p2= document.getElementById("password2").value;

 let requisitos=/^[A-Z]|[a-z]\w{8,14}$/;
 if(p1 !=p2){
alert("Las contraseñas no son iguales");
 }
 else if(requisitos.test(p1)){
     alert("Contraseña Correcta");
 }else{
     alert("Requiere al menos 1 letra ,8 caracteres minimo y 15 como máximo");
 }

}

function validarPassw(){
 pass = this.value;
alert(pass);
let requisitos=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;
if(requisitos.test(pass)){
    this.style.borderColor="greenyellow";
}else{
    document.getElementById("errorPassw").innerHTML="!Password incorrecta¡";
    this.style.borderColor="red";
}

}
function Correo(){
    var texto = this.value;
    alert(texto);
    var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  
    if (!regex.test(texto)) {
        document.getElementById("errorEmail").innerHTML="!Correo incorrecto¡";
        this.style.borderColor="red";
    } else {
        this.style.borderColor="greenyellow";
    }
}