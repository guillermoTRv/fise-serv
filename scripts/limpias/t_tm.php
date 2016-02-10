<?php 
	include("../../config.php");
	include("limpiar.php"); 
 	$b_tm="SELECT * FROM tema_unidad_materias where id_unidades>200";
	$ebt=$conexion->query($b_tm);
	while ($a_tm=mysqli_fetch_array($ebt)) {
	echo "<br>".$tema_s=$a_tm[2];
	echo "<br>".$tema_sl=utf8_decode($a_tm[2]);
	echo "<br>".$tema_l=urls_amigables($tema_sl);

		#$ia="INSERT INTO tm_limpias(tm_limpia,tm_sucia) VALUES('$tema_l','$tema_s')";
		    $e_ia=$conexion->query($ia) or die("que pex");
		#echo "si ";
			

	}
 ?>