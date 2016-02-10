<?php 
	include("../../config.php");
	$eliminar  =   addslashes(htmlspecialchars($_POST['eliminar_rdo']));
	$id        =   addslashes(htmlspecialchars($_POST['nu']));
	$mt        =   addslashes(htmlspecialchars($_POST['mt']));
	session_start();
	$id_usuario=$_SESSION['id_usuario'];

	if ($mt=='bas') {
		$delete="DELETE FROM ficha_contenido_materia WHERE id_fichamat='$id'";
		$e_delete=$conexion->query($delete) or die("no");
		echo "echo";

		$update="UPDATE usuariosfise SET point_user=point_user-4 WHERE id_user='$id_usuario'";
		$e_update=$conexion->query($update) or die("tampoco");
		echo "string";
		$mens="El contenido se elimino correctamente";
		header("Location:http://fiseaprende.com/usuario/users?aport=aport&mens=$mens");
	}
	else{
		$mens="error al eliminar";
		header("Location:http://fiseaprende.com/usuario/users?aport=aport&mens=$mens");
	}	

	 
 ?>