<?php 
	include("../../config.php");
	$eliminar=addslashes(htmlspecialchars(strip_tags(trim($_POST['eliminar_rdo']))));
	$id_relprf=addslashes(htmlspecialchars(strip_tags(trim($_POST['nu']))));

	if (isset($eliminar)) {
		$delete="DELETE FROM preferent_user WHERE id_relpreferent='$id_relprf'";
		$e_delete=$conexion->query($delete) or die("no funciono");
		header("Location:http://fiseaprende.com/usuario/users?pref=pref&fichas=fichas");
	}
 ?>