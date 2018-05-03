<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
    $sql = "SELECT * FROM tercero t LEFT JOIN persona p ON t.idtercero=p.idpersona WHERE idtercero=".$sesion;
    $rs = mysqli_query($idConexion,$sql);
?>
<div class="container text-center datos datos-contenido">
    <div class="row datos-titulo">
        <div class="col-lg">
            <h2>Datos del Usuario</h2>
        </div>
    </div>
<?php
    if(mysqli_num_rows($rs) > 0){
        $row=mysqli_fetch_array($rs);
?>
<div class="datos-content text-left">
    <div class="row foto-perfil">
        <div class="col-md text-center">
        <?php
        if($row['imagen'] == ""){
            $imagen = "img/estandar-perfil.png";
        }else{
            $imagen = 'data:;base64,'.base64_encode($row["imagen"]).'';
        }
        ?>
            <img src="<?=$imagen?>" class="rounded-circle img-thumbnail" style="width: 200px; height: 200px;">
        </div>
    </div>
    
    
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md text-right">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-quidditch"></i> Editar Imagen
            </button>
        </div>
    </div>
    
    
    <div class="row">
         <div class="col-md">
            <label><strong>Cedula</strong> <?=$row["id"]?></label>
        </div>
        <div class="col-md">
            <label><strong>Nombres</strong> <?=$row["nombre"]?></label>
        </div>
        <div class="col-md">
            <label><strong>Apellidos</strong> <?=$row["apellido"]?></label>
        </div>
    </div>
    
    <div class="row">
         <div class="col-md">
            <label><strong>Lugar De Nacimiento</strong> <?=$row["lugar_nacimiento"]?></label>
        </div>
        <div class="col-md">
            <label><strong>Nacionalidad</strong> <?=$row["pais"]?></label>
        </div>
        <div class="col-md">
            <label><strong>Edo. Civil</strong> <?=$row["edo_civil"]?></label>
        </div>
    </div>
    
    <div class="row">
         <div class="col-md">
            <label><strong>Sexo</strong> <?=$row["sexo"]?></label>
        </div>
        <div class="col-md">
            <label><strong>Teléfono</strong> <?=$row["telefono"]?></label>
        </div>
        <div class="col-md">
            <label><strong>Correo</strong> <?=$row["correo"]?></label>
        </div>
    </div>
    
    <div class="row">
         <div class="col-md">
            <label><strong>Dirección</strong> <?=$row["direccion"]?></label>
        </div>
    </div> 
    <div class="row datos-editar text-center">
         <div class="col-md">
             <button type="button" class="btn btn-info disabled" id="editar-datos">
                <i class="fas fa-edit"></i> Editar
            </button>
        </div>
    </div>
</div>
    
<div class="datos-actualizar" style="display:none">
    <form class="borde" action="tercero.php" method="post">
        <div class="alert alert-info" role="alert">
            Para actualizar la cedula, comuniquese con la <b>administracion de su Distrito!</b>
        </div>
		<fieldset class="text-left">
            <input type="hidden" name="id" value="<?=$sesion?>">
            <div class="row">
                 <div class="col-md">
                    <div class="form-group">
                        <label class="label">Cedula:</label>
                        <input type="text" required name="ci" class="form-control" maxlength="45" value="<?=$row["id"]?>" disabled alt="Para actualizar este dato, dirigace a las oficinas del Distrito Falcón"/>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label class="label">Nombres:</label>
                        <input type="text" required name="nomb" class="form-control" maxlength="45" value="<?=$row["nombre"]?>" />
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label class="label">Apellidos:</label>
                        <input type="text" required name="apel" class="form-control" maxlength="45" value="<?=$row["apellido"]?>" />
                    </div>
                </div>
            </div>
            
            <div class="row">
                 <div class="col-md">
                    <label class="label">Sexo:</label>
                    <select name="sexo" class="form-control" value="">
                        <option value="Masculino" <?php if ($row["sexo"]=="Masculino") echo "selected";?>>Masculino</option>
                        <option value="Femenino" <?php if ($row["sexo"]=="Femenino") echo "selected";?>>Femenino</option>
                    </select>
                    <!-- <input type="text" required name="sexo" class="inputText" maxlength="45" value="<?=$row["sexo"]?>" />-->
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label class="label">Lugar de Nacimiento:</label>
				        <input type="text" required name="lug" class="form-control" maxlength="45" value="<?=$row["lugar_nacimiento"]?>" />
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label class="label">Fecha de Nacimiento:</label>
				        <input type="date" required name="fech" class="form-control" maxlength="45" value="<?=$row["inicio"]?>" />
                    </div>
                </div>
            </div>
            
            <div class="row">
                 <div class="col-md">
                     <div class="form-group">
                        <label class="label">Nacionalidad:</label>
				        <input type="text" required name="naci" class="form-control" maxlength="45" value="<?=$row["pais"]?>" />
                     </div>
                </div>
                <div class="col-md">
                    <label class="label">Edo. Civil:</label>
                    <select name="edo" class="form-control" value="<?=$row["edo_civil"]?>">
                        <option value="Soltero(a)" <?php if ($row["edo_civil"]=="Soltero(a)") echo "selected";?>>Soltero(a)</option>
                        <option value="Casado(a)" <?php if ($row["edo_civil"]=="Casado(a)") echo "selected";?>>Casado(a)</option>
                        <option value="Divorciado(a)" <?php if ($row["edo_civil"]=="Divorciado(a)") echo "selected";?>>Divorciado(a)</option>
                        <option value="Viudo(a)" <?php if ($row["edo_civil"]=="Viudo(a)") echo "selected";?>>Viudo(a)</option>
                    </select>
				    <!--<input type="text" required name="edo" class="inputText" maxlength="45" value="<?=$row["edo_civil"]?>" />-->
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label class="label">Dirección:</label>
                        <input type="text" required name="dire" class="form-control" maxlength="45" value="<?=$row["direccion"]?>"/>
                    </div>
                </div>
            </div>
            
            <div class="row">
                 <div class="col-md">
                     <div class="form-group">
                        <label class="label">Teléfono:</label>
                        <input type="text" required name="tlf" class="form-control" maxlength="45" value="<?=$row["telefono"]?>"/>
                     </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label class="label">Correo:</label>
                        <input type="text" required name="corr" class="form-control" maxlength="45" value="<?=$row["correo"]?>"/>
                    </div>
                </div>
            </div>
		</fieldset>
		<fieldset>
			<div class="botones">
				<button class="btn btn-info" type="submit">Guardar</button>
			</div>
		</fieldset>
	</form>
</div> 
<?php
    }
