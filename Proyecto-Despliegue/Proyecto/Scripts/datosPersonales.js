document.addEventListener("DOMContentLoaded",cargar);

function cargar(){
    document.getElementById("editar").addEventListener("click",Editar);


}

function Editar(){
    var input=document.getElementById("nomUsuario");
    if( input.disabled == false){

        input.disabled = true;
        input.style.backgroundColor="cadetblue";
       
    
    }else{
        input.disabled = false;
        input.style.backgroundColor="white";
    }
usuario=input.value;
   var formData = new FormData();
   formData.append("usuario", usuario);
   
    peticion_http = new XMLHttpRequest();
    peticion_http.onreadystatechange = mostrar;
    peticion_http.open('POST', 'http://192.168.4.37/Proyecto/modelo/actualizarDatosPersonales.php',true);
    peticion_http.send(formData);
function mostrar() {
    if(peticion_http.readyState == 4 && peticion_http.status == 200) {
       //alert(peticion_http.responseText);
        
  
    }
    }


}