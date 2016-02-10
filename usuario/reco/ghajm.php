<?php 
	include("../../config.php");
	$answ 		=	addslashes(htmlspecialchars(strip_tags(trim($_POST['answ']))));
	$materia 	=	addslashes(htmlspecialchars(strip_tags(trim($_POST['matter_slc']))));

	if ($answ!='' && $materia!='') {
		date_default_timezone_set('America/Mexico_City');
	   	$fecha 			= 	date("d-m-Y H:i");
	   	$datatime       =   date("Y-m-d H:i:s");

	   	session_start();
	   	$myid 			=   $_SESSION['id_usuario'];
	 	
	   	$vali="SELECT COUNT(*) FROM recomendaciones_mat WHERE id_user='$myid' and materia='$materia' and texto_reco='$answ'";
	   	$eje_vali=$conexion->query($vali);
	   	$anum=$eje_vali->fetch_array();
	   	if ($anum[0]==0) {
	   		$update_puntos="UPDATE usuariosfise SET point_user=point_user-2 WHERE id_user='$myid'";
			$e_update=$conexion->query($update_puntos);

	   		$insertar="INSERT INTO recomendaciones_mat(id_user,materia,texto_reco,fecha_registro_reco,data_registro_reco) values('$myid','$materia','$answ','$fecha','$datatime')";
	 		$ejecutar=$conexion->query($insertar) or die("gika");
                        $mensaje="La petición fue hecha ^_^ te aseguramos que en menos de un día alguien responderá, para ver el estado de tu petición visita la sección del panel 'lista de recomendaciones";
 	                echo  $saneado=utf8_encode($mensaje);
			
                       
	   	}
	   	else{
	   		echo "<p class='curs'>Ya escribiste esto :/</p>";

	   	}	 	
	}
 	
 ?>	