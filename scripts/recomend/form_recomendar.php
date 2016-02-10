<?php echo "
    <div style='margin-top:50px;margin-right:-17px;' class='modal fade' id='$id_r' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>"; ?>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="../scripts/recomend/rr.php" method="post" enctype="multipart/form-data">
                        <legend>Llena los siguientes campos</legend>
                            <div class="form-group">
                                <label for="cm">Comentario</label>
                                <input type="text" class="form-control" name="text" placeholder="Escribe un breve comentario para el usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Link</label>
                                <input type="url" class="form-control" name="url" placeholder="Coloca aqui el link"required>
                            </div>
                            <?php echo"<input type='hidden' name='lkj' value='$id_r'>"?>
                            <?php echo"<input type='hidden' name='mt' value='$materia'>"?>
                            <?php echo"<input type='hidden' name='gh' value='$gh'>" ?>

                    </div>
                    <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Enviar :)</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>