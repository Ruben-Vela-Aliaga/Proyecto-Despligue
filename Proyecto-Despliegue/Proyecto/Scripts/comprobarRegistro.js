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

function passwd1(pass){
 pass = pass.value;

let requisitos=/^([A-Z]|[a-z])+\w{8,14}$/;
if(requisitos.test(pass)){
  alert("Contraseña Correcta");
}else{
  alert("Requiere al menos 1 letra y 8 caracteres minimo");
}

}
function Correo(Email){
    Email = Email.value;
    re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
if(!re.exec(Email)){
alert('email no valido');
}
else alert('email valido');
}