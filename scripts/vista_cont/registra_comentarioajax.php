<?php 
	include("../../config.php");
	error_reporting(E_ALL ^ E_NOTICE);
	$materia=addslashes(htmlspecialchars(strip_tags(trim($_POST['mat']))));
	$texto_coment=addslashes(htmlspecialchars(strip_tags(trim($_POST['comentario_txt']))));
	$link=addslashes(htmlspecialchars(strip_tags(trim($_POST['link_txt']))));
	if ($texto_coment!='') {
		# code...
	$id_fichamat=addslashes(htmlspecialchars(strip_tags(trim($_POST['lkj']))));
	$unidad=addslashes(htmlspecialchars(strip_tags(trim($_POST['lkji']))));
	$uscont=addslashes(htmlspecialchars(strip_tags(trim($_POST['uscont']))));

	date_default_timezone_set('America/Mexico_City');
    $fecha = date("d-m-Y H:i");
 	
 	session_start();
	$myid=$_SESSION['id_usuario'];

	$validacion="SELECT COUNT(*) FROM comentarios_mat WHERE id_fichamat='$id_fichamat' and id_user='$myid'and texto_coment='$texto_coment'";
	$ejecutar_validacion=$conexion->query($validacion);
	$avalidacion=$ejecutar_validacion->fetch_array();
	$x=$avalidacion[0];

	if ($x==0) {
		$insertar="INSERT INTO comentarios_mat(id_fichamat,id_user,texto_coment,link,fecha_registro_comentmat) VALUES('$id_fichamat','$myid','$texto_coment','$link','$fecha')";
		$ejecutar=$conexion->query($insertar) or die("No se pudo registar el comentario");

		include("noti_coment.php");
    	$notificacion="INSERT INTO notification_users(id_user,text_notification,type_notification,ulr_notificacion,fecha_notification) VALUES ('$uscont','Se ha comentado un contenido tuyo','comentario','$url_notification','$fecha')";
 		$ejecutar_notificacion=$conexion->query($notificacion) or die ("ha de estar mal escrita la consulta"); 		

 		echo "<div style='margin-left:15px;'><p class='curs'>comentario registrado exitosamente</p><p class='curs'><strong>$texto_coment</strong></p>
 			 </div>";
	}
	else{
		echo "<div style='margin-left:15px;'><p class='curs'>Ya haz comentado lo mismo</p></div>";
	}
	}
 ?>