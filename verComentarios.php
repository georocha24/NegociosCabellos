<?php
require_once('admin/conexion/conexion.php');

if(isset($_GET['IdPost'])){
  $queryComentarios = sprintf("SELECT * FROM comentarios WHERE IdPost = '%d' ORDER BY IdPost DESC", $_GET['IdPost']);
  if ($Comentarios = $mysqli->query($queryComentarios)) {
    $rowComentarios = mysqli_fetch_assoc($Comentarios);
  }else{
    die(print("Error: ".$mysqli->error));
  }
}else{
  die(print("No ha seleccionado un evento."));
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Voz del Silencio || Ver Comentarios</title>
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <script src="js/prefixfree.min.js"></script>
    
  </head>

  <body >
    <div class="container">
      <?php do{ ?>
      <p class="muted"><small><?php printf("%s", $rowComentarios['Fecha']); ?></small></p>
      <p><?php printf("%s", $rowComentarios['Nombre']); ?></p>
      <p><?php printf("%s", $rowComentarios['Email']); ?></p>
      <p><?php printf("%s", $rowComentarios['Comentario']); ?></p>
      <hr><br>
      <?php }while($rowComentarios = mysqli_fetch_assoc($Comentarios)); ?>
    </div>
  </body>
</html>