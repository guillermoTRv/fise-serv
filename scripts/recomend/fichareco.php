<?php 
	$br="SELECT id_reco,id_user,texto_reco,fecha_registro_reco FROM recomendaciones_mat WHERE id_reco='$rec'";
	$ebr=$conexion->query($br);
	$ar=$ebr->fetch_array();
	
	$id_r   =$ar[0];
	$id_us  =$ar[1];
	$texto  =$ar[2];
	$fecha  =$ar[3];


	$user="SELECT id_user,name_user FROM usuariosfise WHERE id_user='$id_us'";
	$e_user=$conexion->query($user);
	$nombre=$e_user->fetch_array();
	$gh=$nombre[1];
	echo "
		<p class='lrecom'>$texto</p>
		<small><em>Creado por: $gh el: $fecha</em></small>
			<p style='margin-top:4px;margin-bottom:-6px;'>
			<a class='lnk' href='#$rec' data-toggle='modal'>
				<span class='glyphicon glyphicon-comment'></span> Responder
			</a>&nbsp; 
			</p>

	";

	error_reporting(E_ALL ^ E_NOTICE);
            session_start();
                
            if (isset($_SESSION['usuario'])) {
                include("../scripts/recomend/form_recomendar.php");
            }
            else{ 
                include("../scripts/recomend/form_sin.php");
            }
 ?>
