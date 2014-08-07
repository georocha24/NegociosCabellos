<?php
require_once('admin/conexion/conexion.php');

$queryPosts = "SELECT * FROM post ORDER BY IdPost DESC LIMIT 10";
if ($Posts = $mysqli->query($queryPosts)) {
  $rowPosts = mysqli_fetch_assoc($Posts);
}else{
  die(print("Error: ".$mysqli->error));
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

		<section id="historia_iz" class="der2">
			<img class="imgder" src="img/cuerpo/8.jpg">
			<img class="imgder" src="img/cuerpo/3.jpg">
			<img class="imgder" src="img/cuerpo/7.jpg">		
			<button onClick="misionvision()">Misión y Visión</button>
		</section>

		<section id="historia_der" class="iz2">
		
			<div class="contenedorpost">
				<section class="textoGeneral">
        			<article class="postinicio">
          				
        			</article>
        			<?php
        				do{
        			?>
        			<article class="cuadritoTexto">
          			<h2><?php printf("%s", $rowPosts['Titulo']); ?></h2>
          			<p>
            			<?php printf("%s", $rowPosts['Cuerpo']); ?>
          			</p>
          			<a href=<?php printf('"nuevoComentarios.php?Evento=%d"', $rowPosts['IdPost']); ?> class="btn btn-info">Leer mas</a>
        			</article>
        			<?php
        			}while($rowPosts = mysqli_fetch_assoc($Posts));
        			?>
      			</section>
			</div>
		</section>

		</section>
		<footer>
		<p>Copyright © NegociosCabellos Todo Rightd reservados<br>
           Diseño de Team UNICAH</p>
		</footer>
	</div>
</body>
</html>