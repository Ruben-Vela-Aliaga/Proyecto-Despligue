document.addEventListener("DOMContentLoaded",cargar);

function cargar(){
  
    document.getElementById("4").addEventListener("click",mostrarArticulos);



}

function mostrarArticulos(){

       id_Modelo=this.id;
  
        location.href ="http://192.168.4.37/Proyecto/controlador/articulosiPhone.php?id_Modelo="+id_Modelo;

}

