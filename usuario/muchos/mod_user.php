<?php 
	include("../../config.php");
	session_start();
	$myid=$_SESSION['id_usuario'];
	$nom  =  addslashes(htmlspecialchars(strip_tags(trim($_POST['nombre_txt']))));
	$tipo =  addslashes(htmlspecialchars(strip_tags(trim($_POST['tipouser_slc']))));
	$pais =  addslashes(htmlspecialchars(strip_tags(trim($_POST['tipopais_slc']))));
	date_default_timezone_set('America/Mexico_City');
   	$fecha 			= 	date("d-m-Y H:i");
	
		if ($nom!='' && $tipo!='' && $pais!='') {
			$update="UPDATE usuariosfise SET name_user='$nom',type_user='$tipo',pais='$pais',fecha_modificacion_us='$fecha' WHERE id_user='$myid'";
			$e_update=$conexion->query($update);
			$mensaje="Las cambios se hicieron exitosamente, aparecerán la próxima ves que inicies sesión";
			header("Location:http://fiseaprende.com/usuario/users?mod=mod&mens=$mensaje");
		}
		if ($nom!='' && $tipo!='' && $pais=='') {
			$update="UPDATE usuariosfise SET name_user='$nom',type_user='$tipo',fecha_modificacion_us='$fecha' WHERE id_user='$myid'";
			$e_update=$conexion->query($update);
			$mensaje="Las cambios se hicieron exitosamente, aparecerán la próxima ves que inicies sesión";
			header("Location:http://fiseaprende.com/usuario/users?mod=mod&mens=$mensaje");
		}
		if ($nom!='' && $tipo=='' && $pais!='') {
			$update="UPDATE usuariosfise SET name_user='$nom',pais='$pais',fecha_modificacion_us='$fecha' WHERE id_user='$myid'";
			$e_update=$conexion->query($update);
			$mensaje="Las cambios se hicieron exitosamente, aparecerán la próxima ves que inicies sesión";
			header("Location:http://fiseaprende.com/usuario/users?mod=mod&mens=$mensaje");
		}
		if ($nom!='' && $tipo=='' && $pais=='') {
				$validacion="SELECT COUNT(*) FROM usuariosfise WHERE name_user='$nom'";
				$e_validacion=$conexion->query($validacion);
				$num=$e_validacion->fetch_array();
				$x=$num[0];
				if ($x==0) {
						$update="UPDATE usuariosfise SET name_user='$nom',fecha_modificacion_us='$fecha' WHERE id_user='$myid'";
						$e_update=$conexion->query($update);
						$mensaje="Las cambios se hicieron exitosamente, aparecerán la próxima ves que inicies sesión";
						header("Location:http://fiseaprende.com/usuario/users?mod=mod&mens=$mensaje");
				}
				else{
					$mensaje="El nombre que escribiste ya esta ocupado, porfavor elige otro";
					header("Location:http://fiseaprende.com/usuario/users?mod=mod&mens=$mensaje");
				}
		}

	
 ?>