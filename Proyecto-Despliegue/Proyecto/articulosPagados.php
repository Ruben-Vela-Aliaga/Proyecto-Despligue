<?php
include 'infoBd.php';
session_start();
$id_Usuario=$_SESSION["id_usuario"];
$conn = mysqli_connect($servidor, $username, $password, $basedatos);
 # Comprobar conexión
 if (!$conn) {
     die("Conexi&ocacuten fallida: " . mysqli_connect_error());
 }
$consulta="UPDATE Pedidos SET Estado='Pagado' WHERE id_Cliente='$id_Usuario'";
if (mysqli_query($conn, $consulta)) {
    
} else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
}



 ?>