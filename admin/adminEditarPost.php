<?php
require_once('conexion/conexion.php');

session_start();

if($_SESSION['Auth'] != "1"){
	header("index.php?ErrorLogin=28cnasnd2212");
}else{

	$target_path = "../image/";
	$target_path = $target_path . basename( $_FILES['uploadfile']['name']); 
	if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_path)) { 
		echo "El archivo ". basename( $_FILES['uploadfile']['name']). " ha sido subido";
		if(isset($_POST['txtTitulo']) && isset($_POST['txtResumen']) && isset($_POST['IdPost'])){
		//if($_POST['txtContra'] == $_POST['txtContra2']){
			$queryNuevoUsuario = sprintf("UPDATE post SET Titulo = '%s', imagen = '%s', Cuerpo = '%s' WHERE IdPost = '%d'", $_POST['txtTitulo'], basename( $_FILES['uploadfile']['name']), $_POST['txtResumen'], $_POST['IdPost']);			
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
}
?>

