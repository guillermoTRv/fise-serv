<?php 
	$myid=$_SESSION['id_usuario'];
	$b_noti="SELECT id_notification,id_user,type_notification FROM notification_users WHERE id_user='$myid' and type_notification='contenido' order by id_notification desc limit 6";
	$e_noti=$conexion->query($b_noti);
	while ($array=mysqli_fetch_array($e_noti)) {
		echo "
			<li><span class='glyphicon glyphicon-ok'></span> 4 puntos por compartir un contenido</li>
		";
	}
 ?>
                               