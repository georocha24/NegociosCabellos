<?php
require_once('admin/conexion/conexion.php');

session_start();

if(isset($_POST['txtNombre']) && isset($_POST['txtEmail']) && isset($_POST['txtComentario']) && isset($_POST['PostID'])){
	$queryNuevoComentario = sprintf("INSERT INTO comentarios(Nombre, Email, Comentario, Fecha, IdPost) VALUES('%s', '%s', '%s', '%s', '%d')", $_POST['txtNombre'], $_POST['txtEmail'], nl2br($_POST['txtComentario']), date('Y-m-d H:i:s'), $_POST['PostID']);
	if ($nuevoComentario = $mysqli->query($queryNuevoComentario)) {
		header('refresh:0;url=nuevoComentarios.php?Evento='.$_POST['PostID']);
	}else{
	  die(print("Error: ".$mysqli->error));
	}
}else{
	die(print('Faltan datos en el formulario.'));
	header('refresh:0;url=nuevoComentarios.php?Evento='.$_POST['PostID']);
}
?>