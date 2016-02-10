<?php 
	include("../../config.php");
	echo $texto=addslashes(htmlspecialchars(strip_tags(trim($_POST['text']))));
	echo $link=addslashes(htmlspecialchars(strip_tags(trim($_POST['url']))));
 	echo $id_reco=addslashes(htmlspecialchars(strip_tags(trim($_POST['lkj']))));
 	echo $responde=addslashes(htmlspecialchars(strip_tags(trim($_POST['gh']))));	

 	date_default_timezone_set('America/Mexico_City');
	echo $fecha 			= 	date("d-m-Y H:i");
	echo $datatime          =   date("Y-m-d H:i:s");

	session_start();
	$myid 			=   $_SESSION['id_usuario'];

	$vali="SELECT COUNT(*) FROM coment_reco WHERE id_reco='$id_reco' and id_user='$myid' and texto_creco='$texto' and link_reco='$link'";
	$eje_vali=$conexion->query($vali);
	$anum=$eje_vali->fetch_array();
	if ($anum[0]==0) {
		$update_puntos="UPDATE usuariosfise SET point_user=point_user+2 WHERE id_user='$myid'";
			$e_update=$conexion->query($update_puntos);
		$insertar="INSERT INTO coment_reco(id_reco,id_user,texto_creco,link_reco,voto,fecha_reg_creco,data_registro_creco,responde) VALUES('$id_reco','$myid','$texto','$link',0,'$fecha','$datatime','$responde')";
		$ejecutar=$conexion->query($insertar) or die("no");
                $bnu="SELECT id_user,name_user FROM usuariosfise WHERE name_user='$responde'";
		$enu=$conexion->query($bnu);
		$tnu=$enu->fetch_array();
		echo "<br>".$nu=$tnu[0]."<br>";
		
                $materia=addslashes(htmlspecialchars(strip_tags(trim($_POST['mt']))));
		include("links/url_notificaciones.php");
		$noti="INSERT INTO notification_users(id_user,text_notification,type_notification,ulr_notificacion,fecha_notification) VALUES('$nu','Han respondido a una petición de recomendación tuya','recomendacion','$notif','$fecha')";
		$eje_noti=$conexion->query($noti) or die("no");
		include("mt_return.php");
	}
	else{
		include("mt_return.php");	
	}

	

 ?>