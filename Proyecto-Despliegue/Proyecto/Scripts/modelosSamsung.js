document.addEventListener("DOMContentLoaded",cargar);

function cargar(){
  
    document.getElementById("1").addEventListener("click",mostrarArticulos);



}

function mostrarArticulos(){

       id_Modelo=this.id;
  
        location.href ="http://192.168.4.37/Proyecto/controlador/articulosSamsung.php?id_Modelo="+id_Modelo;

}
