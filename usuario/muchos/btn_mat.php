<?php 
	session_start();
	$consulta="SELECT distinct matter FROM preferent_user WHERE id_user='".$_SESSION['id_usuario']."'";
	$ejecutar=$conexion->query($consulta);

		if ($tb!='' && $fichas=='') {
				echo "<li><a href='?pref=pref&tb=tb'>Todas las preferencias</a></li>";
			while($array=mysqli_fetch_array($ejecutar)){
				$nombre=$array['matter'];
				echo "<li><a href='?pref=pref&tb=tb&mat=$nombre'>$nombre</a></li>";
			}
        }
        if ($tb=='' && $fichas!='') {
        		echo "<li><a href='?pref=pref&fichas=fichas'>Todas las preferencias</a></li>";
           while($array=mysqli_fetch_array($ejecutar)){
				$nombre=$array['matter'];
				echo "<li><a href='?pref=pref&fichas=fichas&mat=$nombre'>$nombre</a></li>";
			}
     	}
?>