 <?php  
      $n_user=$_SESSION['id_usuario'];
      if ($mat=='') {
        global $b_prfichas;
        $b_prfichas="SELECT id_relpreferent,id_user,seccion,tipo_preferent,matter,url_preferent FROM preferent_user WHERE id_user='$n_user' order by id_relpreferent desc";
      }
      if ($mat!='') {
        global $b_prfichas;
        $b_prfichas="SELECT id_relpreferent,id_user,seccion,tipo_preferent,matter,url_preferent FROM preferent_user WHERE id_user='$n_user' and matter='$mat' order by id_relpreferent desc";
      }
      $e_prfichas=$conexion->query($b_prfichas);
      while ($a_prfichas=mysqli_fetch_array($e_prfichas)) {
          $id_relpreferent=$a_prfichas['id_relpreferent'];
          $materia=$a_prfichas[4];
          $tipo=$a_prfichas[3];
          $url=$a_prfichas[5];
          $nombre=$a_prfichas[2];
          echo "
            <div class='panel panel-default pan'>
                <div class='panel-body'>
                    <h4>$nombre</h4>
                        <p class='pdesc'>Materia: $materia - Tipo: $tipo</p>
                        <p><a class='fik' href='$url'><span class='glyphicon glyphicon-triangle-right'></span> Ver contenido</a>&nbsp;&nbsp;<a class='fik' href='#$id_relpreferent' data-toggle='modal'><span class='glyphicon glyphicon-cog'></span> Opciones</a></p>
                </div>
            </div>
          ";
          include("muchos/modal_prf.php");
      }
 ?>
							