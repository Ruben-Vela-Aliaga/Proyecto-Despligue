
<?php
include 'conexionBd.php';

$consulta="SELECT id_Pedido FROM Pedidos WHERE id_Cliente='$id_Usuario'";

$result=mysqli_query($conn, $consulta);

while($facturas=mysqli_fetch_array($result)){

 $consultarArticulos="SELECT * FROM Pedido_Contiene WHERE id_Pedido='".$facturas['id_Pedido']."'";

 


}
    ?>