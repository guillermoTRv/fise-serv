<?php
    include("config.php"); 
	$s="SELECT * FROM retos_pack order by id_retos desc limit 1";
	$es=$conexion->query($s);
	$as=$es->fetch_array();
	$pregunta=$as[1];
	$respuesta=$as[2];
	$pl=$as[3];
	$place="placeholder='$pl'";
	$i=$as[5];
	$image="src='image/$i.jpg'"
 ?>