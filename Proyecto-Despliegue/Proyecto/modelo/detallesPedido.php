<?php

include 'conexionBd.php';

$id_Pedido=$_GET["id_Pedido"];


$consulta="SELECT id_Articulo FROM Pedido_Contiene WHERE id_Pedido='$id_Pedido'";

$result=mysqli_query($conn, $consulta);

while($id_articulo=mysqli_fetch_array($result)){

    $consulta2="SELECT * FROM Articulo WHERE id_Articulo='".$id_articulo['id_Articulo']."'";

    $result2=mysqli_query($conn, $consulta2);

    while($articulos=mysqli_fetch_array($result2)){

        echo $articulos['nombre'];
        echo $articulos['descripcion'];
  

    }
 

}








?>