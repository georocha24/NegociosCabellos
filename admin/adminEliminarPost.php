<?php
require_once('conexion/conexion.php');

session_start();

if($_SESSION['Auth'] != "1"){
	header("index.php?ErrorLogin=28cnasnd2212");
}else{

	if(isset($_GET['IdPost'])){
		$queryEliminarComents = sprintf("DELETE FROM comentarios WHERE IdPost = '%d'", $_GET['IdPost']);
		if ($eliminarComment = $mysqli->query($queryEliminarComents)) {
		}else{
		  die(print("Error: ".$mysqli->error));
		}

		$querNuevoPost = sprintf("DELETE FROM post WHERE IdPost = '%d'", $_GET['IdPost']);
		if ($nuevoPost = $mysqli->query($querNuevoPost)) {
			header('refresh:0;url=editarPost.php');
		}else{
		  die(print("Error: ".$mysqli->error));
		}
	}else{
		die(print('No ha elegido un Post para eliminar.'));
		header('refresh:3;url=PanelControl.php?ErrorRequired=22da3862scz');
	}
}
?>