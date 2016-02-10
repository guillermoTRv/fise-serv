<table class="table ">
    <thead>
        <tr>   
          <th>Materia</th>
          <th>Tipo</th>
          <th>Preferencia</th>
        </tr>
    </thead>
    
    <tbody>
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
          $materia=$a_prfichas[4];
          $tipo=$a_prfichas[3];
          $url=$a_prfichas[5];
          $nombre=$a_prfichas[2];
          echo "
            <tr>
                <td>$materia</td>
                <td>$tipo</td>
                <td><a href='$url' style='text-decoration:none;'>$nombre</a></td>
            </tr>
          ";
      }
    ?>
      </tbody>
    </table>