?>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar Imagen de Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-imagen">
              <form enctype="multipart/form-data" class="formulario" action="cambiar-imagen.php" method="post">
                  
                <input type="hidden" name="id" value="<?=$sesion?>">
                  
                <label for="imagen">Subir un archivo</label><br />
                <input name="userfile" type="file" id="imagen" required/><br /><br />
                  
                <div class="alert alert-info mensaje" role="alert" style="display:none">
                <!-- mensaje dinamico con la informacion de la imagen -->
                </div>  
                  
                <input type="submit" class="btn btn-info subir-imagen" value="Subir imagen" style="display:none"/><br />
            </form>
          </div>
      </div>
    </div>
  </div>
</div>


<script>
    $(document).ready(function(){
        //cambiar imagen de perfil
        var fileExtension = "";
        var fileSize = "";
        
        function filePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.mensaje').html('<div class="text-center"><img src="'+e.target.result+'" width="150" height="150" style="border-radius: 5em;"/></div><br>Vista Previa.');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    
        $(':file').change(function()
        {
            var aceptable = [ "JPG" , "PNG" , "JPEG" , "jpg" , "png", "jpeg"];
            //obtenemos un array con los datos del archivo
            var file = $("#imagen")[0].files[0];
            //obtenemos el nombre del archivo
            var fileName = file.name;
            //obtenemos la extensión del archivo
            fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
            //obtenemos el tamaño del archivo
            fileSize = file.size;
            //obtenemos el tipo de archivo image/png ejemplo
            var fileType = file.type;
            
            
            if($.inArray( fileExtension , aceptable ) == 3){
                filePreview(this);
                $('.subir-imagen').show();
            }else{
                $('.mensaje').html('<i class="fas fa-exclamation-triangle"></i> Tipo de archivo <b>no compatible</b>');
                $('.subir-imagen').hide();
            }

            $('.mensaje').show();
        });
        
        
        $('#editar-datos').on('click',function(){
            if ($(this).hasClass('disabled')){
                swal("Lo siento!", "Esta area esta en Mantenimiento!", "warning");
            }else{
                $('.datos-actualizar').show();
                $('.datos-content').hide();
            }
        });
    });
</script>