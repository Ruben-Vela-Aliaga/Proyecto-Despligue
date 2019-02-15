
<?php
include 'conexionBd.php';

$id_Articulo=$_POST["articulo"];
$id_Pedido=$_POST["Pedido"];

$consulta="DELETE FROM Pedido_Contiene WHERE id_Articulo = '".$id_Articulo."' AND id_Pedido='".$id_Pedido."'";




 if (mysqli_query($conn, $consulta)) {
     echo "Articulo Eliminado del Carrito";
   
} else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
}




 

    mysqli_close($conn);
?>