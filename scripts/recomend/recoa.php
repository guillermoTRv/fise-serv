<style type="text/css">
    a.lnk{
        text-decoration: none;
    }
    a.lnk:hover{
        text-decoration:none;
    }
</style>
<div class="row">
   <div class='col-md-10 col-md-offset-1'>
    <h3 style="margin-bottom:14px;"><?php  $seccion="Sección "; echo utf8_encode($seccion) ?>de recomendaciones</h3>
    <?php  #
        $b="SELECT id_reco,texto_reco FROM recomendaciones_mat WHERE materia='$materia' ORDER BY id_reco desc limit 8";
        $ej=$conexion->query($b);
        while ($a=mysqli_fetch_array($ej)) {
            $id_r=$a['id_reco'];
            $texto_r=$a['texto_reco'];
            
            include("../scripts/recomend/links/alpanelreco.php");
        }
        $cont="SELECT COUNT(*) FROM recomendaciones_mat WHERE materia='$materia'";
        $ej_cont=$conexion->query($cont);
        $a_cont=$ej_cont->fetch_array();
        if ($a_cont[0]>7) {
            include("../scripts/recomend/links/alpanelrecoid.php");
        }
    ?>
    <?php include("../dinamicas/pedir_reco.php"); ?>
   </div>
</div>