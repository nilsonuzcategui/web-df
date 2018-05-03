<?php
	session_start();
	require_once('config/conex.php');

	$usuario = htmlspecialchars(trim($_POST['usuario']));
	$clave = htmlspecialchars(trim($_POST['clave']));
	
	$sql = sprintf("SELECT idtercero FROM tercero t WHERE t.id LIKE '%s' AND REPLACE(t.codigo,'-','')= '%s';",
	mysqli_real_escape_string($idConexion,"%".$usuario),mysqli_real_escape_string($idConexion,$clave));
	$rs = mysqli_query($idConexion,$sql);
	
	if(mysqli_num_rows($rs) > 0){
		$array=mysqli_fetch_array($rs);
		$_SESSION["usuario"]=$array["idtercero"];
		/*echo "<script language='javascript'>
			alert('Bienvenido Al Sistema De Consulta De Aportes, Dios Te Bendiga!');
			</script>";*/
	}
	
	mysqli_close($idConexion);
	header("location:index.php");
?>