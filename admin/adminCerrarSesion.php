<?php
session_start();

if(isset($_SESSION['Auth'])){
	if($_SESSION['Auth'] != "1"){
		header("index.php?ErrorLogin=28cnasnd2212");
	}else{
		header("refresh:2;url=../index.html");
		$_SESSION['Auth'] = "";
		$_SESSION['Usuario'] = "";
		print("Se esta destruyendo la sesion, espere un momento...");
	}
}
print("Se esta destruyendo la sesion, espere un momento...");
header("refresh:2;url=../index.html");
session_destroy();
?>