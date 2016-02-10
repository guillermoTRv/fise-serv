<script>
         $(document).ready(function(){
           $("#unidad_slc").change(function () {
                   $("#unidad_slc option:selected").each(function () {
                    elegido=$(this).val();
                    $.post("../scripts/procesar_combo.php", { elegido: elegido }, function(data){
                    $("#modelo").html(data);
                    });            
                });
           })
        });
        

    </script>
<form action="../MnHg/subirmat.php" id="alta-contenido" class="form-horizontal" name="alta_frm" method="post" enctype="multipart/form-data">
    <legend><small><a href="#reco" data-toggle='modal' style="text-decoration:none;">Recomendaciones</a></small>&nbsp;&nbsp;&nbsp;<small><a style="text-decoration:none;" href="#guia" data-toggle="modal">Puedes hacer click aqui para ver los opciones de unidades</a></small></legend>                        
        <br>
            <?php echo "<input type='hidden' name='jq' value='$materia'>"; ?>                        
            <div class="form-group">
                <label class="control-label col-md-2">Unidad:</label>
                    <div class="col-md-6">
                        <select id="unidad_slc" class="form-control input-sm curselect" name="unidad_slc" title="Selecciona una unidad" required >
                            <option value="" >---</option>
                                <?php error_reporting(E_ALL ^ E_NOTICE); include("select_unidadmat.php"); ?>
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Tema</label>
                <div class="col-md-6">
                        <select id="modelo" class="form-control input-sm curselect" name="tema_slc" title='Selecciona un tema'>
                            <option value="" >---</option>
                        </select>
                </div>
            </div>

            
            <div class="form-group">
                <label for="tipo" class="control-label col-md-2">Tipo:</label>
                <div class="col-md-6">
                    <select class="form-control input-sm curselect" id="tipo" name="tipo_slc" title="Selecciona un tipo de material" required>
                    <option value=""></option>
                        <?php error_reporting(E_ALL ^ E_NOTICE); include("../select_tipo.php"); ?>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label for="m" class="control-label col-md-2">Consideracion Opcional</label>
                <div class="col-md-6">
                    <input type="checkbox" id="inlineCheckbox" name="consideracion_rdo" title="Ejercicio-problema" value="Ejercicio-Problema"/>&nbsp;<label class='form-control-static'>Ejercicio-Problema</label>
                    
                </div> 
            </div>

            <div class="form-group">
                <label for="titulo" class="control-label col-md-2">Titulo:</label>
                <div class="col-md-6">
                    <input type="text"  class="form-control input-sm curselect" id="titulo" title="Titulo" name="titulo_txt" pattern="[a-zA-Z0-9.,:;()ññáéíóú/\s/]{1,150}" title="Crea un titulo para el contenido no mayor a 150 caracteres, utiliza solo letras, números, comas y puntos" required>
                </div>
            </div>

            <div class="form-group">
                <label for="descripcion" class="control-label col-md-2">Puedes agregar texto y una imagen en la siguiente parte:</label>
                <div class="col-md-6">
                    <textarea rows="6" maxlength="1000" class="form-control input-sm curselect" id="descripcion" name="descripcion_txt"required></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="link" class="control-label col-md-2">link(opcional):</label>
                <div class="col-md-6">
                    <input type="url" class="form-control input-sm curselect" id="link" title="Link" name="link_txt">
                </div>
            </div>

            <div class="col-md-offset-2">
            <table id="formularioSubida" border="0">
                    <thead>
                        <th>Elige los archivos que quieras subir</th>
                    </thead>
                    <tr>
                        <td>
                            
                                <input class="inputImagenOculto" name="imagen1" type="file">
                                
                            
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <input type="button" id="botonAnnadir" onClick="agregarFila('formularioSubida','botonAnnadir')" value="Añadir archivo" style="width:138px;">        
                            <!--<input type="submit" name="botonSubir" value="Subir">--> 
                        </td>
                    </tr>
                </table>
            </div>
            

            <div class="form-group">
                <div class="checkbox col-md-4 col-md-offset-2">
                    <label >
                        <input type="checkbox" required>Acepto terminos y condiciones &nbsp;<small><a class='etiqa' href="#leer" data-toggle='modal' >Leer</a></small>
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-2 col-md-offset-2">
                    <input type="submit" class="btn btn-primary btn-sm" name="botonSubir" value="Subir">
                    <!--<button class="btn btn-primary btn-sm">Enviar</button>-->
                </div>
            </div>
            <br>

</form>
<?php include('../recomendaciones.php'); ?>
<?php include('../scripts/guiatemas.php'); ?>