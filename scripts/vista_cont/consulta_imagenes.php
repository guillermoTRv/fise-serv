<?php 
	$consulta_id_contenidos="SELECT * FROM img_materias where id_fichamat='$cont'";
	$ejecutar_consulta_id_contenidos=$conexion->query($consulta_id_contenidos) or die();
	while ($registro_imagen=mysqli_fetch_array($ejecutar_consulta_id_contenidos)) {
	$nombre_imagen=$registro_imagen["nombre_imagen"];
	echo "<img style='max-height:700px;
' class='img-thumbnail img-responsive' alt='Responsive image' src='../imagenes/$nombre_imagen.jpg'><br><br>";}
 ?>