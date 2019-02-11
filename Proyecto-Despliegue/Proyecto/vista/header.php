<!DOCTYPE html>
<html lang="es">
<?php
session_start();

if(isset($_SESSION["usuario"])){
  $email=$_SESSION["usuario"];
$nombre=$_SESSION["nombre"];
$apellido=$_SESSION["apellidos"];
$fecha=$_SESSION["fecha"];
$originalDate = $fecha;
$fecha = date("d/m/Y", strtotime($originalDate));
$telefono=$_SESSION["telefono"];
}
?>



<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="../imagenes/icono.png"/>
  <link href="non-responsive.css" rel="stylesheet">

 <script src="js/ie-emulation-modes-warning.js"></script>
   <title>FundaMovil</title>
   <link href="non-responsive.css" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
  <script src="../Scripts/articulos.js"></script>
  <link href="../CSS/indice.css" rel="stylesheet">
  <link href="../CSS/modelo.css" rel="stylesheet">
  <link href="../CSS/registro.css" rel="stylesheet">
  <link href="../CSS/login.css" rel="stylesheet">
  <link href="../CSS/articulos.css" rel="stylesheet">  
  <link href="../CSS/MiCarro.css" rel="stylesheet">
  <link href="../CSS/DatosPersonales.css" rel="stylesheet">
</head>
<body>
  <div id="container">
  <div id="Cabecera">
    <div class="collapse bg-dark" id="navbarHeader">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white"><img src="../imagenes/Portada/ubicacion.png" width="50px"> Localización</h4>
                <hr/>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1540.7248447855889!2d-0.4715395446853638!3d39.43656696561846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1523519808706" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                <p class="text-muted"></p>
              </div>
              <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Siguenos</h4>
                <hr/>
                <link rel="icon" href="twitter.ico">
                <ul class="list-unstyled">
                  <li><a href="https://twitter.com"class="text-white" target="_blank" ><img src="../imagenes/Portada/twitter.ico"  width="25px">Twitter</a></li>
                  <li><a href="https://facebook.com" class="text-white"target="_blank"><img src="../imagenes/Portada/facebook.ico"  width="25px">Facebook</a></li>
                  <li><a href="https://gmail.com" class="text-white"target="_blank"><img src="../imagenes/Portada/gmail.ico"  width="25px">Gmail</a></li>
                </ul>
                <hr/>

              </div>
            </div>
          </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
           
          <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand">
              <strong><a href="../controlador/Indice.php" title="Portada" ><img src="../imagenes/icono.png"  width="60px">FundaMovil.com</a></strong>
            </a>
            <div class="inner">

              <nav class="nav nav-masthead justify-content-center">
                <nav class="nav nav-masthead justify-content-center">
                  <a class="nav-link active" href="../controlador/Indice.php">Portada</a>
                </nav>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Productos</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="../controlador/samsung.php?id_Marca=1">Samsung</a>
                    <a class="dropdown-item" href="../controlador/iPhone.php?id_Marca=2">iPhone</a>
                    <a class="dropdown-item" href="../controlador/huawei.php?id_Marca=3">Huawei</a>
                    <a class="dropdown-item" href="#">LG</a>
                    <a class="dropdown-item" href="#">Sony</a>
                    <a class="dropdown-item" href="#">BQ</a>

                  </div>
                </li>
                <li class="nav-item2 dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Vídeos</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="../controladorVideoSamsung.php">Samsung</a>
                    <a class="dropdown-item" href="../controladorVideoiPhone.php">iPhone</a>
                    <a class="dropdown-item" href="../controladorVideoHuawei1.php">Huawei</a>
                    <a class="dropdown-item" href="#">LG</a>
                    <a class="dropdown-item" href="#">Sony</a>
                    <a class="dropdown-item" href="#">BQ</a>

                  </div>

                </li>
                <nav class="nav nav-masthead justify-content-center">
                  <a class="nav-link" href="../controlador/Contacto.php">Contacto</a>
                </nav>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
          </div>
        
          <div class="login" id="menuIni">
          <?php
          if(isset($email)){
          
            echo "<div>";
            echo "<img src='../imagenes/Contacto/Nombre.png' width='50px'><button type='button' class='btn btn-secondary dropdown-toggle' data-toggle='dropdown'>";
             echo " <u>$email</u>";
           echo "</button>";
            echo "<div class='dropdown-menu dropdown-menu-lg-right'>";
            echo "<a class='dropdown-item' href='../controlador/datosPersonales.php'>Mi Cuenta</a>";
            echo "<a class='dropdown-item'href='../controlador/MiCarrito.php'>Mi Carrito</a>";
            echo "<a class='dropdown-item' href='../modelo/cerrarSesion.php'>Cerrar Sesión</a>";
           echo "</div>";
           echo "</div>";
          }else{
          ?>
              <p class="login-item"><a href=../controlador/formLogin.php>Iniciar Sesión</a></p>
              <p >o</p>
              <p class="login-item"><a href="../controlador/formRegistro.php">Registrarte</a></p>
              <?php
          }
              ?>
            </div>
        </div>
      </div>