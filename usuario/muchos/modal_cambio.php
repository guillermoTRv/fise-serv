<?php echo "
    <div style='margin-top:50px;margin-right:-17px;'' class='modal fade' id='$id_fichabas' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>"; ?>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="muchos/modificar_prf.php" method="post" enctype="multipart/form-data">
                        <legend>Modificar contenido compartido</legend>
                            <label>Titulo</label>
                            <input type="text" class="form-control" name='clist_txt' value="<?php echo "$titulo"; ?>" required >
                            <br>
                            <label>Texto</label>
                            <textarea rows="6" maxlength="500" class="form-control input-sm" id="descripcion" name="descripcion_txt" required><?php echo "$texto"; ?></textarea>
                            <br>
                            <label>Unidad</label>
                            <select id="unidad_slc" class="form-control input-sm" name="unidad_slc" required >
                                <option value="" >---</option>
                                    <?php error_reporting(E_ALL ^ E_NOTICE); include("/../../trigonometria/panel/select_unidadtrig.php"); ?>
                            </select>
                            <br>
                            <label>Tipo de contenido</label>
                            <select class="form-control input-sm" id="tipo" name="tipo_slc" required>
                                <option value="video">Video</option>
                                <option value="">Presentacion</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                
                            </select>
                            <br>
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" value="<?php echo "$link"; ?>">
                            <BR>
                            <label>
                                <input type="checkbox" name="eliminar_rdo" title="eliminar" value="eliminar" required> 
                                Ejercicio-problema Consideracion (opcional)
                            </label>

                            <?php echo "<input type='hidden' name='nu' value='$id_relpreferent'>"; ?>
                            <br>
                    </div>
                    <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </form>
                    <div id="m_climens"></div>
                </div>
            </div>
        </div>
    </div>