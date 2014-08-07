<?php
require_once('conexion/conexion.php');

session_start();
if($_SESSION['Auth'] != "1"){
}else{
	if(isset($_POST['txtUsuario']) && isset($_POST['txtContra']) && isset($_POST['txtContra2'])){
		if($_POST['txtContra'] == $_POST['txtContra2']){
			$queryNuevoUsuario = sprintf("INSERT INTO Usuario(Usuario, Contrasena) VALUES('%s', '%s')", $_POST['txtUsuario'], md5($_POST['txtContra']));
			if ($nuevoUsuario = $mysqli->query($queryNuevoUsuario)) {
				header('refresh:0;url=index.php');
			}else{
			  die(print("Error: ".$mysqli->error));
			}
		}else{
			header('refresh:3;url=index.php?ErrorPass=405382dssd2');	
			die(print('Las contraseñas ingresadas con coinciden.'));
		}
	}else{
		header('refresh:3;url=index.php?ErrorRequired=22da3862scz');
		die(print('Faltan datos en el formulario.'));
	}
}
?>