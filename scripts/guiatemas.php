<div style='margin-top:35px;'class="modal fade" id="guia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Guia de unidades</h4>
      </div>
      <div class="modal-body">
        <?php 
          $b_unidades="SELECT * FROM unidades_materias WHERE materia='$materia'";
          $e_unidad=$conexion->query($b_unidades);
          while ($a_unidad=mysqli_fetch_array($e_unidad)) {
            $id=$a_unidad['id_unidades'];
            $nombre=$a_unidad['unidad'];
            echo "<p style='margin-bottom:7px;'><strong>$nombre</strong></p>";

            $b_temas="SELECT * FROM tema_unidad_materias WHERE id_unidades='$id' order by id_temalg asc";
            $e_temas=$conexion->query($b_temas);
            while ($a_temas=mysqli_fetch_array($e_temas)) {
              $tema=$a_temas['tema'];
              echo "<p style='margin-left:13px;'>$tema</p>";
            }
          }
         ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>