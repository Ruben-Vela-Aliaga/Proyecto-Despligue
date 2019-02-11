
<?php
include 'conexionBd.php';

$id_Articulo=$_GET["id_Articulo"];

$consulta="DELETE FROM Pedido_Contiene WHERE id_Articulo = '".$id_Articulo."'";




 if (mysqli_query($conn, $consulta)) {
     echo "Articulo Eliminado del Carrito";
   
} else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
}




 

    mysqli_close($conn);
?>