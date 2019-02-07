
<?php
 include 'header.php';
 ?>
 <link href="CSS/articulos.css" rel="stylesheet">ç
 <script src='jquery-1.8.3.min.js'></script>
 <script src="js/jquery.fs.zoomer.js" type="text/javascript"></script>
    <script src='jquery.elevatezoom.js'></script>
 <script src="Scripts/articulos.js"></script>
        </body>
 <?php
           include 'infoBd.php';
            $id_Modelo=$_GET["id_Modelo"];

            # Crear conexión. Opcionalmente se puede poner como quinto parámetro
            # el puerto
            $conn = mysqli_connect($servidor, $username, $password, $basedatos);

            # Comprobar conexión
            if (!$conn) {
                die("Conexi&ocacuten fallida: " . mysqli_connect_error());
            }
            echo "Conexi&oacuten con &eacutexito <br><br>";
           
            # A continuación se usa un "SELECT", pero igualmente podría ser
            #  INSERT, DELETE o UPDATE. El código PHP sería idéntico.
            $consulta = "SELECT * FROM Articulo WHERE id_Modelo='$id_Modelo'" ;

            $consulta2 = "SELECT nombre FROM Modelo WHERE id_Modelo='$id_Modelo'" ;
          
            # A continuación se ejecuta la consulta y se devuelve el resultado
            # en el caso de que se trate de un SELECT. En otro caso devuelve
            # TRUE. Salvo si hay fallo, en cuyo caso devuelve FALSE.
            $result2 = mysqli_query($conn, $consulta2);
            while ($titulo = mysqli_fetch_array($result2)) {
              echo "<h1>".$titulo[0]."</h1>";
            }
            $result = mysqli_query($conn, $consulta);
            
            echo "<hr>";
           echo  "<div class='contenedor'>";
        
        
            # Es preciso iterar para extrar una a una las filas del resultado
           
            while ($fila = mysqli_fetch_array($result)) {
                echo  "<div class='celda'>";
                echo "<div class='titulo-celda'>";   
                echo $fila[1];
                echo "</div>"; 
                echo "<div class='centro-celda'>"; 
                echo "<div class='img-celda'>";
                echo "<img  id='$fila[0]' src='$fila[5]'>";
                echo "</div>";
                echo "<div class='precio-articulo'>"; 
                echo "<p>$fila[4]€</p>";
                echo "</div>";  
                echo "</div>";
                echo "<div class='abajo-celda'>";
                echo "<div class='enlace-comprar'>";
                echo "<p><button class='btn btn-warning' type='button' onclick='AnyadirCarro($fila[0])'>Añadir al Carro</button></p>";
                echo "</div>";
                echo "</div>";           
                echo  "</div>";   
            }
         
           echo "</div>";
           
            mysqli_free_result($result);
           
           
            # Cerrar la conexión es una buena práctica, para liberar recursos
            # inmediatamente, pero si no se pone, no pasa nada porque PHP
            # cierra la conexión automáticamente al salir:
           
            mysqli_close($conn);
                
            include 'footer.php';
        ?>
 
    </html>