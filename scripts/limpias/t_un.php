<?php
	include("../../config.php");
	include("limpiar.php"); 
	$b_un="SELECT * FROM unidades_materias Where materia='Ecuaciones diferenciales'";
	$eb=$conexion->query($b_un);
	while ($a_un=mysqli_fetch_array($eb)) {
		$unidad_s=$a_un[2];
		echo "<br>".$unidad_sl=utf8_decode($a_un[2]);
		echo "<br>".$unidad_l=urls_amigables($unidad_sl);

			#$ia="INSERT INTO uni_limpias(un_limpia,un_sucia) VALUES('$unidad_l','$unidad_s')";
		    #$e_ia=$conexion->query($ia) or die("que pex");
		echo "si";

	}
 ?>
