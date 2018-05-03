<?php
	$msj = isset($_GET["msj"])?$_GET["msj"]:null;
	if($msj=='1') echo "<script>alert('Datos Actualizados')</script>"; 
	
	$ord = isset($_GET['ord'])?$_GET['ord']:NULL;
	if(isset($sesion)){
		
?>
<div id="aportes">
	<div class="menu"><a class="boton" href="cerrar-sesion.php">Salir</a></div>
	<div id="tercero" class="borde">
		<legend class="titulo">Datos Personales</legend>
		<?php
			$sql = "SELECT * FROM tercero t LEFT JOIN persona p ON t.idtercero=p.idpersona WHERE idtercero=".$sesion;
			$rs = mysqli_query($idConexion,$sql);
	
			if(mysqli_num_rows($rs) > 0){
				$row=mysqli_fetch_array($rs);
		?>
				<label><strong>Cedula</strong> <?=$row["id"]?></label>
				<label><strong>Nombres</strong> <?=$row["nombre"]?></label>
				<label><strong>Apellidos</strong> <?=$row["apellido"]?></label>
				<label><strong>Lugar De Nacimiento</strong> <?=$row["lugar_nacimiento"]?></label>
				<label><strong>Fecha De Nacimiento</strong> <?=$row["inicio"]?></label>
				<label><strong>Nacionalidad</strong> <?=$row["pais"]?></label>
				<label><strong>Edo. Civil</strong> <?=$row["edo_civil"]?></label>
				<label><strong>Sexo</strong> <?=$row["sexo"]?></label>
				<label><strong>Teléfono</strong> <?=$row["telefono"]?></label>
				<label><strong>Correo</strong> <?=$row["correo"]?></label>
				<label><strong>Dirección</strong> <?=$row["direccion"]?></label>
				<br/>
				<a class="boton" href="?s=tercero.html">Editar</a>
		<?php
			}
		?>
	</div>
	<div class="borde">
		<legend class="titulo">Últimos Aportes Registrados</legend>
		<div class="tabla">
			<ul class="fila">
				<a href="?s=aportes.php&ord=fecha"><li style="width:10%">FECHA</li></a>
				<a href="?s=aportes.php&ord=num_recibo"><li style="width:10%">Nº RECIBO</li></a>
				<a href="?s=aportes.php&ord=nombre"><li style="width:30%">CONCEPTO</li></a>
				<a href="?s=aportes.php&ord=descripcion"><li style="width:30%">DESCRIPCION</li></a>
				<a href="?s=aportes.php&ord=monto"><li style="width:15%">MONTO</li></a>
			</ul>
			<?php
			$sql = sprintf("SELECT DATE(fecha) AS fecha, num_recibo, nombre, descripcion, monto FROM aporte a LEFT JOIN aporte_monto am ON a.idaporte=am.idaporte LEFT JOIN aporte_concepto ac ON am.idconcepto=ac.idconcepto WHERE a.estatus='A' AND a.idtercero=%d".(isset($ord)?" ORDER BY %s":" ORDER BY fecha DESC")." LIMIT 100",
			mysqli_real_escape_string($idConexion,$sesion),mysqli_real_escape_string($idConexion,$ord));
			$rs=mysqli_query($idConexion,$sql);
			if(mysqli_num_rows($rs)>0){
				while($row=mysqli_fetch_assoc($rs)){
				?>
				<ul class="fila">
					<li style="width:10%"><?=$row["fecha"]?></li>
					<li style="width:10%"><?=$row["num_recibo"]?></li>
					<li style="width:30%"><?=$row["nombre"]?></li>
					<li style="width:30%"><?=$row["descripcion"]?></li>
					<li style="width:15%"><?=number_format($row["monto"], 2, ',', '.')?></li>
				</ul>
				<?php
				}
			}
			?>
		</div>
	</div>
</div>
<?php
	}else{
		echo "<script language='javascript'>
					alert('ACCESO NO AUTORIZADO, Por Favor Inicie Sesion');
					window.location.href = 'index.php';
					</script>";
	}
?>
