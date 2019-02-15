
<?php
session_start();
include 'conexionBd.php';
$id_Usuario=$_SESSION["id_usuario"];
$consulta="SELECT id_Pedido FROM Pedidos WHERE id_Cliente='$id_Usuario' AND Estado='Abierto'";
 $result=mysqli_query($conn, $consulta);
     #El Cliente Tiene un pedido abierto;
       if(mysqli_num_rows($result)==1){
           $fila=mysqli_fetch_array($result);
           $id_Pedido=$fila[0];
       }
       #Con el id pedido listamos todos los articulos que ha comprado ;
       $consulta2= "SELECT * FROM Pedido_Contiene WHERE id_Pedido='$id_Pedido'";
       $result2=mysqli_query($conn, $consulta2);
       #recorre todas las filas que coinciden con id_pedido
       echo "<div class='contenedor-factura'>";
       echo "<div class='header-Factura'>";
       echo "</div>";
        while($fila=mysqli_fetch_array($result2)){
            
            #una vez tengo id_Articulo  muestro sus otros atributos como el precio etc..
            $consulta3= "SELECT * FROM Articulo WHERE id_Articulo='".$fila['id_Articulo']."'";
            $result3=mysqli_query($conn, $consulta3);
            echo "<div class='contenido-factura'>";
     
            while($fila2=mysqli_fetch_array($result3)){
                echo "<div class='datos-factura'>";
                echo "<div class='titulo-datos-factura'>";
                echo "numArticulo";
                echo "</div>";
                echo "<div class='numArticulo'>";
                echo $fila2["id_Articulo"];
                echo "</div>";
                echo "<div class='titulo-datos-factura'>";
                echo "Nombre";
                echo "</div>";
                echo "<div class='nombreArticulo'>";
                echo $fila2["nombre"];
                echo "</div>";
                echo "<div class='titulo-datos-factura'>";
                echo "Color";
                echo "</div>";
                echo "<div class='colorArticulo'>";
                echo  $fila2["color"];
                echo "</div>";
                echo "<div class='titulo-datos-factura'>";
                echo "Precio";
                echo "</div>";
                echo "<div class='precioArticulo'>";
                echo $fila2["precio"]."€";
                $total = $total+$fila2["precio"];
                echo "</div>";
              echo "</div>";



            }
            echo "</div>";
}            
echo "</div>";
echo "<div  id='precioTotal'class='precioTotal'><div class='letraPrecio'><span>PRECIO TOTAL :</span></div><div class='numPrecio'><span>$total €</span></div><div><a id='Pagar'>Confirmar</a></div></div>";
echo "<div  id='cruz'class='cruz'><img src='../imagenes/cerrar.png'></div>";



 

    mysqli_close($conn);
?>