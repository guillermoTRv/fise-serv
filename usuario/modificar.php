<script>
    function validacion(){
         p1 = document.getElementById("inputpass").value;
         p2 = document.getElementById("inputconfirm").value;
        if (p1!=p2) {
            elemento1 = document.createElement('p');
            elemento1.appendChild(document.createTextNode('Vuelve a confirmar tu contraseña'));
            elemento1.id = 'nuevo';
            elemento2 = document.getElementById('alerta');
            elemento2.appendChild(elemento1);
            return false;
            
            
        };
        }

</script>
<div class="col-md-9 boruser">
    <div class="row">
        <div class="col-md-5"><h3>Modificar perfil</h3></div>
    </div>
    <ul class="nav nav-tabs">
    	<li><a href='#datos' data-toggle='tab'>Datos generales</a></li>
    	<li><a href='#contraseña' data-toggle='tab'>Cambiar contraseña</a></li>
    </ul>
    <?php 
		
		$id=$_SESSION['id_usuario'];

    	$buscar="SELECT * FROM usuariosfise WHERE id_user='$id'";
    	$ejecutar=$conexion->query($buscar);
    	$registros=$ejecutar->fetch_assoc();
    	
    	$correo=$registros['correo_user'];
    	$name_user=$registros['name_user'];

    	$type=$registros['type_user'];
    	$pais=$registros['pais'];
     ?>
     <br>
     <div class="tab-content">
     	<div class="tab-pane fade in active" id='datos'>
     		<form action="muchos/mod_user.php" method="post" enctype="">
     			 <label>Correo</label>
			     <input type="text" class="form-control" id="disabledTextInput" value=<?php echo $correo ?> disabled>
			     <br>
			     
                 <label>Nombre de usuario</label>
			     <input type="text" class="form-control" pattern="[a-zA-Z0-9ñ]{3,16}" title="Solo puedes usar letras y números sin espacios" name='nombre_txt' value=<?php echo $name_user ?>>
			     <br>
			     
                 <label>Tipo de usuario</label>
				 <select class="form-control input-sm" id="tipo" name="tipouser_slc">
                                <option value=''>--</option>
                                <option value="Maestro">Maestro</option>
                                <option value="Estudiante">Estudiante</option>
                                <option value="Profesional">Profesional</option>
                                <option value="Conocedor">Conocedor</option>
                 </select>
				 <br>
				 
                 <label>País</label>
				 <select class="form-control input-sm" id="tipo" name="tipopais_slc">
                                <?php include("muchos/paises.php"); ?>

                 </select>
				 <br>
				 
                 <button type="submit" class="btn btn-success">guardar cambios</button>		
     		</form>
     		<br>
     	</div>
     	<div class="tab-pane fade" id='contraseña'>
     		<form action="muchos/mod_contr.php" onSubmit="return validacion()" method="post" > 
				 <label>Escriba la contraseña actual</label>
				 <input type="password" pattern="[a-zA-Z0-9ñ]{6,20}" title="La contraseña debe poseer mas de 6 caracteres, solo letras y números" name="p_txt" class="form-control">
				 <label>Escriba la nueva contraseña</label>
				 <input type="password" pattern="[a-zA-Z0-9ñ]{6,20}" title="La contraseña debe poseer mas de 6 caracteres, solo letras y números" name="cp_txt" id="inputpass" class="form-control">
				 <label>Confirme la nueva contraseña</label>
				 <input type="password" pattern="[a-zA-Z0-9ñ]{6,20}" title="La contraseña debe poseer mas de 6 caracteres, solo letras y números" name="cp_txt" id="inputconfirm" class="form-control">
				 <div id="alerta"></div>
                 <br>
				 <button type="submit" class="btn btn-success">guardar cambios</button>
    		</form>
    		<br>
     	</div>
     </div>
     

</div>