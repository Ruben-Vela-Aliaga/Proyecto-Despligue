document.addEventListener("DOMContentLoaded",cargar);



function cargar(){
    document.getElementById("email").addEventListener("blur",Correo);
   // document.getElementById("password").addEventListener("blur",validarPassw);
   
}


function Correo(){
    var texto = this.value;
    var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
  

    if (!regex.test(texto)) {
        document.getElementById("errorEmail").innerHTML="¡Correo incorrecto!";
        document.getElementById("errorEmail").style.color="red";
        this.style.borderColor="red";
    } else {
        document.getElementById("errorEmail").innerHTML="";
        console.log("si");
        this.style.borderColor="greenyellow";
    }
}