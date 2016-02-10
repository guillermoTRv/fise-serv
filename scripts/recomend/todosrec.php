<?php 
    $b="SELECT id_reco,id_user,texto_reco,fecha_registro_reco FROM recomendaciones_mat WHERE materia='$materia' ORDER BY id_reco desc limit 8";
        $ej=$conexion->query($b);
        while ($a=mysqli_fetch_array($ej)) {
            $id_r=$a['id_reco'];
            $id_us=$a['id_user'];
            $texto_r=$a['texto_reco'];
            $fecha_r=$a['fecha_registro_reco'];

            $user="SELECT id_user,name_user FROM usuariosfise WHERE id_user='$id_us'";
            $e_user=$conexion->query($user);
            $nombre=$e_user->fetch_array();
            $gh=$nombre[1];

            $numcon="SELECT COUNT(*) FROM coment_reco WHERE id_reco='$id_r'";
            $eje_num=$conexion->query($numcon);
            $anum=$eje_num->fetch_array();
            $num_coment=$anum[0];
            echo "
                <div class='panel panel-default pan'>
                    <div class='panel-body'>
                        <p class='lrecom'>$texto_r</p>
                            <small><em>Creado por: $gh el: $fecha_r</em></small>
                            <p style='margin-top:4px;margin-bottom:2px;'>
                              <a class='lnk' href='#$id_r' data-toggle='modal'>
                                <span class='glyphicon glyphicon-comment'></span> Responder
                              </a>&nbsp"; 
                        include("../scripts/recomend/ver.php"); 
            echo "              <span class='glyphicon glyphicon-eye-open'></span> ver($num_coment comentarios)
                            </a>
                            </p>
                    </div>
                </div>
            ";
            error_reporting(E_ALL ^ E_NOTICE);
            session_start();
                
            if (isset($_SESSION['usuario'])) {
                include("../scripts/recomend/form_recomendar.php");
            }
            else{ 
                include("../scripts/recomend/form_sin.php");
            }
        }
 ?>