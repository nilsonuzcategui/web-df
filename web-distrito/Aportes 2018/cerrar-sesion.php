<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header("location:index.php");
	} else {
		session_unset();
		session_destroy();
		header("location:index.php");
	}
?>