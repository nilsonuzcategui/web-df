<?php 
	session_start();
	require_once('config/conex.php');
	$sesion=null;
	$tipo = null;
	$periodo=null;
	$idperiodo=null;
	
	
	if(isset($_SESSION['usuario'])){
		$sesion=$_SESSION['usuario'];
        if(isset($_GET['s']) && $_GET['s'] == 'perfil'){
            $section = 'perfil.php';
        }else if(isset($_GET['s']) && $_GET['s'] == 'aportes'){
            $section = 'aportes.php';
        }else{
		  //$section=(isset($_GET["s"]))?$_GET["s"]:"home.php";
            $section = 'home.php';
        }
	}else{
		$section=(isset($_GET["s"]))?$_GET["s"]:"iniciar-secion.html";
	}
?>
<!doctype html>
<html lang="es">
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		
		<meta content="Jonatan D. Alavarez M." name="author"/>
		<meta content="Pagina del Distrito Falcon" name="description">
		<meta content=" " name="keywords" />
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
        
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Iconos -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<title>Consulta Aportes - Distrito Falcon</title>
		
		<!-- CSS -->
		<!--Menu responsive-->
        <?php if($section != 'iniciar-secion.html'){ ?>
            <link rel="stylesheet" media="all" href="css/estilo.css"/>
            <style>
                body{
                    background: #f5f5f5 !important;
                }
            </style>
        <?php }else{ ?>
         <!-- estilo del login -->
        <link rel="stylesheet" type="text/css" href="css/login.css"/>
        <style>
            body{
                background: url(img/fondo.jpg) no-repeat top center;
                background-size: cover; /*para ocupar toda la pantalla*/
                background-attachment: fixed;/*para que la imagen no se mueva*/
                background-repeat: no-repeat;
            }
        </style>
        <?php } ?>
        
	</head>
	<body>
		<div id="body">
			<div id="section">
				<?php
                    if($section != 'iniciar-secion.html'){
                        include('menu.php');
                    }
                    include($section) 
                ?>
			</div>

			<div id="footer" class="text-center">
				<span class="copyright">© 2016 Superintendencia Del Distrito Falcon.</span>
				</br>
				<span>Dirección: San Jose Calle 10 la Florida entre Maparari y Romulo Gallegos Coro Estado Falcon.</span>
				</br>
				<span>Teléfonos:0268-460-2921; 0416-962-3510.</span>
				</br>
				<span>Correo: distritofalcon2013@gmail.com.</span>
			</div>
			
		</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
<?php
mysqli_close($idConexion);
?>