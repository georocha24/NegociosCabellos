<?php
require_once('conexion/conexion.php');

session_start();

if($_SESSION['Auth'] != "1"){
	header("index.php?ErrorLogin=28cnasnd2212");
}else{

	if(isset($_GET['IdUsuario'])){
		$querNuevoPost = sprintf("DELETE FROM Usuario WHERE IdUsuario = '%d'", $_GET['IdUsuario']);
		if ($nuevoPost = $mysqli->query($querNuevoPost)) {
			header('refresh:0;url=eliminarUsuario.php');
		}else{
		  die(print("Error: ".$mysqli->error));
		}
	}else{
		die(print('No ha elegido un Usuario para eliminar.'));
		header('refresh:3;url=panelControl.php?ErrorRequired=22da3862scz');
	}
}
?>