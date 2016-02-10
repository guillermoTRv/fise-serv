<form action="reco/respuestas/mr.php" method="POST" enctype="multipart/form-data">
            
            <label>Puedes modificar el texto que habias colocado antes</label>
            <input type="text" class="form-control" name='q' value="<?php echo "$texto_creco"; ?>" required>
            <br>
            <label>Puedes modificar el link que habias colocado</label>
            <input type="url" class="form-control" name='w' value="<?php echo "$link_reco"; ?>" required>
            <br>
            <?php echo "<input type='hidden' name='e' value='$id_comentreco'>"; ?>
            
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
</form>