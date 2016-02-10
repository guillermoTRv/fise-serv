<form action="reco/modificar_reco.php" method="POST" enctype="multipart/form-data">
    <div class="checkbox">
        <label>
        <input type="checkbox" name="eliminar_rdo" title="eliminar" value="eliminar" required> Eliminar recomendacion
        </label>
    </div>
    <?php echo "<input type='hidden' name='nf' value='$id_reco'>"; ?>
    <br>
    <button type="submit" class="btn btn-primary">Aceptar</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
</form>