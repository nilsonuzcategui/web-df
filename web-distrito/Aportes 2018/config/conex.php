<?php
	$mysql_host = "159.203.124.63";
	$mysql_user = "asambleas";
	$mysql_pass = "asambleas";
	$mysql_base = "anco_adv";
	
	$idConexion =mysqli_connect($mysql_host,$mysql_user,$mysql_pass)or die(
		"No se pudo establecer la conexion al servidor: ".mysqli_error($idConexion)
	);
	mysqli_select_db($idConexion,$mysql_base);
	mysqli_query($idConexion,"SET NAMES 'utf8'");
?>
