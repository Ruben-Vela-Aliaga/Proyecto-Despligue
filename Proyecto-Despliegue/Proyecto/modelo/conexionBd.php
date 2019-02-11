<?php
 $servidor = "localhost"; # Puede ser una IP o un nombre DNS
 $username = "daw";
 $password = "daw";
 $basedatos = "tiendaOnline";

# Crear conexión. Opcionalmente se puede poner como quinto parámetro
# el puerto
$conn = mysqli_connect($servidor, $username, $password, $basedatos);




# Comprobar conexión
if (!$conn) {
    die("Conexi&ocacuten fallida: " . mysqli_connect_error());
}
?>