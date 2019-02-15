function Ajax(id_articulo,id_Pedido){

    var formData = new FormData();
   formData.append("articulo", id_articulo);
   formData.append("Pedido", id_Pedido);
    peticion_http = new XMLHttpRequest();
    peticion_http.onreadystatechange = mostrar;
    peticion_http.open('POST', 'http://192.168.4.37/Proyecto/modelo/borrarArticulo.php',true);
    peticion_http.send(formData);
function mostrar() {
    if(peticion_http.readyState == 4 && peticion_http.status == 200) {

        location.reload();
  
    }
    }
}

function borrarDatos(id_articulo,id_Pedido){
var id_articulo =id_articulo;
var id_Pedido = id_Pedido;
Ajax(id_articulo,id_Pedido);

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
   peticion_http.open('GET', 'http://192.168.4.37/Proyecto/modelo/articulosComprados.php', true);
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
    peticion_http.open('GET', 'http://192.168.4.37/Proyecto/modelo/articulosPagados.php', true);
    peticion_http.send(null);

function mostrar() {
   if(peticion_http.readyState == 4 && peticion_http.status == 200) {
       var text = peticion_http.responseText;
      
       location.reload();
      
   }
   }



    
}