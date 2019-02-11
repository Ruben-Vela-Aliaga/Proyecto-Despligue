<?php

include 'conexionBd.php';
$id_Marca=$_GET["id_Marca"];






$consulta="SELECT * FROM Marca WHERE id_Marca='$id_Marca'";
$result2 = mysqli_query($conn, $consulta);
if($nombre=mysqli_fetch_array($result2)){
$nombreMarca=$nombre["nombre"];
}
$consulta="SELECT * FROM Modelo WHERE id_Marca='$id_Marca'";
$result = mysqli_query($conn, $consulta);
echo "<div class='titulo-contenedor-modelos'>";
echo "<h1>$nombreMarca</h1>";
echo "<hr>";
echo "</div>";
echo "<div class='contenedor-modelos'>";


while($fila=mysqli_fetch_array($result)){




echo "<div class='celda-modelo'>";
echo "<div class='titulo-celda-modelo'>";
echo $fila['nombre'];
echo "</div>";
echo "<div class='img-celda-modelo'>";
echo "<a id='".$fila["id_Modelo"]."'><img src='../".$fila["imagen"]."'></a>";
echo "</div>";
echo "</div>";





}
echo "</div>";

mysqli_close($conn);

?>