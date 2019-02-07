
<link href="CSS/MiCarro.css" rel="stylesheet">
<script src="Scripts/BorrarArticulos.js"></script>
<?php

session_start();
include 'header.php';
include 'infoBd.php';


$id_Usuario=$_SESSION["id_usuario"];
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
 $consulta3="SELECT id_Pedido FROM Pedidos WHERE id_Cliente='$id_Usuario' AND Estado='Abierto'";
 $result3=mysqli_query($conn, $consulta3);

     #El Cliente Tiene un pedido abierto;
       if(mysqli_num_rows($result3)==1){
         

           $fila=mysqli_fetch_array($result3);
           $id_Pedido=$fila["id_Pedido"];
         
       

 

$consulta="SELECT id_Articulo FROM Pedido_Contiene  WHERE id_Pedido='$id_Pedido'";
$result=mysqli_query($conn, $consulta);
$numeroArticulos=mysqli_num_rows($result);
echo "<div class='contenidoPrincipal'>";
  while($fila=mysqli_fetch_array($result)){
      $id_Articulo=$fila['id_Articulo'];
           $consulta2="SELECT * FROM Articulo WHERE id_Articulo='$id_Articulo'";
           $result2=mysqli_query($conn, $consulta2);
           echo "<div class='ContenedorArticulos'>";
           while($fila2=mysqli_fetch_array($result2)){
       
               echo "<div class='img-articulo'><img src='".$fila2['imagen']."'></div>";
           echo "<div class='items-desc'>";
           echo "<div class='item-num'>Numero de Articulo :</div>";
           echo "<div class='item-nombre'>Nombre:</div>";
           echo "<div class='item-precio'>Precio:</div>";
           echo "<div class='item-descipcion'>Descripcion:</div>";   
           echo "<div class='dato-num'>".$fila2['id_Articulo']."</div>";
           echo "<div class='dato-nom'>".$fila2['nombre']."</div>";
           echo "<div class='dato-precio'>".$fila2['precio']."€</div>";
           echo "<div class='dato-descripcion'>".$fila2['descripcion']."</div>"; 
           echo "</div>";
           echo "<div class='item-Borrar'>";
           echo "<div><img src=imagenes/error.png onclick='borrarDatos(".$fila['id_Articulo'].")'></div>";
           echo "</div>";
           
       }
       echo "</div>";

  }
  
  echo "</div>";
      }
    
      if($numeroArticulos<=0){


        echo "<span class='pordefecto'>Actualmente el carrito esta vacio</span>";
      }else {
        echo "<div class='btn-comprar'><img id='comprarArti'  src='imagenes/btn-comprar.png'></div>";
      }

      echo "<div id='mostrarFactura' class='factura'></div>";
      echo "<div id='ocultar' class='ocultar'></div>";



      include 'footer.php';
?>