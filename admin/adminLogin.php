<?php 
require_once('conexion/conexion.php');

session_start();

if(isset($_POST['user']) && isset($_POST['pass'])){
	$queryLogin = sprintf("SELECT COUNT(*) AS TotalRows FROM usuario WHERE Usuario = '%s' AND Contrasena = '%s'", $_POST['user'], md5($_POST['pass']));
	if ($Login = $mysqli->query($queryLogin)) {
	  $TotalLogin = mysqli_fetch_assoc($Login);

	  if($TotalLogin['TotalRows'] == "1"){
	  	$_SESSION['Auth'] = "1";
		$_SESSION['Usuario'] = $_POST['user'];
	  	header('refresh:1;url=PanelControl.php');
	  }else{
	  	die(print('Error de Usuario y/o Contraseña.'));
		header('refresh:3;url=index.php?ErrorUsuario=sfa212das');
	  }
	}else{
	  die(print("Error: ".$mysqli->error));
	}
}else{
	die(print('Ingrese su usuario y contraseña.'));
	header('refresh:3;url=index.php?ErrorUsuario=1212882ssf22');
}
?>