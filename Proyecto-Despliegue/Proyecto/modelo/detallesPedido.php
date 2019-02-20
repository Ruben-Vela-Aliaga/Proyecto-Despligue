<?php

include 'conexionBd.php';

$id_Pedido=$_GET["id_Pedido"];


$consulta="SELECT id_Articulo FROM Pedido_Contiene WHERE id_Pedido='$id_Pedido'";

$result=mysqli_query($conn, $consulta);
echo "<div class='contenedor-principal-detallePedido'>";
echo "<div class='contenedor-detalles-individuales'>";
echo "<div class='titulos-pedido-detalles'>";
echo "<div class='titulos-pedido-detalles-nombre'><h3>Nombre<h3></div>";
echo "<div class='titulos-pedido-detalles-descripcion'><h3>Descripción<h3></div>";
echo "<div class='titulos-pedido-detalles-color'><h3>Color<h3></div>";
echo "<div class='titulos-pedido-detalles-precio'><h3>Precio<h3></div>";

echo "</div>";
while($id_articulo=mysqli_fetch_array($result)){

    $consulta2="SELECT * FROM Articulo WHERE id_Articulo='".$id_articulo['id_Articulo']."'";

    $result2=mysqli_query($conn, $consulta2);

   

    while($articulos=mysqli_fetch_array($result2)){

        echo "<div class='datos-pedido-detalles'>";
        echo "<div class='datos-pedido-detalles-img'><img src='../".$articulos["imagen"]."'></div>";
        echo "<div class='datos-pedido-detalles-nombre'>".$articulos["nombre"]."</div>";
        echo "<div class='datos-pedido-detalles-descripcion'>".$articulos["descripcion"]."</div>";
        echo "<div class='datos-pedido-detalles-color'>".$articulos["color"]."</div>";
        echo "<div class='datos-pedido-detalles-precio'>".$articulos["precio"]."</div>";

        echo "</div>";
      

     

    }

 

}
echo "</div>";
echo "</div>";








?>