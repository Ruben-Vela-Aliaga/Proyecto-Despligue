<?php
include 'conexionBd.php';
session_start();
$id_Cliente=$_SESSION["id_usuario"];
$usuario=$_POST["usuario"];
echo $usuario;


$consulta="UPDATE Clientes SET usuario='$usuario' WHERE id_Cliente='$id_Cliente'";
if (mysqli_query($conn, $consulta)) {
    $_SESSION["NombreUsuario"]=$usuario;
} else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
}




 

    mysqli_close($conn);
?>