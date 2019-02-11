<?php
include 'conexionBd.php';
        
           
            # A continuación se usa un "SELECT", pero igualmente podría ser
            #  INSERT, DELETE o UPDATE. El código PHP sería idéntico.
            $nombre=$_POST["nombre"];
            $apellidos=$_POST["apellidos"];
            $direccion=$_POST["direccion"];
            $telefono=$_POST["telefono"];
            $fecha_nacimiento=$_POST["fecha_nacimiento"];
            $password1=$_POST["contra"];
            $encriptar=md5($password1);
            $email=$_POST["email"];
            $consulta = "INSERT INTO Clientes (nombre, apellidos, direccion, fecha_nacimiento, telefono, email, contrasenya)
            VALUES ('$nombre','$apellidos','$direccion','$fecha_nacimiento','$telefono','$email','$encriptar')";
          
            # A continuación se ejecuta la consulta y se devuelve el resultado
            # en el caso de que se trate de un SELECT. En otro caso devuelve
            # TRUE. Salvo si hay fallo, en cuyo caso devuelve FALSE.
           
           
            if (mysqli_query($conn, $consulta)) {
                echo"Registro completado, ahora inicia sesion";
                header("Location:../controlador/indice.php");
          } else {
                echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
          }
           
            # Cerrar la conexión es una buena práctica, para liberar recursos
            # inmediatamente, pero si no se pone, no pasa nada porque PHP
            # cierra la conexión automáticamente al salir:
       
            mysqli_close($conn);
            ?>