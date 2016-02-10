<?php 
	$bc="SELECT id_fichamat,titulo,descripcion_texto FROM ficha_contenido_materia WHERE id_fichamat='$cont'";
	$ec=$conexion->query($bc) or die('no');
	$ac=$ec->fetch_array();
	$tit=$ac[1];
	$descri=$ac[2];
 ?>