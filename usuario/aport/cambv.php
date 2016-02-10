<?php 
    $bas="SELECT * FROM ficha_contenido_materia WHERE id_fichamat='$camb'";
    $e_bas=$conexion->query($bas);    
    $a_bas=$e_bas->fetch_array();
    $materia=$a_bas[1];
    $unidad=$a_bas[2];
    $tema=$a_bas[3];
    $titulo=$a_bas[4];
    $texto=$a_bas[5];
    $link=$a_bas[6];
    $tipo=$a_bas[7];
    $consideracion=$a_bas[8];
?>
<script>
         $(document).ready(function(){
           $("#unidad_slc").change(function () {
                   $("#unidad_slc option:selected").each(function () {
                    elegido=$(this).val();
                    $.post("aport/procesar_combo.php", { elegido: elegido }, function(data){
                    $("#modelo").html(data);
                    });            
                });
           })
        });
</script>
<h4 style="font-family:curisve;">Contenido a modificar - <?php echo $titulo; ?></h4>
<h4 style="font-family:curisve;">Unidad: <?php echo $unidad; ?></h4>
<h4 style="font-family:curisve;">Tema: &nbsp;&nbsp;&nbsp;<?php echo $tema; ?></h4>
<br>
<form action="aport/modificar_aport.php" method="post" enctype="multipart/form-data">
        <label>Titulo</label>
            <input type="text" class="form-control" name='cn_txt' value="<?php echo "$titulo"; ?>" pattern="[a-zA-Z0-9.,ñáéíóú/\s/]{1,150}" title="Crea un titulo para el contenido no mayor a 150 caracteres, utiliza solo letras, números, comas y puntos" required>
            <br>
            <?php echo "<input type='hidden' name='gh' value='$titulo'>"; ?>
        <label>Texto</label>
            <textarea rows="6" maxlength="1000" class="form-control input-sm" id="descripcion" name="ds_txt" required><?php echo "$texto"; ?></textarea>
            <br>
            <?php echo "<input type='hidden' name='rs' value='$texto'>"; ?>
        
        <label>Unidad</label>
            <select id="unidad_slc" class="form-control input-sm curselect" name="unidad_slc" title="Selecciona una unidad">
            <option value="" >---</option>
                <?php include("unidadescamb.php"); ?>
            </select>
            <br>
            <?php echo "<input type='hidden' name='ip' value='$unidad'>"; ?>
            <?php echo "<input type='hidden' name='px' value='$tema'>"; ?>                
        <?php if ($materia!="Algebra basica"){include("temascamb.php");} ?>
            
        <label>Tipo de contenido</label>
            <select class="form-control input-sm" id="tipo" name="tipo_slc" required>
		<option value="" >---</option>
                <?php include("../select_tipo.php"); ?>                    
            </select>
            <br>
            <?php echo "<input type='hidden' name='zq' value='$tipo'>"; ?>
        
        <label>Link</label>
            <input type="url" class="form-control" name="link" value="<?php echo "$link"; ?>">
            <br>
            <?php echo "<input type='hidden' name='uy' value='$link'>"; ?>

        <label>
            <input type="checkbox" name="cons_rdo" title="eliminar" value="Ejercicio-Problema"> 
                Ejercicio-problema Marcalo en caso de que tu contenido tenga esta consideración o dejalo asi en caso contrario
            </label>
            <?php echo "<input type='hidden' name='wl' value='$consideracion'>"; ?>
            <?php echo "<input type='hidden' name='hs' value='$camb'>"; ?>

        <br>
        <br>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <a href='?aport=aport' class="btn btn-default" data-dismiss="modal">Cancelar</a>
</form>
<br>