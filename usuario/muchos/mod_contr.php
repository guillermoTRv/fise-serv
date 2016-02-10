<?php
	include("../../config.php"); 
	session_start();
	$c1=addslashes(htmlspecialchars(strip_tags(trim($_POST['p_txt']))));
	$c2=addslashes(htmlspecialchars(strip_tags(trim($_POST['cp_txt']))));
	date_default_timezone_set('America/Mexico_City');
   	$fecha 			= 	date("d-m-Y H:i");
	$busqueda="SELECT COUNT(*) FROM usuariosfise WHERE pass_user='$c1' and id_user='".$_SESSION['id_usuario']."'";
	$ejecutar_b=$conexion->query($busqueda);
	$a=$ejecutar_b->fetch_array();
	$a[0];
	if ($a[0]==1) {
		echo "hola";
		$update="UPDATE usuariosfise SET pass_user='$c2',fecha_modificacion_us='$fecha' WHERE id_user='".$_SESSION['id_usuario']."'";
		$ejecutar_update=$conexion->query($update);
		$mensaje="Las contraseñas se cambiaron exitosamente";
		header("Location:http://fiseaprende.com/usuario/users?mod=mod&mens=$mensaje");
	}
	else{
		$mensaje="Escribiste mal tu anterior contraseña";
		header("Location:http://fiseaprende.com/usuario/users?mod=mod&mens=$mensaje");
	}


 ?>