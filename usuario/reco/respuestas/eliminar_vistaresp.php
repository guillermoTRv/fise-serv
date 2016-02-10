<form action="reco/respuestas/mr.php" method="POST" enctype="multipart/form-data">
    <div class="checkbox">
        <label>
        <input type="checkbox" name="eliminar_rdo" title="eliminar" value="eliminar" required> Eliminar respuesta
        </label>
    </div>
    <?php echo "<input type='hidden' name='nf' value='$id_comentreco'>"; ?>
    <br>
    <button type="submit" class="btn btn-primary">Aceptar</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
</form>