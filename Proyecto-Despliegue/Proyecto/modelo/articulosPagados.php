<?php
include 'conexionBd.php';
session_start();
$id_Usuario=$_SESSION["id_usuario"];
echo $id_Usuario;
$consulta="UPDATE Pedidos SET Estado='Pagado' WHERE id_Cliente='$id_Usuario'";
if (mysqli_query($conn, $consulta)) {
 
} else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
}



 ?>