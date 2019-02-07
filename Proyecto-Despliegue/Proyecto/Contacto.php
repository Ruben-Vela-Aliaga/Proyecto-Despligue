<link href="CSS/Contacto.css" rel="stylesheet">

<?php
 include 'header.php';
?>

            <div id="central">

      <form>
        <fieldset>
          <div class="titulo">
          <legend>CONTACTA CON NOSOTROS</legend>
          <hr/>
        </div>
<table>

  <tr >
    <td rowspan="2"> <img src="imagenes/Contacto/Nombre.png" width="80px"></td>
  <td id="Nombre"> <input  placeholder="Nombre" class="form-control"></td>
  </tr>

  <tr>
    <td  id="Apellidos">  <input  placeholder="Apellidos" class="form-control"></td>
  </tr>

  <tr>
    <td><img src="imagenes/Contacto/arroba.png" width="80px"></td>
    <td  id="Email"><input placeholder="Correo Electronico" class="form-control"></td>
  </tr>

  <tr>
    <td><img src="imagenes/Contacto/telefono.png" width="60px"></td>
    <td id="Telefono"><input placeholder="Telefono" class="form-control"></td>
  </tr>

  <tr >
    <td><img src="imagenes/Contacto/Comentario.png" width="80px"></td>
    <td id="Comentario"><textarea class="form-control" placeholder="Escriba aquí su comentario..." rows="7"></textarea></td>
  </tr>

  <tr>
    <td></td>
    <td  id="Enviar"><button class="btn btn-primary btn-lg">Enviar</button></td>
  </tr>


</table>

</fieldset>

</form>






       </div>
       <?php
 include 'footer.php';
?>
</body>

</html>
