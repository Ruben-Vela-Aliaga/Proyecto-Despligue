document.addEventListener("DOMContentLoaded",cargar);

function cargar(){
  
    document.getElementById("5").addEventListener("click",mostrarArticulos);



}

function mostrarArticulos(){

       id_Modelo=this.id;
  
        location.href ="http://192.168.4.37/Proyecto/controlador/articulosHuawei.php?id_Modelo="+id_Modelo;

}
