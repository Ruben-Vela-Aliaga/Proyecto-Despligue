<?php
include 'header.php';

?>  
<link href="CSS/DatosPersonales.css" rel="stylesheet">
<div class="contenedor">
<div class="tit"><h1>Datos Personales</h1>
<hr></div>

<div class="datosPersonales">
<div class="Contenido">
  <div class="Filas">
<div class="subTit"><p>Correo Electrónico:</p></div>
<div class="Datos"><p><?php echo $email;  ?></p></div>
</div>
<div class="Filas">
<div class="subTit"><p>Nombre:</p></div>
<div class="Datos"><p><?php echo $nombre;  ?></p></div>
</div>
<div class="Filas">
<div class="subTit"><p>Apellidos:</p></div>
<div class="Datos"><p><?php echo $apellido;  ?></p></div>
</div>
<div class="Filas">
<div class="subTit"><p>Fecha Nacimiento:</p></div>
<div class="Datos"><p><?php echo $fecha;  ?></p></div>
</div>
<div class="Filas">
<div class="subTit"><p>Teléfono</p></div>
<div class="Datos"><p><?php echo $telefono;  ?></p></div>
</div>

</div>

    
</div>


</div>




<?php
include 'footer.php';

?>
