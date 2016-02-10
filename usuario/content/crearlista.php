<?php 
	include("../../config.php");
	$name_lista=addslashes(htmlspecialchars(strip_tags(trim($_POST['n_list_txt']))));
	session_start();
	$myid=$_SESSION['id_usuario'];
	if ($name_lista!='') {
		$validacion="SELECT COUNT(id_user) FROM list_contentarch WHERE id_user='$myid' and name_listcontent='$name_lista'";
		$ejecutar_v=$conexion->query($validacion);
		$array=$ejecutar_v->fetch_array();
		$x=$array[0];

		if ($x==0) {
			date_default_timezone_set('America/Mexico_City');
	    	$fecha = date("d-m-Y H:i");
			$url="http://fiseaprende.com/usuario/users?cs=cs&tb=tb&list=".$name_lista."";	

			$insert_lista="INSERT INTO list_contentarch(id_user,name_listcontent,fecha_registro_listcont,fecha_modificacion_listcont) VALUES('$myid','$name_lista','$fecha','0')";
			$e_inserto=$conexion->query($insert_lista);

			$notificacion="INSERT INTO notification_users(id_user,text_notification,type_notification,ulr_notificacion,fecha_notification) VALUES('$myid','Creaste una nueva lista','lista','$url','$fecha')";
			$e_noti=$conexion->query($notificacion) or die("joder");

			$update_puntos="UPDATE usuariosfise SET point_user=point_user-2 WHERE id_user='$myid'";
			$e_update=$conexion->query($update_puntos);

			echo "<p class='curs'>La lista se agrego correctamente</p>
					<a class='curs' href='http://fiseaprende.com/usuario/users?cs=cs&tb=tb&list=$name_lista'>Ver $name_lista</a>";
		}
		else{
			echo "<p class='curs'>Elige otro nombre</p>";
		}
	}
	else{
		echo "<p class='curs'>No has escrito nada</p>";
	}
		

 ?>