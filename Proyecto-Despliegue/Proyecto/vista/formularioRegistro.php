<html lang="es">
<link href="CSS/registro.css" rel="stylesheet">

<div class="contenedor-registro">

    <div class="fondoizq"></div>
    <div class="fondoder"></div>
    <div class="titulo-registro">
      <h1>Registro</h1>
      <hr>
    </div>
    <div class="contenido-registro">

      <form class="registroSesion" action="../modelo/registro.php" method="POST">
        <div class="usuario">
          <label>Email:</label>
          <input id="email" type="text" placeholder="correo electrónico.." name="email">
<div id="errorEmail" class="errores"></div>
        </div>
        <div class="nombre">
          <label>Nombre:</label>
          <input id="nombre" type="text" placeholder="Nombre.." name="nombre">

        </div>
        <div class="apellidos">
          <label>Apellidos:</label>
          <input id="apellidos" type="text" placeholder="Apellidos" name="apellidos">

        </div>
        <div class="nomUsuario">
          <label>Usuario:</label>
          <input id="usuario" type="text" placeholder="jose21.." name="usuario">

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
        <div id=" " class="errores"></div>
        <div class="registrar">
          <input id="registrar" type="submit" value="Registrar">
        </div>
      </form>
    </div>
</div>