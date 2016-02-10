<?php
	//Falta el if para condiciar si se mostraran de 5 en 5 o de 1 en adelante// 
	$myid=$_SESSION['id_usuario'];
	$b_noti="SELECT id_notification,id_user,text_notification,ulr_notificacion,fecha_notification FROM notification_users WHERE id_user='$myid' order by id_notification desc limit 7";
	$e_noti=$conexion->query($b_noti);
	while ($array=mysqli_fetch_array($e_noti)) {
		$text=$array['text_notification'];
		$url=$array['ulr_notificacion'];
		$fecha=$array['fecha_notification'];
		echo "
			<li class='lipuser'><span class='glyphicon glyphicon-asterisk'></span><a href='$url'> $text $fecha</a></li>
		";
	}
 ?>