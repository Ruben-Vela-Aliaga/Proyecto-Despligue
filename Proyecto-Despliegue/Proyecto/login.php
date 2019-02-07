
<?php
include 'infoBd.php';
 $usuario=$_POST["usuario"];
$contra=$_POST["contraLogin"];

$encriptada=md5($contra);

 # Crear conexión. Opcionalmente se puede poner como quinto parámetro
 # el puerto
 $conn = mysqli_connect($servidor, $username, $password, $basedatos);

 # Comprobar conexión
 if (!$conn) {
     die("Conexi&ocacuten fallida: " . mysqli_connect_error());
 }


 # A continuación se usa un "SELECT", pero igualmente podría ser
 #  INSERT, DELETE o UPDATE. El código PHP sería idéntico.


 # A continuación se ejecuta la consulta y se devuelve el resultado
 # en el caso de que se trate de un SELECT. En otro caso devuelve
 # TRUE. Salvo si hay fallo, en cuyo caso devuelve FALSE.




 # Cerrar la conexión es una buena práctica, para liberar recursos
 # inmediatamente, pero si no se pone, no pasa nada porque PHP
 # cierra la conexión automáticamente al salir:

$consulta = "SELECT * FROM Clientes WHERE email = '$usuario' AND contrasenya = '$encriptada'";


$result = mysqli_query($conn, $consulta);

if(mysqli_num_rows($result)==1){
    session_start();
    $nombre=mysqli_fetch_assoc($result);
    $_SESSION["usuario"]=$nombre["email"];
    $_SESSION["id_usuario"]=$nombre["id_Cliente"];
    $_SESSION["nombre"]=$nombre["nombre"];
    $_SESSION["apellidos"]=$nombre["apellidos"];
    $_SESSION["fecha"]=$nombre["fecha_nacimiento"];
    $_SESSION["telefono"]=$nombre["telefono"];
    
    header("Location:Indice.php");
}else{
    header("Location:formLogin.php");
}
 


    mysqli_close($conn);

?>