<?php
	require_once('conexion/conexion.php');

	$target_path = "../image/";
	$target_path = $target_path . basename( $_FILES['uploadfile']['name']); 
	if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_path)) { 
		echo "El archivo ". basename( $_FILES['uploadfile']['name']). " ha sido subido";
		if(isset($_POST['txtTitulo']) && isset($_POST['txtResumen'])){
		//if($_POST['txtContra'] == $_POST['txtContra2']){
			$queryNuevoUsuario = sprintf("INSERT INTO post(Titulo, imagen, Cuerpo, Fecha) VALUES ('%s', '%s', '%s', '%s')", $_POST['txtTitulo'], basename( $_FILES['uploadfile']['name']), $_POST['txtResumen'], date('Y-m-d'));			
			if ($nuevoUsuario = $mysqli->query($queryNuevoUsuario)) {
				header('refresh:0;url=PanelControl.php');
			}else{
			  die(print("Error: ".$mysqli->error));
			}
		//}else{
		//}
	}else{
		header('refresh:3;url=PanelControl.php?ErrorRequired=22da3862scz');
		die(print('Faltan datos en el formulario.'));
	}
	} else{
	echo "Ha ocurrido un error, trate de nuevo!";
	}	
?>