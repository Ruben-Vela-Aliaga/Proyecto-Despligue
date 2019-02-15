<?php

include 'conexionBd.php';
session_start();
$id_Usuario=$_SESSION["id_usuario"];
$id_Articulo=$_GET["id_Articulo"];
$fechaActual=date('Y-m-d');
 # A continuación se usa un "SELECT", pero igualmente podría ser
 #  INSERT, DELETE o UPDATE. El código PHP sería idéntico.


 # A continuación se ejecuta la consulta y se devuelve el resultado
 # en el caso de que se trate de un SELECT. En otro caso devuelve
 # TRUE. Salvo si hay fallo, en cuyo caso devuelve FALSE.


 $consulta="SELECT id_Pedido FROM Pedidos WHERE id_Cliente='$id_Usuario' AND Estado='Abierto'";
 $result=mysqli_query($conn, $consulta);
     #El Cliente Tiene un pedido abierto;
       if(mysqli_num_rows($result)==1){
          
           $fila=mysqli_fetch_array($result);
           $id_Pedido=$fila[0];
           }else{
          
                # SI no tenemos idPedido -> Creamos pedido 
                $consulta = "INSERT INTO Pedidos (id_Cliente,fecha_Creacion,Estado) VALUES ('$id_Usuario','$fechaActual','Abierto')";
                $result=mysqli_query($conn, $consulta);
                #Volvemos a coger el id_Pedido 
          $consulta="SELECT id_Pedido FROM Pedidos WHERE id_Cliente='$id_Usuario' AND Estado='Abierto'";
          $result=mysqli_query($conn, $consulta);

          if(mysqli_num_rows($result)==1){
            $Pedidos=mysqli_fetch_array($result);
            $id_Pedido=$Pedidos[0];
          }
        }


# Añadimos el articulo al pedido 

$consulta= "INSERT INTO Pedido_Contiene (id_Articulo,id_Pedido,cantidad) VALUES ('$id_Articulo','$id_Pedido',1)";




 if (mysqli_query($conn, $consulta)) {
   
} else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
}




 

    mysqli_close($conn);

?>