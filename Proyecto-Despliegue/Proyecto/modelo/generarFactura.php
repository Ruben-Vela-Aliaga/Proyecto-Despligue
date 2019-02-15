<?php
include 'conexionBd.php';
session_start();
$id_Usuario=$_SESSION["id_usuario"];
$consulta="SELECT * FROM Pedidos WHERE id_Cliente='$id_Usuario' AND Estado='Pagado'";

$result=mysqli_query($conn, $consulta);
echo "$consulta";
echo "<div class='contenidoPrincipal-facturas'>";

echo "<div class='contenedor-titulo-facturas'> ";
echo "<div class='titulo-facturas-pedido'>Número Pedido</div>";
echo "<div class='titulo-facturas-fecha'>Fecha Creacion</div>";
echo "<div class='titulo-facturas-estado'>Estado</div>";
echo "</div>";
echo "<div class='contenedor-facturas'>";
while($facturas=mysqli_fetch_array($result)){
    echo "<div class='contenedor-facturas-individuales'>";
    $originalDate = $facturas['fecha_Creacion'];
$newDate = date("d/m/Y", strtotime($originalDate));
    echo "<div class='factura-idPedido'><a href='../modelo/detallesPedido.php?id_Pedido=".$facturas['id_Pedido']."'>".$facturas['id_Pedido']."</a></div>";
    echo "<div class='factura-fechaCreacion'>$newDate</div>";   
     echo "<div class='factura-Estado'>".$facturas['Estado']."</div>";
     echo "</div>";
}
echo "</div>";
echo "</div>";
mysqli_close($conn);
?>