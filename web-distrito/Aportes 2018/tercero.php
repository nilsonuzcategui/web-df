<?php
	require_once('config/conex.php');
	
	$id = $_POST["id"];
	$nomb = $_POST["nomb"];
	$apel = $_POST["apel"];
	$lug = $_POST["lug"];
	$fech = $_POST["fech"];
	$naci = $_POST["naci"];
	$edo = $_POST["edo"];
	$sex = $_POST["sexo"];
	$dire = $_POST["dire"];
	$tlf = $_POST["tlf"];
	$corr = $_POST["corr"];

	$sql  =  sprintf("UPDATE tercero SET nombre='%s', apellido='%s', lugar_nacimiento='%s', inicio='%s', pais='%s', edo_civil='%s', sexo='%s', direccion='%s', telefono='%s', correo='%s' WHERE idtercero=".$id.";",
	mysqli_real_escape_string($idConexion,$nomb),mysqli_real_escape_string($idConexion,$apel),mysqli_real_escape_string($idConexion,$lug),
	mysqli_real_escape_string($idConexion,$fech),mysqli_real_escape_string($idConexion,$naci),mysqli_real_escape_string($idConexion,$edo), 
	mysqli_real_escape_string($idConexion,$sex),mysqli_real_escape_string($idConexion,$dire),mysqli_real_escape_string($idConexion,$tlf), 
	mysqli_real_escape_string($idConexion,$corr));
	
	mysqli_query($idConexion, $sql);

	if(mysqli_affected_rows($idConexion)>0){
		$msj='1';
	}
	else{
		$msj='0';
	}

	mysqli_close($idConexion);
	header("Location:consulta-a.php?s=aportes.php&msj=".$msj);
?>