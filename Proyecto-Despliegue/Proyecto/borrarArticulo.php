
<?php
include 'infoBd.php';

$id_Articulo=$_GET["id_Articulo"];

$conn = mysqli_connect($servidor, $username, $password, $basedatos);

 # Comprobar conexión
 if (!$conn) {
     die("Conexi&ocacuten fallida: " . mysqli_connect_error());
 }

$consulta="DELETE FROM Pedido_Contiene WHERE id_Articulo = '".$id_Articulo."'";




 if (mysqli_query($conn, $consulta)) {
     echo "Articulo Eliminado del Carrito";
   
} else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
}




 

    mysqli_close($conn);
?>