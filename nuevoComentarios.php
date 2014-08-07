<?php
require_once('admin/conexion/conexion.php');

if(isset($_GET['Evento'])){
  $queryPosts = sprintf("SELECT * FROM post WHERE IdPost = '%d' ORDER BY IdPost DESC", $_GET['Evento']);
  if ($Posts = $mysqli->query($queryPosts)) {
    $rowPosts = mysqli_fetch_assoc($Posts);
  }else{
    die(print("Error: ".$mysqli->error));
  }
}else{
  die(print("No ha seleccionado un evento."));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Negocios Cabellos - Nuestra Empresa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="shortcut icon" href="img/demopage/NCabellos.png">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="CSS/normalize.css">

	<script src="JS/jquery.js" type="text/javascript"></script>
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.js"></script>

<script type="text/javascript">    
    $(document).ready(function() {    	
        $("#misionyvision").click(function(){
			$("#mision_der").css({"display":"inline-block"});
			$("#mision_iz1").css({"display":"inline-block"});
			$("#historia_der").css({"display":"none"});
			$("#historia_iz").css({"display":"none"});
        });
        });
    function misionvision(){
			$("#mision_der").css({"display":"inline-block"});
			$("#mision_iz1").css({"display":"inline-block"});
			$("#historia_der").css({"display":"none"});
			$("#historia_iz").css({"display":"none"});
		}
</script>

</head>

<body>
	<div id="contenedor">
		<header>
			<img id="baner1" src="img/header/baner1.gif" width="100%">
			<div id="banda_superior">
				<p id="lema">Lo mejor de mañana comienza hoy...</p><img id="logo" src="img/logo/logo2.png">
			</div>					
		</header>

		<section id="menu">
			<ul class="nav">
				<li><a href="Index.html">Nuestra Empresa</a></li>
				<li class="barras">|</li>
				<li><a href="">Quienes Somos</a></li>
				<li class="barras">|</li>
				<li><a href ="Productos.html">Nuestros Productos</a>
					<ul>
						<li><a href ="Productos.html">Camarones</a></li>
						<li><a href ="">Transporte</a></li>
					</ul>
				</li>
				<li class="barras">|</li>			
				<li><a href ="Contactenos.html">Contactenos</a>
                    <ul>
                        <li><a href ="Contactenos.html">Ubicación Nuestras Oficinas</a></li>
                        <li><a href ="Granjas.html">Ubicación de Nuestras Granjas</a></li>
                    </ul>
                </li>
			</ul>	
		</section>
		
		<section id="contenedor1">
		<center><h1>Seccion de Noticias | Comenta...!!!</h1></center>

			<section class="textoGeneral1">
        		<article class="cuadritoTexto1">
          			<table>
            			<tr width="10%" color="red">
              				<center><h1><?php printf('%s', $rowPosts['Titulo']); ?></h1></center><br>
            			</tr>
			            <tr>
			              <p class="muted"><?php printf('%s', $rowPosts['Fecha']); ?></p>
			            </tr>
			            <tr>
			              <p class="muted"><?php printf('%s', $rowPosts['Cuerpo']); ?></p>
			            </tr>
			            <tr>
              				<img src="image/<?php echo $rowPosts['imagen'] ?>">
            			</tr>
          			</table>

        		</article>
      		</section>

      		<section id="datos">
      		<form class="form-signin" action="guardarComentario.php" method="post" >
                            <h3>Envie su comentario</h3> 
                            <hr>
                              <table >
                                <tr>
                                  <td>
                                    <h2 class="form-signin-heading" for="txtNombre">Nombre:</h2>
                                    <input type="text" class="input-block-level" name="txtNombre" id="txtNombre" placeholder="Coloque su alias" required></td>
                                </tr>
                                <tr>
                                  <td><h2 class="form-signin-heading" for="txtEmail">Email:</h2>
                                  <input type="email" name="txtEmail" id="txtEmail" placeholder="Correo Electrónico" required>
                                </tr>

                                <tr>
                                  <td><h2 class="form-signin-heading" for="txtComentario">Comentario:</h2>
                                  <textarea name="txtComentario" id="txtComentario" class="form-control" cols="30" rows="10" placeholder="Su comentario aqui..." required></textarea>
                                </tr>
                              </table>
                              <tr>
                                <br>
                              </tr>
                              <input type="hidden" name="PostID" value=<?php printf('"%d"', $rowPosts['IdPost']); ?>>
                              <input type = "submit" class="btn btn-success btn-large" value = "Enviar Comentario">
                          </form>
          				<br>
          				<hr>
        <article class="iframeArticle">
          <iframe src=<?php printf('"verComentarios.php?IdPost=%d"', $rowPosts['IdPost']); ?> frameborder="0" name="ifrComentarios" id="ifrComentarios" width="100%" height="350px">NAVEGADOR NO SOPORTA iFRAME</iframe>
        </article>
    </section>
		</section>
		<footer>
		<p>Copyright © NegociosCabellos Todo Rightd reservados<br>
           Diseño de Team UNICAH</p>
		</footer>
	</div>
</body>
</html>