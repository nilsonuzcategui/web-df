<?php
//si existe las variables del formularo!
if(isset($_FILES['userfile']) && isset($_POST['id'])){
    $id = $_POST['id'];
    
# Conectamos con MySQL
$mysqli=new mysqli("159.203.124.63","asambleas","asambleas","anco_adv");
if (mysqli_connect_errno()) {
    die("Error al conectar: ".mysqli_connect_error());
}
 
# Comprovamos que se haya subido un fichero
    if (is_uploaded_file($_FILES["userfile"]["tmp_name"]))
    {
 
        # Escapa caracteres especiales
        $imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));
 
        # Agregamos la imagen a la base de datos
        $sql = "UPDATE `tercero` SET `imagen`='".$imagenEscapes."' WHERE idtercero= ".$id;
        //$sql="INSERT INTO `imagephp` (anchura,altura,tipo,imagen,nombre) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile"]["type"]."','".$imagenEscapes."','".$nombre."')";
        $mysqli->query($sql);
    }
}
header('Location: index.php?s=perfil');
?>