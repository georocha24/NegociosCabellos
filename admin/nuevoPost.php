<?php 
require_once('conexion/conexion.php');

session_start();

if($_SESSION['Auth'] != "1"){
header('index.php?ErrorLogin=sjbdu212');
}else{
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/estilosadminpanel.css">
    <script src="ckeditor/ckeditor.js"></script>
  </head>


  <body>
  <section class="cuadro-panelPost">
  <center><h1 class="h1post">AGREGAR NUEVO POST</h1></center>
  <section class="cuerponuevopost">
    <form class="form-inline">
      <table >
        <tr>
          <td>
            <label class="control-label" for="txtTitulo">Titulo:</label>
          </td>
          <td><input type="text" class="span6" name="txtTitulo" id="txtTitulo" placeholder="Titulo del Post" required></td>
        </tr>
        <tr>
          <td><label class="control-label" for="txtResumen">Resumen:</label></td>
          <td><textarea name="txtResumen" class="ckeditor span6" id="txtResumen" rows="5" placeholder="Resumen del Post aqui..." ></textarea></td>
        </tr>
        <tr>
          <td><label class="control-label" for="txtCuerpo">Cuerpo:</label></td>
          <td><textarea name="txtCuerpo" class="ckeditor span6" id="txtCuerpo" rows="10" placeholder="Cuerpo del Post aqui..." ></textarea></td>
        </tr>
      </table>
      <button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i> Publicar Post</button>
      <div class="botonPanel3"><a class="btn btn-info" href="panelControl.php"><i class="icon-wrench icon-white"></i> Panel de Control</a></div>
    </form>
  </section>  
  
    </div>
    <script>
     CKEDITOR.replace( 'txtResumen',
    {
      filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
      filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
      filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });

     CKEDITOR.replace( 'txtCuerpo',
    {
      filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
      filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
      filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    </script>  
  </div>
  </section>
  </body>
</html>
<?php } ?>