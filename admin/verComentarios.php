<?php 
require_once('conexion/conexion.php');

session_start();

if($_SESSION['Auth'] != "1"){
header('index.php?ErrorLogin=sjbdu212');
}else{
  $queryEditar = "SELECT a.IdComentario, a.Nombre, a.Email, a.Comentario, a.Fecha, b.IdPost, b.Titulo
FROM comentarios a INNER JOIN post b
ON a.IdPost = b.IdPost";
  if ($Editar = $mysqli->query($queryEditar)) {
    $rowEditar = mysqli_fetch_assoc($Editar);
  }else{
    die(print("Error: ".$mysqli->error));
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Negocios Cabellos | Eliminar Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
           <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #2657B2;
        background: url("img/examples/fondo-main.png");
  
      }

      .form-signin {

        max-width: 630px;
        padding: 19px 29px 29px;
        margin: 20px auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 2px 2px 2px rgba(0,0,0,.5);
           -moz-box-shadow: 2px 2px 2px rgba(0,0,0,.5);
                box-shadow: 2px 2px 2px rgba(0,0,0,.5);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active icon-wrench icon-white"><a href="PanelControl.php">Ir a Menu Principal</a></li>
          
        </ul>
        <h3 class="muted"><img width="150px" height="70px" src="../img/logo/logo2.png">|Eliminar Usuario</h3>
      </div>
        
          <section class="tablapost">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Comentario</th>
                  <th>Identificador Post</th>
                  <th>Titulo del post</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php do{ ?>
                <tr>
                  <td><?php printf("%s", $rowEditar['Nombre']); ?></td>
                  <td><?php printf("%s", $rowEditar['Email']); ?></td>
                  <td><?php printf("%s", $rowEditar['Comentario']); ?></td>
                  <td><?php printf("%s", $rowEditar['IdPost']); ?></td>
                  <td><?php printf("%s", $rowEditar['Titulo']); ?></td>
                  <!--<td><?php //printf("%s", $rowEditar['Fecha']); ?></td>-->
                  <td><center><a class="btn btn-danger" href=<?php printf("adminEliminarComentario.php?IdComentario=%s", $rowEditar['IdComentario']); ?>><span>Eliminar</a></center></td>
                  <!--<td><center><a class="btn btn-info" href=<?php// printf("modificarPost.php?IdPost=%s", $rowEditar['IdPost']); ?>><span>Editar</a></center></td>-->
                </tr>
                <?php }while($rowEditar = mysqli_fetch_assoc($Editar)); ?>
              </tbody>
            </table>
        </section>

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> 


  </body>
</html>
<?php } ?>