<?php 
	session_start();
	require_once('config/conex.php');
	$sesion=null;
	$tipo = null;
	$periodo=null;
	$idperiodo=null;
	
	
	if(isset($_SESSION['usuario'])){
		$sesion=$_SESSION['usuario'];
		$section=(isset($_GET["s"]))?$_GET["s"]:"aportes.php";
	}else{
		$section=(isset($_GET["s"]))?$_GET["s"]:"iniciar-secion.html";
	}
?>
<!doctype html>
<html lang="es">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		
		<meta content="Jonatan D. Alavarez M." name="author"/>
		<meta content="Pagina del Distrito Falcon" name="description">
		<meta content=" " name="keywords" />
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
		<title>Consulta Aportes - Distrito Falcon</title>
		
		<!-- CSS -->
		<!--Menu responsive-->
		<link rel="stylesheet" type="text/css" href="css/menu.css" />
		<link rel="stylesheet" media="all" href="css/estilo.css"/>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Iconos -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        
        
        <style>
            body{
                background: url(img/fondo.jpg) no-repeat top center;
                background-size: cover; /*para ocupar toda la pantalla*/
                background-attachment: fixed;/*para que la imagen no se mueva*/
                background-repeat: no-repeat;
            }
            .login{
                background: rgba(255,255,255,.8);
                
                margin: 10% 0px;
            }
            .login-form{
                /*background-image: url(img/logo.png);*/
                background-repeat: no-repeat;
                background-position: center;
                background-size: 60%;
            }
            .login-form h2{
                margin-top: 5%;
                padding-bottom: 5%;
                border-bottom: 1px solid rgba(1,1,1,.4);
            }
            form{
                padding-bottom: 10%;
            }
        </style>
	</head>
	<body>
		<div id="body">
			
            
			<div id="footer" class="fixed-bottom text-center">
				<span class="copyright">© 2016 Superintendencia Del Distrito Falcon.</span>
				</br>
				<span>Dirección: San Jose Calle 10 la Florida entre Maparari y Romulo Gallegos Coro Estado Falcon.</span>
				</br>
				<span>Teléfonos:0268-460-2921; 0416-962-3510.</span>
				</br>
				<span>Correo: distritofalcon2013@gmail.com.</span>
			</div>
			
		</div>
	</body>
</html>