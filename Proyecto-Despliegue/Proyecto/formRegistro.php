<html lang="es">

<?php
include 'header.php';
?>
<link href="CSS/registro.css" rel="stylesheet">
  <div class="contenedor">
    <div class="cabecera">
    
    </div>

    <div class="fondoizq"></div>
    <div class="fondoder"></div>
    <div class="titulo-registro">
      <h1>Registro</h1>
      <hr>
    </div>
    <div class="contenido-registro">

      <form class="registroSesion" action="registro.php" method="POST">
        <div class="usuario">
          <label>Email:</label>
          <input id="email" type="text" placeholder="correo electrónico.." name="email">

        </div>
        <div class="nombre">
          <label>Nombre:</label>
          <input id="nombre" type="text" placeholder="Nombre.." name="nombre">

        </div>
        <div class="apellidos">
          <label>Apellidos:</label>
          <input id="apellidos" type="text" placeholder="Apellidos" name="apellidos">

        </div>
        <div class="fecha">
          <label>Fecha de Nacimiento:</label>
          <input id="fechaNacimiento" type="date" name="fecha_nacimiento">


        </div>
        <div class="direccion">
          <label>Direccion:</label>
          <input id="direccion" type="text" placeholder="calle.." name="direccion">

        </div>
        <div class="telefono">
          <label>Teléfono:</label>
          <input id="telefono" type="text" placeholder="321343212" name="telefono">

        </div>
        <div class="password">
          <label>Contraseña:</label>
          <input id="password" type="password" placeholder="contraseña.." name="contra">
        </div>
        <div class="registrar">
          <input id="registrar" type="submit" value="Registrar">
        </div>
      </form>
    </div>
    <div class="footer">
      <div id="Pie">
        <div class="container py-5">
          <div class="row">
            <div class="columna1">
              <p><img src="imagenes/Portada/contacto.png" width="100px"></p>
              <h3>CONTACTA CON NOSOTROS</h3>
              <br />
              <ul class="list-unstyled text-small">
                <li>Tel: <span>612123537</span></li>
                <li>Tel: <span>96 212 45 64</span></li>


              </ul>
            </div>
            <div class="columna2">
              <p><img src="imagenes/Portada/ubicacion.png" width="100px"></p>
              <h3>DÓNDE ESTAMOS</h3>
              <br />
              <ul class="list-unstyled text-small">
                <li>C/ Sant Jeroni,5 46007 Valencia</li>
              </ul>

            </div>
            <div class="columna3">
              <p><img src="imagenes/Portada/horarios.png" width="100px"></p>
              <h3>HORARIOS</h3>
              <br />
              <ul class="list-unstyled text-small">
                <li>Lunes a Viernes </li>
                <li><span>8:00 - 13:30</span></li>
                <li><span>17:30 - 21:00</span></li>
                <li>Sabados</li>
                <li><span>8:00 - 13:30</span></li>

              </ul>
            </div>
          </div>
        </div>
        <div class="footer">
          <h8><span>Página web de</span> Rubén Vela<h8>
              <img src="imagenes/Portada/copyright.png" width="25px">
              <img src="imagenes/Portada/right.png" width="25px">
        </div>
      </div>

    </div>

    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

  </div>

  </div>


  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>