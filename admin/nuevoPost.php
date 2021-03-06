<?php 
require_once('conexion/conexion.php');

session_start();
if($_SESSION['Auth'] != "1"){  
header('index.php?ErrorLogin=sjbdu212');
}else{
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Negocios Cabellos | Registro Usuario</title>
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
          <li class="active"><a href="PanelControl.php">Ir a Menu Principal</a></li>
          
        </ul>
        <h3 class="muted"><img width="150px" height="70px" src="../img/logo/logo2.png">|Registra Usuario</h3>
      </div>

      

     

      
        <!--<form class="form-signin"   method="post">-->
          <!--<h3>Usuarios</h3> onsubmit="return valida(this)"-->

                          <form class="form-signin" action="adminNuevoPost.php" enctype="multipart/form-data"  method="post" >
                            <h3>Llenar campos de Usuario</h3> 
                            <hr>
                              <table >
                                <tr>
                                  <td>
                                    <h2 class="form-signin-heading" for="txtTitulo">Titulo:</h2>
                                    <input type="text" class="input-block-level" name="txtTitulo" id="txtTitulo" placeholder="Titulo del Post" required></td>
                                </tr>
                                <tr>
                                  <td><h2 class="form-signin-heading" for="txtResumen">Resumen:</h2>
                                  <textarea name="txtResumen" class="input-block-level" id="txtResumen" rows="5" placeholder="Resumen del Post aqui..." ></textarea></td>
                                </tr>

                                <tr>
                                  <td><h2 class="form-signin-heading" for="txtImagen">Subir Imagen:</h2>
                                  <input id="uploadfile" name="uploadfile" size="30" type="file" /></td>
                                </tr>
                              </table>
                              <tr>
                                <br>
                              </tr>
                              <input type = "submit" class="btn btn-success btn-large" value = "Guardar">
                          </form>
       

      <!--</form>-->
      
      

      <hr>

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/validarletras.js"></script>


  </body>
</html>

<?php } ?>