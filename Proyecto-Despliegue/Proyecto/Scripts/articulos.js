
function Ajax(id_articulo){
    var articulo=id_articulo;
    peticion_http = new XMLHttpRequest();
    peticion_http.onreadystatechange = mostrar;
    peticion_http.open('POST', 'http://192.168.4.37/Proyecto/anyadirCarrito.php?id_Articulo='+articulo, true);
peticion_http.send(null);
function mostrar() {
    if(peticion_http.readyState == 4 && peticion_http.status == 200) {
    alert("Añadido al carrito");
    }
    }
}

function AnyadirCarro(id_Articulo){

    Ajax(id_Articulo);


}

