<?php 
	include("../../config.php");
	
	error_reporting(E_ALL ^ E_NOTICE);
	$newname=addslashes(htmlspecialchars(strip_tags(trim($_POST['clist_txt']))));
	$eliminar=addslashes(htmlspecialchars(strip_tags(trim($_POST['eliminar_rdo']))));
	$nombre_lista=addslashes(htmlspecialchars(strip_tags(trim($_POST['nlist_txt']))));
	session_start();
	$myid=$_SESSION['id_usuario'];
	if ($newname!='' && $eliminar=='') {
		$validar="SELECT COUNT(id_user) FROM list_contentarch WHERE id_user='$myid' and name_listcontent='$newname'";
		$e_validar=$conexion->query($validar);
		$a_array=$e_validar->fetch_array();
		$x=$a_array[0];
			if ($x==0) {
				date_default_timezone_set('America/Mexico_City');
    			$fecha = date("d-m-Y H:i");
				
				$updatef="UPDATE list_contentarch SET fecha_modificacion_listcont='$fecha',name_listcontent='$newname' WHERE name_listcontent='$nombre_lista' AND id_user='$myid'";
				$eje_updatef=$conexion->query($updatef) or die("n o quedo men");

				
				header("Location:http://fiseaprende.com/usuario/users?cs=cs&tb=tb&list=$newname");		
			}
			else{
				$mensaje="elige otro nombre";
				header("Location:http://fiseaprende.com/usuario/users?cs=cs&tb=tb&list=$nombre_lista&mens=$mensaje");
			}

		
	}
	if ($newname=='' && $eliminar!='') {
		$delete="DELETE FROM list_contentarch WHERE id_user='$myid' AND name_listcontent='$nombre_lista'";
		$eje_delete=$conexion->query($delete) or die ("que paso");
		echo "se elimino la lista";
		header("Location:http://fiseaprende.com/usuario/users?cs=cs&tb=tb");
	}
 ?>