<?php 
	session_start();
	$consulta="SELECT distinct matter FROM list_content_rel WHERE id_user='".$_SESSION['id_usuario']."'";
	$ejecutar=$conexion->query($consulta);


	if ($tb!='' && $fichas=='') {
		while ($array=mysqli_fetch_array($ejecutar)) {
			$nombre=$array['matter'];
			echo "<li><a href='?cs=cs&tb=tb&mat=$nombre'>$nombre</a></li>";
		}
		
	}
	if ($tb=='' && $fichas!='') {
		while ($array=mysqli_fetch_array($ejecutar)) {
			$nombre=$array['matter'];
			echo "<li><a href='?cs=cs&fichas=fichas&mat=$nombre'>$nombre</a></li>";
		}
	}
?>