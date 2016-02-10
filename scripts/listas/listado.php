<?php 
  $consulta="SELECT * FROM unidades_materias WHERE materia='$materia'";
  $ejecutar=$conexion->query($consulta);
      while ($imprime=mysqli_fetch_array($ejecutar)) {
        $unidad=$imprime['unidad'];
        $unidad_d=utf8_decode($imprime['unidad']);
        $unidad_l=urls_amigables($unidad_d);
        $id_unidad=$imprime['id_unidades'];

        $numtemas="SELECT count(*) FROM tema_unidad_materias WHERE id_unidades='$id_unidad'";
        $etm=$conexion->query($numtemas);
        $atm=$etm->fetch_array();
        $ntm=$atm[0];

        $nucont ="SELECT count(*) FROM ficha_contenido_materia WHERE materia='$materia' and unidad='$unidad'";
        $econt  =$conexion->query($nucont);
        $acont  =$econt->fetch_array();
        $ncont  =$acont[0];


      echo"
        <tr>
          <td><a class='aind' href='#$id_unidad' data-toggle='modal'>$unidad</a></td>
          <td>&nbsp;&nbsp;&nbsp;$ntm</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ncont</td>
        </tr>  
        ";
      echo"<div style='margin-top:50px;margin-right:-17px;' class='modal fade' id='$id_unidad' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
      include("../scripts/modal_tema.php");

                                }
?>