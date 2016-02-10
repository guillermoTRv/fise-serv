<?php 
		include("../../config.php");
		$consulta="SELECT distinct matter FROM list_content_rel WHERE id_user='7'";
		$ejecutar=$conexion->query($consulta);
		while ($array=mysqli_fetch_array($ejecutar)) {
			echo $array['matter'];
		}

	