function Ajax(id_articulo){

    //var formData = new FormData();
   // formData.append("username", id_articulo);
    peticion_http = new XMLHttpRequest();
    peticion_http.onreadystatechange = mostrar;
    peticion_http.open('GET', 'http://192.168.4.37/Proyecto/borrarArticulo.php?id_Articulo='+id_articulo, true);
    peticion_http.send(null);
function mostrar() {
    if(peticion_http.readyState == 4 && peticion_http.status == 200) {

        location.reload();
  
    }
    }
}

function borrarDatos(id_articulo){
var id_articulo =id_articulo;
Ajax(id_articulo);

}
document.addEventListener("DOMContentLoaded",cargar);

function cargar(){
    document.getElementById("comprarArti").addEventListener("click",Comprar)


}

function Comprar(){

    //var formData = new FormData();
   // formData.append("username", id_articulo);
   peticion_http = new XMLHttpRequest();
   peticion_http.onreadystatechange = mostrar;
   peticion_http.open('GET', 'http://192.168.4.37/Proyecto/articulosComprados.php', true);
   peticion_http.send(null);
function mostrar() {
   if(peticion_http.readyState == 4 && peticion_http.status == 200) {
       var text = peticion_http.responseText;

       var padre = document.getElementById("mostrarFactura");
       padre.innerHTML=text;
       document.getElementById("mostrarFactura").style.display='block';
       document.getElementById("ocultar").style.display='block';
       document.getElementById("cruz").addEventListener("click",cancelarCompra);
       document.getElementById("Pagar").addEventListener("click",Pagar);
   }
   }

}
function cancelarCompra(){

    var alerta= confirm("¿Seguro que desea cancelar su factura?");
    if (alerta == true) {
        alert("Su Factura ha sido cancelada");
        location.reload();
   
    } else {
    
    } 


}
function Pagar(){
    peticion_http = new XMLHttpRequest();
    peticion_http.onreadystatechange = mostrar;
    peticion_http.open('GET', 'http://192.168.4.37/Proyecto/articulosPagados.php', true);
    peticion_http.send(null);

function mostrar() {
   if(peticion_http.readyState == 4 && peticion_http.status == 200) {
       var text = peticion_http.responseText;
      
       location.reload();
   }
   }



    
}