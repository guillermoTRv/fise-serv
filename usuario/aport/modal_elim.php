<?php echo "
    <div style='margin-top:50px;margin-right:-17px;'' class='modal fade' id='$conca' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>"; ?>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="aport/eliminar_cont.php" method="post" enctype="multipart/form-data">
                        <legend>Eliminar contenido compartido</legend>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="eliminar_rdo" title="eliminar" value="eliminar" required> 
                                    Aceptar
                                </label>
                            </div>
                            <?php echo "<input type='hidden' name='nu' value='$id_fichabas'>"; ?>
                            <?php echo "<input type='hidden' name='mt' value='bas'>"; ?>
                            <br>
                    </div>
                    <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </form>
                    <div id="m_climens"></div>
                </div>
            </div>
        </div>
    </div>